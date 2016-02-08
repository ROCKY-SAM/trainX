-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2016 at 08:09 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trainx`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
-- Table structure for table `root`
--

CREATE TABLE IF NOT EXISTS `root` (
  `id` varchar(15) NOT NULL,
  `root` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `train` varchar(20) NOT NULL,
  `rootmap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root`
--

INSERT INTO `root` (`id`, `root`, `from`, `to`, `train`, `rootmap`) VALUES
('1', 'colo-Jaffna', 'Colombo', 'Jaffna', 'Yala Devi', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooting`
--

CREATE TABLE IF NOT EXISTS `rooting` (
  `rootid` varchar(20) NOT NULL,
  `station` varchar(30) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `point` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooting`
--

INSERT INTO `rooting` (`rootid`, `station`, `latitude`, `longitude`, `point`) VALUES
('jafn1', 'Jaffna', '6.927079', '79.861243', '2');

-- --------------------------------------------------------

--
-- Table structure for table `traindeatals`
--

CREATE TABLE IF NOT EXISTS `traindeatals` (
  `id` varchar(10) NOT NULL,
  `train` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `term` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traindeatals`
--

INSERT INTO `traindeatals` (`id`, `train`, `date`, `term`) VALUES
('LH123', 'Udarata Manike', '2015/04/05', '12.00-10.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`, `fname`, `lname`, `email`, `idNumber`, `image`, `headercolor`, `sidecolor`, `phoneNumber`) VALUES
(8, 'lahiru', 'lahiru', 'locationfind', '', '', '', '', 'Screenshot (3).png', '#407a82', '', ''),
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
