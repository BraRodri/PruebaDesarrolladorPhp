-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 12:01 AM
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
-- Database: `prueba_desarrollador`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `tipo_documento`, `numero_documento`, `nombre`, `created_at`, `updated_at`) VALUES
(1, '1', '1093887001', 'Brayan Rodriguez', '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(2, '2', '123456789', 'Julanito Perez', '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(3, '3', '987654321', 'Julanita Gomez', '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(4, '4', '147258369', 'Juan Cardenas', '2022-01-13 01:24:13', '2022-01-13 01:24:13');

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
-- Table structure for table `lista_pago`
--

CREATE TABLE `lista_pago` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `num_plan` bigint(20) NOT NULL,
  `valor` bigint(20) NOT NULL,
  `vencimiento` date NOT NULL,
  `vigencia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lista_pago`
--

INSERT INTO `lista_pago` (`id`, `client_id`, `num_plan`, `valor`, `vencimiento`, `vigencia`, `created_at`, `updated_at`) VALUES
(1, 1, 2172570574, 520000, '2021-01-10', 1, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(2, 1, 9693474149, 585000, '2021-02-10', 1, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(3, 1, 2283814017, 328000, '2021-02-20', 0, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(4, 1, 7016563239, 120000, '2021-03-11', 0, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(5, 1, 7360786803, 368000, '2021-03-14', 1, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(6, 1, 6125084928, 1200000, '2021-03-23', 1, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(7, 1, 4058335642, 980000, '2021-03-27', 0, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(8, 2, 9516509996, 720000, '2021-04-05', 1, '2022-01-13 01:24:13', '2022-01-13 01:24:13'),
(9, 2, 3680419074, 453000, '2021-04-08', 1, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(10, 2, 2972235787, 486200, '2021-04-12', 0, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(11, 2, 4842528725, 120630, '2021-04-15', 1, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(12, 2, 5652520582, 122000, '2021-04-18', 1, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(13, 2, 5977818943, 932000, '2021-04-19', 0, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(14, 2, 3517861621, 888000, '2021-04-21', 1, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(15, 3, 8358678205, 453000, '2021-05-18', 1, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(16, 3, 2499193087, 296000, '2021-05-27', 0, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(17, 3, 6024617019, 145000, '2021-05-23', 0, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(18, 3, 9972613220, 789000, '2021-06-09', 1, '2022-01-13 01:24:14', '2022-01-13 01:24:14'),
(19, 3, 5587603271, 753000, '2021-06-14', 0, '2022-01-13 01:24:15', '2022-01-13 01:24:15'),
(20, 3, 5255326756, 357000, '2021-06-02', 1, '2022-01-13 01:24:15', '2022-01-13 01:24:15'),
(21, 3, 5346158461, 159000, '2021-06-21', 1, '2022-01-13 01:24:16', '2022-01-13 01:24:16'),
(22, 4, 4314946601, 456000, '2021-07-21', 1, '2022-01-13 01:24:16', '2022-01-13 01:24:16'),
(23, 4, 8886920554, 128000, '2021-07-22', 1, '2022-01-13 01:24:17', '2022-01-13 01:24:17'),
(24, 4, 6850723741, 743000, '2021-07-14', 0, '2022-01-13 01:24:17', '2022-01-13 01:24:17'),
(25, 4, 5803135695, 986000, '2021-08-21', 0, '2022-01-13 01:24:17', '2022-01-13 01:24:17'),
(26, 4, 3492315440, 752000, '2021-08-11', 1, '2022-01-13 01:24:17', '2022-01-13 01:24:17'),
(27, 4, 2599966887, 336000, '2021-08-22', 0, '2022-01-13 01:24:17', '2022-01-13 01:24:17'),
(28, 4, 2255137996, 147000, '2021-08-25', 1, '2022-01-13 01:24:17', '2022-01-13 01:24:17');

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
(5, '2022_01_12_194128_create_client_table', 1),
(6, '2022_01_12_194155_create_lista_pago_table', 1);

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
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lista_pago`
--
ALTER TABLE `lista_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lista_pago_client_id_foreign` (`client_id`);

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
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lista_pago`
--
ALTER TABLE `lista_pago`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lista_pago`
--
ALTER TABLE `lista_pago`
  ADD CONSTRAINT `lista_pago_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
