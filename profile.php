<?php
    session_start();
    include ("config.php");

    if(!isset($_SESSION["nik-login"])) {
        header("Location: login.php");
    }

    $str_query = "SELECT * FROM users where nik = '".$_SESSION["nik-login"]."'";
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);
?>

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
                        echo $row["namaDepan"];
                    ?>
                </b>
            </div>

            <div class="nama-tgh">
                <label for="nama-tgh">Nama Tengah</label>
                <b>
                    <?php echo $row["namaTengah"]; ?>
                </b>
            </div>

            <div class="nama-blk">
                <label for="nama-blk">Nama Belakang</label>
                <b>
                    <?php echo $row["namaBelakang"]; ?>
                </b>
            </div>
        </div>

        <div class="row2">
            <div class="tpt-lahir">
                <label for="tpt-lahir">Tempat Lahir</label>
                <b>
                    <?php echo $row["tempatLahir"]; ?>
                </b>
            </div>
            <div class="tgl-lahir">
                <label for="tgl-lahir">Tanggal Lahir</label>
                <b>
                    <?php echo $row["tanggalLahir"] ?>
                </b>
            </div>
            <div class="nik">
                <label for="nik">NIK</label>
                <b>
                    <?php echo $row["nik"]; ?>
                </b>
            </div>
        </div>

        <div class="row3">
            <div class="wrg-ngr">
                <label for="wrg-ngr">Warga Negara</label>
                <b>
                    <?php echo $row["wargaNegara"]; ?>
                </b>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <b>
                    <?php echo $row["email"]; ?>
                </b>
            </div>
            <div class="no-hp">
                <label for="no-hp">No HP</label>
                <b>
                    <?php echo $row["noHp"]; ?>
                </b>
            </div>
        </div>

        <div class="row4">
            <div class="alamat">
                <label for="alamat">Alamat</label>
                <b>
                    <?php echo $row["alamat"]; ?>
                </b>
            </div>
            <div class="kode-pos">
                <label for="kode-pos">Kode Pos</label>
                <b>
                    <?php echo $row["kodePos"]; ?>
                </b>
            </div>
            <div class="foto-profil-profile">
                <label for="foto-profil-profile">Foto Profil</label>
                <img src="./assets/<?php echo $row["fotoProfil"]; ?>" alt="fotoProfil" srcset="">
            </div>
        </div>

        <div class="edit-button">
            <a href="./editProfile.php" class="button">Edit Profile</a>
        </div>
    </div>
</body>
</html>