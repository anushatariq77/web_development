-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2018 at 03:15 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `email`, `password`) VALUES
(1, 'rija', 'rijanadeem@gmail.com', 'rijanadeem'),
(2, 'bushra', 'bushraakhtar@gmail.com', 'bushraakhtar'),
(3, 'anusha', 'anushatariq@gmail.com', 'anushatariq');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `brand` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `model` int(7) NOT NULL,
  `fuel_economy` varchar(12) NOT NULL,
  `price` int(15) NOT NULL,
  `category` varchar(15) NOT NULL,
  `seat_capacity` int(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(10) NOT NULL,
  `color` varchar(15) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`cid`, `brand`, `cname`, `model`, `fuel_economy`, `price`, `category`, `seat_capacity`, `image`, `fuel_type`, `color`) VALUES
(1, 'toyota', 'corolla 1.3 M.T', 2016, '10-12 km/l', 1800000, 'sedan', 5, 'corolla 1.3 M.T.jpg', 'petrol', 'grey'),
(2, 'honda', 'civic 1.8 M.T', 2017, '7-8 km/l', 2200000, 'sedan', 5, 'civic 1.8 M.T.jpg', 'petrol', 'black'),
(3, 'honda', 'city 1.3 M.T', 2014, '13-14 km/l', 1550000, 'sedan', 5, 'city 1.3 M.T.jpg', 'cng', 'white'),
(4, 'honda', 'city 1.3 M.T', 2014, '13-14 km/l', 1550000, 'sedan', 5, 'city 1.3 M.T.jpg', 'cng', 'white'),
(5, 'toyota', 'vitz 1.0 M.T', 2010, '16-17 km/l', 1010000, 'hatchback', 4, 'vitz 1.0 M.T.jpg', 'petrol', 'purple'),
(6, 'suzuki', 'alto 1.0 M.T', 2012, '8-9 km/l', 650000, 'hatchback', 4, 'alto 1.0 M.T.jpg', 'petrol', 'red'),
(7, 'suzuki', 'wagon R 1.0 M.T', 2017, '17-20 km/l', 1100000, 'wagon', 4, 'wagon R 1.0 M.T.jpg', 'cng', 'red'),
(8, 'suzuki', 'cultus 1.0 M.T', 2014, '9-10 km/l', 700000, 'hatchback', 4, 'cultus 1.0 M.T.jpg', 'petrol', 'white'),
(9, 'suzuki', 'liana 1.3 M.T', 2010, '10-12 km/l', 800000, 'sedan', 5, 'liana 1.3 M.T.jpg', 'petrol', 'blue'),
(10, 'daihatsu', 'cuore 0.6 M.T', 2008, '20-23 km/l', 450000, 'hatchback', 4, 'cuore 0.6 M.T.jpg', 'cng', 'red'),
(11, 'toyota', 'hilux 3.0 M.T', 2012, '10-12 km/l', 3300000, 'sedan', 5, 'hilux 3.0 M.T.jpg', 'cng', 'white'),
(12, 'mercedes', 'kompressor 2.0 M.T', 2008, '8-9 km/l', 2, 'sedan', 4, 'kompressor 2.0 M.T.jpg', 'petrol', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(2) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'rija', 'nadeem', 'rijaynadeem@gmail.com', 'rijanadeem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
