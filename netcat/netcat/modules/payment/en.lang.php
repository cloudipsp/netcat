<?php
/* Module */
define("NETCAT_MODULE_PAYMENT_NAME", "Payment module");
define("NETCAT_MODULE_PAYMENT_DESCRIPTION", "Provides integration with payment processing systems");

/* Events description */
define("NETCAT_MODULE_PAYMENT_EVENT_ON_INIT", "Payment system initialization");
define("NETCAT_MODULE_PAYMENT_EVENT_BEFORE_PAY_REQUEST", "Preparing payment request");
define("NETCAT_MODULE_PAYMENT_EVENT_AFTER_PAY_REQUEST", "Executing payment request");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_REQUEST_ERROR", "Error in payment request parameters");
define("NETCAT_MODULE_PAYMENT_EVENT_BEFORE_PAY_CALLBACK", "Preparing to process payment system callback response");
define("NETCAT_MODULE_PAYMENT_EVENT_AFTER_PAY_CALLBACK", "Payment system callback response processing");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_CALLBACK_ERROR", "Error in callback response parameters");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_SUCCESS", "Payment complete");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_FAILURE", "Payment failed");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_REJECTED", "Payment rejected");

define("NETCAT_MODULE_PAYMENT_ADMIN_PAYMENT_SYSTEMS", "Payment systems");
define("NETCAT_MODULE_PAYMENT_ADMIN_PAYMENT_SYSTEM_PARAMS", "&lsquo;%s&rsquo; settings");

/* Order description string */
define("NETCAT_MODULE_PAYMENT_PAYMENT_DESCRIPTION", "Payment for the order #%s");
define("NETCAT_MODULE_PAYMENT_PAYMENT_CHARGE", "Money transfer fee");

/* Error messages */
define("NETCAT_MODULE_PAYMENT_REQUEST_ERROR", "Payments module is not configured. Supported payment systems: Payonline, WebMoney, Robokassa, QIWI, PayPal, Paymaster, MailMoney, Yandex.Money, Assist, Platidoma, Platron");
define("NETCAT_MODULE_PAYMENT_ORDER_ID_IS_NOT_UNIQUE", "Order identifier is not unique");
define("NETCAT_MODULE_PAYMENT_ORDER_ID_IS_NULL", "Parameter 'OrderId' must be set");
define("NETCAT_MODULE_PAYMENT_INCORRECT_PAYMENT_AMOUNT", "Payment amount is not set or is incorrect");
define("NETCAT_MODULE_PAYMENT_INCORRECT_PAYMENT_CURRENCY", "Payment system does not accept payments in the &quot;%s&quot; currency");
define("NETCAT_MODULE_PAYMENT_CANNOT_LOAD_INVOICE_ON_CALLBACK", "Payment system returned wrong invoice ID");

/* admin */
define("NETCAT_MODULE_PAYMENT_PAYMENT_SYSTEM", "Payment system");

