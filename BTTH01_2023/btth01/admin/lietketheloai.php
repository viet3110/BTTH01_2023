<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="trangchu.php" class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a href =" themtheloai.php" class="nav-link active " href="category.php">Thể Loại</a>
                    </li>
                    <li class="nav-item">
                        <a  href =" themtacgia.php" class="nav-link active fw-bold" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a href =" thembaiviet.php" class="nav-link " href="article.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
        <div class="container">
            <h1>Liệt kê Thể loại </h1>
            <table class="table">
                <thead class="thead-dark">
            <tr>
                <th>Mã Thể Loại</th>
                 <th>Tên Thể Loại</th>
                 <th>Thao Tác</th>
            </tr>
                </thead>
                <tbody>


                <?php
                    //ketnoi
                     require_once 'connect.php';
                    //cau lenh sql
                    $lietke_sql = " SELECT * FROM theloai order by ma_tloai, ten_tloai";
                    //thuc thi cau lenh
                    $result = mysqli_query($conn, $lietke_sql);
                    //duyet qua result va in ra 
                    while ($r = mysqli_fetch_assoc($result)){
                        ?>
                         <tr>
                            <td><?php echo $r['ma_tloai'];?></td>
                            <td><?php echo $r['ten_tloai'];?></td>
                            <td><a href="edit.php?sstring" class="btn btn-success">Sửa</a> 
                            <a onclick="return confirm ('bạn có chắc chắn muốn xóa không ?');" href='xoa.php?sid=<?php echo $r['ma_tloai'];?>' class="btn btn-info">Xóa</a></td>
                         </tr>
            <?php
                                }
                        ?>
                    </tbody>
                    </table>
             
        </div>
    </body>
</html>

