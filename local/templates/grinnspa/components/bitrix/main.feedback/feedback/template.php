<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form name="feedbackForm" ng-controller="feedbackForm" class="form col-12" ng-submit="submit()" method="POST">

<?=bitrix_sessid_post()?>

    <div class="form-group row">
        <label for="user_name" class="col-12 col-form-label">
            Ваше имя
            <span role="alert">
                <span class="error" ng-show="feedbackForm.user_name.$error.required">не заполнено</span>
                <span class="error" ng-show="feedbackForm.user_name.$valid">прошло проверку</span>
            </span>
        </label>
        <div class="col-12">
            <input class="form-control" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" ng-model="formData.user_name" required>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-12 col-form-label">
            Ваша почта
            <span role="alert">
                <span class="error" ng-show="feedbackForm.user_email.$error.required">не заполнена</span>
                <span class="error" ng-show="feedbackForm.user_email.$error.email">не прошла проверку</span>
                <span class="error" ng-show="feedbackForm.user_email.$valid">прошло проверку</span>
            </span>
        </label>
        <div class="col-12">
            <input class="form-control" type="email" name="user_email" ng-model="formData.email" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="example-search-input" class="col-12 col-form-label">
            Ваше сообщение
            <span role="alert">
                <span class="error" ng-show="feedbackForm.message.$error.required">не заполнено</span>
                <span class="error" ng-show="feedbackForm.message.$valid">прошло проверку</span>
            </span>
        </label>
        <div class="col-12">
            <textarea class="form-control" type="text" name="message" ng-model="formData.textarea" required><?=$arResult["MESSAGE"]?></textarea>
        </div>
    </div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>

    <div class="form-events">
        {{msg}}
    </div>

	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
<!--	<input type="submit" name="submit" value="--><?//=GetMessage("MFT_SUBMIT")?><!--">-->
    <div class="form-group btn-container">
        <?\Simplecov\Helpres::createButton('submit', 'btn-pulse red round hover-pulse-stop', GetMessage("MFT_SUBMIT"))?>
    </div>
</form>