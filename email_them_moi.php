<?php
	
	$email = $_POST['txtEmail'];
	// Chàn dữ liệu vào bảng tbl_lien_he
	// Bước 1: Kết nối đến CSDL 
	include("./config/dbconfig.php");
    $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
	$sql = "
	INSERT INTO `tbl_nhan_mail` (
		`id`, 
		`email`) 
	VALUES (
		NULL, 
		'".$email."')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	//  echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
	<script type="text/javascript">
			alert("Bạn đã gửi yêu cầu thành công!!!");
 			window.location.href="trang_chu.php";
 		</script>';
 ;?>