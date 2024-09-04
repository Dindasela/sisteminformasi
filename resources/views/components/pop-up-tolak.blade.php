<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="bg-[#2B2A4C] text-white px-6 py-1 rounded-md hover:bg-gray-400" type="button">
    Tolak</button>
<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white shadow ">
            <div class="text-center">
                <div class="p-2 bg-[#D72323] flex">
                    <h3 class="text-sm font-light text-white dark:text-white">Alasan Pengajuan Ditolak </h3>
                    <button type="button" class="text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4">
                    <textarea id="isi" name="description" rows="4" class="bg-white mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none sm:text-sm" placeholder="Tulis Alasan Penolakan"></textarea>
                </div>
                <div class="pb-4">
                    <button data-modal-toggle="popup-modal" type="button" class="flex py-1 px-2 ms-3 text-sm font-medium text-white focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kirim</button>
                </div>
                <div class="bg-[#D72323] pt-8 block"></div>
            </div>
        </div>
    </div>
</div>
