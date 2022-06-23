-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `c.name` varchar(25) NOT NULL,
  `date_time` varchar(25) NOT NULL,
  `c.number` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`c.name`, `date_time`, `c.number`, `address`) VALUES
('asxassax', 'dscdd', 'sdde', 'ddssde'),
('uheuheuhjeujh', '32ruhiefeqeqwfoeqwf', 'ejonejioejipoejipeqw', 'ojihjohjnkwjklqwe'),
('shalu', '12-2-22', '1234567890', 'anuppur'),
('shubhas', '12-2-22', '1234567890-', 'anuppur'),
('asxassax', '12-2-22', 'sdde', 'ojihjohjnkwjklqwe'),
('ritik', '12-2-22', '134w76236', 'riti'),
('asxassax', '12-2-22', '134w76236', 'anuppur'),
('edrf', 'fgv', 'fr', 'rfvg'),
('', '', '', ''),
('', '', '', ''),
('bhumi', '31-05-22', '9516990617', 'anuppur'),
('aditya', '12-2-22', '1234567890', 'anuppur'),
('sneha', '12-2-22', '12345678906', 'burhar'),
('ritiknh', '12-2-22', '134w76236', 'anuppur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
