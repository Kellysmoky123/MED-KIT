-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 11:38 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `ccode` varchar(30) NOT NULL,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `ccode`, `cname`) VALUES
(1, 'C100', 'Antibacterial & Antifungal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(40) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `upass`, `utype`) VALUES
(1, 'kannan@gmail.com', 'kannan', 'user'),
(0, 'admin@gmail.com', 'admin', 'admin'),
(1002, 'skpharma@gmail.com', 'skpharma', 'medicalstore');

-- --------------------------------------------------------

--
-- Table structure for table `mbrand`
--

CREATE TABLE IF NOT EXISTS `mbrand` (
  `mbid` int(10) NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) NOT NULL,
  PRIMARY KEY (`mbid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mbrand`
--

INSERT INTO `mbrand` (`mbid`, `bname`) VALUES
(1, 'Cream');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `amt` varchar(10) NOT NULL,
  `mdte` varchar(10) NOT NULL,
  `edte` varchar(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `vid` varchar(10) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`mid`, `bname`, `cname`, `mname`, `img`, `weight`, `qty`, `amt`, `mdte`, `edte`, `sname`, `vid`) VALUES
(1, 'Cream', 'Antibacterial & Antifungal', 'Betamil Gm', 'flexi.jpg', '25 g', '18', '29', '2021-09-07', '2022-01-31', 'S K Pharma', '1002');

-- --------------------------------------------------------

--
-- Table structure for table `mshop`
--

CREATE TABLE IF NOT EXISTS `mshop` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `lno` varchar(30) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1003 ;

--
-- Dumping data for table `mshop`
--

INSERT INTO `mshop` (`mid`, `name`, `addr`, `place`, `pincode`, `lno`, `oname`, `phno`, `email`) VALUES
(1001, '', '', '', '', '', '', '', ''),
(1002, 'S K Pharma', 's k pharma\r\nharippadu', 'Harippadu', '690505', 'LN sk1001', 'vindhuja', '8907446633', 'skpharma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `rqid` int(10) NOT NULL AUTO_INCREMENT,
  `mid` varchar(10) NOT NULL,
  `vid` varchar(10) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `amt` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `dte` varchar(10) NOT NULL,
  `tamt` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`rqid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rqid`, `mid`, `vid`, `mname`, `amt`, `qty`, `dte`, `tamt`, `uid`, `name`, `addr`, `phno`, `status`) VALUES
(1, '1', '1002', 'Betamil Gm', '29', '2', '2021-09-07', '58', '1', 'Kannan', 'Kannan Bhavanam', '9544241531', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `mname` varchar(50) NOT NULL,
  `mdte` varchar(10) NOT NULL,
  `edte` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `vid` varchar(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`sid`, `mname`, `mdte`, `edte`, `qty`, `vid`) VALUES
(1, 'Betamil gm', '2021-09-08', '2022-01-08', '25', '1002');

-- --------------------------------------------------------

--
-- Table structure for table `ureg`
--

CREATE TABLE IF NOT EXISTS `ureg` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`rid`, `name`, `addr`, `gen`, `phno`, `email`) VALUES
(1, 'Kannan', 'Kannan Bhavanam', 'male', '9544241531', 'kannan@gmail.com');
