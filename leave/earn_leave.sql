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
-- Table structure for table `earn leave`
--

CREATE TABLE `earn leave` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `start_date` datetime NOT NULL,
  `endup_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earn leave`
--

INSERT INTO `earn leave` (`emp_id`, `emp_name`, `start_date`, `endup_date`) VALUES
(1, 'rushi', '2021-05-17 00:00:00', '2021-05-24 00:00:00'),
(1, 'rushi', '2021-05-24 00:00:00', '2021-05-31 00:00:00'),
(12, 'abc', '2021-05-31 00:00:00', '2021-06-01 00:00:00'),
(11, 'abc', '2021-05-24 00:00:00', '2021-05-10 00:00:00'),
(1, 'abc', '2021-05-24 00:00:00', '2021-05-31 21:41:00'),
(0, 'rushi', '2021-05-31 21:42:00', '2021-06-01 21:43:00'),
(11, 'Pavan', '2021-05-31 22:22:00', '2021-06-01 11:23:00'),
(111, 'Pavan', '2021-05-31 22:23:00', '2021-06-01 10:24:00'),
(11, 'Vinit Nikam', '2021-05-31 23:11:00', '2021-06-05 11:11:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
