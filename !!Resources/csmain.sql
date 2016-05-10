-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 07:40 AM
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
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `linkID` int(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(4) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
(29, '2016-05-10 05:24:20', 14, 'Clean Club Room', 'We need to clean up in there', 'None yet', 'All', 'New', 'Normal'),
(30, '2016-05-10 05:24:54', 14, 'Upgrade Server', 'The server version is old we need to update it', 'None Yet', 'All', 'New', 'Urgent'),
(31, '2016-05-10 05:25:39', 14, 'Order Club Supplies', 'We need more power strips for the club room', 'Waiting for SGA approval', 'Jake', 'In Progress', 'Normal'),
(32, '2016-05-10 05:26:25', 14, 'Print Flyers', 'We need flyers for next years rock the block', 'None Yet', 'All', 'New', 'Normal'),
(33, '2016-05-10 05:26:54', 14, 'Order Server Supplies', 'We need to order the tipping point and server rack', 'Done!', 'Jake', 'Complete', 'Normal'),
(34, '2016-05-10 05:27:58', 14, 'Order Monitors', 'We need to get out dual monitor setup going', 'Done!', 'Jake', 'Complete', 'Normal'),
(35, '2016-05-10 05:28:37', 14, 'Game Servers', 'We need to get the game servers up and running', 'Some servers done!', 'All', 'In Progress', 'Normal');

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
  `pic` varchar(200) NOT NULL DEFAULT 'img/default-profile.png',
  `active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `fName`, `lName`, `email`, `phone`, `username`, `password`, `eboard`, `role`, `oneCard`, `joinDate`, `pic`, `active`) VALUES
(14, 'Jake', 'Lee', 'Jake@jakelee.info', '', 'coolstuff14', 'password', '1', 'Treassure', '', '2016-03-08 07:13:32', 'uploads/profile/profile-14.jpg', 1),
(63, 'Sarah', 'Smith', 'sarahsmith@gmail.com', '', 'sarahsmith', 'password', '0', '', NULL, '2016-05-10 05:12:25', 'uploads/profile/user3-128x128.jpg', 1),
(64, 'Julie', 'Green', 'juliegreen@gmail.com', '978-111-2222', 'sunflowers69', 'password', '0', '', NULL, '2016-05-10 05:18:40', 'uploads/profile/user7-128x128.jpg', 1),
(65, 'Anne', 'Patterson', 'anne23@gmail.com', '978-222-3333', 'patterson23', 'password', '0', '', NULL, '2016-05-10 05:19:35', 'img/default-profile.png', 1),
(66, 'Carlos', 'Jones', 'carloscars@gmail.com', '', 'jones45', 'password', '0', '', NULL, '2016-05-10 05:20:53', 'img/default-profile.png', 1),
(67, 'Steve', 'Bell', 'steve13@gmail.com', '978-555-6666', 'bellmaster', 'password', '1', 'President', NULL, '2016-05-10 05:21:33', 'uploads/profile/user8-128x128.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `postID` int(4) NOT NULL,
  `postAuthor` varchar(30) NOT NULL,
  `postBody` longtext NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`postID`, `postAuthor`, `postBody`, `postTime`) VALUES
(104, 'Jake', '&lt;h1 style=&quot;text-align: center; &quot;&gt;&lt;span style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;&lt;b&gt;THE BEST BLOG EVER&lt;/b&gt;&lt;/span&gt;&lt;/h1&gt;&lt;h1 style=&quot;text-align: center; &quot;&gt;&lt;img src=&quot;http://vignette4.wikia.nocookie.net/disneycreate/images/5/53/Not_bad.jpeg/revision/latest?cb=20131018195503&quot; style=&quot;width: 558px;&quot;&gt;&lt;span style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/span&gt;&lt;/h1&gt;', '2016-05-06 19:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `notifyID` int(4) NOT NULL,
  `notifyCont` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`notifyID`, `notifyCont`, `time`) VALUES
(1, '&lt;i class=&quot;fa fa-user-plus text-green&quot;&gt;&lt;/i&gt;New user Sarah Smith registered', '2016-05-10 05:12:25'),
(2, '&lt;i class=&quot;fa fa-user-plus text-green&quot;&gt;&lt;/i&gt;New user Julie Green registered', '2016-05-10 05:18:40'),
(3, '&lt;i class=&quot;fa fa-user-plus text-green&quot;&gt;&lt;/i&gt;New user Anne Patterson registered', '2016-05-10 05:19:35'),
(4, '&lt;i class=&quot;fa fa-user-plus text-green&quot;&gt;&lt;/i&gt;New user Carlos Jones registered', '2016-05-10 05:20:53'),
(5, '&lt;i class=&quot;fa fa-user-plus text-green&quot;&gt;&lt;/i&gt;New user Steve Bell registered', '2016-05-10 05:21:33'),
(6, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Clean Club Room created by Jak', '2016-05-10 05:24:20'),
(7, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Upgrade Server created by Jake', '2016-05-10 05:24:54'),
(8, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Order Club Supplies created by', '2016-05-10 05:25:39'),
(9, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Print Flyers created by Jake', '2016-05-10 05:26:25'),
(10, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Order Server Supplies created ', '2016-05-10 05:26:54'),
(11, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Order Monitors created by Jake', '2016-05-10 05:27:58'),
(12, '&lt;i class=&quot;fa fa-thumb-tack text-green&quot;&gt;&lt;/i&gt;Task Game Servers created by Jake', '2016-05-10 05:28:37'),
(13, '&lt;i class=&quot;fa fa-pencil-square-o text-green&quot;&gt;&lt;/i&gt;Jake added Steve to eboard ', '2016-05-10 05:28:58'),
(14, '&lt;i class=&quot;fa fa-trash text-red&quot;&gt;&lt;/i&gt;Resource deleted by Jake', '2016-05-10 05:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resourceID` int(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resourceID`, `title`, `description`, `url`) VALUES
(1, 'Google Search', 'The best search engine in existance', 'https://www.google.com/'),
(2, 'Hackaday', 'An awesome hacking website', 'http://hackaday.com/');

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
('14', 'skin-purple', '../uploads/bg/grey_wash_wall.png', '10'),
('67', 'skin-blue', '../uploads/bg/black_lozenge.png', '5'),
('default-theme', 'skin-purple', '../img/dark_embroidery.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`linkID`);

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
-- Indexes for table `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`notifyID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resourceID`);

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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `linkID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `postID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `notifyID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resourceID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
