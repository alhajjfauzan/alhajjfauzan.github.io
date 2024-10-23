-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 05:20 PM
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
-- Database: `insectpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `emaile` varchar(60) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `telpon` int(13) DEFAULT NULL,
  `roles` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `emaile`, `pasword`, `fullname`, `telpon`, `roles`) VALUES
(7, 'alhajj@gmail.com', '$2y$10$0cx0gacY5kWfMWGCJnRdHugozwr4Z3DU1ADSasW62lOl4p6nexGTq', 'ciao', 111, 'admin'),
(8, 'chan@gmail.com', '$2y$10$9SoaVsgWSwMxbVMC8kvb8.28ceU3dFTPt.ohpgPFBhCnuhWm.K.5G', 'fadsf', 12, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `insect`
--

CREATE TABLE `insect` (
  `id` int(12) NOT NULL,
  `fotho` varchar(255) NOT NULL,
  `nama_serangga` varchar(50) NOT NULL,
  `ordo` varchar(50) NOT NULL,
  `habitat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insect`
--

INSERT INTO `insect` (`id`, `fotho`, `nama_serangga`, `ordo`, `habitat`) VALUES
(44, '2024-10-23 19.04.06.jpg', 'belalang', 'Coleoptera', 'Hutan'),
(45, '2024-10-23 19.04.31.jpg', 'Ladybug', 'Coleoptera', 'Pohon dan Semak-semak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insect`
--
ALTER TABLE `insect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `insect`
--
ALTER TABLE `insect`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
