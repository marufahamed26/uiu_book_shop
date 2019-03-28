-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2017 at 09:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu_book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Tanima ', 'Yousuf ', 'tanima@gmail.com', '123456'),
(2, ' Maruf', ' Ahmed', 'maruf@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_title` varchar(30) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `isbn` int(30) DEFAULT NULL,
  `edition` varchar(20) DEFAULT NULL,
  `post_type` varchar(20) DEFAULT NULL,
  `cover` varchar(1000) DEFAULT NULL,
  `description` text,
  `orginal_price` int(11) DEFAULT NULL,
  `your_price` int(11) DEFAULT NULL,
  `contact_email` varchar(30) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `post_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `book_title`, `author`, `isbn`, `edition`, `post_type`, `cover`, `description`, `orginal_price`, `your_price`, `contact_email`, `category`, `post_date_time`) VALUES
(2, 2, 'database', 'dsas', 123456, '2nd', 'Sell', 'pics/Capture3.jpg', 'daskld', 500, 50, 'abc@gmail.com', 'CSE', '2017-12-11 03:37:58'),
(3, 2, 'dkas', 'mad', 3564551, '4th', 'Exchange', 'pics/Capture.jpg', 'dasasdasd', NULL, NULL, 'abc@gmail.com', 'EEE', '2017-12-11 03:38:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
