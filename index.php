<?php
require_once __DIR__ . '/templates/bootstrap.php';
$title = 'Замковые панели для архитектуры света';
$description = 'Светопрозрачные замковые панели Novattro PROF от завода «СафПласт»: фасады, кровли, реальные объекты и технические решения.';
$active = 'home';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <section class="hero">
        <div class="hero-copy">
            <p class="eyebrow">Novattro PROF / Замковые панели</p>
            <h1>Свет в основе<br>
                <span>архитектуры.</span>
            </h1>
            <p class="hero-description">Светопрозрачные панели из сотового поликарбоната. Для фасадов, кровель и пространств, открытых свету.</p>
            <div class="actions">
                <a class="button" href="<?= e(url('catalog.php')) ?>">Изучить панели <?= icon('arrow') ?></a>
                <a class="text-link" href="<?= e(url('projects.php')) ?>">Посмотреть объекты <?= icon('up-right') ?></a>
            </div>
            <div class="hero-signature">
                <span class="status-dot"></span> Разработано и произведено заводом «СафПласт»
            </div>
        </div>
        <figure class="hero-figure">
            <img src="<?= e(project_image('sokolniki', 1600)) ?>" srcset="<?= e(project_image('sokolniki')) ?> 800w, <?= e(project_image('sokolniki', 1600)) ?> 1600w" sizes="(max-width: 900px) 100vw, 60vw" width="1600" height="1110" fetchpriority="high" alt="Архитектура теннисного корта с волнообразной кровлей и панелями Novattro PROF">
            <figcaption>
                <div>
                    <span class="eyebrow">Воплощено в архитектуре</span>
                    <span>Теннисный корт · Novattro PROF</span>
                </div>
                <a class="icon-button" href="<?= e(url('project.php?project=sokolniki')) ?>" aria-label="Подробнее о теннисном корте">
                    <?= icon('up-right') ?>
                </a>
            </figcaption>
        </figure>
    </section>
    <div class="container product-ribbon">
        <span>Естественный свет</span>
        <span>Многослойная структура</span>
        <span>Замковое соединение</span>
        <a href="<?= e(url('documents.php')) ?>">Техническая документация <?= icon('up-right') ?></a>
    </div>
    <section class="section container material-section" id="material">
        <div class="section-heading">
            <p class="eyebrow">01 / Материал</p>
            <h2>Панель. Замок.<br>Цельная система.</h2>
        </div>
        <div class="material-layout">
            <figure class="material-figure">
                <a href="<?= e(url('src/images/products/40-7s.webp')) ?>" data-lightbox data-caption="Боковое замковое соединение Novattro PROF 500 40-7 S" aria-label="Увеличить изображение бокового замка">
                    <img src="<?= e(url('src/images/products/40-7s.webp')) ?>" width="400" height="400" loading="lazy" alt="Сечение двух панелей Novattro PROF с боковым замковым соединением">
                    <span class="image-arrow" aria-hidden="true"><?= icon('plus') ?></span>
                </a>
                <figcaption class="caption">
                    Сечение Novattro PROF 500 40-7 S · Боковой замок
                </figcaption>
            </figure>
            <div class="material-copy">
                <p class="intro">Архитектурная поверхность начинается с продуманного соединения.</p>
                <p>Замок встроен в геометрию панели. Вместе с креплениями и профилями он образует систему для светопрозрачной оболочки здания.</p>
                <div class="feature-row">
                    <span>01</span>
                    <div>
                        <h3>Свет внутри пространства</h3>
                        <p>Сотовая структура пропускает свет. Цвет и исполнение панели определяют характер светопрозрачной поверхности.</p>
                    </div>
                </div>
                <div class="feature-row">
                    <span>02</span>
                    <div>
                        <h3>Теплоизоляция в структуре</h3>
                        <p>Воздушные ячейки в нескольких слоях замедляют передачу тепла. Характеристики зависят от модели панели.</p>
                    </div>
                </div>
                <div class="feature-row">
                    <span>03</span>
                    <div>
                        <h3>Соединение как часть конструкции</h3>
                        <p>Замок соединяет соседние панели, а система креплений учитывает температурные изменения размеров.</p>
                    </div>
                </div>
                <a class="text-link" href="<?= e(url('catalog.php#comparison')) ?>">Сравнить характеристики <?= icon('arrow') ?></a>
            </div>
        </div>
    </section>
    <section class="section projects-section">
        <div class="container">
            <div class="section-heading heading-with-link">
                <div>
                    <p class="eyebrow">02 / Объекты</p>
                    <h2>Разная архитектура.<br>Один материал.</h2>
                </div>
                <a class="text-link" href="<?= e(url('projects.php')) ?>">Все объекты <?= icon('arrow') ?></a>
            </div>
            <?php $galleryId = 'home-projects'; $galleryProjects = array_intersect_key($projects, array_flip(['sibur', 'safplast', 'church', 'kuyuki'])); require __DIR__ . '/templates/components/gallery.php'; ?>
        </div>
    </section>
    <section class="section container">
        <div class="section-heading heading-with-link">
            <div>
                <p class="eyebrow">03 / Системы панелей</p>
                <h2>Для фасада.<br>Для кровли.</h2>
            </div>
            <p class="heading-description">Два направления применения, пять моделей. Выбор начинается с задачи вашего проекта.</p>
        </div>
        <div class="system-grid">
            <a class="system-card" href="<?= e(url('catalog.php?type=facade')) ?>">
                <div class="system-card-top">
                    <span class="eyebrow">S / Боковой замок</span>
                    <?= icon('up-right') ?>
                </div>
                <img src="<?= e(url('src/images/products/16-5s.webp')) ?>" width="400" height="400" loading="lazy" alt="Боковой замок фасадной панели">
                <div class="system-card-bottom">
                    <h3>Фасадные панели</h3>
                    <span>16 и 40 мм</span>
                </div>
            </a>
            <a class="system-card" href="<?= e(url('catalog.php?type=roof')) ?>">
                <div class="system-card-top">
                    <span class="eyebrow">C, U / Верхний замок</span>
                    <?= icon('up-right') ?>
                </div>
                <img src="<?= e(url('src/images/products/40-7u.webp')) ?>" width="400" height="400" loading="lazy" alt="Верхний замок кровельной панели с U-коннектором">
                <div class="system-card-bottom">
                    <h3>Кровельные панели</h3>
                    <span>10, 25 и 40 мм</span>
                </div>
            </a>
        </div>
    </section>
    <section class="section technical-section">
        <div class="container technical-layout">
            <div>
                <p class="eyebrow">04 / Для профессионалов</p>
                <h2>Архитектура,<br>за которой<br>стоит инженерия.</h2>
                <p>От выбора сечения до узла примыкания. Документы производителя для работы над вашим проектом.</p>
                <a class="text-link" href="<?= e(url('documents.php')) ?>">Все документы <?= icon('arrow') ?></a>
            </div>
            <div class="document-list">
                <?php foreach (array_slice($documents, 1, 2) as $document): require __DIR__ . '/templates/components/document-row.php'; endforeach; ?>
            </div>
        </div>
    </section>
    <?php require __DIR__ . '/templates/components/contact-band.php'; ?>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
