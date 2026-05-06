@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    /* Sembunyikan centang secara default */
    .check-icon {
        opacity: 0;
        transition: opacity 0.2s;
    }

    /* Tampilkan centang hanya saat tombol di-hover atau dipilih */
    button:hover .check-icon, 
    button.selected .check-icon {
        opacity: 1;
    }

    /* Warna background lingkaran saat dipilih */
    button.selected .check-circle {
        background-color: #3ED6A8;
        border-color: #3ED6A8;
    }
</style>

<section id="symptom-checker" class="py-24 relative overflow-hidden">
    <div class="absolute -top-24 -left-24 h-[400px] w-[400px] md:h-[600px] md:w-[600px] rounded-full bg-[#3ED6A8]/10 blur-[100px] pointer-events-none"></div>
    <div class="absolute top-1/2 -right-24 h-[400px] w-[400px] md:h-[700px] md:w-[700px] -translate-y-1/2 rounded-full bg-blue-50 blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto max-w-7xl px-6 lg:px-12 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            
            <div class="w-full lg:w-1/2">
                <div class="mb-6 inline-flex items-center gap-3 rounded-full bg-[#3ED6A8]/10 border border-[#3ED6A8]/20 px-4 py-2">
                    <span class="flex h-2 w-2 rounded-full bg-[#3ED6A8]"></span>
                    <span class="text-[11px] font-black tracking-[0.2em] text-[#1a6d53] uppercase">AI Diagnostic Tool</span>
                </div>

                <h2 class="text-5xl md:text-6xl font-black text-[#1F2937] leading-[1.1] mb-6 tracking-tighter">
                    Not Feeling Well? <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3ED6A8] to-[#2AA880] italic font-serif font-light">Let’s Check.</span>
                </h2>

                <p class="text-lg text-slate-500 font-medium mb-10 max-w-md leading-relaxed">
                    Answer a few simple questions to understand your condition better. Our AI-driven tool provides instant insights based on your symptoms.
                </p>

                <div class="space-y-4 mb-10">
                    <div class="flex items-center gap-4 group">
                        <div class="h-10 w-10 flex items-center justify-center rounded-xl bg-white border border-slate-200 text-[#3ED6A8] group-hover:bg-[#3ED6A8] group-hover:text-white transition-all shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-[#1F2937] font-bold">Fast & Accurate Analysis</span>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="h-10 w-10 flex items-center justify-center rounded-xl bg-white border border-slate-200 text-[#3ED6A8] group-hover:bg-[#3ED6A8] group-hover:text-white transition-all shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-[#1F2937] font-bold">Privacy Guaranteed</span>
                    </div>
                </div>

                <a href="javascript:void(0)" onclick="nextStep(1)" class="group relative inline-block">
                    <div class="absolute inset-0 bg-[#3ED6A8] blur-2xl opacity-20 group-hover:opacity-50 transition-opacity duration-500"></div>
                    
                    <button class="relative overflow-hidden flex items-center justify-center gap-4 px-10 py-5 rounded-2xl bg-[#3ED6A8] font-black text-white transition-all duration-500 shadow-2xl uppercase tracking-widest text-xs border border-[#3ED6A8]">
                        
                        <span class="absolute inset-0 top-0 left-0 w-full h-full bg-white transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover:translate-y-0 rounded-t-[50%] group-hover:rounded-none"></span>

                        <span class="relative z-10 flex items-center gap-4 group-hover:text-[#1F2937] transition-colors duration-500">
                            Start Checking
                            <svg class="w-5 h-5 transition-transform duration-500 group-hover:translate-x-2 group-hover:rotate-45" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </button>
                </a>

                <p class="mt-8 text-[11px] text-slate-400 font-medium italic">
                    Disclaimer: For educational purposes only, not a medical diagnosis.
                </p>
            </div>

            <div class="w-full lg:w-1/2 relative">
                <div class="relative bg-white rounded-[3rem] p-8 md:p-12 shadow-2xl">
                    <div class="mb-12">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[10px] font-black text-[#3ED6A8] uppercase tracking-widest">Progress</span>
                            <span id="progress-text" class="text-[10px] font-black text-slate-400 uppercase tracking-widest">0% Completed</span>
                        </div>
                        <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                            <div id="progress-bar" class="h-full bg-[#3ED6A8] rounded-full w-[0%] transition-all duration-500"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between w-full relative mb-12">
                        <div class="relative z-10 flex flex-col items-center">
                            <div id="step-1-circle" class="h-12 w-12 rounded-full bg-[#3ED6A8] text-white flex items-center justify-center font-black shadow-lg shadow-[#3ED6A8]/20 transition-all duration-500">
                                1
                            </div>
                            <span id="step-1-text" class="absolute -bottom-7 text-[10px] font-medium text-[#1F2937] uppercase tracking-tighter">Identity</span>
                        </div>

                        <div class="flex-grow mx-4 h-[2px] bg-slate-100 relative">
                            <div id="line-progress-1" class="absolute top-0 left-0 h-full bg-[#3ED6A8] transition-all duration-500" style="width: 0%;"></div>
                        </div>

                        <div class="relative z-10 flex flex-col items-center">
                            <div id="step-2-circle" class="h-12 w-12 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-black transition-all duration-500">
                                2
                            </div>
                            <span id="step-2-text" class="absolute -bottom-7 text-[10px] font-medium text-slate-400 uppercase tracking-tighter">Symptoms</span>
                        </div>

                        <div class="flex-grow mx-4 h-[2px] bg-slate-100 relative">
                            <div id="line-progress-2" class="absolute top-0 left-0 h-full bg-[#3ED6A8] transition-all duration-500" style="width: 0%;"></div>
                        </div>

                        <div class="relative z-10 flex flex-col items-center">
                            <div id="step-3-circle" class="h-12 w-12 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-black transition-all duration-500">
                                3
                            </div>
                            <span id="step-3-text" class="absolute -bottom-7 text-[10px] font-medium text-slate-400 uppercase tracking-tighter">Result</span>
                        </div>
                    </div>

                    <div id="question-container" class="group relative overflow-hidden bg-[#F8FAFC] rounded-3xl p-8 border border-[#3ED6A8]/10 shadow-[0_20px_50px_rgba(0,0,0,0.05)] min-h-[350px] flex flex-col justify-center transition-all duration-500 hover:shadow-[0_30px_60px_rgba(62,214,168,0.15)]">
                        
                        <div class="absolute -top-20 -right-20 w-40 h-40 bg-[#3ED6A8]/10 rounded-full blur-3xl group-hover:bg-[#3ED6A8]/20 transition-colors duration-500"></div>
                        <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-[#3ED6A8]/5 rounded-full blur-3xl transition-colors duration-500"></div>

                        <div id="quiz-content" class="relative z-10">
                            <div class="mb-6 flex justify-center">
                                <div class="w-16 h-16 bg-[#3ED6A8]/10 rounded-2xl flex items-center justify-center text-[#3ED6A8] rotate-3 group-hover:rotate-12 transition-transform duration-500">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>

                            <h3 class="text-[#1F2937] font-black text-2xl mb-2 text-center tracking-tight">
                                Ready to check <br> your <span class="text-[#3ED6A8]">health?</span>
                            </h3>
                            <p class="text-[#1F2937]/60 text-sm text-center mb-8 font-medium">
                                Discover insights about your wellness in 2 minutes.
                            </p>

                            <div class="relative group/btn">
                                <div class="absolute inset-0 bg-[#3ED6A8] blur-xl opacity-20 group-hover/btn:opacity-40 transition-opacity duration-500"></div>
                                
                                <button onclick="nextStep(1)" class="relative w-full overflow-hidden flex items-center justify-center gap-4 py-4 bg-[#3ED6A8] text-white rounded-2xl font-black shadow-xl transition-all duration-500 hover:-translate-y-1 active:scale-95 uppercase tracking-widest text-xs border border-[#3ED6A8]">
                                    
                                    <span class="absolute inset-0 top-0 left-0 w-full h-full bg-white transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover/btn:translate-y-0 rounded-t-[50%] group-hover/btn:rounded-none"></span>

                                    <span class="relative z-10 flex items-center gap-2 group-hover/btn:text-[#1F2937] transition-colors duration-500">
                                        Start Now
                                        <svg class="w-4 h-4 transition-transform duration-500 group-hover/btn:translate-x-1 group-hover/btn:rotate-45" 
                                            fill="none" 
                                            stroke="currentColor" 
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        {{-- loading interaktif --}}
                        <div id="loading-state" class="hidden flex-col items-center justify-center min-h-[350px] w-full text-center py-8 animate-in fade-in duration-500">
                            
                            <div class="relative w-20 h-20 mb-6">
                                <div class="absolute inset-0 bg-[#3ED6A8]/20 rounded-full animate-ping"></div>
                                <div class="relative w-20 h-20 bg-white border-2 border-[#3ED6A8] rounded-2xl flex items-center justify-center shadow-sm rotate-3">
                                    <svg class="w-10 h-10 text-[#3ED6A8] animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="space-y-2 mb-6">
                                <h4 id="loading-text" class="text-lg font-black text-[#1F2937] tracking-tight transition-all duration-500">
                                    Analyzing symptoms...
                                </h4>
                                <div class="flex justify-center gap-1.5">
                                    <div class="w-1.5 h-1.5 bg-[#3ED6A8] rounded-full animate-bounce"></div>
                                    <div class="w-1.5 h-1.5 bg-[#3ED6A8] rounded-full animate-bounce [animation-delay:-0.15s]"></div>
                                    <div class="w-1.5 h-1.5 bg-[#3ED6A8] rounded-full animate-bounce [animation-delay:-0.3s]"></div>
                                </div>
                            </div>
                            
                            <div class="w-full max-w-[240px] bg-[#3ED6A8]/10 h-2 rounded-full overflow-hidden border border-[#3ED6A8]/5">
                                <div id="progress-bar-loading" class="bg-gradient-to-r from-[#3ED6A8] to-[#2AA880] h-full w-0 transition-all duration-1000 ease-out"></div>
                            </div>

                            <p class="mt-4 text-[10px] font-bold text-[#1F2937]/40 uppercase tracking-widest">AI Engine Processing</p>
                        </div>
                    </div>
                </div>

                <div class="absolute -z-10 -bottom-10 -right-10 w-64 h-64 bg-[#3ED6A8]/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Tambahan Styling Grid (Jika belum ada di file utama) */
    .bg-grid-pattern {
        background-image: 
            linear-gradient(to right, rgba(31, 41, 55, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(31, 41, 55, 0.05) 1px, transparent 1px);
        background-size: 60px 60px;
    }
    .mask-radial {
        mask-image: radial-gradient(circle at center, black, transparent 90%);
        -webkit-mask-image: radial-gradient(circle at center, black, transparent 90%);
    }
</style>

<script>
    const checkerData = {
        1: {
            question: "How long have you been experiencing these symptoms?",
            options: ["Less than 24 hours", "1 - 3 Days", "More than a week"],
            next: 2
        },
        2: {
            question: "Do you have a fever or high body temperature?",
            options: ["Yes, very high", "Slightly warm", "No fever"],
            next: 3
        },
        3: {
            question: "Are you experiencing any difficulty breathing?",
            options: ["Yes, significant", "Only when moving", "No, breathing is fine"],
            next: 'result'
        }
    };

    let currentStep = 0;

    function nextStep(step, element) {
        const content = document.getElementById('quiz-content');
        
        // Berikan kelas aktif pada elemen yang diklik saja
        if (element) {
            // Cari semua tombol dalam container dan hapus status aktifnya (opsional untuk keamanan)
            const allButtons = element.parentElement.querySelectorAll('button');
            allButtons.forEach(btn => btn.classList.remove('border-[#3ED6A8]', 'bg-[#3ED6A8]/5'));
            
            element.classList.add('border-[#3ED6A8]', 'bg-[#3ED6A8]/5');
            // Paksa ikon centang muncul pada yang dipilih
            const checkIcon = element.querySelector('.check-icon');
            if (checkIcon) checkIcon.classList.remove('opacity-0');
        }

        if (step !== 'result') {
            // Beri sedikit delay agar user bisa melihat apa yang mereka pilih
            setTimeout(() => {
                content.classList.add('opacity-0', '-translate-x-8');
                
                setTimeout(() => {
                    updateQuizUI(step);
                    updateProgress(step);
                    content.classList.remove('opacity-0', '-translate-x-8');
                    content.classList.add('opacity-100', 'translate-x-0');
                }, 300);
            }, 200); // Delay 200ms untuk feedback visual
        } else {
            setTimeout(() => {
                triggerLoadingState();
            }, 200);
        }
    }

    function triggerLoadingState() {
        const content = document.getElementById('quiz-content');
        const loading = document.getElementById('loading-state');
        const innerBar = document.getElementById('progress-bar-loading');
        const loadingText = document.getElementById('loading-text');

        // Sembunyikan Konten Pertanyaan
        content.classList.add('hidden');
        
        // Tampilkan Loading dengan Flex agar Center
        loading.classList.remove('hidden');
        loading.classList.add('flex'); // agar justify-center bekerja

        // Jalankan Simulasi
        setTimeout(() => { 
            innerBar.style.width = '35%'; 
            loadingText.innerText = "Scanning database...";
        }, 100);

        setTimeout(() => { 
            innerBar.style.width = '70%'; 
            loadingText.innerText = "Comparing patterns...";
        }, 1500);

        setTimeout(() => { 
            innerBar.style.width = '100%'; 
            loadingText.innerText = "Generating result...";
        }, 2800);

        // Pindah ke Hasil Akhir
        setTimeout(() => {
            loading.classList.replace('flex', 'hidden');
            showResult();
        }, 3800);
    }

    function updateQuizUI(step) {
        const data = checkerData[step];
        let optionsHTML = '';
        
        data.options.forEach(option => {
            const nextTarget = data.next === 'result' ? "'result'" : data.next;
            optionsHTML += `
                <button onclick="selectOption(this, ${nextTarget})" 
                        class="quiz-option w-full py-4 px-6 mb-3 bg-white border border-[#3ED6A8]/10 rounded-xl text-left text-sm font-bold text-[#1F2937]/70 hover:border-[#3ED6A8] hover:bg-[#3ED6A8]/5 hover:text-[#3ED6A8] transition-all flex justify-between items-center shadow-sm">
                    ${option}
                    <div class="check-circle h-5 w-5 rounded-full border border-[#3ED6A8]/20 flex items-center justify-center transition-all">
                        <svg class="check-icon w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </button>
            `;
        });

        document.getElementById('quiz-content').innerHTML = `
            <div class="animate-in fade-in slide-in-from-right-4 duration-500">
                <p class="text-[#1F2937] font-black text-xl mb-6 leading-tight">${data.question}</p>
                <div class="grid grid-cols-1">${optionsHTML}</div>
            </div>
        `;
    }

    function selectOption(element, nextStepTarget) {
        const allOptions = document.querySelectorAll('.quiz-option');
        allOptions.forEach(opt => opt.classList.remove('selected'));

        element.classList.add('selected');
        element.classList.add('scale-[0.98]', 'duration-100');

        setTimeout(() => {
            nextStep(nextStepTarget);
        }, 400); // Delay 0.4 detik
    }

    function updateProgress(step) {
        let percent = 0;
        if (step === 1) percent = 33;
        else if (step === 2) percent = 66;
        else if (step === 3 || step === 'result') percent = 100;

        document.getElementById('progress-bar').style.width = percent + '%';
        document.getElementById('progress-text').innerText = percent + '% Completed';

        // Update Stepper (Identity, Symptoms, Result)
        for (let i = 1; i <= 3; i++) {
            const circle = document.getElementById(`step-${i}-circle`);
            const text = document.getElementById(`step-${i}-text`);
            
            // Logika pewarnaan step
            let isActive = (typeof step === 'number' && step >= i) || (step === 'result');
            let isPast = (typeof step === 'number' && step > i) || (step === 'result');

            if (isActive) {
                circle.classList.add('bg-[#3ED6A8]', 'text-white', 'border-[#3ED6A8]');
                circle.classList.remove('bg-white', 'text-[#1F2937]/30', 'border-[#3ED6A8]/10');
                text.classList.add('text-[#1F2937]');
                text.classList.remove('text-[#1F2937]/30');
            }

            // Update Garis Penghubung
            const line = document.getElementById(`line-progress-${i}`);
            if (line) {
                line.style.width = isPast ? "100%" : "0%";
            }
        }
    }

    function showResult() {
        const quizContent = document.getElementById('quiz-content');
        quizContent.classList.remove('hidden');
        quizContent.innerHTML = `
            <div class="text-center animate-in fade-in zoom-in duration-700">
                <div class="relative w-20 h-20 mx-auto mb-6">
                    <div class="absolute inset-0 bg-[#3ED6A8]/20 rounded-full animate-ping"></div>
                    <div class="relative w-20 h-20 bg-[#3ED6A8]/10 text-[#3ED6A8] rounded-full flex items-center justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>
                <h4 class="text-2xl font-black text-[#1F2937] mb-2">Analysis <span class="text-[#3ED6A8]">Complete</span></h4>
                <p class="text-[#1F2937]/60 mb-8 font-medium leading-relaxed">Based on your answers, we recommend consulting with a general practitioner for further check-up.</p>
                
                <div class="relative group/btn mt-8 max-w-[250px] mx-auto">
                    <div class="absolute inset-0 bg-[#3ED6A8] blur-xl opacity-20 group-hover/btn:opacity-40 transition-opacity duration-500"></div>
                    <button onclick="location.reload()" class="relative w-full overflow-hidden flex items-center justify-center gap-4 py-4 bg-[#3ED6A8] text-white rounded-2xl font-black shadow-xl transition-all duration-500 hover:-translate-y-1 active:scale-95 uppercase tracking-widest text-xs border border-[#3ED6A8]">
                        <span class="absolute inset-0 top-0 left-0 w-full h-full bg-white transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover/btn:translate-y-0 rounded-t-[50%] group-hover/btn:rounded-none"></span>
                        <span class="relative z-10 flex items-center gap-3 group-hover/btn:text-[#1F2937] transition-colors duration-500">
                            Restart Check
                            <svg class="w-4 h-4 transition-transform duration-700 group-hover/btn:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </span>
                    </button>
                </div>
            </div>
        `;
        quizContent.classList.remove('opacity-0');
    }
</script>