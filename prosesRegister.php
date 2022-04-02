<?php
    session_start();
    include ("config.php");

    if(isset($_POST["register"])){
        $_SESSION["error-regis"] = "";
        $_SESSION["welcome-alert"] = "";
        $_SESSION["nik-error"] = "";
        $_SESSION["noHp-error"] = "";
        $_SESSION["email-error"] = "";
        $_SESSION["username-error"] = "";
        $str_query = "SELECT * FROM users";
        $query = mysqli_query($connection, $str_query);

        $namaDepan = $_POST["nama-depan"];
        $namaBelakang = $_POST["nama-belakang"];
        $namaTengah = $_POST["nama-tengah"];
        $tempatLahir = $_POST["tempat-lahir"];
        $tanggalLahir = $_POST["tanggal-lahir"];
        $nik = $_POST["nik"];
        $wargaNegara = $_POST["warga-negara"];
        $email = $_POST["email"];
        $noHp = $_POST["no-hp"];
        $alamat = $_POST["alamat"];
        $kodePos = $_POST["kode-pos"];
        $username = $_POST["username"];
        $pass1 = $_POST["pass-1"];
        $pass2 = $_POST["pass-2"];

        while($row = mysqli_fetch_assoc($query)){
            if($row["nik"] == $nik){
                $_SESSION["nik-error"] = "NIK sudah terdaftar<br>";
            }
            if($row["noHp"] == $noHp){
                $_SESSION["noHp-error"] = "No HP sudah terdaftar<br>";
            }
            if($row["email"] == $email){
                $_SESSION["email-error"] = "Email sudah terdaftar<br>";
            }
            if($row["username"] == $username){
                $_SESSION["username-error"] = "Username sudah terdaftar<br>";
            }
        }

        $_SESSION["nama-depan"] = $namaDepan;
        $_SESSION["nama-tengah"] = $namaTengah;
        $_SESSION["nama-belakang"] = $namaBelakang;
        $_SESSION["tempat-lahir"] = $tempatLahir;
        $_SESSION["tanggal-lahir"] = $tanggalLahir;
        $_SESSION["warga-negara"] = $wargaNegara;

        if($_SESSION["nik-error"] != ""){
            $_SESSION["error-regis"] .= $_SESSION["nik-error"];
        }
        else if(strlen($nik) == 16 && is_numeric($nik)){
            $_SESSION["nik"] = $nik;
        }
        if(strlen($nik) != 16 || !is_numeric($nik)){
            $_SESSION["error-regis"] .= "NIK harus 16 digit dan berupa angka!<br>";
        }

        if($_SESSION["email-error"] != ""){
            $_SESSION["error-regis"] .= $_SESSION["email-error"];
        }
        else{
            $_SESSION["email"] = $email;
        }

        if($_SESSION["noHp-error"] != ""){
            $_SESSION["error-regis"] .= $_SESSION["noHp-error"];
        }
        else if(str_starts_with($noHp, "08") && strlen($noHp) > 9 && is_numeric($noHp)){
            $_SESSION["no-hp"] = $noHp;
        }
        if(strlen($noHp) < 9 || !is_numeric($noHp) || !str_starts_with($noHp, "08")){
            $_SESSION["error-regis"] .= "No HP harus diawali 08 dan lebih panjang dari 9 digit!<br>";
        }

        if(strlen($kodePos) == 5 ){
            $_SESSION["kode-pos"] = $kodePos;
        }
        else{
            $_SESSION["error-regis"] .= "Kode Pos harus 5 digit!<br>";
        }
        
        if($_SESSION["username-error"] != ""){
            $_SESSION["error-regis"] .= $_SESSION["username-error"];
        }
        else if($_SESSION["username-error"] == ""){
            $_SESSION["username"] = $username;
        }

        if($pass1 == $pass2){
            $_SESSION["pass-1"] = $pass1;
        }
        else{
            $_SESSION["error-regis"] .= "Password tidak sama!<br>";
        }

        if(strlen($_SESSION["error-regis"]) < 1){
            $_SESSION["error-regis"] = "";
            $_SESSION["welcome-alert"] = "Akun berhasil diregistrasi!";
            $namaFile = $_FILES['foto-profil']['name'];
            $tmp_name = $_FILES['foto-profil']['tmp_name'];
            $profile = $namaFile;

            $dirUpload = "assets/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $_SESSION["foto-profil"] = $namaFile;

            $str_query = 'INSERT INTO users values("'.$namaDepan.'", "'.$namaTengah.'", "'.$namaBelakang.'", "'.$tempatLahir.'", "'.$tanggalLahir.'", "'.$nik.'", "'.$wargaNegara.'", "'.$email.'", "'.$noHp.'", "'.$alamat.'", "'.$kodePos.'", "'.$username.'", "'.$pass1.'", "'.$pass2.'", "'.$profile.'")';

            $query = mysqli_query($connection, $str_query);
            if($query){
                $_SESSION["nama-depan"] = "";
                $_SESSION["nama-tengah"] = "";
                $_SESSION["nama-belakang"] = "";
                $_SESSION["tempat-lahir"] = "";
                $_SESSION["tanggal-lahir"] = "";
                $_SESSION["nik"] = "";
                $_SESSION["warga-negara"] = "";
                $_SESSION["email"] = "";
                $_SESSION["no-hp"] = "";
                $_SESSION["alamat"] = "";
                $_SESSION["kode-pos"] = "";
                $_SESSION["username"] = "";
                $_SESSION["pass-1"] = "";
                $_SESSION["pass-2"] = "";
                $_SESSION["foto-profil"] = "";

                header("location:welcome.php");
            } else{
                $_SESSION["error-regis"] .= "Data gagal disimpan".mysqli_error($connection);
            }
            // header("Location: welcome.php");
        }
        else{
            header("Location: register.php");
        }
    }
?>