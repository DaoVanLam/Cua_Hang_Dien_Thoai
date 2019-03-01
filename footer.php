
<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Đăng kí nhận <strong>email</strong></p>
							<form method="post" action="email_them_moi.php"> 
								<input class="input" type="email" name="txtEmail" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/bui.gia.92102"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Giới thiệu</h3>
								<ul class="footer-links">
									<li><a href="tin_tuc_chi_tiet_gioi_thieu.php">Về công ty</a></li>
									<li><a href="tin_tuc_chi_tiet_gioi_thieu.php">Lịch sử hình thành</a></li>
									<li><a href="he_thong_cua_hang.php">Hệ thống cửa hàng</a></li>
									<li><a href="tin_hoat_dong.php">Hoạt động của công ty</a></li>
									<!-- <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li> -->
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Tuyển dụng</h3>
								<!-- product -->
								<?php
										//URL hiện tại của trang. cart_update.php sẽ chuyển lại trang này.
									
										include("./config/dbconfig.php");
                       					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
										$sql="SELECT * 
										FROM tbl_tin_tuc
										where loai_tin_tuc_id=2
										LIMIT 0,5"
										;
										$dulieu = mysqli_query($ketnoi,$sql);
										$i=0;
										while ($row = mysqli_fetch_array($dulieu)){
										$i++;
										;?>
										<ul class="footer-links">
											<li><a href="tin_tuc_chi_tiet_tuyen_dung.php?id=<?php echo $i;?>"><?php echo $row["tieu_de"];?></a></li>
										</ul>
										<?php
										}
										;?>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Chính sách</h3>
								<?php
										//URL hiện tại của trang. cart_update.php sẽ chuyển lại trang này.
									
										include("./config/dbconfig.php");
                       					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
										$sql="SELECT * 
										FROM tbl_tin_tuc
										where loai_tin_tuc_id=6";
										$dulieu = mysqli_query($ketnoi,$sql);
										$i=0;
										while ($row = mysqli_fetch_array($dulieu)){
											$i++;
										;?>
								<ul class="footer-links">
									<li><a href="tin_tuc_chi_tiet_chinh_sach.php?id=<?php echo $i;?>"><?php echo $row["tieu_de"];?></a></li>
								</ul>
								<?php
										}
										;?>
							</div>
						</div>
					<!-- đếm số người đang oline -->
						<?php
							// $tg=time();
							// $tgout=900;
							// $tgnew=$tg - $tgout;
							// $ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
							// $sql="INSERT INTO `useronline` (`tgtmp`, `ip`, `local`) 
							// VALUES ('$tg','$REMOTE_ADDR','$PHP_SELF')";
							// $query=mysqli_query($ketnoi,$sql);
							// $sql="delete from useronline where tgtmp < $tgnew";
							// $query=mysqli_query($ketnoi,$sql);
							// $sql="SELECT DISTINCT ip FROM useronline WHERE local='$PHP_SELF'";
							// $query=mysqli_query($ketnoi,$sql);
							// $user = mysqli_num_rows($query);
							// echo "user online :$user";
							// ?>
						<?php
						//Mở và thống kê số lượt truy cập trong file txt
										$fp="counter.txt";
										$fo= fopen($fp,'r');
										$fr=fread($fo, filesize($fp));
										$fr++;
										$fc= fclose($fo);
										//Mở và ghi lại số lượt bằng thuộc tính W, W++
										$fo= fopen($fp,'w');
										$fw=fwrite($fo, $fr);
										$fc= fclose($fo);
						?>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Thống kê</h3>
								<ul class="footer-links">
								<li><a href="#">Tổng số lượt truy cập <?php echo $fr?></a>
								</li>
								<li><a href="#">Đang online
											<script  id="_wauwrm">var _wau = _wau || []; _wau.push(["classic", "06irlbxgs6", "wrm"]);</script><script "async src="//waust.at/c.js"></script></a></li>

								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Didongviet.tk design<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">nhóm 18</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
