<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Telah Menikah</title>
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
                <h1>KANTOR KELURAHAN SUMBER REJO</h1>
                <p>Sekretariat : Jalan Imam Bonjol No. 09 Kode Pos 35153</p>
                <p>BANDAR LAMPUNG</p>
            </div>
        </div>
        <div class="line-separator"></div>

        <div class="title">
            <p>SURAT KETERANGAN TELAH MENIKAH</p>
            @if (isset($dataArray['nomor_surat_keluar']))
                <p>Nomor: {{ $dataArray['nomor_surat_keluar'] }}</p>
            @else
                <p>Nomor: -</p>
            @endif
        </div>

        <div class="content">
            <p>Yang bertanda tangan di bawah ini Lurah Sumber Rejo Kecamatan Kemiling, dengan ini menerangkan dengan
                sebenarnya bahwa:</p>

            <table class="info-table">
                <tr>
                    <td>Nama (Suami)</td>
                    <td>{{ $dataArray['nama_lengkap_suami'] }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $dataArray['jenis_kelamin_suami'] }}</td>
                </tr>
                <tr>
                    <td>Tempat dan Tgl Lahir</td>
                    <td>{{ $dataArray['tempat_lahir_suami'] . ', ' . date('Y-m-d', strtotime($dataArray['tanggal_lahir_suami'])) }}
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $dataArray['agama_suami'] }}</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>{{ $dataArray['status_perkawinan_suami'] }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>{{ $dataArray['pekerjaan_suami'] }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $dataArray['alamat_suami'] }}</td>
                </tr>
            </table>

            <table class="info-table">
                <tr>
                    <td>Nama (Istri)</td>
                    <td>{{ $dataArray['nama_lengkap_istri'] }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $dataArray['jenis_kelamin_istri'] }}</td>
                </tr>
                <tr>
                    <td>Tempat dan Tgl Lahir</td>
                    <td>{{ $dataArray['tempat_lahir_istri'] . ', ' . date('d-m-Y', strtotime($dataArray['tanggal_lahir_istri'])) }}
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $dataArray['agama_istri'] }}</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>{{ $dataArray['status_perkawinan_istri'] }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>{{ $dataArray['pekerjaan_istri'] }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $dataArray['alamat_istri'] }}</td>
                </tr>
            </table>

            <p>Adalah benar telah menikah secara agama Islam di {{ $dataArray['lokasi_pernikahan'] }} pada Tanggal
                {{ date('d-m-Y', strtotime($dataArray['tanggal_pernikahan'])) . ' ' }} {{ $dataArray['jam'] }} WIB
                yang
                dilakukan oleh Pemuka Agama/Penghulu Kelurahan Kemiling Permai.</p>
            <p>Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk Penerbitan Buku Nikah di Pengadilan Agama
                Bandar Lampung.</p>
        </div>

        <div class='qr-code'>
            <img src="storage/Surat/SKSM/qr/{{ $dataArray['id'] }}.png" alt="QR Code" width="">
        </div>

        <div class="signature">
            <p>Bandar Lampung, {{ now()->format('d-m-Y') }}</p>
            <p>A.n LURAH SUMBERREJO</p>
        </div>

        <div class="clearfix"></div>
    </div>
</body>

</html>
