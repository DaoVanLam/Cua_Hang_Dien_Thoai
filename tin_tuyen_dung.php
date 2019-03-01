<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Công Ty Di Động Việt || Tin tuyển dụng</title>
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
							<li><a href="#">Tin Tuyển Dụng</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<style>
			#banner_tintuc {
				margin-bottom:-20px;
				margin-top:-60px;
			}
			#banner_tintuc img{
				width:1142px;
				height:220px;
				
			}
		</style>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
					<div class="row">
						<div class="col-md-8" id="tintuctrai">
							<h3 class="title">TIN TUYỂN DỤNG</h3>
							<hr>
							<table>
								<?php
								// Bước 1: Kết nối đến CSDL 
								include("./config/dbconfig.php");
								$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

								//Bước 2: Hiển thị các dữ liệu trong bảng tbltintuc ra đây
								$sql = "
									SELECT * 
									FROM tbl_tin_tuc
									WHERE loai_tin_tuc_id = 2
									ORDER BY id DESC";
								$dulieu = mysqli_query($ketnoi, $sql);
								while ($row = mysqli_fetch_array($dulieu)) {
								;?>
								<tr>
									<td>
										<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>">
									</td>
									<td>
										<h3 class="product-name"><a style="font-size: 18px;" href="tin_tuc_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["tieu_de"];?></a></h3>
										<p><?php echo $row["mo_ta"];?></p> 
									</td>
								</tr>
								<?php
								}
								;?>
							</table>
						</div>
						<div class="col-md-4" id="tintucphai">
					
					
						<h3 class="title">TIN TỨC KHÁC</h3>
							<hr>
						<div class="list-group">
						<a href="tin_cong_nghe.php" class="list-group-item list-group-item-success">TIN CÔNG NGHỆ</a>
						<a href="tin_khuyen_mai.php" class="list-group-item list-group-item-info">TIN KHUYẾN MẠI</a>
						<a href="tin_hoat_dong.php" class="list-group-item list-group-item-warning">TIN HOẠT ĐỘNG</a>
						</div>
						<h3 class="title">BÀI VIẾT ĐỌC NHIỀU</h3>
						<table>
								<?php
								// Bước 1: Kết nối đến CSDL 
								include("./config/dbconfig.php");
								$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

								//Bước 2: Hiển thị các dữ liệu trong bảng tblsanpham ra đây
								$sql = "
									SELECT * 
									FROM tbl_tin_tuc
									ORDER BY id DESC
									LIMIT 0, 4";
								$dulieu = mysqli_query($ketnoi, $sql);
								while ($row = mysqli_fetch_array($dulieu)) {
								;?>
								<tr><!-- 
									<td>
										<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>">
									</td>
									 -->
									<td valign="top" >
										<div style="padding:10px 10px">
										<h3 class="product-name" ><a style=" font-size: 16px;" href="tin_tuc_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["tieu_de"];?></a></h3>
										<?php echo $row["mo_ta"];?></p>
										</div>
									</td>
								</tr>
								<?php
								}
								;?>
						</table>
					</div>
					<!-- div col -->
				</div>
					<!-- row -->
			</div>
			<!-- contarner -->
		</div>
		<!-- SECTION -->
		<style type="text/css">
						#tintuctrai table tr{
							border-bottom: #ff0000 solid 1px;
							
						}
						#tintuctrai table tr td{
							vertical-align: top;
							padding:10px 10px 10px 0;
						}
						#tintuctrai table tr td img{
							padding:0 10 0 10px;
							width:250px ;
							height:auto;
						}
						#tintucphai table tr td{
							vertical-align: top;
							padding:10px 10px 10px 0;
						}
						#tintucphai table tr td img{
							padding:10px 0;
							width:100px;
							height:auto;
						}


						.title{
						
							text-align: center;
							background-color:#F4F5F7;
						}
						h3{
							font-weight:bold;
						}
						p{
							font-weight:normal;	
						}
					</style>
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
						ORDER BY id DESC
						LIMIT 0,6";
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
		<!-- /Section -->
		<ul class="tab-nav">
		</ul>	
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
		<!-- 
			<div class="col-md-4">
							<h3 class="title">TIN MỚI NHẤT</h3>
							<hr>
							<div id="tin_tuc_trai">
									<div style="float:left">
										<img src="./images/tin_cn_huawe.jpg" width="100px; height: 120px;">
									</div>
									<div style="float:left;margin-left:10px;">
										<h5>Iphone X 256GB</h5>
										<p>Đã lâu lắm rồi Apple mới</p>
									</div>
							</div>
						</div>
					</div>
					<!-- row -->
		<?php
		$PHP_SELF = &$_SERVER['PHP_SELF'];
		echo $PHP_SELF ;
		;?>
		 -->
	</body>
</html>
