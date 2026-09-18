<?php
require_once __DIR__ . '/templates/bootstrap.php';
$title = 'Обсудить проект';
$description = 'Связаться с заводом СафПласт по замковым панелям Novattro PROF: подбор панелей, технические вопросы и комплектация.';
$active = 'contacts';
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/header.php';
?>
<main id="main">
    <section class="page-heading container">
        <p class="eyebrow">Контакты / Завод «СафПласт»</p>
        <h1>Давайте обсудим<br>ваш проект.</h1>
        <p>Подбор панели, технические вопросы и комплектация. Начните с разговора со специалистами производителя.</p>
    </section>
    <section class="container section-bottom contact-layout">
        <div class="contact-details">
            <p class="eyebrow">Напрямую с производителем</p>
            <a class="contact-phone" href="tel:<?= CONTACT_PHONE ?>">+7 (843) 233-05-33</a>
            <a class="contact-email" href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?> <?= icon('up-right') ?></a>
            <div class="address">
                <h2>Завод «СафПласт»</h2>
                <p>Россия, Республика Татарстан,<br>Высокогорский район,<br>территория СафПласт, здание 1.</p>
                <a class="text-link" href="https://safplast.ru/contacts/" target="_blank" rel="noopener">Контакты на сайте завода <?= icon('up-right') ?></a>
            </div>
            <img src="<?= e(project_image('safplast')) ?>" width="800" height="449" alt="Фасад производственной площадки СафПласт" loading="lazy">
        </div>
        <div class="inquiry" id="request">
            <p class="eyebrow">Расскажите о задаче</p>
            <h2>Кратко о вашем объекте.</h2>
            <p>Подготовьте письмо специалистам. Оно откроется в вашей почтовой программе — останется проверить текст, приложить чертежи и отправить.</p>
            <form id="project-inquiry" data-email="<?= CONTACT_EMAIL ?>">
                <div class="form-grid">
                    <div class="field">
                        <label for="inquiry-name">Ваше имя</label>
                        <input id="inquiry-name" name="name" autocomplete="name" maxlength="100" required>
                    </div>
                    <div class="field">
                        <label for="inquiry-company">Компания <span class="caption">(необязательно)</span></label>
                        <input id="inquiry-company" name="company" autocomplete="organization" maxlength="150">
                    </div>
                </div>
                <div class="field">
                    <label for="inquiry-email">Электронная почта</label>
                    <input id="inquiry-email" name="email" type="email" autocomplete="email" maxlength="200" required>
                </div>
                <div class="field">
                    <label for="inquiry-message">Что планируете построить?</label>
                    <textarea id="inquiry-message" name="message" rows="5" maxlength="1500" placeholder="Тип объекта, город, размеры конструкции и вопросы по материалу" required></textarea>
                </div>
                <button class="button" type="submit" disabled data-compose>Открыть письмо в почте <?= icon('up-right') ?></button>
                <p class="form-status caption" role="status" aria-live="polite"></p>
                <noscript>
                    <p>Для подготовки письма включите JavaScript или напишите напрямую: <a href="mailto:<?= CONTACT_EMAIL ?>">
                            <?= CONTACT_EMAIL ?>
                        </a>.</p>
                </noscript>
            </form>
            <p class="caption inquiry-note">Можно сразу написать на <a href="mailto:<?= CONTACT_EMAIL ?>">
                    <?= CONTACT_EMAIL ?>
                </a>. Поля формы не отправляются на сервер и не сохраняются на сайте.</p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/templates/footer.php'; ?>
