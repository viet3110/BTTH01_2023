<?php
//nhan du lieu tu form
$ma_tgia = $_POST['ma_tgia'];
$ten_tgia = $_POST['ten_tgia'];
$id = $_POST['sid'];
//ket noi csdl
require_once 'connect.php';
//viet cau lenh sql
$update = "UPDATE tacgia SET ma_tgia='$ma_tgia',ten_tgia='$ten_tgia' WHERE id=$id";
if(mysqli_query($conn,$update)){
header("Location:lietketacgia.php");
}
?>