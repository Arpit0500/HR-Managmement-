-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 12:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_appln`
--

CREATE TABLE `leave_appln` (
  `emp_name` varchar(50) NOT NULL,
  `emp_id` mediumint(9) NOT NULL,
  `leave_dur` varchar(200) NOT NULL,
  `leave_type` varchar(200) NOT NULL,
  `date_1` date NOT NULL,
  `emp_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_appln`
--

INSERT INTO `leave_appln` (`emp_name`, `emp_id`, `leave_dur`, `leave_type`, `date_1`, `emp_reason`) VALUES
('Vinit Nikam', 11, 'Above a Day', 'Maternity Leave', '2021-06-01', 'hiii hello');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
