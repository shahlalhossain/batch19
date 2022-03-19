-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2021 at 04:13 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.1.33-37+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `session` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `student_name`, `mobile`, `email`, `session`, `batch`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'STD-00004', 'Gulshan Rahman Tanny', '8801201000004', 'tanny@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(5, 'STD-00005', 'Anika Barua', '8801201000005', 'barua@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(6, 'STD-00006', 'Abida Hasan Ria', '8801201000006', 'ria@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(7, 'STD-00007', 'Jafrin Sultana', '8801201000007', 'sultana@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(8, 'STD-00008', 'Sabiha Jahan', '8801201000008', 'sabiha@gmail.com', 'Session-7', '3rd', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(9, 'STD-00009', 'Deb Mimi', '8801201000009', 'mimi@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(10, 'STD-00010', 'Maksuda Begum', '8801201000010', 'begum@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(11, 'STD-00011', 'Mobas Shirin Khan', '8801201000011', 'khan@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(12, 'STD-00012', 'Tanzima Alam', '8801201000012', 'alam@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(13, 'STD-00013', 'Alvi Mridha', '8801201000013', 'mridha@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(14, 'STD-00014', 'Nazmun Lipa', '8801201000014', 'lipa@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(16, 'STD-00016', 'Roushan Ara Rakhi', '8801201000016', 'rakhi@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(17, 'STD-00017', 'Tamanna Zaman', '8801201000017', 'zaman@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(18, 'STD-00018', 'Farzana Afroz', '8801201000018', 'afroz@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(20, 'STD-00020', 'Rabeya Akter Meghla', '8801201000020', 'meghla@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(25, 'STD-00025', 'Samia Sultana', '8801201000025', 'sultana@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(26, 'STD-00026', 'Soma Banik', '8801201000026', 'banik@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(27, 'STD-00027', 'Alima Ali', '8801201000027', 'ali@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(28, 'STD-00028', 'Samia Islam Sathi', '8801201000028', 'sathi@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(29, 'STD-00029', 'Sumaiya Abedin', '8801201000029', 'abedin@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(30, 'STD-00030', 'Shibu Rani Borman', '8801201000030', 'borman@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(31, 'STD-00031', 'Trisha Bhowmik', '8801201000031', 'bhowmik@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(32, 'STD-00032', 'Bornita Roy', '8801201000032', 'roy@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(33, 'STD-00033', 'Sabrina Aktar', '8801201000033', 'aktar@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(34, 'STD-00034', 'Manzila Sristy', '8801201000034', 'sristy@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(35, 'STD-00035', 'Farjana Rahman', '8801201000035', 'rahman@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(36, 'STD-00036', 'Beauty Khan', '8801201000036', 'beauty@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(37, 'STD-00037', 'Tahsin Sultana Tanisha', '8801201000037', 'tanisha@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(39, 'STD-00039', 'Rimi Khan', '8801201000039', 'rimi@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(40, 'STD-00040', 'Nisha Deb', '8801201000040', 'nisha@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(41, 'STD-00041', 'Nusrat Tania', '8801201000041', 'tania@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(42, 'STD-00042', 'Sanjida', '8801201000042', 'sanjida@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(43, 'STD-00043', 'Priyanka Chakraborty', '8801201000043', 'chakraborty@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(44, 'STD-00044', 'Kakoli Nath', '8801201000044', 'nath@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(45, 'STD-00045', 'Sharmin Jahan', '8801201000045', 'sharmin@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(46, 'STD-00046', 'Asma Ria', '8801201000046', 'ria@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(47, 'STD-00047', 'Afruza Akter Sonia', '8801201000047', 'sonia@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(48, 'STD-00048', 'Nusera Tasrin', '8801201000048', 'tasrin@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(49, 'STD-00049', 'Anamika Afrin', '8801201000049', 'afrin@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(50, 'STD-00050', 'Zayn Joynob', '8801201000050', 'joynob@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(51, 'STD-00051', 'Sumana Banik', '8801201000051', 'banik@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(52, 'STD-00052', 'Anzum Rahman', '8801201000052', 'rahman@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(53, 'STD-00053', 'Joyita Ghosh', '8801201000053', 'ghosh@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(54, 'STD-00054', 'Ishrat Jahan Meem', '8801201000054', 'meem@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(55, 'STD-00055', 'Alizabeth Keya', '8801201000055', 'keya@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(56, 'STD-00056', 'Nurjahan Begum Doly', '8801201000056', 'doly@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(57, 'STD-00057', 'Aklima Lima', '8801201000057', 'lima@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(58, 'STD-00058', 'Urmila Barua', '8801201000058', 'barua@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(59, 'STD-00059', 'Fatema Akter', '8801201000059', 'akter@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(60, 'STD-00060', 'Elijah Sophia', '8801201000060', 'sophia@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(61, 'STD-00061', 'Jinnatun Nahar', '8801201000061', 'nahar@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(62, 'STD-00062', 'Faria Yasmin Promiti', '8801201000062', 'promiti@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(63, 'STD-00063', 'Miskatul Monira', '8801201000063', 'monira@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(64, 'STD-00064', 'Arpita Islam', '8801201000064', 'islam@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(65, 'STD-00065', 'Umme Habiba', '8801201000065', 'habiba@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(66, 'STD-00066', 'Ifrat Taniza', '8801201000066', 'taniza@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(67, 'STD-00067', 'Najifa Rothe', '8801201000067', 'rothe@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(68, 'STD-00068', 'Shirin Sultana Ria', '8801201000068', 'ria@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(69, 'STD-00069', 'Abida Sultana', '8801201000069', 'sultana@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(70, 'STD-00070', 'Nelima Rothy', '8801201000070', 'rothy@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(71, 'STD-00071', 'Rifana Afrin', '8801201000071', 'afrin@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00'),
(72, 'STD-00072', 'Raziya Akter Ratry', '8801201000072', 'ratry@gmail.com', 'Session-11', '1st', 1, 1, '2021-07-27 06:43:00', '2021-07-27 06:43:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
