-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2021 lúc 03:22 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xemay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baohanh`
--

CREATE TABLE `baohanh` (
  `id` int(11) NOT NULL,
  `thoigianbaohanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baohanh`
--

INSERT INTO `baohanh` (`id`, `thoigianbaohanh`) VALUES
(1, '3 năm hoặc 30000km (tùy điều kiện nào đến trước)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongco`
--

CREATE TABLE `dongco` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dungtichxylanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `piston` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tysonen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `congsuattoida` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `momencucdai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hethongkhoidong` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dongco`
--

INSERT INTO `dongco` (`id`, `tensanpham`, `loai`, `dungtichxylanh`, `piston`, `tysonen`, `congsuattoida`, `momencucdai`, `hethongkhoidong`) VALUES
(1, 'adad', 'aa', 'aa', 'ads', 'af', 'aewfwwFE', 'áda', 'ádasd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khungxe`
--

CREATE TABLE `khungxe` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loaikhung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hethonggiamxoctruoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hanhtrinhphuoctruoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dolechphuongtruclai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hethonggiamxocsau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hanhtrinhgiamxocsau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phanhtruoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phanhsau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loptruoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lopsau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dentruoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `densau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khungxe`
--

INSERT INTO `khungxe` (`id`, `tensanpham`, `loaikhung`, `hethonggiamxoctruoc`, `hanhtrinhphuoctruoc`, `dolechphuongtruclai`, `hethonggiamxocsau`, `hanhtrinhgiamxocsau`, `phanhtruoc`, `phanhsau`, `loptruoc`, `lopsau`, `dentruoc`, `densau`) VALUES
(1, 'ádsd', 'sầ', 'ừaewef', 'qưd', 'adw', 'adw', 'ưade', 'ưadw', 'ưaefe', 'ưadwd', 'QƯ', 'adsa', 'fht');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuoc`
--

CREATE TABLE `kichthuoc` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kichthuoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `docaoyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khoangcachgiuahaitrucbanhxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `docaogamxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trongluonguot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dungtichbinhxang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dungtichdaumay` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kichthuoc`
--

INSERT INTO `kichthuoc` (`id`, `tensanpham`, `kichthuoc`, `docaoyen`, `khoangcachgiuahaitrucbanhxe`, `docaogamxe`, `trongluonguot`, `dungtichbinhxang`, `dungtichdaumay`) VALUES
(1, 'sfew', 'sagrrs', 'sfe', 'ưefs', 'ưef', 'few', 'aef', 'àef');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `id` int(11) NOT NULL,
  `tenloaixe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`id`, `tenloaixe`) VALUES
(1, 'Xe số'),
(2, 'Xe tay ga'),
(3, 'Xe thể thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mauxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giagoc` int(12) NOT NULL,
  `giaban` int(12) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluongton` int(3) NOT NULL,
  `thuonghieu_id` int(11) NOT NULL,
  `loaixe_id` int(11) NOT NULL,
  `kichthuoc_id` int(11) NOT NULL,
  `khungxe_id` int(11) NOT NULL,
  `dongco_id` int(11) NOT NULL,
  `baohanh_id` int(11) NOT NULL,
  `tinhtrang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenxe`, `mauxe`, `giagoc`, `giaban`, `hinhanh`, `soluongton`, `thuonghieu_id`, `loaixe_id`, `kichthuoc_id`, `khungxe_id`, `dongco_id`, `baohanh_id`, `tinhtrang_id`) VALUES
(2, 'test', 'đen', 111000000, 120000000, 'images/sanpham/yzf-r3-den.jpg', 4, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `tenthuonghieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `tenthuonghieu`, `hinhanh`) VALUES
(1, 'Honda', NULL),
(2, 'Yamaha', NULL),
(3, 'Suzuki', NULL),
(4, 'SYM', NULL),
(5, 'Kawasaki', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id` int(11) NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Còn hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`id`, `tinhtrang`) VALUES
(1, 'Còn hàng'),
(2, 'Hết hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baohanh`
--
ALTER TABLE `baohanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dongco`
--
ALTER TABLE `dongco`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khungxe`
--
ALTER TABLE `khungxe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baohanh_id` (`baohanh_id`),
  ADD KEY `thuonghieu_id` (`thuonghieu_id`),
  ADD KEY `sanpham_ibfk_3` (`tinhtrang_id`),
  ADD KEY `dongco_id` (`dongco_id`),
  ADD KEY `khungxe_id` (`khungxe_id`),
  ADD KEY `kichthuoc_id` (`kichthuoc_id`),
  ADD KEY `loaixe_id` (`loaixe_id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baohanh`
--
ALTER TABLE `baohanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dongco`
--
ALTER TABLE `dongco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khungxe`
--
ALTER TABLE `khungxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`baohanh_id`) REFERENCES `baohanh` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`thuonghieu_id`) REFERENCES `thuonghieu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`tinhtrang_id`) REFERENCES `tinhtrang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`dongco_id`) REFERENCES `dongco` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_5` FOREIGN KEY (`khungxe_id`) REFERENCES `khungxe` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_6` FOREIGN KEY (`kichthuoc_id`) REFERENCES `kichthuoc` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_7` FOREIGN KEY (`loaixe_id`) REFERENCES `loaixe` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
