@vite(['resources/css/app.css', 'resources/js/app.js'])

<section class="py-24 relative overflow-hidden">
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

                <a href="#" class="group relative inline-block">
                    <div class="absolute inset-0 bg-[#3ED6A8] blur-xl opacity-20 group-hover:opacity-40 transition-opacity"></div>
                    <button class="relative flex items-center justify-center gap-4 px-10 py-5 rounded-2xl bg-[#1F2937] font-black text-white hover:bg-[#3ED6A8] hover:text-[#1F2937] transition-all duration-500 transform hover:-translate-y-1 shadow-2xl uppercase tracking-widest text-xs">
                        Start Checking
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
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
                            <span id="step-1-text" class="absolute -bottom-7 text-[10px] font-black text-[#1F2937] uppercase tracking-tighter">Identity</span>
                        </div>

                        <div class="flex-grow mx-4 h-[2px] bg-slate-100 relative">
                            <div id="line-progress-1" class="absolute top-0 left-0 h-full bg-[#3ED6A8] transition-all duration-500" style="width: 0%;"></div>
                        </div>

                        <div class="relative z-10 flex flex-col items-center">
                            <div id="step-2-circle" class="h-12 w-12 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-black transition-all duration-500">
                                2
                            </div>
                            <span id="step-2-text" class="absolute -bottom-7 text-[10px] font-black text-slate-400 uppercase tracking-tighter">Symptoms</span>
                        </div>

                        <div class="flex-grow mx-4 h-[2px] bg-slate-100 relative">
                            <div id="line-progress-2" class="absolute top-0 left-0 h-full bg-[#3ED6A8] transition-all duration-500" style="width: 0%;"></div>
                        </div>

                        <div class="relative z-10 flex flex-col items-center">
                            <div id="step-3-circle" class="h-12 w-12 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-black transition-all duration-500">
                                3
                            </div>
                            <span id="step-3-text" class="absolute -bottom-7 text-[10px] font-black text-slate-400 uppercase tracking-tighter">Result</span>
                        </div>
                    </div>

                    <div id="question-container" class="bg-[#F8FAFC] rounded-2xl p-6 border border-slate-100 min-h-[300px] flex flex-col justify-center">
                        <div id="quiz-content" class="transition-all duration-300">
                            <p class="text-[#1F2937] font-extrabold text-xl mb-6 text-center">Ready to check your health?</p>
                            <button onclick="nextStep(1)" class="w-full py-4 bg-[#3ED6A8] text-white rounded-xl font-bold shadow-lg">Start Now</button>
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
    // Data Pertanyaan
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

    function nextStep(step) {
        const content = document.getElementById('quiz-content');
        
        // Animasi keluar
        content.style.opacity = '0';
        content.style.transform = 'translateY(10px)';

        setTimeout(() => {
            currentStep = step;
            
            if (step === 'result') {
                showResult();
            } else {
                updateQuizUI(step);
            }

            // Update Progress Bar & Circles
            updateProgress(step);

            // Animasi masuk
            content.style.opacity = '1';
            content.style.transform = 'translateY(0)';
        }, 300);
    }

    function updateQuizUI(step) {
        const data = checkerData[step];
        let optionsHTML = '';
        
        data.options.forEach(option => {
            optionsHTML += `
                <button onclick="nextStep(${data.next === 'result' ? "'result'" : data.next})" 
                        class="w-full py-4 px-6 mb-3 bg-white border border-slate-200 rounded-xl text-left text-sm font-bold text-slate-600 hover:border-[#3ED6A8] hover:bg-[#3ED6A8]/5 hover:text-[#3ED6A8] transition-all group flex justify-between items-center">
                    ${option}
                    <div class="h-5 w-5 rounded-full border border-slate-200 group-hover:bg-[#3ED6A8] group-hover:border-[#3ED6A8] flex items-center justify-center transition-all">
                        <svg class="w-3 h-3 text-white opacity-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"/></svg>
                    </div>
                </button>
            `;
        });

        document.getElementById('quiz-content').innerHTML = `
            <p class="text-[#1F2937] font-extrabold text-xl mb-6">${data.question}</p>
            <div class="grid grid-cols-1">${optionsHTML}</div>
        `;
    }

    function updateProgress(step) {
        let percent = 0;
        if (step === 1) percent = 33;
        else if (step === 2) percent = 66;
        else if (step === 3 || step === 'result') percent = 100;

        document.getElementById('progress-bar').style.width = percent + '%';
        document.getElementById('progress-text').innerText = percent + '% Completed';

        // Update Lingkaran, Teks, dan Garis
        for (let i = 1; i <= 3; i++) {
            const circle = document.getElementById(`step-${i}-circle`);
            const text = document.getElementById(`step-${i}-text`);
            const line = document.getElementById(`line-progress-${i}`);

            // Aktifkan lingkaran dan teks jika step saat ini >= i
            if (typeof step === 'number' && step >= i || step === 'result') {
                circle.classList.add('bg-[#3ED6A8]', 'text-white', 'border-[#3ED6A8]');
                circle.classList.remove('bg-white', 'text-slate-400', 'border-slate-200');
                text.classList.add('text-[#1F2937]');
                text.classList.remove('text-slate-400');
            }

            // Garis i akan penuh jika kita sudah berada di step i+1
            if (line) {
                if ((typeof step === 'number' && step > i) || step === 'result') {
                    line.style.width = "100%";
                } else {
                    line.style.width = "0%";
                }
            }
        }
    }

    function showResult() {
        document.getElementById('quiz-content').innerHTML = `
            <div class="text-center">
                <div class="w-20 h-20 bg-[#3ED6A8]/10 text-[#3ED6A8] rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="text-2xl font-black text-slate-900 mb-2">Analysis Complete</h4>
                <p class="text-slate-500 mb-8 font-medium">Based on your answers, we recommend consulting with a general practitioner for further check-up.</p>
                <button onclick="location.reload()" class="px-8 py-3 bg-slate-900 text-white rounded-xl font-bold hover:bg-[#3ED6A8] transition-colors">Restart Check</button>
            </div>
        `;
    }
</script>