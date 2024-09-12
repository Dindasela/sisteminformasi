<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan</title>
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
        <h2 class="text-normal font-light pb-4">Surat Keterangan</h2>
            <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
                <div class="spaye-y-4">
                    <h1 class="text-xl font-bold pb-4">Data Diri</h1>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                        <input type="text" id="text" name="" value="{{ $datas->nama_lengkap }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
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
                        <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                        <input type="text" id="nama" name="" value="{{ $datas->pekerjaan }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat</label>
                        <input type="text" id="alamat" name="" value="{{ $datas->alamat }}"
                            class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="">
                    </div>
                    <div class="pb-2">
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
                            <img
                                class="mx-auto h-full object-cover"src="{{ asset('storage/' . $datas->foto_surat_pengantar) }}" />
                        </div>
                    </div>
                    @if ($datas->status != 'Ditolak')
                        <div class="flex justify-between mt-6 mx-auto w-[100%] pb-4">
                            <x-pop-up-tolak />
                            <form action="{{ route('verif.sk', $datas->id) }}" method="POST">
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
        form.action ='{{ route('reject.sk', $datas->id) }}'; // Pastikan route ini sudah ada di routes/web.php

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
