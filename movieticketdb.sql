-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 06:19 PM
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
(5, 'img9.jpg', 'theater'),
(6, 'img5.jpg', 'stage');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `time` text NOT NULL,
  `price` text NOT NULL,
  `category` text NOT NULL,
  `duration` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `name`, `description`, `time`, `price`, `category`, `duration`, `date`) VALUES
(14, 'Dora.jpg', 'Dora', 'Dora and the Lost City of Gold (2019) is about a teenage explorer named Dora who goes on an adventure to save her parents and solve the mystery of a lost city of gold.', '2024-08-29T21:05', '350', 'Drama', '150 mi', '2024-08-14'),
(15, 'double-life.jpg', 'double life', 'double life', '2024-08-19T13:05', '780', 'Drama', '150 mi', '2024-08-19'),
(16, 'hashyajatra.jpg', 'HasyaYatra', 'HasyaYatra', '2024-08-29T13:15', '700', 'Comedy Movie', '167mi', '2024-08-29'),
(17, 'painter.jpg', 'Painter', 'A close relationship forms super fast between a young painter Aldis (Eric Ladin) and his new friend Joanne, a wealthy art collector.', '2024-08-29T13:26', '890', 'English Movie', '150 mi', '2024-08-29'),
(18, 'mahi.jpg', 'Mahi', 'When a failed cricketer (Rajkummar Rao) sees a rising star in his wife (Janhvi Kapoor), he begins training her - until her success outshines him.', '2024-08-29T13:31', '700', 'English Movie', '567mi', '2024-08-30'),
(19, 'googleaai.jpg', 'Google Aai', 'Google Aai is a 2024 Marathi movie about a writer-director named Govind who falls into the hands of terrorists', '2024-08-13T13:41', '600', 'Marathi Movie', '167mi', '2024-08-29'),
(20, 'samantar.jpg', 'Samantar', 'Samantar is a story about a young man Kumar Mahajan, whose life changes after he goes on journey to find, Sudarshan Chakrapani, a man who shares the same destiny with him. ', '2024-08-22T14:03', '890', 'Marathi Movie', '167mi', '2024-08-29'),
(21, 'rang-de-basanti.jpg', 'Rang De Basanti ', 'The story of six young Indians who assist an English woman to film a documentary on the freedom fighters from their past, and the events that lead them to relive the long-forgotten saga of freedom.', '2024-08-27T21:14', '200', 'Now Playing', '150 mi', '2024-08-21'),
(22, 'Vedaa.jpg', 'Vedaa', 'Vedaa is a 2024 action, drama, and thriller film about a young woman who challenges a repressive system. ', '2024-08-21T21:19', '400', 'Now Playing', '150 mi', '2024-08-12'),
(23, 'do-aur-do-pyar.jpg', 'Do aur Do pyar', 'Do Aur Do Pyaar is a 2024 Hindi romantic comedy film that explores the complexities of modern relationships and the dilemmas couples face in marriage and affairs. ', '2024-08-26T21:23', '700', 'Comming Soon', '120 mi', '2024-08-27'),
(24, 'Sholay.jpg', 'Sholay', 'The film is considered one of the greatest and most influential in Indian cinema.', '2024-08-29T21:30', '790', 'Comming Soon', '567mi', '2024-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `quantity` text NOT NULL,
  `total_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `quantity`, `total_price`) VALUES
(1, 'Samantar', '1', '890'),
(2, 'Samantar', '4', '3560'),
(3, 'HasyaYatra', '2', '1400'),
(4, 'HasyaYatra', '2', '1400'),
(5, 'Mahi', '1', '700'),
(6, 'Painter', '4', '3560');

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
(3, 'Sai', 'si@gmail.com', 's234', 's234');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
