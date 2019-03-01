-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 26, 2018 lúc 09:14 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_web_di_dong_viet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `image`, `price`) VALUES
(1, 'toyota', 'Toyota Sienna 2015 là một trong những chiếc minivan bán chạy nhất tại Mỹ. Nhìn chung, mẫu xe này được đánh giá là rộng rãi, an toàn và tiết kiệm nhiên liệu.', 'img_1.jpg', 100),
(2, 'camry', 'Không chỉ kiêu hãnh với vẻ bên ngoài mà Toyota Camry 2018 còn gây thiện cảm với mọi khách hàng đặc biệt với vẻ nội thất  đẳng cấp. ', 'img_2.jpg', 200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `so_dien_thoai` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `noi_dung_phan_hoi` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `modified_log` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`id`, `ho_ten`, `so_dien_thoai`, `email`, `noi_dung_phan_hoi`, `created_by`, `created_time`, `modified_by`, `modified_time`, `modified_log`) VALUES
(1, 'BÃ¹i Tuáº¥n Anh', '0999999999', 'Thuctap2hvnh@gmail.com', 'BÃ i há»c ráº¥t quÃ½ giÃ¡ cho chÃºng em, chÃºng em há»c Ä‘Æ°á»£c ráº¥t nhiá»u tá»« tháº§y.', NULL, '2018-06-19 11:14:49', NULL, NULL, NULL),
(2, '', '', '', '', NULL, '2018-06-19 12:37:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_san_pham`
--

CREATE TABLE `tbl_loai_san_pham` (
  `loai_san_pham_id` int(11) NOT NULL,
  `ten_loai_san_pham` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_san_pham`
--

INSERT INTO `tbl_loai_san_pham` (`loai_san_pham_id`, `ten_loai_san_pham`) VALUES
(1, 'San pham moi'),
(2, 'San pham ban chay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_tin_tuc`
--

CREATE TABLE `tbl_loai_tin_tuc` (
  `loai_tin_tuc_id` int(11) NOT NULL,
  `loai_tin_tuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_tin_tuc`
--

INSERT INTO `tbl_loai_tin_tuc` (`loai_tin_tuc_id`, `loai_tin_tuc`) VALUES
(1, 'Tin gioi thieu'),
(2, 'Tin tuyen dung'),
(3, 'Tin hoat dong'),
(4, 'Tin khuyen mai'),
(5, 'Tin cong nghe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id` int(11) NOT NULL,
  `tai_khoan` varchar(100) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `anh_nguoi_dung` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id`, `tai_khoan`, `mat_khau`, `anh_nguoi_dung`) VALUES
(1, 'admin', 'admin', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(500) NOT NULL,
  `loai_san_pham_id` int(11) NOT NULL,
  `gia_tien` int(50) DEFAULT NULL,
  `gia_khuyen_mai` varchar(50) DEFAULT NULL,
  `mo_ta` varchar(500) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `anh_minh_hoa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id`, `ten_san_pham`, `loai_san_pham_id`, `gia_tien`, `gia_khuyen_mai`, `mo_ta`, `so_luong`, `anh_minh_hoa`) VALUES
(27, 'Iphone X 256GB', 2, 34790, '33.790.000', '<p>Sáº£n pháº©m d&ugrave;ng ráº¥t tá»‘t trong táº§m gi&aacute;</p>', 4, 'images/iphone-x-256gb.jpg'),
(28, 'Iphone X 256GB', 1, 34790, '33.790.000', '<p>Sáº£n pháº©m d&ugrave;ng ráº¥t tá»‘t trong táº§m gi&aacute;</p>', 4, 'images/iphone-x-256gb.jpg'),
(29, 'Iphone', 1, 4000000, '390000', '<p>Sáº£n pháº©m ráº¥t tá»‘t</p>', 4, 'images/iphone-x-256gb.jpg'),
(30, 'Iphone', 1, 300, '400', '<p>Sáº£n pháº©m ráº¥t tá»‘t trong táº§m gi&aacute;</p>', 4, 'images/iphone-x-256gb.jpg'),
(31, 'Samsung', 1, 1200000, '390000', '<p>ababababbbababa</p>', 4, 'images/iphone-x-256gb.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id` int(11) NOT NULL,
  `loai_tin_tuc_id` int(11) NOT NULL,
  `tieu_de` varchar(500) NOT NULL,
  `mo_ta` varchar(500) DEFAULT NULL,
  `noi_dung` text,
  `anh_minh_hoa` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id`, `loai_tin_tuc_id`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`) VALUES
(25, 5, 'SamSung ra máº¯t galaxy S9', '<p>SamSung Ä‘&atilde; c&oacute; cho m&igrave;nh má»™t sáº£n pháº©m Ä‘á»ƒ cáº¡nh tranh vá»›i Ä‘á»‘i thá»§</p>', '<p>SamSung Ä‘&atilde; c&oacute; cho m&igrave;nh má»™t sáº£n pháº©m Ä‘á»ƒ cáº¡nh tranh vá»›i Ä‘á»‘i thá»§</p>', 'images/tin_cn_s9.jpg'),
(26, 5, 'SamSung ra máº¯t galaxy S8', '<p>SamSung Ä‘&atilde; c&oacute; cho m&igrave;nh má»™t sáº£n pháº©m Ä‘á»ƒ cáº¡nh tranh vá»›i Ä‘á»‘i thá»§</p>', '<p>SamSung Ä‘&atilde; c&oacute; cho m&igrave;nh má»™t sáº£n pháº©m Ä‘á»ƒ cáº¡nh tranh vá»›i Ä‘á»‘i thá»§</p>', 'images/tin_cn_s9.jpg'),
(27, 5, 'SamSung ra máº¯t galaxy S8', '<p>SamSung Ä‘&atilde; c&oacute; cho m&igrave;nh má»™t sáº£n pháº©m Ä‘á»ƒ cáº¡nh tranh vá»›i Ä‘á»‘i thá»§</p>', '<p>SamSung Ä‘&atilde; c&oacute; cho m&igrave;nh má»™t sáº£n pháº©m Ä‘á»ƒ cáº¡nh tranh vá»›i Ä‘á»‘i thá»§</p>', 'images/tin_cn_s9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useronline`
--

CREATE TABLE `useronline` (
  `tgtmp` int(15) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL,
  `local` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `useronline`
--

INSERT INTO `useronline` (`tgtmp`, `ip`, `local`) VALUES
(1529839028, '', '/WEB_DI_DONG/trang_chu.php'),
(1529839052, '', '/WEB_DI_DONG/trang_chu.php'),
(1529839147, '', '/WEB_DI_DONG/trang_chu.php'),
(1529839206, '', ''),
(1529839923, '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  ADD PRIMARY KEY (`loai_san_pham_id`);

--
-- Chỉ mục cho bảng `tbl_loai_tin_tuc`
--
ALTER TABLE `tbl_loai_tin_tuc`
  ADD PRIMARY KEY (`loai_tin_tuc_id`);

--
-- Chỉ mục cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `useronline`
--
ALTER TABLE `useronline`
  ADD PRIMARY KEY (`tgtmp`),
  ADD KEY `ip` (`ip`),
  ADD KEY `local` (`local`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  MODIFY `loai_san_pham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_tin_tuc`
--
ALTER TABLE `tbl_loai_tin_tuc`
  MODIFY `loai_tin_tuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
