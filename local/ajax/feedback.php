<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->IncludeComponent(
    "bitrix:main.feedback",
    "feedback",
    array(
        "COMPONENT_TEMPLATE" => "feedback",
        "USE_CAPTCHA" => "Y",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO" => "1kbspeed@gmail.com",
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
            1 => "EMAIL",
            2 => "MESSAGE",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        )
    ),
    false
);?>