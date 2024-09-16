<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
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
    {{--
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center">
            <form class="relative w-full m-5 lg:m-20 p-6 z-10 text-black">
                <div
                    class="font-bold text-2xl lg:text-4xl mb-5 lg:mb-10 mt-10 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Pengumuman
                </div>
                <div class="max-w-md mb-10">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input id="default-search" name="search" type="search" {{ request()->query('search') }}
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search" />
                    </div>
                </div>
                <div class="relative overflow-x-auto mb-10 lg:mb-0">
                    <div class="mb-4 flex items-center">
                        <label for="entries" class="mr-2 text-gray-700">Show</label>
                        <select id="entries" name="entries" {{ request()->query('entries') }}
                            class="border border-gray-300 rounded py-1 px-2 text-gray-700 focus:outline-none focus:ring focus:ring-indigo-300">
                            <option value=10 @selected(request()->query('entries') == 10)>10</option>
                            <option value=25 @selected(request()->query('entries') == 25)>25</option>
                            <option value=50 @selected(request()->query('entries') == 50)>50</option>
                            <option value=100 @selected(request()->query('entries') == 100)>100</option>
                        </select>
                        <span class="ml-2 text-gray-700">entries</span>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-sm text-white bg-[#2B2A4C]">
                            <tr>
                                <th scope="col" class="px-6 py-3">tanggal</th>
                                <th scope="col" class="px-6 py-3">Nama Kegiatan</th>
                                <th scope="col" class="px-6 py-3">Tempat Pelaksanaan</th>
                                <th scope="col" class="px-6 py-3">Deskripsi Singkat</th>
                                <th scope="col" class="px-6 py-3">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach ($data as $item)
                                <tr class="bg-[#DDDBDB] border-b text-black text-center">
                                    <td scope="row" class="px-6 py-4">{{ $item->date }}
                                    </td>
                                    <td class="px-6 py-4">{{ $item->title }}</td>
                                    <td class="px-6 py-4">{{ $item->place }}</td>
                                    <td class="px-6 py-4">{{ $item->description }}</td>
                                    <td class="px-6 py-4">
                                        @if ($item->status == 'Terlaksana')
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Terlaksana</span>
                                        @elseif($item->status == 'Belum Terlaksana')
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Belum
                                                Terlaksana</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($data->lastPage() > 1)
                        <x-pagination-admin :pages="$data->lastPage()" :current="$data->currentPage()" />
                    @endif
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>
