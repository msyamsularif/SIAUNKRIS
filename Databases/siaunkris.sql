-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 06:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nip` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama`, `email`, `no_telp`, `prodi`, `gender`, `matkul`, `status`) VALUES
('12345677', 'Yanto', 'bongolarif@yahoo.co.id', 8777, 'Arsitek', 'Laki-laki', 'Bahasa Indonesia', 'Aktif'),
('275875664', 'M Syamsul Arif', 'example@email.com', 812555788, 'Informatika', 'Pria', 'Pemrograman Web', 'Aktif'),
('275875665', 'Jono Sumito', 'example@email.com', 81265654, 'Informatika', 'Pria', 'Algoritma', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `email`, `no_telp`, `prodi`, `shift`, `status`) VALUES
(5555, 'Nani Surnani', 'bongolarif@yahoo.co.id', 8777, 'Sipil', 'Reguler', 'Aktif'),
(5638, 'Joko Minto', 'bongolarif@yahoo.co.id', 8888, 'Elektro', 'Reguler', 'Aktif'),
(7896, 'Yaya', 'bongolarif@yahoo.co.id', 8777, 'Perencanaan Wilayah & Kota', 'Reguler', 'Aktif'),
(23456, 'Arah langkah', 'budi', 899, 'mesin', 'Reguler', 'Aktif'),
(67890, 'Ari', 'bongolarif@yahoo.co.id', 8888, 'Industri', 'Reguler', 'Aktif'),
(123456, 'Embrem Cekum', 'bongolarif@yahoo.co.id', 8777, 'Arsitek', 'Reguler', 'Aktif'),
(1770231015, 'Jono embrem', 'bongolarif@yahoo.co.id', 8777, 'Arsitek', 'Reguler', 'Aktif'),
(1770231019, 'Syamsul', 'example@email.com', 76665547, 'Informatika', 'Reguler', 'Aktif'),
(1770231050, 'Willy Adinata Saragih', 'willy.adinata@gmail.com', 628165744, 'Informatika', 'Reguler', 'Aktif'),
(1770231052, 'Rommy Andiansyah', 'example@email.com', 667546545, 'Informatika', 'Reguler', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_prodi`
--

CREATE TABLE `data_prodi` (
  `kode` varchar(255) NOT NULL,
  `no_ijin` varchar(100) NOT NULL,
  `nama_prodi` char(255) NOT NULL,
  `ketua_prodi` char(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_prodi`
--

INSERT INTO `data_prodi` (`kode`, `no_ijin`, `nama_prodi`, `ketua_prodi`, `email`, `status`) VALUES
('KP-TA', 'NO.PE/03/05/2015', 'Arsitek', 'Tatang', 'example@email.com', 'Aktif'),
('KP-TE', 'NO.PE/03/05/2016', 'Elektro', 'Sugiono', 'example@email.com', 'Aktif'),
('KP-TI', 'NO.PE/05/07/2018', 'Industri', 'Jono', 'example@email.com', 'Aktif'),
('KP-TIF', 'NO.PE/27/07/2003', 'Informatika', 'Surmanto Sitio', 'informatika@unkris.ac.id', 'Aktif'),
('KP-TM', 'NO.PE/02/01/2018', 'Mesin', 'Mawar', 'example@email.com', 'Aktif'),
('KP-TP', 'NO.PE/25/12/2014', 'Perencanaan Wilayah & Kota', 'Jajang', 'example@email.com', 'Aktif'),
('KP-TS', 'NO.PE/30/01/2017', 'Sipil', 'Martono', 'example@email.com', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_matkul_jadwal` varchar(255) NOT NULL,
  `nip_jadwal` varchar(255) NOT NULL,
  `kode_ruangan_jadwal` varchar(255) NOT NULL,
  `kode_prodi` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_matkul_jadwal`, `nip_jadwal`, `kode_ruangan_jadwal`, `kode_prodi`, `hari`, `jam`) VALUES
(27, 'MK001', '275875664', 'R001', 'KP-TP', 'Rabu', '12.30 - 12.40'),
(28, 'MK004', '275875665', 'R003', 'KP-TIF', 'Kamis', '10.00-11.00'),
(29, 'MK005', '275875664', 'R001', 'KP-TP', 'Sabtu', '12.30 - 12.40'),
(30, 'MK002', '12345677', 'R003', 'KP-TIF', 'Kamis', '12.30 - 12.40');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `kode_matkul_krs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `kode_matkul_krs`) VALUES
(36, 'MK001'),
(38, 'MK004'),
(39, 'MK005');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(255) NOT NULL,
  `nama_matkul` char(255) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`, `sks`) VALUES
('MK001', 'Sistem Basis Data', 3),
('MK002', 'Bahasa Inggris', 2),
('MK003', 'Pemrograman WEB', 4),
('MK004', 'Aljabar & Linear', 3),
('MK005', 'Komputer Grafik', 3),
('MK006', 'Matematika Diskrit', 4),
('MK007', 'Bahasa Indonesia', 2),
('MK008', 'Sistem Operasi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(255) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `nama_ruangan`) VALUES
('R001', 'Ruangan 302'),
('R002', 'Ruangan 203'),
('R003', 'Ruangan 306');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL COMMENT '1=Admin, 2=Prodi, 3=Dosen, 4=Mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'admin'),
(2, 'Prodi informatika', 'prodi', 'prodi', 'prodi'),
(3, 'Tatang', 'dosen', 'dosen', 'dosen'),
(4, 'Syam', '1770231019', 'mahasiswa', 'mahasiswa'),
(5, 'Uci', '1770231055', 'uci', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_prodi`
--
ALTER TABLE `data_prodi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `FK_jadwal_dosen` (`nip_jadwal`),
  ADD KEY `FK_jadwal_ruangan` (`kode_ruangan_jadwal`),
  ADD KEY `FK_jadwal_matakuliah` (`kode_matkul_jadwal`),
  ADD KEY `FK_jadwal_jurusan` (`kode_prodi`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal_dosen` FOREIGN KEY (`nip_jadwal`) REFERENCES `data_dosen` (`nip`),
  ADD CONSTRAINT `FK_jadwal_jurusan` FOREIGN KEY (`kode_prodi`) REFERENCES `data_prodi` (`kode`),
  ADD CONSTRAINT `FK_jadwal_matakuliah` FOREIGN KEY (`kode_matkul_jadwal`) REFERENCES `mata_kuliah` (`kode_matkul`),
  ADD CONSTRAINT `FK_jadwal_ruangan` FOREIGN KEY (`kode_ruangan_jadwal`) REFERENCES `ruangan` (`kode_ruangan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
