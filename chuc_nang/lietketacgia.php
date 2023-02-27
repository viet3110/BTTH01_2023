<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
</head>
<body>
        <div class="container">
            <h1>LIET KE TAC GIA </h1>
            <table class="table">
                <thead class="thead-dark">
            <tr>
                <th>Mã tác giả</th>
                 <th>Tên tác giả</th>
                 <th>Thao Tác</th>
            </tr>
                </thead>
                <tbody>
            <?php
                    //ketnoi
                    require_once 'connect.php';
                    //cau lenh sql
                    $lietke_sql = " SELECT * FROM tacgia order by ma_tgia, ten_tgia";
                    //thuc thi cau lenh
                    $result = mysqli_query($conn, $lietke_sql);
                    //duyet qua result va in ra 
                    while ($r = mysqli_fetch_assoc($result)){
                        ?>
                         <tr>
                            <td><?php echo $r['ma_tgia'];?></td>
                            <td><?php echo $r['ten_tgia'];?></td>
                            <td><a href="edit.php?sstring" class="btn btn-success">Sửa</a> 
                            <a onclick="return confirm ('bạn có chắc chắn muốn xóa không ?');" href='xoa.php?sid=<?php echo $r['ma_tgia'];?>' class="btn btn-info">Xóa</a></td>
                         </tr>
            <?php
                                }
                        ?>
                    </tbody>
                    </table>
             
        </div>
    </body>
</html>

