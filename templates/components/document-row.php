<article class="document-row" data-filter-item="<?= e($document['type']) ?>" id="<?= e($document['id']) ?>">
    <span class="document-type" aria-hidden="true">PDF</span>
    <div class="document-body">
        <span class="eyebrow"><?= e($document['label']) ?></span>
        <h3>
            <a href="<?= e(url('src/pdf/' . $document['file'])) ?>" target="_blank" rel="noopener">
                <?= e($document['title']) ?>
            </a>
        </h3>
        <p><?= e($document['description']) ?></p>
        <span class="caption"><?= e($document['pages']) ?> · <?= e(pdf_size($document['file'])) ?></span>
    </div>
    <a class="icon-button" href="<?= e(url('src/pdf/' . $document['file'])) ?>" download aria-label="<?= e('Скачать: ' . $document['title']) ?>">
        <?= icon('download') ?>
    </a>
</article>
