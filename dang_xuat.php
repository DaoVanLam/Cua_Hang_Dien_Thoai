<?php
session_start();
session_destroy();
header("Location: trang_chu.php");
echo"Đăng xuất thành công";
exit();
;?>