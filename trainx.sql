-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 07:05 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainx`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `text`) VALUES
(22, 'test2'),
(23, 'test3'),
(24, 'test4'),
(25, 'test5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `idNumber` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `headercolor` varchar(50) NOT NULL,
  `sidecolor` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`, `fname`, `lname`, `email`, `idNumber`, `image`, `headercolor`, `sidecolor`, `phoneNumber`) VALUES
(8, 'lahiru', 'lahiru', 'locationfind', '', '', '', '', 'Screenshot (3).png', '', '', ''),
(2, 'sameera', 'sameera', 'profileManage', 'sameera', 'Abeysekara', 'abeysekaramadushanka14@gmail.com', 'it14121616', 'Screenshot (3).png', 'rgba(207,0,0,0.67)', '#c72626', ''),
(9, 'nimesha', 'nimesha', 'travelGudie', '', '', '', '', 'Screenshot (3).png', '', '', ''),
(10, 'shami', 'shami', 'reservation', '', '', '', '', 'Screenshot (3).png', '', '', ''),
(11, 'kavi', 'kavi', 'payment', 'kavee', 'shamii', 'haha', 'it14121516', 'Screenshot (3).png', '#f63232', '#552a2a', 'lol'),
(12, 'admin', 'admin', 'admin', '', '', '', '', 'Screenshot (3).png', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
