<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan</title>
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
            margin-top: 10px;
        }

        .clearfix {
            clear: both;
        }

        .info-table {
            width: 100%;
            margin-bottom: 20px;
            border-spacing: 0;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 5px;
        }

        .info-table td:first-child {
            width: 150px;
        }

        .info-table td {
            border: 1px solid black;
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
            <p>SURAT BERDOMISILI</p>
            <div class="slash">
                <p>No.  <span>/</span> <span></span> <span>/</span> <span></span> <span>/</span> <span></span></p>
            </div>
        </div>

        <div class="content">
            <p>Yang bertanda tangan dibawah ini Kepala Kelurahan Sumber Rejo Kecamatan Kemiling menerangkan bahwa:</p>
            <table class="info-table">
                <tr>
                    <td>Nama</td>
                    <td>{{$dataArray['nama_lengkap']}}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{$dataArray['nik']}}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>{{$dataArray['tempat_lahir'] . ',' . date('Y-m-d',strtotime($dataArray['tanggal_lahir']))}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{$dataArray['jenis_kelamin']}}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{$dataArray['agama']}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>{{$dataArray['pekerjaan']}}</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>{{$dataArray['status_perkawinan']}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{$dataArray['alamat_kk']}}</td>
                </tr>
            </table>
            <p>Bahwa benar yang bersangkutan di atas:</p>
            <table class="info-table">
                <tr>
                    <td>Nama Lembaga</td>
                    <td>{{$dataArray['nama_lembaga']}}</td>
                </tr>
                <tr>
                    <td>NPSN</td>
                    <td>{{$dataArray['npsn']}}</td>
                </tr>
                <tr>
                    <td>Tahun Berdiri</td>
                    <td>{{$dataArray['tahun_berdiri']}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{$dataArray['alamat_lembaga']}}</td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>{{$dataArray['kota']}}</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>{{$dataArray['provinsi']}}</td>
                </tr>
            </table>
            <p>Surat keterangan ini diminta yang bersangkutan untuk:</p>
            <p>{{$dataArray['keperluan']}}</p>
            <p>Demikian Surat ini kami buat dengan sebenar-benarnya agar dapat dipergunakan seperlunya.</p>
        </div>

        @if (public_path('Surat/SKDU/qr/'.$dataArray['id'].'.png'))    
        <div class='qr-code'>
            <img src="storage/Surat/SKDU/qr/{{$dataArray['id']}}.png" alt="QR Code" width="">
        </div>
        @endif

        <div class="signature">
            <p>BANDAR LAMPUNG, ________ </p>
            <p>MENGETAHUI,</p>
            <p>LURAH SUMBER REJO</p>
        </div>

        <div class="clearfix"></div>
    </div>
</body>

</html>
