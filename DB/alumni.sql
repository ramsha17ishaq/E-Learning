-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 06:52 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `images` text NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `images`, `contact`, `email`) VALUES
(1, 'admin', 'admin', '', '', '', ''),
(2, 'afzal127', 'afzal', 'Mohammad Afzal', 'BeautyPlus_20170415220001_save.jpg', '7275246631', 'royalbeing0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(1, '      \r\n    This is Afzal plz reply fast'),
(2, 'Live Seminor At LU CA,Lucknow-University on Monday 26 April 2019.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `images` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pyear` varchar(4) NOT NULL,
  `dept` varchar(70) NOT NULL,
  `course` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `org` varchar(100) NOT NULL,
  `verify` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `name`, `dob`, `images`, `address`, `contact`, `email`, `pyear`, `dept`, `course`, `des`, `org`, `verify`) VALUES
(1, 'afzal123', 'afzal', 'Mohammad Afzal', '07-11-1997', 'BeautyPlus_20170205165848_save.jpg', 'akbarigate, chowk, Lucknow', '72752466311', 'royalbeing0@gmail.com', '2019', 'Department of Computer Science', 'B.C.A', 'JOB', 'Analyze Infotech, Lucknow', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
