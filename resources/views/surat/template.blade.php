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
            <p>SURAT KETERANGAN</p>
            <div class="slash">
                <p>No. <span>/</span> <span>/</span> <span>/</span> <span>/</span></p>
            </div>

        </div>
    </div>
</body>

</html>
