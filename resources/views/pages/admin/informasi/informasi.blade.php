<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin </title>
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
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Informasi</h1>
        <div class="p-4">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <a href="/daftar-berita">
                    <div class="h-96 rounded-2xl bg-[#2B2A4C]">
                        <div class="pt-28 flex items-center justify-center ">
                            <svg width="72" height="72" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6667 91.6663H83.3333C85.5435 91.6663 87.6631 90.7884 89.2259 89.2256C90.7887 87.6628 91.6667 85.5432 91.6667 83.333V16.6663C91.6667 14.4562 90.7887 12.3366 89.2259 10.7738C87.6631 9.21098 85.5435 8.33301 83.3333 8.33301H33.3333C31.1232 8.33301 29.0036 9.21098 27.4408 10.7738C25.878 12.3366 25 14.4562 25 16.6663V83.333C25 85.5432 24.122 87.6628 22.5592 89.2256C20.9964 90.7884 18.8768 91.6663 16.6667 91.6663ZM16.6667 91.6663C14.4565 91.6663 12.3369 90.7884 10.7741 89.2256C9.2113 87.6628 8.33333 85.5432 8.33333 83.333V45.833C8.33333 41.2497 12.0833 37.4997 16.6667 37.4997H25" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M75 58.333H41.6667" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M62.5 75H41.6667" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M41.6667 25H75V41.6667H41.6667V25Z" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="flex items-center justify-center text-light text-white">Pengaturan
                            </p>
                            <h1 class="flex items-center justify-center text-4xl font-bold text-white">BERITA</h1>
                        </div>
                    </div>
                </a>
                <a href="/daftar-pengumuman">
                    <div class="h-96 rounded-2xl bg-[#2B2A4C]">
                        <div class="pt-28 flex items-center justify-center ">
                            <svg width="72" height="72" viewBox="0 0 84 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M71.1667 8.75456V22.3337C72.8082 22.3337 74.4336 22.657 75.9502 23.2852C77.4668 23.9134 78.8448 24.8342 80.0055 25.9949C81.1662 27.1556 82.087 28.5336 82.7152 30.0502C83.3433 31.5667 83.6667 33.1922 83.6667 34.8337C83.6667 36.4752 83.3433 38.1007 82.7152 39.6173C82.087 41.1338 81.1662 42.5118 80.0055 43.6726C78.8448 44.8333 77.4668 45.754 75.9502 46.3822C74.4336 47.0104 72.8082 47.3337 71.1667 47.3337V59.8337C71.1667 66.7004 63.3292 70.6212 57.8333 66.5004L49.25 60.0587C44.6619 56.6186 39.3198 54.3217 33.6667 53.3587V65.2087C33.6671 67.9327 32.6829 70.5649 30.8954 72.6203C29.1079 74.6758 26.6377 76.0157 23.9401 76.3933C21.2424 76.7708 18.4992 76.1605 16.2162 74.6748C13.9331 73.1891 12.264 70.9281 11.5167 68.3087L4.975 45.4087C2.62091 42.6287 1.0889 39.2471 0.551192 35.6442C0.013483 32.0412 0.491386 28.3597 1.93118 25.0135C3.37098 21.6672 5.71559 18.7889 8.70146 16.702C11.6873 14.6152 15.1961 13.4025 18.8333 13.2004L31.4083 12.5004C37.5609 12.158 43.5444 10.3601 48.8667 7.25456L58.6333 1.55456C64.1917 -1.68294 71.1667 2.32122 71.1667 8.75456ZM15.475 51.8254L19.5292 66.0212C19.7243 66.7084 20.1614 67.3017 20.7599 67.6917C21.3583 68.0817 22.0777 68.242 22.7851 68.1429C23.4925 68.0439 24.1402 67.6923 24.6086 67.1529C25.077 66.6136 25.3344 65.923 25.3333 65.2087V52.6671L18.8333 52.3046C17.7022 52.2418 16.5786 52.0815 15.475 51.8254ZM62.8333 8.75456L53.0625 14.4587C47.1266 17.9189 40.5076 20.0432 33.6667 20.6837V44.9296C41.1125 45.9546 48.2 48.8587 54.25 53.3921L62.8333 59.8337V8.75456ZM25.3333 21.1837L19.2917 21.5171C16.481 21.6722 13.8307 22.8755 11.8638 24.8892C9.89694 26.903 8.75646 29.5809 8.66751 32.3944C8.57856 35.208 9.54759 37.9526 11.3833 40.0866C13.2191 42.2206 15.7881 43.5888 18.5833 43.9212L19.2917 43.9837L25.3333 44.3171V21.1837ZM71.1667 30.6671V39.0004C72.2287 38.9992 73.2501 38.5926 74.0224 37.8635C74.7946 37.1345 75.2593 36.1381 75.3215 35.0779C75.3838 34.0177 75.0389 32.9738 74.3572 32.1594C73.6756 31.345 72.7087 30.8217 71.6542 30.6962L71.1667 30.6671Z" fill="white" />
                            </svg>

                        </div>
                        <div class="">
                            <p class="flex items-center justify-center text-light text-white">Pengaturan
                            </p>
                            <h1 class="flex items-center justify-center text-4xl font-bold text-white">PENGUMUMAN</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <x-footer-admin />
</body>

</html>
