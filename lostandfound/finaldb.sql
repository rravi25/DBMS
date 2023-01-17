-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(3) NOT NULL,
  `cname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Electronic Gadgets'),
(2, 'Documents'),
(3, 'Pets'),
(4, 'Money');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fimages`
--

CREATE TABLE `fimages` (
  `id` int(5) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fthings`
--

CREATE TABLE `fthings` (
  `id` int(5) NOT NULL,
  `cat_ref` int(3) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `uemail` varchar(50) DEFAULT NULL,
  `imgid` int(5) DEFAULT NULL,
  `postdate` date NOT NULL,
  `message` text NOT NULL,
  `item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Triggers `fthings`
--
DELIMITER $$
CREATE TRIGGER `fcount` AFTER INSERT ON `fthings` FOR EACH ROW UPDATE `users` SET `posts`=`posts`+1 WHERE `uemail`=new.`uemail`
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `limages`
--

CREATE TABLE `limages` (
  `id` int(5) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `limages`
--

INSERT INTO `limages` (`id`, `url`) VALUES
(1, 'snip3.PNG'),
(2, 'snip6.PNG'),
(3, 'snip4.PNG'),
(4, 'vector-contact-banner.png'),
(5, 'Digitise-Your-Workforce.png'),
(6, '240_F_313091018_iMzn3eoJzYUFOSHMVMau41AuNiWfswAQ.jpg'),
(7, '112.PNG'),
(8, 'snip6.PNG'),
(9, '240_F_516757349_fevqlSxVq4I0F2RBp2mIvs3nTo5QAb0b.jpg'),
(10, 'snip5.PNG'),
(11, 'photo-1469371670807-013ccf25f16a.jpg'),
(12, 'photo-1469371670807-013ccf25f16a.jpg'),
(13, 'photo-1469371670807-013ccf25f16a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lthings`
--

CREATE TABLE `lthings` (
  `id` int(5) NOT NULL,
  `cat_ref` int(3) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `uemail` varchar(50) DEFAULT NULL,
  `imgid` int(5) DEFAULT NULL,
  `postdate` date NOT NULL,
  `message` text NOT NULL,
  `item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Triggers `lthings`
--
DELIMITER $$
CREATE TRIGGER `lcount` AFTER INSERT ON `lthings` FOR EACH ROW UPDATE `users` SET `posts`=`posts`+1 WHERE `uemail`=new.`uemail`
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(5) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `posts` int(3) NOT NULL DEFAULT 0,
  `pnumber` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `uname`, `uemail`, `password`, `posts`, `pnumber`) VALUES
(1, 'Ravi Hitang', 'ravihitang@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '8660549912');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `fimages`
--
ALTER TABLE `fimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fthings`
--
ALTER TABLE `fthings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fthings_ibfk_2` (`imgid`),
  ADD KEY `fthings_ibfk_4` (`cat_ref`),
  ADD KEY `fthings_ibfk_5` (`uemail`);

--
-- Indexes for table `limages`
--
ALTER TABLE `limages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lthings`
--
ALTER TABLE `lthings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lc` (`cat_ref`),
  ADD KEY `ulimg` (`imgid`),
  ADD KEY `ulmail` (`uemail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uemail`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fimages`
--
ALTER TABLE `fimages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fthings`
--
ALTER TABLE `fthings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `limages`
--
ALTER TABLE `limages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lthings`
--
ALTER TABLE `lthings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fthings`
--
ALTER TABLE `fthings`
  ADD CONSTRAINT `fthings_ibfk_2` FOREIGN KEY (`imgid`) REFERENCES `fimages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fthings_ibfk_4` FOREIGN KEY (`cat_ref`) REFERENCES `category` (`cid`),
  ADD CONSTRAINT `fthings_ibfk_5` FOREIGN KEY (`uemail`) REFERENCES `users` (`uemail`) ON DELETE CASCADE;

--
-- Constraints for table `lthings`
--
ALTER TABLE `lthings`
  ADD CONSTRAINT `lc` FOREIGN KEY (`cat_ref`) REFERENCES `category` (`cid`) ON DELETE NO ACTION,
  ADD CONSTRAINT `ulimg` FOREIGN KEY (`imgid`) REFERENCES `limages` (`id`),
  ADD CONSTRAINT `ulmail` FOREIGN KEY (`uemail`) REFERENCES `users` (`uemail`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
