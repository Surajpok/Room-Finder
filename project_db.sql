-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 09:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `room_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `room_desc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearest_landmark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` int(10) NOT NULL,
  `no_of_rooms` int(100) NOT NULL,
  `furnished` tinyint(1) NOT NULL,
  `water` tinyint(1) NOT NULL,
  `electricity` tinyint(1) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `user_id`, `date`, `room_title`, `room_img1`, `room_img2`, `room_img3`, `price`, `room_desc`, `location`, `nearest_landmark`, `province`, `no_of_rooms`, `furnished`, `water`, `electricity`, `contact`) VALUES
(29, 24696834, '2021-04-03 19:10:50', '3 BHK Flat In Biratnagar', 'Digital Marketing Solutions.png', '', '', 5000, 'Best Room With All Facilities Including Air Conditioning', 'Biratnagar', 'kanchanbari', 2, 5, 1, 0, 1, 2147483647),
(30, 8838935, '2021-04-03 21:07:07', 'Room For Rent In Sankhuwasabha', 'Digital Marketing Solutions.png', '', '', 20000, 'Best Room With All Facilities Including Air Conditioning', 'Sankhuwasabha', 'kanchanbari', 1, 10, 1, 1, 1, 2147483647),
(31, 0, '2021-04-03 21:06:33', '2 Room For Rent In Suraj House', '22.jpg', '', '', 15000, 'Best Room With All Facilities Including Air Conditioning', 'Sankhuwasabha', 'kanchanbari', 0, 2, 1, 0, 1, 2147483647),
(32, 0, '2021-04-04 07:55:47', '10 Room For Rent In Suraj House', '', '', '', 30100, 'Best Room With All Facilities Including Air Conditioning', 'Biratnagar', 'kanchanbari', 2, 3, 1, 1, 1, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `id`, `user_id`, `user_name`, `email`, `phone_num`, `address1`, `address2`, `password`, `date`, `image`) VALUES
('Sanju', 'Pokhrel', 16, 8838935, 'Sanju', 'Pokhrel004@gmail.com', '9800980333', 'Saral Bachat Road', 'Kanchanbari 4', 'sanju', '2021-04-03 20:47:41', 'Pubg Freefire Live.jpg'),
('hell', 'hell', 17, 24696834, 'hello', 'hell@gmail.com', '9810556983', 'Saral Bachat Road', 'Kanchanbari 4', 'hello', '2021-04-03 19:19:30', '20210302_123635.jpg'),
('ramesh', 'shrestha', 18, 7903559779080, 'rameshshe', 'Pokhrel004@gmail.com', '9810556983', 'Saral Bachat Road', 'Kanchanbari 4', 'hi', '2021-04-03 18:15:26', 'Digital Marketing Solutions.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
