<?php
/* Module */
define("NETCAT_MODULE_PAYMENT_NAME", "Приём платежей");
define("NETCAT_MODULE_PAYMENT_DESCRIPTION", "Модуль для приёма платежей");

/* Events description */
define("NETCAT_MODULE_PAYMENT_EVENT_ON_INIT", "Инициализация платёжной системы");
define("NETCAT_MODULE_PAYMENT_EVENT_BEFORE_PAY_REQUEST", "Подготовка запроса на оплату");
define("NETCAT_MODULE_PAYMENT_EVENT_AFTER_PAY_REQUEST", "Запрос на оплату");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_REQUEST_ERROR", "Ошибка в параметрах запроса на оплату");
define("NETCAT_MODULE_PAYMENT_EVENT_BEFORE_PAY_CALLBACK", "Подготовка к обработке callback-ответа платёжной системы");
define("NETCAT_MODULE_PAYMENT_EVENT_AFTER_PAY_CALLBACK", "Обработка callback-ответа платёжной системы");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_CALLBACK_ERROR", "Ошибка в параметрах при callback-ответе");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_SUCCESS", "Платёж успешно проведён");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_FAILURE", "Оплата не осуществлена");
define("NETCAT_MODULE_PAYMENT_EVENT_ON_PAY_REJECTED", "Платёж отклонён");

define("NETCAT_MODULE_PAYMENT_ADMIN_PAYMENT_SYSTEMS", "Платёжные системы");
define("NETCAT_MODULE_PAYMENT_ADMIN_PAYMENT_SYSTEM_PARAMS", "Параметры платёжной системы &laquo;%s&raquo;");

/* Order description string */
define("NETCAT_MODULE_PAYMENT_PAYMENT_DESCRIPTION", "Оплата заказа №%s");
define("NETCAT_MODULE_PAYMENT_PAYMENT_CHARGE", "Комиссия за перечисление денежных средств");

/* Error messages */
define("NETCAT_MODULE_PAYMENT_REQUEST_ERROR", "Приём платежей не настроен. Настроить и принимать оплату можно через: Payonline, WebMoney, Robokassa, QIWI, PayPal, Paymaster, MailMoney, Яндекс.Деньги, Assist, Platidoma, Platron");
define("NETCAT_MODULE_PAYMENT_ORDER_ID_IS_NOT_UNIQUE", "Номер заказа не уникальный");
define("NETCAT_MODULE_PAYMENT_ORDER_ID_IS_NULL", "Не установлен параметр 'OrderId'");
define("NETCAT_MODULE_PAYMENT_INCORRECT_PAYMENT_AMOUNT", "Сумма платежа не указана или задана некорректно");
define("NETCAT_MODULE_PAYMENT_INCORRECT_PAYMENT_CURRENCY", "Платёжная система не принимает платежи в валюте «%s»");
define("NETCAT_MODULE_PAYMENT_CANNOT_LOAD_INVOICE_ON_CALLBACK", "Платёжная система вернула неправильный идентификатор платежа");

/* admin */
define("NETCAT_MODULE_PAYMENT_PAYMENT_SYSTEM", "Платёжная система");

