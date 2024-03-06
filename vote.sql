-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 04:45 PM
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
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acc`
--

CREATE TABLE `tbl_acc` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `security_key` varchar(50) NOT NULL,
  `roll` int(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_acc`
--

INSERT INTO `tbl_acc` (`id`, `username`, `password`, `security_key`, `roll`, `status`) VALUES
(1, '7698787438', 'e5c17ff693f431a8615dea3ab2c05b7bc413941a', 'e5c17ff693f431a8615dea3ab2c05b7bc413941a', 1, 1),
(3, 'abc', '123', '123', 1, 1),
(4, 'nemit', '5623', '5623', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `ref_code` varchar(30) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `name`, `email`, `phone`, `ref_code`, `reference`, `status`, `time`) VALUES
(1, 'yash', 'yashs@gmail.com', 9865235412, '9E0A9D68', 'Student', 1, '2024-03-05 11:56:55'),
(2, 'demo', 'ava@gmail.com', 5645218965, 'DFCD5888', 'Social Media', 1, '2024-03-05 11:56:55'),
(3, 'nemit', 'yashsagarjava@gmail.com', 6589541223, '7298A791', 'Social Media', 1, '2024-03-05 11:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_source`
--

CREATE TABLE `tbl_source` (
  `id` int(10) NOT NULL,
  `name` int(15) NOT NULL,
  `designation` int(15) NOT NULL,
  `organization` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_source_cat`
--

CREATE TABLE `tbl_source_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tech`
--

CREATE TABLE `tbl_tech` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `trainer` varchar(15) NOT NULL,
  `time_of_record` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `source_cat` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_of_person` int(10) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `name`, `source_cat`, `source`, `phone`, `email`, `no_of_person`, `status`) VALUES
(1, 'demo', '5623', '23', 5623, 'sdjh', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

CREATE TABLE `tbl_vote` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `ref_code` varchar(20) NOT NULL,
  `vote1` varchar(40) NOT NULL,
  `vote2` varchar(40) NOT NULL,
  `vote3` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`id`, `name`, `phone`, `ref_code`, `vote1`, `vote2`, `vote3`, `status`) VALUES
(1, 'yash', 98980165, '5s6d5', 'Networking', 'Server Management', 'Cloud Computing', 1),
(2, 'demo', 6532, '56sf', 'Sever Management', 'Web Development', 'Networking', 1),
(3, 'nemit', 56471, '5d8g9h', 'Full Stack Development', 'Cloud Computing', 'Server Management', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acc`
--
ALTER TABLE `tbl_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_source`
--
ALTER TABLE `tbl_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_source_cat`
--
ALTER TABLE `tbl_source_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tech`
--
ALTER TABLE `tbl_tech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acc`
--
ALTER TABLE `tbl_acc`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_source`
--
ALTER TABLE `tbl_source`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_source_cat`
--
ALTER TABLE `tbl_source_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tech`
--
ALTER TABLE `tbl_tech`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
