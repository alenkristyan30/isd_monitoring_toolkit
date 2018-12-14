-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 03:49 AM
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
(2, 'IT', 'Information Technology', 'INFORMATION AND TECHNOLOGY ', '2018-12-14 01:04:30'),
(3, 'BM', 'BUSINESS MANAGEMENT', 'ACCOUNTING , MANAGER', '2018-12-14 01:05:02'),
(4, 'TM', 'TOURISM MANAGEMENT', 'EROPLANO', '2018-12-14 01:05:42'),
(5, 'HRM', 'HOTEL AND RESTO. MANAGEMENT', 'KAIN LUTO ', '2018-12-14 01:06:42'),
(6, 'COE ', 'COMPUTER ENGINEER', 'ENGINEERING', '2018-12-14 01:07:14'),
(7, 'PH', 'PHILIPPINES ', 'FILIPINO , TAGALOG , BISAYA , ILOCAN at iba pa', '2018-12-14 01:07:55'),
(8, 'ISD ', 'INFORMATION SYSTEM DEPARTMENT', 'DENR - INFORMATION SYSTEM DEPARTMENT ', '2018-12-14 01:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `infosys`
--

CREATE TABLE `infosys` (
  `id` int(11) NOT NULL,
  `code_name` varchar(20) NOT NULL,
  `sysname` varchar(100) NOT NULL,
  `sysdescription` varchar(100) NOT NULL,
  `created` varchar(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infosys`
--

INSERT INTO `infosys` (`id`, `code_name`, `sysname`, `sysdescription`, `created`, `timestamp`) VALUES
(2, 'FARS', 'Financial Accounting Reporting System', 'N/A', 'N/A', '2018-12-13 05:59:10'),
(3, 'ELEMIS', 'Environmental Law Enforcement Management  Information', 'N/A', 'N/A', '2018-12-13 06:37:49'),
(4, 'HOPE', 'Project HOPE Information System', 'N/A', 'N/A', '2018-12-13 06:01:21'),
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
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `gender` varchar(6) NOT NULL,
  `userimg` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divid`);

--
-- Indexes for table `infosys`
--
ALTER TABLE `infosys`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `divid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infosys`
--
ALTER TABLE `infosys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `useracc`
--
ALTER TABLE `useracc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
