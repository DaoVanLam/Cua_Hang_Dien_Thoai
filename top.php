<!--HEADER -->
<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> 1900 2006</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> lienhe@didongviet.vn</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 232 Tân Hương, P. Tân Quý, Q. Tân Phú, TP.HCM</a></li>
				</ul>
				<ul class="header-links pull-right" style="color:white">
				<?php
              if(isset($_SESSION['tai_khoan']))
              {
                echo"Xin Chào".$_SESSION['tai_khoan']."....<a href='dang_xuat.php'>Đăng xuất</a>";
              }
              else{
                
                echo"<li><a href='dang_ki.php'>Đăng kí</a></li>";
                echo"<li><a href='dang_nhap.php'>Đăng nhập</a></li>";
              }
			  ;?>
			  </ul>
			</div>
		</div>
		<!-- /TOP HEADER -->
		<style>
				.pull-right ul li a{
					color:white;
				}
		</style>

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="./img/didongviet_logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">

						<div class="header-search">

							<form action="tim_kiem_main.php" method="get">

								<!-- <select class="input-select" name="tukhoa" style="width: 120px; font-size: 13px; border-radius: 40px; ">Tìm theo
									<option value="1">Sản phẩm</option>
									<option value="2">Tin tức</option>
								</select> -->
								<input id="txtSearch" class="input"  type="text" name="search" style="width: calc(100% - 220px);margin-right: -4px; border-radius: 40px 0px 0px 40px;"onfocus="if (this.value == 'Bạn muốn tìm gì …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Bạn muốn tìm gì …';}" placeholder="Bạn muốn tìm gì..." />
								
								<button class="search-btn" type="submit" name="ok" value="search" />Tìm Kiếm</button>
								<!-- <input type="submit" name="ok" value="search" />  -->
								<!-- <input type="submit" name="ok" value="search" /> -->
							</form> 
						<!-- <form action="tim_kiem.php" method="get">
							Search: <input type="text" name="search" />
							<input type="submit" name="ok" value="search" />
						
							</form> -->
							<ul class="quick-result">
					
							</ul>
							
								
						</div>
					</div>

					<!-- /SEARCH BAR -->
					<!-- <form action="search.php" method="get">
						Search: <input type="text" name="search" />
						<input type="submit" name="ok" value="search" />
           			 </form> -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="https://www.facebook.com/didongviet/">
									<i class="fa fa-heart-o"></i>
									<span>Yêu Thích</span>
									<div class="qty"></div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href"listCart.php">
									<i class="fa fa-shopping-cart"></i>
									<span>Giỏ Hàng</span>
									<div class="qty"></div>
								</a>
								<div class="cart-dropdown">
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
													echo'<h3 class="product-name"><a href="san_pham_chi_tiet">'.$cart_itm["ten_san_pham"].'</a></h3>';
													echo'<h4 class="product-price"><span class="qty">'.$cart_itm["qty"].'</span>'.$cart_itm["gia_tien"].'đ</h4>';
												echo'</div>';
												echo'<button class="delete">';
					
												echo '<span class="remove-itm"><a href="cap_nhat_gio_hang.php?removep='.$cart_itm["id"].'&return_url='.$current_url.'">&times;</a></span>';
												echo'</button>';
										echo'</div>';
											$subtotal = ($cart_itm["gia_tien"]*$cart_itm["qty"]);
											$total = ($total + $subtotal);
										}
										echo '</ol>';		
										echo'<div class="cart-summary">';
										echo '<span class="check-out-txt"><strong>Tổng : '.$total.'đ</strong>';
										echo'</div>';
										echo'<div class="cart-btns">';
											echo'<a href="xem_gio_hang.php">Xem Giỏ Hàng</a>';
											echo'<a href="thanh_toan.php">Thanh Toán<i class="fa fa-arrow-circle-right"></i></a>';
										echo'</div>';
									}else{
										echo 'Giỏ hàng trống';
									}
									?>
								</div>
							<div>
							<!-- /Cart -->
							<!--  -->

							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
			
				<ul class="main-nav nav navbar-nav" id="menuTop">
				<?php
					include("./config/dbconfig.php");
					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
					$sql = "SELECT menu_id, ten_menu, dan_link FROM tbl_menu";
					//thực hiện câu lệnh truy vấn lấy chuyên mục chính ra bên ngoài
					mysqli_set_charset($ketnoi, 'UTF8');
					$result=mysqli_query($ketnoi,$sql);
					while ($row = mysqli_fetch_assoc($result)) {
						echo"<li><a href='$row[dan_link]'>$row[ten_menu]</a></li>";
						
					}
				;?>
					<!-- <li class="active"><a href="./trang_chu.php">TRANG CHỦ</a></li>
					<li class="active"><a href="./san_pham_iphone.php">IPHONE</a></li>
					<li class="active"><a href="./san_pham_sam_sung.php">SAMSUNG</a></li>
					<li class="active"><a href="./san_pham_sony.php">SONY</a></li>
					<li class="active"><a href="san_pham_oppo.php">OPPO</a></li>
					<li class="active"><a href="./tin_khuyen_mai.php">TIN KHUYẾN MẠI</a></li>
					<li class="active"><a href="./tin_cong_nghe.php">TIN CÔNG NGHỆ</a></li>
					<li class="active"><a href="./tin_tuc_chi_tiet_gioi_thieu.php">GIỚI THIỆU</a></li>
					<li class="active"><a href="./lien_he.php">LIÊN HỆ</a></li> -->
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION-->
