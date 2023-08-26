-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 21.12
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lembur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lemburs`
--

CREATE TABLE `data_lemburs` (
  `id` int(11) NOT NULL,
  `upah_perjam` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_lemburs`
--

INSERT INTO `data_lemburs` (`id`, `upah_perjam`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '55000', NULL, NULL, '2023-07-09 18:57:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembur_pegawais`
--

CREATE TABLE `lembur_pegawais` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_lembur` varchar(255) NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `jam_selesai` varchar(255) NOT NULL,
  `upah_perjam` varchar(255) NOT NULL,
  `total_upah` varchar(255) NOT NULL,
  `hal_yang_dikerjakan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lembur_pegawais`
--

INSERT INTO `lembur_pegawais` (`id`, `nama_pegawai`, `nomor_hp`, `jabatan`, `tanggal_lembur`, `jam_mulai`, `jam_selesai`, `upah_perjam`, `total_upah`, `hal_yang_dikerjakan`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Aryo Michael', '085340139120', 'pegawai', '9-Juli-2023', '13 : 26', '13 : 26', '50000', '200000', 'f', 'ACC', NULL, '2023-07-08 21:27:13', '2023-07-08 21:50:30'),
(5, 'Destria', '085123123123', 'Bendahara', '9-Juli-2023', '14 : 18', '14 : 18', '50000', '600000', 'Menghitung Uang', 'belum', NULL, '2023-07-08 22:18:50', '2023-07-08 22:18:50'),
(9, 'Aryo Michael', '085340139120', 'pegawai', '9-Juli-2023', '18 : 44', '18 : 47', '50000', '2700000', 'makan', 'ACC', NULL, '2023-07-09 02:48:07', '2023-07-09 03:26:02'),
(10, 'Destria', '085123123123', 'Bendahara', '9-Juli-2023', '19 : 32', '19 : 32', '30000', '600000', 'Menghitung Uang', 'belum', NULL, '2023-07-09 03:33:09', '2023-07-09 03:33:09'),
(11, 'Aryo Michael', '085340139120', 'pegawai', '10-Juli-2023', '11 : 2', '11 : 2', '55000', '495000', 'mengetik', 'belum', NULL, '2023-07-09 19:02:32', '2023-07-09 19:02:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama_pegawai`, `nomor_hp`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aryo Michael', '085340139120', '12345678', 'pegawai', NULL, NULL, '2023-07-07 11:58:25'),
(3, 'Eko Suripto Passinggi', '123456789', '12345678', 'admin', NULL, '2023-07-07 11:43:09', '2023-07-07 11:43:09'),
(5, 'Destria', '085123123123', '085123123123', 'Bendahara', NULL, '2023-07-08 22:17:49', '2023-07-08 22:17:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_lemburs`
--
ALTER TABLE `data_lemburs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_lemburs`
--
ALTER TABLE `data_lemburs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
