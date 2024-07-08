-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2023 at 08:57 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u927048695_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_database`
--

CREATE TABLE `candidate_database` (
  `sno` smallint(6) NOT NULL,
  `roll_number` char(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` char(37) NOT NULL,
  `batch` char(1) NOT NULL,
  `department` char(3) NOT NULL,
  `votes` smallint(6) NOT NULL,
  `elections` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_database`
--

INSERT INTO `candidate_database` (`sno`, `roll_number`, `name`, `email`, `batch`, `department`, `votes`, `elections`, `category`, `pdf`, `image`) VALUES
(104, 'B200029EE', 'John doe', 'aadarsh_b200029ee@nitc.ac.in', 'A', 'EEE', 2, 'CR Elections', 'Boy Category', '51a139_7723b3_Manifesto_Examples_Updated_(1)_(1).pdf', 'M1.jpg'),
(105, 'B200299EE', 'Ravi', 'alla_b200299ee@nitc.ac.in', 'A', 'EEE', 4, 'CR Elections', 'Boy Category', 'Hub-ManifestoGuide.pdf', 'M2.jpeg'),
(106, 'B200260EE', 'Maggie', 'adabala_b200260ee@nitc.ac.in', 'A', 'EEE', 4, 'CR Elections', 'Girl Category', 'BJP-Election-english-2019.pdf', 'L6.jpeg'),
(107, 'B200245EE', 'Aradhya', 'aiswarya_b200245ee@nitc.ac.in', 'A', 'EEE', 2, 'CR Elections', 'Girl Category', 'chapman_sam.pdf', 'L8.jpeg'),
(108, 'B200298EE', 'Madhavan', 'adithya_b200298ee@nitc.ac.in', 'A', 'EEE', 8, 'BR Elections', 'BR Category', 'manifesto_cr_133190001.pdf', 'BR1.jpeg'),
(110, 'B200182EE', 'Komali', 'keerthana_b200182ee@nitc.ac.in', 'C', 'EEE', 11, 'BR Elections', 'BR Category', 'BJP-Election-english-2019.pdf', 'BR2.jpeg'),
(113, 'B200321EE', 'Danayya', 'vedantam_b200321ee@nitc.ac.in', 'D', 'EEE', 8, 'BR Elections', 'BR Category', 'chapman_sam.pdf', 'M7.jpeg'),
(114, 'B200338EE', 'Kreign', 'bhukya_b200338ee@nitc.ac.in', 'B', 'EEE', 3, 'CR Elections', 'Boy Category', 'BJP-Election-english-2019.pdf', 'M2.jpeg'),
(115, 'B200281EE', 'Akash', 'chaitanya_b200281ee@nitc.ac.in', 'B', 'EEE', 11, 'CR Elections', 'Boy Category', 'Hub-ManifestoGuide.pdf', 'M5.jpeg'),
(116, 'B200222EE', 'Akanksha', 'chaytra_b200222ee@nitc.ac.in', 'B', 'EEE', 10, 'CR Elections', 'Girl Category', 'en_manifesto_culture.pdf', 'L3.jpeg'),
(117, 'B200268EE', 'Pranathi', 'dasari_b200268ee@nitc.ac.in', 'B', 'EEE', 4, 'CR Elections', 'Girl Category', 'manifesto_cr_133190001.pdf', 'L7.jpeg'),
(118, 'B200274EE', 'Sravan', 'konduru_b200274ee@nitc.ac.in', 'C', 'EEE', 14, 'CR Elections', 'Boy Category', 'BJP-Election-english-2019.pdf', 'M8.jpeg'),
(119, 'B200290EE', 'Srinu', 'lalam_b200290ee@nitc.ac.in', 'C', 'EEE', 5, 'CR Elections', 'Boy Category', 'Hub-ManifestoGuide.pdf', 'M2.jpeg'),
(120, 'B200257EE', 'Sweety', 'kotta_b200257ee@nitc.ac.in', 'C', 'EEE', 15, 'CR Elections', 'Girl Category', 'en_manifesto_culture.pdf', 'L1.jpg'),
(121, 'B200262EE', 'Haasini', 'mogullapally_b200262ee@nitc.ac.in', 'C', 'EEE', 4, 'CR Elections', 'Girl Category', 'Oracle-Aptitude-and-Reasoning.pdf', 'BR2.jpeg'),
(122, 'B200333EE', 'Yugandhar', 'vadali_b200333ee@nitc.ac.in', 'D', 'EEE', 2, 'CR Elections', 'Boy Category', 'BJP-Election-english-2019.pdf', 'M6.jpeg'),
(123, 'B200332EE', 'Deepak', 'teegala_b200332ee@nitc.ac.in', 'D', 'EEE', 4, 'CR Elections', 'Boy Category', 'Hub-ManifestoGuide.pdf', 'M8.jpeg'),
(124, 'B200188EE', 'Priya', 'swathy_b200188ee@nitc.ac.in', 'D', 'EEE', 5, 'CR Elections', 'Girl Category', '51a139_7723b3_Manifesto_Examples_Updated_(1)_(1).pdf', 'L8.jpeg'),
(125, 'B200178EE', 'Viragya', 'vishnumaya_b200178ee@nitc.ac.in', 'D', 'EEE', 1, 'CR Elections', 'Girl Category', 'manifesto_cr_133190001.pdf', 'L2.jpeg'),
(128, 'B200285EE', 'Mathew', 'gajjala_b200285ee@nitc.ac.in', 'B', 'EEE', 12, 'BR Elections', 'BR Category', 'Hub-ManifestoGuide.pdf', 'f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Sno` int(5) NOT NULL,
  `roll_number` varchar(10) NOT NULL,
  `status` char(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Sno`, `roll_number`, `status`, `timestamp`) VALUES
(1, 'B200275EE', 'Log Out Su', '2023-08-01 14:13:53'),
(2, 'B200293EE', 'Log Out Su', '2023-08-01 21:31:56'),
(3, 'B200293EE', 'Log Out Su', '2023-08-01 21:34:17'),
(4, 'ADMIN123', 'Login Succ', '2023-08-01 21:44:41'),
(5, 'ADMIN123', 'Login Succ', '2023-08-01 21:45:16'),
(6, 'B200290EE', 'Log Out Su', '2023-08-01 21:59:21'),
(7, 'B200280EE', 'Log Out Su', '2023-08-01 22:10:15'),
(8, 'B200281EE', 'Log Out Su', '2023-08-01 22:53:18'),
(9, 'B200314EE', 'Log Out Su', '2023-08-01 23:05:25'),
(10, 'B200302EE', 'Log Out Su', '2023-08-01 23:15:58'),
(11, 'B200314EE', 'Log Out Su', '2023-08-05 23:19:11'),
(12, 'B200314EE', 'Log Out Su', '2023-08-05 23:21:36'),
(13, 'B200314EE', 'Log Out Su', '2023-08-05 23:42:03'),
(14, '', 'Log Out Su', '2023-08-05 23:42:19'),
(15, 'B200314EE', 'Log Out Su', '2023-08-06 18:28:03'),
(16, '', 'Log Out Su', '2023-08-06 18:28:09'),
(17, 'ADMIN123', 'Login Succ', '2023-08-07 23:59:07'),
(18, 'ADMIN123', 'Log Out Su', '2023-08-08 00:02:36'),
(19, 'B200265EE', 'Log Out Su', '2023-08-11 20:29:07'),
(20, 'B200275EE', 'Log Out Su', '2023-08-12 09:32:45'),
(21, 'B200275EE', 'Log Out Su', '2023-08-12 22:07:18'),
(22, 'B200275EE', 'Log Out Su', '2023-08-12 22:08:35'),
(23, 'ADMIN123', 'Login Succ', '2023-08-12 22:12:48'),
(24, 'ADMIN123', 'Log Out Su', '2023-08-12 22:12:56'),
(25, 'ADMIN123', 'Login Succ', '2023-08-12 22:13:06'),
(26, 'ADMIN123', 'Log Out Su', '2023-08-12 22:13:10'),
(27, 'ADMIN123', 'Login Succ', '2023-08-12 22:13:45'),
(28, 'ADMIN123', 'Log Out Su', '2023-08-12 22:14:38'),
(29, 'ADMIN123', 'Login Succ', '2023-08-12 22:15:20'),
(30, 'ADMIN123', 'Log Out Su', '2023-08-12 22:17:24'),
(31, 'ADMIN123', 'Login Succ', '2023-08-12 22:17:27'),
(32, 'ADMIN123', 'Login Succ', '2023-08-12 22:19:38'),
(33, 'ADMIN123', 'Log Out Su', '2023-08-12 22:23:04'),
(34, 'B200256EE', 'Log Out Su', '2023-08-12 22:39:10'),
(35, 'B200262EE', 'Log Out Su', '2023-08-12 22:44:17'),
(36, 'B200222EE', 'Log Out Su', '2023-08-12 22:48:38'),
(37, 'B200274EE', 'Log Out Su', '2023-08-12 22:50:23'),
(38, 'B200334EE', 'Log Out Su', '2023-08-12 22:52:06'),
(39, 'B200281EE', 'Log Out Su', '2023-08-12 22:52:45'),
(40, 'B200334EE', 'Log Out Su', '2023-08-12 22:54:01'),
(41, 'ADMIN123', 'Login Succ', '2023-08-12 22:58:02'),
(42, 'ADMIN123', 'Log Out Su', '2023-08-12 22:58:05'),
(43, 'B200275EE', 'Log Out Su', '2023-08-12 22:58:38'),
(44, 'B200263EE', 'Log Out Su', '2023-08-12 23:00:50'),
(45, 'B200305EE', 'Log Out Su', '2023-08-12 23:02:47'),
(46, 'B200275EE', 'Log Out Su', '2023-08-12 23:04:10'),
(47, 'B200236EE', 'Log Out Su', '2023-08-12 23:08:15'),
(48, 'B200275EE', 'Log Out Su', '2023-08-12 23:15:34'),
(49, 'B200275EE', 'Log Out Su', '2023-08-12 23:15:41'),
(50, 'B200275EE', 'Log Out Su', '2023-08-12 23:16:28'),
(51, 'B200261EE', 'Log Out Su', '2023-08-12 23:25:08'),
(52, 'B200275EE', 'Log Out Su', '2023-08-12 23:56:45'),
(53, 'ADMIN123', 'Login Succ', '2023-08-12 23:56:49'),
(54, 'ADMIN123', 'Log Out Su', '2023-08-12 23:57:30'),
(55, 'B200298EE', 'Log Out Su', '2023-08-13 01:46:33'),
(56, 'B200275EE', 'Log Out Su', '2023-08-13 06:48:34'),
(57, 'B200231EE', 'Log Out Su', '2023-08-13 09:49:35'),
(58, 'B200275EE', 'Log Out Su', '2023-08-13 11:45:11'),
(59, 'B200341EE', 'Login Succ', '2023-08-13 12:20:41'),
(60, 'B200341EE', 'Log Out Su', '2023-08-13 12:22:43'),
(61, 'B200314EE', 'Log Out Su', '2023-08-13 12:24:03'),
(62, 'ADMIN123', 'Login Succ', '2023-08-13 12:31:15'),
(63, 'ADMIN123', 'Log Out Su', '2023-08-13 12:32:06'),
(64, 'B200292EE', 'Login Succ', '2023-08-13 12:42:24'),
(65, 'B200292EE', 'Login Succ', '2023-08-13 12:44:22'),
(66, 'B200292EE', 'Log Out Su', '2023-08-13 12:45:53'),
(67, 'B200322EE', 'Login Succ', '2023-08-13 13:00:21'),
(68, 'B200288EE', 'Login Succ', '2023-08-13 13:41:01'),
(69, 'B200283EE', 'Login Succ', '2023-08-13 13:41:10'),
(70, 'B200255EE', 'Login Succ', '2023-08-13 13:45:43'),
(71, 'B200287EE', 'Login Succ', '2023-08-13 13:46:00'),
(72, 'B200268EE', 'Login Succ', '2023-08-13 13:47:44'),
(73, 'B200283EE', 'Login Succ', '2023-08-13 13:48:20'),
(74, 'B200288EE', 'Login Succ', '2023-08-13 13:48:29'),
(75, 'B200288EE', 'Login Succ', '2023-08-13 13:48:31'),
(76, 'B200283EE', 'Log Out Su', '2023-08-13 13:50:15'),
(77, 'B200275EE', 'Login Succ', '2023-08-14 14:55:46'),
(78, 'B200275EE', 'Log Out Su', '2023-08-14 14:56:12'),
(79, 'B200299EE', 'Login Succ', '2023-08-16 22:14:54'),
(80, 'B200314EE', 'Login Succ', '2023-08-16 22:18:59'),
(81, 'ADMIN123', 'Login Succ', '2023-08-16 23:15:08'),
(82, 'B200314EE', 'Log Out Su', '2023-08-16 23:19:26'),
(83, 'B200290EE', 'Login Succ', '2023-08-25 22:44:21'),
(84, 'B200275EE', 'Login Succ', '2023-10-01 12:39:30'),
(85, 'B200275EE', 'Log Out Su', '2023-10-01 12:40:11'),
(86, 'B200275EE', 'Login Succ', '2023-10-03 09:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` tinyint(10) NOT NULL,
  `roll_number` char(10) NOT NULL,
  `email` char(37) NOT NULL,
  `password` char(15) NOT NULL,
  `passkey` char(8) NOT NULL,
  `t_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `roll_number`, `email`, `password`, `passkey`, `t_stamp`) VALUES
(5, 'ADMIN123', 'vms_nitc@nitc.ac.in', 'Vms@4563', 'admin123', '2023-07-06 16:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `vms_student_information_2`
--

CREATE TABLE `vms_student_information_2` (
  `sno` smallint(3) DEFAULT NULL,
  `roll_number` char(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(37) DEFAULT NULL,
  `batch` char(1) DEFAULT NULL,
  `department` char(3) DEFAULT NULL,
  `passkey` varchar(8) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vms_student_information_2`
--

INSERT INTO `vms_student_information_2` (`sno`, `roll_number`, `name`, `email`, `batch`, `department`, `passkey`, `timestamp`) VALUES
(1, 'B200029EE', 'AADARSH JAYADEEP', 'aadarsh_b200029ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(2, 'B200190EE', 'ABEL JOHNSON', 'abel_b200190ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(3, 'B200194EE', 'ABHIJITH A A', 'abhijith_b200194ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(4, 'B200244EE', 'ABHIJITH BALAN', 'abhijith_b200244ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(5, 'B200212EE', 'ABHIJITH KRISHNA R', 'abhijith_b200212ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(6, 'B200213EE', 'ABHINAND C NAIR\n', 'abhinand_b200213ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(7, 'B200279EE', 'ABHINAY CHANDA', 'abhinay_b200279ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(8, 'B200214EE', 'ABHIRAM K R', 'abhiram_b200214ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(9, 'B200325EE', 'ABHISHEK GAUTAM', 'abhishek_b200325ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(10, 'B200260EE', 'ADABALA JISHNU PREETHI', 'adabala_b200260ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(11, 'B200272EE', 'ADARSH AGRAWAL', 'adarsh_b200272ee@nitc.ac.in', 'A', 'EEE', 'ZUKl5zID', '2023-08-12 20:33:54'),
(12, 'B200215EE', 'ADIL K', 'adil_b200215ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(13, 'B200298EE', 'ADITHYA SAI SRINIVAS ANKAM', 'adithya_b200298ee@nitc.ac.in', 'A', 'EEE', 'r60TfrIY', '2023-08-01 16:49:28'),
(14, 'B200216EE', 'ADITHYAN H', 'adithyan_b200216ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(15, 'B200217EE', 'ADVAITH S B', 'advaith_b200217ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(16, 'B200174EE', 'AFIFAH ABDUL SAMAD', 'afifah_b200174ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(17, 'B200245EE\n', 'AISWARYA SUNILKUMAR', 'aiswarya_b200245ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(18, 'B201318EE', 'AKHIL MURALI', 'akhil_b201318ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(19, 'B200196EE', 'AKHIL RAJ M V', 'akhil_b200196ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(20, 'B200179EE', 'ALEENA SHAJU', 'aleena_b200179ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(21, 'B200191EE', 'ALEX WILSON', 'alex_b200191ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(22, 'B200299EE', 'ALLA SNEHITH', 'alla_b200299ee@nitc.ac.in', 'A', 'EEE', 'SdmZFdAy', '2023-08-16 16:43:28'),
(23, 'B200218EE', 'ALLEN JOSEPH JOSE', 'allen_b200218ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(24, 'B200219EE', 'AMAL P MATHEWS', 'amal_b200219ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(25, 'B200220EE', 'ANANTHAN A', 'ananthan_b200220ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(26, 'B200300EE', 'ANIRUDH V NAIR', 'anirudh_b200300ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(27, 'B200301EE', 'ANMOL JAIN', 'anmol_b200301ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(28, 'B200302EE', 'ANNAPAREDDY RUSHENDRA REDDY', 'annapareddy_b200302ee@nitc.ac.in', 'A', 'EEE', 'XTCIk68j', '2023-08-12 18:00:44'),
(29, 'B200197EE', 'ANSIL BAYAN', 'ansil_b200197ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(30, 'B200189EE', 'ANUMOL R', 'anumol_b200189ee@nitc.ac.in', 'A', 'EEE', 'HzC1UNqx', '2023-08-10 13:27:20'),
(31, 'B200030EE', 'ANUPAMA ASHA', 'anupama_b200030ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(32, 'B200180EE', 'APARNA RAJAN', 'aparna_b200180ee@nitc.ac.in', 'A', 'EEE', 'JWiqnCq8', '2023-08-12 17:34:06'),
(33, 'B200176EE', 'ARCHANA M R', 'archana_b200176ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(34, 'B200303EE', 'ARINJAY MAZUMDAR', 'arinjay_b200303ee@nitc.ac.in', 'A', 'EEE', 'inyg3Acg', '2023-08-12 17:46:21'),
(35, 'B200198EE', 'ASWIN PRASANTH M', 'aswin_b200198ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(36, 'B200199EE', 'ASWIN S', 'aswin_b200199ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(37, 'B200304EE', 'ATLA NARASIMHA DINESH KUMAR RE', 'atla_b200304ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(38, 'B200031EE', 'AVANTHIKA MURALEEDHARAN', 'avanthika_b200031ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(39, 'B200200EE', 'AVINASH', 'avinash_b200200ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(40, 'B200192EE', 'B ABHIJITH', 'abhijith_b200192ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(41, 'B200305EE', 'BACHU SUBHA HEMANTH', 'bachu_b200305ee@nitc.ac.in', 'A', 'EEE', 'Buw4nMaN', '2023-08-12 17:29:53'),
(42, 'B200267EE', 'BADAM LIKITHA PRIYA', 'badam_b200267ee@nitc.ac.in', 'A', 'EEE', '', '0000-00-00 00:00:00'),
(43, 'B200280EE', 'BANDI KAPIL KOUSHIK', 'bandi_b200280ee@nitc.ac.in', 'A', 'EEE', 'kMLBRKus', '2023-08-01 16:37:04'),
(44, 'B200326EE', 'BANDI SAI MUKESH', 'bandi_b200326ee@nitc.ac.in', 'A', 'EEE', 'PyFZkxlD', '2023-08-12 17:18:52'),
(45, 'B200335EE', 'BANOTH TEJENDER', 'banoth_b200335ee@nitc.ac.in', 'B', 'EEE', 'bEP7mrLw', '2023-08-13 06:45:46'),
(46, 'B200336EE', 'BANOTHU SATHISH', 'banothu_b200336ee@nitc.ac.in', 'B', 'EEE', 'FqCur6c8', '2023-08-13 06:40:41'),
(47, 'B200246EE', 'BHAGATH VINOD', 'bhagath_b200246ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(48, 'B200306EE', 'BHOSALE SHRINIVAS DHANWANT', 'bhosale_b200306ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(49, 'B200337EE', 'BHUKYA PREM SAGAR NAYAK', 'bhukya_b200337ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(50, 'B200338EE', 'BHUKYA SRIKRISHNA', 'bhukya_b200338ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(51, 'B200339EE', 'BURJA SAI MANOHAR', 'burja_b200339ee@nitc.ac.in', 'B', 'EEE', 'AIAGUDeW', '2023-08-13 06:41:13'),
(52, 'B200281EE', 'CHAITANYA PARGI', 'chaitanya_b200281ee@nitc.ac.in', 'B', 'EEE', 'ifCTSfOk', '2023-08-12 17:17:48'),
(53, 'B200282EE', 'CHARAKANAM UMAKANTH', 'charakanam_b200282ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(54, 'B200222EE', 'CHAYTRA A S', 'chaytra_b200222ee@nitc.ac.in', 'B', 'EEE', 'bSJYk6Ck', '2023-08-12 17:14:33'),
(55, 'B200307EE', 'CHIMBILI SAI LOHITH', 'chimbili_b200307ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(56, 'B200308EE', 'CHINTHAKUNTA RAJ DHEERAJ REDDY', 'chinthakunta_b200308ee@nitc.ac.in', 'B', 'EEE', 'RdSByUlX', '2023-08-12 18:34:05'),
(57, 'B200283EE', 'CHOLLETI NITHIN', 'cholleti_b200283ee@nitc.ac.in', 'B', 'EEE', 'OgvI7oAt', '2023-08-13 08:10:40'),
(58, 'B200309EE', 'CHORADIA MOHIT PRAKASH', 'choradia_b200309ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(59, 'B200268EE', 'DASARI PUJITHA', 'dasari_b200268ee@nitc.ac.in', 'B', 'EEE', 'VNMUARgN', '2023-08-13 08:17:18'),
(60, 'B200201EE', 'DEVADATHAN K B', 'devadathan_b200201ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(61, 'B200247EE', 'DEVESWAR MEERA ANILKUMAR', 'deveswar_b200247ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(62, 'B200248EE', 'DHANARAJ MAJUMDAR', 'dhanaraj_b200248ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(63, 'B200284EE', 'DINESH YADAV', 'dinesh_b200284ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(64, 'B200223EE', 'DON DAVIS V', 'don_b200223ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(65, 'B200181EE', 'FARHANA NUSMI', 'farhana_b200181ee@nitc.ac.in', 'B', 'EEE', 'l5aOxw8n', '2023-08-10 13:26:33'),
(66, 'B200177EE', 'FATHIMA HABEEB', 'fathima_b200177ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(67, 'B200255EE', 'G M HIMA LATHA', 'gmhima_b200255ee@nitc.ac.in', 'B', 'EEE', 'Urn4X14Z', '2023-08-13 08:14:51'),
(68, 'B200327EE', 'GAJJALA BHANUPRASAD', 'gajjala_b200327ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(69, 'B200285EE', 'GAJJALA UMAR', 'gajjala_b200285ee@nitc.ac.in', 'B', 'EEE', 'u4ZqK43t', '0000-00-00 00:00:00'),
(70, 'B200334EE', 'GAJULA SHIVA KRISHNA', 'gajula_b200334ee@nitc.ac.in', 'B', 'EEE', 'eiPmTt3G', '2023-08-12 17:19:50'),
(71, 'B200286EE', 'GANTA SAIKIRAN', 'ganta_b200286ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(72, 'B200224EE', 'GEORGE JOSEPH', 'george_b200224ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(73, 'B200287EE', 'GOPU KOUSHIK', 'gopu_b200287ee@nitc.ac.in', 'B', 'EEE', '1NdUUJeS', '2023-08-13 08:14:44'),
(74, 'B200173EE', 'GOURI SANKARI S', 'gouri_b200173ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(75, 'B200256EE', 'GOURISHETTY SOUMYA', 'gourishetty_b200256ee@nitc.ac.in', 'B', 'EEE', 'O9V59zZb', '2023-08-12 17:07:44'),
(76, 'B200273EE', 'GSBS GIRI SHANKAR', 'gsbs_b200273ee@nitc.ac.in', 'B', 'EEE', '3ygO9LlG', '0000-00-00 00:00:00'),
(77, 'B200202EE', 'HADI SHAMAL', 'hadi_b200202ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(78, 'B200288EE', 'HANUMANTHU YASWANTH', 'hanumanthu_b200288ee@nitc.ac.in', 'B', 'EEE', 'lLH1RPHW', '2023-08-10 17:00:43'),
(79, 'B200225EE', 'HARIKRISHNAN G KAIMAL', 'harikrishnan_b200225ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(80, 'B200226EE', 'HARIKRISHNAN K J', 'harikrishnan_b200226ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(81, 'B200032EE', 'HARISH HAROON', 'harish_b200032ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(82, 'B200311EE', 'HUSAIN AHTISHAM ATHAR', 'husain_b200311ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(83, 'B200227EE', 'ISAAC S KALLARACKAL', 'isaac_b200227ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(84, 'B200344EE', 'JAGANMOHAN RAO GANTA', 'jaganmohan_b200344ee@nitc.ac.in', 'B', 'EEE', '1bamyOjG', '2023-08-13 06:41:19'),
(85, 'B200328EE', 'JAYPRAKASH', 'jayprakash_b200328ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(86, 'B200312EE\n', 'JINENDRA JAIN', 'jinendra_b200312ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(87, 'B201107EE', 'JINS BIJU', 'jins_b201107ee@nitc.ac.in', 'B', 'EEE', '', '0000-00-00 00:00:00'),
(88, 'B200552EE', 'JIYAD JALEEL', 'jiyad_b200552ee@nitc.ac.in', 'B', 'EEE', 'taHmiW1x', '2023-08-13 01:39:00'),
(89, 'B200193EE', 'JOE JOSE', 'joe_b200193ee@nitc.ac.in', 'C', 'EEE', 'NjVuyVHT', '2023-08-11 05:43:21'),
(90, 'B200228EE', 'JOEL C JAMES', 'joel_b200228ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(91, 'B200229EE', 'JOHN GEORGE', 'john_b200229ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(92, 'B200261EE', 'KANCHARAKUNTLA REETHU REDDY', 'kancharakuntla_b200261ee@nitc.ac.in', 'C', 'EEE', 'NBjWrP50', '2023-08-12 17:51:54'),
(93, 'B200269EE', 'KEDAS KEERTHI', 'kedas_b200269ee@nitc.ac.in', 'C', 'EEE', 'teHAcBuR', '2023-08-12 18:10:56'),
(94, 'B200182EE', 'KEERTHANA P ANAND', 'keerthana_b200182ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(95, 'B200340EE', 'KEMMASARAM VARMA', 'kemmasaram_b200340ee@nitc.ac.in', 'C', 'EEE', 'Cm9xB6QQ', '2023-08-01 17:35:55'),
(96, 'B200230EE', 'KEN JEWEL GEORGE', 'ken_b200230ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(97, 'B200341EE', 'KODAVATH SATHYAM', 'kodavath_b200341ee@nitc.ac.in', 'C', 'EEE', 'YZnnoO2z', '2023-08-13 06:50:08'),
(98, 'B200289EE', 'KODI BHARADWAJ', 'kodi_b200289ee@nitc.ac.in', 'C', 'EEE', 'WjQjcB6a', '2023-08-12 17:47:04'),
(99, 'B200274EE', 'KONDURU SAI KRISHNA REDDY', 'konduru_b200274ee@nitc.ac.in', 'C', 'EEE', '6njwVJV1', '2023-08-12 17:13:07'),
(100, 'B200257EE', 'KOTTA GAYATHRI', 'kotta_b200257ee@nitc.ac.in', 'C', 'EEE', 'hJrSBEjK', '2023-08-12 17:18:30'),
(101, 'B200313EE', 'KRISHNA AGRAWAL', 'krishna_b200313ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(102, 'B200290EE', 'LALAM SAI DATHU', 'lalam_b200290ee@nitc.ac.in', 'C', 'EEE', '12345678', '0000-00-00 00:00:00'),
(103, 'B200231EE', 'LIBBY ZACHARIA SAJI', 'libby_b200231ee@nitc.ac.in', 'C', 'EEE', 'UQbyqFi5', '2023-08-13 04:14:41'),
(104, 'B200329EE', 'M UPENDRA', 'upendra_b200329ee@nitc.ac.in', 'C', 'EEE', '4A1TTg7U', '2023-08-12 17:13:22'),
(105, 'B200291EE', 'MADDULA JAYAKRISHNA', 'maddula_b200291ee@nitc.ac.in', 'C', 'EEE', 'ROXVWIU0', '0000-00-00 00:00:00'),
(106, 'B200342EE', 'MAKKALA SRIDHAR', 'makkala_b200342ee@nitc.ac.in', 'C', 'EEE', 'JH7h4L6n', '2023-08-02 03:22:05'),
(107, 'B200183EE', 'MALAVIKA K P', 'malavika_b200183ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(108, 'B200249EE', 'MALAVIKA P', 'malavika_b200249ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(109, 'B201316EE', 'MALIHA MOSTAFEE', 'maliha_b201316ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(110, 'B200271EE', 'MALLAM HANSIKA', 'mallam_b200271ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(111, 'B200292EE', 'MEVADA DHRUVIK GHANSHYAMBHAI', 'mevada_b200292ee@nitc.ac.in', 'C', 'EEE', '9tppaEJv', '2023-08-13 07:03:51'),
(112, 'B200330EE', 'MIDDE RAJA KULLAYAPPA', 'midde_b200330ee@nitc.ac.in', 'C', 'EEE', 'CFVWy7iU', '2023-08-12 17:23:50'),
(113, 'B200232EE', 'MITRA PRASANNAN', 'mitra_b200232ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(114, 'B200262EE', 'MOGULLAPALLY SUDHEEKSHNA', 'mogullapally_b200262ee@nitc.ac.in', 'C', 'EEE', '6ehrRWS6', '2023-08-12 17:10:36'),
(115, 'B200203EE', 'MUHAMMAD SAMIR MAILANCHI', 'muhammad_b200203ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(116, 'B200204EE', 'MUHAMMED SHIBIL P', 'muhammed_b200204ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(117, 'B200263EE', 'MUPPALA LAKSHMI LASYA', 'muppala_b200263ee@nitc.ac.in', 'C', 'EEE', 'PZC3wd0q', '2023-08-12 17:26:12'),
(118, 'B200314EE', 'MUTHINENI PRASAD', 'muthineni_b200314ee@nitc.ac.in', 'C', 'EEE', 'mvsp3499', '2023-08-13 06:58:29'),
(119, 'B200275EE', 'MUTHYAM HARISH KUMAR', 'muthyam_b200275ee@nitc.ac.in', 'C', 'EEE', 'Oz70wC7P', '0000-00-00 00:00:00'),
(120, 'B200233EE', 'NANDAKISHORE M N', 'nandakishore_b200233ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(121, 'B200264EE', 'NATASHA DAS', 'natasha_b200264ee@nitc.ac.in', 'C', 'EEE', '3eUn3g0L', '2023-08-10 16:20:39'),
(122, 'B200033EE', 'NEHA ANWAR', 'neha_b200033ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(123, 'B200186EE', 'NEHA VINOD', 'neha_b200186ee@nitc.ac.in', 'C', 'EEE', 'TRDbyg74', '2023-08-12 18:31:22'),
(124, 'B200205EE', 'NIJIL NISSAM', 'nijil_b200205ee@nitc.ac.in', 'C', 'EEE', 'heS0uUIF', '2023-08-12 20:15:28'),
(125, 'B200315EE', 'NIKHIL MAHESH SHINDIKAR', 'nikhil_b200315ee@nitc.ac.in', 'C', 'EEE', 'kioHnELF', '2023-08-02 03:23:07'),
(126, 'B200251EE', 'NIKHIL RAJESH', 'nikhil_b200251ee@nitc.ac.in', 'C', 'EEE', 'DY2Eo7RM', '2023-08-08 07:49:31'),
(127, 'B200184EE', 'NOVA S NAIR', 'nova_b200184ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(128, 'B200276EE', 'PARREDDY CH KRISHNA SAILESH RE', 'parreddy_b200276ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(129, 'B200331EE', 'PEETHALA LOHITH', 'peethala_b200331ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(130, 'B200265EE', 'PERUSOMULA MANVITHA', 'perusomula_b200265ee@nitc.ac.in', 'C', 'EEE', '7fLDhXkf', '2023-08-10 18:53:41'),
(131, 'B200034EE', 'PHILIP VARGHESE SAJU', 'philip_b200034ee@nitc.ac.in', 'C', 'EEE', '', '0000-00-00 00:00:00'),
(132, 'B200270EE', 'PODAPANGI KAVYA', 'podapangi_b200270ee@nitc.ac.in', 'C', 'EEE', '4xT6K5aW', '2023-08-13 04:22:55'),
(133, 'B200266EE', 'POLISETTI SAI GAYATHRI', 'polisetti_b200266ee@nitc.ac.in', 'C', 'EEE', 'm1zF2YC4', '2023-08-01 16:56:22'),
(134, 'B200253EE', 'POOJASHREE K', 'poojashree_b200253ee@nitc.ac.in', 'C', 'EEE', 'Teim6jlM', '2023-08-12 17:17:36'),
(135, 'B200277EE', 'POREDDY NAVEEN REDDY', 'poreddy_b200277ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(136, 'B200234EE', 'PRANAV BABU', 'pranav_b200234ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(137, 'B200206EE', 'PRANAV K', 'pranav_b200206ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(138, 'B200207EE', 'RAHUL R', 'rahul_b200207ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(139, 'B200297EE', 'RAJAN YADAV', 'rajan_b200297ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(140, 'B200316EE', 'RAMAKURTHI RAJITH', 'ramakurthi_b200316ee@nitc.ac.in', 'D', 'EEE', 'BXEGJ8K6', '0000-00-00 00:00:00'),
(141, 'B200317EE', 'RISHABH', 'rishabh_b200317ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(142, 'B200343EE', 'RUPAVATH NAVEEN', 'rupavath_b200343ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(143, 'B200185EE', 'RUSHDHA HASEENA', 'rushdha_b200185ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(144, 'B200252EE', 'RUSHIKESH SAMBHAJI HAREGAONKAR', 'rushikesh_b200252ee@nitc.ac.in', 'D', 'EEE', '6KKjVOL1', '2023-08-12 17:35:46'),
(145, 'B200293EE', 'SADDALA VIVEK', 'saddala_b200293ee@nitc.ac.in', 'D', 'EEE', 'OnzJAv47', '0000-00-00 00:00:00'),
(146, 'B200236EE', 'SANKARANARAYANAN A', 'sankaranarayanan_b200236ee@nitc.ac.in', 'D', 'EEE', 'H1Y46dEx', '2023-08-12 17:30:33'),
(147, 'B200294EE', 'SANNAPIRALLA MANIDEEP', 'sannapiralla_b200294ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(148, 'B201315EE', 'SATYAJIT PAUL SHRABAN', 'satyajit_b201315ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(149, 'B201314EE', 'SHUDIPTA CHAKRABARTTY', 'shudipta_b201314ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(150, 'B200208EE', 'SHYAMPRAKASH P', 'shyamprakash_b200208ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(151, 'B200209EE', 'SIDHARTH S', 'sidharth_b200209ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(152, 'B200237EE', 'SIDHARTH SREEKUMAR IYER', 'sidharth_b200237ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(153, 'B200238EE', 'SOHUL RAJEEV', 'sohul_b200238ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(154, 'B200210EE', 'SOLAISHWARAN A', 'solaishwaran_b200210ee@nitc.ac', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(155, 'B200367EE', 'SREE GOVIND P B', 'sreegovind_b200367ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(156, 'B200239EE', 'SREYAS K SREEKUMAR', 'sreyas_b200239ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(157, 'B200295EE', 'SRIKALAHASTHI SAHITH SUDHEEP', 'srikalahasthi_b200295ee@nitc.ac.in', 'D', 'EEE', 'Uc8zvKwA', '2023-08-12 17:21:41'),
(158, 'B200318EE', 'SUBHASH MADHAV GOLLA', 'subhash_b200318ee@nitc.ac.in', 'D', 'EEE', 'dtnadcPu', '2023-08-11 02:37:48'),
(159, 'B200187EE', 'SUBIKSHA S', 'subiksha_b200187ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(160, 'B200027EE', 'SUDARSHAN MURALEEDHARAN', 'sudarshan_b200027ee@nitc.ac.in', 'D', 'EEE', 'He4D0jk2', '2023-08-12 17:18:44'),
(161, 'B200188EE', 'SWATHY KRISHNA', 'swathy_b200188ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(162, 'B200240EE', 'T A NANDAGOPAL', 'tanandagopal_b200240ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(163, 'B200320EE', 'TANISHQ SINGH', 'tanishq_b200320ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(164, 'B200296EE', 'TARUSH MIHIR', 'tarush_b200296ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(165, 'B200332EE', 'TEEGALA UMESH CHANDRA', 'teegala_b200332ee@nitc.ac.in', 'D', 'EEE', 'nJD2SDvx', '0000-00-00 00:00:00'),
(166, 'B200333EE', 'VADALI VIVEK BABU', 'vadali_b200333ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(167, 'B200259EE', 'VADDEPALLY SANJANA', 'vaddepally_b200259ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(168, 'B200321EE', 'VEDANTAM G V V JASWANTH', 'vedantam_b200321ee@nitc.ac.in', 'D', 'EEE', 'smxsTZzN', '2023-08-13 07:55:14'),
(169, 'B200278EE', 'VIKASH SINGH', 'vikash_b200278ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(170, 'B200211EE', 'VINAYAN P A', 'vinayan_b200211ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(171, 'B200254EE', 'VISHAL N R', 'vishal_b200254ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(172, 'B200241EE', 'VISHNU P PRAKASH', 'vishnu_b200241ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(173, 'B200178EE', 'VISHNUMAYA S', 'vishnumaya_b200178ee@nitc.ac.in', 'D', 'EEE', '0i77Iivd', '2023-08-12 17:13:48'),
(174, 'B200242EE', 'VISHWAS V', 'vishwas_b200242ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(175, 'B200322EE', 'VUDATHA PARDHAVA NAGA VENKATA ', 'vudatha_b200322ee@nitc.ac.in', 'D', 'EEE', 'EZziCfyU', '2023-08-13 07:25:52'),
(176, 'B200243EE', 'YADUKRISHNAN T P', 'yadukrishnan_b200243ee@nitc.ac.in', 'D', 'EEE', '', '0000-00-00 00:00:00'),
(177, 'B200323EE', 'YASH JHA', 'yash_b200323ee@nitc.ac.in', 'D', 'EEE', 'yIJl3nW8', '2023-08-12 17:10:53'),
(178, 'B200324EE', 'YEKAMBARAM TEJ PRANEETH', 'yekambaram_b200324ee@nitc.ac.in', 'D', 'EEE', 'WtkFL9SX', '2023-08-12 17:22:17'),
(179, 'ADMIN123', 'Admin VMS NITC', 'prasad910070@gmail.com', 'n', 'EEE', 'Vmsadmin', '2023-08-13 06:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `voting_response`
--

CREATE TABLE `voting_response` (
  `sno` smallint(6) NOT NULL,
  `roll_number` char(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `elections` varchar(30) NOT NULL,
  `candidate` varchar(30) NOT NULL,
  `t_stamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voting_response`
--

INSERT INTO `voting_response` (`sno`, `roll_number`, `category`, `elections`, `candidate`, `t_stamp`) VALUES
(110, 'B200280EE', 'Boy Category', 'CR Elections', 'John doe', '2023-08-01 22:08:52'),
(111, 'B200280EE', 'Girl Category', 'CR Elections', 'Maggie', '2023-08-01 22:08:52'),
(112, 'B200280EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-01 22:09:16'),
(113, 'B200273EE', 'Boy Category', 'CR Elections', 'Kreign', '2023-08-01 22:10:54'),
(114, 'B200273EE', 'Girl Category', 'CR Elections', 'Pranathi', '2023-08-01 22:10:54'),
(115, 'B200273EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-01 22:20:24'),
(116, 'B200298EE', 'Boy Category', 'CR Elections', 'John doe', '2023-08-01 22:21:33'),
(117, 'B200298EE', 'Girl Category', 'CR Elections', 'Aradhya', '2023-08-01 22:21:33'),
(118, 'B200321EE', 'Boy Category', 'CR Elections', 'Deepak', '2023-08-01 22:29:20'),
(119, 'B200321EE', 'Girl Category', 'CR Elections', 'Priya', '2023-08-01 22:29:20'),
(120, 'B200281EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-01 22:51:40'),
(124, 'B200340EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-01 23:06:40'),
(125, 'B200340EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-01 23:06:40'),
(126, 'B200302EE', 'Boy Category', 'CR Elections', 'Ravi', '2023-08-01 23:14:20'),
(127, 'B200302EE', 'Girl Category', 'CR Elections', 'Aradhya', '2023-08-01 23:14:20'),
(128, 'B200302EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-01 23:14:47'),
(130, 'B200326EE', 'Boy Category', 'CR Elections', 'Ravi', '2023-08-07 23:43:48'),
(131, 'B200326EE', 'Girl Category', 'CR Elections', 'Maggie', '2023-08-07 23:43:48'),
(132, 'B200330EE', 'Boy Category', 'CR Elections', 'Srinu', '2023-08-07 23:45:34'),
(133, 'B200330EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-07 23:45:34'),
(134, 'B200251EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-08 13:21:17'),
(135, 'B200251EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-08 13:21:17'),
(136, 'B200181EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-10 18:59:42'),
(137, 'B200181EE', 'Girl Category', 'CR Elections', 'Pranathi', '2023-08-10 18:59:42'),
(138, 'B200181EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-10 18:59:52'),
(142, 'B200186EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-10 20:40:43'),
(143, 'B200186EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-10 20:40:43'),
(144, 'B200186EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-10 20:41:00'),
(145, 'B200264EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-10 21:51:20'),
(146, 'B200264EE', 'Girl Category', 'CR Elections', 'Haasini', '2023-08-10 21:51:20'),
(147, 'B200265EE', 'Boy Category', 'CR Elections', 'Srinu', '2023-08-11 20:31:39'),
(148, 'B200265EE', 'Girl Category', 'CR Elections', 'Haasini', '2023-08-11 20:31:39'),
(149, 'B200265EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-11 20:32:28'),
(156, 'B200256EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-12 22:38:43'),
(157, 'B200256EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-12 22:38:43'),
(158, 'B200256EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 22:38:56'),
(159, 'B200262EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 22:41:30'),
(160, 'B200262EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 22:41:30'),
(161, 'B200323EE', 'Boy Category', 'CR Elections', 'Deepak', '2023-08-12 22:41:52'),
(162, 'B200323EE', 'Girl Category', 'CR Elections', 'Priya', '2023-08-12 22:41:52'),
(163, 'B200323EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-12 22:42:10'),
(164, 'B200193EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 22:42:21'),
(165, 'B200193EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 22:42:40'),
(166, 'B200193EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 22:42:40'),
(167, 'B200262EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 22:43:18'),
(168, 'B200329EE', 'Boy Category', 'CR Elections', 'Srinu', '2023-08-12 22:44:55'),
(169, 'B200329EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 22:44:55'),
(170, 'B200253EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 22:49:13'),
(171, 'B200253EE', 'Girl Category', 'CR Elections', 'Haasini', '2023-08-12 22:49:13'),
(172, 'B200281EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-12 22:49:22'),
(173, 'B200281EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-12 22:49:22'),
(174, 'B200253EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 22:49:27'),
(175, 'B200027EE', 'Boy Category', 'CR Elections', 'Yugandhar', '2023-08-12 22:49:43'),
(176, 'B200027EE', 'Girl Category', 'CR Elections', 'Viragya', '2023-08-12 22:49:43'),
(177, 'B200027EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-12 22:49:56'),
(178, 'B200326EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 22:49:58'),
(179, 'B200274EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 22:50:00'),
(180, 'B200274EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 22:50:00'),
(181, 'B200274EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-12 22:50:19'),
(182, 'B200295EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-12 22:53:14'),
(183, 'B200334EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-12 22:53:20'),
(184, 'B200295EE', 'Boy Category', 'CR Elections', 'Deepak', '2023-08-12 22:53:24'),
(185, 'B200295EE', 'Girl Category', 'CR Elections', 'Priya', '2023-08-12 22:53:24'),
(186, 'B200334EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-12 22:53:45'),
(187, 'B200334EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-12 22:53:45'),
(188, 'B200330EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 22:54:34'),
(189, 'B200324EE', 'Boy Category', 'CR Elections', 'Deepak', '2023-08-12 22:54:56'),
(190, 'B200324EE', 'Girl Category', 'CR Elections', 'Priya', '2023-08-12 22:54:56'),
(191, 'B200324EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-12 22:55:22'),
(192, 'B200263EE', 'Boy Category', 'CR Elections', 'Srinu', '2023-08-12 23:00:03'),
(193, 'B200263EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 23:00:03'),
(194, 'B200263EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-12 23:00:22'),
(195, 'B200305EE', 'Boy Category', 'CR Elections', 'Ravi', '2023-08-12 23:01:41'),
(196, 'B200305EE', 'Girl Category', 'CR Elections', 'Maggie', '2023-08-12 23:01:41'),
(197, 'B200305EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-12 23:01:53'),
(198, 'B200275EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 23:14:47'),
(199, 'B200275EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 23:14:47'),
(200, 'B200275EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-12 23:16:15'),
(201, 'B200261EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 23:24:18'),
(202, 'B200261EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 23:24:18'),
(203, 'B200261EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-12 23:25:01'),
(204, 'B200269EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-12 23:42:29'),
(205, 'B200269EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-12 23:42:29'),
(206, 'B200269EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-12 23:42:47'),
(207, 'B200272EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-13 02:05:22'),
(208, 'B200231EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-13 09:48:06'),
(209, 'B200231EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-13 09:48:06'),
(210, 'B200231EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-13 09:48:42'),
(211, 'B200270EE', 'Boy Category', 'CR Elections', 'Srinu', '2023-08-13 09:59:04'),
(212, 'B200270EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-13 09:59:04'),
(213, 'B200270EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-13 09:59:25'),
(214, 'B200344EE', 'Boy Category', 'CR Elections', 'Kreign', '2023-08-13 12:12:39'),
(215, 'B200344EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 12:12:39'),
(216, 'B200344EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-13 12:13:29'),
(217, 'B200336EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 12:14:57'),
(218, 'B200336EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 12:14:57'),
(219, 'B200336EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-13 12:15:13'),
(220, 'B200339EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 12:15:32'),
(221, 'B200339EE', 'Girl Category', 'CR Elections', 'Pranathi', '2023-08-13 12:15:32'),
(222, 'B200339EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-13 12:16:16'),
(223, 'B200335EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-13 12:17:37'),
(224, 'B200335EE', 'Boy Category', 'CR Elections', 'Kreign', '2023-08-13 12:18:00'),
(225, 'B200335EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 12:18:00'),
(226, 'B200341EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-13 12:21:04'),
(227, 'B200341EE', 'Girl Category', 'CR Elections', 'Haasini', '2023-08-13 12:21:04'),
(228, 'B200341EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-13 12:21:25'),
(231, 'B200292EE', 'Boy Category', 'CR Elections', 'Sravan', '2023-08-13 12:44:33'),
(232, 'B200292EE', 'Girl Category', 'CR Elections', 'Sweety', '2023-08-13 12:44:33'),
(233, 'B200322EE', 'Boy Category', 'CR Elections', 'Yugandhar', '2023-08-13 13:00:36'),
(234, 'B200322EE', 'Girl Category', 'CR Elections', 'Priya', '2023-08-13 13:00:36'),
(235, 'B200322EE', 'BR Category', 'BR Elections', 'Mathew', '2023-08-13 13:00:54'),
(236, 'B200283EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 13:42:07'),
(237, 'B200283EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 13:42:07'),
(238, 'B200283EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-13 13:42:38'),
(239, 'B200288EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 13:43:57'),
(240, 'B200288EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 13:43:57'),
(241, 'B200255EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 13:46:08'),
(242, 'B200255EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 13:46:08'),
(243, 'B200287EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 13:46:19'),
(244, 'B200287EE', 'Girl Category', 'CR Elections', 'Pranathi', '2023-08-13 13:46:19'),
(245, 'B200287EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-13 13:46:35'),
(246, 'B200255EE', 'BR Category', 'BR Elections', 'Madhavan', '2023-08-13 13:48:21'),
(247, 'B200268EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-13 13:48:47'),
(248, 'B200268EE', 'Boy Category', 'CR Elections', 'Akash', '2023-08-13 13:49:44'),
(249, 'B200268EE', 'Girl Category', 'CR Elections', 'Akanksha', '2023-08-13 13:49:44'),
(250, 'B200288EE', 'BR Category', 'BR Elections', 'Komali', '2023-08-13 13:50:05'),
(251, 'B200299EE', 'Boy Category', 'CR Elections', 'Ravi', '2023-08-16 22:15:16'),
(252, 'B200299EE', 'Girl Category', 'CR Elections', 'Maggie', '2023-08-16 22:15:16'),
(253, 'B200299EE', 'BR Category', 'BR Elections', 'Danayya', '2023-08-16 22:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_database`
--
ALTER TABLE `candidate_database`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `Roll_no` (`roll_number`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `voting_response`
--
ALTER TABLE `voting_response`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_database`
--
ALTER TABLE `candidate_database`
  MODIFY `sno` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `Sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voting_response`
--
ALTER TABLE `voting_response`
  MODIFY `sno` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
