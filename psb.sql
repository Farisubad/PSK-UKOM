-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2021 pada 10.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`) VALUES
(1, '', 'yusuf', 'yusuf'),
(2, 'faris', 'faris', 'faris'),
(3, 'sanu', 'danu', 'dabu'),
(4, 'jjj', '1234', '1234'),
(5, 'mursyid', 'rahmat', 'rahmat'),
(6, 'FERISKA MAHARANI', 'faris', 'ggg'),
(7, 'faris', 'ubad', 'ubad'),
(8, 'ubed', 'ubed', 'ubed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(3) NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tanggal_lahir` varchar(20) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `no_telpon` int(13) DEFAULT NULL,
  `asal_sekolah` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `matematika` float DEFAULT NULL,
  `b_inggris` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `agama`, `no_telpon`, `asal_sekolah`, `alamat`, `status`, `matematika`, `b_inggris`) VALUES
(4, '1907060253', 'faris ubad alfharuq', 'laki laki', '24  juni 1001', 'islam', 2147483647, 'smpn 1 gedung tataan', 'banjar negeri', 'Tidak Di Terima', 80, 90),
(6, '87628', 'FERISKA MAHARANI', 'wanita', '19 mei 2002', 'kristen', 89764, 'smpn 1 sukatinggi', 'purbolinggo', 'Di Terima', NULL, NULL),
(8, '87628', 'FERISKA MAHARANI', 'wanita', '30 april 2001', 'kristen', 98327392, 'smpn 1 sukatinggi', 'purbolinggo', 'Selesai Pemberkasan', 90, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
