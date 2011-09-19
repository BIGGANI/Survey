-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2011 at 04:54 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `submits`
--

CREATE TABLE IF NOT EXISTS `submits` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `receiptnumber` varchar(255) NOT NULL,
  `customerservice` varchar(255) NOT NULL,
  `knowledge` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `qualityproducts` varchar(255) NOT NULL,
  `qualityservice` varchar(255) NOT NULL,
  `responsiveness` varchar(255) NOT NULL,
  `easeofuse` varchar(255) NOT NULL,
  `comments` longtext NOT NULL,
  `contact` varchar(255) NOT NULL,
  `confnumber` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `submits`
--

INSERT INTO `submits` (`id`, `name`, `email`, `phone`, `receiptnumber`, `customerservice`, `knowledge`, `facility`, `qualityproducts`, `qualityservice`, `responsiveness`, `easeofuse`, `comments`, `contact`, `confnumber`, `date`) VALUES
(3, 'Tim Cassels', 'cassels2025@gmail.com', '928-614-4945', 'POS4', '1', '5', '5', '5', '5', '5', '5', 'Thise are my comments!!!', 'No', '572911927', ''),
(4, 'Tim', 'email', 'Phone', 'POS5', '5', '5', '5', '5', '5', '5', '5', 'I hate you.', 'No', '1764729847', '2011-09-18');