define("NETCAT_MODULE_PAYMENT_ADMIN_SETTINGS", "Settings");
define("NETCAT_MODULE_PAYMENT_ADMIN_BUTTON_SAVE", "Save");
define("NETCAT_MODULE_PAYMENT_ADMIN_SETTINGS_SAVED", "Settings saved");
define("NETCAT_MODULE_PAYMENT_ADMIN_TOTALS", "Totals");
define("NETCAT_MODULE_PAYMENT_ADMIN_STATUS", "Status");
define("NETCAT_MODULE_PAYMENT_ADMIN_COPY_TO_CLIPBOARD", "copy");
define("NETCAT_MODULE_PAYMENT_ADMIN_BUTTON_BACK", "Back");
define("NETCAT_MODULE_PAYMENT_ADMIN_BUTTON_TO_SYSTEM_LIST", "To payment system list");
define("NETCAT_MODULE_PAYMENT_ADMIN_CREATED", "Created");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICES", "Invoices");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE", "Invoice");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_SEARCH_PLACEHOLDER", "Search by invoice or order button and client data");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_SEARCH_BUTTON", "Find");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_SOURCE", "Order");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_AMOUNT", "Amount to be paid");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_AMOUNT_SHORT", "Amount");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CUSTOMER", "Client");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_EMPTY_LIST", "There are no invoices on the selected site");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_NO_MATCH", "There are no invoices matching specified criteria");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_LAST_RESPONSE", "last response");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_PAYMENT_LINK", "Payment link");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_BALANCE", "To be paid&nbsp;/ to refund");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_MANUAL_REFUND", "To create cash register receipts and for the correct payment balance calculation do a manual refund in the payment system, then set &lsquo;paid&rsquo; status for this invoice");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CHANGE", "change status");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ALREADY_PAID", "Paid");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ON_STATUS_CHANGE_SELL_RECEIPT", "If invoice status will be changed to &lsquo;paid&rsquo;, a sell receipt will be sent to the cash register (amount: <strong>%s</strong>)");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ON_STATUS_CHANGE_SELL_REFUND_RECEIPT", "If invoice status will be changed to &lsquo;paid&rsquo;, a refund receipt will be sent to the cash register (amount: <strong>%s</strong>)");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ON_STATUS_CHANGE_SELL_SELL_REFUND_RECEIPTS", "If invoice status will be changed to &lsquo;paid&rsquo;, a sell receipt (amount: <strong>%s</strong>) and a refund receipt (amount: <strong>%s</strong>) will be sent to the cash register");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_REFUND_PAYMENT_SYSTEM_NO_RECEIPT_WARNING", "If invoice status will be changed to &lsquo;paid&rsquo;, a refund receipt <strong>will not be created</strong> automatically, because the payment system does not support this feature. A connection to the register service will be required to create a refund receipt.");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_INCORRECT_PHONE", "incorrect number");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_INCORRECT_EMAIL", "incorrect address");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_BUTTON", "Refund and correction");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUB_HEADER", "New correction invoice (order %s)");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_CREATE_BUTTON", "Create correction invoice");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_HEADER", "Changing invoice items for order");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_FULL_REFUND_BUTTON", "Full refund");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_PRIMARY_INVOICE", "Invoice to be corrected:");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_CANCELLED_INVOICES", "After correction invoice creation following non-paid invoices will be cancelled:");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_AFTER", "After change");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUM", "Amount");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_FULL_REFUND_CHECKBOX", "Full refund?");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_NO_CHANGES", "Correction invoice was not created because invoices items have not been changed");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_ADD_ITEMS", "Add invoice items");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_ADD_ITEM", "add");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_REMOVE_ITEM", "remove");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUMMARY_AMOUNT", "New correction invoice amount");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUMMARY_EXTRA", "to be paid by the client");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUMMARY_REFUND", "to be refunded to the client");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEMS", "Invoice items");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_BALANCE", "Invoice item balance for orders ");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_NAME", "Name");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_PRICE", "Price");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_QTY", "Quantity");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_TOTALS", "Totals");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_VAT_RATE", "VAT rate");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_VAT_AMOUNT", "VAT amount");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_VAT_NONE", "none");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_ERROR", "error");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_NEW", "new, not sent to the payment system");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_NEW_SHORT", "new");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_SENT", "sent to the payment system");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_SENT_SHORT", "sent");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_SUCCESS", "paid");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CALLBACK_ERROR", "error while processing callback response from the payment system");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CALLBACK_WRONG_SUM", "amount error in the callback response from the payment system");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_WAITING", "waiting for the payment system response");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_REJECTED", "rejected by the payment system");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CANCELLED", "cancelled");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ALL_FOR_ORDER", "All order invoices");

define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPTS", "Receipts");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT", "Чек");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_EMPTY_LIST", "На выбранном сайте не было создано ни одного чека");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_ITEMS", "Позиции чека");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_EVENTS", "События");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_RESEND_BUTTON", "Повторно отправить в ККМ");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_RESEND_CONFIRMATION", "Чек %s будет повторно отправлен в ККМ (через %s).");

define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_ID", "ID");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_SHIFT_NUMBER", "Номер смены");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_SERIAL_NUMBER", "Порядковый номер");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_REGISTRATION_TIME", "Время регистрации");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_AMOUNT", "Сумма");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_BALANCE", "Баланс по зарегистрированным чекам");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_REGISTER", "Кассовый сервис");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_FISCAL_STORAGE_NUMBER", "Номер фискального накопителя");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_REGISTER_NUMBER", "Регистрационный номер ККМ");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_FISCAL_DOCUMENT_NUMBER", "Фискальный номер документа");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_FISCAL_DOCUMENT_ATTRIBUTE", "Фискальный признак документа");

define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_STATUS_NEW", "новый");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_STATUS_PENDING", "отправлен");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_STATUS_REGISTERED", "зарегистрирован");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_STATUS_FAILED", "ошибка");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_STATUS_CONNECTION_ERROR", "нет связи");
define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPT_STATUS_CANCELLED", "отменён");

