-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2018 pada 21.36
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siaunkris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nip` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama`, `email`, `no_telp`, `prodi`, `matkul`, `status`) VALUES
(275875664, 'Sumanto Prayogi', 'example@email.com', 812555788, 'Informatika', 'Pemrograman Web', 'Aktif'),
(275875665, 'Jono Sumito', 'example@email.com', 81265654, 'Informatika', 'Algoritma', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `email`, `no_telp`, `prodi`, `shift`, `status`) VALUES
(1770231050, 'Willy Adinata Saragih', 'willy.adinata@gmail.com', 628165744, 'Informatika', 'Reguler', 'Aktif'),
(1770231051, 'Syamsul', 'example@email.com', 76665547, 'Informatika', 'Reguler', 'Aktif'),
(1770231052, 'Rommy Andiansyah', 'example@email.com', 667546545, 'Informatika', 'Reguler', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_prodi`
--

CREATE TABLE `data_prodi` (
  `kode` varchar(100) NOT NULL,
  `no_ijin` varchar(100) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `ketua_prodi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_prodi`
--

INSERT INTO `data_prodi` (`kode`, `no_ijin`, `nama_prodi`, `ketua_prodi`, `email`, `status`) VALUES
('KP-TIF', 'NO.35/27/007/2003', 'Informatika', 'Surmanto Sitio', 'informatika@unkris.ac.id', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(20) NOT NULL COMMENT '1=Admin, 2=Prodi, 3=Dosen, 4=Mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Prodi informatika', 'prodi', '32b404761d910d277789cd91076d1459', 2),
(3, 'Dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 3),
(4, 'Mahasiswa', 'mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `data_prodi`
--
ALTER TABLE `data_prodi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
