<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Permohonan</title>
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
            <form class="relative w-full m-5 lg:m-10 p-6 z-10 text-black">
                <div
                    class="font-bold text-2xl lg:text-4xl mb-5 lg:mb-10 mt-10 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Status Permohonan
                </div>
                <div class="max-w-full mb-5 lg:mb-10">
                    Silahkan cek status permohonan dokumen anda dibawah ini.
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <table class="min-w-full">
                            <thead class="text-xs text-white uppercase bg-[#2B2A4C]">
                                <tr>
                                    <th scope="col" class="px-6 py-3">No</th>
                                    <th scope="col" class="px-6 py-3">No Permohonan</th>
                                    <th scope="col" class="px-6 py-3">Nama Pemohon</th>
                                    <th scope="col" class="px-6 py-3">Tanggal Permohonan</th>
                                    <th scope="col" class="px-6 py-3">Jenis Surat</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paginatedData as $data)
                                <tr class="bg-[#DDDBDB] border-b text-black">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">{{ $loop->iteration }}
                                    </th>
                                    <td class="px-6 py-4">{{ $data->id }}</td>
                                    <td class="px-6 py-4">{{ auth()->user()->name }}</td>
                                    @php
                                        $date = date('d-m-Y', strtotime($data->created_at));
                                    @endphp
                                    <td class="px-6 py-4">{{ $date }}</td>
                                    <td class="px-6 py-4">{{ $data->jenis }}</td>
                                    <td class="px-6 py-4">
                                        @if($data['status'] == 'SELESAI')
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">SELESAI</span>
                                        @elseif($data['status'] == 'Perlu Tindakan')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">DIPROSES</span>
                                        @else
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">DITOLAK</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 flex gap-2">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.66602 9.99996C1.66602 9.99996 4.16602 4.16663 9.99935 4.16663C15.8327 4.16663 18.3327 9.99996 18.3327 9.99996C18.3327 9.99996 15.8327 15.8333 9.99935 15.8333C4.16602 15.8333 1.66602 9.99996 1.66602 9.99996Z"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <button>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_6_1521)">
                                                    <path d="M5 7.49996V1.66663H15V7.49996" stroke="black"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M4.99935 15H3.33268C2.89065 15 2.46673 14.8244 2.15417 14.5118C1.84161 14.1993 1.66602 13.7754 1.66602 13.3333V9.16667C1.66602 8.72464 1.84161 8.30072 2.15417 7.98816C2.46673 7.6756 2.89065 7.5 3.33268 7.5H16.666C17.108 7.5 17.532 7.6756 17.8445 7.98816C18.1571 8.30072 18.3327 8.72464 18.3327 9.16667V13.3333C18.3327 13.7754 18.1571 14.1993 17.8445 14.5118C17.532 14.8244 17.108 15 16.666 15H14.9993"
                                                        stroke="black" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M15 11.6666H5V18.3333H15V11.6666Z" stroke="black"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6_1521">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </table>
                </div>
            </form>
            @if ($paginatedData->lastPage() > 1)
            <x-pagination-admin :pages="$paginatedData->lastPage()" :current="$paginatedData->currentPage()" />
            @endif
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>