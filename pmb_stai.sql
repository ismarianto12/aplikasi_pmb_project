-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 05:31 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb_stai`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikan`
--

CREATE TABLE `aplikan` (
  `id_aplikan` int(100) NOT NULL,
  `id_periode` int(20) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `kodePos` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `rW` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jenisSekolah` enum('N','S','L') NOT NULL,
  `namaSekolah` varchar(100) NOT NULL,
  `jurusanSekolah` varchar(100) NOT NULL,
  `tahunLulus` varchar(50) NOT NULL,
  `nilaiSekolah` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `prodi_1` int(100) NOT NULL,
  `prodi_2` int(20) NOT NULL,
  `prodi_3` int(20) NOT NULL,
  `pembayaran` enum('N','Y','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikan`
--

INSERT INTO `aplikan` (`id_aplikan`, `id_periode`, `no_pendaftaran`, `nama`, `kelamin`, `tempatlahir`, `alamat`, `kota`, `propinsi`, `kodePos`, `rt`, `rW`, `telepon`, `email`, `no_hp`, `jenisSekolah`, `namaSekolah`, `jurusanSekolah`, `tahunLulus`, `nilaiSekolah`, `tgl_daftar`, `prodi_1`, `prodi_2`, `prodi_3`, `pembayaran`) VALUES
(2, 1, 'PMB-STAI-2018-1', 'Ismarianto', 'L', 'adasd', 'adasd', 'Padang', 'adasd', '12', '12', '12', '0901321', 'ysmariki@yahoo.com', '43453', '', 'Sman DON BOSCO', 'TIk', '2019', '12,12', '2019-12-27', 12, 12, 12, 'N'),
(3, 1, 'PMB-STAI-2018-2', 'Slamet Widodo', 'L', 'Jateng', 'jateng', 'padang', 'sumatera  barat', '202992', '012', '12', '08123123', 'kotokareh@gmail.com', '081231231', '', 'Don Boso', 'IPA', '2013', '8.9', '2019-12-30', 13, 13, 12, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `batas_bayar`
--

CREATE TABLE `batas_bayar` (
  `id_batas` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `tahun_mulai` date NOT NULL,
  `batas_` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batas_bayar`
--

INSERT INTO `batas_bayar` (`id_batas`, `id_periode`, `program`, `tahun_mulai`, `batas_`) VALUES
(1, 1, 'S1', '2018-12-04', '2019-01-31'),
(2, 1, 'S2', '2018-12-04', '2018-12-28'),
(3, 1, 'D3', '2018-12-06', '2018-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `biaya_kuliah`
--

CREATE TABLE `biaya_kuliah` (
  `id_biaya` int(16) NOT NULL,
  `id_prodi` int(16) NOT NULL,
  `jumlah` int(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biaya_kuliah`
--

INSERT INTO `biaya_kuliah` (`id_biaya`, `id_prodi`, `jumlah`) VALUES
(2, 13, 15400000);

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `url` varchar(15) NOT NULL,
  `aktivitasi` varchar(15) NOT NULL,
  `file_download` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `browser` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `id_user`, `url`, `aktivitasi`, `file_download`, `tanggal`, `ip_address`, `browser`) VALUES
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-29', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; '),
(0, '1', '/pmb_stai/dasbo', 'Akses dasboard ', '', '2019-12-30', '::1', 'Mozilla/5.0 (Windows NT 10.0; ');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `Kode` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `KodeHukum` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `KodeInstitusi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Nama` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `TglMulai` date NOT NULL DEFAULT '0000-00-00',
  `Alamat1` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Alamat2` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Kota` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KodePos` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `Telepon` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `Fax` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Website` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `NoAkta` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TglAkta` date DEFAULT NULL,
  `NoSah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TglSah` date DEFAULT NULL,
  `Logo` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `favicon` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `StartNoIdentitas` bigint(20) NOT NULL DEFAULT '0',
  `NoIdentitas` bigint(20) NOT NULL DEFAULT '0',
  `CatatanDPNA` text COLLATE latin1_general_ci,
  `CatatanKursiUAS` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`Kode`, `KodeHukum`, `KodeInstitusi`, `Nama`, `TglMulai`, `Alamat1`, `Alamat2`, `Kota`, `KodePos`, `Telepon`, `Fax`, `Email`, `Website`, `NoAkta`, `TglAkta`, `NoSah`, `TglSah`, `Logo`, `favicon`, `StartNoIdentitas`, `NoIdentitas`, `CatatanDPNA`, `CatatanKursiUAS`) VALUES
('UNES-PMB', '001', '001', 'Uniiversitas Ekasakti', '1981-07-25', 'Jl . Veteran Dalam No.26 B', 'Blok G 27-28', 'Padang', '17145', '', '', 'pustikom@unespadang.ac.id', 'unespadang.ac.id', '', '0000-00-00', '', '1981-01-01', 'Logo1543127398.png', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `ket` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nama` varchar(59) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` enum('user','admin','','') NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `date_create` date NOT NULL,
  `log` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`, `email`, `foto`, `level`, `active`, `date_create`, `log`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', '2019-12-29', '2019-12-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `id_parent` int(5) NOT NULL DEFAULT '0',
  `nama_menu` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `urutan` int(3) NOT NULL,
  `position` enum('Bottom','Top','','') NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `icon`, `link`, `aktif`, `urutan`, `position`, `level`) VALUES
