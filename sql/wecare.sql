-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 12:57 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'siddhantpandey', '$2y$10$Cbca2M8KP/fM3c4Zv1SLpu1Zuy2YKlN2CILcVxhltEhIhuExxHqsa', '2018-05-01 21:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `begger`
--

CREATE TABLE `begger` (
  `S_NO` int(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Requirment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `begger`
--

INSERT INTO `begger` (`S_NO`, `Location`, `Requirment`) VALUES
(1, 'Jalandhar Cantt', 'Clothes'),
(2, 'Rama Mandi', 'Shelter'),
(3, 'Deep Nagar', 'Medical Aid'),
(4, 'PAP Chowk', 'Clothes'),
(5, 'Hardaspur', 'Food'),
(6, 'Law Gate', 'Shelter'),
(7, 'Phagwara', 'Clothes'),
(8, 'Amritsar Station', 'Medical Aid'),
(9, 'Tanda', 'Food'),
(10, 'Moga', 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `childlab`
--

CREATE TABLE `childlab` (
  `S_NO` int(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Requirment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childlab`
--

INSERT INTO `childlab` (`S_NO`, `Location`, `Requirment`) VALUES
(1, 'Phagwara Bus Stand', 'Special Attention'),
(2, 'LPU Maingate', 'Special Attention'),
(3, 'Jalandhar Cantt', 'Special Attention'),
(4, 'Deep Nagar', 'Special Attention'),
(5, 'PAP Chowk', 'Proper Education'),
(6, 'Hardaspur', 'Health Checkup'),
(7, 'Moga', 'Proper Education'),
(8, 'Tanda', 'Health Checkup'),
(9, 'Law Gate', 'Special Attention'),
(10, 'Rama Mandi', 'Proper Education');

-- --------------------------------------------------------

--
-- Table structure for table `donations_info`
--

CREATE TABLE `donations_info` (
  `sr_no` int(4) NOT NULL,
  `person_name` varchar(20) NOT NULL,
  `aadhaar_no` int(12) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `location_info` varchar(255) NOT NULL,
  `issues` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_of_upload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `phone` tinytext,
  `address` varchar(255) DEFAULT NULL,
  `nameofcharity` varchar(255) DEFAULT NULL,
  `donationtype` varchar(10) DEFAULT NULL,
  `pickuptime` varchar(20) DEFAULT NULL,
  `pickupdate` varchar(20) DEFAULT NULL,
  `pickuplocation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`firstname`, `lastname`, `phone`, `address`, `nameofcharity`, `donationtype`, `pickuptime`, `pickupdate`, `pickuplocation`) VALUES
('Rajkumar', 'Mishra', '2147483647', 'Sarvodaya Nagar, Kanpur', 'Being Human', 'Money', '11:00 AM', '20/04/2018', 'H-121, Street No. 8,'),
('', '', '-3', '', '', '', '', '', ''),
('NK', 'Pandey', '2147483647', 'Govind Nagar, Auraiya', 'Umang', 'Goods', '11:00 AM', '01-05-2018', 'Govind Nagar, Auraiy'),
('', '', '0', '', '', '', '', '', ''),
('', '', '0', '', '', '', '', '', ''),
('A', 'Pandey', '2147483647', 'Auraiya', '', '', '11:00 AM', '03-05-2018', 'Auraiya'),
('', '', '0', '', '', '', '', '', ''),
('', '', '0', '', '', '', '', '', ''),
('', '', '0', '', '', '', '', '', ''),
('Siddhant', 'Pandey', '2147483647', '451299652521', '', 'Goods', '11:00 AM', '03-05-2018', 'Auraiya');

-- --------------------------------------------------------

--
-- Table structure for table `personsofinterest`
--

CREATE TABLE `personsofinterest` (
  `name` varchar(50) NOT NULL,
  `aadhaar` tinytext NOT NULL,
  `phone` tinytext,
  `address` varchar(200) NOT NULL,
  `issue` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personsofinterest`
--

INSERT INTO `personsofinterest` (`name`, `aadhaar`, `phone`, `address`, `issue`, `image`) VALUES
('Kamlesh Nagarkoti', '0', '0', 'LPU, Phagwara', 'Children working at construction site', '6.jpg'),
('Ulook', '23', '13', 'wee', '3qasds', 'IMG_20180220_100145_Bokeh.jpg'),
('Raj', '123', '234', 'mumbai', 'Mental', 'download.jpg'),
('Say', '234', '242334', 'efnn', 'sad', '1.jpg'),
('Shivam Mavi', '2147483647', '0', 'Signal near hanuman mandir, bus stand Phagwara', 'Forced to Beg.', '9.jpg'),
('Raj Thalekar', '123456789123', '9876654321', 'LPU', 'Pothead', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skul`
--

CREATE TABLE `skul` (
  `S_NO` int(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Requirment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skul`
--

INSERT INTO `skul` (`S_NO`, `Location`, `Requirment`) VALUES
(1, 'Jalandhar', 'Table Bench'),
(2, 'Phagwara', 'Fan'),
(3, 'Rama Mandi', 'Electricity Connection'),
(4, 'Deep Nagar', 'Teachers'),
(5, 'Amritsar', 'Proper Infrastructure'),
(6, 'Tanda', 'Fans'),
(7, 'Moga', 'Electricity Connection'),
(8, 'Kapurthala', 'School Staff'),
(9, 'Ludhiana', 'Furniture'),
(10, 'Hardaspur', 'School Staff');

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

CREATE TABLE `street` (
  `S_NO` int(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Requirment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`S_NO`, `Location`, `Requirment`) VALUES
(1, 'Jalandhar Cantt', 'Shealter'),
(2, 'Phagara Railway', 'Woolen Clothes'),
(3, 'Amritsar', 'Shealter'),
(4, 'Patiala', 'Woolen Clothes'),
(5, 'Tanda', 'Medical Aid'),
(6, 'Moga', 'Shealter'),
(7, 'Hardaspur', 'Food'),
(8, 'Kapurthala', 'Clothes'),
(9, 'Ludhiana', 'Medical Aid'),
(10, 'Deep Nagar', 'Shealter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `PASSWORD`, `created_at`) VALUES
(1, 'siddhant_3', '$2y$10$Ts7MprF.s5xAibMphkcplOqOoC2AWVsh13X9rjad9JHLV1S3GUACm', '2018-04-07 13:23:53'),
(2, 'shubhamsrv', '$2y$10$hmd2avQ0vco9zvDLhwtJ0.YkxAt2E79.9Nkk1n7hBqZCOzM4pk8FS', '2018-04-07 13:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` tinytext,
  `address` varchar(100) NOT NULL,
  `gps` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`firstname`, `lastname`, `phone`, `address`, `gps`) VALUES
('Prashant', 'Chaple', '2147483647', 'LPU, Phagwara', 'n/a'),
('Siddhant', 'Pandey', '2147483647', 'Auraiya', 'n/a'),
('Siddhant', 'Pandey', '9872421830', 'Auraiya', 'n/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `begger`
--
ALTER TABLE `begger`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `childlab`
--
ALTER TABLE `childlab`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `donations_info`
--
ALTER TABLE `donations_info`
  ADD PRIMARY KEY (`sr_no`,`aadhaar_no`),
  ADD UNIQUE KEY `uuq` (`contact_no`);

--
-- Indexes for table `skul`
--
ALTER TABLE `skul`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `begger`
--
ALTER TABLE `begger`
  MODIFY `S_NO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `childlab`
--
ALTER TABLE `childlab`
  MODIFY `S_NO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donations_info`
--
ALTER TABLE `donations_info`
  MODIFY `sr_no` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skul`
--
ALTER TABLE `skul`
  MODIFY `S_NO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `street`
--
ALTER TABLE `street`
  MODIFY `S_NO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
