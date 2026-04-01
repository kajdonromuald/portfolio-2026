<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kajdon Romuald - Fix Test</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* KRITIKUS: Ezek a szabályok kényszerítik a színeket a Tailwind ellenében is */
        :root {
            --bg: #030303;
            --text: #ffffff;
            --card: rgba(255, 255, 255, 0.05);
        }

        body.light-mode {
            --bg: #f3f4f6;
            --text: #111827;
            --card: #ffffff;
        }

        body {
            background-color: var(--bg) !important;
            color: var(--text) !important;
            transition: all 0.4s ease;
        }

        .bento-card {
            background-color: var(--card) !important;
            border: 1px solid rgba(128, 128, 128, 0.2);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="font-sans min-h-screen p-10">

    <nav class="fixed top-5 left-1/2 -translate-x-1/2 z-50 flex gap-4 bg-gray-500/20 p-4 rounded-full backdrop-blur-md">
        <button id="lang-btn" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-bold">EN</button>
        <button id="theme-toggle" class="bg-gray-700 text-white px-6 py-2 rounded-full font-bold">
            <i id="theme-icon" class="fas fa-moon"></i>
        </button>
    </nav>

    <main class="max-w-4xl mx-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bento-card p-10 rounded-[2rem]">
                <h1 class="text-4xl font-bold mb-4 lang" data-hu="Mérnöki Precizitás" data-en="Engineering Precision">Mérnöki Precizitás</h1>
                <p class="lang opacity-70" data-hu="Ez egy teszt üzenet." data-en="This is a test message.">Ez egy teszt üzenet.</p>
            </div>

            <div class="bento-card p-10 rounded-[2rem] flex items-center justify-center">
                <p class="text-xl font-bold lang" data-hu="Működik?" data-en="Does it work?">Működik?</p>
            </div>
        </div>
    </main>

    <script>
        // AZONNALI TESZT LOGIKA
        document.addEventListener('DOMContentLoaded', () => {
            console.log("A teszt script elindult!");

            const langBtn = document.getElementById('lang-btn');
            const themeBtn = document.getElementById('theme-toggle');
            const body = document.body;
            let currentLang = 'hu';

            // NYELV VÁLTÁS
            langBtn.onclick = () => {
                console.log("Nyelv gomb megnyomva!");
                currentLang = currentLang === 'hu' ? 'en' : 'hu';
                langBtn.innerText = currentLang === 'hu' ? 'EN' : 'HU';
                
                document.querySelectorAll('.lang').forEach(el => {
                    el.innerText = el.getAttribute(`data-${currentLang}`);
                });
            };

            // TÉMA VÁLTÁS
            themeBtn.onclick = () => {
                console.log("Téma gomb megnyomva!");
                body.classList.toggle('light-mode');
                const icon = document.getElementById('theme-icon');
                if(body.classList.contains('light-mode')) {
                    icon.className = 'fas fa-sun';
                } else {
                    icon.className = 'fas fa-moon';
                }
            };
        });
    </script>
</body>
</html>