<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Pindah</title>
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
        <h2 class="text-normal font-light pb-4">Surat Keterangan Pindah</h2>
        <form action="" method="">
            <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
                <div class="spaye-y-4">
                    {{-- Data 1 --}}
                    <h1 class="text-xl font-bold pb-4">Data Daerah Asal</h1>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nomor Kartu Keluarga</label>
                        <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama Kepala Keluarga</label>
                        <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Rumah</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="flex gap-8 block w-full">
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">RT
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">RW
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Desa</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Kecamatan</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Kabupaten/Kota</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Provinsi</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="flex gap-8 block w-full">
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">Kode POS
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">Telepon
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                    </div>

                    {{-- Data 2 --}}
                    <h1 class="text-xl font-bold pb-4 pt-4">Data Kepindahan</h1>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Alasan Pindah</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Pekerjaan</option>
                            <option value="PEN">Pendudukan</option>
                            <option value="KEA">Keamanan</option>
                            <option value="KES">Kesehatan</option>
                            <option value="PER">Perumahan</option>
                            <option value="KEL">Keluarga</option>
                            <option value="DLL">Lain-lain</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Tujuan Pindah</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="flex gap-8 block w-full">
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">RT
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">RW
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Desa</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Kecamatan</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Kabupaten/Kota</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Provinsi</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="flex gap-8 block w-full">
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">Kode POS
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">Telepon
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Klasifikasi Pindah</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Dalam Satu Desa/Kelurahan</option>
                            <option value="PEN">Antar Desa/Kelurahan</option>
                            <option value="KEA">Antar Kecamatan</option>
                            <option value="KES">Antar Kabupaten/Kota</option>
                            <option value="PER">Antar Provinsi</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Jenis Kepindahan</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Kepindahan Keluarga</option>
                            <option value="PEN">Kepindahan Keluarga dan Seluruh Anggota Keluarga</option>
                            <option value="KEA">Kepindahan Keluarga dan Sebagian Anggota Keluarga</option>
                            <option value="KES">Anggota Keluarga</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Status No KK Bagi yang Tidak Pindah</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Kepala Keluarga</option>
                            <option value="PEN">Kepindahan Keluarga dan Seluruh Anggota Keluarga</option>
                            <option value="KEA">Kepindahan Keluarga dan Sebagian Anggota Keluarga</option>
                            <option value="KES">Anggota Keluarga</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Status No KK Bagi yang Pindah</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Numpang KK</option>
                            <option value="PEN">Membuat KK Baru</option>
                            <option value="KEA">Nama Kepala Keluarga dan Nomor KK Tetap</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Rencana Tanggal Pindah</label>
                        <input type="date" id="tanggal" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Jumlah Keluarga Yang Pindah</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">NIK</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">SHDK</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>01 Kepala Keluarga</option>
                            <option value="">02 Suami</option>
                            <option value="">03 Istri</option>
                            <option value="">04 Anak</option>
                            <option value="">05 Menantu</option>
                            <option value="">06 Cucu</option>
                            <option value="">07 Orang Tua</option>
                            <option value="">08 Mertua</option>
                            <option value="">09 Family Lainnya</option>
                            <option value="">10 Pembantu</option>
                        </select>
                    </div>
                    {{-- Data 3 --}}
                    <h1 class="text-xl font-bold pb-4 pt-4">Data Daerah Tujuan</h1>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">NIK</label>
                        <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama Kepala Keluarga</label>
                        <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">NIK Kepala Keluarga</label>
                        <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Status No KK Bagi yang Tidak Pindah</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>Kepala Keluarga</option>
                            <option value="PEN">Kepindahan Keluarga dan Seluruh Anggota Keluarga</option>
                            <option value="KEA">Kepindahan Keluarga dan Sebagian Anggota Keluarga</option>
                            <option value="KES">Anggota Keluarga</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Kedatangan</label>
                        <input type="date" id="tanggal" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Alamat Rumah
                            <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="flex gap-8 block w-full">
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">RT
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                        <div class="pb-2">
                            <label for="text" class="block text-sm font-normal text-gray-700">RW
                                <input type="text" id="text" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                        </div>
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Desa</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Kecamatan</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Kabupaten/Kota</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Provinsi</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Jumlah Keluarga Yang Pindah</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">NIK</label>
                        <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">SHDK</label>
                        <select id="text" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected>01 Kepala Keluarga</option>
                            <option value="">02 Suami</option>
                            <option value="">03 Istri</option>
                            <option value="">04 Anak</option>
                            <option value="">05 Menantu</option>
                            <option value="">06 Cucu</option>
                            <option value="">07 Orang Tua</option>
                            <option value="">08 Mertua</option>
                            <option value="">09 Family Lainnya</option>
                            <option value="">10 Pembantu</option>
                        </select>
                    </div>
                </div>
                {{-- Upload Berkas --}}
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
