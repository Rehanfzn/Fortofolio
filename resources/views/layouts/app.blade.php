<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Rehan Faezan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #000000;
            /* Hitam murni */
            color: #e2e8f0;
            margin: 0;
            overflow-x: hidden;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #020617;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0891b2;
        }

        .glass {
            background: rgba(1, 3, 9, 0.7);
            /* Disesuaikan dengan tema gelap */
            backdrop-filter: blur(10px);
        }

        @keyframes meteor {
            0% {
                transform: rotate(215deg) translateX(0);
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            100% {
                transform: rotate(215deg) translateX(-500px);
                opacity: 0;
            }
        }

        .animate-meteor {
            animation: meteor linear infinite;
        }

        .meteor::before {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 1px;
            background: linear-gradient(90deg, #94a3b8, transparent);
        }

        /* --- KUMPULAN ANIMASI --- */
        /* KEYFRAMES UNTUK ALIRAN PANJANG */
        @keyframes mengalirKanan {
            0% {
                transform: translateX(-10%) translateY(0) rotate(0deg);
            }

            50% {
                transform: translateX(10%) translateY(20px) rotate(2deg);
            }

            100% {
                transform: translateX(-10%) translateY(0) rotate(0deg);
            }
        }

        @keyframes mengalirKiri {
            0% {
                transform: translateX(10%) translateY(0) rotate(0deg);
            }

            50% {
                transform: translateX(-10%) translateY(-20px) rotate(-2deg);
            }

            100% {
                transform: translateX(10%) translateY(0) rotate(0deg);
            }
        }


        /* PAKSA JALAN PAKE ID */
        #aurora-1 {
            animation: mengalirKanan 15s ease-in-out infinite;
        }

        #aurora-2 {
            animation: mengalirKiri 20s ease-in-out infinite;
        }

        #aurora-3 {
            animation: mengalirKanan 25s ease-in-out infinite;
            animation-delay: 2s;
        }



        /* Animasi Muncul Pelan */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pasang ini supaya animasi 3D-nya aktif */
        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent
            }
        }

        .animate-typing {
            display: inline-block;
            width: 0;
            animation:
                typing 3.5s steps(30, end) forwards,
                blink .75s step-end infinite;
            animation-delay: 1.2s;
            /* Jalan setelah hi, I'm Rehan muncul */
        }

        /* Animasi Mengambang */
        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        /* Mencegah layout bergeser saat transisi absolute */
        [x-cloak] {
            display: none !important;
        }

        .min-w-\[200px\] {
            min-width: 280px;
            /* Sesuaikan dengan kata terpanjang lo */
        }


        /* navbar Efek Morphing Magic UI */
        .glass {
            background: rgba(6, 2, 39, 0.38);
            /* Warna dasar gelap */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        /* Animasi masuk navigasi saat page load */
        nav {
            animation: islandIn 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes islandIn {
            from {
                transform: translate(-50%, -50px);
                opacity: 0;
            }

            to {
                transform: translate(-50%, 0);
                opacity: 1;
            }
        }

        /* Morphing Text Transitions (Tetap pakai yang lo punya) */
        .text-morph-enter {
            transition: all 0.5s ease;
        }

        .text-morph-start {
            transform: translateY(20px);
            opacity: 0;
        }

        .text-morph-end {
            transform: translateY(0);
            opacity: 1;
        }

        .text-morph-leave {
            transition: all 0.5s ease;
        }

        .text-morph-exit {
            transform: translateY(-20px);
            opacity: 0;
        }
    </style>
</head>

<body>
    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[90%] md:w-auto min-w-[900px]">
        <div class="glass border border-white/10 px-12 md:px-8 py-3 rounded-3xl shadow-2xl flex justify-between items-center gap-8">

            <div class="text-lg font-bold text-cyan-400 flex items-center"
                style="font-family: 'JetBrains Mono', monospace !important;">
                <span class="mr-1 text-cyan-500/50">//</span>
                <div class="relative h-[24px] overflow-hidden min-w-[120px] md:min-w-[150px]"
                    x-data="{ 
                texts: ['RehanFaezan', 'WebDeveloper', 'Fullstack'], 
                activeText: 0,
                init() { 
                    setInterval(() => { this.activeText = (this.activeText + 1) % this.texts.length }, 3000); 
                } 
             }">
                    <template x-for="(text, index) in texts">
                        <span x-show="activeText === index"
                            x-transition:enter="text-morph-enter"
                            x-transition:enter-start="text-morph-start"
                            x-transition:enter-end="text-morph-end"
                            x-transition:leave="text-morph-leave"
                            x-transition:leave-start="text-morph-end"
                            x-transition:leave-end="text-morph-exit"
                            x-text="text"
                            class="absolute left-0 top-0 whitespace-nowrap tracking-tighter text-sm md:text-base">
                        </span>
                    </template>
                </div>
            </div>

            <div class="flex items-center space-x-2 md:space-x-6 text-sm font-medium">
                <a href="#home" class="text-white/70 hover:text-cyan-400 transition-all px-2 py-1">Home</a>
                <a href="#profile" class="text-white/70 hover:text-cyan-400 transition-all px-2 py-1">Profile</a>
                <a href="#projects" class="text-white/70 hover:text-cyan-400 transition-all px-2 py-1">Projects</a>
                <a href="#tech-stack" class="text-white/70 hover:text-cyan-400 transition-all px-2 py-1">Skills</a>
                <a href="#contact" class="flex items-center justify-center bg-cyan-500 text-slate-900 px-5 py-1.5 rounded-full text-xs font-bold hover:bg-white hover:scale-105 transition-all shadow-lg shadow-cyan-500/20">
                    Contact
                </a>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>