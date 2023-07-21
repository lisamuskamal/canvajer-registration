-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2023 at 03:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canvajer`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `act_id` int NOT NULL,
  `act_title` varchar(255) DEFAULT NULL,
  `act_desc` varchar(255) DEFAULT NULL,
  `act_date` date DEFAULT NULL,
  `act_time` time DEFAULT NULL,
  `act_location` varchar(255) DEFAULT NULL,
  `act_capacity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `act_title`, `act_desc`, `act_date`, `act_time`, `act_location`, `act_capacity`) VALUES
(16, 'Conference', 'Annual conference for industry professionals', '2023-07-15', '09:00:00', 'Convention Center', 200),
(17, 'Workshop', 'Hands-on workshop on web development', '2023-07-20', '14:00:00', 'Training Room A', 30),
(18, 'Seminar', 'Seminar on digital marketing strategies', '2023-07-25', '10:30:00', 'Auditorium', 100),
(19, 'Training Session', 'Training session for new employees', '2023-08-02', '13:00:00', 'Training Room B', 50),
(20, 'Networking Event', 'Networking event for professionals in the industry', '2023-08-10', '18:00:00', 'Rooftop Lounge', 75),
(21, 'Product Launch', 'Launch event for new product release', '2023-08-15', '11:00:00', 'Grand Ballroom', 150),
(22, 'Panel Discussion', 'Panel discussion on future technology trends', '2023-08-20', '15:30:00', 'Conference Room C', 50),
(23, 'Training Workshop', 'Workshop on leadership skills development', '2023-08-25', '09:30:00', 'Training Room A', 40),
(24, 'Charity Event', 'Charity fundraising event for a local cause', '2023-09-02', '14:00:00', 'Community Center', 100),
(25, 'Team Building Activity', 'Team building activity for company employees', '2023-09-10', '10:00:00', 'Outdoor Park', 80);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `part_ic` varchar(20) NOT NULL,
  `part_fullname` varchar(255) DEFAULT NULL,
  `part_email` varchar(255) DEFAULT NULL,
  `part_age` int DEFAULT NULL,
  `part_gender` enum('Male','Female','Other') DEFAULT NULL,
  `part_phone` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`part_ic`, `part_fullname`, `part_email`, `part_age`, `part_gender`, `part_phone`, `created_at`) VALUES
('0004567890', 'Mohd Hafiz Mohamad', 'mohd@example.com', 45, 'Male', '5678901234', '2023-06-20 03:13:42'),
('0100123456', 'Nurul Izzah', 'nur@example.com', 33, 'Female', '0123456789', '2023-06-20 03:13:42'),
('010191011', 'muhammad joko lokman', 'joko@gmail.com', 23, 'Male', '11112132', '2023-06-20 03:34:46'),
('0102345678', 'Nor Aziza', 'nor@example.com', 28, 'Female', '4567890123', '2023-06-20 03:13:42'),
('0112121211212', 'MUHAMMAD SYAZWI BIN ZAINAL ABIDIN', 'muhammadsyazwiza@gmail.com', 121, 'Male', '1113125322', '2023-06-20 03:53:53'),
('0203456789', 'Ali Hakim Bin Ismail', 'ali@example.com', 31, 'Male', '3456789012', '2023-06-20 03:13:42'),
('0207890123', 'Aisyah Safiya', 'aisyah@example.com', 35, 'Female', '7890123456', '2023-06-20 03:13:42'),
('0305678901', 'Ahmad Farhan', 'ahmad2@example.com', 32, 'Male', '2345678901', '2023-06-20 03:13:42'),
('0409012345', 'Fatimah Zainab Binti Abdul', 'fatimah@example.com', 40, 'Female', '9012345678', '2023-06-20 03:13:42'),
('1211221', 'Muhammad haziq', 'asaa@gmail.com', 34, 'Male', '34343434', '2023-06-20 03:30:11'),
('9801234567', 'Ahmad Bin Ali', 'ahmad@example.com', 25, 'Male', '1234567890', '2023-06-20 03:13:42'),
('9906789012', 'Muhammad Haziq', 'muhammad@example.com', 27, 'Male', '6789012345', '2023-06-20 03:13:42'),
('9909876543', 'Siti Binti Rahman', 'siti@example.com', 30, 'Female', '9876543210', '2023-06-20 03:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ad_id` int NOT NULL,
  `ad_ic` varchar(10) DEFAULT NULL,
  `ad_username` varchar(255) DEFAULT NULL,
  `ad_role` int DEFAULT NULL COMMENT '1 = admin, 2 = user',
  `ad_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ad_id`, `ad_ic`, `ad_username`, `ad_role`, `ad_password`) VALUES
(1, '1234567890', 'admin', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`part_ic`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `act_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ad_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
