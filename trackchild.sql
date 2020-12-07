-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 06:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackchild`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `progeninfo` (IN `fir` INT)  NO SQL
select * from physical_features where fir_no=fir$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `dep_name` varchar(30) NOT NULL,
  `mob_no` int(11) NOT NULL,
  `aadhar_no` bigint(20) NOT NULL,
  `missing_name` varchar(30) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`dep_name`, `mob_no`, `aadhar_no`, `missing_name`, `relation`, `password`, `address`) VALUES
('ADITYA', 2147483647, 1, 'ARK', 'friend', '1', 'bihar'),
('vivek', 54343, 3, 'neha', 'friend', '3', 'mumbai'),
('aniket', 54343, 7, 'ankur', 'friend', '7', 'chattisgarh'),
('rohit', 2147483647, 99, 'prashant', 'friend', '99', 'punjab'),
('Nitish Kumar Gupta', 54343, 678, 'chandan', 'friend', '678', 'chattisgarh'),
('vivek ranjan', 2147483647, 1234567, 'diwedi', 'friend', '1234567', 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `mob_no` int(11) NOT NULL,
  `missing_date` date NOT NULL,
  `missing_place` varchar(30) NOT NULL,
  `fir_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`name`, `age`, `gender`, `address`, `designation`, `mob_no`, `missing_date`, `missing_place`, `fir_no`) VALUES
('ARK', 21, 'MALE', 'bihar', 'student', 2147483647, '2019-11-14', 'BIHAR', 11),
('neha', 21, 'FEMALE', 'mumbai', 'student', 2147483647, '2019-11-02', 'mumbai', 33),
('ankur', 21, 'MALE', 'chattisgarh', 'student', 2147483647, '2019-11-22', 'chattisgarh', 88),
('chandan', 18, 'MALE', 'mumbai', 'student', 2147483647, '2019-11-30', 'mumbai', 98),
('prashant', 16, 'MALE', 'punjab', 'student', 2147483647, '2019-11-29', 'Lucknow', 999),
('diwedi', 36, 'MALE', 'karnataka', 'ceo', 2147483647, '2019-12-17', 'mysore', 5678);

-- --------------------------------------------------------

--
-- Table structure for table `identification_marks`
--

