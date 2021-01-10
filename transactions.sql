-- phpMyAdmin SQL Dump
-- version 7.3.12
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 06:03 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100),
  `customer_email` varchar(200),
  `customer_balance`,int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`sno`, `customer_name`, `customer_email`,`customer_balance`) VALUES
('sarada', 'sarada@gmail.com', '10000'),
('bhaskar', 'bhaskar@gmail.com', '9000'),
('shivani', 'shivani@gmail.com', '8000'),
('nikhila', 'nikhila@gmail.com', '7000'),
('sireesha', 'sireesha@gmail.com', '6000'),
('jagadeesh', 'jagadeesh@gmail.com', '10000'),
('naveen', 'naveen@gmail.com', '9000'),
('usha', 'usha@gmail.com', '9000'),
('deepika', 'deepika@gmail.com', '4000'),
('sai', 'sai@gmail.com', '2000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;