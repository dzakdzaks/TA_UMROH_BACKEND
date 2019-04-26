-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 05:59 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_umroh`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket_umroh`
--

CREATE TABLE `paket_umroh` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `transit` varchar(255) NOT NULL,
  `jarak_to_madinah` varchar(255) NOT NULL,
  `jarak_to_mekah` varchar(255) NOT NULL,
  `maskapai` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `keberangkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_umroh`
--

INSERT INTO `paket_umroh` (`id`, `nama`, `durasi`, `transit`, `jarak_to_madinah`, `jarak_to_mekah`, `maskapai`, `harga`, `keberangkatan`) VALUES
(1, 'Premium', '9 Hari', 'Tidak Transit', '150 m', '750 m', '- Garuda Indonesia			- Saudi Arabian Airlines', '27.000.000', '1 Mei 2019'),
(2, 'Standar', '9 Hari', 'Transit', '150 m', '800 m', '- Emirates			- Etihad Airways			- Malaysian Airlanes			- Oman Air', '24.000.000', '1 Juni 2019');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_user`, `id_paket`, `status`) VALUES
(2, 8, 2, 'Sudah Dibayar'),
(4, 8, 1, 'Di Proses'),
(5, 10, 2, 'Belum Dibayar'),
(6, 10, 1, 'Sudah Dibayar'),
(7, 8, 1, 'Belum Dibayar'),
(8, 8, 1, 'Belum Dibayar'),
(9, 8, 2, 'Belum Dibayar'),
(10, 8, 2, 'Belum Dibayar'),
(11, 8, 2, 'Di Proses'),
(12, 11, 2, 'Sudah Dibayar'),
(13, 11, 1, 'Belum Dibayar'),
(14, 11, 2, 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `goldar` varchar(3) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `alamat`, `ttl`, `goldar`, `notelp`, `role`) VALUES
(8, 'Muhammad Dzaky Rahmanto', 'dzaky@gmail.com', 'dzaky', 'Bekasi', 'Bekasi 15 Juli 2001', 'A', '+6287876002470', '2'),
(9, 'Admin', 'admin@gmail.com', 'admin', '-', '-', '-', '-', '1'),
(10, 'pol', 'pol@gmail.com', 'pol', 'pol', 'pol', 'A', '+6287876002470', '2'),
(11, 'Joe', 'joe@gmail.com', 'joe123', 'Kalimantan ', 'Bekasi, 22 Maret 2001', 'O', '+62+62872436431', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket_umroh`
--
ALTER TABLE `paket_umroh`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket_umroh`
--
ALTER TABLE `paket_umroh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
