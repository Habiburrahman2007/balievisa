document.addEventListener('DOMContentLoaded', () => {

    const navbar = document.getElementById('main-navbar');
    const backToTop = document.getElementById('back-to-top');

    let scrollTicking = false;

    const onScroll = () => {
        if (!scrollTicking) {
            requestAnimationFrame(() => {
                const sy = window.scrollY;
                if (navbar) {
                    navbar.classList.toggle('scrolled', sy > 20);
                }
                if (backToTop) {
                    const show = sy > 400;
                    backToTop.style.opacity = show ? '1' : '0';
                    backToTop.style.pointerEvents = show ? 'auto' : 'none';
                }
                scrollTicking = false;
            });
            scrollTicking = true;
        }
    };

    window.addEventListener('scroll', onScroll, { passive: true });

    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

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


    const initFaq = () => {
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
    };

    const initScrollReveal = () => {
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
    };

    const initCounters = () => {
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
    };

    if ('requestIdleCallback' in window) {
        requestIdleCallback(() => {
            initFaq();
            initScrollReveal();
            initCounters();
        });
    } else {
        setTimeout(() => {
            initFaq();
            initScrollReveal();
            initCounters();
        }, 200);
    }
});
