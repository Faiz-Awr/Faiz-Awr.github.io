-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 09 Okt 2024 pada 12.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbelanja`
--
CREATE DATABASE IF NOT EXISTS `dbbelanja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbbelanja`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarbelanja`
--

CREATE TABLE `daftarbelanja` (
  `id_item` int(11) NOT NULL,
  `nama_item` varchar(50) DEFAULT NULL,
  `jumlah_item` int(11) DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftarbelanja`
--

INSERT INTO `daftarbelanja` (`id_item`, `nama_item`, `jumlah_item`, `keterangan`) VALUES
(5, 'Saos', 1, 'Saos ABC'),
(6, 'Mie', 2, 'Indomie goreng, bukan mi sedap');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarbelanja`
--
ALTER TABLE `daftarbelanja`
  ADD PRIMARY KEY (`id_item`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarbelanja`
--
ALTER TABLE `daftarbelanja`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
