<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<div class="news-list">
    <?php
    /** @var array $arResult */
    foreach ($arResult['ITEMS'] as $item) {?>
        <p class="news-item" id="">
            <b>ФИО клиета:</b> <?= $item['PROPERTIES']['NAME']['VALUE']?>
            (тел. <?= $item['PROPERTIES']['PHONE']['VALUE']?>)
        </p>
        <p class="news-item" id="">
            <b>Адрес клиента:</b><br>
            <?= $item['PROPERTY_ADDRESS_PROPERTY_CITY_VALUE']?><br>
            <?= $item['PROPERTY_ADDRESS_PROPERTY_STREET_VALUE']?>
            <?= $item['PROPERTY_ADDRESS_PROPERTY_HOUSE_VALUE']?> /
            <?= $item['PROPERTY_ADDRESS_PROPERTY_FLAT_VALUE']?>
        </p>
    <?php } ?>
</div>
