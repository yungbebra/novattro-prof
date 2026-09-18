<div class="gallery" data-gallery aria-label="Реализованные объекты" role="region">
    <div class="gallery-track" tabindex="0" aria-label="Объекты: прокрутите для просмотра" id="<?= e($galleryId) ?>">
        <?php foreach ($galleryProjects as $slug => $project): ?>
        <?php require __DIR__ . '/project-card.php'; ?>
        <?php endforeach; ?>
    </div>
    <div class="gallery-controls" hidden>
        <span class="caption gallery-status" aria-live="polite" aria-atomic="true"></span>
        <div class="gallery-buttons">
            <button class="icon-button gallery-prev" type="button" aria-label="Предыдущий объект" aria-controls="<?= e($galleryId) ?>">
                <?= icon('arrow') ?>
            </button>
            <button class="icon-button gallery-next" type="button" aria-label="Следующий объект" aria-controls="<?= e($galleryId) ?>">
                <?= icon('arrow') ?>
            </button>
        </div>
    </div>
</div>
