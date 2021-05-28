-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 03:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oates_specialties`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannerslider`
--

CREATE TABLE `bannerslider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerslider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannerslider`
--

INSERT INTO `bannerslider` (`id`, `heading_one`, `heading_two`, `heading_three`, `bannerslider_image`, `created_at`, `updated_at`) VALUES
(1, 'Et dolor enim dolore', 'Quis omnis aute earu', 'Qui molestiae labori', 'O41laLGCFkbchAGaUfDDmdqLsFd9qCHXDYbHmygz.png', NULL, '2021-05-28 07:13:01'),
(3, 'Possimus magna quos', 'Fugiat proident re', 'Culpa culpa non ut', '8asoUhEYiamsTJLSvuSkWvnj0ED5pCqHa2x1fdSr.png', NULL, '2021-05-28 07:13:40'),
(6, 'Et dolor enim dolore', 'Quis omnis aute earu', 'Qui molestiae labori', '3HNYe8Ak9t9dfbRPv2AcTPEax6LaGvyBnDI0Q7Vw.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brandlogo`
--

CREATE TABLE `brandlogo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandlogo`
--

INSERT INTO `brandlogo` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(5, 'logo', '9PInKML8zPFbU1VlnGO12Yx7I5MHf5MQPxcelmKX.png', NULL, '2021-05-28 06:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(9, 'Arm Care', '2021-05-27 19:51:57', '2021-05-28 06:59:16'),
(10, 'Mobility & Flexibility', '2021-05-27 23:32:34', '2021-05-28 06:59:34'),
(13, 'Strength & Stability', '2021-05-27 23:32:41', '2021-05-28 07:00:04'),
(14, 'Velocity Enhancement', '2021-05-28 01:00:24', '2021-05-28 01:00:24');

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
(4, '2021_05_26_212939_create_bannerslider_table', 2),
(5, '2021_05_27_010235_create_brandlogo_table', 3),
(6, '2021_05_27_154555_create_product_table', 4),
(7, '2021_05_27_155729_create_bestsellerproduct_table', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` varchar(300) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL,
  `orignal_price` varchar(300) DEFAULT NULL,
  `discounted_price` varchar(300) DEFAULT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `new_store_product` enum('0','1') DEFAULT '0',
  `best_seller` enum('0','1') DEFAULT '0',
  `featured_product` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `img`, `orignal_price`, `discounted_price`, `slug`, `created_at`, `updated_at`, `new_store_product`, `best_seller`, `featured_product`) VALUES
(5, '9', 'Lilah Leonard', 'yrVgVmvHverBzLmGSUDFnmFCqTIJoyT7gT0leIzP.jpg', '$50', '$100', NULL, '2021-05-27 23:54:15', '2021-05-28 07:58:35', '0', '0', '0'),
(6, '10', 'TAP™ SOFT PLYO BOXES (SET OF ALL THREE)', 'ZOM0G80oPcaDM1C8ZoqRaDZ7fMPnah4eyF7dqmCv.png', '$50', '$100', NULL, '2021-05-27 23:57:23', '2021-05-28 07:58:41', '0', '0', '0'),
(15, '9', 'Raja Talley', 'vDz9oDUnwdwhAVPaFaL0d9XV7oqCv2JlbuBOY9F1.png', '636', '72', NULL, '2021-05-28 01:33:49', '2021-05-28 08:33:56', '0', '0', '0'),
(17, '9', NULL, NULL, NULL, NULL, NULL, '2021-05-28 01:37:37', '2021-05-28 01:37:37', '0', '0', '0');

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
  `Isadmin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `Isadmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'James Bond', 'james@gmail.com', NULL, '$2y$10$88bZMye4rrn96fXe8OJlC.gK.BSCA.T0OJXd4QfLQjkBG9fQKvW9G', 1, NULL, '2021-05-26 05:26:16', '2021-05-26 05:26:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannerslider`
--
ALTER TABLE `bannerslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandlogo`
--
ALTER TABLE `brandlogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bannerslider`
--
ALTER TABLE `bannerslider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brandlogo`
--
ALTER TABLE `brandlogo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
