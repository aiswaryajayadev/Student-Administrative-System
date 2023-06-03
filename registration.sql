-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2022 at 07:34 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `assingment`
--

DROP TABLE IF EXISTS `assingment`;
CREATE TABLE IF NOT EXISTS `assingment` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `assingment`
--

INSERT INTO `assingment` (`ID`, `name`, `details`, `due_date`) VALUES
(1, 'Computer science', 'Create a program to print pattern', '2022-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(11) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `member_id`, `date`, `attendance`) VALUES
(96, 4, '2022-06-30', 0),
(95, 3, '2022-06-30', 1),
(94, 2, '2022-06-30', 1),
(93, 1, '2022-06-30', 1),
(97, 1, '2022-07-01', 1),
(98, 3, '2022-07-01', 1),
(99, 4, '2022-07-01', 1),
(100, 1, '2022-07-02', 1),
(101, 3, '2022-07-02', 1),
(102, 4, '2022-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classb`
--

DROP TABLE IF EXISTS `classb`;
CREATE TABLE IF NOT EXISTS `classb` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `classb`
--

INSERT INTO `classb` (`id`, `name`, `rollno`, `password`) VALUES
(1, 'Freya', 1, ' 1234'),
(2, 'Antony', 2, ' antony');

-- --------------------------------------------------------

--
-- Table structure for table `classc`
--

DROP TABLE IF EXISTS `classc`;
CREATE TABLE IF NOT EXISTS `classc` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `coursematerial`
--

DROP TABLE IF EXISTS `coursematerial`;
CREATE TABLE IF NOT EXISTS `coursematerial` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `coursematerial`
--

INSERT INTO `coursematerial` (`ID`, `name`, `document`) VALUES
(10, 'chapter 1', 'Module 1 -Java Editors.docx'),
(9, 'Computer application', 'Doc 1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `exammarks`
--

DROP TABLE IF EXISTS `exammarks`;
CREATE TABLE IF NOT EXISTS `exammarks` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `rollno` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `c` int(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `exammarks`
--

INSERT INTO `exammarks` (`ID`, `rollno`, `subname`, `c`, `c1`, `c2`, `total`) VALUES
(21, 1, 'english', 10, 10, 10, 30),
(22, 2, 'science', 5, 5, 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Aiswarya', 'aiswarya@gmail.in', 'aiswarya'),
(2, 'Maya', 'maya1234@gmail.com', 'maya'),
(3, 'amal', 'amal1234@gmail.com', 'amal'),
(105, 'kiran', 'kiran@gmail.com', '1234'),
(106, 'arjun', 'arjun@1234', '1234'),
(107, 'anu', 'anu@gmail.com', '1234'),
(108, 'ammu', 'am@gmail.com', '1234'),
(109, '', '', ''),
(110, '1234asss', '', 'aaa'),
(111, '1234asss', '', 'aaa'),
(112, '11111', '', 'qq'),
(113, 'aiswarya', '', '11');

-- --------------------------------------------------------

--
-- Table structure for table `fworkspace`
--

DROP TABLE IF EXISTS `fworkspace`;
CREATE TABLE IF NOT EXISTS `fworkspace` (
  `member_id` int(100) NOT NULL,
  `date_entry` date NOT NULL,
  `details` varchar(100) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `fworkspace`
--

INSERT INTO `fworkspace` (`member_id`, `date_entry`, `details`, `due_date`) VALUES
(1, '2021-06-20', 'Make notes', '2021-06-21'),
(2, '2021-06-20', 'Set assignment', '2021-06-22'),
(1, '2021-07-04', 'Preapare notes', '2021-07-06'),
(3, '2021-07-05', 'Make notes for class', '2021-07-07'),
(1, '2021-07-25', 'take test', '2021-07-26'),
(1, '2021-07-26', 'make notes for s7', '2021-07-28'),
(2, '2022-06-30', 'submit student report', '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `mesg`
--

DROP TABLE IF EXISTS `mesg`;
CREATE TABLE IF NOT EXISTS `mesg` (
  `name` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesg`
--

INSERT INTO `mesg` (`name`, `member_id`, `date`, `message`) VALUES
('Aiswarya', 1, '2021-07-26', ' Class test '),
('Aiswarya', 2, '2021-07-26', ' Class test '),
('Aiswarya', 3, '2021-07-26', ' Class test ');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `member_ID` int(100) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`member_ID`, `date`, `message`) VALUES
(1, '2021-07-13', 'new assignment uploaded'),
(2, '2021-07-13', 'new assignment uploaded'),
(3, '2021-07-13', 'new assignment uploaded'),
(1, '2021-07-25', 'new course material uploaded'),
(2, '2021-07-25', 'new course material uploaded'),
(3, '2021-07-25', 'new course material uploaded'),
(4, '2021-07-25', 'new course material uploaded'),
(1, '2021-07-25', 'new assignment uploaded'),
(2, '2021-07-25', 'new assignment uploaded'),
(3, '2021-07-25', 'new assignment uploaded'),
(4, '2021-07-25', 'new assignment uploaded'),
(1, '2021-07-26', 'new course material upload'),
(2, '2021-07-26', 'new course material upload'),
(3, '2021-07-26', 'new course material upload'),
(1, '2022-06-30', 'course material uploaded'),
(2, '2022-06-30', 'course material uploaded'),
(3, '2022-06-30', 'course material uploaded'),
(4, '2022-06-30', 'course material uploaded');

-- --------------------------------------------------------

--
-- Table structure for table `sassignment`
--

DROP TABLE IF EXISTS `sassignment`;
CREATE TABLE IF NOT EXISTS `sassignment` (
  `sid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `document` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `sassignment`
--

INSERT INTO `sassignment` (`sid`, `name`, `document`, `status`) VALUES
(1, 'arya', 'Doc 1 (1).docx', '1'),
(3, 'arun', 'Assignment.pptx', '1'),
(4, 'kate', 'Assignment 2.docx', '1'),
(4, 'kate', 'Assignment.pptx', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `rollno`, `password`) VALUES
(1, 'arya', 1, '1234'),
(3, 'Arun', 3, '1234'),
(4, 'kate', 4, 'qwer');

-- --------------------------------------------------------

--
-- Table structure for table `subjectplanner1`
--

DROP TABLE IF EXISTS `subjectplanner1`;
CREATE TABLE IF NOT EXISTS `subjectplanner1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_ID` int(100) NOT NULL,
  `Time` timestamp(6) NOT NULL,
  `Topicname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `subjectplanner1`
--

INSERT INTO `subjectplanner1` (`id`, `member_ID`, `Time`, `Topicname`) VALUES
(1, 1, '2021-06-19 03:51:00.000000', 'data communication'),
(2, 2, '2021-06-19 04:18:00.000000', 'Computer networks'),
(5, 1, '2022-06-30 04:36:00.000000', 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

DROP TABLE IF EXISTS `ttable`;
CREATE TABLE IF NOT EXISTS `ttable` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `day` varchar(100) NOT NULL,
  `frsthr` varchar(100) NOT NULL,
  `scndhr` varchar(100) DEFAULT NULL,
  `thrdhr` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`ID`, `date`, `day`, `frsthr`, `scndhr`, `thrdhr`) VALUES
(3, '2021-06-18', 'Friday', 'Computer Networks', 'Operation Research', 'data communication'),
(4, '2021-07-06', 'Tuesday', 'Computer Networks', 'Operation Research', 'IT'),
(5, '2021-07-27', 'Tuesday', 'Computer Networks', 'Operation Research', 'COA'),
(6, '2021-07-28', 'Wednesday', 'Computer Networks', 'ITIM', 'data communication'),
(7, '2022-04-20', 'Wednesday', 'maths', 'english', 'chemistry'),
(8, '2022-07-01', 'Friday', 'english', 'science', 'maths');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
