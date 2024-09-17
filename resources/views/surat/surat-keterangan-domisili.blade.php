<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Domisili</title>
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
        }

        .slash {
            display: inline-flex;
            align-items: center;
        }

        .slash span {
            margin-left: 8px;
            margin-right: 8px;
        }

        .content {
            margin-bottom: 20px;
        }

        .content p {
            margin: 5px 0;
        }

        .signature {
            float: right;
            text-align: center;
            margin-top: 50px;
        }

        .clearfix {
            clear: both;
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

        .qr-code {
            position: absolute;
            bottom: 0px;
            left: 0px;
        }

        .qr-code img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="logo/logo_balam.png" alt="Logo">
            <div class="header-text">
                <h1>PEMERINTAH KOTA BANDAR LAMPUNG</h1>
                <h1>KECAMATAN KEMILING</h1>
                <h1>KANTOR KELURAHAN SUMBER REJO</h1>
                <p>Sekretariat : Jalan Imam Bonjol No. 09 Kode Pos 35153</p>
                <p>BANDAR LAMPUNG</p>
            </div>
        </div>
        <div class="line-separator"></div>

        <div class="title">
            <p>SURAT KETERANGAN DOMISILI</p>
            <div class="slash">
                @if (isset($dataArray['nomor_surat_keluar']))
                    <p>Nomor: {{ $dataArray['nomor_surat_keluar'] }}</p>
                @else
                    <p>Nomor: -</p>
                @endif
            </div>
        </div>

        <div class="content">
            <p>Yang bertanda tangan dibawah ini Kepala Kelurahan Sumber Rejo Kecamatan Kemiling menerangkan bahwa:</p>
            <table class="info-table">
                <tr>
                    <td>Nama</td>
                    <td>{{ $dataArray['nama'] }}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>{{ $dataArray['tempat_lahir'] . ' ' . date('Y-m-d', strtotime($dataArray['tanggal_lahir'])) }}
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>{{ $dataArray['pekerjaan'] }}</td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td>{{ $dataArray['warga_negara'] }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $dataArray['agama'] }}</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>{{ $dataArray['status_perkawinan'] }}</td>
                </tr>
                <tr>
                    <td>Alamat Sesuai KK</td>
                    <td>{{ $dataArray['alamat_sesuai_kk'] }}</td>
                </tr>
                <tr>
                    <td>Berlaku s.d Tanggal</td>
                    <td>{{ $dataArray['berlaku_sampai'] }}</td>
                </tr>
            </table>
            <p>Berdasarkan Laporan Ketua RT. ___ Lk. __ Nama tersebut di atas saat ini berdomisili di
                _____________________________________________________ sejak __-__-20__ sampai saat ini. Surat keterangan
                ini dibuat yang bersangkutan untuk keperluan:</p>
            <p>{{ $dataArray['keperluan'] }}</p>
            <p>Demikian Surat Keterangan ini kami buat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana
                mestinya.</p>
        </div>

        @if (public_path('Surat/SKD/qr/' . $dataArray['id'] . '.png'))
            <div class='qr-code'>
                <img src="storage/Surat/SKD/qr/{{ $dataArray['id'] }}.png" alt="QR Code" width="">
            </div>
        @endif

        <div class="signature">
            <p>BANDAR LAMPUNG,{{ now()->format('d-m-Y') }}</p>
            <p>LURAH SUMBER REJO</p>
        </div>

        <div class="clearfix"></div>
    </div>
</body>

</html>
