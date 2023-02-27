<?php
//lay du lieu id can xoa
$id = $_GET['ma_tgia'];
require_once 'connect.php';
//cau lenh xoa sql
$xoa_sql = " DELETE FROM tacgia WHERE ma_tgia=$id "; 
mysqli_query($conn, $xoa_sql);
echo "<h1>xóa thành công</h1>";
?>