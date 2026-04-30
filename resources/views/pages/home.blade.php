<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>HealSense | Digital Health</title>
    
    <style>
        /* --- Animations --- */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }
        @keyframes ripple {
            0% { transform: scale(1); opacity: 0.4; }
            100% { transform: scale(1.8); opacity: 0; }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-ripple { animation: ripple 2s infinite; }

        /* --- Menu Overlay Logic --- */
        #menu-overlay {
            clip-path: circle(0% at 95% 5%);
            transition: clip-path 0.8s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.5s;
        }
        .menu-active {
            pointer-events: auto !important;
            opacity: 1 !important;
            clip-path: circle(150% at 95% 5%) !important;
        }

        /* --- Typography & Interaction --- */
        .menu-item {
            display: block;
            font-size: clamp(1.8rem, 5vw, 4rem);
            font-weight: 900;
            color: rgba(15, 23, 42, 0.3);
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            text-decoration: none;
            line-height: 1.1;
        }
        .menu-item:hover {
            color: #ffffff;
            transform: translateX(20px);
        }
        .menu-item span {
            display: inline-block;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .menu-active .menu-item span {
            transform: translateY(0); opacity: 1;
        }

        @keyframes float-subtle {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            50% { transform: translateY(-15px) translateX(5px); }
        }
        .animate-float-slow {
            animation: float-subtle 7s ease-in-out infinite;
        }
        .animate-float-fast {
            animation: float-subtle 5s ease-in-out infinite;
            animation-delay: 1s;
        }

        /* Styling angka indeks agar terlihat seperti superskrip modern */
        .menu-number {
            font-family: 'Inter', sans-serif; /* atau font sans-serif lainnya */
            font-size: 0.27em; /* Ukuran sangat kecil dibanding teks utama */
            vertical-align: top;
            margin-right: 0.5rem;
            color: rgba(15, 23, 42, 0.2); /* Warna slate halus */
            font-weight: 800;
            letter-spacing: 0;
        }

        .menu-item:hover .menu-number {
            color: #ffffff; /* Angka ikut putih saat hover */
        }

        /* Animasi gelombang saat klik */
        .click-ripple {
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            animation: ripple-effect 0.6s linear;
            background-color: rgba(255, 255, 255, 0.4);
            pointer-events: none;
        }

        @keyframes ripple-effect {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* glossy button hero section */
        @keyframes shine {
            100% { left: 125%; }
        }

        .btn-glossy {
            position: relative;
            overflow: hidden;
        }

        /* Efek cahaya kilat (Glossy Sheen) */
        .btn-glossy::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -60%;
            width: 20%;
            height: 200%;
            background: rgba(255, 255, 255, 0.4);
            transform: rotate(30deg);
            transition: 0s;
        }

        .btn-glossy:hover::after {
            left: 125%;
            transition: 0.7s;
        }
    </style>
</head>
<body class="bg-white overflow-x-hidden">

    <nav class="absolute top-0 left-0 w-full z-[150] bg-transparent">
        <div class="container mx-auto px-6 lg:px-12 flex h-24 items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#3ED6A8] text-white shadow-lg">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-black tracking-tight text-slate-900">Heal<span class="text-[#3ED6A8]">Sense</span></h1>
            </div>

            <button id="menu-btn" class="group flex items-center gap-4 transition-all duration-500">
                <div class="relative overflow-hidden hidden sm:block">
                    <span class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.3em] transition-transform duration-500 group-hover:-translate-y-full">
                        Menu
                    </span>
                    <span class="absolute top-0 left-0 block text-[10px] font-black text-[#3ED6A8] uppercase tracking-[0.3em] translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                        Open
                    </span>
                </div>

                <div class="relative h-12 w-12 flex flex-col items-center justify-center rounded-xl bg-slate-50 border border-slate-100 shadow-sm group-hover:bg-white group-hover:shadow-lg group-hover:shadow-[#3ED6A8]/10 group-hover:border-[#3ED6A8]/20 transition-all duration-500">
                    <span class="block h-[2px] w-5 bg-slate-900 rounded-full transition-all duration-500 group-hover:w-3 group-hover:-translate-x-1 group-hover:bg-[#3ED6A8]"></span>
                    
                    <span class="block h-[2px] w-5 bg-slate-900 rounded-full mt-1.5 transition-all duration-500 group-hover:bg-[#2AA880]"></span>
                    
                    <span class="absolute bottom-3 right-3 h-1 w-1 rounded-full bg-[#3ED6A8] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                </div>
            </button>
        </div>
    </nav>

    <div id="menu-overlay" class="fixed inset-0 z-[200] flex flex-col pointer-events-none opacity-0" style="background-color: #3ED6A8;">
        <div class="container mx-auto px-6 lg:px-12 flex h-24 items-center justify-between">
            <h2 class="text-white text-2xl font-black">Heal<span class="text-slate-900">Sense</span></h2>
            
            <div class="relative flex items-center justify-center">
                <div class="absolute inset-0 bg-white rounded-full animate-ripple"></div>
                <div class="absolute inset-0 bg-white rounded-full animate-ripple" style="animation-delay: 0.5s"></div>
                
                <button id="close-btn" class="relative z-10 h-14 w-14 flex items-center justify-center rounded-full bg-slate-900 text-white shadow-2xl hover:scale-95 transition-transform overflow-hidden">
                    <svg class="w-6 h-6 relative z-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex-grow flex items-center">
            <div class="container mx-auto px-6 lg:px-12">
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">
                    <li>
                        <a href="/" class="menu-item">
                            <span><span class="menu-number">01</span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/featured-articles" class="menu-item">
                            <span><span class="menu-number">02</span>Featured Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/symptom-checker" class="menu-item">
                            <span><span class="menu-number">03</span>Symptom Checker</span>
                        </a>
                    </li>
                    <li>
                        <a href="/health-categories" class="menu-item">
                            <span><span class="menu-number">04</span>Health Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="/daily-health-tips" class="menu-item">
                            <span><span class="menu-number">05</span>Daily Health Tips</span>
                        </a>
                    </li>
                    <li>
                        <a href="/interactive" class="menu-item">
                            <span><span class="menu-number">06</span>Interactive Tools</span>
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="menu-item">
                            <span><span class="menu-number">07</span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="/testimonial" class="menu-item">
                            <span><span class="menu-number">08</span>Testimonials</span>
                        </a>
                    </li>
                    
                    <!-- Contact Now Section -->
                    <li class="md:col-span-2 pt-8 mt-4 border-t border-white/20">
                        <a href="/contact" class="group flex items-baseline gap-4 text-4xl md:text-7xl font-black text-slate-900 hover:text-white transition-all italic">
                            <span class="text-xl md:text-2xl not-italic opacity-40 group-hover:opacity-100 transition-opacity">09</span>
                            <span>Contact Now →</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center overflow-hidden bg-white pt-20 lg:pt-0">
        
        <div class="absolute inset-0 bg-grid-pattern mask-radial opacity-60 pointer-events-none"></div>

        <div class="absolute -top-24 -left-24 h-[400px] w-[400px] md:h-[600px] md:w-[600px] rounded-full bg-[#3ED6A8]/10 blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/2 -right-24 h-[400px] w-[400px] md:h-[700px] md:w-[700px] -translate-y-1/2 rounded-full bg-blue-50 blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto max-w-7xl px-6 lg:px-12 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">
                
                <div class="w-full lg:w-[55%] text-center lg:text-left order-2 lg:order-1 relative">
                    
                    <div class="absolute -top-10 -left-10 text-[120px] font-black text-slate-900 opacity-[0.02] select-none pointer-events-none hidden lg:block tracking-tighter">
                        HEALTH
                    </div>

                    <div class="mb-8 inline-flex items-center gap-3 rounded-full bg-white border border-slate-200/60 px-4 py-2 shadow-sm transition-all hover:bg-[#3ED6A8]/5 hover:border-[#3ED6A8]/30 group cursor-default">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#3ED6A8] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#3ED6A8]"></span>
                        </span>
                        <span class="text-[11px] font-black tracking-[0.2em] text-slate-400 group-hover:text-[#2AA880] transition-colors uppercase">
                            AI-Powered Healthcare
                        </span>
                    </div>

                    <h1 class="mb-8 text-5xl md:text-7xl lg:text-[84px] font-black leading-[0.95] text-slate-900 tracking-[-0.04em]">
                        Your Digital Guide <br class="hidden xl:block"> 
                        to <span class="relative inline-block mt-2">
                            <span class="relative z-10 bg-gradient-to-r from-[#3ED6A8] via-[#2AA880] to-[#1a6d53] bg-clip-text text-transparent">Better Health</span>
                            <svg class="absolute -bottom-1 left-0 w-full h-3 text-[#3ED6A8]/20 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 25 0, 50 5 T 100 5" stroke="currentColor" stroke-width="6" fill="transparent" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </h1>
                    
                    <p class="mb-12 max-w-lg text-lg md:text-xl text-slate-500 leading-relaxed mx-auto lg:mx-0 font-medium">
                        Learn, understand, and take control of your health with <span class="text-slate-900 font-bold underline decoration-[#3ED6A8]/40 decoration-4 underline-offset-4">trusted insights</span>. 
                        Empowered by AI, designed for your well-being.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-6 lg:justify-start">
                        <a href="#" class="group relative w-full sm:w-auto">
                            <div class="absolute inset-0 bg-[#3ED6A8] blur-2xl opacity-20 group-hover:opacity-40 transition-opacity"></div>
                            <div class="btn-glossy relative flex items-center justify-center gap-3 px-10 py-5 rounded-2xl bg-[#3ED6A8] font-black text-white shadow-xl transition-all group-hover:-translate-y-1.5 active:scale-95">
                                <span class="relative z-10 tracking-wide">Explore Articles</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </div>
                        </a>

                        <a href="#" class="group relative w-full sm:w-auto block">
                            <div class="flex items-center justify-center gap-3 px-10 py-5 rounded-2xl bg-white border-[1.5px] border-slate-200 font-black text-slate-800 shadow-sm transition-all hover:border-[#3ED6A8] hover:text-[#3ED6A8] hover:-translate-y-1.5 active:scale-95">
                                <div class="bg-slate-100 p-1.5 rounded-lg group-hover:bg-[#3ED6A8] group-hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                    </svg>
                                </div>
                                <span class="tracking-wide">Symptom Check</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-[45%] flex justify-center lg:justify-end order-1 lg:order-2">
                    <div class="relative w-[75%] sm:w-[60%] lg:w-full max-w-md">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-gradient-to-tr from-[#3ED6A8]/20 to-blue-400/10 rounded-full blur-[80px] -z-10"></div>

                        <div class="animate-float relative z-10">
                            <img src="/img/hero/anatomi.png" alt="Anatomy Illustration" 
                                class="w-full h-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.15)] filter saturate-[1.1]">
                        </div>

                        <div class="animate-float-fast absolute -right-4 top-10 z-20 hidden sm:block">
                            <div class="bg-white/90 backdrop-blur-xl border border-slate-100 p-4 rounded-2xl shadow-xl flex items-center gap-3">
                                <div class="bg-[#3ED6A8] p-2 rounded-lg text-white shadow-lg shadow-[#3ED6A8]/20">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-[#2AA880] uppercase tracking-tighter">Digital Education</p>
                                    <p class="text-sm font-black text-slate-800 leading-tight">Health Insights</p>
                                </div>
                            </div>
                        </div>

                        <div class="animate-float-slow absolute -left-10 top-1/2 z-20">
                            <div class="bg-white/90 backdrop-blur-xl border border-slate-100 p-4 rounded-2xl shadow-xl flex items-center gap-3">
                                <div class="bg-[#3ED6A8] p-2 rounded-full text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Medical Guide</p>
                                    <p class="text-sm font-black text-slate-800">Check Symptoms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Featured Articles --}}
    @include('components.featured-articles')

    {{-- Symptom Checker --}}
    @include('components.symptom-checker')

    <script>
        // logic navbar
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menu-btn');
            const closeBtn = document.getElementById('close-btn');
            const menuOverlay = document.getElementById('menu-overlay');
            const menuItems = document.querySelectorAll('.menu-item span');

            menuBtn.onclick = () => {
                menuOverlay.classList.add('menu-active');
                document.body.style.overflow = 'hidden';
                menuItems.forEach((span, i) => {
                    span.style.transitionDelay = `${0.3 + (i * 0.05)}s`;
                });
            };

            const hideMenu = () => {
                menuOverlay.classList.remove('menu-active');
                document.body.style.overflow = '';
                menuItems.forEach(span => span.style.transitionDelay = '0s');
            };

            closeBtn.onclick = function(e) {
                // 1. Buat elemen gelombang
                const ripple = document.createElement("span");
                ripple.classList.add("click-ripple");
                this.appendChild(ripple);

                // 2. Tentukan posisi gelombang (tengah tombol)
                const size = Math.max(this.clientWidth, this.clientHeight);
                ripple.style.width = ripple.style.height = `${size}px`;
                ripple.style.left = `0px`;
                ripple.style.top = `0px`;

                // 3. Jalankan fungsi hideMenu setelah animasi berjalan sedikit (300ms)
                setTimeout(() => {
                    hideMenu();
                    ripple.remove(); // Hapus elemen setelah selesai
                }, 300);
            };

            // Tambahan untuk keyboard Escape
            window.onkeydown = (e) => { 
                if(e.key === 'Escape') hideMenu(); 
            };
        });
    </script>
</body>
</html>