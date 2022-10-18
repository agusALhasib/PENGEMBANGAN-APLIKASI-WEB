-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2022 pada 16.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_227`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasib`
--

CREATE TABLE `tbl_hasib` (
  `id_hasib` int(11) NOT NULL,
  `nama_hasib` varchar(40) NOT NULL,
  `alamat_hasib` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hasib`
--

INSERT INTO `tbl_hasib` (`id_hasib`, `nama_hasib`, `alamat_hasib`) VALUES
(1, 'hasib', ''),
(2, 'akbar', ''),
(3, 'kang bahar', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_hasib`
--
ALTER TABLE `tbl_hasib`
  ADD PRIMARY KEY (`id_hasib`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_hasib`
--
ALTER TABLE `tbl_hasib`
  MODIFY `id_hasib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
