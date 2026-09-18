<?php
require_once __DIR__ . '/templates/bootstrap.php';
$title = 'Панели и характеристики';
$description = 'Пять моделей Novattro PROF для фасадов и кровель. Типы замков, размеры, теплоизоляция и технические решения.';
$active = 'catalog';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <section class="page-heading container">
        <p class="eyebrow">Продукт / Novattro PROF</p>
        <h1>Конструкция,<br>открытая свету.</h1>
        <p>Панели с боковым и верхним замком для фасадов, кровель и перегородок. Сравните модели и выберите основу для вашего решения.</p>
        <a class="text-link" href="#comparison">К таблице характеристик <?= icon('arrow') ?></a>
    </section>
    <section class="container section-bottom" data-filter-root>
        <div class="filter-bar" role="group" aria-label="Назначение панели" hidden data-filters>
            <button type="button" class="filter-button" aria-pressed="true" data-filter="all">Все панели <span>05</span></button>
            <button type="button" class="filter-button" aria-pressed="false" data-filter="facade">Фасадные <span>02</span></button>
            <button type="button" class="filter-button" aria-pressed="false" data-filter="roof">Кровельные <span>03</span></button>
            <span class="filter-status caption" aria-live="polite"></span>
        </div>
        <div class="product-grid">
            <?php foreach ($products as $product): ?>
            <article class="product-card" id="<?= e($product['id']) ?>" data-filter-item="<?= e($product['type']) ?>">
                <div class="product-card-label">
                    <span class="eyebrow"><?= e($product['label']) ?></span>
                    <span class="caption"><?= e($product['thickness']) ?> мм</span>
                </div>
                <a class="product-visual" href="<?= e(url('src/images/products/' . $product['image'] . '.webp')) ?>" data-lightbox data-caption="<?= e('Сечение Novattro PROF ' . $product['name']) ?>" aria-label="<?= e('Увеличить сечение ' . $product['name']) ?>">
                    <img src="<?= e(url('src/images/products/' . $product['image'] . '.webp')) ?>" width="400" height="400" loading="lazy" alt="<?= e('Замковое соединение панели Novattro PROF ' . $product['name']) ?>">
                    <span class="image-arrow" aria-hidden="true"><?= icon('plus') ?></span>
                </a>
                <div class="product-card-body">
                    <h2>PROF <?= e($product['name']) ?></h2>
                    <p><?= e($product['description']) ?></p>
                    <dl class="product-specs">
                        <div>
                            <dt>Ширина</dt>
                            <dd><?= e($product['width']) ?> мм</dd>
                        </div>
                        <div>
                            <dt>Слои</dt>
                            <dd><?= e($product['layers']) ?></dd>
                        </div>
                        <div>
                            <dt>Соединение</dt>
                            <dd><?= e($product['lock']) ?></dd>
                        </div>
                    </dl>
                    <a class="text-link" href="<?= e(url('src/pdf/novattro-prof-technical-solutions.pdf#page=' . $product['page'])) ?>" target="_blank" rel="noopener">Узлы и сечения <?= icon('up-right') ?></a>
                </div>
            </article>
            <?php endforeach; ?>
            <aside class="product-help">
                <p class="eyebrow">Панель + комплектующие</p>
                <h2>Система<br>для вашей<br>конструкции.</h2>
                <p>Профили, анкеры, уплотнители и торцевые элементы подбираются вместе с панелью.</p>
                <a class="text-link" href="<?= e(url('contacts.php#request')) ?>">Подобрать комплектацию <?= icon('arrow') ?></a>
            </aside>
        </div>
    </section>
    <section class="section comparison-section" id="comparison">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Параметры выбора</p>
                <h2>Всё важное.<br>В одной таблице.</h2>
            </div>
            <div class="table-scroll" tabindex="0" role="region" aria-label="Сравнение моделей панелей. Таблица прокручивается горизонтально.">
                <table>
                    <caption class="visually-hidden">Характеристики замковых панелей Novattro PROF</caption>
                    <thead>
                        <tr>
                            <th scope="col">Характеристика</th>
                            <?php foreach ($products as $product): ?>
                            <th scope="col"><?= e($product['name']) ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (['Назначение' => 'label', 'Толщина, мм' => 'thickness', 'Ширина, мм' => 'width', 'Количество слоёв' => 'layers', 'Тип соединения' => 'lock', 'Теплопередача U, Вт/(м²·К)' => 'u'] as $label => $field): ?>
                        <tr>
                            <th scope="row"><?= e($label) ?></th>
                            <?php foreach ($products as $product): ?>
                            <td><?= e($product[$field]) ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="table-note">
                <p>Чем меньше U, тем меньше тепла проходит через панель при одинаковых условиях. Значение для панели не заменяет теплотехнический расчёт всей конструкции.</p>
                <a href="<?= PRODUCT_SOURCE ?>" target="_blank" rel="noopener">Характеристики производителя <?= icon('up-right') ?></a>
            </div>
        </div>
    </section>
    <section class="section container color-section">
        <div>
            <p class="eyebrow">Цвет и свет</p>
            <h2>Характер поверхности<br>меняется вместе со светом.</h2>
            <p>Прозрачные и цветные исполнения подбираются под архитектурную задачу. Доступность цвета и светопропускание уточняются для выбранной модели.</p>
            <p class="caption">Фотография показывает реализованный объект. Для согласования оттенка используйте физический образец: экран не передаёт цвет и прозрачность точно.</p>
            <a class="text-link" href="<?= e(url('contacts.php#request')) ?>">Обсудить цвет панели <?= icon('arrow') ?></a>
        </div>
        <figure>
            <img src="<?= e(project_image('kuyuki')) ?>" width="800" height="450" loading="lazy" alt="Вечерний фасад с подсвеченными опаловыми панелями">
            <figcaption class="caption">
                Фасадная панель 16 мм, опал · Казанский городской округ
            </figcaption>
        </figure>
    </section>
    <?php require __DIR__ . '/templates/components/contact-band.php'; ?>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
