-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 07:28 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloody`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pswd` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pswd`, `time`) VALUES
(1, 'aaditya', 'aaditya@gmail.com', 'aaditya', '2020-03-13 02:32:52'),
(2, 'admin', 'admin@gmail.com', 'admin', '2020-03-13 02:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `row_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`row_id`, `name`, `email`, `mobile`, `message`) VALUES
(2, 'shailza', 'shailza@gmail.com', '2147483647', 'test2'),
(3, 'dev', 'dev@mjdj.djj', '2147483647', 'test3'),
(4, 'fitness', 'fitness@gmail.co', '9250505494', 'test4');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donar_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donar_id`, `name`, `gender`, `age`, `mobile`, `blood_group`, `email`, `city`, `state`, `address`) VALUES
(1, 'Aaaditya', 'male', '20', '8950505494', 'B+', 'aaditya@gmail.com', 'Ambala cantt', 'Haryana', '20D pooja vihar'),
(2, 'dev', 'male', '85', '123456789', 'A-', 'dev@mjdj.djj', 'goa', 'Goa', ' qedcrdg gvfdd ffcv'),
(3, 'Naveen', 'male', '21', '9829825247', 'O+', 'naveengoyal002@gmail.com', 'Bhiwani', 'Haryana', 'Gali no. 21, bhiwani, haryana'),
(4, 'mansha', 'female', '16', '9437821167', 'O-', 'mansha@gmail.com', 'Landra', 'Punjab', 'kaccha bazar'),
(6, 'shli', 'female', '48', '75285885475', 'AB+', 'shali@gnm.com', 'banglore', 'Karnataka', ' eyuhd hgd yueb iufenf');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `b_group` varchar(20) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `req_date` date NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `hospital_detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `patient_name`, `gender`, `age`, `b_group`, `contact_name`, `email`, `phone`, `city`, `state`, `req_date`, `doc_name`, `hospital_detail`) VALUES
(1, 'nav', 'male', '25', 'O-', 'navi', 'navi@gmail.com', '8585687826666', 'bhopal', 'Andhra Pradesh', '2520-04-21', 'Dr. guju patel', 'shgnbhgsbsgbh shsb sysncnnc  '),
(2, 'Aaditya', 'male', '20', 'B+', 'Aadi', 'aadityagoel018@gmail.com', '8950505494', 'Ambala', 'Haryana', '2020-04-27', 'Dr. Vikas Mittal', 'rotary  hospital'),
(3, 'dev', 'male', '58', 'A-', 'syhw', 'dev@mjdj.djj', '7857855', 'sjsj', 'Goa', '5814-05-15', 'Dr. guju patel', 'pgi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donar_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
