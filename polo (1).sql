-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2023 lúc 04:44 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `polo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(50) NOT NULL,
  `pass_admin` text NOT NULL,
  `tenadmin` varchar(100) NOT NULL,
  `hinhdaidien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username_admin`, `pass_admin`, `tenadmin`, `hinhdaidien`) VALUES
('hieuthao', '123', 'Hiếu Thảo', 'hinhanh/meo1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdondat`
--

CREATE TABLE `chitietdondat` (
  `masanpham` int(11) NOT NULL,
  `madondat` int(11) NOT NULL,
  `soluongban` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdondat`
--

INSERT INTO `chitietdondat` (`masanpham`, `madondat`, `soluongban`, `dongia`) VALUES
(1, 2, 5, 350000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `machitiet` varchar(20) NOT NULL,
  `mau` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`machitiet`, `mau`, `size`) VALUES
('L-Đen', 'Đen', 'L'),
('L-Trắng', 'Trắng', 'L'),
('M-Đen', 'Đen', 'M'),
('M-Trắng', 'Trắng', 'M'),
('XL-Đen', 'Đen', 'XL'),
('XL-Trắng', 'Trắng', 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `username` varchar(50) NOT NULL,
  `masanpham` int(11) NOT NULL,
  `binhluan` varchar(255) NOT NULL,
  `mucdohailong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`username`, `masanpham`, `binhluan`, `mucdohailong`) VALUES
('annhien', 1, 'Áo đúng mẫu, hàng chất lượng tốt', 'Rất hài lòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondat`
--

CREATE TABLE `dondat` (
  `madondat` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `trangthaidathang` varchar(50) DEFAULT NULL,
  `maphuongthuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondat`
--

INSERT INTO `dondat` (`madondat`, `username`, `ngaydat`, `tongtien`, `trangthaidathang`, `maphuongthuc`) VALUES
(2, 'annhien', '2023-12-13', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magiohang` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `masanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `masanpham` int(11) NOT NULL,
  `mahinhanh` int(11) NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `username` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `CCCD` varchar(20) NOT NULL,
  `anhdaidien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`username`, `pass`, `hoten`, `gioitinh`, `diachi`, `sdt`, `CCCD`, `anhdaidien`) VALUES
('annhien', '123', 'Lê Trương An Nhiên', 'Nữ', 'Phường 2, Trà Vinh', '0123456789', '9632587410', 'hinhanh/meo1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `maphuongthuc` int(11) NOT NULL,
  `tenphuongthuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`maphuongthuc`, `tenphuongthuc`) VALUES
(1, 'COD'),
(2, 'Chuyển khoản'),
(3, 'Ví Momo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `masale` int(11) NOT NULL,
  `tensale` varchar(50) NOT NULL,
  `phantramsale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`masale`, `tensale`, `phantramsale`) VALUES
(1, 'Sale 10%', 10),
(2, 'Sale 20%', 20),
(3, 'Sale 30%', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `machitiet` varchar(20) NOT NULL,
  `masale` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `thongtinsanpham` longtext NOT NULL,
  `hinhanh` text NOT NULL,
  `giagoc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthainoibat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `machitiet`, `masale`, `tensanpham`, `thongtinsanpham`, `hinhanh`, `giagoc`, `soluong`, `trangthainoibat`) VALUES
(1, 'L-Trắng', 1, 'Polo cá sấu', 'aaaa', '', 350000, 10, NULL),
(2, 'L-Đen', 1, 'Polo cá heo', 'aaaa', '', 350000, 10, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Chỉ mục cho bảng `chitietdondat`
--
ALTER TABLE `chitietdondat`
  ADD PRIMARY KEY (`masanpham`,`madondat`),
  ADD KEY `madondat` (`madondat`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`machitiet`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`username`,`masanpham`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `dondat`
--
ALTER TABLE `dondat`
  ADD PRIMARY KEY (`madondat`),
  ADD KEY `username` (`username`),
  ADD KEY `maphuongthuc` (`maphuongthuc`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magiohang`),
  ADD KEY `masanpham` (`masanpham`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`mahinhanh`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`maphuongthuc`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`masale`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `masale` (`masale`),
  ADD KEY `machitiet` (`machitiet`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondat`
--
ALTER TABLE `dondat`
  MODIFY `madondat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magiohang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `maphuongthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sale`
--
ALTER TABLE `sale`
  MODIFY `masale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdondat`
--
ALTER TABLE `chitietdondat`
  ADD CONSTRAINT `chitietdondat_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`),
  ADD CONSTRAINT `chitietdondat_ibfk_2` FOREIGN KEY (`madondat`) REFERENCES `dondat` (`madondat`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`username`) REFERENCES `khachhang` (`username`);

--
-- Các ràng buộc cho bảng `dondat`
--
ALTER TABLE `dondat`
  ADD CONSTRAINT `dondat_ibfk_1` FOREIGN KEY (`username`) REFERENCES `khachhang` (`username`),
  ADD CONSTRAINT `dondat_ibfk_2` FOREIGN KEY (`maphuongthuc`) REFERENCES `phuongthucthanhtoan` (`maphuongthuc`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`username`) REFERENCES `khachhang` (`username`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`masale`) REFERENCES `sale` (`masale`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`machitiet`) REFERENCES `chitietsanpham` (`machitiet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
