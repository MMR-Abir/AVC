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
-- Database: `newevidence`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Walton', 'Soutg Rajashon,Savar', '01638149960'),
(2, 'Singer', 'Adeleida,Australia', '01971234588'),
(3, 'Toyota', 'Tokiyo,Japan', '.01925931365'),
(4, 'Sony', 'Berlin,Germany', '01971234588'),
(5, 'Vivo', 'Rome,Italy', '.01925931365'),
(6, 'Samsang', 'Seoul,South Korea', '01971234588'),
(7, 'Xiaomi', 'Beiging,Chaina', '01638149960');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `manufacturer_delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE product.manufacturer_id= old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Walton Fridge 3L2', 2500, 1),
(2, 'Walton Tv 32 Inch', 25000, 1),
(3, 'Singer Tv 43 Inch', 1000, 2),
(4, 'Singer Runner Honda', 25000, 2),
(5, 'Toyota SUV Car', 4500, 3),
(6, 'Toyota Land Crusier', 95000, 3),
(7, 'Sony Camera Duel Lens T2', 75000, 4),
(8, 'Sony Xperia SmartPhone', 3500, 4),
(9, 'Vivo Smart Phone', 4500, 5),
(10, 'Vivo Washing Machine', 85000, 5),
(11, 'samsang Tv', 52000, 6),
(12, 'Samsang Fridge', 85444, 6),
(13, 'Xiaomi 13', 4500, 7),
(14, 'Xiaomi 13 Pro', 4400, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_price_above_5000`
-- (See below for the actual view)
--
CREATE TABLE `product_price_above_5000` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `product_price_above_5000`
--
DROP TABLE IF EXISTS `product_price_above_5000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_price_above_5000`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
