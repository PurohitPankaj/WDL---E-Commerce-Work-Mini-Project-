-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 05:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 46000),
(4, 'Olympus DSLR', 50000),
(5, 'HMT Milan', 8000),
(6, 'H&W', 800),
(7, 'John Zok', 1500),
(8, 'Luis Phil', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `mobile`, `city`, `address`) VALUES
(1, 'Pankaj', 'pankaj@gmail.com', '96e79218965eb72c92a549dd5a330112', '7028693789', 'Thane', 'West'),
(2, 'Sachin', 'sachin@gmail.com', '96e79218965eb72c92a549dd5a330112', '8788429658', 'Thane', 'East'),
(3, 'Himanshu', 'himanshu@gmail.com', '96e79218965eb72c92a549dd5a330112', '9209097908', 'Vasai', 'Vasai - East'),
(4, 'Omkar', 'omkar@gmail.com', '96e79218965eb72c92a549dd5a330112', '99999999999', 'vasai', 'Vasai -west');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `did` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`did`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
