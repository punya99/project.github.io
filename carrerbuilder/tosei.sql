-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2021 at 10:52 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tosei`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `url`, `created_at`) VALUES
(9, 'uploads/banner-2.psd new.jpg', '2020-09-14 05:52:05'),
(11, 'uploads/sbs.jpg', '2020-09-14 05:54:07'),
(13, 'uploads/USB GAUGES_Page_1.jpg', '2020-10-07 05:24:08'),
(14, 'uploads/DELCOMXD1.jpg', '2020-10-07 05:27:22'),
(15, 'uploads/USB GAUGES_Page_1.jpg', '2020-10-14 07:08:22'),
(16, 'uploads/DELCOMXD1.jpg', '2020-10-14 07:09:10'),
(17, 'uploads/schmitt-balancing-system-product-banner-sb-2000.jpg', '2020-10-22 05:59:20'),
(18, 'uploads/schmitt-balancing-system-product-banner-sb-2000.jpg', '2020-10-22 06:00:56'),
(19, 'uploads/Window panel.jpg', '2021-02-16 06:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `url`, `created_at`) VALUES
(1, 'uploads/newsevents/event_1.jpg', '2019-09-03 09:50:40'),
(2, 'uploads/newsevents/event_2.jpg', '2019-09-03 09:51:07'),
(3, 'uploads/newsevents/event_3.jpg', '2019-09-03 09:51:30'),
(4, 'uploads/newsevents/event_4.jpg', '2019-09-03 09:51:46'),
(5, 'uploads/newsevents/event_5.jpg', '2019-09-03 09:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_calendar`
--

CREATE TABLE `inhouse_calendar` (
  `id` int(11) NOT NULL,
  `datefrom1` varchar(50) DEFAULT NULL,
  `dateto1` varchar(50) DEFAULT NULL,
  `datefrom2` varchar(50) DEFAULT NULL,
  `dateto2` varchar(50) DEFAULT NULL,
  `datefrom3` varchar(50) DEFAULT NULL,
  `dateto3` varchar(50) DEFAULT NULL,
  `month1` varchar(50) DEFAULT NULL,
  `month2` varchar(50) DEFAULT NULL,
  `month3` varchar(50) DEFAULT NULL,
  `datefrom4` varchar(50) DEFAULT NULL,
  `dateto4` varchar(50) DEFAULT NULL,
  `datefrom5` varchar(50) DEFAULT NULL,
  `dateto5` varchar(50) DEFAULT NULL,
  `datefrom6` varchar(50) DEFAULT NULL,
  `dateto6` varchar(50) DEFAULT NULL,
  `datefrom7` varchar(50) DEFAULT NULL,
  `dateto7` varchar(50) DEFAULT NULL,
  `month4` varchar(50) DEFAULT NULL,
  `month5` varchar(50) DEFAULT NULL,
  `month6` varchar(50) DEFAULT NULL,
  `month7` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inhouse_calendar`
--

INSERT INTO `inhouse_calendar` (`id`, `datefrom1`, `dateto1`, `datefrom2`, `dateto2`, `datefrom3`, `dateto3`, `month1`, `month2`, `month3`, `datefrom4`, `dateto4`, `datefrom5`, `dateto5`, `datefrom6`, `dateto6`, `datefrom7`, `dateto7`, `month4`, `month5`, `month6`, `month7`, `updated_at`) VALUES
(1, '2020-06-10', '2020-06-03', '2020-06-24', '2020-06-10', '2020-07-30', '2020-08-27', '2021-08', '2020-07', '2020-08', '2020-06-24', '2020-06-25', '2020-06-22', '2020-06-28', '2020-06-22', '2020-06-28', '2020-06-30', '2020-09-23', '2020-09', '2020-10', '2020-11', '2020-12', '2020-07-27 04:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `online_calendar`
--

CREATE TABLE `online_calendar` (
  `id` int(11) NOT NULL,
  `datefrom1` varchar(50) DEFAULT NULL,
  `dateto1` varchar(50) DEFAULT NULL,
  `datefrom2` varchar(50) DEFAULT NULL,
  `dateto2` varchar(50) DEFAULT NULL,
  `datefrom3` varchar(50) DEFAULT NULL,
  `dateto3` varchar(50) DEFAULT NULL,
  `month1` varchar(50) DEFAULT NULL,
  `month2` varchar(50) DEFAULT NULL,
  `month3` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_calendar`
--

INSERT INTO `online_calendar` (`id`, `datefrom1`, `dateto1`, `datefrom2`, `dateto2`, `datefrom3`, `dateto3`, `month1`, `month2`, `month3`, `updated_at`) VALUES
(1, '2021-10-01', '2021-03-31', '2020-06-24', '2020-06-10', '2020-07-30', '2020-11-25', '2020-10', '2020-11', '2020-12', '2020-09-16 05:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `created_at`) VALUES
(1, 'Admin', 'admin', '12345', '2019-07-31 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inhouse_calendar`
--
ALTER TABLE `inhouse_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_calendar`
--
ALTER TABLE `online_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inhouse_calendar`
--
ALTER TABLE `inhouse_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `online_calendar`
--
ALTER TABLE `online_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
