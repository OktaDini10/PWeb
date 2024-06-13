<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
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
            color: blueviolet;
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
        main section {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
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
            <div class="col-md-3" style="background-color: pink;">
            <nav class="nav-link" style="position: fixed;">
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="biodata.php">Biodata</a></li>
                <li><a href="jadwalkuliah.php">Jadwal Kuliah</a></li>
                <li><a href="logout.php">Logout</a></li>
            </nav>
            </div>
            <div class="col-md-9" style="background-color: white">
            <h2 id="biodata">Biodata</h2>
            <td style="border: 0px; border-color: transparent; width: 30%; margin: 0%;">
                <img src="Okta.jpg" height="300px" width="220pxs">
            </td>
                <table>
                <tr>
                    <td style="border: 0px; border-color: transparent; margin: 70%;">
                        <div>
                            <div class="info">
                                <span class="field">Nim</span> <span class="info-value">: A12.2022.06842</span>
                            </div>
                            <div class="info">
                                <span class="field">Nama</span> <span class="info-value">: Okta Dini</span>
                            </div>
                            <div class="info">
                                <span class="field">Jenis Kelamin</span> <span class="info-value">: Perempuan</span>
                            </div>
                            <div class="info">
                                <span class="field">Tempat, tanggal lahir</span> <span class="info-value">: Semarang, 5 februari 2000 </span>
                            </div>
                            <div class="info">
                                <span class="field">Asal Sekolah</span> <span class="info-value">: SMK Setia Budhi Semarang</span>
                            </div>
                            <div class="info">
                                <span class="field">Alamat tempat tinggal</span> <span class="info-value">: Bulustalan II, Semarang Jawa Tengah</span>
                            </div>
                            <div class="info">
                                <span class="field">E-mail</span> <span class="info-value">: 112202206842@mhs.dinus.ac.id</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
            <section id="Beranda">
                    <p></p>
                </section>
                <section id="Biodata">
                    <p></p>
                </section>
                <section id="Jadwal Kuliah">
                    <p></p>
                </section>
                <section id="Logout">
                    <p></p>
                </section>
        </div>
    </div>
</body>
</html>