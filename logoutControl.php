<?php
    session_start();
    if(isset($_SESSION["loggedin"])){
        $_SESSION["loggedin"]=false;
        header("location: home.php");
    }
?>