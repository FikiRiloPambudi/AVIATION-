-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2022 pada 15.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_fiki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('fikirilo', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bandara`
--

CREATE TABLE `bandara` (
  `JADWAL` varchar(50) NOT NULL,
  `TERMINAL` int(50) NOT NULL,
  `LOKASI` varchar(50) NOT NULL,
  `ID_KODE` varchar(50) NOT NULL,
  `KETINGGIAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bandara`
--

INSERT INTO `bandara` (`JADWAL`, `TERMINAL`, `LOKASI`, `ID_KODE`, `KETINGGIAN`) VALUES
('Senin, 30 September 2022 (04.00-08.00)', 5, 'ia Sultan Aji Muhammad Sulaiman, Balikpapan', 'BPN', '12kaki/ 4m'),
('Senin, 20 Januari 2022 (07.00-09.00)', 2, 'ia Soekarno-Hatta, Tangerang', 'CGK', '32 kaki /  10m'),
('Sabtu, 10 Februari 2022 (10.00-15.00)', 3, 'ia Ngurah Rai, Bali', 'DPS', '14 kaki/ 4m'),
('Selasa, 11 Januari 2022 (01.00-05.00)', 9, 'ia Halim Perdanakusuma, Jakarta', 'HLP', '82kaki/ 25m'),
('Sabtu, 29 juli 2022 (19.00-23.00)', 6, 'ia Adisutjipto, DIY', 'JOG', '379kaki/ 116m'),
('Minggu, 02 April 2022 (12.00-21.00)', 7, 'ia Kualanamu, Medan', 'KNO', '23 kaki/ 7,01m'),
('Minggu, 29 Juni 2022 (12.00-19.00)', 8, 'ia  Sultan Mahmud Badaruddin 2, Palembang', 'PLM', '121kaki/ 37m'),
('Sabtu, 11 Maret 2022 (16.00-22.00)', 10, 'ia Jendral Ahmad Yani, Semarang', 'SRG', '10kaki/ 3m'),
('Rabu, 31 Maret 2022 (17.00-19.00)', 1, 'ia Juanda, Surabaya', 'SUB', '9kaki/3m'),
('Senin, 25 Desember 2022 (06.00-10.00)', 4, 'ia Sultan Hasanuddin, Makassar', 'UPG', '47kaki/ 14m');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `infokeseluruhan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `infokeseluruhan` (
`TIPE` varchar(50)
,`PRODUSEN` varchar(50)
,`TAHUN` int(50)
,`MUATAN` int(50)
,`JADWAL` varchar(50)
,`TERMINAL` int(50)
,`LOKASI` varchar(50)
,`ID_KODE` varchar(50)
,`KETINGGIAN` varchar(50)
,`NAMA` varchar(50)
,`DESTINASI` int(50)
,`PEGAWAI` int(50)
,`PEMASUKAN` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `maskapai`
--

CREATE TABLE `maskapai` (
  `NAMA` varchar(50) NOT NULL,
  `ID_TERMINAL` int(50) NOT NULL,
  `DESTINASI` int(50) NOT NULL,
  `PEGAWAI` int(50) NOT NULL,
  `PEMASUKAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maskapai`
--

INSERT INTO `maskapai` (`NAMA`, `ID_TERMINAL`, `DESTINASI`, `PEGAWAI`, `PEMASUKAN`) VALUES
('Garuda Indonesia', 1, 90, 1100, 'USD 696 Juta'),
('Batik Air', 2, 59, 990, 'USD 251 Juta'),
('Citilink', 3, 62, 1880, 'USD 719 Juta'),
('Indonesia Air Asia', 4, 15, 1050, 'USD 586 Juta'),
('Sriwijaya Air', 5, 22, 560, 'USD 450 Juta'),
('NAM Air', 6, 21, 650, 'USD 128 Juta'),
('Lion Air', 7, 60, 1654, 'USD 678 Juta'),
('Transnusa', 8, 37, 210, 'USD 79 Juta'),
('Susi Air', 9, 168, 350, 'USD 124 Juta'),
('Wings', 10, 113, 240, 'USD 105 Juta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesawat`
--

CREATE TABLE `pesawat` (
  `TIPE` varchar(50) NOT NULL,
  `ID_JADWAL` varchar(50) NOT NULL,
  `PRODUSEN` varchar(50) NOT NULL,
  `TAHUN` int(50) NOT NULL,
  `MUATAN` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesawat`
--

INSERT INTO `pesawat` (`TIPE`, `ID_JADWAL`, `PRODUSEN`, `TAHUN`, `MUATAN`) VALUES
('B787', 'Minggu, 02 April 2022 (12.00-21.00)', 'Boeing', 2009, 330),
('A350', 'Minggu, 29 Juni 2022 (12.00-19.00)', 'Airbus', 2013, 350),
('B767', 'Rabu, 31 Maret 2022 (17.00-19.00)', 'Boeing', 1981, 375),
('B747', 'Sabtu, 10 Februari 2022 (10.00-15.00)', 'Boeing', 1969, 580),
('A380', 'Sabtu, 11 Maret 2022 (16.00-22.00)', 'Airbus', 2005, 853),
('A320', 'sabtu, 29 juli 2022 (19.00-23.00)', 'Airbus', 1987, 186),
('A340', 'Selasa, 11 Januari 2022 (01.00-05.00)', 'Airbus', 1991, 377),
('B737', 'Senin, 20 Januari 2022 (07.00-09.00)', 'Boeing', 1967, 215),
('B777', 'Senin, 25 Desember 2022 (06.00-10.00)', 'Boeing', 1994, 500),
('A330', 'Senin, 30 September 2022 (04.00-08.00)', 'Airbus', 1992, 300);

-- --------------------------------------------------------

--
-- Struktur untuk view `infokeseluruhan`
--
DROP TABLE IF EXISTS `infokeseluruhan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `infokeseluruhan`  AS  (select `a`.`TIPE` AS `TIPE`,`a`.`PRODUSEN` AS `PRODUSEN`,`a`.`TAHUN` AS `TAHUN`,`a`.`MUATAN` AS `MUATAN`,`b`.`JADWAL` AS `JADWAL`,`b`.`TERMINAL` AS `TERMINAL`,`b`.`LOKASI` AS `LOKASI`,`b`.`ID_KODE` AS `ID_KODE`,`b`.`KETINGGIAN` AS `KETINGGIAN`,`c`.`NAMA` AS `NAMA`,`c`.`DESTINASI` AS `DESTINASI`,`c`.`PEGAWAI` AS `PEGAWAI`,`c`.`PEMASUKAN` AS `PEMASUKAN` from ((`pesawat` `a` join `bandara` `b` on(`a`.`ID_JADWAL` = `b`.`JADWAL`)) join `maskapai` `c` on(`b`.`TERMINAL` = `c`.`ID_TERMINAL`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`password`);

--
-- Indeks untuk tabel `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`ID_KODE`);

--
-- Indeks untuk tabel `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`ID_TERMINAL`);

--
-- Indeks untuk tabel `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`ID_JADWAL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
