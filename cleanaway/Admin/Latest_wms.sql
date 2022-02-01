-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2019 at 05:53 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compliant`
--

INSERT INTO `compliant` (`ID`, `User_Email`, `Compliant_Type`, `Description`, `Image`, `Location1`, `Location2`, `volunteerID`, `ngoID`, `Date`) VALUES
(1, 'reva@gmail.com', 'Street Waste', 'Kachara', 0x6176617461722e706e67, '5', 'ganeshguri', NULL, NULL, '2019-08-28'),
(2, 'ayush@gmail.com', 'Street Waste', 'critical', 0x42574d532053595354454d2053414d504c452e646f6378, '4', 'assam', NULL, 4, '2019-08-28'),
(3, 'saurav@gmail.com', 'Street Waste', 'critical', 0x4170702067617465776179732e646f6378, '3', 'koramangala', NULL, NULL, '2019-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

DROP TABLE IF EXISTS `locality`;
CREATE TABLE IF NOT EXISTS `locality` (
  `LID` int(11) NOT NULL AUTO_INCREMENT,
  `locality1` text NOT NULL,
  PRIMARY KEY (`LID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`LID`, `locality1`) VALUES
(1, 'SG PALYA'),
(2, 'WHITEFIELD'),
(3, 'wallford');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `useremail` varchar(100) NOT NULL,
  `newsletteremail` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngoID`, `ngoName`, `ngoregID`, `ngoDate`, `ngoEmail`, `ngoRegion`, `ngoMobile`, `ngoPass`) VALUES
(1, 'vikash', 'NGO-11', '2019-08-28', 'vikashNGO@gmail.com', '4', 7894563122, '202cb962ac59075b964b07152d234b70'),
(2, 'JaiPrakash', 'NGO-456', '2019-08-29', 'jaiNGO@gmail.com', '3', 7894563122, '202cb962ac59075b964b07152d234b70');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userDate`, `userEmail`, `userRegion`, `userMobile`, `userPassword`) VALUES
(1, 'ayush', '2019-08-28', 'ayush@gmail.com', '4', 9874651320, '202cb962ac59075b964b07152d234b70'),
(2, 'deepak', '2019-08-29', 'deepak@gmail.com', '4', 8976845970, '202cb962ac59075b964b07152d234b70'),
(3, 'Reva', '2019-08-29', 'reva@gmail.com', '5', 9742814207, '202cb962ac59075b964b07152d234b70');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteerID`, `volunteerName`, `volunteerDate`, `volunteerEmail`, `volunteerRegion`, `volunteerMobile`, `volunteerPassword`) VALUES
(1, 'Rajee', '2019-08-28', 'rajee@gmail.com', '4', 7894563122, '202cb962ac59075b964b07152d234b70'),
(2, 'saurav', '2019-08-28', 'saurav@gmail.com', '3', 9874651320, '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
