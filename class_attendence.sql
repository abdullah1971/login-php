-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 07:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class attendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendenceinfo`
--

CREATE TABLE `attendenceinfo` (
  `date` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `courseCode` int(11) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `startingTime` varchar(255) NOT NULL,
  `endTime` varchar(255) NOT NULL,
  `roomNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendenceinfo`
--

INSERT INTO `attendenceinfo` (`date`, `day`, `courseCode`, `teacherName`, `startingTime`, `endTime`, `roomNo`) VALUES
('1', 'Sun', 2125, 'Maruf Abdullah', '16:59', '18:59', 220),
('0', 'Sun', 2126, 'Nohon', '09:26', '10:26', 221),
('2017-04-06', 'Fri', 2127, 'Ahnaf', '09:30', '10:30', 222),
('2017-04-06', 'Mon', 2129, 'Maruf Abdullah', '16:25', '17:28', 221);

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `teacherId` int(11) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `teacherDept` varchar(255) NOT NULL,
  `teacherShortName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`teacherId`, `teacherName`, `teacherDept`, `teacherShortName`) VALUES
(1, 'Maruf Abdullah', 'CSE', 'MA'),
(6514, 'asdfsd', 'dfgfd', 'dfgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  ADD PRIMARY KEY (`teacherId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
