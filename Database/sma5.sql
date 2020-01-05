-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 12:07 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbd_siswa`
--

CREATE TABLE `tbd_siswa` (
  `nis` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(5) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `kode_status` varchar(1) NOT NULL DEFAULT 'A',
  `kode_jam` int(10) NOT NULL,
  `tanggal_absen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id_izin` int(4) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_status` varchar(1) NOT NULL,
  `keterangan` text NOT NULL,
  `foto1` varchar(35) NOT NULL,
  `foto2` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kode_jadwal` varchar(6) NOT NULL,
  `unggah_jadwal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam`
--

CREATE TABLE `tb_jam` (
  `kode_jam` int(10) NOT NULL,
  `jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jam`
--

INSERT INTO `tb_jam` (`kode_jam`, `jam`) VALUES
(0, '10.00-11.00'),
(1, '07.00-08.00'),
(2, '08.00-09.00'),
(3, '09.00-10.00'),
(5, '11.00-12.00'),
(6, '12.00-13.00'),
(7, '13.00-14.00'),
(8, '14.00-15.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_jadwal` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `aksesdata` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kode_mapel` varchar(7) NOT NULL,
  `mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kode_mapel`, `mapel`) VALUES
('AGM', 'Agama'),
('BIG', 'Bahasa Inggris'),
('BIND', 'Bahasa Indonesia'),
('BIO', 'Biologi'),
('BJW', 'Bahasa Jawa'),
('FIS', 'Fisika'),
('KIM', 'Kimia'),
('MAT', 'Matematika'),
('PJOK', 'Pendidikan Jasmani'),
('PKN', 'Pendidikan Kewarganegaraa'),
('SEJ', 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(3) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `kode_mapel` varchar(7) NOT NULL,
  `pengetahuan` varchar(3) NOT NULL,
  `ketrampilan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `kode_pengumuman` int(5) NOT NULL,
  `judul` text NOT NULL,
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(7) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `kode_status` varchar(1) NOT NULL DEFAULT 'A',
  `status` varchar(5) NOT NULL DEFAULT 'Alpa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`kode_status`, `status`) VALUES
('A', 'Alpa'),
('H', 'Hadir'),
('I', 'Izin'),
('S', 'Sakit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbd_siswa`
--
ALTER TABLE `tbd_siswa`
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_status` (`kode_status`),
  ADD KEY `kode_jam` (`kode_jam`);

--
-- Indexes for table `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`kode_jadwal`);

--
-- Indexes for table `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`kode_jam`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`kode_pengumuman`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`kode_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id_izin` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `kode_pengumuman` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
