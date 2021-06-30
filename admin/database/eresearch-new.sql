-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 11:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eresearch-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$1vxnaW/zUvl6ouBagszcrODpAuJj2mlgoE4kuh1NBqw4WKWwpa2wK', 'superadmin', '2021-06-29 16:13:16', '2019-10-17 06:22:34', '2019-10-17 06:22:34'),
(2, 'topza', 'neverdie89', 'topza', '$2y$10$.p0yIajW1tu.ywDbrgm9u..ZP60FDSwUaa9l3H/Q3aRBjxWQSKbOq', 'admin', '2021-06-29 15:46:26', '2019-10-17 06:23:32', '2019-10-17 06:23:15'),
(3, 'sarawut', 'kedtarwon', 'sarawut', '$2y$10$DgQNZ6RxDDXAQVdg64yUEOgP/zCIzh0QWgNa6Zwgqq5IyaOldmyZK', 'admin', '2020-05-04 11:36:39', '2019-10-18 15:29:41', '2019-10-18 15:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `findresearch`
--

CREATE TABLE `findresearch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `art_tit` varchar(255) NOT NULL,
  `aff` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `abs_down` varchar(255) NOT NULL,
  `pub_re` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `findresearch`
--

INSERT INTO `findresearch` (`id`, `name`, `art_tit`, `aff`, `year`, `abs_down`, `pub_re`) VALUES
(1, 'นาย ศราวุฒิ เกิดถาวร', 'การศึกษาพัฒนาเว็บแอพพลิเคชั่นต้นแบบระบบการประชาสัมพันธ์หน่วยงาน มหาวิทยาลัยราชภัฏชัยภูมิ โดยใช้เฟรมเวิร์กแองกูลาร์เจเอส', 'สน.วิทยบริการฯ', '2563', 'https://drive.google.com/file/d/1pQa1bxYBiwK1LzuRB3lY0bvIf6tjOl_j/view?usp=sharing', 'https://drive.google.com/file/d/1pQa1bxYBiwK1LzuRB3lY0bvIf6tjOl_j/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `project_eresearch`
--

CREATE TABLE `project_eresearch` (
  `id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `sb_sg` enum('ชุดโครงการ','โครงการเดี่ยว') DEFAULT NULL,
  `pn` varchar(255) DEFAULT NULL,
  `idp` varchar(255) DEFAULT NULL,
  `pn1` varchar(255) DEFAULT NULL,
  `r1` varchar(255) DEFAULT NULL,
  `rt1` enum('อาจารย์','เจ้าหน้าที่') DEFAULT NULL,
  `ra1` enum('คณะศิลปศาสตร์และวิทยาศาสตร์','คณะครุศาสตร์','คณะพยาบาลศาสตร์','คณะรัฐศาสตร์','คณะบริหารธุรกิจ','โครงการจัดตั้งคณะวิศวกรรมศาสตร์','สำนักงานอธิการบดี','สำนักวิทยบริการและเทคโนโลยีสารสนเทศ','สถาบันวิจัยและพัฒนา') DEFAULT NULL,
  `ab1` varchar(255) DEFAULT NULL,
  `b1_1` varchar(255) DEFAULT NULL,
  `b1_2` varchar(255) DEFAULT NULL,
  `b1_3` varchar(255) DEFAULT NULL,
  `st1` enum('งวดที่1','งวดที่2','สำเร็จ','คืนทุนวิจัย','ส่งเล่มสมบูรณ์','ส่งตรวจ/แก้ไข','ลาออก','เกษียณ') DEFAULT NULL,
  `pn2` varchar(255) DEFAULT NULL,
  `r2` varchar(255) DEFAULT NULL,
  `rt2` enum('ยังไม่มีการเลือก','อาจารย์','เจ้าหน้าที่') DEFAULT 'ยังไม่มีการเลือก',
  `ra2` enum('ยังไม่มีการเลือก','คณะศิลปศาสตร์และวิทยาศาสตร์','คณะครุศาสตร์','คณะพยาบาลศาสตร์','คณะรัฐศาสตร์','คณะบริหารธุรกิจ','โครงการจัดตั้งคณะวิศวกรรมศาสตร์','สำนักงานอธิการบดี','สำนักวิทยบริการและเทคโนโลยีสารสนเทศ','สถาบันวิจัยและพัฒนา') DEFAULT 'ยังไม่มีการเลือก',
  `ab2` varchar(255) DEFAULT NULL,
  `b2_1` varchar(255) DEFAULT NULL,
  `b2_2` varchar(255) DEFAULT NULL,
  `b2_3` varchar(255) DEFAULT NULL,
  `st2` enum('ยังไม่มีการเลือก','งวดที่1','งวดที่2','สำเร็จ','คืนทุนวิจัย','ส่งเล่มสมบูรณ์','ส่งตรวจ/แก้ไข','ลาออก','เกษียณ') DEFAULT 'ยังไม่มีการเลือก',
  `pn3` varchar(255) DEFAULT NULL,
  `r3` varchar(255) DEFAULT NULL,
  `rt3` enum('ยังไม่มีการเลือก','อาจารย์','เจ้าหน้าที่') DEFAULT 'ยังไม่มีการเลือก',
  `ra3` enum('ยังไม่มีการเลือก','คณะศิลปศาสตร์และวิทยาศาสตร์','คณะครุศาสตร์','คณะพยาบาลศาสตร์','คณะรัฐศาสตร์','คณะบริหารธุรกิจ','โครงการจัดตั้งคณะวิศวกรรมศาสตร์','สำนักงานอธิการบดี','สำนักวิทยบริการและเทคโนโลยีสารสนเทศ','สถาบันวิจัยและพัฒนา') DEFAULT 'ยังไม่มีการเลือก',
  `ab3` varchar(255) DEFAULT NULL,
  `b3_1` varchar(255) DEFAULT NULL,
  `b3_2` varchar(255) DEFAULT NULL,
  `b3_3` varchar(255) DEFAULT NULL,
  `st3` enum('ยังไม่มีการเลือก','งวดที่1','งวดที่2','สำเร็จ','คืนทุนวิจัย','ส่งเล่มสมบูรณ์','ส่งตรวจ/แก้ไข','ลาออก','เกษียณ') DEFAULT 'ยังไม่มีการเลือก',
  `pn4` varchar(255) DEFAULT NULL,
  `r4` varchar(255) DEFAULT NULL,
  `rt4` enum('ยังไม่มีการเลือก','อาจารย์','เจ้าหน้าที่') DEFAULT 'ยังไม่มีการเลือก',
  `ra4` enum('ยังไม่มีการเลือก','คณะศิลปศาสตร์และวิทยาศาสตร์','คณะครุศาสตร์','คณะพยาบาลศาสตร์','คณะรัฐศาสตร์','คณะบริหารธุรกิจ','โครงการจัดตั้งคณะวิศวกรรมศาสตร์','สำนักงานอธิการบดี','สำนักวิทยบริการและเทคโนโลยีสารสนเทศ','สถาบันวิจัยและพัฒนา') DEFAULT 'ยังไม่มีการเลือก',
  `ab4` varchar(255) DEFAULT NULL,
  `b4_1` varchar(255) DEFAULT NULL,
  `b4_2` varchar(255) DEFAULT NULL,
  `b4_3` varchar(255) DEFAULT NULL,
  `st4` enum('ยังไม่มีการเลือก','งวดที่1','งวดที่2','สำเร็จ','คืนทุน') DEFAULT 'ยังไม่มีการเลือก',
  `pn5` varchar(255) DEFAULT NULL,
  `r5` varchar(255) DEFAULT NULL,
  `rt5` enum('อาจารย์','เจ้าหน้าที่') DEFAULT NULL,
  `ra5` enum('ยังไม่มีการเลือก','คณะศิลปศาสตร์และวิทยาศาสตร์','คณะครุศาสตร์','คณะพยาบาลศาสตร์','คณะรัฐศาสตร์','คณะบริหารธุรกิจ','โครงการจัดตั้งคณะวิศวกรรมศาสตร์','สำนักงานอธิการบดี','สำนักวิทยบริการและเทคโนโลยีสารสนเทศ','สถาบันวิจัยและพัฒนา') DEFAULT 'ยังไม่มีการเลือก',
  `ab5` varchar(255) DEFAULT NULL,
  `b5_1` varchar(255) DEFAULT NULL,
  `b5_2` varchar(255) DEFAULT NULL,
  `b5_3` varchar(255) DEFAULT NULL,
  `st5` enum('ยังไม่มีการเลือก','งวดที่1','งวดที่2','สำเร็จ','คืนทุนวิจัย','ส่งเล่มสมบูรณ์','ส่งตรวจ/แก้ไข','ลาออก','เกษียณ') DEFAULT 'ยังไม่มีการเลือก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_eresearch`
--

INSERT INTO `project_eresearch` (`id`, `year`, `sb_sg`, `pn`, `idp`, `pn1`, `r1`, `rt1`, `ra1`, `ab1`, `b1_1`, `b1_2`, `b1_3`, `st1`, `pn2`, `r2`, `rt2`, `ra2`, `ab2`, `b2_1`, `b2_2`, `b2_3`, `st2`, `pn3`, `r3`, `rt3`, `ra3`, `ab3`, `b3_1`, `b3_2`, `b3_3`, `st3`, `pn4`, `r4`, `rt4`, `ra4`, `ab4`, `b4_1`, `b4_2`, `b4_3`, `st4`, `pn5`, `r5`, `rt5`, `ra5`, `ab5`, `b5_1`, `b5_2`, `b5_3`, `st5`) VALUES
(9, 2564, 'โครงการเดี่ยว', 'การศึกษาพัฒนาเว็บแอพพลิเคชั่นต้นแบบระบบการประชาสัมพันธ์หน่วยงาน มหาวิทยาลัยราชภัฏชัยภูมิ โดยใช้เฟรมเวิร์กแองกูลาร์เจเอส', '256401', 'การศึกษาพัฒนาเว็บแอพพลิเคชั่นต้นแบบระบบการประชาสัมพันธ์หน่วยงาน มหาวิทยาลัยราชภัฏชัยภูมิ โดยใช้เฟรมเวิร์กแองกูลาร์เจเอส', 'นาย ศราวุฒิ เกิดถาวร', 'เจ้าหน้าที่', 'สำนักวิทยบริการและเทคโนโลยีสารสนเทศ', '10000', '3000', '3000', '4000', 'ส่งเล่มสมบูรณ์', 'aaaaaa', 'นาย ศราวุฒิ เกิดถาวรา', 'เจ้าหน้าที่', 'สำนักวิทยบริการและเทคโนโลยีสารสนเทศ', '1111111', '111', '111', '111', 'สำเร็จ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 2562, 'โครงการเดี่ยว', 'trhhfshrtherherherherhe', '2564011', 'eqwe', 'นาย ศราวุฒิ เกิดถาวร', 'อาจารย์', 'คณะศิลปศาสตร์และวิทยาศาสตร์', '10000', '3000', '3000', '4000', 'งวดที่1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 2566, 'ชุดโครงการ', 'การศึกษาพัฒนาเว็บแอพพลิเคชั่นต้นแบบระบบการประชาสัมพันธ์หน่วยงาน มหาวิทยาลัยราชภัฏชัยภูมิ โดยใช้เฟรมเวิร์กแองกูลาร์เจเอส', '25640112', 'eqwe', 'นาย ศราวุฒิ เกิดถาวร', 'เจ้าหน้าที่', 'สำนักวิทยบริการและเทคโนโลยีสารสนเทศ', '10000', '3000', '3000', '4000', 'งวดที่1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `findresearch`
--
ALTER TABLE `findresearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_eresearch`
--
ALTER TABLE `project_eresearch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `findresearch`
--
ALTER TABLE `findresearch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_eresearch`
--
ALTER TABLE `project_eresearch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
