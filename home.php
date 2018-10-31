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
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

    <!-- Header -->
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
                                    <a href="login.html">Đăng nhập</a> | <a href="register.html">Đăng ký</a>
                                <?php
                            }
                        ?>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    
    <!-- Navigator -->
    <div id="navigator" class="sticky-top">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="nav-box">
                            <ul class="nav">
                                <li class="nav-item"><a href="">Trang chủ</a></li>
                                <li class="nav-item"><a href="">Thể Loại</a></li>
                                <li class="nav-item"><a href="">Garena</a></li>
                                <li class="nav-item"><a href="">Steam</a></li>
                                <li class="nav-item"><a href="">Mua tại đại lý</a></li>
                                <li class="nav-item"><a href="">Nạp tiền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div id="mycart">
                            <i class="fa fa-shopping-bag"></i>
                            <a href="#"><span>0</span> Sản phẩm - <span>0</span> VNĐ</a>
                            
                        </div>
                        <div style="position: relative;">
                            <div id="mycart-box">
                                Chưa có sản phẩm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main -->
    <div id="main">
        <div class="container-fluid">
            <div class="container">
                <div id="path"><a href="home.html"><i class="fa fa-home"></i></a>/</div>
                <div class="row">
                    <div class="col-md-3" id="left-section">
                        <div class="left-item" id="module1"><img width="100%" src="image/123-512x512.png" alt=""></div>
                        <div class="left-item" id="module2"><img width="100%" src="image/123-512x512.png" alt=""></div>
                        <div class="left-item" id="module3"><img width="100%" src="image/123-512x512.png" alt=""></div>
                        <div class="left-item" id="module4"><img width="100%" src="image/123-512x512.png" alt=""></div>
                        <div id="top-best">
                            <h4 style="font-family:arial">Top 5 sản phẩm</h4>
                            <div class="">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9" id="right-section">

                        <!-- Slider -->
                        <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Dots -->
                            <ol class="carousel-indicators dotBtn">
                                <li data-target="#slider" data-slide-to="0" class="active">1</li>
                                <li data-target="#slider" data-slide-to="1">2</li>
                                <li data-target="#slider" data-slide-to="2">3</li>
                            </ol>
                            <!-- Slide -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="image/banner-824x470.png" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="image/banner-824x470.png" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="image/banner-824x470.png" alt="">
                                </div>
                            </div>
                            <a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                <span class="fa fa-chevron-left" style="font-size:40px"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a href="#slider" class="carousel-control-next" role="button" data-slide="next">
                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                <span class="fa fa-chevron-right"  style="font-size:40px"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <script>
                                $('.carousel').carousel('cycle')
                            </script>
                        </div>

                        <ul class="nav nav-tabs" id="feature-tab">
                            <li class>
                                <a class="nav-link active" href="#feature-tab">GAME MỚI</a>
                            </li>
                            <li class>
                                <a class="nav-link" href="#feature-tab">MUA NHIỀU</a>
                            </li>
                            <li class>
                                <a class="nav-link" href="#feature-tab">PHỔ BIẾN</a>
                            </li>
                        </ul>
                        <div class="group-feature">
                            <div class="feature-item-box container-fluid">
                                <div class="row">
                                    <?php
                                        for($i=0;$i<9;$i++){
                                            ?>
                                                <div class="col-md-4">
                                                    <div class="product">
                                                        <div class="thumbnail">
                                                            <img src="image/steam_wallet_card_5-460x215-266x125.png" alt="">
                                                            <div class="addcartbtn">THÊM VÀO GIỎ</div>
                                                            
                                                        </div>
                                                        <div class="label">PUBG Steam Key</div>
                                                        <div class="price">100.000 VNĐ</div>
                                                        <div class="saleprice">100.000 VNĐ</div>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <!-- Footer -->
    <div id="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-item-label">Chuyên mục</div>
                        <div class="f-item-content">
                            <div><a href="">Game online</a></div>
                            <div><a href="">Game offline</a></div>
                            <div><a href="">Game steam</a></div>
                            <div><a href="">Game garena</a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-item-label">Thông tin</div>
                        <div class="f-item-content">
                            <div><a href="">Giới thiệu</a></div>
                            <div><a href="">Game bản quyền là gì?</a></div>
                            <div><a href="">Chính sách bảo mật</a></div>
                            <div><a href="">Điều khoảng dịch vụ</a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-item-label">Chăm sóc khách hàng</div>
                        <div class="f-item-content">
                            <div><a href="">Hỏi và trả lời</a></div>
                            <div><a href="">Bảo hành</a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-item-label">Liên hệ</div>
                        <div class="f-item-content">
                            <div><a href=""><i class="fab fa-facebook"></i> Facebook</a></div>
                            <div><a href=""><i class="fab fa-google-plus-square"></i> Google+</a></div>
                            <div><a href=""><i class="fab fa-youtube-square"></i> Youtube</a></div>
                            <div><a href=""><i class="fab fa-discord"></i> Discord</a></div>
                            <div><i class="fa fa-phone"></i> 19001969</div> 
                            <div><i class="fa fa-envelope"></i> thisismail@gmail.com</div> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="f-item-label">Vị trí</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14903.241894587956!2d105.7996884!3d20.96012495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ce6d44a0a6964fa!2sCT2B+Xa+La!5e0!3m2!1svi!2s!4v1540662725891"
                            width="100%" height="200" frameborder="0" style="border:0;margin-top:10px" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="col-md-4">
                        <div class="f-item-label">Fanpage</div>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTML.AMV%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=192620087989897"
                            width="100%" height="200" style="border:none;overflow:hidden;margin-top:10px"
                            scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                    <div class="col-md-12" style="text-align: center;border-top: 1px solid rgb(80, 80, 80);line-height: 50px">
                        <i class="fa fa-copyright"></i> Bản quyền thuộc về Kami
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>