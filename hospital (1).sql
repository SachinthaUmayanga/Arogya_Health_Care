-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 12:24 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `DocID` varchar(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `ConNo` varchar(10) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `DAdd` varchar(100) NOT NULL,
  `Gen` varchar(6) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `ProInformation` varchar(100) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  PRIMARY KEY (`DocID`),
  UNIQUE KEY `SerialNo` (`SerialNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`SerialNo`, `DocID`, `FName`, `LName`, `ConNo`, `NIC`, `DAdd`, `Gen`, `DOB`, `Email`, `ProInformation`, `Experience`) VALUES
(2, 'DOC-2', 'umayanga', 'Sachintha', '0773262537', '993727623742', 'Hikkaduwa', 'Male', '1990-01-30', 'abc@outlook.com', 'abc', '2'),
(3, 'DOC-3', 'Dimuth', 'Chathuranga', '0736252763', '763486184614', 'Rathgama', 'Male', '2000-02-20', 'dimuth@gmail.com', 'asdasdad', 'asdasdasd'),
(4, 'DOC-4', 'Sachintha', 'Umayanga', '0764452125', '199935411993', 'Galle', 'Male', '1999-12-19', 'sachinthaumayanga3@gmail.com', 'MBBS', '2 years'),
(6, 'DOC-6', 'Sachintha', 'Umayanga', '0764452125', '199935411993', 'Galle', 'Male', '1999-12-19', 'sachinthaumayanga3@gmail.com', 'MBBS', '2 years');

-- --------------------------------------------------------

--
-- Table structure for table `logsch`
--

CREATE TABLE IF NOT EXISTS `logsch` (
  `LogSerial` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(10) NOT NULL,
  `LI` datetime NOT NULL,
  `LO` datetime NOT NULL,
  PRIMARY KEY (`LogSerial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `logsch`
--

INSERT INTO `logsch` (`LogSerial`, `UserName`, `LI`, `LO`) VALUES
(1, 'sachi', '2023-06-05 10:04:20', '0000-00-00 00:00:00'),
(2, 'sachi', '2023-06-05 12:19:56', '0000-00-00 00:00:00'),
(3, 'sachi', '2023-06-05 12:39:44', '0000-00-00 00:00:00'),
(4, 'sachi', '2023-06-05 12:41:25', '0000-00-00 00:00:00'),
(5, 'sachi', '2023-06-05 13:27:11', '0000-00-00 00:00:00'),
(6, 'sachi', '2023-06-05 13:28:56', '0000-00-00 00:00:00'),
(7, 'sachi', '2023-06-05 13:32:35', '0000-00-00 00:00:00'),
(8, 'sachi', '2023-06-05 13:38:34', '0000-00-00 00:00:00'),
(9, 'sachi', '2023-06-05 13:57:47', '0000-00-00 00:00:00'),
(10, 'sachi', '2023-06-05 13:58:49', '0000-00-00 00:00:00'),
(11, 'sachi', '2023-06-05 13:59:24', '0000-00-00 00:00:00'),
(12, 'sachi', '2023-06-05 13:59:49', '0000-00-00 00:00:00'),
(13, 'sachi', '2023-06-05 14:01:49', '0000-00-00 00:00:00'),
(14, 'sachi', '2023-06-05 14:02:27', '0000-00-00 00:00:00'),
(15, 'sachi', '2023-06-06 11:15:12', '0000-00-00 00:00:00'),
(16, 'sachi', '2023-06-06 11:42:14', '0000-00-00 00:00:00'),
(17, 'sachi', '2023-06-06 11:57:03', '2023-06-06 13:55:39'),
(18, 'sachi', '2023-06-06 13:56:47', '0000-00-00 00:00:00'),
(19, 'sachi', '2023-06-06 14:17:10', '2023-06-06 15:05:19'),
(20, 'sachi', '2023-06-06 15:05:26', '2023-06-06 18:53:23'),
(21, 'sachi', '2023-06-06 18:53:31', '0000-00-00 00:00:00'),
(22, 'sachi', '2023-06-06 19:34:37', '2023-06-06 21:01:15'),
(23, 'sachi', '2023-06-06 21:01:21', '0000-00-00 00:00:00'),
(24, 'sachi', '2023-06-07 20:45:34', '0000-00-00 00:00:00'),
(25, 'sachi', '2023-06-08 10:37:17', '2023-06-08 11:26:28'),
(26, 'sachi', '2023-06-08 11:26:36', '2023-06-08 12:15:47'),
(27, 'sachi', '2023-06-08 12:16:00', '2023-06-08 15:08:23'),
(28, 'sachi', '2023-06-08 15:08:32', '2023-06-08 15:11:15'),
(29, 'sachi', '2023-06-08 15:11:23', '2023-06-08 15:11:56'),
(30, 'sachi', '2023-06-08 15:12:04', '2023-06-08 15:13:26'),
(31, 'sachi', '2023-06-08 15:13:37', '2023-06-08 15:14:38'),
(32, 'sachi', '2023-06-08 15:14:46', '2023-06-08 15:31:30'),
(33, 'sachi', '2023-06-08 15:31:42', '2023-06-08 15:33:09'),
(34, 'sachi', '2023-06-08 15:33:19', '2023-06-08 19:09:16'),
(35, 'umayanga', '2023-06-08 19:50:42', '2023-06-08 20:06:35'),
(36, 'sachi', '2023-06-09 10:28:14', '2023-06-09 10:28:59'),
(37, 'sachi', '2023-06-09 10:31:20', '2023-06-09 10:32:38'),
(38, 'sachi', '2023-06-09 10:33:28', '2023-06-09 11:05:04'),
(39, 'sachi', '2023-06-09 11:05:10', '2023-06-09 11:13:05'),
(40, 'umayanga', '2023-06-09 11:13:12', '2023-06-09 12:43:41'),
(41, 'umayanga', '2023-06-09 12:46:32', '0000-00-00 00:00:00'),
(42, 'umayanga', '2023-06-09 15:23:14', '2023-06-09 19:36:48'),
(43, 'sachi', '2023-06-09 19:37:00', '0000-00-00 00:00:00'),
(44, 'sachi', '2023-06-10 09:04:06', '0000-00-00 00:00:00'),
(45, 'sachi', '2023-06-10 13:33:26', '0000-00-00 00:00:00'),
(46, 'sachi', '2023-06-10 18:50:37', '2023-06-10 20:11:52'),
(47, 'sachi', '2023-06-10 20:11:58', '0000-00-00 00:00:00'),
(48, 'sachi', '2023-06-12 11:19:36', '2023-06-12 11:20:53'),
(49, 'sachi', '2023-06-12 11:21:45', '0000-00-00 00:00:00'),
(50, 'sachi', '2023-06-13 09:57:00', '2023-06-13 09:59:21'),
(51, 'sachi', '2023-06-13 10:16:23', '0000-00-00 00:00:00'),
(52, 'sachi', '2023-06-13 13:35:32', '0000-00-00 00:00:00'),
(53, 'sachi', '2023-06-13 18:06:15', '0000-00-00 00:00:00'),
(54, 'sachi', '2023-06-13 18:16:54', '0000-00-00 00:00:00'),
(55, 'sachi', '2023-06-14 10:27:05', '0000-00-00 00:00:00'),
(56, 'sachi', '2023-06-14 10:50:00', '2023-06-14 10:50:08'),
(57, 'sachi', '2023-06-14 10:50:47', '2023-06-14 14:32:46'),
(58, 'sachi', '2023-06-14 14:32:56', '0000-00-00 00:00:00'),
(59, 'sachi', '2023-06-17 12:14:42', '0000-00-00 00:00:00'),
(60, 'sachi', '2023-06-18 13:10:43', '0000-00-00 00:00:00'),
(61, 'sachi', '2023-06-18 14:29:02', '0000-00-00 00:00:00'),
(62, 'sachi', '2023-06-18 19:00:09', '2023-06-18 21:01:48'),
(63, 'sachi', '2023-06-18 21:01:56', '0000-00-00 00:00:00'),
(64, 'sachi', '2023-06-19 10:13:22', '2023-06-19 10:44:46'),
(65, 'sachi', '2023-06-19 10:44:55', '0000-00-00 00:00:00'),
(66, 'sachi', '2023-06-20 10:13:52', '2023-06-20 11:09:22'),
(67, 'sachi', '2023-06-20 11:09:30', '2023-06-20 11:43:04'),
(68, 'sachi', '2023-06-20 11:43:15', '0000-00-00 00:00:00'),
(69, 'sachi', '2023-06-20 14:12:21', '0000-00-00 00:00:00'),
(70, 'sachi', '2023-06-20 18:54:04', '0000-00-00 00:00:00'),
(71, 'sachi', '2023-06-20 20:22:22', '0000-00-00 00:00:00'),
(72, 'sachi', '2023-06-21 13:13:52', '0000-00-00 00:00:00'),
(73, 'sachi', '2023-06-21 18:23:06', '0000-00-00 00:00:00'),
(74, 'sachi', '2023-06-22 10:20:32', '0000-00-00 00:00:00'),
(75, 'sachi', '2023-06-22 15:39:41', '2023-06-22 15:40:14'),
(76, 'sachi', '2023-06-22 15:40:27', '0000-00-00 00:00:00'),
(77, 'sachi', '2023-06-24 09:06:37', '0000-00-00 00:00:00'),
(78, 'sachi', '2023-06-24 11:21:28', '0000-00-00 00:00:00'),
(79, 'sachi', '2023-06-24 13:34:40', '0000-00-00 00:00:00'),
(80, 'sachi', '2023-06-27 10:31:30', '2023-06-27 10:32:14'),
(81, 'sachi', '2023-06-27 10:32:27', '0000-00-00 00:00:00'),
(82, 'sachi', '2023-06-30 10:35:56', '0000-00-00 00:00:00'),
(83, 'sachi', '2023-07-01 09:29:17', '0000-00-00 00:00:00'),
(84, 'sachi', '2023-07-01 11:36:36', '0000-00-00 00:00:00'),
(85, 'sachi', '2023-07-01 19:41:46', '0000-00-00 00:00:00'),
(86, 'sachi', '2023-07-03 10:35:15', '0000-00-00 00:00:00'),
(87, 'sachi', '2023-07-03 19:53:04', '0000-00-00 00:00:00'),
(88, 'sachi', '2023-07-04 13:50:08', '0000-00-00 00:00:00'),
(89, 'sachi', '2023-07-04 20:11:42', '2023-07-04 20:42:20'),
(90, 'sachi', '2023-07-04 20:51:25', '2023-07-04 20:53:51'),
(91, 'sachi', '2023-07-04 20:54:12', '2023-07-04 21:18:14'),
(92, 'sachi', '2023-07-04 21:20:13', '0000-00-00 00:00:00'),
(93, 'sachi', '2023-07-05 09:48:57', '0000-00-00 00:00:00'),
(94, 'sachi', '2023-07-05 17:03:42', '0000-00-00 00:00:00'),
(95, 'sachi', '2023-07-06 15:05:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `SerialNo` int(10) NOT NULL AUTO_INCREMENT,
  `PID` varchar(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `TelNo` varchar(10) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `PAddress` varchar(100) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `MedicalHistory` varchar(100) NOT NULL,
  `Notes` varchar(100) NOT NULL,
  PRIMARY KEY (`PID`),
  UNIQUE KEY `SerialNo` (`SerialNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`SerialNo`, `PID`, `FName`, `LName`, `TelNo`, `NIC`, `Gender`, `PAddress`, `DOB`, `Email`, `MedicalHistory`, `Notes`) VALUES
(30, 'PAT-30', 'Deshani', 'Sewwandi', '0753726388', '993362726V', 'Female', 'Hikkaduwa', '1999-02-14', 'deshani@gmail.com', 'None', 'None'),
(31, 'PAT-31', 'Kavindu', 'Pathinayaka', '0775526373', '200032765347', 'Male', 'Galle', '2000-04-28', 'kavindu@yahoo.com', 'None', 'None'),
(34, 'PAT-34', 'Supun', 'Sankalpa', '0785252626', '200183843978', 'Male', 'Matara', '2001-04-22', 'supun@gmail.com', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `roomres`
--

CREATE TABLE IF NOT EXISTS `roomres` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `RoomNo` varchar(10) NOT NULL,
  `PatientNo` varchar(10) NOT NULL,
  `ResDate` datetime NOT NULL,
  `CheckOut` datetime NOT NULL,
  `TotalPrice` decimal(10,2) NOT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `roomres`
--

INSERT INTO `roomres` (`Serial`, `RoomNo`, `PatientNo`, `ResDate`, `CheckOut`, `TotalPrice`) VALUES
(1, '03', 'PAT-26', '2023-06-13 15:08:50', '2023-06-13 00:00:00', '6000.00'),
(2, '01', 'PAT-26', '2023-06-13 18:29:54', '2023-06-14 00:00:00', '4000.00'),
(3, '04', 'PAT-26', '2023-06-17 12:15:21', '2023-06-17 00:00:00', '8000.00'),
(4, '01', 'PAT-26', '2023-06-18 20:17:57', '2023-06-19 00:00:00', '4000.00'),
(5, '02', 'PAT-28', '2023-06-20 11:52:24', '2023-06-20 00:00:00', '4000.00'),
(6, '03', 'PAT-27', '2023-06-20 11:59:45', '2023-06-21 00:00:00', '12000.00'),
(7, '04', 'PAT-27', '2023-06-20 12:02:17', '0000-00-00 00:00:00', '0.00'),
(8, '03', 'PAT-28', '2023-06-22 15:41:14', '2023-06-22 00:00:00', '6000.00'),
(9, '01', 'PAT-28', '2023-06-24 09:07:50', '2023-06-24 00:00:00', '2000.00'),
(10, '01', 'PAT-30', '2023-07-03 19:55:31', '2023-07-03 00:00:00', '2000.00'),
(11, '02', 'PAT-31', '2023-07-04 21:16:12', '2023-07-06 00:00:00', '12000.00'),
(12, '01', 'PAT-30', '2023-07-05 17:29:33', '2023-07-05 00:00:00', '2000.00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `RoomNo` varchar(2) NOT NULL,
  `RoomType` varchar(50) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`RoomNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RoomNo`, `RoomType`, `Price`, `Status`) VALUES
('01', 'Ward Bed', '2000.00', 'Active'),
('02', 'Standard Room', '4000.00', 'Active'),
('03', 'Semi Luxury Room', '6000.00', 'Active'),
('04', 'Luxury Room', '8000.00', 'Reserve');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `SSerial` int(10) NOT NULL AUTO_INCREMENT,
  `StaffID` varchar(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `SAddress` varchar(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `TelNo` varchar(10) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  PRIMARY KEY (`StaffID`),
  UNIQUE KEY `SSerial` (`SSerial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`SSerial`, `StaffID`, `FName`, `LName`, `SAddress`, `Gender`, `DOB`, `Email`, `NIC`, `TelNo`, `Designation`, `Qualification`) VALUES
(5, 'SID-5', 'Sachintha', 'Umayanga', 'Hikkaduwa', 'Male', '1999-12-19', 'sachinthaumayanga3@gmail.com', '199935411993', '0764452125', 'Front office officer', 'Higher Diploma in ICT'),
(6, 'SID-6', 'Ishini', 'Amarasinghe', 'Galle', 'Female', '1999-10-23', 'ishini@gmail.com', '199935417635', '0783265347', 'Front office officer', 'Higher Diploma in ICT'),
(8, 'SID-8', 'Sachintha', 'Umayanga', 'Galle', 'Male', '1999-12-19', 'sachinthaumayanga3@gmail.com', '199935411993', '0764452125', 'Front office officer', 'Higher Diploma in ICT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `RealName` varchar(50) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `RealName`) VALUES
('', '', 'Ishini.Amarasinghe'),
('abc', '1234', 'Sachintha.Umayanga'),
('deshani', '1234', 'Deshani.Sewwandhi'),
('kumara', '1234', 'Kumara.Sineth'),
('sachi', '1234', 'Sachintha Umayanga'),
('sachintha', '1234', 'Sachintha.Umayanga'),
('umayanga', '1234', 'Umayanga Sachintha'),
('user122', '1234', 'Sachintha.Umayanga');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
