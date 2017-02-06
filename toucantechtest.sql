-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 10:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toucantechtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SchoolID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `Name`, `Email`, `SchoolID`) VALUES
(1, 'Andra Uritescu', 'andra@yahoo.com', 3),
(2, 'Tudor Boca', 'boca_tudor@yahoo.com', 3),
(3, 'Laurentiu Crasov', 'LrtCra@yahoo.com', 1),
(4, 'Alex Migeo', 'alex@gmail.com', 2),
(5, 'Matilda Rose', 'chaosmatilda@gmail.com', 3),
(6, 'Tudor Boca Von', 'bocVontudor@yahoo.com', 2),
(7, 'Mihai Muntean', 'munty@yahoo.com', 1),
(8, 'Mihai Muntean', 'munty@yahoo.com', 2),
(9, 'Sergio Aguero', 'srgaguero@gmail.com', 2),
(10, 'Tudor Boca', 'boca_tudor@yahoo.com', 2),
(11, 'Tudor Boca', 'boca_tudor@yahoo.com', 1),
(12, 'Francesca Nield', 'fran@gmail.com', 3),
(13, 'Diana Fren', 'dia@yahoo.com', 2),
(14, 'Alexandra Campean', 'ale@yahoo.com', 2),
(15, 'Alexandra Campean', 'ale@yahoo.com', 3),
(16, 'Sophie Brookes', 'soph@gmail.com', 1),
(17, 'Sophie Brookes', 'soph@gmail.com', 3),
(18, 'Feri Banyai', 'fery@gmail.com', 3),
(19, 'Petre Radu', 'pter@gmail.com', 1),
(20, 'Ian Cough', 'ian@ecosia.com', 1),
(21, '', '', 0),
(22, 'Dan Jurca', 'danj@gmail.com', 3),
(23, 'Marlon Brando', 'boca_tudor@yahoo.com', 3),
(24, 'Roman Aschi', 'roas@gmail.com', 1),
(25, 'Batongu Florea', 'florea@gmail.com', 2),
(26, 'Zoli Piti', 'zoly@him.com', 0),
(27, 'Simi Boca', 'simiB@yahoo.com', 3),
(28, '', '', 0),
(29, 'Xavier Hernan', 'xavi@him.com', 2),
(30, 'Andra Uritescu', 'andra@gmail.com', 2),
(31, 'Andra Dada', 'daandra@her.com', 3),
(32, 'Annie Mal', 'annie@gmail.com', 3),
(33, 'Mihaela Boca', 'miha@gmail.com', 3),
(34, 'Rose Matilda', 'tilda@her.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `SchoolID` int(11) NOT NULL,
  `SchoolName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`SchoolID`, `SchoolName`) VALUES
(1, 'St Paul\'s Academy'),
(2, 'Deptford Green School'),
(3, 'De Lucy School');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`SchoolID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `SchoolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
