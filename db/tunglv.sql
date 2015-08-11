-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 04:54 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunglv`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `chitiethoadon_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `hoadon_id` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `khuyenmai` varchar(30) NOT NULL,
  `baohanh` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`chitiethoadon_id`, `sanpham_id`, `hoadon_id`, `soluongmua`, `khuyenmai`, `baohanh`) VALUES
(1, 1, 1, 5, 'No', 2),
(2, 2, 2, 3, 'No', 1),
(6, 1, 2, 103, '10%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `hoadon_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaymua` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`hoadon_id`, `khachhang_id`, `ngaymua`) VALUES
(1, 1, '2015-08-10 16:32:16'),
(2, 1, '2015-08-11 04:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `ten` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`khachhang_id`, `ten`, `email`, `phone`) VALUES
(1, 'Lê Văn Tùng', 'tunglv95@gmail.com', 1899992222),
(2, 'Thiều Văn Hòa', 'hoatv95@gmail.com', 1695791343),
(6, 'Lê Văn Tường', 'tuonglv@gmail.com', 929293333);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `loaisanpham_id` int(11) NOT NULL,
  `ten` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`loaisanpham_id`, `ten`) VALUES
(1, 'Quần'),
(2, 'Áo'),
(3, 'Giày');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `loaisanpham_id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `masp` varchar(30) NOT NULL,
  `mota` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `loaisanpham_id`, `ten`, `masp`, `mota`) VALUES
(1, 1, 'Kaki Nam', '1', 'Kaki nam màu đen, hợp thời trang, phong cách, sành điệu, cá tính'),
(2, 2, 'Áo thun', '2', 'Áo thun 2 dây, mỏng manh, thoáng mát, dễ mặc, dễ cởi.'),
(3, 2, 'Áo sơ mi ', '10', 'Áo sơ mi thời trang'),
(4, 3, 'Giày Dr Marten', '12', 'Giày đẹp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`chitiethoadon_id`),
  ADD KEY `chitiethoadon_hoadon` (`hoadon_id`),
  ADD KEY `chitiethoadon_sanpham` (`sanpham_id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hoadon_id`),
  ADD KEY `hoadon_khachhang` (`khachhang_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`loaisanpham_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `sanpham_loaisanpham` (`loaisanpham_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `chitiethoadon_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `loaisanpham_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_hoadon` FOREIGN KEY (`hoadon_id`) REFERENCES `hoadon` (`hoadon_id`),
  ADD CONSTRAINT `chitiethoadon_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`khachhang_id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisanpham` FOREIGN KEY (`loaisanpham_id`) REFERENCES `loaisanpham` (`loaisanpham_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
