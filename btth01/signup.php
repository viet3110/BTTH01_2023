<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="./login.php">Đăng nhập</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class = "container">
            <h1>Đăng Ký</h1>
            <form method = "POST" action = "">
                <div class="form-group">
                    <label for="txtUsername">Username</label>
                    <input name = "name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtPassword">Password</label>
                    <input name = "txtPassword" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name = "add">Đăng Ký</button>
            </form>
        </div>
    </main>
    <?php
        include("ketnoi.php");
        if(isset($_POST["add"])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $txtPassword = mysqli_real_escape_string($conn, $_POST['txtPassword']);
            //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
            if (!$name || !$txtPassword)
            {
                echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            $txtPassword = md5($txtPassword);
            $sql = "INSERT INTO signup (Username, Pass) VALUES (N'$name', N'$txtPassword')";
            $query = mysqli_query($conn, $sql);
            //Thông báo quá trình lưu
            if ($query)
            echo "<script>alert('Đăng Ký Thành Công!');</script>";
            else
            echo "<script>alert('Đăng Ký Thất Bại!');</script>";
        }
    ?>

<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>