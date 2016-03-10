-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 04:06 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csmain`
--
CREATE DATABASE IF NOT EXISTS `csmain` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `csmain`;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(4) NOT NULL,
  `dateCreated` date DEFAULT NULL,
  `submitBy` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `progress` varchar(1000) NOT NULL,
  `memberName` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `urgency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `dateCreated`, `submitBy`, `title`, `description`, `progress`, `memberName`, `status`, `urgency`) VALUES
(9, '2015-12-16', 14, 'Create 2016 Budget', 'We need a budget due by the end of January                   \r\n                ', 'Only a few ideas                  \r\n                ', 'Joshua', 'In Progress', 'Urgent');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(4) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `eboard` varchar(1) DEFAULT '0',
  `role` varchar(200) DEFAULT '',
  `oneCard` varchar(25) DEFAULT NULL,
  `joinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(200) NOT NULL DEFAULT 'img/default-profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `fName`, `lName`, `email`, `phone`, `username`, `password`, `eboard`, `role`, `oneCard`, `joinDate`, `pic`) VALUES
(14, 'Jake', 'Lee', 'Jake@jakelee.info', '', 'coolstuff14', 'password', '1', 'Treassure', '', '2016-03-08 07:13:32', 'img/profiles/profile-14.jpg'),
(15, 'John', 'Smith', 'john@gmail.com', '978-827-9999', 'john1', 'password', '0', '', '', '2016-03-08 07:13:32', 'img/default-profile.png'),
(16, 'Jim', 'Smith', 'jim@gmail.com', '978-827-5555', 'jim1', 'password', '0', '', '', '2016-03-08 07:13:32', 'img/default-profile.png'),
(17, 'Kevin', 'Smith', 'kevin@kevin.com', '9788274455', 'kev1', 'password', '1', '', '', '2016-03-08 07:13:32', 'img/default-profile.png'),
(19, 'jake', 'lee', 'jake@jake.com', '', 'coolstuff1414', 'password', '0', '', '', '2016-03-08 07:13:32', 'img/default-profile.png'),
(20, 'John', 'Doe', 'john.doe@gmail.com', '9788270132', 'cool', 'muhpassword', '0', '', NULL, '2016-03-08 07:13:32', 'img/default-profile.png'),
(21, 'anthony', 'perez', 'antmanperez@gmail.com', '', 'antman', 'password', '0', '', NULL, '2016-03-08 07:13:32', 'img/default-profile.png'),
(22, 'Prez', 'Bob', 'prezbob@coolguy.com', '', 'prezbob', 'password', '0', '', NULL, '2016-03-08 09:45:33', 'img/default-profile.png'),
(23, 'Bob', 'Thebuilder', 'bobbuilder@gmail.com', '', 'bobbuilder', 'password', '0', '', NULL, '2016-03-08 09:47:16', 'img/default-profile.png'),
(24, 'Eric', 'smith', 'smith@gmail.com', '', 'eric1234', 'password', '0', '', NULL, '2016-03-08 15:21:44', 'img/default-profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting` varchar(200) NOT NULL,
  `value1` varchar(200) DEFAULT NULL,
  `value2` varchar(200) DEFAULT NULL,
  `value3` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting`, `value1`, `value2`, `value3`) VALUES
('current-theme', 'skin-blue', '', NULL),
('default-theme', 'skin-purple', '../img/bg.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `signID` int(6) NOT NULL,
  `memberID` int(4) NOT NULL,
  `timeIn` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting`),
  ADD UNIQUE KEY `setting` (`setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `signID` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