define("NETCAT_MODULE_PAYMENT_RECEIPT_OPERATION", "Тип");
define("NETCAT_MODULE_PAYMENT_RECEIPT_OPERATION_SELL", "приход");
define("NETCAT_MODULE_PAYMENT_RECEIPT_OPERATION_SELL_REFUND", "возврат прихода");

define("NETCAT_MODULE_PAYMENT_ADMIN_LOG", "Event log");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_TIME", "Time");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_EVENT", "Event");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_RECEIPT_STATUS", "Receipt status");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_SHOW_DETAILS", "details");

define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_CREATED", "Создан чек №%s");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_SENT", "Чек №%s отправлен на ККМ");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_NO_REPLY", "Нет ответа от ККМ (чек №%s)");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_GOT_REPORT", "Получен отчёт по чеку №%s");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_ERROR", "Ошибка обработки чека №%s");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_CANCELLED", "Обработка чека №%s отменена");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_Z_REPORT", "Создание Z-отчёта");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_OPEN_SHIFT", "Открытие смены");

define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTERS", "Registers");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_PARAMS_SAVED", "Параметры успешно сохранены");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_SETTINGS", "Настройки интеграции с сервисом &laquo;%s&raquo;");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_SETTINGS_COMPANY_NAME", "Наименование продавца");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_SETTINGS_INN", "ИНН");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_SETTINGS_EMAIL_RECEIPT_TO_CUSTOMER", "Отправлять клиенту копию чека по электронной почте");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_SETTINGS_EMAIL_FOR_WARNINGS", "Адрес электронной почты для уведомлений о проблемах с чеками");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_COMMON_SETTINGS", "Общие настройки интеграции с кассами");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_CHECKED", "Выставлять чеки");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_CURRENT", "Используемый кассовый сервис");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_GOTO_SETTINGS", "К настройкам кассового сервиса");
define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTER_FILL_SETTINGS_TO_ACCESS", "Заполните общие настройки, чтобы перейти к настройкам кассового сервиса.");

define("NETCAT_MODULE_PAYMENT_REGISTER_SN", "Система налогообложения");
define("NETCAT_MODULE_PAYMENT_REGISTER_SN_OSN", "Традиционная");
define("NETCAT_MODULE_PAYMENT_REGISTER_SN_USN_INCOME", "Упрощённая (доходы)");
define("NETCAT_MODULE_PAYMENT_REGISTER_SN_USN_INCOME_OUTCOME", "Упрощённая (доходы минус расходы)");
define("NETCAT_MODULE_PAYMENT_REGISTER_SN_ENVD", "Единый налог на вменённый доход");
define("NETCAT_MODULE_PAYMENT_REGISTER_SN_ESN", "Единый сельскохозяйственный налог");
define("NETCAT_MODULE_PAYMENT_REGISTER_SN_PATENT", "Патентная");

define("NETCAT_MODULE_PAYMENT_REGISTER_MAIL_ADMIN_WARNING_SUBJECT", "Ошибка при попытке регистрации кассового чека");
define("NETCAT_MODULE_PAYMENT_REGISTER_MAIL_ADMIN_WARNING_BODY_INTRO", "Произошла ошибка при попытке регистрации кассового чека:");
define("NETCAT_MODULE_PAYMENT_REGISTER_MAIL_ADMIN_WARNING_BODY_LINK", "Подробные сведения о чеке доступны в панели управления:");
define("NETCAT_MODULE_PAYMENT_REGISTER_MAIL_RECEIPT_SUBJECT", "Электронная копия чека");

define("NETCAT_MODULE_PAYMENT_REGISTER_ATOL_LOGIN", "Логин");
define("NETCAT_MODULE_PAYMENT_REGISTER_ATOL_PASSWORD", "Пароль");
define("NETCAT_MODULE_PAYMENT_REGISTER_ATOL_GROUP", "Группа касс");
define("NETCAT_MODULE_PAYMENT_REGISTER_ATOL_PAYMENT_ADDRESS", "Адрес места расчётов (доменное имя сайта)");

define("NETCAT_MODULE_PAYMENT_REGISTER_ECOMKASSA_URL", "URL сервиса");
define("NETCAT_MODULE_PAYMENT_REGISTER_ECOMKASSA_LOGIN", "Логин");
define("NETCAT_MODULE_PAYMENT_REGISTER_ECOMKASSA_PASSWORD", "Пароль");
define("NETCAT_MODULE_PAYMENT_REGISTER_ECOMKASSA_GROUP", "ID магазина");
define("NETCAT_MODULE_PAYMENT_REGISTER_ECOMKASSA_PAYMENT_ADDRESS", "Адрес места расчётов (доменное имя сайта)");

