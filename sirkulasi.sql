-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 04:18 AM
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

INSERT INTO `tb_barang` (`id_barang`, `id_tipe_barang`, `id_operator`, `Name`, `Jumlah`, `Satuan`, `Harga`, `Create_at`, `Update_at`, `deleted`) VALUES
('ATK014', 'TIPE002', 10, 'Map shell', 0, 'PCS', 0, '2020-01-10 05:10:02', '2020-01-10 05:10:02', 0),
('ATK018', 'TIPE002', 10, 'Double Tape', 0, 'PCS', 0, '2020-01-10 04:42:39', '2020-01-10 04:42:39', 0),
('ATK025', 'TIPE002', 10, 'Isi Strapler Kecil H', 0, 'DUS', 0, '2020-01-10 04:44:59', '2020-01-10 04:44:59', 0),
('ATK037', 'TIPE002', 10, 'Map Kancing', 0, 'PCS', 0, '2020-01-10 04:57:20', '2020-01-10 04:57:20', 0),
('ATK06', 'TIPE002', 10, 'Lem cair fox', 0, 'PCS', 0, '2020-01-10 04:55:29', '2020-01-10 04:55:29', 0),
('ATK073', 'TIPE002', 10, 'Label Besar', 0, 'PACK', 0, '2020-01-10 04:52:13', '2020-01-10 04:52:13', 0),
('ATK1', 'TIPE002', 10, 'Binder Clips 260', 0, 'DUS', 0, '2020-01-10 04:32:31', '2020-01-10 04:32:31', 0),
('ATK110', 'TIPE002', 10, 'Gunting', 0, 'PCS', 0, '2020-01-10 04:43:32', '2020-01-10 04:43:32', 0),
('ATK150', 'TIPE002', 10, 'Kertas HVS F4 70 PO', 0, 'RIM', 0, '2020-01-10 04:51:47', '2020-01-10 04:51:47', 0),
('ATK164', 'TIPE002', 10, 'Buku F4 200 Lembar', 0, 'PCS', 0, '2020-01-10 04:42:02', '2020-01-10 04:42:02', 0),
('ATK19', 'TIPE002', 10, 'Buku F4 100 Lembar', 0, 'PCS', 0, '2020-01-10 04:38:27', '2020-01-10 04:38:27', 0),
('ATK192', 'TIPE002', 10, 'Stapler HD 10', 0, 'PCS', 0, '2020-01-10 05:07:43', '2020-01-10 05:07:43', 0),
('ATK196', 'TIPE002', 10, 'Label Kecil', 0, 'PACK', 0, '2020-01-10 04:53:02', '2020-01-10 04:53:02', 0),
('ATK197', 'TIPE002', 10, 'Paku Push Pin', 0, 'PACK', 0, '2020-01-10 04:58:38', '2020-01-10 04:58:38', 0),
('ATK208', 'TIPE002', 10, 'Stabilo Merah', 0, 'PCS', 0, '2020-01-10 05:07:09', '2020-01-10 05:07:09', 0),
('ATK21', 'TIPE002', 10, 'Binder Clips 105', 0, 'DUS', 0, '2020-01-10 04:31:08', '2020-01-10 04:31:08', 0),
('ATK212', 'TIPE002', 10, 'Lem Stik Re Type', 0, 'DUS', 0, '2020-01-10 04:55:51', '2020-01-10 04:55:51', 0),
('ATK227', 'TIPE002', 10, 'Spidol Kecil', 0, 'PCS', 0, '2020-01-10 05:05:36', '2020-01-10 05:05:36', 0),
('ATK234', 'TIPE002', 10, 'Punch Seri 40', 0, 'PACK', 0, '2020-01-10 05:05:20', '2020-01-10 05:05:20', 0),
('ATK236', 'TIPE002', 10, 'Double Tape Kecil 1/', 0, 'PCS', 0, '2020-01-10 04:43:11', '2020-01-10 04:43:11', 0),
('ATK245', 'TIPE002', 10, 'Stabilo Kuning', 0, 'PCS', 0, '2020-01-10 05:06:47', '2020-01-10 05:06:47', 0),
('ATK246', 'TIPE002', 10, 'Lem Povinal / Glue (', 0, 'PCS', 0, '2020-01-10 04:55:13', '2020-01-10 04:55:13', 0),
('ATK279', 'TIPE002', 10, 'Lakban Hitam', 0, 'PCS', 0, '2020-01-10 04:54:25', '2020-01-10 04:54:25', 0),
('ATK281', 'TIPE002', 10, 'Tipe X Kenko', 0, 'PCS', 0, '2020-01-10 05:08:39', '2020-01-10 05:08:39', 0),
('ATK323', 'TIPE002', 10, 'Penggaris Besi', 0, 'PCS', 0, '2020-01-10 05:01:30', '2020-01-10 05:01:30', 0),
('ATK347', 'TIPE002', 10, 'Post It page marker', 0, 'PCS', 0, '2020-01-10 05:05:00', '2020-01-10 05:05:00', 0),
('ATK41', 'TIPE002', 10, 'Binder Clips DB 200', 0, 'DUS', 0, '2020-01-10 04:30:49', '2020-01-10 04:30:49', 0),
('ATK433', 'TIPE002', 10, 'Stapler HD 50', 0, 'PCS', 0, '2020-01-10 05:08:06', '2020-01-10 05:08:06', 0),
('ATK452', 'TIPE002', 10, 'Isolasi Kecil', 0, 'PACK', 0, '2020-01-10 04:45:21', '2020-01-10 04:45:21', 0),
('ATK471', 'TIPE002', 10, 'Name Card Holder', 0, 'PCS', 0, '2020-01-10 05:09:37', '2020-01-10 05:09:37', 0),
('ATK472', 'TIPE002', 10, 'Posh It Warna', 0, 'PACK', 0, '2020-01-10 05:04:38', '2020-01-10 05:04:38', 0),
('ATK496', 'TIPE002', 10, 'Ordner Bambi', 0, 'PCS', 0, '2020-01-10 04:58:25', '2020-01-10 04:58:25', 0),
('ATK51', 'TIPE002', 10, 'Tali Rafia', 0, 'PCS', 0, '2020-01-10 05:08:22', '2020-01-10 05:08:22', 0),
('ATK510', 'TIPE002', 10, 'Lem Kertas Pastakol', 0, 'PCS', 0, '2020-01-10 04:54:55', '2020-01-10 04:54:55', 0),
('ATK519', 'TIPE002', 10, 'Spidol Permanent', 0, 'DUS', 0, '2020-01-10 05:05:52', '2020-01-10 05:05:52', 0),
('ATK536', 'TIPE002', 10, 'Spidol WB', 0, 'PCS', 0, '2020-01-10 05:06:11', '2020-01-10 05:06:11', 0),
('ATK577', 'TIPE002', 10, 'Isi Strapler Besar (', 0, 'PCS', 0, '2020-01-10 04:44:42', '2020-01-10 04:44:42', 0),
('ATK621', 'TIPE002', 10, 'Map Panda', 0, 'PACK', 0, '2020-01-10 04:56:58', '2020-01-10 04:56:58', 0),
('ATK645', 'TIPE002', 10, 'Stabilo Orange', 0, 'PCS', 0, '2020-01-10 05:07:26', '2020-01-10 05:07:26', 0),
('ATK681', 'TIPE002', 10, 'Lakban Coklat', 0, 'PCS', 0, '2020-01-10 04:54:07', '2020-01-10 04:54:07', 0),
('ATK695', 'TIPE002', 10, 'Penggaris Segitiga', 0, 'PACK', 0, '2020-01-10 05:03:10', '2020-01-10 05:03:10', 0),
('ATK7', 'TIPE002', 10, 'Buku Ekspedisi', 0, 'Buah', 0, '2020-01-10 04:37:24', '2020-01-10 04:37:24', 0),
('ATK701', 'TIPE002', 10, 'Trigonal Clips', 0, 'DUS', 0, '2020-01-10 05:09:05', '2020-01-10 05:09:05', 0),
('ATK746', 'TIPE002', 10, 'Kertas BC Merah ', 0, 'RIM', 0, '2020-01-10 04:50:37', '2020-01-10 04:50:37', 0),
('ATK76', 'TIPE002', 10, 'Bolpoint AE7 Biru', 0, 'BOX', 0, '2020-01-10 04:32:52', '2020-01-10 04:32:52', 0),
('ATK79', 'TIPE002', 10, 'Bantalan Stempel', NULL, 'Buah', 0, '2020-01-10 04:28:34', '2020-01-10 04:30:03', 0),
('ATK798', 'TIPE002', 10, 'Posh It', 0, 'PACK', 0, '2020-01-10 05:03:45', '2020-01-10 05:03:45', 0),
('ATK807', 'TIPE002', 10, 'Tinta bantalan zenit', 0, 'PCS', 0, '2020-01-10 05:09:21', '2020-01-10 05:09:21', 0),
('ATK809', 'TIPE002', 10, 'Stabilo Hijau', 0, 'PCS', 0, '2020-01-10 05:06:34', '2020-01-10 05:06:34', 0),
('ATK817', 'TIPE002', 10, 'Nachi Tape Besar', 0, 'PCS', 0, '2020-01-10 04:57:44', '2020-01-10 04:57:44', 0),
('ATK821', 'TIPE002', 10, 'Label Kecil', 0, 'PACK', 0, '2020-01-10 04:53:34', '2020-01-10 04:53:34', 0),
('ATK875', 'TIPE002', 10, 'Kertas HVS A4 70 SD', 0, 'RIM', 0, '2020-01-10 04:51:31', '2020-01-10 04:51:31', 0),
('ATK888', 'TIPE002', 10, 'Lakban Bening', 0, 'PCS', 0, '2020-01-10 04:53:49', '2020-01-10 04:53:49', 0),
('ATK891', 'TIPE002', 10, 'Kertas Karbon', 0, 'PACK', 0, '2020-01-10 04:51:17', '2020-01-10 04:51:17', 0),
('ATK892', 'TIPE002', 10, 'Paper Roll / Fax', 0, 'Buah', 0, '2020-01-10 05:00:24', '2020-01-10 05:00:24', 1),
('ATK9', 'TIPE002', 10, 'Plastik Fasthener', 0, 'PCS', 0, '2020-01-10 05:03:28', '2020-01-10 05:03:28', 0),
('ATK90', 'TIPE002', 10, 'Binder Clips 155', 0, 'BOX', 0, '2020-01-10 04:32:00', '2020-01-10 04:32:00', 0),
('ATK917', 'TIPE002', 10, 'Paper Roll / Fax', 0, 'PCS', 0, '2020-01-10 05:01:10', '2020-01-10 05:01:10', 0),
('ATK92', 'TIPE002', 10, 'Bolpoint AE7 Hitam', 0, 'BOX', 0, '2020-01-10 04:33:08', '2020-01-10 04:33:08', 0),
('ATK922', 'TIPE002', 10, 'Nachi Tape Kecil', 0, 'PCS', 0, '2020-01-10 04:58:07', '2020-01-10 04:58:07', 0),
('ATK930', 'TIPE002', 10, 'Isi Cutter Kecil', 0, 'PACK', 0, '2020-01-10 04:43:50', '2020-01-10 04:43:50', 0),
('ATK96', 'TIPE002', 10, 'Binder Clips 107', 0, 'DUS', 0, '2020-01-10 04:31:28', '2020-01-10 04:31:28', 0),
('ATK97', 'TIPE002', 10, 'Map Plastik', 0, 'PACK', 0, '2020-01-10 04:56:25', '2020-01-10 04:56:25', 0),
('ATK972', 'TIPE002', 10, 'Isi Cutter Besar', 0, 'PACK', 0, '2020-01-10 04:44:11', '2020-01-10 04:44:11', 0),
('CET024', 'TIPE003', 10, 'AMPLOP COKLAT A3', 0, 'PCS', 0, '2020-01-10 05:26:04', '2020-01-10 05:26:04', 0),
('CET160', 'TIPE003', 10, 'AMPLOP COKLAT 1/2 F', 0, 'PCS', 0, '2020-01-10 05:25:48', '2020-01-10 05:25:48', 0),
('CET471', 'TIPE003', 10, 'BA PENYERAHAN BRG EX', 0, 'PCS', 0, '2020-01-10 05:27:54', '2020-01-10 05:27:54', 0),
('CET996', 'TIPE003', 10, 'AMPLOP COKLAT F4', 0, 'PCS', 0, '2020-01-10 05:26:23', '2020-01-10 05:26:23', 0),
('PER048', 'TIPE001', 10, 'Tinta Epson Hitam', 0, 'KOTAK', 0, '2020-01-10 05:14:49', '2020-01-10 05:14:49', 0),
('PER080', 'TIPE001', 10, 'Baterai ABC Extra', 0, 'PACK', 0, '2020-01-10 05:12:44', '2020-01-10 05:12:44', 0),
('PER175', 'TIPE001', 10, 'Plastik Fasthener', 0, 'PCS', 0, '2020-01-10 05:19:57', '2020-01-10 05:19:57', 0),
('PER224', 'TIPE001', 10, 'KERTAS TELEX 1 PLAY', 0, 'ROL', 0, '2020-01-10 05:17:37', '2020-01-10 05:17:37', 0),
('PER316', 'TIPE001', 10, 'Daito Karbon', 0, 'PCS', 0, '2020-01-10 05:14:22', '2020-01-10 05:14:22', 0),
('PER344', 'TIPE001', 10, 'Tinta Epson Merah', 0, 'KOTAK', 0, '2020-01-10 05:15:38', '2020-01-10 05:15:38', 0),
('PER520', 'TIPE001', 10, 'TINTA CANNON COLOR ', 0, 'BOTOL', 0, '2020-01-10 05:19:17', '2020-01-10 05:19:17', 0),
('PER522', 'TIPE001', 10, 'Baterai Alkaline A2', 0, 'PACK', 0, '2020-01-10 05:12:31', '2020-01-10 05:12:31', 0),
('PER535', 'TIPE001', 10, 'TINTA CANNON COLOR (', 0, 'BOTOL', 0, '2020-01-10 05:19:38', '2020-01-10 05:19:38', 0),
('PER541', 'TIPE001', 10, 'PITA OKIDATA FULLMAR', 0, 'PCS', 0, '2020-01-10 05:18:20', '2020-01-10 05:18:20', 0),
('PER577', 'TIPE001', 10, 'TINTA EPSON BLACK OR', 0, 'BOTOL', 0, '2020-01-10 05:18:36', '2020-01-10 05:18:36', 0),
('PER596', 'TIPE001', 10, 'KERTAS TELEX 2 PLAY', 0, 'ROL', 0, '2020-01-10 05:17:54', '2020-01-10 05:17:54', 0),
('PER599', 'TIPE001', 10, 'Tinta Spidol Permane', 0, 'PCS', 0, '2020-01-10 05:15:56', '2020-01-10 05:15:56', 0),
('PER639', 'TIPE001', 10, 'TINTA CANNON BLACK', 0, 'BOTOL', 0, '2020-01-10 05:19:05', '2020-01-10 05:19:05', 0),
('PER681', 'TIPE001', 10, 'TINTA EPSON COLOR OR', 0, 'BOTOL', 0, '2020-01-10 05:18:49', '2020-01-10 05:18:49', 0),
('PER819', 'TIPE001', 10, 'Tinta Epson Biru', 0, 'KOTAK', 0, '2020-01-10 05:15:27', '2020-01-10 05:15:27', 0),
('PER84', 'TIPE001', 10, 'Data Print Hitam', 0, 'KOTAK', 0, '2020-01-10 05:14:03', '2020-01-10 05:14:03', 0),
('PER933', 'TIPE001', 10, 'Tinta Epson Kuning', 0, 'KOTAK', 0, '2020-01-10 05:15:08', '2020-01-10 05:15:08', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_rusak`
--

CREATE TABLE `tb_barang_rusak` (
  `id_barang_rusak` smallint(10) NOT NULL,
  `id_barang` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
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
(1, 'Admin', '2019-12-09 10:17:11', '2019-12-16 07:45:57'),
(2, 'Operator', '2019-12-09 21:14:32', NULL),
(3, 'Kepala Cabang', '2019-12-09 21:14:41', '2019-12-12 16:45:02');

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
  `Update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `Name`, `Gender`, `Address`, `email_operator`, `Status`, `Create_at`, `Update_at`) VALUES
