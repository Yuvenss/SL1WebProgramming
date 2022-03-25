<?php
    session_start();

    if(isset($_POST["register"])){
        $_SESSION["nama-depan"] = $_POST["nama-depan"];
        $_SESSION["nama-tengah"] = $_POST["nama-tengah"];
        $_SESSION["nama-belakang"] = $_POST["nama-belakang"];
        $_SESSION["tempat-lahir"] = $_POST["tempat-lahir"];
        $_SESSION["tanggal-lahir"] = $_POST["tanggal-lahir"];
        $_SESSION["nik"] = $_POST["nik"];
        $_SESSION["warga-negara"] = $_POST["warga-negara"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["no-hp"] = $_POST["no-hp"];
        $_SESSION["alamat"] = $_POST["alamat"];
        $_SESSION["kode-pos"] = $_POST["kode-pos"];
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["pass-1"] = $_POST["pass-1"];
        $_SESSION["pass-2"] = $_POST["pass-2"];
    
        $namaFile = $_FILES['foto-profil']['name'];
        $tmp_name = $_FILES['foto-profil']['tmp_name'];
    
        $dirUpload = "assets/";
        $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
        $_SESSION["foto-profil"] = $namaFile;
        header("Location: login.php");
    }
?>