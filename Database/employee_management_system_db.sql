-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 12:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_ID`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin123@gmail.com', 'admin123'),

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_info`
--

CREATE TABLE `tbl_bank_info` (
  `bank_ID` int(11) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `emp_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_account`
--

CREATE TABLE `tbl_employee_account` (
  `emp_acc_ID` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `standing` varchar(255) NOT NULL,
  `province_address` varchar(255) NOT NULL,
  `municipal_address` varchar(255) NOT NULL,
  `barangay_address` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `block_no` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_hr`
--

CREATE TABLE `tbl_hr` (
  `HR_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `tbl_manager`
--

CREATE TABLE `tbl_manager` (
  `manager_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE `tbl_salary` (
  `salary_ID` int(11) NOT NULL,
  `monthly_rate` float NOT NULL,
  `overtime_rate` float NOT NULL,
  `philhealth` float NOT NULL,
  `SSS` float NOT NULL,
  `pagibig` float NOT NULL,
  `TIN_ID` float NOT NULL,
  `penalties` float NOT NULL,
  `total_deduction` float NOT NULL,
  `total_salary` float NOT NULL,
  `date_given` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `emp_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `tbl_time_inout_record`
--

CREATE TABLE `tbl_time_inout_record` (
  `InOut_ID` int(11) NOT NULL,
  `attend_date` date NOT NULL,
  `attend_status` varchar(255) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `in_status` varchar(255) NOT NULL,
  `time_out` varchar(255) NOT NULL,
  `out_status` varchar(255) NOT NULL,
  `late_penalty` int(11) NOT NULL,
  `ot_rate` int(11) NOT NULL,
  `emp_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `tbl_bank_info`
--
ALTER TABLE `tbl_bank_info`
  ADD PRIMARY KEY (`bank_ID`),
  ADD KEY `tbl_bank_info_ibfk_1` (`emp_ID`);

--
-- Indexes for table `tbl_employee_account`
--
ALTER TABLE `tbl_employee_account`
  ADD PRIMARY KEY (`emp_acc_ID`);

--
-- Indexes for table `tbl_hr`
--
ALTER TABLE `tbl_hr`
  ADD PRIMARY KEY (`HR_ID`);

--
-- Indexes for table `tbl_manager`
--
ALTER TABLE `tbl_manager`
  ADD PRIMARY KEY (`manager_ID`);

--
-- Indexes for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD PRIMARY KEY (`salary_ID`),
  ADD KEY `tbl_salary_ibfk_1` (`emp_ID`);

--
-- Indexes for table `tbl_time_inout_record`
--
ALTER TABLE `tbl_time_inout_record`
  ADD PRIMARY KEY (`InOut_ID`),
  ADD KEY `tbl_time_inout_record_ibfk_1` (`emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_bank_info`
--
ALTER TABLE `tbl_bank_info`
  MODIFY `bank_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_employee_account`
--
ALTER TABLE `tbl_employee_account`
  MODIFY `emp_acc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_hr`
--
ALTER TABLE `tbl_hr`
  MODIFY `HR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_manager`
--
ALTER TABLE `tbl_manager`
  MODIFY `manager_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  MODIFY `salary_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_time_inout_record`
--
ALTER TABLE `tbl_time_inout_record`
  MODIFY `InOut_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bank_info`
--
ALTER TABLE `tbl_bank_info`
  ADD CONSTRAINT `tbl_bank_info_ibfk_1` FOREIGN KEY (`emp_ID`) REFERENCES `tbl_employee_account` (`emp_acc_ID`);

--
-- Constraints for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD CONSTRAINT `tbl_salary_ibfk_1` FOREIGN KEY (`emp_ID`) REFERENCES `tbl_employee_account` (`emp_acc_ID`);

--
-- Constraints for table `tbl_time_inout_record`
--
ALTER TABLE `tbl_time_inout_record`
  ADD CONSTRAINT `tbl_time_inout_record_ibfk_1` FOREIGN KEY (`emp_ID`) REFERENCES `tbl_employee_account` (`emp_acc_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
