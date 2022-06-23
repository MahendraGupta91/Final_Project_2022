-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordernow`
--

CREATE TABLE `ordernow` (
  `name` varchar(10) NOT NULL,
  `number` varchar(13) NOT NULL,
  `orderf` varchar(25) NOT NULL,
  `additionalfood` varchar(25) NOT NULL,
  `howmuch` varchar(3) NOT NULL,
  `address` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordernow`
--

INSERT INTO `ordernow` (`name`, `number`, `orderf`, `additionalfood`, `howmuch`, `address`, `message`, `dt`) VALUES
('adity', '1234567890', 'biryani', 'wine', '4', 'fvgsdgsdfgdfgfdg', 'fgdgdfhgdfhfghfg', '2022-05-26 02:00:44'),
('aditya', '14', 'hgt', 'gedg', '3', 'fds', 'gfg', '2022-05-31 01:37:55'),
('salu', '', '', '', '', '', '', '2022-05-31 01:40:35'),
('adity', '6', 'biryani', 'wine', '3', 'frff', 'fgrfger', '2022-05-31 01:52:23'),
('adity', '8', 'biryani', 'wine', '6', 'rajendra', 'uigd', '2022-06-22 04:31:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
