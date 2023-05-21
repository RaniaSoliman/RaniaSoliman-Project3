-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2023 at 06:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3db`
--

-- --------------------------------------------------------

--
-- Table structure for table `project3tb`
--

CREATE TABLE `project3tb` (
  `id` int(10) NOT NULL,
  `heading` varchar(80) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project3tb`
--

INSERT INTO `project3tb` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(22, 'Halifax', '2023-05-25', 34, 'jkfh ehfeuiwf oiuhoiew ofdju oijusdfejfoeijfo'),
(23, 'Sydney', '2023-06-20', 5, 'This is the second trip'),
(28, 'Trip3', '2023-05-25', 4, 'This is the third trip'),
(29, 'Trip 4', '2023-06-09', 9, 'This is the fourth trip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project3tb`
--
ALTER TABLE `project3tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project3tb`
--
ALTER TABLE `project3tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
