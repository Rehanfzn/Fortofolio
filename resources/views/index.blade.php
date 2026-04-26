@extends('layouts.app')

@section('content')

<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0 overflow-hidden bg-black">
        <div class="absolute inset-0 opacity-30 mix-blend-screen blur-[100px] transform-gpu">
            <div id="aurora-1" class="absolute top-1/4 -left-1/2 w-[150%] h-[200px] bg-cyan-600 rounded-[100%]"></div>
            <div id="aurora-2" class="absolute top-1/2 -right-1/2 w-[150%] h-[180px] bg-indigo-800 rounded-[100%]"></div>
            <div id="aurora-3" class="absolute top-1/3 left-0 w-[120%] h-[150px] bg-teal-800 opacity-40 rounded-[100%]"></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black"></div>
    </div>
    <div class="absolute inset-0 z-[1] pointer-events-none">
        @for ($i = 0; $i < 20; $i++)
            <span class="meteor animate-meteor absolute h-px w-[50px] rotate-[215deg] bg-gradient-to-r from-slate-500 to-transparent shadow-[0_0_0_1px_#ffffff10]"
            style="top: {{ rand(-20, 80) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 8) }}s; animation-duration: {{ rand(2, 10) }}s;">
            </span>
            @endfor
    </div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="space-y-6">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight animate-[fadeIn_1s_ease-out]">
                Hi, I'm <span class="bg-gradient-to-r from-cyan-400 to-blue-600 bg-clip-text text-transparent hover:brightness-125 transition-all duration-500">Rehan Faezan</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed animate-[fadeIn_1s_ease-out_0.3s_forwards] opacity-0">
                Seorang <span class="text-white font-semibold underline decoration-cyan-500/30">Fullstack Developer</span> muda yang passionet dengan teknologi web.
            </p>
            <div class="flex flex-col items-center gap-4 mt-12 opacity-0 animate-[fadeIn_1.5s_ease-in_forwards] [animation-delay:0.8s]">

                <div class="flex flex-wrap justify-center gap-4">
                    <div class="inline-flex items-center gap-2 bg-slate-900/40 border border-slate-800 px-4 py-2 rounded-full hover:border-cyan-500/50 transition-all duration-300 [animation:floating_5s_ease-in-out_infinite]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                        </span>
                        <span class="text-[11px] font-mono text-slate-300 uppercase tracking-wider">Available for work</span>
                    </div>

                    <div class="inline-flex items-center gap-2 bg-slate-900/40 border border-slate-800 px-4 py-2 rounded-full hover:border-blue-500/50 transition-all duration-300 [animation:floating_5s_ease-in-out_infinite_0.5s]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-[11px] font-mono text-slate-300 uppercase tracking-wider">Based in Indonesia</span>
                    </div>

                    <div class="inline-flex items-center gap-2 bg-slate-900/40 border border-slate-800 px-4 py-2 rounded-full hover:border-purple-500/50 transition-all duration-300 [animation:floating_5s_ease-in-out_infinite_1s]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
                        </span>
                        <span class="text-[11px] font-mono text-slate-300 uppercase tracking-wider">AI Integration</span>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    <div class="inline-flex items-center gap-2 bg-slate-900/40 border border-slate-800 px-4 py-2 rounded-full hover:border-emerald-500/50 transition-all duration-300 [animation:floating_5s_ease-in-out_infinite_1.5s]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="text-[11px] font-mono text-slate-300 uppercase tracking-wider">Mahasiswa Aktif</span>
                    </div>

                    <div class="inline-flex items-center gap-2 bg-slate-900/40 border border-slate-800 px-4 py-2 rounded-full hover:border-amber-500/50 transition-all duration-300 [animation:floating_5s_ease-in-out_infinite_2s]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-amber-500"></span>
                        </span>
                        <span class="text-[11px] font-mono text-slate-300 uppercase tracking-wider">Fast Learner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="relative">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-slate-800/50"></div>
    </div>
    <div class="relative flex justify-center">
    </div>
</div>
<!-- skilss -->
<section id="tech-stack" class="py-20 bg-black relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-cyan-500/5 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">

            <div class="w-full md:w-1/2 space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-900/50 border border-slate-800">
                    <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
                    <span class="text-[10px] font-mono text-slate-400 uppercase tracking-wider">Tech Experience</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold text-white tracking-tighter">
                    Technical Stack <br />
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">skills</span>
                </h2>

                <p class="text-slate-500 text-sm md:text-base leading-relaxed max-w-sm font-mono italic">
                    // Fokus pada performa, skalabilitas, dan pengalaman pengguna yang luar biasa.
                </p>
            </div>

            <div class="w-full md:w-1/2 flex justify-center items-center">
                <div class="relative w-[300px] h-[300px] flex items-center justify-center overflow-visible">
                    <div id="minimal-cloud" class="text-cyan-500 font-bold"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="relative">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-slate-800/50"></div>
    </div>
    <div class="relative flex justify-center">
        <div class="h-1 w-12 bg-gradient-to-r from-transparent via-slate-700 to-transparent"></div>
    </div>
