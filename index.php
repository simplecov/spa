<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>

    <section class="services-main-page">
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
                            <div class="card-img-top" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/fitness.png)"></div>
                        </a>
                        <div class="card-block">
                            <h4 class="card-title">Фитнес-центр</h4>
                            <p class="card-text">Открывает двери для гостей с любым уровнем подготовки</p>
                            <?\Simplecov\Helpres::createButton('link', 'btn-regular', 'Посмотреть', 'Фитнес-центр', '/fitness-center')?>
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
            </div>
        </div>
    </section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>