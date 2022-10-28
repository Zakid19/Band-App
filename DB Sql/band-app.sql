-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 05:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `band-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `band_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `band_genre`
--

CREATE TABLE `band_genre` (
  `band_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Heavy Metal', 'heavy-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(2, 'Speed Metal', 'speed-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(3, 'Thrash Metal', 'thrash-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(4, 'Power Metal', 'power-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(5, 'Death Metal', 'death-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(6, 'Black Metal', 'black-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(7, 'Pagan Metal', 'pagan-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(8, 'Viking Metal', 'viking-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(9, 'Folk Metal', 'folk-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(10, 'Symphonic Metal', 'symphonic-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(11, 'Gothic Metal', 'gothic-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(12, 'Glam Metal', 'glam-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(13, 'Hair Metal', 'hair-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(14, 'Doom Metal', 'doom-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(15, 'Groove Metal', 'groove-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(16, 'Industrial Metal', 'industrial-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(17, 'Modern Metal', 'modern-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(18, 'Neoclassical Metal', 'neoclassical-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(19, 'New Wave Of British Heavy Metal', 'new-wave-of-british-heavy-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(20, 'Post Metal', 'post-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(21, 'Progressive Metal', 'progressive-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(22, 'Avantgarde Metal', 'avantgarde-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(23, 'Sludge', 'sludge', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(24, 'Djent', 'djent', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(25, 'Drone', 'drone', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(26, 'Kawaii Metal', 'kawaii-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(27, 'Pirate Metal', 'pirate-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(28, 'Nu Metal', 'nu-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(29, 'Neue Deutsche Härte', 'neue-deutsche-harte', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(30, 'Math Metal', 'math-metal', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(31, 'Crossover', 'crossover', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(32, 'Grindcore', 'grindcore', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(33, 'Hardcore', 'hardcore', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(34, 'Metalcore', 'metalcore', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(35, 'Deathcore', 'deathcore', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(36, 'Post Hardcore', 'post-hardcore', '2022-10-26 23:49:46', '2022-10-26 23:49:46'),
(37, 'Mathcore', 'mathcore', '2022-10-26 23:49:46', '2022-10-26 23:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `lyrics`
--

CREATE TABLE `lyrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `band_id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_16_011759_create_bands_table', 1),
(6, '2022_10_16_011804_create_albums_table', 1),
(7, '2022_10_16_011812_create_genres_table', 1),
(8, '2022_10_16_011822_create_lyrics_table', 1),
(9, '2022_10_16_011946_create_band_genre_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `band_genre`
--
ALTER TABLE `band_genre`
  ADD PRIMARY KEY (`band_id`,`genre_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lyrics`
--
ALTER TABLE `lyrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `lyrics`
--
ALTER TABLE `lyrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
