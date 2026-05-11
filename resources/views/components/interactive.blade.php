@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    :root {
        --fresh-green: #3ED6A8;
        --off-white: #F8FAFC;
        --dark-gray: #1F2937;
    }
    .bg-fresh-green { background-color: var(--fresh-green); }
    .text-fresh-green { color: var(--fresh-green); }
    .border-fresh-green { border-color: var(--fresh-green); }
    .bg-off-white { background-color: var(--off-white); }
    .text-dark-gray { color: var(--dark-gray); }
</style>

<section id="interactive" class="relative overflow-hidden bg-off-white py-20 px-6 text-dark-gray font-sans">
    
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#3ED6A8] opacity-[0.07] rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 -right-24 w-72 h-72 bg-blue-400 opacity-[0.05] rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 left-1/3 w-64 h-64 bg-indigo-400 opacity-[0.05] rounded-full blur-3xl"></div>

    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <span class="bg-[#3ED6A8]/10 text-fresh-green text-[10px] font-bold uppercase tracking-[0.2em] px-4 py-2 rounded-full border border-[#3ED6A8]/20">
                Optimization Toolkit
            </span>
            <h2 class="text-4xl font-black mt-6 italic tracking-tight">
                Interactive <span class="text-fresh-green underline decoration-4 underline-offset-8">Health Tools</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 text-dark-gray">
            
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-[#3ED6A8]/10 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-6 h-6 text-fresh-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">BMI Calculator</h3>
                <div class="space-y-4">
                    <input type="number" id="weight" oninput="calculateBMI()" placeholder="Weight (kg)" class="w-full p-4 bg-white border border-gray-100 rounded-2xl focus:ring-2 focus:ring-[#3ED6A8] outline-none transition-all shadow-inner">
                    <input type="number" id="height" oninput="calculateBMI()" placeholder="Height (cm)" class="w-full p-4 bg-white border border-gray-100 rounded-2xl focus:ring-2 focus:ring-[#3ED6A8] outline-none transition-all shadow-inner">
                    
                    <div id="bmi-result" class="mt-4 p-5 rounded-3xl bg-[#F8FAFC] hidden border-l-4 border-fresh-green shadow-sm">
                        <p class="text-[10px] uppercase tracking-wider font-black opacity-40">BMI Score</p>
                        <p class="text-4xl font-black text-fresh-green" id="bmi-value">0</p>
                        <div id="bmi-status" class="mt-2"></div>
                    </div>
                </div>
            </div>

            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Hydration</h3>
                <div class="space-y-4">
                    <input type="number" id="water-weight" oninput="calculateWater()" placeholder="Weight (kg)" class="w-full p-4 bg-white border border-gray-100 rounded-2xl focus:ring-2 focus:ring-[#3ED6A8] outline-none transition-all shadow-inner">
                    
                    <div id="water-result" class="mt-4 p-5 rounded-3xl bg-[#F8FAFC] hidden text-center border-t-2 border-dashed border-gray-200 shadow-sm">
                        <p class="text-xs font-black opacity-40 uppercase mb-2">Daily Goal</p>
                        <div class="flex items-baseline justify-center gap-1">
                            <span id="water-value" class="text-4xl font-black text-fresh-green">0</span>
                            <span class="text-gray-400 font-bold">Liters</span>
                        </div>
                        <p class="text-[11px] mt-3 text-gray-400 leading-relaxed px-2">Drink water regularly every 2 hours; don't wait until you're thirsty.</p>
                    </div>
                </div>
            </div>

            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-indigo-50 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Sleep Debt</h3>
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="text-[10px] uppercase font-black text-gray-400 ml-1 mb-1 block">Sleep At</label>
                            <input type="time" id="sleep-time" oninput="calculateSleep()" class="w-full p-3 bg-white border border-gray-100 rounded-xl focus:ring-2 focus:ring-[#3ED6A8] outline-none shadow-inner">
                        </div>
                        <div>
                            <label class="text-[10px] uppercase font-black text-gray-400 ml-1 mb-1 block">Wake Up</label>
                            <input type="time" id="wake-time" oninput="calculateSleep()" class="w-full p-3 bg-white border border-gray-100 rounded-xl focus:ring-2 focus:ring-[#3ED6A8] outline-none shadow-inner">
                        </div>
                    </div>
                    
                    <div id="sleep-result" class="mt-4 p-5 rounded-3xl bg-[#F8FAFC] hidden border-b-4 border-indigo-200 shadow-sm">
                        <p id="sleep-value" class="text-sm font-black text-dark-gray"></p>
                        <div id="sleep-advice"></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleResult(id, show) {
        const el = document.getElementById(id);
        if (show) { el.classList.remove('hidden'); } 
        else { el.classList.add('hidden'); }
    }

    window.calculateBMI = function() {
        const w = document.getElementById('weight').value;
        const h = document.getElementById('height').value / 100;
        
        if (w > 0 && h > 0) {
            const bmi = (w / (h * h)).toFixed(1);
            document.getElementById('bmi-value').innerText = bmi;
            
            let status = "";
            let dotColor = "";
            let advice = "";

            if (bmi < 18.5) { 
                status = "Underweight"; 
                dotColor = "bg-amber-400";
                advice = "Increase protein-rich calories and try weight training.";
            } else if (bmi < 25) { 
                status = "Ideal"; 
                dotColor = "bg-[#3ED6A8]";
                advice = "Maintain a balanced diet and regular exercise.";
            } else { 
                status = "Overweight"; 
                dotColor = "bg-red-400";
                advice = "Reduce daily sugar intake and increase cardio activity.";
            }
            
            const statusEl = document.getElementById('bmi-status');
            statusEl.innerHTML = `
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full ${dotColor}"></span>
                    <span class="text-sm font-black text-dark-gray uppercase tracking-tight">${status}</span>
                </div>
                <p class="mt-3 text-[11px] text-gray-500 leading-relaxed italic">${advice}</p>`;
            toggleResult('bmi-result', true);
        } else {
            toggleResult('bmi-result', false);
        }
    }

    window.calculateWater = function() {
        const weight = document.getElementById('water-weight').value;
        if (weight > 0) {
            const liters = (weight * 0.033).toFixed(1);
            document.getElementById('water-value').innerText = liters;
            toggleResult('water-result', true);
        } else {
            toggleResult('water-result', false);
        }
    }

    window.calculateSleep = function() {
        const sleep = document.getElementById('sleep-time').value;
        const wake = document.getElementById('wake-time').value;

        if (sleep && wake) {
            let start = new Date(`2024-01-01T${sleep}:00`);
            let end = new Date(`2024-01-01T${wake}:00`);
            if (end < start) end.setDate(end.getDate() + 1);

            const diff = (end - start) / (1000 * 60 * 60);
            const hours = Math.floor(diff);
            const minutes = Math.round((diff - hours) * 60);

            document.getElementById('sleep-value').innerText = `Duration: ${hours}h ${minutes}m`;
            
            let adviceHTML = "";
            
            if (hours < 7) {
                adviceHTML = `
                    <div class="mt-3 flex items-start gap-3 p-3 bg-red-50 rounded-2xl text-red-700">
                        <span class="w-2 h-2 mt-1.5 rounded-full bg-red-500 animate-pulse flex-shrink-0"></span>
                        <p class="text-[11px] leading-relaxed"><b>Sleep Debt:</b> Try to sleep 15 minutes earlier tonight and avoid caffeine.</p>
                    </div>`;
            } else if (hours <= 9) {
                adviceHTML = `
                    <div class="mt-3 flex items-start gap-3 p-3 bg-emerald-50 rounded-2xl text-emerald-700">
                        <span class="w-2 h-2 mt-1.5 rounded-full bg-[#3ED6A8] flex-shrink-0"></span>
                        <p class="text-[11px] leading-relaxed"><b>Perfect:</b> Your body has enough regeneration time. Keep it up!</p>
                    </div>`;
            } else {
                adviceHTML = `
                    <div class="mt-3 flex items-start gap-3 p-3 bg-amber-50 rounded-2xl text-amber-700">
                        <span class="w-2 h-2 mt-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>
                        <p class="text-[11px] leading-relaxed"><b>Oversleep:</b> Sleeping too long can trigger lethargy. Check your air quality.</p>
                    </div>`;
            }
            
            document.getElementById('sleep-advice').innerHTML = adviceHTML;
            toggleResult('sleep-result', true);
        } else {
            toggleResult('sleep-result', false);
        }
    }
</script>