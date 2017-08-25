<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h1 class="stylish-title animated">Оздоровительный комплекс "ГРИНН SPA"</h1>
                    <p>Дорогие гости!</p>
                    <p>
                        Оздоровительный комплекс «ГРИНН SPA» рад приветствовать Вас и приглашает в увлека-
                        тельное путешествие в мир спорта и отдыха! Мы готовы открыть для Вас секреты красоты и
                        здоровья! Мы создали все условия для того, чтобы Вы чувствовали себя комфортно! Для нас
                        важны индивидуальный подход к гостю, уют и высокий уровень сервиса!
                    </p>

                    <div class="stylish-list bg-white">
                        <h2 class="stylish-title animated">Мы будем рады видеть Вас:</h2>
                        <ul>
                            <li>
                                в комфортном <span class="marked">фитнес-центре</span> премиум-класса, оснащенном современными тренажерами Life Fitness
                            </li>
                            <li>
                                в роскошном <span class="marked">СПА-центре</span> с 25-метровым бассейном и банным комплексом, включающим 8 бань мира
                            </li>
                            <li>
                                в <span class="marked">массажном центре</span>, где царит атмосфера релакса и гармонии
                            </li>
                            <li>
                                в <span class="marked">салоне красоты</span>, где вы в надежных руках профессионалов
                            </li>
                        </ul>
                    </div>

                    <?\Simplecov\Helpres::createButton('modal', 'btn-pulse blue round hover-pulse-stop', 'Написать')?>

                </div>
            </div>
        </div>
    </section>

    <section class="main-page-services">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="stylish-title animated">Мы ждем вас</h2>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <a href="/spa-center">
                            <div class="card-img-top" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/spa.png)"></div>
                        </a>
                        <div class="card-block">
                            <h4 class="card-title">Спа-центр</h4>
                            <p class="card-text">Оздоровительный комплекс процедур</p>
                            <?\Simplecov\Helpres::createButton('link', 'btn-regular', 'Посмотреть', 'Спа-центр', '/spa-center')?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <a href="/spa-center">
                            <div class="card-img-top" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/fitnes.png)"></div>
                        </a>
                        <div class="card-block">
                            <h4 class="card-title">Фитнес-центр</h4>
                            <p class="card-text">Открывает двери для гостей с любым уровнем подготовки</p>
                            <?\Simplecov\Helpres::createButton('link', 'btn-regular', 'Посмотреть', 'Фитнес-центр', '/fitnes-center')?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <a href="/spa-center">
                            <div class="card-img-top" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/sauna.png)"></div>
                        </a>
                        <div class="card-block">
                            <h4 class="card-title">Банный комплекс</h4>
                            <p class="card-text">«Баня – вторая мать, кости распарит, все тело поправит» <small>Древнерусская поговорка</small></p>
                            <?\Simplecov\Helpres::createButton('link', 'btn-regular', 'Посмотреть', 'Банный комплекс', '/massage')?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <a href="/spa-center">
                            <div class="card-img-top" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/solarium.png)"></div>
                        </a>
                        <div class="card-block">
                            <h4 class="card-title">Солярий</h4>
                            <p class="card-text">Безопасный загар, только оригинальные лампы</p>
                            <?\Simplecov\Helpres::createButton('link', 'btn-regular', 'Посмотреть', 'Солярий', '/beauty')?>
                        </div>
                    </div>
                </div>

<!--                --><?//$APPLICATION->IncludeComponent("bitrix:news.list", "main-page-services", Array(
//                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
//                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
//                    "AJAX_MODE" => "N",	// Включить режим AJAX
//                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
//                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
//                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
//                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
//                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
//                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
//                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
//                    "CACHE_TYPE" => "A",	// Тип кеширования
//                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
//                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
//                    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
//                    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
//                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
//                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
//                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
//                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
//                    "FIELD_CODE" => array(	// Поля
//                        0 => "",
//                        1 => "",
//                    ),
//                    "FILTER_NAME" => "",	// Фильтр
//                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
//                    "IBLOCK_ID" => IBLOCK_SERVICES,	// Код информационного блока
//                    "IBLOCK_TYPE" => "-",	// Тип информационного блока (используется только для проверки)
//                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
//                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
//                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
//                    "NEWS_COUNT" => "0",	// Количество новостей на странице
//                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
//                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
//                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
//                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
//                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
//                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
//                    "PAGER_TITLE" => "Новости",	// Название категорий
//                    "PARENT_SECTION" => "",	// ID раздела
//                    "PARENT_SECTION_CODE" => "",	// Код раздела
//                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
//                    "PROPERTY_CODE" => array(	// Свойства
//                        0 => "",
//                        1 => "LINK",
//                        2 => "",
//                    ),
//                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
//                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
//                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
//                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
//                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
//                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
//                    "SHOW_404" => "N",	// Показ специальной страницы
//                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
//                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
//                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
//                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
//                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
//                ),
//                    false
//                );?>

            </div>
        </div>
    </section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>