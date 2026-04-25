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
    </style>
</head>

<body>
    <nav class="fixed top-0 w-full z-50 glass border-b border-slate-800 py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <div class="text-xl font-bold text-cyan-400"
                style="font-family: 'JetBrains Mono', monospace !important; letter-spacing: -0.05em;">
                //Rehan Faezan
            </div>
            <div class="space-x-6 text-sm font-medium">
                <a href="#home" class="hover:text-cyan-400 transition-colors">Home</a>
                <a href="#projects" class="hover:text-cyan-400 transition-colors">Projects</a>
                <a href="#contact" class="bg-cyan-600 px-4 py-2 rounded-lg text-white hover:bg-cyan-500 transition-all">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>

</html>