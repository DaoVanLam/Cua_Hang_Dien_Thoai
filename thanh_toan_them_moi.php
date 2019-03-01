<?php
	$tongtien= $_POST["product_id"];
	$hoten = $_POST['HoTen'];
	$email = $_POST['Email'];
	$dienthoai = $_POST['DienThoai'];
	$diachi = $_POST['DiaChi'];
	$ghichu = $_POST['GhiChu'];

	$tongtien = $_POST['DiaChi'];
	// Chàn dữ liệu vào bảng tbl_lien_he
	// Bước 1: Kết nối đến CSDL 
	include("./config/dbconfig.php");
    $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
	$sql = "
	INSERT INTO `tbl_giao_dich` (
		`id`, 
		`ho_ten`, 
		`email`, 
		`so_dien_thoai`,
		`tong_tien`,
		`dia_chi`, 
		`ghi_chu`) 
	VALUES (
		NULL, 
		'".$hoten."',
		'".$email."',
		'".$dienthoai."', 
		'".$tongtien."', 
		'".$diachi."', 
		'".$ghichu."')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Đặt hàng thành công!!!");
			window.location.href="trang_chu.php";
		</script>';
;?>