<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$asset = Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html>
<html ng-app="app">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/jquery-3.2.1.min.js')?>
<!--        --><?//$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/angular.min.js')?>
<!--        --><?//$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/angular-route.min.js')?>
<!--        --><?//$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/app.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/tether.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/bootstrap.min.js')?>

        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/plugins/jquery.ba-cond.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/plugins/jquery.slitslider.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/plugins/modernizr.custom.79639.js')?>

        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/scripts.js')?>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

        <header class="header-container">

            <div class="header-media">
                <div class="logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spa-logo.png">
                </div>

                <a id="menu-opener" href="#" data-target="main-menu">Меню</a>
            </div>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "spa-template", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                false
            );?>

        </header>