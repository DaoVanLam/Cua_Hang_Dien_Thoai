<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Đăng nhập</title>

        <!-- Icon css link -->
        <link href="css1/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <!-- <link href="css1/bootstrap.min.css" rel="stylesheet"> -->
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css1/style.css" rel="stylesheet">
        <link href="css1/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Electrol -->
        <link rel="icon" href="./img/icon.ico" type="image/x-icon"/>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <script type="text/javascript">
            function validateForm() {
                // Bước 1: Lấy dữ liệu để check
                var taikhoan = document.getElementById("txtTaiKhoan").value;
                var matkhau = document.getElementById("txtMatkhau").value;

                // Bước 2: Kiểm tra dữ liệu hợp lệ hay không?
                if (taikhoan == "") {
                    alert("Bạn chưa nhập tên tài khoản");
                } else if (matkhau == "") {
                    alert("Bạn chưa nhập mật khẩu");
                } else {
                    return true;
                }

                return false;
            }
         </script>
    </head>
    <body>
        
        <!--================Menu Area =================-->
         <!--================Menu Area =================-->
        <?php
        include("top.php");
        ;?>

        <!--================End Menu Area =================-->
        <!--================Categories Banner Area =================-->
       <div id="breadcrumb" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb-tree">
                            <li><a href="./trang_chu.php">Trang Chủ</a></li>
                            <li><a href="./dang_nhap.php">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!--================End Categories Banner Area =================-->
        <!--================login Area =================-->
        <section class="login_area p_100">
            <div class="container">
                <div class="login_inner">
                    <div class="row">
                        <div class="col-lg-12">
                         
                      <div class="col-lg-12" style="text-align: center;">
                                <h4 >Đăng nhập vào tài khoản của bạn</h4>
                                <p style="padding: 15px;">Đăng nhập để khám phá những tính năng của trang web</p>
                            </div>
                            <form  class="login_form row" method="post" action="./admin/dang_nhap_thuc_hien.php" onsubmit="return validateForm()">
                                <div class="col-lg-12 form-group" style="padding-left: 230px;">
                                    <input class="form-control" type="text" placeholder="Tài Khoản" name="txtTaiKhoan">
                                </div>
                                <div class="col-lg-12 form-group" style="padding-left: 230px;">
                                    <input class="form-control" type="text" placeholder="Mật Khẩu" name="txtMatKhau">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <div class="creat_account" style="padding-left: 460px;">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option" style=";">Lưu mật khẩu đăng nhập</label>
                                        <div class="check"></div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-12 form-group" >
                                <div class="col-lg-12 form-group" style="padding-left: 230px;" >
                                   <button type="submit" value="submit"class="btn subs_btn form-control "  style="text-align: center ;">Đăng nhập</button>
                                </div>
                                </div>
                             
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
       
         <?php
       include("footer.php");
       ;?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js1/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js1/popper.min.js"></script>
        <script src="js1/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js1/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="js1/theme.js"></script>
        <!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>