define("NETCAT_MODULE_PAYMENT_ADMIN_SETTINGS", "Настройки");
define("NETCAT_MODULE_PAYMENT_ADMIN_BUTTON_SAVE", "Сохранить");
define("NETCAT_MODULE_PAYMENT_ADMIN_SETTINGS_SAVED", "Настройки сохранены");
define("NETCAT_MODULE_PAYMENT_ADMIN_TOTALS", "Итого");
define("NETCAT_MODULE_PAYMENT_ADMIN_STATUS", "Статус");
define("NETCAT_MODULE_PAYMENT_ADMIN_COPY_TO_CLIPBOARD", "скопировать");
define("NETCAT_MODULE_PAYMENT_ADMIN_BUTTON_BACK", "Назад");
define("NETCAT_MODULE_PAYMENT_ADMIN_BUTTON_TO_SYSTEM_LIST", "К списку платёжных систем");
define("NETCAT_MODULE_PAYMENT_ADMIN_CREATED", "Создан");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICES", "Счета");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE", "Счёт");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_SEARCH_PLACEHOLDER", "Поиск по номеру счёта, номеру заказа, клиенту");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_SEARCH_BUTTON", "Найти");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_SOURCE", "Заказ");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_AMOUNT", "Сумма к оплате");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_AMOUNT_SHORT", "Сумма");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CUSTOMER", "Клиент");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_EMPTY_LIST", "На выбранном сайте нет счетов");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_NO_MATCH", "Счета с указанными параметрами не найдены");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_LAST_RESPONSE", "последний ответ");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_PAYMENT_LINK", "Ссылка для перехода к оплате");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_BALANCE", "К доплате&nbsp;/ возврату");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_MANUAL_REFUND", "Для регистрации кассовых чеков и корректного расчёта баланса оплаты по заказу выполните возврат средств в платёжной системе, после чего установите у этого счёта статус «оплачен»");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CHANGE", "изменить статус");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ALREADY_PAID", "Оплачено");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ON_STATUS_CHANGE_SELL_RECEIPT", "При изменении статуса на «оплачен» в ККМ будет зарегистрирован чек с признаком расчёта «приход» на сумму <strong>%s</strong>");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ON_STATUS_CHANGE_SELL_REFUND_RECEIPT", "При изменении статуса на «оплачен» в ККМ будет зарегистрирован чек с признаком расчёта «возврат прихода» на сумму <strong>%s</strong>");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ON_STATUS_CHANGE_SELL_SELL_REFUND_RECEIPTS", "При изменении статуса на «оплачен» в ККМ будут зарегистрированы чек с признаком расчёта «приход» на сумму <strong>%s</strong> и чек с признаком расчёта «возврат прихода» на сумму <strong>%s</strong>");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_REFUND_PAYMENT_SYSTEM_NO_RECEIPT_WARNING", "При изменении статуса на «оплачен» кассовый чек возврата прихода <strong>не будет создан</strong> автоматически, так как используемая платёжная система не поддерживает данную возможность. Для создания чеков возврата настройте подключение к кассовому сервису.");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_INCORRECT_PHONE", "некорректный номер");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_INCORRECT_EMAIL", "некорректный адрес");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_BUTTON", "Возврат и корректировка");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUB_HEADER", "Создание корректировочного счета (заказ %s)");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_CREATE_BUTTON", "Создать корректировочный счёт");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_HEADER", "Изменение существующих позиций по заказу");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_FULL_REFUND_BUTTON", "Полный возврат всех позиций");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_PRIMARY_INVOICE", "Корректируемый счёт:");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_CANCELLED_INVOICES", "После создания корректировочного счёта следующие неоплаченные счета будут переведены в статус «отменён»:");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_AFTER", "Будет после изменения");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUM", "Сумма");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_FULL_REFUND_CHECKBOX", "Полный возврат?");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_NO_CHANGES", "Корректировочный счёт не был создан, так как новые позиции не отличаются от позиций в существующих счетах для этого заказа");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_ADD_ITEMS", "Добавление позиций");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_ADD_ITEM", "добавить");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_REMOVE_ITEM", "удалить");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUMMARY_AMOUNT", "Сумма создаваемого корректировочного счёта");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUMMARY_EXTRA", "доплата от клиента");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_CORRECTION_SUMMARY_REFUND", "возврат клиенту");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEMS", "Позиции счёта");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_BALANCE", "Баланс позиций по счетам ");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_NAME", "Наименование");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_PRICE", "Цена");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_QTY", "Количество");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_TOTALS", "Стоимость");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_VAT_RATE", "Ставка НДС");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_VAT_AMOUNT", "Сумма НДС");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ITEM_VAT_NONE", "нет");

define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_ERROR", "ошибка");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_NEW", "новый, не отправлялся в платёжную систему");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_NEW_SHORT", "новый");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_SENT", "отправлен в платёжную систему");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_SENT_SHORT", "отправлен");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_SUCCESS", "оплачен");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CALLBACK_ERROR", "ошибка при обработке callback-ответа от платёжной системы");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CALLBACK_WRONG_SUM", "ошибка в сумме в callback-ответе от платёжной системы");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_WAITING", "ожидание ответа от платёжной системы");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_REJECTED", "отклонён платёжной системой");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_STATUS_CANCELLED", "отменён");
define("NETCAT_MODULE_PAYMENT_ADMIN_INVOICE_ALL_FOR_ORDER", "Все счета по заказу");

define("NETCAT_MODULE_PAYMENT_ADMIN_RECEIPTS", "Чеки");
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

define("NETCAT_MODULE_PAYMENT_ADMIN_LOG", "Журнал событий");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_TIME", "Время");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_EVENT", "Событие");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_RECEIPT_STATUS", "Статус чека");
define("NETCAT_MODULE_PAYMENT_ADMIN_LOG_SHOW_DETAILS", "подробные сведения");

