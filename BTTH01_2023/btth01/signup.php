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
    <main class="container mt-5 mb-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>SIGN UP</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method = "POST" action = "">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name = "user_name">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                            <input type="password" class="form-control" name = "pass">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">SIGN UP</button>
                    </form>
                   <?php
                        include("ketnoi.php");
                        if(isset($_POST["add"])) {
                            $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
                            $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                            //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
                            if (!$user_name || !$pass)
                            {
                                echo "Vui lòng nhập đầy đủ thông tin.";
                                exit;
                            }
                             // Kiểm tra username có bị trùng hay không
                            $msql = "SELECT * FROM users WHERE username = '$user_name'";
                            $result = mysqli_query($conn, $msql);
                            if (mysqli_num_rows($result) > 0)
                            {
                                // Sử dụng javascript để thông báo
                                echo "Tài khoản này đã được sử dụng! Vui lòng sử dụng tên khác.";
                                
                                // Dừng chương trình
                                die ();
                            } else {
                                $pass = md5($pass);
                                $sql = "INSERT INTO users (username, password) VALUES (N'$user_name', N'$pass')";
                                $query = mysqli_query($conn, $sql);
                                //Thông báo quá trình lưu
                                if ($query)
                                    echo "Đăng ký thành công!";
                            }
                        }
                    ?>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center ">
                        Do you already have an account?<a href="login.php" class="text-warning text-decoration-none">Login</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
