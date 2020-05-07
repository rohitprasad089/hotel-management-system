-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 11:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(50) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `total_qty` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `room_type`, `room_name`, `total_qty`, `quantity`, `price`) VALUES
(1, 'AC', 'suite', '5', 4, '2500'),
(2, 'AC', 'standard', '15', 5, '3000'),
(3, 'AC', 'family', '5', 4, '3500'),
(5, 'AC', 'luxary', '5', 4, '4500'),
(6, 'AC', 'superior', '5', 4, '3000'),
(7, 'NON AC', 'suite', '5', 5, '2000'),
(8, 'NON AC', 'standard', '5', 5, '2500'),
(9, 'NON AC', 'family', '5', 5, '3000'),
(10, 'NON AC', 'luxary', '5', 5, '3500'),
(12, 'NON AC', 'superior', '5', 5, '4500'),
(13, 'AC', 'private', '5', 5, '5000'),
(14, 'NON AC', 'special', '2', 2, '10000');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(255) NOT NULL,
  `booking_date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adults` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `booking_date`, `fullname`, `check_in`, `check_out`, `adults`, `children`, `phone`, `email`, `time`, `room_name`, `room_type`) VALUES
(1, '2020-04-15', 'rohit PRASAD prasad', '2020-04-20', '2020-04-26', 2, 0, '7908591508', 'rohitprasad089@gmail.com', '', 'family', 'AC'),
(2, '2020-04-16', 'rinchi prasad', '2020-04-22', '2020-04-24', 1, 0, '7908591508', 'rinchiprasad@gmail.com', '', 'standard', 'AC'),
(3, '2020-04-16', 'rinchi prasad', '2020-04-24', '2020-04-25', 2, 0, '7908591508', 'rinchiprasad@gmail.com', '', 'standard', 'AC'),
(4, '2020-04-18', 'rinchi prasad', '2020-04-22', '2020-04-24', 1, 0, '7908591508', 'rinchiprasad@gmail.com', '', 'suite', 'AC'),
(5, '2020-04-20', '', '2020-04-28', '2020-04-30', 0, 0, '7894561234', '', '', 'standard', 'AC'),
(6, '2020-04-30', 'vikash dagar', '2020-04-30', '2020-05-01', 2, 0, '1234567890', 'dagarvikash@gmail.com', '', 'suite', 'AC'),
(7, '2020-04-30', 'rinchi prasad', '2020-04-30', '2020-05-02', 1, 0, '7908591508', 'rinchiprasad@gmail.com', '', 'superior', 'AC'),
(8, '2020-04-30', 'baldeo prasad', '2020-04-30', '2020-05-02', 2, 0, '9635142883', 'rohitprasad089@gmail.com', '', 'luxary', 'AC'),
(13, '2020-05-07', 'vikash dagar', '2020-05-07', '2020-05-07', 0, 0, '1234567890', 'dagarvikash@gmail.com', '', 'Room Name', 'Room Type');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
