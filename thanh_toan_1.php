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

		<title>Electro - HTML Ecommerce Template</title>

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
						<h3 class="breadcrumb-header">Thanh Toán</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Trang Chủ</a></li>
							<li class="active">Thanh Toán</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Thông Tin Thanh Toán</h3>
							</div>
							<form class="contact_us_form row" action="thanh_toan_them_moi.php" method="post" novalidate="novalidate">
							<!-- <div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Họ">
							</div>
							<div class="form-group"> -->
								<input class="input" type="text" name="last-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Điện thoại">
							</div>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa chỉ">
							<!-- </div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div> -->
							
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Tạo tài khoản?
									</label>
									<div class="caption">
										<p>Tạo tài khoản tức là bạn đã đồng ý với các điều khoản của công ty</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						Shiping Details
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Địa chỉ giao hàng</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Gửi đến một địa chỉ khác?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Đơn Hàng Của Bạn</h3>
						</div>
						<div class="order-summary">
							<?php
							if(isset($_SESSION["products"]))
							{
								$total = 0;
								echo '<ol>';
								foreach ($_SESSION["products"] as $cart_itm)
								{
								echo'<div class="cart-list">';
									echo'<div class="product-widget">';
										echo'<div class="product-body">';
											echo'<h3 class="product-name"><a href="#">'.$cart_itm["ten_san_pham"].'</a></h3>';
											echo'<h4 class="product-price"><span class="qty">Số lượng:'.$cart_itm["qty"].'</span>Giá:'.$currency.$cart_itm["gia_tien"].'</h4>';
										echo'</div>';
										echo'<button class="delete">';
			
										echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["id"].'&return_url='.$current_url.'">&times;</a></span>';
										echo'</button>';
								echo'</div>';
									$subtotal = ($cart_itm["gia_tien"]*$cart_itm["qty"]);
									$total = ($total + $subtotal);
								}
								echo '</ol>';		
								echo'<div class="cart-summary">';
								echo '<span class="check-out-txt"><strong>Tổng: '.$currency.$total.'</strong>';
								echo'</div>';
								echo'<div class="cart-btns">';
									echo'<a href="view_cart.php">Xem Giỏ Hàng</a>';
									echo'<a href="view_cart.php">Thanh Toán<i class="fa fa-arrow-circle-right"></i></a>';
								echo'</div>';
							}else{
								echo 'Giỏ hàng trống';
							}
							?>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Chuyển khoản trực tiếp
								</label>
								<div class="caption">
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Thanh toán sec
								</label>
								<div class="caption">
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Thanh toán qua Paypal 
								</label>
								<div class="caption">
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								Tôi đã đọc và chấp nhận các <a href="dieu_khoan.php">điều khoản</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Đặt Hàng</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<?php
		include("footer.php")
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
