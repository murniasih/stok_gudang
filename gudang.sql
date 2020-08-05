-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 06:19 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode_barang` varchar(5) NOT NULL DEFAULT '',
  `nama_barang` varchar(50) NOT NULL,
  `stok` varchar(5) NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `stok`) VALUES
('B001', 'kertas HVS', '90'),
('B002', 'Cat Lantai', '20'),
('B003', 'Tiner', '5');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id_transaksi` varchar(5) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` varchar(5) NOT NULL,
  `departemen` varchar(10) NOT NULL,
  `jumlah_keluar` varchar(10) NOT NULL,
  `total` varchar(5) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `no_faktur` varchar(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` varchar(5) NOT NULL,
  `jumlah_masuk` varchar(3) NOT NULL,
  `total` varchar(10) NOT NULL,
  PRIMARY KEY (`no_faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`no_faktur`, `tanggal_masuk`, `kode_barang`, `nama_barang`, `stok`, `jumlah_masuk`, `total`) VALUES
('M001', '2017-12-16', 'B001', 'kertas HVS', '90', '70', '160');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_suplier`
--

CREATE TABLE IF NOT EXISTS `tabel_suplier` (
  `kode_suplier` varchar(10) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  PRIMARY KEY (`kode_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE IF NOT EXISTS `tabel_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `hak_akses` enum('karyawan','supervisor','admin','') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama`, `username`, `pasword`, `hak_akses`) VALUES
(1, 'murni', 'murni', '12345', 'karyawan'),
(2, 'asih', 'asih', '6789', 'supervisor'),
(3, 'murniasih', 'murniasih', '1508', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
