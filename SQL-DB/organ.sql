-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2020 at 10:14 AM
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
-- Table structure for table `add_doctor`
--

DROP TABLE IF EXISTS `add_doctor`;
CREATE TABLE IF NOT EXISTS `add_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fastName` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`id`, `fastName`, `Lastname`, `phone`, `address`, `email`, `password`, `designation`) VALUES
(1, 'doyal', 'islan', '16456464', 'West Akur Takur Para', 'doyal@gmail.com', 'doyal', 'MBBS');

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
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_relationship` varchar(100) NOT NULL,
  `e_phone` varchar(15) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `blood_group` varchar(30) DEFAULT NULL,
  `blood_donate` varchar(100) DEFAULT NULL,
  `organs_donate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `messages` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_request`
--

DROP TABLE IF EXISTS `post_request`;
CREATE TABLE IF NOT EXISTS `post_request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patientName` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `requiredorgan` varchar(100) NOT NULL,
  `prescription` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `donate_user` varchar(100) NOT NULL,
  `action` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_request`
--

INSERT INTO `post_request` (`id`, `patientName`, `address`, `phone`, `requiredorgan`, `prescription`, `email`, `donate_user`, `action`) VALUES
(1, 'Ruth', 'Dhaka', '017754646', 'eye', 'f5fe704076a3807.96236429.png', 'ruth@gmail.com', 'organ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup_user`
--

DROP TABLE IF EXISTS `signup_user`;
CREATE TABLE IF NOT EXISTS `signup_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `donate_user` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_user`
--

INSERT INTO `signup_user` (`id`, `firstname`, `lastname`, `phone`, `email`, `pass`, `address`, `donate_user`) VALUES
(1, 'Nazmul', 'Hossain', '01775151041', 'mdpappu006@gmail.com', '$2y$10$t5n541.cH/HOGyhtteTK1eV/Ifnj.1kYsyWUAkGyR3rZ8Y5d1M6Qm', 'West Akur Takur Para, Tangail', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
