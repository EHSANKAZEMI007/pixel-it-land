-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2025 at 10:26 AM
-- Server version: 8.3.0
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picxel it`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user nam` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb3_persian_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user nam`, `phone`, `pass`) VALUES
(1, 'ehsan', '2533', '14121374'),
(2, 'ehsan', '33535', '14121374'),
(3, 'ehsan', 'دئدددئ', '14121374'),
(4, 'ehsan', 'ngngn', '14121374'),
(5, 'ehsan', '123', '1234'),
(6, 'ehsan', '444', '11228'),
(7, 'ehsan', 'ygbhjbh', '14121374'),
(8, 'ehsan', 'ذدلدلاد', '14121374'),
(9, 'ehsan', '2545', '11228');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
