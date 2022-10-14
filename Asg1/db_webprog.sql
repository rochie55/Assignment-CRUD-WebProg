-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 02:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_webprog`
--

CREATE TABLE `db_webprog` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Nomor_hp` varchar(128) NOT NULL,
  `Umur` int(4) NOT NULL,
  `Gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_webprog`
--

INSERT INTO `db_webprog` (`ID`, `Nama`, `Email`, `Nomor_hp`, `Umur`, `Gender`) VALUES
(123, 'Penyatir', 'KenaSatir@gmail.com', '1234567890', 111, 'F'),
(1234, 'Sayha', 'Omegad@gmail.com', '0812230419', 100, 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_webprog`
--
ALTER TABLE `db_webprog`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
