-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 02:05 PM
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
(7, 'img5.jpg', 'Inside area');

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
(31, 'samantar.jpg', 'Samantar', 'A Marathi-language thriller series about a young man named Kumar Mahajan who discovers he shares the same destiny as another man, Sudarshan Chakrapani.', '200', 'Marathi Movie', '', '2024-09-04', '2024-09-11', '12:30'),
(32, 'judgement.jpeg', 'Judgement', 'The Judgement is more about the intricacies of the Indian legal system than about the investigation of the case. ', '230', 'Marathi Movie', '', '2024-09-02', '2024-09-12', '17:30'),
(34, 'vaalvi.jpg', 'Vaalvi', 'Vaalvi is a 2023 Marathi comedy-drama-thriller film about a couple, Aniket and Avani, who plan to end their lives together.', '300', 'Marathi Movie', '170', '2024-09-08', '2024-09-17', '20:16'),
(35, 'Mauli.jpeg', 'Mauli', 'Mauli is a 2018 action movie about an unconventional police officer who faces off against a gang of thugs in a remote village:', '220', 'Marathi Movie', '260', '2024-09-03', '2024-09-16', '11:30'),
(36, 'Sholay.jpg', 'Sholay', 'The film is a Dacoit Western (sometimes called a \"Curry Western\"), combining the conventions of Indian dacoit films with that of Spaghetti Westerns along with elements of Samurai cinema. ', '180', 'Hindi Movie', '200', '2024-09-01', '2024-09-04', '13:00'),
(37, 'Black-Out.jpeg', 'Black Out', 'Blackout spans a single night when the streets of Pune are engulfed in darkness due to a blackout in the city.', '255', 'Hindi Movie', '200', '2024-09-02', '2024-09-05', '15:25'),
(38, 'journey2.jpeg', 'Journey 2', 'Now 17, Sean Anderson (Josh Hutcherson) receives a coded distress signal from an island where none should exist.', '200', 'English Movie', '200', '2024-08-28', '2024-09-02', '10:00'),
(39, 'mongol.jpeg', 'Mongol', 'The premise of Mongol is the story of Genghis Khan, the Mongol leader who founded the Mongol Empire, which ruled expansive areas of Eurasia.', '250', 'English Movie', '150', '2024-08-30', '2024-09-07', '20:45'),
(40, 'hangover.jpg', 'Hangover', 'Two days before his wedding, Doug (Justin Bartha) and three friends (Bradley Cooper, Ed Helms, Zach Galifianakis) drive to Las Vegas for a wild and memorable stag party.', '280', 'Comedy Movie', '160', '2024-08-28', '2024-09-05', '15:40'),
(41, 'day-shift.jpeg', 'Day Shift', 'Parents need to know that Day Shift is an explicitly violent vampire hunting movie with a lot of language and a diverse cast.', '250', 'Comedy Movie', '140', '2024-08-29', '2024-09-01', '20:40'),
(42, 'the-dictator.jpg', 'The Dictator', 'The heroic story of a dictator who risked his life to ensure that democracy would never come to the country he so lovingly oppressed.', '199', 'Comedy Movie', '130', '2024-08-31', '2024-09-06', '01:00'),
(43, 'free-gui.jpg', 'Free GUI', ' a bank teller who discovers he is actually a background player in an open-world video game, decides to become the hero of his own story.', '255', 'Comedy Movie', '160', '2024-08-26', '2024-09-01', '12:30'),
(44, 'Four-Kids-and-It.jpg', 'Four Kids and It ', 'A group of kids on holiday in Cornwall meet a magical creature on the beach with the power to grant wishes.', '160', 'Kids Movie', '160', '2024-08-21', '2024-09-17', '11:10'),
(45, 'inside-out.png', 'Inside Out', 'A girl named Riley is born in Minnesota, and within her mind, five personifications of her core emotions-Joy, Sadness, Disgust, Fear, and Anger-come to life.', '150', 'Kids Movie', '230', '2024-06-09', '2024-09-12', '02:20'),
(46, 'bhola.jpeg', 'Bhola', 'A prisoner named Bholaa (Ajay Devgn) has been released from prison, but was arrested by an officer on his way to the town for his arrogance.', '230', 'Hindi Movie', '140', '2024-09-01', '2024-09-03', '14:50'),
(48, 'thank-god.jpeg', 'Thnank  God', ' A real estate broker meets with an accident and wakes up in heaven, only to be informed by God that he must play a \"Game of Life.\" ', '230', 'Hindi Movie', '140', '2024-08-15', '2024-09-03', '19:00'),
(52, 'Bumm-Bumm-Bole.jpg', 'Bumm Bumm Bole', ' \"Bumm Bumm Bole\" is not at all impressive as it should have been, considering its unusual emotional storyline about a brother and sister.', '120', 'Kids Movie', '100', '2024-08-14', '2024-09-06', '18:00'),
(53, 'Migration.jpg', 'Migration ', ' A family of ducks try to convince their overprotective father to go on the vacation of a lifetime. ', '400', 'Kids Movie', '250', '2024-08-27', '2024-09-17', '22:00'),
(55, 'joker.jpg', 'Joker', 'The Joker is a fictional character who appears in Christopher Nolan\'s 2008 superhero film The Dark Knight, based upon the DC Comics character and supervillain of the same name. He was played by Australian actor Heath Ledger.', '460', 'English Movie', '200', '2024-08-25', '2024-09-26', '19:20'),
(57, 'the-wave.jpeg', 'The wave', ' The human race stands on the brink of extinction as a series of alien attacks decimate the planet, causing earthquakes, tsunamis and disease. ', '450', 'English Movie', '240', '2024-08-17', '2024-09-30', '05:00'),
(58, 'all-the-best.jpg', 'All the best', 'All The Best: Fun Begins is a 2009 Indian Hindi-language comedy film directed by Rohit Shetty and produced by Ajay Devgn. It stars Ajay Devgn, Sanjay Dutt, Fardeen Khan, Bipasha Basu, Johny Lever, Sanjay Mishra and Mugdha Godse.[2][3][4] Upon release, it was a critical and commercial success.', '300', 'Drama', '120', '2024-08-21', '2024-09-03', '13:22'),
(59, 'Gotya.jpg', 'Gotya', 'Gotya is a small-town boy who loves to play the game of marbles. His school does not accept it as a sport and with the help of Vishal, his sports teacher, Gotya manages to convince the school.', '450', 'Drama', '200', '2024-09-04', '2024-09-30', '04:40'),
(60, 'thanks-dear.jpeg', 'Thanks Dear', 'This drama film is about a successful man who reviews his life after a dramatic event. The film stars Naga Chaitanya Akkineni as Abhiram, a character who rises through hard work but becomes arrogant and self-centered', '300', 'Drama', '340', '2024-09-04', '2024-09-28', '03:30'),
(62, 'choricha-mamla.jpg', 'Choricha Mamla', 'The film received mostly mixed-to-positive reactions from critics. The critic Ganesh Matkari of the Mumbai Mirror pointed out the loopholes in the story but appreciated Joshi and Dhome’s chemistry and said, \"Choricha Mamla would have worked better as a play, preferably in the pre-cellphone era. ', '299', 'Drama', '120', '2024-09-18', '2024-09-27', '19:38'),
(63, 'stree2.jpeg', 'Stree 2', 'Stree is a 2018 Indian horror-comedy film about a mysterious female spirit who abducts men in the small town of Chanderi during an annual festival.', '500', 'Now Playing', '200', '2024-09-02', '2024-09-11', '15:00'),
(64, 'raghu.jpeg', 'Raaghu', 'A medicine delivery executive working at night shift, loots the houses he delivers. An unexpected incident forces him to accomplish a few crooked deals overnight, failing to which his life may go upside down.', '300', 'Now Playing', '140', '2024-09-06', '2024-09-03', '18:50'),
(65, 'The-Greatest-Of-All-Time.jpeg', 'The Greatest Of All Time ', 'After graduating from high school without any plans for the future, Isaiah receives a push to start making better life decisions.', '300', 'Now Playing', '140', '2024-09-06', '2024-09-09', '20:00'),
(66, 'The-forge.jpg', 'The Forge', 'After graduating from high school without any plans for the future, Isaiah receives a push to start making better life decisions.', '340', 'Now Playing', '230', '2024-09-15', '2024-09-17', '23:00'),
(67, 'dhadak2.jpg', 'Dhadak 2', 'The story revolves around Vidhi and Nilesh who are deeply in love with each other but belong to different castes.', '310', 'Comming Soon', '120', '2024-09-26', '2024-09-28', '10:00'),
(68, 'Housefull5.jpg', 'HouseFull 5', 'Housefull 5 is a comedy film, featuring Akshay Kumar, Pooja Hegde, Kriti Sanon, and John Abraham in the lead roles.', '300', 'Comming Soon', '160', '2024-09-16', '2024-09-17', '20:30'),
(69, 'Devara.jpg', 'DEVARA Part 1 ', 'An epic action saga set against coastal lands, which briefs about rip-roaring ,emotionally charged incidents in the periodic timeline, also comprises the titular protagonist being the rescuer to deprived and fear to evildoers.', '230', 'Comming Soon', '150', '2024-09-26', '2024-09-30', '10:10'),
(70, 'Welcome-To-The-Jungle.jpg', 'Welcome To The Jungle', 'Police officers Jay Bakshi and Sandhya have been given task to track down notorious criminal Raj Solanki. Things take an unexpected turn when JaY finds out that Raj plays a significant role in his life.', '420', 'Comming Soon', '120', '2024-09-27', '2024-09-30', '01:20');

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
(15, 'rutuja', 'rutuja@gmail.com', '9322856447', 'Mauli', 'creditCard', '132324', '660'),
(16, 'rutuja', 'rutuja@gmail.com', '9322856447', 'Black Out', 'creditCard', '132324', '255'),
(17, 'rutuja', 'rutuja@gmail.com', '9322856447', 'Black Out', 'creditCard', '132324', '255'),
(18, 'rutuja', 'rutuja@gmail.com', '9322856447', 'Mauli', 'creditCard', '132324', '660'),
(19, 'rutuja', 'v@gmail.com', '9322856447', 'Mauli', 'creditCard', '132324', '1320'),
(20, 'abc', 'r@gmail.com', '9322856447', 'Bhola', 'creditCard', '123', '690'),
(21, 'priya', 'priya@gmail.com', '9999999999', 'All the best', 'debitCard', '555566667672', '1200');

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
(69, 'Mauli', '2', '440', './../../Images/movies/Mauli.jpeg', '2024-09-16', '11:30'),
(70, 'Mauli', '3', '660', './../../Images/movies/Mauli.jpeg', '2024-09-16', '11:30'),
(71, 'Thnank  God', '2', '460', './../../Images/movies/thank-god.jpeg', '', ''),
(72, 'Thnank  God', '3', '690', './../../Images/movies/thank-god.jpeg', '', ''),
(73, 'Thnank  God', '2', '460', './../../Images/movies/thank-god.jpeg', '2024-09-03', '19:00'),
(74, 'Black Out', '2', '510', './../../Images/movies/Black-Out.jpeg', '2024-09-05', '15:25'),
(75, 'Black Out', '0', '0', './../../Images/movies/Black-Out.jpeg', '2024-09-05', '15:25'),
(76, 'Black Out', '3', '765', './../../Images/movies/Black-Out.jpeg', '2024-09-05', '15:25'),
(77, 'Black Out', '3', '765', './../../Images/movies/Black-Out.jpeg', '2024-09-05', '15:25'),
(78, 'Black Out', '1', '255', './../../Images/movies/Black-Out.jpeg', '2024-09-05', '15:25'),
(79, 'Mauli', '3', '660', './../../Images/movies/Mauli.jpeg', '2024-09-16', '11:30'),
(80, 'Mauli', '6', '1320', './../../Images/movies/Mauli.jpeg', '2024-09-16', '11:30'),
(81, 'Bhola', '3', '690', './../../Images/movies/bhola.jpeg', '2024-09-03', '14:50'),
(82, 'All the best', '4', '1200', './../../Images/movies/all-the-best.jpg', '2024-09-03', '13:22');

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
(5, 'gauri', 'gauri@gmail.com', 'system related', 'Your system is very good platform for book movie ticket'),
(6, 'nikita', 'nikita@gmail.com', 'booking system', 'Ticket Booking System is good'),
(7, 'priya', 'priya@gmail.com', 'website Related', 'Your Website is Good platform For book Movie ticket ');

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
(5, 'rutujag', 'rutujag@gmail.com', '123', '123'),
(6, 'barate', 'barate@gmaim.com', '123', '123'),
(7, 'rohit', 'rohit@gmail.com', '123', '123'),
(8, 'shree', 'shree@gmail.com', '123', '123'),
(9, 'Priya', 'priya@gmail.com', '123', '123');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
