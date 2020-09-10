-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2020 at 10:31 AM
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
-- Database: `masterproject`
--
CREATE DATABASE IF NOT EXISTS `masterproject` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `masterproject`;

-- --------------------------------------------------------

--
-- Table structure for table `codesave`
--

DROP TABLE IF EXISTS `codesave`;
CREATE TABLE IF NOT EXISTS `codesave` (
  `code` text,
  `id` int(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `codesave`
--

INSERT INTO `codesave` (`code`, `id`) VALUES
('window.alert(\"joi\");', NULL),
('window.alert(\"loi\");', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `moduleID` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`moduleID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
CREATE TABLE IF NOT EXISTS `progress` (
  `userID` int(11) NOT NULL,
  `moduleID` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `attempt` text,
  `noa` int(11) NOT NULL DEFAULT '0',
  `finished` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`userID`, `moduleID`, `timestamp`, `attempt`, `noa`, `finished`) VALUES
(123456, 1, '2020-09-10 08:29:40', 'document.vindElementMetId(\"box\").inHTML = \"go\";', 1, 0),
(123456, 2, '2020-09-06 22:00:00', NULL, 0, 0),
(123456, 3, '2020-09-06 22:00:00', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `password`) VALUES
(123456, 'password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
