-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 04:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`, `confirmpassword`) VALUES
(1, 'rahul', 'rahul@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `logo` varchar(4096) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `requirement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `logo`, `companyname`, `requirement`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, 'ABHI0234.JPG', 'rahul', 'job');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` int(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `resume` varchar(4096) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `phonenumber`, `password`, `confirmpassword`, `resume`) VALUES
(77, 'ef', 'setn', 0, 'xm', 'dfm', '6418-KUBER SALES LOGO.jpg'),
(78, 'rahul;', 'ohio', 0, 'jdobj', 'rjgo', '4130-KUBER SALES LOGO.jpg'),
(79, 'rahul;', 'ohio', 0, 'rgd', 'sejrgo', '4276-KUBER SALES LOGO.jpg'),
(80, 'rahul;', 'ohio', 0, 'ewi', 'rknl', '1123-KUBER SALES LOGO.jpg'),
(81, 'rahul;', 'ohio', 0, 'ewi', 'rknl', '1918-KUBER SALES LOGO.jpg'),
(82, 'rahul;', 'ohio', 0, 'ewi', 'rknl', '8871-KUBER SALES LOGO.jpg'),
(83, 'rahul;', 'ohio', 0, 'dfnv', 'nsd', '4436-KUBER SALES LOGO.pdf'),
(84, 'rahul;', 'ohio', 0, 'dfnv', 'nsd', '4207-KUBER SALES LOGO.pdf'),
(85, 'eorh', 'aorh;', 0, 'dog', 'oero', '1665-KUBER SALES LOGO.pdf'),
(86, 'eorh', 'aorh;', 0, 'aer', 'j', '2629-KUBER SALES LOGO.jpg'),
(87, 'eorh', 'aorh;', 0, 'aer', 'j', '8691-KUBER SALES LOGO.jpg'),
(88, 'eorh', 'aorh;', 0, 'aer', 'j', '1207-KUBER SALES LOGO.jpg'),
(89, 'eorh', 'aorh;', 0, 'aer', 'j', '5327-KUBER SALES LOGO.jpg'),
(90, 'eorh', 'aorh;', 0, 'aer', 'j', '6075-KUBER SALES LOGO.jpg'),
(91, 'eorh', 'aorh;', 0, 'aer', 'j', '5719-KUBER SALES LOGO.jpg'),
(92, 'eorh', 'aorh;', 0, 'aer', 'j', '7552-KUBER SALES LOGO.jpg'),
(93, 'eorh', 'aorh;', 0, 'aer', 'j', '1912-KUBER SALES LOGO.jpg'),
(94, 'eorh', 'aorh;', 0, 'aer', 'j', '2310-KUBER SALES LOGO.jpg'),
(95, 'sefj', 'kdr', 0, 'knfklwn', 'sfnlksnf', '8334-KUBER SALES LOGO.pdf'),
(96, 'kubersales2016@gmail.com', 'tst@gmaill.com', 123123, 'admin', '123123', '1780-KUBER SALES.pdf'),
(97, 'kubersales2016@gmail.com', 'tst@gmaill.com', 123123, 'admin', '123123', '68-KUBER SALES.pdf'),
(98, 'kubersales2016@gmail.com', 'asdf', 0, 'asdf', 'asfd', '332-KUBER SALES.pdf'),
(99, 'kubersales2016@gmail.com', 'asdf', 0, 'asdf', 'asfd', '4537-KUBER SALES.pdf'),
(100, 'kubersales2016@gmail.com', 'asdf', 0, 'asdf', 'asfd', '1989-KUBER SALES.pdf'),
(101, 'kubersales2016@gmail.com', 'asdf', 0, 'asdf', 'asfd', '5065-KUBER SALES.pdf'),
(102, 'kubersales2016@gmail.com', 'asdf', 0, 'asdf', 'asfd', '4332-KUBER SALES.pdf'),
(103, 'kubersales2016@gmail.com', 'asdf', 0, 'asdf', 'asfd', '8663-KUBER SALES.pdf'),
(104, 'kubersales2016@gmail.com', 'asdf', 0, 'admin', 'ehdfu', '9718-KUBER SALES.pdf'),
(105, 'kubersales2016@gmail.com', 'asdf', 0, 'admin', 'aweg', '2993-KUBER SALES.pdf'),
(106, 'kubersales2016@gmail.com', 'asdf', 0, 'admin', 'aweg', '4007-KUBER SALES.pdf'),
(107, 'kubersales2016@gmail.com', 'asdf', 0, 'admin', 'aweg', '8387-KUBER SALES.pdf'),
(108, 'kubersales2016@gmail.com', 'asdf', 0, 'admin', 'aweg', '388-KUBER SALES.pdf'),
(109, 'kubersales2016@gmail.com', 'rahul@gmail.com', 0, 'admin', 'admin', '5587-KUBER SALES.pdf'),
(110, '', '', 0, '', '', '7296-'),
(111, '', '', 0, '', '', '3358-'),
(112, '', '', 0, '', '', '2097-'),
(113, '', '', 0, '', '', '9056-'),
(114, '', '', 0, '', '', '9459-'),
(115, '', '', 0, '', '', '3195-'),
(116, 'rahul', 'rahul@gmail.com', 123132, 'admin', 'admin', ''),
(117, 'rahul', 'rahul@gmail.com', 123132, 'admin', 'admin', ''),
(118, 'rahul', 'rahul@gmail.com', 123132, 'admin', 'admin', ''),
(119, 'rahul', 'rahul@gmail.com', 123132, 'admin', 'admin', '2356-KUBER SALES.pdf'),
(120, 'rahul', 'rahul@gmail.com', 123132, 'admin', 'admin', '3977-KUBER SALES.pdf'),
(121, 'rahul', 'rahul@gmail.com', 123132, 'admin', 'admin', '9725-KUBER SALES.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
