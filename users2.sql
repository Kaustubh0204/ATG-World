-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 12:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `email`, `name`, `password`, `date`) VALUES
(1, 'zeng@gamil.com', '', '$2y$10$RWC7y3/Ot9TcC', '2021-04-13'),
(2, 'kaus.zoro@gmail.com', 'kaustubh', '$2y$10$XIByleuN9AHIq', '2021-04-13'),
(3, 'k.utturwar@gmail.com', 'Kaustubh Utturwar', '$2y$10$zpUsFezailK9G', '2021-04-13'),
(4, 'k.utturwar1@gmail.co', 'kaustubh', 'aaaaaaaa', '2021-04-13'),
(5, 'k.utturwar2@gmail.co', 'Kaustubh Utturwar', '$2y$10$cbqex70Fv5uhf', '2021-04-13'),
(6, 'k.utturwar5@gmail.co', 'Kaustubh Utturwar', '$2y$10$xlgh98/nx6qPEeml24OtBOsGY1vwUQuxOisN6QU0ZNWFiiOWwvwTy', '2021-04-13'),
(7, 'k.utturwar5@gmail.com', 'Kaustubh Utturwar', '$2y$10$kwGqxL0qMRZvr6Jm3bvc3ODmdNfRIvoAcV0KnmDgj8/Kj9p1ztb06', '2021-04-13'),
(8, 'k.utturwar7@gmail.com', 'Kaustubh Utturwar', '$2y$10$ABlihPTecAjAIw9BtZJ.4eBZHxF33gA5G2m46tVnxg1C3U9afiXCO', '2021-04-13'),
(9, 'k.utturwar1@gmail.com', 'Kaustubh Utturwar', '$2y$10$nKDb4uLyWs8us1/c8cYvPuhc4DuW2yFobBPAk90dS4kN2M2JET8eG', '2021-04-13'),
(10, 'k.utturwar101@gmail.com', 'Kaustubh ', '$2y$10$.JWuRMbPL8Qncu8NP1cC0O6vI3Y68aScTPKmzXeRR1TNhsNU3/Uf.', '2021-04-13'),
(11, 'kaus.zoro1@gmail.com', 'kaustubh', '$2y$10$JYi9I4wFa9QazuosUSTJgOocgEGk0UlOFrh9CLaAHVlV3.G2y57BO', '2021-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
