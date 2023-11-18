-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 10:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `userid` int(50) NOT NULL,
  `clubid` int(50) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `licence` varchar(50) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`userid`, `clubid`, `clubname`, `email`, `phone`, `place`, `district`, `pincode`, `state`, `licence`, `admin_status`) VALUES
(408, 11, 'clubproject', 'vibil@gamil.com', 1224567905, 'ernakulamm', 'piravom', 123457, 'kerala', '../uploads/718.jpg', 1),
(410, 12, 'MRF', 'jishnu@gmail.com', 7994245510, 'piravom', 'Ernakulam', 686695, 'apple', '../uploads/718.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clubblog`
--

CREATE TABLE `clubblog` (
  `userid` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `blog` varchar(10020) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clubcomplaints`
--

CREATE TABLE `clubcomplaints` (
  `complaint_id` int(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL DEFAULT 'no reply'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubcomplaints`
--

INSERT INTO `clubcomplaints` (`complaint_id`, `userid`, `subject`, `complaint`, `reply`) VALUES
(9, 408, 'problem', 'bug', 'dd'),
(10, 409, 'ss', 'sss', 'dfdsfdsf'),
(11, 408, 'abcd', 'bcds', 'no reply'),
(12, 408, 'dfd', 'dfd', 'no reply'),
(13, 408, 'kij', 'ioik\r\n', 'no reply'),
(14, 409, 'subject ', 'problem with bug\r\n', 'we will investigate'),
(15, 408, 'interface issue', 'had a problem with interface', 'no reply');

-- --------------------------------------------------------

--
-- Table structure for table `clubtrack`
--

CREATE TABLE `clubtrack` (
  `track_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `track_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `starting_time` varchar(20) NOT NULL,
  `ending_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `promoter` varchar(50) NOT NULL,
  `racetype` varchar(50) NOT NULL,
  `permit` varchar(50) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `booking_start_date` varchar(20) NOT NULL,
  `booking_end_date` varchar(20) NOT NULL,
  `event_start_date` varchar(20) NOT NULL,
  `event_end_date` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `booking_fee` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `userid`, `promoter`, `racetype`, `permit`, `eventname`, `venue`, `booking_start_date`, `booking_end_date`, `event_start_date`, `event_end_date`, `description`, `created_at`, `booking_fee`) VALUES
(7, 408, 'haltech2', ' circuit', 'uploads/718.jpg', 'haltech event', 'mumbai nargar', '2023-10-18', '2023-10-19', '2023-10-20', '2023-10-21', 'uploads/718.jpg', '2023-10-14 05:38:22', 1901),
(8, 408, 'gas monkey', ' circuit', 'uploads/718.jpg', 'racewars', 'kolkatha', '2023-10-09', '2023-10-25', '2023-10-16', '2023-10-25', 'uploads/718.jpg', '2023-10-14 06:09:20', 2000),
(9, 408, 'HKS', 'Drag race', 'uploads/718.jpg', 'hks dragiee', 'kochi', '2023-10-09', '2023-10-18', '2023-10-25', '2023-10-20', 'uploads/718.jpg', '2023-10-14 06:10:38', 400),
(10, 408, 'Gas monkey', ' circuit', 'uploads/3.jpg', 'NHRE drag racing series', 'usa', '2023-10-10', '2023-10-14', '2023-10-15', '2023-10-26', 'uploads/download.jpg', '2023-10-14 09:52:52', 2300),
(11, 408, 'es motor sports', 'Drag race', 'uploads/3.jpg', 'ES drag event', 'london', '2023-10-25', '2023-10-25', '2023-10-19', '2023-10-27', 'uploads/race1.jpg', '2023-10-28 06:51:02', 500);

-- --------------------------------------------------------

--
-- Table structure for table `event_participate`
--

CREATE TABLE `event_participate` (
  `participate_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_participate`
--

INSERT INTO `event_participate` (`participate_id`, `userid`, `eventid`, `datetime`, `status`) VALUES
(1, 409, 7, '2023-10-14 06:53:54', 0),
(2, 409, 8, '2023-10-20 16:50:32', 0),
(3, 409, 9, '2023-10-20 16:50:48', 0),
(4, 409, 10, '2023-10-20 16:55:48', 0),
(5, 409, 11, '2023-10-28 09:58:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `clubid` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `timstamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `no_of_seats` int(11) NOT NULL,
  `eventid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `userid`, `clubid`, `payment`, `timstamp`, `status`, `no_of_seats`, `eventid`) VALUES
(4, 409, 408, 9505, '2023-10-23 05:58:40', 1, 5, 7),
(5, 409, 408, 3802, '2023-10-28 05:45:32', 1, 2, 7),
(6, 409, 408, 6000, '2023-10-28 06:04:50', 1, 3, 8),
(7, 409, 408, 5703, '2023-10-28 06:05:48', 1, 3, 7),
(8, 409, 408, 2000, '2023-10-28 09:58:48', 1, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `securityquestion` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `name`, `email`, `phone`, `password`, `securityquestion`, `answer`, `usertype`) VALUES
(400, 'Admin', 'admin@gmail.com', 9847913765, 'Admin@123', '', '', 'admin'),
(408, 'vibil2', 'vibil@gamil.com', 1224567907, 'clubprojecT12', 'food', 'biriyani', 'club'),
(409, 'Rahul', 'userproject@gamil.com', 799424551, 'User@1234', 'food', 'biriyani', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(50) NOT NULL,
  `id_proof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `userid`, `housename`, `place`, `district`, `pincode`, `state`, `id_proof`) VALUES
(9, 409, 'djdkkjd', 'ernakulam', 'piravom', 123456, 'apple', '../uploads/718.jpg'),
(10, 410, 'ss', 'piravom', 'Ernakulam', 686695, 'apple', '../uploads/718.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`clubid`);

--
-- Indexes for table `clubblog`
--
ALTER TABLE `clubblog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `clubcomplaints`
--
ALTER TABLE `clubcomplaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `clubtrack`
--
ALTER TABLE `clubtrack`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `event_participate`
--
ALTER TABLE `event_participate`
  ADD PRIMARY KEY (`participate_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `clubid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clubblog`
--
ALTER TABLE `clubblog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `clubcomplaints`
--
ALTER TABLE `clubcomplaints`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clubtrack`
--
ALTER TABLE `clubtrack`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event_participate`
--
ALTER TABLE `event_participate`
  MODIFY `participate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
