-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 11:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `province` varchar(255) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `province`, `Email`) VALUES
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', 'Bulawayo', '0'),
(3, 'reg', '33c0ee425e2c0efe834afc1aa1e33a4c', 'MatebelelandNorth', '0'),
(4, 'hazel', '827ccb0eea8a706c4c34a16891f84e7b', '', '0'),
(5, 't', 'e358efa489f58062f10dd7316b65649e', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ApplicationID` int(11) DEFAULT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `PlaceofBirth` varchar(200) NOT NULL,
  `province` varchar(255) NOT NULL,
  `NameofFather` varchar(200) DEFAULT NULL,
  `BirthofFather` varchar(200) DEFAULT NULL,
  `IDofFather` varchar(200) DEFAULT NULL,
  `NameofMother` varchar(200) DEFAULT NULL,
  `BirthofMother` varchar(200) DEFAULT NULL,
  `IDofMother` varchar(200) DEFAULT NULL,
  `PermanentAdd` varchar(200) DEFAULT NULL,
  `PostalAdd` varchar(200) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Dateofapply` timestamp NOT NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`ID`, `UserID`, `ApplicationID`, `DateofBirth`, `Gender`, `FullName`, `PlaceofBirth`, `province`, `NameofFather`, `BirthofFather`, `IDofFather`, `NameofMother`, `BirthofMother`, `IDofMother`, `PermanentAdd`, `PostalAdd`, `MobileNumber`, `Email`, `Dateofapply`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 2, 825483740, '2007-01-08', 'Female', 'Test Test', 'Harare', 'Bulawayo', 'Test1 Test1', 'Harare', '70-304036E71', 'Test2 Test2', 'Gweru', '32-1213S32', '42 Willdale', '42 Willdale', 777777, 'test@gmail.com', '2022-02-08 14:23:45', 'Come and collect on 05/05/2022', 'Verified', '2022-02-08 14:23:45'),
(2, 2, 628424935, '2022-02-09', 'Male', 'Test4 Test4', 'Hararee', '', 'Test3Test3', 'Hararee', '70-304036E711', 'Test2 Test22', 'Gweruu', '32-1213S322', '43hjhjdf', 'dfhei', 7777777, 'test3@gmail.com', '2022-02-08 20:02:39', 'Details are not clear enough', 'Verified', '2022-02-08 20:02:39'),
(3, 1, 354881598, '1990-02-01', 'Male', 'Tina Mups', 'Harare', '', 'Test1 Test1', 'Hararee', '70-304036E711', 'Test2 Test2', 'Gweru', '32-1213S32', '32343 house', '2343 house', 7777777, 'test4@gmail.com', '2022-02-14 03:19:23', 'cannot process at the moment', 'Rejected', '2022-02-14 03:19:23'),
(4, 4, 285909279, '2022-01-31', 'Female', 'panashe', 'harare', '', 'divine mutaisi', 'gweru', '123456', 'vanessa', 'Gweru', '23456', 'hre', 'grt', 123456789, 'test@gmail.com', '2022-02-14 11:21:10', 'come for collection', 'Verified', '2022-02-14 11:21:10'),
(5, 7, 560565569, '2022-05-06', 'Female', 'tyu', 'Chinhoyi', 'MatebelelandNorth', 'Tinaye Mupinyuri', 'ret', '3443', 'admin', 'tret', 'rt3', '67\r\n6281 Southview Park', '67\r\n6281 Southview Park', 715957462, 'mupinyuritinaye@gmail.com', '2022-05-06 22:28:23', NULL, NULL, '2022-05-06 22:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `idapplication`
--

CREATE TABLE `idapplication` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `BirthEntryNumber` varchar(200) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `PlaceofBirth` varchar(200) NOT NULL,
  `province` varchar(255) NOT NULL,
  `VillageofOrigin` varchar(200) DEFAULT NULL,
  `PermanentAdd` varchar(200) NOT NULL,
  `PostalAdd` varchar(200) NOT NULL,
  `MobileNumber` varchar(200) DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `Dateofapply` timestamp NOT NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idapplication`
--

INSERT INTO `idapplication` (`ID`, `UserID`, `ApplicationID`, `BirthEntryNumber`, `DateofBirth`, `Gender`, `FullName`, `PlaceofBirth`, `province`, `VillageofOrigin`, `PermanentAdd`, `PostalAdd`, `MobileNumber`, `Email`, `Dateofapply`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 2, 817427547, '2001-04-05', '2001-04-05', 'Female', 'Test Test', 'Harare', '', '2001-04-05', '232 TY', '232 TY', '0777777', 'test@gmail.com', '2022-02-08 18:54:37', 'Details not clear', 'Rejected', '2022-02-10 20:43:31'),
(2, 2, 234997496, '2005-01-08', '2005-01-08', 'Male', 'Test4 Test4', 'Harare', '', '2005-01-08', 'ashdss', 'dsns', '07777777', 'test3@gmail.com', '2022-02-08 20:11:43', ',,,,,', 'Rejected', '2022-02-14 03:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Address`, `Password`, `RegDate`) VALUES
(1, 'Tinaye', 'Mupinyuri', '715957462', '67', 'ee11cbb19052e40b07aac0ca060c23ee', '2022-02-04 20:35:12'),
(2, 'Tim', 'Tom', '1234', '6281 Southview Park', '098f6bcd4621d373cade4e832627b4f6', '2022-02-14 03:13:10'),
(3, 'Test3', 'Test3', '123', '6267 Waterfalls', 'ee11cbb19052e40b07aac0ca060c23ee', '2022-02-08 19:51:47'),
(4, 'lissah', 'magwenzi', '786668295', 'reg', '81dc9bdb52d04dc20036dbd8313ed055', '2022-02-14 10:59:32'),
(5, '7', '7', '7', '7', '7', '2022-05-06 22:13:31'),
(6, '5', '5', '5', '5', 'e4da3b7fbbce2345d7772b0674a318d5', '2022-04-26 18:03:48'),
(7, '1', '1', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2022-05-06 22:15:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `idapplication`
--
ALTER TABLE `idapplication`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `idapplication`
--
ALTER TABLE `idapplication`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
