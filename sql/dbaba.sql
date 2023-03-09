-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 16.36
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
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` char(255) DEFAULT NULL,
  `created at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `update_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `permission`, `status`, `created_at`, `created_by`, `updated_at`, `update_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'son goku', 'venan', '$2y$10$A2hNk6mAXyNZQhXe5Ou5rOEA3BnfIAb9yeYJgOEP6ylRdsYdlm052', 'sdmana@mai.com', 'administrator', '1', '2023-02-04 18:08:35', NULL, '2023-02-21 13:01:46', NULL, '2023-02-04 18:08:35', NULL),
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
(24, 'coba coba', 'coba123', '$2y$10$FHjD9/HtocadpLwm6BOFl.CTkXcWbIHXNy/piLY/YHH3MYQhfC4Bi', 'coba@mail.com', 'administrator', '0', '2023-03-09 14:56:01', NULL, '2023-03-09 14:56:01', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
