-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 02:33 AM
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
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `clinic` text NOT NULL,
  `name` text NOT NULL,
  `EmpID` varchar(20) NOT NULL,
  `EmpCell` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`clinic`, `name`, `EmpID`, `EmpCell`) VALUES
('ER', 'Nkoyo Bocco', '123DD', '810977821');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `HP_ID` int(11) NOT NULL,
  `Diagnosis` longtext NOT NULL,
  `Code` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`HP_ID`, `Diagnosis`, `Code`, `date`) VALUES
(10010, 'Toothache', 1100, '2019-11-07'),
(1234567, 'Headache ', 99, '2019-11-04'),
(1234568, '', 0, '0000-00-00'),
(1234569, 'Headache ', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Dclinic` text NOT NULL,
  `Dname` varchar(90) NOT NULL,
  `EmpID` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `hospital` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Dclinic`, `Dname`, `EmpID`, `sex`, `hospital`) VALUES
('ERA', 'Dr. Ekpo Elizabeth', '123DD', '', ''),
('Eye Clinic', 'Dr. Nmesoma Anekwe', '123CD', 'FEMALE', 'General hospital');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_history`
--

CREATE TABLE `hospital_history` (
  `HP_ID` int(11) NOT NULL,
  `Admit_date` date NOT NULL,
  `Refer` text NOT NULL,
  `Consltant` text NOT NULL,
  `Ward` varchar(220) NOT NULL,
  `Discharge` date NOT NULL,
  `Disposal` text NOT NULL,
  `Autopsy` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_history`
--

INSERT INTO `hospital_history` (`HP_ID`, `Admit_date`, `Refer`, `Consltant`, `Ward`, `Discharge`, `Disposal`, `Autopsy`) VALUES
(1234567, '2019-11-04', 'Dr. Shelbyy', 'Dr. Joel Akpan', 'Eye Clinic', '2019-11-04', 'none', 'none'),
(1234568, '0000-00-00', '', 'Dr. Joel Akpan', 'Eye Clinic', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `PH_ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `relationship` varchar(70) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `PH_ID` int(11) NOT NULL,
  `operations` longtext NOT NULL,
  `Code` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `HP_ID` int(20) NOT NULL,
  `Psurname` varchar(50) NOT NULL,
  `Pother` text NOT NULL,
  `Paddress` text NOT NULL,
  `Poccupation` text NOT NULL,
  `Poffice` text NOT NULL,
  `Pdob` date NOT NULL,
  `Psex` varchar(12) NOT NULL,
  `Pmarital` varchar(20) NOT NULL,
  `Pstateof` varchar(90) NOT NULL,
  `LGAof` varchar(90) NOT NULL,
  `Ptribe` text NOT NULL,
  `Pcell` int(11) NOT NULL,
  `Pemail` varchar(70) NOT NULL,
  `Religion` varchar(90) NOT NULL,
  `Denomination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`HP_ID`, `Psurname`, `Pother`, `Paddress`, `Poccupation`, `Poffice`, `Pdob`, `Psex`, `Pmarital`, `Pstateof`, `LGAof`, `Ptribe`, `Pcell`, `Pemail`, `Religion`, `Denomination`) VALUES
(10010, 'Okon', 'Confidence Amarachi', '2 Henshaw strt. off Federal girls college, Atimbo', 'Teacher', 'Federal girls college, Atimbo', '1996-11-06', 'Female', 'Single', 'Osun', 'Ife', 'Yoruba', 2147483647, 'confy@gmail.com', 'Christian', 'Christ Embassy'),
(1234567, 'Okoh', 'Blessing Nwakaego', 'Hall 8 Room122 UNICAL', 'Student', 'UNICAL', '2019-11-16', 'Female', 'Single', 'Delta', 'Kiriki', 'Ibibio', 2147483647, 'blessing@yahoo.com', 'Christian', 'Kingdom Diplomata ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `EmpID` int(11) NOT NULL,
  `Sname` text NOT NULL,
  `Saddress` text NOT NULL,
  `Soccupation` varchar(30) NOT NULL,
  `Ssex` varchar(23) NOT NULL,
  `Scell` int(11) NOT NULL,
  `Semail` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`EmpID`, `Sname`, `Saddress`, `Soccupation`, `Ssex`, `Scell`, `Semail`) VALUES
(123990, '', 'Satellite town', 'Doctor', 'Female', 2147483647, 'found@gmail.com'),
(190900, '', 'Satellite town', 'Doctor', 'Male', 99661265, 'winner@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE `test_result` (
  `HP_ID` int(11) NOT NULL,
  `blood_group` text NOT NULL,
  `lab_ref` varchar(50) NOT NULL,
  `pos` text NOT NULL,
  `date` date NOT NULL,
  `genotype` text NOT NULL,
  `sensitivity` text NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_result`
--

INSERT INTO `test_result` (`HP_ID`, `blood_group`, `lab_ref`, `pos`, `date`, `genotype`, `sensitivity`, `Remark`) VALUES
(1234567, 'B+', '565PP', 'P0001', '2019-11-09', 'AA', 'none', 'Healthy'),
(3456789, 'O', '565PL', 'P0002', '2019-11-14', 'AS', 'none', 'Do not eat Fat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`HP_ID`);

--
-- Indexes for table `hospital_history`
--
ALTER TABLE `hospital_history`
  ADD PRIMARY KEY (`HP_ID`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD PRIMARY KEY (`PH_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`HP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `HP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234570;

--
-- AUTO_INCREMENT for table `hospital_history`
--
ALTER TABLE `hospital_history`
  MODIFY `HP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234569;

--
-- AUTO_INCREMENT for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  MODIFY `PH_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
