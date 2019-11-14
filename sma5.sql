-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2019 pada 02.01
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `tbd_siswa`
--

CREATE TABLE `tbd_siswa` (
  `nis` int(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `nis` int(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `kode_status` varchar(1) NOT NULL,
  `kode_jam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kode_jadwal` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `kode_jam` int(10) NOT NULL,
  `jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(5) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `kode_status` varchar(1) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbd_siswa`
--
ALTER TABLE `tbd_siswa`
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_status` (`kode_status`),
  ADD KEY `kode_jam` (`kode_jam`);

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`kode_jam`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`kode_status`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbd_siswa`
--
ALTER TABLE `tbd_siswa`
  ADD CONSTRAINT `tbd_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`);

--
-- Ketidakleluasaan untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD CONSTRAINT `tb_absen_ibfk_1` FOREIGN KEY (`kode_status`) REFERENCES `tb_status` (`kode_status`),
  ADD CONSTRAINT `tb_absen_ibfk_2` FOREIGN KEY (`kode_jam`) REFERENCES `tb_jam` (`kode_jam`),
  ADD CONSTRAINT `tb_absen_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`),
  ADD CONSTRAINT `tb_absen_ibfk_4` FOREIGN KEY (`kode_kelas`) REFERENCES `tb_kelas` (`kode_kelas`);

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `tbd_siswa` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
