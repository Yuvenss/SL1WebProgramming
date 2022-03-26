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
                if(isset($_SESSION["nama-depan"]) && isset($_SESSION["nama-tengah"]) && isset($_SESSION["nama-belakang"])){
                    echo ($_SESSION["nama-depan"]." ".$_SESSION["nama-tengah"]." ".$_SESSION["nama-belakang"]);
                }
                else{
                    echo "";
                }
            ?>
        </strong>
        , Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>