-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 02:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` enum('Female','Male','Others') NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `timemodified`, `gender`, `role`, `active`) VALUES
(1, 'jon', 'rosales', 'jon@gmail.com', '$2y$10$k.mtU7Jlk7fK2OSmU6gaCOWrEe0/8th7ERPcFITjZBc3zDtt7yel.', '2023-09-28 11:54:08', 'Female', 'admin', 1),
(2, 'ken', 'doll', 'ken@gmail.com', '$2y$10$Zr7d8.83xhGtoY5f2C9rou/Ef5gR7IqTMzdcV6ONFwnOjUilhl5Ge', '2023-09-28 11:54:28', 'Male', 'user', 1),
(3, 'nica', 'pee', 'nic@gmail.com', '$2y$10$AtNv8oHnj9ezKenYmhHoq.gk.oxMVgpfQo5FlTY9LrdBxp.jxri1O', '2023-09-28 11:56:45', 'Male', 'admin', 1),
(4, 'test', 'test', 'test@email.com', '$2y$10$RiLxrO158FvODUaohM69qeO7F2y/nOsfo7J1tqsyQSurP16qtMV4C', '2023-09-28 11:49:44', 'Female', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
