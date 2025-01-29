-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2025 pada 07.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_sekai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user_mobile`
--

CREATE TABLE `master_user_mobile` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `jenis_toko` varchar(255) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `alamat_toko` text NOT NULL,
  `kode_pos` varchar(15) NOT NULL,
  `lokasi_toko` varchar(255) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1 COMMENT '0 = tidak aktif\r\n1 = aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_user_mobile`
--

INSERT INTO `master_user_mobile` (`id`, `nama`, `email`, `nama_toko`, `jenis_toko`, `no_ktp`, `alamat_toko`, `kode_pos`, `lokasi_toko`, `no_telp`, `kota`, `password`, `created_at`, `flag`) VALUES
(1, 'putra3', 'putra3@gmail.com', 'putra3 Toko', 'Semi Elektronik', '1234567890123456', 'sememi surabaya', '123456', 'pasar', '0822123456789', 'surabaya', 'd1c056a983786a38ca76a05cda240c7b86d77136', '2025-01-26 14:59:38', 1),
(3, 'supriyatno', 'supriyatno@gmail.com', 'lima enam', 'semi elektronik', '1234567890123456', 'pertigaan goban', '123456', 'samping pasar rame', '022123456789', 'sidoarjo', 'd1c056a983786a38ca76a05cda240c7b86d77136', '2025-01-27 19:10:55', 1),
(4, 'Mike', 'mike@gmail.com', 'maju jaya', 'elektronik', '8542316295646480', 'tujuh simpang', '646284', 'jalan raya jadi', '0821123456789', 'jombang', 'd1c056a983786a38ca76a05cda240c7b86d77136', '2025-01-28 22:33:16', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user_web`
--

CREATE TABLE `master_user_web` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_user_web`
--

INSERT INTO `master_user_web` (`id`, `nama`, `username`, `password`, `created_at`) VALUES
(1, 'Admin Sekai', 'sekai', '8f4378deebc175b57191de2f16f41a2aa08796fa', '2025-01-28 20:44:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_scan_barang`
--

CREATE TABLE `table_scan_barang` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_scan_barang`
--

INSERT INTO `table_scan_barang` (`id`, `nama_toko`, `nama_barang`, `serial_number`, `created_at`) VALUES
(1, 'putra3 Toko', 'mejikom', '1234567890', '2025-01-27 21:10:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_user_mobile`
--
ALTER TABLE `master_user_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_user_web`
--
ALTER TABLE `master_user_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_scan_barang`
--
ALTER TABLE `table_scan_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_user_mobile`
--
ALTER TABLE `master_user_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_user_web`
--
ALTER TABLE `master_user_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `table_scan_barang`
--
ALTER TABLE `table_scan_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
