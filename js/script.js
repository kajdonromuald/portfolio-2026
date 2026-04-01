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

    // 2. Egér fény követés
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

    // 3. Nyelvváltó logika
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

    // 4. Téma váltó (DarkMode / LightMode)
    themeBtn.addEventListener('click', () => {
        body.classList.toggle('light-mode');
        
        // Ikon csere és kis animáció
        if (body.classList.contains('light-mode')) {
            themeIcon.className = 'fas fa-sun';
            gsap.to(themeBtn, { rotation: 180, duration: 0.5 });
        } else {
            themeIcon.className = 'fas fa-moon';
            gsap.to(themeBtn, { rotation: 0, duration: 0.5 });
        }
    });

    // 5. Smooth scroll minden linkhez
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 120,
                    behavior: 'smooth'
                });
            }
        });
    });
});
// Hamburger menü kezelése
const menuToggle = document.getElementById('menu-toggle');
const navMenu = document.getElementById('nav-menu');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        
        // Opcionális: Ikon váltása Bars-ról X-re
        const icon = menuToggle.querySelector('i');
        if (navMenu.classList.contains('active')) {
            icon.classList.replace('fa-bars', 'fa-times');
        } else {
            icon.classList.replace('fa-times', 'fa-bars');
        }
    });
}

// Menü bezárása, ha rákattintunk egy linkre
document.querySelectorAll('#nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        const icon = menuToggle.querySelector('i');
        if(icon) icon.classList.replace('fa-times', 'fa-bars');
    });
});

