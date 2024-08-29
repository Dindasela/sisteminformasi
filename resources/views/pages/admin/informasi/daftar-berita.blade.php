<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita </title>
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
        <h1 class="text-3xl font-bold pb-4">Berita</h1>
        <div class="flex pb-2">
        <x-search-admin />
            <div class="absolute top-30 right-5 flex justify-between items-center rounded-md">
                <a href="tambah-berita" class="bg-[#2B2A4C] w-44 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" /></svg>
                    <span class="pl-3 font-bold flex-1 whitespace-nowrap">Tambah Berita</span>
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
                            Nama Berita
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-2 bg-[#DDDBDB] ">
                        <th class="px-6 py-4 ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            01/01/2023
                        </td>
                        <td class="px-6 py-4">
                            Dinda Sela
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <ul class="flex items-center justify-center bg-[#82FA6F] text-black rounded-xl w-24">
                                    <li>Tayang</li>
                                </ul>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <a href="#" class="mr-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="/edit-berita" class="mr-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6666 2.50037C14.8789 2.24956 15.1414 2.04542 15.4375 1.90094C15.7336 1.75646 16.0567 1.67481 16.3863 1.66121C16.716 1.64761 17.0448 1.70235 17.3519 1.82194C17.6591 1.94153 17.9378 2.12335 18.1702 2.3558C18.4027 2.58826 18.5838 2.86625 18.7021 3.17207C18.8203 3.47788 18.8732 3.80481 18.8571 4.13202C18.8411 4.45922 18.7566 4.77952 18.609 5.07251C18.4615 5.36549 18.254 5.62473 18 5.8337L6.74996 17.0837L2.16663 18.3337L3.41663 13.7504L14.6666 2.50037Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13 4.16699L16.3333 7.50033" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                                <a href="#" class="mr-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 5H18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.3334 5V16.6667C16.3334 17.5 15.5 18.3333 14.6667 18.3333H6.33335C5.50002 18.3333 4.66669 17.5 4.66669 16.6667V5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.16669 5.00033V3.33366C7.16669 2.50033 8.00002 1.66699 8.83335 1.66699H12.1667C13 1.66699 13.8334 2.50033 13.8334 3.33366V5.00033" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.83331 9.16699V14.167" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.1667 9.16699V14.167" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-2 bg-[#DDDBDB] ">
                        <th class="px-6 py-4 ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            01/01/2023
                        </td>
                        <td class="px-6 py-4">
                            Dinda Sela
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <ul class="flex items-center justify-center bg-[#FCFF8F] text-black rounded-xl w-24">
                                    <li>Diarsipkan</li>
                                </ul>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <x-footer-admin />
</body>

</html>
