<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi</title>
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
                    VISI MISI
                </div>
                <div class="text-justify text-black text-sm">
                    <ul>
                        <li>- Visi</li>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <li class="mt-5 lg:mt-10">- Misi</li>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Diam donec adipiscing tristique risus nec feugiat in.
                            Pellentesque massa placerat duis ultricies. Sed blandit libero volutpat sed cras ornare arcu
                            dui. Nunc sed id semper risus in. Phasellus egestas tellus rutrum tellus pellentesque eu.
                            Quisque id diam vel quam elementum pulvinar etiam non quam. Donec ultrices tincidunt arcu
                            non sodales. Vel pharetra vel turpis nunc eget lorem dolor sed viverra. Ornare arcu odio ut
                            sem nulla. Tellus rutrum tellus pellentesque eu tincidunt tortor. Dictum sit amet justo
                            donec enim diam vulputate. Erat nam at lectus urna duis convallis convallis tellus. Non
                            blandit massa enim nec dui nunc mattis enim ut. Congue nisi vitae suscipit tellus mauris a
                            diam maecenas. Ultrices eros in cursus turpis. Commodo elit at imperdiet dui accumsan sit
                            amet. Tincidunt dui ut ornare lectus sit amet est placerat in.
                        </div>
                    </ul>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>