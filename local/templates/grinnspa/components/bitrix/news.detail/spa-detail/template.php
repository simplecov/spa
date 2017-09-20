<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//dump($arResult);
?>
<div class="detail-page col-12">
    <div class="row">

        <div class="col-12">
            <h1 class="stylish-title animated"><?=$arResult['NAME']?></h1>
        </div>

        <div class="col-12">
            <img class="img-fluid" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>">
        </div>

        <div class="col-12">
            <p>
                <?=$arResult['PREVIEW_TEXT']?>
            </p>
            <?if(strlen($arResult['DETAIL_TEXT']) > 0):?>
                <p>
                    <?=$arResult['DETAIL_TEXT']?>
                </p>
            <?endif?>
        </div>

        <div class="col-12">
            <?\Simplecov\Helpres::createButton('link', 'btn-pulse round blue', 'Назад', false, $APPLICATION->GetCurDir())?>
        </div>

    </div>
</div>