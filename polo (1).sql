-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2023 lúc 01:56 AM
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
  `masize` int(11) NOT NULL,
  `soluongban` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdondat`
--

INSERT INTO `chitietdondat` (`masanpham`, `madondat`, `masize`, `soluongban`, `dongia`) VALUES
(3, 3, 3, 2, 350000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `masanpham` int(11) NOT NULL,
  `masize` int(20) NOT NULL,
  `soluong` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`masanpham`, `masize`, `soluong`) VALUES
(3, 1, 10),
(3, 2, 10),
(3, 3, 10);

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
(3, 'annhien', '2023-12-22', NULL, NULL, 1);

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
  `sdt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`username`, `pass`, `hoten`, `gioitinh`, `diachi`, `sdt`) VALUES
('annhien', '123', 'Lê Trương An Nhiên', 'Nữ', 'Phường 2, Trà Vinh', '0123456789'),
('camcoc', '123', 'Cám Nèee', 'Nữ', 'P1 - TPTV', '0147852369');

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
(3, 'Sale 30%', 30),
(4, 'Không sale', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `masale` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `thongtinsanpham` longtext NOT NULL,
  `hinhanh` text NOT NULL,
  `giagoc` int(11) NOT NULL,
  `trangthainoibat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `masale`, `tensanpham`, `thongtinsanpham`, `hinhanh`, `giagoc`, `trangthainoibat`) VALUES
(3, 4, 'Áo Polo Nam Aden vải cá sấu Cotton Interlock form Regular Fit', 'aaaaa', 'hinhanh/10.png', 350000, 'có'),
(4, 2, 'Áo Polo Nam Luke vải cá sấu cotton interlock form Regular Fit', 'aaa', 'hinhanh/13.png', 350000, 'có'),
(5, 1, 'Áo Polo Nam Carli vải Cotton Len Cao Cấp form Regular Fit', 'aaaaa', 'hinhanh/7.png', 450000, NULL),
(6, 1, 'Áo Polo Nam Ryder vải cá sấu Cotton Interlock form Regular Fit', 'aaaaa', 'hinhanh/14.png', 350000, NULL),
(7, 2, 'Áo Polo Nam Aden vải cá sấu Cotton Interlock form Regular Fit', 'aaa', 'hinhanh/13.png', 380000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `masize` int(11) NOT NULL,
  `tensize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`masize`, `tensize`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL');

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
  ADD KEY `madondat` (`madondat`),
  ADD KEY `masize` (`masize`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`masanpham`,`masize`),
  ADD KEY `masize` (`masize`);

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
  ADD KEY `masale` (`masale`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`masize`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondat`
--
ALTER TABLE `dondat`
  MODIFY `madondat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `masale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `masize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdondat`
--
ALTER TABLE `chitietdondat`
  ADD CONSTRAINT `chitietdondat_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`),
  ADD CONSTRAINT `chitietdondat_ibfk_2` FOREIGN KEY (`madondat`) REFERENCES `dondat` (`madondat`),
  ADD CONSTRAINT `chitietdondat_ibfk_3` FOREIGN KEY (`masize`) REFERENCES `size` (`masize`);

--
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`masize`) REFERENCES `size` (`masize`),
  ADD CONSTRAINT `chitietsanpham_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

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
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`masale`) REFERENCES `sale` (`masale`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
