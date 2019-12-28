-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 04:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSHH` varchar(5) NOT NULL,
  `SoLuong` tinyint(4) NOT NULL,
  `GiaDatHang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSKH` varchar(5) NOT NULL,
  `MSNV` varchar(5) DEFAULT NULL,
  `NgayDH` datetime NOT NULL,
  `TrangThai` varchar(10) NOT NULL,
  `hang_duoc_mua` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` varchar(5) NOT NULL,
  `TenHH` varchar(50) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` tinyint(4) NOT NULL,
  `MaNhom` varchar(5) NOT NULL,
  `Hinh` varchar(50) NOT NULL,
  `MoTaHH` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia`, `SoLuongHang`, `MaNhom`, `Hinh`, `MoTaHH`) VALUES
('agv01', 'MŨ FULLFACE AGV PISTA SOLELUNA GP', 25000000, 50, 'agv', 'agv-01.jpg', '- Thương hiệu nước Ý - Khối lượng 1.530g ± 50g - Chất liệu - Lớp vỏ ngoài được làm với công nghệ HIR-TH (High Resistance Thermoplastic Resin)\r\n- Vỏ bên trong 4 EPS được tối ưu bằng công nghệ FEM'),
('agv02', 'MŨ 3/4 AGV BLADE CELEBR WHITE', 3700000, 110, 'agv', 'agv-34.jpeg', '- Trọng lượng: 1250 g\r\n- Vỏ làm bằng HIR-TH (Nhựa nhiệt dẻo chịu lực cao)\r\n- Cấu trúc EPS 3 mật độ\r\n- IVS (Hệ thống thông gió tích hợp) với cửa hút khí trên có thể điều chỉnh được'),
('agv03', 'MŨ FULLFACE AGV K3-SV ROSSI MISANO 2015', 6990000, 80, 'agv', 'agv-03.png', '- Vỏ ngoài của mũ AGV K3-SV được làm bằng SHELL HIR-TH (vỏ nhựa nhiệt dẻo nhiệt dẻo).\r\n- ​Miếng kính GT 2 của K3-SV có khả năng giảm tốc, chống xước, bảo vệ chống lại tia UV'),
('ar01', 'Arai RX-7 GP RC Full Carbon Limited Edition', 89999000, 2, 'arai', 'arai-01.png', 'Mũ bảo hiểm bằng sợi carbon Arai RX-7 RC hoàn toàn mới phải là một trong những chiếc mũ bảo hiểm đặc biệt nhất từng được cung cấp cho cộng đồng xe máy'),
('ar02', 'ARAI RX7-RR5 CRUTCHLOW GP', 14800000, 65, 'arai', 'arai-02.png', '– Điểm đặc biệt đầu tiên của dòng mũ Arai là được làm thủ công bằng tay\r\n– Hệ thống thông gió thiết kế hoàn hảo (ARC-2 và AFC-2)\r\n– Công nghê Pro Shade Visor hỗ trợ tầm nhìn tự động, chống sương mù'),
('hjc01', 'MŨ FULLFACE HJC RPHA 70 COPTIC BLACK- RED', 9500000, 59, 'hjc', 'hjc-01.png', 'RPHA 70 là một chiếc mũ chất liệu siêu nhẹ. Được thiết kế để tích hợp kính trong khi đi trời nắng và tấm pinlock để chống tấp hơi và sương mù'),
('hjc02', 'MŨ FULLFACE HJC RPHA 70 Pinot Black & Grey', 9500000, 70, 'hjc', 'hjc-02.png', 'RPHA 70 là một chiếc mũ chất liệu siêu nhẹ. Được thiết kế để tích hợp kính trong khi đi trời nắng và tấm pinlock để chống tấp hơi và sương mù'),
('hjc03', 'MŨ FULLFACE HJC C70 MATTE BLACK/ORANGE', 3950000, 90, 'hjc', 'hjc-03.png', '+Thương hiệu: Hàn Quốc\r\n+ Trọng lượng: 1600g(±50)\r\n+ Phụ kiện đi kèm: Box, túi rút, Pinlock chống sương\r\n+ Đạt chuẩn: DOT, ECE 22.05 + Bảo hành: 1 năm'),
('ls201', 'Mũ Bảo Hiểm LS2 FF320', 2600000, 60, 'ls2', 'Ls2-01.png', ' Thương hiệu LS2. \r\n– Đạt chuẩn ECE 22.05.\r\n– Kích cỡ vỏ 1 kích cỡ vỏ từ S-XXL.\r\n– Mút xốp được làm từ chất liệu EPS\r\n– Chất liệu nhựa ABS nguyên sinh.\r\n– Kính mũ được làm từ chất liệu Polymer cao cấp'),
('ls202', 'MŨ FULLFACE LS2 CHALLENGER HPFC FF327', 6500000, 90, 'ls2', 'ls2-02.png', 'MŨ FULLFACE LS2 CHALLENGER HPFC FF327 – Là một chiếc mũ bảo hiểm được làm với chất liệu sợi thủy tinh siêu nhẹ .Cho người dùng 1 sự thoải mái mà vẫn đảm bảo độ chắc chắn an toàn'),
('shk01', 'MŨ FULLFACE SHARK RACE-R_PRO_GP_LORENZO', 23800000, 90, 'shark', 'shark-01.png', 'Thương hiệu: SHARK. |\r\nChất liệu: sợi CARBON. |\r\nTrọng lượng: 1460g. |\r\nKính: Tích hợp chống mờ sương. |\r\nPhụ kiện đi kèm: hộp dựng mũ, túi rút, đặc biệt có kính đen đi kèm.'),
('shk02', 'MŨ FULLFACE SHARK RACE-R_PRO_GP_ZARCO', 23800000, 54, 'shark', 'shark-02.png', 'Thương hiệu: SHARK. | Chất liệu: sợi CARBON. | Trọng lượng: 1460g. | Kính: Tích hợp chống mờ sương. | Phụ kiện đi kèm: hộp dựng mũ, túi rút, đặc biệt có kính đen đi kèm.'),
('sho01', 'SHOEI X14 ASSAIL RED/BLACK', 16800000, 75, 'shoei', 'shoei-01.png', '– Màu sắc: Đỏ/ Đen.\r\n– Trọng lượng: 1.35kg.\r\n– Mũ được làm từ vật liệu sợi kim loại và sợi hữu cơ hiệu suất cao tạp thành cấu trúc siêu nhẹ, đàn hồi và vô cùng an toàn.'),
('yh01', 'MŨ LẬT HÀM YOHE 950 BLACK/WHITE/GRAY/RED.', 2000000, 100, 'yohe', 'yohe-01.png', '– Thương hiệu: YOHE\r\n– Trọng lượng: 1450± 50 gr  \r\n– Đạt chuẩn: ECE.2205\r\n– Vỏ mũ được làm từ nhựa ABS nguyên sinh có khả năng hấp thụ lực tốt.\r\n– Phần hàm có thể lật lên rất gọn gàng, cân bằng.\r\n'),
('yh02', 'MŨ CÀO CÀO YOHE 632A ADVENTURE FLUO YELLOW', 1900000, 65, 'yohe', 'yohe-02.png', '– Thương hiệu: YOHE\r\n– Trọng lượng: 1450± 50 gr  \r\n– Đạt chuẩn: ECE.2205\r\n– Vỏ mũ được làm từ nhựa ABS nguyên sinh có khả năng hấp thụ lực tốt.\r\n– Kính chắn được làm từ chất liệu cao cấp, độ bền cao'),
('yh03', 'MŨ FULLFACE YOHE 978 BLACK TITANIUM RED', 1300000, 78, 'yohe', 'yohe-03.png', '– Thương hiệu: YOHE.\r\n– Đạt chuẩn ECE.2205\r\n– Trọng lượng: 1300 ± 50gr.\r\n– Vỏ mũ được làm từ nhựa ABS nguyên sinh có khả năng hấp thụ lực tốt.\r\n– Kính chắn được làm từ chất liệu cao cấp có độ bền cao');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(5) NOT NULL,
  `HoTenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(5) NOT NULL,
  `HoTenNV` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
('1', 'Trần Sĩ Đạt', 'Manage', 'Vĩnh Long', '0382507755');

-- --------------------------------------------------------

--
-- Table structure for table `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `MaNhom` varchar(5) NOT NULL,
  `TenNhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`) VALUES
('agv', 'AGV'),
('arai', 'Arai'),
('hjc', 'HJC'),
('ls2', 'LS2'),
('shark', 'Shark'),
('shoei', 'Shoei'),
('yohe', 'YOHE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `chitietdathang_ibfk_1` (`MSHH`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSKH` (`MSKH`),
  ADD KEY `MSNV` (`MSNV`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`MaNhom`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`) ON UPDATE CASCADE;

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON UPDATE CASCADE;

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaNhom`) REFERENCES `nhomhanghoa` (`MaNhom`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
