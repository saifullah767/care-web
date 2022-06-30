-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2022 at 09:58 PM
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
-- Database: `care-webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `cell` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `role` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_pending`
--

CREATE TABLE `doctor_pending` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `role` varchar(300) NOT NULL,
  `dr_address` varchar(300) NOT NULL,
  `apt_date` varchar(300) NOT NULL,
  `apt_time` varchar(300) NOT NULL,
  `dr_about` varchar(1000) NOT NULL,
  `speciality` varchar(300) NOT NULL,
  `degree_name` varchar(300) NOT NULL,
  `speciality_2` varchar(300) NOT NULL,
  `speciality_3` varchar(300) NOT NULL,
  `cell` varchar(300) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `edu_bg` varchar(300) NOT NULL,
  `avail_days` varchar(300) NOT NULL,
  `avail_time` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_tbl`
--

CREATE TABLE `doctor_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `role` varchar(300) NOT NULL,
  `dr_address` varchar(300) NOT NULL,
  `apt_date` varchar(300) NOT NULL,
  `apt_time` varchar(300) NOT NULL,
  `dr_about` varchar(1000) NOT NULL,
  `speciality` varchar(300) NOT NULL,
  `degree_name` varchar(300) NOT NULL,
  `speciality_2` varchar(300) NOT NULL,
  `speciality_3` varchar(300) NOT NULL,
  `cell` varchar(300) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `edu_bg` varchar(300) NOT NULL,
  `avail_days` varchar(300) NOT NULL,
  `avail_time` int(100) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_users`
--

CREATE TABLE `pending_users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `cell` varchar(300) NOT NULL,
  `age` int(10) NOT NULL,
  `password` varchar(300) NOT NULL,
  `disease` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `cell` varchar(300) NOT NULL,
  `age` int(10) NOT NULL,
  `apointment` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_pending`
--
ALTER TABLE `doctor_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_tbl`
--
ALTER TABLE `doctor_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_users`
--
ALTER TABLE `pending_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_pending`
--
ALTER TABLE `doctor_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor_tbl`
--
ALTER TABLE `doctor_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD CONSTRAINT `user_tbl_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pending_users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
