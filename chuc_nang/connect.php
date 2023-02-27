<?php

$severname = "localhost";
$username = "root";
$password = "";
$database = "bai_thuc_hanh";


$conn = mysqli_connect($severname, $username, $password, $database);
if(!$conn){
    echo 'ket noi that bai';
}else{
    echo 'ket noi thanh cong ';
}

// if(isset($_GET['delete'])){
//     $ma_tgia = $_GET['delete'];
//     $conn -> query("DELETE FROM tacgia WHERE ma_tgia=$ma_tgia");
//     header("Location:lietketacgia.php");
// }
?>