-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 10:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirkulasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bagian` smallint(6) NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `Name`) VALUES
(2, 'TEKNIK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` smallint(6) NOT NULL,
  `id_operator` smallint(6) DEFAULT NULL,
  `id_tipe_barang` smallint(6) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Jumlah` int(3) DEFAULT NULL,
  `Satuan` varchar(10) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Creat_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_operator`, `id_tipe_barang`, `Name`, `Jumlah`, `Satuan`, `Harga`, `Creat_at`, `Update_at`, `deleted`) VALUES
(2, 1, 1, 'sdadsadad', 12, 'RIM', 200000, '2019-12-04 14:31:55', '2019-12-04 15:15:28', 0),
(3, 1, 1, 'dsdsdsd', 12, 'RIM', 900000, '2019-12-04 14:34:24', '2019-12-04 15:15:32', 0),
(4, 1, 1, 'dsdsdsd', 121212, 'Buah', 2121212, '2019-12-04 14:35:58', '2019-12-04 15:15:35', 0),
(5, 1, 1, 'dsdsdsdsdsdsdsd', 2000024, 'RIM', 20000, '2019-12-04 15:15:02', '2019-12-04 15:20:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_keluar`
--

CREATE TABLE `tb_barang_keluar` (
  `id_barang_keluar` smallint(6) NOT NULL,
  `id_bagian` smallint(6) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Jumlah` int(3) DEFAULT NULL,
  `Satuan` varchar(10) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Creat_at` date DEFAULT NULL,
  `Update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_barang_masuk` smallint(6) NOT NULL,
  `id_barang` smallint(6) DEFAULT NULL,
  `Jumlah` int(3) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Id_tipe_barang` smallint(6) DEFAULT NULL,
  `Creat_at` date DEFAULT NULL,
  `Update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_barang_masuk`, `id_barang`, `Jumlah`, `Harga`, `Id_tipe_barang`, `Creat_at`, `Update_at`) VALUES
(1, 5, 12, 1221212, 1, '2019-12-04', NULL),
(2, 5, 2000000, 121212121, 1, '2019-12-04', NULL),
(3, 5, 24, 20000, 1, '2019-12-04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_level` smallint(6) NOT NULL,
  `Description` varchar(40) DEFAULT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_level`, `Description`, `Creat_at`, `Update_at`) VALUES
(1, 'Admin', '2019-11-29 18:20:52', NULL),
(3, 'Super Admin', '2019-11-29 18:20:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepala_cabang`
--

CREATE TABLE `tb_kepala_cabang` (
  `id_kepala_cabang` smallint(6) NOT NULL,
  `id_operator` smallint(6) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Email_kepala_cabang` varchar(30) DEFAULT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_operator`
--

CREATE TABLE `tb_operator` (
  `id_operator` smallint(6) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `email_operator` varchar(30) DEFAULT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Off',
  `Creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `Name`, `Gender`, `Address`, `email_operator`, `Status`, `Creat_at`, `Update_at`) VALUES
(1, 'faris', 'L', 'Gunungkidul', 'ikhsanalfarishy@gmail.com', 'Aktif', '2019-11-28 09:36:42', '2019-11-28 09:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_barang`
--

CREATE TABLE `tb_tipe_barang` (
  `id_tipe_barang` smallint(6) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tipe_barang`
--

INSERT INTO `tb_tipe_barang` (`id_tipe_barang`, `Name`, `Creat_at`, `Update_at`) VALUES
(1, 'ATK', '2019-11-27 08:26:08', '2019-11-27 15:26:08'),
(2, 'Cetak', '2019-12-04 09:04:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` smallint(6) NOT NULL,
  `id_operator` smallint(6) DEFAULT NULL,
  `id_level` smallint(6) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `Status` varchar(10) DEFAULT 'NotAprove'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_operator`, `id_level`, `username`, `password`, `email`, `creat_at`, `update_at`, `Status`) VALUES
(1, 1, 1, 'faris', 'faris', NULL, '2019-11-26 19:07:16', NULL, 'Aprove');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_operator` (`id_operator`),
  ADD KEY `id_tipe_barang` (`id_tipe_barang`);

--
-- Indexes for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`),
  ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD KEY `id_barang_keluar` (`id_barang`),
  ADD KEY `Id_tipe_barang` (`Id_tipe_barang`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_kepala_cabang`
--
ALTER TABLE `tb_kepala_cabang`
  ADD PRIMARY KEY (`id_kepala_cabang`),
  ADD KEY `Id_operator` (`id_operator`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tb_tipe_barang`
--
ALTER TABLE `tb_tipe_barang`
  ADD PRIMARY KEY (`id_tipe_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_operator` (`id_operator`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bagian` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  MODIFY `id_barang_keluar` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  MODIFY `id_barang_masuk` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_level` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kepala_cabang`
--
ALTER TABLE `tb_kepala_cabang`
  MODIFY `id_kepala_cabang` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tipe_barang`
--
ALTER TABLE `tb_tipe_barang`
  MODIFY `id_tipe_barang` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_tipe_barang`) REFERENCES `tb_tipe_barang` (`id_tipe_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`id_operator`) REFERENCES `tb_operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD CONSTRAINT `tb_barang_keluar_ibfk_1` FOREIGN KEY (`id_bagian`) REFERENCES `tb_bagian` (`id_bagian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD CONSTRAINT `tb_barang_masuk_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_kepala_cabang`
--
ALTER TABLE `tb_kepala_cabang`
  ADD CONSTRAINT `tb_kepala_cabang_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `tb_operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_hak_akses` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_user_ibfk_2` FOREIGN KEY (`id_operator`) REFERENCES `tb_operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
