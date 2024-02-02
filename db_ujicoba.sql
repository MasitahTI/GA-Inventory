-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 01:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujicoba`
--

-- --------------------------------------------------------

--
-- Table structure for table `diserahkan`
--

CREATE TABLE `diserahkan` (
  `id_diserahkan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `dapartemen` varchar(50) NOT NULL,
  `site` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diserahkan`
--

INSERT INTO `diserahkan` (`id_diserahkan`, `nama`, `sn`, `jabatan`, `dapartemen`, `site`) VALUES
(0, 'Masitah', ' - ', 'ICT', 'GA', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `ht`
--

CREATE TABLE `ht` (
  `id_ht` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `dapartemen` varchar(30) NOT NULL,
  `remark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ht`
--

INSERT INTO `ht` (`id_ht`, `tgl_masuk`, `tgl_keluar`, `description`, `asset`, `qty`, `sn`, `dapartemen`, `remark`) VALUES
(10, '2022-11-04', '0000-00-00', 'Radio HT Xir P6620i ', '-   ', '1  (SET)  ', '867TVP1027   ', 'WAREHOUSE   ', 'Rusak terlindas FT Reza ada di laci, BA ada.'),
(11, '2022-11-04', '0000-00-00', 'Radio HT Xir P6620i', '- ', '1 (SET)', '867TUTM214 ', 'WAREHOUSE ', 'HOLDER '),
(12, '2022-11-04', '0000-00-00', 'Radio HT Xir P6620i', '-', '1 (SET)', '867TVPI221', 'WAREHOUSE', 'HOLDER'),
(13, '2022-11-04', '0000-00-00', 'Radio HT Xir P6620i', '-', '1 (SET)', '867TVPI064', 'WAREHOUSE', 'HOLDER'),
(14, '2022-11-04', '0000-00-00', 'Radio HT Xir P6620i', '-', '1 (SET)', '867TVP0932', 'WAREHOUSE', 'HOLDER'),
(15, '2022-11-04', '0000-00-00', 'Radio HT Xir P6620i', '-', '1 unit', '-', 'WAREHOUSE', 'Hilang by Ari Irawan');

-- --------------------------------------------------------

--
-- Table structure for table `inv`
--

CREATE TABLE `inv` (
  `id_inv` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `user` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `kerusakan` varchar(100) NOT NULL,
  `part` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inv`
--

INSERT INTO `inv` (`id_inv`, `tgl_masuk`, `tgl_keluar`, `nama_barang`, `user`, `sn`, `dept`, `asset`, `kerusakan`, `part`, `keterangan`) VALUES
(5, '2022-11-24', '0000-00-00', 'Lakban ', '-', '-', 'GA', '32487ty', '10 lakban', ' ', 'mas mas');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id_penerima` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `dapartemen` varchar(50) NOT NULL,
  `site` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `nama`, `sn`, `jabatan`, `dapartemen`, `site`) VALUES
(0, 'Roja', ' - ', 'ANE', 'GA & FAC', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `kerusakan` varchar(200) NOT NULL,
  `part` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `tgl_masuk`, `tgl_keluar`, `nama_barang`, `user`, `sn`, `dept`, `asset`, `kerusakan`, `part`, `keterangan`) VALUES
(7, '2022-11-09', '0000-00-00', 'Laptop', 'Masitah', '-', 'PPNC', '78TYM37827', 'Untuk digunakan sementara', ' ', 'Mas Khairil');

-- --------------------------------------------------------

--
-- Table structure for table `rig`
--

CREATE TABLE `rig` (
  `id_rig` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `dapartemen` varchar(30) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rig`
--

INSERT INTO `rig` (`id_rig`, `tgl_masuk`, `tgl_keluar`, `description`, `asset`, `qty`, `sn`, `dapartemen`, `remark`) VALUES
(12, '2022-11-16', '0000-00-00', 'Radio RIG Motorolla GM338  ', '-  ', '1 (SET)  ', '103T03687687', 'PLANT  ', 'BAST to PLANT  ');

-- --------------------------------------------------------

--
-- Table structure for table `serahterima`
--

CREATE TABLE `serahterima` (
  `id_serahterima` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serahterima`
--

INSERT INTO `serahterima` (`id_serahterima`, `description`, `asset`, `qty`, `uom`, `remark`) VALUES
(4, 'Radio baofeng', '0808', '1', 'Set', 'Seting Full Channel CK (Radio Pribadi)h');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ht`
--
ALTER TABLE `ht`
  ADD PRIMARY KEY (`id_ht`);

--
-- Indexes for table `inv`
--
ALTER TABLE `inv`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rig`
--
ALTER TABLE `rig`
  ADD PRIMARY KEY (`id_rig`);

--
-- Indexes for table `serahterima`
--
ALTER TABLE `serahterima`
  ADD PRIMARY KEY (`id_serahterima`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ht`
--
ALTER TABLE `ht`
  MODIFY `id_ht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inv`
--
ALTER TABLE `inv`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rig`
--
ALTER TABLE `rig`
  MODIFY `id_rig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `serahterima`
--
ALTER TABLE `serahterima`
  MODIFY `id_serahterima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
