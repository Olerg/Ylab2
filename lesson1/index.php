<?
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle("Lesson1");
?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "welcome",
    array(
        "IBLOCK_TYPE" => "contacts",
        "IBLOCK_ID" => "4",
        "PROPERTY_CODE" => array(
            0 => "PHONE",
            1 => "FULLNAME",
            2 => "ADDRESS",
        ),
        "PAGER_TITLE" => "Контакты",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "0",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DISPLAY_PANEL" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "N",
        "DISPLAY_FILTER" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_SHOW_ALL" => "N",
        "COMPONENT_TEMPLATE" => "welcome",
        "CHECK_DATES" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_GROUPS" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "STRICT_SECTION_CHECK" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
