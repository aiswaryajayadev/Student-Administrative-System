-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 10:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `mesg`
--

CREATE TABLE `mesg` (
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesg`
--

INSERT INTO `mesg` (`member_id`, `date`, `message`) VALUES
(1, '2021-06-19', 'all of u need to submit the assignment on coming Thursday.'),
(2, '2021-06-19', 'all of u need to submit the assignment on coming Thursday.'),
(1, '2021-06-20', 'call me'),
(2, '2021-06-20', 'call me'),
(3, '2021-06-20', 'call me'),
(4, '2021-06-20', 'call me'),
(11, '2021-06-20', 'call me'),
(1, '2021-06-19', 'meet me'),
(2, '2021-06-19', 'meet me');

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`ID`, `date`, `day`, `frsthr`, `scndhr`, `thrdhr`) VALUES
(3, '2021-06-18', 'Friday', 'Computer Networks', 'Operation Research', 'data communication');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
