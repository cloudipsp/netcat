<?php

class nc_payment_system_fondy extends nc_payment_system {

	const ERROR_MERCHANT_ID = NETCAT_MODULE_PAYMENT_FONDY_ERROR_MERCHANT_ID_IS_NOT_VALID;
	const ERROR_SIGN_IS_NOT_VALID = NETCAT_MODULE_PAYMENT_FONDY_ERROR_SIGN_IS_NOT_VALID;

	protected $automatic = true;
	protected $accepted_currencies = array( 'USD', 'EUR', 'RUB', 'RUR', 'UAH', 'GBP' );
	protected $currency_map = array( 'RUR' => 'RUB' );
	protected $settings = array(
		'merchant_id'  => null,
		'secret_key'   => null,
		'delayed'      => 'Y',
		'lifetime'     => 36000,
		'response_url' => null
	);
	protected $callback_response = array();

	public function execute_payment_request( nc_payment_invoice $invoice ) {

		$currency_code = $this->get_currency_code( $invoice->get_currency() );

		$script_url = nc_get_scheme() . '://' . $_SERVER['HTTP_HOST'] . nc_module_path( 'payment' ) .
		              'callback.php?paySystem=nc_payment_system_fondy&invoice_id=' . $invoice->get_id();

		$lifetime = $this->get_setting( 'lifetime' ) ? $this->get_setting( 'lifetime' ) : 36000;
		$delayed  = $this->get_setting( 'delayed' ) == 'N' ? 'N' : 'Y';
		$data     = array(
			'merchant_id'         => $this->get_setting( 'merchant_id' ),
			'order_id'            => $invoice->get( 'order_id' ) . '#' . time(),
			'currency'            => $currency_code,
			'delayed'             => $delayed,
			'amount'              => round( $invoice->get_amount( '%0.2F' ) * 100 ),
			'lifetime'            => $lifetime,
			'order_desc'          => mb_substr( $invoice->get_description(), 0, 255, 'UTF-8' ),
			'server_callback_url' => $script_url . '&type=check',
			'response_url'        => $script_url . '&type=result'
		);

		if ( $this->get_setting( 'response_url' ) ) {
			$data['response_url'] = $this->get_setting( 'response_url' );
		}

		if ( preg_match( '/^.+@.+\..+$/', $invoice->get( 'customer_email' ) ) ) {
			$data['sender_email'] = $invoice->get( 'customer_email' );
		}

		$data['signature'] = fondycsl::getSignature( $data, $this->get_setting( 'secret_key' ) );

		$url = $this->get_chekout_url( $data );

		header( 'Location: ' . $url );
		exit;
	}

	/**
	 * @param nc_payment_invoice $invoice
	 */
	public function on_response( nc_payment_invoice $invoice = null ) {
		return false;
	}

	/**
	 *
	 */
	public function validate_payment_request_parameters() {
		if ( ! $this->get_setting( 'merchant_id' ) ) {
			$this->add_error( nc_payment_system_fondy::ERROR_MERCHANT_ID );
		} elseif ( ! $this->get_setting( 'secret_key' ) ) {
			$this->add_error( 'secret_key обязателен к заполнению' );
		}

	}

