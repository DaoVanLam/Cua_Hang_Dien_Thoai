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
	<div class="container">
		<?php
                    // Nếu người dùng submit form thì thực hiện
		if (isset($_REQUEST['ok'])) 
		{
                        // Gán hàm addslashes để chống sql injection
                        // $check = addslashes($_GET['tukhoa']);
			$search = addslashes($_GET['search']);
                        // echo($check);
                        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
			if (empty($search)) {
				echo "Hãy nhập từ khóa";
			} 
			else if($search != "")
			{
                            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
				$query = "select * from tbl_san_pham where ten_san_pham like '%$search%'" ;

                            // Kết nối sql
				$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");

                            // Thực thi câu truy vấn
				$sql = mysqli_query($ketnoi,$query);

                            // Đếm số đong trả về trong sql.
				$num = mysqli_num_rows($sql);

                            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
				if ($num > 0 ) 
				{
                                // Dùng $num để đếm số dòng trả về.
					echo "<br>Tìm thấy $num sản phẩm liên quan đến từ khóa <b>$search</b>";

                                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
					
					while ($row = mysqli_fetch_assoc($sql)) {
						?>
						<div class="container">
							<div class="row">
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
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu thích</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So sánh</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem nhanh</span></button>
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
			</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-">
						<hr>
						<table>
							<!-- product -->
							<?php
							if (isset($_REQUEST['ok'])) 
							{
                        // Gán hàm addslashes để chống sql injection
                        // $check = addslashes($_GET['tukhoa']);
								$search = addslashes($_GET['search']);
                        // echo($check);
                        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
								if (empty($search)) {
									echo "Hãy nhập từ khóa";
								} 
								else if($search != "")
								{
                            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
									$query = "select * from tbl_tin_tuc where tieu_de like '%$search%'" ;

                            // Kết nối sql
									$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");

                            // Thực thi câu truy vấn
									$sql = mysqli_query($ketnoi,$query);

                            // Đếm số đong trả về trong sql.
									$num = mysqli_num_rows($sql);

                            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
									if ($num > 0 ) 
									{
                                // Dùng $num để đếm số dòng trả về.
										echo "<br>Tìm thấy $num tin tức liên quan đến từ khóa <b>$search</b>";

                                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.

										while ($row = mysqli_fetch_assoc($sql)) {
											?>
											<tr style="border-bottom: #ff0000 solid 1px;">
												<td>
													<div style="padding:10px 0">
														<!-- <img src="./images/tin_cn_vivo.jpg" style="width: 250px;height: auto;padding: 10px 0 10px 0;"> -->
														<img src="<?php echo "./admin/".$row["anh_minh_hoa"];?>" width="250px" height="auto";>
													</div>
												</td>

												<td valign="top" >
													<div style="padding:10px 10px">
														<h3 class="product-name"><a href="tin_tuc_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["tieu_de"];?></a></h3>
														<p><?php echo $row["mo_ta"];?></p> 
											<!-- <h5>Iphone X 256GB</h5>
												<p>Đã lâu lắm rồi Apple mới ra mắt một sản phẩm với thiết kế đột phá và liều lĩnh.Đã lâu lắm rồi Apple mới ra mắt một sản phẩm với thiết kế đột phá và liều lĩnh</p> -->
											</div>
										</td>
									</tr>
									<?php  

								} 
							}
							else {
								echo "Không tìm thấy kết quả!";
							}
						}
					}
					?>

				</table>
			</div>

		</div>
	</div>
</div>
</div>
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
