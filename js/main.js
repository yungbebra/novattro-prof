(() => {
    'use strict';

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const mobile = window.matchMedia('(max-width: 900px)');
    const toggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('#site-navigation');

    if (toggle && navigation) {
        document.documentElement.classList.add('js-ready');
        toggle.hidden = false;

        const closeMenu = (restoreFocus = false) => {
            navigation.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Открыть меню');
            if (restoreFocus) toggle.focus();
        };

        toggle.addEventListener('click', () => {
            const open = toggle.getAttribute('aria-expanded') !== 'true';
            navigation.classList.toggle('is-open', open);
            toggle.setAttribute('aria-expanded', String(open));
            toggle.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
        });
        navigation.addEventListener('click', (event) => {
            if (event.target.closest('a')) closeMenu();
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') closeMenu(true);
        });
        document.addEventListener('click', (event) => {
            if (!event.target.closest('.site-header')) closeMenu();
        });
        mobile.addEventListener('change', () => closeMenu());
    }

    document.querySelectorAll('[data-filter-root]').forEach((root) => {
        const controls = root.querySelector('[data-filters]');
        if (!controls) return;
        const buttons = [...controls.querySelectorAll('[data-filter]')];
        const items = [...root.querySelectorAll('[data-filter-item]')];
        const status = controls.querySelector('.filter-status');
        controls.hidden = false;

        const apply = (filter) => {
            if (!buttons.some((button) => button.dataset.filter === filter)) filter = 'all';
            let count = 0;
            items.forEach((item) => {
                const visible = filter === 'all' || item.dataset.filterItem === filter;
                item.hidden = !visible;
                if (visible) count += 1;
            });
            buttons.forEach((button) => button.setAttribute('aria-pressed', String(button.dataset.filter === filter)));
            if (status) status.textContent = `Показано: ${count} из ${items.length}`;
        };

        controls.addEventListener('click', (event) => {
            const button = event.target.closest('[data-filter]');
            if (!button || !controls.contains(button)) return;
            apply(button.dataset.filter);
            const address = new URL(window.location.href);
            if (button.dataset.filter === 'all') address.searchParams.delete('type');
            else address.searchParams.set('type', button.dataset.filter);
            history.replaceState(null, '', address);
        });
        apply(new URL(window.location.href).searchParams.get('type') || 'all');
    });

    document.querySelectorAll('[data-gallery]').forEach((gallery) => {
        const track = gallery.querySelector('.gallery-track');
        const cards = [...track.children];
        const controls = gallery.querySelector('.gallery-controls');
        const previous = gallery.querySelector('.gallery-prev');
        const next = gallery.querySelector('.gallery-next');
        const status = gallery.querySelector('.gallery-status');
        let frame = 0;
        controls.hidden = false;

        const positions = () => {
            const start = track.getBoundingClientRect().left;
            return cards.map((card) => card.getBoundingClientRect().left - start + track.scrollLeft);
        };
        const update = () => {
            const max = track.scrollWidth - track.clientWidth;
            const index = max <= 1 ? 0 : track.scrollLeft >= max - 2 ? cards.length - 1 : positions().reduce((best, pos, i, list) => Math.abs(pos - track.scrollLeft) < Math.abs(list[best] - track.scrollLeft) ? i : best, 0);
            previous.disabled = track.scrollLeft < 2;
            next.disabled = track.scrollLeft >= max - 2;
            status.textContent = `${String(index + 1).padStart(2, '0')} / ${String(cards.length).padStart(2, '0')}`;
        };
        const move = (direction) => {
            const points = positions();
            const current = track.scrollLeft;
            const destination = direction > 0 ? points.find((point) => point > current + 3) : [...points].reverse().find((point) => point < current - 3);
            if (destination === undefined) return;
            track.scrollTo({left: destination, behavior: reducedMotion.matches ? 'instant' : 'smooth'});
        };
        previous.addEventListener('click', () => move(-1));
        next.addEventListener('click', () => move(1));
        track.addEventListener('keydown', (event) => {
            if (event.target !== track) return;
            if (event.key === 'ArrowRight' || event.key === 'ArrowLeft') {
                event.preventDefault();
                move(event.key === 'ArrowRight' ? 1 : -1);
            }
        });
        track.addEventListener('scroll', () => {
            cancelAnimationFrame(frame);
            frame = requestAnimationFrame(update);
        }, {passive: true});
        new ResizeObserver(update).observe(track);
        update();
    });

    const dialog = document.querySelector('.lightbox');
    if (dialog && typeof dialog.showModal === 'function') {
        const image = dialog.querySelector('img');
        const caption = dialog.querySelector('.lightbox-caption');
        let trigger = null;
        document.querySelectorAll('[data-lightbox]').forEach((link) => {
            link.addEventListener('click', (event) => {
                if (event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
                event.preventDefault();
                trigger = link;
                image.src = link.href;
                image.alt = link.dataset.caption || link.querySelector('img')?.alt || '';
                caption.textContent = image.alt;
                dialog.showModal();
                document.body.classList.add('modal-open');
            });
        });
        dialog.querySelector('.lightbox-close').addEventListener('click', () => dialog.close());
        dialog.addEventListener('click', (event) => {
            if (event.target !== dialog) return;
            const bounds = dialog.getBoundingClientRect();
            if (event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom) dialog.close();
        });
        dialog.addEventListener('close', () => {
            document.body.classList.remove('modal-open');
            trigger?.focus();
        });
    }

    const inquiry = document.querySelector('#project-inquiry');
    if (inquiry) {
        inquiry.querySelector('[data-compose]').disabled = false;
        inquiry.addEventListener('submit', (event) => {
            event.preventDefault();
            if (!inquiry.reportValidity()) return;
            const data = new FormData(inquiry);
            const name = String(data.get('name')).trim();
            const message = String(data.get('message')).trim();
            const status = inquiry.querySelector('.form-status');
            if (!name || !message) {
                status.textContent = 'Укажите имя и кратко опишите задачу.';
                return;
            }
            const body = `Имя: ${name}\r\nКомпания: ${String(data.get('company')).trim() || 'Не указана'}\r\nEmail: ${String(data.get('email')).trim()}\r\n\r\n${message}`;
            const address = `mailto:${inquiry.dataset.email}?subject=${encodeURIComponent('Проект с панелями Novattro PROF')}&body=${encodeURIComponent(body)}`;
            const link = document.createElement('a');
            link.href = address;
            link.click();
            status.textContent = 'Письмо подготовлено. Отправьте его в почтовой программе. Если она не открылась, напишите на info@safplast.ru — введённый текст сохранён в форме.';
        });
    }
})();
