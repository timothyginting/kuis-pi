-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 18.55
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_motor`
--

CREATE TABLE `tbl_data_motor` (
  `id` int(10) NOT NULL,
  `merek_motor` varchar(225) NOT NULL,
  `varian_sepeda_motor` varchar(225) NOT NULL,
  `tipe_transmisi` varchar(225) NOT NULL,
  `harga_motor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data_motor`
--

INSERT INTO `tbl_data_motor` (`id`, `merek_motor`, `varian_sepeda_motor`, `tipe_transmisi`, `harga_motor`) VALUES
(0, 'Honda', 'Beat', 'Matic', 17000000),
(6, 'Honda', 'Scoopy', 'Matic', 20000000),
(7, 'Kawasaki', 'W175', 'Manual Kopling', 100000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_data_motor`
--
ALTER TABLE `tbl_data_motor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_data_motor`
--
ALTER TABLE `tbl_data_motor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
