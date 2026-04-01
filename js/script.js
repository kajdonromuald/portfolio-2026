document.addEventListener('DOMContentLoaded', () => {
    console.log("Kajdon Portfolio Engine Loaded Successfully.");

    const body = document.getElementById('page-body');
    const langBtn = document.getElementById('lang-btn');
    const themeBtn = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const glow = document.getElementById('glow');

    // 1. GSAP animáció
    gsap.registerPlugin(ScrollTrigger);
    gsap.to(".bento-card", {
        opacity: 1,
        y: 0,
        duration: 1,
        stagger: 0.15,
        ease: "power4.out",
        scrollTrigger: {
            trigger: "main",
            start: "top 80%"
        }
    });

    // 2. Egér fény
    window.addEventListener('mousemove', (e) => {
        if (glow) {
            gsap.to(glow, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.6,
                ease: "power2.out"
            });
        }
    });

    // 3. Nyelvváltó
    let currentLang = 'hu';
    langBtn.addEventListener('click', () => {
        currentLang = currentLang === 'hu' ? 'en' : 'hu';
        langBtn.innerText = currentLang === 'hu' ? 'EN' : 'HU';

        document.querySelectorAll('.lang').forEach(el => {
            const text = el.getAttribute(`data-${currentLang}`);
            if (text) {
                gsap.to(el, { opacity: 0, duration: 0.2, onComplete: () => {
                    el.innerText = text;
                    gsap.to(el, { opacity: 1, duration: 0.2 });
                }});
            }
        });
    });

    // 4. Téma váltó
    themeBtn.addEventListener('click', () => {
        body.classList.toggle('light-mode');
        themeIcon.className = body.classList.contains('light-mode') ? 'fas fa-sun' : 'fas fa-moon';
    });

    // 5. Smooth scroll
    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 6. HAMBURGER MENÜ — IDE KELL TENNI!
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');

        const icon = menuToggle.querySelector('i');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
    });

    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');

            const icon = menuToggle.querySelector('i');
            icon.classList.add('fa-bars');
            icon.classList.remove('fa-times');
        });
    });

});
