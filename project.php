<?php
require_once __DIR__ . '/templates/bootstrap.php';
$slug = is_string($_GET['project'] ?? null) ? $_GET['project'] : '';
$project = $projects[$slug] ?? null;
if ($project === null) {
    http_response_code(404);
    $title = 'Объект не найден';
    $description = 'Откройте портфолио реализованных объектов Novattro PROF.';
} else {
    $title = $project['name'];
    $description = $project['description'];
}
$active = 'projects';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <?php if ($project === null): ?>
    <section class="page-heading container">
        <p class="eyebrow">404</p>
        <h1>Объект не найден.</h1>
        <a class="button" href="<?= e(url('projects.php')) ?>">Открыть портфолио <?= icon('arrow') ?></a>
    </section>
    <?php else: ?>
    <section class="page-heading container">
        <a class="eyebrow breadcrumb" href="<?= e(url('projects.php')) ?>">Объекты / <?= e($project['label']) ?></a>
        <h1><?= e($project['name']) ?></h1>
        <p><?= e($project['location']) ?></p>
    </section>
    <figure class="project-hero container">
        <a href="<?= e(project_image($project['image'], 1600)) ?>" data-lightbox data-caption="<?= e($project['name'] . ' · ' . $project['location']) ?>" aria-label="Увеличить фотографию">
            <img src="<?= e(project_image($project['image'], 1600)) ?>" srcset="<?= e(project_image($project['image'])) ?> 800w, <?= e(project_image($project['image'], 1600)) ?> <?= e((string) $project['width']) ?>w" sizes="100vw" width="<?= e((string) $project['width']) ?>" height="<?= e((string) $project['height']) ?>" fetchpriority="high" alt="<?= e($project['alt']) ?>">
            <span class="image-arrow" aria-hidden="true"><?= icon('plus') ?></span>
        </a>
    </figure>
    <section class="section container project-story">
        <div>
            <p class="eyebrow">Архитектура и материал</p>
            <h2>Светопрозрачность<br>как часть решения.</h2>
            <p><?= e($project['description']) ?></p>
        </div>
        <dl class="project-facts">
            <div>
                <dt>Применение</dt>
                <dd><?= e($project['solution']) ?></dd>
            </div>
            <div>
                <dt>Материал</dt>
                <dd><?= e($project['material']) ?></dd>
            </div>
            <div>
                <dt>Источник</dt>
                <dd>
                    <a href="<?= PROJECT_SOURCE ?>" target="_blank" rel="noopener">Портфолио завода «СафПласт» <?= icon('up-right') ?></a>
                </dd>
            </div>
        </dl>
    </section>
    <section class="section projects-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Другие решения</p>
                <h2>Продолжить знакомство.</h2>
            </div>
            <?php $galleryId = 'related-projects'; $galleryProjects = array_diff_key($projects, [$slug => true]); require __DIR__ . '/templates/components/gallery.php'; ?>
        </div>
    </section>
    <?php require __DIR__ . '/templates/components/contact-band.php'; ?>
    <?php endif; ?>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
