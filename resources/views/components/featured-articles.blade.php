@vite(['resources/css/app.css', 'resources/js/app.js'])

@php
    $articles = [
        [
            'title' => 'How to Boost Your Immune System Naturally',
            'desc' => "Discover the best superfoods and daily habits to keep your body's defenses strong all year round.",
            'category' => 'Nutrition',
            'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&q=80&w=800',
            'content' => 'Nutrisi yang tepat adalah kunci utama pertahanan tubuh. Mengonsumsi vitamin C, tidur yang cukup, dan mengelola stres dapat membantu sistem imun bekerja optimal.',
            'is_featured' => true,
        ],
        [
            'title' => 'Understanding Anxiety in Teenagers',
            'desc' => 'Learn how to identify signs of stress and anxiety in young adults and how to provide the right support.',
            'category' => 'Mental Health',
            'image' => 'https://images.unsplash.com/photo-1518310383802-640c2de311b2?auto=format&fit=crop&q=80&w=800',
            'content' => 'Kesehatan mental pada remaja sangat krusial. Kecemasan seringkali muncul akibat tekanan sosial maupun akademis. Pendampingan orang tua sangat diperlukan.',
            'is_featured' => false,
        ],
        [
            'title' => 'Healthy Sleep Habits You Need',
            'desc' => 'Quality sleep is the foundation of health. Here are 5 tips to improve your circadian rhythm.',
            'category' => 'Fitness',
            'image' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&q=80&w=800',
            'content' => 'Tidur berkualitas membantu pemulihan otot dan fungsi otak. Hindari layar gadget 1 jam sebelum tidur untuk menjaga ritme sirkadian tubuh.',
            'is_featured' => false,
        ],
    ];

    // Mockup data untuk Catalog (Menggandakan data agar terlihat penuh)
    $fullCatalog = array_merge($articles, $articles, $articles); 
@endphp

