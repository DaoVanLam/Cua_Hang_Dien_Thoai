
<?php
$keyword=$_GET["search"];
include("../config/dbconfig.php");
$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
$sql = "
	SELECT ten_san_pham 
	FROM tbl_san_pham
	WHERE ten_san_pham like '%$keyword%'";

	$dulieu = mysqli_query($ketnoi, $sql);
	if(mysqli_num_rows($dulieu)==0){
		echo"<li>Không tìm thấy kết quả tìm kiếm</li>";
	}
	else{
		while ($data = mysqli_fetch_assoc($dulieu)) {
			echo"<li>$data[ten_san_pham]</li>";
								
		}
	
	}
	
;?>
