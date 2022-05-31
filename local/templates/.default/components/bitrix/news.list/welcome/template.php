<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<div class="news-list">
    <?php
    /** @var array $arResult */
    foreach ($arResult['ITEMS'] as $item) {
        $adress = CIBlockElement::GetByID($item['PROPERTIES']['ADRESS']['VALUE'])->GetNextElement()->GetProperties();
        ?>
        <p class="news-item" id="">
            ФИО клиента: <?= $item['PROPERTIES']['NAME']['VALUE'] ?>
        </p>
        <p class="news-item" id="">
            Телефон: <?= $item['PROPERTIES']['PHONE']['VALUE'] ?>
        </p>
        <p class="news-item" id="">
            Адрес: Город <?= $adress['CITY']['VALUE'] ?>, ул. <?= $adress['STREET']['VALUE'] ?>,
            д. <?= $adress['HOUSE']['VALUE'] ?>, кв. <?= $adress['FLAT']['VALUE'] ?>
        </p>
        <br>
    <?php } ?>
</div>
