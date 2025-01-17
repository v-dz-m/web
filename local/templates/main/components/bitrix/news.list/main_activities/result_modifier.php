<?php
$arResult['PARENT_DESCRIPTION'] = '';
$arResult['PARENT_NAME'] = '';
if ($arParams['PARENT_SECTION'] > 0)
{
    $iterator = CIBlockSection::GetList(
        [],
        [
            'IBLOCK_ID' => $arResult['ID'],
            'ID' => $arParams['PARENT_SECTION']
        ],
        false,
        [
            'ID',
            'IBLOCK_ID',
            'NAME',
            'DESCRIPTION',
        ]
    );
    $row = $iterator->GetNext();
    if ($row)
    {
        $arResult['PARENT_NAME'] = $row['NAME'];
        $arResult['PARENT_DESCRIPTION'] = $row['DESCRIPTION'];
    }
}
