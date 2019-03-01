<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Tìm kiếm</title>
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

</head>
<body>
    <?php
    include("top.php");
    ;?>
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
										Trắng
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox" >
									<input type="radio" value="2" name="mausac">
									<label for="category-2">
										<span></span>
										Đen
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="radio" value="3" name="mausac">
									<label >
										<span></span>
										Đỏ
										<small>(740)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="radio" value="4" name="mausac">
									<label >
										<span></span>
										Vàng
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
							</div>
							<from>
						</div>
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
						</div>
						</div>
			
						<!-- /store top filter -->
						<!-- store products -->
						<div class="row">
                            <!-- product -->
							<?php
					// Nếu người dùng submit form thì thực hiện
				
					if (isset($_REQUEST['ok_mausac'])) 
					{
						$check=$_POST['mausac'];
						if($check == 0)
						{
							$query = "select * from tbl_san_pham where mau_sac_id = 1" ;
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
									
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
										}
							}
							
							else if($check == 2){
							include("./config/dbconfig.php");
							$query = "select * from tbl_san_pham where mau_sac_id=2" ;
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
												</div>
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
										}
							}
							else if($check == 3){
							include("./config/dbconfig.php");
							$query = "select * from tbl_san_pham where mau_sac_id = 3" ;
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
							}
							else if($check == 4){
							$query = "select * from tbl_san_pham where mau_sac_id = 4" ;
							$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
							}
							else if($check == 4){
							$query = "select * from tbl_san_pham where mau_sac_id = 4" ;
							$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
											
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
									
							}		
							else if($check == 5){
								$query = "select * from tbl_san_pham where mau_sac_id = 5" ;
							$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
											
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
							}
						}
						?>
						<!-- TÌM KIẾM THEO BỘ NHỚ -->




							<?php
					// Nếu người dùng submit form thì thực hiện
				
					if (isset($_REQUEST['ok_bonho'])) 
					{
						$check=$_POST["tukhoa"];
						if($check == 0)
						{
							$query = "select * from tbl_san_pham where bo_nho_id = 1" ;
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
									
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
										}
							}
							
							else if($check == 1){
							include("./config/dbconfig.php");
							$query = "select * from tbl_san_pham where bo_nho_id = 2" ;
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
												</div>
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
										}
							}
							else if($check == 2){
							include("./config/dbconfig.php");
							$query = "select * from tbl_san_pham where bo_nho_id = 3" ;
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
														
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
							}
							else if($check == 3){
							$query = "select * from tbl_san_pham where bo_nho_id = 4" ;
							$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
							}
							else if($check == 4){
							$query = "select * from tbl_san_pham where bo_nho_id = 5" ;
							$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
							$sql = mysqli_query($ketnoi,$query);
							$num = mysqli_num_rows($sql);
							if ($num > 0 ) 
							{
								while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<div class="container">
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  	
										} 
									}
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
									}
							}		
						}
							?>



						<!-- TÌM KIẾM THEO GIÁ -->



							<?php
					// Nếu người dùng submit form thì thực hiện	
					if (isset($_REQUEST['ok_gia'])) 
					{
						
                        $price_From =$_POST['txtPriceFrom'];
                        $price_To = $_POST['txtPriceTo'];  
                            include("./config/dbconfig.php");
                            $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
							$lcSql = "select * from tbl_san_pham 
							where (gia_tien BETWEEN $price_From and $price_To)
							LIMIT 0,6
							";
                            $result = mysqli_query($ketnoi,$lcSql);  
                            $num = mysqli_num_rows($result);
                            if ($num > 0 )  
                            { 
                            while ($row = mysqli_fetch_assoc($result)){
									?>
											<div class=" col-md-3 col-xs-6">
												<div class="product">
													<div class="product-img">
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
													</div>
													<div class="product-body">
														<p class="product-category">Sản phẩm</p>
														<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
														<h4 class="product-price"><?php echo $row["gia_tien"];?></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
													</div>
												</div>
											</div>
											<?php  
										} 
                                    }
									else {
										echo "Không tìm thấy sản phẩm nào liên quan";
                                        }
                                    }
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
</div>
<!-- /FOOTER -->
		<?php
		include("footer.php");
		;?>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		
	</body>
</html>