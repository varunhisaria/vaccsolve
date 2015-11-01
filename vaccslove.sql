-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2015 at 06:14 AM
-- Server version: 10.0.21-MariaDB-log
-- PHP Version: 5.6.14
=======
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2015 at 05:11 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
<<<<<<< HEAD
/*!40101 SET NAMES utf8mb4 */;
=======
/*!40101 SET NAMES utf8 */;
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

--
-- Database: `vaccslove`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

<<<<<<< HEAD
CREATE TABLE `child` (
  `id` int(11) NOT NULL,
=======
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854
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
<<<<<<< HEAD
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hid` (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `hid`, `mother`, `father`, `dob`, `address`, `city`, `state`, `pin`, `lat`, `lng`, `contact`) VALUES
<<<<<<< HEAD
(4, '', 'DEF', 'ABC', 2015, '', 'Kolkata ', 'West Bengal', 700080, 0, 0, 9051333843),
(6, '2015', 'def', 'abc', 2147483647, '', 'Kolkata ', 'West Bengal', 700080, 0, 0, 9051333843),
(7, '/2015/12312', 'DEF', 'ABC', 2147483647, 'Mall Road', 'Kolkata ', 'West Bengal', 700080, 0, 0, 9051333843),
(8, '/2015/12342', 'DEF', 'ABC', 2147483647, 'Mall Road', 'Kolkata ', 'Karnataka', 1234, 0, 0, 9051333843),
(10, '/2015/1234232', 'DEF', 'ABC', 2147483647, 'Mall Road', 'Kolkata ', 'Karnataka', 1234, 0, 0, 9051333843);

-- --------------------------------------------------------

--
-- Table structure for table `cv_mapping`
--

CREATE TABLE `cv_mapping` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv_mapping`
--

INSERT INTO `cv_mapping` (`id`, `child_id`, `vaccine_id`, `confirmed`) VALUES
(1, 6, 1, 0);
=======
(1, '/123', 'puja', 'palash', 0, 'ABC Street', 'Kolkata', 'West Bengal', 700048, 0, 0, 9999999999),
(3, '/111', 'puja', 'palash', 0, 'ABC Street', 'Kolkata', 'West Bengal', 700048, 0, 0, 9999999999);
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

<<<<<<< HEAD
CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
=======
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
<<<<<<< HEAD
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `pswrd`, `name`, `address`, `city`, `state`, `pin`, `lat`, `lng`, `contact`) VALUES
(3, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(4, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(5, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
<<<<<<< HEAD
(6, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 999999999),
(7, '1234', 'ABC', 'Mall Road', 'Kolkata', 'West Bengal', 700080, 0, 0, 9051333843);
=======
(6, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 999999999);
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

<<<<<<< HEAD
CREATE TABLE `ngo` (
  `unique_id` varchar(50) NOT NULL,
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL
=======
CREATE TABLE IF NOT EXISTS `ngo` (
  `unique_id` varchar(50) NOT NULL,
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`unique_id`)
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`unique_id`, `pswrd`, `name`, `state`) VALUES
<<<<<<< HEAD
('007', '0', 'abc', 'gujrat'),
('B/123/234', '1234', 'Asha', 'Andaman and Nicobar Islands');
=======
('007', '0', 'abc', 'gujrat');
>>>>>>> cce2600fd7238584aa934f83fd39774c96336854

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

<<<<<<< HEAD
CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `offset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `name`, `offset`) VALUES
(1, 'BCG', 0),
(2, 'OPV', 0),
(3, 'OPV-1', 3628800),
(4, 'OPV-2', 6048000),
(5, 'OPV-3', 8467200),
(6, 'OPV-4', 18144000),
(7, 'OPV-5', 21772800),
(8, 'Measles Vaccine', 21772800),
(9, 'OPV-6', 38707200),
(10, 'OPV-7', 145152000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hid` (`hid`);

--
-- Indexes for table `cv_mapping`
--
ALTER TABLE `cv_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cv_mapping`
--
ALTER TABLE `cv_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
CREATE TABLE IF NOT EXISTS `vaccine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `offset` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

>>>>>>> cce2600fd7238584aa934f83fd39774c96336854
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
