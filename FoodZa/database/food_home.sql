-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 05:03 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `name` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `pass`) VALUES
('root', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `phone`, `subject`, `message`) VALUES
('Ravi', 'raviganeshmbhat999@gmail.com', 8281493488, 'Taste', 'w'),
('Ravi', 'raviganeshmbhat999@gmail.com', 8281493488, 'Delivery Time', 'g'),
('Ravi', 'raviganeshmbhat999@gmail.com', 8281493488, 'Delivery Time', 'g'),
('Shyam', 'shyamkishu@gmail.com', 8774533709, 'Delivery Time', 'Speed\r\ngood'),
('Ravi', 'raviganeshmbhat999@gmail.com', 8281493488, 'Something', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`) VALUES
('Ravi', '1234'),
('rathan', '1234'),
('', ''),
('Shyam', '1234'),
('Prasanna', '1234'),
('Sumukh', '1234'),
('Aditya', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sl_no` int(3) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sl_no`, `name`, `address`, `phone`, `email`, `password`) VALUES
(7, 'Ravi', 'Kasargod', 8281493488, 'raviganeshmbhat999@gmail.com', '1234'),
(8, 'Rathan', 'Surathkal', 8769452874, 'rathan1098@gmail.com', '1234'),
(10, 'Shyam', 'Mangalore', 8795875340, 'shyamkishu@gmail.com', '1234'),
(11, 'Prasanna', 'Kasargod', 9448167858, 'prasanna@gmail.com', '1234'),
(12, 'Sumukh', 'Chitradurga', 7095743537, 'sumuk@gmail.com', '1234'),
(13, 'Aditya', 'Bangalore', 7903735474, 'aditya@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `r_no` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`r_no`, `name`, `location`, `phone`) VALUES
(1, 'Santrupti', 'Puttur', 8794572340),
(2, 'Ajaya', 'Kalladka', 8767777777),
(3, 'Karthika', 'Bangalore', 9004536254),
(4, 'Shivam', 'BC Road', 7089895437);

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE `user_history` (
  `sl_no` int(3) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `history` varchar(1080) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`sl_no`, `name`, `history`, `date`, `status`) VALUES
(128, 'Shyam', 'ðŸ”ª 1  Pizza : â‚¹ 200 ðŸ”ª 1  Chees pizza : â‚¹ 250 ðŸ”ª 1  Burger : â‚¹ 200 ðŸ”ª 1  Palak Paneer Biryan : â‚¹ 130 ðŸ”ª 1  Garlic Cheese Toast : â‚¹ 100 ðŸ”ª 1  Idly : â‚¹ 40 ðŸ”ª 1  Masala Dosa : â‚¹ 70 ðŸ”ª 1  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 1005', '2019-11-27 17:15:07', 'Yet to be Delivered'),
(129, 'Shyam', 'ðŸ”ª 4  Pizza : â‚¹ 200   ðŸ”ª 4  Burger : â‚¹ 200     ðŸ”ª 4  Idly : â‚¹ 40   ðŸ”ª 4  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 1820', '2019-11-27 20:31:38', 'Delivered'),
(130, 'Shyam', 'ðŸ”ª 4  Pizza : â‚¹ 200           ðŸ”ª 4  Masala Dosa : â‚¹ 70    ðŸ”ª Total Cost: 1080', '2019-11-27 20:34:21', 'Yet to be Delivered'),
(131, 'Sumukh', 'ðŸ”ª 8  Pizza : â‚¹ 200 ðŸ”ª 8  Chees pizza : â‚¹ 250         ðŸ”ª 4  Masala Dosa : â‚¹ 70 ðŸ”ª 4  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 3940', '2019-11-27 20:38:00', 'Yet to be Delivered'),
(132, 'Shyam', 'ðŸ”ª 3  Pizza : â‚¹ 200         ðŸ”ª 3  Idly : â‚¹ 40   ðŸ”ª 3  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 765', '2019-11-27 22:22:46', 'Delivered'),
(133, 'Ravi', 'ðŸ”ª 5  Pizza : â‚¹ 200   ðŸ”ª 5  Burger : â‚¹ 200     ðŸ”ª 8  Idly : â‚¹ 40   ðŸ”ª 2  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 2350', '2019-11-27 22:35:06', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `user_history1`
--

CREATE TABLE `user_history1` (
  `name` varchar(20) DEFAULT NULL,
  `history` varchar(1080) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Yet to be Delivered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_history1`
--

INSERT INTO `user_history1` (`name`, `history`, `date`, `status`) VALUES
('', ' 2 | Pizza : â‚¹ 200  2 | Chees pizza : â‚¹ 250  1 | Burger : â‚¹ 200   |    |  ', '2019-11-27 15:14:30', 'Yet to be Delivered'),
('', '| 2  Pizza : â‚¹ 200 | 2  Chees pizza : â‚¹ 250 | 1  Burger : â‚¹ 200 |    |    ', '2019-11-27 15:16:31', 'Yet to be Delivered'),
('', '|    |    |   2 | Idly : â‚¹ 40  2 | Masala Dosa : â‚¹ 70  2 | Sprite : â‚¹ 15  ', '2019-11-27 16:04:19', 'Yet to be Delivered'),
('Shyam', 'ðŸ”ª 4  Pizza : â‚¹ 200   ðŸ”ª 4  Burger : â‚¹ 200     ðŸ”ª 4  Idly : â‚¹ 40   ð', '2019-11-27 20:31:38', 'Delivered'),
('Shyam', 'ðŸ”ª 4  Pizza : â‚¹ 200           ðŸ”ª 4  Masala Dosa : â‚¹ 70    ðŸ”ª Total Cos', '2019-11-27 20:34:21', 'Yet to be Delivered'),
('Sumukh', 'ðŸ”ª 8  Pizza : â‚¹ 200 ðŸ”ª 8  Chees pizza : â‚¹ 250         ðŸ”ª 4  Masala Dosa : â‚¹ 70 ðŸ”ª 4  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 3940', '2019-11-27 20:38:00', 'Yet to be Delivered'),
('Shyam', 'ðŸ”ª 3  Pizza : â‚¹ 200         ðŸ”ª 3  Idly : â‚¹ 40   ðŸ”ª 3  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 765', '2019-11-27 22:22:46', 'Delivered'),
('Ravi', 'ðŸ”ª 5  Pizza : â‚¹ 200   ðŸ”ª 5  Burger : â‚¹ 200     ðŸ”ª 8  Idly : â‚¹ 40   ðŸ”ª 2  Sprite : â‚¹ 15  ðŸ”ª Total Cost: 2350', '2019-11-27 22:35:06', 'Delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`r_no`);

--
-- Indexes for table `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sl_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_history`
--
ALTER TABLE `user_history`
  MODIFY `sl_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
