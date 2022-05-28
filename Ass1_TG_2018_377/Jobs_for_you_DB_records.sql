-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2020 at 07:40 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs_for_you`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

DROP TABLE IF EXISTS `admin_log`;
CREATE TABLE IF NOT EXISTS `admin_log` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `username`, `password`, `email`) VALUES
(1, 'Admin_rechal', 'admin1', 'rechal@gmail.com'),
(2, 'Admin_perera', 'admin2', 'perera@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Age` int(3) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Email_id` varchar(60) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_no` int(15) NOT NULL,
  `Job_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`First_name`, `Last_name`, `Age`, `Sex`, `Email_id`, `Address`, `Phone_no`, `Job_name`) VALUES
('Dilma', 'Serath', 25, 'Female', 'dilma@gmail.com', '', 775467329, 'Software Enginer'),
('visha', 'rechal', 21, 'on', 'visha@gmail.com', 'jaffna', 721567345, 'web developer'),
('resma', 'fenado', 24, 'on', 'resma@gmail.com', 'colombo', 776543565, 'System Analysis'),
('jeril', 'derish', 26, 'on', 'derish@gmail.com', 'negambo', 786543678, 'System Analysis'),
('jemina', 'delma', 24, 'on', 'dilma@gmail.com', 'negambo', 87655678, 'System Analysis'),
('deri', 'dema', 26, 'female', 'dema@gmail.com', 'galle', 76546897, 'web developer'),
('jesmin', 'dashma', 25, 'female', 'jesmin@gmail.com', 'Matara', 782635784, 'System Analysis'),
('Deshma', 'Herath', 31, 'female', 'deshma@gmail.com', 'Main street,Galle', 773425676, 'System Analysis'),
('Deshma', 'Herath', 31, 'female', 'deshma@gmail.com', 'Main street,Galle', 773425676, 'System Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_log`
--

DROP TABLE IF EXISTS `applicant_log`;
CREATE TABLE IF NOT EXISTS `applicant_log` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_log`
--

INSERT INTO `applicant_log` (`id`, `username`, `password`, `email`) VALUES
(1, 'siva', 'applicant1', 'siva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `complaint` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`name`, `email`, `complaint`) VALUES
('Remo', 'remo@gmail.com', 'we need more attractive'),
('fasma', 'fasma@gmail.com', 'we want more job details');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

DROP TABLE IF EXISTS `confirmation`;
CREATE TABLE IF NOT EXISTS `confirmation` (
  `Id` int(5) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Job_name` varchar(100) NOT NULL,
  `Ref_no` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`Id`, `First_name`, `Last_name`, `Job_name`, `Ref_no`) VALUES
(1, 'Deri', 'Dema', 'Web developer', 111),
(4, 'Dilma ', 'Serath', 'Software Engineer', 114);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
