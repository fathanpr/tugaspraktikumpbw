-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2022 pada 22.07
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
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id` int(10) NOT NULL,
  `mahasiswa_npm` char(13) NOT NULL,
  `matakuliah_kodemk` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id`, `mahasiswa_npm`, `matakuliah_kodemk`) VALUES
(1, '2010631170065', 'A2'),
(2, '2010631170072', 'A3'),
(3, '2010631170099', 'A1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`, `alamat`) VALUES
('2010631170065', 'Faiha Syahla', 'Teknik Informatika', 'Jl.Tonjong'),
('2010631170072', 'Fathan PR', 'Teknik Informatika', 'Jl.Ninjaku'),
('2010631170099', 'Eren Yaeger', 'Sistem Informasi', 'Jl.Yang Lurus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemk` char(6) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `jumlah_sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kodemk`, `nama_mk`, `jumlah_sks`) VALUES
('A1', 'Basis Data', 3),
('A2', 'Pemrograman Berbasis Web', 3),
('A3', 'Algoritma Dan Struktur Data', 3),
('A4', 'Kajian Jurnal Informatika', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_npm` (`mahasiswa_npm`),
  ADD KEY `matakuliah_kodemk` (`matakuliah_kodemk`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `mahasiswa_npm` FOREIGN KEY (`mahasiswa_npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `matakuliah_kodemk` FOREIGN KEY (`matakuliah_kodemk`) REFERENCES `matakuliah` (`kodemk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
