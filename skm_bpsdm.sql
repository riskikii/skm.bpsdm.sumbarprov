-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Feb 2023 pada 09.14
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skm_bpsdm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_skm`
--

CREATE TABLE `jawaban_skm` (
  `id_skm` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `sumber_layanan` varchar(50) NOT NULL,
  `perbaikan` varchar(100) NOT NULL,
  `saran` varchar(1000) NOT NULL,
  `rating` int(1) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_skm`
--

INSERT INTO `jawaban_skm` (`id_skm`, `nama`, `email`, `usia`, `pendidikan`, `pekerjaan`, `jenis_kelamin`, `sumber_layanan`, `perbaikan`, `saran`, `rating`, `CreatedDate`) VALUES
(1, 'Rizki Juni Darmawan', 'riskijd21@gmail.com', 19, 'D4/S1', 'Pelajar/Mahasiswa', 'Laki-Laki', 'Datang Langsung', 'Produk Layanan', 'Semoga semakin sukses selalu', 5, '2023-02-17 08:13:25'),
(2, 'Alwi Habibie Gunawan', 'alwie21@gmail.com', 19, 'D4/S1', 'Wiraswasta', 'Laki-Laki', 'E-mail', 'Produk Layanan', 'produk yang dimiliki dapat dikelola dengan baik', 5, '2023-02-17 08:13:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin bpsdm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban_skm`
--
ALTER TABLE `jawaban_skm`
  ADD PRIMARY KEY (`id_skm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_skm`
--
ALTER TABLE `jawaban_skm`
  MODIFY `id_skm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
