<?php
    session_start();
    $name = null;
    if(isset($_SESSION['logged-in']) &&  $_SESSION['logged-in']==true){
        $name = $_SESSION['user'];
    }
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
</head>
<body>

<div id="header">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" id="logo">
                        <a href=""><img src="image/logo.png" alt=""></a>
                    </div>
                    <div class="col-lg-6" id="search-box">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-default "><i class="fa fa-search"></i></button>
                            </div>
                            <input type="text" name="" id="inputsearch" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3" id="login">
                        <?php
                            if($name != null){
                                echo $name;
                                ?>
                                | <a href="logout.php">Đăng xuất</a>
                                <?php
                            }else{
                                ?>
                                    <a href="login.php">Đăng nhập</a> | <a href="register.php">Đăng ký</a>
                                <?php
                            }
                        ?>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>