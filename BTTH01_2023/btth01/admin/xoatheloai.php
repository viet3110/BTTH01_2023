<?php
//lay du lieu id can xoa
$id = $_GET['sid'];
require_once 'connect.php';
//cau lenh xoa sql
$xoa_sql = " DELETE FROM theloai WHERE ma_tloai=$id "; 
mysqli_query($conn, $xoa_sql);
echo "<h1>xóa thành công</h1>";
header("Location:lietketheloai.php");
?>
