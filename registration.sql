-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 04:11 PM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `image`, `role_id`) VALUES
(4, 'Salma', 'salma@bravo.com', '12346588954', '$2y$10$bfzdObjDRKL058F47NRDcOF5Hr4J2NPx8KQvuoGWv22pjJMlD7H3y', 'Salma.jpeg', 1),
(6, 'sara ahmed ', 'Sara6@bravo.com', '0111419321', '$2y$10$pZPteRHazzpxsd38A3GHn.VEnFeDmyGQ6xKBo0YO6jeVL6MOv8N1K', 'sara ahmed .jpeg', 2),
(8, 'mahmoud amer', 'mahmoud@gmail.com', '12345678910', '$2y$10$LA70lQ3i3918T3SJ3pBwReqd7XitH1761b7X/SFdwGd5qYyV7NLcW', 'mahmoud.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', '0123456789', '$2y$10$I9NvFC9VpeU7tReHQbLOKOgsAp9m0eMlDaUhUThloGXxJzwB7z7OW'),
(2, 'ahmed', 'ahmed@gmail.com', '0123456789', '$2y$10$I9NvFC9VpeU7tReHQbLOKOgsAp9m0eMlDaUhUThloGXxJzwB7z7OW'),
(3, 'mona', 'mona@.com', '01216632', '$2y$10$rCej1Mvf.jCV7oQxeWFbu.HHqUgUOKxws2MnZcbHar2I/Az00Y8MC'),
(4, 'sohila', 'sohila@.com', '0124598752', '$2y$10$aLdoN1t.Y4q/l6S6vejQfuxQDjszKUdzNQZrTjrb2syiM9wq/cRKK'),
(5, 'soso', 'Sarabravo@com', '0123456789', '$2y$10$Jh2j.iYtySeknSU87ITf2uSJli389D4U20Tmn/x5.fgGaTaQfihX6'),
(6, 'salma', 'salma@bravo.com', '01216632', '$2y$10$lmqJB2kD5YLjvXys7iBHSOgyW/p6jxB6bVBNDzK57aZ37hwG.w47e'),
(7, 'dina', 'dina@jeo.com', '025897416', '$2y$10$aEKX/bDNfbi9pCY7bLJK4uHSRRugoZCbo6mBvF.Ng7HJ32JV4f.7m'),
(8, 'dina', 'dina@jeo.com', '025897416', '$2y$10$ZRRga1yOkhHgr2ehjhp0WeLiY.qiWm/9KwpGlgN/t4TkmudHARAWi'),
(9, 'zina', 'hhhh@com', '0123456789', '$2y$10$QQ6AI1/MHy85TK0XazkFXuWLyRTP7uf15/8427LsRwcFYrcaoSLQC'),
(10, 'nada', 'nada@.com', '06595623145', '$2y$10$ySLuR/WFHlByJnWQGLQst.lBJaNLlMbfCADaOI5U0AMIquU5lNAfW'),
(11, 'osama', 'osama@.com', '', '$2y$10$pVcPFYjzjbafjvuWyNhNreSF3v/9wFBiWD/kNrEXxIJM0cEIYVu9m'),
(12, 'aya', 'aya@.com', '0124598752', '$2y$10$S/pDzv2to4P9vni3zcw8.uUnhy3PQskY8lPj.mP4yDX02Q5wWWVH6'),
(13, 'somia', 'somia@.com', '012589647', '$2y$10$eakssXRixYv9Xq4ZPMjDTOfsEXkqqUdzQT/TekGezN69CPhLJ0wqe'),
(14, 'rana', 'rana@.com', '012589437', '$2y$10$D0XyPLF58RyE6VRTlqjn/O7i..RrmbIXvH/mNiUp7HIMVgzrYPYfW'),
(15, 'Salma', 'salma@bravo.com', '0111419321', '123'),
(16, 'Salma', 'salma@bravo.com', '0111419321', '123'),
(17, 'Salma', 'salma@bravo.com', '0111419321', '123'),
(18, 'ali', 'ali@gmail.com', '0111419321', '1234'),
(19, 'ahmed', 'ahmed@gmail.com', '12346588954', '$2y$10$dTPa6b8y5AR6kWdQSBYLWOgPESfBUKpvK56EPATcwp/xtTZQnjcMS'),
(20, 'asmaa', 'asmaafg@f.com', '1254989665', '$2y$10$M3noY3gZmlrWdst8/OYROOuLb1ttxBZPkSkdpSDQQjTidW2Wjef2q');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`) VALUES
(1, 'super_admin'),
(2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
