
<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Công Ty Di Động Việt || Trang Chủ</title>
		<!-- Icon -->
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
		<!--  -->
		<script src="./js/jquery1.min.js"></script>
		<script src="./js/search.js"></script>
		<script type="text/javascript" src="./js/coin-slider.js"></script>
	
		<link rel="stylesheet" href="./css/coin-slider-styles.css" type="text/css" />
	<body>
		<?php
		$current_url = base64_encode($_SERVER['REQUEST_URI']);
		include("top.php");
		// include("header-menu.php");
		;?>
		<div class="wrapper">
		<div class="main-wrap">
			<div class="container">
				<div class="box-slider-home">
					<div class="row">
						<div class=" col-md-8 col-xs-6 ">
							<div id="slide">
								<a href="#" target="_blank">
									<img src="./images/Slide1.png" alt="Apple giảm đến 4 triệu" title="Apple giảm đến 4 triệu">
								</a>

								<a href="#" target="_blank">
									<img src="./images/slide2.png" alt="Điện thoại trợ giá 9 triệu" title="Điện thoại trợ giá 9 triệu">
								</a>

								<a href="#" target="_blank">
									<img src="./images/Slide3.jpg" alt="J7 Pro giảm 500.000đ" title="J7 Pro giảm 500.000đ">
								</a>

								<a href="#" target="_blank">
									<img src="./images/slide4.jpg" alt="Độc quyền Redmi S2" title="Độc quyền Redmi S2">
								</a>

								<a href="#" target="_blank">
									<img src="./images/slide5.jpg" alt="S9 giảm 3 triệu" title="S9 giảm 3 triệu"/>
								</a>
							</div>
							<script>
								$('#slide').coinslider();
							</script>
						</div>
						<div class="col-xs-6 col-md-4">
							<div class="slider-banner" style="width: 380px; float: left; margin-left:-4px;">
								<div>
									<a href="#" title="Bảng giá iphone X- iPhone8 tại Nhật Cường Mobile"><img src="./images/banner.jpg"style="height: 150px; width: 366px;" > </a>
								</div>
							<div class="km" >
								<a href="#" title="Bảng giá iPhone likenew"><img src="./images/km.jpg" style="height: 150px;width: 181px"></a>
								<a href="#" title="Bảng giá iPhone cũ"><img src="./images/km2.jpg"style="height: 150px;width: 181px"></a>    
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./images/san_pham_iphone.jpeg" alt="">
							</div>
							<div class="shop-body">
								<h3>Điện Thoại<br>Iphone</h3>
								<a href="san_pham_iphone.php" class="cta-btn">MUA NGAY<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./images/san_pham_sam_sung.jpeg" alt="">
							</div>
							<div class="shop-body">
								<h3>Điện Thoại<br>SamSung</h3>
								<a href="san_pham_sam_sung.php" class="cta-btn">MUA NGAY<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./images/san_pham_oppo.jpeg" alt="">
							</div>
							<div class="shop-body">
								<h3>Điện Thoại<br>Oppo</h3>
								<a href="san_pham_oppo.php" class="cta-btn">MUA NGAY<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<!-- SECTION -->
<style>
	.cta-btn{
		color:red;
	}
</style>
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">SẢN PHẨM MỚI</h3>
							<div class="section-nav">
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-1	">
										<!-- product -->
										<?php
										//URL hiện tại của trang. cart_update.php sẽ chuyển lại trang này.
									
										include("./config/dbconfig.php");
                       					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
										$sql="SELECT * 
										FROM tbl_san_pham
										 ORDER BY id DESC";
										$dulieu = mysqli_query($ketnoi,$sql);
										while ($row = mysqli_fetch_array($dulieu)){
										;?>
										<div class="product">
										<form method="post" action="cap_nhat_gio_hang.php">
											<div class="product-img">
											<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
												<h4 class="product-price"><?php echo number_format($row['gia_tien']);?>đ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<input type="text" size="5" name="product_qty" value="1">
												<input type="hidden" name="product_id" value=<?php echo $row["id"];?> />
												<input type="hidden" name="type" value="add" />';
												<input type="hidden" name="return_url" value="'.$current_url.'" />';
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</button>
											</div>
											</form>
										</div>
										<?php
										}
										;?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">SẢN PHẨM BÁN CHẠY</h3>
							<div class="section-nav">
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-1	">
										<!-- product -->
										<?php
										//URL hiện tại của trang. cart_update.php sẽ chuyển lại trang này.	
										include("./config/dbconfig.php");
                       					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
										$sql="SELECT * 
										FROM tbl_san_pham
										 ORDER BY id DESC";
										$dulieu = mysqli_query($ketnoi,$sql);
										while ($row = mysqli_fetch_array($dulieu)){
										;?>
										<div class="product">
										<form method="post" action="cap_nhat_gio_hang.php">
											<div class="product-img">
											<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
												<h4 class="product-price"><?php echo number_format($row["gia_tien"]);?>đ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<input type="text" size="5" name="product_qty" value="1">
												<input type="hidden" name="product_id" value=<?php echo $row["id"];?> />
												<input type="hidden" name="type" value="add" />';
												<input type="hidden" name="return_url" value="'.$current_url.'" />';
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</button>
											</div>
											</form>
										</div>
										<?php
										}
										;?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row" id="tin_tuc_duoi">

					<div class="col-md-12">
						<div class="section-title ">
							<h3 class="title">Tin Nổi Bật Trong Tuần</h3>
						</div>
					</div>
					<?php
					// Bước 1: Kết nối đến CSDL 
					include("./config/dbconfig.php");
					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

					//Bước 2: Hiển thị các dữ liệu trong bảng tbltintuc ra đây
					$sql = "
						SELECT * 
						FROM tbl_tin_tuc
						WHERE loai_tin_tuc_id=5
						ORDER BY id DESC
						LIMIT 0,3
						";
					$dulieu = mysqli_query($ketnoi, $sql);
					while ($row = mysqli_fetch_array($dulieu)) {
					;?>
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" >
								<div class="product-label">
								</div>
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="tin_tuc_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["tieu_de"];?></a></h3>
							</div>
						</div>
					</div>
					<?php
					}
					;?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<style>
		#tin_tuc_duoi{
			background-color:#f0ffff;
		}
		</style>
		
		<?php
		include("footer.php");
		;?>

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/menuTop.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
