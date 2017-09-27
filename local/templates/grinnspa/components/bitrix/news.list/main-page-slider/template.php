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
?>

<div id="carouselMain" class="carousel slide promo-slider header-big-slider" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <?foreach($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $id = $this->GetEditAreaId($arItem['ID']);
            ?>

            <div class="carousel-item <?if($arItem['PROPERTIES']['THIS_FIRST']['VALUE'] === 'Y'):?> active<?endif?>" style="background-image: url(<?=$arItem['IMAGE']?>);">

                <p class="promo-text">
                    <?=$arItem['PREVIEW_TEXT']?>
                </p>

                <div class="carousel-caption">
                    <h2 class="content-title stylish-title" style="font-size: <?=$arItem['FONT_SIZE']?>;">
                        <?=$arItem['NAME']?>
                    </h2>
                    <?\Simplecov\Helpres::createButton('link', 'slide-btn btn-pulse red round hover-pulse-stop', 'Смотреть', '', $arItem['PROPERTIES']['LINK']['VALUE'])?>
                </div>

            </div>

        <?endforeach?>
    </div>

    <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>