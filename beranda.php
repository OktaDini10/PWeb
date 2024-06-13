<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <title>Okta Dini</title>
    <style>
        img {
        float: left;
        margin: 10px; /* add some margin to create space between image and text */
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
            <div class="col-md-3" style="background-color: peach;">
            <nav class="nav-link" style="position: fixed;">
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="jadwalkuliah.php">Jadwal Kuliah</a></li>
                <li><a href="biodata.php">Biodata</a></li>
                <li><a href="logout.php">Logout</a></li>
            </nav>
            </div>
            <div class="col-md-9" style="background-color: white">
                <h1 id="beranda">Beranda</h1>
            <td style="border: 0px; border-color: transparent; width: 30%; margin: 0%;">
                <img src="foto.jpg" height="300px" width="300pxs">
            </td>
            <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolorem temporibus molestiae esse adipisci, alias cumque quia tempore pariatur a laudantium, facere ullam soluta incidunt nemo rerum quo doloribus ratione.
            </p>
            </div>
        </div>
    </div>
</body>
</html>