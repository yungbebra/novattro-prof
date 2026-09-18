<?php
require_once __DIR__ . '/templates/bootstrap.php';
$title = 'Проектирование и монтаж';
$description = 'Как подойти к проекту с Novattro PROF: выбор панели, комплектующие, узлы примыкания и документация по монтажу.';
$active = 'blog';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <section class="page-heading container">
        <p class="eyebrow">Архитекторам и проектировщикам</p>
        <h1>От первого эскиза<br>до узла примыкания.</h1>
        <p>Панель работает в составе системы. Геометрия здания, климат и крепления учитываются вместе — ещё на этапе проекта.</p>
    </section>
    <section class="container section-bottom design-overview">
        <div class="design-image">
            <img src="<?= e(project_image('safplast',1600)) ?>" width="1600" height="898" alt="Узел ленточного остекления на фасаде завода СафПласт" fetchpriority="high">
        </div>
        <div class="design-intro">
            <p class="eyebrow">Подход к системе</p>
            <h2>Начните с задачи.<br>Затем — сечение.</h2>
            <p>Сформулируйте назначение конструкции, размеры, расположение и требования к свету. Эти данные станут основой для выбора панели и её комплектации.</p>
            <a class="button" href="<?= e(url('src/pdf/novattro-prof-technical-solutions.pdf')) ?>" target="_blank" rel="noopener">Альбом решений <?= icon('up-right') ?></a>
        </div>
    </section>
    <section class="section technical-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Последовательность работы</p>
                <h2>Четыре опоры проекта.</h2>
            </div>
            <div class="design-steps">
                <article>
                    <span class="step-number">01</span>
                    <h3>Назначение и геометрия</h3>
                    <p>Фасад, кровля или перегородка. Размеры пролётов, уклон и форма конструкции задают исходные условия.</p>
                </article>
                <article>
                    <span class="step-number">02</span>
                    <h3>Панель и исполнение</h3>
                    <p>Толщина, тип замка и цвет. Требования к теплоизоляции и пожарным показателям проверяются для выбранной модели.</p>
                </article>
                <article>
                    <span class="step-number">03</span>
                    <h3>Крепления и примыкания</h3>
                    <p>Профили, анкеры, уплотнители и опоры. В узлах предусматриваются температурные перемещения панели.</p>
                </article>
                <article>
                    <span class="step-number">04</span>
                    <h3>Монтаж по документации</h3>
                    <p>Ориентация УФ-слоя, защита торцов и порядок сборки проверяются по инструкции выбранной системы.</p>
                </article>
            </div>
        </div>
    </section>
    <section class="section container faq-section">
        <div>
            <p class="eyebrow">Практические вопросы</p>
            <h2>Что учесть<br>заранее.</h2>
            <a class="text-link" href="<?= e(url('documents.php')) ?>">Открыть документацию <?= icon('arrow') ?></a>
        </div>
        <div class="accordion">
            <details open>
                <summary>Чем отличаются типы замкового соединения? <?= icon('plus') ?>
                </summary>
                <p>У фасадных панелей S замок расположен сбоку. У кровельных C соединение находится в верхней части панели, у U используется U-коннектор. Сечения и варианты узлов приведены в альбоме технических решений.</p>
            </details>
            <details>
                <summary>Можно ли выбрать панель только по толщине? <?= icon('plus') ?>
                </summary>
                <p>Для выбора также нужны геометрия конструкции, нагрузки, параметры опирания и требования к свету и теплоизоляции. Толщина — одна из характеристик системы.</p>
            </details>
            <details>
                <summary>Что важно при монтаже? <?= icon('plus') ?>
                </summary>
                <p>Нужно соблюдать ориентацию панели, требования к торцам и креплениям, учитывать температурные изменения размеров. Полная последовательность зависит от конкретной модели и узла — используйте инструкцию производителя.</p>
            </details>
            <details>
                <summary>С чего начать обсуждение с заводом? <?= icon('plus') ?>
                </summary>
                <p>Подготовьте местоположение объекта, назначение конструкции, размеры и чертежи при наличии. Укажите требования к теплотехнике, пожарной безопасности и внешнему виду.</p>
            </details>
        </div>
    </section>
    <?php require __DIR__ . '/templates/components/contact-band.php'; ?>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
