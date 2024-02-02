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
-- Table structure for table `pro_new`
--

CREATE TABLE `pro_new` (
  `pro_id` mediumint(9) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_lang` text NOT NULL,
  `pro_start` date NOT NULL,
  `pro_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_new`
--

INSERT INTO `pro_new` (`pro_id`, `pro_name`, `pro_lang`, `pro_start`, `pro_end`) VALUES
(4, 'HR Staffing Solutions', 'PHP', '2021-05-01', '2021-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro_new`
--
ALTER TABLE `pro_new`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro_new`
--
ALTER TABLE `pro_new`
  MODIFY `pro_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
