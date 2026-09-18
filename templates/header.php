<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?= e(url()) ?>" aria-label="Novattro PROF — главная">
            <img src="<?= e(url('src/icons/novattro-prof.svg')) ?>" width="688" height="229" alt="Novattro PROF">
        </a>
        <button class="menu-toggle icon-button" type="button" aria-expanded="false" aria-controls="site-navigation" aria-label="Открыть меню" hidden>
            <?= icon('menu') ?>
        </button>
        <nav id="site-navigation" class="site-navigation" aria-label="Основная навигация">
            <?php foreach ($navigation as $key => [$label, $path]): ?>
                <a href="<?= e(url($path)) ?>"<?= ($active ?? '') === $key ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
            <?php endforeach; ?>
            <a class="button button-small" href="<?= e(url('contacts.php#request')) ?>">Обсудить проект <?= icon('up-right') ?></a>
        </nav>
    </div>
</header>
