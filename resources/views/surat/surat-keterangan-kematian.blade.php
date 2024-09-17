<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kematian</title>
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
                <h1>KANTOR KELURAHAN SUMBEREJO</h1>
                <p>Sekretariat : Jalan Imam Bonjol No. 09 Kode Pos 35153</p>
                <p>BANDAR LAMPUNG</p>
            </div>
        </div>
        <div class="line-separator"></div>

        <div class="title">
            <p>SURAT KETERANGAN KEMATIAN</p>
            <div class="slash">
                @if (isset($dataArray['nomor_surat_keluar']))
                    <p>Nomor: {{ $dataArray['nomor_surat_keluar'] }}</p>
                @else
                    <p>Nomor: -</p>
                @endif
            </div>
        </div>

        <div class="content">
            <p>Yang bertanda tangan dibawah ini Lurah Sumberejo Kecamatan Kemiling Kota Bandar Lampung dengan ini
                menerangkan:</p>
            <table class="info-table">
                <tr>
                    <td>Nama</td>
                    <td>{{ $dataArray['nama'] }}</td>
                </tr>
                <tr>
                    <td>Tempat / Tgl lahir</td>
                    <td>{{ $dataArray['tempat_lahir'] . ' ' . date('Y-m-d', strtotime($dataArray['tanggal_lahir'])) }}
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $dataArray['jenis_kelamin'] }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $dataArray['agama'] }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>{{ $dataArray['pekerjaan'] }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $dataArray['alamat'] }}</td>
                </tr>
            </table>
            <p>Telah meninggal dunia pada:</p>
            <table class="info-table">
                <tr>
                    <td>Hari</td>
                    <td>{{ $dataArray['hari'] }}</td>
                </tr>
                <tr>
                    <td>Tanggal / Jam</td>
                    <td>{{ $dataArray['tanggal_kematian'] }}</td>
                </tr>
                <tr>
                    <td>Di</td>
                    <td>{{ $dataArray['tempat_kematian'] }}</td>
                </tr>
                <tr>
                    <td>Disebabkan karena</td>
                    <td>{{ $dataArray['penyebab_kematian'] }}</td>
                </tr>
                <tr>
                    <td>Dimakamkan</td>
                    <td>{{ $dataArray['tempat_pemakaman'] }}</td>
                </tr>
            </table>
            <p>Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
        </div>

        <div class='qr-code'>
            <img src="storage/Surat/SKK/qr/{{ $dataArray['id'] }}.png" alt="QR Code" width="">
        </div>

        <div class="signature">
            <p>BANDAR LAMPUNG, {{ now()->format('d-m-Y') }}</p>
            <p>MENGETAHUI,</p>
            <p>LURAH SUMBEREJO</p>
            <br><br>
            <p>EDWIN PUTRA MANAHASP</p>
            <p>NIP.19680812 200212 1 003</p>
        </div>

        <div class="clearfix"></div>
    </div>
</body>

</html>
