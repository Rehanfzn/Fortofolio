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

    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="space-y-6">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight animate-[fadeIn_1s_ease-out]">
                Hi, I'm <span class="bg-gradient-to-r from-cyan-400 to-blue-600 bg-clip-text text-transparent hover:brightness-125 transition-all duration-500">Rehan Faezan</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed animate-[fadeIn_1s_ease-out_0.3s_forwards] opacity-0">
                Seorang <span class="text-white font-semibold underline decoration-cyan-500/30">Fullstack Developer</span> yang hobi ngerakit aplikasi web pake Laravel.
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-12 opacity-0 animate-[fadeIn_1.5s_ease-in_forwards] [animation-delay:0.8s]">
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
        </div>
    </div>
</section>

<section id="skills" class="py-12 border-y border-slate-900 bg-black-950/50">
    <div class="max-w-6xl mx-auto px-6">
        <p class="text-center text-slate-500 text-xs font-mono uppercase tracking-widest mb-8 italic">// tech_stack_experience</p>
        <div class="flex flex-wrap justify-center gap-8 opacity-50 grayscale hover:grayscale-0 transition-all duration-700">
            <div class="flex items-center gap-2 font-bold text-xl hover:text-orange-500 transition-colors">HTML</div>
            <div class="flex items-center gap-2 font-bold text-xl hover:text-blue-500 transition-colors">CSS</div>
            <div class="flex items-center gap-2 font-bold text-xl hover:text-yellow-400 transition-colors">JS</div>
            <div class="flex items-center gap-2 font-bold text-xl hover:text-red-500 transition-colors">LARAVEL</div>
            <div class="flex items-center gap-2 font-bold text-xl hover:text-cyan-400 transition-colors">TAILWIND</div>
            <div class="flex items-center gap-2 font-bold text-xl hover:text-blue-600 transition-colors">MYSQL</div>
        </div>
    </div>
</section>

<section id="projects" class="py-20 bg-black-950">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-white mb-2">Featured Projects</h2>
            <p class="text-slate-400 font-mono text-sm">/ selected_works.exe</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="group bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-cyan-500/50 transition-all duration-500">
                <div class="aspect-video bg-slate-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-70 group-hover:opacity-100">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400">E-Commerce System</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Sistem toko online modern dengan Laravel.</p>
                    <span class="text-[10px] font-mono bg-cyan-500/10 text-cyan-400 px-2 py-1 rounded">LARAVEL</span>
                </div>
            </div>

            <div class="group bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-cyan-500/50 transition-all duration-500">
                <div class="aspect-video bg-slate-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-70 group-hover:opacity-100">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400">SaaS Analytics</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">Dashboard statistik real-time Livewire.</p>
                    <span class="text-[10px] font-mono bg-blue-500/10 text-blue-400 px-2 py-1 rounded">LIVEWIRE</span>
                </div>
            </div>

            <div class="group bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-cyan-500/50 transition-all duration-500">
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

        <div class="pt-10 border-t border-slate-800/50">
            <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                <span class="text-cyan-500">#</span> Certificates & Awards
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-4 p-4 bg-slate-900/50 border border-slate-800 rounded-xl hover:bg-slate-800 transition-all">
                    <div class="text-cyan-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-semibold">Fullstack Laravel</h4>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">UBSI • 2025</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 bg-slate-900/50 border border-slate-800 rounded-xl hover:bg-slate-800 transition-all">
                    <div class="text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-semibold">Fullstack Developer Program</h4>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">Dicoding • 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-cyan-500/5 [mask-image:radial-gradient(ellipse_at_center,white,transparent)]"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl font-bold text-white mb-6">Tertarik kerja bareng?</h2>
        <p class="text-slate-400 mb-10 text-lg">Gue selalu terbuka buat diskusi project seru atau sekadar ngopi santai.</p>
        <a href="mailto:rehan@example.com" class="inline-block bg-cyan-500 hover:bg-cyan-400 text-white font-bold px-10 py-4 rounded-full shadow-[0_0_20px_rgba(6,182,212,0.3)] transition-all transform hover:scale-105">
            Kirim Pesan Sekarang
        </a>
    </div>
</section>
<footer class="py-4 border-t border-slate-900 bg-black">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <p class="text-white font-bold text-xl mb-1">Rehan Faezan</p>
                <p class="text-slate-500 text-sm">© 2026 •........</p>
            </div>

            <div class="flex gap-6">
                <a href="https://github.com/rehanfaezan" target="_blank" class="text-slate-400 hover:text-white transition-colors">
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