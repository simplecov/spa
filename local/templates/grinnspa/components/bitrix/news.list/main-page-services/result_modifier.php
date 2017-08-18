<?php

foreach($arResult['ITEMS'] as $key => $item)
{
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '200', 'width' => '400'), BX_RESIZE_IMAGE_EXACT);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];

    if(strlen($item['PREVIEW_TEXT']) > 90)
        $arResult['ITEMS'][$key]['PREVIEW_TEXT'] = substr($item['PREVIEW_TEXT'], 0, 60) . '...';
}