<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <div class="header-main-menu hidden-xs">
        <nav id="primary-menu">
            <ul class="main-menu text-right">
                <?php foreach ($arResult as $item): ?>
                    <li>
                <?php if ($item['SELECTED']): ?>
                    <a href="<?= $item['LINK'] ?>" style="color: #00ff80"><?= $item['TEXT'] ?></a>
                <?php else: ?>
                    <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                <?php endif; ?>
                    </li>
                <?php endforeach; ?>
        </nav>
    </div>
<?php endif; ?>
