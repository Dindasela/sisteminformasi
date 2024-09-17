<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin </title>
    <link rel="icon" type="image/x-icon" href="/assets/">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
</head>

<body>
    <x-nav-admin />
    <x-sidebar-admin />
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Pelaporan</h1>
        {{-- <div>
            <a href="/laporan-masuk" class="bg-[#B2ACAC] w-32 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" /></svg>
                <span class="pl-3 font-bold flex-1 whitespace-nowrap">Kembali</span>
            </a>
        </div> --}}

        <!-- Form Section -->
        <div class="mt-2 mb-4 mx-auto bg-gray-200 rounded-md w-[95%]">
            <div class="bg-[#2B2A4C] p-2 text-white flex justify-between items-center">
                <h2 class="ml-6 font-semibold">Tampilan Laporan</h2>
                <form action="{{route('download-laporan',$laporan->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button class="mr-6 bg-white text-[#2B2A4C] px-2 py-1 rounded-md text-sm">Cetak</button>
                </form>
            </div>
            <div class="mt-2 bg-[#F5F3F3]">
                <h3 class="text-center font-semibold mb-2">Pilih Klasifikasi Laporan</h3>
                <div class="flex justify-center mb-2 space-x-16">
                    <label class="py-1 flex items-center border border-gray-600 rounded-md">
                        <input type="radio" name="jenis" value="Aspirasi" class="ml-2 form-radio text-[#2B2A4C]" {{$laporan->jenis == 'Aspirasi' ? 'checked' : ''}}>
                        <span class="ml-2 mr-2 text-sm">Aspirasi</span>
                    </label>
                    <label class="py-1 flex items-center border border-gray-600 rounded-md">
                        <input type="radio" name="jenis" value="Pelanggaran" class="ml-2 form-radio text-[#2B2A4C]" {{$laporan->jenis == 'Pelaporan' ? 'checked' : ''}}>
                        <span class="ml-2 mr-2 text-sm">Pelaporan</span>
                    </label>
                    <label class="py-1 flex items-center border border-gray-600 rounded-md">
                        <input type="radio" name="jenis" value="Pengaduan" class="ml-2 form-radio text-[#2B2A4C]" {{$laporan->jenis == 'Pengaduan' ? 'checked' : ''}}>
                        <span class="ml-2 mr-2 text-sm">Pengaduan</span>
                    </label>
                </div>
                <div class="mx-auto w-[60%]">
                    <input type="text" placeholder="Ilham Suseno" value="{{$laporan->nama}}" class="mb-2 text-sm w-full px-3 py-1 border border-gray-600 rounded bg-[#F5F3F3]">
                    <textarea placeholder="Telah terjadi perampokan" class="mb-2 text-sm w-full px-3 py-1 border border-gray-600 rounded bg-[#F5F3F3]" rows="4">{{$laporan->deskripsi}}</textarea>
                    <input type="date" class="mb-2 text-sm w-full px-3 py-1 border border-gray-600 rounded bg-[#F5F3F3]" value="{{$laporan->tanggal}}">
                    <input type="text" placeholder="Majenang" class="mb-2 text-sm w-full px-3 py-1 border border-gray-600 rounded bg-[#F5F3F3]" value="{{$laporan->lokasi}}">
                    <div class="relative w-full">
                        <input type="text" value="{{$laporan->file}}" class="mb-2 text-sm w-full px-3 py-1 border border-gray-600 rounded bg-[#F5F3F3]" readonly>
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute inset-y-0 right-0 pr-4 pt-1 ">
                            <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#4B4646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 8L12 3L7 8" stroke="#4B4646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 3V15" stroke="#4B4646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
                <div class="flex justify-between mt-6 mx-auto w-[70%] pb-4">
                    <button class="bg-[#B2ACAC] text-white px-6 py-1 rounded hover:bg-gray-400">Hapus</button>
                    <button class="bg-[#FF0000] text-white px-6 py-1 rounded hover:bg-red-700">Selesai</button>
                </div>
            </div>
        </div>
    </div>
    <x-footer-admin />
</body>

</html>
