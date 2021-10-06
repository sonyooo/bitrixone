<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(empty($arResult['ALL_ITEMS'])) return;?>

	<ul class="header-menu__list">
    <? foreach ($arResult['ALL_ITEMS'] as $arItem): ?>
        <li class="header-menu__item">
            <a href="<?= $arItem['LINK'] ?>" class="header-menu__link"><?= $arItem['TEXT'] ?></a>
        </li>
    <? endforeach; ?>
	</ul>

