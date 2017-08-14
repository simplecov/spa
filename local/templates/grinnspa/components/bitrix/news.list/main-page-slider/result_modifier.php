<?php

foreach($arResult['ITEMS'] as $key => $item)
{
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '1080', 'width' => '1920'), BX_RESIZE_IMAGE_PROPORTIONAL);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];
}

//dump($arResult['ITEMS']);