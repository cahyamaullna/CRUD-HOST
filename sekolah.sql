-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Agu 2021 pada 14.17
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelahiran` date NOT NULL,
  `rombel` varchar(25) NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `kelahiran`, `rombel`, `rayon`) VALUES
(8, 11907346, 'Muhamad Cahya Maulana', '2011-08-03', 'RPL XII -3 ', 'Cibedug 3'),
(9, 11897765, 'Oliver Sykes', '2021-08-01', 'HTL XII - 1', 'Seattle 6'),
(10, 11907346, 'Kurt Cobain', '2011-08-03', 'RPL XII -3 ', 'Grunge 1'),
(11, 11897765, 'Dave Grohl', '2011-08-02', 'MMD XII - 1', 'California 8'),
(12, 11907346, 'Muhamad Tatatng', '2012-08-01', 'TKJ XII -2', 'Grunge 1'),
(13, 11806567, 'Synyster Gates', '2011-08-02', 'A7X-3', 'America belah kulon'),
(14, 11706657, 'Ariq Audithama', '2021-08-03', 'TKJ XII -3', 'Cibedug 3'),
(15, 11897765, 'PamPam', '2021-08-30', 'HTL XII - 1', 'California 8'),
(16, 11876545, 'Mr. Muslih', '2021-08-04', 'RPL XI-5', 'Cibdeug 3'),
(17, 11658736, 'Muniroh', '2021-08-26', 'BDP XII-2', 'Cibedug 1'),
(18, 12986475, 'Mahadewi', '2021-08-03', 'TBG XII-1', 'Cicurug 6'),
(19, 11564786, 'Desma Almatiana', '2021-08-26', 'MMD XI-3', 'Cibedug 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
