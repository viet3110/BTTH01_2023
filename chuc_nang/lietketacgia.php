<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    <title>Quản Lí Tác Giả</title>
</head>
<body>
    <?php require_once 'connect.php' ?>

    <?php

    $sql = " SELECT * FROM tacgia";
    $result = mysqli_query($conn,$sql);
    ?>
    <div class = "container">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã tác giả</th>
                <th scope="col">Tên tác giả</th>
                <th scope="col">Thao Tac</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) :  ?>
                <tr>
                <td><?php echo $row['ma_tgia']; ?></td>
                <td><?php echo $row['ten_tgia']; ?></td>
                <td><a href ="xoa.php?delete=<?php echo $row['ma_tgia'];?>">Xoa</a></td>
                <td><a href ="sua.php?delete=<?php echo $row['ma_tgia']; ?>">Sua</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
            </table>
   </div>
</body>
</html>