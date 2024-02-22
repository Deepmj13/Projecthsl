-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 04:41 AM
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
-- Database: `tableone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `airorder`
--

CREATE TABLE `airorder` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `product` text NOT NULL,
  `weight` int(10) NOT NULL,
  `fromplace` text NOT NULL,
  `toplace` text NOT NULL,
  `odate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airorder`
--

INSERT INTO `airorder` (`id`, `name`, `email`, `password`, `product`, `weight`, `fromplace`, `toplace`, `odate`) VALUES
(1, 'deep134', 'playstore1392004@gmail.com', 'rewrw', 'gold', 10, 'india', 'us', '2024-02-21'),
(2, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'dsdsd', 'dfdgfd', 123, 'dfgdg', 'jghj', '2024-02-21'),
(3, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'dsdsd', 'dfdgfd', 123, 'dfgdg', 'jghj', '2024-02-21'),
(4, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'sdadasdad', 'dfdgfd', 123, 'dfgdg', 'jghj', '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `seaorder`
--

CREATE TABLE `seaorder` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `product` text NOT NULL,
  `weight` int(10) NOT NULL,
  `fromplace` text NOT NULL,
  `toplace` text NOT NULL,
  `odate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seaorder`
--

INSERT INTO `seaorder` (`id`, `name`, `email`, `password`, `product`, `weight`, `fromplace`, `toplace`, `odate`) VALUES
(1, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'fdsfd', 'gold', 10, 'india', 'us', '2024-02-21'),
(2, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'fdsfd', 'gold', 10, 'india', 'us', '2024-02-21'),
(3, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'fdsfd', 'gold', 10, 'india', 'us', '2024-02-21'),
(4, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'fdsfd', 'gold', 10, 'india', 'us', '2024-02-21'),
(5, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'rewrwe', 'dfdgfd', 123, 'dfgdg', 'jghj', '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `product` varchar(100) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `width` int(10) NOT NULL,
  `placefrom` varchar(100) NOT NULL,
  `placeto` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `medium` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `name`, `email`, `password`, `product`, `weight`, `height`, `width`, `placefrom`, `placeto`, `date`, `medium`, `img`) VALUES
(10, 'deep', 're@gmail.com', 'werwer', 'gold', 10, 12, 12, 'india', 'us', '2024-02-19', '', ''),
(11, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'rtrrttr', '🥛 ', 10, 12, 12, 'india', '🍁 ', '2024-02-22', '', ''),
(12, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'rerer', '🥛 ', 10, 12, 12, 'india', '🍁 ', '2024-02-20', '', 'pexels-giorgio-de-angelis-1413412.jpg'),
(13, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'gfhfghfgh', '🥛 ', 10, 12, 12, 'india', '🍁 ', '2024-02-20', '', 'download (1).jpeg'),
(14, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'gfdggfdg', '🥛 ', 10, 12, 12, 'india', '🍁 ', '2024-02-20', '', ''),
(15, 'Jaimin Sathavara', 'jaiminsathavara28@gmail.com', 'gfdggfdg', '🥛 ', 10, 12, 12, 'india', '🍁 ', '2024-02-20', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airorder`
--
ALTER TABLE `airorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seaorder`
--
ALTER TABLE `seaorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airorder`
--
ALTER TABLE `airorder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seaorder`
--
ALTER TABLE `seaorder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
