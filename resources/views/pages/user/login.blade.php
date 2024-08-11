<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="/image/icon-logo.ico">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-[url('./image/hero.svg')] bg-blend-multiply min-h-screen flex items-center justify-center">
            <div class="absolute inset-0 bg-white opacity-40"></div>
            <form class="relative max-w-md bg-white p-6 rounded-lg shadow-lg z-10 text-black">
                <div class="p-6">
                    <div class="text-center mb-5">
                        <div class="text-xl font-bold">Login</div>
                        <div class="text-sm">Masukkan Username dan Kata Sandi</div>
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="abcdef@gmail.com" required />
                    </div>
                    <div class="mb-5 relative">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Kata sandi</label>
                        <input type="password" id="password" placeholder="********"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 mt-6">
                            <svg id="eye-open" class="h-5 w-5 text-gray-500 cursor-pointer" fill="none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.297 1.153-.764 2.213-1.377 3.137m-2.697 2.516A9.952 9.952 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.969 9.969 0 012.979-4.411m0 0A9.969 9.969 0 0112 5c4.477 0 8.268 2.943 9.542 7m-2.7 3.137A9.952 9.952 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.969 9.969 0 012.979-4.411M2.458 12a9.952 9.952 0 011.042-3.411" />
                            </svg>
                            <svg id="eye-closed" class="h-5 w-5 text-gray-500 cursor-pointer hidden" fill="none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7 .297-1.153.764-2.213 1.377-3.137m2.697-2.516A9.952 9.952 0 0112 5c4.477 0 8.268 2.943 9.542 7-.297 1.153-.764 2.213-1.377 3.137m-2.697 2.516A9.952 9.952 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.969 9.969 0 012.979-4.411M2.458 12a9.969 9.969 0 012.979-4.411M21 21l-4.35-4.35" />
                            </svg>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                    <div class="mt-5">
                        <div class="text-sm font-medium text-black text-center">Belum Punya Akun? <a href="/daftar-user" class="font-bold"> Daftar</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
    <script>
        const passwordInput = document.getElementById('password');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClosed = document.getElementById('eye-closed');

        eyeOpen.addEventListener('click', () => {
            passwordInput.type = 'text';
            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        });

        eyeClosed.addEventListener('click', () => {
            passwordInput.type = 'password';
            eyeClosed.classList.add('hidden');
            eyeOpen.classList.remove('hidden');
        });
    </script>

</body>

</html>
