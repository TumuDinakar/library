-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 07:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(11) NOT NULL,
  `Author_Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `Author_Name`) VALUES
(1, 'Maria'),
(2, 'Sohana'),
(3, 'Sandhya'),
(4, 'Dinakar'),
(5, 'Mariprasad'),
(6, 'Revant'),
(7, 'Abhi'),
(8, 'Midhun'),
(9, 'Bhavana'),
(10, 'Chethan');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE IF NOT EXISTS `book_details` (
  `book_id` int(11) NOT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `ISBN` varchar(45) NOT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`book_id`, `Title`, `ISBN`, `publisher_id`, `author_id`) VALUES
(1, 'Hi', '123456', 1, 1),
(2, 'the End', '123678', 2, 2),
(3, 'Begining', '345678', 3, 3),
(4, 'Stars', '234897', 4, 4),
(5, 'Moon', '234567', 5, 5),
(6, 'earth', '678954', 6, 6),
(7, 'Thanksgiving', '156789', 7, 7),
(8, 'Two states', '123490', 8, 8),
(9, '3Mistakes of life', '456283', 9, 9),
(10, 'Wind', '237680', 10, 10),
(11, 'Rear Window', '1222222', 1, 1),
(12, 'Life', '1234555', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `borrowers_details`
--

CREATE TABLE IF NOT EXISTS `borrowers_details` (
  `borrowers_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `copy_no` int(11) NOT NULL,
  `reader_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `B_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `R_date` datetime DEFAULT NULL,
  `taken` varchar(45) DEFAULT NULL,
  `fine` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`borrowers_id`),
  KEY `book_id` (`book_id`),
  KEY `reader_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `borrowers_details`
--

INSERT INTO `borrowers_details` (`borrowers_id`, `book_id`, `copy_no`, `reader_id`, `branch_id`, `B_date`, `R_date`, `taken`, `fine`) VALUES
(4, 1, 1, 1, 1, '2014-04-30 23:43:06', NULL, 'checkouted', NULL),
(6, 1, 3, 2, 1, '2014-05-01 00:13:30', NULL, 'returned', NULL),
(7, 2, 1, 1, 1, '2014-05-01 00:24:19', NULL, 'checkouted', NULL),
(10, 2, 2, 5, 1, '2014-05-01 03:59:27', NULL, 'reserved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_Name` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_Name`, `location`) VALUES
(1, 'Harrison Library', 'Harrison'),
(2, 'Newport Library', 'Newport');

-- --------------------------------------------------------

--
-- Table structure for table `library_status`
--

CREATE TABLE IF NOT EXISTS `library_status` (
  `branch_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `copy_no` int(11) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library_status`
--

INSERT INTO `library_status` (`branch_id`, `book_id`, `copy_no`, `status`) VALUES
(1, 1, 1, 'u'),
(1, 1, 2, 'u'),
(1, 1, 3, 'u'),
(1, 2, 1, 'u'),
(1, 2, 2, 'u'),
(1, 2, 3, 'a'),
(2, 1, 1, 'a'),
(2, 1, 2, 'a'),
(2, 1, 3, ''),
(2, 2, 1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `publishes`
--

CREATE TABLE IF NOT EXISTS `publishes` (
  `publisher_id` int(11) NOT NULL,
  `publisher_Name` varchar(45) DEFAULT NULL,
  `publisher_Address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publishes`
--

INSERT INTO `publishes` (`publisher_id`, `publisher_Name`, `publisher_Address`) VALUES
(1, 'Amazon', 'Dallas'),
(2, 'Oxford', 'Texas'),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `reader_id` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `Ph_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`reader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`reader_id`, `Name`, `address`, `Ph_no`) VALUES
(1, 'Raghu', '12  harison ave nj ', 12334),
(2, 'Ram', '14 cleveland ave  nj', 62982),
(3, 'Sham', '6 passic ave nj', 37245),
(4, 'Sunder', '201 passai', 325879),
(5, 'Sunil', '212 harrison ave ', 78879),
(6, 'Harish', '304 Cleveland ave', 76890),
(7, 'Srikanth', '512  Frank Rodgers', 870890),
(8, 'ashley', ' 20 william street ', 7688909),
(9, 'Andrew', '79 cleveland ave', 6587909),
(10, 'mick', '36 passaic ave ', 9809768),
(11, 'charan', '212 Harrison Avenue NJ', 12222222);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_details`
--
ALTER TABLE `book_details`
  ADD CONSTRAINT `book_details_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);

--
-- Constraints for table `borrowers_details`
--
ALTER TABLE `borrowers_details`
  ADD CONSTRAINT `borrowers_details_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_details` (`book_id`),
  ADD CONSTRAINT `borrowers_details_ibfk_2` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`reader_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
