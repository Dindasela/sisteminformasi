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
        <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
            <div class="spaye-y-4">
                {{-- Data 1 --}}
                <h1 class="text-xl font-bold pb-4">Data Daerah Asal</h1>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nomor Kartu Keluarga</label>
                    <input type="text" id="text" name="" value="{{ $datas->no_kk_asal }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama Kepala Keluarga</label>
                    <input type="text" id="text" name="" value="{{ $datas->nama_kepala_keluarga }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Rumah</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->alamat_asal }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="flex gap-8 block w-full">
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">RT
                            <input type="text" id="text" name="" value="{{ $datas->rt_asal }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">RW
                            <input type="text" id="text" name="" value="{{ $datas->rw_asal }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Desa</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->desa_asal }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Kecamatan</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->kecamatan_asal }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Kabupaten/Kota</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->kabupaten_asal }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Provinsi</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->provinsi_asal }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="flex gap-8 block w-full">
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Kode POS
                            <input type="text" id="text" name="" value="{{ $datas->kode_pos_asal }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Telepon
                            <input type="text" id="text" name="" value="{{ $datas->telepon_asal }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                </div>

                {{-- Data 2 --}}
                <h1 class="text-xl font-bold pb-4 pt-4">Data Kepindahan</h1>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Alasan Pindah</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->alasan_pindah == 'Pekerjaan' ? 'selected' : '' }}>Pekerjaan</option>
                        <option {{ $datas->alasan_pindah == 'Pendudukan' ? 'selected' : '' }}>Pendudukan</option>
                        <option {{ $datas->alasan_pindah == 'Keamanan' ? 'selected' : '' }}>Keamanan</option>
                        <option {{ $datas->alasan_pindah == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                        <option {{ $datas->alasan_pindah == 'Perumahan' ? 'selected' : '' }}>Perumahan</option>
                        <option {{ $datas->alasan_pindah == 'Keluarga' ? 'selected' : '' }}>Keluarga</option>
                        <option {{ $datas->alasan_pindah == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Tujuan Pindah</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->alamat_tujuan_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="flex gap-8 block w-full">
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">RT
                            <input type="text" id="text" name="" value="{{ $datas->rt_pindah }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">RW
                            <input type="text" id="text" name="" value="{{ $datas->rw_pindah }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Desa</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->desa_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Kecamatan</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->kecamatan_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Kabupaten/Kota</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->kabupaten_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Provinsi</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->provinsi_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="flex gap-8 block w-full">
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Kode POS
                            <input type="text" id="text" name=""
                                value="{{ $datas->kode_pos_pindah }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Telepon
                            <input type="text" id="text" name=""
                                value="{{ $datas->telepon_pindah }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Klasifikasi Pindah</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->klasifikasi_pindah == 'Dalam Satu Desa/Kelurahan' ? 'selected' : '' }}>Dalam
                            Satu Desa/Kelurahan</option>
                        <option {{ $datas->klasifikasi_pindah == 'Antar desa/kelurahan' ? 'selected' : '' }}>Antar
                            Desa/Kelurahan</option>
                        <option {{ $datas->klasifikasi_pindah == 'Antar Kecamatan' ? 'selected' : '' }}>Antar Kecamatan
                        </option>
                        <option {{ $datas->klasifikasi_pindah == 'Antar Kab/Kota' ? 'selected' : '' }}>Antar
                            Kabupaten/Kota</option>
                        <option {{ $datas->klasifikasi_pindah == 'Antar Provinsi' ? 'selected' : '' }}>Antar Provinsi
                        </option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Jenis Kepindahan</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->jenis_kepindahan == 'Kepindahan Keluarga' ? 'selected' : '' }}>Kepindahan
                            Keluarga</option>
                        <option
                            {{ $datas->jenis_kepindahan == 'Kepindaan Kelurga dan Seluruh keluarga' ? 'selected' : '' }}>
                            Kepindahan Keluarga dan Seluruh Anggota Keluarga</option>
                        <option
                            {{ $datas->jenis_kepindahan == 'Kepindaan Kelurga dan Sebagian keluarga' ? 'selected' : '' }}>
                            Kepindahan Keluarga dan Sebagian Anggota Keluarga</option>
                        <option {{ $datas->jenis_kepindahan == 'Anggota Keluarga' ? 'selected' : '' }}>Anggota Keluarga
                        </option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Status No KK Bagi yang Tidak
                        Pindah</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->status_kk_tidak_pindah == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala
                            Keluarga</option>
                        <option
                            {{ $datas->status_kk_tidak_pindah == 'Kepindaan Kelurga dan Seluruh keluarga' ? 'selected' : '' }}>
                            Kepindahan Keluarga dan Seluruh Anggota Keluarga</option>
                        <option
                            {{ $datas->status_kk_tidak_pindah == 'Kepindaan Kelurga dan Sebagian keluarga' ? 'selected' : '' }}>
                            Kepindahan Keluarga dan Sebagian Anggota Keluarga</option>
                        <option {{ $datas->status_kk_tidak_pindah == 'Anggota Keluarga' ? 'selected' : '' }}>Anggota
                            Keluarga</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Status No KK Bagi yang
                        Pindah</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->status_kk_pindah == 'Numpang KK' ? 'selected' : '' }}>Numpang KK</option>
                        <option {{ $datas->status_kk_pindah == 'Membuat KK Baru' ? 'selected' : '' }}>Membuat KK Baru
                        </option>
                        <option
                            {{ $datas->status_kk_pindah == 'Nama Kepala Keluarga dan Nomor KK Tetap' ? 'selected' : '' }}>
                            Nama Kepala Keluarga dan Nomor KK Tetap</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Rencana Tanggal
                        Pindah</label>
                    <input type="date" id="tanggal" name=""
                        value="{{ $datas->rencana_tanggal_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Jumlah Keluarga Yang
                        Pindah</label>
                    <input type="text" id="alamat" name=""
                        value="{{ $datas->jumlah_keluarga_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->nama_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">NIK</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->nik_pindah }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">SHDK</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->shdck_pindah == 'Kepala Keluarga' ? 'selected' : '' }}>01 Kepala Keluarga
                        </option>
                        <option {{ $datas->shdck_pindah == 'Suami' ? 'selected' : '' }}>02 Suami</option>
                        <option {{ $datas->shdck_pindah == 'Istri' ? 'selected' : '' }}>03 Istri</option>
                        <option {{ $datas->shdck_pindah == 'Anak' ? 'selected' : '' }}>04 Anak</option>
                        <option {{ $datas->shdck_pindah == 'Menantu' ? 'selected' : '' }}>05 Menantu</option>
                        <option {{ $datas->shdck_pindah == 'Cucu' ? 'selected' : '' }}>06 Cucu</option>
                        <option {{ $datas->shdck_pindah == 'Orang Tua' ? 'selected' : '' }}>07 Orang Tua</option>
                        <option {{ $datas->shdck_pindah == 'Mertua' ? 'selected' : '' }}>08 Mertua</option>
                        <option {{ $datas->shdck_pindah == 'Family Lainnya' ? 'selected' : '' }}>09 Family Lainnya
                        </option>
                        <option {{ $datas->shdck_pindah == 'Pembantu' ? 'selected' : '' }}>10 Pembantu</option>
                    </select>
                </div>
                {{-- Data 3 --}}
                <h1 class="text-xl font-bold pb-4 pt-4">Data Daerah Tujuan</h1>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">No KK</label>
                    <input type="text" id="text" name="" value="{{ $datas->no_kk_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama Kepala Keluarga</label>
                    <input type="text" id="text" name=""
                        value="{{ $datas->nama_kepala_keluarga_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">NIK Kepala Keluarga</label>
                    <input type="text" id="text" name=""
                        value="{{ $datas->nik_kepala_keluarga_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Status No KK Bagi yang Tidak
                        Pindah</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option
                            {{ $datas->status_kk_tujuan_yang_tidak_pindah == 'Kepala Keluarga' ? 'selected' : '' }}>
                            Kepala Keluarga</option>
                        <option
                            {{ $datas->status_kk_tujuan_yang_tidak_pindah == 'Kepindaan Kelurga dan Seluruh Anggota keluarga' ? 'selected' : '' }}>
                            Kepindahan Keluarga dan Seluruh Anggota Keluarga</option>
                        <option
                            {{ $datas->status_kk_tujuan_yang_tidak_pindah == 'Kepindaan Kelurga dan Sebagian Anggota keluarga' ? 'selected' : '' }}>
                            Kepindahan Keluarga dan Sebagian Anggota Keluarga</option>
                        <option
                            {{ $datas->status_kk_tujuan_yang_tidak_pindah == 'Anggota Keluarga' ? 'selected' : '' }}>
                            Anggota Keluarga</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Kedatangan</label>
                    <input type="date" id="tanggal" name="" value="{{ $datas->tanggal_kedatangan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Alamat Rumah
                        <input type="text" id="text" name=""
                            value="{{ $datas->alamat_rumah_tujuan }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                </div>
                <div class="flex gap-8 block w-full">
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">RT
                            <input type="text" id="text" name="" value="{{ $datas->rt_tujuan }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">RW
                            <input type="text" id="text" name="" value="{{ $datas->rw_tujuan }}"
                                class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="">
                    </div>
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Desa</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->desa_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Kecamatan</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->kecamatan_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Kabupaten/Kota</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->kabupaten_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Provinsi</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->provinsi_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Jumlah Keluarga Yang
                        Pindah</label>
                    <input type="text" id="alamat" name=""
                        value="{{ $datas->jumlah_keluarga_pindah_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->nama_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">NIK</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->nik_tujuan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">SHDK</label>
                    <select id="text"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->shdck_tujuan == 'Kepala Keluarga' ? 'selected' : '' }}>01 Kepala Keluarga
                        </option>
                        <option {{ $datas->shdck_tujuan == 'Suami' ? 'selected' : '' }}>02 Suami</option>
                        <option {{ $datas->shdck_tujuan == 'Istri' ? 'selected' : '' }}>03 Istri</option>
                        <option {{ $datas->shdck_tujuan == 'Anak' ? 'selected' : '' }}>04 Anak</option>
                        <option {{ $datas->shdck_tujuan == 'Menantu' ? 'selected' : '' }}>05 Menantu</option>
                        <option {{ $datas->shdck_tujuan == 'Cucu' ? 'selected' : '' }}>06 Cucu</option>
                        <option {{ $datas->shdck_tujuan == 'Orang Tua' ? 'selected' : '' }}>07 Orang Tua</option>
                        <option {{ $datas->shdck_tujuan == 'Mertua' ? 'selected' : '' }}>08 Mertua</option>
                        <option {{ $datas->shdck_tujuan == 'Family Lainnya' ? 'selected' : '' }}>09 Family Lainnya
                        </option>
                        <option {{ $datas->shdck_tujuan == 'Pembantu' ? 'selected' : '' }}>10 Pembantu</option>
                    </select>
                </div>
                <h1 class="text-xl font-bold pb-4">Data Diri</h1>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                    <input type="text" id="text" name="" value="{{ $datas->nama }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>

                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Tempat Lahir
                        <input type="text" id="text" name="" value="{{ $datas->tempat_lahir }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Lahir</label>
                    <input type="date" id="tanggal" name="" value="{{ $datas->tanggal_lahir }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Jenis Kelamin</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->jenis_kelamin == 'Wanita' ? 'selected' : '' }}>Perempuan</option>
                        <option {{ $datas->jenis_kelamin == 'Pria' ? 'selected' : '' }}>Laki-Laki </option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                    <input type="text" id="nama" name="" value="{{ $datas->pekerjaan }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option {{ $datas->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen </option>
                        <option {{ $datas->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option {{ $datas->agama == 'Buddha' ? 'selected' : '' }}>Budhha</option>
                        <option {{ $datas->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>


            </div>

            {{-- Upload Berkas --}}
            <div class="">
                <div class="pb-4">
                    <label for="ktp" class="block text-sm font-normal text-gray-700">Foto KTP</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->foto_ktp) }}" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="swafoto" class="block text-sm font-normal text-gray-700">Unggah KK</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->foto_kk) }}" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="swafoto" class="block text-sm font-normal text-gray-700">Surat Pengantar RT</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover"
                            src="{{ asset('storage/' . $datas->foto_surat_pengantar) }}" />
                    </div>
                </div>
                @if ($datas->status != 'Ditolak')
                    <div class="flex justify-between mt-6 mx-auto w-[100%] pb-4">
                        <x-pop-up-tolak />
                        <form action="{{ route('verif.skp', $datas->id) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-[#D72323] text-white px-6 py-1 rounded-md hover:bg-red-700">
                                Terima
                            </button>
                        </form>
                    </div>
                @endif
                @if ($datas->status == 'Ditolak')
                    <div class="flex justify-between mt-6 mx-auto w-[100%] pb-4">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Alasan
                            Ditolak</label>
                        <input type="text" disabled id="alamat" name=""
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="" value="{{ $datas->alasan_ditolak }}">
                    </div>
                @endif
            </div>
        </div>
        <x-footer-admin />
</body>

<script>
    document.getElementById('submit-reject').addEventListener('click', function() {
        // Ambil nilai dari textarea
        let alasan = document.getElementById('isiAlasan').value;

        // Buat form
        let form = document.createElement('form');
        form.method = 'POST';
        form.action =
        '{{ route('reject.skp', $datas->id) }}'; // Pastikan route ini sudah ada di routes/web.php

        // Tambahkan CSRF token ke dalam form
        let csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}'; // Laravel CSRF Token
        form.appendChild(csrfToken);

        // Tambahkan input untuk alasan
        let alasanInput = document.createElement('input');
        alasanInput.type = 'hidden';
        alasanInput.name = 'alasan_ditolak';
        alasanInput.value = alasan;
        form.appendChild(alasanInput);

        // Tambahkan form ke body dan submit
        document.body.appendChild(form);
        form.submit();
    });
</script>

</html>
