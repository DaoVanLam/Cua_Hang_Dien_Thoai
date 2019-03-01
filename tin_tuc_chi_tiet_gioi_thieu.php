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

		<title>Tin giới thiệu</title>
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
							<li><a href="#">Tin Giới Thiệu</a></li>
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
					<div class="col-md-12" id="tin-chi-tiet-trai">
							<?php 
							// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							// Bước 2: Lấy dữ liệu từ trên đường đẫn
							// $id = $_GET["id"];

							//Bước 3: Hiển thị các dữ liệu trong bảng tbl_tin_tuc ra đây
							$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE loai_tin_tuc_id=1";
							
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
						;?>
							<div>
								<h2><?php echo $row["tieu_de"];?></h2>

								<h5><strong><?php echo $row["mo_ta"];?></strong></h5>
								<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="900px" height="600px" class="cangiua">
								<p><?php echo $row["noi_dung"];?></p>
							</div>
					</div>
					<!-- row -->
			</div>
				<!-- container -->
		</div>
		<!-- SECTION -->
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
