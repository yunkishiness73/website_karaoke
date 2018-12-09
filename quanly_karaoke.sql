-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 05:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanly_karaoke`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahoadon` int(11) NOT NULL,
  `mathucdon` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahoadon`, `mathucdon`, `soluong`, `dongia`) VALUES
(1, 2, 2, 20000),
(1, 7, 1, 80000),
(1, 8, 20, 100000),
(6, 8, 2, 10000),
(9, 2, 2, 20000),
(9, 3, 2, 50000),
(10, 2, 2, 20000),
(10, 3, 100, 2500000),
(10, 4, 10, 100000),
(10, 5, 1, 120000),
(10, 6, 1, 80000),
(10, 7, 1, 80000),
(10, 8, 1, 5000),
(11, 4, 10, 100000),
(11, 8, 10, 50000),
(13, 8, 10, 50000),
(14, 8, 10, 50000),
(15, 2, 3, 30000),
(16, 4, 2, 20000),
(16, 8, 1, 5000),
(17, 4, 1, 10000),
(17, 6, 1, 80000),
(18, 2, 5, 50000),
(18, 3, 4, 100000),
(18, 7, 10, 800000),
(18, 8, 10, 50000),
(20, 8, 10, 50000),
(21, 8, 10, 50000),
(24, 8, 10, 50000),
(27, 2, 10, 100000),
(27, 3, 5, 125000),
(27, 7, 10, 800000),
(28, 8, 20, 100000),
(29, 2, 4, 40000),
(29, 3, 1, 25000),
(29, 7, 10, 800000),
(29, 8, 2, 10000),
(30, 2, 1, 10000),
(30, 6, 1, 80000),
(31, 8, 5, 25000),
(33, 2, 100, 1000000),
(33, 8, 10, 50000),
(34, 8, 10, 50000),
(35, 4, 1, 10000),
(36, 2, 1, 10000),
(36, 3, 1, 25000),
(40, 8, 1, 5000),
(48, 18, 1, 400000),
(49, 8, 50, 500000),
(49, 18, 2, 800000),
(50, 8, 10, 100000),
(50, 18, 2, 800000),
(53, 19, 2, 50000),
(60, 7, 2, 200000),
(60, 8, 10, 100000),
(61, 21, 10, 300000),
(61, 23, 10, 2000000),
(62, 23, 1, 200000),
(63, 8, 10, 100000),
(65, 8, 10, 100000),
(66, 23, 2, 400000),
(67, 21, 1, 30000),
(67, 23, 1, 200000),
(68, 21, 1, 30000),
(68, 23, 1, 200000),
(69, 8, 7, 70000),
(69, 21, 1, 30000),
(69, 23, 1, 200000),
(71, 8, 17, 170000),
(71, 21, 1, 30000),
(71, 23, 1, 200000),
(72, 8, 70, 700000),
(72, 23, 3, 600000),
(73, 3, 1, 25000),
(73, 4, 1, 10000),
(73, 5, 1, 120000),
(73, 6, 1, 80000),
(73, 7, 1, 100000),
(73, 8, 1, 10000),
(74, 8, 7, 70000),
(74, 21, 1, 30000),
(74, 23, 10, 2000000),
(75, 5, 3, 360000),
(75, 8, 17, 170000),
(75, 18, 1, 400000),
(77, 8, 17, 170000),
(77, 21, 2, 60000),
(77, 23, 1, 200000),
(79, 2, 4, 40000),
(80, 18, 1, 400000),
(80, 23, 1, 200000),
(82, 5, 1, 120000),
(82, 7, 1, 100000),
(82, 21, 1, 30000),
(82, 23, 2, 400000),
(83, 2, 6, 60000),
(83, 8, 1, 10000),
(84, 18, 2, 800000),
(85, 23, 20, 4000000),
(86, 7, 10, 1000000),
(87, 5, 1, 120000),
(87, 7, 10, 1000000),
(88, 8, 10, 100000),
(89, 18, 3, 1200000),
(89, 23, 10, 2000000),
(92, 18, 1, 400000),
(92, 21, 10, 300000),
(92, 23, 20, 4000000),
(93, 23, 2, 400000),
(94, 23, 2, 400000),
(95, 8, 2, 20000),
(96, 18, 1, 400000),
(96, 29, 2, 400000),
(107, 29, 2, 400000),
(109, 8, 6, 60000),
(110, 23, 2, 400000),
(110, 29, 2, 400000),
(112, 18, 1, 400000),
(112, 21, 2, 60000),
(116, 8, 10, 100000),
(118, 18, 1, 400000),
(119, 3, 2, 50000),
(125, 2, 10, 100000),
(125, 4, 10, 100000),
(126, 2, 20, 200000),
(139, 8, 10, 100000),
(143, 8, 2, 20000),
(144, 18, 1, 400000),
(148, 2, 1, 10000),
(148, 3, 1, 25000),
(148, 4, 1, 10000),
(148, 5, 1, 120000),
(148, 6, 1, 80000),
(148, 7, 1, 100000),
(148, 8, 1, 10000),
(148, 18, 1, 400000),
(148, 19, 1, 25000),
(148, 21, 1, 30000),
(148, 23, 1, 200000),
(148, 29, 1, 200000),
(149, 2, 1, 10000),
(149, 3, 1, 25000),
(149, 4, 1, 10000),
(149, 5, 1, 120000),
(149, 6, 1, 80000),
(149, 7, 1, 100000),
(149, 8, 1, 10000),
(149, 18, 1, 400000),
(149, 19, 1, 25000),
(149, 21, 1, 30000),
(149, 23, 1, 200000),
(149, 29, 1, 200000),
(152, 5, 1, 120000),
(152, 7, 1, 100000),
(152, 18, 1, 400000),
(155, 29, 1, 200000),
(156, 18, 2, 800000),
(156, 23, 2, 400000),
(158, 18, 2, 800000),
(159, 8, 1, 10000),
(161, 18, 2, 800000),
(164, 29, 2, 400000),
(166, 23, 1, 200000),
(167, 8, 5, 50000),
(169, 23, 1, 200000),
(169, 29, 1, 200000),
(172, 21, 1, 30000),
(172, 29, 1, 200000),
(179, 2, 1, 10000),
(179, 3, 1, 25000),
(179, 4, 1, 10000),
(179, 5, 1, 120000),
(179, 6, 1, 80000),
(179, 7, 1, 100000),
(179, 8, 1, 10000),
(179, 18, 1, 400000),
(181, 29, 2, 400000),
(181, 36, 1, 15000),
(185, 2, 1, 10000),
(185, 3, 1, 25000),
(185, 6, 1, 80000),
(185, 7, 1, 100000),
(185, 35, 2, 600000),
(185, 36, 1, 15000),
(190, 37, 1, 123000),
(191, 35, 1, 300000),
(191, 36, 1, 15000);

--
-- Triggers `chitiethoadon`
--
DELIMITER $$
CREATE TRIGGER `before_insert_chitiethoadon` BEFORE INSERT ON `chitiethoadon` FOR EACH ROW BEGIN
	DECLARE giatien double;
	SET @giatien = (SELECT thucdon.giatien FROM thucdon WHERE thucdon.mathucdon = NEW.mathucdon);
   	IF(NEW.dongia = 0) THEN
    	SET NEW.dongia = NEW.soluong * @giatien;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_soluong` BEFORE UPDATE ON `chitiethoadon` FOR EACH ROW BEGIN
	DECLARE giatien double;
    SET @giatien = (SELECT thucdon.giatien FROM thucdon WHERE thucdon.mathucdon = OLD.mathucdon);
    SET NEW.dongia = NEW.soluong * @giatien;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(11) NOT NULL,
  `maphong` int(11) NOT NULL,
  `checkin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checkout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tongtien` double NOT NULL DEFAULT '0',
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `thungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `maphong`, `checkin`, `checkout`, `tongtien`, `chitiet`, `thungan`) VALUES
(1, 13, '2018-09-29 17:54:12', '2018-09-29 18:07:00', 38586444, '', 1),
(3, 2, '2018-10-01 02:37:45', '2018-10-10 18:15:02', 18529711, '', 1),
(4, 3, '2018-10-01 03:25:01', '2018-10-10 16:35:25', 18333867, '', 1),
(6, 15, '2018-10-01 04:07:04', '2018-10-07 18:33:14', 31697222, '', 1),
(8, 1, '2018-10-03 16:36:13', '2018-10-10 18:15:12', 13571978, '', 1),
(9, 5, '2018-10-06 09:52:39', '2018-10-10 16:06:29', 8398444, '', 1),
(10, 6, '2018-10-06 09:55:05', '2018-10-10 16:05:49', 11229311, '', 1),
(11, 11, '2018-10-06 09:55:54', '2018-10-07 18:08:49', 4015833, '', 1),
(12, 13, '2018-10-07 17:43:25', '2018-10-07 17:43:35', 556, '', 1),
(13, 13, '2018-10-07 17:44:33', '2018-10-07 17:46:03', 55000, '', 1),
(14, 13, '2018-10-07 17:46:50', '2018-10-07 17:51:00', 63889, '', 1),
(15, 7, '2018-10-07 17:57:39', '2018-10-07 18:06:37', 71956, '', 1),
(16, 14, '2018-10-08 09:35:29', '2018-10-09 18:01:23', 6511333, '', 1),
(17, 7, '2018-10-08 10:22:43', '2018-10-08 10:22:58', 105333, '', 1),
(18, 13, '2018-10-09 19:05:26', '2018-10-10 13:34:43', 4697611, '', 1),
(19, 9, '2018-10-10 11:18:06', '2018-10-10 13:40:50', 285467, '', 1),
(20, 13, '2018-10-10 16:35:38', '2018-10-10 16:36:44', 53667, '', 1),
(21, 13, '2018-10-10 18:17:43', '2018-10-10 18:17:50', 50389, '', 1),
(22, 13, '2018-10-10 18:18:34', '2018-10-10 18:18:42', 45444, '', 1),
(23, 13, '2018-10-10 18:22:36', '2018-10-10 18:22:39', 167, '', 1),
(24, 14, '2018-10-10 18:22:54', '2018-10-10 18:22:59', 50278, '', 1),
(25, 9, '2018-10-11 05:39:37', '2019-09-30 17:00:00', 100000, '', 1),
(26, 12, '2018-10-11 05:42:42', '2020-08-31 17:00:00', 100000, '', 1),
(27, 15, '2018-10-11 14:27:40', '2018-10-11 14:39:45', 1215278, '', 1),
(28, 14, '2018-10-11 14:48:56', '2018-10-11 14:49:33', 102056, '', 1),
(29, 13, '2018-10-11 14:50:08', '2018-10-11 16:13:22', 1302444, '', 1),
(30, 2, '2018-10-11 16:46:48', '2018-10-11 17:35:30', 169933, '', 1),
(31, 13, '2018-10-12 07:30:24', '2018-10-12 07:31:07', 27389, '', 1),
(32, 13, '2018-10-12 07:33:24', '2018-10-12 07:33:41', 944, '', 1),
(33, 9, '2018-10-12 07:36:08', '2018-10-12 12:39:21', 1806433, '', 1),
(34, 1, '2018-10-12 08:04:45', '2018-10-12 08:06:56', 52911, '', 1),
(35, 7, '2018-10-12 12:31:13', '2018-10-12 12:31:45', 130711, '', 1),
(36, 7, '2018-10-12 12:32:02', '2018-10-12 12:32:35', 50733, '', 1),
(37, 3, '2018-10-12 12:32:54', '2018-10-12 13:00:56', 37378, '', 1),
(38, 15, '2018-10-12 13:03:44', '2018-10-12 15:51:08', 558000, '', 1),
(39, 12, '2018-10-12 13:34:36', '2018-10-12 15:51:56', 274667, '', 1),
(40, 8, '2018-10-12 13:34:47', '2018-10-12 15:51:35', 187400, '', 1),
(41, 14, '2018-10-12 16:27:51', '2018-10-12 16:30:45', 9667, '', 1),
(42, 11, '2018-10-12 16:27:56', '2018-10-12 16:41:42', 27533, '', 1),
(43, 10, '2018-10-12 16:41:27', '2018-10-12 16:42:01', 1133, '', 1),
(44, 6, '2018-10-12 16:42:54', '2018-10-12 16:43:11', 378, '', 1),
(45, 7, '2018-10-12 16:42:57', '2018-10-12 16:43:01', 89, '', 1),
(46, 9, '2018-10-13 14:47:15', '2018-10-13 14:58:41', 22867, '', 1),
(47, 6, '2018-10-13 15:02:34', '2018-10-13 17:46:30', 218578, '', 1),
(48, 11, '2018-10-13 18:27:14', '2018-10-13 18:27:57', 501433, '', 1),
(49, 12, '2018-10-13 18:51:54', '2018-10-13 19:01:16', 1518733, '', 1),
(50, 11, '2018-10-16 08:43:34', '2018-10-16 08:44:04', 1101000, '', 1),
(51, 5, '2018-10-16 10:02:19', '2018-10-16 12:55:27', 230844, '', 1),
(52, 2, '2018-10-16 12:55:37', '2018-10-16 12:59:16', 4867, '', 1),
(53, 2, '2018-10-16 14:55:47', '2018-10-17 16:06:29', 2064267, '', 1),
(54, 1, '2018-10-17 16:38:01', '2018-10-17 17:00:56', 30556, '', 1),
(55, 12, '2018-10-17 17:19:45', '2018-10-17 17:19:48', 100, '', 1),
(56, 12, '2018-10-18 03:16:31', '2018-10-18 14:49:33', 1386067, '', 1),
(57, 11, '2018-10-18 03:16:44', '2018-10-18 14:49:25', 1385367, '', 1),
(58, 11, '2018-10-18 14:49:54', '2018-10-18 14:49:56', 67, '', 1),
(59, 11, '2018-10-18 14:50:15', '2018-10-18 14:50:16', 33, '', 1),
(60, 12, '2018-10-18 15:31:10', '2018-10-18 15:49:15', 351167, '', 1),
(61, 5, '2018-10-18 15:51:29', '2018-10-18 15:51:55', 800578, '', 1),
(62, 10, '2018-10-18 15:56:32', '2018-10-18 15:56:54', 50733, '', 1),
(63, 10, '2018-10-18 15:58:05', '2018-10-18 15:58:56', 101700, '', 1),
(64, 9, '2018-10-18 16:00:16', '2018-10-18 16:00:33', 567, '', 1),
(65, 7, '2018-10-18 16:02:16', '2018-10-18 16:02:28', 100267, '', 1),
(66, 6, '2018-10-18 16:03:16', '2018-10-18 16:03:23', 120156, '', 1),
(67, 5, '2018-10-18 16:04:41', '2018-10-18 16:05:16', 90778, '', 1),
(68, 9, '2018-10-18 16:07:56', '2018-10-18 16:08:05', 90300, '', 1),
(69, 7, '2018-10-18 16:08:17', '2018-10-18 16:09:33', 161689, '', 1),
(70, 15, '2018-10-18 16:09:59', '2018-10-18 16:11:09', 3889, '', 1),
(71, 12, '2018-10-18 16:11:19', '2018-10-18 16:11:40', 260700, '', 1),
(72, 14, '2018-10-18 16:13:44', '2018-10-18 16:14:07', 881278, '', 1),
(73, 15, '2018-10-18 16:14:43', '2018-10-18 16:20:04', 512833, '', 1),
(74, 15, '2018-10-18 16:31:51', '2018-10-18 16:36:54', 716833, '', 1),
(75, 12, '2018-10-18 16:38:04', '2018-10-18 16:40:17', 1034433, '', 1),
(76, 14, '2018-10-18 16:42:28', '2018-10-18 16:50:35', 27056, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_76.pdf', 1),
(77, 10, '2018-10-19 03:18:08', '2018-10-19 03:22:52', 299467, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_77.pdf', 1),
(78, 9, '2018-10-19 03:23:38', '2018-10-19 05:01:10', 195067, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_78.pdf', 1),
(79, 1, '2018-10-19 07:07:03', '2018-10-19 14:07:54', 601133, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_79.pdf', 1),
(80, 2, '2018-10-19 07:07:13', '2018-10-19 13:58:35', 1108489, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_80.pdf', 1),
(81, 3, '2018-10-19 07:10:00', '2018-10-19 14:09:11', 558911, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_81.pdf', 1),
(82, 14, '2018-10-19 14:10:19', '2018-10-19 14:11:21', 373444, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_82.pdf', 1),
(83, 15, '2018-10-19 14:13:25', '2018-10-19 14:15:20', 106389, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_83.pdf', 1),
(84, 14, '2018-10-19 14:21:27', '2018-10-19 14:22:21', 1003000, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_84.pdf', 1),
(85, 12, '2018-10-19 14:34:02', '2018-10-19 14:38:13', 1208367, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_85.pdf', 1),
(86, 12, '2018-10-19 14:38:51', '2018-10-19 14:39:03', 1000400, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_86.pdf', 1),
(87, 13, '2018-10-19 14:41:00', '2018-10-19 16:14:48', 1432667, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_87.pdf', 1),
(88, 14, '2018-10-19 16:09:50', '2018-10-19 16:09:56', 100333, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_88.pdf', 1),
(89, 13, '2018-10-19 16:15:01', '2018-10-19 16:15:39', 2102111, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_89.pdf', 1),
(90, 15, '2018-10-19 16:18:08', '2018-10-19 16:30:30', 41222, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_90.pdf', 1),
(91, 14, '2018-10-19 16:18:11', '2018-10-19 16:30:19', 40444, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_91.pdf', 1),
(92, 15, '2018-10-19 16:34:27', '2018-10-19 16:35:23', 2003111, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_92.pdf', 1),
(93, 8, '2018-10-20 02:49:58', '2018-10-20 02:52:22', 123200, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_93.pdf', 1),
(94, 14, '2018-10-20 11:02:47', '2018-10-20 11:02:58', 120611, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_94.pdf', 1),
(95, 9, '2018-10-20 15:54:41', '2018-10-20 16:29:43', 90067, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_95.pdf', 1),
(96, 15, '2018-10-20 18:19:02', '2018-10-20 18:22:30', 711556, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_96.pdf', 1),
(106, 1, '2018-10-23 16:23:59', '2018-10-23 18:22:06', 157489, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_106.pdf', 1),
(107, 2, '2018-10-23 16:37:00', '2018-10-23 16:40:00', 204000, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_107.pdf', 1),
(108, 2, '2018-10-23 17:22:00', '2018-10-23 18:20:07', 77489, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_108.pdf', 1),
(109, 6, '2018-10-23 17:55:00', '2018-10-23 18:25:13', 100289, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_109.pdf', 1),
(110, 5, '2018-10-23 18:08:00', '2018-10-23 18:26:32', 344711, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_110.pdf', 1),
(111, 14, '2018-10-23 18:09:00', '2018-10-23 18:21:35', 41944, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_111.pdf', 1),
(112, 1, '2018-10-24 05:35:00', '2018-10-24 07:09:36', 686133, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_112.pdf', 1),
(113, 3, '2018-10-24 05:40:00', '2018-10-24 05:41:24', 1867, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_113.pdf', 1),
(114, 3, '2018-10-24 07:12:00', '2018-10-24 16:02:44', 707644, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_114.pdf', 1),
(115, 1, '2018-10-24 07:14:37', '2018-10-24 14:46:04', 601933, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_115.pdf', 1),
(116, 1, '2018-10-24 15:12:14', '2018-10-24 16:16:18', 185422, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_116.pdf', 1),
(117, 2, '2018-10-24 15:35:00', '2018-10-25 09:41:27', 1448600, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_117.pdf', 1),
(118, 4, '2018-10-24 15:35:00', '2018-10-25 09:42:53', 1950511, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_118.pdf', 1),
(119, 5, '2018-10-24 15:36:00', '2018-10-24 16:14:59', 51978, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_119.pdf', 1),
(120, 1, '2018-10-25 09:50:00', '2018-10-25 16:19:34', 519422, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_120.pdf', 1),
(121, 15, '2018-10-25 17:17:53', '2018-10-25 17:44:13', 87778, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_121.pdf', 1),
(122, 14, '2018-10-25 17:20:00', '2018-10-25 17:45:39', 85500, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_122.pdf', 1),
(123, 14, '2018-10-26 03:19:29', '2018-10-26 11:31:41', 1640667, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_123.pdf', 1),
(124, 10, '2018-10-26 03:20:10', '2018-10-26 03:30:58', 21600, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_124.pdf', 1),
(125, 9, '2018-10-26 03:21:03', '2018-10-26 03:22:22', 202633, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_125.pdf', 1),
(126, 9, '2018-10-26 03:22:43', '2018-10-26 03:23:07', 200800, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_126.pdf', 1),
(127, 15, '2018-10-26 03:25:00', '2018-10-26 11:29:46', 1615889, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_127.pdf', 1),
(128, 13, '2018-10-26 03:30:00', '2018-10-26 11:31:56', 1606444, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_128.pdf', 1),
(129, 5, '2018-10-26 03:40:00', '2018-10-26 04:00:16', 27022, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_129.pdf', 1),
(130, 15, '2018-10-26 13:40:16', '2018-10-26 16:17:06', 522778, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_130.pdf', 1),
(131, 14, '2018-10-26 14:00:00', '2018-10-26 15:34:32', 315111, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_131.pdf', 1),
(132, 9, '2018-10-27 04:14:05', '2018-10-27 14:06:40', 1185167, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_132.pdf', 1),
(133, 10, '2018-10-27 04:16:00', '2018-10-27 13:35:34', 1119133, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_133.pdf', 1),
(134, 11, '2018-10-27 13:35:24', '2018-10-27 14:10:24', 70000, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_134.pdf', 1),
(135, 15, '2018-10-27 14:20:00', '2018-10-27 15:33:09', 303833, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_135.pdf', 1),
(136, 9, '2018-10-28 17:55:15', '2018-10-28 17:59:42', 8900, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_136.pdf', 1),
(137, 10, '2018-10-28 18:06:00', '2018-10-29 03:53:00', 1174000, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_137.pdf', 1),
(138, 1, '2018-10-29 03:54:59', '2018-10-29 04:06:01', 574711, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_138.pdf', 1),
(139, 11, '2018-10-29 04:09:57', '2018-10-29 18:22:14', 1804567, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_139.pdf', 1),
(140, 9, '2018-10-29 17:45:21', '2018-10-29 18:22:37', 74533, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_140.pdf', 1),
(141, 12, '2018-10-29 17:48:14', '2018-10-29 18:22:49', 69167, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_141.pdf', 1),
(142, 9, '2018-10-31 14:25:33', '2018-10-31 18:19:51', 468600, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_142.pdf', 1),
(143, 9, '2018-11-01 17:00:55', '2018-11-01 17:01:07', 20400, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_143.pdf', 1),
(144, 9, '2018-11-01 17:02:02', '2018-11-01 17:03:57', 503833, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_144.pdf', 1),
(145, 10, '2018-11-01 17:06:28', '2018-11-01 17:06:30', 67, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_145.pdf', 1),
(146, 9, '2018-11-01 17:55:00', '2018-11-01 18:42:11', 94367, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_146.pdf', 1),
(147, 9, '2018-11-02 03:31:44', '2018-11-02 06:03:21', 303233, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_147.pdf', 1),
(148, 14, '2018-11-03 03:27:57', '2018-11-03 10:17:47', 2711111, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_148.pdf', 1),
(149, 9, '2018-11-03 03:31:31', '2018-11-03 03:36:51', 1355667, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_149.pdf', 1),
(150, 10, '2018-11-03 03:33:00', '2018-11-03 04:19:02', 92067, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_150.pdf', 1),
(151, 17, '2018-11-03 03:33:51', '2018-11-03 10:35:01', 842333, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_151.pdf', 1),
(152, 15, '2018-11-03 10:39:22', '2018-11-03 13:15:22', 1520000, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_152.pdf', 1),
(153, 4, '2018-11-03 13:40:00', '2018-11-03 14:07:09', 36200, 'http://www.localhost:8080/php/website_karaoke/hoadon/report_153.pdf', 1),
(154, 15, '2018-11-03 16:00:00', '2018-11-03 17:44:31', 348389, 'http://localhost:8080/php/website_karaoke/hoadon/report_154.pdf', 1),
(155, 9, '2018-11-04 03:26:11', '2018-11-04 06:18:28', 724567, 'http://localhost:8080/php/website_karaoke/hoadon/report_155.pdf', 1),
(156, 6, '2018-11-04 08:03:40', '2018-11-04 14:02:26', 1598356, 'http://localhost:8080/php/website_karaoke/hoadon/report_156.pdf', 1),
(157, 7, '2018-11-04 14:08:41', '2018-11-04 14:21:33', 17156, 'http://localhost:8080/php/website_karaoke/hoadon/report_157.pdf', 1),
(158, 6, '2018-11-04 14:22:27', '2018-11-04 14:28:07', 1007556, 'http://localhost:8080/php/website_karaoke/hoadon/report_158.pdf', 1),
(159, 13, '2018-11-04 14:29:19', '2018-11-04 14:42:16', 103167, 'http://localhost:8080/php/website_karaoke/hoadon/report_159.pdf', 1),
(160, 8, '2018-11-04 14:44:52', '2018-11-04 14:48:44', 15156, 'http://localhost:8080/php/website_karaoke/hoadon/report_160.pdf', 1),
(161, 5, '2018-11-05 11:06:12', '2018-11-05 11:09:31', 3004422, 'http://localhost:8080/php/website_karaoke/hoadon/report_161.pdf', 1),
(162, 1, '2018-11-05 11:22:50', '2018-11-05 11:39:12', 21822, 'http://localhost:8080/php/website_karaoke/hoadon/report_162.pdf', 1),
(163, 14, '2018-11-05 13:42:14', '2018-11-05 15:10:46', 315111, 'http://localhost:8080/php/website_karaoke/hoadon/report_163.pdf', 1),
(164, 17, '2018-11-06 03:36:07', '2018-11-06 08:37:49', 803400, 'http://localhost:8080/php/website_karaoke/hoadon/report_164.pdf', 1),
(165, 2, '2018-11-06 08:50:18', '2018-11-07 14:18:58', 2358222, 'http://localhost:8080/php/website_karaoke/hoadon/report_165.pdf', 1),
(166, 1, '2018-11-07 12:02:28', '2018-11-07 16:39:39', 869578, 'http://localhost:8080/php/website_karaoke/hoadon/report_166.pdf', 1),
(167, 10, '2018-11-07 17:32:37', '2018-11-08 03:33:05', 1500933, 'http://localhost:8080/php/website_karaoke/hoadon/report_167.pdf', 1),
(168, 1, '2018-11-08 13:29:11', '2018-11-10 10:38:16', 3662111, 'http://localhost:8080/php/website_karaoke/hoadon/report_168.pdf', 1),
(169, 10, '2018-11-10 15:37:00', '2018-11-10 17:15:01', 896033, 'http://localhost:8080/php/website_karaoke/hoadon/report_169.pdf', 1),
(170, 9, '2018-11-10 18:00:15', '2018-11-12 16:54:20', 5678167, 'http://localhost:8080/php/website_karaoke/hoadon/report_170.pdf', 1),
(171, 9, '2018-11-14 13:56:54', '2018-11-15 03:07:08', 1680467, 'http://localhost:8080/php/website_karaoke/hoadon/report_171.pdf', 1),
(172, 11, '2018-11-14 14:24:27', '2018-11-15 13:16:23', 3173867, 'http://localhost:8080/php/website_karaoke/hoadon/report_172.pdf', 1),
(173, 10, '2018-11-14 18:11:27', '2018-11-15 03:59:57', 1177000, 'http://localhost:8080/php/website_karaoke/hoadon/report_173.pdf', 1),
(175, 9, '2018-11-15 03:46:56', '2018-11-15 03:52:53', 11900, 'http://localhost:8080/php/website_karaoke/hoadon/report_175.pdf', 1),
(176, 13, '2018-11-15 13:32:41', '2018-11-16 15:41:21', 5268889, 'http://localhost:8080/php/website_karaoke/hoadon/report_176.pdf', 1),
(177, 5, '2018-11-15 14:21:01', '2018-11-16 06:51:01', 1320000, 'http://localhost:8080/php/website_karaoke/hoadon/report_177.pdf', 1),
(178, 3, '2018-11-15 14:21:54', '2018-11-16 15:41:52', 2026622, 'http://localhost:8080/php/website_karaoke/hoadon/report_178.pdf', 1),
(179, 4, '2018-11-15 17:46:35', '2018-11-16 06:56:40', 2928444, 'http://localhost:8080/php/website_karaoke/hoadon/report_179.pdf', 1),
(180, 13, '2018-11-17 09:02:43', '2018-11-19 13:51:10', 10561500, 'http://localhost:8080/php/website_karaoke/hoadon/report_180.pdf', 1),
(181, 9, '2018-11-26 16:07:42', '2018-11-26 17:51:35', 622767, 'http://localhost:8080/php/website_karaoke/hoadon/report_181.pdf', 1),
(185, 11, '2018-11-26 18:23:52', '2018-11-27 00:22:54', 1548067, 'http://localhost:8080/php/website_karaoke/hoadon/report_185.pdf', 1),
(186, 9, '2018-11-26 18:23:58', '2018-11-26 22:48:51', 579767, 'http://localhost:8080/php/website_karaoke/hoadon/report_186.pdf', 1),
(187, 17, '2018-11-26 18:24:10', '2018-12-03 11:40:51', 19353367, 'http://localhost:8080/php/website_karaoke/hoadon/report_187.pdf', 1),
(188, 9, '2018-11-27 00:04:07', '2018-12-03 11:39:53', 18671533, 'http://localhost:8080/php/website_karaoke/hoadon/report_188.pdf', 1),
(189, 10, '2018-11-27 00:05:13', '2018-12-03 11:40:20', 18670233, 'http://localhost:8080/php/website_karaoke/hoadon/report_189.pdf', 1),
(190, 9, '2018-12-07 08:53:46', '2018-12-08 09:38:39', 3092767, '', 1),
(191, 10, '2018-12-08 09:45:34', '2018-12-08 09:45:49', 315500, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`maloai`, `tenloai`, `giatien`) VALUES
(1, 'Phòng Thường', 80000),
(2, 'Phòng Lớn', 120000),
(3, 'Phòng VIP', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `permission_details`
--

CREATE TABLE `permission_details` (
  `level` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_details`
