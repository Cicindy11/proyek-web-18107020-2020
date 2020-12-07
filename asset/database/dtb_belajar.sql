-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 07:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtb_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id_fakultas` int(8) NOT NULL,
  `nm_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id_fakultas`, `nm_fakultas`) VALUES
(2111, 'Kedokteran'),
(2112, 'FMIPA'),
(2113, 'Ekonomi'),
(2114, 'FASILKOM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(8) NOT NULL,
  `nm_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nm_jurusan`) VALUES
(1111, 'Kedokteran Gigi'),
(1112, 'Kimia'),
(1113, 'Akutansi'),
(1114, 'Ilmu Komputer'),
(1115, 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nm_mahasiswa` varchar(20) NOT NULL,
  `id_jurusan` int(8) NOT NULL,
  `id_fakultas` int(8) NOT NULL,
  `NIM` int(8) NOT NULL,
  `TempatLahir` char(50) NOT NULL,
  `TanggalLahir` varchar(30) NOT NULL,
  `IPK` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nm_mahasiswa`, `id_jurusan`, `id_fakultas`, `NIM`, `TempatLahir`, `TanggalLahir`, `IPK`) VALUES
('da', 1111, 2111, 123, 'rumah', '1998-10-11', 2),
('James Situmorang', 1111, 2111, 13012012, 'Medan', '1995-04-02', 2.7),
('Riana Putria', 1112, 2112, 14005011, 'Padang', '1996-11-23', 3.1),
('Rina Kumala Sari', 1113, 2113, 15002032, 'Jakarta', '1997-06-28', 3.4),
('Sari Citra Lestari', 1113, 2115, 15003036, 'Jakarta', '1997-12-31', 3.5),
('Rudi Permana', 1114, 2114, 15021044, 'Bandung', '1994-08-22', 2.9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `nm_matakuliah` varchar(20) NOT NULL,
  `id_matakuliah` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`nm_matakuliah`, `id_matakuliah`) VALUES
('Pemograman Web', 111),
('Citra Diri', 112);

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `nama_semester` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_matakuliah` int(8) NOT NULL,
  `NIM` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`nama_semester`, `tahun`, `id_matakuliah`, `NIM`) VALUES
('Gasal', 2020, 111, 18107015),
('Gasal', 2020, 111, 18107020),
('Gasal', 2020, 112, 18107031),
('Gasal', 2020, 112, 18107033);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `NIM` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18107035;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
