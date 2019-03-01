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

		<title>Trang sản phẩm Sony</title>
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

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<?php
		include("top.php");
		;?>
		<div id="hot-deal" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="hot-deal">
							
								<ul class="hot-deal-countdown">
								<iframe src="http://free.timeanddate.com/countdown/i6b9j7or/n95/cf12/cm0/cu4/ct0/cs0/ca0/co0/cr0/ss0/cacf00/cpc000/pcfff/tcfff/fs100/szw448/szh189/iso2018-07-05T20:00:00" allowTransparency="true" frameborder="0" width="154" height="42"></iframe>
								</ul>
								<a class="primary-btn cta-btn" href="#">MUA NGAY</a>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /HOT DEAL SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
							<!-- aside Widget -->
							<form action="trang_loc_san_pham.php" method="post">
							<div class="aside">
							<h4 class="aside-title">Gía Bán</h4>
							<div class="price-filter">
								<div class="input-number price-min">
									<input type="number" name="txtPriceFrom"  placeholder="Từ giá">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input type="number" name="txtPriceTo" placeholder="Đến giá">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
									<button id="btnloc" class="search-btn" type="submit" name="ok_gia" value="search" />Lọc</button>
							</div>
						
							</form>
						</div>
						<!-- /aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Màu sắc</h3>
							<div class="checkbox-filter">
							<form action="trang_loc_san_pham.php" method="post">
							<div class="input-checkbox" >
									<input type="radio" value="1" name="mausac">
									<label for="category-1">
										<span></span>
										Vàng
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox" >
									<input type="radio" value="2" name="mausac">
									<label for="category-2">
										<span></span>
										BẠC
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="radio" value="3" name="mausac">
									<label >
										<span></span>
										Đen
										<small>(740)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="radio" value="4" name="mausac">
									<label >
										<span></span>
										Trắng
										<small>(740)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="radio" value="5" name="mausac">
									<label >
										<span></span>
										Xám
										<small>(740)</small>
									</label>
								</div>
								<button id="btnloc" class="search-btn" type="submit" name="ok_mausac" value="search" />Lọc</button>
								</form>
							</div>
						</div>
						<!-- /aside Widget -->
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Điện Thoại Bán Chạy</h3>
							<!-- product -->
							<?php
							// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							//Bước 2: Hiển thị các dữ liệu trong bảng tbltintuc ra đây
							$sql = "
								SELECT * 
								FROM tbl_san_pham
								WHERE trang_thai=2
								ORDER BY id DESC
								LIMIT 0,6
								";
							$dulieu = mysqli_query($ketnoi, $sql);
							while ($row = mysqli_fetch_array($dulieu)) {
							;?>
							<div class="product-widget">
								<div class="product-img">
								<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
									<h4 class="product-price"><?php echo number_format($row["gia_tien"]);?>đ<del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del></h4>
								</div>
							</div>

							<?php
							}
							;?>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<form action="trang_loc_san_pham.php" method="post">
								Bộ Nhớ
								<select class="input-select" name="tukhoa">
										<option value="0">16GB</option>
										<option value="1">32GB</option>
										<option value="2">64GB</option>
										<option value="3">128GB</option>
										<option value="4">256GB</option>
								</select>
								<button id="btnloc" class="search-btn" type="submit" name="ok_bonho" value="search" />Lọc</button>
								</form>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->
						<style>
						</style>
						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
							// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							//Bước 2: Hiển thị các dữ liệu trong bảng tbltintuc ra đây
							$sql = "
								SELECT * 
								FROM tbl_san_pham
								WHERE loai_san_pham_id=5
								ORDER BY id DESC";
							$dulieu = mysqli_query($ketnoi, $sql);
							while ($row = mysqli_fetch_array($dulieu)) {
							;?>
							<div class="col-md-4 col-xs-6">
							<form method="post" action="cap_nhat_gio_hang.php">
								<div class="product">
									<div class="product-img">
									<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
										<!-- <div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div> -->
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
										<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo number_format($row["gia_tien"]);?>đ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<!-- <div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div> -->
									</div>
									<div class="add-to-cart">
										<input type="text" size="5" name="product_qty" value="1">
										<input type="hidden" name="product_id" value=<?php echo $row["id"];?> />
										<input type="hidden" name="type" value="add" />';
										<input type="hidden" name="return_url" value="'.$current_url.'" />';
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</button>
									</div>
								</div>
							</form>
							</div>
							<?php
							}
							;?>
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Hiển thị 20-100 sản phẩm</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- FOOTER -->
		<?php
		include("footer.php");
		;?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
