-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 05:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `detail_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `tanggal_berita`, `tanggal_upload`, `detail_berita`, `gambar`) VALUES
(1, 'bakalae cok', '2023-10-19', '2023-10-11 05:38:00', 'adoh di lingkungan 2 ada dbkalae, dtang lia akng dlu pala', 'Screenshot 2023-06-28 141847.png');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `judul_acara` varchar(255) NOT NULL,
  `detail_acara` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal_acara` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul_acara`, `detail_acara`, `lokasi`, `tanggal_acara`) VALUES
(2, 'Perayaan Natal', 'Perayaan Natal di Tahun ini akan sangat meriah', 'Tondangow', '2023-12-25'),
(4, 'Wisata', 'Mo pi pante ges dalam rangka libur', 'Pantai Paal', '2023-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `caption`, `gambar`, `tanggal_upload`) VALUES
(4, 'adfadsfadsf', '46494.jpg', '2023-10-10 06:00:00'),
(5, 'asfasdasdfsadfdsafds', 'Acer_Wallpaper_01_5000x2814.jpg', '2023-10-10 06:01:00'),
(6, 'fasdfsadfadsfsdaf', 'Acer_Wallpaper_02_5000x2813.jpg', '2023-10-10 06:01:00'),
(7, 'adsfasdfdsaf', 'Acer_Wallpaper_02_5000x2813.jpg', '2023-10-10 06:03:00'),
(8, 'asdfadsf', 'Acer_Wallpaper_01_5000x2814.jpg', '2023-10-10 06:22:00'),
(9, 'asdfadsf', 'Acer_Wallpaper_01_5000x2814.jpg', '2023-10-10 06:22:00'),
(10, 'adsfadsf', 'Acer_Wallpaper_02_5000x2813.jpg', '2023-10-10 06:27:00'),
(11, 'adsfasdfadsf', '46494.jpg', '2023-10-10 06:38:00'),
(12, 'ddfadsfasdf', 'Screenshot 2023-05-03 134835.png', '2023-10-10 07:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama_kepala_keluarga` varchar(255) NOT NULL,
  `jumlah_anggota_keluarga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_kk`, `nama_kepala_keluarga`, `jumlah_anggota_keluarga`) VALUES
(1, '12341234', 'Stein Pongoh', '4'),
(2, '22445562', 'Naruto', '5'),
(3, '32351351', 'Sasuke', '6'),
(4, '2351351', 'Kirito', '3'),
(5, '2341234', 'Klein', '1');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `no_kk` int(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `no_kk`, `nik`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat_lengkap`) VALUES
(2, 2, '24235125123', 'Stein Pongoh', '2033-10-19', 'Pria', 'Kristen', 'Usaha mencari lowongan', 'Tondangow'),
(3, 1, '596896879687', 'naruto', '2023-10-12', 'Pria', 'Kristen', 'hokage', 'konoha'),
(6, 3, '613516', 'Sakura', '2023-10-09', 'Wanita', 'Kristen', 'beban', 'Konoha');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nama_pengadu` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `judul_pengaduan` varchar(255) NOT NULL,
  `detail_pengaduan` text NOT NULL,
  `tanggal_pengaduan` datetime NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama_pengadu`, `alamat_lengkap`, `judul_pengaduan`, `detail_pengaduan`, `tanggal_pengaduan`, `no_telepon`, `gambar`) VALUES
(8, 'stein pongoh', 'komplek kapling', 'adsfadsfdsf', 'adoh pala tu aer, so 2 bulan ini nd ada', '2023-10-09 12:38:00', '089276481264', '46494.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `detail_pengumuman` text NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama_penjual` int(20) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat_toko` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `no_telepon`, `alamat_toko`) VALUES
(3, 6, '089812634', 'Di kompleks danau'),
(5, 3, '0816347', 'kompleks gunung');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_penjual`, `nama_produk`, `harga`, `gambar`) VALUES
(3, 3, 'Gado Gado', '20,000', 'Screenshot 2023-09-07 115824.png'),
(4, 5, 'Ramen', '20,000', 'Screenshot 2023-09-19 154759.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(4, 'mama', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, 'mimi', 'caf1a3dfb505ffed0d024130f58c5cfa', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `nama_penjual` (`nama_penjual`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `keluarga` (`id`);

--
-- Constraints for table `penjual`
--
ALTER TABLE `penjual`
  ADD CONSTRAINT `penjual_ibfk_1` FOREIGN KEY (`nama_penjual`) REFERENCES `penduduk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
