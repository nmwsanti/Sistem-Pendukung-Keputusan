-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 01:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsspktopsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `n_alternatif` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode`, `n_alternatif`, `jenis_kelamin`, `fakultas`, `prodi`) VALUES
(1, '002', 'Ni Made Widiasanti', 'Perempuan', 'Vokasi', 'D4 Manajemen Informatika'),
(3, '004', 'Ni Nyoman Triyani', 'Perempuan', 'Matematika dan IPA', 'S1 Kimia'),
(7, '079', 'Dananjaya', 'Laki-Laki', 'Hukum', 'S1 Hukum');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_score`
--

CREATE TABLE `alternatif_score` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `c01` varchar(10) NOT NULL,
  `c02` varchar(10) NOT NULL,
  `c03` varchar(10) NOT NULL,
  `c04` varchar(10) NOT NULL,
  `c05` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif_score`
--

INSERT INTO `alternatif_score` (`id`, `kode`, `c01`, `c02`, `c03`, `c04`, `c05`) VALUES
(1, '002', '5', '2', '1', '4', '1'),
(2, '004', '5', '1', '1', '3', '1'),
(6, '079', '5', '3', '1', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `n_kriteria` varchar(100) NOT NULL,
  `atribut` varchar(50) NOT NULL,
  `bobot` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode`, `n_kriteria`, `atribut`, `bobot`) VALUES
(1, 'C01', 'Jumlah Penghasilan Orangtua', 'cost', 5),
(4, 'C02', 'Jumlah Tanggungan Orangtua', 'benefit', 3),
(5, 'C03', 'Jarak Tempat Tinggal', 'cost', 4),
(6, 'C04', 'Nilai Rata-rata Ujian Nasional', 'benefit', 2),
(10, 'C05', 'Kesanggupan Tinggal di Asrama', 'benefit', 5);

-- --------------------------------------------------------

--
-- Table structure for table `msi`
--

CREATE TABLE `msi` (
  `id` int(11) NOT NULL,
  `s_ideal` varchar(10) NOT NULL,
  `C01_cost` varchar(10) NOT NULL,
  `C02_benefit` varchar(10) NOT NULL,
  `C03_cost` varchar(10) NOT NULL,
  `C04_benefit` varchar(10) NOT NULL,
  `C05_benefit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msi`
--

INSERT INTO `msi` (`id`, `s_ideal`, `C01_cost`, `C02_benefit`, `C03_cost`, `C04_benefit`, `C05_benefit`) VALUES
(1, 'positif', '2.88675', '2.40535', '2.3094', '1.24939', '2.88675'),
(2, 'negatif', '2.88675', '0.80178', '2.3094', '0.93704', '2.88675');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuadrat`
--

CREATE TABLE `tb_kuadrat` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `c01` varchar(10) NOT NULL,
  `c02` varchar(10) NOT NULL,
  `c03` varchar(10) NOT NULL,
  `c04` varchar(10) NOT NULL,
  `c05` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kuadrat`
--

INSERT INTO `tb_kuadrat` (`id`, `kode`, `c01`, `c02`, `c03`, `c04`, `c05`) VALUES
(1, '002', '25', '4', '1', '16', '1'),
(2, '004', '25', '1', '1', '9', '1'),
(7, '079', '25', '9', '1', '16', '1'),
(8, 'Total', '75', '14', '3', '41', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nlbobot`
--

CREATE TABLE `tb_nlbobot` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `c01` varchar(10) NOT NULL,
  `c02` varchar(10) NOT NULL,
  `c03` varchar(10) NOT NULL,
  `c04` varchar(10) NOT NULL,
  `c05` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nlbobot`
--

INSERT INTO `tb_nlbobot` (`id`, `kode`, `c01`, `c02`, `c03`, `c04`, `c05`) VALUES
(1, '002', '2.88675', '1.60357', '2.3094', '1.24939', '2.88675'),
(2, '004', '2.88675', '0.80178', '2.3094', '0.93704', '2.88675'),
(3, '079', '2.88675', '2.40535', '2.3094', '1.24939', '2.88675');

-- --------------------------------------------------------

--
-- Table structure for table `tb_normalisasi`
--

CREATE TABLE `tb_normalisasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `c01` varchar(10) NOT NULL,
  `c02` varchar(10) NOT NULL,
  `c03` varchar(10) NOT NULL,
  `c04` varchar(10) NOT NULL,
  `c05` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_normalisasi`
--

INSERT INTO `tb_normalisasi` (`id`, `kode`, `c01`, `c02`, `c03`, `c04`, `c05`) VALUES
(1, '002', '0.57735', '0.53452', '0.57735', '0.6247', '0.57735'),
(2, '004', '0.57735', '0.26726', '0.57735', '0.46852', '0.57735'),
(5, '079', '0.57735', '0.80178', '0.57735', '0.6247', '0.57735');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `positif` varchar(10) NOT NULL,
  `negatif` varchar(10) NOT NULL,
  `preferensi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `kode`, `positif`, `negatif`, `preferensi`) VALUES
(1, '002', '0.80178', '0.86048', '0.51765'),
(2, '004', '1.6337', '0', '0'),
(3, '079', '0', '1.6337', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Cx.NTH13ZCHhWzwvjM507u3/8ZEERgYgMttDkQQzyLeMSQBR.1eFe'),
(2, 'admin', 'admin@gmail.com', '$2y$10$Cx.NTH13ZCHhWzwvjM507u3/8ZEERgYgMttDkQQzyLeMSQBR.1eFe'),
(3, 'widia.santi5@gmail.c', 'Santi', 'ae1d4b431ead52e5ee1788010e8ec110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif_score`
--
ALTER TABLE `alternatif_score`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msi`
--
ALTER TABLE `msi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kuadrat`
--
ALTER TABLE `tb_kuadrat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nlbobot`
--
ALTER TABLE `tb_nlbobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alternatif_score`
--
ALTER TABLE `alternatif_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `msi`
--
ALTER TABLE `msi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kuadrat`
--
ALTER TABLE `tb_kuadrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_nlbobot`
--
ALTER TABLE `tb_nlbobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
