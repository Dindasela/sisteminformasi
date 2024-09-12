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
            margin-left: 8px;
        }

        .header-text {
            padding-left: 36px;
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
            /* margin-bottom: 20px; */
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

        .signature-box {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .signature-box td {
            border: 1px solid black;
            padding: 20px;
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
            <div class="header-image">
                <img src="logo/logo_balam.png" alt="Logo">
            </div>
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
            <p>SURAT KETERANGAN BELUM MENIKAH</p>
            <div class="slash">
                <p>No. <span>/</span> <span>/</span> <span>/</span> <span>/</span></p>
            </div>

        </div>

        <div class="content">
            <p>Yang bertanda tangan dibawah ini Kepala Kelurahan Sumber Rejo Kecamatan Kemiling, menerangkan bahwa :</p>
            <table class="info-table">
                <tr>
                    <td>Nama</td>
                    <td>: {{ $dataArray['nama'] }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: {{ $dataArray['jenis_kelamin'] }}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>: {{ $dataArray['tempat_lahir'] . ', ' . date('d-m-Y', strtotime($dataArray['tanggal_lahir'])) }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: {{ $dataArray['agama'] }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{ $dataArray['pekerjaan'] }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $dataArray['alamat'] }}</td>
                </tr>
            </table>
            <p>Berdasarkan keterangan yang bersangkutan di atas sampai saat ini, belum pernah menikah .
                Demikian surat keterangan ini di buat dengan sebenarnya dan dipergunakan sebagaimana 
                mestinya.</p>
        </div>

        <div class='qr-code'>
            <img src="storage/Surat/SKBM/qr/{{$dataArray['id']}}.png" alt="QR Code" width="">
        </div>

        <table class="signature-box">
            <tr>
                <td style="width: 50%;"></td> <!-- Empty left box -->
                <td class="signature-right">
                    <p class="date">Bandar Lampung, {{ now()->format('d-m-Y') }}</p>
                    <p class="position">MENGETAHUI</p>
                    <p class="position">LURAH SUMBERREJO</p>
                    <br><br><br>
                    <p>_____________________________</p>
                    <p style="font-size:12px;">196808 12 200212 1 003</p> <!-- ID number below the signature -->
                </td>
            </tr>
        </table>


        <div class="clearfix"></div>
    </div>
</body>

</html>
