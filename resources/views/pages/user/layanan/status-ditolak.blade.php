<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Status Ditolak</title>
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
    {{--
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center">
            <form class="relative w-full m-5 lg:m-10 p-6 z-10 text-black">
                <div
                    class="font-bold text-2xl lg:text-4xl mb-5 lg:mb-10 mt-10 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Status Permohonan
                </div>
                <div class="mt-10 mb-10 text-4xl text-center text-[#D72323] font-bold">DOKUMEN ANDA DITOLAK</div>
                <div class="m-10 lg:m-20 justify-center item-center">
                    <div class="">Alasan : </div>
                    <ul class="list-disc list-inside ml-4">
                        <li>Foto KTP Blur</li>
                        <li>Nama Tidak Sesuai</li>
                    </ul>
                    <a href="/layanan-status-permohonan"
                        class="mt-10 btn border-none w-[50%] flex justify-center items-center m-auto text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Buat Pengajuan Dokumen Lagi
                    </a>
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>