-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 03:47 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perusahaan_db10`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id_akun` varchar(3) NOT NULL,
  `kel_akun` varchar(12) NOT NULL,
  `nama_akun` varchar(52) NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `kel_akun`, `nama_akun`) VALUES
('111', 'harta', 'Kas'),
('112', 'harta', 'Piutang Usaha'),
('113', 'harta', 'Perlengkapan'),
('114', 'harta', 'Surat-Surat Berharga'),
('115', 'harta', 'Iklan Dibayar Dimuka'),
('116', 'harta', 'Sewa Dibayar Dimuka'),
('117', 'harta', 'Asuransi dibayar dimuka'),
('121', 'harta', 'Tanah'),
('122', 'harta', 'Peralatan'),
('123', 'harta', 'Akum. Penyusutan Peralatan'),
('124', 'harta', 'Gedung'),
('125', 'harta', 'Akum. Penyusutan Gedung'),
('126', 'harta', 'Kendaraan'),
('127', 'harta', 'Akum. Penyusutan Kendaraan'),
('211', 'utang', 'Utang Usaha'),
('212', 'utang', 'Utang Gaji'),
('213', 'utang', 'Utang Pajak'),
('214', 'utang', 'Utang Bunga'),
('221', 'utang', 'Utang Obligasi'),
('222', 'utang', 'Utang Hipotek'),
('311', 'modal', 'Modal Pemilik'),
('312', 'modal', 'Prive Pemilik'),
('411', 'pendapatan', 'Pendapatan Usaha'),
('412', 'pendapatan', 'Pendapatan Bunga'),
('413', 'pendapatan', 'Pendapatan Sewa'),
('511', 'beban/biaya', 'Beban Sewa'),
('512', 'beban/biaya', 'Beban Iklan'),
('513', 'beban/biaya', 'Beban Gaji'),
('514', 'beban/biaya', 'Beban Air, Listrik dan Telepon'),
('515', 'beban/biaya', 'Beban Perlengkapan'),
('516', 'beban/biaya', 'Beban Penyusutan Peralatan');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_umum`
--

CREATE TABLE IF NOT EXISTS `jurnal_umum` (
  `id_ju` int(26) NOT NULL,
  `id_transaksi` varchar(11) NOT NULL,
  `log` date NOT NULL,
  PRIMARY KEY (`id_ju`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_increment` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `keterangan` text NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `debit` double unsigned NOT NULL,
  `kredit` double unsigned NOT NULL,
  PRIMARY KEY (`id_increment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_increment`, `id_transaksi`, `tgl_transaksi`, `keterangan`, `id_akun`, `debit`, `kredit`) VALUES
(1, '0', '2019-01-01', 'Modal awal Tn. Rudi', '111', 30000000, 0),
(2, '0', '2019-01-01', 'Modal awal Tn. Rudi', '311', 0, 30000000),
(3, '10', '2019-01-02', 'Membeli perlengkapan kantor', '113', 2000000, 0),
(4, '10', '2019-01-02', 'Membeli perlengkapan kantor', '111', 0, 1000000),
(5, '10', '2019-01-02', 'Membeli perlengkapan kantor', '211', 0, 1000000),
(6, '21', '2019-01-02', 'Membayar beban sewa', '511', 500000, 0),
(7, '21', '2019-01-02', 'Membayar beban sewa', '111', 0, 500000),
(8, '2', '2019-01-03', 'Membeli peralatan', '122', 1000000, 0),
(9, '2', '2019-01-03', 'Membeli peralatan', '111', 0, 1000000),
(10, '7', '2019-01-03', 'Menerima pendapatan usaha', '111', 1000000, 0),
(11, '7', '2019-01-03', 'Menerima pendapatan usaha', '411', 0, 1000000),
(12, '5', '2019-01-04', 'Menerima pendapatan usaha', '111', 1500000, 0),
(13, '5', '2019-01-04', 'Menerima pendapatan usaha', '411', 0, 1500000),
(14, '17', '2019-01-07', 'Membayar beban iklan', '512', 300000, 0),
(15, '17', '2019-01-07', 'Membayar beban iklan', '111', 0, 300000),
(16, '17', '2019-01-08', 'Menerima angsuran piutang', '111', 700000, 0),
(17, '17', '2019-01-08', 'Menerima angsuran piutang', '112', 0, 700000),
(18, '0', '2019-01-09', 'Menerima pendapatan usaha', '111', 600000, 0),
(19, '0', '2019-01-09', 'Menerima pendapatan usaha', '411', 0, 600000),
(20, '1', '2019-01-10', 'Membayar beban air, listrik, dan telepon', '514', 500000, 0),
(21, '1', '2019-01-10', 'Membayar beban air, listrik, dan telepon', '111', 0, 500000),
(22, '6', '2019-01-11', 'Membeli peralatan', '122', 50000, 0),
(23, '6', '2019-01-11', 'Membeli peralatan', '111', 0, 50000),
(26, '18', '2019-01-14', 'Pengambilan kas untuk kepentingan pribadi', '312', 800000, 0),
(27, '18', '2019-01-14', 'Pengambilan kas untuk kepentingan pribadi', '111', 0, 800000),
(28, '28', '2019-01-15', 'Menerima pendapatan sewa', '111', 1000000, 0),
(29, '28', '2019-01-15', 'Menerima pendapatan sewa', '413', 0, 1000000),
(30, '19', '2019-01-16', 'Membeli kendaraan', '126', 13000000, 0),
(31, '19', '2019-01-16', 'Membeli kendaraan', '111', 0, 13000000),
(32, '0', '2019-01-16', 'Menerima pendapatan bunga', '111', 2000000, 0),
(33, '0', '2019-01-16', 'Menerima pendapatan bunga', '412', 0, 2000000),
(34, '7', '2019-01-16', 'Menerima pendapatan usaha', '111', 9500000, 0),
(35, '7', '2019-01-16', 'Menerima pendapatan usaha', '411', 0, 9500000),
(36, '14', '2019-01-17', 'Menerima pendapatan usaha', '111', 5000000, 0),
(37, '14', '2019-01-17', 'Menerima pendapatan usaha', '411', 0, 5000000),
(40, '2', '2019-01-18', 'Membayar beban gaji', '513', 1000000, 0),
(41, '2', '2019-01-18', 'Membayar beban gaji', '111', 0, 1000000),
(42, '11', '2019-01-21', 'Menerima pendapatan usaha', '111', 4800000, 0),
(43, '11', '2019-01-21', 'Menerima pendapatan usaha', '411', 0, 4800000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
