<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
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
            <form class="relative w-full m-5 lg:m-10 p-6 z-10 text-black">
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
                        <input type="search" id="default-search"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search" required />
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="mb-4 flex items-center">
                        <label for="entries" class="mr-2 text-gray-700">Show</label>
                        <select id="entries"
                            class="border border-gray-300 rounded py-1 px-2 text-gray-700 focus:outline-none focus:ring focus:ring-indigo-300">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="ml-2 text-gray-700">entries</span>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        @php
                        $dummyData = [
                        ['tanggal' => '01-01-2024',
                        'nama_kegiatan' => 'Sosialisasi Stunting',
                        'tempat_kegiatan' =>'Kantor Kelurahan',
                        'dekripsi_singkat' => 'Kegiatan Penyuluhan Stunting yang diikuti ibu-ibu',
                        'keterangan' => 'Terlaksana'],
                        ['tanggal' => '01-01-2024',
                        'nama_kegiatan' => 'Sosialisasi Stunting',
                        'tempat_kegiatan' =>'Kantor Kelurahan',
                        'dekripsi_singkat' => 'Kegiatan Penyuluhan Stunting yang diikuti ibu-ibu',
                        'keterangan' => 'Terlaksana'],
                        ];
                        @endphp
                        <table class="min-w-full">
                            <thead class="text-xs text-white uppercase bg-[#2B2A4C]">
                                <tr>
                                    <th scope="col" class="px-6 py-3">tanggal</th>
                                    <th scope="col" class="px-6 py-3">Nama Kegiatan</th>
                                    <th scope="col" class="px-6 py-3">Tempat Pelaksanaan</th>
                                    <th scope="col" class="px-6 py-3">Deskripsi Singkat</th>
                                    <th scope="col" class="px-6 py-3">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dummyData as $data)
                                <tr class="bg-[#DDDBDB] border-b text-black text-center">
                                    <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">{{ $data['tanggal']
                                        }}
                                    </td>
                                    <td class="px-6 py-4">{{ $data['nama_kegiatan'] }}</td>
                                    <td class="px-6 py-4">{{ $data['tempat_kegiatan'] }}</td>
                                    <td class="px-6 py-4">{{ $data['dekripsi_singkat'] }}</td>
                                    <td class="px-6 py-4">
                                        @if($data['keterangan'] == 'Terlaksana')
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Terlaksana</span>
                                        @elseif($data['keterangan'] == 'Belum Terlaksana')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Belum
                                            Terlaksana</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </table>
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>