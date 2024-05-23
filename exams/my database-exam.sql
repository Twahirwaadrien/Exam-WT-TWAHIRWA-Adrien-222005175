-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scs`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `address`, `email`, `telephone`, `username`, `password`) VALUES
(1, 'Veve', 'huye', 'paccy@mail.com', 783082748, 'vv', '$2y$10$Y2iRLa0EmorCyUlTf6tl6ugHs4i0iC5wJ9KH557DumR1i/lrthOSG'),
(2, 'adrien', 'Kibuye', 'twahirwaadrien90@gmail.com', 783082740, 'adr', '$2y$10$/pUzEnIEVSp5R.gbj9Bz.eeKVnHPVkx0wlEUzrJAY4BxzitpDWn0e'),
(3, 'adrien', 'Kibuye', 'twahirwaadrien90@gmail.com', 783082740, 'twahirwaadrien90@gmail.com', '$2y$10$lrxnN.sZyqXXLx3z/Lnjsu9HGbXfjQ8.PS077563ObZy5lQm8Ujly'),
(4, 'Veve', 'Kibuye', 'twahirwaadrien90@gmail.com', 783082740, 'Admin', '$2y$10$TBW5o37rn2Y5QKgUtBgKd.X4muW2ybRYCGRS2GSzsZrq5I7uMM2BW'),
(5, 'Emma', 'Kigali', 'emma@gmail.com', 788976582, 'Emma', '$2y$10$S1o3g.RAzqAEv3/o5jgbs.2iSqiyzqNPzHqe2SIQQHzJ4V5KBQqly'),
(6, 'KEZA', 'Muhanga', 'keza@gmail.com', 222005175, 'keza@gmail.com', '$2y$10$gdIje01DSsQxc2O51Y8mNuLemxr0qzZ8outvwPIkArQ21aomGfDve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
