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
(4, 'Hannah', 'hanna@gmail.com', '$2y$10$BWEWB54rsyKvzBv/kWOmgujq2712VVUXDxOAn.I2AJcdr1QxzJyvC'),
(5, 'Ella Hotricano', 'ella05', '$2y$10$NhEhSfx0RV5hYYJ/KheehuvX9qEU5t9qX.bhGYY3mAT8AnybjO5/O'),
(6, 'Faith', 'faith@gmail.com', '$2y$10$T.l417lPVDTTIVlxzXSnTOyezUw9.lKQnwc14tEFTTZbVFM7lZJ9e'),
(8, 'Hannah Joy', 'joy@gmail.com', '$2y$10$dstq6KSmMh8GYbmmzaq15.vhQa4tKeoY9IzlLVfvRsAVsKUf48Rye');

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

--
-- Dumping data for table `tbl_bank_info`
--

INSERT INTO `tbl_bank_info` (`bank_ID`, `acc_name`, `acc_no`, `bank_name`, `emp_ID`) VALUES
(1, 'Faith Hotricano', '54-0909-7676', 'Land Bank', 5),
(2, 'Audrey Ignacio', '6766-90900-899', 'Security Bank', 6),
(3, 'Claire Hotricano', '688-99-657-876', 'Security Bank', 7);

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

--
-- Dumping data for table `tbl_employee_account`
--

INSERT INTO `tbl_employee_account` (`emp_acc_ID`, `last_name`, `first_name`, `middle_name`, `suffix_name`, `position`, `standing`, `province_address`, `municipal_address`, `barangay_address`, `street_address`, `block_no`, `phone_no`, `birth_date`, `age`, `gender`, `email`, `username`, `password`, `rate`) VALUES
(5, 'Hotricano', 'Faith', 'Ompong', 'N/A', 'Human Resource', 'Regular', 'Biliran', 'Naval', 'P.I. Garcia', 'Caneja Ext.', '1223', '09090990909', '2010-09-06', '15', 'Female', 'faith01@gmail.com', 'faith01', '$2y$10$9Ga0uKBdvXhBYceW8zbDvejyb1hmBnCADU8ZtbGMbnVuS1o0sgb4y', 600),
(6, 'Ignacio', 'Audrey Rose', 'Patiga', 'N/A', 'Manager', 'Regular', 'Biliran', 'Naval', 'P.I. Garcia', 'Vicentillo   ', '76755', '0987654321', '2003-01-28', '21', 'Female', 'audrey@gmail.com', 'odrey@gmail.com', '$2y$10$sfVyWaGZiaYHTJ348uGODuBcmKNIJ5YOj3e1iERVO6cnVuoQRZpPa', 1500),
(7, 'Hotricano', 'Claire', 'Ompong', 'N/A', 'Administrator', 'Regular', 'Biliran', 'Naval', 'P.I. Garcia', 'Caneja Ext.', '873864', '8238648364', '2001-03-03', '23', 'Female', 'claire@yahoo.com', 'claire@gmail.com', '$2y$10$fiwdS5GqQ8DPOEs9PZFNUuGvh6GnoPKogf4LaiduGcLj6lyB.6Iqu', 1000);

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

--
-- Dumping data for table `tbl_hr`
--

INSERT INTO `tbl_hr` (`HR_ID`, `name`, `username`, `password`, `task`) VALUES
(2, 'Jennie Kim', 'jennie02', '$2y$10$WqxsiQvwt0rO9Q.MU4mSfu.GmWqmNiaQxbq4oG5Rbzh0egUceeqh.', 'Recruitment'),
(3, 'Hannah Joy', 'hannah03', '$2y$10$ifJb/28/4zo6xSpzvwxUPuIDNw5D0J6K087mmXIov6CZzpH1l0mSG', 'Payroll'),
(4, 'Audrey Rose', 'audrey@gmail.com', '$2y$10$szvP7VI61ZWJ8QV.bAQKsu.j0eRWihuUytmtH7IKuqCawVkrJUwFO', 'Payroll');

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

