<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        h1,
        h2,
        h3 {
            text-align: center;
        }

        .signature {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>

<body>

    <h1>LAPORAN PENGADUAN ASPIRASI DAN PELAPORAN</h1>
    <h2>KELURAHAN SUMBERREJO</h2>

    <table>
        <tr>
            <th>Klasifikasi Laporan</th>
            <td>{{ $dataArray['jenis'] }}</td>
        </tr>
        <tr>
            <th>Nama Pelapor</th>
            <td>{{ $dataArray['nama'] }}</td>
        </tr>
        <tr>
            <th>Deskripsi Kejadian</th>
            <td>{{ $dataArray['deskripsi'] }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ date('d-m-Y', strtotime($dataArray['tanggal'])) }}</td>
        </tr>
        <tr>
            <th>Lokasi Kejadian</th>
            <td>{{ $dataArray['lokasi'] }}</td>
        </tr>
        <tr>
            <th>Bukti (Foto/Video)</th>
            <img src="storage/{{$dataArray['file']}}" alt="Bukti" width="400">
        </tr>
    </table>
</body>

</html>
