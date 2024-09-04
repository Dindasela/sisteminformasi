<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Domisili Usaha</title>
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
    <div class="pb-20 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-2">Pengajuan Dokumen</h1>
        <h2 class="text-normal font-light pb-4">Surat Keterangan Domisili Usaha</h2>
        <form action="" method="">
            <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
                <div class="spaye-y-4">
                    <h1 class="text-xl font-bold pb-4">Data Diri</h1>
                    <div class="pb-2">
                        <label for="email" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                        <input type="email" id="email" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">NIK
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Tempat Lahir
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="tanggal" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Jenis Kelamin</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Perempuan</option>
                            <option value="LK">Laki-Laki </option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Islam</option>
                            <option value="KRI">Kristen </option>
                            <option value="HIN">Hindu</option>
                            <option value="BUD">Budhha</option>
                            <option value="KNG">Konghucu</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                        <input type="text" id="nama" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Status Perkawinan</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Belum Kawin</option>
                            <option value="WNA">Kawin</option>
                        </select>
                    </div>
                    {{-- <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Warga Negara</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div> --}}
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Sesuai KK</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>

                    <h1 class="text-xl font-bold pb-4 pt-4">Data Usaha</h1>
                    <div class="pb-2">
                        <label for="email" class="block text-sm font-normal text-gray-700">Nama Lembaga</label>
                        <input type="email" id="email" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">NPSN
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Tahun Berdiri
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Alamat Lembaga
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Kelurahan
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Kecamatan
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Kota
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Provinsi
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Keperluan Usaha
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                </div>
                <div class="">
                    <div class="pb-4">
                        <label for="ktp" class="block text-sm font-normal text-gray-700">Foto KTP</label>
                        <div class="w-full h-36 mt-2">
                            <img class="mx-auto h-full object-cover" src="image/ktp-fake.png" />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="swafoto" class="block text-sm font-normal text-gray-700">Unggah KK</label>
                        <div class="w-full h-36 mt-2">
                            <img class="mx-auto h-full object-cover" src="image/ktp-fake.png" />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="swafoto" class="block text-sm font-normal text-gray-700">Surat Pengantar RT</label>
                        <div class="w-full h-36 mt-2">
                            <img class="mx-auto h-full object-cover" src="image/preview.png" />
                        </div>
                    </div>
                    <div class="flex justify-between mt-6 mx-auto w-[100%] pb-4">
                        <button class="bg-[#2B2A4C] text-white px-6 py-1 rounded-md hover:bg-gray-400">Tolak</button>
                        <button class="bg-[#D72323] text-white px-6 py-1 rounded-md hover:bg-red-700">Terima</button>
                    </div>
                </div>
            </div>
        </form>
        <x-footer-admin />
</body>

</html>