define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_CREATED", "Создан чек №%s");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_SENT", "Чек №%s отправлен на ККМ");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_NO_REPLY", "Нет ответа от ККМ (чек №%s)");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_GOT_REPORT", "Получен отчёт по чеку №%s");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_ERROR", "Ошибка обработки чека №%s");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_RECEIPT_CANCELLED", "Обработка чека №%s отменена");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_Z_REPORT", "Создание Z-отчёта");
define("NETCAT_MODULE_PAYMENT_REGISTER_LOG_OPEN_SHIFT", "Открытие смены");

define("NETCAT_MODULE_PAYMENT_ADMIN_REGISTERS", "Кассы");
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
define("NETCAT_MODULE_PAYMENT_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Некорректная подпись формы");
define("NETCAT_MODULE_PAYMENT_ERROR_INVOICE_NOT_FOUND", "Платёж не найден в NetCat");
define("NETCAT_MODULE_PAYMENT_ERROR_INVALID_SUM", "Неверная сумма платежа");
define("NETCAT_MODULE_PAYMENT_ERROR_ALREADY_PAID", "Счёт уже оплачен");
define("NETCAT_MODULE_PAYMENT_ERROR_AUTH_REQUIRED", "Необходимо войти на сайт, чтобы оплатить этот счёт");
define("NETCAT_MODULE_PAYMENT_ERROR_WRONG_USER", "Данный счёт выставлен другому пользователю");

define("NETCAT_MODULE_PAYMENT_SETTINGS_LINK", "Указать параметры платёжной системы");

/* Payment form texts */
define("NETCAT_MODULE_PAYMENT_FORM_PAY", "Оплатить");
define("NETCAT_MODULE_PAYMENT_FORM_PAY_SELECT", "Выберите способ оплаты");

/* Assist */
define("NETCAT_MODULE_PAYMENT_ASSIST_ERROR_CHECKVALUE_IS_NOT_VALID", "Неправильный параметр 'CheckValue'");
define("NETCAT_MODULE_PAYMENT_ASSIST_ERROR_ASSIST_SHOP_ID", "Параметр 'AssistShopId' должен быть числом");
define("NETCAT_MODULE_PAYMENT_ASSIST_ERROR_ASSIST_SECRET_WORD_IS_NULL", "Параметр 'AssistSecretWord' должен быть установлен");

/* Mail */
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_SIGNATURE_IS_NOT_VALID", "Неправильный параметр 'Signature'");
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_SHOP_ID", "Параметр 'MailShopID' должен быть числом");
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_SECRET_KEY_IS_NULL", "Параметр 'MailSecretKey' должен быть установлен");
define("NETCAT_MODULE_PAYMENT_MAIL_ERROR_HASH_IS_NULL", "Параметр 'MailHash' должен быть установлен");

/* Paymaster */
define("NETCAT_MODULE_PAYMENT_PAYMASTER_ERROR_MERCHANTID_IS_NOT_VALID", "Неправильный параметр 'LMI_MERCHANT_ID'");
define("NETCAT_MODULE_PAYMENT_PAYMASTER_ERROR_LMI_PAYMENT_DESC_IS_LONG", "Длина параметра 'LMI_PAYMENT_DESC' должна быть меньше 255");
define("NETCAT_MODULE_PAYMENT_PAYMASTER_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Неправильный параметр 'LMI_HASH'");

/* Payonline */
define("NETCAT_MODULE_PAYMENT_PAYONLINE_ERROR_MERCHANT_ID", "Параметр 'MerchantId' должен быть числом");
define("NETCAT_MODULE_PAYMENT_PAYONLINE_ERROR_PRIVATE_SECURITY_KEY_IS_NULL", "Параметр 'PrivateSecurityKey' должен быть установлен");
define("NETCAT_MODULE_PAYMENT_PAYONLINE_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Неправильный параметр 'SecurityKey'");

/* Paypal */
define("NETCAT_MODULE_PAYMENT_PAYPAL_ERROR_SOME_PARAMETRS_ARE_NOT_VALID", "Некорректные параметры");
define("NETCAT_MODULE_PAYMENT_PAYPAL_ERROR_PAYPAL_MAIL_IS_NOT_VALID", "Некорректный адрес электронной почты");
define("NETCAT_MODULE_PAYMENT_PAYPAL_ERROR_PAYPAL_IPN_NOT_VERIFIED", "IPN-запрос не подтверждён PayPal");

