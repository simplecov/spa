<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Фитнес-центр «Гринн SPA»");
?>

<section <?\Simplecov\Helpres::createBgStyle('/assets/images/fitness/1.png', 'center')?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="stylish-title animated"><?=$APPLICATION->GetTitle();?></h1>
            </div>

            <div class="stylish-text col-12 col-md-6">
                <p>
                    Открывает двери для гостей с любым уровнем
                    подготовки: «свое» здесь найдут как новички
                    в фитнесе, так и опытные спортсмены с высокими
                    требованиями. Мы несем здоровый образ жизни
                    в массы, делая занятия фитнесом популярными
                    и формируя сообщества здоровых и счастливых
                    людей.
                </p>
                <p>
                    Кардио-зона, зона силовых тренировок, зона
                    свободных весов, групповые и персональные
                    занятия, йога — с чего начать решать Вам! а если
                    Вам нужна помощь — обратитесь к профессионалу!
                    Занятия с квалифицированным индивидуальным
                    фитнес-тренером помогают получить более
                    высокие результаты за то же время, которое
                    вы бы потратили на обычный тренинг. тренер
                    разработает программу, проконтролирует технику
                    исполнения упражнений, даст рекомендации
                    и поддержит вашу мотивацию.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="stylish-title animated">Разовое посещение Фитнес-центра</h2>
            </div>

            <?$APPLICATION->IncludeFile(
                $APPLICATION->GetTemplatePath("/include_areas/fitness-once.php "),
                Array(),
                Array("MODE"=>"php")
            );?>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="stylish-title animated">Персональная тренировка с инструктором</h2>
            </div>

            <?$APPLICATION->IncludeFile(
                $APPLICATION->GetTemplatePath("/include_areas/fitness-instructor.php "),
                Array(),
                Array("MODE"=>"php")
            );?>

        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="stylish-title animated">ПОСещеНИе ФИтНеС-цеНтРа И ПеРСОНальНый тРеНИНГ</h2>
            </div>

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "services", Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => IBLOCK_FITNESS,	// Код информационного блока
                "IBLOCK_TYPE" => "-",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "0",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "LINK",
                    2 => "",
                ),
                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            ),
                false
            );?>
        </div>
    </div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
