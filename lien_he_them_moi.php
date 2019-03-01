<?php
	$hoten = $_POST['HoTen'];
	$dienthoai = $_POST['DienThoai'];
	$email = $_POST['Email'];
	$noidungphanhoi = $_POST['NoiDungPhanHoi'];

	// Chàn dữ liệu vào bảng tbl_lien_he
	// Bước 1: Kết nối đến CSDL 
	include("./config/dbconfig.php");
    $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
	$sql = "
	INSERT INTO `tbl_lien_he` (
		`id`, 
		`ho_ten`, 
		`so_dien_thoai`, 
		`email`, 
		`noi_dung_phan_hoi`) 
	VALUES (
		NULL, 
		'".$hoten."',
		'".$dienthoai."', 
		'".$email."',
		'".$noidungphanhoi."')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Bạn đã gửi phản hồi thành công!!!");
			window.location.href="trang_chu.php";
		</script>';
;?>