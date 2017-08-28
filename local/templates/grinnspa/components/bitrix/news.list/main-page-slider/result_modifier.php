<?php
$page = $APPLICATION->GetCurDir();
$dirName = preg_replace('/\//', '', $page);

foreach($arResult['ITEMS'] as $key => $item)
{
    $image = CFile::resizeImageGet($item['PREVIEW_PICTURE'], array('height' => '1080', 'width' => '1920'), BX_RESIZE_IMAGE_PROPORTIONAL);
    $arResult['ITEMS'][$key]['IMAGE'] = $image['src'];

    $arResult['ITEMS_CODE'][] = $item['CODE'];
}

foreach($arResult['ITEMS'] as $key => $item)
{
    if($dirName == $item['CODE'])
        $arResult['ITEMS'][$key]['ACTIVE_SLIDE'] = 'active';
    elseif(!in_array($dirName, $arResult['ITEMS_CODE']))
    {
        $arResult['ITEMS'][0]['ACTIVE_SLIDE'] = 'active';
    }
}