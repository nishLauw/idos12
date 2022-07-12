-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2022 pada 18.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelatihan27`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `kd_buku` int(11) NOT NULL,
  `nm_buku` varchar(50) NOT NULL,
  `thn_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `kd_dosen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`kd_dosen`, `nama`, `alamat`) VALUES
(1, 'Reza', 'Ciledug'),
(5001, 'Muhammad Firdaus', 'Balaraja'),
(5002, 'Yoga', 'Villa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(11) NOT NULL,
  `kd_dosen` int(11) NOT NULL,
  `kd_matkul` int(11) NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `kd_dosen`, `kd_matkul`, `ruang`, `waktu`) VALUES
(2, 5002, 222, 'V.104', '08:50 - 10:30 WIB'),
(3, 5001, 1000, 'V.605', '13:00 - 14:00 WIB'),
(6, 1, 67, 'V.1000', '10.30 - 13.30 WIB'),
(7, 5001, 222, 'V.109', '10.30 - 13.00 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `id` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `kd_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_krs`
--

INSERT INTO `tbl_krs` (`id`, `id_jadwal`, `nim`, `kd_semester`) VALUES
(118, 3, 181011402, 20212),
(10001, 2, 181011401, 20211);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `jurusan`, `alamat`) VALUES
(0, '', '', ''),
(181011401, 'Rizal', 'Manajemen', 'Bogor'),
(181011402, 'Haris', 'Teknik Informatika', 'Tangsel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `kd_matkul` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`kd_matkul`, `nama`, `sks`) VALUES
(67, 'Komputer Masyarakat', 2),
(222, 'Pemrograman', 3),
(1000, 'Komunikasi Antar Personal', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `kd_semester` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_semester`
--

INSERT INTO `tbl_semester` (`kd_semester`, `semester`) VALUES
(5002, '2018/2019'),
(20211, 'Ganjil 2021/2022'),
(20212, 'Genap 2021/2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'idos', 'idos123'),
(3, 'Muhammad Firdaus', 'firdaus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`kd_dosen`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dosen` (`kd_dosen`),
  ADD KEY `fk_matkul` (`kd_matkul`);

--
-- Indeks untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jadwal` (`id_jadwal`),
  ADD KEY `fk_mahasiswa` (`nim`),
  ADD KEY `fk_semester` (`kd_semester`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indeks untuk tabel `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`kd_semester`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `fk_dosen` FOREIGN KEY (`kd_dosen`) REFERENCES `tbl_dosen` (`kd_dosen`),
  ADD CONSTRAINT `fk_matkul` FOREIGN KEY (`kd_matkul`) REFERENCES `tbl_matkul` (`kd_matkul`);

--
-- Ketidakleluasaan untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD CONSTRAINT `fk_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `tbl_jadwal` (`id`),
  ADD CONSTRAINT `fk_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `tbl_mahasiswa` (`nim`),
  ADD CONSTRAINT `fk_semester` FOREIGN KEY (`kd_semester`) REFERENCES `tbl_semester` (`kd_semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
