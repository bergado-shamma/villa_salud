-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 02:39 AM
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
-- Database: `db_villa_salud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catering_package`
--

CREATE TABLE `tbl_catering_package` (
  `package_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `event_id` int(50) NOT NULL,
  `venue_id` int(50) NOT NULL,
  `coverage` int(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `beverages_requirements` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `venue_id` int(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `celebrant_name` varchar(50) NOT NULL,
  `kind_of_affair` varchar(50) NOT NULL,
  `function_hall` varchar(50) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `starting_time` time(6) NOT NULL,
  `finishing_time` time(6) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_extra_service_options`
--

CREATE TABLE `tbl_extra_service_options` (
  `extra_service_id` int(50) NOT NULL,
  `patron_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `emcee` int(50) NOT NULL,
  `clown` int(50) NOT NULL,
  `lechon` int(50) NOT NULL,
  `bridal_car` int(50) NOT NULL,
  `van` int(50) NOT NULL,
  `photo_booth` int(50) NOT NULL,
  `mobile_bar` int(50) NOT NULL,
  `flower_entourage` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_in`
--

CREATE TABLE `tbl_log_in` (
  `log_in_id` int(50) NOT NULL,
  `representative_username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_of_log_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_of_log_out` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patron`
--

CREATE TABLE `tbl_patron` (
  `patron_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patron`
--

INSERT INTO `tbl_patron` (`patron_id`, `name`, `email`, `address`, `telephone`, `mobile`, `signature`, `date_created`, `date_updated`) VALUES
(7, 'fjsdkafjlds', 'fsdfds@fsdf.com', 'fsdfds', 'fdsf', 'fdsfsd', 'fdsf', '2024-07-07 20:13:36', '2024-07-07 20:13:36'),
(8, 'bergado', 'shabergado.22@gmai.com', 'fdfds', 'dfsdf', 'sdfsd', 'fsdf', '2024-07-07 21:50:11', '2024-07-07 21:55:23'),
(9, 'bergado', 'shabergado.22@gmai.com', 'fdfds', 'dfsdf', 'sdfsd', 'fsdf', '2024-07-07 21:52:52', '2024-07-07 21:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `reservation_id` int(11) NOT NULL,
  `patron_id` varchar(50) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `venue_id` varchar(50) NOT NULL,
  `package_id` varchar(50) NOT NULL,
  `date_of_booking` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `catering_services` varchar(50) NOT NULL,
  `reservation_Fee` int(50) NOT NULL,
  `terms_of_payments` varchar(50) NOT NULL,
  `cancellation_charges` int(50) NOT NULL,
  `number_of_pax` int(50) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sign_up`
--

CREATE TABLE `tbl_sign_up` (
  `sign_up_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_venue`
--

CREATE TABLE `tbl_venue` (
  `venue_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `event_id` int(50) NOT NULL,
  `reservation_id` int(50) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `food_and_beverages_requirement` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_villa_salud_representative`
--

CREATE TABLE `tbl_villa_salud_representative` (
  `representative_id` int(11) NOT NULL,
  `patron_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `signature` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catering_package`
--
ALTER TABLE `tbl_catering_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_extra_service_options`
--
ALTER TABLE `tbl_extra_service_options`
  ADD PRIMARY KEY (`extra_service_id`);

--
-- Indexes for table `tbl_log_in`
--
ALTER TABLE `tbl_log_in`
  ADD PRIMARY KEY (`log_in_id`);

--
-- Indexes for table `tbl_patron`
--
ALTER TABLE `tbl_patron`
  ADD UNIQUE KEY `patron_id` (`patron_id`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `tbl_sign_up`
--
ALTER TABLE `tbl_sign_up`
  ADD PRIMARY KEY (`sign_up_id`);

--
-- Indexes for table `tbl_venue`
--
ALTER TABLE `tbl_venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_extra_service_options`
--
ALTER TABLE `tbl_extra_service_options`
  MODIFY `extra_service_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_log_in`
--
ALTER TABLE `tbl_log_in`
  MODIFY `log_in_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_patron`
--
ALTER TABLE `tbl_patron`
  MODIFY `patron_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sign_up`
--
ALTER TABLE `tbl_sign_up`
  MODIFY `sign_up_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
