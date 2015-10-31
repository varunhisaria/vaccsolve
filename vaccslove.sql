-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2015 at 05:11 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vaccslove`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `dob` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hid` (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `hid`, `mother`, `father`, `dob`, `address`, `city`, `state`, `pin`, `lat`, `lng`, `contact`) VALUES
(1, '/123', 'puja', 'palash', 0, 'ABC Street', 'Kolkata', 'West Bengal', 700048, 0, 0, 9999999999),
(3, '/111', 'puja', 'palash', 0, 'ABC Street', 'Kolkata', 'West Bengal', 700048, 0, 0, 9999999999);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `pswrd`, `name`, `address`, `city`, `state`, `pin`, `lat`, `lng`, `contact`) VALUES
(3, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(4, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(5, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(6, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 999999999);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
  `unique_id` varchar(50) NOT NULL,
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`unique_id`, `pswrd`, `name`, `state`) VALUES
('007', '0', 'abc', 'gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `offset` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
