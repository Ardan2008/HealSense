@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://unpkg.com/lucide@latest"></script>

<section id="about" class="bg-[#F8FAFC] py-16 md:py-24 px-6 lg:px-12 text-[#1F2937]">
    <div class="max-w-6xl mx-auto">
        
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="text-[#3ED6A8] font-bold text-sm uppercase tracking-widest mb-3 italic">About HealSense</h2>
                <h1 class="text-3xl md:text-4xl font-extrabold mb-6 leading-tight">
                    Your Trusted Partner for <br> Digital Health.
                </h1>
                <p class="text-lg leading-relaxed text-gray-600">
                    HealSense serves as a bridge to accurate and easily accessible medical information. We believe that everyone deserves high-quality health guidance without the confusion.
                </p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#3ED6A8]">
                <h3 class="text-xl font-bold mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To empower individuals with data-driven health knowledge, support proactive self-detection, and facilitate a healthy lifestyle through inclusive technology.
                </p>
            </div>
        </div>

        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold">Why Choose Us?</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl text-center border border-gray-100">
                <div class="w-14 h-14 bg-[#3ED6A8]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="shield-check" class="text-[#3ED6A8] w-7 h-7"></i>
                </div>
                <h4 class="font-bold text-xl mb-3">Trusted Information</h4>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Every piece of information we present is validated by credible medical sources to ensure accuracy.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl text-center border border-gray-100">
                <div class="w-14 h-14 bg-[#3ED6A8]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="book-open" class="text-[#3ED6A8] w-7 h-7"></i>
                </div>
                <h4 class="font-bold text-xl mb-3">Easy to Understand</h4>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Simplifying complex medical terms into practical, actionable guidance that anyone can understand.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl text-center border border-gray-100">
                <div class="w-14 h-14 bg-[#3ED6A8]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="smartphone" class="text-[#3ED6A8] w-7 h-7"></i>
                </div>
                <h4 class="font-bold text-xl mb-3">Accessible for Everyone</h4>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Our services are designed to be inclusive, accessible anytime and anywhere across all your devices.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    // Inisialisasi ikon
    lucide.createIcons();
</script>