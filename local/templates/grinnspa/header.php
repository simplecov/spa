<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$logo = CFile::GetFileArray(COption::GetOptionString( "askaron.settings", "UF_LOGO" ));
$asset = Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html>
<html ng-app="app">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/jquery-3.2.1.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/jquery-migrate.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/tether.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/angular.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/angular-route.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/bootstrap.min.js')?>

        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/plugins/jquery.nicescroll.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/plugins/jquery.visible.min.js')?>

        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/app.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/scripts.js')?>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

        <header class="header-container">

            <div class="header-media">

                <div class="header-phone hidden-md-down">
                    <i class="fa fa-phone header-link"></i>
                    <a class="regular-link header-link" href="callto:<?=COption::GetOptionString( "askaron.settings", "UF_PHONE_1" );?>"><?=COption::GetOptionString( "askaron.settings", "UF_PHONE_1" );?></a>
                    <br>
                    <i class="fa fa-phone header-link"></i>
                    <a class="regular-link header-link" href="callto:<?=COption::GetOptionString( "askaron.settings", "UF_PHONE_2" );?>"><?=COption::GetOptionString( "askaron.settings", "UF_PHONE_2" );?></a>
                </div>

                <div class="logo">
                    <a href="/">
                        <img class="img-fluid" src="<?=$logo['SRC']?>">
                    </a>
                </div>

                <a id="menu-opener" class="hidden-md-up" href="#" data-target="main-menu">
                    <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>

            <a id="to-top-button" class="to-top-button"><i class="fa fa-caret-up"></i></a>

            <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "spa-template",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "3",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "spa-template",
                ),
                false
            );?>



        </header>

<?if(CSite::InDir('/index.php')):
    include_once 'include/main-page-slider.php';
elseif(
    CSite::InDir('/spa-center/index.php') ||
    CSite::InDir('/fitness-center/index.php')
):
    include_once 'include/inner-page-slider.php';

else:?>
    <div class="header-wrapper"></div>
<?endif?>

    <div
            class="<?if(
                !CSite::InDir('/spa-center/index.php') ||
                !CSite::InDir('/fitness-center/index.php') ||
                !CSite::InDir('/massage/index.php') ||
                !CSite::InDir('/beauty/index.php') ||
                !CSite::InDir('/index.php') ||
                !CSite::InDir('/about/index.php')
            ):?>wrapper<?endif?>">
