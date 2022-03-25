<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #cad1ff;">
    <div class="navbar">
        <div class="navbar-title">
            Aplikasi Pengelolaan Keuangan
        </div>

        <div class="navbar-menu">
            <div class="navbar-item">
                <a href="./home.php">Home</a>
            </div>
            <div class="navbar-item">
                <u>
                    <a href="./profile.php">Profile</a>    
                </u>
            </div>
        </div>

        <div class="navbar-logout">
            <a href="./logout.php">Logout</a>
        </div>
    </div>

    <div class="profile-title">
        <b>
            Profil Pribadi
        </b> 
    </div>

    <div class="profile">
        <div class="row1">
            <div class="nama-dpn">
                <label for="nama-dpn">Nama Depan</label> 
                <b>
                    <?php 
                    session_start();
                    print_r($_SESSION["nama-depan"]); 
                    ?>
                </b>
            </div>

            <div class="nama-tgh">
                <label for="nama-tgh">Nama Tengah</label>
                <b>
                    <?php echo $_SESSION["nama-tengah"]; ?>
                </b>
            </div>

            <div class="nama-blk">
                <label for="nama-blk">Nama Belakang</label>
                <b>
                    <?php echo $_SESSION["nama-belakang"]; ?>
                </b>
            </div>
        </div>

        <div class="row2">
            <div class="tpt-lahir">
                <label for="tpt-lahir">Tempat Lahir</label>
                <b>
                    <?php echo $_SESSION["tempat-lahir"]; ?>
                </b>
            </div>
            <div class="tgl-lahir">
                <label for="tgl-lahir">Tanggal Lahir</label>
                <b>
                    <?php echo $_SESSION["tanggal-lahir"]; ?>
                </b>
            </div>
            <div class="nik">
                <label for="nik">NIK</label>
                <b>
                    <?php echo $_SESSION["nik"]; ?>
                </b>
            </div>
        </div>

        <div class="row3">
            <div class="wrg-ngr">
                <label for="wrg-ngr">Warga Negara</label>
                <b>
                    <?php echo $_SESSION["warga-negara"]; ?>
                </b>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <b>
                    <?php echo $_SESSION["email"]; ?>
                </b>
            </div>
            <div class="no-hp">
                <label for="no-hp">No HP</label>
                <b>
                    <?php echo $_SESSION["no-hp"]; ?>
                </b>
            </div>
        </div>

        <div class="row4">
            <div class="alamat">
                <label for="alamat">Alamat</label>
                <b>
                    <?php echo $_SESSION["alamat"]; ?>
                </b>
            </div>
            <div class="kode-pos">
                <label for="kode-pos">Kode Pos</label>
                <b>
                    <?php echo $_SESSION["kode-pos"]; ?>
                </b>
            </div>
            <div class="foto-profil">
                <label for="foto-profil">Foto Profil</label>
                <b>
                    <img src="./assets/<?php  $_SESSION["foto-profil"]; ?>" alt="fotoProfil" srcset="">
                </b>
            </div>
        </div>

        <div class="row5">
            <div class="username">
                <label for="username">Username</label>
                <b>
                    <?php echo $_SESSION["username"]; ?>
                </b>
            </div>
            <div class="pass-1">
                <label for="pass-1">Password 1</label>
                <b>
                    <?php echo $_SESSION["pass-1"]; ?>
                </b>
            </div>
            <div class="pass-2">
                <label for="pass-2">Password 2</label>
                <b>
                    <?php echo $_SESSION["pass-2"]; ?>
                </b>
            </div>
        </div>
    </div>
</body>
</html>