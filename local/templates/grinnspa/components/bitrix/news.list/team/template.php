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

<?foreach($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $id = $this->GetEditAreaId($arItem['ID']);
    ?>

    <div class="col-12 col-md-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title stylish-title"><?=$arItem['NAME']?></h4>
                <img class="img-fluid team-img" src="<?=$arItem['IMAGE']?>">
                <ul class="team-list">
                    <?foreach($arItem['PROPERTIES']['TRAINING']['VALUE'] as $value):?>
                        <li><?=$value?></li>
                    <?endforeach?>
                </ul>
                <p class="team-text"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
        </div>
    </div>

<?endforeach?>