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

        /* Section & Background */
        .tech-stack-section {
            padding: 5rem 0;
            background-color: #000;
            position: relative;
            overflow: hidden;
        }

        .glow-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .glow-sphere {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 16rem;
            height: 16rem;
            background-color: rgba(34, 211, 238, 0.05);
            border-radius: 9999px;
            filter: blur(120px);
        }

        /* Typography & Badges */
        .tech-text-wrapper {
            width: 100%;
            text-align: center;
        }

        @media (min-width: 768px) {
            .tech-text-wrapper {
                width: 50%;
                text-align: left;
            }
        }

        .badge-tech {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            background-color: rgba(15, 23, 42, 0.5);
            border: 1px solid #1e293b;
        }

        .badge-dot {
            width: 0.5rem;
            height: 0.5rem;
            background-color: #06b6d4;
            border-radius: 9999px;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .badge-text {
            font-size: 10px;
            font-family: monospace;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .tech-title {
            font-size: 2.25rem;
            line-height: 2.5rem;
            font-weight: 700;
            color: #fff;
            letter-spacing: -0.05em;
        }

        .tech-title-gradient {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .tech-subtitle {
            color: #64748b;
            font-size: 0.875rem;
            font-family: monospace;
            font-style: italic;
        }

        /* Cloud Container */
        .tech-cloud-wrapper {
            width: 100%;
        }

        @media (min-width: 768px) {
            .tech-cloud-wrapper {
                width: 50%;
            }
        }

        .cloud-canvas-area {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* TagCloud Items styling */
        .tagcloud--item {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px !important;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: grab;
            color: #22d3ee !important;
            opacity: 0.6;
            background: transparent !important;
            transition: all 0.3s ease;
        }

        .tagcloud--item:hover {
            color: #ffffff !important;
            opacity: 1;
            text-shadow: 0 0 12px rgba(34, 211, 238, 0.8);
        }

        /* Dividers */
        .divider-cloud {
            position: relative;
        }

        .divider-line-container {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
        }

        .divider-line {
            width: 100%;
            border-top: 1px solid rgba(30, 41, 59, 0.5);
        }

        .divider-text-container {
            position: relative;
            display: flex;
            justify-content: center;
        }

        .divider-label {
            background-color: #000;
            padding: 0 1rem;
            font-size: 0.75rem;
            font-family: monospace;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.3em;
        }

        .divider-footer-decoration {
            position: relative;
            display: flex;
            justify-content: center;
        }

        .footer-dot-gradient {
            height: 0.25rem;
            width: 3rem;
            background: linear-gradient(to right, transparent, #334155, transparent);
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