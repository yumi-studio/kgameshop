<?php
    session_start();
    if(isset($_POST["btnLogin"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(checkAccount($username,$password)){
            $_SESSION["loggedin"]=true;
            $_SESSION["username"]=$username;
            header("location: home.php");
        }else{
            header("location: login.php");
        }
    }else{
        header("location: login.php");
    }

    function checkAccount($user,$pass){
        $list = array(
            "admin" => "admin123",
            "duy" => "duy123",
            "duong" => "duong123",
            "thang" => "thang123",
            "quan" => "quan123"
        );

        foreach($list as $key => $value){
            if($user==$key && $pass==$value){
                return true;
            }
        }
        return false;
    }
?>