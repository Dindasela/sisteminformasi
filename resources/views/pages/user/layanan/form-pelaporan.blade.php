<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan</title>
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
                    Pelaporan
                </div>
                <div class="bg-[#2B2A4C] text-white p-5">
                    Sampaikan Laporan Anda
                </div>
                <form class="bg-[#F5F3F3] text-[#4B4646] p-10">
                    <div class="">Pilih Klasifikasi Laporan</div>
                    <div class="flex gap-3 m-auto justify-center text-white p-3 text-center">
                        <label for="pengaduan" class="p-3 bg-[#D72323] cursor-pointer rounded-lg w-full">
                            <input type="radio" id="pengaduan" name="kategori">
                            Pengaduan
                        </label>
                        <label for="aspirasi" class="p-3 bg-[#D72323] cursor-pointer rounded-lg w-full">
                            <input type="radio" id="aspirasi" name="kategori">
                            Aspirasi
                        </label>
                        <label for="pelaporan" class="p-3 bg-[#D72323] cursor-pointer rounded-lg w-full">
                            <input type="radio" id="pelaporan" name="kategori">
                            Pelaporan
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-2 lg:gap-4 m-auto w-full lg:w-1/2 justify-center mt-5 lg:mt-10">
                        <input type="text" id="nama"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Nama" required />
                        <textarea id="isilaporan"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi Laporan*" required></textarea>
                        <input type="date" id="tanggalLaporan"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Tanggal Laporan*" required />
                        <input type="text" id="lokasiKejadian"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lokasi Kejadian*" required />
                        <div class="flex">
                            <input type="file" id="gambar" class="hidden" accept="image/*"
                                onchange="handleFileChange(this)">
                            <label for="gambar"
                                class="btn cursor-pointer bg-[#D72323] text-white rounded-lg py-2 px-4 hover:bg-[#D72323]">
                                Upload Gambar
                            </label>
                            <div id="nama-file" class="ml-3 text-gray-700"></div>
                            <script>
                                function handleFileChange(input) {
                                    const file = input.files[0];
                                    const fileName = file.name;
                                    document.getElementById('nama-file').textContent = fileName;
                                }
                            </script>
                        </div>
                        <div class="text-gray-700">Gambar : png,jpg,jpeg</div>
                        <div class="flex justify-between">
                            <div class="flex justify-center m-auto">
                                <a href="/layanan-pelaporan" class="btn border-none bg-[#B2ACAC] text-white">Kembali</a>
                            </div>
                            <div class="flex justify-center m-auto">
                                <button value="" type="button" class="btn border-none bg-[#2B2A4C] text-white">Lapor
                                    !</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>