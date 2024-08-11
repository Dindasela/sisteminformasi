{{-- Awal Navbar --}}
<nav class="bg-[#D72323] fixed w-full z-30 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 justify-between">
        <div class="flex gap-5">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/image/icon-logo.ico" class="h-8 w-8 m-auto flex" alt="Flowbite Logo" />
            </a>
            <div class="">
                <div class="self-center text-md font-semibold text-white">Kelurahan
                    Sumberrejo</div>
                <div class="self-center text-xs text-white">Kecamatan Kemiling</div>
            </div>
        </div>
        <div class="flex justify-end">
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul
                class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent lg:items-center">
                <li>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search anything....">
                    </div>
                </li>
                <li>
                    <div class="text-white hover:text-[#2B2A4C] flex">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="profil"
                            class="block py-2 px-3 md:p-0 text-black lg:text-white bg-white rounded md:bg-transparent hover:text-[#2B2A4C]">Profil
                            Desa
                        </button>
                        <svg class="w-2.5 h-2.5 ms-2.5 flex item-center justify-center m-auto" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="profil"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-white bg-[#D72323]" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/profil-desa" class="block px-4 py-2 hover:bg-[#2B2A4C]">Profil</a>
                            </li>
                            <li>
                                <a href="/visi-misi" class="block px-4 py-2 hover:bg-[#2B2A4C]">Visi
                                    Misi</a>
                            </li>
                            <li>
                                <a href="/sejarah" class="block px-4 py-2 hover:bg-[#2B2A4C]">Sejarah</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="text-white hover:text-[#2B2A4C] flex">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="layanan"
                            class="block py-2 px-3 md:p-0 text-black lg:text-white bg-white rounded md:bg-transparent hover:text-[#2B2A4C]">Layanan
                        </button>
                        <svg class="w-2.5 h-2.5 ms-2.5 flex item-center justify-center m-auto" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="layanan"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-white bg-[#D72323]" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/layanan-verifikasi-dokumen"
                                    class="block px-4 py-2 hover:bg-[#2B2A4C]">Verifikasi Dokumen</a>
                            </li>
                            <li>
                                <a href="/layanan-pelaporan" class="block px-4 py-2 hover:bg-[#2B2A4C]">Pelaporan</a>
                            </li>
                            <li>
                                <a href="/layanan-pengajuan-dokumen"
                                    class="block px-4 py-2 hover:bg-[#2B2A4C]">Pengajuan
                                    Dokumen</a>
                            </li>
                            <li>
                                <a href="/layanan-status-permohonan" class="block px-4 py-2 hover:bg-[#2B2A4C]">Status
                                    Permohonan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="text-white hover:text-[#2B2A4C] flex">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="informasi"
                            class="block py-2 px-3 md:p-0 text-black lg:text-white bg-white rounded md:bg-transparent hover:text-[#2B2A4C]">Informasi
                        </button>
                        <svg class="w-2.5 h-2.5 ms-2.5 flex item-center justify-center m-auto" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="informasi"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-white bg-[#D72323]" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/berita" class="block px-4 py-2 hover:bg-[#2B2A4C]">Berita</a>
                            </li>
                            <li>
                                <a href="/pengumuman" class="block px-4 py-2 hover:bg-[#2B2A4C]">Pengumuman</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#galeri-foto"
                        class="block py-2 px-3 md:p-0 text-black lg:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2B2A4C]">Galeri</a>
                </li>
                <li>
                    <div class="absolute lg:relative ml-[43%] lg:ml-0">
                        <button type="button"
                            class="flex text-sm bg-gray-800 lg:bg-transparent rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 justify-end mx-auto"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 27.5C21.9036 27.5 27.5 21.9036 27.5 15C27.5 8.09644 21.9036 2.5 15 2.5C8.09644 2.5 2.5 8.09644 2.5 15C2.5 21.9036 8.09644 27.5 15 27.5Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M15 16.25C17.0711 16.25 18.75 14.5711 18.75 12.5C18.75 10.4289 17.0711 8.75 15 8.75C12.9289 8.75 11.25 10.4289 11.25 12.5C11.25 14.5711 12.9289 16.25 15 16.25Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M8.75 25.8275V23.75C8.75 23.087 9.01339 22.4511 9.48223 21.9822C9.95107 21.5134 10.587 21.25 11.25 21.25H18.75C19.413 21.25 20.0489 21.5134 20.5178 21.9822C20.9866 22.4511 21.25 23.087 21.25 23.75V25.8275"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
            id="user-dropdown">
            <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    <a href="/login-user" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Login User</a>
                </li>
                <li>
                    <a href="/login-admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Login
                        Adamin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}