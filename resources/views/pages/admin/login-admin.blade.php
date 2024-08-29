<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
</head>

<body>
    <div class="flex grid grid-cols-1 lg:grid-cols-2">
        <div class="pt-[25%] h-screen bg-[#D72323]">
            <div class="flex items-center justify-center">
                <img src="image/logo-kota-balam.png">
            </div>
            <div class="flex items-center justify-center text-white font-bold text-4xl">
                <h1>Kelurahan Sumberrejo</h1>
            </div>
            <div class="flex items-center justify-center text-white font-light text-3xl">
                <h1>Kecamatan Kemiling</h1>
            </div>
        </div>
        <div class="mx-auto w-[40%] pt-[25%]">
            <div class="">
                <div class="pb-1 flex items-center justify-center font-bold text-xl">
                    <h1>Login</h1>
                </div>
                <div class="pb-4 flex items-center justify-center font-semibold">
                    <p>Masukkan Email dan Kata Sandi</p>
                </div>
                <div class="pb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="admin@gmail.com">
                </div>
                <div class="pb-4 relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                    <input type="password" id="password" name="password" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="***********">
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pt-1.5 pr-3 text-gray-500">
                        <!-- SVG for eye icon -->
                        <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-center pt-6">
                    <button class="bg-[#2B2A4C] text-white px-6 py-1 rounded-md hover:bg-gray-400">Login</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eyeIcon');

        togglePassword.addEventListener('click', function(e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye slash icon
            eyeIcon.classList.toggle('hidden');
        });

    </script>
</body>

</html>
