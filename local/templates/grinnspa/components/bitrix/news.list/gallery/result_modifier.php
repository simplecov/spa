<?php

use \Bitrix\Main\FileTable as FileTable;

foreach($arResult['ITEMS'] as $key => $item)
{
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '200', 'width' => '400'), BX_RESIZE_IMAGE_EXACT);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];

    $arResult['ITEMS'][$key]['IMAGES'] = collectPropImages($item, 'IMAGES');
}

function collectPropImages($item, $prop)
{
    $result = array();
    foreach($item['PROPERTIES'][$prop]['VALUE'] as $imgId)
    {
        $img = CFile::GetFileArray($imgId);
        $result[] = $img['SRC'];
    }

    return $result;
}

//dump($arResult['ITEMS']);