-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 02:29 PM
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
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `status`) VALUES
(4, 'fffrtyh', 'dfgdf@gmail.com', '43534', 'fsdgdsg', 1),
(5, 'dgfd', 'dfgfd@gmail.com', '4353', 'fgfdg', 1),
(6, 'gh', 'fdgfd@gmail.com', '34534', 'erfgdsg', 1),
(7, 'dfgdf', 'dfg@gmail.com', '43543', 'rt534', 1),
(8, 'sdfds', 'sdfds@gmail.com', 'sdfgsd', 'sdfds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_doner`
--

CREATE TABLE `blood_doner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_doner`
--

INSERT INTO `blood_doner` (`id`, `name`, `father_name`, `address`, `email`, `password`, `phone`, `blood_group`, `status`) VALUES
(3, 'dfgfd', 'dfgd', 'dfsdf', 'gfds@gmail.com', 'dsfsd', 'fsdf', 'AB-', 0),
(4, 'ffff', 'fffff', 'fffff', 'ffff@gmail.com', 'qqqq', 'fsdfsd', 'AB-', 0),
(5, 'fgd', 'dfgd', 'fgfds', 'alaudin@gmail.com', '3454', '3453', 'B-', 0),
(6, 'gfdg', 'fgds', 'aaaa', 'fgdfg@gmail.com', '4353', '5345', 'AB-', 0),
(7, 'tgfd', 'dsfgds', 'dsfgdf', 'dfgd@gmail.com', 'dfgdfg', 'sdfsdf', 'B+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exchange_blood_group`
--

CREATE TABLE `exchange_blood_group` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `exchange_blood_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_blood_group`
--

INSERT INTO `exchange_blood_group` (`id`, `name`, `father_name`, `address`, `email`, `password`, `phone`, `blood_group`, `exchange_blood_group`) VALUES
(1, 'eee', 'eee', 'eee', 'eee@gmail.com', '3432', 234234, 'B+', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_doner`
--
ALTER TABLE `blood_doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_blood_group`
--
ALTER TABLE `exchange_blood_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_doner`
--
ALTER TABLE `blood_doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exchange_blood_group`
--
ALTER TABLE `exchange_blood_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
