-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 04:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `namaDepan` varchar(50) NOT NULL,
  `namaTengah` varchar(50) NOT NULL,
  `namaBelakang` varchar(50) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nik` char(16) NOT NULL,
  `wargaNegara` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodePos` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass1` varchar(50) NOT NULL,
  `pass2` varchar(50) NOT NULL,
  `fotoProfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `nik`, `wargaNegara`, `email`, `noHp`, `alamat`, `kodePos`, `username`, `pass1`, `pass2`, `fotoProfil`) VALUES
('aku', 'adalah', 'manusia', 'Bekasi', '2022-04-02', '0987654321098765', 'Indonesia', 'ppti9bca@gmail.com', '08766536123', 'asdf', 17116, 'wanbo_user', 'asdf', 'asdf', '9081-doge-shy.png'),
('Levandio', 'Yuvens', 'Jonathan', 'Bekasi', '2022-04-02', '0987654321098768', 'Indonesia', 'a@yahoo.com', '08766536139', 'bumi bekasi', 17116, 'yuvenss1', 'asdf', 'asdf', '4318-137-catscream.png'),
('Levandio', 'Yuvens', 'Jonathan', 'Bekasi', '2022-04-02', '1234567890123456', 'Indonesia', 'levandio.jonathan@binus.ac.id', '086345674563', 'aasssdddd', 17116, 'yuvenss', 'asdf', 'asdf', '1024-chad.png'),
('ini', 'adalah', 'komputer', 'mars', '2022-04-08', '7654321879098765', 'martian', 'martian1@mars.com', '0213872663', 'mars 2 jl. kecu 3', 11224, 'mars_martian', 'asdf', 'asdf', '4318-137-catscream.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `noHp` (`noHp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
