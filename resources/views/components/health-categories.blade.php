@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    /* Hilangkan scrollbar tapi tetap bisa di-scroll */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Smooth transition untuk backdrop */
    .health-modal {
        transition: background-color 0.5s ease, backdrop-filter 0.5s ease;
    }

    /* Perbaikan scroll mobile: pastikan container luar bisa scroll jika modal kepanjangan */
    @media (max-width: 768px) {
        .health-modal {
            align-items: flex-start; /* Modal mulai dari atas */
            padding: 1rem;
            overflow-y: auto; 
        }
    }
</style>

<section id="health-categories" class="bg-[#F8FAFC] py-12 px-6 min-h-screen">
    <div class="max-w-6xl mx-auto">
        
        <div class="mb-12 text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-black text-[#1F2937] tracking-tight">Health Education</h2>
            <div class="h-1.5 w-24 bg-[#3ED6A8] mt-3 rounded-full mx-auto md:mx-0"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-10">
            @php
                $categories = [
                    [
                        'id' => 'nutrition',
                        'title' => 'Nutrition',
                        'desc' => 'Nutrition is the foundation of biological health. Macronutrients (carbohydrates, proteins, fats) provide energy, while micronutrients (vitamins, minerals) support enzymatic and hormonal functions that maintain optimal metabolism.',
                        'tips' => [
                            'Consume 5 servings of fiber (vegetables & fruit)',
                            'Limit added sugar to < 25g per day',
                            'Stay hydrated: 30ml per kg of body weight',
                            'Choose unsaturated fat sources (Avocados, Fish)'
                        ],
                        'svg' => '<path d="M12 21.66V12M12 12c3.31 0 6-2.69 6-6V3h-2v3c0 2.21-1.79 4-4 4s-4-1.79-4-4V3H6v3c0 3.31 2.69 6 6 6Z"/><path d="M18 8c0 4.42-3 8-6 8s-6-3.58-6-8"/><path d="M12 16v5.66"/>'
                    ],
                    [
                        'id' => 'mental-health',
                        'title' => 'Mental Health',
                        'desc' => 'Mental health encompasses emotional resilience and cognitive stability. A healthy psychological state enables individuals to manage life stressors, work productively, and contribute to their community.',
                        'tips' => [
                            'Practice the 4-7-8 breathing technique',
                            'Digital detox 1 hour before bedtime',
                            'Keep a gratitude journal every morning/night',
                            'Consult a professional if feeling burnt out'
                        ],
                        'svg' => '<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>'
                    ],
                    [
                        'id' => 'fitness',
                        'title' => 'Fitness',
                        'desc' => 'Physical fitness is not just about aesthetics, but the body\'s ability to function efficiently. Regular exercise increases bone density, insulin sensitivity, and strengthens the musculoskeletal system.',
                        'tips' => [
                            '150 minutes of moderate aerobic exercise/week',
                            'Strength training 2x a week for muscle health',
                            'Walk at least 7,000 steps a day',
                            'Rest 48 hours between heavy muscle sessions'
                        ],
                        'svg' => '<path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/><path d="M2 20h20"/>'
                    ],
                    [
                        'id' => 'diseases',
                        'title' => 'Diseases',
                        'desc' => 'Understanding pathology helps in the early detection of both infectious and degenerative diseases. Primary prevention through immunization and lifestyle is far more effective than curative treatment.',
                        'tips' => [
                            'Regularly check blood pressure and blood sugar',
                            'Complete the adult vaccination schedule',
                            'Wash hands with soap (WHO method)',
                            'Avoid exposure to second-hand smoke'
                        ],
                        'svg' => '<path d="M12 2v4"/><path d="m4.93 4.93 2.83 2.83"/><path d="M2 12h4"/><path d="m4.93 19.07 2.83-2.83"/><path d="M12 22v-4"/><path d="m19.07 19.07-2.83-2.83"/><path d="M22 12h-4"/><circle cx="12" cy="12" r="3"/>'
                    ],
                    [
                        'id' => 'sleep',
                        'title' => 'Sleep',
                        'desc' => 'Sleep is an anabolic process where the body performs tissue repair, memory consolidation, and toxin clearance in the brain via the glymphatic system. Sleep quality dictates cognitive performance.',
                        'tips' => [
                            'Aim for 7-9 hours of quality sleep',
                            'Keep room temperature cool (±20-22°C)',
                            'Wake up and go to bed at the same time',
                            'Avoid caffeine 6 hours before sleep'
                        ],
                        'svg' => '<path d="M2 4v16"/><path d="M2 8h18a2 2 0 0 1 2 2v10"/><path d="M2 17h20"/><path d="M6 8v9"/>'
                    ],
                    [
                        'id' => 'heart-health',
                        'title' => 'Heart Health',
                        'desc' => 'The heart is the primary circulatory engine. Maintaining cardiovascular health means preserving blood vessel elasticity and ensuring oxygen supply to vital organs without plaque obstruction.',
                        'tips' => [
                            'Reduce salt intake to < 1 teaspoon/day',
                            'Choose complex carbohydrates (oats, whole wheat)',
                            'Monitor cholesterol profiles (LDL & HDL)',
                            'Perform light cardio such as brisk walking'
                        ],
                        'svg' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>'
                    ],
                ];
            @endphp

            @foreach($categories as $category)
                {{-- Trigger Button --}}
                <button type="button" onclick="openHealthContent('modal-{{ $category['id'] }}')"
                        class="group flex flex-col items-center justify-center p-8 bg-white rounded-[2.5rem] border border-transparent shadow-sm transition-all duration-500 hover:border-[#3ED6A8]/30 hover:shadow-2xl hover:shadow-[#3ED6A8]/10 hover:-translate-y-2">
                    <div class="mb-5 p-5 rounded-[1.5rem] bg-[#F8FAFC] group-hover:bg-[#3ED6A8]/10 transition-all duration-500">
                        <svg class="transform transition-transform duration-700 hover:scale-110 text-[#1F2937] group-hover:text-[#3ED6A8]" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            {!! $category['svg'] !!}
                        </svg>
                    </div>
                    <span class="font-bold text-[#1F2937] group-hover:text-[#3ED6A8] transition-colors duration-500 text-lg uppercase tracking-wider">{{ $category['title'] }}</span>
                </button>

                {{-- Modal --}}
                <div id="modal-{{ $category['id'] }}" 
                    class="health-modal fixed inset-0 z-[100] hidden flex items-center justify-center bg-[#1F2937]/0 backdrop-blur-0">
                    
                    {{-- Card Container --}}
                    <div class="bg-white rounded-[2rem] md:rounded-[3rem] max-w-4xl w-full shadow-2xl transform scale-95 translate-y-8 opacity-0 transition-all duration-500 ease-out flex flex-col md:flex-row relative my-auto overflow-hidden max-h-[90vh] md:max-h-[85vh]">
                        
                        {{-- Close Button --}}
                        <div class="absolute top-4 right-4 md:top-6 md:right-6 z-20">
                            <button onclick="closeHealthContent('modal-{{ $category['id'] }}')" 
                                    class="group relative flex items-center justify-center w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/90 backdrop-blur-md border border-gray-100 shadow-sm overflow-hidden transition-all duration-500 
                                        {{-- Efek Tekan: Tombol mengecil saat diklik --}}
                                        active:scale-90 active:translate-y-0.5">
                                
                                {{-- Efek Bubble (Liquid Fill) dari bawah --}}
                                <span class="absolute inset-0 top-0 left-0 w-full h-full bg-[#3ED6A8] transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover:translate-y-0 rounded-t-[50%] group-hover:rounded-none"></span>

                                {{-- Icon X --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" 
                                    class="relative z-10 text-[#1F2937] transition-all duration-500 
                                        {{-- Efek Hover: Icon berubah putih, berputar 90 derajat, dan sedikit membesar --}}
                                        group-hover:text-white group-hover:rotate-90 group-hover:scale-110">
                                    <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
                                </svg>
                            </button>
                        </div>

                        {{-- Left: Icon (Static) --}}
                        <div class="md:w-1/3 bg-gradient-to-br from-[#F8FAFC] to-[#F1F5F9] p-6 md:p-12 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-gray-100 flex-shrink-0">
                            <div class="relative p-6 md:p-8 bg-white rounded-[2rem] text-[#3ED6A8] shadow-xl mb-4 md:mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    {!! $category['svg'] !!}
                                </svg>
                            </div>
                            <h3 class="text-xl md:text-2xl font-black text-[#1F2937] uppercase tracking-widest text-center">{{ $category['title'] }}</h3>
                        </div>

                        {{-- Right: Scrollable Content --}}
                        <div class="md:w-2/3 p-6 md:p-12 flex flex-col overflow-y-auto no-scrollbar">
                            <div class="flex-grow">
                                <h4 class="text-xs font-black text-[#3ED6A8] uppercase tracking-[0.2em] mb-3">Overview</h4>
                                <p class="text-gray-500 leading-relaxed mb-8 text-base md:text-lg font-medium">{{ $category['desc'] }}</p>
                                
                                <h4 class="text-xs font-black text-[#1F2937] uppercase tracking-[0.2em] mb-3">Health Strategy</h4>
                                <div class="grid grid-cols-1 gap-3 mb-6">
                                    @foreach($category['tips'] as $tip)
                                        <div class="flex items-center gap-3 bg-[#F8FAFC] p-4 rounded-xl border border-gray-100">
                                            <div class="w-2 h-2 bg-[#3ED6A8] rounded-full shrink-0"></div>
                                            <span class="text-sm font-bold text-gray-700">{{ $tip }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Action Button --}}
                            <div class="mt-8 pb-2">
                                <div class="group relative w-full inline-block">
                                    {{-- Efek Glow/Blur di belakang tombol --}}
                                    <div class="absolute inset-0 bg-[#3ED6A8] blur-2xl opacity-20 group-hover:opacity-50 transition-opacity duration-500"></div>
                                    
                                    <button onclick="closeHealthContent('modal-{{ $category['id'] }}')" 
                                            class="relative w-full overflow-hidden flex items-center justify-center py-5 rounded-2xl bg-[#3ED6A8] font-black text-white transition-all duration-500 shadow-xl border border-[#3ED6A8] active:scale-95">
                                        
                                        {{-- Lapisan Putih yang muncul dari bawah (Bubble Effect) --}}
                                        <span class="absolute inset-0 top-0 left-0 w-full h-full bg-white transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover:translate-y-0 rounded-t-[50%] group-hover:rounded-none"></span>

                                        {{-- Label Tombol --}}
                                        <span class="relative z-10 flex items-center gap-3 group-hover:text-[#1F2937] transition-colors duration-500 uppercase tracking-widest text-xs">
                                            Got it, thanks!
                                            <svg class="w-4 h-4 transition-transform duration-500 group-hover:translate-x-1" 
                                                fill="none" 
                                                stroke="currentColor" 
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function openHealthContent(id) {
        const modal = document.getElementById(id);
        if (!modal) return;

        const content = modal.querySelector('.bg-white');
        if (!content) return;

        modal.classList.remove('hidden');
        
        // Memastikan animasi berjalan setelah elemen dirender
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                modal.classList.replace('bg-[#1F2937]/0', 'bg-[#1F2937]/60');
                modal.classList.replace('backdrop-blur-0', 'backdrop-blur-md');
                
                content.classList.replace('scale-95', 'scale-100');
                content.classList.replace('translate-y-8', 'translate-y-0');
                content.classList.replace('opacity-0', 'opacity-100');
            });
        });

        document.body.style.overflow = 'hidden';
    }

    function closeHealthContent(id) {
        const modal = document.getElementById(id);
        if (!modal) return;

        const content = modal.querySelector('.bg-white');

        // Balikkan animasi
        modal.classList.replace('bg-[#1F2937]/60', 'bg-[#1F2937]/0');
        modal.classList.replace('backdrop-blur-md', 'backdrop-blur-0');

        if (content) {
            content.classList.replace('scale-100', 'scale-95');
            content.classList.replace('translate-y-0', 'translate-y-8');
            content.classList.replace('opacity-100', 'opacity-0');
        }

        // Sembunyikan setelah transisi selesai (500ms)
        setTimeout(() => {
            modal.classList.add('hidden');
            // Cek jika tidak ada modal lain yang terbuka
            if (!document.querySelector('.health-modal:not(.hidden)')) {
                document.body.style.overflow = 'auto';
            }
        }, 500);
    }

    // Event Listener untuk Escape & Klik Luar
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const openModal = document.querySelector('.health-modal:not(.hidden)');
            if (openModal) closeHealthContent(openModal.id);
        }
    });

    window.addEventListener('click', (e) => {
        if (e.target.classList.contains('health-modal')) {
            closeHealthContent(e.target.id);
        }
    });
</script>