-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 06:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(255) NOT NULL,
  `dept_num` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_leader` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dept_num`, `dept_name`, `dept_leader`) VALUES
(16, '30', 'General Motors Corporation', 'shahin sheikh'),
(21, '5', 'bsc', 'dhshi'),
(24, '100', 'Fahim', 'Siyam'),
(25, '500', 'Toyota', 'Fahim'),
(26, '500', 'Toyota', 'Faysal'),
(27, '80', 'vehicales', 'ulo');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(255) NOT NULL,
  `empid` varchar(255) NOT NULL,
  `empname` varchar(255) NOT NULL,
  `emprole` varchar(255) NOT NULL,
  `empdept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `empid`, `empname`, `emprole`, `empdept`) VALUES
(25, '100', 'Fahim Faysal Siyam', 'Software', 'Engineer'),
(27, '500', 'fahim', 'Architecture', 'Architect'),
(30, '20', 'Anik islam', 'Software', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeat_password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `deserve` varchar(255) NOT NULL,
  `recent_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `email`, `password`, `repeat_password`, `full_name`, `street_address`, `city`, `zip`, `deserve`, `recent_project`) VALUES
(6, 'faysalsiyam@gmail.com', '123456', '123456', 'Fahim Faysal Siyam', 'Dhaka', 'Dhaka', '1236', 'I am good', 'vvxcvxc'),
(7, 'ras@gmail.com', '123456', '123456', 'Fahim Faysal Siyam', 'Dhaka', 'Dhaka', '1236', 'sdfdsf', 'asdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`, `usertype`) VALUES
(27, 'faysalsiyam@gmail.com', 'Fahim Faysal Siyam', '123456', 'Admin'),
(32, 'king@gmail.com', 'king01', '123456', 'Admin'),
(33, 'queen@gmail.com', 'queen', '123456789', 'Admin'),
(34, 'colt@gmail.com', 'colt', '123456', 'Admin'),
(35, 'masum@gmail.com', 'masum', '123456', 'Employye'),
(36, 'rased@gmail.com', 'rased', '123456', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `key` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('me@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa64b89027', '2020-08-19 09:30:29'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745d3b697213c', '2020-08-19 14:15:51'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745cdc341f3e1', '2020-08-19 14:17:46'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f647452ce7ccf8ec', '2020-08-19 14:21:16'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745e844f9e409', '2020-08-19 14:22:26'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f647457663aff0e3', '2020-08-19 14:22:56'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f647453dc782705f', '2020-08-19 14:26:28'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ba134103d6', '2020-08-21 13:33:42'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa72766819', '2020-08-21 18:32:48'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745d0bf74bfc2', '2020-08-22 21:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `forgot_pass_identity` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `forgot_pass_identity`, `created`, `modified`, `status`) VALUES
(1, 'shahin', 'sheikh', 'shahinsheikh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01786452354', '32c093aa446fc1ab0c11d2755641e6de', '2020-08-17 12:00:42', '2020-08-17 12:02:35', '1'),
(2, 'shahin', 'sheikh', 'bevorshahin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01786452354', '4611713befee22c3a827df441396cc17', '2020-08-17 12:05:17', '2020-08-17 12:05:36', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
