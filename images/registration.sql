-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2018 at 05:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `address`, `email`, `password`) VALUES
('brian', '', '', '', 'james@yahoo.com', 'ce47d07243bb6eaf5e1322c81baf9bbf'),
('tada', '', '', '', 'data@yahoo.com', '8d777f385d3dfec8815d20f7496026dc'),
('bejy', 'biran', 'james', 'tuyabang alto', 'beje@gmail.com', '8d777f385d3dfec8815d20f7496026dc'),
('bejy', 'james', 'cabantac', 'tuyabang alto', 'noitshilarious@gmail.com', '8d777f385d3dfec8815d20f7496026dc'),
('oppa', 'brian', 'cabantac', 'south beach', 'oppaidasuki69@gmail.com', '4c193eb3ec2ce5f02b29eba38621bea1'),
('bridge', 'tower', 'tall', 'italy', 'bridge@gmail.com', '78f5c48dcfbb8b14abe76adc3daa0600');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
