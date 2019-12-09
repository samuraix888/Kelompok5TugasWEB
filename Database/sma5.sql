-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 03:11 PM
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
-- Database: `sementara`
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

--
-- Dumping data for table `tbd_siswa`
--

INSERT INTO `tbd_siswa` (`nis`, `kode_kelas`, `tahun_ajaran`) VALUES
('00001', 'XA1', '2019-2020'),
('00002', 'XA1', '2019-2020'),
('00003', 'XA1', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `nis` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `kode_status` varchar(1) NOT NULL DEFAULT 'A',
  `kode_jam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin`
--

CREATE TABLE `tb_izin` (
  `nis` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_status` varchar(1) NOT NULL,
  `keterangan` text NOT NULL,
  `foto1` varchar(35) NOT NULL,
  `foto2` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_izin`
--

INSERT INTO `tb_izin` (`nis`, `tanggal`, `kode_status`, `keterangan`, `foto1`, `foto2`) VALUES
('00001', '2019-11-18', 'I', 'Test', '11822388_128673960807228_6455055463', 'image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kode_jadwal` varchar(6) NOT NULL,
  `unggah_jadwal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`kode_jadwal`, `unggah_jadwal`) VALUES
('JXA1', ''),
('JXA2', ''),
('JXA3', '');

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

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `kelas`, `kode_jadwal`) VALUES
('XA1', 'X IPA 1', 'JXA1'),
('XA2', 'X IPA 2', 'JXA2'),
('XA3', 'X IPA 3', 'JXA3'),
('XA4', 'X IPA 4', 'JXA4'),
('XA5', 'X IPA 5', 'JXA5'),
('XS1', 'X IPS 1', 'JXS1'),
('XS2', 'X IPS 2', 'JXS2'),
('XS3', 'X IPS 3', 'JXS3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `kode_pengumuman` int(5) NOT NULL,
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`kode_pengumuman`, `pengumuman`) VALUES
(1, 'lol'),
(2, 'coba buka www.google.com');

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
  `foto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nisn`, `nama_siswa`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `foto`) VALUES
('00001', '123', 's', 'a', '2019-11-18', 'L', 'Islam', 'jember', '  '),
('00002', '456', 'f', 'a', '2019-12-02', 'P', 'Islam', 'jember', ''),
('00003', '789', 'g', 'g', '2019-12-01', 'L', 'Kristen', 'jember', ''),
('00004', '012', 'freng', 'jelbuk', '2019-12-01', 'P', 'budha', 'Jember', '');

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
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_status` (`kode_status`),
  ADD KEY `kode_jam` (`kode_jam`);

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
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `kode_pengumuman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
