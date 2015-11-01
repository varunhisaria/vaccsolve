-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2015 at 06:14 AM
-- Server version: 10.0.21-MariaDB-log
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccslove`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
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
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `hid`, `mother`, `father`, `dob`, `address`, `city`, `state`, `pin`, `lat`, `lng`, `contact`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `pswrd`, `name`, `address`, `city`, `state`, `pin`, `lat`, `lng`, `contact`) VALUES
(3, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(4, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(5, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 9999999999),
(6, '0', 'ABC', 'ABC Street', 'Surat', 'Gujrat', 777777, 0, 0, 999999999),
(7, '1234', 'ABC', 'Mall Road', 'Kolkata', 'West Bengal', 700080, 0, 0, 9051333843);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `unique_id` varchar(50) NOT NULL,
  `pswrd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`unique_id`, `pswrd`, `name`, `state`) VALUES
('007', '0', 'abc', 'gujrat'),
('B/123/234', '1234', 'Asha', 'Andaman and Nicobar Islands');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
