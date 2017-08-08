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
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/angular.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/angular-route.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/tether.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/bootstrap.min.js')?>
        <?$asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/app.js')?>

	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
	
						