(10, 'admin', 'L', 'Yohyakarta', 'admin@gmail.com', 'Aktif', '2019-12-18 16:04:21', NULL),
(11, 'kepala cabnag', 'L', 'Yogyakarta', 'kepalacabang@gmail.om', 'Aktif', '2019-12-19 22:49:42', NULL),
(12, 'operator', 'L', 'Yogyakarta', 'operator@gamail.com', 'Aktif', '2020-01-11 04:54:02', NULL);

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
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `Status` varchar(10) DEFAULT 'NotAprove'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_operator`, `id_level`, `username`, `password`, `email`, `creat_at`, `update_at`, `Status`) VALUES
(9, 10, 1, 'admin', '12345', NULL, '2019-12-19 15:50:38', '2019-12-19 22:50:18', 'Aprove'),
(10, 11, 3, 'kepalacabang', '12345', NULL, '2020-01-09 17:01:38', '2020-01-10 00:01:38', 'Aprove'),
(11, 12, 2, 'operator', '12345', NULL, '2020-01-10 21:54:16', NULL, 'Aprove');

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
  ADD KEY `id_operator` (`id_operator`);

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
-- Indexes for table `tb_barang_rusak`
--
ALTER TABLE `tb_barang_rusak`
  ADD PRIMARY KEY (`id_barang_rusak`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_level`);

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
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `id_tipebarang` FOREIGN KEY (`id_tipe_barang`) REFERENCES `tb_tipe_barang` (`id_tipe_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `tb_barang_rusak`
--
ALTER TABLE `tb_barang_rusak`
  ADD CONSTRAINT `id_barangrusak` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

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
