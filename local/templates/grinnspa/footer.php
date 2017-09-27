<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<section class="main-page-services">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="stylish-title animated">Контактные данные</h2>

                <div class="address stylish-list bg-white flexed">

                    <div class="address-div margin-auto">
                        <h3 class="stylish-title">Адрес</h3>
                        <ul>
                            <li>г.Орел, Кромское шоссе 4</li>
                            <li>
                                <a class="regular-link" href="callto:<?=COption::GetOptionString( "askaron.settings", "UF_PHONE_1" );?>"><?=COption::GetOptionString( "askaron.settings", "UF_PHONE_1" );?></a>
                                <span class="marked">|</span>
                                <a class="regular-link" href="callto:<?=COption::GetOptionString( "askaron.settings", "UF_PHONE_2" );?>"><?=COption::GetOptionString( "askaron.settings", "UF_PHONE_2" );?></a>
                            </li>
                            <li>
                                <a class="regular-link" href="http://www.tmk-grinn.ru/" target="_blank">www.tmk-grinn.ru</a>
                            </li>
                        </ul>
                    </div>

                    <div class="social margin-auto">
                        <a class="regular-link" href="https://vk.com/grinnspa" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/vk.png">
                            Оздоровительный комплекс «ГриНН SPA»
                        </a>
                        <br>
                        <a class="regular-link" href="https://vk.com/grinnspa" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/ins.png">
                            Оздоровительный комплекс «ГриНН SPA»
                        </a>
                        <br>
                        <a class="regular-link" href="https://vk.com/grinnspa" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/vk.png">
                            SPA&BEAUTY
                        </a>
                        <br>
                        <a class="regular-link" href="https://vk.com/grinnspa" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/ins.png">
                            SPA&BEAUTY
                        </a>
                    </div>

                    <div class="contact-button margin-auto">
                        <?\Simplecov\Helpres::createButton('modal', 'btn-pulse blue round hover-pulse-stop', 'Написать')?>
                    </div>
                </div>
            </div>

            <div class="col-12 map">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:map.yandex.view",
                    ".default",
                    array(
                        "CONTROLS" => array(
                            0 => "ZOOM",
                            2 => "TYPECONTROL",
                            3 => "SCALELINE",
                        ),
                        "INIT_MAP_TYPE" => "MAP",
                        "MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:52.92119785614771;s:10:\"yandex_lon\";d:36.010539565633195;s:12:\"yandex_scale\";i:16;}",
                        "MAP_HEIGHT" => "500",
                        "MAP_ID" => "",
                        "MAP_WIDTH" => "100%",
                        "OPTIONS" => array(
                            1 => "ENABLE_DBLCLICK_ZOOM",
                            2 => "ENABLE_DRAGGING",
                        ),
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
            </div>

        </div>
    </div>
</section>

<!-- Modal action="/local/php_interface/include/mail.php" -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title stylish-title" id="formModalLabel">Форма для связи с нами</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">

                <form name="feedbackForm" ng-controller="feedbackForm" class="form col-12" ng-submit="submit()" method="POST">

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
                        <?\Simplecov\Helpres::createButton('submit', 'btn-pulse red round hover-pulse-stop', 'Написать')?>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

        </div><!--Wrapper-->
	</body>
</html>