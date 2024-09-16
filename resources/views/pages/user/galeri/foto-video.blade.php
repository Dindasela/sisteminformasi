<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri | Foto Video</title>
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
    {{--
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    <div>
        <x-nav-user />
        <section id="cover" class="relative flex items-center justify-center">
            <div class="relative w-full p-10 lg:p-20 rounded-lg shadow-lg z-10 text-black mt-5 lg:mt-10 mb-10">
                <div
                    class="font-bold text-2xl lg:text-4xl mb-5 lg:mb-10 mt-10 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Foto dan Video
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                    @foreach ($data as $item)
                        <div>
                            <img class="h-40 lg:h-52 max-w-full rounded-lg" src="{{ asset('storage/' . $item->image) }}"
                                alt="">
                            <div class="text-center text-black w-full m-auto mt-2 lg:mt-5">
                                <div class="text-md font-bold">{{ $item->title }}</div>
                                <div class="text-sm">{{ $item->description }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>
