-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 07:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cvv` int(3) NOT NULL,
  `number` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL,
  `date_exp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`id`, `user_id`, `name`, `cvv`, `number`, `type`, `date_exp`) VALUES
(42, 31, 'vanda', 333, '4263982640269299', 'Visa Card', '2023-03'),
(43, 34, 'sreyyoer', 111, '4111111111111111', 'Visa Card', '2023-03'),
(45, 37, 'Johnrak', 333, '5555555555554444', 'Master Card', '2023-12'),
(46, 38, 'Jonhrak', 232, '4111111111111111', 'Visa Card', '2023-06');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `duration` time NOT NULL,
  `category` varchar(50) NOT NULL,
  `is_confirm` tinyint(1) NOT NULL DEFAULT 0,
  `seller_id` int(11) NOT NULL,
  `screen` varchar(20) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `name`, `description`, `image`, `author`, `trailer`, `duration`, `category`, `is_confirm`, `seller_id`, `screen`, `language`) VALUES
(62, 'That Time I Got Reincarnated As A Slime', 'After an assailant murders office worker Mikami Satoru, he finds himself reborn as a remarkably powerful slime in an alternate world, where he begins a quest to promote harmony among the world\'s different races.', 'P8778P390.jpg', 'Hajime', 'https://www.youtube.com/embed/3aQ6tM_7qJA', '02:40:00', 'Fantasy', 1, 29, 'SCEEN-X', 'English'),
(64, 'Spiderman', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'B9010X2898.jpg', 'JonWatts', 'https://www.youtube.com/embed/JfVOs4VSpmA', '03:04:00', 'Adventure', 0, 33, '2D', 'English'),
(65, 'Plunderer', 'Plunderer is a well-thought-out anime with a mix of sexual humor as well as some interesting plot twists and character growth. Some aspects of this anime are also meant to allow the viewers to relate to the characters on an emotional level.', 'M726M1110.jpg', 'Genji', 'https://www.youtube.com/embed/L1Y9r8psTmo?start=7', '01:50:00', 'Adventure', 1, 29, '3D', 'English'),
(66, 'Black Widow', 'Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.', 'C5747W3814.jpg', 'Shortland', 'https://www.youtube.com/embed/Fp9pNPdNwjI', '02:14:00', 'Action', 1, 31, '3D', 'English'),
(67, 'Avatar: The Way of Water', 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'vi race to protect their home.', 'T5280I7216.jpg', 'sreyyoer', 'https://www.youtube.com/embed/d9MyW72ELq0', '03:00:00', 'Romance', 1, 34, '2D', 'Khmer'),
(70, 'Spiderman', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'W3620Z6714.jpg', 'JonWatts', 'https://www.youtube.com/embed/JfVOs4VSpmA', '02:03:00', 'Adventure', 1, 35, '2D', 'English'),
(71, 'Teen Wolf: The Movie', 'A terrifying evil has emerged. The wolves howl once again, but only a Werewolf like Scott McCall, can gather both new allies and reunite trusted friends to fight back against what could be the most powerful and deadliest enemy.', 'W4720M7277.jpg', 'Jesdeveff', 'https://www.youtube.com/embed/1y3rflTTjeI', '04:00:00', 'Action', 1, 34, '2D', 'English'),
(73, 'Major', 'Vijay Rajendran is a happy-go-lucky man, but everything changes after the unexpected death of his foster father.', 'G1903G3678.jpg', 'Hindi', 'https://www.youtube.com/embed/PAv1Ke07QAM', '02:00:00', 'Action', 1, 34, '2D', 'English'),
(75, 'Thor: The Dark World', 'When the Dark Elves attempt to plunge the universe into darkness, Thor must embark on a perilous and personal journey that will reunite him with doctor Jane Foster.', 'L6796S494.jpg', 'Alantaylor', 'https://www.youtube.com/embed/gIBSuYgRIm0', '01:52:00', 'Action', 1, 31, 'SCEEN-X', 'English'),
(76, ' Black Widow', 'We have unfinished business.\" See Marvel Studios’ “Black Widow” in theaters or on Disney+ with Premier Access on July 9. Additional fee required.', 'Q4447X3349.jpg', 'Nana', 'https://www.youtube.com/embed/ybji16u608U', '01:30:00', 'Adventure', 1, 34, '3D', 'English'),
(77, 'Blackwidow', 'We have unfinished business.\" See Marvel Studios’ “Black Widow” in theaters or on Disney+ with Premier Access on July 9.', 'B8329N2364.jpg', 'nana', 'https://www.youtube.com/embed/ybji16u608U', '02:02:00', 'Horror', 1, 35, '2D', 'English'),
(78, 'That \'70s Show', 'A comedy revolving around a group of teenage friends, their mishaps, and their coming of age, set in 1970s Wisconsin.', 'I8132Y2228.jpg', 'Davit', 'https://www.youtube.com/embed/cnemT9WKkmg', '03:30:00', 'Action', 1, 34, '3D', 'Khmer'),
(81, 'Ant-Man and the Wasp: Quantumania', 'Scott Lang and Hope Van Dyne, along with Hank Pym and Janet Van Dyne, explore the Quantum Realm, where they interact with strange creatures and embark on an adventure that goes beyond the limits of what they thought was possible.', 'M6052X5170.jpg', ' Peyton Reed', 'https://www.youtube.com/embed/5WfTEZJnv_8', '04:50:00', 'Romance', 1, 37, '3D', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `show_details`
--

CREATE TABLE `show_details` (
  `id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hall` varchar(50) NOT NULL,
  `show_id` int(11) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `show_details`
--

INSERT INTO `show_details` (`id`, `venue_id`, `date`, `time`, `hall`, `show_id`, `price`) VALUES
(80, 19, '2023-02-20', '17:00:00', 'Hall 1', 62, '7$'),
(81, 27, '2023-02-23', '22:30:00', 'Hall-4', 62, '9$'),
(83, 20, '2023-02-20', '18:49:00', 'Hall 2', 64, '7$'),
(84, 27, '2023-02-26', '20:00:00', 'Hall 3', 65, '6$'),
(85, 19, '2023-02-27', '18:00:00', 'Hall-2', 65, '4$'),
(86, 23, '2023-02-21', '18:00:00', 'Hall 2', 66, '10$'),
(87, 19, '2023-02-20', '19:30:00', 'Hall 1', 67, '3$'),
(90, 20, '2023-02-20', '18:01:00', 'Hall 2', 70, '5$'),
(91, 20, '2023-02-20', '20:00:00', 'Hall 3', 71, '4$'),
(93, 20, '2023-02-27', '19:00:00', 'Hall 4', 73, '4$'),
(95, 27, '2023-02-22', '17:00:00', 'Hall 1', 75, '8$'),
(97, 20, '2023-02-27', '18:20:00', 'Hall 3', 76, '5$'),
(98, 19, '2023-02-20', '17:24:00', 'Hall 3', 77, '4$'),
(99, 19, '2023-02-27', '15:08:00', 'Hall 2', 78, '3$'),
(109, 26, '2023-02-23', '16:50:00', 'Hall 4', 81, '5$'),
(110, 23, '2023-02-23', '15:40:00', 'Hall-3', 81, '5$'),
(111, 19, '2023-02-23', '10:30:00', 'Hall-1', 81, '5$'),
(112, 23, '2023-02-23', '13:00:00', 'Hall-1', 81, '5$'),
(113, 23, '2023-02-20', '08:00:00', 'Hall-1', 81, '5$'),
(114, 23, '2023-02-20', '15:40:00', 'Hall-1', 81, '5$'),
(115, 23, '2023-02-20', '17:00:00', 'Hall-1', 81, '5$');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_orders`
--

CREATE TABLE `ticket_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_detail_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `seat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_orders`
--

INSERT INTO `ticket_orders` (`id`, `user_id`, `show_detail_id`, `date`, `seat`) VALUES
(89, 37, 114, '2023-02-20', 'A5'),
(90, 37, 114, '2023-02-20', 'A6'),
(91, 37, 114, '2023-02-20', 'A8'),
(92, 37, 114, '2023-02-20', 'A7'),
(93, 37, 114, '2023-02-20', 'A9'),
(94, 37, 114, '2023-02-20', 'A10'),
(95, 38, 110, '2023-02-20', 'F8'),
(96, 38, 110, '2023-02-20', 'F9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'customer',
  `address` varchar(100) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_of_birth`, `role`, `address`, `image`) VALUES
(29, 'Rothana', 'rothana69@gmail.com', '$2y$10$AdNNpVQnPLLYA6jELqtiS.Mi0qo9n.dAKnqrFAcDt/O02SvlMW1Iq', '2000-10-10', 'seller', 'Phum SenSok 3, Khmunh, SenSok, Phnom Penh', NULL),
(30, 'Sreyynang', 'Sreynang@student.passerellesnumeriques.org', '$2y$10$2AMtLXB50/jFzqA8TLKDguw0WV43w/XHGp2sOLPO3zjLn9YJaoV0u', '2003-02-26', 'customer', 'phnom phen', NULL),
(31, 'Sovanda', 'vandacinema@gmail.com', '$2y$10$ygbC60M6h9jvhkXBBGEZ9.QBZar.61hjdxyrdmJORDR5VjF4rn8QK', '2003-02-13', 'seller', 'Prey veng', 'E4608Z655.jpg'),
(33, 'Thana', 'thana@123gmail.com', '$2y$10$K7krcBBwOLheWN23hs.G0uaIEThVDDyn/QLq9OFV8FNULkejQAi/.', '2008-02-19', 'seller', '1212sdfds', NULL),
(34, 'Sreyynang', 'Sreyyoer.yoem@student.passerellesnumeriques.org', '$2y$10$k1vmEmD80XPEZShpLBI6G.TVsaKrWmcXoGI4bxol8OxvOS3aZT5QG', '2008-02-23', 'seller', 'Prey Veng', NULL),
(35, 'Nana', 'nana@123gmail.com', '$2y$10$Dy/Zb9k/GF6kfLqMlzU/iOuBPwal837woM2bX6akuSulipgLhfQuq', '2008-01-01', 'seller', '1212nana', NULL),
(36, 'Steav', 'customer@gmail.com', '$2y$10$2xziFVEh5TUS0KvB05kdDutp9stA449zo1CdXU/vzIgalx4v.8CAS', '2008-02-23', 'customer', 'kep,cambodia', 'S2914A3474.jpg'),
(37, 'Robot', 'seller@gmail.com', '$2y$10$0b7ydktLuGYqKVxBEydxlOqhdFffnDFc7g2TkvG8JzLdL2z0Stt7e', '2008-02-19', 'seller', 'kep cambodia', NULL),
(38, 'Johnrak', 'admin@gmial.com', '$2y$10$xkogyoWxLBIDncqdWF3LyugvNv2q4sYJ7dXtrVZ/0qml/WQ.QDJ3C', '2008-02-23', 'admin', 'Phnom penh', 'O4962I8576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `address`) VALUES
(19, 'Sen Sok', 'Phnom penh '),
(20, 'Midtown', 'phnom penh'),
(23, 'Meanchey Tmey', 'Phnom penh'),
(26, 'KMALL', 'Phnom penh'),
(27, 'AEON Mall', 'Phnom penh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shows_ibfk_1` (`seller_id`);

--
-- Indexes for table `show_details`
--
ALTER TABLE `show_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venue_id` (`venue_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_id` (`show_detail_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `show_details`
--
ALTER TABLE `show_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD CONSTRAINT `credit_card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `show_details`
--
ALTER TABLE `show_details`
  ADD CONSTRAINT `show_details_ibfk_1` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_details_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  ADD CONSTRAINT `ticket_orders_ibfk_2` FOREIGN KEY (`show_detail_id`) REFERENCES `show_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
