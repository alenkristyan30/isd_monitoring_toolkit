-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 03:46 PM
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
CREATE DATABASE IF NOT EXISTS `denrfeeddb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `denrfeeddb`;

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
(5, 'Division Chief', 'Divis', '2018-12-19 23:56:45');

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
(14, 'Surveys and Mapping Division', 5, '...', '2018-12-18 03:50:05'),
(15, 'sample', 1, 'Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum', '2018-12-19 23:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` int(11) NOT NULL,
  `accstatus` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`id`, `username`, `password`, `type`, `accstatus`, `timestamp`) VALUES
(1, 'jethuro', '467bd781c2df51facb6c6c559001c4c2', 3, 0, '2019-01-10 06:00:16');

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
(1, 'Jorolan', 'Jethro', 'Talavera', 'Jr.', 1, 5, 'Male', '', '2018-12-20 02:18:43');

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
  MODIFY `posid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `secid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `useracc`
--
ALTER TABLE `useracc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `isd_monitoring_toolkitdb`
--
CREATE DATABASE IF NOT EXISTS `isd_monitoring_toolkitdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `isd_monitoring_toolkitdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbldivision`
--

CREATE TABLE `tbldivision` (
  `divisionID` int(2) NOT NULL,
  `divisionNAME` varchar(50) NOT NULL,
  `divisionOFFICEID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldivision`
--

INSERT INTO `tbldivision` (`divisionID`, `divisionNAME`, `divisionOFFICEID`) VALUES
(1, 'Development Communication Division', 6),
(2, 'Information Systems Division', 12),
(5, 'System Analyst', 12),
(7, 'Information System Division', 1),
(8, 'asd', 5),
(9, 'asdasd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `feedbackID` int(3) NOT NULL,
  `feedbackRATE` int(1) NOT NULL,
  `feedbackSYSTEMID` int(2) NOT NULL,
  `feedbackUSERID` int(3) NOT NULL,
  `feedbackDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblinfosystem`
--

CREATE TABLE `tblinfosystem` (
  `infosystemID` int(2) NOT NULL,
  `infosystemNAME` varchar(30) NOT NULL,
  `infosystemABBREVIATION` varchar(7) NOT NULL,
  `infosystemDEVELOPMENTTYPE` tinyint(1) NOT NULL,
  `infosystemDATECREATED` date NOT NULL,
  `infosystemDEVELOPER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinfosystem`
--

INSERT INTO `tblinfosystem` (`infosystemID`, `infosystemNAME`, `infosystemABBREVIATION`, `infosystemDEVELOPMENTTYPE`, `infosystemDATECREATED`, `infosystemDEVELOPER`) VALUES
(1, 'Financial Accounting Reporting', 'FARS', 1, '0000-00-00', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbloffice`
--

CREATE TABLE `tbloffice` (
  `officeID` int(2) NOT NULL,
  `officeNAME` varchar(50) NOT NULL,
  `officeLEVEL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbloffice`
--

INSERT INTO `tbloffice` (`officeID`, `officeNAME`, `officeLEVEL`) VALUES
(1, 'Office of the Secretary', 1),
(2, 'Head Executive Assistant Office', 2),
(3, 'Office of the Undersecretaries', 2),
(4, 'Office of the Assistant Secretary', 2),
(5, 'Climate Change Service', 5),
(6, 'Strategic Communication and In', 6),
(9, 'Human Resources Development Service', 9),
(10, 'Internal Audit Service', 3),
(11, 'Financial and Management Service', 9),
(12, 'Knowledge and Information Systems Service', 9),
(13, 'Policy and Planning Service', 4),
(14, 'Foreign Assisted and Special Projects Service', 4),
(15, 'Staff Bureaus', 5),
(16, 'Line Bureaus', 5),
(17, 'Attached Agencies', 5),
(18, 'Other Offices', 5),
(19, 'Partner Agencies', 5),
(20, 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposition`
--

CREATE TABLE `tblposition` (
  `positionID` int(2) NOT NULL,
  `positionNAME` varchar(50) NOT NULL,
  `positionOFFICEID` int(2) NOT NULL,
  `positionDIVISIONID` int(2) NOT NULL,
  `positionSECTIONID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposition`
--

INSERT INTO `tblposition` (`positionID`, `positionNAME`, `positionOFFICEID`, `positionDIVISIONID`, `positionSECTIONID`) VALUES
(1, 'sampleposition', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblpriority`
--

CREATE TABLE `tblpriority` (
  `priorityID` int(1) NOT NULL,
  `priorityLEVEL` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblquestion`
--

CREATE TABLE `tblquestion` (
  `questionID` int(2) NOT NULL,
  `questionQUERY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquestion`
--

INSERT INTO `tblquestion` (`questionID`, `questionQUERY`) VALUES
(1, 'If you were to review the website what score would you give it out of 5');

-- --------------------------------------------------------

--
-- Table structure for table `tblrate`
--

CREATE TABLE `tblrate` (
  `rateID` int(1) NOT NULL,
  `rateNAME` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblreports`
--

CREATE TABLE `tblreports` (
  `reportID` int(3) NOT NULL,
  `reportUSERID` int(3) NOT NULL,
  `reportSYSTEMID` int(2) NOT NULL,
  `reportTEAMID` int(2) NOT NULL,
  `reportCOMMENT` text NOT NULL,
  `reportCATEGORY` varchar(11) NOT NULL,
  `reportPRIORITY` int(1) NOT NULL,
  `reportSEVERITY` int(1) NOT NULL,
  `reportSTATUS` int(1) DEFAULT NULL,
  `reportDATE` date NOT NULL,
  `reportIMAGE` varchar(50) NOT NULL,
  `reportFIXEDDATE` date NOT NULL,
  `reportASSIGNEDDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreports`
--

INSERT INTO `tblreports` (`reportID`, `reportUSERID`, `reportSYSTEMID`, `reportTEAMID`, `reportCOMMENT`, `reportCATEGORY`, `reportPRIORITY`, `reportSEVERITY`, `reportSTATUS`, `reportDATE`, `reportIMAGE`, `reportFIXEDDATE`, `reportASSIGNEDDATE`) VALUES
(1, 2, 1, 0, 'adssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'issue', 0, 0, NULL, '0000-00-00', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

CREATE TABLE `tblsection` (
  `sectionID` int(2) NOT NULL,
  `sectionNAME` varchar(50) NOT NULL,
  `sectionDIVISIONID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`sectionID`, `sectionNAME`, `sectionDIVISIONID`) VALUES
(1, 'section', 2),
(2, 'asd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `serviceID` int(2) NOT NULL,
  `serviceNAME` varchar(60) NOT NULL,
  `serviceOFFICEID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`serviceID`, `serviceNAME`, `serviceOFFICEID`) VALUES
(0, 'sad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblseverity`
--

CREATE TABLE `tblseverity` (
  `severityID` int(1) NOT NULL,
  `severityLEVEL` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsystemrole`
--

CREATE TABLE `tblsystemrole` (
  `systemroleID` int(2) NOT NULL,
  `systemroleNAME` varchar(45) NOT NULL,
  `systemroleSYSTEM` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsystemrole`
--

INSERT INTO `tblsystemrole` (`systemroleID`, `systemroleNAME`, `systemroleSYSTEM`) VALUES
(1, 'SDF', 1),
(2, 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblteam`
--

CREATE TABLE `tblteam` (
  `teamID` int(2) NOT NULL,
  `teamUSERID` int(3) NOT NULL,
  `teamREPORTID` int(3) NOT NULL,
  `teamROLE` varchar(6) NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteam`
--

INSERT INTO `tblteam` (`teamID`, `teamUSERID`, `teamREPORTID`, `teamROLE`) VALUES
(1, 0, 1, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tblunit`
--

CREATE TABLE `tblunit` (
  `unitID` int(2) NOT NULL,
  `unitNAME` varchar(40) DEFAULT NULL,
  `unitDIVISIONID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblunit`
--

INSERT INTO `tblunit` (`unitID`, `unitNAME`, `unitDIVISIONID`) VALUES
(1, 'sampleunit', 1),
(2, 'aaaaaaaaaass', 0),
(3, 'aaaaaaaaaass', 0),
(4, 'qwertyuiopas', 0),
(5, 'qwertyuiopas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `useraccountID` int(3) NOT NULL,
  `useraccountUSERNAME` varchar(15) NOT NULL,
  `useraccountPASSWORD` varchar(15) NOT NULL,
  `useraccountTYPE` int(1) NOT NULL,
  `useraccountSTATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`useraccountID`, `useraccountUSERNAME`, `useraccountPASSWORD`, `useraccountTYPE`, `useraccountSTATUS`) VALUES
(3, 'jjethrojorlan', '4297f44b1395523', 3, 0),
(6, 'asdaasdasd', 'a3dcb4d229de6fd', 2, 0),
(7, 'sdasd', 'a3dcb4d229de6fd', 2, 0),
(8, 'asdasdasd', '4473e588b355686', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserinfo`
--

CREATE TABLE `tbluserinfo` (
  `userinfoID` int(3) NOT NULL,
  `userinfoSURNAME` varchar(15) NOT NULL,
  `userinfoFIRSTNAME` varchar(20) NOT NULL,
  `userinfoMIDDLENAME` varchar(15) NOT NULL,
  `userinfoGENDER` varchar(6) NOT NULL,
  `userinfoSERVICELENGTH` varchar(7) NOT NULL,
  `userinfoIMAGE` varchar(50) NOT NULL,
  `userinfoOFFICEID` int(2) NOT NULL,
  `userinfoDIVISIONID` int(2) NOT NULL,
  `userinfoSECTIONID` int(2) NOT NULL,
  `userinfoUNITID` int(2) NOT NULL,
  `userinfoPOSITIONID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserinfo`
--

INSERT INTO `tbluserinfo` (`userinfoID`, `userinfoSURNAME`, `userinfoFIRSTNAME`, `userinfoMIDDLENAME`, `userinfoGENDER`, `userinfoSERVICELENGTH`, `userinfoIMAGE`, `userinfoOFFICEID`, `userinfoDIVISIONID`, `userinfoSECTIONID`, `userinfoUNITID`, `userinfoPOSITIONID`) VALUES
(2, 'asd', 'Jethro', 'Jorolan', 'female', '2019-01', '', 1, 1, 1, 1, 1),
(6, 'sdf', 'sdf', 'sdf', 'female', '2019-01', '', 2, 1, 1, 1, 1),
(7, 'asdasdas', 'asdasd', 'asdasd', 'female', '2019-01', '', 2, 1, 1, 1, 1),
(8, 'asdasd', 'asdasdaszz', 'asdasdsa', 'female', '2019-01', '', 2, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

CREATE TABLE `tblusertype` (
  `usertypeID` int(1) NOT NULL,
  `usertypeTITLE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`usertypeID`, `usertypeTITLE`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldivision`
--
ALTER TABLE `tbldivision`
  ADD PRIMARY KEY (`divisionID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `tblinfosystem`
--
ALTER TABLE `tblinfosystem`
  ADD PRIMARY KEY (`infosystemID`);

--
-- Indexes for table `tbloffice`
--
ALTER TABLE `tbloffice`
  ADD PRIMARY KEY (`officeID`);

--
-- Indexes for table `tblposition`
--
ALTER TABLE `tblposition`
  ADD PRIMARY KEY (`positionID`);

--
-- Indexes for table `tblpriority`
--
ALTER TABLE `tblpriority`
  ADD PRIMARY KEY (`priorityID`);

--
-- Indexes for table `tblquestion`
--
ALTER TABLE `tblquestion`
  ADD PRIMARY KEY (`questionID`);

--
-- Indexes for table `tblrate`
--
ALTER TABLE `tblrate`
  ADD PRIMARY KEY (`rateID`);

--
-- Indexes for table `tblreports`
--
ALTER TABLE `tblreports`
  ADD PRIMARY KEY (`reportID`);

--
-- Indexes for table `tblsection`
--
ALTER TABLE `tblsection`
  ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `tblseverity`
--
ALTER TABLE `tblseverity`
  ADD PRIMARY KEY (`severityID`);

--
-- Indexes for table `tblsystemrole`
--
ALTER TABLE `tblsystemrole`
  ADD PRIMARY KEY (`systemroleID`);

--
-- Indexes for table `tblteam`
--
ALTER TABLE `tblteam`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD PRIMARY KEY (`unitID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`useraccountID`);

--
-- Indexes for table `tbluserinfo`
--
ALTER TABLE `tbluserinfo`
  ADD PRIMARY KEY (`userinfoID`);

--
-- Indexes for table `tblusertype`
--
ALTER TABLE `tblusertype`
  ADD PRIMARY KEY (`usertypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldivision`
--
ALTER TABLE `tbldivision`
  MODIFY `divisionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `feedbackID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblinfosystem`
--
ALTER TABLE `tblinfosystem`
  MODIFY `infosystemID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbloffice`
--
ALTER TABLE `tbloffice`
  MODIFY `officeID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `positionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblquestion`
--
ALTER TABLE `tblquestion`
  MODIFY `questionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblrate`
--
ALTER TABLE `tblrate`
  MODIFY `rateID` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblreports`
--
ALTER TABLE `tblreports`
  MODIFY `reportID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsection`
--
ALTER TABLE `tblsection`
  MODIFY `sectionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsystemrole`
--
ALTER TABLE `tblsystemrole`
  MODIFY `systemroleID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblteam`
--
ALTER TABLE `tblteam`
  MODIFY `teamID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblunit`
--
ALTER TABLE `tblunit`
  MODIFY `unitID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `useraccountID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluserinfo`
--
ALTER TABLE `tbluserinfo`
  MODIFY `userinfoID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblusertype`
--
ALTER TABLE `tblusertype`
  MODIFY `usertypeID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"false\",\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\",\"full_screen\":\"on\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblteam\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblreports\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblunit\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblservice\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tbldivision\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tbluserinfo\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tbluseraccount\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblusertype\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblsystemrole\"},{\"db\":\"isd_monitoring_toolkitdb\",\"table\":\"tblsection\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'denrfeeddb', 'userinfo', '{\"CREATE_TIME\":\"2018-12-17 08:35:05\",\"col_visib\":[1,1,1,1,1,1,1,1,1,1]}', '2018-12-20 01:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-01-18 14:46:22', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
