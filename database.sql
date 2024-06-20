-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 06:52 PM
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
-- Database: `newsfeedsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userUid` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userUid`, `userPwd`, `created_at`) VALUES
(1, 'ritu', 'ritu@gmai.com', 'ritu', '$2y$10$g8sLK9t0LLJ8q1E4SzkOQeF1N2W7Yde9DKzf247vUXxSjWH8hngqu', '2024-06-20 14:50:02'),
(2, 'riza', 'riza@gmail.com', 'riza', '$2y$10$AiF8lTYpCSlYBXGdobEgt.rrd6fQc4G2vwtlE4px78FBd.irYn3iO', '2024-06-20 14:52:06'),
(3, 'Jesus Christ', 'jesus@gmail.com', 'Jesus', '$2y$10$gUju60y19oKYig6uvC5r0e3PbTm7Gp2cKtkaDp0WAPEhw2I8X.wUa', '2024-06-20 15:10:25'),
(4, 'Jesu mbochu', 'jesu@gmail.com', 'Jesu', '$2y$10$gj3hgZW4qaqdl94S/LxFJearQiWMLsufKc6TSIjdfMRy7JJnyzIL2', '2024-06-20 15:17:47'),
(5, 'Ande Tracy', 'ande@gmail.com', 'Tracy', '$2y$10$J.VroBSkTSCHjYsLXZqds.vvY7jnkAwrzwBbvds50lRVkB2pRLW/y', '2024-06-20 15:20:30'),
(6, 'samira Brown', 'samira@gmail.com', 'samira', '$2y$10$I.F50a4haRAVYp0yfzATBOEahSq1bG.X6NraqqlMqoJdGHTusewby', '2024-06-20 15:40:19'),
(7, 'testimony', 'testi@gmail.com', 'testimony', '$2y$10$hDtP3I4WY.upSRXL6wJE1OdNb/PQ.thQNxl6FvZCBGvSmL/VE/vQe', '2024-06-20 16:30:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
