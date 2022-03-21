-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 07:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `stocks` varchar(255) NOT NULL,
  `addedby` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `price`, `stocks`, `addedby`, `status`) VALUES
(1, 'Letting Go', 'Philip Roth', '170', '100', 'cpadmin', 1),
(2, 'Fear of Flying', 'Erica Jong', '150', '5', 'cpadmin', 1),
(3, 'Encyclopedia Brown, Boy Detective', 'Donald J. Sobol', '50', '1', 'cpadmin', 1),
(4, 'The Phantom Tollbooth', 'NORTON JUSTER', '890', '10', 'rmpagsanjan', 1),
(5, 'test', 'test', '1', '1', 'onestopstaffingsolutions', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bu_password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '2' COMMENT '1 = admin, 2 = users',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = deactivate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `bu_password`, `usertype`, `status`) VALUES
(1, 'Proweaver', 'Test', 'onestopstaffingsolutions', '$2y$10$NgAHDzeIXnLBd5VJoxtLTu1/.n56yC5ilXO00zFIJGoOLZMFGPuz2', 'admin@123!', 1, 1),
(6, 'Alenie', 'Sawal', 'admin@proweaver.net', '$2y$10$44OgUQAlp310qgKTAAeieun3MjArWXVyAuJp8/zDXEbhp5MiIl7sa', '111111111111111111111111111', 2, 1),
(7, 'Staff', 'Proweaver', 'proweaver.net', '$2y$10$I1iC9Na6dntiLwS/mw6vwOIY7g6i/5Blez0HWFPCK/TYeVc7pRSGK', 'password@1234567', 2, 1),
(8, 'Sample', 'Test1', 'Test1pro', '$2y$10$S9QCXcsXZUL6pCrjQN8i0eY7nDARgoGvlq8ylwMznShdeQf4E2cS2', '8888888888888888888888888888', 2, 3),
(9, 'Employee1', 'Employeetest', 'employee1', '$2y$10$1OQom7j6XJzp6xNmxC.KS.NaO64roLRGJPEw6uFhY7crAJ2VoocAq', '999999999999999999999999', 2, 3),
(10, 'Employee33', 'Test1', 'admin45456', '$2y$10$lMwzYb.CejCPrzoiF8v8z.7baao5yK5k./Y472DHXPpgbS/NQniwu', 'admin9888888888888888888', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
