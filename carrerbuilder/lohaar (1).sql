-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2021 at 04:41 AM
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
-- Database: `lohaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `cliet_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `Firm_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daily_allowance`
--

CREATE TABLE `daily_allowance` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `da` longtext NOT NULL,
  `ta` longtext NOT NULL,
  `total_allowance` longtext NOT NULL,
  `summary` varchar(223) DEFAULT NULL,
  `other_axpances` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_allowance`
--

INSERT INTO `daily_allowance` (`id`, `userid`, `da`, `ta`, `total_allowance`, `summary`, `other_axpances`, `image`, `created_on`) VALUES
(4, 2, '20', '10', '60.0', 'vsgshsbzh', '30', '1582001530.png', '2020-04-07'),
(5, 2, '20', '10', '60.0', 'babsbsbs', '30', '1582004896.png', '2020-02-18'),
(6, 2, '9494', '64', '10204.0', '', '646', '1582005662.png', '2020-02-18'),
(7, 2, '60', '10', '140.0', 'bshzbbz', '70', '1582005671.png', '2020-02-18'),
(8, 2, '32', '32', '96.0', 'hagagsv', '32', '1582008868.png', '2020-02-18'),
(9, 2, '11', '11', '60.0', '', '41', NULL, '2020-10-01'),
(10, 2, '10', '10', '64.0', 'hahahhah', '44', NULL, '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_mobile` varchar(50) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `is_deleted` enum('0','1') DEFAULT '1' COMMENT '0=deleted,1=active',
  `pin_code` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_mobile`, `emp_email`, `Address`, `joining_date`, `city`, `state`, `is_deleted`, `pin_code`, `created_at`) VALUES
(1, 'Ankit', '8505955033', 'ankit@gmail.com', 'Ghaziabad', NULL, 'Ghaziabad', 'Uttar Pradesh', '1', '201002', '2019-11-16 00:45:06'),
(2, 'Ankit', '7991137721', 'pankaj@gmail.com', 'Ghaziabad', NULL, 'Ghaziabad', 'Uttar Pradesh', '1', '201002', '2019-11-16 00:45:06'),
(3, 'pankaj', '9876543210', 'pabkaj@gmail.ckm', 'abc', NULL, 'ghaziabad', 'uttar pradesh', '1', '201002', '2020-04-07 01:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `order_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_mobile` varchar(250) NOT NULL,
  `meeting_status` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `metting_date` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `location` longtext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_form`
--

