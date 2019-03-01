<?php 


	// Lấy các dữ liệu bên trang đăng nhập
		$taikhoan = $_POST['txtTaiKhoan'];
		$matkhau = $_POST['txtMatKhau'];
    	$email = $_POST['txtEmail'];
        $tennguoidung = $_POST['txtTenNguoiDung'];
		$dienthoai = $_POST['txtDienThoai'];
		$nhaclaimatkhau=$_POST['txtMatKhauNhacLai'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$gender=$_POST['gender'];
	// Bước 1: Kết nối đến CSDL 
	include("./config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	if($matkhau== $nhaclaimatkhau)
 		 {
				$sql = "
				SELECT *
				FROM `tbl_nguoi_dung` 
				WHERE `tai_khoan` = '".$taikhoan."' 
				";
			$result = mysqli_query($ketnoi, $sql);
				if (mysqli_num_rows($result) != 0) {
					echo '
							<script type="text/javascript">
								alert("Người dùng đã tồn tại!!!");
								window.location.href="dang_ki.php";
							</script>';
					} 
				else {
						$sql = "
							INSERT INTO `tbl_nguoi_dung` (
								`id`, 
								`tai_khoan`,
								`mat_khau`, 
								`email`, 
								`dien_thoai`, 
								`ngay_sinh`, 
								`level`, 
								`gioi_tinh`, 
								`ten_nguoi_dung`) 
							VALUES (
								NULL, 
								'".$taikhoan."',
								'".$matkhau."',
								'".$email."',
								'".$dienthoai."',
								'$year-$month-$day',
								'1',
								'".$gender."',
								'".$tennguoidung."')";
							}
							// echo($sql);
							mysqli_query($ketnoi, $sql);
							
							echo '
							<script type="text/javascript">
								alert("Đăng kí thành công!!!");
								window.location.href="dang_nhap.php";
							</script>';
	
	   }
	   else{
		echo '
			<script type="text/javascript">
				alert("Mật khẩu không khớp!!!");
				window.location.href="dang_nhap.php";
			</script>';

	   }
;?>