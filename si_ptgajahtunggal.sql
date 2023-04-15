-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2023 pada 16.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_ptgajahtunggal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan baku`
--

CREATE TABLE `bahan baku` (
  `id_bahanBk` int(50) NOT NULL,
  `id_biayaPr` int(50) DEFAULT NULL,
  `Nama Bahan Baku` varchar(50) NOT NULL,
  `Harga Bahan Baku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(50) NOT NULL,
  `id_pembeli` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_gudang` int(50) NOT NULL,
  `Nama Barang` varchar(50) NOT NULL,
  `Stok Barang` varchar(50) NOT NULL,
  `Kategori Barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya produksi`
--

CREATE TABLE `biaya produksi` (
  `id_biayaPr` int(50) NOT NULL,
  `id_produksi` int(50) NOT NULL,
  `Biaya Bahan Baku` varchar(50) NOT NULL,
  `Biaya Total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(50) NOT NULL,
  `id_stokPr` int(50) NOT NULL,
  `Hasil Produksi` varchar(50) NOT NULL,
  `Jumlah Stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori barang`
--

CREATE TABLE `kategori barang` (
  `id_kategoriBr` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `Kategori Barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(50) NOT NULL,
  `id_stokBr` int(50) NOT NULL,
  `id_kategoriBr` int(50) NOT NULL,
  `Nama Outlet` varchar(50) NOT NULL,
  `Alamat Outlet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(50) NOT NULL,
  `id_pengguna` int(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Usia` varchar(50) NOT NULL,
  `Jenis Kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(50) NOT NULL,
  `id_pengguna` int(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Usia` varchar(50) NOT NULL,
  `Jenis Kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(50) NOT NULL,
  `id_tk` int(50) NOT NULL,
  `Biaya Produksi` varchar(50) NOT NULL,
  `Stok Produksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok barang`
--

CREATE TABLE `stok barang` (
  `id_stokBr` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `Stok Barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok produksi`
--

CREATE TABLE `stok produksi` (
  `id_stokPr` int(50) NOT NULL,
  `id_produksi` int(50) NOT NULL,
  `Stok Produksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga kerja`
--

CREATE TABLE `tenaga kerja` (
  `id_tk` int(50) NOT NULL,
  `id_pengguna` int(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Usia` varchar(50) NOT NULL,
  `Jenis Kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan baku`
--
ALTER TABLE `bahan baku`
  ADD PRIMARY KEY (`id_bahanBk`),
  ADD KEY `id_bahanBk` (`id_bahanBk`,`id_biayaPr`,`Nama Bahan Baku`,`Harga Bahan Baku`),
  ADD KEY `id_bahanBk_2` (`id_bahanBk`,`id_biayaPr`,`Nama Bahan Baku`,`Harga Bahan Baku`),
  ADD KEY `id_biayaPr` (`id_biayaPr`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_pembeli` (`id_pembeli`,`id_pegawai`,`id_gudang`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_gudang` (`id_gudang`);

--
-- Indeks untuk tabel `biaya produksi`
--
ALTER TABLE `biaya produksi`
  ADD PRIMARY KEY (`id_biayaPr`),
  ADD KEY `id_produksi` (`id_produksi`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`),
  ADD KEY `id_stokPr` (`id_stokPr`);

--
-- Indeks untuk tabel `kategori barang`
--
ALTER TABLE `kategori barang`
  ADD PRIMARY KEY (`id_kategoriBr`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_stokBr` (`id_stokBr`,`id_kategoriBr`),
  ADD KEY `id_kategoriBr` (`id_kategoriBr`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indeks untuk tabel `stok barang`
--
ALTER TABLE `stok barang`
  ADD PRIMARY KEY (`id_stokBr`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `stok produksi`
--
ALTER TABLE `stok produksi`
  ADD PRIMARY KEY (`id_stokPr`),
  ADD KEY `id_produksi` (`id_produksi`);

--
-- Indeks untuk tabel `tenaga kerja`
--
ALTER TABLE `tenaga kerja`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bahan baku`
--
ALTER TABLE `bahan baku`
  ADD CONSTRAINT `bahan baku_ibfk_1` FOREIGN KEY (`id_biayaPr`) REFERENCES `biaya produksi` (`id_biayaPr`);

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`);

--
-- Ketidakleluasaan untuk tabel `biaya produksi`
--
ALTER TABLE `biaya produksi`
  ADD CONSTRAINT `biaya produksi_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`);

--
-- Ketidakleluasaan untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD CONSTRAINT `gudang_ibfk_1` FOREIGN KEY (`id_stokPr`) REFERENCES `stok produksi` (`id_stokPr`);

--
-- Ketidakleluasaan untuk tabel `kategori barang`
--
ALTER TABLE `kategori barang`
  ADD CONSTRAINT `kategori barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD CONSTRAINT `outlet_ibfk_1` FOREIGN KEY (`id_kategoriBr`) REFERENCES `kategori barang` (`id_kategoriBr`),
  ADD CONSTRAINT `outlet_ibfk_2` FOREIGN KEY (`id_stokBr`) REFERENCES `stok barang` (`id_stokBr`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `pembeli_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_tk`) REFERENCES `tenaga kerja` (`id_tk`);

--
-- Ketidakleluasaan untuk tabel `stok barang`
--
ALTER TABLE `stok barang`
  ADD CONSTRAINT `stok barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `stok produksi`
--
ALTER TABLE `stok produksi`
  ADD CONSTRAINT `stok produksi_ibfk_1` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`);

--
-- Ketidakleluasaan untuk tabel `tenaga kerja`
--
ALTER TABLE `tenaga kerja`
  ADD CONSTRAINT `tenaga kerja_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
