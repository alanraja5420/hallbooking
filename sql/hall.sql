-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 08:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `Application_no` int(11) NOT NULL,
  `Department_Name` text NOT NULL,
  `Hall_Name` text NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_form`
--

INSERT INTO `booking_form` (`Application_no`, `Department_Name`, `Hall_Name`, `Date`, `Start_Time`, `End_Time`, `purpose`, `status`) VALUES
(31, 'mat', 'Sail auditorium', '2023-07-11', '22:56:00', '22:57:00', 'kmkjlk', 1),
(56, 'tamil', 'MCA Seminar Hall', '2023-07-06', '23:55:00', '23:55:00', 'summa', 3),
(57, 'phy', 'Lawley Hall', '2023-06-26', '01:14:00', '01:14:00', 'hkjhk', 3),
(58, 'che', 'Lawley Hall', '2023-07-27', '22:15:00', '22:15:00', 'lolop', 2),
(59, 'cs', 'KP Joseph Hall', '2023-07-21', '02:16:00', '01:16:00', 'kjiiuoi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `name`) VALUES
('01fbo01', '123', 'user', 'Botany'),
('01fco01', '123', 'user', 'Commerce '),
('01fcs01', '123', 'user', 'CS'),
('01fvp01', '123', 'VP', 'Vice Principal '),
('01sjc001', '123', 'secretary', 'Secretary ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`Application_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `Application_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
