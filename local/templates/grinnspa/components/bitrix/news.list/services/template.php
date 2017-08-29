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

    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-12 col-lg-4 primary-info">
                        <h4 class="card-title stylish-title"><?=$arItem['NAME']?></h4>
                        <p><?=$arItem['LASTING']?></p>
                    </div>
                    <div class="col-12 col-lg-8 secondary-info">
                        <div class="stylish-list">
                            <ul class="can-be-opened">
                                <?foreach($arItem['SERVICE_LIST'] as $text):?>
                                    <li><?=$text?></li>
                                <?endforeach;?>
                            </ul>
                        </div>
                        <p class="price"> <?=$arItem['COST']?></p>
                    </div>
                </div>
<!--                --><?//\Simplecov\Helpres::createButton('modal', 'btn-regular', 'Подробнее', $arItem['NAME'], $arItem['DETAIL_PAGE_URL'])?>
            </div>
        </div>
    </div>

<?endforeach?>