--

INSERT INTO `permission_details` (`level`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 8),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(2, 6),
(2, 10),
(2, 11),
(11, 2),
(11, 4),
(11, 5),
(11, 6),
(12, 2),
(12, 4),
(12, 5),
(12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `maphong` int(11) NOT NULL,
  `tenphong` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '0',
  `dat_truoc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`maphong`, `tenphong`, `maloai`, `trangthai`, `dat_truoc`) VALUES
(1, 'N001', 1, 0, '0'),
(2, 'N002', 1, 0, '0'),
(3, 'N003', 1, 0, '0'),
(4, 'N004', 1, 0, '0'),
(5, 'N005', 1, 0, '0'),
(6, 'N006', 1, 0, '0'),
(7, 'N007', 1, 0, '0'),
(8, 'N008', 1, 0, '0'),
(9, 'L001', 2, 0, '0'),
(10, 'L002', 2, 0, '0'),
(11, 'L003', 2, 0, '0'),
(12, 'L004', 2, 0, '0'),
(13, 'V001', 3, 0, '0'),
(14, 'V002', 3, 0, '0'),
(15, 'V003', 3, 0, '0'),
(17, 'L005', 2, 0, '0'),
(18, 'L006', 2, 0, '0'),
(19, 'V004', 3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `level` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`level`, `title`) VALUES
(1, 'Quản lý'),
(2, 'Nhân Viên'),
(11, 'Lao Công'),
(12, 'Kế Toán');

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `mathucdon` int(11) NOT NULL,
  `tenmonan` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `donvitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thucdon`
--

INSERT INTO `thucdon` (`mathucdon`, `tenmonan`, `donvitinh`, `giatien`) VALUES
(2, 'Nước suối các loại', 'chai', 10000),
(3, 'Bia các loại', 'chai', 25000),
(4, 'Snack các loại', 'bịch', 10000),
(5, 'Trái cây dĩa', 'dĩa', 120000),
(6, 'Khô bò', 'bịch', 80000),
(7, 'Mực khô', 'con', 100000),
(8, 'Khăn lạnh', 'miếng', 10000),
(18, 'Bia tươi', 'thùng lớn', 400000),
(19, 'Thuốc 555', 'gói', 25000),
(21, 'Thuốc Hero', 'gói ', 30000),
(23, 'Bia Corona', 'chai', 200000),
(29, 'Khô gà', 'hộp', 200000),
(35, 'Rượu vang Đà Lạt', 'chai', 300000),
(36, 'Nước ngọt các loại', 'lon', 15000),
(37, 'đà0', 'quả', 123000);

--
-- Triggers `thucdon`
--
DELIMITER $$
CREATE TRIGGER `after_update_hoadon` AFTER UPDATE ON `thucdon` FOR EACH ROW BEGIN
    UPDATE chitiethoadon SET chitiethoadon.dongia = NEW.giatien * chitiethoadon.soluong WHERE chitiethoadon.mathucdon = OLD.mathucdon;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `password`, `name`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Kiệt', 1),
(2, 'user', '09aba41e25f7f5c6317f70051a1ea6c4', 'Nguyễn Huy', 2),
(3, 'thachthaotran@gmail.com', '30b72e0cbcfadd87ca50ee79612a1718', 'Thảo Trân', 11),
(4, 'hoanggia', '7c747bbd8e74497cfdb5747c6da38d1b', 'Hoàng Gia', 12),
(5, 'thungan@gmail.com', 'a61ded3f90bb56a7ef6a657204bf9da3', 'Nguyễn Thị Thu Ngân', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `permission_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`permission_id`, `title`, `permission`) VALUES
(1, 'Xem Thực Đơn', 'quanly_karaoke/menuMangement'),
(2, 'Xem Theo Ngày Hiện Tại', 'statistics'),
(3, 'Quản Lý Phân Quyền', 'rbac'),
(4, 'Xem Theo Ngày Trong Tháng', 'statistics/revenueByDay'),
(5, 'Xem Theo Tháng Trong Năm', 'statistics/revenueByMonth'),
(6, 'Xem Phòng', 'quanly_karaoke'),
(8, 'Tạo Phòng Mới', 'quanly_karaoke/createNewRoom'),
(9, 'Xóa Phòng', 'quanly_karaoke/removeRoom'),
(10, 'Xem Chi Tiết Phòng', 'quanly_karaoke/viewDetail'),
(11, 'Đặt Phòng', 'quanly_karaoke/checkIn'),
(12, 'Quản Lý Tài Khoản', 'rbac/loadAccountView'),
(13, 'Đặt Phòng Trước', 'quanly_karaoke/preBooking'),
(14, 'Quản Lý Hóa Đơn', 'quanly_karaoke/loadBillManagementView');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahoadon`,`mathucdon`),
  ADD KEY `fk_mathucdon` (`mathucdon`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `fk_maphong` (`maphong`),
  ADD KEY `fk_level` (`thungan`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `permission_details`
--
ALTER TABLE `permission_details`
  ADD PRIMARY KEY (`level`,`permission_id`),
  ADD KEY `fk_perId` (`permission_id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maphong`),
  ADD KEY `fk_maloai` (`maloai`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`mathucdon`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_level` (`level`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `maphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `mathucdon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mathucdon`) REFERENCES `thucdon` (`mathucdon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mahoadon` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_maphong` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`);

--
-- Constraints for table `permission_details`
--
ALTER TABLE `permission_details`
  ADD CONSTRAINT `fk_perId` FOREIGN KEY (`permission_id`) REFERENCES `user_permission` (`permission_id`),
  ADD CONSTRAINT `permission_details_ibfk_1` FOREIGN KEY (`level`) REFERENCES `role` (`level`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `fk_maloai` FOREIGN KEY (`maloai`) REFERENCES `loaiphong` (`maloai`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `fk_role_level` FOREIGN KEY (`level`) REFERENCES `role` (`level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