(1, 0, 'Data Pendaftar', 'icon-people  fa-fw', 'Aplikan', 'Ya', 1, 'Bottom', 'admin.user'),
(2, 0, 'Data Pembayaran', 'icon-diamond  fa-fw', 'Pembayaran', 'Ya', 2, 'Bottom', 'admin.user'),
(3, 0, 'Data Peserta Pmb', 'icon-docs  fa-fw', 'Pmb', 'Ya', 3, 'Bottom', 'admin'),
(4, 0, 'Setting PMB', 'icon-wrench  fa-fw', '#', 'Ya', 4, 'Bottom', 'admin'),
(5, 4, 'Tahun Akademik ', 'icon-energy  fa-fw', 'Periode', 'Ya', 5, 'Bottom', ''),
(6, 4, 'Batas_bayar', 'icon-map  fa-fw', 'Batas_bayar', 'Ya', 6, 'Bottom', 'admin.user'),
(7, 8, 'Identitas Kampus', 'icon-picture  fa-fw', 'Identitas', 'Ya', 8, 'Bottom', 'admin'),
(8, 0, 'Setting Kampus', 'icon-picture  fa-fw', '#', 'Ya', 7, 'Bottom', 'admin'),
(9, 8, 'Biaya kuliah', 'icon-screen-tablet  fa-fw', 'Biaya_kuliah', 'Ya', 9, 'Bottom', 'admin'),
(10, 8, 'Program Studi', 'icon-badge  fa-fw', 'Prodi', 'Ya', 10, 'Bottom', 'admin.user'),
(11, 0, 'Setting Informasi PMB', 'icon-list fa-fw', 'Informasi', 'Ya', 11, 'Bottom', 'admin.user'),
(12, 0, 'Histori', 'icon-folder  fa-fw', 'Histori', 'Ya', 12, 'Bottom', 'admin.user');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(20) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `jumlah` varchar(60) NOT NULL,
  `file_pembayaran` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `no_pendaftaran`, `jumlah`, `file_pembayaran`, `tanggal`, `id_user`) VALUES
(1, 'PMB-STAI-2018-2', '200000', '_pembayaran_1577648529.pdf', '2019-12-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(15) NOT NULL,
  `tahun_akademik` varchar(100) NOT NULL COMMENT 'pada bagian ini setiap periode hanya berlaku hanya satu',
  `tahun` int(11) NOT NULL,
  `semester` enum('ganjil','genap','','') NOT NULL,
  `buka` enum('Y','N','','') NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `tahun_akademik`, `tahun`, `semester`, `buka`, `mulai`, `selesai`) VALUES
