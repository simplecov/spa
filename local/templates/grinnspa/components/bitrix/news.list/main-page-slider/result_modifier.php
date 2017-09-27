<?php
$page = $APPLICATION->GetCurDir();
$dirName = preg_replace('/\//', '', $page);

foreach($arResult['ITEMS'] as $key => $item)
{
    /**
     * Preview picture
     */
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '1080', 'width' => '1920'), BX_RESIZE_IMAGE_PROPORTIONAL);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];

    $arResult['ITEMS'][$key]['LINK'] = $item['PROPERTIES']['LINK']['VALUE'];

    /**
     * Bla-bla-bla
     */
    $arResult['ITEMS'][$key]['FONT_SIZE'] = (preg_replace('/\D/', '', $item['PROPERTIES']['TEXT_SIZE']['VALUE']) * 100) . '%';
}
//dump($arResult['ITEMS']);
