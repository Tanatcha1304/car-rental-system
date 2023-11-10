-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 04:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_ID` int(15) NOT NULL,
  `Pay_Date` datetime NOT NULL,
  `Bill_Status` varchar(15) NOT NULL DEFAULT 'pending',
  `Total_Amount` int(15) NOT NULL,
  `Book_ID` int(15) NOT NULL,
  `Card_ID` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_ID`, `Pay_Date`, `Bill_Status`, `Total_Amount`, `Book_ID`, `Card_ID`) VALUES
(4, '0000-00-00 00:00:00', 'pending', 728, 15, '1'),
(5, '0000-00-00 00:00:00', 'pending', 728, 15, '1'),
(6, '2023-05-29 15:14:16', 'Paid', 1134000, 21, 'last_test1'),
(7, '2023-05-29 15:14:16', 'Paid', 1134000, 21, 'last_test1'),
(8, '2023-05-29 15:14:16', 'Paid', 1134000, 21, 'last_test1'),
(9, '2023-05-29 15:14:16', 'Paid', 1134000, 21, 'last_test1'),
(10, '0000-00-00 00:00:00', 'pending', 6894000, 25, 'again1'),
(11, '2023-05-29 16:12:21', 'Paid', 2000, 26, 'last_test1'),
(18, '2023-05-29 16:32:58', 'Paid', 38000, 33, '2343213556780'),
(19, '2023-05-29 16:50:12', 'Paid', 3600, 34, '2343213556780');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Card_ID` varchar(13) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNum` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Driving_License` varchar(20) NOT NULL,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Card_ID`, `Name`, `Surname`, `Address`, `Gender`, `PhoneNum`, `Email`, `Driving_License`, `User_ID`) VALUES
('1', 'test', 'test', '', '', '', 'test@gmail', '', 10),
('1111111111111', 'baby', 'booboo', '', '', '', 'bububoo@gmail.com', '', 15),
('1234675712343', 'jenny', 'chen', '', '', '', 'jennycheneiei@gmail.com', '', 16),
('2131231', 'dafdf', 'dasfs', '', '', '', 'dsad@gmail', '', 12),
('2343213556780', 'karina', 'chen', '', '', '', 'karina@gmail.com', '', 17),
('again1', 'again', 'again', '', '', '', 'again@gmail.com', '', 14),
('last_test1', 'last_test', 'last_test', '', '', '', 'last_test@gmail.com', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` varchar(10) NOT NULL,
  `Emp_Name` varchar(50) NOT NULL,
  `Emp_Surname` varchar(50) NOT NULL,
  `Emp_Address` varchar(200) NOT NULL,
  `Emp_PhoneNum` varchar(10) NOT NULL,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `Book_ID` int(15) NOT NULL,
  `Book_Status` varchar(20) NOT NULL DEFAULT 'wait for payment',
  `Pickup_Date` datetime NOT NULL,
  `Reserve_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Return_Date` datetime NOT NULL,
  `Card_ID` varchar(13) NOT NULL,
  `License_plate` varchar(10) NOT NULL DEFAULT 'removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`Book_ID`, `Book_Status`, `Pickup_Date`, `Reserve_Date`, `Return_Date`, `Card_ID`, `License_plate`) VALUES
(15, 'wait for payment', '2023-05-31 13:02:00', '2023-05-29 13:01:07', '2025-05-28 13:05:00', '1', '5'),
(16, 'wait for payment', '2023-05-31 13:02:00', '2023-05-29 13:02:41', '2025-05-28 13:05:00', '1', '5'),
(17, 'wait for payment', '2023-05-31 13:02:00', '2023-05-29 13:02:57', '2025-05-28 13:05:00', '1', '5'),
(18, 'wait for payment', '2023-05-31 13:02:00', '2023-05-29 13:03:00', '2025-05-28 13:05:00', '1', '5'),
(19, 'wait for payment', '2023-05-31 13:02:00', '2023-05-29 13:03:08', '2025-05-28 13:05:00', '1', '5'),
(20, 'wait for payment', '2023-05-31 13:02:00', '2023-05-29 13:05:07', '2025-05-28 13:05:00', '1', '5'),
(21, 'Reserved', '2025-05-15 19:48:00', '2023-05-29 19:44:38', '2026-05-28 19:48:00', 'last_test1', 'ก111'),
(22, 'wait for payment', '2025-05-15 19:48:00', '2023-05-29 19:45:22', '2026-05-28 19:48:00', 'last_test1', 'ก111'),
(23, 'wait for payment', '2025-05-15 19:48:00', '2023-05-29 20:04:38', '2026-05-28 19:48:00', 'last_test1', 'ก111'),
(24, 'wait for payment', '2025-05-15 19:48:00', '2023-05-29 20:06:46', '2026-05-28 19:48:00', 'last_test1', 'ก111'),
(25, 'wait for payment', '2023-05-31 13:46:00', '2023-05-29 20:46:46', '2026-07-23 23:46:00', 'again1', 'จ444'),
(26, 'Reserved', '2023-05-29 20:56:00', '2023-05-29 21:05:13', '2023-05-31 08:56:00', 'last_test1', 'ค222'),
(33, 'Reserved', '2023-05-29 21:32:00', '2023-05-29 21:32:46', '2023-06-01 09:32:00', '2343213556780', 'ฉ555'),
(34, 'Reserved', '2023-05-29 21:49:00', '2023-05-29 21:49:46', '2023-05-31 21:49:00', '2343213556780', 'ง333');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(255) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` int(1) NOT NULL DEFAULT 0 COMMENT '0=customer,1=emp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Username`, `Password`, `Role`) VALUES
(1, 'admin', '123', 1),
(9, 'test', '123', 0),
(10, 'test', '1', 0),
(11, 'test', '1', 0),
(12, 'ds', 'ds', 0),
(13, 'last_test', '123', 0),
(14, 'again', '123', 0),
(15, 'bububoo', '123', 0),
(16, 'jj', '123456', 0),
(17, 'kk', '12123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `License_plate` varchar(10) NOT NULL,
  `Meter_reading` int(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Petrol_types` varchar(10) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Vehicle_status` varchar(20) NOT NULL,
  `Seat` int(2) NOT NULL,
  `MaxSpeed` int(3) NOT NULL,
  `Car_Type` varchar(10) NOT NULL,
  `Veh_Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`License_plate`, `Meter_reading`, `Price`, `Petrol_types`, `Model`, `Brand`, `Color`, `Vehicle_status`, `Seat`, `MaxSpeed`, `Car_Type`, `Veh_Image`) VALUES
('ก111', 3000, '3000', 'Benzine', 'Camry', 'Toyota', 'White', 'Available', 5, 200, 'sedan', 'white-toyotacamry.png'),
('ข112', 4000, '1500', 'Gasoline', 'Almera', 'Nissan', 'Red', 'Available', 5, 192, 'sedan', 'red-nissanalmera.png'),
('ค222', 10000, '2000', 'Gasoline', 'HRV', 'Honda', 'White', 'Available', 5, 192, 'suv', 'white-hondahrv.jpg'),
('ง333', 5000, '1800', 'Gasoline', 'City', 'Honda', 'Blue', 'Available', 5, 192, 'hatchback', 'blue-hondacity.jpg'),
('จ444', 20000, '6000', 'Gasoline', 'Alphard', 'Toyota', 'Brown', 'Available', 7, 200, 'van', 'brown-toyotaalphard.jpg'),
('ฉ555', 2000, '19000', 'Gasoline', 'C class', 'Mercedes Benz', 'White', 'Available', 2, 233, 'coupe', 'white-benzcclass.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`),
  ADD KEY `Book_ID` (`Book_ID`),
  ADD KEY `Card_ID` (`Card_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Card_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `Card_ID` (`Card_ID`),
  ADD KEY `License_plate` (`License_plate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`License_plate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reservation_details`
--
ALTER TABLE `reservation_details`
  MODIFY `Book_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Card_ID`) REFERENCES `customer` (`Card_ID`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`Book_ID`) REFERENCES `reservation_details` (`Book_ID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD CONSTRAINT `reservation_details_ibfk_1` FOREIGN KEY (`Card_ID`) REFERENCES `customer` (`Card_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