</div>

<style>
    .tagcloud--item img {
        display: block;
        pointer-events: none;
        /* Biar kursornya gak keganggu gambar */
    }

    /* Biar buletan cloud-nya rapi */
    .tagcloud--item {
        padding: 10px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = '#minimal-cloud';

        const texts = [
            'PHP', 'Laravel', 'Tailwind', 'JS', 'MySQL',
            'Livewire', 'Alpine', 'Node', 'Python',
            'Docker', 'Git', 'VSCode', 'Redis'
        ];

        // Gue benerin mapping URL-nya di sini Han
        const iconMapping = {
            'PHP': 'https://cdn.simpleicons.org/php/777BB4',
            'Laravel': 'https://cdn.simpleicons.org/laravel/FF2D20',
            'Tailwind': 'https://cdn.simpleicons.org/tailwindcss/06B6D4',
            'JS': 'https://cdn.simpleicons.org/javascript/F7DF1E',
            'MySQL': 'https://cdn.simpleicons.org/mysql/4479A1',
            'Livewire': 'https://cdn.simpleicons.org/livewire/FB7093',
            'Alpine': 'https://cdn.simpleicons.org/alpinejs/8BC0D0',
            'Node': 'https://cdn.simpleicons.org/nodedotjs/339933',
            'Python': 'https://cdn.simpleicons.org/python/3776AB',
            'Docker': 'https://cdn.simpleicons.org/docker/2496ED',
            'Git': 'https://cdn.simpleicons.org/git/f05032',
            'VSCode': 'https://cdn.simpleicons.org/visualstudiocode/007ACC', // Nama lengkapnya ini
            'Redis': 'https://cdn.simpleicons.org/redis/DC382D'
        };

        const options = {
            radius: 150,
            maxSpeed: 'normal',
            initSpeed: 'fast',
            keep: true
        };

        TagCloud(container, texts, options);

        setTimeout(() => {
            const items = document.querySelectorAll('.tagcloud--item');
            items.forEach(item => {
                const text = item.innerText.trim();
                if (iconMapping[text]) {
                    // Kita tambahin onerror biar kalau link mati, dia balik ke teks asli
                    item.innerHTML = `
                        <img width="45" 
                             src="${iconMapping[text]}" 
                             style="display:block; transition:0.3s;" 
                             onerror="this.style.display='none'; this.parentElement.innerText='${text}'" />
                    `;
                }
            });
        }, 200); // Naikkin dikit delaynya ke 200ms biar aman
    });
