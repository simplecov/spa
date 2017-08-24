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

//dump($arResult['ITEMS']);
?>
<div class="header-big-slider">
    <?foreach($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $id = $this->GetEditAreaId($arItem['ID']);
    ?>

        <div class="slider-item" id="<?=$id?>">
            <div class="image" style="background-image: url(<?=$arItem['IMAGE']?>);  background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center;"></div>
            <div class="item-content">
                <h2 class="content-title stylish-title"><?=$arItem['NAME']?></h2>
                <?\Simplecov\Helpres::createButton('link', 'slide-btn btn-pulse red round hover-pulse-stop', 'Смотреть', '', '#')?>
            </div>
        </div>

    <?endforeach?>
</div>

<pre>
<?print_r($arResult['PROPERTIES'])?>
</pre>