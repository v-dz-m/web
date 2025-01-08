<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
<div class="col-lg-7 col-md-7 col-sm-12">
    <div class="footer-nav white-text">
        <nav>
            <ul>
                <?php foreach ($arResult as $item): ?>
                    <li class="mega-parent">
                        <?php if ($item['SELECTED']): ?>
                            <a href="<?= $item['LINK'] ?>" style="color: #00ff80"><?= $item['TEXT'] ?></a>
                        <?php else: ?>
                            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
<?php endif; ?>

