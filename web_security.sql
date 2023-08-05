-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 11:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_security`
--
DROP DATABASE IF EXISTS `web_security`;
CREATE DATABASE IF NOT EXISTS `web_security` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `web_security`;

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

DROP TABLE IF EXISTS `account_details`;
CREATE TABLE `account_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `account_no` bigint(10) NOT NULL,
  `balance` bigint(15) NOT NULL,
  `transaction_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `first_name`, `last_name`, `email`, `phone`, `dateofbirth`, `account_no`, `balance`, `transaction_id`) VALUES
(1, 'Harsh', 'Ramwani', 'harshramwani5@gmail.com', 9978676386, '2003-06-06', 8357053400, 49900, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `login_customer`
--

DROP TABLE IF EXISTS `login_customer`;
CREATE TABLE `login_customer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account_no` bigint(10) NOT NULL,
  `balance` bigint(15) NOT NULL,
  `transaction_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_customer`
--

INSERT INTO `login_customer` (`id`, `username`, `password`, `email`, `account_no`, `balance`, `transaction_id`) VALUES
(1, 'HarshRamwani', 'Ramwani8740', 'harshramwani5@gmail.com', 8357053400, 50000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

DROP TABLE IF EXISTS `login_user`;
CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Harsh', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE `transaction_details` (
  `id` int(11) NOT NULL,
  `account_no` bigint(10) NOT NULL,
  `transaction_amount` bigint(15) NOT NULL,
  `account_balance` bigint(15) NOT NULL,
  `transaction_id` bigint(12) NOT NULL,
  `transaction_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `account_no`, `transaction_amount`, `account_balance`, `transaction_id`, `transaction_type`) VALUES
(1, 8357053400, 100, 49900, 18731085481, 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_customer`
--
ALTER TABLE `login_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_customer`
--
ALTER TABLE `login_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
