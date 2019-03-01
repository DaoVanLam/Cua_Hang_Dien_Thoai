<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Liên hệ</title>

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
        <link href="css/style.css" rel="stylesheet">
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

    </head>
    <body>
        
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
                            <li><a href="./lien_he.php">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!--================End Categories Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area">
            <div class="container">
                <!-- <div class="contact_title">
                    <h2>Liên Hệ</h2>
                </div> -->
                <div class="row contact_details" style="text-align: center;">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>232 Tân Hương, P. Tân Quý<br /> Q. Tân Phú, TPHCM.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body" >
                                <a href="#">+1900-2006</a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">lienhe@didongviet.vn</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form_inner">
                    <div class="contact_title">
                    <h2>Nhập Phản Hồi</h2>
                 <div class="row contact_details">
                    <form class="contact_us_form row" action="lien_he_them_moi.php" method="post" novalidate="novalidate">
                   
                        <div class="form-group col-lg-4" >
                        
                            <input type="text"  id="name" name="HoTen" placeholder="Họ và Tên*">
                            </div>
                       
                        <div class="form-group col-lg-4">
                            <input type="email"  id="email" name="Email" placeholder="Địa chỉ Email *">
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="text"  id="website" name="DienThoai" placeholder="Điện Thoại *">
                        </div>
                       
                            <textarea style="width:1025px;height: 250px;"  name="NoiDungPhanHoi" id="message" rows="1" placeholder="Nội dung phản hồi"></textarea>
                      
                                           
                       <div class="form-group col-lg-12">
                            <button style="margin-left: 0px;" type="submit" value="submit" class="btn subs_btn form-control"
                            style="width: 200px; line-height: 0px;  ">Gửi phản hồi</button>
                        </div>
                          
                    </form>
                    </div>
                </div>
            </div>
        </section>
            
        <!--================End Contact Area =================-->
        
        <!--================Footer Area =================-->
       <?php
       include("footer.php");
       ;?>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
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
        
        <!-- contact js -->
        <script src="js1/jquery.form.js"></script>
        <script src="js1/jquery.validate.min.js"></script>
        <script src="js1/contact.js"></script>
        
        <script src="js1/theme.js"></script>
        <!-- Electrol -->
         	<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

    </body>
</html>