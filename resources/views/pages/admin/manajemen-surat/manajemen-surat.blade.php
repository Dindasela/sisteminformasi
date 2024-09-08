<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Surat</title>
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
        <h1 class="text-3xl font-bold pb-4">Pengajuan Dokumen</h1>
        <x-search-admin />
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-white bg-[#2B2A4C]">
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
                            Jenis Surat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
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
                            {{ $item->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->jenis }}
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <ul class="flex items-center justify-center {{ $item->status == 'Perlu Tindakan' ? 'bg-[#B5B5B5]' : 'bg-[#D72323]' }} text-black rounded-xl w-28">
                                    <li>Perlu Tindakan</li>
                                </ul>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if ($item->jenis == 'SKD')
                            <a href="/surat-keterangan-domisili/{{$item->id}}" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKDU')
                            <a href="/surat-keterangan-domisili-usaha" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKK')
                            <a href="/surat-keterangan-kematian" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKTM')
                            <a href="/surat-keterangan-tidak-mampu" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SK')
                            <a href="/surat-keterangan" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKSM')
                            <a href="/surat-keterangan-sudah-menikah" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKBD')
                            <a href="/surat-keterangan-bersih-diri" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKU')
                            <a href="/surat-keterangan-usaha" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKP')
                            <a href="/surat-keterangan-pindah" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKPOT')
                            <a href="/surat-keterangan-penghasilan" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKBM')
                            <a href="/surat-keterangan-belum-menikah" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKKL')
                            <a href="/surat-keterangan-kelahiran" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @elseif ($item->jenis == 'SKPSKCK')
                            <a href="/surat-keterangan-skck" class="">
                                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <x-footer-admin />
</body>

</html>
