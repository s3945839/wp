-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 01:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsvictoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petid` int(11) NOT NULL,
  `petname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `age` double NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petid`, `petname`, `description`, `image`, `caption`, `age`, `location`, `type`) VALUES
(1, 'Milo', 'Friendly cat,', 'cat1.jpeg', 'Resting on floor', 3, 'Melbourne CBD', 'Cat'),
(2, 'Baxter', 'Nice Dog', 'dog1.jpeg', 'dogimage', 5, 'Cape Woolmai', 'Dog'),
(10, 'dog 2', 'dog 2 desc', 'dog2.jpeg', 'dog 2 ', 2, 'loc 2', 'dog'),
(11, 'dog 2', 'dog 2 desc', 'dog2.jpeg', 'dog 2 ', 2, 'loc 2', 'dog'),
(12, 'dog 2', 'dog 2 desc', 'dog2.jpeg', 'dog 2 ', 2, 'loc 2', 'dog'),
(13, 'dog 2', 'dog 2 desc', 'dog2.jpeg', 'dog 2 ', 2, 'loc 2', 'dog'),
(14, 'cat4', '6cat', 'cat4.jpeg', 'cat', 5, 'here', 'cat'),
(15, 'cat4', '6cat', 'cat4.jpeg', 'cat', 5, 'here', 'cat'),
(16, 'dog7', 'a helpful dog', 'dog3.jpeg', 'dog', 6, 'unknown', 'dog'),
(17, 'cat33', 'good pet ', 'cat3.jpeg', 'cat', 4, 'anywhere', 'cat'),
(18, 'fffff', 'none', 'dog4.jpeg', 'dog', 4, 'somewhere', 'cat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
