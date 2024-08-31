<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-white" aria-label="Sidebar">
    <div class="border-2 h-full px-3 py-4 overflow-y-auto">
        <div class="flex pb-8">
            <img src="/image/logo-balam.png" class="h-10 w-10 me-3 sm:h-10 items-center" alt="Flowbite Logo" />
            <div class="">
                <h1 class="self-center font-semibold whitespace-nowrap dark:text-black">Kelurahan Sumberrejo</h1>
                <h2 class="self-center font-semibold whitespace-nowrap dark:text-black font-light">Kecamatan Kemiling</h2>
            </div>
        </div>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="dashboard" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full justify-center" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="" sidebar-toggle-item>Manajemen Surat</span>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 flex flex-col items-end">
                    <li>
                        <a href="/manajemen-surat" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pengajuan Surat</a>
                    </li>
                    <li>
                        <a href="/tambah-surat-keluar" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Surat Keluar</a>
                    </li>
                    <li>
                        <a href="/surat-masuk" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Surat Masuk</a>
                    </li>
                    <li>
                        <a href="/arsip-surat" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Arsip Surat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/laporan-masuk" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Pelaporan</span>
                </a>
            </li>
            <li>
                <a href="/informasi" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Informasi</span>
                </a>
            </li>
            <li>
                <a href="/list-galeri" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Galeri</span>
                </a>
            </li>
            <li>
                <button type="button" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full justify-center" aria-controls="dropdown" data-collapse-toggle="dropdown">
                    <span class="" sidebar-toggle-item>Kelola Akun</span>
                </button>
                <ul id="dropdown" class="hidden py-2 space-y-2 flex flex-col items-end">
                    <li>
                        <a href="/daftar-akun" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Daftar Akun</a>
                    </li>
                    <li>
                        <a href="/permohonan-akun" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Permohonan Akun</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
