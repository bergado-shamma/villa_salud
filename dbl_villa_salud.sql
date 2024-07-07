-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 04:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbl_villa_salud`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering_package`
--

CREATE TABLE `catering_package` (
  `package_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `event_id` int(50) NOT NULL,
  `venue_id` int(50) NOT NULL,
  `coverage` int(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `beverages_requirements` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `venue_id` int(50) NOT NULL,
  `celebrant_name` varchar(50) NOT NULL,
  `kind_of_affair` varchar(50) NOT NULL,
  `function_hall` varchar(50) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `starting_time` time(6) NOT NULL,
  `finishing_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patron`
--

CREATE TABLE `patron` (
  `patron_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(50) NOT NULL,
  `patron_id` int(50) NOT NULL,
  `venue_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `date_of_booking` date NOT NULL,
  `reservation_fee` float(50,2) NOT NULL,
  `terms_of_payments` varchar(50) NOT NULL,
  `cancellation_charges` float(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `event_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `capacity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catering_package`
--
ALTER TABLE `catering_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `patron`
--
ALTER TABLE `patron`
  ADD UNIQUE KEY `patron_id` (`patron_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
