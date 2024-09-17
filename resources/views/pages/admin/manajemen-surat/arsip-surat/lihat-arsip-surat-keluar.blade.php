<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Arsip Surat Keluar</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
    <!-- Awal Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- Akhir Tailwind -->
    <!-- Awal Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Akhir Flowbite -->
</head>

<body>
    <x-nav-admin />
    <x-sidebar-admin />
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Arsip Surat</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 pb-16">
            <div class="flex items-center   ">
                <div class="w-full h-96 ">
                    <h1 class="text-xl font-light mb-4 text-center">Tampilan Dokumen</h1>
                    @if (request('jenis'))
                        <embed src="{{ asset('storage/Surat/' . request('jenis') . '/pdf/' . request('id') . '.pdf') }}"
                            type="" width="100%" height="600px">
                    @else
                        <img class="mx-auto h-full object-cover" src="image/preview.png" />
                    @endif
                </div>
            </div>
            <div class="overflow-x-auto ">
                <!-- Form Section -->
                <div class="bg-[#F5F3F3] pb-20 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-4 text-center">Arsip Surat Keluar</h2>
                    <div class="mx-auto w-[90%]">
                        <!-- Form Fields -->
                        <div class="space-y-2">
                            <div class="flex gap-24">
                                <label for="jenisSurat" class="flex items-center block text-sm font-medium text-gray-700 w-52">Jenis Surat</label>
                                <input type="text" id="jenisSurat" name="jenisSurat" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="" value="{{$data->jenis_dokumen}}">
                            </div>
                            <div class="flex gap-24">
                                <label for="pengirim" class="flex items-center block text-sm font-medium text-gray-700 w-52">Pengirim</label>
                                <input type="text" id="pengirim" name="pengirim" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="" value="{{$data->nama_pemohon}}">
                            </div>
                            <div class="flex gap-24">
                                <label for="nomorSurat" class="flex items-center block text-sm font-medium text-gray-700 w-52">Nomor Surat</label>
                                <input type="text" id="nomorSurat" name="nomorSurat" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="" value="{{$data->nomor_surat}}">
                            </div>
                            {{-- <div class="flex gap-24">
                                <label for="perihal" class="flex items-center block text-sm font-medium text-gray-700 w-52">Perihal</label>
                                <input type="text" id="perihal" name="perihal" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="" value="{{$data->perihal}}">
                            </div> --}}
                            {{-- <div class="flex gap-24">
                                <label for="tanggalSurat" class="flex items-center block text-sm font-medium text-gray-700 w-52">Tanggal Surat</label>
                                <input type="date" id="tanggalSurat" name="tanggalSurat" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                >
                            </div> --}}
                            <div class="flex gap-24">
                                @php
                                    $date = Carbon\Carbon::parse($data->tanggal_diterima);       
                                @endphp
                                <label for="tanggalTerima" class="flex items-center block text-sm font-medium text-gray-700 w-52">Tanggal Terima</label>
                                <input type="date" id="tanggalTerima" name="tanggalTerima" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{$date->format('Y-m-d')}}">
                            </div>
                            {{-- <div class="flex gap-24">
                                <label for="file" class="flex items-center block text-sm font-medium text-gray-700 w-52">File</label>
                                <div class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <input type="file" id="file" name="file" class="hidden">
                                    <label for="file" class="bg-[#E5E2E2] text-black px-4 py-1 rounded-md cursor-pointer hover:bg-gray-300">Choose File</label>
                                    <span id="file-chosen" class="p-2 text-gray-600">No file chosen</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="pt-4 float-right text-center">
                        <button type="submit" class="bg-[#2B2A4C] text-white px-4 py-1 rounded-md hover:bg-[#414066]">Selesai</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <x-footer-admin />

    <script>
        const fileInput = document.getElementById('file');
        const fileChosen = document.getElementById('file-chosen');

        fileInput.addEventListener('change', function() {
            fileChosen.textContent = this.files.length ? this.files[0].name : 'No file chosen';
        });

    </script>
</body>

</html>
