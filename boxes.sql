-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 07:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxes`
--

-- --------------------------------------------------------

--
-- Table structure for table `front_gallery`
--

CREATE TABLE `front_gallery` (
  `id` int(11) NOT NULL,
  `frontgallery_image` varchar(255) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `front_gallery`
--

INSERT INTO `front_gallery` (`id`, `frontgallery_image`, `caption`) VALUES
(1, 'images/g11.jpg', 'g1'),
(3, 'images/g3.jpg', 'g3'),
(4, 'images/g7.jpg', 'g4');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_image`, `caption`) VALUES
(1, 'images/g11.jpg', 'g1'),
(2, 'images/g1.jpg', 'g2'),
(3, 'images/g2.jpg', 'g3'),
(4, 'images/g3.jpg', 'g4'),
(5, 'images/g4.jpg', 'g5'),
(6, 'images/g5.jpg', 'g6'),
(7, 'images/g7.jpg', 'g7'),
(8, 'images/g8.jpg', 'g8');

-- --------------------------------------------------------

--
-- Table structure for table `jersey_design`
--

CREATE TABLE `jersey_design` (
  `id` int(11) NOT NULL,
  `jersey_image` varchar(255) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jersey_design`
--

INSERT INTO `jersey_design` (`id`, `jersey_image`, `caption`) VALUES
(1, 'images/jerseyd1.jpg', 'jersey1'),
(2, 'images/jerseyd2.jpg', 'jersey2'),
(3, 'images/jerseyd3.jpg', 'jersey3'),
(4, 'images/jerseyd4.jpg', 'jersey4'),
(5, 'images/jerseyd5.jpg', 'jersey5'),
(6, 'images/jerseyd6.jpg', 'jersey6'),
(8, 'images/jerseyd7.jpg', 'jersey7');

-- --------------------------------------------------------

--
-- Table structure for table `new_design`
--

CREATE TABLE `new_design` (
  `id` int(11) NOT NULL,
  `design_image` varchar(255) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_design`
--

INSERT INTO `new_design` (`id`, `design_image`, `caption`) VALUES
(2, 'images/n.jpg', 'n'),
(3, 'images/n4.jpg', 'n1'),
(4, 'images/n5.jpg', 'n3'),
(5, 'images/n6.jpg', 'n4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `front_gallery`
--
ALTER TABLE `front_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jersey_design`
--
ALTER TABLE `jersey_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_design`
--
ALTER TABLE `new_design`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `front_gallery`
--
ALTER TABLE `front_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jersey_design`
--
ALTER TABLE `jersey_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_design`
--
ALTER TABLE `new_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
