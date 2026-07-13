-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2026 at 06:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `infomagang`
--

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `persyaratan` text NOT NULL,
  `link_pendaftaran` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT 'logo.png',
  `status` enum('Aktif','Tutup') DEFAULT 'Aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_perusahaan`, `bidang`, `lokasi`, `deskripsi_perusahaan`, `persyaratan`, `link_pendaftaran`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Traveloka', 'Teknologi', 'Jakarta', 'Program magang untuk mahasiswa di bidang software engineering, UI/UX, data analyst, dan digital marketing.', 'Mahasiswa aktif minimal semester 5.', 'https://careers.traveloka.com', '1783783972_images (6).png', 'Aktif', '2026-07-11 10:27:38', '2026-07-11 15:32:52'),
(2, 'Telkom Indonesia', 'Telekomunikasi', 'Bandung', 'Program Magang Digital Talent Telkom Indonesia.', 'Mahasiswa aktif semua jurusan.', 'https://careers.telkom.co.id', '1783783946_images (3).png', 'Aktif', '2026-07-11 10:27:38', '2026-07-11 15:32:26'),
(3, 'Bank BCA', 'Perbankan', 'Jakarta', 'Program Bakti BCA dan Internship.', 'IPK minimal 3.00.', 'https://karir.bca.co.id', '1783783934_images (5).png', 'Aktif', '2026-07-11 10:27:38', '2026-07-11 15:32:14'),
(4, 'Shopee', 'E-Commerce', 'Jakarta', 'Magang bidang teknologi dan bisnis.', 'Mahasiswa semester akhir.', 'https://careers.shopee.co.id', 'logo.png', 'Aktif', '2026-07-11 10:27:38', '2026-07-11 10:27:38'),
(5, 'Dicoding Indonesia', 'Teknologi', 'Bandung', 'Program magang software engineer dan frontend developer.', 'Mahasiswa aktif\r\nMenguasai HTML CSS', 'https://www.dicoding.com/career', '1783783894_dicoding.png', 'Aktif', '2026-07-11 11:03:51', '2026-07-11 15:31:34'),
(7, 'Tokopedia', 'Developer', 'Jogja', '-', '-', 'https://www.tokopedia.com/careers/jobs', '1783785617_images (1).jpg', 'Aktif', '2026-07-11 15:15:40', '2026-07-11 16:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Administrator', 'admin@infomagang.com', '$2y$10$B0BIw5kEaWCBUxSnMbfEZu/s7fJa3lkLc/jqF8cCLCcjAnEJXTX6q', 'admin', '2026-07-11 11:18:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
