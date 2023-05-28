-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2023 pada 05.55
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `analisis_siswa`
--

CREATE TABLE `analisis_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_raport` int(11) NOT NULL DEFAULT 0,
  `id_keaktifan` int(11) NOT NULL DEFAULT 0,
  `id_absensi` int(11) NOT NULL DEFAULT 0,
  `id_kepribadian` int(11) NOT NULL DEFAULT 0,
  `id_kejuaraan` int(11) NOT NULL DEFAULT 0,
  `nama_siswa` varchar(125) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `hasil` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisis_siswa`
--

INSERT INTO `analisis_siswa` (`id_siswa`, `id_user`, `id_raport`, `id_keaktifan`, `id_absensi`, `id_kepribadian`, `id_kejuaraan`, `nama_siswa`, `kelas`, `angkatan`, `jk`, `hasil`) VALUES
(1, 1, 5, 4, 6, 4, 5, 'Ahmad Fauzi Ramadan ', 'X', 2023, 'Laki - Laki', '244'),
(2, 1, 5, 5, 6, 4, 4, 'Amelia Nur Hikmah ', 'X', 2023, 'Perempuan', '292'),
(3, 1, 5, 5, 5, 5, 4, 'Anggun Nur Afifa', 'X', 2023, 'Perempuan', '300'),
(4, 1, 5, 4, 7, 4, 4, 'Anindyta Priatna ', 'X', 2023, 'Perempuan', '300'),
(5, 1, 5, 3, 7, 4, 4, 'Chandika Yahya Wijaya ', 'X', 2023, 'Laki - Laki', '280'),
(6, 1, 6, 3, 6, 5, 5, 'Dedeh Geisya Aulia ', 'X', 2023, 'Perempuan', '296'),
(7, 1, 6, 5, 7, 5, 2, 'Fadhil Alfath ', 'X', 2023, 'Laki - Laki', '464'),
(8, 1, 6, 4, 6, 4, 4, 'Fahri Muhammad Rayhan ', 'X', 2023, 'Laki - Laki', '300'),
(9, 1, 6, 4, 5, 4, 4, 'Fauziah Miftahul Janah ', 'X', 2023, 'Perempuan', '272'),
(10, 1, 5, 4, 6, 3, 4, 'Gymnastiar Tri Raja ', 'X', 2023, 'Laki - Laki', '236'),
(11, 2, 0, 0, 0, 0, 0, 'Ha Ura Az-Zahra Dzahabiiyah ', 'XI', 2023, 'Perempuan', '0'),
(12, 2, 0, 0, 0, 0, 0, 'Kania Fauziah B ', 'XI', 2023, 'Perempuan', '0'),
(13, 2, 0, 0, 0, 0, 0, 'Kasih Ramadhanti ', 'XI', 2023, 'Perempuan', '0'),
(14, 2, 0, 0, 0, 0, 0, 'Mamay Siti Maryam ', 'XI', 2023, 'Perempuan', '0'),
(15, 2, 0, 0, 0, 0, 0, 'Mona Maryam ', 'XI', 2023, 'Perempuan', '0'),
(16, 2, 0, 0, 0, 0, 0, 'Muhamad Nazril Anugrah ', 'XI', 2023, 'Laki - Laki', '0'),
(17, 2, 0, 0, 0, 0, 0, 'Muhamad Raihan Dani', 'XI', 2023, 'Laki - Laki', '0'),
(18, 2, 0, 0, 0, 0, 0, 'Muhammad Rafly Akbar ', 'XI', 2023, 'Laki - Laki', '0'),
(19, 2, 0, 0, 0, 0, 0, 'Muthia Sri Rahayu Azzahra ', 'XI', 2023, 'Perempuan', '0'),
(20, 2, 0, 0, 0, 0, 0, 'Nabilla Nafisyatul Mardiah ', 'XI', 2023, 'Perempuan', '0'),
(21, 3, 0, 0, 0, 0, 0, 'Adry Alwi Rahnan ', 'XII', 2023, 'Laki - Laki', '0'),
(22, 3, 0, 0, 0, 0, 0, 'Ahmad Musyafa', 'XII', 2023, 'Laki - Laki', '0'),
(23, 3, 0, 0, 0, 0, 0, 'Daffa Diaulhaq  ', 'XII', 2023, 'Laki - Laki', '0'),
(24, 3, 0, 0, 0, 0, 0, 'Dhiya Haura Az-Zahra ', 'XII', 2023, 'Perempuan', '0'),
(25, 3, 0, 0, 0, 0, 0, 'Dina Anjani  ', 'XII', 2023, 'Perempuan', '0'),
(26, 3, 0, 0, 0, 0, 0, 'Dinda Khitfiyatul Maula ', 'XII', 2023, 'Perempuan', '0'),
(27, 3, 0, 0, 0, 0, 0, 'Eka Noviyanti ', 'XII', 2023, 'Perempuan', '0'),
(28, 3, 0, 0, 0, 0, 0, 'Elin Sky Zaskia Lestari ', 'XII', 2023, 'Perempuan', '0'),
(29, 3, 0, 0, 0, 0, 0, 'Elsa Safitri Cahyani ', 'XII', 2023, 'Perempuan', '0'),
(30, 3, 0, 0, 0, 0, 0, 'Grasela Agustin ', 'XII', 2023, 'Perempuan', '0'),
(31, 4, 0, 0, 0, 0, 0, 'Abil Febrian', 'X', 2022, 'Laki - Laki', '0'),
(32, 4, 0, 0, 0, 0, 0, 'Ahmad Fadil ', 'X', 2022, 'Laki - Laki', '0'),
(33, 4, 0, 0, 0, 0, 0, 'Aida Hayatun Solihah ', 'X', 2022, 'Perempuan', '0'),
(34, 4, 0, 0, 0, 0, 0, 'Aisy Alldia Tama ', 'X', 2022, 'Laki - Laki', '0'),
(35, 4, 0, 0, 0, 0, 0, 'Ajeng Putri Nur Rohmah ', 'X', 2022, 'Perempuan', '0'),
(36, 4, 0, 0, 0, 0, 0, 'Aliy Wahfi Trilian', 'X', 2022, 'Perempuan', '0'),
(37, 4, 0, 0, 0, 0, 0, 'Amara Sidkoh ', 'X', 2022, 'Perempuan', '0'),
(38, 4, 0, 0, 0, 0, 0, 'Desi Salsabila ', 'X', 2022, 'Perempuan', '0'),
(39, 4, 0, 0, 0, 0, 0, 'Dewangga Praba ', 'X', 2022, 'Laki - Laki', '0'),
(40, 4, 0, 0, 0, 0, 0, 'Eka Nur Safitri ', 'X', 2022, 'Perempuan', '0'),
(41, 5, 0, 0, 0, 0, 0, 'Fahrani Rahmaniyah ', 'XI', 2022, 'Perempuan', '0'),
(42, 5, 0, 0, 0, 0, 0, 'Faska Fradana ', 'XI', 2022, 'Laki - Laki', '0'),
(43, 5, 0, 0, 0, 0, 0, 'Hadi Suhadi ', 'XI', 2022, 'Laki - Laki', '0'),
(44, 5, 0, 0, 0, 0, 0, 'Ikbal Husaeni ', 'XI', 2022, 'Laki - Laki', '0'),
(45, 5, 0, 0, 0, 0, 0, 'Ilham Farhanul Hakim ', 'XI', 2022, 'Laki - Laki', '0'),
(46, 5, 0, 0, 0, 0, 0, 'Intan Nurani ', 'XI', 2022, 'Perempuan', '0'),
(47, 5, 0, 0, 0, 0, 0, 'Karlina ', 'XI', 2022, 'Perempuan', '0'),
(48, 5, 0, 0, 0, 0, 0, 'Krisna Tri Ananda ', 'XI', 2022, 'Laki - Laki', '0'),
(49, 5, 0, 0, 0, 0, 0, 'Mia Dwi Amalia', 'XI', 2022, 'Perempuan', '0'),
(50, 5, 0, 0, 0, 0, 0, 'Muhamad Ilham Maulani ', 'XI', 2022, 'Laki - Laki', '0'),
(51, 6, 0, 0, 0, 0, 0, 'Muhammad Daffa Andhika ', 'XII', 2022, 'Laki - Laki', '0'),
(52, 6, 0, 0, 0, 0, 0, 'Nissa Khairunnajah ', 'XII', 2022, 'Perempuan', '0'),
(53, 6, 0, 0, 0, 0, 0, 'Nur Apriani', 'XII', 2022, 'Perempuan', '0'),
(54, 6, 0, 0, 0, 0, 0, 'Pirda Salsa Apipah ', 'XII', 2022, 'Perempuan', '0'),
(55, 6, 0, 0, 0, 0, 0, 'Putri Maisun Najibah', 'XII', 2022, 'Perempuan', '0'),
(56, 6, 0, 0, 0, 0, 0, 'Rachma Destiyanti ', 'XII', 2022, 'Perempuan', '0'),
(57, 6, 0, 0, 0, 0, 0, 'Refa Andriyani ', 'XII', 2022, 'Perempuan', '0'),
(58, 6, 0, 0, 0, 0, 0, 'Ridho Abdullah  ', 'XII', 2022, 'Laki - Laki', '0'),
(59, 6, 0, 0, 0, 0, 0, 'Tasya Khojanah', 'XII', 2022, 'Perempuan', '0'),
(60, 6, 0, 0, 0, 0, 0, 'Tohid Nur Falah ', 'XII', 2022, 'Laki - Laki', '0'),
(61, 7, 0, 0, 0, 0, 0, 'Adelia Apriliani ', 'X', 2021, 'Perempuan', '0'),
(62, 7, 0, 0, 0, 0, 0, 'Ahmad Iqballudin', 'X', 2021, 'Laki - Laki', '0'),
(63, 7, 0, 0, 0, 0, 0, 'Alicia Destiani Indah Pertiwi ', 'X', 2021, 'Perempuan', '0'),
(64, 7, 0, 0, 0, 0, 0, 'Andin Novianti ', 'X', 2021, 'Perempuan', '0'),
(65, 7, 0, 0, 0, 0, 0, 'Ayla Nafisa Salsabila ', 'X', 2021, 'Perempuan', '0'),
(66, 7, 0, 0, 0, 0, 0, 'Berliana Zahara Putri ', 'X', 2021, 'Perempuan', '0'),
(67, 7, 0, 0, 0, 0, 0, 'Chusnul Mar\'Iyah ', 'X', 2021, 'Perempuan', '0'),
(68, 7, 0, 0, 0, 0, 0, 'Dela Anggun Havana', 'X', 2021, 'Perempuan', '0'),
(69, 7, 0, 0, 0, 0, 0, 'Diani Mutmainah ', 'X', 2021, 'Perempuan', '0'),
(70, 7, 0, 0, 0, 0, 0, 'Dwi Wulandari ', 'X', 2021, 'Laki - Laki', '0'),
(71, 8, 0, 0, 0, 0, 0, 'Fira Nurfiyanti ', 'XI', 2021, 'Perempuan', '0'),
(72, 8, 0, 0, 0, 0, 0, 'Jihad Al Fauzan ', 'XI', 2021, 'Laki - Laki', '0'),
(73, 8, 0, 0, 0, 0, 0, 'Muhammad Ikmal Shofiullah ', 'XI', 2021, 'Laki - Laki', '0'),
(74, 8, 0, 0, 0, 0, 0, 'Muhammad Iqbal Masrul ', 'XI', 2021, 'Laki - Laki', '0'),
(75, 8, 0, 0, 0, 0, 0, 'Muhammad Sabila Ali Rosyad ', 'XI', 2021, 'Laki - Laki', '0'),
(76, 8, 0, 0, 0, 0, 0, 'Neng Endah Toiyibah ', 'XI', 2021, 'Perempuan', '0'),
(77, 8, 0, 0, 0, 0, 0, 'Nida Nur Hamidah ', 'XI', 2021, 'Perempuan', '0'),
(78, 8, 0, 0, 0, 0, 0, 'Putri Dwi Rahayu ', 'XI', 2021, 'Perempuan', '0'),
(79, 8, 0, 0, 0, 0, 0, 'Raafi Alfajr ', 'XI', 2021, 'Laki - Laki', '0'),
(80, 8, 0, 0, 0, 0, 0, 'Rena Nurfebriyanti ', 'XI', 2021, 'Perempuan', '0'),
(81, 9, 0, 0, 0, 0, 0, 'Ade Tasyah ', 'XII', 2021, 'Perempuan', '0'),
(82, 9, 0, 0, 0, 0, 0, 'Ahmad Iqmalludin ', 'XII', 2021, 'Laki - Laki', '0'),
(83, 9, 0, 0, 0, 0, 0, 'Allan Nestha', 'XII', 2021, 'Laki - Laki', '0'),
(84, 9, 0, 0, 0, 0, 0, 'Anjani ', 'XII', 2021, 'Perempuan', '0'),
(85, 9, 0, 0, 0, 0, 0, 'Asep Romdoni ', 'XII', 2021, 'Laki - Laki', '0'),
(86, 9, 0, 0, 0, 0, 0, 'Dela Daliyatul Hasanah', 'XII', 2021, 'Perempuan', '0'),
(87, 9, 0, 0, 0, 0, 0, 'Elza Zaharanie ', 'XII', 2021, 'Perempuan', '0'),
(88, 9, 0, 0, 0, 0, 0, 'Evan Cipta Nurrizky ', 'XII', 2021, 'Laki - Laki', '0'),
(89, 9, 0, 0, 0, 0, 0, 'Fika Farhatul Azkia ', 'XII', 2021, 'Perempuan', '0'),
(90, 9, 0, 0, 0, 0, 0, 'Hilda Aulia Ramadani ', 'XII', 2021, 'Perempuan', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_absensi`
--

