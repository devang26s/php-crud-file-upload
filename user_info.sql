-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 05:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `files` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `files`) VALUES
(1, 'Blue Gradient Modern Corporate Computer and Technology LinkedIn Banner.png'),
(2, 'Blue Gradient Modern Corporate Computer and Technology LinkedIn Banner.png'),
(3, 'Blue Gradient Modern Corporate Computer and Technology LinkedIn Banner.png'),
(4, 'Resume_DevangSoni (3).pdf'),
(5, 'Resume_DevangSoni (3).pdf'),
(6, 'Citations.docx'),
(7, 'White paper creative printable to do list checklist.pdf'),
(8, 'HT_5961_19DCS142.pdf'),
(9, 'Cloud Computing Concepts, Technology  Architecture (Thomas Erl  Ricardo Puttini  Zaigham Mahmood) (z-lib.org).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `hobbies` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `pass`, `email`, `phone`, `hobbies`, `gender`, `ID`) VALUES
('User Pdata', 'user@013', 'user@emil.com', 98787342, '2,', 'female', 119),
('User Pdata', 'kmkwrnm', 'user@emil.com', 98787342, '2,', 'female', 120),
('user 3', 'pajcipanec', 'snv@mail.com', 38409238, '2,3,', 'non-bi', 121),
('Usertesting12', 'coksmeck@04', 'user@test.mail', 983098823, '2,', 'non-bi', 122),
('Abce', 'snvkjsb', 'Amdl@mail.cc', 38729874, '2,', 'female', 123),
('[value-1]', '[value-2]', '[value-3]', 0, '[value-5]', '[value', 124);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('devang26', 'devang@26'),
('devang26', 'devang@26'),
('abcd', 'abcd'),
('dev@email.com', 'dev'),
('devang@gmail.com', 'devang'),
('nihar@mail.in', 'nihar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
