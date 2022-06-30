-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 06:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `email`, `cell`, `password`, `picture`, `role`) VALUES
(21, 'arham', 'arham@gmail.com', '03002303974', 'fcea920f7412b5da7be0cf42b8c93759', 'images2.jpg', 'Admin');

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

--
-- Dumping data for table `doctor_tbl`
--

INSERT INTO `doctor_tbl` (`id`, `name`, `email`, `password`, `pic`, `role`, `dr_address`, `apt_date`, `apt_time`, `dr_about`, `speciality`, `degree_name`, `speciality_2`, `speciality_3`, `cell`, `gender`, `edu_bg`, `avail_days`, `avail_time`, `status`) VALUES
(18, 'arham', 'arham@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'imagess.jpg', '', 'C-224 Aleemabad', '', '', '', 'Neuro', 'MSc.', 'Sycology', 'Heart Disease', '03002303974', 'Male', 'Intermediate', 'Monday to Friday', 12, 'approved');

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
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `email`, `password`, `cell`, `age`, `apointment`, `status`) VALUES
(11, 'arham', 'arhamali@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '03002303974', 23, '', 'approved'),
(12, 'arham', 'umar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '03002303974', 23, '', 'approved'),
(13, 'umar', 'saif@gmail.com', '202cb962ac59075b964b07152d234b70', '03002303974', 23, '', 'approved');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
