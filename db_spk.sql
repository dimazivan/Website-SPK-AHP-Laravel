-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2022 pada 20.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatives`
--

CREATE TABLE `alternatives` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_denah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatives`
--

INSERT INTO `alternatives` (`id`, `tipe`, `lantai`, `kamar`, `luas`, `harga`, `garasi`, `keterangan`, `gambar`, `gambar_denah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'T136', '1', '1', '100', '1000000000', 'Tidak ada', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non rerum minus eaque ratione corrupti adipisci hic quidem maxime ipsum repellat doloribus inventore est, aperiam ullam vitae numquam, pariatur optio porro.', '1623324530_Canna.jpg', '1623324530_Canna_denah.jpg', '2021-06-10 04:27:54', '2021-06-10 04:27:54', NULL),
(28, 'T199', '2', '2', '200', '2000000000', 'Ada', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non rerum minus eaque ratione corrupti adipisci hic quidem maxime ipsum repellat doloribus inventore est, aperiam ullam vitae numquam, pariatur optio porro.', '1623324947_Caladium.jpg', '1623324947_Caladium_denah.jpg', '2021-06-10 04:35:47', '2021-06-10 04:35:47', NULL),
(29, 'T236', '3', '3', '300', '3000000000', 'Ada', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non rerum minus eaque ratione corrupti adipisci hic quidem maxime ipsum repellat doloribus inventore est, aperiam ullam vitae numquam, pariatur optio porro.', '1623324996_Ixora.jpg', '1623324996_Ixora_denah.jpg', '2021-06-10 04:36:36', '2021-06-10 04:36:36', NULL),
(30, 'T238', '2', '3', '300', '2000000000', 'Ada', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non rerum minus eaque ratione corrupti adipisci hic quidem maxime ipsum repellat doloribus inventore est, aperiam ullam vitae numquam, pariatur optio porro.', '1623325014_Majesty.jpg', '1623325014_Majesty_denah.jpg', '2021-06-10 04:36:54', '2021-06-10 04:36:54', NULL),
(31, 'T400', '3', '3', '100', '2000000000', 'Ada', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non rerum minus eaque ratione corrupti adipisci hic quidem maxime ipsum repellat doloribus inventore est, aperiam ullam vitae numquam, pariatur optio porro.', '1623325050_Caladium.jpg', '1623325050_Caladium_denah.jpg', '2021-06-10 04:37:30', '2021-06-10 04:37:30', NULL),
(32, 'T999', '3', '3', '3000', '1000000000', 'Ada', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non rerum minus eaque ratione corrupti adipisci hic quidem maxime ipsum repellat doloribus inventore est, aperiam ullam vitae numquam, pariatur optio porro.', '1623325073_Majesty.jpg', '1623325073_Majesty_denah.jpg', '2021-06-10 04:37:53', '2021-06-10 04:37:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comparisons`
--

CREATE TABLE `comparisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comparisons`
--

INSERT INTO `comparisons` (`id`, `tipe`, `lantai`, `kamar`, `luas`, `harga`, `garasi`, `created_at`, `updated_at`) VALUES
(23, 'T136', '1', '1', '1', '1', '1', '2021-06-10 04:27:54', '2021-06-10 04:27:54'),
(24, 'T199', '2', '2', '2', '3', '2', '2021-06-10 04:35:47', '2021-06-10 04:35:47'),
(25, 'T236', '3', '3', '3', '3', '2', '2021-06-10 04:36:36', '2021-06-10 04:36:36'),
(26, 'T238', '2', '3', '3', '3', '2', '2021-06-10 04:36:54', '2021-06-10 04:36:54'),
(27, 'T400', '3', '3', '1', '3', '2', '2021-06-10 04:37:30', '2021-06-10 04:37:30'),
(28, 'T999', '3', '3', '3', '1', '2', '2021-06-10 04:37:53', '2021-06-10 04:37:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `criterias`
--

CREATE TABLE `criterias` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criterias`
--

INSERT INTO `criterias` (`id`, `code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'K001', 'Lantai', '2021-06-03 07:06:26', '2021-06-03 07:06:26', NULL),
(2, 'K002', 'Kamar', '2021-06-03 07:06:26', '2021-06-03 07:06:26', NULL),
(3, 'K003', 'Luas', '2021-06-03 07:06:26', '2021-06-03 07:06:26', NULL),
(4, 'K004', 'Harga', '2021-06-03 07:06:26', '2021-06-03 07:06:26', NULL),
(5, 'K005', 'Garasi', '2021-06-03 07:06:26', '2021-06-03 07:06:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasils`
--

CREATE TABLE `hasils` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ahp` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasils`
--

INSERT INTO `hasils` (`id`, `tipe`, `lantai`, `kamar`, `luas`, `harga`, `garasi`, `gambar`, `ahp`, `created_at`, `updated_at`) VALUES
(165, 'T136', '1', '1', '100', '1000000000', 'Tidak ada', '1623324530_Canna.jpg', 0.31, '2022-05-06 11:12:34', '2022-05-06 11:12:34'),
(166, 'T199', '2', '2', '200', '2000000000', 'Ada', '1623324947_Caladium.jpg', 0.14, '2022-05-06 11:12:34', '2022-05-06 11:12:34'),
(167, 'T236', '3', '3', '300', '3000000000', 'Ada', '1623324996_Ixora.jpg', 0.11, '2022-05-06 11:12:34', '2022-05-06 11:12:34'),
(168, 'T238', '2', '3', '300', '2000000000', 'Ada', '1623325014_Majesty.jpg', 0.12, '2022-05-06 11:12:34', '2022-05-06 11:12:34'),
(169, 'T400', '3', '3', '100', '2000000000', 'Ada', '1623325050_Caladium.jpg', 0.15, '2022-05-06 11:12:34', '2022-05-06 11:12:34'),
(170, 'T999', '3', '3', '3000', '1000000000', 'Ada', '1623325073_Majesty.jpg', 0.16, '2022-05-06 11:12:34', '2022-05-06 11:12:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_27_100107_create_criterias_table', 1),
(5, '2021_05_27_100121_create_alternatives_table', 1),
(6, '2021_05_30_093521_create_subcriterias_table', 1),
(7, '2021_06_03_135625_create_comparisons_table', 1),
(8, '2021_06_06_031816_create_hasil_table', 2),
(9, '2021_06_06_035717_create_hasils_table', 3),
(10, '2021_06_08_033920_create_hasils_table', 4),
(11, '2021_06_08_111302_create_hasils_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_criterias`
--

CREATE TABLE `sub_criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_criterias`
--

INSERT INTO `sub_criterias` (`id`, `code`, `name`, `nilaik`, `nilaib`, `created_at`, `updated_at`) VALUES
(1, 'KS001', 'Lantai', '1', '1', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(2, 'KS002', 'Lantai', '2', '2', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(3, 'KS003', 'Lantai', '3', '3', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(4, 'KS004', 'Kamar', '1', '1', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(5, 'KS005', 'Kamar', '2', '2', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(6, 'KS006', 'Kamar', '3', '3', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(7, 'KS007', 'Luas', '150', '1', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(8, 'KS008', 'Luas', '200', '2', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(9, 'KS009', 'Luas', '300', '3', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(10, 'KS0010', 'Harga', '1000000000', '1', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(11, 'KS0011', 'Harga', '1500000000', '2', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(12, 'KS0012', 'Harga', '2000000000', '3', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(13, 'KS0013', 'Garasi', 'Tidak ada', '1', '2021-06-03 07:06:21', '2021-06-03 07:06:21'),
(14, 'KS0014', 'Garasi', 'Ada', '2', '2021-06-03 07:06:21', '2021-06-03 07:06:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimaz Ivan Perdana', 'Admin', 'dimazivan740@gmail.com', NULL, '$2y$10$Ka0si0nd2bP.ogG6RELHjuFUN1P8FF0nKumeVKQRoDsaNmC8DlA7S', NULL, '2021-06-03 07:06:09', '2021-06-03 07:06:09'),
(2, 'Putu Ayu Amalia Indriani', 'Admin', 'putuayu@gmail.com', NULL, '$2y$10$5Nf6Zjn6aZqoHOqksOJsXuHfiFxxTRBaK61HGEAK/7X5X9mAECcPC', NULL, '2021-06-03 07:06:09', '2021-06-03 07:06:09'),
(3, 'Eka Hirinda Zulfa', 'Admin', 'ekahirinda@gmail.com', NULL, '$2y$10$40tb1Mgv7bnHWZYJV4BT6uQx7sTXYCgHlUOOvk8eiaPqN2vGleaHi', NULL, '2021-06-03 07:06:09', '2021-06-03 07:06:09'),
(4, 'Customer Coba 01', 'Customer', 'cust01@gmail.com', NULL, '$2y$10$dKvbCO0v39N0dl3sgFQOVuS9Qvt6Sw8X0ZEYNG2vaEzcOhZo5ayUG', NULL, '2021-06-03 07:06:09', '2021-06-03 07:06:09'),
(5, 'Customer Coba 02', 'Customer', 'cust02@gmail.com', NULL, '$2y$10$3iHJFsT0EdvWonuhCS8qz.Tp6PjiPCIFS0sqE.mrd85UzXPOKiGgG', NULL, '2021-06-03 07:06:09', '2021-06-03 07:06:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alternatives_tipe_unique` (`tipe`);

--
-- Indeks untuk tabel `comparisons`
--
ALTER TABLE `comparisons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comparisons_tipe_unique` (`tipe`);

--
-- Indeks untuk tabel `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `criterias_code_unique` (`code`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hasils_tipe_unique` (`tipe`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sub_criterias`
--
ALTER TABLE `sub_criterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_criterias_code_unique` (`code`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `comparisons`
--
ALTER TABLE `comparisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sub_criterias`
--
ALTER TABLE `sub_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comparisons`
--
ALTER TABLE `comparisons`
  ADD CONSTRAINT `comparisons_ibfk_1` FOREIGN KEY (`tipe`) REFERENCES `alternatives` (`tipe`);

--
-- Ketidakleluasaan untuk tabel `hasils`
--
ALTER TABLE `hasils`
  ADD CONSTRAINT `hasils_ibfk_1` FOREIGN KEY (`tipe`) REFERENCES `alternatives` (`tipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
