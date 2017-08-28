<?php

foreach($arResult['ITEMS'] as $key => $item)
{
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '200', 'width' => '400'), BX_RESIZE_IMAGE_EXACT);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];

    $arResult['ITEMS'][$key]['SERVICE_LIST'] = explode("\n", $item['PREVIEW_TEXT']);

    $arResult['ITEMS'][$key]['LASTING'] = createLastingString($item, 'LASTING');
    $arResult['ITEMS'][$key]['COST'] = createPriceString();
}

function createLastingString($item, $prop)
{
    $result = null;
    $countLasting = 0;
    foreach ($item['PROPERTIES'][$prop]['VALUE'] as $value)
    {
        if($countLasting == 0)
            $result .= $value;
        else
            $result .= "/<br>" . $value;

        $countLasting++;
    }
    return $result;
}

function createPriceString($item, $props = array())
{
    $result = null;
    $countPrices = count($props);
    foreach ($props as $value)
    {
        if($countPrices == 0)
            $result .= $value;
        else
            $result .= "/" . $value;
    }
    return $result;
}
dump($arResult['ITEMS']);