<?php
    session_start();
    if(!isset($_SESSION["nik-login"])) {
        header("Location: login.php");
    }
    else
    {
        session_destroy();
        header("Location: welcome.php");
    }
?>