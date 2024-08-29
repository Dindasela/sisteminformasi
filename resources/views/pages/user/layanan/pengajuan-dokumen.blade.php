<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Dokumen</title>
    <link rel="icon" type="image/x-icon" href="/image/icon-logo.ico">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div>
        <x-nav-user />
        <section id="cover" class="relative items-center justify-center lg:pb-16">
            <div class="relative w-full p-5 lg:p-20 rounded-lg text-black lg:mt-10 mb-20 lg:mb-0">
                <div class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Pengajuan Dokumen
                </div>
                <form class="max-w-md mb-5 lg:mb-10">
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
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search" required />
                    </div>
                </form>
                <div class="bg-transparent text-[#4B4646]">
                    <div
                        class="grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-5 m-auto w-full justify-center mt-5 lg:mt-10">
                        <button onclick="window.location.href='/pengajuan-surat-domisili'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Domisili</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-domisili-usaha'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Domisi Usaha</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-tidak-mampu'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Tidak Mampu</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-kematian'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Kematian</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-sudah-menikah'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Sudah Menikah</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-bersih-diri'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Bersih Diri</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-usaha'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Usaha</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-pindah'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Pindah</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-penghasilan-orang-tua'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Penghasilan</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-belum-menikah'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Belum Menikah</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-keterangan-kelahiran'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Kelahiran</div>
                        </button>
                        <button onclick="window.location.href='/pengajuan-surat-pengantar-skck'"
                            class="relative bg-[#2B2A4C] p-5 text-white rounded-lg">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" class="flex m-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.75 7.5H12.5C11.1739 7.5 9.90215 8.02678 8.96447 8.96447C8.02678 9.90215 7.5 11.1739 7.5 12.5V47.5C7.5 50.25 9.75 52.5 12.5 52.5H47.5C48.8261 52.5 50.0979 51.9732 51.0355 51.0355C51.9732 50.0979 52.5 48.8261 52.5 47.5V21.25L38.75 7.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35 7.5V17.5C35 18.8261 35.5268 20.0979 36.4645 21.0355C37.4021 21.9732 38.6739 22.5 40 22.5H50"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center lg:mt-5 mt-2">Surat Keterangan Pengantar SKCK</div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>