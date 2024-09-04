<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Bersih Diri</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }

        .header img {
            position: absolute;
            top: 0;
            left: 0;
            width: 80px;
            height: 80px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
            font-weight: bold;
            line-height: 1.2;
        }

        .header h1:nth-child(2),
        .header h1:nth-child(3) {
            font-size: 20px;
            font-style: italic;
        }

        .header p {
            font-size: 14px;
            margin: 2px 0;
        }

        .header p:last-child {
            font-weight: bold;
        }

        .line-separator {
            border-bottom: 3px solid black;
            margin-top: 5px;
        }

        .title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 20px;
        }

        .info-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .info-table td {
            padding: 5px;
        }

        .info-table td:first-child {
            width: 150px;
        }

        .signature-box {
            width: 100%;
            /* border: 1px solid black; */
            /* border-collapse: collapse; */
            margin-top: 20px;
        }

        .signature-box td {
            /* border: 1px solid black; */
            /* padding: 20px; */
            vertical-align: top;
        }

        .signature-right {
            text-align: right;
            font-style: italic;
        }

        .signature-right p {
            margin: 0;
        }

        .signature-right .date {
            font-weight: bold;
        }

        .signature-right .position {
            font-weight: bold;
            margin-bottom: 40px;
            /* Space for the signature */
        }
        .name{
            font-weight: bold;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="logo/logo_balam.png" alt="Logo">
            <h1>PEMERINTAH KOTA BANDAR LAMPUNG</h1>
            <h1>KECAMATAN KEMILING</h1>
            <h1>KANTOR KELURAHAN SUMBER REJO</h1>
            <p>Sekretariat: Jalan Imam Bonjol No. 09 Kode Pos 35153</p>
            <p>BANDAR LAMPUNG</p>
        </div>
        <div class="line-separator"></div>

        <div class="title">
            <p>SURAT KETERANGAN BERSIH DIRI</p>
            <p>No. <span>/</span> <span>/</span> <span>/</span> <span>/</span></p>
        </div>

        <div class="content">
            <p>Kepala Kelurahan Sumberrejo Kecamatan Kemiling Kota Bandar Lampung dengan ini menerangkan dengan
                sebenarnya bahwa:</p>
            <table class="info-table">
                <tr>
                    <td>Bapak</td>
                    <td>: {{ $bapak_name }}</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>: {{ $bapak_age }}</td>
                </tr>
                <tr>
                    <td>Warga Negara / Agama</td>
                    <td>: {{ $bapak_religion }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{ $bapak_job }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $bapak_address }}</td>
                </tr>
            </table>

            <table class="info-table">
                <tr>
                    <td>Ibu</td>
                    <td>: {{ $ibu_name }}</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>: {{ $ibu_age }}</td>
                </tr>
                <tr>
                    <td>Warga Negara / Agama</td>
                    <td>: {{ $ibu_religion }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{ $ibu_job }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $ibu_address }}</td>
                </tr>
            </table>

            <table class="info-table">
                <tr>
                    <td>Anak</td>
                    <td>: {{ $anak_name }}</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>: {{ $anak_age }}</td>
                </tr>
                <tr>
                    <td>Warga Negara / Agama</td>
                    <td>: {{ $anak_religion }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{ $anak_job }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $anak_address }}</td>
                </tr>
            </table>

            <p>a. Sesuai dengan hasil penilaian kami, orang tua (bapak dan ibu) dan {{ $anak_name }} sampai
                dengan surat keterangan ini dikeluarkan adalah berkelakuan baik dan belum pernah tersangkut dengan hukum
                dan kepolisian.</p>
            <p>b. Tidak terlibat dalam Organisasi Terlarang (OT) dan tidak menentang PUPN (Pancasila, Undang-Undang
                Dasar 1945, Negara dan Pemerintahan).</p>
            <p>Surat keterangan ini dikeluarkan atas permintaan nama tersebut di atas guna keperluan:</p>
            <p><em>(tujuan penggunaan surat)</em></p>
        </div>
        <table class="signature-box">
            <tr>
                <td style="width: 50%;">
                    <p class="date">Nomor: </p>
                    <p class="position">Tanggal: </p>
                    <p class="name">Mengetahui</p>
                    <p class="name">Camat Kemiling</p>
                    <br><br>
                    <p>_____________________________</p>
                </td> <!-- Empty left box -->
                <td class="signature-right">
                    <p class="date">Bandar Lampung, {{ $date }}</p>
                    <p class="position">MENGETAHUI</p>
                    <p class="position">LURAH SUMBERREJO</p>
                    <br><br><br>
                    <p>_____________________________</p>
                    <p style="font-size:12px;">196808 12 200212 1 003</p> <!-- ID number below the signature -->
                </td>
            </tr>
        </table>

        <table class="signature-box">
            <tr>
                <td style="width: 50%;">
                    <p class="date">Nomor: </p>
                    <p class="position">Tanggal: </p>
                    <p class="name">Mengetahui</p>
                    <p class="name">KOMANDAN KORAMIL</p>
                    <p class="name">02/TELUK BETUNG SELATAN	</p>
                    <br><br>
                    <p>_____________________________</p>
                </td> <!-- Empty left box -->
                <td class="signature-right">
                    <p class="date">:Nomor</p>
                    <p class="position">:Tanggal</p>
                    <p class="name">Mengetahui</p>
                    <p class="name">KEPALA KEPOLISIAN SEKTOR KEMILING     410-</p>
                    <br><br>
                    <p>_____________________________</p> <!-- ID number below the signature -->
                </td>
            </tr>
        </table>
    </div>
    </div>
</body>

</html>
