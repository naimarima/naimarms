-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 11:39 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `razia_sultana`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch_id` int(110) NOT NULL AUTO_INCREMENT,
  `batch_no` varchar(110) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_no`) VALUES
(5, '34th'),
(6, '22nd'),
(7, '23rd'),
(9, '24th');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `crs_id` int(110) NOT NULL AUTO_INCREMENT,
  `crs_code` int(110) NOT NULL,
  `crs_title` varchar(110) NOT NULL,
  PRIMARY KEY (`crs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`crs_id`, `crs_code`, `crs_title`) VALUES
(10, 222, 'C++'),
(11, 333, 'java'),
(12, 444, 'c'),
(13, 333, 'graphics');

-- --------------------------------------------------------

--
-- Table structure for table `evaluates`
--

CREATE TABLE IF NOT EXISTS `evaluates` (
  `teacher_id` int(110) NOT NULL,
  `evalutes_id` int(10) NOT NULL AUTO_INCREMENT,
  `crs_id` int(110) NOT NULL,
  `attendence` int(110) NOT NULL,
  `assignment` int(110) NOT NULL,
  `ct` int(110) NOT NULL,
  `midterm` int(110) NOT NULL,
  `final` int(110) NOT NULL,
  `total_mark` double NOT NULL,
  `grade` varchar(110) NOT NULL,
  `grade_point` double NOT NULL,
  PRIMARY KEY (`evalutes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `evaluates`
--

INSERT INTO `evaluates` (`teacher_id`, `evalutes_id`, `crs_id`, `attendence`, `assignment`, `ct`, `midterm`, `final`, `total_mark`, `grade`, `grade_point`) VALUES
(1, 1, 1, 8, 8, 8, 22, 33, 0, '', 0),
(2, 2, 2, 7, 7, 7, 18, 35, 0, '', 0),
(1, 3, 1, 8, 8, 8, 22, 33, 0, '', 0),
(2, 4, 2, 7, 7, 7, 18, 35, 0, '', 0),
(10, 5, 10, 3, 3, 3, 22, 0, 0, '', 0),
(10, 6, 10, 3, 3, 3, 22, 0, 0, '', 0),
(11, 7, 11, 4, 4, 4, 23, 0, 0, '', 0),
(11, 8, 11, 4, 4, 4, 23, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bn` varchar(35) NOT NULL,
  `en` varchar(35) NOT NULL,
  `mt` varchar(35) NOT NULL,
  `total_mark` varchar(35) NOT NULL,
  `bangla_g` varchar(35) NOT NULL,
  `eng_g` varchar(35) NOT NULL,
  `math_g` varchar(35) NOT NULL,
  `grade` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `bn`, `en`, `mt`, `total_mark`, `bangla_g`, `eng_g`, `math_g`, `grade`) VALUES
(7, '45', '56', '67', '168', 'C', 'B', 'A-', 'B'),
(8, '56', '78', '35', '169', 'B', 'A', 'D', 'B'),
(9, '45', '67', '58', '170', 'C', 'A-', 'B', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `offered`
--

CREATE TABLE IF NOT EXISTS `offered` (
  `batch_id` int(110) NOT NULL,
  `crs_id` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offered`
--

INSERT INTO `offered` (`batch_id`, `crs_id`) VALUES
(5, 1),
(5, 1),
(7, 5),
(7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `register_id` int(10) NOT NULL AUTO_INCREMENT,
  `std_id` int(11) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `crs_id` int(11) NOT NULL,
  `crs_code` varchar(100) NOT NULL,
  `crs_title` varchar(100) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `std_id`, `std_name`, `crs_id`, `crs_code`, `crs_title`) VALUES
(15, 17, 'Rima', 222, '', 'java'),
(16, 17, 'shurovi', 222, '', 'java');

-- --------------------------------------------------------

--
-- Table structure for table `retakes`
--

CREATE TABLE IF NOT EXISTS `retakes` (
  `std_id` int(110) NOT NULL,
  `crs_id` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retakes`
--

INSERT INTO `retakes` (`std_id`, `crs_id`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `std_id` int(110) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(110) NOT NULL,
  `std_roll` varchar(110) NOT NULL,
  `batch_no` varchar(110) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_roll`, `batch_no`) VALUES
(17, 'shurovi', '114CSE0009', '22nd'),
(18, 'rima', '114CSEoo14', '22nd'),
(19, 'shifa', '1123CSE54', '24th');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(110) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(110) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`) VALUES
(11, 'Khalil'),
(12, 'Siham'),
(13, 'Siham');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE IF NOT EXISTS `teaching` (
  `teacher_id` int(110) NOT NULL,
  `crs_id` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`teacher_id`, `crs_id`) VALUES
(10, 0),
(10, 0),
(10, 0),
(11, 0),
(11, 0),
(10, 3),
(10, 3),
(11, 2),
(10, 11),
(12, 10),
(12, 13),
(12, 13),
(11, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
