<?php
session_start(); //khởi tạo session
$guest_id = session_id();
$time = time();
$time_check = $time-600; //Ấn định thời gian là 10 phút

// Kết nối tới sever và chọn database
$ketnoi = mysqli_connect("localhost", "root", "", "db_web_di_dong_viet");
$sql = "SELECT * FROM tbl_online WHERE guest_id ='$guest_id ";
$result = mysqli_query($ketnoi,$sql);
$count = mysqli_num_rows($result);
if($count=="0"){ //Truy cập lần đầu
$sql1="INSERT INTO tbl_online (guest_id, time)VALUES('$guest_id', '$time')";
$result1=mysqli_query($sql1);
}else{ //Truy cập từ lần thứ 2
$sql2="UPDATE tbl_online SET time='$time' WHERE guest_id = '$guest_id'";
$result2=mysqli_query($sql2);
}

$sql3 = "SELECT * FROM tbl_online";
$result3 = mysqli_query($sql3);
$count_user_online = mysqli_num_rows($result3);
echo "Số người đang online: $count_user_online";

//Nếu quá 10 phút, xóa bỏ session
$sql4 = "DELETE FROM tbl_online WHERE time < $time_check";
$result4=mysqli_query($sql4);

//Đóng kết nối
mysqli_close();
?>