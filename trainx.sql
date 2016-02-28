-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 12:53 AM
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customerId` varchar(200) NOT NULL,
  `Nic` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `phoneNumber` varchar(200) NOT NULL,
  `customerfname` varchar(200) NOT NULL,
  `customerlname` varchar(200) NOT NULL,
  `lastlogindate` varchar(200) NOT NULL,
  `registerDate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customerId`, `Nic`, `email`, `Password`, `phoneNumber`, `customerfname`, `customerlname`, `lastlogindate`, `registerDate`) VALUES
(1, '11', '930512400V', 'dksameera08@gmail.com', '0716010860', '0718122424', 'sameera', 'abeysekara', '2015-02-12', ''),
(2, '16', 'etre', 'tre', 'tretre', 'fgdf', 'ranil', 'milantha', '', ''),
(4, '14', '54654', '454545', '5454', '54545', 'nethu', 'yurangi', '5454444444444444444', ''),
(5, '20', '45', '45', '45', '454545', '45', '4', '54', '');

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
(25, 'test5'),
(24, 'test4'),
(23, 'test3'),
(22, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `messagesystem`
--

CREATE TABLE `messagesystem` (
  `idmessage` bigint(20) NOT NULL,
  `senderId` varchar(200) NOT NULL,
  `messageText` mediumtext NOT NULL,
  `replyId` varchar(200) NOT NULL,
  `timeDate` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagesystem`
--

INSERT INTO `messagesystem` (`idmessage`, `senderId`, `messageText`, `replyId`, `timeDate`, `type`) VALUES
(1, '11', 'qwe', '', '20:55 2016-02-23', 'send'),
(2, '12', 'ghj', '', '21:06 2016-02-23', 'send'),
(3, '11', 'ghj', '', '21:06 2016-02-23', 'send'),
(4, '11', 'sadfas', '', '21:20 2016-02-23', 'send'),
(5, '11', 'sadfas', '', '21:20 2016-02-23', 'send'),
(6, '11', 'sadfas', '', '21:21 2016-02-23', 'send'),
(7, '11', 'lol', '', '21:28 2016-02-23', 'send'),
(8, '11', 'jbdekjbkfssr', '', '21:44 2016-02-23', 'send'),
(9, '11', 'jbdekjbkfssr', '', '21:45 2016-02-23', 'send'),
(10, '11', 'jbdekjbkfssr', '', '21:45 2016-02-23', 'send'),
(11, '11', 'jbdekjbkfssr', '', '21:45 2016-02-23', 'send'),
(12, '11', 'jbdekjbkfssr', '', '21:45 2016-02-23', 'send'),
(13, '11', 'jbdekjbkfssr', '', '21:45 2016-02-23', 'send'),
(14, '11', 'jbdekjbkfssr', '', '21:45 2016-02-23', 'send'),
(15, '11', 'hey', '', '22:12 2016-02-23', 'send'),
(16, '11', 'hey', '', '22:12 2016-02-23', 'send'),
(17, '11', 'hey', '', '22:12 2016-02-23', 'send'),
(18, '11', '44', '', '22:53 2016-02-23', 'send'),
(19, '11', 'q', '', '22:54 2016-02-23', 'send'),
(20, '11', '1', '', '22:55 2016-02-23', 'send'),
(21, '11', 'a', '', '22:56 2016-02-23', 'send'),
(22, '11', '1', '', '22:59 2016-02-23', 'send'),
(23, '11', '1', '', '22:59 2016-02-23', 'send'),
(24, '11', '1', '', '22:59 2016-02-23', 'send'),
(25, '11', '1', '', '22:59 2016-02-23', 'send'),
(26, '11', '23', '', '23:01 2016-02-23', 'send'),
(27, '11', '24', '', '23:01 2016-02-23', 'send'),
(28, '11', 'lol', '', '23:03 2016-02-23', 'send'),
(29, '11', 'lolq', '', '23:03 2016-02-23', 'send'),
(67, '11', 'hehehy', '', '0:11 2016-02-25', 'send'),
(69, '12', 'qqq', '', '10:48 2016-02-26', 'receve'),
(70, '12', '8787', '', '10:52 2016-02-26', 'receve'),
(71, '12', '87', '', '11:02 2016-02-26', 'receve'),
(72, '12', '77', 'it14121616', '11:03 2016-02-26', 'receve'),
(73, '12', '77', 'it14121616', '11:03 2016-02-26', 'receve'),
(74, '12', '45\n', 'it14121616', '12:36 2016-02-26', 'receve'),
(75, '12', '45\n', 'it14121616', '12:36 2016-02-26', 'receve'),
(76, '12', 'qq', 'it14121616', '12:48 2016-02-26', 'receve'),
(77, '12', '.', 'it14121616', '12:55 2016-02-26', 'receve'),
(78, '11', '.99898898', 'it14121616', '12:55 2016-02-26', 'receve'),
(79, '12', '77', 'it14121616', '13:00 2016-02-26', 'receve'),
(80, '12', 'ela', 'it14121616', '13:02 2016-02-26', 'receve'),
(81, '12', 'ww', 'it14121616', '13:03 2016-02-26', 'receve'),
(82, '11', 'yo', '', '13:07 2016-02-26', 'send'),
(83, '11', 'hello bro]\n', 'it14121616', '13:08 2016-02-26', 'receve'),
(84, '11', 'whats app man', '', '13:08 2016-02-26', 'send'),
(85, '13', 'im cool bro\n', 'it14121616', '13:08 2016-02-26', 'receve'),
(86, '11', 'happy to heree is', '', '13:08 2016-02-26', 'send'),
(87, '11', 'im cool bro\n', 'it14121616', '13:09 2016-02-26', 'receve'),
(88, '11', 'happy to heree is', '', '13:09 2016-02-26', 'send'),
(90, '11', 'happy to heree is', '', '13:10 2016-02-26', 'send'),
(93, '12', 'sd', 'it14121616', '13:46 2016-02-26', 'receve'),
(95, '12', 'xvfxdc', 'it14121616', '13:47 2016-02-26', 'receve'),
(96, '12', 'dc', 'it14121616', '13:48 2016-02-26', 'receve'),
(97, '14', 'gv', 'it14121616', '13:48 2016-02-26', 'receve'),
(98, '16', 'fg', 'it14121616', '13:48 2016-02-26', 'receve'),
(99, '13', 'nv', 'it14121616', '13:48 2016-02-26', 'receve'),
(101, '15', '2131231', '12312', '13', '1312'),
(102, '20', '654', '654', '64', '654'),
(103, '20', '5465465', '465', '465', '4465'),
(104, '11', '78787', '', '16:00 2016-02-26', 'send'),
(105, '11', '78787', '', '16:01 2016-02-26', 'send'),
(106, '11', '78787', '', '16:06 2016-02-26', 'send'),
(107, '11', '78787', '', '16:06 2016-02-26', 'send'),
(108, '11', '78787', '', '16:06 2016-02-26', 'send'),
(109, '11', '78787', '', '16:08 2016-02-26', 'send'),
(110, '11', '7878745454', '', '16:10 2016-02-26', 'send'),
(111, '11', '7878745454', '', '16:10 2016-02-26', 'send'),
(112, '11', '7878745454', '', '16:11 2016-02-26', 'send'),
(113, '11', '7878745454', '', '16:11 2016-02-26', 'send'),
(114, '11', '7878745454', '', '16:11 2016-02-26', 'send'),
(115, '11', '7878745454', '', '16:12 2016-02-26', 'send'),
(116, '11', '7878745454', '', '16:12 2016-02-26', 'send'),
(117, '11', '7878745454', '', '16:12 2016-02-26', 'send'),
(118, '11', '7878745454', '', '16:12 2016-02-26', 'send'),
(119, '11', '7878745454', '', '16:12 2016-02-26', 'send'),
(120, '11', '7878745454', '', '16:13 2016-02-26', 'send'),
(121, '11', '7878745454', '', '16:13 2016-02-26', 'send'),
(122, '11', '7878745454', '', '16:13 2016-02-26', 'send'),
(123, '11', '7878745454', '', '16:14 2016-02-26', 'send'),
(124, '11', '7878745454', '', '16:14 2016-02-26', 'send'),
(125, '11', '7878745454', '', '16:14 2016-02-26', 'send'),
(126, '11', '7878745454', '', '16:14 2016-02-26', 'send'),
(127, '11', '7878745454', '', '16:14 2016-02-26', 'send'),
(128, '11', '7878745454', '', '16:14 2016-02-26', 'send'),
(129, '11', '7878745454', '', '16:27 2016-02-26', 'send'),
(130, '11', '7878745454', '', '16:27 2016-02-26', 'send'),
(131, '11', '7878745454', '', '16:27 2016-02-26', 'send'),
(132, '11', '23232', 'it14121616', '17:33 2016-02-26', 'receve'),
(133, '11', 'babay', '', '21:11 2016-02-26', 'send'),
(134, '11', 'hii', '', '3:26 2016-02-27', 'send'),
(135, '11', 'hi', '', '3:57 2016-02-27', 'send'),
(136, '11', 'hey', '', '4:01 2016-02-27', 'send'),
(137, '11', 'hey', '', '4:01 2016-02-27', 'send');

