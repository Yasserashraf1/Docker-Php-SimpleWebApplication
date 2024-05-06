-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Apr 27, 2024 at 05:40 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `Students_info`
--

CREATE TABLE `Students_info` (
  `ID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL DEFAULT '20',
  `CGPA` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Students_info`
--

INSERT INTO `Students_info` (`ID`, `name`, `age`, `CGPA`) VALUES
(22010136, 'Abdo Hesham', 20, 3),
(22010290, 'Wael Ahmed', 20, 3),
(22010364, 'Abdo Yousry', 20, 3),
(22010409, 'Yasser Gaber', 20, 3),
(221443166, 'Hatem Mohammed', 20, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Students_info`
--
ALTER TABLE `Students_info`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
