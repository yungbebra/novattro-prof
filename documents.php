<?php
require_once __DIR__ . '/templates/bootstrap.php';
$title = 'Документы';
$description = 'Документация Novattro PROF: каталог панелей, альбом технических решений, проектирование и монтаж, декларация качества.';
$active = 'documents';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <section class="page-heading container">
        <p class="eyebrow">Техническая библиотека</p>
        <h1>Основа<br>для точных решений.</h1>
        <p>Документы завода «СафПласт» для знакомства с панелями, проектирования и монтажа. Открывайте или скачивайте без регистрации.</p>
    </section>
    <section class="container section-bottom document-page" data-filter-root aria-label="Документы производителя">
        <div class="filter-bar" role="group" aria-label="Назначение документа" hidden data-filters>
            <button class="filter-button" type="button" data-filter="all" aria-pressed="true">Все документы <span>04</span></button>
            <button class="filter-button" type="button" data-filter="product" aria-pressed="false">О продукте</button>
            <button class="filter-button" type="button" data-filter="design" aria-pressed="false">Проектирование и монтаж</button>
            <button class="filter-button" type="button" data-filter="quality" aria-pressed="false">Качество</button>
            <span class="filter-status caption" aria-live="polite"></span>
        </div>
        <div class="document-list">
            <?php foreach ($documents as $document): require __DIR__ . '/templates/components/document-row.php'; endforeach; ?>
        </div>
        <div class="document-footnote">
            <p>Для рабочей документации уточняйте актуальную редакцию и параметры конкретной поставки. Светопропускание, пожарные характеристики и комплектующие зависят от исполнения панели.</p>
            <a class="text-link" href="<?= PRODUCT_SOURCE ?>" target="_blank" rel="noopener">Документы на сайте завода <?= icon('up-right') ?></a>
        </div>
    </section>
    <?php require __DIR__ . '/templates/components/contact-band.php'; ?>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
