-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 05:25 AM
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
  `id_bagian` varchar(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `Name`) VALUES
('BGN001', 'Teknik'),
('BGN002', 'ENUM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(10) NOT NULL,
  `id_operator` varchar(10) NOT NULL,
  `id_tipe_barang` varchar(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT 0,
  `Satuan` varchar(10) DEFAULT NULL,
  `Harga` int(11) DEFAULT 0,
  `Create_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_operator`, `id_tipe_barang`, `Name`, `Jumlah`, `Satuan`, `Harga`, `Create_at`, `Update_at`, `deleted`) VALUES
('BRG001', '1', 'TIPE001', 'sadsadasdasdsadsadas', 14, 'RIM', 300000, '2019-12-09 10:26:25', NULL, 0),
('BRG002', '1', 'TIPE002', 'dsdsdsd', 20, 'RIM', 120000, '2019-12-09 10:46:52', '2019-12-09 15:32:06', 0),
('BRG003', '1', 'TIPE001', 'sdasdadasd', 11, 'RIM', 20000, '2019-12-09 15:42:35', '2019-12-09 15:43:38', 0),
('BRG004', '4', 'TIPE001', 'wwwwwww', 0, 'RIM', 0, '2019-12-11 21:12:55', NULL, 1);

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
  `Create_at` date DEFAULT NULL,
  `Update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_keluar`
--

INSERT INTO `tb_barang_keluar` (`id_barang_keluar`, `id_barang`, `id_bagian`, `Jumlah`, `Harga`, `Create_at`, `Update_at`) VALUES
(3, 'BRG001', 'BGN002', 12, 120000, '2019-12-09', NULL),
(4, 'BRG002', 'BGN002', 4, 120000, '2019-12-09', NULL),
(5, 'BRG003', 'BGN001', 7, 30000, '2019-12-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_barang_masuk` smallint(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `Jumlah` int(3) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Create_at` date DEFAULT NULL,
  `Update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_barang_masuk`, `id_barang`, `Jumlah`, `Harga`, `Create_at`, `Update_at`) VALUES
(1, 'BRG001', 12, 120000, '2019-12-09', NULL),
(2, 'BRG002', 12, 120000, '2019-12-09', NULL),
(3, 'BRG001', 2, 120000, '2019-12-09', NULL),
(4, 'BRG001', 12, 300000, '2019-12-09', NULL),
(5, 'BRG003', 12, 1212122121, '2019-12-09', NULL),
(6, 'BRG003', 6, 20000, '2019-12-10', NULL);

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
(1, 'Super Admin', '2019-12-09 10:17:11', NULL),
(2, 'Operator', '2019-12-09 21:14:32', NULL),
(3, 'Kepala cabang', '2019-12-09 21:14:41', NULL);

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
  `Create_at` datetime DEFAULT NULL,
  `Update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `Name`, `Gender`, `Address`, `email_operator`, `Status`, `Create_at`, `Update_at`) VALUES
(1, 'Admin', 'L', 'Yogyakarta', 'ndarualbert21@gmail.com', 'Aktif', '2019-12-09 10:20:35', '2019-12-09 21:15:17'),
(2, 'Kepala Cabang', 'L', 'Berbah', 'kepala@gmail.com', 'Aktif', '2019-12-09 21:16:26', '2019-12-09 21:16:28'),
(3, 'Admin 2', 'P', 'Berbah', 'Admin@gmail.com', 'Aktif', '2019-12-09 21:20:22', '2019-12-09 21:20:24'),
(4, 'Faris', 'L', 'Gunung kidul', 'ikhsan@gmail.com', 'Aktif', '2019-12-10 22:12:19', '2019-12-10 22:12:29');

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
('TIPE001', 'Cetak', '2019-12-09 10:26:14', NULL),
('TIPE002', 'ENUMxxxs', '2019-12-09 15:31:56', '2019-12-12 11:23:00');

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
(2, 1, 1, 'Ndaru', '12345', NULL, '2019-12-09 03:22:47', NULL, 'Aprove'),
(3, 2, 2, 'Ajeng', '12345', NULL, '2019-12-09 14:17:07', NULL, 'Aprove'),
(4, 3, 3, 'Ajeng123', '12345', NULL, '2019-12-09 14:20:54', NULL, 'Aprove'),
(5, 4, 1, 'faris', '12345', NULL, '2019-12-10 15:13:30', NULL, 'Aprove');

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
  ADD KEY `id_bagian` (`id_bagian`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD KEY `id_barang_keluar` (`id_barang`);

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
-- AUTO_INCREMENT for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  MODIFY `id_barang_keluar` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  MODIFY `id_barang_masuk` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id_operator` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_tipe_barang`) REFERENCES `tb_tipe_barang` (`id_tipe_barang`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD CONSTRAINT `tb_barang_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_keluar_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `tb_bagian` (`id_bagian`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD CONSTRAINT `tb_barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
