-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 05:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeiza`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `date_updated` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `date_created`, `date_updated`) VALUES
(7, 'admin', 'admin', '2024-04-06 18:02:29.000000', '2024-04-06 18:02:29.000000'),
(8, '123123', '123', '2024-04-06 18:10:29.000000', '2024-04-06 18:10:29.000000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_age` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_contact` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_grade` varchar(255) NOT NULL,
  `student_course` varchar(255) DEFAULT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `date_updated` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `role_id`, `student_fname`, `student_lname`, `student_age`, `student_gender`, `student_contact`, `student_address`, `student_grade`, `student_course`, `date_created`, `date_updated`) VALUES
(3, '0', 'Juan', 'Dela Cruz', '17', 'Male', '+6392275321112', 'Bacolod City', '11', 'BSIT', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(5, '0', 'Maria', 'Clara', '18', 'Female', '+6392275321111', 'Manila ', '12', 'ABM', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(6, '0', 'Jojo', 'Binay', '17', 'Male', '+6392275321113', 'Biliran City', '12', 'ABM', '2024-04-06 19:04:08.800578', '2024-04-06 19:04:08.800578'),
(7, '0', 'Pedro', 'Pascual', '18', 'Male', '+6392275321110', 'Bacolod City', '11', 'BSIT', '2024-04-06 19:04:08.846706', '2024-04-06 19:04:08.846706'),
(8, '0', 'Ai', 'Delas-Alas', '18', 'Female', '+6392275321109', 'Bacolod City', '11', 'ABM', '2024-04-06 19:04:08.879787', '2024-04-06 19:04:08.879787'),
(9, '0', 'Charles', 'Padilla', '18', 'Male', '+6392275321199', 'Biliran City', '11', 'ABM', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(12, '0', 'Jose', 'Dela Cruz', '18', 'Male', '+6392275321000', 'Bacolod City', '11', 'BSIT', '2024-04-06 19:04:08.937996', '2024-04-06 19:04:08.937996'),
(13, '1', 'Jojo', 'Pandesal', '19', 'Male', '+6392275321133', 'Manila ', '11', 'ABM', '2024-04-07 02:44:35.678856', '2024-04-07 02:44:35.678856'),
(14, '1', 'Clara', 'Evanesence', '16', 'Female', '+6392275322222', 'Navotas', '11', 'ABM', '2024-04-07 02:41:16.488715', '2024-04-07 02:41:16.488715'),
(15, '1', 'John', 'Casagna', '18', 'Male', '+6392275321333', 'Navotas', '12', 'ABM', '2024-04-07 02:59:04.939295', '2024-04-07 02:59:04.939295'),
(16, '1', 'Alex', 'Cosca', '18', 'Male', '+63922753312341', 'Tondo', '11', 'ABM', '2024-04-07 02:44:37.621500', '2024-04-07 02:44:37.621500'),
(17, '0', 'Juan juan', 'Luna', '18', 'Male', '+639227530000', 'Palawan', '12', 'ABM', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(18, '1', 'Juan', 'Clara', '18', 'Male', '+6392275321109', 'Bacolod City', '11', 'ABM', '2024-04-07 02:48:59.287608', '2024-04-07 02:48:59.287608'),
(19, '1', 'Pedro', 'Binay', '17', 'Female', '+6392275325555', 'Biliran City', '12', 'BSIT', '2024-04-07 02:56:57.408518', '2024-04-07 02:56:57.408518'),
(20, '0', 'Jojo', 'Dela Cruz', '18', 'Female', '+6392275327778', 'Bacolod City', '11', 'BSIT', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(21, '0', 'Phajeet', 'Jeet', '18', 'Male', '+639227538888', 'India Delhi', '12', 'BSIT', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(23, '0', 'Spolarium', 'Lele', '17', 'Male', '+639227532100', 'Manila ', '11', 'ABM', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(24, '0', 'Ong', 'Bak', '18', 'Male', '+6392275321100', 'Thailand', '12', 'ABM', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(25, '0', 'Luis', 'Emmanuel', '19', 'Male', '+6392275320000', 'Manila ', '11', 'BSIT', '2024-04-07 02:37:32.553297', '2024-04-07 02:37:32.553297'),
(26, '0', 'Cali', 'California', '18', 'Male', '+6392275329999', 'San Francisco', '12', 'BSIT', '2024-04-07 03:00:15.576281', '2024-04-07 03:00:15.576281');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
