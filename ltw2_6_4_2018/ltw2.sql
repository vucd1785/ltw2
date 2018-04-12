-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 12, 2018 lúc 09:41 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltw2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id_parent` int(11) DEFAULT NULL,
  `menu_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `menu_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_id_parent`, `menu_name`, `menu_status`) VALUES
(1, NULL, 'Giới Thiệu', 'còn hàng'),
(2, NULL, 'Chương Trình Đào Tạo', 'còn hàng'),
(3, NULL, 'Sinh Viên', 'còn hàng'),
(4, 1, 'Giảng Viên', 'còn hàng'),
(5, 1, 'Môn Học', 'đã hết'),
(6, 4, 'Vinh', ''),
(7, 4, 'Thảo', ''),
(8, 4, 'Luân', ''),
(9, 4, 'Hoan', ''),
(10, 5, 'Kiểm Thử Phần Mềm', ''),
(11, 5, 'Tin Học Đại Cương', ''),
(12, 5, 'Xác Suất Thống Kê', ''),
(13, 5, 'Quốc Phòng 1', ''),
(14, 5, 'Quốc Phòng 2', ''),
(15, 5, 'Quốc Phòng 3', ''),
(16, 2, 'Khoa CNTT', ''),
(17, 2, 'Khoa Cơ Khí', ''),
(18, 2, 'Khoa Điện Tử', ''),
(19, 2, 'Khoa Tiếng Anh', ''),
(20, 2, 'Khoa Tiếng Hàn', ''),
(21, 2, 'Khoa Kế Toán', ''),
(22, 3, 'Khóa 2014', ''),
(23, 3, 'Khóa 2015', ''),
(24, 3, 'Khóa 2016', ''),
(25, 3, 'Khóa 2017', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `student_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `student_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `student_info` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_phone`, `student_info`) VALUES
(1, 'Nguyễn Đức Thảo', 'ductheo@gmail.com', '01234512314', 'Cao:168m-Nặng:50kg-Tuổi:18'),
(2, 'Bùi Quang Dũng', 'macquan@gmail.com', '01234512313', 'Cao:178m-Nặng:50kg-Tuổi:17'),
(3, 'Đinh Xuân Thu', 'macao@gmail.com', '01234512514', 'Cao:176m-Nặng:60kg-Tuổi:19'),
(4, 'Lê Văn Lâm', 'ochuong@gmail.com', '01234512364', 'Cao:178m-Nặng:70kg-Tuổi20'),
(5, 'Nguyễn Trung Hiếu', 'vanba@gmail.com', '01238512314', 'Cao:188m-Nặng:80kg-Tuổi:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
