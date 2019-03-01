<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Đăng kí</title>

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
                            <li><a href="./login.php">Đăng kí</a></li>
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
                        <div class="col-lg-4">
                            <div class="login_title">
                                <h2  style="text-align: center;">Bạn đã có sẵn tài khoản</h2>
                                <p  style="text-align: center;">Đăng nhập để khám phá và mua hàng.</p>
                            </div>
                            <form class="login_form row" method="post" action="./admin/dang_nhap_thuc_hien.php" onsubmit="return validateForm()">
                                <div class="col-lg-12 form-group">
                                    <input class="form-control" type="text" placeholder="Tên đăng nhập" required="" name="txtTaiKhoan" id="txtTaiKhoan" />
                                </div>
                                <div class="col-lg-12 form-group">
                                    <input class="form-control" type="text" placeholder="Mật khẩu" required="" name="txtMatKhau" id="txtMatKhau "/>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Duy trì đăng nhập</label>
                                        <div class="check"></div>
                                    </div>
                                    <h4>Bạn không nhớ mật khẩu ?</h4>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button type="submit" value="submit" class="btn subs_btn form-control" style="text-align: center; margin-top: 15px;">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                        
                            <div class="login_title">
                                <h2 style="text-align: center;">Tạo tài khoản mới</h2>
                                <p  style="text-align: center;">Làm theo các bước sau để đăng kí tài khoản mới.</p>
                            </div>
                            <form name="txtDangKi" class="login_form row" method="post" action="dang_ki_thuc_hien.php" onsubmit="return validateForm()"> 
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="text" placeholder="Tên đăng nhập" required="" name="txtTaiKhoan" id="txtTaiKhoan">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="email" placeholder="Email" required="" name="txtEmail" id="txtEmail">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="text" placeholder="Tên người dùng" required="" name="txtTenNguoiDung" id="txtTenNguoiDung">
                                </div>
                                <div class="col-lg-6 form-group" id="date"> 
                                   <td >
                                       <input type="radio"/ name="gender" value="1">Nam
                                       <input type="radio"/ name="gender"value="2">Nữ
                                    </td>
                               </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="text" placeholder="Điện thoại" required="" name="txtDienThoai" id="txtDienThoai">
                                </div>
                                <div class="col-lg-6 form-group" id="date">
                                   
                                    <td>
                                        <table>
                                        <select name="day">
                                        <option value="ngay">ngay</option>
                                        <?php
                                            for($i=1;$i<31;$i++)
                                            {
                                               echo"<option value='$i'>$i</option>";
                                            }
                                        ;?>
                                        </select>
                                        <select name="month">
                                            <option value="thang">thang</option>
                                            <?php
                                                $thang=array(1=>"Jan","Feb","Mar","Apr","May","Jun"."Aug","Sep","Oct","Nov","Dec");
                                                foreach($thang as $key=>$tam)
                                                {
                                                    echo"<option value='$key'>$tam</option>";
                                                }
                                            ;?>
                                        </select>
                                        <select name="year">
                                            <option value="nam">nam</option>
                                                <?php
                                                for($j=1950;$j<=date("Y");$j++)
                                                {
                                                    echo"<option value='$j'>$j</option>";
                                                }
                                                ;?>
                                        </select>
                                        </table>
                                    </td>
                                </div>
                                <div class="col-lg-6 form-group" id="date"> 
                                   <td >
                                       <input type="radio"/ name="gender" value="1">Nam
                                       <input type="radio"/ name="gender"value="2">Nữ
                                    </td>
                               </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="password" placeholder="Mật khẩu" required="" name="txtMatKhau" id="txtMatKhau">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="password" placeholder="Nhắc lại mật khẩu" required="" name="txtMatKhauNhacLai" id="txtMatKhau">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button type="submit" value="submit" class="btn subs_btn form-control"  style="text-align: center;">Đăng kí ngay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            #date{
                margin-left:200px;
               margin-bottom:15px;
                width:500px;
               
              
                
            }
            #date select{
                width:100px;
                height:40px;
            
            }
        
            </style>
        <!--================End login Area =================-->
        
        <!--================Footer Area =================-->
        <!-- <footer class="footer_area">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                <img src="img/logo.png" alt="">
                                <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_info_widget">
                                <div class="f_w_title">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Delivery information</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Returns & Refunds</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_service_widget">
                                <div class="f_w_title">
                                    <h3>Customer Service</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_extra_widget">
                                <div class="f_w_title">
                                    <h3>Extras</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_account_widget">
                                <div class="f_w_title">
                                    <h3>My Account</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--</h5>
                </div>
            </div>
        </footer> -->
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