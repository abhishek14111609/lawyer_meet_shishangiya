document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const supportsFinePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    const supportsTouchPointer = window.matchMedia('(hover: none), (pointer: coarse)').matches;

    document.body.classList.add('motion-ready');

    // Scroll Effects for Navbar
    const nav = document.querySelector('nav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                // Only remove scrolled if it's the home page
                if (document.body.classList.contains('home')) {
                    nav.classList.remove('scrolled');
                }
            }
        });
    }

    // Intersection Observer with staggered delays for section reveals
    const faders = document.querySelectorAll('.fade-up');
    faders.forEach((fader, index) => {
        fader.style.setProperty('--stagger-delay', `${(index % 6) * 55}ms`);
    });

    if (prefersReducedMotion) {
        faders.forEach((fader) => {
            fader.classList.add('visible');
        });
    } else {
        const appearOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const appearOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            });
        }, appearOptions);

        faders.forEach((fader) => {
            appearOnScroll.observe(fader);
        });
    }

    // Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (mobileToggle && navLinks) {
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Toggle icon
            const icon = mobileToggle.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });
    }

    // Close mobile menu on link click
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (navLinks && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                const icon = mobileToggle ? mobileToggle.querySelector('i') : null;
                if (icon) {
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-times');
                }
            }
        });
    });

    // Premium 3D tilt for cards on desktop/fine-pointer devices only
    const enableTilt = !prefersReducedMotion && supportsFinePointer && window.innerWidth > 992;
    const enableTouchTilt = !prefersReducedMotion && supportsTouchPointer;
    const serviceCards = document.querySelectorAll('.service-card');

    if (enableTilt) {
        serviceCards.forEach((card) => {
            card.addEventListener('mousemove', (event) => {
                const rect = card.getBoundingClientRect();
                const x = event.clientX - rect.left;
                const y = event.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateY = ((x - centerX) / centerX) * 4;
                const rotateX = ((centerY - y) / centerY) * 3.5;

                card.style.setProperty('--pointer-x', `${(x / rect.width) * 100}%`);
                card.style.setProperty('--pointer-y', `${(y / rect.height) * 100}%`);
                card.style.transform = `perspective(1200px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-4px)`;
                card.classList.add('tilt-active');
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
                card.classList.remove('tilt-active');
            });
        });

        window.addEventListener('blur', () => {
            serviceCards.forEach((card) => {
                card.style.transform = '';
                card.classList.remove('tilt-active');
            });
        });
    }

    if (enableTouchTilt) {
        const updateTouchTilt = (card, touch) => {
            const rect = card.getBoundingClientRect();
            const x = touch.clientX - rect.left;
            const y = touch.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateY = ((x - centerX) / centerX) * 1.8;
            const rotateX = ((centerY - y) / centerY) * 1.6;

            card.style.setProperty('--pointer-x', `${(x / rect.width) * 100}%`);
            card.style.setProperty('--pointer-y', `${(y / rect.height) * 100}%`);
            card.style.transform = `perspective(900px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-2px)`;
        };

        serviceCards.forEach((card) => {
            card.addEventListener('touchstart', (event) => {
                const touch = event.touches[0];
                if (!touch) {
                    return;
                }

                card.classList.add('tilt-active', 'touch-active');
                updateTouchTilt(card, touch);
            }, { passive: true });

            card.addEventListener('touchmove', (event) => {
                const touch = event.touches[0];
                if (!touch) {
                    return;
                }

                updateTouchTilt(card, touch);
            }, { passive: true });

            card.addEventListener('touchend', () => {
                card.style.transform = '';
                card.classList.remove('tilt-active', 'touch-active');
            }, { passive: true });

            card.addEventListener('touchcancel', () => {
                card.style.transform = '';
                card.classList.remove('tilt-active', 'touch-active');
            }, { passive: true });
        });
    }
});
