<article class="project-card" data-filter-item="<?= e($project['type']) ?>">
    <a class="project-image" href="<?= e(url('project.php?project=' . $slug)) ?>">
        <img src="<?= e(project_image($project['image'])) ?>" srcset="<?= e(project_image($project['image'])) ?> 800w, <?= e(project_image($project['image'], 1600)) ?> <?= e((string) $project['width']) ?>w" sizes="(max-width: 700px) 100vw, 60vw" width="<?= e((string) $project['width']) ?>" height="<?= e((string) $project['height']) ?>" loading="lazy" decoding="async" alt="<?= e($project['alt']) ?>">
        <span class="image-arrow" aria-hidden="true"><?= icon('up-right') ?></span>
    </a>
    <div class="project-caption">
        <h3>
            <a href="<?= e(url('project.php?project=' . $slug)) ?>">
                <?= e($project['name']) ?>
            </a>
        </h3>
        <span class="caption"><?= e($project['location']) ?></span>
    </div>
</article>
