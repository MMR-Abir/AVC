-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 04:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idb_bisew`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `module_ name` varchar(20) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `student _id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `module_ name`, `totalmarks`, `student _id`) VALUES
(1, 'Half Early Exam', 1080, 1),
(2, 'Half Early Exam', 1095, 2),
(3, 'Half Early Exam', 1100, 3),
(4, 'Half Early Exam', 1055, 4),
(5, 'Half Early Exam', 1125, 5),
(6, 'Half Early Exam', 1059, 6),
(7, 'Half Early Exam', 1165, 7),
(8, 'Half Early Exam', 1185, 8),
(9, 'Half Early Exam', 1195, 9),
(11, 'Final Exam', 1100, 1),
(12, 'Final Exam', 1155, 3),
(13, 'Final Exam', 1055, 2),
(14, 'Final Exam', 1140, 4),
(15, 'Final Exam', 1154, 5),
(16, 'Final Exam', 1165, 7),
(17, 'Final Exam', 1100, 9),
(18, 'Final Exam', 1157, 6),
(19, 'Final Exam', 1190, 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `mobile`) VALUES
(1, 'Md Ahnaf Uddin', 'South Rajashon,Savar', '01971324955'),
(2, 'Md Huzaifa Rahman', 'Middle Rajashon,Savar', '01971324988'),
(3, 'Md Mostafizur Rahman', 'South Rajshon,Savar', '01971324922'),
(4, 'Ajiya Nazakat Ali', 'Lahore,Pakistan', '01638149960'),
(5, 'Md Omar Faruk', 'Adeleaida,Australia', '01705444406'),
(6, 'Tasniya Rahman', 'Arapara,Savar', '01971324987'),
(7, 'Abdur Rahman Bin Kafi', 'Jedda,Saudi Arabia', '01705444407'),
(8, 'Amatur Rahman Binte Aqsa', 'Rafa,Palestina', '01705222206'),
(9, 'Md Elham Rahman', 'South Rajashon,Savar', '01971324985');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `student_delete` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM result WHERE result.student_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('abirm6133@gmail.com', 'abc1234'),
('mostafizur@gmail.com', 'abcd12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
