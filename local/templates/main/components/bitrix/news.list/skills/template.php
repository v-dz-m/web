<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="progress-list">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <div class="progress">
                <div class="lead"><?= ($arItem['NAME']) ?? "" ?></div>
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: <?= ($arItem['DETAIL_TEXT']) ?? "" ?>%;">
                    <span><?= ($arItem['DETAIL_TEXT']) ?? "" ?>%</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
