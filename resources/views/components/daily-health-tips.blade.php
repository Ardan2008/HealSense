@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://unpkg.com/lucide@latest"></script>

<section class="py-24 relative min-h-screen font-sans overflow-hidden">
    <div class="absolute -top-24 -left-24 h-[400px] w-[400px] md:h-[600px] md:w-[600px] rounded-full bg-[#3ED6A8]/10 blur-[100px] pointer-events-none"></div>
    <div class="absolute top-1/2 -right-24 h-[400px] w-[400px] md:h-[700px] md:w-[700px] -translate-y-1/2 rounded-full bg-blue-50 blur-[120px] pointer-events-none"></div>


    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-[5%] left-[10%] w-[40%] h-[40%] rounded-full bg-blue-400/10 blur-[120px]"></div>
        <div class="absolute bottom-[5%] right-[10%] w-[40%] h-[40%] rounded-full bg-emerald-400/10 blur-[120px]"></div>
    </div>

    <div id="modal-overlay" class="fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-6 opacity-0 invisible transition-all duration-500 bg-slate-900/40 backdrop-blur-sm">
        <div id="modal-content" class="bg-white w-full max-w-xl rounded-[2.5rem] shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-500 relative p-10">
            <button 
                onclick="closeModal()" 
                class="absolute top-6 right-6 p-2 rounded-xl text-[#1F2937]/40 bg-[#1F2937]/0 hover:bg-[#1F2937]/5 hover:text-[#1F2937] transition-all duration-300 group"
                aria-label="Close Modal"
            >
                <svg 
                    class="w-6 h-6 transform group-hover:rotate-90 transition-transform duration-500" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        stroke-width="1.5" 
                        group-hover:stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
            <div id="modal-tag" class="text-[10px] font-bold uppercase tracking-widest mb-2"></div>
            <h2 id="modal-title" class="text-2xl font-bold text-slate-800 mb-4"></h2>
            <p id="modal-desc" class="text-slate-600 leading-relaxed mb-6"></p>
            <div class="pt-4 border-t border-slate-100">
                <p id="modal-source" class="text-[10px] text-slate-400 italic"></p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 max-w-6xl relative z-10">
        <div class="py-20 px-6 font-sans">
            <div class="max-w-3xl mx-auto text-center">
                
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-[#3ED6A8] uppercase bg-[#3ED6A8]/10 rounded-full">
                    Stay Healthy
                </span>

                <h1 class="text-4xl md:text-6xl font-black text-[#1F2937] mb-6 tracking-tighter uppercase leading-none">
                    Daily <span class="text-[#3ED6A8]">Health</span> Tips
                </h1>

                <div class="w-20 h-1.5 bg-[#3ED6A8] mx-auto mb-8 rounded-full"></div>

                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-[#1F2937]/80 text-xl md:text-2xl max-w-3xl mx-auto leading-snug mb-8 font-medium">
                        Daily health guide validated by
                        <span class="relative inline-block">
                            <span class="relative z-10 font-bold text-[#1F2937]">global medical standards</span>
                            <span class="absolute bottom-1 left-0 w-full h-3 bg-[#3ED6A8]/20 -z-0"></span>
                        </span> 
                        for a better quality of life.
                    </p>
                </div>

            </div>
        </div>

        <div id="tips-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            </div>
    </div>
</section>

<script>
    const rituals = [
        { 
            title: 'Optimal Hydration', 
            desc: 'Maintaining fluid balance is critical for cellular function and toxin removal.', 
            longDesc: 'According to clinical standards, water is the primary catalyst for flushing metabolic waste through the renal system and perspiration. Proper hydration ensures that your blood volume remains stable, preventing heart strain and maintaining the lubrication of joints and sensitive tissues.', 
            source: 'Mayo Clinic / National Academies of Sciences', 
            color: 'blue', 
            icon: 'droplets' 
        },
        { 
            title: 'Postprandial Walk', 
            desc: 'A short walk after meals significantly aids in glucose regulation.', 
            longDesc: 'Light movement after eating, even for just five minutes, helps your muscles absorb excess glucose from the bloodstream. This process reduces the demand on your pancreas and prevents the sharp insulin spikes that often lead to energy crashes and long-term metabolic issues.', 
            source: 'Sports Medicine Journal / Harvard Health', 
            color: 'orange', 
            icon: 'footprints' 
        },
        { 
            title: 'Circadian Rhythm', 
            desc: 'Align your internal clock by managing light exposure before sleep.', 
            longDesc: 'Exposure to short-wave blue light from screens suppresses the production of melatonin, the hormone responsible for sleep. By dimming lights and avoiding screens before bed, you stabilize your circadian rhythm, ensuring deeper REM cycles and better cognitive restoration.', 
            source: 'Harvard Medical School', 
            color: 'purple', 
            icon: 'moon' 
        },
        { 
            title: 'Box Breathing', 
            desc: 'A powerful technique to instantly shift from stress to calm.', 
            longDesc: 'Deep, rhythmic breathing stimulates the vagus nerve, which signals the brain to lower your "fight-or-flight" response. This exercise physically lowers your heart rate and cortisol levels, allowing your nervous system to return to a state of focused relaxation.', 
            source: 'Cleveland Clinic / American Psychological Association', 
            color: 'teal', 
            icon: 'wind' 
        },
        { 
            title: 'Ergonomic Alignment', 
            desc: 'Correct posture prevents chronic strain and musculoskeletal injury.', 
            longDesc: 'Maintaining a neutral spine position reduces the kinetic load on your neck and lower back. By aligning your monitor at eye level and supporting your lumbar curve, you prevent the micro-trauma to tendons and discs that often results from prolonged sedentary work.', 
            source: 'OSHA / NHS UK', 
            color: 'red', 
            icon: 'monitor' 
        },
        { 
            title: 'Heliotherapy', 
            desc: 'Controlled sun exposure is essential for Vitamin D and mood.', 
            longDesc: 'Natural sunlight triggers the synthesis of Vitamin D3 in the skin, which is vital for calcium absorption and immune system strength. Brief, daily exposure also helps regulate serotonin levels, improving your overall mood and mental clarity.', 
            source: 'World Health Organization (WHO)', 
            color: 'yellow', 
            icon: 'sun' 
        },
        { 
            title: 'Lean Protein', 
            desc: 'High-quality protein supports tissue repair and metabolic health.', 
            longDesc: 'Proteins provide the essential amino acids required to repair muscle fibers and produce vital hormones. A consistent intake of lean protein helps preserve muscle mass, which is the primary driver of a healthy basal metabolic rate and physical strength.', 
            source: 'British Nutrition Foundation', 
            color: 'emerald', 
            icon: 'armchair' 
        },
        { 
            title: 'Sleep Hygiene', 
            desc: 'Quality sleep is the brain’s primary method for metabolic cleaning.', 
            longDesc: 'During deep sleep, the brain’s glymphatic system becomes highly active, clearing out metabolic waste like beta-amyloid. Consistent, high-quality sleep is non-negotiable for long-term memory retention and reducing the risk of neurodegenerative decline.', 
            source: 'National Institutes of Health (NIH)', 
            color: 'slate', 
            icon: 'brain-circuit' 
        }
    ];

    function openModal(index) {
        const data = rituals[index];
        document.getElementById('modal-title').innerText = data.title;
        document.getElementById('modal-desc').innerText = data.longDesc;
        // Render Source (Text Only)
        document.getElementById('modal-source').innerHTML = `
            <div class="flex items-center gap-3 mt-4">
                <div class="px-2 py-0.5 bg-[#3ED6A8]/10 rounded-md">
                    <span class="text-[10px] font-black uppercase tracking-[0.05em] text-[#3ED6A8]">
                        Scientific Basis
                    </span>
                </div>
                <span class="text-sm font-bold text-[#1F2937]/70">
                    ${data.source}
                </span>
            </div>
        `;
        const tag = document.getElementById('modal-tag');
        tag.innerText = "Evidence Based";
        tag.className = `text-[10px] font-bold uppercase tracking-widest mb-2 text-${data.color}-500`;

        const overlay = document.getElementById('modal-overlay');
        overlay.classList.remove('invisible', 'opacity-0');
        document.getElementById('modal-content').classList.remove('scale-95', 'opacity-0');
    }

    function closeModal() {
        document.getElementById('modal-overlay').classList.add('opacity-0');
        setTimeout(() => {
            document.getElementById('modal-overlay').classList.add('invisible');
        }, 500);
    }

    function render() {
        document.getElementById('tips-grid').innerHTML = rituals.map((r, i) => `
            <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100 flex flex-col items-start text-left hover:shadow-xl transition-all duration-300 group">
                <div class="flex justify-between w-full mb-6">
                    <div class="w-12 h-12 flex items-center justify-center bg-slate-50 rounded-xl group-hover:scale-110 transition-transform">
                        <i data-lucide="${r.icon}" class="w-6 h-6 text-${r.color}-500"></i>
                    </div>
                    <div class="w-10 h-10 rounded-full opacity-20 blur-md bg-${r.color}-400"></div>
                </div>
                
                <h3 class="text-xl font-bold text-slate-800 mb-3">${r.title}</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-8 flex-grow">${r.desc}</p>
                
                <button onclick="openModal(${i})" class="w-full py-3 rounded-2xl font-bold text-xs tracking-widest text-white uppercase transition-all shadow-lg shadow-${r.color}-200 bg-gradient-to-r from-${r.color}-400 to-${r.color}-600 hover:brightness-110 active:scale-95">
                    Read More
                </button>
            </div>
        `).join('');

        lucide.createIcons();
    }
    
    document.addEventListener('DOMContentLoaded', render);
</script>

<style>
    .text-blue-500 { color: #3b82f6; }
    .text-orange-500 { color: #f97316; }
    .text-purple-500 { color: #a855f7; }
    .text-teal-500 { color: #14b8a6; }
    .text-red-500 { color: #ef4444; }
    .text-yellow-500 { color: #eab308; }
    .text-emerald-500 { color: #10b981; }
    .text-slate-500 { color: #64748b; }

    /* Mapping warna manual untuk Tailwind dynamic classes */
    .from-blue-400 { --tw-gradient-from: #60a5fa; --tw-gradient-to: rgb(96 165 250 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
    .to-blue-600 { --tw-gradient-to: #2563eb; }
    .shadow-blue-200 { --tw-shadow-color: rgba(191, 219, 254, 0.5); shadow: 0 10px 15px -3px var(--tw-shadow-color); }

    .from-orange-400 { --tw-gradient-from: #fb923c; } .to-orange-600 { --tw-gradient-to: #ea580c; }
    .from-purple-400 { --tw-gradient-from: #c084fc; } .to-purple-600 { --tw-gradient-to: #9333ea; }
    .from-teal-400 { --tw-gradient-from: #2dd4bf; } .to-teal-600 { --tw-gradient-to: #0d9488; }
    .from-red-400 { --tw-gradient-from: #f87171; } .to-red-600 { --tw-gradient-to: #dc2626; }
    .from-yellow-400 { --tw-gradient-from: #facc15; } .to-yellow-600 { --tw-gradient-to: #ca8a04; }
    .from-emerald-400 { --tw-gradient-from: #34d399; } .to-emerald-600 { --tw-gradient-to: #059669; }
    .from-slate-400 { --tw-gradient-from: #94a3b8; } .to-slate-600 { --tw-gradient-to: #475569; }

    /* Custom shadow helper */
    [class*="shadow-"][class*="-200"] {
        box-shadow: 0 12px 20px -5px var(--tw-shadow-color);
    }
</style>