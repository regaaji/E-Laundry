-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2019 at 06:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_barang_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `owner_id`, `nama`, `harga`, `gambar`, `user_id`, `status_barang_id`, `created_at`, `updated_at`) VALUES
(7, 1, 'clean wipe', 12000, 'shoes.jpg', 3, 1, '2019-07-06 17:00:00', '2019-07-06 17:00:00'),
(8, 1, 'clean all wipe', 5000, 'towel.jpg', 3, 1, '2019-07-06 17:00:00', '2019-07-06 17:00:00'),
(9, 2, 'clean essii', 6000, 'towel.jpg', 4, 1, '2019-07-06 17:00:00', '2019-07-06 17:00:00'),
(10, 3, 'Cuci & Lipat', 5000, 'bedcover.jpg', 5, 1, '2019-07-11 01:50:26', '2019-07-06 17:00:00'),
(11, 2, 'clean all essii', 3000, 'towel.jpg', 4, 2, '2019-07-07 11:27:25', '2019-07-06 17:00:00'),
(12, 6, 'clean all', 5000, 'bedcover1.jpg', 10, 1, '2019-07-08 11:23:35', '0000-00-00 00:00:00'),
(13, 3, 'Cuci & Setrika', 10000, 'iron1.jpg', 5, 1, '2019-07-11 01:58:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner`
--

CREATE TABLE `tbl_owner` (
  `id_owner` int(11) NOT NULL,
  `nama_owner` varchar(100) NOT NULL,
  `isi` int(11) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_owner`
--

INSERT INTO `tbl_owner` (`id_owner`, `nama_owner`, `isi`, `gambar_produk`, `created_at`, `updated_at`) VALUES
(1, 'wipe', 15, 'wipe.jpg', '2019-07-09 04:05:22', '2019-07-01 17:00:00'),
(2, 'essii', 10, 'essii.jpg', '2019-07-06 04:15:00', '2019-07-01 17:00:00'),
(3, 'basic', 15, '', '2019-07-04 06:35:35', '2019-07-03 17:00:00'),
(4, 'admin', 0, '', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(5, 'user', 0, '', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(6, 'rega laundry', 50, 'blog2.png', '2019-07-09 04:22:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `status_barang_id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `user_id`, `owner_id`, `status_barang_id`, `gambar`, `harga`, `created_at`, `updated_at`) VALUES
(8, 'clean wipe', 3, 1, 1, 'shoes.jpg', 10000, '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(9, 'clean essii', 4, 2, 1, 'towel.jpg', 7000, '2019-07-08 03:29:50', '2019-07-03 17:00:00'),
(10, 'Cuci & Lipat', 10, 6, 1, 'shoes1.jpg', 5000, '2019-07-11 01:39:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `nama_status`, `created_at`, `updated_at`) VALUES
(1, 'proses permintaan', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(2, 'permintaan diterima', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(3, 'permintaan ditolak', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(4, 'barang sudah diambil', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(5, 'barang sedang diproses', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(6, 'barang sudah selesai', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(7, 'barang sedang diantar', '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(8, 'barang sudah diterima', '2019-07-06 07:33:09', '2019-07-03 17:00:00'),
(9, 'Barang selesai', '2019-07-07 17:00:00', '2019-07-07 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_barang`
--

CREATE TABLE `tbl_status_barang` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_barang`
--

INSERT INTO `tbl_status_barang` (`id`, `nama_status`, `created_at`, `updated_at`) VALUES
(1, 'Di izinkan', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(2, 'Di tolak', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(3, 'Di cek', '2019-07-01 17:00:00', '2019-07-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `tanggal_jemput` varchar(100) NOT NULL,
  `tanggal_kirim` varchar(100) NOT NULL,
  `waktu_jemput` varchar(100) NOT NULL,
  `waktu_kirim` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `status_id`, `user_id`, `owner_id`, `lng`, `lat`, `location`, `tanggal_jemput`, `tanggal_kirim`, `waktu_jemput`, `waktu_kirim`, `bukti`, `tipe`, `harga`, `created_at`, `updated_at`) VALUES
(3, 9, 9, 2, '111.69811190', '-8.05195370', 'ngantru', '06-07-2019', '09-07-2019', '16:00', '16:00', 'sah', 'Tunai', 7000, '2019-07-10 09:17:38', '0000-00-00 00:00:00'),
(4, 6, 9, 2, '3434', '23232', 'dsds', '3434', '343434', '23323', '232323', 'sdsds', 'sdsds', 232323, '2019-07-10 09:08:16', '2019-07-06 17:00:00'),
(5, 6, 8, 1, '111.65961100', '-8.08963430', 'karangan trenggalek', '08-07-2019', '11-07-2019', '10:00', '11:00', 'sah', 'keri', 5000, '2019-07-10 09:04:00', '0000-00-00 00:00:00'),
(6, 9, 8, 6, '111.65961100', '-8.08963430', 'karangan trenggalek', '08-07-2019', '11-07-2019', '17:00', '15:00', 'sah', 'keri', 5000, '2019-07-08 11:46:23', '0000-00-00 00:00:00'),
(7, 6, 11, 1, '111.65958881', '-8.08962584', 'karangan trenggalek', '09-07-2019', '12-07-2019', '11:00', '18:00', 'sah', 'Tunai', 17000, '2019-07-10 09:04:54', '0000-00-00 00:00:00'),
(8, 1, 11, 3, '111.66320460', '-8.07456960', 'kerjo', '11-07-2019', '14-07-2019', '9:00', '12:00', 'sah', 'keri', 5000, '2019-07-11 02:14:33', '0000-00-00 00:00:00'),
(9, 1, 11, 2, '111.643689', '-8.040345', 'sukorejo trenggalek', '11-07-2019', '14-07-2019', '10:00', '15:00', 'sah', 'keri', 6000, '2019-07-11 04:18:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role_id` int(4) NOT NULL,
  `is_active` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `owner_id`, `nama`, `username`, `email`, `image`, `password`, `telepon`, `alamat`, `role_id`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 1, 'wipe', 'wipe', 'wipe@gmail.com', 'default.jpg', '$2y$10$0lTzQ8Qsk8yxvh8.dHiKkuGYW5poQqtFsGc1JeB4EVnDLwQnW2gFS', '', '', 2, 1, '2019-07-04 03:42:29', '2019-07-03 17:00:00'),
(4, 2, 'essii', 'essii', 'essii@gmail.com', 'default.jpg', '$2y$10$qyWb33RqsD.F/YBFzYXRV.V9jEPnMGEDX5ihhrUHZFrhhDzAAND4G', '', '', 2, 1, '2019-07-04 03:42:36', '2019-07-03 17:00:00'),
(5, 3, 'basic', 'basic', 'basic@gmail.com', 'default.jpg', '$2y$10$zRDmCM4oZiteEE0SV6h88uqsmLu2AUD1Ek910P3osPSHugiDpUv5q', '', '', 2, 1, '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(8, 4, 'rega', 'rega', 'regaajiprayogo23@gmail.com', 'default.jpg', '$2y$10$3ED3w/4e1l7jVQjr0eKNvezcfmkLWC.MhUR.2bbbBg74CAnXdFmb.', '085235149501', 'karangan', 1, 1, '2019-07-06 06:39:20', '2019-07-03 17:00:00'),
(9, 5, 'aji', 'aji', 'aji@gmail.com', 'default.jpg', '$2y$10$p3YBh4aaVJMsqpFpQfiVB.srDnJX3y1pFFipRvDq5MaI7gkCHuezG', '085235149501', 'trenggalek', 3, 1, '2019-07-06 06:39:34', '2019-07-03 17:00:00'),
(10, 6, 'rega laundry', 'rega laundry', 'regaajiprayogo@gmail.com', 'default.jpg', '$2y$10$75WwwjPCqvU1Au8q3FuYBuRw5FEmUqlp2H28Y0.H9KXTGOUPkw2LO', '0845454545454545', 'karangan                          \r\n                        ', 2, 1, '2019-07-08 02:34:22', '0000-00-00 00:00:00'),
(11, 5, 'aan', 'aan', 'aan@gmail.com', 'default.jpg', '$2y$10$cr5SZ10dxOv3iPrO/kqmMO2VbQzcG//xX8H5EVq8YdMfWJI3w/6Sy', '085235149501', 'karangan', 3, 1, '2019-07-11 02:04:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(2, 1, 1, '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(3, 3, 3, '2019-07-01 17:00:00', '2019-07-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(2, 'Owner', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(3, 'User', '2019-07-01 17:00:00', '2019-07-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(2, 'Owner', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(3, 'User', '2019-07-01 17:00:00', '2019-07-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'Produk', 'admin/owner', 'fas fa-cubes', 1, '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(2, 2, 'Transaksi', 'admin/owner/transaksi', 'fas fa-credit-card', 1, '2019-07-03 17:00:00', '2019-07-03 17:00:00'),
(3, 1, 'Dashboard', 'admin/admin', 'fas fa-tachometer-alt', 1, '2019-07-04 06:30:14', '2019-07-03 17:00:00'),
(4, 1, 'Owner', 'admin/admin/owner', 'fas fa-store', 1, '2019-07-04 06:30:37', '2019-07-03 17:00:00'),
(5, 1, 'Produk Owner', 'admin/admin/produk', 'fas fa-cubes', 1, '2019-07-07 10:41:26', '2019-07-06 17:00:00'),
(6, 1, 'Customers', 'admin/admin/customers', 'fas fa-users', 1, '2019-07-08 17:00:00', '2019-07-08 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `status_barang_id` (`status_barang_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `status_barang_id` (`status_barang_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_status_barang`
--
ALTER TABLE `tbl_status_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_status_barang`
--
ALTER TABLE `tbl_status_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id_owner`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`status_barang_id`) REFERENCES `tbl_status_barang` (`id`),
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id_owner`),
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`status_barang_id`) REFERENCES `tbl_status_barang` (`id`),
  ADD CONSTRAINT `tbl_produk_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`id_status`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id_owner`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id_owner`);

--
-- Constraints for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);

--
-- Constraints for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
