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

    <div class="col-6 col-md-4 col-lg-3">
        <div class="gallery">
            <div class="row">
                <div class="gallery-front-content col-12">
                    <div id="main-image_<?=$arItem['ID']?>" class="title-image" <?\Simplecov\Helpres::createBgStyle($arItem['IMAGE'], 'center', false)?>></div>

                    <div class="title-div">
                        <h5 class="stylish-title"><?=$arItem['NAME']?></h5>
                    </div>

                    <div id="gallery_<?=$arItem['ID']?>" class="images-container">
                        <?foreach($arItem['IMAGES'] as $imgScr):?>
                            <a class="images" href="<?=$imgScr?>" title="Banana"></a>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blueimp-gallery_<?=$arItem['ID']?>" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
    </div>

    <script type="text/javascript">
        document.getElementById('main-image_<?=$arItem['ID']?>').onclick = function (event) {
            event = event || window.event;
            var options = {
                    index: 0,
                    event: event,
                    container: document.getElementById('blueimp-gallery_<?=$arItem['ID']?>')
                },
                links = document.getElementById('gallery_<?=$arItem['ID']?>').getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>

<?endforeach?>
