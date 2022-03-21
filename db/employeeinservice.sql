-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 09:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeeinservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bu_password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = users',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = active, 2 = deactivate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `bu_password`, `usertype`, `status`) VALUES
(1, 'Proweaver', 'Test', '', '0', 'onestopstaffingsolutions', '$2y$10$NgAHDzeIXnLBd5VJoxtLTu1/.n56yC5ilXO00zFIJGoOLZMFGPuz2', 'admin@123!', 1, 1),
(6, 'Alenie', 'Sawal', '', '0', 'admin@proweaver.net', '$2y$10$44OgUQAlp310qgKTAAeieun3MjArWXVyAuJp8/zDXEbhp5MiIl7sa', '111111111111111111111111111', 2, 1),
(7, 'Staff', 'Proweaver', '', '0', 'proweaver.net', '$2y$10$I1iC9Na6dntiLwS/mw6vwOIY7g6i/5Blez0HWFPCK/TYeVc7pRSGK', 'password@1234567', 2, 1),
(8, 'Sample', 'Test1', '', '0', 'Test1pro', '$2y$10$S9QCXcsXZUL6pCrjQN8i0eY7nDARgoGvlq8ylwMznShdeQf4E2cS2', '8888888888888888888888888888', 2, 3),
(9, 'Employee1', 'Employeetest', '', '0', 'employee1', '$2y$10$1OQom7j6XJzp6xNmxC.KS.NaO64roLRGJPEw6uFhY7crAJ2VoocAq', '999999999999999999999999', 2, 3),
(10, 'Employee33', 'Test1', '', '0', 'admin45456', '$2y$10$lMwzYb.CejCPrzoiF8v8z.7baao5yK5k./Y472DHXPpgbS/NQniwu', 'admin9888888888888888888', 2, 1),
(11, 'test2', 'test2', '', '0', 'test2test2test2', '$2y$10$zf2MzHc4.cxfIDgwgmLAD.P2NyufiYGgCiMnlC5X3gJtt1h4BGzzK', 'test123456789', 2, 1),
(12, 'ronan', '123123', 'test@gmail.com', '1213', 'test@gmail.com', '$2y$10$3LQNqIJxrn2buFNAi5XlL.LTBRROq4NaRJtJDIPh43oddJ87p2/AC', '123123', 2, 1),
(13, 'ronan', '123123', 'test@gmail.com', '1213', 'test@gmail.com', '$2y$10$2AurOcbaXGR7VTlxcNOoxuyX58l2TjexkVbpF3UFwX8n1QAqwwgOi', '12313', 2, 1),
(14, 'ronan', '123123', 'test@gmail.com', '1213', 'test@gmail.com', '$2y$10$pjyAd/Tqjz9vLBpXMh7mNuyNH8TfWk.ZUjiVHn5ta83X3FBSwRyTW', '12313', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
