-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2018 at 07:03 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Chair'),
(2, 'Television set'),
(3, 'Living Room'),
(4, 'Table'),
(5, 'Sofa'),
(7, 'book case'),
(8, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `full_name`, `phone_number`, `email`, `message`) VALUES
(1, 'hassan', 900011219, 'hassan@hassan.com', 'text'),
(2, 'admin', 900011219, 'hassan@hassan.com', 'good website thanks'),
(3, 'mhd', 911122233, 'mhd@admin.com', 'this is the message text');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(50) NOT NULL,
  `i_description` varchar(200) NOT NULL,
  `i_price` int(11) NOT NULL,
  `i_img` varchar(50) NOT NULL,
  `i_category` int(11) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `i_name`, `i_description`, `i_price`, `i_img`, `i_category`) VALUES
(1, 'Jagger Armchair', 'Arm Chairs to match your unique tastes and budget.', 210, 's1.jpeg', 1),
(2, 'Faza', 'to match your unique tastes and budget.', 51, 's7.jpeg', 8),
(3, 'Television set', '\r\na system for transmitting visual images and sound that are reproduced on screens,', 350, 's3.jpeg', 2),
(4, 'table', 'a piece of furniture with a flat top and one or more legs, providing a level surface on which objects may be placed', 100, 's2.jpeg', 7),
(5, 'Blake Sofa ', 'The sofa is probably the most essential piece of furniture in any home, therefore it\'s important to choose it carefully. ', 517, 's4.jpeg', 5),
(6, 'Colorful chairs', 'Shop Wayfair for the best colorful accent chairs', 100, 'bg3.jpeg', 1),
(7, 'desk table', 'home office desks and tables at great value prices', 27, 's5.jpeg', 4),
(8, 'desk table', 'home office desks and tables at great value prices', 52, 's9.jpeg', 4),
(9, 'sofa and table set', 'the best sofa table and end table sets', 1000, 'bg1.jpeg', 3),
(14, 'item2', 'this is the item2', 56, '07-26-31.jpeg', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
