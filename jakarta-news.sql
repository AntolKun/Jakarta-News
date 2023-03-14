-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2023 at 12:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jakarta-news`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakings`
--

CREATE TABLE `breakings` (
  `id` bigint UNSIGNED NOT NULL,
  `breaking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakings`
--

INSERT INTO `breakings` (`id`, `breaking`, `created_at`, `updated_at`) VALUES
(1, 'Hendri Coli Di Kamar Mandi', '2023-03-07 04:41:58', '2023-03-07 04:41:58'),
(2, 'Agung Ketauan Selingkuh', '2023-03-07 07:21:38', '2023-03-07 07:21:38'),
(3, 'pler', '2023-03-07 07:33:33', '2023-03-07 07:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint UNSIGNED NOT NULL,
  `carousel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `carousel`, `judul`, `subjudul`, `created_at`, `updated_at`) VALUES
(1, 'error_doki.jpg', 'Doki Error', 'Doki Error Doki Error Doki Error Doki Error', '2023-03-07 04:33:34', '2023-03-07 04:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Nasional', NULL, NULL),
(2, 'Lokal', '2023-03-07 04:05:32', '2023-03-07 04:05:32'),
(3, 'Internasional', '2023-03-07 04:05:47', '2023-03-07 04:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(8, '2019_08_19_000000_create_failed_jobs_table', 2),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(10, '2023_02_27_050357_create_posts_table', 2),
(11, '2023_03_02_155025_create_users_table', 2),
(12, '2023_03_03_094840_create_users_table', 3),
(13, '2023_03_07_104441_create_kategoris_table', 4),
(14, '2023_03_07_110928_create_tags_table', 5),
(15, '2023_03_07_112054_create_carousels_table', 6),
(16, '2023_03_07_113602_create_breakings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isiartikel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `subjudul`, `slug`, `tanggal`, `kategori`, `isiartikel`, `status`, `user`, `gambar`, `tag1`, `tag2`, `tag3`, `created_at`, `updated_at`) VALUES
(14, '1234', 'qwerty', 'coba-2', '2023-03-08', 'Internasional', '<p>Dunia sedang tidak baik baik saja</p>', 1, 'Hendri', 'e729fa37-b43c-4053-8e01-17a165760e98.png', 'SMSI', 'Rohani', 'Kemanusiaan', '2023-03-07 22:48:30', '2023-03-07 22:48:30'),
(15, '0987', 'poiuy', '', '2023-03-07', 'Lokal', '<p>dlmclkdcaoisveiouan</p>', 1, 'ahmad', 'nVuiY1v7Iuy6x3K56YOoJMf1Q-KrhtgJlF3sfyH243s.jpg', 'SMSI', 'SMSI', 'SMSI', '2023-03-07 22:49:02', '2023-03-07 22:49:02'),
(17, 'xznx,nxc', '\'aslsp[asdp', '', '2022-08-08', 'Nasional', '<p>scacaxz&#39;</p>', 1, 'Agung', '65bb673d-c257-465b-8568-8d277d0444df.png', 'SMSI', 'SMSI', 'SMSI', '2023-03-07 22:50:04', '2023-03-07 22:50:04'),
(19, 'coba aja dulu', 'kita sedang mencoba dulu', 'coba-aja-dulu', '2023-03-09', 'Nasional', '<p><img src=\"blob:http://jakarta-news.test/62149345-0cd1-454a-bc06-d56bbed3e2d2\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>', 1, 'ahmad', '44f421cf-981a-4211-8359-06422688f13d.png', 'SMSI', 'SMSI', 'SMSI', '2023-03-09 07:03:19', '2023-03-09 07:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(2, 'SMSI', '2023-03-07 04:46:35', '2023-03-07 04:46:35'),
(3, 'Rohani', '2023-03-07 04:46:41', '2023-03-07 04:46:41'),
(4, 'Kemanusiaan', '2023-03-07 04:46:47', '2023-03-07 04:46:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `no_telp`, `email_verified_at`, `password`, `foto`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', 'ahmad@tes.com', '08122345678', NULL, '$2y$10$kZQQksFsRhNsPDpXGpJAs.vNCj6qjqgO0izA2nGszOMm0rXzUK6Ru', '', 'admin', NULL, '2023-03-03 09:59:35', '2023-03-03 09:59:35'),
(3, 'Hendri', 'bartolomeus@gmail.com', '08155465555', NULL, '$2y$10$Yt2SnJiUCEg4sJ2fyhz/Tu0QdTNzDvx77ks6uAPkOtS9YsoiMlGde', 'logo-pdp.png', 'Staff', NULL, '2023-03-06 22:24:49', '2023-03-06 22:24:49'),
(4, 'Agung', 'stefanus@gmail.com', '0898546455', NULL, '$2y$10$RJt6Q1NKsoRtwqUxZ8btEuvO7D6YqXPUlLLNI.xhaAWj69lRAK3om', 'channels4_profile.jpg', 'Admin', NULL, '2023-03-07 00:35:24', '2023-03-07 00:35:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakings`
--
ALTER TABLE `breakings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag2` (`tag2`),
  ADD KEY `tag3` (`tag3`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `user` (`user`),
  ADD KEY `tag1` (`tag1`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_no_telp_unique` (`no_telp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breakings`
--
ALTER TABLE `breakings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
