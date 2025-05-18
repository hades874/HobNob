-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 09:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hobnob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `PImage` varchar(200) NOT NULL,
  `PCategory` varchar(100) NOT NULL,
  `PQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `PName`, `PPrice`, `PImage`, `PCategory`, `PQuantity`) VALUES
(10, 'Black Jeans', '3000', 'Uploadimage/12.jpg', 'Fashion', 20),
(12, 'Pink Shades', '1000', 'Uploadimage/9.jpg', 'Fashion', 12),
(13, 'Brown Sandel', '500', 'Uploadimage/5.jpg', 'Fashion', 22),
(19, 'Black Bag', '2000', 'Uploadimage/black bag.jpg', 'Fashion', 15),
(20, 'White Sneakers', '3000', 'Uploadimage/white sneakers.jpg', 'Fashion', 18),
(21, 'Lenovo Laptop', '80000', 'Uploadimage/lenovo laptop.jpg', 'Electronics', 6),
(22, 'Rick N Morty Hat', '1000', 'Uploadimage/rick n morty hat.jpg', 'Fashion', 8),
(23, 'Xiaomi 12 Pro', '50000', 'Uploadimage/xiaomi phone.jpg', 'Electronics', 4),
(24, 'Vivo V27', '55000', 'Uploadimage/vivo phone.jpg', 'Electronics', 2),
(25, 'Blue Bed Sheet', '3000', 'Uploadimage/bedsheet.jpg', 'Home', 5),
(26, 'Fejka Artificial Plants', '2000', 'Uploadimage/fake plants.jpg', 'Home', 6),
(27, 'Cloth Storage Box', '500', 'Uploadimage/storage box.jpg', 'Home', 8),
(28, 'Pencil Bag', '500', 'Uploadimage/Pencil Bag.jpg', 'Stationery', 6),
(29, 'Color Pencil Set', '2000', 'Uploadimage/color pencil set.jpg', 'Stationery', 4),
(30, 'Water Color Set', '1000', 'Uploadimage/water color set.jpg', 'Stationery', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `UserName`, `Email`, `Number`, `Password`) VALUES
(1, 'farabi', 'farabi@gmail.com', '2313123', '12345'),
(3, 'Tanjuma', 'tanjuma@gmail.com', '0192345876', 'tanjuma'),
(7, 'maisha', 'maisha@gmail.com', '01318603524', 'hasanfarabi'),
(9, 'farabi01', 'farabi01@gmail.com', '01234567890', '$2y$10$0o72eV24Vo4GOPVvBLFLoO1YgQuJISXsmecxiRPPzKmUhJRzQ91pO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
