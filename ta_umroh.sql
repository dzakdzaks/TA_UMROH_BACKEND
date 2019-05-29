-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 09:55 AM
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
-- Table structure for table `jamaah`
--

CREATE TABLE `jamaah` (
  `id_jamaah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ibu_kandung` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `id_user`, `no_ktp`, `nama_lengkap`, `tempat_lahir`, `pekerjaan`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `nama_ibu_kandung`, `kewarganegaraan`, `no_telpon`, `email`, `keperluan`) VALUES
(1, 8, '3275232322', 'Muhammad Dzaky Rahmanto', 'Bekasi', 'Freelancer Programmers', '2010-05-29', 'Laki - Laki', 'Jatirasa Jatiasih Bekasi Indonesias', 'Rahasiiiaaas', 'Turkeys', '+6287876002477', 'dzakyrahmantos@gmail.com', 'Premium'),
(5, 9, '355880', 'Ttgggh', 'Ggv', 'Ggg', '2019-05-29', 'Laki - Laki', 'fcvb', 'Ffvf', 'Fcc', '+6288999', 'ggvg', 'Premium');

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
(21, 9, 1, 'Sudah Dibayar'),
(23, 8, 1, 'Sudah Dibayar');

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
(8, 'Muhammad Dzaky Rahmantoo', 'dzaky@gmail.com', 'dzaky', 'Bekasi', 'Bekasi 15 Juli 2001', 'A', '+6287876002470', '2'),
(9, 'Admin', 'admin@gmail.com', 'admin', '-', '-', '-', '-', '1'),
(10, 'polisi', 'polisi@gmail.com', 'polisi', 'di rumah pak polisi', 'di rsud', 'B', '+63223423234', '2'),
(11, 'Joe', 'joe@gmail.com', 'joe123', 'Kalimantan ', 'Bekasi, 22 Maret 2001', 'O', '+62+62872436431', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id_jamaah`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

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
-- AUTO_INCREMENT for table `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paket_umroh`
--
ALTER TABLE `paket_umroh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
