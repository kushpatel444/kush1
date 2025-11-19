-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 08:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Ateeb', 'admin@gmail.com', 'admin'),
(2, 'Hamza', 'hamza@gmail.com', 'ateeb'),
(3, 'ali a', 'ali@gmail.com', '456hh');

-- --------------------------------------------------------

--
-- Table structure for table `bookticket`
--

CREATE TABLE `bookticket` (
  `ticket_id` int(255) NOT NULL,
  `visitors_name` varchar(255) NOT NULL,
  `visitors_email` varchar(255) NOT NULL,
  `visitors_number` int(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `movie_id` int(255) NOT NULL,
  `seat_class` varchar(255) NOT NULL,
  `ticket_price` int(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_time` varchar(255) NOT NULL,
  `movie_cinema` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookticket`
--

INSERT INTO `bookticket` (`ticket_id`, `visitors_name`, `visitors_email`, `visitors_number`, `movie_name`, `quantity`, `movie_id`, `seat_class`, `ticket_price`, `payment_method`, `movie_date`, `movie_time`, `movie_cinema`) VALUES
(6, 'syedateeb', 'ateeb@gmail.com', 2147483647, 'Avengers', '2 Adult', 14, 'Box', 1500, 'Online', '2023-01-05', '21:30', 'The Theatre'),
(9, 'syedateeb', 'ateeb@gmail.com', 2147483647, 'Jadugar', '2 Adult 2 Child', 15, 'Gold', 1000, 'Movie Wallet', '2022-11-29', '17:46', 'The Cinop');

-- --------------------------------------------------------

--
-- Table structure for table `kid_concession`
--

CREATE TABLE `kid_concession` (
  `concession_id` int(255) NOT NULL,
  `visitors_name` varchar(255) NOT NULL,
  `visitors_email` varchar(255) NOT NULL,
  `visitors_number` int(255) NOT NULL,
  `kid_name` varchar(255) NOT NULL,
  `kid_age` int(255) NOT NULL,
  `kid_grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kid_concession`
--

INSERT INTO `kid_concession` (`concession_id`, `visitors_name`, `visitors_email`, `visitors_number`, `kid_name`, `kid_age`, `kid_grade`) VALUES
(3, 'Syed Ateeb', 'ateeb@gmail.com', 2147483647, 'ali 454', 56, '5'),
(5, 'Syed Ateeb', 'ateeb@gmail.com', 2147483647, 'fdsr', 4, '56'),
(6, 'Syed Ateeb', 'ateeb@gmail.com', 31600098, 'ali', 34, '5'),
(7, 'Syed Ateeb', 'ateeb@gmail.com', 31600098, '786', 88, 'dsa'),
(10, 'Syed Ateeb', 'ateeb@gmail.com', 31600098, 'ali 454', 56, '5');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_trailer` varchar(255) NOT NULL,
  `ticket_price` int(255) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_pic` varchar(255) NOT NULL,
  `movie_time` varchar(255) NOT NULL,
  `movie_cinema` varchar(255) NOT NULL,
  `movie_star` varchar(255) NOT NULL,
  `total_booked` int DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_trailer`, `ticket_price`, `movie_date`, `movie_pic`, `movie_time`, `movie_cinema`, `movie_star`) VALUES
(14, 'Avengers', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 1500, '2023-01-05', 'uploads/dcx9s8k-994c29f7-1184-4ff3-9939-eb4417a0ec71.jpg', '21:30', 'The Theatre', ''),
(15, 'Jadugar', 'https://www.youtube.com/watch?v=i7yFiUio0u0', 1000, '2022-11-29', 'uploads/6.jpg', '17:46', 'The Cinop', ''),
(16, 'Black Adams', 'https://www.youtube.com/watch?v=mkomfZHG5q4', 600, '2022-12-08', 'uploads/1.jpg', '17:48', 'The Theatre 5', ''),
(17, 'Mirzpur', 'https://www.youtube.com/watch?v=ZNeGF-PvRHY', 2000, '2022-06-10', 'uploads/7.jpg', '17:48', 'The sinoma', ''),
(18, 'Titanic', 'https://www.youtube.com/watch?v=5A6YjRSvR0Q', 1450, '2022-12-14', 'uploads/5.jpg', '17:50', 'The Theatre Avant', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitors_id` int(255) NOT NULL,
  `visitors_name` varchar(255) NOT NULL,
  `visitors_email` varchar(255) NOT NULL,
  `visitors_number` int(255) NOT NULL,
  `visitors_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitors_id`, `visitors_name`, `visitors_email`, `visitors_number`, `visitors_password`) VALUES
(4, ' Syed ', 'syedateeb@gmail.com', 30242341, ' 1234'),
(7, 'Syed Ateeb', 'ateeb@gmail.com', 31600098, '12345'),
(8, 'wasay', 'wasay@gmail.com', 345646634, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookticket`
--
ALTER TABLE `bookticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `kid_concession`
--
ALTER TABLE `kid_concession`
  ADD PRIMARY KEY (`concession_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitors_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookticket`
--
ALTER TABLE `bookticket`
  MODIFY `ticket_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kid_concession`
--
ALTER TABLE `kid_concession`
  MODIFY `concession_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitors_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Added for seat limit feature
ALTER TABLE movies ADD COLUMN IF NOT EXISTS total_booked INT DEFAULT 0;
