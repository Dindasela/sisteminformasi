<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan</title>
    <link rel="icon" type="image/x-icon" href="/image/icon-logo.ico">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <x-nav-user />
    <section id="cover" class="relative items-center justify-center lg:pb-16">
        <div class="relative w-full p-5 lg:p-20 rounded-lg z-10 text-black lg:mt-10 mb-20 lg:mb-0">
            <div class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                Pelaporan
            </div>
            <div class="bg-[#2B2A4C] text-white p-5 font-bold">
                Sampaikan Laporan Anda
            </div>
            <form action="{{route('layanan-form-pelaporan.post')}}" method="POST" enctype="multipart/form-data" class="bg-[#F5F3F3] text-[#4B4646] p-10">
                @csrf
                <script>
                    function uncheckOthers(selectedId) {
                        const radios = document.querySelectorAll('input[type="radio"][name="pilihan"]');
                        radios.forEach(radio => {
                            if (radio.id !== selectedId) {
                                radio.checked = false;
                            }
                        });
                    }
                </script>
                <div class="grid grid-cols-1 gap-2 lg:gap-4 m-auto w-full lg:w-1/2 justify-center mt-5 lg:mt-10">
                    <select id="" name="jenis" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="Aspirasi">Aspirasi</option>
                        <option value="Pelaporan">Pelaporan</option>
                        <option value="Pengaduan">Pengaduan</option>
                    </select>
                </div>
                <div class="grid grid-cols-1 gap-2 lg:gap-4 m-auto w-full lg:w-1/2 justify-center mt-5 lg:mt-10">
                    <input type="text" id="nama" name="nama" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama" required />
                    <textarea id="isilaporan" name="deskripsi" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Isi Laporan*" required></textarea>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 end-0 flex items-center ps-3 pointer-events-none pr-5">
                            <svg class="w-4 h-4 text-gray-500 right-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input id="datepicker-format" name="tanggal" type="date" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Select date">
                    </div>
                    <input type="text" id="lokasiKejadian" name="lokasi" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Lokasi Kejadian*" required />
                    <div class="flex">
                        <input type="file" id="gambar" class="hidden" accept="image/*" name="file" onchange="handleFileChange(this)">
                        <label for="gambar" class="btn cursor-pointer bg-[#D72323] text-white rounded-lg py-2 px-4 hover:bg-[#D72323]">
                            Upload Gambar
                        </label>
                        <div id="nama-file" class="ml-3 text-gray-700"></div>
                        <script>
                            function handleFileChange(input) {
                                const file = input.files[0];
                                const fileName = file.name;
                                document.getElementById('nama-file').textContent = fileName;
                            }

                        </script>
                    </div>
                    <div class="text-gray-700">Gambar : png,jpg,jpeg</div>
                    <div class="flex justify-between">
                        <div class="flex justify-center m-auto">
                            <a href="/layanan-pelaporan" class="btn border-none bg-[#B2ACAC] text-white">Kembali</a>
                        </div>
                        <div class="flex justify-center m-auto">
                            <button  type="submit" class="btn border-none bg-[#2B2A4C] text-white">Lapor
                                !</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <x-footer-user />
</body>

</html>
