-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 09:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(5) NOT NULL,
  `user` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `user`, `msg`) VALUES
(21, 'nwflhd1@gmail.com', 'Hay'),
(22, 'nwflhd1@gmail.com', 'what'),
(23, 'nwflhd1@gmail.com', 'why'),
(24, 'nwflhd1@gmail.com', 'nape'),
(25, 'nwflhd1@gmail.com', 'paan'),
(26, 'admin@admin.com', 'Daf'),
(27, 'admin@admin.com', 'inng'),
(28, 'admin@admin.com', 'as'),
(29, 'admin@admin.com', 'asd'),
(30, 'admin@admin.com', 'ads'),
(31, 'admin@admin.com', 'fix'),
(32, 'admin@admin.com', 'asdklh');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `name_project` varchar(100) NOT NULL,
  `link_project` varchar(500) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `name_project`, `link_project`, `publisher`) VALUES
(6, 'VroZect', 'tech', 'Vrozect Development');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`) VALUES
(4, 'zaid', 'zaid@gmail.com', '202cb962ac59075b964b07152d234b70', 23, 324234234),
(5, 'Nawfal Hadi', 'gogo@go.go', '4223092294a01654be85d56434f6ceb2', 12, 213213),
(6, 'Administor', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99', 21, 7914412),
(9, 'NewUser', 'new@user.com', '22af645d1859cb5ca6da0c484f1f37ea', 21, 2147483647),
(10, 'Nawfal', 'nwflhd1@gmail.com', '202cb962ac59075b964b07152d234b70', 21, 123),
(11, 'hay', 'hay@hay.hay', '4982b37aa4ff1d1761d9567323d2cf38', 12, 12),
(12, 'Daffa', 'daffa51@gmail.com', 'd05077991d45031fe31e42ab2b7bd5a2', 15, 2147483647),
(13, 'YoungNan', 'sultanfalwan@gmail.com', 'f152c6f1152fffa6919e85542116d287', 17, 991),
(16, 'Ahmad', 'ahmadseba001@gmail.com', 'e8ff7d8d7a49a969a2cb8502eded9d79', 21, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
