-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2015 at 01:01 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riverside club`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE IF NOT EXISTS `equipments` (
  `Equipment Code` varchar(7) NOT NULL,
  `Equipment Name` varchar(30) NOT NULL,
  `Inspection Date` date NOT NULL,
  `Inspection Time` time NOT NULL,
  `Instructor ID` varchar(5) NOT NULL,
  `Report` text NOT NULL,
  `Report Number` varchar(7) NOT NULL,
  `Repair Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilities schedule`
--

CREATE TABLE IF NOT EXISTS `facilities schedule` (
  `Facility Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Start Time` time NOT NULL,
  `End Time` time NOT NULL,
  `Member ID` int(8) NOT NULL,
  `Club ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
  `Booking Reference` varchar(10) NOT NULL,
  `Instructor ID` varchar(5) NOT NULL,
  `Instructor Name` varchar(30) NOT NULL,
  `Facility Name` varchar(30) NOT NULL,
  `Member ID` int(8) NOT NULL,
  `Date` date NOT NULL,
  `Start Time` time NOT NULL,
  `End Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `Member ID` int(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Payment Method` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Member ID`, `Name`, `Date of Birth`, `Payment Method`, `Email`) VALUES
(54886656, 'Jack Walsh', '1992-08-01', 'cash', 'jackwalsh@yopmail.com'),
(54886657, 'Helen Brown', '1995-09-25', 'payment by card', 'helen.brown@yopmail.com'),
(54886658, 'Patricia Walsh', '2000-05-18', 'cash', 'patriciawalsh@yopmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `Payment Reference` varchar(8) NOT NULL,
  `Member ID` int(8) NOT NULL,
  `Club ID` varchar(4) NOT NULL,
  `Payment Method` varchar(20) NOT NULL,
  `Amount` int(5) NOT NULL,
  `Payment Date` date NOT NULL,
  `Annual Membership Renewal Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sporting associations`
--

CREATE TABLE IF NOT EXISTS `sporting associations` (
  `Club ID` varchar(4) NOT NULL,
  `Club Name` varchar(30) NOT NULL,
  `Contact Details` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`Equipment Code`,`Inspection Date`,`Inspection Time`),
  ADD KEY `Instructor ID` (`Instructor ID`);

--
-- Indexes for table `facilities schedule`
--
ALTER TABLE `facilities schedule`
  ADD PRIMARY KEY (`Facility Name`,`Date`,`Start Time`,`End Time`),
  ADD KEY `Member ID` (`Member ID`),
  ADD KEY `Club ID` (`Club ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`Booking Reference`,`Instructor ID`),
  ADD KEY `Facility Name` (`Facility Name`),
  ADD KEY `Member ID` (`Member ID`),
  ADD KEY `Date` (`Date`),
  ADD KEY `Start Time` (`Start Time`),
  ADD KEY `End Time` (`End Time`),
  ADD KEY `Foreign Key fk5` (`Facility Name`,`Date`,`Start Time`,`End Time`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Member ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Payment Reference`),
  ADD KEY `Member ID` (`Member ID`),
  ADD KEY `Club ID` (`Club ID`);

--
-- Indexes for table `sporting associations`
--
ALTER TABLE `sporting associations`
  ADD PRIMARY KEY (`Club ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facilities schedule`
--
ALTER TABLE `facilities schedule`
  ADD CONSTRAINT `Foreign Key fk3` FOREIGN KEY (`Member ID`) REFERENCES `members` (`Member ID`),
  ADD CONSTRAINT `Foreign Key fk4` FOREIGN KEY (`Club ID`) REFERENCES `sporting associations` (`Club ID`);

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `Foreign Key fk5` FOREIGN KEY (`Facility Name`, `Date`, `Start Time`, `End Time`) REFERENCES `facilities schedule` (`Facility Name`, `Date`, `Start Time`, `End Time`),
  ADD CONSTRAINT `Foreign Key fk6` FOREIGN KEY (`Member ID`) REFERENCES `members` (`Member ID`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `Foreign Key fk2` FOREIGN KEY (`Club ID`) REFERENCES `sporting associations` (`Club ID`),
  ADD CONSTRAINT `Foreign key fk1` FOREIGN KEY (`Member ID`) REFERENCES `members` (`Member ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
