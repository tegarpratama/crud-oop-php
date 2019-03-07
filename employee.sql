-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Feb 2019 pada 04.49
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `email`, `phone`, `address`) VALUES
(1, 'Putri Maylinda', 'female', 'putmay@gmail.com', '08134578984', '193 Solokan Jeruk Street, Ciparay\r\nBandung\r\nWest Java\r\nIndonesia'),
(2, 'Manggala', 'male', 'manggala@gmail.com', '08315839854', 'Miss Jenna Christie\r\n390 Benyamin Street, Teluk Jambe\r\nKarawang\r\nWest Java'),
(15, 'Hamdhan', 'male', 'hamdhan@gmail.com', '08123284235', 'kembangan street,\r\nBogor, Indonesia'),
(16, 'Reza Arap', 'male', 'reza@gmail.com', '08341298234', 'puribeta street,\r\nTangerang, Indonesia'),
(18, 'Rawinda', 'female', 'rawinda@gmail.com', '081387625448', 'Bsd City, Indonesia'),
(19, 'Rahma Winne', 'female', 'winne@gmail.com', '081349722342', 'Bates, West Jakarta.\r\nIndonesia'),
(20, 'Siti Mahdiah', 'female', 'siti@gmail.com', '082348124234', 'buah batu street,\r\nBogor, Indonesia'),
(21, 'Rissa Gunawan', 'female', 'rissa@gmail.com', '082345123', 'Rose street, West Java.\r\nIndonesia'),
(23, 'Tegar Pratama', 'male', 'halloegar@gmail.com', '0812376234', 'mosque street, Ciledug.\r\nTangerang, Indonesia.'),
(24, 'Rizky Armanda', 'male', 'rizky@gmail.com', '08348234713', 'kembangan street, Tangerang\r\nIndonesia.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
