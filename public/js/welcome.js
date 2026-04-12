document.addEventListener('DOMContentLoaded', () => {
    // ── Navbar scroll effect ────────────────────────────
    const navbar = document.getElementById('main-navbar');
    const backToTop = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        }
        // Show/hide back-to-top button
        if (backToTop) {
            if (window.scrollY > 400) {
                backToTop.style.opacity = '1';
                backToTop.style.pointerEvents = 'auto';
            } else {
                backToTop.style.opacity = '0';
                backToTop.style.pointerEvents = 'none';
            }
        }
    }, { passive: true });

    // ── Back to top click ───────────────────────────────
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ── Language dropdown ────────────────────────────────
    const langBtn = document.getElementById('lang-dropdown-btn');
    const langMenu = document.getElementById('lang-dropdown-menu');
    const langChevron = document.getElementById('lang-chevron');
    if (langBtn && langMenu) {
        langBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = langMenu.classList.contains('pointer-events-none');
            if (isOpen) {
                langMenu.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
                langMenu.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');
                if (langChevron) langChevron.style.transform = 'rotate(180deg)';
            } else {
                langMenu.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
                langMenu.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
                if (langChevron) langChevron.style.transform = '';
            }
        });
        document.addEventListener('click', () => {
            langMenu.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
            langMenu.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
            if (langChevron) langChevron.style.transform = '';
        });
    }

    // ── Mobile menu toggle ──────────────────────────────
    const toggle = document.getElementById('mobile-toggle');
    const navLinks = document.getElementById('nav-links');
    if (toggle && navLinks) {
        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            navLinks.classList.toggle('open');
        });

        navLinks.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => navLinks.classList.remove('open'));
        });

        navLinks.addEventListener('click', (e) => {
            if (e.target === navLinks) {
                navLinks.classList.remove('open');
            }
        });

        window.addEventListener('scroll', () => {
            if (navLinks.classList.contains('open')) {
                navLinks.classList.remove('open');
            }
        }, { passive: true });
    }

    // ── FAQ accordion ───────────────────────────────────
    document.querySelectorAll('[data-faq]').forEach(item => {
        const toggleBtn = item.querySelector('.faq-q');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                const isOpen = item.classList.contains('open');
                document.querySelectorAll('[data-faq].open').forEach(el => el.classList.remove('open'));
                if (!isOpen) item.classList.add('open');
            });
        }
    });

    // ── Scroll reveal ───────────────────────────────────
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });

    reveals.forEach(el => observer.observe(el));

    // ── Count-up animation ──────────────────────────────
    const counters = document.querySelectorAll('[data-count-target]');
    if (counters.length) {
        const formatNumber = (num, useSeparator) => {
            if (!useSeparator) return num.toString();
            return num.toLocaleString('en-US');
        };

        const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);

        const animateCounter = (el) => {
            const target = parseInt(el.dataset.countTarget, 10);
            const suffix = el.dataset.countSuffix || '';
            const useSeparator = el.hasAttribute('data-count-separator');
            const duration = 2000;
            const startTime = performance.now();

            const update = (now) => {
                const elapsed = now - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = easeOutQuart(progress);
                const current = Math.round(easedProgress * target);

                el.textContent = formatNumber(current, useSeparator) + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            };

            requestAnimationFrame(update);
        };

        const countObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    countObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(el => countObserver.observe(el));
    }
});
