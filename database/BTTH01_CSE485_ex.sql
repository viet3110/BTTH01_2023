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
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_tgia) 
FROM baiviet, tacgia 
WHERE tacgia.ma_tgia = baiviet.ma_tgia GROUP BY tacgia.ten_tgia, baiviet.ma_tgia ORDER BY baiviet.ma_tgia asc limit 2;

-- g
SELECT * FROM baiviet 
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

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
