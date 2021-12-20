-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2021 at 12:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_ID` int(255) NOT NULL,
  `manager_Email` varchar(255) NOT NULL,
  `manager_Password` varchar(255) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `user_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_email` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `manager_password` varchar(255) NOT NULL,
  `manager_DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_email`, `manager_name`, `manager_password`, `manager_DOB`) VALUES
('99marafay@gmail.com', 'Abdul Rafay', '19march1999', '2004-12-15'),
('muqeet@gmail.com', 'Abdul Muqeet', '12345', '2004-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_email`, `user_name`, `user_password`, `user_DOB`) VALUES
('moeez@gmail.com', 'Abdul Moeez', '12345', '2021-12-01'),
('zafar@gmail.com', 'Saima Zafar', '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_ID`),
  ADD KEY `manager_Email` (`manager_Email`),
  ADD KEY `manager_Password` (`manager_Password`),
  ADD KEY `user_Email` (`user_Email`),
  ADD KEY `user_Password` (`user_Password`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_email`),
  ADD UNIQUE KEY `manager_password` (`manager_password`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user-password` (`user_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_3` FOREIGN KEY (`manager_Email`) REFERENCES `manager` (`manager_email`),
  ADD CONSTRAINT `login_ibfk_5` FOREIGN KEY (`manager_Email`) REFERENCES `manager` (`manager_email`),
  ADD CONSTRAINT `login_ibfk_6` FOREIGN KEY (`manager_Password`) REFERENCES `manager` (`manager_password`),
  ADD CONSTRAINT `login_ibfk_7` FOREIGN KEY (`user_Email`) REFERENCES `user` (`user_email`),
  ADD CONSTRAINT `login_ibfk_8` FOREIGN KEY (`user_Password`) REFERENCES `user` (`user_password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
