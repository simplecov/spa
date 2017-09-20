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

                <?$APPLICATION->IncludeComponent(
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

            </div>
        </div>
    </div>
</div>

        </div><!--Wrapper-->
	</body>
</html>