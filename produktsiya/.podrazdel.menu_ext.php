<?
  if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
  global $APPLICATION;
  $aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
  "IS_SEF" => "Y",
  "SEF_BASE_URL" => "/produktsiya/",
  "SECTION_PAGE_URL" => "?SECTION_ID=#SECTION_ID#",
  "DETAIL_PAGE_URL" => "?SECTION_ID=#SECTION_ID#/#ELEMENT_ID#",
  "IBLOCK_TYPE" => "produktsiya",
  "IBLOCK_ID" => "7",
  "DEPTH_LEVEL" => "3",
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "36000000"
  ),
false
);
  $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
?>