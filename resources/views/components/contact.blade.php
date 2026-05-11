@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section id="contact" class="bg-[#F8FAFC] py-20 font-sans">
    <div class="max-w-3xl mx-auto px-6">
        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100">
            <div class="mb-10 text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-3">Get in Touch</h2>
                <p class="text-gray-500 text-lg">Have health-related questions? Our team is here to help you.</p>
            </div>

            <form id="contact-form" class="space-y-6" novalidate>
                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                    <div class="relative group/input">
                        <i data-lucide="user-circle" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 transition-colors peer-focus:text-[#3ED6A8]"></i>
                        
                        <span class="absolute left-11 top-1/2 -translate-y-1/2 h-6 w-[1px] bg-gray-200 transition-colors peer-focus:bg-[#3ED6A8]/40"></span>
                        
                        <input type="text" name="username" id="username" placeholder="johndoe123" 
                            required minlength="4" pattern="^[a-zA-Z0-9_]+$"
                            class="peer w-full pl-14 pr-5 py-4 rounded-xl border border-gray-200 outline-none bg-gray-50/50 transition-all 
                            focus:bg-white focus:ring-4 focus:ring-[#3ED6A8]/10 focus:border-[#3ED6A8] 
                            invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500">
                    </div>
                    <p class="mt-2 hidden text-[10px] uppercase tracking-widest font-bold text-red-500 peer-invalid:peer-[:not(:placeholder-shown):not(:focus)]:block animate-pulse">
                        ⚠️ Alphanumeric & underscores only (min. 4 chars)
                    </p>
                </div>

                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <div class="relative group/input">
                        <i data-lucide="mail" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 transition-colors peer-focus:text-[#3ED6A8]"></i>
                        
                        <span class="absolute left-11 top-1/2 -translate-y-1/2 h-6 w-[1px] bg-gray-200 transition-colors peer-focus:bg-[#3ED6A8]/40"></span>
                        
                        <input type="email" name="email" id="email" placeholder="name@email.com" 
                            required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            class="peer w-full pl-14 pr-5 py-4 rounded-xl border border-gray-200 outline-none bg-gray-50/50 transition-all 
                            focus:bg-white focus:ring-4 focus:ring-[#3ED6A8]/10 focus:border-[#3ED6A8] 
                            invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500">
                    </div>
                    <p class="mt-2 hidden text-[10px] uppercase tracking-widest font-bold text-red-500 peer-invalid:peer-[:not(:placeholder-shown):not(:focus)]:block animate-pulse">
                        ⚠️ Please enter a valid email address
                    </p>
                </div>

                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                    <textarea name="message" id="message" rows="5" placeholder="How can we help you?" required minlength="10"
                        class="peer w-full px-5 py-4 rounded-xl border border-gray-200 outline-none bg-gray-50/50 transition-all resize-none 
                        focus:bg-white focus:ring-4 focus:ring-[#3ED6A8]/10 focus:border-[#3ED6A8] 
                        invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500"></textarea>
                    <p class="mt-2 hidden text-[10px] uppercase tracking-widest font-bold text-red-500 peer-invalid:peer-[:not(:placeholder-shown):not(:focus)]:block animate-pulse">
                        ⚠️ Message must be at least 10 characters
                    </p>
                </div>

                <div class="relative w-full pt-4">
                    <button type="submit" id="contact-submit" 
                        class="group relative w-full overflow-hidden flex items-center justify-center gap-4 px-10 py-5 rounded-2xl bg-[#3ED6A8] font-black text-white transition-all duration-500 shadow-xl hover:shadow-[#3ED6A8]/40 uppercase tracking-[0.2em] text-xs border border-[#3ED6A8]">
                        
                        <div class="absolute inset-0 bg-white/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                        <span class="absolute inset-0 top-0 left-0 w-full h-full bg-white transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-y-full group-hover:translate-y-0 rounded-t-[50%] group-hover:rounded-none"></span>

                        <span class="relative z-10 flex items-center gap-4 group-hover:text-gray-800 transition-colors duration-500">
                            Send Message
                            <div class="relative w-5 h-5 overflow-hidden">
                                <i data-lucide="send" class="absolute inset-0 w-5 h-5 transition-all duration-500 group-hover:translate-x-10 group-hover:-translate-y-10 group-hover:opacity-0"></i>
                                <i data-lucide="send" class="absolute inset-0 w-5 h-5 transition-all duration-500 -translate-x-10 translate-y-10 opacity-0 group-hover:translate-x-0 group-hover:translate-y-0 group-hover:opacity-100"></i>
                            </div>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initial rendering
        lucide.createIcons();

        const contactForm = document.getElementById('contact-form');

        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();

                // Bersihkan whitespace untuk validasi yang akurat
                const usernameInput = document.getElementById('username');
                const emailInput = document.getElementById('email');
                const messageInput = document.getElementById('message');

                const usernameVal = usernameInput.value.trim();
                const emailVal = emailInput.value.trim();
                const messageVal = messageInput.value.trim();

                const isUsernameValid = /^[a-zA-Z0-9_]+$/.test(usernameVal) && usernameVal.length >= 4;
                const isEmailValid = emailInput.checkValidity();
                const isMessageValid = messageVal.length >= 10;

                if (!isUsernameValid || !isEmailValid || !isMessageValid) {
                    Swal.fire({
                        title: 'Oops!',
                        text: 'Please fix the errors in the form before sending.',
                        icon: 'error',
                        confirmButtonColor: '#3ED6A8',
                        customClass: { confirmButton: 'rounded-xl font-bold px-8 py-3' }
                    });
                    
                    // Trigger state 'was-validated' untuk memunculkan border merah jika diperlukan
                    contactForm.classList.add('was-validated');
                    return;
                }

                // Confirmation
                Swal.fire({
                    title: 'Send Message?',
                    text: `Confirming as ${usernameVal}, are you ready?`,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3ED6A8',
                    cancelButtonColor: '#EF4444',
                    confirmButtonText: 'YES, SEND!',
                    cancelButtonText: 'CANCEL',
                    customClass: {
                        confirmButton: 'rounded-xl font-black uppercase tracking-widest text-xs px-8 py-4',
                        cancelButton: 'rounded-xl font-black uppercase tracking-widest text-xs px-8 py-4'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Loading
                        Swal.fire({
                            title: 'Loading...',
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            didOpen: () => { Swal.showLoading(); },
                            timer: 1800,
                            timerProgressBar: true
                        }).then(() => {
                            // Success (Auto Close)
                            Swal.fire({
                                title: 'Success!',
                                text: 'Your message has been delivered.',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true,
                                iconColor: '#3ED6A8'
                            });
                            
                            contactForm.reset();
                            
                            lucide.createIcons();
                        });
                    }
                });
            });
        }
    });
</script>