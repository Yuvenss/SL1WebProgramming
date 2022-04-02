<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #cad1ff;">
    <div class="navbar">
        <div class="navbar-title">
            Aplikasi Pengelolaan Keuangan
        </div>

        <div class="navbar-menu">
            <div class="navbar-item">
                <u>
                    <a href="./home.php">Home</a>
                </u>
            </div>
            <div class="navbar-item">
                <a href="./profile.php">Profile</a>
            </div>
        </div>

        <div class="navbar-logout">
            <a href="./logout.php">Logout</a>
        </div>
    </div>

    <div class="main">
        Halo&nbsp;
        <strong>
            <?php
                session_start();
                include "config.php";

                if(!isset($_SESSION["nik-login"])) {
                    header("Location: login.php");
                }

                $str_query = "SELECT namaDepan, namaTengah, namaBelakang FROM users where nik = '".$_SESSION["nik-login"]."'";
                $query = mysqli_query($connection, $str_query);
                $row = mysqli_fetch_array($query);

                echo $row["namaDepan"]." ".$row["namaTengah"]." ".$row["namaBelakang"];
            ?>
        </strong>
        , Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>