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
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center lg:pb-16">
            <div class="absolute inset-0 bg-white opacity-40"></div>
            <div class="relative w-full p-5 lg:p-20 rounded-lg z-10 text-black lg:mt-10">
                <div class="font-bold text-4xl mb-5 lg:mb-10">
                    VISI MISI
                </div>
                <div class="text-justify text-black text-sm">
                    <ul>
                        <li>- Visi</li>
                        <div>
                            Menjadi kelurahan yang maju, mandiri, dan sejahtera dengan mengutamakan pelayanan publik yang prima dan pemberdayaan masyarakat.
                        </div>
                        <li class="mt-5 lg:mt-10">- Misi</li>
                        <div class="text-justify">
                            1. Meningkatkan Kualitas Pelayanan Publik: Menyediakan layanan yang cepat, transparan, dan akuntabel kepada masyarakat untuk memenuhi kebutuhan administrasi dan pelayanan sosial.Pemberdayaan Masyarakat: Melaksanakan program-program yang mendukung pemberdayaan ekonomi, pendidikan, dan kesehatan masyarakat untuk meningkatkan kesejahteraan warga. <br>
 2. Pengelolaan Lingkungan yang Berkelanjutan: Mengoptimalkan pengelolaan lingkungan hidup melalui program kebersihan, penghijauan, dan pengelolaan sampah yang berbasis partisipasi masyarakat. <br>
3. Peningkatan Kualitas Infrastruktur: Mengembangkan infrastruktur kelurahan yang memadai untuk mendukung aktivitas sosial dan ekonomi masyarakat. <br>
4. Penguatan Partisipasi Masyarakat: Mendorong partisipasi aktif masyarakat dalam proses pembangunan melalui musyawarah dan gotong royong.
                        </div>
                    </ul>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>