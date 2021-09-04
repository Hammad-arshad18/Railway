-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 07:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `railway_admin`
--

CREATE TABLE `railway_admin` (
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `railway_admin`
--

INSERT INTO `railway_admin` (`email`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `railway_booking`
--

CREATE TABLE `railway_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `from_city` varchar(50) NOT NULL,
  `to_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `railway_booking`
--

INSERT INTO `railway_booking` (`id`, `name`, `email`, `phone`, `cnic`, `from_city`, `to_city`) VALUES
(1, 'Hammad Arshad', 'hammad@gmail.com', '03328432678', 'xyz', 'Sialkot', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `railway_contact`
--

CREATE TABLE `railway_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `railway_contact`
--

INSERT INTO `railway_contact` (`id`, `email`, `name`, `details`) VALUES
(1, 'hammad.arshad672@gmail.com', 'Hammad Arshad', 'Hello Testing Module');

-- --------------------------------------------------------

--
-- Table structure for table `railway_post`
--

CREATE TABLE `railway_post` (
  `id` int(11) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `announcement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `railway_post`
--

INSERT INTO `railway_post` (`id`, `topic`, `announcement`) VALUES
(5, 'Hammad Arshad', 'Full Stack Web & Flutter Developer & React Native In Progress'),
(7, 'Wahab', 'Front End Developer');

-- --------------------------------------------------------

--
-- Table structure for table `railway_user`
--

CREATE TABLE `railway_user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(24) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cnic` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `railway_user`
--

INSERT INTO `railway_user` (`id`, `name`, `email`, `password`, `phone`, `cnic`) VALUES
(1, 'Hammad Arshad', 'hammad@gmail.com', '123456', '03328432678', 'xyz'),
(2, 'Hafiz Gohar', 'gohar@gmai.com', '123456', 'xxx', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `railway_booking`
--
ALTER TABLE `railway_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `railway_contact`
--
ALTER TABLE `railway_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `railway_post`
--
ALTER TABLE `railway_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `railway_user`
--
ALTER TABLE `railway_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cnic` (`cnic`),
  ADD KEY `cnic_2` (`cnic`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `railway_booking`
--
ALTER TABLE `railway_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `railway_contact`
--
ALTER TABLE `railway_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `railway_post`
--
ALTER TABLE `railway_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `railway_user`
--
ALTER TABLE `railway_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
