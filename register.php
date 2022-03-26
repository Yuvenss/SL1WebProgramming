<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style="background-color: #c2f0f7;">
    <?php
        session_start();
    ?>
    <div class="reg-title">
        Register
    </div>

    <div class="form-reg">
        <form action="prosesRegister.php" method="post" enctype="multipart/form-data">
            <div class="row1">
                <div class="nama-dpn">
                    <label for="nama-dpn">Nama Depan</label> 
                    <input type="text" name="nama-depan" value="<?php
                        if(isset($_SESSION['nama-depan'])){
                            echo $_SESSION['nama-depan'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
    
                <div class="nama-tgh">
                    <label for="nama-tgh">Nama Tengah</label>
                    <input type="text" name="nama-tengah" value="<?php
                        if(isset($_SESSION['nama-tengah'])){
                            echo $_SESSION['nama-tengah'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
    
                <div class="nama-blk">
                    <label for="nama-blk">Nama Belakang</label>
                    <input type="text" name="nama-belakang" value="<?php
                        if(isset($_SESSION['nama-belakang'])){
                            echo $_SESSION['nama-belakang'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
            </div>
    
            <div class="row2">
                <div class="tpt-lahir">
                    <label for="tpt-lahir">Tempat Lahir</label>
                    <input type="text" name="tempat-lahir" value="<?php
                        if(isset($_SESSION['tempat-lahir'])){
                            echo $_SESSION['tempat-lahir'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
                <div class="tgl-lahir">
                    <label for="tgl-lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal-lahir" value="<?php
                        if(isset($_SESSION['tanggal-lahir'])){
                            echo $_SESSION['tanggal-lahir'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
                <div class="nik">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" value="<?php
                        if(isset($_SESSION['nik'])){
                            echo $_SESSION['nik'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
            </div>
    
            <div class="row3">
                <div class="wrg-ngr">
                    <label for="wrg-ngr">Warga Negara</label>
                    <input type="text" name="warga-negara" value="<?php
                        if(isset($_SESSION['warga-negara'])){
                            echo $_SESSION['warga-negara'];
                        }
                        else{
                            echo "";
                        }?>" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php
                        if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                        }
                        else{
                            echo "";
                        }
                    ?>" required>
                </div>
                <div class="no-hp">
                    <label for="no-hp">No HP</label>
                    <input type="number" name="no-hp" value="<?php
                        if(isset($_SESSION['no-hp'])){
                            echo $_SESSION['no-hp'];
                        }
                        else{
                            echo "";
                        }
                    ?>" required>
                </div>
            </div>
    
            <div class="row4">
                <div class="alamat">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" cols="30" rows="10"><?php
                        if(isset($_SESSION['alamat'])){
                            echo $_SESSION['alamat'];
                        }
                        else{
                            echo "";
                        }
                        ?></textarea>
                </div>
                <div class="kode-pos">
                    <label for="kode-pos">Kode Pos</label>
                    <input type="number" name="kode-pos" value="<?php
                        if(isset($_SESSION['kode-pos'])){
                            echo $_SESSION['kode-pos'];
                        }
                        else{
                            echo "";
                        }
                    ?>" required>
                </div>
                <div class="foto-profil">
                    <label for="foto-profil">Foto Profil</label>
                    <input type="file" name="foto-profil" accept="image/*" required>
                </div>
            </div>
    
            <div class="row5">
                <div class="username">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }
                        else{
                            echo "";
                        }
                    ?>" required>
                </div>
                <div class="pass-1">
                    <label for="pass-1">Password 1</label>
                    <input type="password" name="pass-1" value="" required>
                </div>
                <div class="pass-2">
                    <label for="pass-2">Password 2</label>
                    <input type="password" name="pass-2" value="" required>
                </div>
            </div>
    
            <div class="row6">
                <div class="error-regis">
                    <?php
                        if(isset($_SESSION['error-regis'])){
                            echo $_SESSION['error-regis'];
                        }
                        else{
                            echo "";
                        }
                    ?>
                </div>
                <div class="kembali">
                    <a href="./welcome.php" class="button">Kembali</a>
                </div>
                <div class="register">
                    <input type="submit" value="Register" name="register">
                </div>
            </div>
        </form>
    </div>
</body>
</html>