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

        /* Transisi Utama */
        .text-morph-enter {
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .text-morph-leave {
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* Saat teks baru mau masuk (dari bawah) */
        .text-morph-start {
            opacity: 0;
            transform: translateY(15px) scale(0.95);
            filter: blur(4px);
        }

        /* Saat teks aktif (diam di tempat) */
        .text-morph-end {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0px);
        }

        /* Saat teks lama mau keluar (ke atas) */
        .text-morph-exit {
            opacity: 0;
            transform: translateY(-15px) scale(1.05);
            filter: blur(4px);
        }

        /* Efek tambahan biar navbar lo makin pro */
        .glass {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body>
    <nav class="fixed top-0 w-full z-50 glass border-b border-slate-800 py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <div class="text-xl font-bold text-cyan-400 flex items-center"
                style="font-family: 'JetBrains Mono', monospace !important;">
                <span class="mr-1">//</span>
                <div class="relative h-[24px] overflow-hidden min-w-[150px]"
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
                            class="absolute left-0 top-0 whitespace-nowrap tracking-tighter">
                        </span>
                    </template>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-6 text-sm font-medium text-white/80">
                <a href="#home" class="hover:text-cyan-400 transition-colors leading-none flex items-center h-[34px]">Home</a>
                <a href="#projects" class="hover:text-cyan-400 transition-colors leading-none flex items-center h-[34px]">Projects</a>

                <a href="#contact" class="flex items-center justify-center bg-cyan-600/20 border border-cyan-500/50 px-4 h-[34px] rounded-full text-cyan-400 hover:bg-cyan-500 hover:text-white transition-all leading-none">
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