@vite(['resources/css/app.css', 'resources/js/app.js'])

<section class="py-16 bg-[#F8FAFC] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 mb-10 text-center">
        <h2 class="text-3xl font-bold text-[#1F2937]">What Our Users Say</h2>
        <p class="text-[#3ED6A8] font-medium mt-2">Testimonials</p>
    </div>

    <div class="relative w-full group">
        <!-- Shadow Overlays -->
        <div class="absolute left-0 top-0 bottom-0 w-20 md:w-40 z-10 bg-gradient-to-r from-[#F8FAFC] to-transparent pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-20 md:w-40 z-10 bg-gradient-to-l from-[#F8FAFC] to-transparent pointer-events-none"></div>

        <!-- Carousel Track: HAPUS class 'transition-transform' dan 'duration-700' -->
        <div id="carouselTrack" class="flex w-max cursor-pointer group/track">
            @php
                $testimonials = [
                    ['name' => 'Budi Santoso', 'text' => 'This website helped me understand my symptoms better. Very helpful!', 'role' => 'Patient'],
                    ['name' => 'Siti Aminah', 'text' => 'Simple and very informative. The UI is very clean and easy on the eyes.', 'role' => 'Student'],
                    ['name' => 'dr. Andi', 'text' => 'The accuracy of the information provided is quite good for first aid purposes.', 'role' => 'Practitioner'],
                    ['name' => 'Rina Rose', 'text' => 'The symptom checking process is very fast and the results are logical.', 'role' => 'Homemaker'],
                    ['name' => 'Eko Prasetyo', 'text' => 'Modern design, the fresh green color makes the eyes feel relaxed.', 'role' => 'Private Employee'],
                ];
                // Double atau Triple data untuk memastikan tidak ada ruang kosong saat speed tinggi
                $carouselData = array_merge($testimonials, $testimonials, $testimonials);
            @endphp

            @foreach($carouselData as $t)
                <div class="w-[300px] md:w-[450px] px-4 py-8 flex-shrink-0">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 h-full flex flex-col justify-between 
                                transition-all duration-300 ease-out
                                hover:scale-105 hover:shadow-xl hover:border-[#3ED6A8] 
                                group-hover/track:opacity-60 hover:!opacity-100">
                        <div>
                            <div class="flex text-[#3ED6A8] mb-4 text-xl">★★★★★</div>
                            <p class="text-[#1F2937] italic leading-relaxed">"{{ $t['text'] }}"</p>
                        </div>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="w-10 h-10 bg-[#3ED6A8] rounded-full flex items-center justify-center text-white font-bold">
                                {{ substr($t['name'], 0, 1) }}
                            </div>
                            <div>
                                <h4 class="font-bold text-[#1F2937] text-sm">{{ $t['name'] }}</h4>
                                <p class="text-xs text-gray-400">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.getElementById('carouselTrack');
        let scrollAmount = 0;
        let isPaused = false;

        // Speed 1.5 - 2 sudah cukup cepat untuk efek 'seamless'
        const speed = 1.5; 

        function stepAnimation() {
            if (!isPaused) {
                scrollAmount += speed;
                
                // Hitung batas reset: Karena kita merge 3x, reset saat mencapai 1/3 dari total lebar
                const maxScroll = track.scrollWidth / 3;
                
                if (scrollAmount >= maxScroll) {
                    scrollAmount = 0;
                }
                
                // Gunakan transform tanpa transisi CSS untuk pergerakan linear murni
                track.style.transform = `translateX(-${scrollAmount}px)`;
            }
            requestAnimationFrame(stepAnimation);
        }

        requestAnimationFrame(stepAnimation);

        track.addEventListener('mouseenter', () => isPaused = true);
        track.addEventListener('mouseleave', () => isPaused = false);
    });
</script>