-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2022 pada 18.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_Buku` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `penerbit` varchar(225) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `dipinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_Buku`, `judul`, `penulis`, `penerbit`, `tahun`, `jumlah`, `dipinjam`) VALUES
(8, 'Kultur Jaringan : Teori dan Praktek', 'Dwi Hapsono', 'ANDI', 2019, 5, 0),
(9, 'Piawai Menembus Jurnal Terakreditasi', 'Wahyu Wibowo', 'Bumi Aksara', 2015, 2, 0),
(10, 'Membuat Robot Menggunakan Raspberry Pi + Pemrograman Python+cd', 'Mada Sanjaya WS, Ph.D', 'Andi', 2019, 7, 0),
(11, 'Dasar Pemrograman Robot Menggunakan Arduino+cd', 'Abdul Kadir', 'Andi', 2019, 2, 0),
(12, 'Handbook Jaringan Komputer', 'I Putu Agus Eka Pratama', 'Informatika', 2016, 3, 0),
(13, 'Jaringan Komputer Dan Data', 'Indrarini Dyah Irawati, M. T, Leanna Vidya Yovita, MT', 'Deepublish', 2015, 4, 0),
(14, 'Membuat Aplikasi IoT: Internet of Things', 'Hardana & Radian Ferrari ', 'Lokomedia', 2019, 3, 0),
(15, 'Al Quran Mushaf Tajwid Tsumun Diponegor', 'Religion & Spirituality', 'Diponegoro', 2011, 5, 0),
(16, 'Kisah-kisah 25 nabi dan rasul ', 'M. Rantisi', 'Jakarta : B', 2018, 3, 0),
(17, 'Thaharoh dan Sholat Bagi Orang Sakit ', 'Hidayat', 'Imtima', 2012, 2, 0),
(18, 'Asaalibul Bayan', 'Fadl Hasan ', 'Daarun-Nafa', 2010, 5, 0),
(19, 'Sejarah Karawitan II', 'Rabimin, S.Kar', 'ISBN ', 2009, 9, 0),
(20, 'Seni Lukis Wayang', 'Dharsono Sony K.', 'ISBN', 2012, 5, 0),
(21, 'Sejarah Kebudayaan Indonesia I', 'Rustopo', 'Sutopo', 2013, 3, 0),
(22, 'Cerita Rakyat Nusantara', 'Kak Nung ', 'Laksana ', 2017, 3, 1),
(23, '333 Dongeng Binatang Dari Seluruh Dunia ', 'Retno Wulan', 'Indoliteras', 2015, 5, 0),
(24, 'Cerita Motivasi Super Dahsyat dari Jepang', 'Endah Sulis', 'Mitra Buku', 2014, 4, 0),
(25, 'Dongeng Asal-usul Nusantara ', 'Daru Wijaya', 'NEW DIGLOSS', 2014, 5, 0),
(26, 'Bintang cilik punya cerita Kado misterius', 'Syafira', ' Yanita ', 2018, 6, 0),
(27, 'Laskar Pelangi', ' Andrea Hirata ', ' Bentang Pu', 2005, 10, 0),
(28, 'Kanji Dasar Bahasa Jepang', 'Sudjianto', 'Jakarta Pus', 2014, 7, 0),
(29, 'Kisah Wali Songo', 'MB. Rahimsyah AR.', 'Bintang Ind', 2012, 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_Petugas` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `no_telepon` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_Petugas`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `no_telepon`, `alamat`) VALUES
(10, 'admin', 'admin', 'edo laksana', 'Laki-laki', '0439578359', 'lampung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_Tamu` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `no_telepon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_Tamu`, `nama_lengkap`, `alamat`, `jenis_kelamin`, `no_telepon`) VALUES
(4, 'Rifan Setiadi', 'Katibung', 'Laki-laki', '082122313409'),
(5, 'alif akbar', 'pringsewu', 'Laki-laki', '085678764532'),
(6, 'Muhammad Dzaki', 'Tanggerang', 'Laki-laki', '089678765543'),
(9, 'Dinda Mila Diasti', 'Lampung Tengah', 'Perempuan', '082234560098'),
(10, 'Rahayu', 'lampung selatan', 'Perempuan', '08212221334'),
(11, 'Diah Desmayanti', 'pringsewu', 'Perempuan', '089655433433');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_Transaksi` int(11) NOT NULL,
  `id_Tamu` int(11) NOT NULL,
  `id_Petugas` int(11) NOT NULL,
  `id_Buku` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_Transaksi`, `id_Tamu`, `id_Petugas`, `id_Buku`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah_buku`) VALUES
(13, 7, 10, 22, '2022-05-25', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_Buku`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_Petugas`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_Tamu`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_Transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_Buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_Petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_Tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_Transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
