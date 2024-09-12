<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
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

        .content {
            margin-bottom: 20px;
        }

        .content p {
            margin: 5px 0;
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

        .signature {
            float: right;
            text-align: center;
            margin-top: 50px;
        }

        .clearfix {
            clear: both;
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
                <h1>KANTOR KELURAHAN SUMBEREJO</h1>
                <p>Sekretariat : Jalan Imam Bonjol No. 09 Kode Pos 35153</p>
                <p>BANDAR LAMPUNG</p>
            </div>
        </div>
        <div class="line-separator"></div>

        <div class="title">
            <p>SURAT KETERANGAN USAHA</p>
            <p>Nomor: ____ / ____ / ____ / ____</p>
        </div>

        <div class="content">
            <p>Lurah Sumberrejo Kecamatan Kemiling Kota Bandar Lampung dengan ini menerangkan bahwa:</p>

            <table class="info-table">
                <tr>
                    <td>Nama</td>
                    <td>{{$dataArray['nama']}}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>{{$dataArray['tempat_lahir'] . ', ' . date('d-m-Y' , strtotime($dataArray['tanggal_lahir']))}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{$dataArray['jenis_kelamin']}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>{{$dataArray['pekerjaan']}}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{$dataArray['agama']}}</td>
                </tr>
                <tr>
                    <td>Alamat Rumah</td>
                    <td>{{$dataArray['alamat']}}</td>
                </tr>
                <tr>
                    <td>Alamat Usaha</td>
                    <td>{{$dataArray['alamat_usaha']}}</td>
                </tr>
            </table>

            <p>Adalah BENAR orang tersebut di atas mempunyai usaha yang bergerak di dalam bidang:</p>
            <p>{{$dataArray['bidang_usaha']}}</p>

            <p>Surat Keterangan Usaha ini berlaku s/d ___________</p>
            <p>Demikian Surat Keterangan Usaha ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
        </div>

        <div class='qr-code'>
            <img src="storage/Surat/SKU/qr/{{$dataArray['id']}}.png" alt="QR Code" width="">
        </div>

        <div class="signature">
            <p>Bandar Lampung, {{now()->format('d-m-Y')}}</p>
            <p>Mengetahui,</p>
            <p>LURAH SUMBEREJO</p>
        </div>

        <div class="clearfix"></div>
    </div>
</body>

</html>
