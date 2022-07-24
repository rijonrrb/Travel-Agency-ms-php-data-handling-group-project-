-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 10:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ID` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `praddress` varchar(100) NOT NULL,
  `peaddress` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ID`, `fname`, `lname`, `fullname`, `gender`, `dob`, `religion`, `praddress`, `peaddress`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Sakib', 'Rijon', 'Sakib Hossain Rijon', 'Male', '2021-08-04', 'Islam', 'Mamudpur, Bhuigor, Narayanganj Sadar, Narayanganj', 'Mamudpur, Bhuigor, Narayanganj Sadar, Narayanganj', '+8801679185540', 'sakibrrb77@gmail.com', 'rrb1', '123'),
(2, 'Bithi', 'Akter', 'Bithi Akter', 'Male', '2021-08-06', 'Islam', 'Mamudpur, Bhuigor, 1234', 'Mamudpur, Bhuigor, N113', '+8801679123', 'sdkrrb11124@gmail.com', 'rrb123', '123'),
(3, '88', 'Sakib Hossain Rijon', 'Male', '2021-08-10', 'Islam', 'Mamudpur, Bhuigor, Narayanganj Sadar, Narayanganj', 'Mamudpur, Bhuigor, Narayanganj Sadar, Narayanganj', 'sakibrrb77@gmail.com', '+8801679185540', 'Tour Package', '456', '2021-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
