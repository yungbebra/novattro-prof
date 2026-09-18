<footer class="site-footer">
    <div class="container footer-main">
        <div class="footer-brand">
            <a href="<?= e(url()) ?>" aria-label="Novattro PROF — главная"><img src="<?= e(url('src/icons/novattro-prof.svg')) ?>" width="688" height="229" alt="Novattro PROF" loading="lazy"></a>
            <p>Светопрозрачные системы<br>для архитектуры и строительства.</p>
        </div>
        <nav aria-label="Навигация в подвале">
            <?php foreach ($navigation as [$label, $path]): ?>
                <a href="<?= e(url($path)) ?>"><?= e($label) ?></a>
            <?php endforeach; ?>
        </nav>
        <div class="footer-contact">
            <span class="eyebrow">Производитель — завод «СафПласт»</span>
            <a class="contact-link" href="tel:<?= CONTACT_PHONE ?>">+7 (843) 233-05-33</a>
            <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a>
            <p>Республика Татарстан, Высокогорский район,<br>территория СафПласт, здание 1.</p>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>© <?= date('Y') ?> ООО «СафПласт»</span>
        <a href="https://safplast.ru/promo/dealer/pd.pdf" target="_blank" rel="noopener">Политика обработки данных</a>
        <a href="https://safplast.ru/" target="_blank" rel="noopener">Сайт производителя <?= icon('up-right') ?></a>
    </div>
</footer>
<dialog class="lightbox" aria-label="Просмотр фотографии">
    <button class="icon-button lightbox-close" type="button" aria-label="Закрыть фотографию"><?= icon('close') ?></button>
    <img src="<?= e(url('src/icons/novattro-prof.svg')) ?>" width="1600" height="1000" alt="">
    <p class="lightbox-caption"></p>
</dialog>
</body>
</html>
