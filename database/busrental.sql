-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 10:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `a_email`, `a_name`, `password`) VALUES
(1, 'omkarvaidya0504@gmail.com', 'Omkar', 'omkarvaidya');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `p_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `vehicel` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `mobile-no` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`p_id`, `u_id`, `vehicel`, `name`, `email`, `sdate`, `edate`, `mobile-no`, `address`, `amount`) VALUES
(26, 1, 'Force Traveller 3350', '', 'omkar@123', '2023-04-15', '2023-04-22', 8806061235, 'mumbai 411001', 14000),
(27, 6, 'Force Traveller 3700', '', 'vaidya@123', '2023-04-17', '2023-04-21', 8945612301, 'shahunagar', 16000),
(28, 6, 'Tata Starbus LP 407 CNG', '', 'payalvaidya@9987', '2023-04-17', '2023-04-20', 7891236540, '', 15900),
(29, 6, 'Tata Starbus LP 407 CNG', '', 'payalvaidya@9987', '2023-04-17', '2023-04-20', 7891236540, '', 15900),
(33, 6, 'Force Traveller 3350', '', 'payalvaidya@9987', '2023-04-18', '2023-04-22', 8806061123, 'shahunagar', 8000),
(34, 6, 'Force Traveller 3700', '', 'mayurchingpong@86852', '2023-04-19', '2023-04-27', 8806565055, 'ravet', 32000),
(35, 6, 'Force Traveller 3700', '', 'mayurchingpong@86852', '2023-04-19', '2023-04-27', 8806565055, 'ravet', 32000),
(36, 6, 'Tata LPO 10.2', '', 'payalvaidya@9987', '2023-04-27', '2023-04-28', 9412568749, 'ravet', 6890),
(37, 6, 'Force Traveller 3350', 'omkar vaidya', 'payalvaidya@9987', '2023-04-21', '2023-04-22', 9905054568, 'pune', 2000),
(38, 6, 'Force Traveller 4020 Super', 'chingpong', 'mayurchingpong@86852', '2023-04-22', '2023-04-26', 7806936398, 'china', 24000);

-- --------------------------------------------------------

--
-- Table structure for table `company-name`
--

CREATE TABLE `company-name` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company-name`
--

INSERT INTO `company-name` (`c_id`, `c_name`) VALUES
(1, 'O&M');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `feedback`) VALUES
('omkmar@123', 'hello!'),
('omkmar@123', 'hello!'),
('omkmar@123', 'hello!'),
('omkar@12334', 'nice product!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_mname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_email`, `u_fname`, `u_mname`, `u_lname`, `password`) VALUES
(1, 'omkar@123', 'omkar', '', '', 'Omkar@12345'),
(2, 'payal@123', 'payal', '', '', 'Payal@123'),
(4, 'arjun@123', 'arjun', '', '', 'Arjun@111'),
(5, 'mayur@12345', 'Mayur', '', '', 'Mayur@1234'),
(6, 'omkmar@123', 'omkar', 'sanjay', 'vaidya', 'Omkar@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `company-name`
--
ALTER TABLE `company-name`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `company-name`
--
ALTER TABLE `company-name`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
