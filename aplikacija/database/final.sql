-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 02:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(20) COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(20) COLLATE utf32_croatian_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci COMMENT='admini';

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `id`) VALUES
('admin001', 'adminadmin', 1),
('tisaj', 'tisaj', 3);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `username` varchar(25) COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(25) COLLATE utf32_croatian_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`username`, `password`, `id`) VALUES
('driver001', 'driver1', 1),
('driver002', 'driver2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(65) NOT NULL,
  `city` varchar(25) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `contact` varchar(25) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `adress` varchar(100) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `priority` varchar(2) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `box_size` varchar(10) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `name` varchar(15) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `lname` varchar(15) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `del_adress` varchar(25) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `pob` varchar(10) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `price` varchar(10) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `city`, `contact`, `adress`, `priority`, `box_size`, `name`, `lname`, `del_adress`, `pob`, `price`, `date`, `username`) VALUES
(20, 'Osijek', '123', 'Kneza Trpimira 2b', 'Da', 'sm', 'ETFOS', 'FERIT', 'Kneza Trpimira 2b', '31000', '150', '2016-06-19 15:10:37', 'testuser1'),
(24, 'Ernestinovo', '0996557708', 'N.S Zrinskog,  Ernes', 'Da', 'sm', 'Hrvoje', 'Horvat', 'Kneza Trpimira 2b', '31000', '150', '2016-10-01 10:57:04', 'obrana1'),
(25, 'Ernestinovo', '0996557708', 'N.S Zrinskog,  Ernes', 'Da', 'sm', 'Hrvoje', 'Horvat', 'Kneza Trpimira 2b', '31000', '150', '2016-10-01 10:57:04', 'obrana1'),
(26, 'Ernestinovo ', '0996557708', 'N.S Zrinskog,  Ernes', 'Da', 'xl', 'Hrvoje', 'Horvat', 'Kneza Trpimira 2b', '31000', '300', '2016-10-01 10:58:17', 'obrana1'),
(27, 'Ernestinovo ', '0996557708', 'N.S Zrinskog,  Ernes', 'Da', 'lg', 'Hrvoje', 'Horvat', 'Kneza Trpimira 2b', '31000', '250', '2016-10-01 10:59:01', 'obrana1'),
(28, 'Ernestinovo ', '0996557708', 'N.S Zrinskog,  Ernes', 'Ne', 'md', 'Hrvoje', 'Horvat', 'Kneza Trpimira 2b', '31000', '75', '2016-10-01 10:59:22', 'obrana1'),
(29, 'Ernestinovo ', '0996557708', 'N.S Zrinskog,  Ernestinovo', 'Da', 'lg', 'Hrvoje', 'Horvat', 'Kneza Trpimira 2b', '31000', '250', '2016-10-01 12:35:14', 'obrana1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf32_croatian_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf32_croatian_ci NOT NULL,
  `username` varchar(20) COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(20) COLLATE utf32_croatian_ci NOT NULL,
  `email` varchar(30) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `password`, `email`) VALUES
(4, 'Luka', 'Roguljic', 'obrana1', 'obrana1', 'obrana@ferit.hr'),
(1, 'Luka', 'Roguljic', 'testuser1', 'testpass1', 'test@email.hr'),
(2, 'Josip', 'Tisaj', 'tisajkonj', 'konj', 'konjemail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
