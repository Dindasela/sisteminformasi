{{-- Awal Navbar --}}
<nav class="relative h-20 w-full  ">
    <div class="fixed top-0 right-0 h-16 w-full bg-[#D72323] sm:ml-64">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 justify-between">
            <div class="flex justify-end">
                {{-- <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button> --}}
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent lg:items-center">
                    <li>
                        <div class="flex absolute right-8">
                            <h1 class="flex pr-4 text-white">Admin</h1>
                            <button type="button" class="flex text-sm bg-gray-800 lg:bg-transparent rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 justify-end mx-auto" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 27.5C21.9036 27.5 27.5 21.9036 27.5 15C27.5 8.09644 21.9036 2.5 15 2.5C8.09644 2.5 2.5 8.09644 2.5 15C2.5 21.9036 8.09644 27.5 15 27.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 16.25C17.0711 16.25 18.75 14.5711 18.75 12.5C18.75 10.4289 17.0711 8.75 15 8.75C12.9289 8.75 11.25 10.4289 11.25 12.5C11.25 14.5711 12.9289 16.25 15 16.25Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.75 25.8275V23.75C8.75 23.087 9.01339 22.4511 9.48223 21.9822C9.95107 21.5134 10.587 21.25 11.25 21.25H18.75C19.413 21.25 20.0489 21.5134 20.5178 21.9822C20.9866 22.4511 21.25 23.087 21.25 23.75V25.8275" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}
