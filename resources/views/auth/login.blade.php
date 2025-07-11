<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex bg-gradient-to-l from-[#601616] to-[#C62E2E] font-poppins">
    <!-- Sisi kiri: Login Form -->
    <div class="w-1/2 flex items-center justify-center">
        <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-11 max-w-lg w-full mx-2">
            <div class ="flex justify-center mb-6">
                <img src="/images/Logo-Unhas.png" alt="Logo Unhas" class="h-16">
                <img src="/images/Logo-Unhas.png" alt="Logo Satu Data" class="h-16 ml-4">
            </div>
            <h2 class="text-2xl font-bold text-center mb-4 text-[#C62E2E]">Selamat Datang</h2>
            <h2 class="text-center font-semibold text-gray-600 mb-6 italic">Platform & Hub Informasi Terintegrasi <br> Universitas Hasanuddin</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-gray-600 font-medium mb-2">Email</label>
                    <input id="email" type="email" name="email" placeholder="Masukkan Email Terdaftar" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#C62E2E]" />
                </div>
                <div class="mb-6 relative">
                    <label for="password" class="block text-gray-600 font-medium mb-2">Password</label>
                    <input id="password" type="password" name="password" placeholder="Masukkan Password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#C62E2E]" />
                    <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-11 text-gray-500 hover:text-gray-700">
                            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                </div>

                <div class="flex items-center justify-between text-sm mb-6">
                    <!-- Checkbox dan teks -->
                    <label class="inline-flex items-center space-x-2 cursor-pointer select-none">
                        <input type="checkbox" name="remember"
                            class="h-4 w-4 text-indigo-600 bg-gray-100 border-[#C62E2E] rounded focus:ring-[#C62E2E] focus:ring-1 transition duration-200" />
                        <span class="text-gray-600 font-medium">Ingat saya</span>
                    </label>

                    <!-- Link lupa password -->
                    <a href="#" class="text-[#C62E2E] font-medium hover:underline ml-4">Lupa Password?</a>
                </div>

                <button type="submit"
                    class="w-full mb-6 bg-[#C62E2E] text-white font-semibold py-2 rounded-md hover:bg-[#a82828] transition duration-200">
                    Login
                </button>

                <div class="flex items-center mb-4 text-sm">
                    <hr class="flex-grow border-gray-300">
                    <span class="mx-3 text-gray-500">atau masuk dengan</span>
                    <hr class="flex-grow border-gray-300">
                </div>
            </form>
            <div class="flex justify-center">
                    <button
                        class="flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg text-black hover:bg-gray-100 text-sm sm:text-base">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-5 w-5">
                    </button>
                </div>
        </div>
    </div>

    <!-- Sisi kanan: Gambar -->
    <div class="w-1/2 h-screen">
        <img src="/images/unhas-polos.png" alt="Gedung Unhas" class="object-cover w-full h-full" />
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.getElementById("eye-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.973 9.973 0 012.002-3.368m2.161-2.263A9.953 9.953 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.978 9.978 0 01-4.293 5.368M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3l18 18" />`;
            } else {
                passwordInput.type = "password";
                eyeIcon.innerHTML =
                    `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />`;
            }
        }
    </script>
</body>
</html>
