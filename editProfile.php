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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style="background-color: #c2f0f7;">
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

    <div class="reg-title">
        Edit Profile
    </div>

    <div class="form-reg">
        <form action="prosesEditProfile.php" method="post" enctype="multipart/form-data">
            <div class="row1">
                <div class="nama-dpn">
                    <label for="nama-dpn">Nama Depan</label> 
                    <input type="text" name="nama-depan" value="<?php echo $row['namaDepan']; ?>" required>
                </div>
    
                <div class="nama-tgh">
                    <label for="nama-tgh">Nama Tengah</label>
                    <input type="text" name="nama-tengah" value="<?php echo $row['namaTengah']; ?>" required>
                </div>
    
                <div class="nama-blk">
                    <label for="nama-blk">Nama Belakang</label>
                    <input type="text" name="nama-belakang" value="<?php echo $row['namaBelakang']; ?>" required>
                </div>
            </div>
    
            <div class="row2">
                <div class="tpt-lahir">
                    <label for="tpt-lahir">Tempat Lahir</label>
                    <input type="text" name="tempat-lahir" value="<?php echo $row['tempatLahir']; ?>" required>
                </div>
                <div class="tgl-lahir">
                    <label for="tgl-lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal-lahir" value="<?php echo $row['tanggalLahir']; ?>" required>
                </div>
                <div class="nik">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" value="<?php echo $row['nik']; ?>" readonly>
                </div>
            </div>
    
            <div class="row3">
                <div class="wrg-ngr">
                    <label for="wrg-ngr">Warga Negara</label>
                    <input type="text" name="warga-negara" value="<?php echo $row['wargaNegara']; ?>" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="no-hp">
                    <label for="no-hp">No HP</label>
                    <input type="number" name="no-hp" value="<?php echo $row['noHp']; ?>" required>
                </div>
            </div>
    
            <div class="row4">
                <div class="alamat">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" cols="30" rows="10"><?php echo $row['alamat']; ?></textarea>
                </div>
                <div class="kode-pos">
                    <label for="kode-pos">Kode Pos</label>
                    <input type="number" name="kode-pos" value="<?php echo $row['kodePos']; ?>" required>
                </div>
                <div class="foto-profil">
                    <label for="foto-profil">Foto Profil</label>
                    <input type="file" name="foto-profil" accept="image/*">
                    <img src="./assets/<?php echo $row["fotoProfil"]; ?>" alt="fotoProfil" srcset="">
                </div>
            </div>
    
            <div class="row6">
                <div class="error-regis">
                    <?php
                        if(isset($_SESSION['error-update'])){
                            echo $_SESSION['error-update'];
                        }
                        else{
                            echo "";
                        }
                    ?>
                </div>
                <div class="kembali">
                    <a href="./home.php" class="button">Kembali</a>
                </div>
                <div class="update">
                    <input type="submit" value="Update" name="update">
                </div>
            </div>
        </form>
    </div>
</body>
</html>