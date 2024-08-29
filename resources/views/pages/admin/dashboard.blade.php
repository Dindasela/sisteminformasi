<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin </title>
    <link rel="icon" type="image/x-icon" href="/assets/">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}

</head>

<body>
    <x-nav-admin />
    <x-sidebar-admin />
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Selamat Datang, Admin</h1>
        <div class="p-2">
            <div class="grid grid-cols-1 gap-4 mb-4 pl-72 pr-72">
                <div class="flex items-center pl-4 h-28 rounded-2xl bg-[#2B2A4C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                    <div>
                        <p class="flex text-xl text-white">Jumlah Pengajuan Dokumen Hari Ini
                        </p>
                        <h1 class="text-4xl font-bold text-white">30</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center pl-4 h-28 rounded-2xl bg-[#2B2A4C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                    <div>
                        <p class="flex text-xl text-white">Jumlah Pelaporan Hari Ini
                        </p>
                        <h1 class="text-4xl font-bold text-white">10</h1>
                    </div>
                </div>
                <div class="flex items-center pl-4 h-28 rounded-2xl bg-[#2B2A4C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                    <div>
                        <p class="flex text-xl text-white">Jumlah yang Memverefikasi
                        </p>
                        <h1 class="text-4xl font-bold text-white">3</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center pl-4 h-28 rounded-2xl bg-[#2B2A4C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                    <div>
                        <p class="flex text-xl text-white">Jumlah Surat Keluar Hari Ini
                        </p>
                        <h1 class="text-4xl font-bold text-white">5</h1>
                    </div>
                </div>
                <div class="flex items-center pl-4 h-28 rounded-2xl bg-[#2B2A4C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                    <div>
                        <p class="flex text-xl text-white">Jumlah Surat Masuk Hari Ini
                        </p>
                        <h1 class="text-4xl font-bold text-white">2</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer-admin />
</body>

</html>
