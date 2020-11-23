-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2020 at 03:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `become_donor`
--

DROP TABLE IF EXISTS `become_donor`;
CREATE TABLE IF NOT EXISTS `become_donor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_relationship` varchar(100) NOT NULL,
  `e_phone` int(15) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `blood_donate` varchar(100) DEFAULT NULL,
  `organs_donate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `become_donor`
--

INSERT INTO `become_donor` (`id`, `firstname`, `lastname`, `age`, `email`, `phone`, `adress`, `city`, `gender`, `e_name`, `e_relationship`, `e_phone`, `e_email`, `e_address`, `blood_group`, `blood_donate`, `organs_donate`) VALUES
(1, 'John', 'Doe', 25, 'JohnDoe@gmail.com', 1919999999, 'Dhaka', 'Dhaka', 'Male', 'Ruth', 'wife', 1919999999, 'ruth@gmail.com', 'Dhaka', 'O+', 'blood', ''),
(2, 'Michael', 'clarke', 26, 'michaelclarke@gmail.com', 1812546321, 'Dhaka', 'Dhaka', 'Male', 'Ruth', '', 1812546321, 'ruth@gmail.com', 'Dhaka', 'A+', '', 'eyes'),
(3, 'Ruth', 'Jackson', 26, 'ruthjackson@gmail.com', 1840488752, 'Dhaka', 'Dhaka', 'Female', 'John', 'Husband', 1840488752, 'abc@gmail.com', 'Dhaka', 'A-', '', 'tissues');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `messages` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `phone`, `messages`) VALUES
(1, 'Nazmul', 'Hossain', 1775151041, 'your site needs to make more reliable :)');

-- --------------------------------------------------------

--
-- Table structure for table `post_request`
--

DROP TABLE IF EXISTS `post_request`;
CREATE TABLE IF NOT EXISTS `post_request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patientName` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(30) NOT NULL,
  `requiredorgan` varchar(100) NOT NULL,
  `prescription` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `donate_user` varchar(100) NOT NULL,
  `action` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_request`
--

INSERT INTO `post_request` (`id`, `patientName`, `address`, `phone`, `requiredorgan`, `prescription`, `email`, `donate_user`, `action`) VALUES
(1, 'User', 'Tangail', 1840488752, 'Blood', '', 'user@gmail.com', 'blood', 1),
(2, 'Mr A', 'Dhaka', 1845412125, 'eyes', '', 'mra@gmail.com', 'organ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup_user`
--

DROP TABLE IF EXISTS `signup_user`;
CREATE TABLE IF NOT EXISTS `signup_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `donate_user` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_user`
--

INSERT INTO `signup_user` (`id`, `firstname`, `lastname`, `phone`, `email`, `pass`, `address`, `donate_user`) VALUES
(1, 'Nazmul', 'Hossain', 1775151401, 'mdpappu006@gmail.com', '$2y$10$rneM3HF685fsY5ADGj53ae6OWdtGNrqHSYzDVPxqDuCGxzOcqwxD.', 'Tangail', 'blood'),
(2, 'John', 'Deo', 1840488452, 'Johndeo@gmail.com', '$2y$10$nr7OILtRetjlg1XqKZEjJeerzDvo6DZOWZraEu9gCzLm2eAyVrU4e', 'Dhaka', 'organ'),
(3, 'doyal', 'miah', 1726616402, 'm.doyalhossain83@gmail.com', '$2y$10$G7Kdb2.Pl2JjUgiFoFX9sOqLG/VULgheQQ10ks7/0IH3LRcQmME/q', 'Tangail', 'blood');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
