<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun </title>
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
        <h1 class="text-3xl font-bold pb-4">Daftar Akun</h1>
        {{-- <div class="">
            <a href="/daftar-akun" class="bg-[#2B2A4C] w-32 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" /></svg>
                <span class="pl-3 font-bold flex-1 whitespace-nowrap">Kembali</span>
            </a>
        </div> --}}
        <div class="flex mx-auto w-[60%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
            <div class="spaye-y-4">
                <div class="pb-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name=""
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Masukkan Email" value="{{ $data->email }}">
                </div>
                <div class="pb-2">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="username" id="username" name=""
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Masukkan Username" value="{{ $data->username }}">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name=""
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Masukkan Nama" value="{{ $data->name }}">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                    <input type="text" id="nik" name=""
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Masukkan NIK" value="{{ $data->nik }}">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Tinggal</label>
                    <input type="text" id="alamat" name=""
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Masukkan Alamat" value="{{ $data->address }}">
                </div>
                <div class="pb-2">
                    <label for="telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                    <input type="text" id="telepon" name=""
                        class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Masukkan Nomor Telepn" value="{{ $data->phone }}">
                </div>
            </div>
            <div class="">
                <div class="pb-4">
                    <label for="ktp" class="block text-sm font-medium text-gray-700">Foto KTP</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="{{ asset('storage/'.$data->ktp) }}" />
                    </div>
                </div>
                <div class="">
                    <label for="swafoto" class="block text-sm font-medium text-gray-700">Swafoto</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="{{ asset('storage/'.$data->ktp) }}" />
                    </div>
                </div>
            </div>
        </div>
        <x-footer-admin />
</body>

</html>
