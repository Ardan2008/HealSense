<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login - Admin</title>
    <style>
        .modal-overlay { transition: opacity 0.3s ease; }
        .modal-content { transition: transform 0.3s ease, opacity 0.3s ease; }
        .hidden-modal { opacity: 0; pointer-events: none; }
        .hidden-modal .modal-content { transform: scale(0.95); }
        
        /* Validation Styles */
        .input-error { border-color: #ef4444 !important; }
        .error-message { color: #ef4444; font-size: 0.75rem; margin-top: 0.25rem; display: none; }
        .checkbox-error { outline: 2px solid #ef4444; outline-offset: 2px; }

        /* Custom SweetAlert Green Theme */
        .swal2-icon.swal2-success {
            border-color: #3ED6A8 !important;
            color: #3ED6A8 !important;
        }
        .swal2-icon.swal2-success [class^=swal2-success-line] {
            background-color: #3ED6A8 !important;
        }
        .swal2-icon.swal2-success .swal2-success-ring {
            border: .25em solid rgba(62, 214, 168, .3) !important;
        }

        /* Glassmorphism Loading */
        .loading-box {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(209, 213, 219, 0.3);
        }

        .spinner-modern {
            width: 50px;
            height: 50px;
            display: grid;
            border: 4px solid #0000;
            border-radius: 50%;
            border-right-color: #3ED6A8;
            animation: rotate-modern 1s infinite linear;
        }

        .spinner-modern::before,
        .spinner-modern::after {    
            content: "";
            grid-area: 1/1;
            margin: 2px;
            border: inherit;
            border-radius: 50%;
            animation: rotate-modern 2s infinite;
        }

        .spinner-modern::after {
            margin: 8px;
            animation-duration: 3s;
        }

        @keyframes rotate-modern {
            100% { transform: rotate(1turn); }
        }
    </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen flex items-center justify-center p-6 font-sans">

    <div id="globalLoading" class="fixed inset-0 z-[100] flex items-center justify-center bg-[#F8FAFC]/60 backdrop-blur-md hidden transition-all duration-500">
        <div class="loading-box p-10 rounded-[2rem] shadow-2xl flex flex-col items-center max-w-xs w-full mx-4">
            <div class="relative mb-6">
                <div class="absolute inset-0 bg-[#3ED6A8] blur-xl opacity-20 animate-pulse"></div>
                <div class="spinner-modern relative"></div>
            </div>
            <h2 class="text-[#1F2937] font-bold text-lg tracking-tight mb-1">Processing</h2>
            <p class="text-gray-500 text-sm font-medium animate-pulse italic">Please wait a moment...</p>
        </div>
    </div>

    <div class="bg-white w-full max-w-md rounded-2xl shadow-xl border border-gray-100 p-8">
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-[#3ED6A8]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                <i data-lucide="lock" class="text-[#3ED6A8] w-8 h-8"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
            <p class="text-gray-500">Please enter your details to login</p>
        </div>

        <form id="loginForm" class="space-y-5" novalidate>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" id="username" placeholder="Enter your username" 
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-[#3ED6A8] outline-none transition">
                <p id="usernameError" class="error-message">Username cannot be empty</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" placeholder="••••••••" 
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-[#3ED6A8] outline-none transition">
                <p id="passwordError" class="error-message">Password must be at least 6 characters</p>
            </div>

            <div class="flex flex-col space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center text-gray-600 cursor-pointer">
                        <input type="checkbox" id="rememberMe" class="w-4 h-4 rounded text-[#3ED6A8] focus:ring-[#3ED6A8] border-gray-300 mr-2">
                        Remember me
                    </label>
                    <button type="button" onclick="toggleModal(true)" class="text-[#3ED6A8] font-semibold hover:underline">Forgot password?</button>
                </div>
                <p id="rememberError" class="error-message">You must check "Remember me" to proceed</p>
            </div>

            <div class="grid grid-cols-2 gap-4 pt-2">
                <button type="button" onclick="handleCancel()" class="px-4 py-3 border border-gray-200 text-gray-600 rounded-lg font-medium hover:bg-gray-50 transition">
                    Cancel
                </button>
                <button type="button" onclick="handleLogin()" class="px-4 py-3 bg-[#3ED6A8] text-white rounded-lg font-bold hover:bg-[#34b891] shadow-lg shadow-[#3ED6A8]/30 transition">
                    Login
                </button>
            </div>
        </form>
    </div>

    <div id="forgotPasswordModal" class="fixed inset-0 z-50 flex items-center justify-center px-4 hidden-modal modal-overlay">
        <div class="absolute inset-0 bg-gray-900/40 backdrop-blur-sm" onclick="toggleModal(false)"></div>
        <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl z-10 overflow-hidden modal-content">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">Reset Password</h3>
                    <button onclick="toggleModal(false)" class="text-gray-400 hover:text-gray-600 transition">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <form id="resetForm" class="space-y-4" novalidate>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <input type="text" id="resetUser" placeholder="Your username" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-[#3ED6A8] outline-none">
                        <p id="resetUserError" class="error-message">Username is required</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                        <input type="password" id="newPass" placeholder="••••••••" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-[#3ED6A8] outline-none">
                        <p id="newPassError" class="error-message">New password is required</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" id="confirmPass" placeholder="••••••••" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-[#3ED6A8] outline-none">
                        <p id="matchError" class="error-message">Passwords do not match</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <button type="button" onclick="toggleModal(false)" class="px-4 py-3 border border-gray-200 text-gray-600 rounded-lg font-medium hover:bg-gray-50 transition">Cancel</button>
                        <button type="button" onclick="handleReset()" class="px-4 py-3 bg-[#3ED6A8] text-white rounded-lg font-bold hover:bg-[#34b891] transition">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        const loadingOverlay = document.getElementById('globalLoading');

        function showLoading(state) {
            state ? loadingOverlay.classList.remove('hidden') : loadingOverlay.classList.add('hidden');
        }

        function validateInput(id, errorId, condition) {
            const input = document.getElementById(id);
            const errorText = document.getElementById(errorId);
            if (condition) {
                input.type === 'checkbox' ? input.classList.add('checkbox-error') : input.classList.add('input-error');
                errorText.style.display = 'block';
                return false;
            } else {
                input.type === 'checkbox' ? input.classList.remove('checkbox-error') : input.classList.remove('input-error');
                errorText.style.display = 'none';
                return true;
            }
        }

        // Real-time validation
        const inputList = [
            { id: 'username', err: 'usernameError', cond: () => document.getElementById('username').value === "" },
            { id: 'password', err: 'passwordError', cond: () => document.getElementById('password').value.length < 6 },
            { id: 'rememberMe', err: 'rememberError', cond: () => !document.getElementById('rememberMe').checked },
            { id: 'resetUser', err: 'resetUserError', cond: () => document.getElementById('resetUser').value === "" },
            { id: 'newPass', err: 'newPassError', cond: () => document.getElementById('newPass').value === "" },
            { id: 'confirmPass', err: 'matchError', cond: () => document.getElementById('newPass').value !== document.getElementById('confirmPass').value || document.getElementById('confirmPass').value === "" }
        ];

        inputList.forEach(item => {
            const el = document.getElementById(item.id);
            el.addEventListener(el.type === 'checkbox' ? 'change' : 'input', () => {
                if (!item.cond()) {
                    el.classList.remove('input-error', 'checkbox-error');
                    document.getElementById(item.err).style.display = 'none';
                }
            });
        });

        function handleLogin() {
            const isUserValid = validateInput('username', 'usernameError', document.getElementById('username').value === "");
            const isPassValid = validateInput('password', 'passwordError', document.getElementById('password').value.length < 6);
            const isRememberValid = validateInput('rememberMe', 'rememberError', !document.getElementById('rememberMe').checked);

            if (!isUserValid || !isPassValid || !isRememberValid) return;

            Swal.fire({
                title: 'Login Confirmation',
                text: "Are you sure you want to sign in?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3ED6A8',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Login!',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    showLoading(true);
                    setTimeout(() => {
                        showLoading(false);
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful!',
                            text: 'Redirecting to your dashboard...',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        }).then(() => {
                            // REDIRECT KE DASHBOARD
                            window.location.href = '/admin/dashboard'; 
                        });
                    }, 2000);
                }
            });
        }

        function handleCancel() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to leave the login form?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3ED6A8',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Exit',
                cancelButtonText: 'No, Stay'
            }).then((result) => {
                if (result.isConfirmed) {
                    showLoading(true);
                    setTimeout(() => {
                        window.location.href = '/'; 
                    }, 1200);
                }
            });
        }

        function handleReset() {
            const isUserValid = validateInput('resetUser', 'resetUserError', document.getElementById('resetUser').value === "");
            const isPassValid = validateInput('newPass', 'newPassError', document.getElementById('newPass').value === "");
            const isMatchValid = validateInput('confirmPass', 'matchError', document.getElementById('newPass').value !== document.getElementById('confirmPass').value);

            if (!isUserValid || !isPassValid || !isMatchValid) return;

            showLoading(true);
            
            // Simulasi proses ke server
            setTimeout(() => {
                showLoading(false);
                
                Swal.fire({
                    icon: 'success',
                    title: 'Password Reset!',
                    text: 'Your password has been updated.',
                    showConfirmButton: false, // Menghilangkan tombol OK
                    timer: 1500,              
                    timerProgressBar: true    
                }).then(() => {
                    // Otomatis menutup modal setelah timer SweetAlert habis
                    toggleModal(false);
                    
                    // Reset form agar bersih saat dibuka kembali
                    document.getElementById('resetForm').reset();
                });
            }, 1500);
        }

        function toggleModal(show) {
            const modal = document.getElementById('forgotPasswordModal');
            if (show) modal.classList.remove('hidden-modal');
            else modal.classList.add('hidden-modal');
        }
    </script>
</body>
</html>