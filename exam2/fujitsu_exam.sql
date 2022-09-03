-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 06:13 AM
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
-- Database: `fujitsu_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `emp_id` int(11) NOT NULL,
  `emp_fname` varchar(120) NOT NULL,
  `emp_position` varchar(120) NOT NULL,
  `emp_department` varchar(120) NOT NULL,
  `emp_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`emp_id`, `emp_fname`, `emp_position`, `emp_department`, `emp_status`) VALUES
(7, 'Frog Prince', '[value-3]', '[value-4]', ''),
(8, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(9, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(10, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(11, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(12, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(13, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(14, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(15, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(16, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(17, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(18, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(19, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(20, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(21, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(22, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(23, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(24, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(25, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(26, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(27, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(28, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(29, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(30, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(31, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(32, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(33, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(34, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(35, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(36, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(37, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(38, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(39, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(40, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(41, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(42, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(43, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(44, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(45, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(46, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(47, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(48, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(49, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(50, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(51, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(52, 'Frog Prince', '[value-3]', '[value-4]', '[value-5]'),
(53, 'Frog Prince', '1', '[value-4]', '[value-5]'),
(54, 'Frog Prince', '[value-3]55', '[value-4]', '[value-5]'),
(55, 'Frog Prince1111', '[value-3]', '[value-4]', '[value-5]'),
(56, 'a', 'a', 'a', 'a'),
(57, 'v', 'v', 'v', 'v'),
(58, 'b', 'b', 'b', 'b'),
(59, '1', '1', '1', '1'),
(60, 'v', 'v', 'v', 'v'),
(61, 'SARMIENTO,DEO JULES A ', 'MANAGER', 'IT DEPARTMENT', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