</script>
<!-- projects -->
<section id="projects" class="py-20 bg-black-950">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-white mb-2">Featured Projects</h2>
            <p class="text-slate-400 font-mono text-sm">/ selected_works.exe</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="group bg-black-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-black-500/50 transition-all duration-500">
                <div class="aspect-video bg-slate-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-70 group-hover:opacity-100">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400">E-Commerce System Elvo App</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Sistem toko online modern dengan HTML, CSS, dan JavaScript.</p>
                    <span class="text-[10px] font-mono bg-cyan-500/10 text-cyan-400 px-2 py-1 rounded">HTML</span>
                    <span class="text-[10px] font-mono bg-yellow-500/10 text-yellow-400 px-2 py-1 rounded">JS</span>
                </div>
            </div>

            <div class="group bg-black-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-cyan-500/50 transition-all duration-500">
                <div class="aspect-video bg-slate-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-70 group-hover:opacity-100">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400">Data Analytics</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Dashboard statistik real-time Livewire.</p>
                    <span class="text-[10px] font-mono bg-blue-500/10 text-blue-400 px-2 py-1 rounded">LIVEWIRE</span>
                </div>
            </div>

            <div class="group bg-black-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-cyan-500/50 transition-all duration-500">
                <div class="aspect-video bg-slate-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-70 group-hover:opacity-100">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400">Inventory App</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Aplikasi manajemen stok barang gudang.</p>
                    <span class="text-[10px] font-mono bg-purple-500/10 text-purple-400 px-2 py-1 rounded">PHP 8.2</span>
                </div>
            </div>
        </div>
        <!-- //sertifikat -->
        <div class="pt-10 border-t border-slate-800/50" x-data="{ open: false, fileSrc: '', title: '' }">
            <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                <span class="text-cyan-500">#</span> Certificates & Awards
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div @click="open = true; fileSrc = '{{ asset('pdfs/sertifikat 1.pdf') }}'; title = 'Workshop Machine Learning'"
                    class="flex items-center gap-4 p-4 bg-slate-900/50 border border-slate-800 rounded-xl hover:bg-slate-800 hover:border-cyan-500/50 transition-all cursor-pointer group">
                    <div class="text-cyan-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-semibold">Workshop Machine Learning</h4>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">UBSI • 2025</p>
                    </div>
                </div>
                <div @click="open = true; fileSrc = '{{ asset('pdfs/sertifikat 2.pdf') }}'; title = 'Web Development Boot Camp'"
                    class="flex items-center gap-4 p-4 bg-slate-900/50 border border-slate-800 rounded-xl hover:bg-slate-800 hover:border-blue-500/50 transition-all cursor-pointer group">
                    <div class="text-blue-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-semibold">Web Development Boot Camp</h4>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">Dicoding • 2024</p>
                    </div>
                </div>
                <div @click="open = true; fileSrc = '{{ asset('pdfs/sertifikat 3.pdf') }}'; title = 'Laravel Backend Specialist'"
                    class="flex items-center gap-4 p-4 bg-slate-900/50 border border-slate-800 rounded-xl hover:bg-slate-800 hover:border-orange-500/50 transition-all cursor-pointer group">
                    <div class="text-orange-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-semibold">Laravel Backend Specialist</h4>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">BuildWithAngga • 2024</p>
                    </div>
                </div>

                <div @click="open = true; fileSrc = '{{ asset('pdfs/sertifikat 4.pdf') }}'; title = 'UI/UX Design Foundation'"
                    class="flex items-center gap-4 p-4 bg-slate-900/50 border border-slate-800 rounded-xl hover:bg-slate-800 hover:border-purple-500/50 transition-all cursor-pointer group">
                    <div class="text-purple-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-semibold">UI/UX Design Foundation</h4>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">Coursera • 2023</p>
                    </div>
                </div>
            </div>

            <div x-show="open"
                class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90"
                x-cloak>

                <div class="relative w-full max-w-5xl h-[80vh] flex flex-col">
                    <button @click="open = false" class="absolute -top-10 right-0 text-white hover:text-cyan-400 transition-colors flex items-center gap-2">
                        <span class="text-xs font-mono">CLOSE [ESC]</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="bg-slate-900 rounded-xl border border-slate-700 overflow-hidden flex-grow shadow-2xl">
                        <template x-if="fileSrc.endsWith('.pdf')">
                            <iframe :src="fileSrc" class="w-full h-full" frameborder="0"></iframe>
                        </template>

                        <template x-if="!fileSrc.endsWith('.pdf')">
                            <div class="flex items-center justify-center h-full">
                                <img :src="fileSrc" class="max-w-full max-h-full object-contain">
                            </div>
                        </template>
                    </div>

                    <div class="py-3">
                        <p class="text-white font-bold text-center text-sm" x-text="title"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-24 relative overflow-hidden bg-black">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-8">
            Mari Kita
            <span class="relative inline-block min-w-[200px] text-cyan-400"
                x-data="{ 
                    texts: ['Berkolaborasi', 'Membangun Ide', 'Ngoding Bareng', 'Diskusi Proyek'], 
                    activeText: 0,
                    init() { 
                        setInterval(() => { 
                            this.activeText = (this.activeText + 1) % this.texts.length 
                        }, 3000); 
                    } 
                  }">
                <template x-for="(text, index) in texts">
                    <span x-show="activeText === index"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 blur-lg translate-y-4"
                        x-transition:enter-end="opacity-100 blur-0 translate-y-0"
                        x-transition:leave="transition ease-in duration-500 absolute left-0 right-0"
                        x-transition:leave-start="opacity-100 blur-0 translate-y-0"
                        x-transition:leave-end="opacity-0 blur-lg -translate-y-4"
                        x-text="text"
                        class="inline-block">
                    </span>
                </template>
            </span>
        </h2>

        <p class="text-slate-400 mb-10 max-w-lg mx-auto">
            Punya ide gila atau proyek yang butuh tangan dingin seorang developer? Yuk, hubungi gue!
        </p>

        <a href="https://wa.me/087771661440"
            class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-500 to-blue-600 hover:scale-105 transition-transform text-white font-bold py-4 px-10 rounded-full">
            Hubungi Saya Sekarang
        </a>
    </div>
</section>
</section>
<footer class="py-4 border-t border-slate-900 bg-black">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <p class="text-white font-bold text-xl mb-1">Rehan Faezan</p>
                <p class="text-slate-500 text-sm">© 2026 •........</p>
            </div>

            <div class="flex gap-6">
                <a href="https://github.com/Rehanfzn" target="_blank" class="text-slate-400 hover:text-white transition-colors">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>

                <a href="https://linkedin.com/in/rehanfaezan" target="_blank" class="text-slate-400 hover:text-blue-500 transition-colors">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                </a>

                <a href="https://instagram.com/rehanfzn_" target="_blank" class="text-slate-400 hover:text-pink-500 transition-colors">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
            </div>

            <div class="flex gap-6 text-sm font-mono text-slate-500">
                <a href="#home" class="hover:text-cyan-400 transition-colors">TOP</a>
                <a href="#skills" class="hover:text-cyan-400 transition-colors">SKILLS</a>
                <a href="#projects" class="hover:text-cyan-400 transition-colors">WORKS</a>
            </div>
        </div>
    </div>
</footer>
@endsection