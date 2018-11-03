<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
   
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script>
             function checkValidate() {
                    //Tiến hành lấy dữ liệu trên Form
                    var user = document.getElementById("txtUser").value;
                    var pass = document.getElementById("txtPass").value;
                    //alert(user + pass + email + mobile);

                    //var msg = ""; //Biến thông điệp các lỗi
                    var status = false; //Biến trạng thái

                    //Kiểm tra password
                    if (pass == "") {
                        //msg += "Mật khẩu không được phép để trống.\n";
                        document.getElementById("txtPass").style.borderColor = "red";
                        document.getElementById("lbPass").style.display = "block";
                        document.getElementById("lbPass").innerHTML = "Hãy nhập mật khẩu";
                        status = true;
                    }else{
                        document.getElementById("txtPass").style.borderColor = "#D8D8D8";
                        document.getElementById("lbPass").style.display = "none";
                    }
                 
                    //Kiểm tra username
                    var mo = /^([0-5]{10})$/;
                    var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (user == "") {
                        document.getElementById("txtUser").style.borderColor = "red";
                        document.getElementById("lbUser").style.display = "block";
                        document.getElementById("lbUser").innerHTML = "Hãy nhập tên tài khoản";
                        status = true;
                    }else{
                        //Kiểm tra giá trị email có khớp với biểu thức RegExp
                        if (re.test(user) == false && mo.test(user)==false) {
                            document.getElementById("txtUser").style.borderColor = "red";
                            document.getElementById("lbUser").style.display = "block";
                            document.getElementById("lbUserb").innerHTML = "Tên người dùng không tồn tại";
                            status = true;
                        }else{
                            document.getElementById("txtUser").style.borderColor = "#D8D8D8";
                            document.getElementById("lbUser").style.display = "none";
                        }
                    }

                    //Kiểm tra biến trạng thái 'Lỗi' hay 'Không'
                    if (status == true) {
                        //alert(msg);
                        return false;
                    } else {
                        return true;
                    }
                }
    </script>


</head>
<body>

    <!-- Header -->
    <?php include "header.php";?>
    
    <!-- Navigator -->
    <?php include "navigator.php"?>
    <!-- Main -->

    <div id="login1" class="container-fluid">
        <div class="container">
            <div class="row" style="  ">
                <div class="col-lg-9 rightLogin">
                    <div class="path">
                        <span><a href="" title="Trang Chủ"><i class="fa fa-home"></i></a></span>&nbsp;/
                        <span><a href="">Tài khoản</a></span>&nbsp;/
                        <span><a href="">Đăng nhập</a></span>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="content">
                        <form action="profile.html" method="post" onsubmit="return checkValidate();">
                            <div class="form-group form1" >
                              <label style="margin-right: 395px">Số điện thoại hoặc email:</label>
                              <input type="text" class="form-control" id="txtUser" placeholder="Enter phone number or email" name="user" style="width: 400px;">
                              <p style="color: red;" id="lbUser"></p>
                          </div>
                          <div class="form-group2 form2">
                              <label style="margin-right: 501px;">Mật khẩu:</label>
                              <input type="password" class="form-control" id="txtPass" placeholder="Enter password" name="password" style="width: 395px;">
                              <p style="color: red;" id="lbPass"></p>
                              <div style="margin-top: 10px; margin-right: 454px;"><a href="forgetpass.html" target="_blank" style="text-decoration: none;">Quên mật khẩu ?</a></div>
                          </div>
                          <button type="submit" class="btn btn-warning">Đăng Nhập</button>
                          <div class="text">Hoặc đăng nhập bằng :</div>
                          <div class="socialIcon">
                              <a href="https://www.facebook.com" title="Facebook" class="btn btn-facebook btn-lg fb" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                              <a href="https://plus.google.com/discover" title="Google+" class="btn btn-googleplus btn-lg google" target="_blank"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
                          </div>
                        </form>
                    </div>
                    <div class="bottom">
                        <h5><b>Nếu bạn chưa có tài khoản ?</b></h5>
                        <div>Đăng ký tài khoản</div>
                        <div>Bằng cách đăng ký tài khoản bạn có thể mua sắm nhanh hơn, cập nhật tình trạng đơn hàng,<br>
                            theo dõi những đơn hàng đã đặt
                        </div>
                        <button class="btn btn-warning">Đăng ký</button>
                    </div>
                </div>
                <div class="col-lg-3 sidebar">
                    <h5>TÀI KHOẢN</h5>
                    <ul>
                        <li><a href="#">Đăng nhập</a></li>
                        <li><a href="#">Đăng ký</a></li>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="#">Tài khoản của tôi</a></li>
                        <li><a href="#">Yêu thích</a></li>
                        <li><a href="#">Giao dịch</a></li>
                        <li><a href="#">Đơn hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
    <div class="clearfix"></div>

    <!-- Footer -->
    <?php include "footer.php"?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav li").hover(function(){
                $(this).find("ul:first").slideDown(500);
            },function(){
                $(this).find("ul:first").hide(300);
            });

        });
    </script>
</body>
</html>