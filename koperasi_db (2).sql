-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 12:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
(1111, 'admin', 'admin'),
(1112, 'Sonya Sipahutar', 'sonyasipahutar');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `alamat_lengkap` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `foto_ktp` varchar(500) NOT NULL,
  `slip_gaji` varchar(500) DEFAULT NULL,
  `kartu_keluarga` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat_lengkap`, `tanggal_lahir`, `email`, `no_telepon`, `foto_ktp`, `slip_gaji`, `kartu_keluarga`) VALUES
(1101, 'Sonya Yanti Karunia Sipahutar', 'Silangkitang, Jln Balige KM 11', '2001-01-08', 'sonyasipahutar8@gmail.com', '082277879777', '', '2.PNG', 'IMG-20190209-WA0007_crop_400x600.jpg'),
(1102, 'Maria', 'Balige', '2001-05-08', 'maria90@gmail.com', '082287991107', '', '', ''),
(1103, 'Dian Sitanggang', 'Siantar', '2001-05-12', 'diansitanggang01@gmail.com', '082287991107', 'download.jpg', '', ''),
(1104, 'Ajuanda Sitorus', 'Siantar', '2001-05-06', 'diansitanggang01@gmail.com', '082222444544', 'music-theme-dl14.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pinjaman`
--

CREATE TABLE `jenis_pinjaman` (
  `id_jenis_pinjam` char(11) NOT NULL,
  `nama_pinjaman` varchar(50) NOT NULL,
  `lama_angsuran` int(11) NOT NULL,
  `maks_pinjam` double NOT NULL,
  `bunga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pinjaman`
--

INSERT INTO `jenis_pinjaman` (`id_jenis_pinjam`, `nama_pinjaman`, `lama_angsuran`, `maks_pinjam`, `bunga`) VALUES
('P001', 'biasa', 4, 2000000, 2),
('P002', 'Menengah', 8, 4000000, 4),
('P003', 'full', 12, 3000000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_simpanan`
--

CREATE TABLE `jenis_simpanan` (
  `id_jenis_simpan` char(11) NOT NULL,
  `nama_simpanan` varchar(50) NOT NULL,
  `besar_simpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_simpanan`
--

INSERT INTO `jenis_simpanan` (`id_jenis_simpan`, `nama_simpanan`, `besar_simpanan`) VALUES
('S001', 'pokok', 10000),
('S002', 'wajib', 7000),
('S001', 'sukarela', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `jumlah_pinjaman` varchar(100) NOT NULL,
  `jenis_pinjaman` varchar(255) NOT NULL,
  `angsuran_dari` varchar(20) NOT NULL,
  `lama_angsuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `anggota_id`, `jumlah_pinjaman`, `jenis_pinjaman`, `angsuran_dari`, `lama_angsuran`) VALUES
(41, 1101, '1000000', 'biasa', 'Bank BRI', '2');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jenis_simpanan` varchar(100) NOT NULL,
  `jumlah_simpanan` varchar(50) NOT NULL,
  `tanggal_simpanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `id_anggota`, `nama_anggota`, `jenis_simpanan`, `jumlah_simpanan`, `tanggal_simpanan`) VALUES
(51, 1101, 'Sonya Sipahutar', 'wajib', '70000', '2020-05-12'),
(52, 1101, 'Sonya Sipahutar', 'pokok', '10000', '2020-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `anggota_id` (`anggota_id`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `FK_pinjaman` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `FK_simpanan` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
