<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "keuangan";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        // echo "Koneksi Berhasil";
    } else{
        throw new Exception("MySql Connection Failed: ".mysqli_connect_error());
    }
?>