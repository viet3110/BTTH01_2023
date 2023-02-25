<?php
    $severname = "localhost";
    $username = "root";
    $pass = "";
    $database = "btth01_cse45";
    $conn = mysqli_connect($severname, $username, $pass, $database);

    if (!$conn)
    {
        echo ("kết nối không thành công!");
    }
    else {
        echo ("kết nối thành công!");
    }