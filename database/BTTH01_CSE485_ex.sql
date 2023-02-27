-- a
SELECT * FROM baiviet JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai WHERE theloai.ten_tloai = 'Nhạc Trữ Tình';

-- b
SELECT * FROM baiviet JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia WHERE tacgia.ten_tgia = 'Nhacvietplus';

-- c


-- d
SELECT *
FROM baiviet
    inner JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
    inner JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai

-- e

-- f

-- g

-- h

-- i

-- j

-- k
ALTER TABLE theloai ADD SLBaiViet int;

-- l
CREATE TABLE `users` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
