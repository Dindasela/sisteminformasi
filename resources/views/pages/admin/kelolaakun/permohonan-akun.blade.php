<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Akun </title>
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
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Permohonan Akun</h1>
        <x-search-admin />
        <div class="flex items-center space-x-4 mt-4 w-96">
            <label class="py-1 flex items-center border border-red-600 rounded-md rounded-md pl-2 w-[50%]">
                <input type="radio" name="status" value="Terlaksana" class="form-radio text-red-600 bg-white">
                <span class="ml-6 text-sm text-red-600 font-light">DItolak</span>
            </label>
            <label class="py-1 flex items-center border border-gray-600 rounded-md rounded-md pl-2 w-[50%]">
                <input type="radio" name="status" value="Belum Terlaksana"
                    class="form-radio text-indigo-600 bg-white">
                <span class="ml-6 text-sm text-gray-600 font-light">Perlu Tindakan</span>
            </label>
        </div>
        <div class="flex pb-2">
            {{-- <div class="">
                <a href="/informasi" class="bg-[#2B2A4C] w-32 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7" />
                        <path d="M19 12H5" /></svg>
                    <span class="pl-3 font-bold flex-1 whitespace-nowrap">Kembali</span>
                </a>
            </div>
            <div class="absolute top-30 right-5 flex justify-between items-center rounded-md">
                <a href="tambah-berita" class="bg-[#2B2A4C] w-44 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" /></svg>
                    <span class="pl-3 font-bold flex-1 whitespace-nowrap">Tambah Berita</span>
                </a>
            </div> --}}
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-[#2B2A4C] text-white ">
                    <tr class="border-2">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $index => $item)
                        <tr class="border-2 bg-[#DDDBDB] ">
                            <th class="px-6 py-4 ">
                                {{ $index + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->email }}
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <ul
                                        class="flex items-center justify-center {{ $item->settings->status == 'Perlu Tindakan' ? 'bg-[#B5B5B5]' : 'bg-[#D72323]' }} text-black rounded-xl w-28">
                                        <li>Perlu Tindakan</li>
                                    </ul>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <a href="/lihat-permohonan-akun" class="mr-2">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <x-pop-up-hapus />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr class="border-2 bg-[#DDDBDB] ">
                        <th class="px-6 py-4 ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Dinda Sela
                        </td>
                        <td class="px-6 py-4">
                            dindasela@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <ul class="flex items-center justify-center bg-[#D72323] text-black rounded-xl w-24">
                                    <li>Ditolak</li>
                                </ul>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>

    </div>
    <x-footer-admin />
</body>

</html>
