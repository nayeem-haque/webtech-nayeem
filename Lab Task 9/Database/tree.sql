-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 12:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `stock` int(20) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `planted` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `name`, `stock`, `variant`, `planted`, `image`) VALUES
(1, 'Rain Tree', 10, 'Rainy', 20, 'nature-scene-with-rain-in-forest-background-vector-23130629.jpg'),
(2, 'Rain Tree', 15, 'Rainy', 20, 'nature-scene-with-rain-in-forest-background-vector-23130629.jpg'),
(3, 'Rain Tree', 10, 'Rainy', 20, 'nature-scene-with-rain-in-forest-background-vector-23130629.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
