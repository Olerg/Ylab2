<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';


/** @var CAllMain $APPLICATION */
$APPLICATION->SetTitle("Lesson 1");
?>

<?php
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'welcome',
    [
        'IBLOCK_TYPE' => 'contacts',
        "IBLOCK_ID" => '4',

        'PROPERTY_CODE' => ['NAME', 'PHONE', 'ADDRESS'],
        'FIELD_CODE' => [
            'PROPERTY_ADDRESS.PROPERTY_CITY',
            'PROPERTY_ADDRESS.PROPERTY_STREET',
            'PROPERTY_ADDRESS.PROPERTY_HOSE',
            'PROPERTY_ADDRESS.PROPERTY_FLAT',
        ]
    ]
);
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'?>
