-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2022 lúc 10:09 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `linkedin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_account`
--

CREATE TABLE `db_account` (
  `ma_nguoidung` int(10) UNSIGNED NOT NULL,
  `tennguoidung` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avartar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_account`
--

INSERT INTO `db_account` (`ma_nguoidung`, `tennguoidung`, `email`, `matkhau`, `avartar`) VALUES
(1, 'Phạm Văn Phú', 'phuanh2105@gmail.com', '12345678', 'index-img1.png'),
(18, 'Phu Anh', 'nguyenld@gmail.com', '123', NULL),
(20, 'Long DP', 'longdo@gmail.com', '1', 'bill-gate books.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mycomment`
--

CREATE TABLE `mycomment` (
  `idCmt` int(10) UNSIGNED NOT NULL,
  `comment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeCmt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mycomment`
--

INSERT INTO `mycomment` (`idCmt`, `comment`, `timeCmt`) VALUES
(19, 'Qua tuyet voi!', '2022-01-17 15:49:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mypost`
--

CREATE TABLE `mypost` (
  `idPost` int(10) UNSIGNED NOT NULL,
  `caption` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timepost` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mypost`
--

INSERT INTO `mypost` (`idPost`, `caption`, `img`, `timepost`) VALUES
(106, 'Hi every body, Im Phu dep trai', 'bill-gate books.png', '2022-01-17 14:20:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_account`
--
ALTER TABLE `db_account`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tendangnhap` (`tennguoidung`);

--
-- Chỉ mục cho bảng `mycomment`
--
ALTER TABLE `mycomment`
  ADD PRIMARY KEY (`idCmt`);

--
-- Chỉ mục cho bảng `mypost`
--
ALTER TABLE `mypost`
  ADD PRIMARY KEY (`idPost`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_account`
--
ALTER TABLE `db_account`
  MODIFY `ma_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `mycomment`
--
ALTER TABLE `mycomment`
  MODIFY `idCmt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `mypost`
--
ALTER TABLE `mypost`
  MODIFY `idPost` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
