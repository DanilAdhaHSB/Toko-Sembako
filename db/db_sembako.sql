-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 10.23
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sembako`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_akhir`
--

CREATE TABLE `tabel_akhir` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_awal` varchar(50) NOT NULL,
  `harga_akhir` varchar(13) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_akhir`
--

INSERT INTO `tabel_akhir` (`id_barang`, `nama_barang`, `jenis_barang`, `diskon`, `tanggal`, `harga_awal`, `harga_akhir`, `Keterangan`) VALUES
('01', 'Mie Sedap Goreng', 'Mie Instan', '50%', '2022-01-18', '3000', '1500', 'Stok Barang Terbatas'),
('04', 'Beras Kutilang', 'Beras', '10%', '2022-01-18', '60000', '54000', 'Stok Barang Terbatas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_awal`
--

CREATE TABLE `tabel_awal` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_awal` varchar(50) NOT NULL,
  `harga_akhir` varchar(13) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_awal`
--

INSERT INTO `tabel_awal` (`id_barang`, `nama_barang`, `jenis_barang`, `diskon`, `tanggal`, `harga_awal`, `harga_akhir`, `Keterangan`) VALUES
('02', 'Gula Putih', 'Gula', '25%', '2022-01-18', '20000', '15000', 'Stok Barang Terbatas'),
('03', 'Saos ABC', 'Saos', '10%', '2022-01-15', '8000', '7200', 'Stok Barang Terbatas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Marketmodern01@gmail.com', 'TOKO HDD MARKET', 1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_akhir`
--
ALTER TABLE `tabel_akhir`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tabel_awal`
--
ALTER TABLE `tabel_awal`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