CREATE TABLE `kriteria_absensi` (
  `id_absensi` int(11) NOT NULL,
  `range_absensi` varchar(20) NOT NULL,
  `nilai_absensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_absensi`
--

INSERT INTO `kriteria_absensi` (`id_absensi`, `range_absensi`, `nilai_absensi`) VALUES
(3, '10', '20'),
(4, '30', '40'),
(5, '50', '60'),
(6, '70', '80'),
(7, '90', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_keaktifan`
--

CREATE TABLE `kriteria_keaktifan` (
  `id_keaktifan` int(11) NOT NULL,
  `range_keaktifan` varchar(35) NOT NULL,
  `nilai_keaktifan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_keaktifan`
--

INSERT INTO `kriteria_keaktifan` (`id_keaktifan`, `range_keaktifan`, `nilai_keaktifan`) VALUES
(3, 'Tidak Mengikuti Ekstrakulikuler', '40'),
(4, '1Ektrakuliler', '60'),
(5, '2 Ekstrakuliler', '80'),
(7, '>=3 Ekstrakulier', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_kejuaraan`
--

CREATE TABLE `kriteria_kejuaraan` (
  `id_kejuaraan` int(11) NOT NULL,
  `range_kejuaraan` varchar(30) NOT NULL,
  `nilai_kejuaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_kejuaraan`
--

INSERT INTO `kriteria_kejuaraan` (`id_kejuaraan`, `range_kejuaraan`, `nilai_kejuaraan`) VALUES
(2, 'Nasional', '100'),
(3, 'Antar Kabupaten', '80'),
(4, 'Antar Kecamatan', '60'),
(5, 'Tidak Mempunyai Prestasi', '40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_kepribadian`
--

CREATE TABLE `kriteria_kepribadian` (
  `id_kepribadian` int(11) NOT NULL,
  `range_kepribadian` varchar(20) NOT NULL,
  `nilai_kepribadian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_kepribadian`
--

INSERT INTO `kriteria_kepribadian` (`id_kepribadian`, `range_kepribadian`, `nilai_kepribadian`) VALUES
(2, 'Kurang (D) ', '40'),
(3, 'Cukup (C)', '60'),
(4, 'Baik (B)', '80'),
(5, 'Sangat Baik (A)', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_raport`
--

CREATE TABLE `kriteria_raport` (
  `id_raport` int(11) NOT NULL,
  `range_raport` varchar(20) NOT NULL,
  `nilai_raport` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_raport`
--

INSERT INTO `kriteria_raport` (`id_raport`, `range_raport`, `nilai_raport`) VALUES
(2, '0', '20'),
(3, '50', '40'),
(4, '60', '60'),
(5, '70', '80'),
(6, '85', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_raport`
--

INSERT INTO `nilai_raport` (`id_nilai`, `id_siswa`, `mata_pelajaran`, `nilai`) VALUES
(1, 1, 'Matematika', '76'),
(2, 1, 'Bahasa Indonesia', '76'),
(3, 1, 'Agama', '83'),
(4, 1, 'Bahasa Ingris', '87'),
(5, 2, 'Matematika', '83'),
(6, 2, 'Bahasa Indonesia', '81'),
(7, 2, 'Agama', '81'),
(8, 2, 'Bahasa Ingris', '77'),
(9, 3, 'Matematika', '82'),
(10, 3, 'Bahasa Indonesia', '93'),
(11, 3, 'Agama', '76'),
(12, 3, 'Bahasa Ingris', '81'),
(13, 4, 'Matematika', '74'),
(14, 4, 'Bahasa Indonesia', '75'),
(15, 4, 'Agama', '86'),
(16, 4, 'Bahasa Ingris', '79'),
(17, 5, 'Matematika', '72'),
(18, 5, 'Bahasa Indonesia', '88'),
(19, 5, 'Agama', '74'),
(20, 5, 'Bahasa Ingris', '96'),
(21, 6, 'Matematika', '88'),
(22, 6, 'Bahasa Indonesia', '84'),
(23, 6, 'Agama', '97'),
(24, 6, 'Bahasa Ingris', '82'),
(25, 7, 'Matematika', '88'),
(26, 7, 'Bahasa Indonesia', '90'),
(27, 7, 'Agama', '84'),
(28, 7, 'Bahasa Ingris', '84'),
(29, 8, 'Matematika', '72'),
(30, 8, 'Bahasa Indonesia', '91'),
(31, 8, 'Agama', '92'),
(32, 8, 'Bahasa Ingris', '92'),
(33, 9, 'Matematika', '91'),
(34, 9, 'Bahasa Indonesia', '94'),
(35, 9, 'Agama', '83'),
(36, 9, 'Bahasa Ingris', '97'),
(37, 10, 'Matematika', '71'),
(38, 10, 'Bahasa Indonesia', '93'),
(39, 10, 'Agama', '81'),
(40, 10, 'Bahasa Ingris', '80'),
(41, 11, 'Matematika', '96'),
(42, 11, 'Bahasa Indonesia', '75'),
(43, 11, 'Agama', '92'),
(44, 11, 'Bahasa Ingris', '71'),
(45, 12, 'Matematika', '97'),
(46, 12, 'Bahasa Indonesia', '97'),
(47, 12, 'Agama', '83'),
(48, 12, 'Bahasa Ingris', '78'),
(49, 13, 'Matematika', '95'),
(50, 13, 'Bahasa Indonesia', '95'),
(51, 13, 'Agama', '85'),
(52, 13, 'Bahasa Ingris', '76'),
(53, 14, 'Matematika', '79'),
(54, 14, 'Bahasa Indonesia', '97'),
(55, 14, 'Agama', '93'),
(56, 14, 'Bahasa Ingris', '87'),
(57, 15, 'Matematika', '95'),
(58, 15, 'Bahasa Indonesia', '89'),
(59, 15, 'Agama', '77'),
(60, 15, 'Bahasa Ingris', '75'),
(61, 16, 'Matematika', '90'),
(62, 16, 'Bahasa Indonesia', '92'),
(63, 16, 'Agama', '79'),
(64, 16, 'Bahasa Ingris', '96'),
(65, 17, 'Matematika', '89'),
(66, 17, 'Bahasa Indonesia', '71'),
(67, 17, 'Agama', '93'),
(68, 17, 'Bahasa Ingris', '75'),
(69, 18, 'Matematika', '93'),
(70, 18, 'Bahasa Indonesia', '88'),
(71, 18, 'Agama', '91'),
(72, 18, 'Bahasa Ingris', '92'),
(73, 19, 'Matematika', '75'),
(74, 19, 'Bahasa Indonesia', '84'),
(75, 19, 'Agama', '79'),
(76, 19, 'Bahasa Ingris', '82'),
(77, 20, 'Matematika', '97'),
(78, 20, 'Bahasa Indonesia', '77'),
(79, 20, 'Agama', '91'),
(80, 20, 'Bahasa Ingris', '80'),
(81, 21, 'Matematika', '97'),
(82, 21, 'Bahasa Indonesia', '86'),
(83, 21, 'Agama', '79'),
(84, 21, 'Bahasa Ingris', '97'),
(85, 22, 'Matematika', '71'),
(86, 22, 'Bahasa Indonesia', '93'),
(87, 22, 'Agama', '88'),
(88, 22, 'Bahasa Ingris', '80'),
(89, 23, 'Matematika', '71'),
(90, 23, 'Bahasa Indonesia', '81'),
(91, 23, 'Agama', '95'),
(92, 23, 'Bahasa Ingris', '83'),
(93, 24, 'Matematika', '93'),
(94, 24, 'Bahasa Indonesia', '88'),
(95, 24, 'Agama', '80'),
(96, 24, 'Bahasa Ingris', '79'),
(97, 25, 'Matematika', '98'),
(98, 25, 'Bahasa Indonesia', '74'),
(99, 25, 'Agama', '98'),
(100, 25, 'Bahasa Ingris', '79'),
(101, 26, 'Matematika', '83'),
(102, 26, 'Bahasa Indonesia', '72'),
(103, 26, 'Agama', '91'),
(104, 26, 'Bahasa Ingris', '73'),
(105, 27, 'Matematika', '95'),
(106, 27, 'Bahasa Indonesia', '94'),
(107, 27, 'Agama', '74'),
(108, 27, 'Bahasa Ingris', '79'),
(109, 28, 'Matematika', '96'),
(110, 28, 'Bahasa Indonesia', '70'),
(111, 28, 'Agama', '90'),
(112, 28, 'Bahasa Ingris', '75'),
(113, 29, 'Matematika', '88'),
(114, 29, 'Bahasa Indonesia', '94'),
(115, 29, 'Agama', '84'),
(116, 29, 'Bahasa Ingris', '93'),
(117, 30, 'Matematika', '86'),
(118, 30, 'Bahasa Indonesia', '73'),
(119, 30, 'Agama', '76'),
(120, 30, 'Bahasa Ingris', '76'),
(121, 31, 'Matematika', '94'),
(122, 31, 'Bahasa Indonesia', '77'),
(123, 31, 'Agama', '89'),
(124, 31, 'Bahasa Ingris', '94'),
(125, 32, 'Matematika', '74'),
(126, 32, 'Bahasa Indonesia', '87'),
(127, 32, 'Agama', '89'),
(128, 32, 'Bahasa Ingris', '70'),
(129, 33, 'Matematika', '97'),
(130, 33, 'Bahasa Indonesia', '82'),
(131, 33, 'Agama', '76'),
(132, 33, 'Bahasa Ingris', '72'),
(133, 34, 'Matematika', '92'),
(134, 34, 'Bahasa Indonesia', '85'),
(135, 34, 'Agama', '75'),
(136, 34, 'Bahasa Ingris', '95'),
(137, 35, 'Matematika', '90'),
(138, 35, 'Bahasa Indonesia', '88'),
(139, 35, 'Agama', '70'),
(140, 35, 'Bahasa Ingris', '75'),
(141, 36, 'Matematika', '84'),
(142, 36, 'Bahasa Indonesia', '95'),
(143, 36, 'Agama', '91'),
(144, 36, 'Bahasa Ingris', '95'),
(145, 37, 'Matematika', '88'),
(146, 37, 'Bahasa Indonesia', '86'),
(147, 37, 'Agama', '75'),
(148, 37, 'Bahasa Ingris', '95'),
(149, 38, 'Matematika', '71'),
(150, 38, 'Bahasa Indonesia', '98'),
(151, 38, 'Agama', '79'),
(152, 38, 'Bahasa Ingris', '85'),
(153, 39, 'Matematika', '85'),
(154, 39, 'Bahasa Indonesia', '75'),
(155, 39, 'Agama', '96'),
(156, 39, 'Bahasa Ingris', '94'),
(157, 40, 'Matematika', '81'),
(158, 40, 'Bahasa Indonesia', '73'),
(159, 40, 'Agama', '87'),
(160, 40, 'Bahasa Ingris', '75'),
(161, 41, 'Matematika', '92'),
(162, 41, 'Bahasa Indonesia', '79'),
(163, 41, 'Agama', '80'),
(164, 41, 'Bahasa Ingris', '94'),
(165, 42, 'Matematika', '71'),
(166, 42, 'Bahasa Indonesia', '97'),
(167, 42, 'Agama', '78'),
(168, 42, 'Bahasa Ingris', '72'),
(169, 43, 'Matematika', '84'),
(170, 43, 'Bahasa Indonesia', '76'),
(171, 43, 'Agama', '85'),
(172, 43, 'Bahasa Ingris', '93'),
(173, 44, 'Matematika', '79'),
(174, 44, 'Bahasa Indonesia', '81'),
(175, 44, 'Agama', '95'),
(176, 44, 'Bahasa Ingris', '82'),
(177, 45, 'Matematika', '98'),
(178, 45, 'Bahasa Indonesia', '95'),
(179, 45, 'Agama', '74'),
(180, 45, 'Bahasa Ingris', '75'),
(181, 46, 'Matematika', '94'),
(182, 46, 'Bahasa Indonesia', '83'),
(183, 46, 'Agama', '76'),
(184, 46, 'Bahasa Ingris', '71'),
(185, 47, 'Matematika', '84'),
(186, 47, 'Bahasa Indonesia', '73'),
(187, 47, 'Agama', '89'),
(188, 47, 'Bahasa Ingris', '70'),
(189, 48, 'Matematika', '83'),
(190, 48, 'Bahasa Indonesia', '94'),
(191, 48, 'Agama', '88'),
(192, 48, 'Bahasa Ingris', '95'),
(193, 49, 'Matematika', '72'),
(194, 49, 'Bahasa Indonesia', '76'),
(195, 49, 'Agama', '76'),
(196, 49, 'Bahasa Ingris', '89'),
(197, 50, 'Matematika', '81'),
(198, 50, 'Bahasa Indonesia', '72'),
(199, 50, 'Agama', '97'),
(200, 50, 'Bahasa Ingris', '79'),
(201, 51, 'Matematika', '87'),
(202, 51, 'Bahasa Indonesia', '96'),
(203, 51, 'Agama', '79'),
(204, 51, 'Bahasa Ingris', '97'),
(205, 52, 'Matematika', '98'),
(206, 52, 'Bahasa Indonesia', '87'),
(207, 52, 'Agama', '78'),
(208, 52, 'Bahasa Ingris', '72'),
(209, 53, 'Matematika', '96'),
(210, 53, 'Bahasa Indonesia', '84'),
(211, 53, 'Agama', '79'),
(212, 53, 'Bahasa Ingris', '73'),
(213, 54, 'Matematika', '93'),
(214, 54, 'Bahasa Indonesia', '97'),
(215, 54, 'Agama', '77'),
(216, 54, 'Bahasa Ingris', '95'),
(217, 55, 'Matematika', '75'),
(218, 55, 'Bahasa Indonesia', '92'),
(219, 55, 'Agama', '91'),
(220, 55, 'Bahasa Ingris', '85'),
(221, 56, 'Matematika', '75'),
(222, 56, 'Bahasa Indonesia', '90'),
(223, 56, 'Agama', '90'),
(224, 56, 'Bahasa Ingris', '76'),
(225, 57, 'Matematika', '83'),
(226, 57, 'Bahasa Indonesia', '75'),
(227, 57, 'Agama', '94'),
(228, 57, 'Bahasa Ingris', '91'),
(229, 58, 'Matematika', '95'),
(230, 58, 'Bahasa Indonesia', '86'),
(231, 58, 'Agama', '95'),
(232, 58, 'Bahasa Ingris', '93'),
(233, 59, 'Matematika', '75'),
(234, 59, 'Bahasa Indonesia', '74'),
(235, 59, 'Agama', '89'),
(236, 59, 'Bahasa Ingris', '70'),
(237, 60, 'Matematika', '74'),
(238, 60, 'Bahasa Indonesia', '81'),
(239, 60, 'Agama', '87'),
(240, 60, 'Bahasa Ingris', '86'),
(241, 61, 'Matematika', '98'),
(242, 61, 'Bahasa Indonesia', '88'),
(243, 61, 'Agama', '92'),
(244, 61, 'Bahasa Ingris', '77'),
(245, 62, 'Matematika', '80'),
(246, 62, 'Bahasa Indonesia', '82'),
(247, 62, 'Agama', '95'),
(248, 62, 'Bahasa Ingris', '88'),
(249, 63, 'Matematika', '97'),
(250, 63, 'Bahasa Indonesia', '72'),
(251, 63, 'Agama', '70'),
(252, 63, 'Bahasa Ingris', '71'),
(253, 64, 'Matematika', '91'),
(254, 64, 'Bahasa Indonesia', '98'),
(255, 64, 'Agama', '74'),
(256, 64, 'Bahasa Ingris', '73'),
(257, 65, 'Matematika', '86'),
(258, 65, 'Bahasa Indonesia', '85'),
(259, 65, 'Agama', '94'),
(260, 65, 'Bahasa Ingris', '80'),
(261, 66, 'Matematika', '98'),
(262, 66, 'Bahasa Indonesia', '77'),
(263, 66, 'Agama', '87'),
(264, 66, 'Bahasa Ingris', '81'),
(265, 67, 'Matematika', '79'),
(266, 67, 'Bahasa Indonesia', '70'),
(267, 67, 'Agama', '75'),
(268, 67, 'Bahasa Ingris', '82'),
(269, 68, 'Matematika', '78'),
(270, 68, 'Bahasa Indonesia', '78'),
(271, 68, 'Agama', '74'),
(272, 68, 'Bahasa Ingris', '72'),
(273, 69, 'Matematika', '82'),
(274, 69, 'Bahasa Indonesia', '73'),
(275, 69, 'Agama', '92'),
(276, 69, 'Bahasa Ingris', '73'),
(277, 70, 'Matematika', '77'),
(278, 70, 'Bahasa Indonesia', '81'),
(279, 70, 'Agama', '94'),
(280, 70, 'Bahasa Ingris', '98'),
(281, 71, 'Matematika', '96'),
(282, 71, 'Bahasa Indonesia', '82'),
(283, 71, 'Agama', '82'),
(284, 71, 'Bahasa Ingris', '80'),
(285, 72, 'Matematika', '73'),
(286, 72, 'Bahasa Indonesia', '87'),
(287, 72, 'Agama', '84'),
(288, 72, 'Bahasa Ingris', '80'),
(289, 73, 'Matematika', '78'),
(290, 73, 'Bahasa Indonesia', '88'),
(291, 73, 'Agama', '71'),
(292, 73, 'Bahasa Ingris', '82'),
(293, 74, 'Matematika', '83'),
(294, 74, 'Bahasa Indonesia', '84'),
(295, 74, 'Agama', '81'),
(296, 74, 'Bahasa Ingris', '87'),
(297, 75, 'Matematika', '85'),
(298, 75, 'Bahasa Indonesia', '82'),
(299, 75, 'Agama', '88'),
(300, 75, 'Bahasa Ingris', '79'),
(301, 76, 'Matematika', '79'),
(302, 76, 'Bahasa Indonesia', '79'),
(303, 76, 'Agama', '94'),
(304, 76, 'Bahasa Ingris', '87'),
(305, 77, 'Matematika', '86'),
(306, 77, 'Bahasa Indonesia', '91'),
(307, 77, 'Agama', '92'),
(308, 77, 'Bahasa Ingris', '87'),
(309, 78, 'Matematika', '94'),
(310, 78, 'Bahasa Indonesia', '93'),
(311, 78, 'Agama', '83'),
(312, 78, 'Bahasa Ingris', '84'),
(313, 79, 'Matematika', '92'),
(314, 79, 'Bahasa Indonesia', '87'),
(315, 79, 'Agama', '75'),
(316, 79, 'Bahasa Ingris', '81'),
(317, 80, 'Matematika', '87'),
(318, 80, 'Bahasa Indonesia', '96'),
(319, 80, 'Agama', '93'),
(320, 80, 'Bahasa Ingris', '78'),
(321, 81, 'Matematika', '86'),
(322, 81, 'Bahasa Indonesia', '77'),
(323, 81, 'Agama', '71'),
(324, 81, 'Bahasa Ingris', '77'),
(325, 82, 'Matematika', '75'),
(326, 82, 'Bahasa Indonesia', '70'),
(327, 82, 'Agama', '76'),
(328, 82, 'Bahasa Ingris', '73'),
(329, 83, 'Matematika', '98'),
(330, 83, 'Bahasa Indonesia', '87'),
(331, 83, 'Agama', '80'),
(332, 83, 'Bahasa Ingris', '80'),
(333, 84, 'Matematika', '98'),
(334, 84, 'Bahasa Indonesia', '97'),
(335, 84, 'Agama', '81'),
(336, 84, 'Bahasa Ingris', '97'),
(337, 85, 'Matematika', '89'),
(338, 85, 'Bahasa Indonesia', '96'),
(339, 85, 'Agama', '73'),
(340, 85, 'Bahasa Ingris', '97'),
(341, 86, 'Matematika', '90'),
(342, 86, 'Bahasa Indonesia', '93'),
(343, 86, 'Agama', '79'),
(344, 86, 'Bahasa Ingris', '74'),
(345, 87, 'Matematika', '92'),
(346, 87, 'Bahasa Indonesia', '90'),
(347, 87, 'Agama', '80'),
(348, 87, 'Bahasa Ingris', '95'),
(349, 88, 'Matematika', '88'),
(350, 88, 'Bahasa Indonesia', '72'),
(351, 88, 'Agama', '80'),
(352, 88, 'Bahasa Ingris', '85'),
(353, 89, 'Matematika', '90'),
(354, 89, 'Bahasa Indonesia', '80'),
(355, 89, 'Agama', '92'),
(356, 89, 'Bahasa Ingris', '71'),
(357, 90, 'Matematika', '75'),
(358, 90, 'Bahasa Indonesia', '79'),
(359, 90, 'Agama', '89'),
(360, 90, 'Bahasa Ingris', '82');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Dra. Hj. Farida', 'Ciawigebang', '089877676565', 'farida', 'farida', 2),
(2, 'Edy Muharyanto, S.Pd', 'Ciawigebang', '089876612343', 'edi', 'edi', 2),
(3, 'Dra. Tanisari', 'Ciawigebang', '089877656543', 'tanisari', 'tanisari', 2),
(4, 'Iwan Setiawan, S.Pd', 'Ciawigebang', '087899098765', 'iwan', 'iwan', 2),
(5, 'Repi Sri Astuti, S.Pd', 'Ciawigebang', '089987654346', 'repi', 'repi', 2),
(6, 'Ika Kurniawati, S.Pd.I', 'Ciawigebang', '085677876545', 'ika', 'ika', 2),
(7, 'Zamzam Nurzaman', 'Ciawigebang', '087112321890', 'zamzam', 'zamzan', 2),
(8, 'H. Sofyan Haerudin, M.Pd', 'Ciawigebang', '089877656543', 'sofyan', 'sofyan', 2),
(9, 'Imas Maesyaroh, M.Pd.I', 'Ciawigebang', '089877321232', 'imas', 'imas', 2),
(10, 'Admin', 'Ciawigebang', '089987656121', 'admin', 'admin', 1),
(11, 'Drs. H. Iman Nuryaman', 'Ciawigebang', '085123435567', 'kepalasekolah', 'kepalasekolah', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisis_siswa`
--
ALTER TABLE `analisis_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `kriteria_absensi`
--
ALTER TABLE `kriteria_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `kriteria_keaktifan`
--
ALTER TABLE `kriteria_keaktifan`
  ADD PRIMARY KEY (`id_keaktifan`);

--
-- Indeks untuk tabel `kriteria_kejuaraan`
--
ALTER TABLE `kriteria_kejuaraan`
  ADD PRIMARY KEY (`id_kejuaraan`);

--
-- Indeks untuk tabel `kriteria_kepribadian`
--
ALTER TABLE `kriteria_kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`);

--
-- Indeks untuk tabel `kriteria_raport`
--
ALTER TABLE `kriteria_raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indeks untuk tabel `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `analisis_siswa`
--
ALTER TABLE `analisis_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `kriteria_absensi`
--
ALTER TABLE `kriteria_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kriteria_keaktifan`
--
ALTER TABLE `kriteria_keaktifan`
  MODIFY `id_keaktifan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kriteria_kejuaraan`
--
ALTER TABLE `kriteria_kejuaraan`
  MODIFY `id_kejuaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteria_kepribadian`
--
ALTER TABLE `kriteria_kepribadian`
  MODIFY `id_kepribadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteria_raport`
--
ALTER TABLE `kriteria_raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
