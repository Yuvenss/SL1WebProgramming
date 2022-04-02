<?php
    session_start();
    include ("config.php");

    if(isset($_POST["update"])){
        $_SESSION["error-update"] = "";
        $_SESSION["welcome-alert"] = "";
        $_SESSION["noHp-error"] = "";
        $_SESSION["email-error"] = "";

        $str_query = "SELECT * FROM users";
        $query = mysqli_query($connection, $str_query);

        $str_query2 = "SELECT * FROM users where nik = '".$_SESSION["nik-login"]."'";
        $query2 = mysqli_query($connection, $str_query2);
        $row2 = mysqli_fetch_assoc($query2);

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

        while($row = mysqli_fetch_assoc($query)){
            if($row["noHp"] == $noHp && $row["noHp"] != $row2["noHp"]){
                $_SESSION["noHp-error"] = "No HP sudah terdaftar<br>";
            }
            if($row["email"] == $email && $row["email"] != $row2["email"]){
                $_SESSION["email-error"] = "Email sudah terdaftar<br>";
            }
        }

        $_SESSION["nama-depan"] = $namaDepan;
        $_SESSION["nama-tengah"] = $namaTengah;
        $_SESSION["nama-belakang"] = $namaBelakang;
        $_SESSION["tempat-lahir"] = $tempatLahir;
        $_SESSION["tanggal-lahir"] = $tanggalLahir;
        $_SESSION["warga-negara"] = $wargaNegara;

        if($_SESSION["email-error"] != ""){
            $_SESSION["error-update"] .= $_SESSION["email-error"];
        }
        else{
            $_SESSION["email"] = $email;
        }

        if($_SESSION["noHp-error"] != ""){
            $_SESSION["error-update"] .= $_SESSION["noHp-error"];
        }
        else if(str_starts_with($noHp, "08") && strlen($noHp) > 9 && is_numeric($noHp)){
            $_SESSION["no-hp"] = $noHp;
        }
        if(strlen($noHp) < 9 || !is_numeric($noHp) || !str_starts_with($noHp, "08")){
            $_SESSION["error-update"] .= "No HP harus diawali 08 dan lebih panjang dari 9 digit!<br>";
        }

        if(strlen($kodePos) == 5 ){
            $_SESSION["kode-pos"] = $kodePos;
        }
        else{
            $_SESSION["error-update"] .= "Kode Pos harus 5 digit!<br>";
        }

        if(strlen($_SESSION["error-update"]) < 1){
            $_SESSION["error-update"] = "";

            $namaFile = $_FILES['foto-profil']['name'];
            $tmp_name = $_FILES['foto-profil']['tmp_name'];
            $profile = $namaFile;

            $dirUpload = "assets/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $_SESSION["foto-profil"] = $namaFile;

            if($terupload){
                $str_query = 'UPDATE users SET namaDepan = "'.$namaDepan.'", namaTengah = "'.$namaTengah.'", namaBelakang = "'.$namaBelakang.'", tempatLahir = "'.$tempatLahir.'", tanggalLahir = "'.$tanggalLahir.'", nik = "'.$nik.'", wargaNegara = "'.$wargaNegara.'", email = "'.$email.'", noHp = "'.$noHp.'", alamat = "'.$alamat.'", kodePos = "'.$kodePos.'", fotoProfil = "'.$profile.'" WHERE nik = "'.$_SESSION["nik-login"].'"';
            }
            else{
                $str_query = 'UPDATE users SET namaDepan = "'.$namaDepan.'", namaTengah = "'.$namaTengah.'", namaBelakang = "'.$namaBelakang.'", tempatLahir = "'.$tempatLahir.'", tanggalLahir = "'.$tanggalLahir.'", nik = "'.$nik.'", wargaNegara = "'.$wargaNegara.'", email = "'.$email.'", noHp = "'.$noHp.'", alamat = "'.$alamat.'", kodePos = "'.$kodePos.'" WHERE nik = "'.$_SESSION["nik-login"].'"';
            }

            $query = mysqli_query($connection, $str_query);
            if($query){
                header("location:home.php");
            } else{
                $_SESSION["error-update"] .= "Data gagal disimpan".mysqli_error($connection);
            }
            // header("Location: welcome.php");
        }
        else{
            header("Location: editProfile.php");
        }
    }
?>