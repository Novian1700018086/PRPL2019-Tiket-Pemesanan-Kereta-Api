-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 09:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_kereta`
--

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `kode` int(11) NOT NULL,
  `asal` varchar(15) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `harga` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`kode`, `asal`, `tujuan`, `kelas`, `harga`, `tanggal`, `waktu`) VALUES
(1, 'jakarta', 'yogyakarta', 'Ekonomi', 40000, '2019-03-10', '17:30:00'),
(2, 'Solo', 'semarang', 'Eksklusif', 200000, '2019-02-11', '20:00:00'),
(3, 'yogyakarta', 'semarang', 'bisnis', 30000, '2019-05-30', '21:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `atas_nama` varchar(10) NOT NULL,
  `usia` int(3) NOT NULL,
  `no_kk` int(13) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `jml_penumpang` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `nama`, `atas_nama`, `usia`, `no_kk`, `no_hp`, `tgl_pesan`, `jml_penumpang`) VALUES
(1, 'Novian', 'ian', 19, 921038, 92381230, '2019-01-02 07:29:00', 1),
(2, 'Alif', 'AL', 17, 333200293, 85628329, '2019-05-25 11:19:07', 1),
(3, 'feni', 'sas', 20, 9567, 8976, '2019-05-14 13:00:00', 1),
(4, 'ai', 'ain', 20, 875343, 8932467, '2019-07-25 14:10:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no` int(11) NOT NULL,
  `asal` varchar(15) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `jml_pesan` int(11) NOT NULL,
  `tot_bayar` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `tot_setdiskon` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no`, `asal`, `tujuan`, `kelas`, `harga`, `jml_pesan`, `tot_bayar`, `diskon`, `tot_setdiskon`, `bayar`, `kembalian`) VALUES
(2, 'jogja', 'jakarta', 'ekonomi', 20000, 2, 40000, 10, 36000, 55000, 15000),
(3, 'yogyakarta', 'semarang', 'bisnis', 30000, 2, 60000, 10, 54000, 100000, 40000),
(4, 'yogyakarta', 'surabaya', 'bisnis', 35000, 1, 35000, 10, 31500, 50000, 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
