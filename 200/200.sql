-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 12:29 PM
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
-- Database: `200`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladvertisement200`
--

CREATE TABLE `tbladvertisement200` (
  `advertisementID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `publish` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `imagePath` varchar(5000) NOT NULL,
  `contactNumber` int(15) NOT NULL,
  `email` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblinquiry200`
--

CREATE TABLE `tblinquiry200` (
  `inquiryID` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `advertisementID` int(11) NOT NULL,
  `inquiry` varchar(2000) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser200`
--

CREATE TABLE `tbluser200` (
  `email` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNumber` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser200`
--

INSERT INTO `tbluser200` (`email`, `name`, `contactNumber`, `password`) VALUES
('minura@gmail.com', 'minura', '0123456789', '123'),
('mal@gmail.com', 'mal', '9876543210', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladvertisement200`
--
ALTER TABLE `tbladvertisement200`
  ADD PRIMARY KEY (`advertisementID`);

--
-- Indexes for table `tblinquiry200`
--
ALTER TABLE `tblinquiry200`
  ADD PRIMARY KEY (`inquiryID`);

--
-- Indexes for table `tbluser200`
--
ALTER TABLE `tbluser200`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladvertisement200`
--
ALTER TABLE `tbladvertisement200`
  MODIFY `advertisementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblinquiry200`
--
ALTER TABLE `tblinquiry200`
  MODIFY `inquiryID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
