-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2023 pada 16.54
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `status` char(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `pesan`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(2, 'coba coba', 'venan@inspiraworld.com', 'aaaaaaaaaaaacccccccccccvvvvvvvvvvv', '0', '2023-04-30 14:50:30', NULL, '2023-04-30 14:50:30', NULL, NULL, NULL),
(3, 'aaaaaaaaaaaa', 'sdmana@mai.com', 'aaaaaaaaaaaccccccccccccddddddddd', '0', '2023-04-30 14:50:54', NULL, '2023-04-30 14:51:51', NULL, NULL, NULL),
(4, 'bbbbbbbbbbbbbbbbbbbb', 'siapa@mail.com', 'aaaaaaaaaaaaaaccccccccsssssssss', '1', '2023-04-30 14:51:08', NULL, '2023-04-30 14:51:25', NULL, NULL, NULL),
(5, 'Antara Zenit', '20k10001@student.unika.com', 'aaaaaaaa', '1', '2023-04-30 14:51:16', NULL, '2023-04-30 14:51:16', NULL, NULL, NULL),
(6, 'aaaaaaaaaaaaa', '20k10001@student.unika.com', 'aaaaaaaavvvvvvv', '1', '2023-04-30 14:51:42', NULL, '2023-04-30 14:51:42', NULL, NULL, NULL),
(7, 'aaaaaaaaaaaaa', '20k10001@student.unika.com', 'aaaaaaaavvvvvvv', '1', '2023-04-30 14:51:42', NULL, '2023-04-30 14:51:42', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` char(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `nama`, `keterangan`, `image`, `file`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(20, '12 Pilar Hashira1', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-25 15:30:30', NULL, NULL, NULL),
(21, '12 Pilar Hashira2', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(22, '12 Pilar Hashira3', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(23, '12 Pilar Hashira4', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(24, '12 Pilar Hashira5', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(25, '12 Pilar Hashira6', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(26, '12 Pilar Hashira7', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(27, '12 Pilar Hashira8', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(28, '12 Pilar Hashira9', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '0', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL),
(29, '12 Pilar Hashira10', 'Pemburu Iblis', '1682436630.jfif', '1682246779.pdf', '1', '2023-04-23 10:46:19', NULL, '2023-04-23 10:46:19', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `image`, `whatsapp`, `keterangan`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(14, 'Antara Zenit', '500000000000', '1682246740.png', 'https://www.whatsapp.com/', 'dead or alive', '0', '2023-04-23 10:45:40', NULL, '2023-04-25 12:42:05', NULL, NULL, NULL),
(15, 'Antara Zenit1', '500000000000', '1682424750.jpg', 'https://www.whatsapp.com/', 'dead or alive', '1', '2023-04-25 12:12:30', NULL, '2023-04-25 12:42:15', NULL, NULL, NULL),
(16, 'cobaadw', '10.000', '1682424773.jpg', 'https://www.whatsapp.com/', 'aaaaaaaaaaaaa', '1', '2023-04-25 12:12:53', NULL, '2023-04-25 12:42:19', NULL, NULL, NULL),
(17, 'coba3adwdd', '9.000', '1682424788.jpg', 'https://www.whatsapp.com/', 'adwwwwww', '1', '2023-04-25 12:13:08', NULL, '2023-04-25 12:42:24', NULL, NULL, NULL),
(18, 'coba3', '500000000000', '1682424813.jpg', 'https://www.whatsapp.com/', 'dddddddddddddddd', '0', '2023-04-25 12:13:33', NULL, '2023-04-25 12:42:29', NULL, NULL, NULL),
(19, 'coba apa', '100000', '1682424813.jpg', 'https://www.whatsapp.com/', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', '2023-04-25 12:13:33', NULL, '2023-04-25 12:42:29', NULL, NULL, NULL),
(20, 'apaa apaa', '2222222222222222', '1682424813.jpg', 'https://www.whatsapp.com/', 'asdfasfdsfsdfsdfsd', '1', '2023-04-25 12:13:33', NULL, '2023-04-25 12:42:29', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `deskripsi`, `image`, `linkedin`, `facebook`, `instagram`, `keterangan`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'coba coba21', 'Pimpinan', 'CEO Materpiece', '1680658674.jpg', '', 'https://www.facebook.com/', 'https://www.instagram.com/', 'dead or alive', '1', '2023-04-04 02:55:17', NULL, '2023-04-05 01:37:54', NULL, NULL, NULL),
(3, 'aaaaa', 'aaaaa', 'aaaaaa', '1680658693.jpg', 'https://id.linkedin.com/', '', 'https://www.instagram.com/', 'aaaa', '1', '2023-04-04 02:55:55', NULL, '2023-04-05 01:38:13', NULL, NULL, NULL),
(5, 'coba coba', 'awdawd', 'CEO Materpiece', '1682434771.png', 'https://id.linkedin.com/', 'https://www.facebook.com/', '', 'dead or alive', '1', '2023-04-25 14:59:31', NULL, '2023-04-25 14:59:31', NULL, NULL, NULL),
(6, 'coba coba', 'Pimpinan', 'aaaaaaaaaaaaaa', '1682434849.jpg', 'https://id.linkedin.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'aaaaaaaaaaaaaaa', '0', '2023-04-25 15:00:49', NULL, '2023-04-25 15:00:49', NULL, NULL, NULL),
(7, 'Antara Zenit', 'Pimpinan', 'CEO Materpiece', '1682599324.jpg', NULL, NULL, NULL, 'adwwwwww', '1', '2023-04-27 12:42:04', NULL, '2023-04-27 12:42:04', NULL, NULL, NULL),
(8, 'Antara Zenit', 'awdawd', 'aaaaaaaaaaaaaaa', '1682863483.jpg', 'https://id.linkedin.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'aaaaaaaaaaaaa', '1', '2023-04-30 14:04:43', NULL, '2023-04-30 14:15:56', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `status` char(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `permission`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'son goku', 'venan', '$2y$10$A2hNk6mAXyNZQhXe5Ou5rOEA3BnfIAb9yeYJgOEP6ylRdsYdlm052', 'sdmana@mai.com', 'administrator', '1', '2023-02-04 18:08:35', NULL, '2023-03-19 11:03:47', NULL, '2023-02-04 18:08:35', NULL),
(2, 'ada', 'coba', 'admin', 'ada.@mail.com', 'administrator', 'aktif', '2023-02-04 18:11:56', NULL, '2023-02-06 13:15:39', NULL, '2023-02-04 18:11:56', NULL),
(3, 'Kamado Tanjiro', 'Sehun', 'admin', 'v3n4n.fw@gmail.com', 'administrator', 'on', '2023-02-06 12:52:16', NULL, '2023-02-06 12:52:16', NULL, NULL, NULL),
(4, 'ada', 'coba', 'admin', 'ada.@com', 'administrator', 'aktif', '2023-02-06 13:08:47', NULL, '2023-02-06 13:08:47', NULL, NULL, NULL),
(5, 'ada', 'coba', 'admin', 'ada.@mail.com', 'administrator', 'aktif', '2023-02-06 13:10:51', NULL, '2023-02-06 13:10:51', NULL, NULL, NULL),
(6, 'Yagami Taichi', 'Ventus', 'ADMIN', 'v3n4n.fw@gmail.com', 'operator', '1', '2023-02-06 13:47:43', NULL, '2023-02-06 13:47:43', NULL, NULL, NULL),
(16, 'Dilan', 'Admin', 'admin12345', 'hmti@unika.ac.id', 'operator', '1', '2023-02-14 01:45:38', NULL, '2023-02-14 01:45:38', NULL, NULL, NULL),
(17, 'Venansius Fortunatus Wijaya', 'Admin', 'adamiandasad', 'v3n4n.fw@gmail.com', 'administrator', '1', '2023-02-14 01:47:58', NULL, '2023-02-14 01:47:58', NULL, NULL, NULL),
(20, 'Son Goku', 'Venan', 'admin12345', 'v3n4n.fw@gmail.com', 'administrator', '1', '2023-02-15 13:43:33', NULL, '2023-02-15 13:43:33', NULL, NULL, NULL),
(22, 'Satoshi', 'Venan', '$2y$10$vl9/N5i8BGTu3H7yE82n1uXk5Jp9CAYzGtJIdtz0IrYMrSKjhEErO', '20k10001@student.unika.ac.id', 'administrator', '1', '2023-02-17 15:47:25', NULL, '2023-02-21 13:36:51', NULL, NULL, NULL),
(23, 'Super Admin', 'super', '$2y$10$tmQnj7k36VF0kpRZjIrH4e0EF1lQjlFIJTQuMprmJsSxz91b.YK9.', 'super@mail.com', 'administrator', '1', '2023-02-23 13:24:20', NULL, '2023-02-23 13:24:20', NULL, NULL, NULL),
(24, 'coba coba', 'coba123', '$2y$10$FHjD9/HtocadpLwm6BOFl.CTkXcWbIHXNy/piLY/YHH3MYQhfC4Bi', 'coba@mail.com', 'administrator', '0', '2023-03-09 14:56:01', NULL, '2023-03-09 14:56:01', NULL, NULL, NULL),
(25, 'borutooo', 'namasayasiapa', '$2y$10$IakX6nepkxJN23eIn7ANNu6wvGDsp73YE6yKkGlAUV5nNIGEvPzn6', 'siapa@mail.com', 'administrator', '1', '2023-03-19 10:50:39', NULL, '2023-03-19 10:55:44', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
