-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2015 at 07:48 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parklane`
--

-- --------------------------------------------------------

--
-- Table structure for table `airsystem`
--

CREATE TABLE IF NOT EXISTS `airsystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `propertyname` varchar(255) NOT NULL,
  `propertycheck` char(5) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `airsystem`
--

INSERT INTO `airsystem` (`id`, `pid`, `propertyid`, `propertyname`, `propertycheck`, `comments`) VALUES
(1, 1, 1, 'Installation Complete', 'Y', 'comments one'),
(2, 1, 2, 'Fire Dampers Open & Operational', 'N', 'comments one'),
(3, 1, 3, 'Balancing Dampers Open', 'N/A', 'comments one'),
(4, 1, 4, 'Grilles & Diffuser Open', 'Y', 'comments one'),
(5, 1, 5, 'Fan Chambers Clean', 'N', 'comments one'),
(6, 1, 6, 'Ductwork Clean', 'N/A', 'comments one'),
(7, 1, 7, 'Transit Bolts Removed', 'Y', 'comments one'),
(8, 1, 8, 'Pulleys Secure On Shaft', 'N', 'comments one'),
(9, 1, 9, 'Pulley Alignment & Belt Tension', 'N/A', 'comments one'),
(10, 1, 10, 'Motor & Pump Bearing Lubrication', 'Y', 'comments one'),
(11, 1, 11, 'Filters In Position & Clean', 'N', 'comments one'),
(12, 1, 12, 'Drive Guards Fitted', 'N/A', 'comments one'),
(13, 1, 13, 'Starter Overload Settings', 'Y', 'comments one'),
(14, 1, 14, 'Electrical Supply Available', 'N', 'comments one'),
(15, 1, 15, 'Direction Of Rotation Of Motor Shaft', 'N/A', 'comments one'),
(16, 1, 16, 'Motor Running Currents (All Phases)', 'Y', 'comments one');

-- --------------------------------------------------------

--
-- Table structure for table `backflush`
--

CREATE TABLE IF NOT EXISTS `backflush` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `temperature` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `backflush`
--

INSERT INTO `backflush` (`id`, `reference`, `comments`, `temperature`) VALUES
(1, '101', 'temperature', 10.50),
(2, '101', 'temperature', 10.50),
(3, '101', 'required', 10.50),
(4, '102', 'comments 102', 11.50),
(5, '102', 'comments 102', 11.50),
(6, '103', 'test', 121.50),
(7, '101', 'temperature', 10.50),
(8, '101', 'temperature', 10.50),
(9, '101', 'required', 10.50),
(10, '102', 'comments 102', 11.50),
(11, '102', 'comments 102', 11.50),
(12, '103', 'test', 121.50),
(13, '101', 'temperature', 10.50),
(14, '101', 'temperature', 10.50),
(15, '101', 'required', 10.50),
(16, '102', 'comments 102', 11.50),
(17, '102', 'comments 102', 11.50),
(18, '103', 'test', 121.50),
(19, '108', '', 121.50),
(20, '123', 'Testing comments', 100.40);

-- --------------------------------------------------------

--
-- Table structure for table `directvolume`
--

CREATE TABLE IF NOT EXISTS `directvolume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(50) NOT NULL,
  `grillesize` int(50) NOT NULL,
  `designvolume` float(10,2) NOT NULL,
  `finalvolume` float(10,2) NOT NULL,
  `correctionfactor` float(10,2) NOT NULL,
  `actualvolume` float(10,2) NOT NULL,
  `percentage` float(3,2) NOT NULL,
  `settings` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `directvolume`
--

INSERT INTO `directvolume` (`id`, `reference`, `grillesize`, `designvolume`, `finalvolume`, `correctionfactor`, `actualvolume`, `percentage`, `settings`, `comments`) VALUES
(1, '101', 2, 10.00, 20.00, 5.50, 110.00, 9.99, 'testing', 'testing completed'),
(2, '102', 20, 25.00, 15.00, 20.00, 300.00, 9.99, 'settings', 'settings comments comments'),
(4, '103', 25, 10.00, 12.00, 10.00, 120.00, 9.99, 'testing', 'besgin');

-- --------------------------------------------------------

--
-- Table structure for table `processcomments`
--

CREATE TABLE IF NOT EXISTS `processcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `processcomments`
--

INSERT INTO `processcomments` (`id`, `projectid`, `comments`) VALUES
(1, 1, 'Project process has completed');

-- --------------------------------------------------------

--
-- Table structure for table `processtitle`
--

CREATE TABLE IF NOT EXISTS `processtitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `processtitle`
--

INSERT INTO `processtitle` (`id`, `title`) VALUES
(1, 'General'),
(2, 'Fan Mechanical Checks'),
(3, 'Electrical Checks'),
(4, 'Initial Start');

-- --------------------------------------------------------

--
-- Table structure for table `projectprocess`
--

CREATE TABLE IF NOT EXISTS `projectprocess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engineername` varchar(50) NOT NULL,
  `project` varchar(255) NOT NULL,
  `system` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `refno` int(50) NOT NULL,
  `totnopages` int(50) NOT NULL,
  `client` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projectprocess`
--

INSERT INTO `projectprocess` (`id`, `engineername`, `project`, `system`, `date`, `refno`, `totnopages`, `client`) VALUES
(1, 'Test', 'Water Treatment', 'system', '2015-10-12', 101, 10, 'ParkLane');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `processtitle` varchar(255) NOT NULL,
  `projectprocess` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `processtitle`, `projectprocess`) VALUES
(1, 'General', 'Installation Complete'),
(2, 'General', 'Fire Dampers Open & Operational'),
(3, 'General', 'Balancing Dampers Open'),
(4, 'General', 'Grilles & Diffuser Open'),
(5, 'General', 'Fan Chambers Clean'),
(6, 'General', 'Ductwork Clean'),
(7, 'Fan Mechanical Checks', 'Transit Bolts Removed'),
(8, 'Fan Mechanical Checks', 'Pulleys Secure On Shaft'),
(9, 'Fan Mechanical Checks', 'Pulley Alignment & Belt Tension'),
(10, 'Fan Mechanical Checks', 'Motor & Pump Bearing Lubrication'),
(11, 'Fan Mechanical Checks', 'Filters In Position & Clean'),
(12, 'Fan Mechanical Checks', 'Drive Guards Fitted'),
(13, 'Electrical Checks', 'Starter Overload Settings'),
(14, 'Electrical Checks', 'Electrical Supply Available'),
(15, 'Initial Start', 'Direction Of Rotation Of Motor Shaft'),
(16, 'Initial Start', 'Motor Running Currents (All Phases)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
