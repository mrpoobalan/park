-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2015 at 08:53 PM
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
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `propertyname` varchar(255) NOT NULL,
  `propertycheck` char(1) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airsystem`
--

INSERT INTO `airsystem` (`id`, `pid`, `propertyid`, `propertyname`, `propertycheck`, `comments`) VALUES
(1, 1, 1, 'Installation Complete', 'Y', 'Installation Complete'),
(2, 1, 2, 'Fire Dampers Open & Operational', 'N', 'Fire Dampers Open & Operational comments');

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
(1, 'Test', 'Water Treatment', 'system', '2015-10-25', 101, 10, 'ParkLane');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
