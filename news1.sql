-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 09:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Afghanistan'),
(2, 'Sports'),
(3, 'World'),
(4, 'Football'),
(5, 'Hockey');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cat` varchar(64) NOT NULL,
  `happen_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(255) NOT NULL,
  `user` varchar(128) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `cat`, `happen_date`, `location`, `user`, `image`) VALUES
(1, 'Afghanistan in 24 Hours', '<p>hihghdhfhsd</p>', 'Sports', '2019-12-26 19:30:00', 'Kabul', 'haseeb', 'Picture2.jpg'),
(3, 'Rush-hour vehicle bomb kills dozens in Somali capital', '<p>Rush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capitalRush-hour vehicle bomb kills dozens in Somali capital</p>', 'World', '2019-12-19 09:32:00', 'Somali', 'Haseeb', '1af1caaa-6776-4769-9312-d1ae24e8d695_wide_fallback.png'),
(4, 'This is a test news about Afghanistan', '<p>This is a test news about Afghanistan</p>\r\n<p>This is a test news about Afghanistan</p>\r\n<p>This is a test news about Afghanistan</p>\r\n<p>This is a test news about Afghanistan</p>\r\n<p>This is a test news about Afghanistan</p>\r\n<p>This is a test news about Afghanistan</p>\r\n<p>This is a test news about Afghanistan</p>\r\n<p>&nbsp;</p>\r\n<p>This is a test news about Afghanistan</p>', 'Afghanistan', '2019-12-20 07:42:00', 'Kabul', 'Haseeb', 'Untitled-Project.jpg'),
(5, 'updated', '<p>this is a test update</p>', 'World', '2020-01-11 07:10:00', 'Kabul', 'haseeb', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `userpass` varchar(64) NOT NULL,
  `email` varchar(255) DEFAULT 'Viewer',
  `role` varchar(32) NOT NULL DEFAULT 'Viewer',
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `userpass`, `email`, `role`, `image`) VALUES
(7, 'Test', 'test', 'testing1@testing.com', 'admin', 'MOHE Logo.png'),
(8, 'bahman', '123', 'kingsum007@gmail.com', 'Viewer', 'Picture2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
