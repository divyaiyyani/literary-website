-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 10:42 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiction`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `ID` int(11) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Universe` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Pages` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`ID`, `Author`, `Universe`, `Name`, `Pages`, `Genre`) VALUES
(1, 'Divya Iyyani', 'Star Trek', 'RSS Voyages', '3', 'Adventure'),
(2, 'Divya Iyyani', 'Mirrors', 'Reflections', '2', 'Horror'),
(3, 'Divya Iyyani', 'Music', 'Guitar Strings', '2', 'Romance'),
(4, 'Divya Iyyani', 'Rain', 'Walk in the Rain', '3', 'Romance'),
(5, 'Divya Iyyani', 'Cars', 'The Car-park', '1', 'Comedy'),
(6, 'Divya Iyyani', 'Mumbai', 'City of Dreams', '2', 'Philosophy'),
(7, 'Divya Iyyani', 'Garfield', 'Garfield', '1', 'Comedy'),
(8, 'Divya Iyyani', 'Peanuts', 'Peanuts', '1', 'Comedy'),
(9, 'Divya Iyyani', 'C&H', 'Calvin and Hobbes', '1', 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(1, 'keshin', 'jani', 2147483647, 'k@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(2, 'Keshin', 'Jani', 564879123, 'admin@a.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
