-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2015 at 12:33 PM
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
(1, 1, 1, 'Installation Complete', 'Y', 'testing  comments'),
(2, 1, 2, 'Fire Dampers Open & Operational', 'N', ''),
(3, 1, 3, 'Balancing Dampers Open', 'N/A', ''),
(4, 1, 4, 'Grilles & Diffuser Open', 'Y', ''),
(5, 1, 5, 'Fan Chambers Clean', 'N', ''),
(6, 1, 6, 'Ductwork Clean', 'N/A', ''),
(7, 1, 7, 'Transit Bolts Removed', 'Y', ''),
(8, 1, 8, 'Pulleys Secure On Shaft', 'N', ''),
(9, 1, 9, 'Pulley Alignment & Belt Tension', 'N/A', ''),
(10, 1, 10, 'Motor & Pump Bearing Lubrication', 'Y', ''),
(11, 1, 11, 'Filters In Position & Clean', 'N', ''),
(12, 1, 12, 'Drive Guards Fitted', 'N/A', ''),
(13, 1, 13, 'Starter Overload Settings', 'Y', ''),
(14, 1, 14, 'Electrical Supply Available', 'N', ''),
(15, 1, 15, 'Direction Of Rotation Of Motor Shaft', 'N/A', ''),
(16, 1, 16, 'Motor Running Currents (All Phases)', 'Y', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `backflush`
--

INSERT INTO `backflush` (`id`, `reference`, `comments`, `temperature`) VALUES
(1, '101', 'Comments testing', 12.25),
(2, '123', 'Testing comments', 10.00),
(3, '102', 'comments', 10.00),
(5, '108', 'comments', 12.00),
(6, '112', 'testing', 15.00),
(7, '110', 'edit  test', 10.50),
(8, '110', 'edit ', 10.50),
(20, '103', 'testign comments', 10.00),
(22, '121', 'flashdata1', 21.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `directvolume`
--

INSERT INTO `directvolume` (`id`, `reference`, `grillesize`, `designvolume`, `finalvolume`, `correctionfactor`, `actualvolume`, `percentage`, `settings`, `comments`) VALUES
(2, '101', 3, 10.00, 20.00, 10.00, 200.00, 9.99, 'settings', 'Testing'),
(3, '102', 25, 12.00, 20.00, 5.50, 110.00, 9.17, 'settings', 'comments'),
(5, '108', 3, 12.00, 12.00, 50.00, 600.00, 9.99, 'testing', 'comments');

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
(1, 1, 'general testing comments');

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
  `date` varchar(50) NOT NULL,
  `refno` int(50) NOT NULL,
  `totnopages` int(50) NOT NULL,
  `client` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projectprocess`
--

INSERT INTO `projectprocess` (`id`, `engineername`, `project`, `system`, `date`, `refno`, `totnopages`, `client`) VALUES
(1, 'Test', 'Water Treatment', 'system', '14-10-2015', 101, 10, 'ParkLane');

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
/*.col-sm-12 {

}*/
#example2_wrapper table{
    overflow-x:auto;
}