--
-- Dumping data for table `tbl_manager`
--

INSERT INTO `tbl_manager` (`manager_ID`, `name`, `username`, `password`, `dept`) VALUES
(2, 'Drake Carcellar', 'drake01', '$2y$10$pDyY4wovTl82O6rZ4.cl7OB2ug/Jj.9gkhf6vIWXARVnPn0krlW6C', 'Security'),
(3, 'Audrey Marie', 'audreng@gmail.com', '$2y$10$WPdDmOyy2lwm.RoqKhV3nOgKV/9m990ztpyWDDK/Ndd47.pVU87M.', 'Kitchen'),
(4, 'Hannah Hotricano', 'hannah04', '$2y$10$Dme85G.murvtNtUDudsoeORa6ZeQYTTXRtkU52Gp90Wfijtkw5OTO', 'Front office');

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

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`salary_ID`, `monthly_rate`, `overtime_rate`, `philhealth`, `SSS`, `pagibig`, `TIN_ID`, `penalties`, `total_deduction`, `total_salary`, `date_given`, `emp_ID`) VALUES
(1, 7000, 100, 100, 100, 100, 100, 50, 450, 6650, '2024-05-12 19:39:11', 7),
(2, 8000, 100, 100, 100, 100, 100, 100, 500, 7600, '2024-05-12 19:43:01', 5),
(3, 8000, 100, 100, 100, 100, 100, 100, 500, 7600, '2024-05-12 19:45:59', 6),
(4, 8000, 100, 100, 100, 100, 100, 0, 400, 7700, '2024-05-12 20:02:26', 5),
(5, 8000, 100, 100, 100, 100, 100, 0, 400, 7700, '2024-05-12 07:00:00', 5),
(6, 8000, 0, 100, 100, 100, 100, 0, 400, 7600, '2024-05-12 20:38:33', 5),
(7, 8000, 0, 100, 100, 100, 100, 0, 400, 7600, '2024-05-13 00:37:00', 7),
(8, 8000, 100, 100, 100, 100, 100, 100, 500, 7600, '2024-05-13 00:44:33', 7);

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
-- Dumping data for table `tbl_time_inout_record`
--

INSERT INTO `tbl_time_inout_record` (`InOut_ID`, `attend_date`, `attend_status`, `time_in`, `in_status`, `time_out`, `out_status`, `late_penalty`, `ot_rate`, `emp_ID`) VALUES
(1, '2024-05-10', 'Absent', '07:30:00', '-', '05:00:00', '-', 0, 0, 6),
(2, '2024-05-10', 'Duty', '08:30:00', 'Late', '18:00:00', 'Over Time', 50, 100, 5),
(3, '2024-05-10', 'Duty', '07:30:00', 'On Time', '17:00:00', 'On Time', 0, 0, 7),
(4, '2024-05-11', 'Duty', '07:30:00', 'On Time', '19:00:00', 'Over Time', 0, 100, 5),
(5, '2024-05-11', 'Duty', '09:30:00', 'Late', '05:00:00', 'On Time', 50, 0, 7),
(6, '2024-05-11', 'Duty', '7:30 AM', 'On Time', '5:00 PM', 'On Time', 0, 0, 5),
(7, '2024-05-12', 'Duty', '8:00 AM', 'Late', '7:00 PM', 'Over Time', 50, 200, 5),
(8, '2024-05-12', 'Duty', '7:30 AM', 'On Time', '5:00 PM', 'On Time', 0, 0, 5),
(9, '2024-05-12', 'Duty', '7:30 AM', 'On Time', '5:00 PM', 'On Time', 0, 0, 7),
(10, '2024-05-12', 'Duty', '7:30 AM', 'On Time', '5:00 PM', 'On Time', 0, 0, 6),
(11, '2024-05-12', 'Absent', '-', '-', '-', '-', 0, 0, 6),
(12, '2024-05-13', 'Absent', '-', '-', '-', '-', 0, 0, 7),
(13, '2025-02-15', 'Duty', '8:00 AM', 'On Time', '9:00 PM', 'Over Time', 0, 100, 5);

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
