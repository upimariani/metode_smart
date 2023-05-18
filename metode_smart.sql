-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 07:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisis_siswa`
--

CREATE TABLE `analisis_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_raport` int(11) NOT NULL,
  `id_keaktifan` int(11) NOT NULL,
  `id_absensi` int(11) NOT NULL,
  `id_kepribadian` int(11) NOT NULL,
  `id_kejuaraan` int(11) NOT NULL,
  `nama_siswa` varchar(125) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `hasil` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisis_siswa`
--

INSERT INTO `analisis_siswa` (`id_siswa`, `id_user`, `id_raport`, `id_keaktifan`, `id_absensi`, `id_kepribadian`, `id_kejuaraan`, `nama_siswa`, `kelas`, `angkatan`, `jk`, `hasil`) VALUES
(2, 2, 6, 4, 6, 4, 4, 'Ahmad Zaenal', 'VIII', 2017, 'Laki - Laki', '300'),
(3, 2, 0, 0, 0, 0, 0, 'Nabila', 'VII', 2017, 'Perempuan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_absensi`
--

CREATE TABLE `kriteria_absensi` (
  `id_absensi` int(11) NOT NULL,
  `range_absensi` varchar(20) NOT NULL,
  `nilai_absensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_absensi`
--

INSERT INTO `kriteria_absensi` (`id_absensi`, `range_absensi`, `nilai_absensi`) VALUES
(3, '10', '20'),
(4, '30', '40'),
(5, '50', '60'),
(6, '70', '80'),
(7, '90', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_keaktifan`
--

CREATE TABLE `kriteria_keaktifan` (
  `id_keaktifan` int(11) NOT NULL,
  `range_keaktifan` varchar(20) NOT NULL,
  `nilai_keaktifan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_keaktifan`
--

INSERT INTO `kriteria_keaktifan` (`id_keaktifan`, `range_keaktifan`, `nilai_keaktifan`) VALUES
(3, '0', '40'),
(4, '1', '60'),
(5, '2', '80'),
(6, '3', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_kejuaraan`
--

CREATE TABLE `kriteria_kejuaraan` (
  `id_kejuaraan` int(11) NOT NULL,
  `range_kejuaraan` varchar(30) NOT NULL,
  `nilai_kejuaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_kejuaraan`
--

INSERT INTO `kriteria_kejuaraan` (`id_kejuaraan`, `range_kejuaraan`, `nilai_kejuaraan`) VALUES
(2, 'Nasional', '100'),
(3, 'Antar Kecamatan', '80'),
(4, 'Antar Sekolah', '60'),
(5, 'Tidak Mempunyai Prestasi', '40');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_kepribadian`
--

CREATE TABLE `kriteria_kepribadian` (
  `id_kepribadian` int(11) NOT NULL,
  `range_kepribadian` varchar(20) NOT NULL,
  `nilai_kepribadian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_kepribadian`
--

INSERT INTO `kriteria_kepribadian` (`id_kepribadian`, `range_kepribadian`, `nilai_kepribadian`) VALUES
(2, 'Kurang (D)', '40'),
(3, 'Cukup (C)', '60'),
(4, 'Baik (B)', '80'),
(5, 'Sangat Baik', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_raport`
--

CREATE TABLE `kriteria_raport` (
  `id_raport` int(11) NOT NULL,
  `range_raport` varchar(20) NOT NULL,
  `nilai_raport` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_raport`
--

INSERT INTO `kriteria_raport` (`id_raport`, `range_raport`, `nilai_raport`) VALUES
(2, '0', '20'),
(3, '50', '40'),
(4, '60', '60'),
(5, '70', '80'),
(6, '85', '100');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_raport`
--

INSERT INTO `nilai_raport` (`id_nilai`, `id_siswa`, `mata_pelajaran`, `nilai`) VALUES
(1, 2, 'Matematika', '100'),
(2, 2, 'Bahasa Indonesia', '80'),
(3, 2, 'Agama', '92'),
(4, 2, 'Bahasa Inggris', '87');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(2, 'Wali Kelas 1', 'Purwawinangun', '089876545676', 'walikelas', 'walikelas', 2),
(3, 'Kepala Sekolah', 'jakarta selatan', '089876545676', 'kepalasekolah', 'kepalasekolah', 3),
(5, 'Admin', 'Kuningan', '0875698745633', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisis_siswa`
--
ALTER TABLE `analisis_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `kriteria_absensi`
--
ALTER TABLE `kriteria_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `kriteria_keaktifan`
--
ALTER TABLE `kriteria_keaktifan`
  ADD PRIMARY KEY (`id_keaktifan`);

--
-- Indexes for table `kriteria_kejuaraan`
--
ALTER TABLE `kriteria_kejuaraan`
  ADD PRIMARY KEY (`id_kejuaraan`);

--
-- Indexes for table `kriteria_kepribadian`
--
ALTER TABLE `kriteria_kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`);

--
-- Indexes for table `kriteria_raport`
--
ALTER TABLE `kriteria_raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indexes for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisis_siswa`
--
ALTER TABLE `analisis_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria_absensi`
--
ALTER TABLE `kriteria_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kriteria_keaktifan`
--
ALTER TABLE `kriteria_keaktifan`
  MODIFY `id_keaktifan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria_kejuaraan`
--
ALTER TABLE `kriteria_kejuaraan`
  MODIFY `id_kejuaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_kepribadian`
--
ALTER TABLE `kriteria_kepribadian`
  MODIFY `id_kepribadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_raport`
--
ALTER TABLE `kriteria_raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
