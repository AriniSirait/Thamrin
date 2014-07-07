-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2014 at 11:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datapm`
--

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE IF NOT EXISTS `summary` (
  `msn` varchar(10) NOT NULL,
  `periode` int(11) NOT NULL,
  `flag` smallint(6) NOT NULL,
  PRIMARY KEY (`msn`,`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`msn`, `periode`, `flag`) VALUES
('IEB0055', 4, 1),
('IEB0055', 5, 1),
('IEB0058', 3, 1),
('IEB0065', 5, 1),
('IEB0089', 4, 1),
('IEB0090', 4, 1),
('IEB0091', 4, 1),
('IEB0091', 5, 1),
('IEB0093', 4, 1),
('IEB0131', 6, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
