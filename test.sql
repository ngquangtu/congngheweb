-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 04:41 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomontrungtam`
--

CREATE TABLE `bomontrungtam` (
  `ID` int(11) NOT NULL,
  `IDdonvi` int(11) NOT NULL,
  `IDkp` int(11) NOT NULL,
  `Tenbmtt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `ID` int(11) NOT NULL,
  `tendonvi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `ID` int(11) NOT NULL,
  `Hoten` varchar(50) CHARACTER SET latin1 NOT NULL,
  `SDT` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Diachi` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `chucvu` varchar(20) CHARACTER SET latin1 NOT NULL,
  `bomon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_tk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`ID`, `Hoten`, `SDT`, `Diachi`, `email`, `chucvu`, `bomon`, `ID_tk`) VALUES
(1, 'giangvien1', '123456789', 'diachi1231241312312', 'email1@gmail.com', 'Giáº£ng viÃªn', 'CNTT', 1),
(2, 'giangvien2', '123456789', 'diachi1234575967678', 'email2@gmail.com', 'Giáº£ng viÃªn', 'CÆ¡ khÃ­', 2),
(4, 'giangvien4', '123456789', 'diachi123125413231', 'email4@gmail.com', 'Giáº£ng viÃªn', 'CNTT', 4),
(10, 'asdss', '2131231231', '312312312312312', '3@gmail.com', 'Giáº£ng viÃªn', 'Káº¿ toÃ¡n', 10),
(11, 'bsyhiudahsid', '531672312', '312312313123', 'sadaw@masad', 'TrÆ°á»Ÿng phÃ²ng', 'CNTT', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdonglaodong`
--

CREATE TABLE `hopdonglaodong` (
  `ID_hdld` int(11) NOT NULL,
  `Loaihdld` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tungay` date DEFAULT NULL,
  `denngay` date DEFAULT NULL,
  `ngayki` date DEFAULT NULL,
  `diachilamviec` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phucap` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hesoluong` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosonhansu`
--

CREATE TABLE `hosonhansu` (
  `ID_hsns` int(11) NOT NULL,
  `ID_hsxv` int(11) NOT NULL,
  `ID_hdld` int(11) DEFAULT NULL,
  `ID_ktkl` int(11) DEFAULT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosoxinviec`
--

CREATE TABLE `hosoxinviec` (
  `ID` int(11) NOT NULL,
  `donxinviec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CVxinviec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giaykhamsuckhoe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bangcapchungchi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CMT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thongtincanhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quanhegiadinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quatrinhhoctapvalamviec` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khenthuongkiluat`
--

CREATE TABLE `khenthuongkiluat` (
  `ID` int(11) NOT NULL,
  `TenKTKL` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoaphong`
--

CREATE TABLE `khoaphong` (
  `ID` int(11) NOT NULL,
  `IDdonvi` int(11) NOT NULL,
  `Tenkp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `passwd` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `email`, `passwd`) VALUES
(1, 'admin', '1'),
(2, 'test', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truongphong`
--

CREATE TABLE `truongphong` (
  `id` int(11) NOT NULL,
  `ten` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bomon` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truongphong`
--

INSERT INTO `truongphong` (`id`, `ten`, `sdt`, `diachi`, `email`, `chucvu`, `bomon`) VALUES
(1, 'truongphong1', '1231241232', 'sahdbwavjs', 'bdhwa@gmail.com', 'TrÆ°á»Ÿng phÃ²ng', 'Kinh táº¿'),
(2, 'truongphong2', '1234124123123', 'dsuhashjdhkasd', 'mailtruongphong@gmail.com', 'TrÆ°á»Ÿng phÃ²ng', 'CÃ´ng trÃ¬nh'),
(3, 'shdauhsdas', '1312312312', 'bdahsdhikasd', '2huhasd@mgias.com', 'TrÆ°á»Ÿng phÃ²ng', 'CNTT');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bomontrungtam`
--
ALTER TABLE `bomontrungtam`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDdonvi` (`IDdonvi`,`IDkp`),
  ADD KEY `IDkp` (`IDkp`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_tk` (`ID_tk`);

--
-- Chỉ mục cho bảng `hopdonglaodong`
--
ALTER TABLE `hopdonglaodong`
  ADD PRIMARY KEY (`ID_hdld`);

--
-- Chỉ mục cho bảng `hosonhansu`
--
ALTER TABLE `hosonhansu`
  ADD PRIMARY KEY (`ID_hsns`),
  ADD KEY `ID_hsxv` (`ID_hsxv`,`ID_hdld`,`ID_ktkl`),
  ADD KEY `ID_hdld` (`ID_hdld`),
  ADD KEY `ID_ktkl` (`ID_ktkl`);

--
-- Chỉ mục cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `khenthuongkiluat`
--
ALTER TABLE `khenthuongkiluat`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `khoaphong`
--
ALTER TABLE `khoaphong`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDdonvi` (`IDdonvi`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `truongphong`
--
ALTER TABLE `truongphong`
  ADD PRIMARY KEY (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bomontrungtam`
--
ALTER TABLE `bomontrungtam`
  ADD CONSTRAINT `bomontrungtam_ibfk_1` FOREIGN KEY (`IDkp`) REFERENCES `khoaphong` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hosonhansu`
--
ALTER TABLE `hosonhansu`
  ADD CONSTRAINT `hosonhansu_ibfk_1` FOREIGN KEY (`ID_hdld`) REFERENCES `hopdonglaodong` (`ID_hdld`) ON DELETE CASCADE,
  ADD CONSTRAINT `hosonhansu_ibfk_2` FOREIGN KEY (`ID_hsxv`) REFERENCES `hosoxinviec` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `hosonhansu_ibfk_3` FOREIGN KEY (`ID_ktkl`) REFERENCES `khenthuongkiluat` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `khoaphong`
--
ALTER TABLE `khoaphong`
  ADD CONSTRAINT `khoaphong_ibfk_1` FOREIGN KEY (`IDdonvi`) REFERENCES `donvi` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `giangvien` (`ID_tk`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
