<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Dokumen</title>
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
            <div class="relative w-full p-5 lg:p-20 rounded-lg shadow-lg z-10 text-black lg:mt-10 mb-20 lg:mb-0">
                <div class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0">
                    Verifikasi Dokumen
                </div>
                <div class="mt-10 mb-2">Scan QR Code</div>
                <div class="border border-2 border-black lg:p-20">
                    <div class="lg:flex gap-2 lg:gap-5">
                        <div>
                            <div class="text-sm font-bold">Kamera</div>
                            <video id="qr-video" width="100%" height="auto" style="max-width: 300px; display: none;"
                                class="flex justify-center m-auto items-center mb-2 rounded-lg"></video>
                        </div>
                        <div>
                            <div class="text-sm font-bold">Hasil Kamera</div>
                            <canvas id="qr-canvas" width="100%" height="auto"
                                class="flex justify-center m-auto items-center mb-2 rounded-lg w-full"
                                style="max-width: 300px; display: none;">Hasil</canvas>
                        </div>
                    </div>
                    <div class="flex justify-center m-auto items-center">
                        <button onclick="startScan()" class="mt-10">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6_528)">
                                    <path
                                        d="M1 14.3333V7.66667C1 5.89856 1.70238 4.20286 2.95262 2.95262C4.20286 1.70238 5.89856 1 7.66667 1H14.3333"
                                        stroke="black" stroke-width="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M47.6666 1H54.3333C56.1014 1 57.7971 1.70238 59.0473 2.95262C60.2976 4.20286 61 5.89856 61 7.66667V14.3333"
                                        stroke="black" stroke-width="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M61 47.6666V54.3333C61 56.1014 60.2976 57.7971 59.0473 59.0473C57.7971 60.2976 56.1014 61 54.3333 61H47.6666"
                                        stroke="black" stroke-width="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.3333 61H7.66667C5.89856 61 4.20286 60.2976 2.95262 59.0473C1.70238 57.7971 1 56.1014 1 54.3333V47.6666"
                                        stroke="black" stroke-width="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_6_528">
                                        <rect width="62" height="62" rx="10" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                    <button type="button" onclick="captureImage()"
                        class="w-full text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10">
                        Tangkap Gambar
                    </button>
                    <button type="button" onclick="sendImageToAPI()"
                        class="w-full text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10 mb-10 lg:mb-0">
                        Kirim Gambar
                    </button>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
    <script src="https://unpkg.com/@zxing/library@0.18.5"></script>
    <script>
        const canvas = document.getElementById('qr-canvas');
        const ctx = canvas.getContext('2d');
        const videoElem = document.getElementById('qr-video');
        const captureButton = document.getElementById('captureButton');

        function startScan() {
            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then(function(stream) {
                    videoElem.srcObject = stream;
                    videoElem.style.display = 'block';
                    videoElem.play();
                    captureButton.style.display = 'block';
                })
                .catch(function(err) {
                    console.error('Error accessing camera:', err);
                });
        }

        function captureImage() {
            if (!videoElem.srcObject || videoElem.paused || videoElem.ended) {
                alert('Hidupkan Kamera Terlebih Dahulu');
                return;
            }

            const width = videoElem.videoWidth;
            const height = videoElem.videoHeight;

            canvas.width = width;
            canvas.height = height;

            ctx.drawImage(videoElem, 0, 0, width, height);

            canvas.style.display = 'block';
        }
    </script>
    <script>
        function sendImageToAPI() {
            const imageData = canvas.toDataURL('image/png');

            fetch('url_api', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        image: imageData
                    }),
                })
                .then(response => {
                    if (response.ok) {
                        alert('Gambar berhasil dikirim ke API.');
                    } else {
                        throw new Error('Gagal mengirim gambar ke API.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gambar Tidak Terkirim!!!');
                });
        }
    </script>
</body>

</html>
