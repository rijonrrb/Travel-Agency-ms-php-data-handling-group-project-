-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 10:02 AM
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
-- Database: `projectt&t`
--

-- --------------------------------------------------------

--
-- Table structure for table `officecontact`
--

CREATE TABLE `officecontact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `web` text NOT NULL,
  `email` text NOT NULL,
  `youtube` text NOT NULL,
  `fb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officecontact`
--

INSERT INTO `officecontact` (`id`, `address`, `phone`, `web`, `email`, `youtube`, `fb`) VALUES
(1, '408/1, Kuratoli, Dhaka 1229', '+88 02 841 4046-9', 'https://www.aiub.edu/', 'info@aiub.edu', 'https://www.youtube.com/channel/UCpwnTakRAAks9hpPr_ySxog', 'https://www.facebook.com/aiub.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officecontact`
--
ALTER TABLE `officecontact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officecontact`
--
ALTER TABLE `officecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