define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_HEADER", "Название организации для заголовка чека");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_URL", "Адрес KKM сервера (с указанием протокола и порта, например: &quot;http://1.2.3.4:5893&quot;)");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_LOGIN", "Логин");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_PWD", "Пароль");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_NUMDEVICE", "Номер устройства. Если не заполнено, то первое не блокированное на сервере");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_KKMINN", "ИНН ККМ для поиска. Если не заполнено, то ККМ ищется только по NumDevice; если NumDevice = 0, а InnKkm заполнено, то ККМ ищется только по InnKkm");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_KKMNUM", "Заводской номер ККМ для поиска. Если не заполнено, то ККМ ищется только по NumDevice");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_TIMEOUT", "Время (в секундах) ожидания выполнения команды (по умолчанию 30 с)");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_CASHIER", "ФИО кассира (тег ОФД 1021)");
define("NETCAT_MODULE_PAYMENT_REGISTER_KKMSRV_SHIFT_START_TIME", "Время снятия Z-отчёта и открытия новой смены (в формате ЧЧ:ММ)");

/* Payment common messages */
define("NETCAT_MODULE_PAYMENT_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid form signature");
define("NETCAT_MODULE_PAYMENT_ERROR_INVOICE_NOT_FOUND", "Invoice not found in NetCat");
define("NETCAT_MODULE_PAYMENT_ERROR_INVALID_SUM", "Invalid sum");
define("NETCAT_MODULE_PAYMENT_ERROR_ALREADY_PAID", "Invoice has already been paid");
define("NETCAT_MODULE_PAYMENT_ERROR_AUTH_REQUIRED", "Please login to pay the invoice");
define("NETCAT_MODULE_PAYMENT_ERROR_WRONG_USER", "This invoice was issued to another customer");

define("NETCAT_MODULE_PAYMENT_SETTINGS_LINK", "Set payment system parameters");

/* Payment form texts */
define("NETCAT_MODULE_PAYMENT_FORM_PAY", "Pay");
define("NETCAT_MODULE_PAYMENT_FORM_PAY_SELECT", "Choose payment type");

/* Assist */
define("NETCAT_MODULE_PAYMENT_ASSIST_ERROR_CHECKVALUE_IS_NOT_VALID", "Invalid value of the 'CheckValue' parameter");
define("NETCAT_MODULE_PAYMENT_ASSIST_ERROR_ASSIST_SHOP_ID", "Parameter 'AssistShopId' must be numeric");
define("NETCAT_MODULE_PAYMENT_ASSIST_ERROR_ASSIST_SECRET_WORD_IS_NULL", "Parameter 'AssistSecretWord' must be set");

/* Mail */
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_SIGNATURE_IS_NOT_VALID", "Not valid signature");
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_SHOP_ID", "Parameter 'MailShopID' must be numeric");
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_SECRET_KEY_IS_NULL", "Parameter 'MailSecretKey' must be set");
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_HASH_IS_NULL", "Parameter 'MailHash' must be set");

/* Paymaster */
define("NETCAT_MODULE_PAYMENT_PAYMASTER_ERROR_MERCHANTID_IS_NOT_VALID", "Invalid value of the 'LMI_MERCHANT_ID' parameter");
define("NETCAT_MODULE_PAYMENT_PAYMASTER_ERROR_LMI_PAYMENT_DESC_IS_LONG", "The length of Parameter 'LMI_PAYMENT_DESC' must be less than 255");
define("NETCAT_MODULE_PAYMENT_PAYMASTER_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid value of the 'LMI_HASH' parameter");

/* Payonline */
define("NETCAT_MODULE_PAYMENT_PAYONLINE_ERROR_MERCHANT_ID", "Parameter 'MerchantId' must be numeric");
define("NETCAT_MODULE_PAYMENT_PAYONLINE_ERROR_PRIVATE_SECURITY_KEY_IS_NULL", "Parameter 'PrivateSecurityKey' must be set");
define("NETCAT_MODULE_PAYMENT_PAYONLINE_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid value of the 'SecurityKey' parameter");

/* Paypal */
define("NETCAT_MODULE_PAYMENT_PAYPAL_ERROR_SOME_PARAMETERS_ARE_NOT_VALID", "Some parameter is incorrect");
define("NETCAT_MODULE_PAYMENT_PAYPAL_ERROR_PAYPAL_MAIL_IS_NOT_VALID", "Paypal email is incorrect");
define("NETCAT_MODULE_PAYMENT_PAYPAL_ERROR_PAYPAL_IPN_NOT_VERIFIED", "Request was not verified by PayPal");

