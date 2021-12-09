-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 03:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bo_mon`
--

CREATE TABLE `bo_mon` (
  `bm_id` bigint(20) NOT NULL,
  `bm_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bm_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bo_mon`
--

INSERT INTO `bo_mon` (`bm_id`, `bm_ma`, `bm_ten`) VALUES
(1, 'BM001', 'Công nghệ thông tin'),
(2, 'BM002', 'Công nghệ phần mềm'),
(3, 'BM003', 'Hệ thống thông tin'),
(4, 'BM004', 'Mạng máy tính - Truyền thông'),
(5, 'BM005', 'Khoa học máy tính'),
(6, 'BM006', 'Tin học ứng dụng'),
(7, 'BM001', 'Công nghệ thông tin'),
(8, 'BM002', 'Công nghệ phần mềm'),
(9, 'BM003', 'Hệ thống thông tin'),
(10, 'BM004', 'Mạng máy tính - Truyền thông'),
(11, 'BM005', 'Khoa học máy tính'),
(12, 'BM006', 'Tin học ứng dụng');

-- --------------------------------------------------------

--
-- Table structure for table `de_tai`
--

CREATE TABLE `de_tai` (
  `dt_id` bigint(20) NOT NULL,
  `nd_radt_id` bigint(20) NOT NULL,
  `dt_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dt_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dt_mota` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `de_tai`
--

INSERT INTO `de_tai` (`dt_id`, `nd_radt_id`, `dt_ma`, `dt_ten`, `dt_mota`) VALUES
(1, 100, 'DT0012', 'Quản lýđăng ký và thực hiện luận văn 2', '<p>fdsfdsfhskfdjsfkdsffdsfsff</p>'),
(2, 100, 'De1', 'De tai 1', '<p>dsfhjskfhsdjkf</p>'),
(3, 100, 'DT0012', 'De tai 2', '<p>fdsfdsf</p>'),
(4, 100, 'fdsfs', 'dfsfsfsfdsfd', NULL),
(5, 100, 'DT0012', 'Detai1', '<p>fdsfdsfsdfsfsf</p>'),
(6, 100, 'DT0012', 'fdsfs', NULL),
(7, 100, 'fdsfdsf', 'dfsfsfs', '<p>dfsfsf</p>'),
(8, 100, 'fdsfds', 'fdsfs', '<p>dfsfsdfsdf</p>'),
(9, 100, 'DT0012', 'De tai test 1', '<p>Abcdfsjfkahfkdjhfdkahfdjkkashf</p>'),
(10, 100, 'DT2', 'De tai test 2', '<p>dfsfdsffsf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `dk_de_tai`
--

CREATE TABLE `dk_de_tai` (
  `dkdt_id` bigint(20) NOT NULL,
  `nd_dkdt_id` bigint(20) NOT NULL,
  `dt_id` bigint(20) NOT NULL,
  `hknk_id` bigint(20) NOT NULL,
  `dkdt_thgiandk` datetime DEFAULT NULL,
  `dkdt_tongdiem` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dk_de_tai`
--