/* Platidoma */
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PGSHOPID_IS_NOT_VALID", "Параметр 'pd_shop_id' должен быть установлен");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PGLOGIN_IS_NOT_VALID", "Параметр 'pd_login' должен быть установлен");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PGGATEPASSWORD_IS_NOT_VALID", "Параметр 'pd_gate_password' должен быть установлен");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PRIVATE_SECURITY_KEY_IS_NULL", "Параметр 'PrivateSecurityKey' должен быть установлен");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PRIVATE_KEY_IS_NOT_VALID", "Некорректный параметр 'pd_rnd'");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Некорректный параметр 'pd_sign'");
define("NETCAT_MODULE_PAYMENT_PLATIDOMA_ERROR_ORDER_ID_IS_LONG", "Длина параметра 'OrderId' должна быть меньше 50");

/* QIWI */
define("NETCAT_MODULE_PAYMENT_QIWI_ERROR_AMOUNT_TOO_LARGE", "Максимальная сумма платежа — 15 000 рублей");
define("NETCAT_MODULE_PAYMENT_QIWI_ERROR_EMPTY_SETTING", "Не задан параметр %s в настройках платёжной системы");
define("NETCAT_MODULE_PAYMENT_QIWI_ERROR_WRONG_PHONE", "Неверный формат номера QIWI-кошелька");
define("NETCAT_MODULE_PAYMENT_QIWI_SET_PHONE", "Пожалуйста, укажите номер Вашего QIWI-кошелька в формате: +71234567890 (если у вас нет QIWI-кошелька, он будет создан автоматически)");

/* Robokassa */
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_MRCHLOGIN_IS_NOT_VALID", "Некорректный параметр 'MrchLogin'");
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_INVID_IS_NOT_VALID", "Параметр 'InvId' должен быть числом");
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_INVDESC_ID_IS_LONG", "Длина параметра 'InvDesc' должна быть меньше 100");
define("NETCAT_MODULE_PAYMENT_ROBOKASSA_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Некорректный параметр 'SignatureValue'");

/* Webmoney */
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_PURSE_IS_NOT_VALID", "Некорректный параметр 'LMI_PAYEE_PURSE'");
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Некорректный параметр 'LMI_HASH'");
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_DESCRIPTION_IS_LONG", "Длина описания счёта должна быть менее 255");
define("NETCAT_MODULE_PAYMENT_WEBMONEY_ERROR_UNSUPPORTED_HASH_METHOD", "Использованный алгоритм формирования контрольной подписи не поддерживается");

/* Yandex_Email */
define("NETCAT_MODULE_PAYMENT_YANDEX_EMAIL_ERROR_RECEIVER", "Параметр 'Receiver' должен быть установлен");

/* Yandex CPP */
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_SHOPID_IS_NOT_VALID", "Некорректный параметр 'shopId'");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_SCID_IS_NOT_VALID", "Некорректный параметр 'scid'");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_SHOP_PASSWORD_IS_NOT_VALID", "Некорректный параметр 'shopPassword'");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_ORDER_ID_IS_NOT_VALID", "Некорректный параметр 'orderNumber'");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_AMOUNT", "Параметр 'Amount' должен быть числом");
define("NETCAT_MODULE_PAYMENT_YANDEX_CPP_ERROR_PRIVATE_SECURITY_IS_NOT_VALID", "Некорректный параметр 'md5'");

/* RBK Money */
define("NETCAT_MODULE_PAYMENT_RBK_ERROR_ESHOPID_IS_NOT_VALID", "Некорректный параметр 'eshopID'");
define("NETCAT_MODULE_PAYMENT_RBK_ERROR_AMOUNT", "Параметр 'Amount' должен быть числом");
define("NETCAT_MODULE_PAYMENT_RBK_ERROR_ORDER_ID_IS_NOT_VALID", "Некорректный параметр 'orderID'");

/* Platron */
define("NETCAT_MODULE_PAYMENT_PLATRON_ERROR_MERCHANT_ID_IS_NOT_VALID", "Некорректный параметр 'merchant_id'");
define("NETCAT_MODULE_PAYMENT_PLATRON_ERROR_SECRET_KEY_IS_NOT_VALID", "Некорректный параметр 'secret_key'");
define("NETCAT_MODULE_PAYMENT_PLATRON_ERROR_SIGN_IS_NOT_VALID", "Некорректная подпись");

/* PayAnyWay */
define("NETCAT_MODULE_PAYMENT_PAYANYWAY_ERROR_MNT_ID_IS_NOT_VALID", "Некорректный параметр 'MNT_ID'");

/* Fondy */
define("NETCAT_MODULE_PAYMENT_FONDY_ERROR_MERCHANT_ID_IS_NOT_VALID", "Некорректный идентефикатор мерчанта");
define("NETCAT_MODULE_PAYMENT_FONDY_ERROR_SIGN_IS_NOT_VALID", "Некорректная сигнатура");