-- --------------------------------------------------------

--
-- Table structure for table `root`
--

CREATE TABLE `root` (
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

CREATE TABLE `rooting` (
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

CREATE TABLE `traindeatals` (
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
(2, 'sameera', '', 'profileManage', 'sameera', 'Abeysekara', 'abeysekaramadushanka14@gmail.com', 'it14121616', 'Mario_SM3DW.png', 'rgba(198,11,214,0.67)', '#68695e', ''),
(9, 'nimesha', 'nimesha', 'travelGuide', '1', '2', 'abll', '45645', 'Screenshot (3).png', '', '', '3'),
(10, 'shami', 'shami', 'reservation', '1', '2', '21qq', '456456', 'Screenshot (3).png', '', '', '123'),
(11, 'kavi', 'kavi', 'payment', 'kavee', 'shamii', 'haha11a', 'it14121516', 'Screenshot (3).png', '#f63232', '#552a2a', 'lol'),
(12, 'admin', 'admin', 'admin', '', '', '', '78978', 'Screenshot (3).png', '', '', ''),
(24, 'Ad-684', 'CC5hZPm', 'admin', 'damm', 'bam', 'adasa', 'sammm', 'Screenshot (6).png', '', '', '0716010860');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagesystem`
--
ALTER TABLE `messagesystem`
  ADD PRIMARY KEY (`idmessage`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `messagesystem`
--
ALTER TABLE `messagesystem`
  MODIFY `idmessage` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
