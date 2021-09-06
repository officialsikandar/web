-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2021 at 10:47 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobno` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `username`, `email`, `mobno`) VALUES
(1, 'chetan', 'deepak.com', 4444444),
(2, 'naksh', 'naksh.com', 55555),
(3, 'vishal', 'vishal.com', 55555),
(4, 'vishal', 'vishal@', 214),
(5, 'yogesh', 'chetan.com', 5413),
(6, 'yogesh', 'chetan.com', 5413),
(7, 'yogesh', 'chetan.com', 5413),
(8, 'yogesh', 'chetan.com', 5413),
(9, 'yogesh', 'chetan.com', 5413),
(10, 'deepu', 'chetanjangid1992@gmail.com', 214),
(11, 'deepu', 'chetanjangid1992@gmail.com', 214),
(12, 'deepu', 'chetanjangid1992@gmail.com', 214),
(13, 'yogesh', 'fdsf', 546),
(14, 'yogesh', 'fdsf', 546);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
