<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
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
            <div class="relative w-full p-5 mt-20 mb-20 lg:mb-0 lg:p-20 rounded-lg z-10 text-black lg:mt-10">
                <div class="font-bold text-4xl mb-5 lg:mb-10">
                    SEJARAH
                </div>
                <div class="text-justify text-black text-sm">
                    Kelurahan Sumberrejo, yang terletak di Kecamatan Kemiling, Kota Bandar Lampung, Provinsi Lampung, memiliki sejarah dan perkembangan yang mencerminkan pertumbuhan kota tersebut. Nama "Sumberrejo" berasal dari bahasa Jawa, yang menggabungkan kata "sumber," yang berarti mata air, dengan "rejo," yang berarti makmur atau subur, mencerminkan aspirasi masyarakat dan kondisi geografisnya. Seiring berjalannya waktu, kelurahan ini telah mengalami berbagai perubahan seiring dengan perkembangan Bandar Lampung. Sebelum menjadi bagian dari Kota Bandar Lampung, wilayah ini merupakan bagian dari administrasi yang lebih besar dan mengalami berbagai tahap perkembangan. Pemerintah kelurahan berperan penting dalam pelayanan publik, administrasi kependudukan, dan pembangunan lokal. Masyarakat Sumberrejo terlibat dalam berbagai aktivitas ekonomi, dari pertanian hingga usaha kecil, dengan perkembangan infrastruktur yang meningkatkan kualitas hidup. Selain itu, kelurahan ini kaya akan budaya dan tradisi lokal, yang berperan penting dalam kehidupan komunitas sehari-hari. Untuk informasi lebih mendetail, menghubungi kantor kelurahan setempat atau melihat arsip sejarah lokal bisa memberikan gambaran yang lebih lengkap tentang sejarah dan perkembangan Kelurahan Sumberrejo.
                </div>
                <div class="mt-10">
                    <img src="./image/tentang-kelurahan.svg" class="w-96 flex m-auto justify-center items-center"
                        alt="">
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>