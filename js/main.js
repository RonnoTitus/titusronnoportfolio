/* ─── Typewriter ─────────────────────────────────────────────── */
(function () {
    const roles = [
        'IT Student @ Kyambogo University',
        'Web Developer',
        'PHP & MySQL Developer',
        'Computer Science Graduate (MUBS)',
        'Flutter & Mobile Enthusiast',
    ];
    const el = document.getElementById('typewriter');
    if (!el) return;

    let roleIdx = 0, charIdx = 0, deleting = false;

    function tick() {
        const current = roles[roleIdx];
        if (!deleting) {
            el.textContent = current.slice(0, ++charIdx);
            if (charIdx === current.length) {
                deleting = true;
                setTimeout(tick, 1800);
                return;
            }
        } else {
            el.textContent = current.slice(0, --charIdx);
            if (charIdx === 0) {
                deleting = false;
                roleIdx = (roleIdx + 1) % roles.length;
            }
        }
        setTimeout(tick, deleting ? 45 : 90);
    }
    tick();
})();

/* ─── Navbar ─────────────────────────────────────────────────── */
(function () {
    const nav = document.getElementById('nav');
    const toggle = document.getElementById('navToggle');
    const links = document.getElementById('navLinks');

    window.addEventListener('scroll', function () {
        nav.classList.toggle('nav--scrolled', window.scrollY > 60);
    }, { passive: true });

    toggle.addEventListener('click', function () {
        const open = links.classList.toggle('nav-links--open');
        toggle.setAttribute('aria-expanded', open);
    });

    links.querySelectorAll('.nav-link').forEach(function (a) {
        a.addEventListener('click', function () {
            links.classList.remove('nav-links--open');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });

    const navLinks = document.querySelectorAll('.nav-link');
    const sections = Array.from(navLinks).map(function (a) {
        return document.querySelector(a.getAttribute('href'));
    });

    window.addEventListener('scroll', function () {
        let current = '';
        sections.forEach(function (sec) {
            if (!sec) return;
            if (window.scrollY >= sec.offsetTop - 100) current = '#' + sec.id;
        });
        navLinks.forEach(function (a) {
            a.classList.toggle('nav-link--active', a.getAttribute('href') === current);
        });
    }, { passive: true });
})();

/* ─── Skill bars (IntersectionObserver) ─────────────────────── */
(function () {
    const fills = document.querySelectorAll('.skill-fill');
    if (!fills.length) return;

    const obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            e.target.style.width = e.target.dataset.level + '%';
            obs.unobserve(e.target);
        });
    }, { threshold: 0.3 });

    fills.forEach(function (f) {
        f.style.width = '0';
        obs.observe(f);
    });
})();

/* ─── Scroll-reveal ─────────────────────────────────────────── */
(function () {
    const items = document.querySelectorAll(
        '.project-card, .timeline-item, .edu-card, .skill-group, .about-content, .about-avatar'
    );

    const obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            e.target.classList.add('revealed');
            obs.unobserve(e.target);
        });
    }, { threshold: 0.1 });

    items.forEach(function (el) {
        el.classList.add('reveal');
        obs.observe(el);
    });
})();

/* ─── Contact form ───────────────────────────────────────────── */
(function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const status  = document.getElementById('formStatus');
    const submit  = document.getElementById('submitBtn');
    const btnText = submit.querySelector('.btn-text');
    const btnLoad = submit.querySelector('.btn-loading');

    function setFieldError(fieldId, message) {
        const el = document.getElementById(fieldId + 'Error');
        const input = document.getElementById(fieldId);
        if (el) el.textContent = message;
        if (input) input.classList.toggle('input-error', !!message);
    }

    function clearErrors() {
        ['name', 'email', 'subject', 'message'].forEach(function (f) {
            setFieldError(f, '');
        });
        status.textContent = '';
        status.className = 'form-status';
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        clearErrors();

        const data = new FormData(form);

        submit.disabled = true;
        btnText.hidden = true;
        btnLoad.hidden = false;

        try {
            const res = await fetch('handler/contact.php', {
                method: 'POST',
                body: data,
            });
            const json = await res.json();

            if (json.success) {
                status.textContent = json.message;
                status.classList.add('form-status--success');
                form.reset();
            } else {
                if (json.errors) {
                    Object.entries(json.errors).forEach(function ([k, v]) {
                        setFieldError(k, v);
                    });
                }
                status.textContent = json.message || 'Please fix the errors above.';
                status.classList.add('form-status--error');
            }
        } catch (err) {
            status.textContent = 'Something went wrong. Please try again.';
            status.classList.add('form-status--error');
        } finally {
            submit.disabled = false;
            btnText.hidden = false;
            btnLoad.hidden = true;
        }
    });
})();

/* ─── Smooth scroll for anchor links ────────────────────────── */
document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
        const target = document.querySelector(a.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
    });
});
