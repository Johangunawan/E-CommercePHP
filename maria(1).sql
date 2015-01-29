-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2014 at 08:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maria`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(20) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Title`, `Description`, `Image`) VALUES
(4, 'Gambar 4', 'SEPATU DAN ANJING...', 'gambar04.jpg'),
(5, 'Gambar 5', 'Duis aute irure dolor in reprehenderit in voluptat', 'gambar05.jpg'),
(6, 'Lorem ipsum dolor', 'Duis aute irure dolor in reprehenderit in voluptat', 'gambar06.jpg'),
(7, 'Lorem ipsum dolor', 'Duis aute irure dolor in reprehenderit in voluptat', 'gambar07.jpg'),
(8, 'Lorem ipsum dolor', 'Duis aute irure dolor in reprehenderit in voluptat', 'gambar08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE IF NOT EXISTS `site_info` (
  `Site_name` varchar(20) NOT NULL,
  `Site_tagline` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