<style>
    /* Grid Pattern Modern */
    .bg-grid-pattern {
        background-image: 
            linear-gradient(to right, rgba(31, 41, 55, 0.07) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(31, 41, 55, 0.07) 1px, transparent 1px);
        background-size: 60px 60px;
    }

    /* Masking agar grid memudar ke pinggir */
    .mask-radial {
        mask-image: radial-gradient(circle at center, black, transparent 90%);
        -webkit-mask-image: radial-gradient(circle at center, black, transparent 90%);
    }

    /* Scrollbar Styling */
    .custom-scroll::-webkit-scrollbar { width: 4px; }
    .custom-scroll::-webkit-scrollbar-track { background: transparent; }
    .custom-scroll::-webkit-scrollbar-thumb { 
        background: #e2e8f0; 
        border-radius: 20px; 
    }
    .custom-scroll::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }

    /* Line Clamp untuk menjaga kerapihan text */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<section class="py-24 bg-white relative overflow-hidden">
    
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#3ED6A8]/10 rounded-full blur-[120px]"></div>

    <div class="container mx-auto max-w-7xl px-6 lg:px-12 relative z-10">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 gap-8">
            <div class="max-w-3xl relative">
                <h3 class="text-6xl md:text-8xl font-black text-slate-900 tracking-tighter leading-[0.9] mb-4">
                    Featured <br>
                    <span class="relative inline-block text-transparent bg-clip-text bg-gradient-to-r from-slate-900 via-slate-500 to-slate-400 font-serif italic font-light tracking-normal pr-4">
                        Articles
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-[#3ED6A8]/40" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0 5 Q 25 0, 50 5 T 100 5" stroke="currentColor" stroke-width="4" fill="transparent" stroke-linecap="round"/>
                        </svg>
                    </span>
                </h3>
                
                <p class="mt-8 text-slate-500 text-lg md:text-xl leading-relaxed max-w-xl font-medium tracking-tight">
                    Dive into our curated collection of expert insights and medical breakthroughs, 
                    designed to empower your journey towards a <span class="text-slate-900 font-bold">healthier lifestyle.</span>
                </p>
                <div class="mt-6 h-1.5 w-16 bg-[#3ED6A8] rounded-full"></div>
            </div>
            
            <div onclick="toggleCatalog(true)" class="group cursor-pointer flex items-center gap-5 bg-white p-2 pr-8 rounded-full border border-slate-200 hover:border-[#3ED6A8] transition-all duration-500">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#3ED6A8] text-white transition-all duration-500">
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </div>
                <span class="text-xs font-black text-slate-900 uppercase tracking-[0.2em]">View All Library</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($articles as $article)
            <div class="group cursor-pointer" onclick="openArticleModal(this)" data-article="{{ json_encode($article) }}">
                <div class="relative bg-white rounded-[2.5rem] p-4 shadow-xl shadow-slate-200/40 transition-all duration-500 hover:-translate-y-4 border border-slate-100 group-hover:border-[#3ED6A8]/30">
                    <div class="relative h-72 overflow-hidden rounded-[2rem] mb-6">
                        <img src="{{ $article['image'] }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/95 backdrop-blur px-4 py-1.5 rounded-full text-[10px] font-black uppercase text-slate-900 shadow-sm border border-slate-100">
                                {{ $article['category'] }}
                            </span>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-2xl font-extrabold text-slate-900 mb-3 group-hover:text-[#3ED6A8] transition-colors line-clamp-2">
                            {{ $article['title'] }}
                        </h4>
                        <p class="text-slate-500 text-sm font-medium leading-relaxed line-clamp-2">{{ $article['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div id="catalogModal" class="fixed inset-0 z-[110] hidden bg-slate-50/98 backdrop-blur-xl transition-opacity duration-500 opacity-0 overflow-hidden font-sans">
    <div class="absolute inset-0 bg-grid-pattern opacity-40"></div>
    
    <div class="relative h-full w-full flex flex-col">
        <div class="w-full bg-white/60 border-b border-slate-200/60 sticky top-0 z-20">
            <div class="container mx-auto max-w-7xl px-6 py-6 flex items-center justify-between">
                <div class="flex items-center gap-8">
                    <h2 class="text-slate-900 text-3xl font-extrabold tracking-tight">Insights<span class="text-[#3ED6A8]">.</span></h2>
                    <div class="hidden md:flex flex-col border-l border-slate-200 pl-8">
                        <span class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.3em]">Full Repository</span>
                        <p class="text-slate-500 text-xs font-medium italic">Medical & Health Wisdom</p>
                    </div>
                </div>
                <button onclick="toggleCatalog(false)" 
                    class="group relative h-12 w-12 flex items-center justify-center rounded-full border border-[#3ED6A8] text-[#3ED6A8] overflow-hidden transition-colors duration-500 ease-in-out hover:border-transparent">
                    
                    <span class="absolute inset-0 bg-[#3ED6A8] translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(0.19,1,0.22,1)]"></span>
                    
                    <svg class="w-5 h-5 relative z-10 transition-all duration-500 group-hover:text-white group-hover:rotate-90 group-hover:scale-125" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex-grow overflow-y-auto px-6 py-12 custom-scroll">
            <div class="container mx-auto max-w-7xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach($fullCatalog as $item)
                    <div class="group bg-white p-4 rounded-[2rem] border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer" 
                         onclick="toggleCatalog(false); setTimeout(() => openArticleDetail({{ json_encode($item) }}), 400)">
                        <div class="relative aspect-square rounded-2xl overflow-hidden mb-5">
                            <img src="{{ $item['image'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-black/5"></div>
                        </div>
                        <span class="text-[9px] font-black text-[#3ED6A8] uppercase tracking-widest mb-2 block">{{ $item['category'] }}</span>
                        <h5 class="text-slate-900 text-base font-bold leading-tight group-hover:text-[#3ED6A8] transition-colors">{{ $item['title'] }}</h5>
                        <div class="flex items-center gap-2 pt-4 opacity-40 group-hover:opacity-100 transition-opacity">
                            <span class="text-[9px] font-bold uppercase">Read Story</span>
                            <div class="h-[1px] w-4 bg-slate-400 group-hover:bg-[#3ED6A8] group-hover:w-8 transition-all"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div id="articleModal" class="fixed inset-0 z-[130] hidden items-center justify-center p-4 md:p-8 bg-slate-950/80 backdrop-blur-2xl transition-all duration-500 opacity-0">
    <div class="bg-white w-full max-w-6xl max-h-[90vh] overflow-hidden rounded-[3.5rem] shadow-2xl relative flex flex-col md:flex-row transform scale-95 transition-transform duration-500">
        <div class="w-full md:w-[45%] h-64 md:h-auto relative overflow-hidden">
            <img id="modalImage" src="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>
        </div>
        <div class="w-full md:w-[55%] p-10 md:p-16 overflow-y-auto bg-white flex flex-col custom-scroll">
            <button onclick="closeArticleModal()" class="absolute top-10 right-10 text-slate-400 hover:text-slate-900 transition-all z-20">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="flex-grow">
                <span id="modalCategory" class="inline-block px-5 py-2 bg-[#3ED6A8]/10 text-[#3ED6A8] rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-8"></span>
                <h2 id="modalTitle" class="text-4xl md:text-5xl font-black text-slate-900 leading-[1.1] mb-8 tracking-tighter"></h2>
                <p id="modalDesc" class="text-xl text-slate-500 font-semibold leading-relaxed mb-8 border-l-4 border-[#3ED6A8] pl-6"></p>
                <div id="modalContent" class="text-slate-600 leading-loose text-lg space-y-6 opacity-90"></div>
            </div>
            <button onclick="closeArticleModal()" class="mt-12 w-full py-5 bg-slate-900 text-white font-black rounded-2xl hover:bg-[#3ED6A8] hover:text-slate-950 transition-all uppercase tracking-widest text-xs">
                Back to Archive
            </button>
        </div>
    </div>
</div>

<script>
    function toggleCatalog(show) {
        const catalog = document.getElementById('catalogModal');
        if (show) {
            catalog.classList.remove('hidden');
            setTimeout(() => catalog.classList.add('opacity-100'), 10);
            document.body.style.overflow = 'hidden';
        } else {
            catalog.classList.remove('opacity-100');
            setTimeout(() => {
                catalog.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 500);
        }
    }

    function openArticleModal(element) {
        const data = JSON.parse(element.getAttribute('data-article'));
        openArticleDetail(data);
    }

    function openArticleDetail(data) {
        document.getElementById('modalImage').src = data.image;
        document.getElementById('modalTitle').innerText = data.title;
        document.getElementById('modalCategory').innerText = data.category;
        document.getElementById('modalDesc').innerText = data.desc;
        document.getElementById('modalContent').innerHTML = data.content; // Gunakan innerHTML jika konten mengandung tag

        const modal = document.getElementById('articleModal');
        const modalBox = modal.querySelector('.transform');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        setTimeout(() => {
            modal.classList.add('opacity-100');
            modalBox.classList.remove('scale-95');
            modalBox.classList.add('scale-100');
        }, 50);
        document.body.style.overflow = 'hidden';
    }

    function closeArticleModal() {
        const modal = document.getElementById('articleModal');
        const modalBox = modal.querySelector('.transform');
        modal.classList.remove('opacity-100');
        modalBox.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            if(document.getElementById('catalogModal').classList.contains('hidden')) {
                document.body.style.overflow = 'auto';
            }
        }, 500);
    }

    window.onclick = function(event) {
        const modal = document.getElementById('articleModal');
        if (event.target == modal) closeArticleModal();
    }
</script>