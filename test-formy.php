<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тест формы");
?>

<div class="popup__close"></div>
	<div class="popup__content">
<?$APPLICATION->IncludeComponent(
	"bitrix:form", 
	"form_for_message", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NAME_TEMPLATE" => "",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "Y",
		"SHOW_LIST_PAGE" => "N",
		"SHOW_STATUS" => "Y",
		"SHOW_VIEW_PAGE" => "Y",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "/",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "1",
		"COMPONENT_TEMPLATE" => "form_for_message",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>