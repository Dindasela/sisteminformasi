<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #input_ktp::-webkit-file-upload-button {
            visibility: hidden;
        }

        #input_ktp::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }

        #input_swafoto::-webkit-file-upload-button {
            visibility: hidden;
        }

        #input_swafoto::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
    </style>
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center">
            <form class="relative w-[350px] lg:w-[800px] p-6 z-10 text-black">
                <div class="mt-20 mb-20">
                    <div class="text-center mb-5">
                        <div class="text-xl font-bold">Daftar</div>
                        <div class="text-sm">Masukkan Data Diri Yang Sesuai</div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
                        <div class="text-black text-left">
                            <div class="mb-2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" id="email" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="abcdef@gmail.com" required />
                            </div>
                            <div class="mb-2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                                <input type="email" id="email" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="abcdef@gmail.com" required />
                            </div>
                            <div class="mb-2 relative">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Kata
                                    sandi</label>
                                <input type="password" id="password" placeholder="********" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 mt-6">
                                    <svg id="eye-open" class="h-5 w-5 text-gray-500 cursor-pointer" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.297 1.153-.764 2.213-1.377 3.137m-2.697 2.516A9.952 9.952 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.969 9.969 0 012.979-4.411m0 0A9.969 9.969 0 0112 5c4.477 0 8.268 2.943 9.542 7m-2.7 3.137A9.952 9.952 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.969 9.969 0 012.979-4.411M2.458 12a9.952 9.952 0 011.042-3.411" />
                                    </svg>
                                    <svg id="eye-closed" class="h-5 w-5 text-gray-500 cursor-pointer hidden" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7 .297-1.153.764-2.213 1.377-3.137m2.697-2.516A9.952 9.952 0 0112 5c4.477 0 8.268 2.943 9.542 7-.297 1.153-.764 2.213-1.377 3.137m-2.697 2.516A9.952 9.952 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.969 9.969 0 012.979-4.411M2.458 12a9.969 9.969 0 012.979-4.411M21 21l-4.35-4.35" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="namaLengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Lengkap</label>
                                <input type="text" id="namaLengkap" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="abcdef@gmail.com" required />
                            </div>
                            <div class="mb-2">
                                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                                <input type="number" id="nik" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="12345678" required />
                            </div>
                            <div class="mb-2">
                                <label for="alamatTinggal" class="block mb-2 text-sm font-medium text-gray-900">Alamat
                                    Tinggal</label>
                                <input type="text" id="alamatTinggal" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="abcdef@gmail.com" required />
                            </div>
                            <div class="mb-2">
                                <label for="nomorTelepon" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                                    Telepon</label>
                                <input type="number" id="nomorTelepon" name=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="12345678" required />
                            </div>
                        </div>
                        <div class="">
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Foto KTP</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian KTP berada dalam bingkai foto dan bukan fotokopi KTP
                                    </div>
                                    <div class="">
                                        <img class="h-[80px] w-[300px] rounded-lg" id="preview_ktp"
                                            src="./image/ktp.svg" alt="">
                                        <div class="text-red-500 text-sm text-right gambar cursor-pointer"
                                            id="reset_ktp">hapus gambar</div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_ktp">Upload file</label>
                                    <div class="relative">
                                        <input
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_ktp_help" id="input_ktp" type="file" name="" required>
                                    </div>
                                    <script>
                                        const fileInput = document.getElementById('input_ktp');
                                        const previewImage = document.getElementById('preview_ktp');
                                        const resetButton = document.getElementById('reset_ktp');
                                        function resetImage() {
                                            previewImage.src = './image/ktp.svg';
                                            fileInput.value = '';
                                        }
                                        fileInput.addEventListener('change', function() {
                                            const file = this.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
                                                    previewImage.src = e.target.result;
                                                }
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                        resetButton.addEventListener('click', function() {
                                            resetImage();
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Swafoto</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan wajah dan isi KTP terlihat jelas, KTP tidak menutupi muka, dan foto
                                        tidak blur
                                    </div>
                                    <div class="">
                                        <img class="h-[80px] w-[300px] rounded-lg" id="preview_swafoto"
                                            src="./image/swafoto.svg" alt="">
                                        <div class="text-red-500 text-sm text-right gambar cursor-pointer"
                                            id="reset_swafoto">hapus gambar</div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_swafoto">Upload file</label>
                                    <div class="relative">
                                        <input
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_swafoto_help" id="input_swafoto" type="file" name=""
                                            required>
                                    </div>
                                    <script>
                                        const fileInputswafoto = document.getElementById('input_swafoto');
                                        const previewImageswafoto = document.getElementById('preview_swafoto');
                                        const resetButtonswafoto = document.getElementById('reset_swafoto');
                                        function resetImageswafoto() {
                                            previewImageswafoto.src = './image/swafoto.svg';
                                            fileInputswafoto.value = '';
                                        }
                                        fileInputswafoto.addEventListener('change', function() {
                                            const file = this.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
                                                    previewImageswafoto.src = e.target.result;
                                                }
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                        resetButtonswafoto.addEventListener('click', function() {
                                            resetImageswafoto();
                                        });
                                    </script>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn border-none w-full text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
                            <div class="mt-5">
                                <div class="text-sm font-medium text-black text-center">Ya Saya Punya Akun? <a
                                        href="/login-user" class="font-bold"> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
    <script>
        const passwordInput = document.getElementById('password');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClosed = document.getElementById('eye-closed');

        eyeOpen.addEventListener('click', () => {
            passwordInput.type = 'text';
            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        });

        eyeClosed.addEventListener('click', () => {
            passwordInput.type = 'password';
            eyeClosed.classList.add('hidden');
            eyeOpen.classList.remove('hidden');
        });
    </script>

</body>

</html>