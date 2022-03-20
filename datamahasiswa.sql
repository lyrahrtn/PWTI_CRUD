-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 03:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataalamat`
--

CREATE TABLE `dataalamat` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat_malang` varchar(500) NOT NULL,
  `alamat_asal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataalamat`
--

INSERT INTO `dataalamat` (`nim`, `nama`, `no_hp`, `alamat_malang`, `alamat_asal`) VALUES
('205150601111001', 'Zidan Fiqri', '0812398472', 'sigura-gura 3', 'Depok, Jawa Barat'),
('205150601111018', 'Nurma Cici Wulandari', '081298236438', 'Soekarno Hatta Indah', 'Sidoarjo'),
('205150601111020', 'Lyra Hertin', '08123456789', 'Bendungan Wlingi', 'Jombang, Jawa Timur'),
('205150607111002', 'Fayza Amalia', '0893472934', 'Bendungan Sutami', 'Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataalamat`
--
ALTER TABLE `dataalamat`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
