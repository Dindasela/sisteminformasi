<div class="mr-2">
    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="" type="button">
        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 5H18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M16.3334 5V16.6667C16.3334 17.5 15.5 18.3333 14.6667 18.3333H6.33335C5.50002 18.3333 4.66669 17.5 4.66669 16.6667V5"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M7.16669 5.00033V3.33366C7.16669 2.50033 8.00002 1.66699 8.83335 1.66699H12.1667C13 1.66699 13.8334 2.50033 13.8334 3.33366V5.00033"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8.83331 9.16699V14.167" stroke="black" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M12.1667 9.16699V14.167" stroke="black" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg ">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-sm font-normal text-sm">Apakah anda yakin ingin menghapus data ini ?</h3>
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes
                        </button>
                    </form>
                    <button data-modal-toggle="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
