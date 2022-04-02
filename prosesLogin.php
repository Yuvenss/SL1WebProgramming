<?php
    session_start();
    include ("config.php");

    // if(!isset($_SESSION["username"]) && !isset($_SESSION["pass-1"])){
    //     header("Location: register.php");
    // }
    
    if(isset($_POST["login-btn"])){
        if(isset($_SESSION)){
            $str_query = "SELECT username, pass1, nik FROM users where username = '".$_POST["login-username"]."'";
            $query = mysqli_query($connection, $str_query);
            $row = mysqli_fetch_assoc($query);
            if($row["username"] == $_POST["login-username"] && $row["password"] == $_POST["login-pass1"]){
                $_SESSION["nik-login"] = $row["nik"];
                header("Location: home.php");
            }
            else{
                $_SESSION["login-alert"] = "Username atau Password salah!";
                header("Location: login.php");
            }

            // if(($_POST["login-username"] == $_SESSION["username"]) && ($_POST["login-password"] == $_SESSION["pass-1"])){
            //     header("Location: home.php");
            // }
            // else{
            //     $_SESSION["login-alert"] = "Username atau Password salah!";
            //     header("Location: login.php");
            // }
        }
    }
?>