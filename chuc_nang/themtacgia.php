<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tác giả </title>
</head>
<body>
    <?php require_once 'connect.php' ?>

    <?php
    if(isset($_POST['add'])){
        $ten_tgia =$_POST['ten_tgia'];
        $ma_tgia =$_POST['ma_tgia'];
        if($conn -> query("INSERT INTO tacgia (ten_tgia,ma_tgia) VALUES ('$ten_tgia','$ma_tgia') ")){
            echo "<script>alert('them thanh cong  !');</script>";
        }
        else{
            echo "<script>alert('them that bai !');</script>";
        }
    }
    $conn->close();
    ?>
    <div class="container">
    <h1>Form thêm tác giả</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="ten_tgia"> Tên Tác Giả </label>
                <input name = "ten_tgia" class="form-control" placeholder="VD:nguyen van a">
            </div>

            <div class="form-group">
                <label for="ma_tgia">Mã tác giả</label>
                <input name = "ma_tgia" class="form-control" placeholder="VD: 123 " >
            </div>
            <button type="submit" class="btn btn-success" name = "add">Thêm</button>
        </form>
</div>
</body>
</html>