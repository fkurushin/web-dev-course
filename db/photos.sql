-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2023 at 02:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `PhotoID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Thumb` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`PhotoID`, `Title`, `Description`, `Thumb`, `Photo`) VALUES
(1, 'John Lennon', 'Legendary musician and member of The Beatles.', 'John Lennon.jpg', 'John Lennon_small.jpg'),
(2, 'Karl Marx', 'German philosopher, economist, and political theorist.', 'Karl Marx.jpg', 'Karl Marx_small.jpg'),
(3, 'Naomi Campbell', 'Renowned British supermodel and businesswoman.', 'Naomi Campbell.jpg', 'Naomi Campbell_small.jpg'),
(4, 'Paris Hilton', 'American media personality, socialite, and businesswoman.', 'Paris Hilton.jpg', 'Paris Hilton_small.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`PhotoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `PhotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
