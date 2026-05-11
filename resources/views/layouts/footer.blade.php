@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<footer class="relative bg-white border-t border-gray-100 pt-24 pb-12 font-sans overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#3ED6A8]/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-0 w-64 h-64 bg-blue-50/50 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-16 mb-20">
            
            <div class="lg:col-span-5 space-y-8">
                <div>
                    <div class="flex items-center gap-3 mb-6 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-[#3ED6A8] to-[#2fb38b] rounded-2xl flex items-center justify-center transition-transform duration-500">
                            <i data-lucide="heart-pulse" class="text-white w-7 h-7"></i>
                        </div>
                        <span class="text-3xl font-black text-gray-800 tracking-tighter">Heal<span class="text-[#3ED6A8]">Sense</span></span>
                    </div>
                    <p class="text-gray-500 leading-relaxed text-lg max-w-md">
                        Building the future of digital health—inclusive, reliable, and innovative. We are here to support every step of your wellness journey.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4">
                    <button type="button" onclick="toggleModal(true)" class="inline-flex items-center gap-3 px-8 py-4 bg-[#3ED6A8] text-white rounded-2xl font-bold hover:bg-[#32b38b] hover:shadow-2xl hover:shadow-[#3ED6A8]/20 transition-all duration-300 group">
                        <i data-lucide="message-square" class="w-5 h-5 text-white/80"></i>
                        Give Feedback
                    </button>
                </div>
            </div>

            <div class="lg:col-span-3 lg:ml-auto">
                <h4 class="text-gray-800 font-black text-sm uppercase tracking-[0.2em] mb-8">Exploration</h4>
                <ul class="space-y-5">
                    <li><a href="#" class="text-gray-500 hover:text-[#3ED6A8] font-medium transition-all flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-200 group-hover:bg-[#3ED6A8] transition-all"></span>Home</a></li>
                    <li><a href="#featured-articles" class="text-gray-500 hover:text-[#3ED6A8] font-medium transition-all flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-200 group-hover:bg-[#3ED6A8] transition-all"></span>Articles</a></li>
                    <li><a href="#interactive" class="text-gray-500 hover:text-[#3ED6A8] font-medium transition-all flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-200 group-hover:bg-[#3ED6A8] transition-all"></span>Health Tools</a></li>
                    <li><a href="#about" class="text-gray-500 hover:text-[#3ED6A8] font-medium transition-all flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-200 group-hover:bg-[#3ED6A8] transition-all"></span>About Us</a></li>
                </ul>
            </div>

            <div class="lg:col-span-4 lg:ml-auto space-y-8">
                <div>
                    <h4 class="text-gray-800 font-black text-sm uppercase tracking-[0.2em] mb-6">Stay Connected</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-white hover:text-[#E1306C] hover:shadow-xl hover:scale-110 transition-all duration-300 border border-transparent hover:border-gray-100">
                            <ion-icon name="logo-instagram" class="w-6 h-6"></ion-icon>
                        </a>
                        <a href="#" class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-white hover:text-[#000] hover:shadow-xl hover:scale-110 transition-all duration-300 border border-transparent hover:border-gray-100">
                            <ion-icon name="logo-tiktok" class="w-6 h-6"></ion-icon>
                        </a>
                        <a href="#" class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-white hover:text-[#1877F2] hover:shadow-xl hover:scale-110 transition-all duration-300 border border-transparent hover:border-gray-100">
                            <ion-icon name="logo-twitter" class="w-6 h-6"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="p-6 bg-gradient-to-br from-gray-50 to-white rounded-3xl border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Have Questions?</p>
                    <p class="text-gray-800 font-bold">healsense08@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="pt-10 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-8 group/footer">
            
            <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
                <p class="flex items-center text-gray-400 text-sm font-medium tracking-tight">
                    © 2026 
                    <span class="text-gray-700 font-bold ml-1.5">HealSense</span>
                    
                    <span class="hidden md:block w-[1px] h-4 bg-gray-200 mx-4 self-center"></span> 
                    
                    <span class="ml-1 md:ml-0">All rights reserved.</span>
                </p>

                <div class="flex gap-8">
                    <a href="#" class="group/link relative text-gray-400 text-xs font-bold uppercase tracking-[0.15em] transition-colors">
                        <span class="group-hover/link:text-[#3ED6A8] transition-colors">Privacy</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#3ED6A8] transition-all duration-300 group-hover/link:w-full"></span>
                    </a>
                    <a href="#" class="group/link relative text-gray-400 text-xs font-bold uppercase tracking-[0.15em] transition-colors">
                        <span class="group-hover/link:text-[#3ED6A8] transition-colors">Terms</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#3ED6A8] transition-all duration-300 group-hover/link:w-full"></span>
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute inset-0 bg-[#3ED6A8]/10 blur-xl rounded-full scale-110 opacity-0 group-hover/footer:opacity-100 transition-opacity duration-700"></div>
                
                <div class="relative flex items-center gap-3 text-xs font-bold text-gray-500 bg-white border border-[#3ED6A8]/50 px-5 py-2.5 rounded-full shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] group/status">
                    <div class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#3ED6A8] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#3ED6A8]"></span>
                    </div>
                    <span class="uppercase tracking-widest text-[10px]">System Operational</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="feedback-modal" class="fixed inset-0 z-[9999] opacity-0 pointer-events-none transition-all duration-500 ease-in-out flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-slate-800/40 backdrop-blur-md"></div>
    
    <div id="modal-container" class="relative bg-white w-full max-w-md rounded-[2rem] shadow-[0_32px_64px_-15px_rgba(0,0,0,0.15)] overflow-hidden transform scale-95 translate-y-8 transition-all duration-500">
        
        <div class="absolute top-4 right-4 md:top-6 md:right-6 z-30">
            <button 
                onclick="toggleModal(false)" 
                class="group relative h-10 w-10 md:h-12 md:w-12 flex items-center justify-center rounded-full border border-[#3ED6A8] text-[#3ED6A8] overflow-hidden transition-all duration-500 ease-in-out hover:border-transparent active:scale-90 bg-white shadow-sm"
                aria-label="Close Modal"
            >
                <span class="absolute inset-0 bg-[#3ED6A8] translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-[cubic-bezier(0.19,1,0.22,1)]"></span>

                <svg class="w-5 h-5 md:w-6 md:h-6 relative z-10 transition-all duration-500 group-hover:text-white group-hover:rotate-90 group-hover:scale-110" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="p-8">
            <div class="mb-6">
                <span class="inline-block px-3 py-1 bg-[#3ED6A8]/10 text-[#3ED6A8] text-[9px] font-black uppercase tracking-widest rounded-full mb-3">Feedback</span>
                <h3 class="text-2xl font-black text-gray-800 tracking-tight leading-none">Share Experience</h3>
            </div>

            <form id="feedback-form" class="space-y-4">
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100 group transition-all hover:bg-white hover:shadow-md">
                    <div class="relative group w-14 h-14 shrink-0">
                        <div id="image-preview" class="w-full h-full rounded-xl bg-white border-2 border-dashed border-gray-200 flex items-center justify-center overflow-hidden transition-colors group-hover:border-[#3ED6A8]">
                            <i data-lucide="camera" class="w-6 h-6 text-gray-300"></i>
                        </div>
                        <input type="file" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" onchange="handlePreview(this)">
                    </div>
                    <div>
                        <p class="text-xs font-black text-gray-800 uppercase tracking-wider">Photo</p>
                        <p class="text-[10px] text-gray-400">Tap to upload</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-1.5">
                        <label class="text-[9px] font-black text-gray-400 uppercase ml-1 tracking-widest">Name</label>
                        <input type="text" name="name" required placeholder="Full Name" class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-[#3ED6A8]/10 focus:border-[#3ED6A8] outline-none transition-all text-sm font-medium">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-[9px] font-black text-gray-400 uppercase ml-1 tracking-widest">Role</label>
                        <input type="text" name="role" required placeholder="e.g. Doctor" class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-[#3ED6A8]/10 focus:border-[#3ED6A8] outline-none transition-all text-sm font-medium">
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-[9px] font-black text-gray-400 uppercase ml-1 tracking-widest">Rating</label>
                    <select name="rating" class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:bg-white outline-none appearance-none text-sm font-bold text-gray-700 cursor-pointer transition-all focus:ring-4 focus:ring-[#3ED6A8]/10">
                        <option value="5">⭐⭐⭐⭐⭐ — Excellent</option>
                        <option value="4">⭐⭐⭐⭐ — Great</option>
                        <option value="3">⭐⭐⭐ — Good</option>
                        <option value="2">⭐⭐ — Fair</option>
                        <option value="1">⭐ — Poor</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label class="text-[9px] font-black text-gray-400 uppercase ml-1 tracking-widest">Message</label>
                    <textarea name="feedback" rows="3" required placeholder="Your message here..." class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-[#3ED6A8]/10 focus:border-[#3ED6A8] outline-none resize-none transition-all text-sm font-medium"></textarea>
                </div>

                <div class="mt-4">
                    <button type="submit" class="group relative w-full inline-block outline-none">
                        <div class="absolute inset-0 bg-[#3ED6A8] blur-2xl opacity-20 group-hover:opacity-50 transition-opacity duration-500"></div>
                        
                        <div class="relative overflow-hidden flex items-center justify-center gap-4 px-10 py-5 rounded-2xl bg-[#3ED6A8] font-black text-white transition-all duration-500 shadow-2xl uppercase tracking-[0.2em] text-[11px] border border-[#3ED6A8] cursor-pointer">
                            
                            <span class="absolute inset-0 top-0 left-0 w-full h-full bg-white transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover:translate-y-0 rounded-t-[50%] group-hover:rounded-none"></span>

                            <span class="relative z-10 flex items-center gap-4 group-hover:text-gray-800 transition-colors duration-500">
                                Submit Feedback
                                
                                <div class="relative w-5 h-5 overflow-hidden">
                                    <svg class="absolute inset-0 w-5 h-5 transition-all duration-500 group-hover:translate-x-10 group-hover:-translate-y-10 group-hover:opacity-0" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>

                                    <svg class="absolute inset-0 w-5 h-5 transition-all duration-500 -translate-x-10 translate-y-10 opacity-0 group-hover:translate-x-0 group-hover:translate-y-0 group-hover:opacity-100" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                </div>
                            </span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // 1. Inisialisasi ikon saat pertama kali load
    lucide.createIcons();

    const modal = document.getElementById('feedback-modal');
    const container = document.getElementById('modal-container');

    function toggleModal(show) {
        if (show) {
            modal.classList.add('opacity-100', 'pointer-events-auto');
            modal.classList.remove('opacity-0', 'pointer-events-none');
            container.classList.remove('scale-95', 'translate-y-8');
            container.classList.add('scale-100', 'translate-y-0');
            document.body.style.overflow = 'hidden';
        } else {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-100', 'pointer-events-auto');
            container.classList.add('scale-95', 'translate-y-8');
            container.classList.remove('scale-100', 'translate-y-0');
            document.body.style.overflow = '';
        }
    }

    function handlePreview(input) {
        const preview = document.getElementById('image-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover">`;
                preview.classList.add('border-[#3ED6A8]');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.getElementById('feedback-form').onsubmit = function(e) {
        e.preventDefault();
        
        // Tutup modal input segera setelah tombol submit diklik
        toggleModal(false);
        
        setTimeout(() => {
            // Tampilkan loading state
            Swal.fire({
                title: 'Submitting...',
                html: 'Please wait while we process your feedback.',
                allowOutsideClick: false,
                showConfirmButton: false,
                background: '#ffffff',
                customClass: {
                    title: 'font-black text-gray-800',
                    popup: 'rounded-[2rem]'
                },
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Simulasi proses pengiriman selama 2 detik
            setTimeout(() => {
                Swal.fire({
                    title: 'Successfully Sent!',
                    text: 'Thank you for contributing to HealSense!',
                    icon: 'success',
                    iconColor: '#3ED6A8',
                    showConfirmButton: false, // Menghilangkan tombol
                    timer: 2500, // Menutup otomatis dalam 2.5 detik
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    background: '#ffffff',
                    customClass: {
                        title: 'font-black text-gray-800',
                        popup: 'rounded-[2rem]'
                    },
                    didOpen: () => {
                        const progressBar = Swal.getTimerProgressBar();
                        if (progressBar) progressBar.style.backgroundColor = '#3ED6A8';
                    }
                });
                
                // Reset form dan preview gambar setelah sukses
                this.reset();
                const preview = document.getElementById('image-preview');
                preview.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>`;
                preview.classList.remove('border-[#3ED6A8]');
            }, 2000);
        }, 400);
    };
</script>