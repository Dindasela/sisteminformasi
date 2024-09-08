<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    {{-- Akhir DeasyUi --}}
</head>

<body>
    <section>
        <x-nav-user />
    </section>
    <section id="cover" class="bg-center bg-no-repeat bg-cover bg-[url('./image/hero-rev.jpeg')] bg-blend-multiply min-h-screen">
    </section>
    <section id="tentang-kami" class="bg-white p-10 lg:p-20 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
            <div class="order-2 lg:order-1 text-black text-left">
                <div class="font-bold text-4xl mb-4 lg:mb-10">Tentang Kami</div>
                <p class="mb-4 lg:mb-10 text-justify lg:text-left">Kelurahan Sumberrejo merupakan kelurahan yang berada
                    di Kecamatan
                    Kemiling, Kota
                    Bandar Lampung.</p>
                <a role="button" class="btn bg-[#2B2A4C] text-white">Selengkapnya</a>
            </div>
            <div class="order-1 lg:order-2">
                <img src="./image/tentang-kelurahan.svg" class="w-96 flex m-auto items-center justify-center text-center h-auto max-w-full rounded-lg" alt="">
            </div>
        </div>
    </section>
    <section id="layanan-kami" class="bg-[#2B2A4C] p-10 lg:p-20 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full">
        <div class="text-center font-bold text-white text-4xl mb-5">LAYANAN KAMI</div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-4">
            <a href="/layanan-pelaporan" class="hover:bg-white hover:text-[#2B2A4C] m-auto text-center flex items-center justify-center text-white rounded-lg cursor-pointer">
                <div class="w-40 h-40 flex flex-col items-center justify-center">
                    <div>
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="currentColor" class="m-auto text-[#2B2A4C]" xmlns="http://www.w3.org/2000/svg">
                            <path d="M62.5 8.33334H25C22.7899 8.33334 20.6702 9.21132 19.1074 10.7741C17.5446 12.3369 16.6667 14.4565 16.6667 16.6667V83.3333C16.6667 85.5435 17.5446 87.6631 19.1074 89.2259C20.6702 90.7887 22.7899 91.6667 25 91.6667H75C77.2101 91.6667 79.3297 90.7887 80.8925 89.2259C82.4553 87.6631 83.3333 85.5435 83.3333 83.3333V29.1667L62.5 8.33334Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M58.3333 8.33334V25C58.3333 27.2101 59.2113 29.3298 60.7741 30.8926C62.3369 32.4554 64.4565 33.3333 66.6667 33.3333H83.3333" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M41.6667 37.5H33.3333" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M66.6667 54.1667H33.3333" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M66.6667 70.8333H33.3333" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="font-bold ">Pelaporan</p>
                    </div>
                </div>
            </a>
            <div class="m-auto text-center flex items-center justify-center">
                <a href="/layanan-verifikasi-dokumen" class="hover:bg-white hover:text-[#2B2A4C] m-auto text-center flex items-center justify-center text-white rounded-lg cursor-pointer">
                    <div class="w-40 h-40 flex flex-col items-center justify-center">
                        <div>
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="currentColor" class="m-auto hover:text-[#2B2A4C]" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 29.1667V20.8333C12.5 18.6232 13.378 16.5036 14.9408 14.9408C16.5036 13.378 18.6232 12.5 20.8333 12.5H29.1667" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M70.8333 12.5H79.1667C81.3768 12.5 83.4964 13.378 85.0592 14.9408C86.622 16.5036 87.5 18.6232 87.5 20.8333V29.1667" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M87.5 70.8333V79.1667C87.5 81.3768 86.622 83.4964 85.0592 85.0592C83.4964 86.622 81.3768 87.5 79.1667 87.5H70.8333" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29.1667 87.5H20.8333C18.6232 87.5 16.5036 86.622 14.9408 85.0592C13.378 83.4964 12.5 81.3768 12.5 79.1667V70.8333" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29.1667 33.3333H62.5" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29.1667 50H70.8333" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29.1667 66.6667H54.1667" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="font-bold ">Verifikasi Dokumen</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <a href="/layanan-pengajuan-dokumen" class="hover:bg-white hover:text-[#2B2A4C] m-auto text-center flex items-center justify-center text-white rounded-lg cursor-pointer">
                    <div class="w-40 h-40 flex flex-col items-center justify-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="m-auto hover:text-[#2B2A4C]"" width=" 100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-input">
                                <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4" />
                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                <path d="M2 15h10" />
                                <path d="m9 18 3-3-3-3" /></svg>
                            <p class="font-bold ">Pengajuan Dokumen</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <a href="/layanan-status-permohonan" class="hover:bg-white hover:text-[#2B2A4C] m-auto text-center flex items-center justify-center text-white rounded-lg cursor-pointer">
                    <div class="w-40 h-40 flex flex-col items-center justify-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="m-auto hover:text-[#2B2A4C]" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-check">
                                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                <path d="m9 9.5 2 2 4-4" /></svg>
                            <p class="font-bold ">Status Permohonan</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="galeri-foto" class="bg-white p-10 lg:p-20">
        <div class="text-center font-bold text-black text-4xl mb-5">GALERI FOTO & VIDEO</div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-4">
            <div class="m-auto text-center flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="m-auto text-center flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="berita-terkini" class="bg-[#D72323] p-10 lg:p-20 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full text-white">
        <div class="text-center font-bold text-4xl mb-10">Berita Terkini</div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
            <div class="">
                <img class="h-auto max-w-full rounded-lg flex m-auto" src="./image/berita-terkini.svg" alt="">
            </div>
            <div class="">
                <div class="font-bold text-2xl mb-4 lg:mb-10">Kelurahan Sumber Rejo Kemiling Gelar Musrebangkel 2021
                </div>
                <p class="mb-4 lg:mb-10 text-justify lg:text-left">Kelurahan Sumber Rejo melaksanakan Kegiatan
                    Musrebang, nampak hadir dalam kegaiatan tersebut Lurah Sumber Rejo Edwin Putra Manaha, Camat
                    Kemiling yang diwakili oleh Kasi Pembangunan Densi  Farida,.MM, Ketua TPPK Sumber Rejo Guritno,
                    KetuaTKPK Kemiling Bapak R. Sutrisno, S.Pd beserta Sekretaris Hilman Adi Wijaya. </p>
                <a role="button" class="btn border-none bg-[#2B2A4C] text-white">Selengkapnya</a>
            </div>
        </div>
    </section>
    <section id="alamat" class="bg-white p-10 lg:p-20 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full text-black">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-8 mb-10">
            <div class="rounded-lg">
                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15888.53920672801!2d105.20209977448711!3d-5.396422550559664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d070dce81187%3A0x3f2c71e6b0724750!2sSumber%20Rejo%2C%20Kec.%20Kemiling%2C%20Kota%20Bandar%20Lampung%2C%20Lampung!5e0!3m2!1sid!2sid!4v1720949117543!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="">
                <div class="font-bold text-2xl mb-4 lg:mb-10">Kontak
                </div>
                <div class="flex gap-2 mb-4 lg:mb-10">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="w-7 h-7" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.5 16.6667C37.5 26.0417 25 35.4167 25 35.4167C25 35.4167 12.5 26.0417 12.5 16.6667C12.5 13.3515 13.817 10.1721 16.1612 7.82785C18.5054 5.48365 21.6848 4.16669 25 4.16669C28.3152 4.16669 31.4946 5.48365 33.8388 7.82785C36.183 10.1721 37.5 13.3515 37.5 16.6667Z" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25 20.8333C27.3012 20.8333 29.1667 18.9679 29.1667 16.6667C29.1667 14.3655 27.3012 12.5 25 12.5C22.6988 12.5 20.8333 14.3655 20.8333 16.6667C20.8333 18.9679 22.6988 20.8333 25 20.8333Z" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.4062 29.1667H10.4167C9.99278 29.1898 9.58606 29.3418 9.25096 29.6025C8.91587 29.8631 8.66839 30.2199 8.54166 30.625L4.375 43.125C4.16666 43.3334 4.16666 43.5417 4.16666 43.75C4.16666 45 5 45.8334 6.25 45.8334H43.75C45 45.8334 45.8333 45 45.8333 43.75C45.8333 43.5417 45.8333 43.3334 45.625 43.125L41.4583 30.625C41.3316 30.2199 41.0841 29.8631 40.749 29.6025C40.4139 29.3418 40.0072 29.1898 39.5833 29.1667H31.5937" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <a href="https://maps.app.goo.gl/1n6kcPgekpA1msaz6" target="_blank" class="justify-center items-center flex">Jl. Imam Bonjol Gg. Sejahtera 4, Kemiling, Bandar
                        Lampung</a>
                </div>
                <div class="flex gap-2">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="w-7 h-7" xmlns="http://www.w3.org/2000/svg">
                        <path d="M45.8333 35.25V41.5C45.8357 42.0802 45.7168 42.6546 45.4844 43.1862C45.252 43.7178 44.911 44.195 44.4835 44.5873C44.0559 44.9795 43.5512 45.2781 43.0016 45.464C42.4519 45.6499 41.8695 45.7189 41.2917 45.6667C34.8809 44.9701 28.7229 42.7795 23.3125 39.2709C18.2788 36.0723 14.0111 31.8046 10.8125 26.7709C7.29162 21.3359 5.10051 15.1479 4.41667 8.70837C4.36461 8.13226 4.43307 7.55162 4.61771 7.00342C4.80235 6.45522 5.09911 5.95148 5.4891 5.52425C5.87909 5.09702 6.35376 4.75568 6.8829 4.52196C7.41204 4.28824 7.98404 4.16725 8.5625 4.16671H14.8125C15.8236 4.15675 16.8037 4.51479 17.5703 5.17407C18.3369 5.83334 18.8377 6.74889 18.9792 7.75004C19.243 9.75018 19.7322 11.7141 20.4375 13.6042C20.7178 14.3499 20.7785 15.1603 20.6123 15.9394C20.4461 16.7185 20.0601 17.4336 19.5 18L16.8542 20.6459C19.8199 25.8616 24.1384 30.1801 29.3542 33.1459L32 30.5C32.5664 29.9399 33.2816 29.5539 34.0607 29.3877C34.8398 29.2216 35.6502 29.2822 36.3958 29.5625C38.286 30.2679 40.2499 30.7571 42.25 31.0209C43.262 31.1636 44.1863 31.6734 44.8469 32.4532C45.5076 33.2329 45.8587 34.2283 45.8333 35.25Z" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <a target="_blank" href="https://wa.me/081234567890?text=Kontak" class="justify-center items-center flex">+62 812-3456-7890</a>
                </div>
            </div>
        </div>
    </section>
    <x-footer-user />
</body>

</html>
