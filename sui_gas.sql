-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 09:21 PM
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
-- Database: `sui_gas`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bill`
--

CREATE TABLE `add_bill` (
  `bill_id` int(11) NOT NULL,
  `consumer_id` int(10) NOT NULL,
  `billing_month` varchar(10) NOT NULL,
  `current_reading` int(11) NOT NULL,
  `previous_reading` int(11) NOT NULL,
  `total_units` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `final_amount` int(11) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_bill`
--

INSERT INTO `add_bill` (`bill_id`, `consumer_id`, `billing_month`, `current_reading`, `previous_reading`, `total_units`, `unit_price`, `final_amount`, `due_date`) VALUES
(1, 987654321, 'jan', 100, 50, 50, 5, 250, '2024-02-01'),
(2, 1122334455, 'feb', 50, 70, 20, 2, 40, '2003-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `add_connection`
--

CREATE TABLE `add_connection` (
  `connection_id` int(11) NOT NULL,
  `10_dcid` int(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `connection_type` varchar(50) NOT NULL,
  `connection_date` date NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_connection`
--

INSERT INTO `add_connection` (`connection_id`, `10_dcid`, `customer_name`, `connection_type`, `connection_date`, `occupation`, `address`) VALUES
(1, 1234567890, 'admin', 'res', '1234-01-12', 'business', 'jalalpur pir wala'),
(2, 1234567890, 'sajid', 'res', '1234-01-12', 'business', 'jalalpur pir wala'),
(3, 987654321, 'sajid', 'res', '2003-03-04', 'business', 'jalal pur pir wala');

-- --------------------------------------------------------

--
-- Table structure for table `add_customer`
--

CREATE TABLE `add_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_customer`
--

INSERT INTO `add_customer` (`customer_id`, `customer_name`, `contact`, `email_id`, `password`, `address`) VALUES
(1, 'sajid', 2147483647, 'sajid@gmail.com', '1234', 'jalalpur pir wala'),
(2, 'ali', 2147483647, 'sajid@gmail.com', '0987', 'jalal pur pir wala'),
(3, 'Waqas', 1234567, 'waqas@gmail.com', '1234', 'jalalpur pir wala'),
(6, 'admin', 2147483647, 'sajid@gmail.com', 'admin123', 'jalalpur pir wala');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `password`) VALUES
(1, 'sajid1234@gmail.com', '$2y$10$kkJfjMwTgm9.r'),
(2, 'sajid@gmail.com', '1234'),
(3, 'sajid@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_bill`
--
ALTER TABLE `add_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `add_connection`
--
ALTER TABLE `add_connection`
  ADD PRIMARY KEY (`connection_id`);

--
-- Indexes for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_bill`
--
ALTER TABLE `add_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_connection`
--
ALTER TABLE `add_connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_customer`
--
ALTER TABLE `add_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
