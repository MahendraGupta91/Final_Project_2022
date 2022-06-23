-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 02:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypro_bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(0, 'admin', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `age` int(25) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mno` int(10) DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mno`, `gender`, `category`) VALUES
(12, 'pranshu', 'deepak', 'parasi', 'Anuppur', 15, 'B+', 'pransu111@gmail.com', 2147483647, NULL, 'GENERAL'),
(14, 'mona', 'baburam', 'sghdfgh', 'Anuppur', 20, 'AB-', 'rathourmona76@gmail.com', 1541634121, 'on', 'ST'),
(28, 'sapna', 'ajay', 'senduri', 'Anuppur', 21, 'O+', 'rathoursapna76@gmail.com', 2147483647, 'Fe', 'OBC'),
(31, 'Mona', 'baburam', 'senduri', 'Anuppur', 20, 'B-', 'rathourmona76@gmail.com', 2147483647, 'Fe', 'OBC'),
(32, 'Rsju', 'xyz', 'anuppur', 'Anuppur', 40, 'AB+', 'raju333@gmail.com', 1541634121, 'Ma', 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_blood`
--

CREATE TABLE `exchange_blood` (
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL,
  `bgroup` varchar(50) DEFAULT NULL,
  `Ebgroup` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchange_blood`
--

INSERT INTO `exchange_blood` (`name`, `fname`, `address`, `city`, `age`, `pincode`, `email`, `mno`, `bgroup`, `Ebgroup`, `gender`, `category`, `id`) VALUES
('mona', 'ajay', 'sdfgh', 'anuppur', '20', '484224', 'rathourmona76@gmail.com', '3456456', 'O+', 'AB-', 'on', 'SC', 5),
('mona', 'baburam', 'senduri', 'Anuppur', '21', '', 'rathourmona76@gmail.com', '9787662223', 'A-', 'AB+', 'on', 'OBC', 10),
('pranshu', 'ajay', 'parasi', 'Anuppur', '15', '484224', 'pransu111@gmail.com', '9787662223', 'O-', 'AB+', NULL, 'GENERAL', 11),
('punam', 'sdfgsdfg', 'pipariya', 'Anuppur', '21', '', 'jlk,', '3456456', 'O+', 'AB+', NULL, 'GENERAL', 12),
('shalu', 'rakesh', 'anuppur', 'Anuppur', '20', '484224', 'shalu222@gmail.com', '345645644', 'AB+', 'A-', 'Female', 'OBC', 35),
('punam', 'baburam', '', 'Anuppur', '', '484224', '', '1541634121', 'A-', 'B-', 'Female', 'OBC', 36);

-- --------------------------------------------------------

--
-- Table structure for table `out_stoke`
--

CREATE TABLE `out_stoke` (
  `id` int(11) NOT NULL,
  `bname` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_stoke`
--

INSERT INTO `out_stoke` (`id`, `bname`, `name`, `mno`) VALUES
(1, 'O+', 'mona', '3456456'),
(4, 'A+', 'Mona', '2147483647'),
(30, 'O+', 'punam', '1541634121'),
(36, 'AB+', 'pranshu', '2147483647'),
(39, 'AB+', 'shalu', '345645644'),
(40, 'A-', 'punam', '1541634121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `exchange_blood`
--
ALTER TABLE `exchange_blood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `out_stoke`
--
ALTER TABLE `out_stoke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `exchange_blood`
--
ALTER TABLE `exchange_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `out_stoke`
--
ALTER TABLE `out_stoke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
