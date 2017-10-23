-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 11:08 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobseek`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `CompanyId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyLogo` blob NOT NULL,
  `CompanyProfile` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `SalaryRange` varchar(255) NOT NULL,
  `JobPosition` varchar(255) NOT NULL,
  `JobType` varchar(20) NOT NULL,
  `TelNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Website` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`CompanyId`, `Name`, `CompanyLogo`, `CompanyProfile`, `Location`, `Category`, `SalaryRange`, `JobPosition`, `JobType`, `TelNumber`, `Email`, `Website`) VALUES
(1, 'Abc Cooperation', '', 'ABC', '', '', '10000-12000', 'Clerk', 'Internship', '', '', 'abc.com'),
(2, 'DEFCooperation', '', 'DEF', '', '', '10000-12000', 'Accountant', 'Full Time', '', '', 'def.com'),
(3, 'gagga', '', 'DEF', 'ssss', 'A', '10000-12000', 'da', 'Banking', '3424', 'ruwanariheenkenda@gmail.com', 'abc.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`CompanyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `CompanyId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
