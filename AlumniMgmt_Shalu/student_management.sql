-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:27 PM
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
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_admin`
--

CREATE TABLE `student_admin` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_admin`
--

INSERT INTO `student_admin` (`name`, `email`, `password`) VALUES
('shalu', 'ns6533208@gmail.com', 'shalu123');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `rollnumber` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `passout` varchar(25) NOT NULL,
  `persent` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`firstname`, `lastname`, `rollnumber`, `email`, `phonenumber`, `branch`, `passout`, `persent`) VALUES
('saif', 'khan', '19111c04017', 'saifkhan123@gmai.com', '7987163138', 'cs', '2020', '7.1'),
('saif', 'khan', '19111c04017', 'saifkhan123@gmai.com', '7987163138', 'cs', '2020', '7.1'),
('shalu', 'sahu', '19111c04039', 'ns6533208@gmail.com', '8305359937', 'cs', '2020', '8.4'),
('sneha ', 'gupta', '19111c04045', 'ns65bhvc08@gmail.com', '1234567892', 'cs', '2020', '8.5'),
('abhishek', 'dwivedi', '19111c04014', 'omprakash03mishra@gamil.c', '8305359937', 'cs', '2018', '6.5'),
('shalu', 'sahu', '19111c04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111c04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111c04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('poonm', 'sahu', '19111c04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('mona', 'rathor', '19111c04077', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('omprakash', 'mishra', '19111c04017', 'omprakash03mishra@gamil.c', '', 'cs', '2017', '6.5'),
('abhishek', 'dwivedi', '19111c04017', 'omprakash03mishra@gamil.c', '8305359937', 'cs', '2017', '6.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '8.5'),
('shalu', 'sahu', '19111c04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111m04017', 'ns6533208@gmail.com', '8305359937', 'et', '2017', '6.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('shalu', 'sahu', '19111e04017', 'ns6533208@gmail.com', '8305359937', 'cs', '2017', '8.5'),
('bgjfkgf', 'nbmgbfg', '1346534788', 'ns6533208@gmiao.cpm', '45436457y65', 'cs', '2017', '45'),
('', '', '', '', '', 'cs', '2017', ''),
('', '', '', '', '', 'cs', '2017', ''),
('shalu', 'sahu', '19111c04039', 'ns6533208@gmiao.cpm', '45436457y65', 'cs', '2019', '89'),
('poonam', 'sharma', '19111c04035', 'ns6533208@gmiao.cpm', '4543645734', 'cs', '2020', '45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
