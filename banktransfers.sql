-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2023 at 04:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banktransfers`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_transactions`
--

CREATE TABLE `account_transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `account_id` bigint UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_balance` int DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `recipient_id` bigint UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_transactions`
--

INSERT INTO `account_transactions` (`id`, `user_id`, `account_id`, `amount`, `transaction_category`, `new_balance`, `description`, `slug`, `created_at`, `updated_at`, `recipient_id`, `status`) VALUES
(4, 6, 1, '500', 'credit', 500, 'added my savings', '63W73E', '2023-03-12 15:57:42', '2023-03-12 15:57:42', NULL, NULL),
(5, 6, 1, '40', 'debit', 410, 'allow', 'RCJAY432T1', '2023-03-14 00:00:35', '2023-03-14 01:05:16', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'checking account', '2023-03-12 15:20:07', '2023-03-12 15:20:07'),
(2, 'savings account', '2023-03-12 15:20:07', '2023-03-12 15:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Kenya', '254', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_08_023624_laratrust_setup_tables', 1),
(7, '2023_03_08_122909_create_account_types_table', 2),
(8, '2023_03_12_114020_create_countries_table', 2),
(9, '2023_03_12_121452_create_user_accounts_table', 2),
(10, '2023_03_12_122421_create_user_recipients_table', 2),
(11, '2023_03_12_123501_add_u_ser_columns', 2),
(12, '2023_03_12_133259_add_country_u_sers', 3),
(13, '2023_03_12_172016_create_account_transactions_table', 4),
(14, '2023_03_12_194042_create_recipient_transactions_table', 5),
(15, '2023_03_13_051517_add_column_user_accounts', 6);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(2, 'users-read', 'Read Users', 'Read Users', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(3, 'users-update', 'Update Users', 'Update Users', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2023-03-08 18:07:18', '2023-03-08 18:07:18'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2023-03-08 18:07:18', '2023-03-08 18:07:18'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2023-03-08 18:07:18', '2023-03-08 18:07:18'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2023-03-08 18:07:18', '2023-03-08 18:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(9, 3),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
-- Table structure for table `recipient_transactions`
--

CREATE TABLE `recipient_transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `account_id` bigint UNSIGNED DEFAULT NULL,
  `recipient_id` bigint UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_balance` int DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2023-03-08 18:07:17', '2023-03-08 18:07:17'),
(2, 'administrator', 'Administrator', 'Administrator', '2023-03-08 18:07:18', '2023-03-08 18:07:18'),
(3, 'user', 'User', 'User', '2023-03-08 18:07:18', '2023-03-08 18:07:18'),
(4, 'role_name', 'Role Name', 'Role Name', '2023-03-08 18:07:18', '2023-03-08 18:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(3, 5, 'App\\Models\\User'),
(3, 6, 'App\\Models\\User'),
(4, 4, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_passport_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `dob`, `physical_address`, `phone_number`, `id_number`, `id_passport_image`, `country_id`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', NULL, '$2y$10$GxPQD.fv07EIJbPiBjei0eLcprNjuMdE13T9h1C5aay0ObRLogQyK', NULL, '2023-03-08 18:07:18', '2023-03-08 18:07:18', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Administrator', 'administrator@app.com', NULL, '$2y$10$vKxAOE8/JBsk3k6Usjo8oOzxgH0m.KzKwEDEcMbDxCmIjjQ6.nFWO', NULL, '2023-03-08 18:07:18', '2023-03-08 18:07:18', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'User', 'user@app.com', NULL, '$2y$10$M9Lvc3jXLExYlNSa.m/dZ.VNBvH6SooiTOdOcn3d9TZglBdIffpU2', NULL, '2023-03-08 18:07:18', '2023-03-08 18:07:18', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Role Name', 'role_name@app.com', NULL, '$2y$10$II9Kifymce.WfZrfShlxLe0xpMjkEs3MRALJeDuOZVh1T07Ejoau6', NULL, '2023-03-08 18:07:18', '2023-03-08 18:07:18', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'one', 'user@gmail.com', NULL, '$2y$10$vYAx/YBWeOwwwkhC8zVASeTgT2D2aBQHzqcKCvFTdR/Pb/gJBEH.2', NULL, '2023-03-12 11:40:05', '2023-03-12 11:40:05', NULL, 'omfrmfr', '0720882594', '20882594', 'Screenshot 2023-03-06 at 16.16.37-1678632005.png', 1),
(6, 'account test', 'account@gmail.com', NULL, '$2y$10$CYp5e4x8N5i1Y3NEbDGyOegpX2I4Nutwnfdf8K94irmdmwt5ETsEW', NULL, '2023-03-12 11:46:47', '2023-03-12 11:46:47', NULL, 'fmrkmfr', '0622993399', '06229933', 'Screenshot 2023-03-02 at 16.44.26-1678632407.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `account_type_id` bigint UNSIGNED DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `opening_balance` longtext COLLATE utf8mb4_unicode_ci,
  `current_balance` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `user_id`, `account_type_id`, `account_no`, `account_name`, `opening_balance`, `current_balance`, `created_at`, `updated_at`) VALUES
(1, 6, 2, '876549', 'ikjkdmdk', '0', '410', '2023-03-12 12:49:15', '2023-03-14 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_recipients`
--

CREATE TABLE `user_recipients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_recipients`
--

INSERT INTO `user_recipients` (`id`, `user_id`, `first_name`, `last_name`, `email`, `country_code_id`, `phone_number`, `slug`, `created_at`, `updated_at`) VALUES
(1, 6, 'dana', 'patton', 'dana@gmail.com', '1', '0720883399', 'frfrfrfr', '2023-03-12 16:39:08', '2023-03-12 16:39:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_transactions`
--
ALTER TABLE `account_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_transactions_user_id_foreign` (`user_id`),
  ADD KEY `account_transactions_account_id_foreign` (`account_id`),
  ADD KEY `account_transactions_recipient_id_foreign` (`recipient_id`);

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recipient_transactions`
--
ALTER TABLE `recipient_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipient_transactions_user_id_foreign` (`user_id`),
  ADD KEY `recipient_transactions_account_id_foreign` (`account_id`),
  ADD KEY `recipient_transactions_recipient_id_foreign` (`recipient_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_accounts_account_no_unique` (`account_no`),
  ADD KEY `user_accounts_user_id_foreign` (`user_id`),
  ADD KEY `user_accounts_account_type_id_foreign` (`account_type_id`);

--
-- Indexes for table `user_recipients`
--
ALTER TABLE `user_recipients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_recipients_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_transactions`
--
ALTER TABLE `account_transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipient_transactions`
--
ALTER TABLE `recipient_transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_recipients`
--
ALTER TABLE `user_recipients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_transactions`
--
ALTER TABLE `account_transactions`
  ADD CONSTRAINT `account_transactions_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `user_accounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `account_transactions_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `user_recipients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `account_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipient_transactions`
--
ALTER TABLE `recipient_transactions`
  ADD CONSTRAINT `recipient_transactions_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `user_accounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipient_transactions_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `user_recipients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipient_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD CONSTRAINT `user_accounts_account_type_id_foreign` FOREIGN KEY (`account_type_id`) REFERENCES `account_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_recipients`
--
ALTER TABLE `user_recipients`
  ADD CONSTRAINT `user_recipients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
