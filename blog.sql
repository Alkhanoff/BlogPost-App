-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 04:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `remember_token`) VALUES
(1, 'admin@gmail.com', '$2y$10$YunxiyXyIS.FE875Ox0Lb.M./Wx1uk6VFPJ2j27tmfoiUFcxdt2iK', 'rn6Qdj2gpk8sEu2pKZUsFkfAGOpCb9ilwxkJAYVwbhJNIyJpBB3skK5IwdgC');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'Texnologiya', 1),
(2, 'İqtisadiyyat', 1),
(3, 'İncəsənət', 1),
(4, 'Siyasət', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `catId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isNew` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `image`, `date`, `catId`, `userId`, `status`, `isNew`, `deleted_at`) VALUES
(5, 'İlham Əliyev Bakıda Elektron Hökumətin İnkişafı Mərkəzinin inzibati binasının açılışında iştirak edib', 'İlham Əliyev Bakıda Elektron Hökumətin İnkişafı Mərkəzinin inzibati binasının açılışında iştirak edib', '1542465370.jpg', '2018-11-17 14:36:10', 1, 7, 1, 0, NULL),
(6, 'ABŞ Dövlət Departamentinin İranın sanksiyaları üzrə ekspertləri Bakıya səfər ediblər', 'ABŞ Dövlət Departamentinin İranın sanksiyaları üzrə ekspertləri Bakıya səfər ediblər', '1542465545.jpg', '2018-11-17 14:39:05', 2, 7, 1, 0, NULL),
(7, 'AZAL Moskva üzərində qeydə alınan insidenti şərh edib', 'AZAL Moskva üzərində qeydə alınan insidenti şərh edib', '1542465630.jpg', '2018-11-17 14:40:30', 2, 7, 1, 0, NULL),
(8, 'Nvidia yeni RTX ekran kartlarını təqdim etdi. RTX nə məna verir? Ray tracing nədir?', 'Nvidia yeni RTX ekran kartlarını təqdim etdi. RTX nə məna verir? Ray tracing nədir?', '1542465752.jpeg', '2018-11-17 14:42:32', 1, 7, 1, 0, NULL),
(10, 'sad', 'sad', '1542466257.jpg', '2018-11-17 14:50:57', 1, 7, 0, 0, '2018-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `usercats`
--

CREATE TABLE `usercats` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `catId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercats`
--

INSERT INTO `usercats` (`id`, `userId`, `catId`) VALUES
(143, 7, 1),
(144, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `isNew` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `isNew`, `remember_token`) VALUES
(7, 'Alxan Alxanov', 'user@gmail.com', '$2y$10$AtgoaKnFcZpW5rtvv1d4Eu.nq/yhAliNEQAjFTv3iOezfIcHnJ1M.', 0, 'tZ1MCAwoBBelRKGHksBjgZBp8YGPWa7jJabjxVfNS069IVasuMBIKvk72zYf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catId` (`catId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `usercats`
--
ALTER TABLE `usercats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catId` (`catId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usercats`
--
ALTER TABLE `usercats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `usercats`
--
ALTER TABLE `usercats`
  ADD CONSTRAINT `usercats_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `usercats_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
