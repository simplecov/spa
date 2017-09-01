<?
$arUrlRewrite = array(
    array(
        "CONDITION" => "#^/gallery/#",
        "RULE" => "",
        "ID" => "bitrix:photo",
        "PATH" => "/max/images/index.php",
    ),
    array(
        "CONDITION" => "#^/forum/#",
        "ID" => "bitrix:forum",
        "PATH" => "/forum/index.php",
    ),
    array(
        "CONDITION" => "#^/index/([0-9]+)/([0-9]+)/#",
        "RULE" => "mode=read&CID=$1&GID=$2",
        "ID" => "bitrix:catalog.section",
        "PATH" => "/newforum/index.php",
    ),
);
?>