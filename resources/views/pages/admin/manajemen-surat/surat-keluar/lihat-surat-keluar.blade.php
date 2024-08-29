<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Surat Keluar</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
    <!-- Awal Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- Akhir Tailwind -->
    <!-- Awal Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Akhir Flowbite -->
</head>

<body>
    <x-nav-admin />
    <x-sidebar-admin />
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Surat Keluar</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-1 pb-16">
            <div class="flex items-center   ">
                <div class="w-full object-cover ">
                    <h1 class="text-xl font-light mb-4 text-center">Tampilan Dokumen</h1>
                    <img class="mx-auto h-full object-cover" src="image/preview.png" />
                </div>
            </div>
            <div class="flex items-center ">
                <div class="w-full object-cover ">
                    <h1 class="text-xl font-light mb-4 text-center">QR Code</h1>
                    <img class="mx-auto h-full object-cover" src="image/preview.png" />
                </div>
            </div>
        </div>
    </div>
    <x-footer-admin />

    <script>
        const fileInput = document.getElementById('file');
        const fileChosen = document.getElementById('file-chosen');

        fileInput.addEventListener('change', function() {
            fileChosen.textContent = this.files.length ? this.files[0].name : 'No file chosen';
        });

    </script>
</body>

</html>
