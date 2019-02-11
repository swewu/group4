-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 07:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweregrade`
--
CREATE DATABASE IF NOT EXISTS `sweregrade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sweregrade`;

-- --------------------------------------------------------

--
-- Table structure for table `historygrade`
--

DROP TABLE IF EXISTS `historygrade`;
CREATE TABLE `historygrade` (
  `historyid` int(10) NOT NULL,
  `term` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `studentid` int(10) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `courseName` varchar(200) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historygrade`
--

INSERT INTO `historygrade` (`historyid`, `term`, `year`, `grade`, `studentid`, `studentName`, `courseid`, `courseName`, `status`) VALUES
(13, 1, 2561, 'W', 61101192, 'นางสาวจริยาวดี เนียมนาค', 'SWE60-103', 'การออกแบบและพัฒนาเว็บ', 'W'),
(14, 1, 2561, 'F', 61101242, 'นายจักรพงษ์ กระต่ายทอง', 'SWE60-103', 'การออกแบบและพัฒนาเว็บ', 'F'),
(15, 1, 2561, 'D', 61101655, 'นางสาวจุฑาภรณ์ พุ่มมณี', 'SWE60-103', 'การออกแบบและพัฒนาเว็บ', 'D'),
(16, 1, 2561, 'D+', 61102299, 'นายโชติวิชช์ วรเดช', 'SWE60-103', 'การออกแบบและพัฒนาเว็บ', 'D+');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `role`) VALUES
(0000000001, 'admin', 'root', 'Admin'),
(0000000002, 'lecture', 'l1234', 'Lecture'),
(0000000003, 'student', 's1234', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historygrade`
--
ALTER TABLE `historygrade`
  ADD PRIMARY KEY (`historyid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historygrade`
--
ALTER TABLE `historygrade`
  MODIFY `historyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historygrade`
--
ALTER TABLE `historygrade`
  ADD CONSTRAINT `fk_historygrade_course1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_historygrade_student` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
