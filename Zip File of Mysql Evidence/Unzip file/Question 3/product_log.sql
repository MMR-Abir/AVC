-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 10:12 PM
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
-- Database: `mycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_log`
--

CREATE TABLE `product_log` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `action` varchar(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_log`
--

INSERT INTO `product_log` (`id`, `name`, `action`, `time`) VALUES
(1, 'Xiaomi 13', '', '2024-08-28 01:52:15'),
(2, 'Xiaomi 13 Pro', '', '2024-08-28 01:52:15'),
(3, 'Xiaomi 13', '', '2024-08-28 01:54:21'),
(4, 'Xiaomi 13 Pro', '', '2024-08-28 01:54:24'),
(5, 'Ford Fiestaso', '', '2024-08-28 01:55:28'),
(6, 'Honda CBR1000RR', 'UPDATE', '2024-08-28 02:01:36'),
(7, 'Ford Fiestaso', 'UPDATE', '2024-08-28 02:10:05'),
(8, 'Iphone 8 plus', 'DELETE', '2024-08-28 02:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_log`
--
ALTER TABLE `product_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_log`
--
ALTER TABLE `product_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
