<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Bersih Diri</title>
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
        <h2 class="text-normal font-light pb-4">Surat Keterangan Bersih Diri</h2>
        <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
            <div class="spaye-y-4">
                {{-- Data 1 --}}
                <h1 class="text-xl font-bold pb-4">Data Diri Bapak</h1>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                    <input type="text" id="text" name="" value="{{ $datas->nama_lengkap_bapak }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Umur
                        <input type="text" id="text" name="" value="{{ $datas->umur_bapak }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Warga Negara</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->warga_negara_bapak == 'WNI' ? 'selected' : '' }}>WNI</option>
                        <option {{ $datas->warga_negara_bapak == 'WNA' ? 'selected' : '' }}>WNA </option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->agama_bapak == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option {{ $datas->agama_bapak == 'Kristen Protestan' ? 'selected' : '' }}>Kristen </option>
                        <option {{ $datas->agama_bapak == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option {{ $datas->agama_bapak == 'Buddha' ? 'selected' : '' }}>Budhha</option>
                        <option {{ $datas->agama_bapak == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                    <input type="text" id="nama" name="" value="{{ $datas->pekerjaan_bapak }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->alamat_bapak }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                {{-- Data 2 --}}
                <h1 class="text-xl font-bold pb-4 pt-4">Data Diri Ibu</h1>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                    <input type="text" id="text" name="" value="{{ $datas->nama_lengkap_ibu }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Umur
                        <input type="text" id="text" name="" value="{{ $datas->umur_ibu }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Warga Negara</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->warga_negara_ibu == 'WNI' ? 'selected' : '' }}>WNI</option>
                        <option {{ $datas->warga_negara_ibu == 'WNA' ? 'selected' : '' }}>WNA </option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->agama_ibu == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option {{ $datas->agama_ibu == 'Kristen Protestan' ? 'selected' : '' }}>Kristen </option>
                        <option {{ $datas->agama_ibu == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option {{ $datas->agama_ibu == 'Buddha' ? 'selected' : '' }}>Budhha</option>
                        <option {{ $datas->agama_ibu == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                    <input type="text" id="nama" name="" value="{{ $datas->pekerjaan_ibu }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->alamat_ibu }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                {{-- Data 3 --}}
                <h1 class="text-xl font-bold pb-4 pt-4">Data Diri Anak</h1>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                    <input type="text" id="text" name="" value="{{ $datas->nama_lengkap_anak }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="text" class="block text-sm font-normal text-gray-700">Umur
                        <input type="text" id="text" name="" value="{{ $datas->umur_anak }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Warga Negara</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->warga_negara_anak == 'WNI' ? 'selected' : '' }}>WNI</option>
                        <option {{ $datas->warga_negara_anak == 'WNA' ? 'selected' : '' }}>WNA </option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                    <select id="countries"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option {{ $datas->agama_anak == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option {{ $datas->agama_anak == 'Kristen Protestan' ? 'selected' : '' }}>Kristen </option>
                        <option {{ $datas->agama_anak == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option {{ $datas->agama_anak == 'Buddha' ? 'selected' : '' }}>Budhha</option>
                        <option {{ $datas->agama_anak == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                    <input type="text" id="nama" name="" value="{{ $datas->pekerjaan_anak }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="" value="{{ $datas->alamat_anak }}"
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="">
                </div>
                <div class="pb-2 pt-8">
                    <label for="text" class="block text-sm font-normal text-gray-700">Keperluan
                        <input type="text" id="text" name="" value="{{ $datas->keperluan }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                </div>
            </div>
            {{-- Upload Berkas --}}
            <div class="">
                <div class="pb-4">
                    <label for="ktp" class="block text-sm font-normal text-gray-700">Foto KTP</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->ktp) }}" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="swafoto" class="block text-sm font-normal text-gray-700">Unggah KK</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->kk) }}" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="swafoto" class="block text-sm font-normal text-gray-700">Surat Pengantar
                        RT</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover"
                            src="{{ asset('storage/' . $datas->surat_pengantar_rt) }}" />
                    </div>
                </div>
                @if ($datas->status != 'Ditolak')
                    <div class="flex justify-between mt-6 mx-auto w-[100%] pb-4">
                        <x-pop-up-tolak />
                        <form action="{{ route('verif.skbd', $datas->id) }}" method="POST">
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
        '{{ route('reject.skbd', $datas->id) }}'; // Pastikan route ini sudah ada di routes/web.php

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
