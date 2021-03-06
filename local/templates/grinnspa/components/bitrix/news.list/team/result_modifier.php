<?php

foreach($arResult['ITEMS'] as $key => $item)
{
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '200', 'width' => '400'), BX_RESIZE_IMAGE_EXACT);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];

    $arResult['ITEMS'][$key]['SERVICE_LIST'] = explode("\n", $item['PREVIEW_TEXT']);

    $arResult['ITEMS'][$key]['LASTING'] = createLastingString($item, 'LASTING');
    $arResult['ITEMS'][$key]['COST'] = createPriceString(array($item['PROPERTIES']['COST_SIX']['VALUE'], $item['PROPERTIES']['COST_TWELVE']['VALUE']));
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
            $result .= " /<br>" . $value;

        $countLasting++;
    }
    return $result;
}

function createPriceString($props = array())
{
    $result = null;
    $countPrices = 0;
    foreach ($props as $value)
    {
        if(strlen($value) <= 0)
            continue;

        $value .= ' <span class="ruble">&#8381;</span>';
        if($countPrices == 0)
            $result .= $value;
        else
            $result .= " / " . $value;
        $countPrices++;
    }
    return $result;
}
//dump($arResult['ITEMS']);