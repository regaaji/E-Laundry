-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2019 at 09:25 AM
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
-- Database: `ci_e-laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner`
--

CREATE TABLE `tbl_owner` (
  `id` int(11) NOT NULL,
  `paket_id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_owner`
--

INSERT INTO `tbl_owner` (`id`, `paket_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'wipe', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(2, 2, 'essii', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(3, 2, 'basic', '2019-06-28 17:00:00', '2019-06-28 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id`, `nama_paket`, `created_at`, `updated_at`) VALUES
(1, 'sepatu', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(2, 'semua', '2019-06-28 17:00:00', '2019-06-28 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `status_barang_id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `owner_id`, `status_barang_id`, `nama_produk`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'clean sepatu', 15000, 'shoes.jpg', '2019-07-01 06:15:25', '2019-06-30 17:00:00'),
(2, 1, 2, 'clean', 10000, 'shoes1.jpg', '2019-06-30 17:00:00', '2019-06-30 17:00:00'),
(3, 1, 3, 'clean shoes', 10000, 't-shirt2.jpg', '2019-07-01 02:41:22', '0000-00-00 00:00:00'),
(5, 2, 1, 'sweet clean', 12000, 'pillow.jpg', '2019-07-01 06:18:11', '2019-06-30 17:00:00'),
(6, 2, 2, 'dry  clean', 10000, 'towel.jpg', '2019-07-01 06:48:49', '2019-06-30 17:00:00'),
(8, 2, 3, 'rer', 232, 'essii1.jpg', '2019-07-01 07:06:36', '0000-00-00 00:00:00'),
(9, 3, 1, 'basic clean', 20000, 'bedcover.jpg', '2019-07-01 09:21:23', '2019-06-30 17:00:00'),
(10, 3, 2, 'rerer', 12121, 'bag.jpg', '2019-07-01 10:17:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `udated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `nama`, `created_at`, `udated_at`) VALUES
(1, 'proses permintaan', '2019-06-29 06:14:54', '0000-00-00 00:00:00'),
(2, 'permintaan diterima', '2019-06-30 06:49:34', '2019-06-28 17:00:00'),
(3, 'permintaan ditolak', '2019-06-30 06:49:47', '2019-06-28 17:00:00'),
(4, 'Barang sudah diambil', '2019-06-29 17:00:00', '2019-06-29 17:00:00'),
(5, 'Barang sedang diproses', '2019-06-29 17:00:00', '2019-06-29 17:00:00'),
(6, 'Barang sudah selesai', '2019-06-29 17:00:00', '2019-06-29 17:00:00'),
(7, 'Barang sedang di antar', '2019-06-29 17:00:00', '2019-06-29 17:00:00'),
(8, 'Barang sudah diterima', '2019-06-29 17:00:00', '2019-06-29 17:00:00'),
(9, 'Barang selesai', '2019-06-29 17:00:00', '2019-06-29 17:00:00');

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
(1, 'Di izinkan', '2019-06-30 17:00:00', '2019-06-30 17:55:00'),
(2, 'Di tolak', '2019-06-30 17:00:00', '2019-06-30 17:00:00'),
(3, 'Di cek', '2019-06-30 17:00:00', '2019-06-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `lng` float NOT NULL,
  `lat` float NOT NULL,
  `location` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `tanggal_jemput` varchar(50) NOT NULL,
  `tanggal_kirim` varchar(50) NOT NULL,
  `waktu_jemput` varchar(50) NOT NULL,
  `waktu_kirim` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `status_id`, `user_id`, `owner_id`, `lng`, `lat`, `location`, `bukti`, `tanggal_jemput`, `tanggal_kirim`, `waktu_jemput`, `waktu_kirim`, `tipe`, `harga`, `created_at`, `updated_at`) VALUES
(5, 7, 4, 1, 111.706, -8.07645, 'ngantru', 'atas.jpeg', '30-06-2019', '03-07-2019', '15:00', '15:00', 'Non Tunai', 15000, '2019-07-03 04:21:01', '0000-00-00 00:00:00'),
(11, 2, 4, 1, 111.946, -8.01544, 'tugu', 'atas.jpeg', '01-07-2019', '04-07-2019', '14:00', '10:00', 'Non Tunai', 15000, '2019-07-03 04:28:11', '0000-00-00 00:00:00'),
(12, 2, 4, 3, 110.861, -7.54958, 'karangan', 'keri', '01-07-2019', '04-07-2019', '11:00', '10:00', 'keri', 20000, '2019-07-03 03:49:37', '0000-00-00 00:00:00'),
(13, 2, 1, 1, 111.946, -8.01544, 'kerjo', 'banks-image.png', '02-07-2019', '05-07-2019', '16:00', '12:00', 'Tunai', 45000, '2019-07-03 04:15:26', '0000-00-00 00:00:00'),
(14, 1, 6, 1, 111.662, -8.07647, 'Jalan Karangan-Tugu', 'keri', '03-07-2019', '06-07-2019', '16:00', '13:00', 'keri', 15000, '2019-07-03 04:43:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL,
  `usertype` int(5) NOT NULL,
  `is_active` int(1) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `konfirmasi_password`, `usertype`, `is_active`, `telepon`, `alamat`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Rega Aji', 'rega', '$2y$10$Z6ZpQ/tDwhElXDVHnu6Vj.4KCsRng7CaUFMg3UQUtgPDTmCSYK5VO', '$2y$10$AlfzN8dyYJ0Z2UTzJvf.mux1N0Rnba/jVr3nKNJrHEh5Vd55GNY6C', 1, 1, '085235149501', 'karangan', 'admin.jpg', '2019-06-30 01:00:50', '2019-06-28 17:00:00'),
(4, 'aji', 'aji', '$2y$10$p3YBh4aaVJMsqpFpQfiVB.srDnJX3y1pFFipRvDq5MaI7gkCHuezG', '$2y$10$AlfzN8dyYJ0Z2UTzJvf.mux1N0Rnba/jVr3nKNJrHEh5Vd55GNY6C', 3, 1, '084343434', 'karangan', 'vera.png', '2019-06-30 00:48:01', '0000-00-00 00:00:00'),
(5, 'aan', 'aan', '$2y$10$W.oNP3UTWNkqGeuazlFgX..fzAplho5mLVV/dU6GzbZQtoAcB9X06', '$2y$10$hJGNofV11hJlJw0K6ORNL.cshpFTX7dmrxildvJylSoGkKC4RENFS', 3, 1, '084323232', 'karangan', 'user.jpg', '2019-07-01 03:10:32', '0000-00-00 00:00:00'),
(6, 'dody', 'dody', '$2y$10$MSCwkjo1PsOLAZpV5jWyu.QNLShsuKxJIIquO4SdxcvXa2CQdnxQO', '$2y$10$HD0FBamTVCB24DjtXqmFJ.4v8L7rZea2sUIdE0ZA3CWCVJ9TVKOdG', 3, 1, '085345667342', 'Tugu', 'user.jpg', '2019-07-03 04:34:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `id_usertype` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`id_usertype`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(2, 'owner', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(3, 'user', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(4, 'pemilik', '2019-06-28 17:00:00', '2019-06-28 17:00:00'),
(5, 'pengusaha', '2019-06-29 14:15:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL,
  `to` int(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'wipe', 'wipe@gmail.com', 'default.jpg', '$2y$10$0lTzQ8Qsk8yxvh8.dHiKkuGYW5poQqtFsGc1JeB4EVnDLwQnW2gFS', 2, 1, 1555985738),
(8, 'Rega Aji', 'regaajiprayogo23@gmail.com', 'default.jpg', '$2y$10$3ED3w/4e1l7jVQjr0eKNvezcfmkLWC.MhUR.2bbbBg74CAnXdFmb.', 1, 1, 1556192286),
(9, 'essii', 'essii@gmail.com', 'default.jpg', '$2y$10$qyWb33RqsD.F/YBFzYXRV.V9jEPnMGEDX5ihhrUHZFrhhDzAAND4G', 3, 1, 1556192286),
(10, 'basic', 'basic@gmail.com', 'default.jpg', '$2y$10$zRDmCM4oZiteEE0SV6h88uqsmLu2AUD1Ek910P3osPSHugiDpUv5q', 4, 1, 1556192286);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 5),
(3, 2, 4),
(4, 1, 6),
(7, 1, 7),
(8, 3, 8),
(9, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Wipe'),
(5, 'Owner'),
(6, 'Customers'),
(7, 'Produk'),
(8, 'Essii'),
(9, 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Wipe'),
(3, 'Essii'),
(4, 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/admin', 'fas fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu/index', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(7, 4, 'Produk', 'admin/wipe', 'fas fa-cubes', 1),
(8, 4, 'Transaksi', 'admin/wipe/transaksi', 'far fa-credit-card', 1),
(9, 5, 'Owner', 'admin/admin/owner', 'fas fa-store', 1),
(10, 6, 'Customers', 'admin/admin/customers', 'fas fa-users', 1),
(11, 7, 'Produk', 'admin/admin/produk', 'fas fa-cubes', 1),
(12, 8, 'Produk', 'admin/essii', 'fas fa-cubes', 1),
(13, 8, 'Transaksi', 'admin/essii/transaksi', 'fas fa-credit-card', 1),
(14, 9, 'Produk', 'admin/basic', 'fas fa-cubes', 1),
(15, 9, 'Transaksi', 'admin/basic/transaksi', 'fas fa-credit-card', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `status_barang_id` (`status_barang_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype` (`usertype`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`id_usertype`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_status_barang`
--
ALTER TABLE `tbl_status_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id_usertype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `tbl_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id`);

--
-- Constraints for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  ADD CONSTRAINT `tbl_owner_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `tbl_paket` (`id`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id`),
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`status_barang_id`) REFERENCES `tbl_status_barang` (`id`),
  ADD CONSTRAINT `tbl_produk_ibfk_3` FOREIGN KEY (`status_barang_id`) REFERENCES `tbl_status_barang` (`id`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`id`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `tbl_owner` (`id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `tbl_usertype` (`id_usertype`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