(1, '2019-2020', 2018, 'genap', 'Y', '2019-12-12', '2019-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `pmb`
--

CREATE TABLE `pmb` (
  `id_pendaftar` int(100) NOT NULL,
  `id_periode` int(20) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `nomor_pmb` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `kodePos` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `rW` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `handphone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jenisSekolah` enum('N','S','L') NOT NULL,
  `namaSekolah` varchar(100) NOT NULL,
  `jurusanSekolah` varchar(100) NOT NULL,
  `tahunLulus` varchar(50) NOT NULL,
  `nilaiSekolah` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `prog_pendidikan` enum('R','NR') NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `pendidikanAyah` varchar(100) NOT NULL,
  `pekerjaanAyah` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `sumberinfo` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `prodi_1` int(100) NOT NULL,
  `prodi_2` int(20) NOT NULL,
  `prodi_3` int(20) NOT NULL,
  `pembayaran` enum('N','Y') NOT NULL,
  `lulus` enum('p','n','y') NOT NULL,
  `program_pen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmb`
--

INSERT INTO `pmb` (`id_pendaftar`, `id_periode`, `no_pendaftaran`, `nomor_pmb`, `password`, `nama`, `kelamin`, `tempatlahir`, `alamat`, `kota`, `propinsi`, `kodePos`, `rt`, `rW`, `telepon`, `handphone`, `email`, `no_hp`, `jenisSekolah`, `namaSekolah`, `jurusanSekolah`, `tahunLulus`, `nilaiSekolah`, `no_ijazah`, `prog_pendidikan`, `namaAyah`, `pendidikanAyah`, `pekerjaanAyah`, `catatan`, `jurusan`, `sumberinfo`, `tgl_daftar`, `prodi_1`, `prodi_2`, `prodi_3`, `pembayaran`, `lulus`, `program_pen`) VALUES
(22, 1, '36886', '', '3688', 'dsfsdf', 'L', '', '', '', '', '', '', '', '', '', 'example@gmail.com', '325345', 'N', '', '', '', '', '', 'R', '', '', '', '', '', '', '2018-12-05', 0, 0, 0, 'N', 'p', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `kode_prodi` varchar(100) NOT NULL,
  `akreditasi` varchar(100) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `kode_prodi`, `akreditasi`, `jenjang`) VALUES
(12, 'Pendidikan agama islam', '3455', 'A', 'S1'),
(13, 'Tarbiyah', '#', 'B', 'S1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikan`
--
ALTER TABLE `aplikan`
  ADD PRIMARY KEY (`id_aplikan`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `batas_bayar`
--
ALTER TABLE `batas_bayar`
  ADD PRIMARY KEY (`id_batas`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `biaya_kuliah`
--
ALTER TABLE `biaya_kuliah`
  ADD PRIMARY KEY (`id_biaya`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `pmb`
--
ALTER TABLE `pmb`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `id_pendaftar` (`id_pendaftar`),
  ADD KEY `id_periode` (`id_periode`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikan`
--
ALTER TABLE `aplikan`
  MODIFY `id_aplikan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `batas_bayar`
--
ALTER TABLE `batas_bayar`
  MODIFY `id_batas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biaya_kuliah`
--
ALTER TABLE `biaya_kuliah`
  MODIFY `id_biaya` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id_pendaftar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aplikan`
--
ALTER TABLE `aplikan`
  ADD CONSTRAINT `aplikan_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`);

--
-- Constraints for table `batas_bayar`
--
ALTER TABLE `batas_bayar`
  ADD CONSTRAINT `batas_bayar_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`);

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `login` (`id_user`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`no_pendaftaran`) REFERENCES `aplikan` (`no_pendaftaran`);

--
-- Constraints for table `pmb`
--
ALTER TABLE `pmb`
  ADD CONSTRAINT `pmb_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
