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
    <?php include "header.php"?>
    
    <!-- Navigator -->
    <?php include "navigator.php"?>

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
                                    <!-- <?php
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
                                    ?> -->
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
    <?php include "footer.php"?>
</body>
</html>