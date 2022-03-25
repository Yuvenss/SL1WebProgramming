<?php
    session_start();

    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass-1"])){
        header("Location: register.php");
    }
    
    if(isset($_POST["login-btn"])){
        if(isset($_SESSION)){
            if(($_POST["login-username"] == $_SESSION["username"]) && ($_POST["login-password"] == $_SESSION["pass-1"])){
                header("Location: home.php");
            }
            else{
                echo "Username atau Password salah";
            }
        }
    }
?>