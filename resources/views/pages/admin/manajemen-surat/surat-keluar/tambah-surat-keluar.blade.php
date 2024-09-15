<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Surat Keluar</title>
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
        <h1 class="text-3xl font-bold pb-4">Surat Keluar</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 pb-16">
            <div class="flex items-center   ">
                <div class="w-full  object-cover ">
                    <h1 class="text-xl font-light mb-4 text-center">Tampilan Dokumen</h1>
                    <img class="mx-auto h-full object-cover" src="image/preview.png" />
                </div>
            </div>
            <div class="overflow-x-auto ">
                <!-- Form Section -->
                <form action="{{ route('generate-qr.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-[#F5F3F3] pb-8 p-6 rounded-lg   ">
                        <h2 class="text-xl font-semibold text-center">Input Surat Keluar</h2>
                        <div class="mx-auto w-[90%]">
                            <!-- Form Fields -->
                            <div class="space-y-2">
                                <div class="flex gap-24">
                                    <label for="jenis_dokumen"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">Jenis
                                        Dokumen</label>
                                    <input type="text" id="jenis_dokumen" name="jenis_dokumen"
                                        class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="">
                                </div>
                                <div class="flex gap-24">
                                    <label for="nomor_surat"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">Nomor
                                        Surat</label>
                                    <input type="text" id="nomor_surat" name="nomor_surat"
                                        class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="">
                                </div>
                                <div class="flex gap-24">
                                    <label for="nama_pemohon"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">Nama
                                        Pemohon</label>
                                    <input type="text" id="nama_pemohon" name="nama_pemohon"
                                        class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="">
                                </div>
                                <div class="flex gap-24">
                                    <label for="nik"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">NIK</label>
                                    <input type="text" id="nik" name="nik"
                                        class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="">
                                </div>
                                <div class="flex gap-24">
                                    <label for="pembuat_pemohonan"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">Pembuat
                                        Dokumen</label>
                                    <input type="text" id="pembuat_pemohonan" name="pembuat_pemohonan"
                                        class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="">
                                </div>
                                <div class="flex gap-24">
                                    <label for="tanggal_diterima"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">Tanggal
                                        Terima</label>
                                    <input type="date" id="tanggal_diterima" name="tanggal_diterima"
                                        class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div class="flex">
                                    <label for="file"
                                        class="flex items-center block text-sm font-medium text-gray-700 w-52">Perlu TTD Lurah ?</label>
                                    <div class="mx-auto flex items-center space-x-4">
                                        <label
                                            class="py-1 flex items-center border border-gray-600 rounded-md rounded-md pl-2 w-[50%]">
                                            <input type="radio" name="file" value="Terlaksana"
                                                class="form-radio text-indigo-600 bg-[#F5F3F3]">
                                            <span class="ml-6 mr-6 text-sm text-gray-600 font-light w-18">Ya</span>
                                        </label>
                                        <label
                                            class="py-1 flex items-center border border-gray-600 rounded-md rounded-md pl-2 w-[50%]">
                                            <input type="radio" name="file" value="Belum Terlaksana"
                                                class="form-radio text-indigo-600 bg-[#F5F3F3]">
                                            <span class="ml-6 mr-6 text-sm text-gray-600 font-light w-8">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto justify-center flex">
                        {{-- <div class="pt-4 float-right text-center">
                            <button type="submit"
                                class="bg-[#2B2A4C] text-white px-4 py-1 rounded-md hover:bg-[#414066]">Selesai</button>
                        </div> --}}
                        <div class="pt-4 ">
                            <button type="submit"
                                class="bg-[#5B5B5B] text-white px-4 py-2 rounded-md hover:bg-[#414066]">Selesai dan Generate
                                QR</button>
                        </div>
                    </div>
                </form>
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
