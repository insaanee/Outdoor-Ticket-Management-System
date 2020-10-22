-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 08:52 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HTMS``
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_Info`
--

CREATE TABLE `doctor_Info` (
  `Doctor_Name` varchar(16) NOT NULL,
  `Doctor_Id` int(16) NOT NULL,
  `Doctor_Department` varchar(16) NOT NULL,
  `Sun_To_Thus` varchar(50) NOT NULL,      
  `Friday_To_Saturday` varchar(50) NOT NULL,
  `Room_No` int(20) NOT NULL,
  `Doctor_Fee` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_Info`
--

--
-- Table structure for table `online_booking`
--

CREATE TABLE `online_booking`(
 `Registration_no` int(20) NOT NULL,
  `Patient_Name` varchar(20) NOT NULL,   
  `Age` int(10) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Department` varchar(11) NOT NULL,
  `Doctor_Name` varchar(20) NOT NULL,
  `DATE` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
--
-- Dumping data for table `Online_booking`
--


--
-- Table structure for table `offline_booking`
--

CREATE TABLE `offline_booking`(
  `Registration_no` int(20) NOT NULL,
  `Patient_Name` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Department` varchar(11) NOT NULL,
  `Doctor_Name` varchar(20) NOT NULL,
  `DATE` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
--
-- Dumping data for table `online_booking`
--



--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
   `User_Name` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
--
-- Dumping data for table `admin`
--



--
-- Indexes for table `doctor_Info`
--
ALTER TABLE `doctor_Info`
  ADD PRIMARY KEY (`Doctor_Id`);

--
-- Indexes for table `online_booking`
--
ALTER TABLE `online_booking`
  ADD PRIMARY KEY (`Registration_no`);
  
  --
-- Indexes for table `offline_booking`
--
ALTER TABLE `offline_booking`
  ADD PRIMARY KEY (`Registration_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
