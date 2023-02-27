<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                    <a class="nav-link active" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./login.php">Đăng nhập</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                </div>
            </div>
        </nav>

    </header>
    <?php
     $conn = mysqli_connect('localhost','root','','btth01_cse485');
     if(!$conn){
         die('Kết nối tới Server lỗi');
     }
     $url =  $_SERVER['REQUEST_URI'];
     $Parse__url=parse_url($url);
     $id_Parse=$Parse__url["query"];
     $length=strlen($id_Parse);
     $id=substr("$id_Parse", 3, $length-1);


    ?>
    <!--Thực hiện -->
    <main class="container mt-5">
        
        <?php        

    #Hiển thị Thực hiện truy vấn
            $sql ="SELECT * from baiviet,tacgia,theloai WHERE baiviet.ma_tloai=theloai.ma_tloai and baiviet.ma_tgia=tacgia.ma_tgia and baiviet.ma_bviet=$id";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result))
                {   
                    ?>
                    <div class="row mb-5 a11">
     
                                <div class="col-sm-4" >
                                    <img src="<?php echo $row[8];?>" class="img-fluid" alt="...">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title mb-2">
                                        <a href="" class="text-decoration-none"><?php echo $row[1];?></a>
                                    </h5>
                                    <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $row[2];?></p>
                                    <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $row[13];?></p>
                                    <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $row[4];?></p>
                                    <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $row[5];?></p>
                                    <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $row[10];?></p>
            
                                </div>   
                            </div>
                            <?php
                           
                                
                             
                }
             }
        ?>                  
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
