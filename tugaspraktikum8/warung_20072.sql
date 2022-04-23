-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 16.53
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
-- Database: `warung_20072`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(6) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `stok` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`) VALUES
(1, 'LeMineral 500ml', 4000, 20),
(2, 'Coki-Coki', 1000, 35),
(3, 'Oreo Original', 12000, 9),
(4, 'Beng-Beng Coklat Karamel', 2500, 10),
(5, 'Cheetos Jagung Barak 75gr', 5000, 12),
(6, 'Cheetos BBQ 75gr', 5000, 11),
(7, 'Doritos Jagung Bakar 55gr', 6500, 15),
(8, 'Teh Pucuk 350ml', 3500, 18),
(9, 'Cimory Yoghurt Squeeze Original 120gr', 13000, 14),
(10, 'Sosis Kanzler Original', 8000, 35),
(11, 'Ale-ale', 2000, 100),
(12, 'Buavita Jeruk Peras', 6000, 90),
(13, '', 0, 0),
(14, 'Granita', 1000, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(6) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(1, 'Fathan Pebrilliestyo Ridwan', 'L', 'Jalan Tonjong No.21', '08987335266'),
(2, 'Uzumaki Kisut', 'L', 'Jalan Ninjaku No.12', '08784563567'),
(3, 'Nico Robin', 'P', 'Jalan Ohara No.66', '08989945664'),
(4, 'Nami Sulastri', 'P', 'Jalan Datebayo No.10', '08456123758'),
(5, 'Luffy D', 'L', 'Jalan Westblue No.34', '08253614859'),
(6, 'Uchiha Bayu', 'L', 'Jalan Konoha No.11', '08666499969'),
(7, 'Yona Putri Permana', 'L', 'Jalan Pinangraja No.78', '08745687459');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(6) NOT NULL,
  `id_pengguna` int(6) DEFAULT NULL,
  `id_barang` int(6) DEFAULT NULL,
  `tgl_beli` date DEFAULT NULL,
  `jml_beli` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pengguna`, `id_barang`, `tgl_beli`, `jml_beli`) VALUES
(1, 3, 4, '2021-11-24', 4),
(2, 3, 1, '2021-11-24', 2),
(3, 1, 8, '2021-11-24', 2),
(4, 2, 5, '2021-11-24', 3),
(5, 5, 1, '2021-11-24', 1),
(6, 4, 9, '2021-11-25', 2),
(7, 6, 2, '2021-11-25', 8),
(8, 6, 6, '2021-11-25', 2),
(9, 7, 7, '2021-11-25', 3),
(10, 5, 2, '2021-11-25', 5),
(11, 1, 10, '2021-11-26', 10),
(12, 2, 10, '2021-11-26', 6),
(13, 4, 10, '2021-11-26', 3),
(14, 5, 3, '2021-11-27', 2),
(15, 2, 10, '2021-11-27', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