	/**
	 * @param nc_payment_invoice $invoice
	 */
	public function validate_payment_callback_response( nc_payment_invoice $invoice = null ) {

		if ( empty( $_POST ) ) {
			$callback = json_decode( file_get_contents( "php://input" ) );
			if ( empty( $callback ) ) {
				die( 'post is empty!' );
			}
			$_POST = array();
			foreach ( $callback as $key => $val ) {
				$_POST[ $key ] = $val;
			}
		}

		$fondySettings = array(
			'merchant_id' => $this->get_setting( 'merchant_id' ),
			'secret_key'  => $this->get_setting( 'secret_key' )
		);
		if ( empty( $_POST['signature'] ) || ! fondycsl::isPaymentValid( $fondySettings, $_POST ) ) {
			die( 'signature incorrect' );
		}
		list( $invoice_id ) = explode( fondycsl::ORDER_SEPARATOR, $_POST['order_id'] );
		if ( ! $invoice ) {
			$response_description = 'Invoice ' . ( $invoice_id ) . ' not exist';
			die( $response_description );
		}

		$invoice_status_id             = $invoice->get( 'status' );
		$unacceptable_invoice_statuses = array(
			nc_payment_invoice::STATUS_SUCCESS  => 'Счёт уже оплачен',
			nc_payment_invoice::STATUS_REJECTED => 'Счёт отклонён',
		);

		if ( isset( $unacceptable_invoice_statuses[ $invoice_status_id ] ) ) {
			$response_description = $unacceptable_invoice_statuses[ $invoice_status_id ];
			die( $response_description );
		}

		switch ( $_POST['order_status'] ) {
			case 'processing':
				$invoice->set( 'status', nc_payment_invoice::STATUS_WAITING )->save();
				$response_description = 'order still processing';
				break;
			case 'declined':
				$this->on_payment_rejected( $invoice );
				$response_description = 'order declined';
				break;
			case 'expired':
				$this->on_payment_rejected( $invoice );
				$response_description = 'order expired';
				break;
			case 'approved':
				$this->on_payment_success( $invoice );
				$response_description = 'Payment accepted';
				break;

			default:
				die( 'unknown request type' );
		}
		if ( $this->get_response_value( 'type' ) == 'result' ) {
			echo "Thank you for shopping";
		}
		die ( $response_description );
	}

	/**
	 * @return bool|nc_payment_invoice
	 */
	public function load_invoice_on_callback() {

		list( $invoice_id ) = explode( fondycsl::ORDER_SEPARATOR, $this->get_response_value( 'order_id' ) );

		return $this->load_invoice( $invoice_id );
	}

	function get_chekout_url( $params ) {

		if ( is_callable( 'curl_init' ) ) {
			$ch = curl_init();
			curl_setopt( $ch, CURLOPT_URL, 'https://api.fondy.eu/api/checkout/url/' );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-type: application/json' ) );
			curl_setopt( $ch, CURLOPT_POST, true );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( array( 'request' => $params ) ) );
			$result   = json_decode( curl_exec( $ch ) );
			$httpCode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
			if ( $httpCode != 200 ) {
				$error = "Return code is {$httpCode} \n" . curl_error( $ch );
				throw new Exception( 'API request error: ' . $error );
			}
			if ( $result->response->response_status == 'failure' ) {
				throw new Exception( 'API request error: ' . $result->response->error_message );
			}
			$url = $result->response->checkout_url;

			return $url;
		} else {
			throw new Exception( 'Curl not enabled' );
		}

	}
}

class fondycsl {
	const RESPONCE_SUCCESS = 'success';
	const RESPONCE_FAIL = 'failure';
	const ORDER_SEPARATOR = '#';
	const SIGNATURE_SEPARATOR = '|';
	const ORDER_APPROVED = 'approved';
	const ORDER_DECLINED = 'declined';

	public static function getSignature( $data, $password, $encoded = true ) {
		$data = array_filter( $data, function ( $var ) {
			return $var !== '' && $var !== null;
		} );
		ksort( $data );
		$str = $password;
		foreach ( $data as $k => $v ) {
			$str .= self::SIGNATURE_SEPARATOR . $v;
		}
		if ( $encoded ) {
			return sha1( $str );
		} else {
			return $str;
		}
	}

	public static function isPaymentValid( $fondySettings, $response ) {
		if ( $fondySettings['merchant_id'] != $response['merchant_id'] ) {
			return false;
		}
		$responseSignature = $response['signature'];
		if ( isset( $response['response_signature_string'] ) ) {
			unset( $response['response_signature_string'] );
		}
		if ( isset( $response['signature'] ) ) {
			unset( $response['signature'] );
		}
		if ( fondycsl::getSignature( $response, $fondySettings['secret_key'] ) != $responseSignature ) {
			return false;
		}

		return true;
	}
}