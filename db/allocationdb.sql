-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2022 at 08:44 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allocationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

DROP TABLE IF EXISTS `allocation`;
CREATE TABLE IF NOT EXISTS `allocation` (
  `allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `timetable_id` int(11) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `hall` varchar(100) NOT NULL,
  PRIMARY KEY (`allocation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`allocation_id`, `timetable_id`, `staff`, `hall`) VALUES
(1, 25, 'test66,jamila ismail,sani lawal', 'ND-I'),
(2, 26, 'dauda sani,test66,sani lawal', 'ND-II'),
(3, 27, 'dauda sani,jamila ismail,sani lawal', 'HARDWARE-LAB'),
(4, 28, 'test66,jamila ismail,dauda sani', 'HND-I'),
(5, 29, 'jamila ismail,test66,sani lawal', 'SOFTWARE-LAB'),
(6, 30, 'dauda sani,test66,sani lawal', 'HND-II');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `PW_STATUS` varchar(20) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `USERNAME`, `PASSWORD`, `PW_STATUS`) VALUES
(1, 'admin', 'admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `phone`, `email`, `position`, `date_registered`, `status`) VALUES
(22, 'jamila ismail', '08131989268', 'ismailjamila101@yahoo.com', 'graduate assistant', '2022-07-17 20:30:11', 0),
(23, 'sani lawal', '08024777090', 'lawalsani101@gmail.com', 'lecturer 3', '2022-07-17 20:31:01', 0),
(24, 'dauda sani', '08131989268', 'sanidauda@odfel.edu.ng', 'senior lecturer', '2022-07-17 20:31:52', 0),
(25, 'Collins Mark', '1234', 'test@gmail.com ', 'IT support', '2022-07-26 15:45:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `timetable_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `days` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`timetable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