INSERT INTO `order_form` (`order_id`, `emp_id`, `client_name`, `client_mobile`, `meeting_status`, `company_name`, `pin_code`, `metting_date`, `remark`, `image`, `location`, `created_at`) VALUES
(1, 2, 'Lohaar', '7982553565', 'Done', 'Lohaar', '201009', '2020-01-17', 'Call after 17th', '', '408-409, Ansal Sumedha RDC, Block 1, P & T Colony, Raj Nagar, Ghaziabad, Uttar Pradesh 201002, India', '2020-01-03 00:17:15'),
(2, 2, 'Ankit', '9764646646', 'Good', 'Webads', '649454', '2020-01-22', 'Everything is good .', '', 'II -C, Basant Road, Nehru Nagar, Pocket E, Nehru Nagar II, Nehru Nagar, Ghaziabad, Uttar Pradesh 201001, India', '2020-01-21 23:45:01'),
(3, 5, 'Ashutosh', '9711905804', 'Final', 'Webads', '201001', '2020-01-28', 'Good', '', 'II -C, Basant Road, Nehru Nagar, Pocket E, Nehru Nagar II, Nehru Nagar, Ghaziabad, Uttar Pradesh 201001, India', '2020-01-21 23:50:01'),
(4, 2, 'Hahshh', '9464646446', 'Havsgshgs', 'Babsbhs', '646466', '2020-02-17', 'Zbbsbsbsbhsj', '1581925241.png', 'II -C, Basant Road, Nehru Nagar, Pocket E, Nehru Nagar II, Nehru Nagar, Ghaziabad, Uttar Pradesh 201001, India', '2020-02-17 00:40:41'),
(5, 2, 'Heena', '6464646644', 'Hahhahaggags', 'Bshsggsgsggs', '616466', '2020-02-17', 'Gsgsgsggsh', '1581933672.png', 'II -C, Basant Road, Nehru Nagar, Pocket E, Nehru Nagar II, Nehru Nagar, Ghaziabad, Uttar Pradesh 201001, India', '2020-02-17 03:01:12'),
(6, 2, 'Hahsha', '7694646477', 'Vzvvzvzz', 'Vvzbbzbz', '766464', '2020-02-18', 'Vsvsvbshsbbs', '1582007311.png', 'II -C, Basant Road, Nehru Nagar, Pocket E, Nehru Nagar II, Nehru Nagar, Ghaziabad, Uttar Pradesh 201001, India', '2020-02-17 23:28:31'),
(7, 2, 'Hahshsh', '6494994664', 'Bzbsbbsbshs', 'Hsbsbbsbs', '469494', '2020-02-18', 'Sbbsbsbjs', '1582008800.png', 'II -C, Basant Road, Nehru Nagar, Pocket E, Nehru Nagar II, Nehru Nagar, Ghaziabad, Uttar Pradesh 201001, India', '2020-02-17 23:53:20'),
(8, 2, 'Demo', '9090909090', 'Ok', 'Gh', '658965', '2020-03-20', 'Ctybhtxyvyxgcgc', '1583926270.png', '', '2020-03-11 04:31:12'),
(9, 2, 'Demo', '9090909090', 'Ok', 'Gh', '658965', '2020-03-20', 'Ctybhtxyvyxgcgc', '1583926281.png', '', '2020-03-11 04:31:21'),
(10, 2, 'Demo', '9088562312', 'Oky', 'Demo', '879644', '2020-03-26', 'Demo', '1583926354.png', '', '2020-03-11 04:32:34'),
(11, 2, 'Devesh', '9865326598', 'Ghyu', 'Ghyuio', '852369', '2020-03-12', 'Will meet in next time haksjvdnaksijsksjsbsbsbsbnsb bshjsnsjd', '1583926423.png', '', '2020-03-11 04:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `request_payment`
--

CREATE TABLE `request_payment` (
  `req_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `credit_amount` varchar(50) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_payment`
--

INSERT INTO `request_payment` (`req_id`, `user_id`, `title`, `amount`, `credit_amount`, `date`) VALUES
(1, 2, 'Add Amount', '120', NULL, '2020-02-18 03:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('1','2','3') DEFAULT NULL COMMENT '1=admin,2=sales,3=accountant',
  `address` text NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `status` enum('1','0') DEFAULT '1',
  `firebase_id` varchar(255) DEFAULT NULL,
  `user_status` enum('1','0') DEFAULT '1' COMMENT '1=online,0=offline',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `mobile_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emp_id`, `username`, `emp_name`, `password`, `user_type`, `address`, `pincode`, `gst_no`, `status`, `firebase_id`, `user_status`, `created_at`, `mobile_status`) VALUES
(1, 0, '9456262412', 'Ashutosh', '9456262412', '1', 'admin', '', '', '1', '', '1', '2019-07-04 11:38:00', '1'),
(2, 1, '8505955033', 'Ankit', '8505955033', '2', 'Ghaziabad', '201002', '', '1', '', '1', '2019-11-16 00:45:06', '1'),
(3, 2, '7991137721', 'Pankaj', '7991137721', '3', 'Ghaziabad', '201002', '', '1', '', '1', '2019-11-16 00:45:06', '1'),
(4, 3, '9876543210', 'pankaj', '9876543210', '2', 'abc', '201002', '', '1', NULL, '1', '2020-04-07 01:55:14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_amount`
--

CREATE TABLE `user_amount` (
  `ua_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_amount`
--

INSERT INTO `user_amount` (`ua_id`, `user_id`, `amount`, `date`) VALUES
(2, 2, '4100', '2020-02-18 04:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE `version` (
  `id` int(255) NOT NULL,
  `version` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`id`, `version`) VALUES
(1, '1.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`cliet_id`);

--
-- Indexes for table `daily_allowance`
--
ALTER TABLE `daily_allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `request_payment`
--
ALTER TABLE `request_payment`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_amount`
--
ALTER TABLE `user_amount`
  ADD PRIMARY KEY (`ua_id`);

--
-- Indexes for table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `cliet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_allowance`
--
ALTER TABLE `daily_allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request_payment`
--
ALTER TABLE `request_payment`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_amount`
--
ALTER TABLE `user_amount`
  MODIFY `ua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `version`
--
ALTER TABLE `version`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
