<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Sudah Menikah</title>
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
    <div class="pb-20 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-2">Pengajuan Dokumen</h1>
        <h2 class="text-normal font-light pb-4">Surat Keterangan Sudah Menikah</h2>
        <form action="" method="">
            <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
                <div class="spaye-y-4">
                    {{-- Data 1 --}}
                    <h1 class="text-xl font-bold pb-4">Data Diri Istri</h1>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                        <input type="text" id="text" name="" value="{{$datas->nama_lengkap_istri}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Jenis Kelamin</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option {{$datas->jenis_kelamin_istri == 'Wanita' ? 'selected' : ''}}>Perempuan</option>
                            <option {{$datas->jenis_kelamin_istri == 'Pria' ? 'selected' : ''}}>Laki-Laki </option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Tempat Lahir
                            <input type="text" id="text" name="" value="{{$datas->tempat_lahir_istri}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="tanggal" name="" value="{{$datas->tanggal_lahir_istri}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option {{$datas->agama_istri == 'Islam' ? 'selected' : ''}}>Islam</option>
                            <option {{$datas->agama_istri == 'Kristen Protestan' ? 'selected' : ''}}>Kristen </option>
                            <option {{$datas->agama_istri == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                            <option {{$datas->agama_istri == 'Buddha' ? 'selected' : ''}}>Budhha</option>
                            <option {{$datas->agama_istri == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="status perkawinan" class="block text-sm font-normal text-gray-700">Status Perkawinan</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option {{$datas->status_perkawinan_istri == 'Kawin' ? 'selected' : ''}}>Kawin</option>
                            <option {{$datas->status_perkawinan_istri == 'Belum Kawin' ? 'selected' : ''}}>Belum Kawin</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                        <input type="text" id="nama" name="" value="{{$datas->pekerjaan_istri}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="" value="{{$datas->alamat_istri}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    {{-- Data 2 --}}
                    <h1 class="text-xl font-bold pb-4 pt-4">Data Diri Suami</h1>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Nama Lengkap</label>
                        <input type="text" id="text" name="" value="{{$datas->nama_lengkap_suami}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Jenis Kelamin</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option {{$datas->jenis_kelamin_suami == 'Wanita' ? 'selected' : ''}}>Perempuan</option>
                            <option {{$datas->jenis_kelamin_suami == 'Pria' ? 'selected' : ''}}>Laki-Laki </option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Tempat Lahir
                            <input type="text" id="text" name="" value="{{$datas->tempat_lahir_suami}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="tanggal" name="" value="{{$datas->tanggal_lahir_suami}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option {{$datas->agama_suami == 'Islam' ? 'selected' : ''}}>Islam</option>
                            <option {{$datas->agama_suami == 'Kristen Protestan' ? 'selected' : ''}}>Kristen </option>
                            <option {{$datas->agama_suami == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                            <option {{$datas->agama_suami == 'Buddha' ? 'selected' : ''}}>Budhha</option>
                            <option {{$datas->agama_suami == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nik" class="block text-sm font-normal text-gray-700">Status Perkawinan</label>
                        <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option {{$datas->status_perkawinan_suami == 'Kawin' ? 'selected' : ''}}>Kawin</option>
                            <option {{$datas->status_perkawinan_suami == 'Belum Kawin' ? 'selected' : ''}}>Belum Kawin</option>
                        </select>
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Pekerjaan</label>
                        <input type="text" id="nama" name="" value="{{$datas->pekerjaan_suami}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat</label>
                        <input type="text" id="alamat" name="" value="{{$datas->alamat_suami}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    {{-- Data 3 --}}
                    <h1 class="text-xl font-bold pb-4 pt-4">Data Pernikahan</h1>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Lokasi Pernikahan</label>
                        <input type="text" id="text" name="" value="{{$datas->lokasi_pernikahan}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                    <div class="pb-2">
                        <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Pernikahan</label>
                        <input type="date" id="tanggal" name="" value="{{$datas->tanggal_pernikahan}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="pb-2">
                        <label for="text" class="block text-sm font-normal text-gray-700">Jam
                            <input type="text" id="text" name="" value="{{$datas->jam}}" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                    </div>
                </div>
                {{-- Upload Berkas --}}
                <div class="">
                    <div class="pb-4">
                        <label for="ktp" class="block text-sm font-normal text-gray-700">Foto KTP</label>
                        <div class="w-full h-36 mt-2">
                            <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->foto_ktp) }}" />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="swafoto" class="block text-sm font-normal text-gray-700">Unggah KK</label>
                        <div class="w-full h-36 mt-2">
                            <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->foto_kk) }}" />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="swafoto" class="block text-sm font-normal text-gray-700">Surat Pengantar RT</label>
                        <div class="w-full h-36 mt-2">
                            <img class="mx-auto h-full object-cover" src="{{ asset('storage/' . $datas->foto_surat_pengantar_rt) }}" />
                        </div>
                    </div>
                    <div class="flex justify-between mt-6 mx-auto w-[100%] pb-4">
                        <x-pop-up-tolak />
                        <button class="bg-[#D72323] text-white px-6 py-1 rounded-md hover:bg-red-700">Terima</button>
                    </div>
                </div>
            </div>
        </form>
        <x-footer-admin />
</body>

</html>
