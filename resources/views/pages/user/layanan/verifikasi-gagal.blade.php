<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Gagal</title>
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
    <div>
        <x-nav-user />
        <section id="cover" class="relative items-center justify-center lg:pb-16">
            <div class="relative w-full p-5 lg:p-20 rounded-lg z-10 text-black lg:mt-10 mb-20 lg:mb-0">
                <div class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Verifikasi Dokumen
                </div>
                <div class="bg-[#2B2A4C] text-white text-center p-5">
                    Data Tidak Ditemukan
                </div>
                <div class="bg-white text-[#4B4646] p-10">
                    <div class="m-auto text-center text-xl">Mohon Maaf
                        Data yang Anda cari tidak ada
                        atau tidak valid</div>
                    <div class="flex justify-center m-auto">
                        <a href="/layanan-verifikasi-dokumen"
                            class="btn border-none bg-[#2B2A4C] text-white mt-10">Kembali
                            Ke
                            Halaman Verifikasi</a>
                    </div>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>