-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 05:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prettyhealthy`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(1, 'health', 2),
(3, 'skin care', 2),
(5, 'hair care', 1),
(6, 'Moral Story', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(1, 'suntan', '                                sun tan hatayen                                      ', '3', '01 Jul, 2023', 8, '1691758846-suntann.jpg'),
(2, 'Apple cider ka istemaal kaise karen', '    Apple cider ka istemaal kaise karen.\r\nApple cider kya pani me daal ker piyen.\r\n                ', '1', '01 Jul, 2023', 8, '1689692199-lime-oil.jpg'),
(3, 'gori tawacha', '                                                                                One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race.     \r\n                                                                                One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race.                                                                                                                                                                       One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race.                                                                                       \r\n                                                                                One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race.                                                                                       \r\n                                                                                One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race.                                                                                       \r\n                                                                                One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race.                                                                                                                                                                         ', '3', '01 Jul, 2023', 8, '1691759177-gora-chehra.jpg'),
(4, 'How to loose weight fast', '                                weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.\r\nweight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.weight loose kerne ke fayede : oil suger na khayen.appple cider piye.jumk foog se bache.                                      ', '6', '01 Jul, 2023', 8, '1691758826-honey.jpg'),
(5, 'What is cholestrol and types of cholestrol.', '                                                Cholestrol kya hay ldl &hdlCholestrol kya hay ldl &hdl     \r\nHow to control cholestrol.                                                    ', '1', '01 Jul, 2023', 9, '1691758781-blood-01.jpg'),
(6, 'dandruff  ke padesani se chutkara.', 'dandruff  ke padesani se chutkara. pame le liye kare balon ku safaye . lagate dahi ma d nimbu.', '5', '03 Aug, 2023', 5, '1691069487-dandruff-01.jpg'),
(7, 'rabbit and turtle', 'One day a rabbit was boasting about how fast he could run. He was laughing at the turtle for being so slow. Much to the rabbit’s surprise, the turtle challenged him to a race. The rabbit thought this was a good joke and accepted the challenge. The fox was to be the umpire of the race. As the race began, the rabbit raced way ahead of the turtle, just like everyone thought.\r\n\r\nThe rabbit got to the halfway point and could not see the turtle anywhere. He was hot and tired and decided to stop and take a short nap. Even if the turtle passed him, he would be able to race to the finish line ahead of him. All this time the turtle kept walking step by step by step. He never quit no matter how hot or tired he got. He just kept going.\r\n\r\nHowever, the rabbit slept longer than he had thought and woke up. He could not see the turtle anywhere! He went at full speed to the finish line but found the turtle there waiting for him.\r\n\r\nMoral: never underestimate the weakest opponent.\r\n\r\n12345\r\nyou may also like\r\n\r\nKeep Your Dream\r\nIn \"Inspiration\"\r\n\r\n\r\nThe Thirsty Crow\r\nIn \"Motivation\"\r\n\r\n\r\nNever to Give Up\r\nIn \"Motivation\"\r\n\r\n\r\nLearn to Appreciate\r\nIn \"Inspiration\"\r\n', '6', '11 Aug, 2023', 9, '1691758542-mouthulcer-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `websitename` varchar(60) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `footerdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `websitename`, `logo`, `footerdesc`) VALUES
(0, 'CMS Website', '', '&copy;All right reserved-2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'Afghana', 'Anjum', 'afgana anjum', 'b9ed4f50093134f0888f4050cd080b08', 1),
(2, 'ginni', 'anjum', 'ginni anjum', '009077fd90fa48e5353e90184698123d', 0),
(3, 'admin', 'panel', 'admin panel', 'f964515faff55e772c6212fcbe4c76f2', 1),
(4, 'roma', 'jahan', 'roman kh', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'google', 'baba', 'google baba', 'c822c1b63853ed273b89687ac505f9fa', 1),
(6, 'diamond', 'power', 'diamond power', '4e777bb4e60f625f38f547e56b1af72e', 0),
(7, 'rockey', 'rock', 'rockey rock', '8b02dd10d623770d6a60224e4c5da3e0', 1),
(8, 'baby', 'go', 'babygo', 'cacb2834d2af9e84a409b72473587469', 1),
(9, 'donald', '33', 'donald', '42ecdb6f7e8e8d6899ad778e8167d533', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `websitename` (`websitename`),
  ADD UNIQUE KEY `websitename_2` (`websitename`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
