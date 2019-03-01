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

		<title>Chi tiết tin tức</title>
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
					`tin_tuc_id`) 
				VALUES (
					NULL, 
					'".$name."',
					'".$email."', 
					'".$mess."',
					'".$id."'
					)";
				// Cho thực thi câu lệnh SQL trên
				echo($sql);
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
						<ul class="breadcrumb-tree">
							<li><a href="#">Trang Chủ</a></li>
							<li><a href="#">Tin Tức</a></li>
							<li><a href="#">Tin Tức Chi Tiết</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8" id="tin-chi-tiet-trai">
							<?php 
							// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							// Bước 2: Lấy dữ liệu từ trên đường đẫn
							$id = $_GET["id"];

							//Bước 3: Hiển thị các dữ liệu trong bảng tbl_tin_tuc ra đây
							$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE id = ".$id;
							
							$dulieu1 = mysqli_query($ketnoi, $sql);

							$row1 = mysqli_fetch_array($dulieu1)
						;?>
							<div>
								<h2><?php echo $row1["tieu_de"];?></h2>

								<h5><?php echo $row1["mo_ta"];?></h5>
								<img src="<?php echo "./admin/".$row1["anh_minh_hoa"];?>"width="750px";heght="auto"; >
								<p><?php echo $row1["noi_dung"];?></p>
							</div>
					</div>
						<!-- /Product details -->

					<div class="col-md-4" id="tintucphai">
						<h3 class="title">SẢN PHẨM MỚI</h3>
						<table>
								<?php
								// Bước 1: Kết nối đến CSDL 
								include("./config/dbconfig.php");
								$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

								//Bước 2: Hiển thị các dữ liệu trong bảng tblsanpham ra đây
								$sql = "
									SELECT * 
									FROM tbl_san_pham
									ORDER BY id DESC
									LIMIT 0, 4";
								$dulieu = mysqli_query($ketnoi, $sql);
								while ($row = mysqli_fetch_array($dulieu)) {
								;?>
								<tr>
									<td>
										<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>">
									</td>
									
									<td valign="top" >
										<div style="padding:10px 10px">
										<h3 class="product-name"><a href="san_pham_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_san_pham"];?></a></h3>
										<h4 class="product-price"><?php echo number_format($row["gia_tien"]);?>đ<del class="product-old-price"><?php echo $row["gia_khuyen_mai"];?></del></h4>
									</div>
									</td>
								</tr>
								<?php
								}
								;?>
						</table>
						<h3 class="title">TIN TỨC KHÁC</h3>
						<div class="list-group">
						<a href="#" class="list-group-item list-group-item-success">TIN TUYỂN DỤNG</a>
						<a href="#" class="list-group-item list-group-item-info">TIN KHUYẾN MẠI</a>
						<a href="#" class="list-group-item list-group-item-warning">TIN HOẠT ĐỘNG</a>
						</div>
						<h3 class="title">BÀI VIẾT ĐỌC NHIỀU</h3>
					</div>
					<!-- div col -->
					<!-- div col -->
					</div>
					<!-- row -->
			</div>
				<!-- container -->
		</div>
		<!-- SECTION -->
	<!-- SECTION -->
	<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li><a data-toggle="tab" href="#tab3">Bình Luận Bài Viết (3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
											
												<ul class="reviews">
														<!-- product -->
												<?php
												//URL hiện tại của trang. cart_update.php sẽ chuyển lại trang này.
											
												include("./config/dbconfig.php");
												$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
												$sql="SELECT * 
												FROM tbl_binh_luan
												WHERE check_cm='Y' and tin_tuc_id = $id";
												$dulieu3 = mysqli_query($ketnoi,$sql);
												while ($row3= mysqli_fetch_array($dulieu3)){
												;?>
													<li>
														<div class="review-heading">
															<h5 class="name"><?php echo $row3["ho_ten"];?></h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>	
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
										<div class="col-md-6">
											<div id="review-form">
												<?php $id=$_GET["id"];?>
												<form class="review-form" action ="tin_tuc_chi_tiet.php?id=<?php echo $id;?>" method = "post">
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

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">TIN TỨC LIÊN QUAN</h3>
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
						WHERE id = ".$id."
						Limit 0,6";
					$dulieu = mysqli_query($ketnoi, $sql);
					while ($row4 = mysqli_fetch_array($dulieu)) {
					;?>
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo "./admin/".$row4["anh_minh_hoa"];?>" >
								<div class="product-label">
								</div>
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="tin_tuc_chi_tiet.php?id=<?php echo $row4["id"];?>"><?php echo $row4["tieu_de"];?></a></h3>
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