CREATE TABLE `identification_marks` (
  `burn_mark` varchar(30) NOT NULL,
  `moles` varchar(30) NOT NULL,
  `voice` varchar(30) NOT NULL,
  `if_any_deformities` varchar(30) NOT NULL,
  `fir_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identification_marks`
--

INSERT INTO `identification_marks` (`burn_mark`, `moles`, `voice`, `if_any_deformities`, `fir_no`) VALUES
('hand', 'forehead', 'shrill', 'none', 11),
('none', 'neck', 'shrill', 'none', 33),
('hand', 'neck', 'shrill', 'none', 88),
('none', 'none', 'shrill', 'none', 999),
('none', 'behind neck', 'shrill', 'none', 98),
('none', 'neck', 'shrill', 'none', 5678);

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE `imgupload` (
  `fir_no` int(11) NOT NULL,
  `fir_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `dep_aadhar_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`fir_no`, `fir_date`, `image`, `dep_aadhar_no`) VALUES
(98, '2019-12-05', 'uploaded/download1.jpg', 99),
(999, '2019-11-22', 'uploaded/images.jpg', 99),
(5678, '2019-12-25', 'uploaded/img1.jpg', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `informant`
--

CREATE TABLE `informant` (
  `inf_name` varchar(30) NOT NULL,
  `mob_no` int(11) NOT NULL,
  `aadhar_no` bigint(20) NOT NULL,
  `date_found` date NOT NULL,
  `place_found` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informant`
--

INSERT INTO `informant` (`inf_name`, `mob_no`, `aadhar_no`, `date_found`, `place_found`, `password`, `address`) VALUES
('aniket', 2147483647, 2, '2019-11-22', 'up', '2', 'UP'),
('shyam', 2147483647, 245, '2019-11-29', 'chattishgarh', '245', 'karnataka'),
('Agarwal', 2147483647, 7654321, '2019-12-27', 'chattishgarh', '7654321', 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `matched`
--

CREATE TABLE `matched` (
  `fir_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matched`
--

INSERT INTO `matched` (`fir_number`) VALUES
(33);

-- --------------------------------------------------------

--
-- Table structure for table `physical_features`
--

CREATE TABLE `physical_features` (
  `complexion` varchar(30) NOT NULL,
  `eye` varchar(30) NOT NULL,
  `hair` varchar(30) NOT NULL,
  `build` varchar(30) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `fir_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_features`
--

INSERT INTO `physical_features` (`complexion`, `eye`, `hair`, `build`, `height`, `weight`, `fir_no`) VALUES
('FAIR', 'brown', 'black', 'normal', 150, 50, 11),
('fair', 'brown', 'black', 'normal', 165, 40, 33),
('fair ', 'brown', 'black', 'normal', 150, 50, 88),
('fair ', 'brown', 'black', 'normal', 145, 45, 999),
('very fair', 'brown', 'black', 'normal', 150, 50, 98),
('fair', 'GREEN', 'black', 'skinny', 160, 56, 5678);

-- --------------------------------------------------------

--
-- Table structure for table `recovered`
--

CREATE TABLE `recovered` (
  `fir_no` int(11) NOT NULL,
  `fir_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_found` date NOT NULL,
  `place_found` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recovered`
--

INSERT INTO `recovered` (`fir_no`, `fir_date`, `image`, `date_found`, `place_found`) VALUES
(11, '2019-11-19', 'uploaded/images (4).jpg', '2019-11-22', 'UP'),
(33, '2019-11-03', 'uploaded/download (1).jpg', '2019-11-06', 'UP'),
(88, '2019-11-21', 'uploaded/images (3).jpg', '2019-11-22', 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `sight`
--

CREATE TABLE `sight` (
  `fir_number` int(11) NOT NULL,
  `place_found` varchar(30) NOT NULL,
  `date_seen` date NOT NULL,
  `inf_aadhar_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sight`
--

INSERT INTO `sight` (`fir_number`, `place_found`, `date_seen`, `inf_aadhar_no`) VALUES
(11, 'UP', '2019-11-22', 2),
(33, 'UP', '2019-11-06', 2),
(88, 'UP', '2019-11-22', 2),
(999, 'karnataka', '2019-11-28', 245);

--
-- Triggers `sight`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER INSERT ON `sight` FOR EACH ROW DELETE FROM matched
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dependent`
--
ALTER TABLE `dependent`
  ADD PRIMARY KEY (`aadhar_no`);

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`fir_no`);

--
-- Indexes for table `identification_marks`
--
ALTER TABLE `identification_marks`
  ADD KEY `fir_no` (`fir_no`);

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`fir_no`),
  ADD KEY `dep_aadhar_no` (`dep_aadhar_no`);

--
-- Indexes for table `informant`
--
ALTER TABLE `informant`
  ADD PRIMARY KEY (`aadhar_no`);

--
-- Indexes for table `physical_features`
--
ALTER TABLE `physical_features`
  ADD KEY `fir-no` (`fir_no`);

--
-- Indexes for table `recovered`
--
ALTER TABLE `recovered`
  ADD PRIMARY KEY (`fir_no`);

--
-- Indexes for table `sight`
--
ALTER TABLE `sight`
  ADD KEY `fir_number` (`fir_number`),
  ADD KEY `inf_aadhar_no` (`inf_aadhar_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sight`
--
ALTER TABLE `sight`
  ADD CONSTRAINT `sight_ibfk_2` FOREIGN KEY (`inf_aadhar_no`) REFERENCES `informant` (`aadhar_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
