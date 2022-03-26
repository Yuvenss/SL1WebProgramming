<?php
    session_start();

    if(isset($_POST["register"])){
        $_SESSION["error-regis"] = "";
        $_SESSION["welcome-alert"] = "";

        $_SESSION["nama-depan"] = $_POST["nama-depan"];
        $_SESSION["nama-tengah"] = $_POST["nama-tengah"];
        $_SESSION["nama-belakang"] = $_POST["nama-belakang"];
        $_SESSION["tempat-lahir"] = $_POST["tempat-lahir"];
        $_SESSION["tanggal-lahir"] = $_POST["tanggal-lahir"];

        if(strlen($_POST["nik"]) == 16 && is_numeric($_POST["nik"])){
            $_SESSION["nik"] = $_POST["nik"];
        }
        else{
            $_SESSION["error-regis"] .= "NIK harus 16 digit!<br>";
        }

        $_SESSION["warga-negara"] = $_POST["warga-negara"];
        $_SESSION["email"] = $_POST["email"];

        if(str_starts_with($_POST["no-hp"], "08") && strlen($_POST["no-hp"]) > 9 && is_numeric($_POST["no-hp"])){
            $_SESSION["no-hp"] = $_POST["no-hp"];
        }
        else{
            $_SESSION["error-regis"] .= "No HP harus diawali 08 dan lebih panjang dari 9 digit!<br>";
        }

        $_SESSION["alamat"] = $_POST["alamat"];

        if(strlen($_POST["kode-pos"]) == 5 ){
            $_SESSION["kode-pos"] = $_POST["kode-pos"];
        }
        else{
            $_SESSION["error-regis"] .= "Kode Pos harus 5 digit!<br>";
        }

        $_SESSION["username"] = $_POST["username"];

        if($_POST["pass-1"] == $_POST["pass-2"]){
            $_SESSION["pass-1"] = $_POST["pass-1"];
        }
        else{
            $_SESSION["error-regis"] .= "Password tidak sama!<br>";
        }

        if(strlen($_SESSION["error-regis"]) < 1){
            $_SESSION["error-regis"] = "";
            $_SESSION["welcome-alert"] = "Akun berhasil diregistrasi!";
            $namaFile = $_FILES['foto-profil']['name'];
            $tmp_name = $_FILES['foto-profil']['tmp_name'];
        
            $dirUpload = "assets/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $_SESSION["foto-profil"] = $namaFile;
            header("Location: welcome.php");
        }
        else{
            header("Location: register.php");
        }
    }
?>