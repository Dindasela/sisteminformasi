<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Sukses</title>
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

<body class="bg-white">
    <div>
        <x-nav-user />
        <section id="cover" class="relative items-center justify-center lg:pb-16">
            <div class="relative w-full p-5 lg:p-20 rounded-lg z-10 text-black lg:mt-10 mb-20 lg:mb-0">
                <div class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Verifikasi Dokumen
                </div>
                <div class="bg-[#2B2A4C] text-white p-5 font-bold">
                    Verifikasi Sukses!
                </div>
                <div class="bg-[#F5F3F3] text-[#4B4646] p-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
                        <div class="m-auto justify-center">
                            <div class="text-center mb-5 font-bold hidden sm:inline">Tampilan Dokumen</div>
                        </div>
                        <div class="m-auto justify-center">
                            <div class="text-center mb-5 font-bold">Keterangan Dokumen</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
                        <div class="m-auto justify-center">
                            <img src="/image/dokumen.svg" alt="">
                        </div>
                        <div class="m-auto justify-center">
                            <div class="grid grid-cols-2 gap-2 text-center">
                                <div class="bg-[#B2ACAC] p-3">Tanggal Diminta</div>
                                <div class="bg-[#D9D9D9] p-3">01-01-2024</div>
                                <div class="bg-[#B2ACAC] p-3">Nama Pemohon</div>
                                <div class="bg-[#D9D9D9] p-3">Mulyadi</div>
                                <div class="bg-[#B2ACAC] p-3">Pembuat Dokumen</div>
                                <div class="bg-[#D9D9D9] p-3">Staff Administrasi</div>
                                <div class="bg-[#B2ACAC] p-3">Jenis Dokumen</div>
                                <div class="bg-[#D9D9D9] p-3">Surat Pengantar</div>
                                <div class="bg-[#B2ACAC] p-3">Tanggal Dokumen Keluar</div>
                                <div class="bg-[#D9D9D9] p-3">10-01-2024</div>
                                <div class="bg-[#B2ACAC] p-3">Verifikasi Pejabat</div>
                                <div class="bg-[#D9D9D9] p-3">Lurah</div>
                            </div>
                        </div>
                    </div>
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