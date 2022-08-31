-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 05:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `incomming_id` int(255) NOT NULL,
  `outcomming_id` int(255) NOT NULL,
  `msg` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `incomming_id`, `outcomming_id`, `msg`) VALUES
(12, 416129768, 416129768, 'hello'),
(13, 416129768, 416129768, 'hi'),
(14, 1634611763, 416129768, 'hello'),
(15, 416129768, 416129768, '?'),
(16, 1634611763, 416129768, 'hi'),
(17, 1634611763, 416129768, 'hi'),
(18, 1634611763, 416129768, 'cahua'),
(19, 416129768, 1634611763, 'chao'),
(20, 1634611763, 358842653, 'hello cau'),
(21, 358842653, 358842653, 'chao cau'),
(22, 1634611763, 358842653, 'chao cau'),
(23, 358842653, 1634611763, 'hi'),
(24, 1634611763, 358842653, 'i am Vy'),
(25, 358842653, 1634611763, 'toi la 45'),
(26, 1634611763, 358842653, 'hello man'),
(27, 1634611763, 358842653, '78'),
(28, 1634611763, 358842653, '98'),
(29, 1634611763, 358842653, '00'),
(30, 1634611763, 358842653, 'helo'),
(31, 1634611763, 358842653, 'Hi man'),
(32, 1634611763, 358842653, 'what\'s up'),
(33, 1634611763, 358842653, 'are u here?'),
(34, 358842653, 1634611763, 'hi'),
(35, 1634611763, 358842653, 'hi'),
(36, 358842653, 1634611763, 'hi'),
(37, 358842653, 1634611763, 'hello'),
(38, 1634611763, 358842653, 'xin chao'),
(39, 358842653, 1634611763, 'i am vy'),
(40, 1634611763, 358842653, 'i am Vy, too'),
(41, 1634611763, 358842653, 'nice to meet you'),
(42, 358842653, 1634611763, 'you'),
(43, 358842653, 1634611763, 'how old are you'),
(44, 1634611763, 358842653, 'i am 18'),
(45, 358842653, 1634611763, 'wow'),
(46, 358842653, 1634611763, 'i am 18 too'),
(47, 1634611763, 358842653, 'wow'),
(48, 1634611763, 358842653, 'ok'),
(49, 1634611763, 358842653, 'i am busy'),
(50, 358842653, 1634611763, 'oh'),
(51, 358842653, 1634611763, 'no'),
(52, 358842653, 1634611763, 'so see you'),
(53, 358842653, 1634611763, 'bye'),
(54, 1634611763, 358842653, 'ok '),
(55, 1634611763, 358842653, 'bye'),
(56, 1634611763, 358842653, 'Wish you a happy day'),
(57, 358842653, 1634611763, 'Thanks');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `firstname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `firstname`, `lastname`, `email`, `password`, `image`, `status`) VALUES
(1, 1634611763, '45', 'vy', 'tranuyen1963@gmail.com', '1234', '1661855420good-girl.jpg', 'Active now'),
(2, 378529362, 'addidas', 'chua', 'vy00987@gmail.com', '1234', '1661855420good-girl.jpg', 'Offline now'),
(3, 358842653, 'phuongvy', 'Tran', 'tranuyen19623@gmail.com', '12345', '1661863624Arin---Oh-My-Girl-8.jpg', 'Active now'),
(4, 416129768, 'Ut', 'Andrea', 'andrew@gmail.com', '123', '16619385351661863624Arin---Oh-My-Girl-8.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
