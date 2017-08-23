<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//dump($arResult);
?>

<?if (!empty($arResult)):?>
    <ul id="main-menu" class="main-menu">

        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
            <li class="selected"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
        <?else:?>
            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endif?>

        <?endforeach?>

    </ul>
<?endif?>