INSERT INTO `dk_de_tai` (`dkdt_id`, `nd_dkdt_id`, `dt_id`, `hknk_id`, `dkdt_thgiandk`, `dkdt_tongdiem`) VALUES
(7, 101, 10, 10, '2021-12-09 14:42:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dk_giangvien`
--

CREATE TABLE `dk_giangvien` (
  `nd_sv_id` bigint(20) NOT NULL,
  `nd_gv_id` bigint(20) NOT NULL,
  `hknk_id` bigint(20) NOT NULL,
  `dkgv_thgiandk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dk_giangvien`
--

INSERT INTO `dk_giangvien` (`nd_sv_id`, `nd_gv_id`, `hknk_id`, `dkgv_thgiandk`) VALUES
(101, 100, 10, '2021-12-09 14:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `ds_de_tai`
--

CREATE TABLE `ds_de_tai` (
  `hknk_id` bigint(20) NOT NULL,
  `dt_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ds_de_tai`
--

INSERT INTO `ds_de_tai` (`hknk_id`, `dt_id`) VALUES
(8, 1),
(10, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `hocky_nienkhoa`
--

CREATE TABLE `hocky_nienkhoa` (
  `hknk_id` bigint(20) NOT NULL,
  `hknk_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hknk_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hknk_batdau` date DEFAULT NULL,
  `hknk_ketthuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hocky_nienkhoa`
--

INSERT INTO `hocky_nienkhoa` (`hknk_id`, `hknk_ma`, `hknk_ten`, `hknk_batdau`, `hknk_ketthuc`) VALUES
(2, 'HK1 2017-2018', 'Học kỳ 1 năm 2017-2018', NULL, NULL),
(3, 'HK2 2017-2018', 'Học kỳ 2 năm 2017-2018', NULL, NULL),
(4, 'HK1 2018-2019', 'Học kỳ 1 năm 2018-2019', NULL, NULL),
(5, 'HK2 2018-2019', 'Học kỳ 2 năm 2018-2019', NULL, NULL),
(6, 'HK1 2019-2020', 'Học kỳ 1 năm 2019-2020', NULL, NULL),
(7, 'HK2 2019-2020', 'Học kỳ 2 năm 2019-2020', NULL, NULL),
(8, 'HK1 2020-2021', 'Học kỳ 1 năm 2020-2021', NULL, NULL),
(9, 'HK2 2020-2021', 'Học kỳ 2 năm 2020-2021', NULL, NULL),
(10, 'HK1 2021-2022', 'Học kỳ 1 năm 2021-2022', '2021-08-01', '2021-12-31'),
(11, 'HK2 2021-2022', 'Học kỳ 2 năm 2021-2022', '2022-01-01', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `hoi_dong`
--

CREATE TABLE `hoi_dong` (
  `vthd_id` bigint(20) NOT NULL,
  `nd_ngoihd_id` bigint(20) NOT NULL,
  `dkdt_id` bigint(20) NOT NULL,
  `lrhd_id` bigint(20) DEFAULT NULL,
  `hd_diem` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `kh_id` bigint(20) NOT NULL,
  `kh_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_nam` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`kh_id`, `kh_ma`, `kh_ten`, `kh_nam`) VALUES
(1, 'K43', 'Khóa 43', '2017-08-09'),
(3, 'K44', 'Khóa 44', '2018-10-08'),
(4, 'K45', 'Khóa 45', '2019-09-20'),
(5, 'K46', 'Khóa 46', '2020-08-19'),
(6, 'K47', 'Khóa 47', '2021-08-25'),
(7, 'K43', 'Khóa 43', '2017-08-09'),
(8, 'K44', 'Khóa 44', '2018-10-08'),
(9, 'K45', 'Khóa 45', '2019-09-20'),
(10, 'K46', 'Khóa 46', '2020-08-19'),
(11, 'K47', 'Khóa 47', '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `lich_ra_hd`
--

CREATE TABLE `lich_ra_hd` (
  `lrhd_id` bigint(20) NOT NULL,
  `p_id` bigint(20) NOT NULL,
  `lrhd_thgianbatdau` datetime DEFAULT NULL,
  `lrhd_thgianketthuc` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_thoi_gian`
--

CREATE TABLE `loai_thoi_gian` (
  `ltg_id` bigint(20) NOT NULL,
  `ltg_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ltg_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lop_hoc`
--

CREATE TABLE `lop_hoc` (
  `l_id` bigint(20) NOT NULL,
  `n_id` bigint(20) NOT NULL,
  `kh_id` bigint(20) NOT NULL,
  `l_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lop_hoc`
--

INSERT INTO `lop_hoc` (`l_id`, `n_id`, `kh_id`, `l_ma`, `l_ten`) VALUES
(180, 1, 1, 'DI17V7A1', 'Công nghệ thông tin A1'),
(181, 1, 1, 'DI17V7A2', 'Công nghệ thông tin A2'),
(182, 1, 1, 'DI17V7A3', 'Công nghệ thông tin A3'),
(183, 1, 1, 'DI17V7A4', 'Công nghệ thông tin A4'),
(184, 1, 1, 'DI17V7A5', 'Công nghệ thông tin A5'),
(185, 1, 6, 'DI21V7A2', 'Công nghệ thông tin A2'),
(186, 1, 6, 'DI21V7A3', 'Công nghệ thông tin A3'),
(187, 1, 6, 'DI21V7A4', 'Công nghệ thông tin A4'),
(188, 1, 6, 'DI21V7A5', 'Công nghệ thông tin A5'),
(189, 1, 3, 'DI18V7A1', 'Công nghệ thông tin A1'),
(190, 1, 3, 'DI18V7A2', 'Công nghệ thông tin A2'),
(191, 1, 4, 'DI19V7A1', 'Công nghệ thông tin A1'),
(192, 1, 4, 'DI19V7A2', 'Công nghệ thông tin A2'),
(193, 1, 5, 'DI20V7A1', 'Công nghệ thông tin A1'),
(194, 1, 5, 'DI20V7A2', 'Công nghệ thông tin A2'),
(195, 2, 1, 'TI17V7A1', 'Tin học ứng dụng A1'),
(196, 2, 1, 'TI17V7A3', 'Tin học ứng dụng A3'),
(197, 2, 1, 'TI17V7A4', 'Tin học ứng dụng A4'),
(198, 2, 1, 'TI17V7A5', 'Tin học ứng dụng A5'),
(199, 2, 6, 'TI21V7A2', 'Tin học ứng dụng A2'),
(200, 2, 6, 'TI21V7A3', 'Tin học ứng dụng A3'),
(201, 2, 6, 'TI21V7A4', 'Tin học ứng dụng A4'),
(202, 2, 6, 'TI21V7A5', 'Tin học ứng dụng A5'),
(203, 2, 3, 'TI18V7A1', 'Tin học ứng dụng A1'),
(204, 2, 3, 'TI18V7A2', 'Tin học ứng dụng A2'),
(205, 2, 4, 'TI19V7A1', 'Tin học ứng dụng A1'),
(206, 2, 4, 'TI19V7A2', 'Tin học ứng dụng A2'),
(207, 2, 5, 'TI20V7A1', 'Tin học ứng dụng A1'),
(208, 2, 5, 'TI20V7A2', 'Tin học ứng dụng A2'),
(209, 3, 1, 'HT17V7A1', 'Hệ thống thông tin A1'),
(210, 3, 1, 'HT17V7A2', 'Hệ thống thông tin A2'),
(211, 3, 1, 'HT17V7A3', 'Hệ thống thông tin A3'),
(212, 3, 1, 'HT17V7A4', 'Hệ thống thông tin A4'),
(213, 3, 1, 'HT17V7A5', 'Hệ thống thông tin A5'),
(214, 3, 3, 'HT18V7A1', 'Hệ thống thông tin A1'),
(215, 3, 3, 'HT18V7A2', 'Hệ thống thông tin A2'),
(216, 3, 4, 'HT19V7A1', 'Hệ thống thông tin A1'),
(217, 3, 4, 'HT19V7A2', 'Hệ thống thông tin A2'),
(218, 3, 5, 'HT20V7A1', 'Hệ thống thông tin A1'),
(219, 3, 5, 'HT20V7A2', 'Hệ thống thông tin A2'),
(220, 3, 6, 'HT21V7A2', 'Hệ thống thông tin A2'),
(221, 3, 6, 'HT21V7A3', 'Hệ thống thông tin A3'),
(222, 3, 6, 'HT21V7A4', 'Hệ thống thông tin A4'),
(223, 3, 6, 'HT21V7A5', 'Hệ thống thông tin A5'),
(224, 4, 1, 'KH17V7A1', 'Khoa học máy tính A1'),
(225, 4, 1, 'KH17V7A2', 'Khoa học máy tính A2'),
(226, 4, 1, 'KH17V7A3', 'Khoa học máy tính A3'),
(227, 4, 1, 'KH17V7A4', 'Khoa học máy tính A4'),
(228, 4, 1, 'KH17V7A5', 'Khoa học máy tính A5'),
(229, 4, 3, 'KH18V7A1', 'Khoa học máy tính A1'),
(230, 4, 3, 'KH18V7A2', 'Khoa học máy tính A2'),
(231, 4, 4, 'KH19V7A1', 'Khoa học máy tính A1'),
(232, 4, 4, 'KH19V7A2', 'Khoa học máy tính A2'),
(233, 4, 5, 'KH20V7A1', 'Khoa học máy tính A1'),
(234, 4, 5, 'KH20V7A2', 'Khoa học máy tính A2'),
(235, 4, 6, 'KH21V7A2', 'Khoa học máy tính A2'),
(236, 4, 6, 'KH21V7A3', 'Khoa học máy tính A3'),
(237, 4, 6, 'KH21V7A4', 'Khoa học máy tính A4'),
(238, 4, 6, 'KH21V7A5', 'Khoa học máy tính A5'),
(239, 5, 1, 'MT17V7A1', 'Mạng máy tính - Truyền thông dữ liệu A1'),
(240, 5, 1, 'MT17V7A2', 'Mạng máy tính - Truyền thông dữ liệu A2'),
(241, 5, 1, 'MT17V7A3', 'Mạng máy tính - Truyền thông dữ liệu A3'),
(242, 5, 1, 'MT17V7A4', 'Mạng máy tính - Truyền thông dữ liệu A4'),
(243, 5, 1, 'MT17V7A5', 'Mạng máy tính - Truyền thông dữ liệu A5'),
(244, 5, 3, 'MT18V7A1', 'Mạng máy tính - Truyền thông dữ liệu A1'),
(245, 5, 3, 'MT18V7A2', 'Mạng máy tính - Truyền thông dữ liệu A2'),
(246, 5, 4, 'MT19V7A1', 'Mạng máy tính - Truyền thông dữ liệu A1'),
(247, 5, 4, 'MT19V7A2', 'Mạng máy tính - Truyền thông dữ liệu A2'),
(248, 5, 5, 'MT20V7A1', 'Mạng máy tính - Truyền thông dữ liệu A1'),
(249, 5, 5, 'MT20V7A2', 'Mạng máy tính - Truyền thông dữ liệu A2'),
(250, 5, 6, 'MT21V7A2', 'Mạng máy tính - Truyền thông dữ liệu A2'),
(251, 5, 6, 'MT21V7A3', 'Mạng máy tính - Truyền thông dữ liệu A3'),
(252, 5, 6, 'MT21V7A4', 'Mạng máy tính - Truyền thông dữ liệu A4'),
(253, 5, 6, 'MT21V7A5', 'Mạng máy tính - Truyền thông dữ liệu A5'),
(254, 6, 1, 'KT17V7A1', 'Kỹ thuật phần mền A1'),
(255, 6, 1, 'KT17V7A2', 'Kỹ thuật phần mền A2'),
(256, 6, 1, 'KT17V7A3', 'Kỹ thuật phần mền A3'),
(257, 6, 1, 'KT17V7A4', 'Kỹ thuật phần mền A4'),
(258, 6, 1, 'KT17V7A5', 'Kỹ thuật phần mền A5'),
(259, 6, 3, 'KT18V7A1', 'Kỹ thuật phần mền A1'),
(260, 6, 3, 'KT18V7A2', 'Kỹ thuật phần mền A2'),
(261, 6, 4, 'KT19V7A1', 'Kỹ thuật phần mền A1'),
(262, 6, 4, 'KT19V7A2', 'Kỹ thuật phần mền A2'),
(263, 6, 5, 'KT20V7A1', 'Kỹ thuật phần mền A1'),
(264, 6, 5, 'KT20V7A2', 'Kỹ thuật phần mền A2'),
(265, 6, 6, 'KT21V7A2', 'Kỹ thuật phần mền A2'),
(266, 6, 6, 'KT21V7A3', 'Kỹ thuật phần mền A3'),
(267, 6, 6, 'KT21V7A4', 'Kỹ thuật phần mền A4'),
(268, 6, 6, 'KT21V7A5', 'Kỹ thuật phần mền A5');

-- --------------------------------------------------------

--
-- Table structure for table `nganh_hoc`
--

CREATE TABLE `nganh_hoc` (
  `n_id` bigint(20) NOT NULL,
  `bm_id` bigint(20) NOT NULL,
  `n_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `n_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nganh_hoc`
--

INSERT INTO `nganh_hoc` (`n_id`, `bm_id`, `n_ma`, `n_ten`) VALUES
(1, 1, 'N0001', 'Công nghệ thông tin'),
(2, 6, 'N0002', 'Tin học ứng dụng'),
(3, 3, 'N0003', 'Hệ thống thông tin'),
(4, 5, 'N0004', 'Khoa học máy tính'),
(5, 4, 'N0005', 'Mạng máy tính - Truyền thông dữ liệu'),
(6, 2, 'N0006', 'Kỹ thuật phần mềm'),
(7, 1, 'N0001', 'Công nghệ thông tin'),
(8, 6, 'N0001', 'Công nghệ thông tin'),
(9, 3, 'N0003', 'Hệ thống thông tin'),
(10, 5, 'N0004', 'Khoa học máy tính'),
(11, 4, 'N0005', 'Mạng máy tính - Truyền thông dữ liệu'),
(12, 2, 'N0006', 'Kỹ thuật phần mềm');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `nd_id` bigint(20) NOT NULL,
  `vt_id` bigint(20) NOT NULL,
  `td_id` bigint(20) DEFAULT NULL,
  `bm_id` bigint(20) DEFAULT NULL,
  `l_id` bigint(20) DEFAULT NULL,
  `nd_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd_ngaysinh` date DEFAULT NULL,
  `nd_gioitinh` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd_sdt` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd_email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd_tentk` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd_password` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`nd_id`, `vt_id`, `td_id`, `bm_id`, `l_id`, `nd_ma`, `nd_ten`, `nd_ngaysinh`, `nd_gioitinh`, `nd_sdt`, `nd_email`, `nd_tentk`, `nd_password`) VALUES
(3, 2, 1, 1, NULL, 'GV001', 'Lâm Nhựt Khang', '1982-09-09', 'Nữ', '0812365478', 'lnkhang@ctu.edu.vn', 'ND001', '$2y$10$DEpiPmtQr/oYgwAU.3PiQuGEEiWKqfdW.qwoiKmRCeiXOtWwMj.bq'),
(4, 1, 1, 1, NULL, 'A01', 'Admin', '1990-10-26', 'Nữ', '0814725856', 'admin@ctu.edu.vn', 'ND01', 'admin@a01'),
(5, 3, 4, 1, NULL, 'B1706537', 'Nguyễn Thị Minh Thư', '1999-10-26', 'Nữ', '0774393564', 'thub106537@ctu.edu.vn', 'B1706537', 'ntmthu@b1706537'),
(100, 2, 1, 1, 180, 'GV003', 'Giang Vien', '2021-12-15', 'Nam', '0123456789', 'abc@gmail.com', 'giangvien', 'minhthu2610'),
(101, 3, 1, 1, 180, 'SV003', 'Sinh Vien', '2021-12-14', 'Nam', '0123456789', 'abc@gmail.com', 'sinhvien', 'minhthu2610'),
(2610, 1, 1, 1, 180, 'ADMIN', 'NVD', '2021-12-08', 'Nam', '0123456789', 'abc@gmail.com', 'ndong1999', 'minhthu2610');

-- --------------------------------------------------------

--
-- Table structure for table `phong_hoc`
--

CREATE TABLE `phong_hoc` (
  `p_id` bigint(20) NOT NULL,
  `p_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_succhua` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong_hoc`
--

INSERT INTO `phong_hoc` (`p_id`, `p_ma`, `p_ten`, `p_succhua`) VALUES
(1, 'P01', 'Phòng 01', '40'),
(2, 'P02', 'Phòng 02', '40'),
(3, 'P03', 'Phòng 03', '40'),
(4, 'P04', 'Phòng 04', '40');

-- --------------------------------------------------------

--
-- Table structure for table `quydinh_thoigian`
--

CREATE TABLE `quydinh_thoigian` (
  `ltg_id` bigint(20) NOT NULL,
  `hknk_id` bigint(20) NOT NULL,
  `qdtg_thgianbatdau` datetime DEFAULT NULL,
  `qdtg_thgianketthuc` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `q_id` bigint(20) NOT NULL,
  `q_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trinh_do`
--

CREATE TABLE `trinh_do` (
  `td_id` bigint(20) NOT NULL,
  `td_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `td_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `td_tenviettat` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trinh_do`
--

INSERT INTO `trinh_do` (`td_id`, `td_ma`, `td_ten`, `td_tenviettat`) VALUES
(1, 'TD001', 'Tiến sỹ', 'TS'),
(2, 'TD002', 'Thạc sỹ', 'ThS'),
(3, 'TD003', 'Nghiêm cứu sinh', 'NCS'),
(4, 'TD004', 'Đại học', 'ĐH');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro_quyen`
--

CREATE TABLE `vaitro_quyen` (
  `q_id` bigint(20) NOT NULL,
  `vt_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vai_tro`
--

CREATE TABLE `vai_tro` (
  `vt_id` bigint(20) NOT NULL,
  `vt_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vt_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vai_tro`
--

INSERT INTO `vai_tro` (`vt_id`, `vt_ma`, `vt_ten`) VALUES
(1, 'ADMIN', 'Admin'),
(2, 'GIANG_VIEN', 'Giảng viên'),
(3, 'SINH_VIEN', 'Sinh viên');

-- --------------------------------------------------------

--
-- Table structure for table `vai_tro_hd`
--

CREATE TABLE `vai_tro_hd` (
  `vthd_id` bigint(20) NOT NULL,
  `vthd_ma` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vthd_ten` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vai_tro_hd`
--

INSERT INTO `vai_tro_hd` (`vthd_id`, `vthd_ma`, `vthd_ten`) VALUES
(1, 'VTHD1', 'Chủ tịch'),
(2, 'VTHD2', 'Ủy viên'),
(3, 'VTHD3', 'Thư ký');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bo_mon`
--
ALTER TABLE `bo_mon`
  ADD PRIMARY KEY (`bm_id`);

--
-- Indexes for table `de_tai`
--
ALTER TABLE `de_tai`
  ADD PRIMARY KEY (`dt_id`),
  ADD KEY `FK_ra_de_tai` (`nd_radt_id`);

--
-- Indexes for table `dk_de_tai`
--
ALTER TABLE `dk_de_tai`
  ADD PRIMARY KEY (`dkdt_id`),
  ADD KEY `FK_Relationship_15` (`dt_id`),
  ADD KEY `FK_Relationship_16` (`hknk_id`),
  ADD KEY `FK_sv_dang_ky_de_tai` (`nd_dkdt_id`);

--
-- Indexes for table `dk_giangvien`
--
ALTER TABLE `dk_giangvien`
  ADD PRIMARY KEY (`nd_sv_id`,`nd_gv_id`,`hknk_id`),
  ADD KEY `FK_Relationship_10` (`hknk_id`),
  ADD KEY `FK_sv_dang_ky_gv` (`nd_gv_id`);

--
-- Indexes for table `ds_de_tai`
--
ALTER TABLE `ds_de_tai`
  ADD PRIMARY KEY (`hknk_id`,`dt_id`),
  ADD KEY `FK_danh_sach_de_tai2` (`dt_id`);

--
-- Indexes for table `hocky_nienkhoa`
--
ALTER TABLE `hocky_nienkhoa`
  ADD PRIMARY KEY (`hknk_id`);

--
-- Indexes for table `hoi_dong`
--
ALTER TABLE `hoi_dong`
  ADD PRIMARY KEY (`vthd_id`,`nd_ngoihd_id`,`dkdt_id`),
  ADD KEY `FK_Relationship_17` (`dkdt_id`),
  ADD KEY `FK_Relationship_21` (`lrhd_id`),
  ADD KEY `FK_gv_ngoi_hoi_dong` (`nd_ngoihd_id`);

--
-- Indexes for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `lich_ra_hd`
--
ALTER TABLE `lich_ra_hd`
  ADD PRIMARY KEY (`lrhd_id`),
  ADD KEY `FK_Relationship_20` (`p_id`);

--
-- Indexes for table `loai_thoi_gian`
--
ALTER TABLE `loai_thoi_gian`
  ADD PRIMARY KEY (`ltg_id`);

--
-- Indexes for table `lop_hoc`
--
ALTER TABLE `lop_hoc`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `FK_Relationship_13` (`kh_id`),
  ADD KEY `FK_Relationship_5` (`n_id`);

--
-- Indexes for table `nganh_hoc`
--
ALTER TABLE `nganh_hoc`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `FK_Relationship_4` (`bm_id`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`nd_id`),
  ADD KEY `FK_Relationship_2` (`vt_id`),
  ADD KEY `FK_Relationship_3` (`td_id`),
  ADD KEY `FK_Relationship_6` (`bm_id`),
  ADD KEY `FK_Relationship_8` (`l_id`);

--
-- Indexes for table `phong_hoc`
--
ALTER TABLE `phong_hoc`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `quydinh_thoigian`
--
ALTER TABLE `quydinh_thoigian`
  ADD PRIMARY KEY (`ltg_id`,`hknk_id`),
  ADD KEY `FK_Relationship_22` (`hknk_id`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `trinh_do`
--
ALTER TABLE `trinh_do`
  ADD PRIMARY KEY (`td_id`);

--
-- Indexes for table `vaitro_quyen`
--
ALTER TABLE `vaitro_quyen`
  ADD PRIMARY KEY (`q_id`,`vt_id`),
  ADD KEY `FK_vaitro_quyen2` (`vt_id`);

--
-- Indexes for table `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`vt_id`);

--
-- Indexes for table `vai_tro_hd`
--
ALTER TABLE `vai_tro_hd`
  ADD PRIMARY KEY (`vthd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bo_mon`
--
ALTER TABLE `bo_mon`
  MODIFY `bm_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `de_tai`
--
ALTER TABLE `de_tai`
  MODIFY `dt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dk_de_tai`
--
ALTER TABLE `dk_de_tai`
  MODIFY `dkdt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hocky_nienkhoa`
--
ALTER TABLE `hocky_nienkhoa`
  MODIFY `hknk_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `kh_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lich_ra_hd`
--
ALTER TABLE `lich_ra_hd`
  MODIFY `lrhd_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai_thoi_gian`
--
ALTER TABLE `loai_thoi_gian`
  MODIFY `ltg_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lop_hoc`
--
ALTER TABLE `lop_hoc`
  MODIFY `l_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `nganh_hoc`
--
ALTER TABLE `nganh_hoc`
  MODIFY `n_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `nd_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2611;

--
-- AUTO_INCREMENT for table `phong_hoc`
--
ALTER TABLE `phong_hoc`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `q_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trinh_do`
--
ALTER TABLE `trinh_do`
  MODIFY `td_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vai_tro`
--
ALTER TABLE `vai_tro`
  MODIFY `vt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vai_tro_hd`
--
ALTER TABLE `vai_tro_hd`
  MODIFY `vthd_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `de_tai`
--
ALTER TABLE `de_tai`
  ADD CONSTRAINT `FK_ra_de_tai` FOREIGN KEY (`nd_radt_id`) REFERENCES `nguoi_dung` (`nd_id`);

--
-- Constraints for table `dk_de_tai`
--
ALTER TABLE `dk_de_tai`
  ADD CONSTRAINT `FK_Relationship_15` FOREIGN KEY (`dt_id`) REFERENCES `de_tai` (`dt_id`),
  ADD CONSTRAINT `FK_Relationship_16` FOREIGN KEY (`hknk_id`) REFERENCES `hocky_nienkhoa` (`hknk_id`),
  ADD CONSTRAINT `FK_sv_dang_ky_de_tai` FOREIGN KEY (`nd_dkdt_id`) REFERENCES `nguoi_dung` (`nd_id`);

--
-- Constraints for table `dk_giangvien`
--
ALTER TABLE `dk_giangvien`
  ADD CONSTRAINT `FK_Relationship_10` FOREIGN KEY (`hknk_id`) REFERENCES `hocky_nienkhoa` (`hknk_id`),
  ADD CONSTRAINT `FK_gv_huong_dan_sv` FOREIGN KEY (`nd_sv_id`) REFERENCES `nguoi_dung` (`nd_id`),
  ADD CONSTRAINT `FK_sv_dang_ky_gv` FOREIGN KEY (`nd_gv_id`) REFERENCES `nguoi_dung` (`nd_id`);

--
-- Constraints for table `ds_de_tai`
--
ALTER TABLE `ds_de_tai`
  ADD CONSTRAINT `FK_danh_sach_de_tai` FOREIGN KEY (`hknk_id`) REFERENCES `hocky_nienkhoa` (`hknk_id`),
  ADD CONSTRAINT `FK_danh_sach_de_tai2` FOREIGN KEY (`dt_id`) REFERENCES `de_tai` (`dt_id`);

--
-- Constraints for table `hoi_dong`
--
ALTER TABLE `hoi_dong`
  ADD CONSTRAINT `FK_Relationship_17` FOREIGN KEY (`dkdt_id`) REFERENCES `dk_de_tai` (`dkdt_id`),
  ADD CONSTRAINT `FK_Relationship_19` FOREIGN KEY (`vthd_id`) REFERENCES `vai_tro_hd` (`vthd_id`),
  ADD CONSTRAINT `FK_Relationship_21` FOREIGN KEY (`lrhd_id`) REFERENCES `lich_ra_hd` (`lrhd_id`),
  ADD CONSTRAINT `FK_gv_ngoi_hoi_dong` FOREIGN KEY (`nd_ngoihd_id`) REFERENCES `nguoi_dung` (`nd_id`);

--
-- Constraints for table `lich_ra_hd`
--
ALTER TABLE `lich_ra_hd`
  ADD CONSTRAINT `FK_Relationship_20` FOREIGN KEY (`p_id`) REFERENCES `phong_hoc` (`p_id`);

--
-- Constraints for table `lop_hoc`
--
ALTER TABLE `lop_hoc`
  ADD CONSTRAINT `FK_Relationship_13` FOREIGN KEY (`kh_id`) REFERENCES `khoa_hoc` (`kh_id`),
  ADD CONSTRAINT `FK_Relationship_5` FOREIGN KEY (`n_id`) REFERENCES `nganh_hoc` (`n_id`);

--
-- Constraints for table `nganh_hoc`
--
ALTER TABLE `nganh_hoc`
  ADD CONSTRAINT `FK_Relationship_4` FOREIGN KEY (`bm_id`) REFERENCES `bo_mon` (`bm_id`);

--
-- Constraints for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `FK_Relationship_2` FOREIGN KEY (`vt_id`) REFERENCES `vai_tro` (`vt_id`),
  ADD CONSTRAINT `FK_Relationship_3` FOREIGN KEY (`td_id`) REFERENCES `trinh_do` (`td_id`),
  ADD CONSTRAINT `FK_Relationship_6` FOREIGN KEY (`bm_id`) REFERENCES `bo_mon` (`bm_id`),
  ADD CONSTRAINT `FK_Relationship_8` FOREIGN KEY (`l_id`) REFERENCES `lop_hoc` (`l_id`);

--
-- Constraints for table `quydinh_thoigian`
--
ALTER TABLE `quydinh_thoigian`
  ADD CONSTRAINT `FK_Relationship_22` FOREIGN KEY (`hknk_id`) REFERENCES `hocky_nienkhoa` (`hknk_id`),
  ADD CONSTRAINT `FK_Relationship_23` FOREIGN KEY (`ltg_id`) REFERENCES `loai_thoi_gian` (`ltg_id`);

--
-- Constraints for table `vaitro_quyen`
--
ALTER TABLE `vaitro_quyen`
  ADD CONSTRAINT `FK_vaitro_quyen` FOREIGN KEY (`q_id`) REFERENCES `quyen` (`q_id`),
  ADD CONSTRAINT `FK_vaitro_quyen2` FOREIGN KEY (`vt_id`) REFERENCES `vai_tro` (`vt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
