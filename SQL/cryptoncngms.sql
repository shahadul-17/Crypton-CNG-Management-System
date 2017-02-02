-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 12:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptoncngms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adbpassenger`
--

CREATE TABLE `adbpassenger` (
  `id` int(11) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adbpassenger`
--

INSERT INTO `adbpassenger` (`id`, `nid`, `date`) VALUES
(1, '2', NULL),
(2, '6', '1995-12-02'),
(3, '10', NULL),
(4, '11', NULL),
(5, '13', NULL),
(6, '2', NULL),
(7, '13', '1995-12-10'),
(8, '11', '2016-12-09'),
(9, '10', NULL),
(10, '11', NULL),
(11, '11', '2016-12-08'),
(12, '11', '2016-12-09'),
(13, '11', NULL),
(14, '123456789', NULL),
(15, '12', NULL),
(16, '95485', '2016-12-21'),
(17, '11', NULL),
(18, '12', '2016-12-14'),
(19, '76', NULL),
(20, '0000000000000000000000002', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `dlnum` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `vrn` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `income` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`dlnum`, `address`, `vrn`, `birthdate`, `income`) VALUES
('1', 'Dhaka', '315248', '1995-12-02', '500'),
('123erfnejnrf', 'jsenvjkdenrvkjenrv', 'ethtryhtyhtyh', '1967-12-02', '1000'),
('1294', 'Dhaka, Badda', '837245', '1983-11-02', '15000'),
('3', 'Dhaka', '315244', '2016-12-21', '200'),
('4', 'Barishal', '315244', '2016-12-21', '200'),
('5', 'Barishal', '555', '1995-09-01', '6000'),
('51', 'Chandpur, Rupsha, Faridgonj', '315248', '1985-09-08', '10000'),
('7', 'Chandpur', '315248', '1995-12-02', '50000'),
('71', 'Chandpur, Faridgonj', '449823', '1986-12-12', '5000'),
('8', 'Dhaka', '734823', '2016-12-15', '90'),
('9', 'Comilla', '315044', '2016-12-21', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` int(11) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `current_location` text NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `nid`, `current_location`, `destination`) VALUES
(1, '10', 'Khilgaon', 'Basundhara Residential Area'),
(2, '11', 'Banasree', 'Khilgaon'),
(3, '12', 'Rampura', 'Farmgate'),
(4, '13', 'Mirpur', 'Mohammadpur'),
(5, '2', 'Uttara', 'Dhanmondi'),
(6, '6', 'Banani', 'Gulshan'),
(7, '10', 'Banasree', 'Gulshan'),
(8, '11', 'Uttara', 'Mirpur'),
(9, '13', 'Motijheel', 'Malibag'),
(10, '11', 'Basundhara Residential Area', 'Gulshan'),
(11, '11', 'Gulshan', 'Dhanmondi'),
(12, '11', 'Uttara', 'Banasree'),
(13, '11', 'Motijheel', 'Uttara'),
(14, '123456789', 'Uttara', 'Airport'),
(15, '12', 'Basundhara Residential Area', 'Rampura'),
(16, '95485', 'Dhanmondi', 'Gulshan'),
(17, '11', 'Basundhara Residential Area', 'Badda'),
(18, '12', 'Gulshan', 'Banani'),
(19, '76', 'Banasree', 'Dhanmondi'),
(20, '0000000000000000000000002', 'Badda', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(25) NOT NULL,
  `utype` varchar(15) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `utype`, `fname`, `lname`, `email`, `password`, `gender`, `phone`) VALUES
('1934', 'passenger', 'abc', 'xyz', 'abc.xyz@crypton.com', '123', 'male', '01711000000'),
('71', 'driver', 'Abdus', 'Sattar 2', 'abdus.sattar.2@crypton.com', '123', 'male', '01711000000'),
('51', 'driver', 'Abdus', 'Sattar', 'abdus.sattar@crypton.com', '123', 'male', '01711000000'),
('76', 'passenger', 'Abul', 'Momen', 'abul.momen@crypton.com', '123', 'male', '01711000000'),
('4', 'driver', 'Alex', 'Rupom', 'alex.rupom@crypton.com', '123', 'male', '01711000000'),
('1', 'driver', 'Ali', 'Azgar', 'ali.asgar@crypton.com', '123', 'male', '01711000000'),
('5', 'driver', 'Ananta', 'Jalil', 'ananta.jalil@crypton.com', '123', 'male', '01711000000'),
('2', 'passenger', 'Ashiqur', 'Rahman', 'ashiqur.rahman@crypton.com', '123', 'male', '01711000000'),
('11', 'passenger', 'Fariha', 'Tasnim', 'fariha.tasnim.2@crypton.com', '123', 'female', '01711000000'),
('0000000000000000000000002', 'admin', 'Fariha', 'Tasnim', 'fariha.tasnim@crypton.com', '123', 'female', '01711000000'),
('123456789', 'passenger', 'Jahid', 'Dewan', 'jahid.dewan@crypton.com', 'J123', 'male', '01716'),
('123erfnejnrf', 'driver', 'asjd', 'ewskjnfw', 'kwedjnfkjde', '123', 'male', '123345'),
('6', 'passenger', 'Maruf', 'Hossain', 'maruf.hossain@crypton.com', '123', 'female', '01711000000'),
('9', 'driver', 'Nazifa', 'Sadia', 'nazifa.sadia@crypton.com', '123', 'female', '01711000000'),
('8', 'driver', 'Nushrat', 'Jahan', 'nushrat.jahan@crypton.com', '123', 'female', '01711000000'),
('10', 'passenger', 'Sabrina', 'Islam', 'sabrina.islam.2@crypton.com', '123', 'female', '01711000000'),
('0000000000000000000000001', 'admin', 'Sabrina', 'Islam', 'sabrina.islam@crypton.com', '123', 'female', '01711000000'),
('3', 'driver', 'Saiyudh', 'Mannan', 'saiyudh.mannan@crypton.com', '123', 'male', '01711000000'),
('12', 'passenger', 'Shafin', 'Haq', 'shafin.haq@crypton.com', '123', 'male', '01711000000'),
('0000000000000000000000000', 'admin', 'Md. Shahadul', 'Alam', 'shahadul_alam_17@crypton.com', '123', 'male', '01784652153'),
('13', 'passenger', 'Tahsan', 'Dewan', 'tahsan.dewan.2@crypton.com', '123', 'male', '01711000000'),
('0000000000000000000000003', 'admin', 'Tahsan', 'Dewan', 'tahsan.dewan@crypton.com', '123', 'male', '01711000000'),
('7', 'driver', 'Wahidul', 'Islam', 'wahidul.islam@crypton.com', '123', 'female', '01711000000'),
('1294', 'driver', 'xyz', 'abc', 'xyz.abc@crypton.com', '123', 'male', '01711000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adbpassenger`
--
ALTER TABLE `adbpassenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`dlnum`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adbpassenger`
--
ALTER TABLE `adbpassenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
