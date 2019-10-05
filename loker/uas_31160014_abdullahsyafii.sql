-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Okt 2019 pada 15.53
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_31160014_abdullahsyafii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(6) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_kode_pos` varchar(5) NOT NULL,
  `admin_deskripsi` text NOT NULL,
  `admin_tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_address`, `admin_kode_pos`, `admin_deskripsi`, `admin_tglentry`) VALUES
(3, 'Abdul', 'cirebon', '45167', 'karyawan TETAP', '2018-08-18'),
(5, 'UDIN', 'CIREBON', '45161', 'PKL', '2018-09-11'),
(6, 'Ari ana', 'babakan', '45161', 'magang', '2018-09-16'),
(7, 'kartika', 'cirebon', '45161', 'karyawati', '2018-09-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(6) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `tgl_input`) VALUES
(0, 'D3', '2018-04-03'),
(3, 'SMA/K', '2018-09-15'),
(5, 'S1', '2018-09-16'),
(6, 'S2', '2018-09-15'),
(7, 'S3', '2018-09-05'),
(8, 'SD/SMP', '2018-09-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(6) NOT NULL,
  `nm_lowongan` varchar(50) NOT NULL,
  `id_perusahaan` int(6) NOT NULL,
  `id_kategori` int(6) NOT NULL,
  `syarat_lowongan` text NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nm_lowongan`, `id_perusahaan`, `id_kategori`, `syarat_lowongan`, `tgl_tutup`) VALUES
(1, 'HRD', 2, 6, '- CV LENGKAP\r\n- FC IJAZAH\r\n- IPK MIN 3.0', '2018-09-15'),
(2, 'IT PROGRAMMER', 2, 0, 'IPK MIN 3,0', '2018-09-18'),
(8, 'Inventory Control', 2, 5, 'dapat menghitung cepat', '2018-09-19'),
(9, 'Kasir', 2, 3, 'penampilan yang menarik,\r\npandai berhitung, ramah.', '2018-09-20'),
(10, 'Pramuniaga', 2, 3, 'good looking', '2018-09-14'),
(11, 'driver', 2, 8, 'SIM A aktif', '2018-09-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencaker`
--

CREATE TABLE `pencaker` (
  `pencaker_id` int(6) NOT NULL,
  `nm_pencaker` varchar(50) NOT NULL,
  `jnskelamin` varchar(20) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `alamat_pencaker` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pencaker_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pencaker`
--

INSERT INTO `pencaker` (`pencaker_id`, `nm_pencaker`, `jnskelamin`, `tgl_lahir`, `alamat_pencaker`, `email`, `status`, `pencaker_photo`) VALUES
(4, 'arui', 'Perempuan', '2018-09-29', 'pemuda', 'ari@gmail.com', 'Belum Menikah', 'man-icon.png'),
(6, 'Abdullah', 'Laki-laki', '1997-02-24', 'GEMPOL', 'abdul@gmail.com', 'Belum Menikah', 'man-icon4.png'),
(7, 'ADI', 'Laki-laki', '2018-09-23', 'kota cirebon', 'ADI@gmail.com', 'Menikah', 'User-blue-icon4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(6) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `pencaker_id` int(6) NOT NULL,
  `id_perusahaan` int(6) NOT NULL,
  `id_lowongan` int(6) NOT NULL,
  `keterangan_daftar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `pencaker_id`, `id_perusahaan`, `id_lowongan`, `keterangan_daftar`) VALUES
(2, '2018-09-16', 4, 2, 1, 'OK'),
(4, '2018-09-16', 7, 2, 2, 'ok'),
(5, '2018-09-24', 6, 2, 2, 'ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(6) NOT NULL,
  `pengguna_nama` varchar(30) NOT NULL,
  `pengguna_username` varchar(30) NOT NULL,
  `pengguna_password` varchar(30) NOT NULL,
  `pengguna_level` int(1) NOT NULL,
  `pengguna_blokir` enum('Y','T') NOT NULL,
  `pengguna_tglupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_blokir`, `pengguna_tglupdate`) VALUES
(1, 'Abdul', 'admin', 'YWRtaW4=', 1, 'T', '2018-07-12'),
(2, 'syafii', 'staff', 'c3RhZmZzdGFmZg==', 2, 'Y', '2018-08-28'),
(4, 'Arif', 'arif', 'YXJpZg==', 4, 'Y', '2018-08-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(6) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `deskripsi_perusahaan` varchar(500) NOT NULL,
  `web_perusahaan` varchar(50) NOT NULL,
  `telepon_perusahaan` varchar(15) NOT NULL,
  `tglberdiri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nm_perusahaan`, `alamat_perusahaan`, `deskripsi_perusahaan`, `web_perusahaan`, `telepon_perusahaan`, `tglberdiri`) VALUES
(2, 'PT. SUMBER ALFARIA TRIJAYA, Tbk', 'plumbon cirebon', 'ritel', 'alfamartku.co.id', '0231- 0202010', '2008-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pencaker`
--
ALTER TABLE `pencaker`
  ADD PRIMARY KEY (`pencaker_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pencaker`
--
ALTER TABLE `pencaker`
  MODIFY `pencaker_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
