<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Desa</title>
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
</head>

<body>
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-[url('./image/hero.svg')] bg-blend-multiply min-h-screen flex items-center justify-center lg:pb-16">
            <div class="absolute inset-0 bg-white opacity-40"></div>
            <div class="relative w-full p-20 rounded-lg shadow-lg z-10 text-black lg:mt-10">
                <div class="font-bold text-4xl mb-5 lg:mb-10">
                    PROFIL
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-4">
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                <div class="text-center text-black lg:w-1/2 m-auto mt-2 lg:mt-5">
                                    <div class="text-md font-bold">Nama</div>
                                    <div class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                <div class="text-center text-black lg:w-1/2 m-auto mt-2 lg:mt-5">
                                    <div class="text-md font-bold">Nama</div>
                                    <div class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                <div class="text-center text-black lg:w-1/2 m-auto mt-2 lg:mt-5">
                                    <div class="text-md font-bold">Nama</div>
                                    <div class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                <div class="text-center text-black lg:w-1/2 m-auto mt-2 lg:mt-5">
                                    <div class="text-md font-bold">Nama</div>
                                    <div class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                <div class="text-center text-black lg:w-1/2 m-auto mt-2 lg:mt-5">
                                    <div class="text-md font-bold">Nama</div>
                                    <div class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                <div class="text-center text-black lg:w-1/2 m-auto mt-2 lg:mt-5">
                                    <div class="text-md font-bold">Nama</div>
                                    <div class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>