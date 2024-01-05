-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porschedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `modelId` int(11) NOT NULL,
  `modelName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`modelId`, `modelName`) VALUES
(1, '718'),
(2, '911'),
(3, '718'),
(4, '911'),
(5, 'taycan'),
(6, 'macan'),
(7, 'panamera'),
(8, 'canyenne');

-- --------------------------------------------------------

--
-- Table structure for table `productdb`
--

CREATE TABLE `productdb` (
  `productId` int(11) NOT NULL,
  `productModel` varchar(20) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productPrice` varchar(10) NOT NULL,
  `productImage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productdb`
--

INSERT INTO `productdb` (`productId`, `productModel`, `productName`, `productPrice`, `productImage`) VALUES
(4, '718', 'Cayman', '$ 69,950', ''),
(5, '718', 'Boxster', '$ 62,600', ''),
(6, '718', 'Cayman Style Edition', '$ 106,500', ''),
(7, '718', 'Boxster Style Edition', '$ 84,180', ''),
(8, '718', 'Cayman S', '$ 80,300', ''),
(9, '718', 'Boxster S', '$ 82,400', ''),
(10, '718', 'Cayman GTS 4.0', '$88,150', ''),
(11, '718', 'Boxster S', '$ 82,400', ''),
(12, '718', 'Cayman GTS 4.0', '$88,150', ''),
(13, '718', 'Boxster GTS 4.0', '$97,300', ''),
(14, '718', 'Cayman GT4 RS', '$141,700', ''),
(15, '911', 'Carrera', '$116,050', ''),
(16, '911', 'Carrera T', '$118,050', ''),
(17, '911', 'Carrera S', '$131,895', ''),
(18, '911', 'Targa 4', '$126,200', ''),
(19, '911', 'Targa 4S', '$152,050', ''),
(20, '911', 'Carrera T', '$118,050', ''),
(21, 'Taycan', 'Taycan 4S', '$111,700', ''),
(22, 'Taycan', 'Taycan Turbo S', '$194,900', ''),
(23, 'Taycan', 'Taycan 4S Sport Turismo', '$118,200', ''),
(24, 'Panamera', 'Panamera', '$88,550', ''),
(25, 'Panamera', 'Panamera 4', '$106,900', ''),
(26, 'Panamera', 'Panamera Turbo E-Hybrid', '$204,259', ''),
(27, 'Macan', 'Macan T', '$66,500', ''),
(28, 'Macan', 'Macan S', '$72,500', ''),
(29, 'Macan', 'Macan GTS', '$86,500', ''),
(30, 'Canyenne', 'Cayenne E-Hybrid', '$91,500', ''),
(31, 'Canyenne', 'Cayenne S E-Hybrid', '$99,500', ''),
(32, 'Canyenne', 'Cayenne S', '$95,500', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`userId`, `username`, `password`, `email`, `is_admin`) VALUES
(3, 'kha', '65ded5353c5ee48d0b7d48c591b8f430', '21h1120041@ut.edu.vn', 1),
(4, 'trong', '202cb962ac59075b964b07152d234b70', '21h1120051@ut.edu.vn', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`modelId`);

--
-- Indexes for table `productdb`
--
ALTER TABLE `productdb`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `modelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productdb`
--
ALTER TABLE `productdb`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
