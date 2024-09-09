-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 11:05 AM
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
-- Database: `movieticketdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `name`) VALUES
(1, 'img12.jpeg', 'show'),
(2, 'img1.jpg', 'front area'),
(3, 'img4.jpg', 'Light'),
(4, 'img3.jpg', 'stage'),
(5, 'img9.jpg', 'theater');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `category` text NOT NULL,
  `duration` text NOT NULL,
  `date` text NOT NULL,
  `show_date` text NOT NULL,
  `show_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `name`, `description`, `price`, `category`, `duration`, `date`, `show_date`, `show_time`) VALUES
(14, 'Dora.jpg', 'Dora', 'Dora and the Lost City of Gold (2019) is about a teenage explorer named Dora who goes on an adventure to save her parents and solve the mystery of a lost city of gold.', '350', 'Drama', '150 mi', '2024-08-14', '', ''),
(15, 'double-life.jpg', 'double life', 'double life', '780', 'Drama', '150 mi', '2024-08-19', '', ''),
(16, 'hashyajatra.jpg', 'HasyaYatra', 'HasyaYatra', '700', 'Comedy Movie', '167mi', '2024-08-29', '', ''),
(17, 'painter.jpg', 'Painter', 'A close relationship forms super fast between a young painter Aldis (Eric Ladin) and his new friend Joanne, a wealthy art collector.', '890', 'English Movie', '150 mi', '2024-08-29', '', ''),
(18, 'mahi.jpg', 'Mahi', 'When a failed cricketer (Rajkummar Rao) sees a rising star in his wife (Janhvi Kapoor), he begins training her - until her success outshines him.', '700', 'English Movie', '567mi', '2024-08-30', '', ''),
(20, 'samantar.jpg', 'Samantar', 'Samantar is a story about a young man Kumar Mahajan, whose life changes after he goes on journey to find, Sudarshan Chakrapani, a man who shares the same destiny with him. ', '900', 'Marathi Movie', '167mi', '2024-08-29', '', ''),
(21, 'rang-de-basanti.jpg', 'Rang De Basanti ', 'The story of six young Indians who assist an English woman to film a documentary on the freedom fighters from their past, and the events that lead them to relive the long-forgotten saga of freedom.', '200', 'Now Playing', '150 mi', '2024-08-21', '', ''),
(24, 'Sholay.jpg', 'Sholay', 'The film is considered one of the greatest and most influential in Indian cinema.', '790', 'Comming Soon', '567mi', '2024-08-20', '', ''),
(25, 'Dora.jpg', 'Dora', 'Dora', '500', 'Kids Movie', '120 mi', '', '2024-09-03', '02:34'),
(26, 'Dora.jpg', 'Dora', 'Dora', '100', 'Kids Movie', 'Dora', '', '2024-09-15', '21:40'),
(27, 'Dora.jpg', 'Dora', 'Dora', '100', 'Kids Movie', 'Dora', '', '2024-09-15', '21:40'),
(28, 'Dora.jpg', 'Dora', 'Dora Movie Kids', '200', 'Kids Movie', '200', '', '2024-09-23', '23:43'),
(29, 'Dora.jpg', 'Dora', 'Dora Movie Kids', '200', 'Kids Movie', '200', '', '2024-09-23', '23:43'),
(30, 'hamlet.jpg', 'Hamlet', 'Hamlet', '200', 'English Movie', '230', '', '2024-09-18', '01:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile_no` text NOT NULL,
  `movie_name` text NOT NULL,
  `payment_mode` text NOT NULL,
  `card_number` text NOT NULL,
  `total_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `mobile_no`, `movie_name`, `payment_mode`, `card_number`, `total_price`) VALUES
(1, 'rutuja', 'rutuja@gmail.com', '9322856447', 'HasyaYatra', 'debitCard', '132324', '1400'),
(2, 'rutuja', 'rutuja@gmail.com', '9322856447', 'HasyaYatra', 'debitCard', '132324', '1400'),
(3, 'rutuja', 'rutuja@gmail.com', '9322856447', 'Google Aai', 'creditCard', '132324', '1200'),
(4, 'vaishnavi', 'v@gmail.com', '9322856447', 'Google Aai', 'creditCard', '132324', '3600'),
(5, 'vaishnavi', 'v@gmail.com', '9322856447', 'Google Aai', 'debitCard', '132324', '3600'),
(6, 'Children Party', 'r@gmail.com', '9322856447', 'Hamlet', 'debitCard', '1234', '200'),
(7, 'Children Party', 'r@gmail.com', '9322856447', 'Hamlet', 'creditCard', '123', '200'),
(8, 'Children Party', 'r@gmail.com', '9322856447', 'Hamlet', 'creditCard', '1234', '200'),
(9, 'Children Party', 'r@gmail.com', '9322856447', 'Hamlet', 'creditCard', '1234', '200'),
(10, 'Children Party', 'r@gmail.com', '9322856447', 'Hamlet', 'debitCard', '1234', '200'),
(11, 'Children Party', 'r@gmail.com', '9322856447', 'Hamlet', 'debitCard', '1234', '200'),
(12, 'Ram', 'r@gmail.com', '987656467', 'double life', 'creditCard', '1234', '780'),
(13, 'abc', 'r@gmail.com', '9322856447', 'double life', 'creditCard', '1234', '780'),
(14, 'rutuja', 'r@gmail.com', '987656467', 'Samantar', 'creditCard', '1234', '900');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `quantity` text NOT NULL,
  `total_price` text NOT NULL,
  `image` text NOT NULL,
  `show_date` text NOT NULL,
  `show_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `quantity`, `total_price`, `image`, `show_date`, `show_time`) VALUES
(48, 'Samantar', '2', '1800', './../../Images/movies/samantar.jpg', '', ''),
(49, 'Samantar', '4', '3600', './../../Images/movies/samantar.jpg', '', ''),
(50, 'HasyaYatra', '2', '1400', './../../Images/movies/hashyajatra.jpg', '', ''),
(51, 'HasyaYatra', '1', '700', './../../Images/movies/hashyajatra.jpg', '', ''),
(58, 'Hamlet', '2', '400', './../../Images/movies/hamlet.jpg', '', ''),
(60, 'Hamlet', '1', '200', './../../Images/movies/hamlet.jpg', '2024-09-18', '01:51'),
(65, 'double life', '1', '780', './../../Images/movies/double-life.jpg', '', ''),
(66, 'double life', '2', '1560', './../../Images/movies/double-life.jpg', '', ''),
(67, 'Samantar', '2', '1800', './../../Images/movies/samantar.jpg', '', ''),
(68, 'Samantar', '1', '900', './../../Images/movies/samantar.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sai', 'sai@gmail.com', 'About your system', 'Your Website is very  Helpful.'),
(2, 'Rutuja', 'Rutu@gmail.com', 'service', 'your starlight service is very nice'),
(3, 'Gauri', 'g@gmail.com', 'xyz', 'it is very easy to use platform'),
(4, 'Rutu', 'gaikwadrutuja254@gmail.com', 'kjk', 'hgvj');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `user_name`, `email`, `password`, `confirm_password`) VALUES
(1, 'gauri', 'g@gmail.com', 'g123', 'g123'),
(2, 'Rutuja', 'Rutu@gmail.com', 'r123', 'r123'),
(3, 'Sai', 'si@gmail.com', 's234', 's234'),
(4, 'rutuja91', 'rutuja91@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
