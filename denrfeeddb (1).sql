-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 10:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denrfeeddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divid` int(11) NOT NULL,
  `divcode` varchar(20) NOT NULL,
  `divname` varchar(100) NOT NULL,
  `divdes` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divid`, `divcode`, `divname`, `divdes`, `timestamp`) VALUES
(1, 'SECSIME', 'Administrative Division', 'N/A', '2018-12-18 03:18:20'),
(2, 'SECSIME', 'Finance Division', 'N/A', '2018-12-18 03:19:17'),
(3, '.', 'Legal Division', 'N/A', '2018-12-18 03:20:46'),
(4, 'SECSIME', 'Planning and Management Division', 'N/A', '2018-12-18 03:21:28'),
(5, '.', 'Technical Services', 'N/A', '2018-12-18 03:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sys_id` int(11) NOT NULL,
  `div_id` int(11) NOT NULL,
  `feedrate` int(11) NOT NULL,
  `feedcomment` varchar(100) NOT NULL,
  `feedsubj` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infosys`
--

CREATE TABLE `infosys` (
  `sysid` int(11) NOT NULL,
  `code_name` varchar(20) NOT NULL,
  `sysname` varchar(100) NOT NULL,
  `sysdescription` varchar(100) NOT NULL,
  `created` varchar(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infosys`
--

INSERT INTO `infosys` (`sysid`, `code_name`, `sysname`, `sysdescription`, `created`, `timestamp`) VALUES
(2, 'FARS', 'Financial Accounting Reporting System', 'N/A', 'N/A', '2018-12-13 05:59:10'),
(3, 'ELEMIS', 'Environmental Law Enforcement Management  Information', 'N/A', 'N/A', '2018-12-13 06:37:49'),
(4, '...', 'Project HOPE Information System', 'N/A', 'N/A', '2018-12-17 07:45:17'),
(5, 'EDATS', 'Enhanced Document Action Tracking System', 'N/A', 'N/A', '2018-12-13 06:01:40'),
(6, 'RMIS', 'Record Management Information System', 'N/A', 'N/A', '2018-12-13 06:02:01'),
(7, 'DPIS', 'DENR Personnel Information System', 'N/A', 'N/A', '2018-12-13 06:02:29'),
(8, 'TDRIS', 'Training and Development Records Information System', 'N/A', 'N/A', '2018-12-13 06:37:56'),
(9, 'LMIS', 'Legal Management Information System', 'N/A', 'N/A', '2018-12-13 06:03:15'),
(10, 'ATRIS', 'Accounting Tracking Reports Information System', 'N/A', 'N/A', '2018-12-13 06:03:50'),
(11, 'EDWP', 'External DENR Web Portal', 'N/A', 'N/A', '2018-12-13 06:04:14'),
(12, 'IDWP', 'Internal DENR Web Portal ', 'N/A', 'N/A', '2018-12-13 06:04:33'),
(13, 'IDWP', 'Internal DENR Web Portal', 'N/A', 'N/A', '2018-12-13 06:05:05'),
(14, 'Lib', 'Library System', 'N/A', 'N/A', '2018-12-13 06:05:21'),
(15, 'ERDIS', 'ENR Research and Development Information System', 'N/A', 'N/A', '2018-12-13 06:05:37'),
(16, 'ETGIS', 'ENR Technology Generation Information System', 'N/A', 'N/A', '2018-12-13 06:06:15'),
(17, 'M & E', 'ENR Monitoring and Evaluation', 'N/A', 'N/A', '2018-12-13 06:07:07'),
(18, 'SMIS', 'Stakeholder Management Information System', 'N/A', 'N/A', '2018-12-13 06:07:36'),
(19, 'LIS', 'Legislative Information System', 'N/A', 'N/A', '2018-12-13 06:08:05'),
(20, 'PaPIS', 'Plans and Programs Information System', 'N/A', 'N/A', '2018-12-13 06:08:35'),
(21, 'PSIS', 'Policy Services Information System', 'N/A', 'N/A', '2018-12-13 06:08:55'),
(22, 'PMIS', 'Project Management Information Service', 'N/A', 'N/A', '2018-12-13 06:09:15'),
(23, 'FSTS', 'Frontline Services and Transaction System', 'N/A', 'N/A', '2018-12-13 06:09:37'),
(24, 'ASRS', 'Automated Statistical Reporting System', 'N/A', 'N/A', '2018-12-13 06:09:58'),
(25, 'OMDR', 'Online Master Document Registry', 'N/A', 'N/A', '2018-12-13 06:10:19'),
(26, 'RBIIMS', 'River Basin Intregrated Information Management System', 'N/A', 'N/A', '2018-12-13 06:38:14'),
(27, 'PID-DIS', 'Public Information Division - Databank Information', 'N/A', 'N/A', '2018-12-13 06:11:21'),
(28, 'MRS', 'Management Reporting System', 'N/A', 'N/A', '2018-12-13 06:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `posid` int(11) NOT NULL,
  `postitle` varchar(50) NOT NULL,
  `posdes` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`posid`, `postitle`, `posdes`, `timestamp`) VALUES
(1, 'Samoke', 'Sample', '2018-12-17 01:05:47'),
(3, 'Programmer', 'A programmer, developer, dev, coder, or software e', '2018-12-17 15:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reportid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sys_id` int(11) NOT NULL,
  `reportstatus` int(11) NOT NULL,
  `reportcateg` int(11) NOT NULL,
  `reportcomment` varchar(100) DEFAULT NULL,
  `reportimg` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reportid`, `user_id`, `sys_id`, `reportstatus`, `reportcateg`, `reportcomment`, `reportimg`, `timestamp`) VALUES
(1, 4, 3, 1, 1, 'Lorem Ipsum', '', '2018-12-18 01:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `secid` int(11) NOT NULL,
  `secname` varchar(100) NOT NULL,
  `div_id` int(11) NOT NULL,
  `secdes` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`secid`, `secname`, `div_id`, `secdes`, `timestamp`) VALUES
(1, 'Cashier Section', 1, 'n/a', '2018-12-18 03:38:10'),
(2, 'General Service Section', 1, '...', '2018-12-18 03:43:18'),
(3, 'Records Unit', 1, '...', '2018-12-18 03:43:34'),
(4, 'Human Resource Development Section', 1, '...', '2018-12-18 03:43:57'),
(5, 'Personnel Section', 1, '...', '2018-12-18 03:44:19'),
(6, 'Procurement Section', 1, '...', '2018-12-18 03:45:40'),
(7, 'Budget and Accounting Section', 2, '...', '2018-12-18 03:46:19'),
(8, 'Planning and Programming Section', 4, '...', '2018-12-18 03:46:55'),
(9, 'Monitoring and Evaluation Section', 4, '...\r\n', '2018-12-18 03:47:25'),
(10, 'Regional Information Communication Technology', 4, '...', '2018-12-18 03:48:08'),
(11, 'Conservation and Development Division', 5, '...', '2018-12-18 03:48:37'),
(12, 'Enforcement Division', 5, '...', '2018-12-18 03:49:07'),
(13, 'Licenses, Patents and Deeds Division', 5, '...', '2018-12-18 03:49:44'),
(14, 'Surveys and Mapping Division', 5, '...', '2018-12-18 03:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` int(11) NOT NULL,
  `accstatus` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`id`, `username`, `password`, `type`, `accstatus`, `timestamp`) VALUES
(1, 'admin', '', 1, 1, '2018-12-18 04:15:23'),
(4, 'asdasd', 'a3dcb4d229de6fde0db5686dee47145d', 3, 0, '2018-12-17 15:48:55'),
(6, 'LoremIpsum', '68a8a7df567c08f6a8ff4f8efa8e1ae6', 2, 0, '2018-12-18 04:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `extname` varchar(20) NOT NULL,
  `div_id` int(11) NOT NULL,
  `pos_id` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `userimg` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `sname`, `fname`, `mname`, `extname`, `div_id`, `pos_id`, `gender`, `userimg`, `timestamp`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 1, 1, 'Male', '', '2018-12-18 04:14:09'),
(4, 'Jorolan', 'Jethro', 'Talavera', '', 2, 1, 'Male', '', '2018-12-17 15:48:55'),
(6, 'Lorem', 'Ipsum', 'Blyat', '', 5, 1, 'Female', '', '2018-12-18 04:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `infosys`
--
ALTER TABLE `infosys`
  ADD PRIMARY KEY (`sysid`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`posid`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`secid`);

--
-- Indexes for table `useracc`
--
ALTER TABLE `useracc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `divid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infosys`
--
ALTER TABLE `infosys`
  MODIFY `sysid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `posid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `secid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `useracc`
--
ALTER TABLE `useracc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
