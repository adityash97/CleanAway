-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2019 at 05:17 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminEmail` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  PRIMARY KEY (`adminEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminEmail`, `adminPassword`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `compliant`
--

DROP TABLE IF EXISTS `compliant`;
CREATE TABLE IF NOT EXISTS `compliant` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `User_Email` varchar(50) NOT NULL,
  `Compliant_Type` text NOT NULL,
  `Description` text NOT NULL,
  `Image` blob NOT NULL,
  `Location1` text NOT NULL,
  `Location2` text NOT NULL,
  `volunteerID` int(6) DEFAULT NULL,
  `ngoID` int(6) DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`contact_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_ID`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Somya', 'somya@gmail.com', 'Smell bed around my area', 'Please take some action', '2019-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

DROP TABLE IF EXISTS `locality`;
CREATE TABLE IF NOT EXISTS `locality` (
  `LID` int(11) NOT NULL AUTO_INCREMENT,
  `locality1` text NOT NULL,
  PRIMARY KEY (`LID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`LID`, `locality1`) VALUES
(1, 'Hoskerehalli'),
(2, 'Rajajinagar'),
(3, 'Yelahanka'),
(4, 'Jaynagar');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

DROP TABLE IF EXISTS `ngo`;
CREATE TABLE IF NOT EXISTS `ngo` (
  `ngoID` int(11) NOT NULL AUTO_INCREMENT,
  `ngoName` varchar(100) NOT NULL,
  `ngoregID` varchar(20) NOT NULL,
  `ngoDate` date NOT NULL,
  `ngoEmail` varchar(100) NOT NULL,
  `ngoRegion` varchar(100) NOT NULL,
  `ngoMobile` bigint(11) NOT NULL,
  `ngoPass` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ngoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `userDate` date NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userRegion` varchar(100) NOT NULL,
  `userMobile` bigint(11) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `volunteerID` int(11) NOT NULL AUTO_INCREMENT,
  `volunteerName` varchar(100) NOT NULL,
  `volunteerDate` date NOT NULL,
  `volunteerEmail` varchar(100) NOT NULL,
  `volunteerRegion` varchar(100) NOT NULL,
  `volunteerMobile` bigint(11) NOT NULL,
  `volunteerPassword` varchar(150) NOT NULL,
  PRIMARY KEY (`volunteerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