/* Platidoma */
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PGSHOPID_IS_NOT_VALID", "Parameter 'pd_shop_id' must be set");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PGLOGIN_IS_NOT_VALID", "Parameter 'pd_login' must be set");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PGGATEPASSWORD_IS_NOT_VALID", "Parameter 'pd_gate_password' must be set");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PRIVATE_SECURITY_KEY_IS_NULL", "Parameter 'PrivateSecurityKey' must be set");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PRIVATE_KEY_IS_NOT_VALID", "Invalid value of the 'pd_rnd' parameter");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid value of the 'pd_sign' parameter");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_ORDER_ID_IS_LONG", "The length of Parameter 'OrderId' must be less than 50");

/* QIWI */
define("NETCAT_MODULE_PAYMENT_QIWI_ERROR_AMOUNT_TOO_LARGE", 'Exceeds maximum amount of payment - 15 000 rub');
define("NETCAT_MODULE_PAYMENT_QIWI_ERROR_EMPTY_SETTING", "Payment system parameter %s is empty");
define("NETCAT_MODULE_PAYMENT_QIWI_ERROR_WRONG_PHONE", "Phone number format is wrong");
define("NETCAT_MODULE_PAYMENT_QIWI_SET_PHONE", "Please enter your phone number as: +71234567890 (if you don't have a QIWI-wallet yet, it will be created)");

/* Robokassa */
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_MRCHLOGIN_IS_NOT_VALID", "Invalid value of the 'MrchLogin' parameter");
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_INVID_IS_NOT_VALID", "Parameter 'InvId' must be numeric");
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_INVDESC_ID_IS_LONG", "The length of Parameter 'InvDesc' must be less than 100");
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid value of the 'SignatureValue' parameter");

/* Webmoney */
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_PURSE_IS_NOT_VALID", "Invalid value of the 'LMI_PAYEE_PURSE' parameter");
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid value of the 'LMI_HASH' parameter");
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_DESCRIPTION_IS_LONG", "Length of the invoice description must me less than 255 characters");
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_UNSUPPORTED_HASH_METHOD", "Used signature hashing method is not supported");

/* Yandex_Email */
define("NETCAT_MODULE_PAYMENT_YANDEX_EMAIL_ERROR_RECEIVER", "Parameter 'Receiver' must be set");

/* Yandex CPP */
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_SHOPID_IS_NOT_VALID", "Invalid value of the 'shopId' parameter");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_SCID_IS_NOT_VALID", "Invalid value of the 'scid' parameter");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_SHOP_PASSWORD_IS_NOT_VALID", "Invalid value of the 'shopPassword' parameter");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_ORDER_ID_IS_NOT_VALID", "Invalid value of the 'orderNumber' parameter");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_AMOUNT", "Parameter 'Amount' must be numeric");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Invalid value of the 'md5' parameter");

/* RBK Money */
define("NETCAT_MODULE_PAYMENT_RBK_ERROR_ESHOPID_IS_NOT_VALID", "Invalid value of the 'eshopID' parameter");
define("NETCAT_MODULE_PAYMENT_RBK_ERROR_AMOUNT", "Parameter 'Amount' must be numeric");
define("NETCAT_MODULE_PAYMENT_RBK_ERROR_ORDER_ID_IS_NOT_VALID", "Invalid value of the 'orderID' parameter");

/* Platron */
define("NETCAT_MODULE_PAYMENT_PLATRON_ERROR_MERCHANT_ID_IS_NOT_VALID", "Invalid value of the 'merchant_id' parameter");
define("NETCAT_MODULE_PAYMENT_PLATRON_ERROR_SECRET_KEY_IS_NOT_VALID", "Invalid value of the 'secret_key' parameter");
define("NETCAT_MODULE_PAYMENT_PLATRON_ERROR_SIGN_IS_NOT_VALID", "Invalid signature");

/* PayAnyWay */
define("NETCAT_MODULE_PAYMENT_PAYANYWAY_ERROR_MNT_ID_IS_NOT_VALID", "Invalid value of the 'MNT_ID' parameter");

/* Fondy */
define("NETCAT_MODULE_PAYMENT_FONDY_ERROR_MERCHANT_ID_IS_NOT_VALID", "Invalid value of the 'merchant_id' parameter");
define("NETCAT_MODULE_PAYMENT_FONDY_ERROR_SIGN_IS_NOT_VALID", "Invalid signature");
