-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2021 pada 09.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`) VALUES
('harapanKita', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `idpembayaran_09021281823172` int(10) NOT NULL,
  `tanggalbayar_09021281823172` date NOT NULL,
  `idpasien_09021281823172` int(10) NOT NULL,
  `namapasien_09021281823172` varchar(100) NOT NULL,
  `jeniskamar_09021281823172` varchar(100) NOT NULL,
  `dokter_09021281823172` varchar(100) NOT NULL,
  `jenisberobat_09021281823172` varchar(10) NOT NULL,
  `hari_09021281823172` int(10) NOT NULL,
  `transaksi_09021281823172` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`idpembayaran_09021281823172`, `tanggalbayar_09021281823172`, `idpasien_09021281823172`, `namapasien_09021281823172`, `jeniskamar_09021281823172`, `dokter_09021281823172`, `jenisberobat_09021281823172`, `hari_09021281823172`, `transaksi_09021281823172`) VALUES
(1, '2018-01-10', 1100022, 'Khodijatul Karimah', 'VIP', 'Spesialis', 'Asuransi', 3, 2805000),
(3, '2019-05-17', 110003, 'Harry Sanjaya', 'VIP', 'Umum', 'Asuransi', 2, 1815000),
(4, '2019-05-30', 110004, 'Nabila Apriliya', 'Kelas III', 'Umum', 'BPJS', 3, 880000),
(5, '2019-06-12', 110005, 'Balqhis Suci', 'VVIP', 'Spesialis', 'Cash', 1, 1265000),
(6, '2019-07-06', 110006, 'aqeela putri', 'VVIP', 'Spesialis', 'Cash', 7, 7865000),
(7, '2019-09-19', 110007, 'Sarah Nur Hidayanti', 'VIP', 'Spesialis', 'BPJS', 5, 4565000),
(9, '2019-10-01', 110009, 'Hildayanti', 'Kelas II', 'Spesialis', 'Cash', 4, 1925000),
(10, '2018-09-01', 1100010, 'Wanda Aziza', 'Kelas III', 'Spesialis', 'Asuransi', 3, 990000),
(11, '2019-10-11', 1100011, 'Nafisah Assyatrie', 'VIP', 'Umum', 'Cash', 4, 3575000),
(12, '2019-10-16', 1100012, 'Nur Amalia', 'VIP', 'Umum', 'BPJS', 2, 1815000),
(13, '2019-10-29', 1100013, 'dhenandra aida aziza', 'VVIP', 'Spesialis', 'BPJS', 2, 2365000),
(14, '2019-11-01', 1100014, 'Shereen Haniya', 'VIP', 'Umum', 'Asuransi', 3, 2695000),
(15, '2019-12-18', 1100015, 'Rayhani Mudrika', 'VVIP', 'Umum', 'Cash', 7, 7755000),
(21, '2018-05-07', 1100021, 'Muhammad Sholeh', 'Kelas I', 'Umum', 'Asuransi', 2, 1375000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`idpembayaran_09021281823172`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
