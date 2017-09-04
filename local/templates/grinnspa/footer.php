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
                                <a class="regular-link" href="callto:44-01-67">44-01-67</a>
                                <span class="marked">|</span>
                                <a class="regular-link" href="callto:49-53-20">49-53-20</a>
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



                <form id="linked-form" name="feedbackForm" ng-controller="feedbackForm" class="form col-12" ng-submit="submit()">

                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">
                            Ваше имя
                            <div role="alert">
                                <span class="error" ng-show="feedbackForm.name.$error.required">не заполнено</span>
                                <span class="error" ng-show="feedbackForm.name.$error.text">не прошло проверку</span>
                            </div>
                        </label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="name" ng-model="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">
                            Ваш телефон
                            <div role="alert">
                                <span class="error" ng-show="feedbackForm.phone.$error.required">не заполнен</span>
                                <span class="error" ng-show="feedbackForm.phone.$error.number">не прошел проверку</span>
                            </div>
                        </label>
                        <div class="col-12">
                            <input class="form-control" type="number" name="phone" ng-model="phone" ng-pattern="patternPhone" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-form-label">
                            Ваша почта
                            <div role="alert">
                                <span class="error" ng-show="feedbackForm.email.$error.required">не заполнена</span>
                                <span class="error" ng-show="feedbackForm.email.$error.email">не прошла проверку</span>
                            </div>
                        </label>
                        <div class="col-12">
                            <input class="form-control" type="email" name="email" ng-model="email" ng-pattern="patternEmail" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-12 col-form-label">
                            Ваше сообщение
                            <div role="alert">
                                <span class="error" ng-show="feedbackForm.textarea.$error.required">не заполнено</span>
                                <span class="error" ng-show="feedbackForm.textarea.$error.text">не прошло проверку</span>
                            </div>
                        </label>
                        <div class="col-12">
                            <textarea class="form-control" type="text" name="textarea" ng-model="textarea" required></textarea>
                        </div>
                    </div>

                    {{msg}}

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