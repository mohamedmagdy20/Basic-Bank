-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 02:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacisbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `balance` double NOT NULL,
  `num_balance` int(11) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`, `num_balance`, `phone`) VALUES
(1, 'Jone', 'jone@gmail.com', 17000, 1223, '106601835'),
(2, 'Amanda', 'Amanda@gmail.com', 59105, 1221, '10448620'),
(3, 'Mark', 'Mark@gmail.com', 8000, 1222, '104869620'),
(4, 'Kalad', 'Kalad@gmail.com', 85000, 1226, '184869620'),
(5, 'Belal', 'Belal@gmail.com', 5000, 1227, '184869620'),
(6, 'Ramy', 'Ramy@gmail.com', 455000, 1227, '184889620'),
(7, 'Azza', 'Azza@gmail.com', 557000, 1228, '184889620'),
(8, 'Welson', 'Azza@gmail.com', 7000, 1228, '17496620');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `resiver_name` varchar(200) NOT NULL,
  `sender_num` int(11) NOT NULL,
  `resever_num` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `date`, `sender_name`, `resiver_name`, `sender_num`, `resever_num`, `amount`) VALUES
(13, '2022-02-09', 'Ramy', 'Azza', 1227, 1228, 1000),
(14, '2022-02-10', 'Jone', 'Belal', 1223, 1227, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
