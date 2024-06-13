<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okta</title>
    <style>
        body{
            padding-left: 5%;
            padding-right: 5%;
        }
        .nav-link{
            list-style: none;
        }
        .nav-link li{
            grid-auto-columns: max-content;
            margin: 10px;
            color: peachpuff;
        }
        span.field{
            font-weight: bold;
            width: 200px;
        } 
        .info{
            margin-bottom: 5px;
        }
        .info span{
            display:inline-block;
            border: 1px slategray;
        }
        .info-value{
            margin-left: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: violet;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    session_start ();
    if($_SESSION ['is_logged_in'] != True)
    {
        header("Location: ../loginform.php");
        exit();
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="background-color: #a9ceec;">
            <nav class="nav-link" style="position: fixed;">
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="jadwalkuliah.php">Jadwal Kuliah</a></li> 
                <li><a href="biodata.php">Biodata</a></li>
                <li><a href="logout.php">Logout</a></li>
            </nav>
            </div>
            <div class="col-md-9" style="background-color: white">
                <br><br><br><br><br><br><br>
                <h1 id="jadwalkuliah">Jadwal Kuliah</h1>
                <table>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Ruang</th>
                        <th>Mata Kuliah</th>
                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>
                            07.00-08.40 <br>
                            18.30 - 21.00 <br>
                        </td>
                        <td>
                            Kulino <br>
                            H.3.1
                        </td>
                        <td>
                            Bahasa indonesia <br>
                            Perencanaan Sumber Daya Perusahaan <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>
                            07.00 - 08.40 <br>
                            18.30 - 21.00 <br>
                        </td>
                        <td>
                            D.2.K <br>
                            H.3.1 <br>
                        </td>
                        <td>
                            Pemrograman Berorientasi Objek <br>
                            Perencanaan Strategis Sistem Informasi  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>
                            08.40 - 10.20 <br>
                            12.30 - 14.10 <br>
                        </td>
                        <td>
                            H.4.6 <br>
                            H.5.10 <br>
                        </td>
                        <td>
                            Pemrograman Web <br>
                            Analisa dan Perancangan Sistem Informasi  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>
                            10.20 - 12.00 <br>
                            12.30 - 14.10 <br>
                        </td>
                        <td>
                            D.2.B <br>
                            H.4.4 <br>
                        </td>
                        <td>
                            Pemrograman Web <br>
                            Pemrograman Berorientasi Objek <br>
                        </td>
                    </tr>
                    <tr>
                        <td>jum'at</td>
                        <td>
                            07.00 - 08.40 <br>
                            12.30 - 14.10 <br>
                        </td>
                        <td>
                            H.3.9 <br>
                            H.4.8 <br>
                        </td>
                        <td>
                            Analisa dan Perancangan Sistem Informasi<br>
                            Manajemen Rantai Pasok<br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
