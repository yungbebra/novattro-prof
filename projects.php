<?php
require_once __DIR__ . '/templates/bootstrap.php';
$title = 'Реализованные объекты';
$description = 'Novattro PROF в архитектуре: спортивные здания, экопавильон СИБУР, промышленные фасады и объекты в Якутии.';
$active = 'projects';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <section class="page-heading container">
        <p class="eyebrow">Практика / Объекты</p>
        <h1>Материал.<br>В масштабе здания.</h1>
        <p>От производственного фасада до городского павильона. Реализованные решения с панелями Novattro PROF из портфолио завода.</p>
    </section>
    <section class="container section-bottom" data-filter-root aria-label="Портфолио">
        <div class="filter-bar" role="group" aria-label="Тип объекта" data-filters hidden>
            <button class="filter-button" type="button" data-filter="all" aria-pressed="true">Все объекты <span>05</span></button>
            <button class="filter-button" type="button" data-filter="public" aria-pressed="false">Общественные</button>
            <button class="filter-button" type="button" data-filter="industrial" aria-pressed="false">Промышленные</button>
            <button class="filter-button" type="button" data-filter="sport" aria-pressed="false">Спортивные</button>
            <span class="filter-status caption" aria-live="polite"></span>
        </div>
        <div class="projects-grid">
            <?php foreach ($projects as $slug => $project): require __DIR__ . '/templates/components/project-card.php'; endforeach; ?>
        </div>
        <p class="source-note caption">Фотографии и сведения об объектах — <a href="<?= PROJECT_SOURCE ?>" target="_blank" rel="noopener">портфолио производителя</a>.</p>
    </section>
    <?php require __DIR__ . '/templates/components/contact-band.php'; ?>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
