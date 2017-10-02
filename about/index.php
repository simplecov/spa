<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("О нас");
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

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
