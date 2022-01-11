-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2022 at 04:18 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merk_barang` varchar(255) NOT NULL,
  `tgl_barang` varchar(100) NOT NULL,
  `jumlah_barang` char(50) NOT NULL,
  `ket_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_ruangan`, `nama_barang`, `merk_barang`, `tgl_barang`, `jumlah_barang`, `ket_barang`) VALUES
(1, 4, 'Kipas Angin ', 'Miyako', '2021-12-14', '50', ''),
(2, 3, 'Meja', 'tidak ', '2021-12-10', '200', ''),
(3, 4, 'Meja', '-', '2021-12-15', '500', '');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `ket_gedung` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `ket_gedung`) VALUES
(3, 'D3-FMIPA', 'baik'),
(6, 'D4-FMIPA', 'sedang direnovasi'),
(7, 'D5-FMIPA', 'Renovasi');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `nama_inventaris` varchar(255) NOT NULL,
  `tgl_inventaris` varchar(100) NOT NULL,
  `ket_inventaris` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `id_ruangan`, `nama_inventaris`, `tgl_inventaris`, `ket_inventaris`) VALUES
(3, 3, 'Inventaris Ruang Jarkom', '2021-12-24', 'baru'),
(4, 2, 'Inventaris Ruang D3', '2021-12-25', ''),
(5, 3, 'Inventaris Ruang D3', '2021-12-18', ''),
(6, 4, 'Inventaris Ruang2', '2021-12-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `tgl_peminjaman` varchar(100) NOT NULL,
  `ket_peminjaman` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_inventaris`, `nama_peminjam`, `tgl_peminjaman`, `ket_peminjaman`) VALUES
(4, 6, 5, 'Afan', '2021-12-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pengembali` varchar(255) NOT NULL,
  `tgl_kembali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `id_user`, `nama_pengembali`, `tgl_kembali`) VALUES
(1, 1, 6, 'Suwandi', '2021-12-03'),
(2, 3, 6, 'Afan', '2021-12-18'),
(3, 4, 6, 'Nur Afan ', '2021-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `id_gedung` int(11) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `ket_ruangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `id_gedung`, `nama_ruangan`, `ket_ruangan`) VALUES
(3, 2, 'R301', ''),
(4, 2, 'Ruang2', ''),
(5, 3, 'Ruang 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `telp_user` char(100) NOT NULL,
  `level_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `telp_user`, `level_user`) VALUES
(3, 'Fidya Nur S', 'Jepara', '032154479953', 'Mahasiswa'),
(4, 'Mario E. Belipati', 'Jepara, Jawa Tengah ', '0215489635', 'Mahasiswa'),
(5, 'Rifki Anugraha S', 'Semarang, Jawa Tengah ', '02156987456', 'Mahasiswa'),
(7, 'Nur Afan Syarifudin ', 'Magelang, Jawa Tangah', '0215489632445', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
