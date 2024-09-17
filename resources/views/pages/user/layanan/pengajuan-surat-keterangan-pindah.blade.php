<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Keterangan Pindah</title>
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
    <style>
        #input_ktp::-webkit-file-upload-button {
            visibility: hidden;
        }

        #input_ktp::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }

        #input_swafoto::-webkit-file-upload-button {
            visibility: hidden;
        }

        #input_swafoto::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
    </style>
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center">
            <form action="{{ route('pengajuan-surat-keterangan-pindah.post') }}" method="POST"
                enctype="multipart/form-data" class="relative full m-5 lg:m-10 p-6 z-10 text-black">
                @csrf
                <div class="mt-10 lg:mt-20 mb-10 lg:mb-20">
                    <div
                        class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                        Surat Keterangan Pindah
                    </div>
                    <div class="max-w-ful mb-5 lg:mb-10">
                        Silakan isi formulir berikut sesuai dengan data pada Kartu Tanda Penduduk (KTP) Anda.
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
                        <div class="text-black text-left">
                            <div>
                                <div class="font-bold text-black mb-5 text-lg">Data Daerah Asal</div>
                                <div class="mb-2">
                                    <label for="nomor-kartu-keluarga-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nomor Kartu
                                        Keluarga</label>
                                    <input type="number" id="nomor-kartu-keluarga-daerah-asal" name="no_kk_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nomor Kartu Keluarga" required />
                                </div>
                                <div class="mb-2">
                                    <label for="nama-kepala-keluarga-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama Kepala
                                        Keluarga</label>
                                    <input type="text" id="nama-kepala-keluarga-daerah-asal"
                                        name="nama_kepala_keluarga_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nama Kepala Keluarga" required />
                                </div>
                                <div class="mb-2">
                                    <label for="alamat-rumah-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Alamat Rumah</label>
                                    <input type="text" id="alamat-rumah-daerah-asal" name="alamat_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Alamat Rumah" required />
                                </div>
                                <div class="mb-2 flex gap-2 lg:gap-4 w-full">
                                    <div class="flex-grow">
                                        <label for="rt-daerah-asal"
                                            class="block mb-2 text-sm font-medium text-gray-900">RT</label>
                                        <input type="number" id="rt-daerah-asal" name="rt_asal"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="RT" required />
                                    </div>
                                    <div class="flex-grow">
                                        <label for="rw-daerah-asal"
                                            class="block mb-2 text-sm font-medium text-gray-900">RW</label>
                                        <input type="number" id="rw-daerah-asal" name="rw_asal"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="RW" required />
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="desa-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Desa</label>
                                    <input type="name" id="desa-data-kepindahan" name="desa_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Desa" required />
                                </div>
                                <div class="mb-2">
                                    <label for="kecamatan-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kecamatan</label>
                                    <input type="text" id="kecamatan-daerah-asal" name="kecamatan_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Kecamatan" required />
                                </div>
                                <div class="mb-2">
                                    <label for="kabupaten-kota-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kabupaten/Kota</label>
                                    <input type="text" id="kabupaten-kota-daerah-asal" name="kabupaten_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Kabupaten/Kota" required />
                                </div>
                                <div class="mb-2">
                                    <label for="provinsi-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
                                    <input type="text" id="provinsi-daerah-asal" name="provinsi_asal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Provinsi" required />
                                </div>
                                <div class="mb-2 flex gap-2 lg:gap-4 w-full">
                                    <div class="flex-grow">
                                        <label for="kode-pos-daerah-asal"
                                            class="block mb-2 text-sm font-medium text-gray-900">Kode Pos</label>
                                        <input type="number" id="kode-pos-daerah-asal" name="kode_pos_asal"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Kode Pos" required />
                                    </div>
                                    <div class="flex-grow">
                                        <label for="telepon-daerah-asal"
                                            class="block mb-2 text-sm font-medium text-gray-900">Telepon</label>
                                        <input type="number" id="telepon-daerah-asal" name="telepon_asal"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Telepon" required />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="font-bold text-black mb-5 text-lg">Data Kepindahan</div>
                                <div>
                                    <div class="mb-2">
                                        <label for="alasan-pindah-data-kepindahan"
                                            class="block mb-2 text-sm font-medium text-gray-900">Alasan Pindah</label>
                                        <select id="alasan-pindah" name="alasan_pindah"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            required onchange="toggleLainLainInput()">
                                            <option value="" selected disabled>Pilih Alasan Pindah</option>
                                            <option value="Pekerjaan">Pekerjaan</option>
                                            <option value="Pendudukan">Pendudukan</option>
                                            <option value="Keamanan">Keamanan</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Perumahan">Perumahan</option>
                                            <option value="Keluarga">Keluarga</option>
                                            <option value="Lain-lain">Lain-lain (Sebutkan)</option>
                                        </select>
                                    </div>
                                    <div class="mb-2" id="lain-lain-container" style="display: none;">
                                        <label for="lain-lain"
                                            class="block mb-2 text-sm font-medium text-gray-900">Sebutkan
                                            Alasan</label>
                                        <input type="text" id="lain-lain" name="alasan_lain"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Sebutkan Alasan" />
                                    </div>
                                    <script>
                                        function toggleLainLainInput() {
                                            var select = document.getElementById("alasan-pindah");
                                            var lainLainContainer = document.getElementById("lain-lain-container");
                                            if (select.value === "Lain-lain (Sebutkan)") {
                                                lainLainContainer.style.display = "block";
                                            } else {
                                                lainLainContainer.style.display = "none";
                                            }
                                        }
                                    </script>
                                </div>
                                <div class="mb-2">
                                    <label for="alamat-tujuan-pindah-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Alamat Tujuan
                                        Pindah</label>
                                    <input type="name" id="alamat-tujuan-pindah-data-kepindahan"
                                        name="alamat_tujuan_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Alamat Tujuan Pindah" required />
                                </div>
                                <div class="mb-2 flex gap-2 lg:gap-4 w-full">
                                    <div class="flex-grow">
                                        <label for="rt-data-kepindahan-data-kepindahan"
                                            class="block mb-2 text-sm font-medium text-gray-900">RT</label>
                                        <input type="number" id="rt-data-kepindahan-data-kepindahan"
                                            name="rt_pindah"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="RT" required />
                                    </div>
                                    <div class="flex-grow">
                                        <label for="rw-data-kepindahan-data-kepindahan"
                                            class="block mb-2 text-sm font-medium text-gray-900">RW</label>
                                        <input type="number" id="rw-data-kepindahan-data-kepindahan"
                                            name="rw_pindah"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="RW" required />
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="desa-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Desa</label>
                                    <input type="name" id="desa-data-kepindahan" name="desa_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Desa" required />
                                </div>
                                <div class="mb-2">
                                    <label for="kecamatan-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kecamatan</label>
                                    <input type="name" id="kecamatan-data-kepindahan" name="kecamatan_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Kecamatan" required />
                                </div>
                                <div class="mb-2">
                                    <label for="kabupaten-kota-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kabupaten/Kota</label>
                                    <input type="name" id="kabupaten-kota-data-kepindahan" name="kabupaten_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Kabupaten/Kota" required />
                                </div>
                                <div class="mb-2">
                                    <label for="provinsi-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
                                    <input type="name" id="provinsi-data-kepindahan" name="provinsi_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Provinsi" required />
                                </div>
                                <div class="mb-2 flex gap-2 lg:gap-4 w-full">
                                    <div class="flex-grow">
                                        <label for="kode-pos-data-kepindahan"
                                            class="block mb-2 text-sm font-medium text-gray-900">Kode
                                            Pos</label>
                                        <input type="number" id="kode-pos-data-kepindahan" name="kode_pos_pindah"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Kode Pos" required />
                                    </div>
                                    <div class="flex-grow">
                                        <label for="telepon-data-kepindahan"
                                            class="block mb-2 text-sm font-medium text-gray-900">Telepon</label>
                                        <input type="number" id="telepon-data-kepindahan" name="telepon_pindah"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Telepon" required />
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="kelasifikasi-pindah-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Klasifikasi
                                        Pindah</label>
                                    <select id="kelasifikasi-pindah-data-kepindahan" name="klasifikasi_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Kelasifikasi Pindah</option>
                                        <option value="Dalam satu desa/kelurahan">Dalam satu desa/kelurahan</option>
                                        <option value="Antar desa/kelurahan">Antar desa/kelurahan</option>
                                        <option value="Antar Kecamatan">Antar Kecamatan</option>
                                        <option value="Antar Kab/Kota">Antar Kab/Kota</option>
                                        <option value="Antar Provinsi">Antar Provinsi</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="jenis-kepindahan-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jenis Kepindahan</label>
                                    <select id="jenis-kepindahan-data-kepindahan" name="jenis_kepindahan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Jenis Kepindahan</option>
                                        <option value="Kepindahan Kelurga">Kepindahan Kelurga</option>
                                        <option value="Kepindaan Kelurga dan Seluruh keluarga">Kepindaan Kelurga dan
                                            Seluruh Anggota keluarga</option>
                                        <option value="Kepindaan Kelurga dan Sebagian keluarga">Kepindaan Kelurga dan
                                            Sebagian Anggota keluarga</option>
                                        <option value="Anggota Keluarga">Anggota Keluarga</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="status-no-kk-bagi-tak-pindah-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Status No KK Bagi yang
                                        Tidak Pindah</label>
                                    <select id="status-no-kk-bagi-tak-pindah-data-kepindahan"
                                        name="status_kk_tidak_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Status No KK Bagi yang Tidak
                                            Pindah
                                        </option>
                                        <option value="Kepala Kelurga">Kepala Kelurga</option>
                                        <option value="Kepindaan Kelurga dan Seluruh keluarga">Kepindaan Kelurga dan Seluruh Anggota keluarga</option>
                                        <option value="Kepindaan Kelurga dan Sebagian keluarga">Kepindaan Kelurga dan Sebagian Anggota keluarga</option>
                                        <option value="Anggota Keluarga">Anggota Keluarga</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="status-no-kk-bagi-yg-pindah-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Status No KK Bagi yang
                                        Pindah</label>
                                    <select id="status-no-kk-bagi-yg-pindah-data-kepindahan" name="status_kk_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Status No KK Bagi yang Pindah
                                        </option>
                                        <option value="Numpang KK">Numpang KK</option>
                                        <option value="Membuat KK Baru">Membuat KK Baru</option>
                                        <option value="Nama Kepala Keluarga dan Nomor KK Tetap">Nama Kepala Keluarga dan Nomor KK Tetap</option>
                                    </select>
                                </div>
                                <div class="mb-2 relative">
                                    <label for="rencana-tanggal-pindah-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Rencana Tanggal
                                        Pindah</label>
                                    <input type="date" id="rencana-tanggal-pindah-data-kepindahan"
                                        placeholder="Rencana Tanggal Pindah" name="rencana_tanggal_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-2">
                                    <label for="jumlah-keluarga-yg-pindah-data-kepindahan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jumlah Keluarga Yang
                                        Pindah</label>
                                    <select id="jumlah-keluarga-yg-pindah-data-kepindahan"
                                        name="jumlah_keluarga_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Jumlah Keluarga Yang Pindah
                                        </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                {{-- <div class="flex-grow mb-2">
                                    <label for="nama"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                    <input type="text" id="nama" name="nama_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nama" required />
                                </div>
                                <div class="flex-grow mb-2">
                                    <label for="nik"
                                        class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                                    <input type="number" id="nik" name="nik_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="NIK" required />
                                </div>
                                <div class="flex-grow mb-2">
                                    <label for="shdck"
                                        class="block mb-2 text-sm font-medium text-gray-900">SHDCK</label>
                                    <input type="number" id="shdck" name="shdck_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="SHDCK" required />
                                </div> --}}
                                <div id="form-container">
                                </div>
                                <script>
                                    document.getElementById('jumlah-keluarga-yg-pindah-data-kepindahan').addEventListener('change', function() {
                                        const container = document.getElementById('form-container');
                                        container.innerHTML = '';
                                        const count = parseInt(this.value);

                                        for (let i = 0; i < count; i++) {
                                            const formGroup = document.createElement('div');
                                            formGroup.className = 'mb-4 p-4 border border-gray-300 rounded-lg';

                                            formGroup.innerHTML = `
                                                <div class="mb-2 relative">
                                                    <label for="nama-data-kepindahan-${i}" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                                    <input type="text" id="nama-data-kepindahan-${i}" placeholder="Nama" name="nama_pindah[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                                                </div>
                                                <div class="mb-2 relative">
                                                    <label for="nik-data-kepindahan-${i}" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                                                    <input type="number" id="nik-data-kepindahan-${i}" placeholder="NIK" name="nik_pindah[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                                                </div>
                                                <div class="mb-2">
                                                    <label for="shdk-data-kepindahan-${i}" class="block mb-2 text-sm font-medium text-gray-900">SHDK</label>
                                                    <select id="shdk-data-kepindahan-${i}" name="shdck_pindah[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="" selected disabled>Pilih SHDK</option>
                                                        <option value="Kepala Keluarga">01 Kepala Keluarga</option>
                                                        <option value="Suami">02 Suami</option>
                                                        <option value="Istri">03 Istri</option>
                                                        <option value="Anak">04 Anak</option>
                                                        <option value="Menantu">05 Menantu</option>
                                                        <option value="Cucu">06 Cucu</option>
                                                        <option value="Orang Tua">07 Orang Tua</option>
                                                        <option value="Mertua">08 Mertua</option>
                                                        <option value="Family Lainnya">09 Family Lainnya</option>
                                                        <option value="Pembantu">10 Pembantu</option>
                                                    </select>
                                                </div>
                                            `;

                                            container.appendChild(formGroup);
                                        }
                                    });
                                </script>
                            </div>
                            <div>
                                <div class="font-bold text-black mb-5 mt-5 text-lg">Data Diri</div>
                                <div class="mb-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                    <input type="text" id="" name="nama_diri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nama" required />
                                </div>
                                <div class="mb-2">
                                    <label for="alamat-rumah-daerah-asal"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                                    <input type="text" id="alamat-rumah-daerah-asal" name="tempat_lahir_diri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Tempat Lahir" required />
                                </div>
                                <div class="mb-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                                    <input type="date" id=""
                                        name="tanggal_lahir_diri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Tanggal Lahir" required />
                                </div>
                                <div class="mb-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                                    <select id="" name="jenis_kelamin_diri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Pria">Laki Laki</option>
                                        <option value="Wanita">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                                    <input type="text" id="" name="pekerjaan_diri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Masukkan Pekerjaan" required />
                                </div>
                                <div class="mb-2">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                                    <select id="" name="agama_diri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 lg:mt-0">
                            <div>
                                <div class="font-bold text-black mb-5 text-lg">Data Daerah Tujuan</div>
                                <div class="mb-2">
                                    <label for="nomor-kartu-keluarga-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nomor Kartu
                                        Keluarga</label>
                                    <input type="number" id="nomor-kartu-keluarga-daerah-tujuan" name="no_kk_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nomor Kartu Keluarga" required />
                                </div>
                                <div class="mb-2">
                                    <label for="nama-kepala-keluarga-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama Kepala
                                        Keluarga</label>
                                    <input type="text" id="nama-kepala-keluarga-daerah-tujuan"
                                        name="nama_kepala_keluarga_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nama Kepala Keluarga" required />
                                </div>
                                <div class="mb-2">
                                    <label for="nik-kepala-keluarga-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">NIK Kepala
                                        Keluarga</label>
                                    <input type="number" id="nik-kepala-keluarga-daerah-tujuan"
                                        name="nik_kepala_keluarga_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="NIK Kepala Keluarga" required />
                                </div>
                                <div class="mb-2">
                                    <label for="status-no-kk-bagi-tak-pindah-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Status No KK Bagi yang
                                        Tidak Pindah</label>
                                    <select id="status-no-kk-bagi-tak-pindah-daerah-tujuan"
                                        name="status_kk_tujuan_yang_tidak_pindah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Status No KK Bagi yang Tidak
                                            Pindah
                                        </option>
                                        <option value="Kepala Kelurga">Kepala Kelurga</option>
                                        <option value="Kepindaan Kelurga dan Seluruh Anggota keluarga">Kepindaan Kelurga dan Seluruh Anggota keluarga</option>
                                        <option value="Kepindaan Kelurga dan Sebagian Anggota keluarga">Kepindaan Kelurga dan Sebagian Anggota keluarga</option>
                                        <option value="Anggota Keluarga">Anggota Keluarga</option>
                                    </select>
                                </div>
                                <div class="mb-2 relative">
                                    <label for="tanggal-kedatangan-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Kedatangan</label>
                                    <input type="date" id="tanggal-kedatangan-daerah-tujuan"
                                        placeholder="Tanggal Kedatangan" name="tanggal_kedatangan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-2">
                                    <label for="alamat-rumah-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Alamat Rumah</label>
                                    <input type="text" id="alamat-rumah-daerah-tujuan" name="alamat_rumah_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Alamat Rumah" required />
                                </div>
                                <div class="mb-2 flex gap-2 lg:gap-4 w-full">
                                    <div class="flex-grow">
                                        <label for="rt-daerah-tujuan"
                                            class="block mb-2 text-sm font-medium text-gray-900">RT</label>
                                        <input type="number" id="rt-daerah-tujuan" name="rt_tujuan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="RT" required />
                                    </div>
                                    <div class="flex-grow">
                                        <label for="rw-daerah-tujuan"
                                            class="block mb-2 text-sm font-medium text-gray-900">RW</label>
                                        <input type="number" id="rw-daerah-tujuan" name="rw_tujuan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="RW" required />
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="desa-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Desa</label>
                                    <input type="name" id="desa-daerah-tujuan" name="desa_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Desa" required />
                                </div>
                                <div class="mb-2">
                                    <label for="kecamatan-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kecamatan</label>
                                    <input type="text" id="kecamatan-daerah-tujuan" name="kecamatan_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Kecamatan" required />
                                </div>
                                <div class="mb-2">
                                    <label for="kabupaten-kota-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kabupaten/Kota</label>
                                    <input type="text" id="kabupaten-kota-daerah-tujuan" name="kabupaten_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Kabupaten/Kota" required />
                                </div>
                                <div class="mb-2">
                                    <label for="provinsi-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
                                    <input type="text" id="provinsi-daerah-tujuan" name="provinsi_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Provinsi" required />
                                </div>
                                <div class="mb-2">
                                    <label for="jumlah-keluarga-yg-pindah-daerah-tujuan"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jumlah Keluarga Yang
                                        Pindah</label>
                                    <select id="jumlah-keluarga-yg-pindah-daerah-tujuan"
                                        name="jumlah_keluarga_pindah_tujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Jumlah Keluarga Yang Pindah
                                        </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>

                                {{-- <div class="flex-grow mb-2">
                                    <label for="nama"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                    <input type="text" id="nama" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nama" required />
                                </div>
                                <div class="flex-grow mb-2">
                                    <label for="nik"
                                        class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                                    <input type="number" id="nik" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="NIK" required />
                                </div>
                                <div class="flex-grow mb-2">
                                    <label for="shdck"
                                        class="block mb-2 text-sm font-medium text-gray-900">SHDCK</label>
                                    <input type="number" id="shdck" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="SHDCK" required />
                                </div> --}}

                                <div id="form-container-daerah-tujuan">
                                </div>

                                <script>
                                    document.getElementById('jumlah-keluarga-yg-pindah-daerah-tujuan').addEventListener('change', function() {
                                        const container = document.getElementById('form-container-daerah-tujuan');
                                        container.innerHTML = '';
                                        const count = parseInt(this.value);

                                        for (let i = 0; i < count; i++) {
                                            const formGroup = document.createElement('div');
                                            formGroup.className = 'mb-4 p-4 border border-gray-300 rounded-lg';

                                            formGroup.innerHTML = `
                                                <div class="mb-2 relative">
                                                    <label for="nama-daerah-tujuan-${i}" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                                    <input type="text" id="nama-daerah-tujuan-${i}" placeholder="Nama" name="nama_tujuan[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                                                </div>
                                                <div class="mb-2 relative">
                                                    <label for="nik-daerah-tujuan-${i}" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                                                    <input type="number" id="nik-daerah-tujuan-${i}" placeholder="NIK" name="nik_tujuan[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                                                </div>
                                                <div class="mb-2">
                                                    <label for="shdk-daerah-tujuan-${i}" class="block mb-2 text-sm font-medium text-gray-900">SHDK</label>
                                                    <select id="shdk-daerah-tujuan-${i}" name="shdck_tujuan[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="" selected disabled>Pilih SHDK</option>
                                                        <option value="Kepala Keluarga">01 Kepala Keluarga</option>
                                                        <option value="Suami">02 Suami</option>
                                                        <option value="Istri">03 Istri</option>
                                                        <option value="Anak">04 Anak</option>
                                                        <option value="Menantu">05 Menantu</option>
                                                        <option value="Cucu">06 Cucu</option>
                                                        <option value="Orang Tua">07 Orang Tua</option>
                                                        <option value="Mertua">08 Mertua</option>
                                                        <option value="Family Lainnya">09 Family Lainnya</option>
                                                        <option value="Pembantu">10 Pembantu</option>
                                                    </select>
                                                </div>
                                            `;

                                            container.appendChild(formGroup);
                                        }
                                    });
                                </script>
                            </div>
                            <div class="font-bold text-black mt-10 mb-5 text-lg">Dokumen Penunjang</div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Foto KTP</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian KTP berada dalam bingkai foto dan bukan fotokopi KTP
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_ktp">Upload file</label>
                                    <div class="relative">
                                        <input name="foto_ktp"
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_ktp_help" id="input_ktp" type="file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Foto KK</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian KK berada dalam bingkai foto dan bukan fotokopi KK
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_swafoto">Upload file</label>
                                    <div class="relative">
                                        <input name="foto_kk"
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_swafoto_help" id="input_swafoto" type="file"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Surat Pengantar RT</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian Surat Pengantar RT berada dalam bingkai foto dan bukan
                                        fotokopi Surat Pengantar RT
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_swafoto">Upload file</label>
                                    <div class="relative">
                                        <input name="foto_surat_pengantar"
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_swafoto_help" id="input_swafoto" type="file"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn border-none mb-20 w-[50%] text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center m-auto flex">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>
