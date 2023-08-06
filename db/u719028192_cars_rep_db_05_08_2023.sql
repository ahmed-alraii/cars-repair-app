-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2023 at 12:31 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u719028192_cars_rep_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `bill_type_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_types`
--

CREATE TABLE `bill_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `model` varchar(191) NOT NULL,
  `color` varchar(191) NOT NULL,
  `quality_number` varchar(191) NOT NULL,
  `brand` varchar(191) NOT NULL,
  `vin` varchar(191) NOT NULL,
  `notes` varchar(191) NOT NULL,
  `container_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `model`, `color`, `quality_number`, `brand`, `vin`, `notes`, `container_id`, `created_at`, `updated_at`) VALUES
(13, 'acoord', '2017', 'رصاصي', '1', 'هوندا', '1HGCR2F87HA167930', 'الفئة 2', NULL, '2023-08-05 12:00:05', '2023-08-05 12:00:05'),
(14, 'lexus', '2015', 'ابيض', '2', 'تيوتا', 'JTHBK1GG3F2205013', 'االفئة 1', NULL, '2023-08-05 12:04:13', '2023-08-05 12:04:13'),
(15, 'acoord', '2016', 'رصاصي', '3', 'هوندا', '1HGCR2F96GA017184', 'الفئه 1', NULL, '2023-08-05 12:05:32', '2023-08-05 12:05:32'),
(16, 'elantra', '2017', 'ذهبي', '4', 'هيونداي', '5NPD84LF8HH136604', 'االفئة 1', NULL, '2023-08-05 12:07:09', '2023-08-05 12:07:09'),
(17, 'acoord', '2020', 'ابيض', '5', 'هوندا', '1HGCV1F11LA040334', 'الفئة 2', NULL, '2023-08-05 12:08:31', '2023-08-05 12:08:31'),
(18, 'افلون', '2015', 'اسود', '1', 'تيوتا', '4T1BK1EB2FU147064', 'االفئة 1', NULL, '2023-08-05 12:09:51', '2023-08-05 12:11:13'),
(19, 'acoord', '2016', 'اسود', '1', 'هوندا', '1HGCR3F81GA007787', 'االفئة 1', NULL, '2023-08-05 12:15:44', '2023-08-05 12:15:44'),
(20, 'acoord', '2016', 'بني', '1', 'هوندا', '1HGCR2F84GA009642', 'االفئة 1', NULL, '2023-08-05 12:18:29', '2023-08-05 12:18:29'),
(21, 'acoord', '2016', 'بني', '1', 'هوندا', '1HGCR2F84GA009642', 'االفئة 1', NULL, '2023-08-05 12:18:29', '2023-08-05 12:18:29'),
(22, 'acoord', '2016', 'اسود', '2', 'هوندا', '1HGCR2F36GA230177', 'الفئة 2', NULL, '2023-08-05 12:21:37', '2023-08-05 12:21:37'),
(23, 'acoord', '2016', 'رصاصي', '1', 'هوندا', '1HGCR2F87GA182412', 'االفئة 1', NULL, '2023-08-05 12:23:02', '2023-08-05 12:23:02'),
(24, 'acoord', '2016', 'عنابي', '1', 'هوندا', '1HGCR2F86GA017709', 'الفئه 1', NULL, '2023-08-05 12:24:00', '2023-08-05 12:24:00'),
(25, 'acoord', '2017', 'ذهبي', '1', 'هوندا', '1HGCR2F73HA084115', 'االفئة 1', NULL, '2023-08-05 12:25:38', '2023-08-05 12:25:38'),
(26, 'acoord', '2016', 'ابيض', '1', 'هوندا', '1HGCR2F88GA229964', 'االفئة 1', NULL, '2023-08-05 12:26:54', '2023-08-05 12:26:54'),
(27, 'elantra', '2017', 'ابيض', '2', 'هيونداي', '5NPD841F8HH086416', 'الفئة 2', NULL, '2023-08-05 12:28:05', '2023-08-05 12:28:05'),
(28, 'elantra', '2016', 'ابيض', '3', 'هيونداي', 'KMHD741C9GU043411', 'الفئة 2', NULL, '2023-08-05 12:29:27', '2023-08-05 12:29:27'),
(29, 'elantra', '2018', 'رصاصي', '1', 'هيونداي', '5NPDH4AE4FH602326', 'االفئة 1', NULL, '2023-08-05 12:31:54', '2023-08-05 12:31:54'),
(30, 'elantra', '2017', 'ابيض', '3', 'هيونداي', '5NPD74LF2HH114259', 'الفئه 3', NULL, '2023-08-05 12:33:06', '2023-08-05 12:33:06'),
(31, 'sentra', '2019', 'ابيض', '2', 'نيسان', '3N1AB7AP6KY285589', 'الفئة 2', NULL, '2023-08-05 12:34:19', '2023-08-05 12:34:19'),
(32, 'kia', '2013', 'رصاصي', '1', 'كيا', 'KNAPC8129D7453970', 'الفئه 1', NULL, '2023-08-05 12:35:25', '2023-08-05 12:35:25'),
(33, 'acoord', '2017', 'ابيض', '1', 'هوندا', '1HGCR2F91HA048537', 'االفئة 1', NULL, '2023-08-05 12:36:41', '2023-08-05 12:36:41'),
(34, 'acoord', '2017', 'ابيض', '1', 'هوندا', '1HGCR2F86HA079144', 'االفئة 1', NULL, '2023-08-05 12:37:44', '2023-08-05 12:37:44'),
(35, 'acoord', '2015', 'ابيض', '1', 'هوندا', '1HGCR2F74FA207224', 'الفئه 1', NULL, '2023-08-05 12:38:28', '2023-08-05 12:38:28'),
(36, 'elantra', '2018', 'رصاصي', '1', 'هيونداي', '5NPD84LF0JH267578', 'االفئة 1', NULL, '2023-08-05 12:39:32', '2023-08-05 12:39:32'),
(37, 'acoord', '2016', 'ابيض', '1', 'هوندا', '1HGCR2F89GA052003', 'االفئة 1', NULL, '2023-08-05 12:40:26', '2023-08-05 12:40:26'),
(38, 'acoord', '2017', 'عنابي', '2', 'هوندا', '1HGCR2F39HA195751', 'الفئة 2', NULL, '2023-08-05 12:41:32', '2023-08-05 12:41:32'),
(39, 'acoord', '2016', 'رصاصي', '2', 'هوندا', '1HGCR2F3XHA283756', 'الفئة 2', NULL, '2023-08-05 12:43:44', '2023-08-05 12:43:44'),
(40, 'acoord', '2016', 'ابيض', '1', 'هوندا', '1HGCR2F86GA054274', 'االفئة 1', NULL, '2023-08-05 12:44:27', '2023-08-05 12:44:27'),
(41, 'sevak', '2013', 'رصاصي', '2', 'هوندا', '19XFB2648DE902919', 'الفئة 2', NULL, '2023-08-05 12:45:52', '2023-08-05 12:45:52'),
(42, 'acoord', '2017', 'اسود', '1', 'هوندا', '1HGCR2F07HA125087', 'االفئة 1', NULL, '2023-08-05 12:46:39', '2023-08-05 12:46:39'),
(43, 'corola', '2016', 'ابيض', '2', 'تيوتا', '2T1BURHE0GC502265', '2', NULL, '2023-08-05 12:47:48', '2023-08-05 12:47:48'),
(44, 'linklon', '2011', 'اسود', '2', 'لينكون', '2LNBL8EV2BX765522', 'الفئة 2', NULL, '2023-08-05 12:49:14', '2023-08-05 12:49:14'),
(45, 'shruqr', '2016', 'رصاصي', '2', 'جيب', '1C4RJFBG1GC347640', 'االفئة 1', NULL, '2023-08-05 12:50:50', '2023-08-05 12:50:50'),
(46, 'sonata', '2015', 'ابيض', '2', 'هيونداي', 'KMHEB41C7CA332446', 'الفئة 2', NULL, '2023-08-05 12:51:52', '2023-08-05 12:51:52'),
(47, 'lexus', '2015', 'اسود', '1', 'تيوتا', 'JTHBK1GG9F2206912', 'االفئة 1', NULL, '2023-08-05 12:52:38', '2023-08-05 12:52:38'),
(48, 'acoord', '2016', 'رصاصي', '2', 'هوندا', '1HGCR2F34GA069392', 'الفئة 2', NULL, '2023-08-05 12:53:33', '2023-08-05 12:53:33'),
(49, 'acoord', '2016', 'ابيض', '1', 'هوندا', '1HGCR2F87FA153491', 'االفئة 1', NULL, '2023-08-05 12:55:05', '2023-08-05 12:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `client_cars`
--

CREATE TABLE `client_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(191) NOT NULL,
  `client_phone` varchar(191) DEFAULT NULL,
  `sell_price` decimal(8,3) NOT NULL,
  `show_date` date NOT NULL,
  `sell_date` date NOT NULL,
  `car_name` varchar(191) NOT NULL,
  `car_model` varchar(191) NOT NULL,
  `car_color` varchar(191) NOT NULL,
  `car_quality_number` varchar(191) NOT NULL,
  `car_brand` varchar(191) NOT NULL,
  `car_vin` varchar(191) NOT NULL,
  `notes` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `containers`
--

CREATE TABLE `containers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `container_name` varchar(191) NOT NULL,
  `container_number` varchar(191) NOT NULL,
  `bill_number` varchar(191) NOT NULL,
  `arrival_date` date NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `containers`
--

INSERT INTO `containers` (`id`, `container_name`, `container_number`, `bill_number`, `arrival_date`, `notes`, `created_at`, `updated_at`) VALUES
(6, 'الكيان للحاويات', 'CAIU8234856', '222316631', '2022-12-02', 'بداية العمل', '2023-08-05 00:33:35', '2023-08-05 00:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_08_183140_create_roles_table', 1),
(6, '2023_01_03_180139_add_role_is_as_forigen_key', 1),
(7, '2023_08_01_185655_create_containers_table', 1),
(8, '2023_08_01_185725_create_client_cars_table', 1),
(9, '2023_08_01_191554_create_bill_types_table', 1),
(10, '2023_08_01_205904_create_cars_table', 1),
(11, '2023_08_01_210115_create_bills_table', 1),
(12, '2023_08_01_210217_create_spare_parts_table', 1),
(13, '2023_08_05_005840_add_phone_column_in_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-08-01 17:14:33', '2023-08-01 17:14:33'),
(2, 'Employee', '2023-08-01 17:14:33', '2023-08-01 17:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `part_name` varchar(191) NOT NULL,
  `part_price` decimal(8,3) NOT NULL,
  `part_quantity` int(11) NOT NULL,
  `notes` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `phone`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HjcveZD9CNSymZURDl/oyu0dqljNec4mosPo1hqiUPkfJxMWSdu5u', NULL, '2023-08-01 17:14:34', '2023-08-01 17:14:34', 1, NULL),
(2, 'Employee', 'emp@gmail.com', NULL, '$2y$10$v4a.fI8X2lJn86ZOdBtKBu7.IZoQPHTApnpybV/fNlkh5/ZpazErq', NULL, '2023-08-01 17:14:34', '2023-08-01 17:14:34', 2, NULL),
(3, 'ahmad', 'ahmad@gmail.com', NULL, '$2y$10$mojV14yP56T/WjBcVoCVMOaGuf8dw84snE4JQdAX3Okpi0Rq96NQS', NULL, '2023-08-05 00:39:08', '2023-08-05 01:13:09', 2, '96796333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_car_id_foreign` (`car_id`),
  ADD KEY `bills_bill_type_id_foreign` (`bill_type_id`);

--
-- Indexes for table `bill_types`
--
ALTER TABLE `bill_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_container_id_foreign` (`container_id`);

--
-- Indexes for table `client_cars`
--
ALTER TABLE `client_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `containers`
--
ALTER TABLE `containers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spare_parts_bill_id_foreign` (`bill_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_types`
--
ALTER TABLE `bill_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `client_cars`
--
ALTER TABLE `client_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `containers`
--
ALTER TABLE `containers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_bill_type_id_foreign` FOREIGN KEY (`bill_type_id`) REFERENCES `bill_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_container_id_foreign` FOREIGN KEY (`container_id`) REFERENCES `containers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD CONSTRAINT `spare_parts_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
