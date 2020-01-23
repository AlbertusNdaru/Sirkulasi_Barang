-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 01:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
  `id_bagian` varchar(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `Name`) VALUES
('BGN001', 'Teknik'),
('BGN002', 'LL'),
('BGN003', 'OPS'),
('BGN004', 'IS'),
('BGN005', 'SSQ'),
('BGN006', 'GSE'),
('BGN007', 'EMPU'),
('BGN008', 'AVSEC'),
('BGN009', 'PASASI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(10) NOT NULL,
  `id_tipe_barang` varchar(10) NOT NULL,
  `id_operator` smallint(6) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT '0',
  `id_satuan` smallint(6) DEFAULT NULL,
  `Harga` int(11) DEFAULT '0',
  `Create_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_tipe_barang`, `id_operator`, `Name`, `Jumlah`, `id_satuan`, `Harga`, `Create_at`, `Update_at`, `deleted`) VALUES
('ATK001', 'TIPE002', 13, 'Pensil', 0, 1, 0, '2020-01-23 19:05:59', '2020-01-23 19:05:59', 1),
('ATK002', 'TIPE002', 13, 'Pensil', 0, 1, 0, '2020-01-23 19:17:03', '2020-01-23 19:17:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_keluar`
--

CREATE TABLE `tb_barang_keluar` (
  `id_barang_keluar` smallint(6) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `id_bagian` varchar(10) NOT NULL,
  `Jumlah` int(3) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `id_satuan` smallint(6) NOT NULL,
  `Create_at` date DEFAULT NULL,
  `Update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_barang_masuk` smallint(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `Jumlah` int(3) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `id_satuan` smallint(6) NOT NULL,
  `Create_at` date DEFAULT NULL,
  `Update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_rusak`
--

CREATE TABLE `tb_barang_rusak` (
  `id_barang_rusak` smallint(10) NOT NULL,
  `id_barang` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `id_satuan` smallint(6) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_level` smallint(6) NOT NULL,
  `Description` varchar(40) DEFAULT NULL,
  `Create_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_level`, `Description`, `Create_at`, `Update_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Operator', NULL, NULL),
(3, 'Kepala Cabang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_konversi`
--

CREATE TABLE `tb_konversi` (
  `id_konversi` smallint(6) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `id_satuan` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konversi`
--

INSERT INTO `tb_konversi` (`id_konversi`, `id_barang`, `id_satuan`) VALUES
(1, 'ATK001', 1),
(2, 'ATK001', 6);

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
  `Status` varchar(10) NOT NULL DEFAULT 'Aktif',
  `Create_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `Name`, `Gender`, `Address`, `email_operator`, `Status`, `Create_at`, `Update_at`) VALUES
(13, 'Admin', 'L', 'Yogyakarta', 'admin@gmail.com', 'Aktif', '2020-01-22 00:45:57', '2020-01-22 00:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` smallint(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Name_satuan` varchar(20) NOT NULL,
  `nilai_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `Name`, `Name_satuan`, `nilai_satuan`) VALUES
(1, 'PCS', '', 1),
(2, 'BOTOL', '', 1),
(3, 'RIM', '', 1),
(4, 'DOS', '', 12),
(5, 'pack', '', 10),
(6, 'PACK 10', 'PACK', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_barang`
--

CREATE TABLE `tb_tipe_barang` (
  `id_tipe_barang` varchar(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Creat_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tipe_barang`
--

INSERT INTO `tb_tipe_barang` (`id_tipe_barang`, `Name`, `Creat_at`, `Update_at`) VALUES
('TIPE001', 'PERKOM', '2019-12-18 18:16:34', NULL),
('TIPE002', 'ATK', '2019-12-18 18:16:41', '2020-01-07 01:31:28'),
('TIPE003', 'CETAK', '2019-12-18 18:16:48', '2020-01-10 03:04:56');

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
  `creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  `Status` varchar(10) DEFAULT 'NotAprove'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_operator`, `id_level`, `username`, `password`, `email`, `creat_at`, `update_at`, `Status`) VALUES
(1, 13, 1, 'Admin', '12345', NULL, '2020-01-21 17:47:19', NULL, 'Aprove');

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
  ADD KEY `id_tipe_barang` (`id_tipe_barang`),
  ADD KEY `id_operator` (`id_operator`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`),
  ADD KEY `id_bagian` (`id_bagian`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD KEY `id_barang_keluar` (`id_barang`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `tb_barang_rusak`
--
ALTER TABLE `tb_barang_rusak`
  ADD PRIMARY KEY (`id_barang_rusak`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  ADD PRIMARY KEY (`id_konversi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

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
-- AUTO_INCREMENT for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  MODIFY `id_barang_keluar` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  MODIFY `id_barang_masuk` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang_rusak`
--
ALTER TABLE `tb_barang_rusak`
  MODIFY `id_barang_rusak` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_level` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  MODIFY `id_konversi` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `id_tipebarang` FOREIGN KEY (`id_tipe_barang`) REFERENCES `tb_tipe_barang` (`id_tipe_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `tb_operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`);

--
-- Constraints for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD CONSTRAINT `tb_barang_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_keluar_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `tb_bagian` (`id_bagian`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_keluar_ibfk_3` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`);

--
-- Constraints for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD CONSTRAINT `tb_barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_masuk_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`);

--
-- Constraints for table `tb_barang_rusak`
--
ALTER TABLE `tb_barang_rusak`
  ADD CONSTRAINT `id_barangrusak` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_rusak_ibfk_1` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  ADD CONSTRAINT `tb_konversi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_konversi_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`) ON DELETE CASCADE ON UPDATE CASCADE;

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
