-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 06:18 PM
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
-- Database: `coba3`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamhs`
--

CREATE TABLE `datamhs` (
  `id` int(11) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `datamhs`
--

INSERT INTO `datamhs` (`id`, `NIM`, `Nama`, `prodi`, `email`, `notelp`) VALUES
(1, '1313621008', 'Daniella Natani Budiman', 'Ilmu Komputer', 'daniellabudiman26@gmail.com', '087885720208'),
(51, '11111111111', 'Mitami', 'Ilmu Komputer', 'daniellabudiman26@gmail.com', '081344444444'),
(52, '123233', 'Broks', 'Ilmu Komputer', 'admin1@admin.com', '081344444446');

-- --------------------------------------------------------

--
-- Table structure for table `datanilai`
--

CREATE TABLE `datanilai` (
  `id` int(11) NOT NULL,
  `sms` varchar(40) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kodemk` varchar(20) NOT NULL,
  `Matkul` varchar(255) NOT NULL,
  `sks` varchar(10) NOT NULL,
  `Nilai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `datanilai`
--

INSERT INTO `datanilai` (`id`, `sms`, `kelas`, `kodemk`, `Matkul`, `sks`, `Nilai`) VALUES
(1, '1 2021/2022', '1313600001', '31451033', 'Kalkulus Differensial', '3', 'B'),
(2, '1 2021/2022', '1313600004', '31451122', 'Pengantar TIK', '2', 'A'),
(3, '1 2021/2022', '1313600005', '31451133', 'Dasar-dasar Pemrograman', '3', 'C+'),
(4, '1 2021/2022', '1313600003', '31451113', 'Statistika dan Probabilitas', '3', 'C'),
(5, '1 2021/2022', '1000000011', '00051122', 'Pendidikan Pancasila', '2', 'A'),
(6, '1 2021/2022', '1313600006', '30051121', 'Olimpisme', '1', 'A'),
(7, '1 2021/2022', '1313600007', '30050042', 'Bahasa Inggris', '2', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `username`, `dosen`, `matkul`, `sks`) VALUES
(20, 'Mai', 'Statistik', 'Aljabar Linear, Statistika Probabilitas', 65),
(27, 'dnb', 'Mr. Dodi', 'Aljabar Linear', 2),
(28, 'dnb', 'Mr. Bingo', 'PPW', 3);

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `sks` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `matkul`, `dosen`, `sks`) VALUES
(1, 'PPW', 'Mr. Bingo', '3'),
(3, 'Aljabar Linear', 'Mr. Dodi', '2'),
(5, 'Statistika Probabilitas', 'Mr. Heru', '3'),
(6, 'Mobile Computing', 'Mr. Rafly', '3'),
(7, 'Data Raya dan Pemrograman', 'Mr. Jerry', '2'),
(8, 'Metode Numerik', 'Mr. John', '3'),
(9, 'Komputer Grafik', 'Mr. Roland', '3'),
(10, 'Basis Data', 'Ms. Scarlett', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `level` enum('user','admin') NOT NULL,
  `google_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `email`, `username`, `password`, `prodi`, `notelp`, `level`, `google_id`) VALUES
(6, '1313621034', 'admin', 'admin1@gmail.com', 'admin1', 'admin', 'admin', '087885749521', 'admin', NULL),
(7, '1313131313', 'Gilang Adrian ', 'gilang@gmail.com', 'Gilang', 'gilang', 'Ilmu Komputer', '081344444441', 'user', NULL),
(15, '1213', 'Azhari', 'gilang@gmail.com', 'azhari', 'admin', 'Ilmu Komputer', '081344444444', 'admin', ''),
(18, '1313131314', 'Maimunah', 'mai@gmail.com', 'Mai', 'mai', 'Statistik', '081344444441', 'user', ''),
(19, '1313621008', 'Daniella Natani', 'daniellabudiman26@gmail.com', 'dnb', '1234', 'Ilmu Komputer', '087885720208', 'user', NULL),
(20, '1313621088', 'test', 'test@test.com', 'test1', '1234', 'Biologi', '08788578888', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamhs`
--
ALTER TABLE `datamhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIM` (`NIM`);

--
-- Indexes for table `datanilai`
--
ALTER TABLE `datanilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kodemk` (`kodemk`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamhs`
--
ALTER TABLE `datamhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `datanilai`
--
ALTER TABLE `datanilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
