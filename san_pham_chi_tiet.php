<?php
session_start();
;?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Chi tiết sản phẩm</title>
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
		<?php
		include("top.php");
		;?>
		<?php
		include("./config/dbconfig.php");
		$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
		$id=$_GET["id"];
		$loi=array();
		$loi["name"]=$loi["mess"]=NULL;
		$name=$mess=NULL;
		if(isset($_POST["ok"]))
		{
			if(empty($_POST["txtName"]))
			{
				$loi["name"]="* Xin vui long nhap ten";
			}
			else
			{
				$name=$_POST["txtName"];
			}
			if(empty($_POST["txtNoiDung"]))
			{
				$loi["mess"]="* Xin vui long nhập nội dung bình luận";
			}
			else
			{
				$mess=$_POST["txtNoiDung"];
			}
			if($mess && $name)
			{
				$email=$_POST["txtEmail"];
				include("./config/dbconfig.php");
				 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
				 $sql = "
				INSERT INTO `tbl_binh_luan` (
					`binh_luan_id`, 
					`ho_ten`, 
					`email`, 
					`noi_dung`,
					`san_pham_id`) 
				VALUES (
					NULL, 
					'".$name."',
					'".$email."', 
					'".$mess."',
					'".$id."'
					)";
				// Cho thực thi câu lệnh SQL trên
				mysqli_query($ketnoi, $sql);
				echo '
					<script type="text/javascript">
						alert("Gửi bình luận thành công và đang chờ kiểm duyệt!!!");
						window.location.origin;
					</script>';

				}
				}
				;?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
					<?php
					// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							// Bước 2: Lấy dữ liệu từ trên đường đẫn
							$id = $_GET["id"];

							//Bước 3: Hiển thị các dữ liệu trong bảng tbl_tin_tuc ra đây
							$sql = "
								SELECT * 
								FROM tbl_san_pham
								WHERE id = ".$id;
							
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
						;?>
						<ul class="breadcrumb-tree">
							<!-- <li><a href="#">Trang Chủ</a></li>
							<li><a href="#">Sản Phẩm</a></li>
							<li><a href="#">Sản Phẩm Chi Tiết</a></li> -->
							<h3><?php echo $row["ten_san_pham"];?></h3>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<style>
		#breadcrumb {
		padding-left:100px;

		}
		</style>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<?php
					// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							// Bước 2: Lấy dữ liệu từ trên đường đẫn
							$id = $_GET["id"];

							//Bước 3: Hiển thị các dữ liệu trong bảng tbl_tin_tuc ra đây
							$sql = "
								SELECT * 
								FROM tbl_san_pham
								WHERE id = ".$id;
							
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
						;?>
					<div class="col-md-4">
						<div id="product-main-img">
							<div class="product-preview">
							<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
							</div>
						</div>
					</div>
					<!-- Product details -->
					<div class="col-md-4">
						<div class="product-details">
							<div>
							<h4 class="product-price"><?php echo number_format($row["gia_tien"]);?>đ<del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del></h4>
							</div>
							<!-- <p>Mô tả sản phẩm</p> -->
							<div class="product-options">
								<label>
									Bộ nhớ
									<select class="input-select">
										<option value="0">32GB</option>
										<option value="0">64GB</option>
										<option value="0">128GB</option>
									</select>
								</label>
								<label>
									Màu sắc
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Số lượng
									<input type="text" size="5" name="product_qty" value="1">
								</div>
								<input type="hidden" name="product_id" value=<?php echo $row["id"];?> />
								<input type="hidden" name="type" value="add" />
								<input type="hidden" name="return_url" value="'.$current_url.'" />
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> Thêm vào danh sách yêu thích</a></li>
								<!-- <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li> -->
							</ul>
							<ul class="product-links">
								<li>Thể Loại:</li>
								<li><a href="#">Iphone</a></li>
								<li><a href="#">Samsung</a></li>
							</ul>

							<ul class="product-links">
								<li>Chia sẻ:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<div col-md-4>
						<h3>Mô tả sản phẩm</h3>
						<?php echo'<hr>' ;?>
						<h5><?php echo $row["mo_ta"] ;?></h5>
						<?php echo'<hr>' ;?>
					</div>
					
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
							
								<li><a data-toggle="tab" href="#tab2">Chi tiết</a></li>
								<li><a data-toggle="tab" href="#tab3">Nhận xét (3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
											<ul class="reviews">
														<!-- product -->
												<?php
												include("./config/dbconfig.php");
												$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
												$sql="SELECT * 
												FROM tbl_binh_luan
												WHERE check_cm ='Y' and san_pham_id = $id";
												$dulieu3 = mysqli_query($ketnoi,$sql);
												while ($row3= mysqli_fetch_array($dulieu3)){
												;?>
													<li>
														<div class="review-heading">
															<h5 class="name"><?php echo $row3["ho_ten"];?></h5>
															<p class="date"><?php echo $row3["time"] ;?></p>	
														</div>
														<div class="review-body">
															<p><?php echo $row3["noi_dung"];?></p>
														</div>
													</li>
													<?php
												}?>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
										<div id="review-form">
												<?php $id=$_GET["id"];?>
												<form class="review-form" action ="san_pham_chi_tiet.php?id=<?php echo $id;?>" method = "post">
													<input class="input" type="text" placeholder="Họ Tên" name="txtName" value="<?php echo $loi['name'];?>">
													<input class="input" type="email" placeholder="Email" name ="txtEmail">
													<textarea name="txtNoiDung" class="input" placeholder="Nội dung bình luận"><?php echo $loi['mess'];?></textarea>
													<button class="primary-btn" name="ok" type="submit">Gửi</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">SẢN PHẨM LIÊN QUAN</h3>
						</div>
					</div>

					<!-- product -->
					<!-- product -->
					<?php
					// Bước 1: Kết nối đến CSDL 
					include("./config/dbconfig.php");
					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

					//Bước 2: Hiển thị các dữ liệu trong bảng tbltintuc ra đây
					$sql = "
						SELECT * 
						FROM tbl_san_pham
						ORDER BY id DESC
						LIMIT 0,8
						";
					$dulieu = mysqli_query($ketnoi, $sql);
					while ($row = mysqli_fetch_array($dulieu)) {
					;?>
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="270px" height="auto">
								<div class="product-label">
									<span class="sale">-30%</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
								<h4 class="product-price"><del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del><br><?php echo $row["gia_tien"];?></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
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
		<!-- /Section -->
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
