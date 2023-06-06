-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Jun 06, 2023 at 10:43 AM
-- Server version: 10.4.27-MariaDB-1:10.4.27+maria~ubu2004
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drainpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `karma` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `karma`, `id`) VALUES
('amilmoe0', 'VlRpuqcwuC6', 'amerring0@comsenz.com', 60, 18),
('ahuncote1', 'cp9XKCoRhgf', 'kissac1@woothemes.com', 51, 19),
('bmantrup2', 'TqUVwB0hJ', 'gtreadger2@amazon.co.jp', 33, 20),
('ddufray3', 'Ig4fhZ1d', 'satrill3@census.gov', 28, 21),
('cstanbro4', 'iuENCuRa9', 'chabens4@stanford.edu', 81, 22),
('ldubble5', 'khCQAawYReZx', 'aogeneay5@dropbox.com', 39, 23),
('kelwin6', 'lcRoKSHvV', 'romeara6@icq.com', 57, 24),
('bscandwright7', 'uIPgIX80LgBo', 'bvassar7@ameblo.jp', 46, 25),
('scockerton8', 'bUiC2yklr9', 'gcullotey8@goo.gl', 34, 26),
('scopnell9', 'IHBXYOn6', 'yfahy9@wikimedia.org', 10, 27);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
