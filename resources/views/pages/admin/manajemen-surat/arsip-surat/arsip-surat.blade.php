<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
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
        <h1 class="text-3xl font-bold pb-4">Arsip Surat</h1>
        <div class="flex pb-2">
            <x-search-admin />
            <div class="absolute top-30 right-5 flex justify-between items-center rounded-md">
                <a href="/tambah-surat-masuk"
                    class="bg-[#2B2A4C] w-44 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-plus">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                    <span class="pl-3 font-bold flex-1 whitespace-nowrap">Tambah Arsip</span>
                </a>
            </div>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-[#2B2A4C] text-white ">
                    <tr class="border-2">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Surat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Surat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $item)
                        <tr class="border-2 bg-[#DDDBDB] ">
                            <th class="px-6 py-4 ">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                @if ($item->kategori == 'Surat Masuk')
                                    @php
                                        $date = Carbon\Carbon::parse($item->tanggal_terima);
                                    @endphp
                                    {{ $date->format('Y-m-d') }}
                                @else
                                    @php
                                        $date = Carbon\Carbon::parse($item->tanggal_diterima);
                                    @endphp
                                    {{ $date->format('Y-m-d') }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->nomor_surat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->kategori }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($item->kategori == 'Surat Masuk')
                                    {{ $item->jenis_surat }}
                                @else
                                    {{ $item->jenis_dokumen }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    @if ($item->kategori == 'Surat Masuk')
                                        <a href="{{ route('lihat-arsip-surat-masuk', ['id' => $item->id]) }}"
                                            class="mr-2">
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
                                    @else
                                        <a href="{{ route('lihat-arsip-surat-keluar', ['id' => $item->id, 'jenis' => $item->jenis]) }}"
                                            class="mr-2">
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
                                    @endif
                                    <x-pop-up-hapus action="{{ route('akun.destroy', ['id' => 1]) }}" />
                                    <a href="#" class="mr-2">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 7.50033V1.66699H15.5V7.50033" stroke="black" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M5.50002 15H3.83335C3.39133 15 2.9674 14.8244 2.65484 14.5118C2.34228 14.1993 2.16669 13.7754 2.16669 13.3333V9.16667C2.16669 8.72464 2.34228 8.30072 2.65484 7.98816C2.9674 7.6756 3.39133 7.5 3.83335 7.5H17.1667C17.6087 7.5 18.0326 7.6756 18.3452 7.98816C18.6578 8.30072 18.8334 8.72464 18.8334 9.16667V13.3333C18.8334 13.7754 18.6578 14.1993 18.3452 14.5118C18.0326 14.8244 17.6087 15 17.1667 15H15.5"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.5 11.667H5.5V18.3337H15.5V11.667Z" stroke="black"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <x-pagination-admin /> --}}
        </div>

    </div>
    <x-footer-admin />
</body>

</html>
