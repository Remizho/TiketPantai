-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 04:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mantaingalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pantai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `nama_level`) VALUES
(1, 'administrator'),
(2, 'user'),
(3, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `like_pantai`
--

CREATE TABLE `like_pantai` (
  `id_pantai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pantai`
--

CREATE TABLE `pantai` (
  `id_pantai` int(11) NOT NULL,
  `nama_pantai` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `harga_pantai` varchar(255) DEFAULT NULL,
  `thumbnail` text DEFAULT NULL,
  `pantai_favorit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pantai`
--

INSERT INTO `pantai` (`id_pantai`, `nama_pantai`, `deskripsi`, `harga_pantai`, `thumbnail`, `pantai_favorit`) VALUES
(7, 'Pantai Ngudel', 'Malang itu, salah satu pantai yang paling hits di Malang yaitu Pantai Ngudel. Pantai yang mempunyai banyak keunikan itu dapat dinikmati para pantai lovers nihh. Pantai Ngudel ini terkenal dengan batunya yang unik. Asal kalian tau nih gengss, batu yang unik itu ada di tengah laut loh. Ngga hanya itu aja, batu unik itu bentuknya seperti separuh segitiga juga. Sehingga disana banyak banget nih yang foto dengan objek itu. Nah, jangan mau kalah nih gengss kalian juga harus mengunjungi pantai ini nih. Santai diiringi selir angin yang sejuk dan menenangkan, suara ombak yang serasa memecah batu karang sangat cocok untuk para pantai lovers yang ingin menenangkan diri dari kejenuhan nih. Untuk akses menuju pantai sendiri juga sudah sangat mendukung setelah dibukanya jalur lintas selatan pada tahun 2016 lalu. Pantai Ngudel sendiri terletak di Desa Sindurejo, Kecamatan Gedangan, Kabupaten Malang, Jawa Timur. Untuk dapat menuju Pantai Ngudel, anda dapat menempuh dari Kota Malang dengan jarak sekitar 60 km dan jika dihitung, waktu tempuhnya sekitar 3 hingga 4 jam. Untuk jarak tempuh seperti itu, tentu nanti akan terbayarkan dengan keindahan pesona Pantai Ngudel nih. Siapa sih yang tidak ingin mendapatkan pemandangan yang sangat indah dan juga menenangkan? Pantai Ngudel ini juga cocok untuk berkemah nih gengss. Tidak jarang loh menjumpai orang yang berkemah di pantai ini. Tunggu apa lagi nih gengss, ingin pantai yang cocok buat anda? Pantai Ngudel solusinya.', '10000', 'Wisata-Pantai-di-Semarang-1.jpg', 1),
(8, 'Pantai Balekambang', 'Malang itu, salah satu pantai yang paling hits di Malang yaitu Pantai Ngudel. Pantai yang mempunyai banyak keunikan itu dapat dinikmati para pantai lovers nihh. Pantai Ngudel ini terkenal dengan batunya yang unik. Asal kalian tau nih gengss, batu yang unik itu ada di tengah laut loh. Ngga hanya itu aja, batu unik itu bentuknya seperti separuh segitiga juga. Sehingga disana banyak banget nih yang foto dengan objek itu. Nah, jangan mau kalah nih gengss kalian juga harus mengunjungi pantai ini nih. Santai diiringi selir angin yang sejuk dan menenangkan, suara ombak yang serasa memecah batu karang sangat cocok untuk para pantai lovers yang ingin menenangkan diri dari kejenuhan nih. Untuk akses menuju pantai sendiri juga sudah sangat mendukung setelah dibukanya jalur lintas selatan pada tahun 2016 lalu. Pantai Ngudel sendiri terletak di Desa Sindurejo, Kecamatan Gedangan, Kabupaten Malang, Jawa Timur. Untuk dapat menuju Pantai Ngudel, anda dapat menempuh dari Kota Malang dengan jarak sekitar 60 km dan jika dihitung, waktu tempuhnya sekitar 3 hingga 4 jam. Untuk jarak tempuh seperti itu, tentu nanti akan terbayarkan dengan keindahan pesona Pantai Ngudel nih. Siapa sih yang tidak ingin mendapatkan pemandangan yang sangat indah dan juga menenangkan? Pantai Ngudel ini juga cocok untuk berkemah nih gengss. Tidak jarang loh menjumpai orang yang berkemah di pantai ini. Tunggu apa lagi nih gengss, ingin pantai yang cocok buat anda? Pantai Ngudel solusinya.', '20000', '764486_1200.jpg', 0),
(9, 'Pantai Teluk Asmara', 'Malang itu, salah satu pantai yang paling hits di Malang yaitu Pantai Ngudel. Pantai yang mempunyai banyak keunikan itu dapat dinikmati para pantai lovers nihh. Pantai Ngudel ini terkenal dengan batunya yang unik. Asal kalian tau nih gengss, batu yang unik itu ada di tengah laut loh. Ngga hanya itu aja, batu unik itu bentuknya seperti separuh segitiga juga. Sehingga disana banyak banget nih yang foto dengan objek itu. Nah, jangan mau kalah nih gengss kalian juga harus mengunjungi pantai ini nih. Santai diiringi selir angin yang sejuk dan menenangkan, suara ombak yang serasa memecah batu karang sangat cocok untuk para pantai lovers yang ingin menenangkan diri dari kejenuhan nih. Untuk akses menuju pantai sendiri juga sudah sangat mendukung setelah dibukanya jalur lintas selatan pada tahun 2016 lalu. Pantai Ngudel sendiri terletak di Desa Sindurejo, Kecamatan Gedangan, Kabupaten Malang, Jawa Timur. Untuk dapat menuju Pantai Ngudel, anda dapat menempuh dari Kota Malang dengan jarak sekitar 60 km dan jika dihitung, waktu tempuhnya sekitar 3 hingga 4 jam. Untuk jarak tempuh seperti itu, tentu nanti akan terbayarkan dengan keindahan pesona Pantai Ngudel nih. Siapa sih yang tidak ingin mendapatkan pemandangan yang sangat indah dan juga menenangkan? Pantai Ngudel ini juga cocok untuk berkemah nih gengss. Tidak jarang loh menjumpai orang yang berkemah di pantai ini. Tunggu apa lagi nih gengss, ingin pantai yang cocok buat anda? Pantai Ngudel solusinya.', '15000', 'Screen-Shot-2021-01-23-at-10_13_40-1.png', 0),
(10, 'Test', 'Ini test pantai', '10000', 'Screenshot_2021-05-05_203933.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `fk_id_pantai` int(11) NOT NULL,
  `tggl` date NOT NULL,
  `fk_id_user` int(11) DEFAULT NULL,
  `bayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `jumlah`, `kode`, `fk_id_pantai`, `tggl`, `fk_id_user`, `bayar`) VALUES
(1, 'ade', 12, '3246', 9, '2021-01-01', 2, 'sudah'),
(4, 'ezho', 2, '53400', 8, '2021-04-13', 2, 'belum'),
(5, 'dita', 5, '17154', 7, '2021-04-21', 2, 'sudah'),
(6, 'aul', 5, '76727', 7, '2021-04-21', 2, 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fk_level_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kodepos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fk_level_id`, `nama`, `email`, `username`, `password`, `kodepos`) VALUES
(1, 1, 'admin', 'admin@admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 2, 'user', 'user@user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0),
(6, 3, 'petugas', 'adawp', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 0),
(8, 2, 'user2', 'user2', 'user2', '7e58d63b60197ceb55a1c487989a3720', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD KEY `fk_komentar_pantai` (`id_pantai`),
  ADD KEY `fk_komentar_user` (`id_user`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `pantai`
--
ALTER TABLE `pantai`
  ADD PRIMARY KEY (`id_pantai`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_pesanan_pantai` (`fk_id_pantai`),
  ADD KEY `fk_pesanan_user` (`fk_id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_users_levels` (`fk_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pantai`
--
ALTER TABLE `pantai`
  MODIFY `id_pantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_pantai` FOREIGN KEY (`id_pantai`) REFERENCES `pantai` (`id_pantai`),
  ADD CONSTRAINT `fk_komentar_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_pantai` FOREIGN KEY (`fk_id_pantai`) REFERENCES `pantai` (`id_pantai`),
  ADD CONSTRAINT `fk_pesanan_user` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_levels` FOREIGN KEY (`fk_level_id`) REFERENCES `levels` (`level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
