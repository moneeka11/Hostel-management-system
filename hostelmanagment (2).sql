-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 08:41 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(22) NOT NULL,
  `username` varchar(266) NOT NULL,
  `datee` date NOT NULL,
  `feedback` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `datee`, `feedback`) VALUES
(1, 'test', '2018-11-28', 'fdhjgsjadvjdhhcbzhd'),
(2, 'test', '2018-11-28', 'h'),
(3, 'monika', '2018-11-28', 'adsfsc'),
(4, 'test', '2018-11-28', 'dd'),
(5, 'test', '2018-11-28', 'gfyuds'),
(6, 'test', '2018-11-28', 'hdgf\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE `login_detail` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`id`, `username`, `password`) VALUES
(3, 'ranjita', 'pandey'),
(4, 'krisha', 'pokhrel'),
(5, 'moneeka', 'dangol'),
(7, 'asd', 'fgh');

-- --------------------------------------------------------

--
-- Table structure for table `outing_records`
--

CREATE TABLE `outing_records` (
  `id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_phone` bigint(8) UNSIGNED NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `purpose` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room`) VALUES
(1, 'rom1'),
(2, 'rom2'),
(3, 'dzfdxxdvx'),
(4, '33vvvg'),
(5, 'gfdgsad');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `usertype` int(23) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `room_no` smallint(5) UNSIGNED NOT NULL,
  `phone_no` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(100) NOT NULL,
  `guardian_no` bigint(20) UNSIGNED NOT NULL,
  `food_pref` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `usertype`, `name`, `stream`, `roll_no`, `room_no`, `phone_no`, `address`, `guardian_no`, `food_pref`, `username`, `password`) VALUES
(1, 1, '', '', '', 0, 0, '', 0, '', 'admin', 'admin'),
(2, 0, 'ssd', 'sadf', 'sdf', 123, 96786, 'cs', 45435, 'sdf', 'sdfd', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `usertype` int(22) NOT NULL,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `contactno` int(23) NOT NULL,
  `nearby` varchar(222) NOT NULL,
  `gcontactno` varchar(222) NOT NULL,
  `faculty` varchar(222) NOT NULL,
  `rollno` int(22) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `datee` date NOT NULL,
  `room` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usertype`, `firstname`, `lastname`, `address`, `contactno`, `nearby`, `gcontactno`, `faculty`, `rollno`, `username`, `password`, `datee`, `room`) VALUES
(1, 1, '', '', '', 0, '', '', '', 0, 'admin', 'admin', '0000-00-00', ''),
(5, 0, 'Mariko', 'Riley', 'Sunt aut atque vero totam', 726, 'gffnv', '+495-72-8565383', 'civil', 77, 'test', 'test', '2018-11-27', 'rom2'),
(6, 0, 'wsd', 'dssdd', 'sss', 11, 'w', '11', 'computer ', 11, 'q', 'q', '2018-11-27', 'rom1'),
(7, 0, 'krisha', 'pokhrel', 'brt', 2147483647, 'hhkjk', '9877654', 'computer ', 67, 'krisha', 'pokhrel', '2018-11-28', 'rom2'),
(8, 0, 'gsm', 'sadcd', 'sadsa', 1111, 'sdsd', 'ssgs', 'electronic', 1334, 'qw', 'qw', '2018-11-28', 'rom1'),
(9, 0, 'moneeka', 'dangol', 'sunakothi', 123445678, 'adsdc', '1234567890', 'computer ', 123, 'monika', 'dangol', '2018-11-28', '33vvvg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outing_records`
--
ALTER TABLE `outing_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login_detail`
--
ALTER TABLE `login_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `outing_records`
--
ALTER TABLE `outing_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
