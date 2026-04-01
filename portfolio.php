<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kajdon Romuald | Portfolio 2026</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        html { scroll-behavior: smooth; } /* Finom görgetés */
    </style>
</head>
<body id="page-body" class="bg-[#030303] text-white">

    <div id="glow" class="cursor-glow"></div>

    <div class="fixed bottom-8 right-8 z-[100] flex flex-col gap-4">
        <button id="lang-btn" class="w-14 h-14 rounded-xl flex items-center justify-center text-sm uppercase tracking-widest border border-white/20 shadow-2xl">
            EN
        </button>
        <button id="theme-toggle" class="w-14 h-14 rounded-xl flex items-center justify-center text-xl border border-white/20 shadow-2xl">
            <i id="theme-icon" class="fas fa-moon"></i>
        </button>
    </div>

    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-2xl">
        <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl px-6 py-3 flex items-center justify-between relative">
            <div class="text-xl font-black tracking-tighter italic">KR<span class="text-indigo-500">.</span></div>

            <button id="menu-toggle" class="text-white text-2xl">
                <i class="fas fa-bars"></i>
            </button>

            <div id="nav-menu" class="nav-links flex gap-6">
                <a href="#home" class="hover:text-indigo-400 transition lang" data-hu="Kezdőlap" data-en="Home">Kezdőlap</a>
                <a href="#education" class="hover:text-indigo-400 transition lang" data-hu="Tanulmányok" data-en="Education">Tanulmányok</a>
                <a href="#projects" class="hover:text-indigo-400 transition lang" data-hu="Projektek" data-en="Projects">Projektek</a>
                <a href="#contact" class="hover:text-indigo-400 transition lang" data-hu="Kapcsolat" data-en="Contact">Kapcsolat</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 pt-32 pb-20">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12" id="home">
            <div class="md:col-span-3 md:row-span-2 bento-card p-8 md:p-12 flex flex-col justify-center">
                <span class="text-indigo-500 font-bold tracking-widest text-sm uppercase mb-4 block lang" data-hu="Mérnökinformatikus" data-en="Computer Science Engineer">Mérnökinformatikus</span>
                <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6">
                    <span class="lang" data-hu="Kajdon Romuald" data-en="Romuald Kajdon">Kajdon Romuald</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-cyan-400 lang" data-hu="Full-Stack Fejlesztő" data-en="Full-Stack Developer">Full-Stack Fejlesztő</span>
                </h1>
                <p class="text-lg opacity-60 max-w-xl lang" 
                   data-hu="Erős programozási alapokkal rendelkezem C#, Java és C++ nyelveken, melyet React, JavaScript és PHP technológiákkal egészítek ki." 
                   data-en="I have strong programming foundations in C#, Java, and C++, complemented by React, JavaScript, and PHP expertise.">
                    Erős programozási alapokkal rendelkezem C#, Java és C++ nyelveken, melyet React, JavaScript és PHP technológiákkal egészítek ki.
                </p>
            </div>

            <div class="bento-card p-6 flex flex-col items-center justify-center bg-white/5 text-center group">
                 <div class="flex gap-3 mb-4 flex-wrap justify-center text-3xl">
                    <i class="fab fa-react text-cyan-400"></i>
                    <i class="fab fa-php text-indigo-500"></i>
                    <i class="fab fa-java text-red-500"></i>
                    <i class="fas fa-database text-blue-500"></i>
                </div>
                <h3 class="font-bold tracking-tight lang" data-hu="Technológiai Stack" data-en="Tech Stack">Technológiai Stack</h3>
                <p class="text-[10px] opacity-40 mt-1 uppercase tracking-widest font-bold text-indigo-400">C#, Java, PHP, React, MySQL</p>
            </div>

            <div  id="contact" class="bento-card p-6 flex items-center justify-around text-2xl">
                <a href="https://github.com/kajdonromuald" target="_blank" class="hover:text-indigo-500 transition-all hover:scale-125"><i class="fab fa-github"></i></a>
                <a href="mailto:kajdon.r@gmail.com" class="hover:text-indigo-500 transition-all hover:scale-125"><i class="fas fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/kajdon-romuald-115193351/" target="_blank" class="hover:text-indigo-500 transition-all hover:scale-125"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <h2 id="projects" class="text-2xl font-bold mb-6 ml-4 opacity-50 uppercase tracking-widest lang" data-hu="Kiemelt Projektek" data-en="Featured Projects">Kiemelt Projektek</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-1 bento-card p-8 flex flex-col justify-between h-[400px] relative overflow-hidden group">
                <div class="z-10">
                    <h3 class="text-2xl font-bold mb-2">SmartCodeGen AI</h3>
                    <p class="text-sm opacity-70 mb-4 lang" 
                       data-hu="Intelligens chatbot, amely a Gemini Pro modellt használja. PHP API-n keresztül kommunikál." 
                       data-en="Intelligent chatbot using Gemini Pro model. Communicates via PHP API.">
                       Intelligens chatbot, amely a Gemini Pro modellt használja. PHP API-n keresztül kommunikál.
                    </p>
                </div>
                <div class="flex flex-wrap gap-2 z-10">
                    <span class="px-3 py-1 bg-indigo-500/20 text-indigo-400 rounded-full text-[10px] font-bold border border-indigo-500/30 uppercase">PHP API</span>
                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-[10px] font-bold border border-cyan-500/30 uppercase">Gemini Pro</span>
                </div>
                <div class="absolute -right-4 -bottom-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <i class="fas fa-robot text-9xl"></i>
                </div>
            </div>

            <div class="md:col-span-2 bento-card p-8 flex flex-col justify-center bg-white/[0.02]">
                <h3 class="text-2xl font-bold mb-4 lang" data-hu="Szoftveralkalmazás fejlesztés" data-en="Software Development">Szoftveralkalmazás fejlesztés</h3>
                <p class="opacity-60 mb-6 lang" data-hu="Asztali és konzolos alkalmazások készítése összetett logika és OOP elvek megvalósításával C# és Java nyelveken." data-en="Creating desktop and console applications with complex logic and OOP principles using C# and Java.">
                    Asztali és konzolos alkalmazások készítése összetett logika és OOP elvek megvalósításával C# és Java nyelveken.
                </p>
                <div class="flex gap-4">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-500">10+</p>
                        <p class="text-[10px] uppercase opacity-40 lang" data-hu="Kész projekt" data-en="Finished projects">Kész projekt</p>
                    </div>
                    <div class="h-10 w-[1px] bg-white/10"></div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-cyan-400">100%</p>
                        <p class="text-[10px] uppercase opacity-40 lang" data-hu="OOP fókusz" data-en="OOP Focus">OOP fókusz</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 id="education" class="text-2xl font-bold mb-6 ml-4 opacity-50 uppercase tracking-widest lang" data-hu="Tanulmányok & Készségek" data-en="Education & Skills" >Tanulmányok & Készségek</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 bento-card p-8 flex flex-col justify-center min-h-[350px] bg-gradient-to-br from-indigo-500/10 to-transparent">
                <div class="space-y-8">
                    <div class="border-l-2 border-indigo-500 pl-6">
                        <p class="text-indigo-500 font-bold text-sm">2022 — 2026</p>
                        <p class="font-semibold text-xl lang" data-hu="Mérnökinformatikus BSc" data-en="Computer Science BSc">Mérnökinformatikus BSc</p>
                        <p class="opacity-70 text-md lang" data-hu="Dunaújvárosi Egyetem" data-en="University of Dunaújváros">Dunaújvárosi Egyetem</p>
                    </div>
                    <div class="border-l-2 border-gray-700 pl-6">
                        <p class="text-gray-500 font-bold text-sm">2018 — 2022</p>
                        <p class="font-semibold text-xl lang" data-hu="Irodai Informatikus" data-en="Office IT Specialist">Irodai Informatikus</p>
                        <p class="opacity-50 text-sm italic">Baranya Vármegyei SZC Radnóti Miklós Közgazdasági Technikum</p>
                    </div>
                </div>
            </div>

            <div class="md:col-span-1 bento-card p-8 flex flex-col justify-center border-l-4 border-indigo-500/50">
                <h3 class="text-2xl font-bold mb-6 lang" data-hu="Nyelvismeret" data-en="Languages">Nyelvismeret</h3>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="lang" data-hu="Német" data-en="German">Német</span>
                            <span class="text-indigo-400 font-bold">B2 / Professional</span>
                        </div>
                        <div class="w-full bg-white/5 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-indigo-500 h-full w-[85%]"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="lang" data-hu="Angol" data-en="English">Angol</span>
                            <span class="text-gray-400">A2 / Basic</span>
                        </div>
                        <div class="w-full bg-white/5 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-gray-500 h-full w-[40%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-1 bento-card p-8 flex flex-col justify-center">
                 <h3 class="text-2xl font-bold mb-4 lang" data-hu="Szakmai Projektek" data-en="Professional Projects">Szakmai Projektek</h3>
                 <ul class="space-y-3 opacity-70 text-sm">
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-indigo-500"></i> CRUD & Autentikáció (PHP/MySQL)</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-indigo-500"></i> OOP asztali appok (C# / Java)</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-indigo-500"></i> Reszponzív Portfólió (React)</li>
                 </ul>
            </div>

            <div class="md:col-span-2 bento-card p-8 flex flex-col justify-center bg-indigo-600/5 text-center md:text-left">
                <h3 class="text-2xl font-bold mb-4 lang" data-hu="Szakmai Hitvallás" data-en="Professional Motto">Szakmai Hitvallás</h3>
                <p class="text-xl italic opacity-80 leading-relaxed lang" 
                   data-hu="&quot;A kód nem csak utasítás, hanem megoldás a jövő problémáira.&quot;" 
                   data-en="&quot;Code is not just an instruction, but a solution to future problems.&quot;">
                    "A kód nem csak utasítás, hanem megoldás a jövő problémáira."
                </p>
                <p class="mt-6 text-sm opacity-40 uppercase tracking-[0.2em]">Kajdon Romuald &copy; 2026</p>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>