-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 09:01 AM
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
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`id`, `user_id`, `name`, `cvv`, `number`, `type`) VALUES
(1, 17, 'vorak yun', 222, '1234567890123456', 'masters card');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A2');

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
  `is_confirm` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `name`, `description`, `image`, `author`, `trailer`, `duration`, `category`, `is_confirm`) VALUES
(2, 'Top Gun: Maverick', 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUN\'s elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.', 'show31.jpg', 'Vorak', 'https://www.youtube.com/embed/giXco2jaZ_4', '01:14:00', 'action', 1),
(3, 'Black Panther: Wakanda Forever', 'Queen Ramonda (Angela Bassett), Shuri (Letitia Wright), M\'Baku (Winston Duke), Okoye (Danai Gurira) and the Dora Milaje (including Florence Kasumba), fight to protect their nation from intervening world powers in the wake of King T\'Challa\'s death. As the ', 'show32.jpg', 'Rothana', 'https://www.youtube.com/embed/_Z3QKkl1WyM', '01:30:00', 'drama', 1),
(4, 'Plane', 'A pilot finds himself caught in a war zone after he\'s forced to land his commercial aircraft during a terrible storm.', 'phn099.png', '', 'https://www.youtube.com/embed/M25zXBIUVr0', '01:30:00', 'adventure ', 1),
(5, 'Aladdin', 'A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.', 'show1.jpg', '', 'https://www.youtube.com/embed/foyufD52aog', '02:26:00', 'action ', 1),
(6, 'Spider man No way home', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'show6.jpg', 'Jon Watts', 'https://www.youtube.com/embed/JfVOs4VSpmA', '02:26:00', '', 0),
(7, 'TEEN WOLF', 'A terrifying evil has emerged. The wolves howl once again, but only a Werewolf like Scott McCall, can gather both new allies and reunite trusted friends to fight back against what could be the most powerful and deadliest enemy.', 'show5.jpg', ' Russell Mulcahy', 'https://www.youtube.com/embed/okJGAJJI5vk', '02:08:00', '', 0),
(8, 'Thor  The Dark World', 'When the Dark Elves attempt to plunge the universe into darkness, Thor must embark on a perilous and personal journey that will reunite him with doctor Jane Foster.', 'show8.jpg', 'Alan Taylor', 'https://www.youtube.com/embed/fG4pE77-Td8', '02:50:00', '', 0),
(9, 'AVATAR', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'show13.jpg', 'James Cameron', 'https://www.youtube.com/embed/LonqJIvAx58', '01:50:00', '', 0),
(10, 'Poochandi', 'Hack journalist Murugan looks for real-life paranormal stories to feature -- and then he gets caught up in one himself.', 'show17.jpg', ' J.K. Wicky', 'https://www.youtube.com/embed/srTF7YalAfU', '01:21:00', '', 0),
(11, 'Iron Man', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 'show7.jpg', 'Jon Favreau', 'https://www.youtube.com/embed/peyso7TBCyw', '02:21:00', '', 0),
(12, 'Bloodshot', 'Ray Garrison, a slain soldier, is re-animated with superpowers.', 'show2.jpg', ' Dave Wilson', 'https://www.youtube.com/embed/vOUVVDWdXbo', '01:26:00', '', 0),
(13, 'Black Widow', 'Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.', 'show3.jpg', ' Cate Shortland', 'https://www.youtube.com/embed/ybji16u608U', '03:26:00', '', 0),
(19, 'Major', 'Based on the life of Major Sandeep Unnikrishnan, who was martyred in action during the November 2008 Mumbai attacks and was consequently awarded the Ashoka Chakra, India\'s highest peacetime gallantry award, on 26 January 2009.', 'show24.jpg', '\nSashi Kiran Tikka', 'https://www.youtube.com/embed/PAv1Ke07QAM', '01:26:00', '', 0),
(20, 'That \'70s Show', 'A comedy revolving around a group of teenage friends, their mishaps, and their coming of age, set in 1970s Wisconsin.', 'show10.jpg', 'thana', 'https://www.youtube.com/embed/qcQ_xKmuO5w', '01:31:00', '', 0),
(21, 'Puss in Boots: The Last Wish', 'When Puss in Boots discovers that his passion for adventure has taken its toll and he has burned through eight of his nine lives, he launches an epic journey to restore them by finding the mythical Last Wish.', 'show22.jpg', 'Joel Crawford', 'https://www.youtube.com/embed/RqrXhwS33yc', '01:26:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `show_details`
--

CREATE TABLE `show_details` (
  `id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hall` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `show_details`
--

INSERT INTO `show_details` (`id`, `venue_id`, `date`, `time`, `hall`) VALUES
(1, 1, '2023-02-05', '07:26:47', '2'),
(2, 1, '2023-03-28', '02:36:56', '1'),
(3, 1, '2022-12-02', '05:38:24', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_orders`
--

CREATE TABLE `ticket_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_of_birth`, `role`, `address`) VALUES
(8, 'Sovanda', 'vandasophal36@gmail.com', '$2y$10$7Oy31zTEEtSOY8Vk1Nsn7.Nban5DuqqlM/1T7DkTqszvPOHJ8yjB6', '2023-01-01', 'customer', 'Prey veng'),
(17, 'VorakYUN', 'demo@gmail.com', '$2y$10$iDkfmFj1m8uUv8MxbeNQLuPQfVtjuF4lV4J35BVY6XTWZFzqqCRpW', '2023-01-31', 'customer', 'cambodai,kep'),
(18, 'Vorak', 'demo11@gmail.com', '$2y$10$FWtGH1BQqgqU3As4DQBFnOxJOrURABusS6tmyUJla5LhpMxz21XKu', '2023-01-30', 'customer', 'kep'),
(19, 'Voraky', 'vorak11@gmail.com', '$2y$10$1hc19fdXfX/oDW010O.df.PbfwqIdWUtg5m1PiaqIU1hCjwqRNR6.', '2022-12-04', 'customer', 'vbksfjvwiuvkgjw'),
(20, 'Voraky', 'demo77@gmail.com', '$2y$10$NaDQyccNHOqEIdHSgAyirehHtK6I63iQjBIO8VqRtsFoB.lWn/aaO', '2023-01-01', 'customer', 'kep'),
(21, 'Voraky', 'demo88@gmail.com', '$2y$10$e8TwsXcWZlyEs3kXsXELl.TraiyPn1GTFQJcsLejdVOpKpUUZ4R2i', '2023-01-01', 'customer', 'kep'),
(22, 'New', 'demo89@gmail.com', '$2y$10$pGTQ2j8QePzw5dAApVTjjOPR6NLo5EmGV4/Ynmux5LM3JB9UixN8i', '2023-01-01', 'customer', 'vbk');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `address`, `show_id`) VALUES
(1, 'meanchey market', 'kep,Cambodia ', 3);

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
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_details`
--
ALTER TABLE `show_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venue_id` (`venue_id`);

--
-- Indexes for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seat_id` (`seat_id`),
  ADD KEY `show_id` (`show_id`),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_id` (`show_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `show_details`
--
ALTER TABLE `show_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD CONSTRAINT `credit_card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `show_details`
--
ALTER TABLE `show_details`
  ADD CONSTRAINT `show_details_ibfk_1` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  ADD CONSTRAINT `ticket_orders_ibfk_1` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_orders_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venues`
--
ALTER TABLE `venues`
  ADD CONSTRAINT `venues_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
