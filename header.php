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