-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 03:15 AM
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
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Drayton', 'wlS2fhqUblv9dyGrfTYYrWn02PXUxJM2P07yyvV8.jpg', NULL, NULL),
(5, 'Matt', 'BCyM8MuLatZaUKO4TiYFBzcn6FIPbAGcOQ9AkFAz.jpg', NULL, NULL),
(6, 'Stephone', '6XbPJEImtRWIEumQT3PkymTRFpyF4WlWb8QIALdO.jpg', NULL, NULL),
(7, 'Matt', 'gaeiuqNJ9sDldoEKfpzSqIpCCyjmEVwQqzg6D1MG.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bannerslider`
--

CREATE TABLE `bannerslider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannerslider`
--

INSERT INTO `bannerslider` (`id`, `heading_one`, `heading_two`, `heading_three`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Velit officia dolore', 'YOU Can Do It', 'YOU Can Do It', 'ulTJqtGQYWeaFg56FuAsxvmVBWr0K5ZZBeTUTRJj.png', NULL, '2021-06-08 05:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(9, 'IT’S TIME FOR A REVOLUTION IN THROWING REHAB: BY RANDY SULLIVAN', '<p>One night last winter my friend, Alan Jaeger called me with a major concern about the current state of UCL reconstruction post-operative rehabilitation and throwing protocols.</p>', 'PesRsSkYVDQwa0Hm2zqQVdglmtcF7illpcnhlWzf.png', NULL, '2021-06-03 08:24:01'),
(11, 'IT’S TIME FOR A REVOLUTION IN THROWING REHAB: BY RANDY SULLIVAN', '<p>One night last winter my friend, Alan Jaeger called me with a major concern about the current state of UCL reconstruction post-operative rehabilitation and throwing protocols.</p>', '0ectV6qfMCKhBXEiEZu4yoDLBNilxQpjIiIAVZIx.png', NULL, '2021-06-03 08:24:19');

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
(5, 'logo', '0jOED5SZtXubmECFm5j1ve3rVwJO3sq05CywpwsO.png', NULL, '2021-05-29 05:45:09'),
(6, 'logo2', 'CI00b1BA0aaGv1uRCo6zJlNNdChvJUSBLCeFNT1t.png', NULL, NULL),
(7, 'logo3', '7ALe9xlm8qKYxWP3oKp2YUhqJitbDw8fbp5qeVUa.png', NULL, NULL),
(8, 'logo4', 'yuTloHTLPq46901BUejPefLMpUTyDeGlb9OJ05zm.png', NULL, NULL);

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
(9, 'Arm Care', '2021-05-27 19:51:57', '2021-06-08 04:22:37'),
(10, 'Mobility & Flexibility', '2021-05-27 23:32:34', '2021-05-28 06:59:34'),
(13, 'Strength & Stability', '2021-05-27 23:32:41', '2021-05-28 07:00:04'),
(14, 'Velocity Enhancement', '2021-05-28 01:00:24', '2021-05-28 01:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `icon`, `heading`, `text`) VALUES
(7, 'fa fa-map-marker', 'OFFICE LOCATION', '4202 Portsmouth Blvd. Portsmouth VA. 23701'),
(10, 'fa fa-paper-plane', 'MAIL', '151 FM 1696 East Huntsville, TX 77320');

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
(7, '2021_05_27_155729_create_bestsellerproduct_table', 5),
(8, '2021_05_28_193100_create_blog_table', 6),
(9, '2021_05_28_212119_create_socialmedialink_table', 7),
(11, '2021_06_01_203739_create_sitesettings_table', 8),
(12, '2021_06_03_215848_create_aboutuses_table', 9),
(13, '2021_06_03_232512_create_contacts_table', 10),
(14, '2021_06_07_174816_create_videos_table', 11);

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
  `product_description` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `orignal_price` varchar(300) DEFAULT NULL,
  `discounted_price` varchar(300) DEFAULT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `new_store_product` int(11) DEFAULT 0,
  `best_seller` enum('0','1') DEFAULT '0',
  `featured_product` enum('0','1') DEFAULT '0',
  `price` varchar(11) DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `product_description`, `image`, `orignal_price`, `discounted_price`, `slug`, `created_at`, `updated_at`, `new_store_product`, `best_seller`, `featured_product`, `price`) VALUES
(67, '9', 'Donec Vrius Elit Felis', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'Ipgxap9VGeheY03cw1nvET48foMy3CQPBm7qrRK9.png', '50.00', '15.00', NULL, '2021-06-02 21:08:47', '2021-06-08 00:16:03', 1, '1', '1', '25'),
(74, '9', 'Para shoot bag', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'wdoTYJ8t3fdpwXg9QSD39YS9XXA4KIgnaG3mDwAu.png', '50', '40', NULL, '2021-06-03 17:25:33', '2021-06-08 00:16:57', 1, '1', '1', '30'),
(75, '9', 'Dora Ingram', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'yvjmZbO3Sbid06WpiHLow0TeykpCo1BkSGUgVI1t.png', '50', '40', NULL, '2021-06-03 17:26:29', '2021-06-08 00:15:08', 1, '0', '1', '30'),
(81, '9', 'Desiree Duncan', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'cDsQpi1w5nOAsMNVq2G3hUxGjW0surTtvKeEikIi.png', '691', '766', NULL, '2021-06-03 17:33:58', '2021-06-08 00:15:38', 0, '1', '1', '164'),
(85, '9', 'Donec Vrius Elit Felis', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', '7lKIqEJWgBfPgl1faIvb2W1xJuRbPfoX1KGS9lJf.png', '50', '40', NULL, '2021-06-04 18:17:11', '2021-06-08 00:16:25', 1, '1', '1', '30'),
(89, '9', 'product2', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', '0OdHhuBNg7DLTtwxczR0OLW2VjsaLdfSmGV6PKdp.png', '50', '40', NULL, '2021-06-04 19:03:19', '2021-06-08 00:14:33', 0, '1', '0', '30'),
(90, '10', 'TAP™ EXTREME DUTY WEIGHTED BALL (SET OF SIX)', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'YDUnOHZVZ6hQg3rWAmSjUgiBLR4qlNYUI7IQL8Fn.png', '50', '40', NULL, '2021-06-07 17:17:54', '2021-06-07 17:17:54', 0, '0', '0', '30'),
(97, '13', 'TAP™ EXTREME DUTY WEIGHTED BALL (SET OF SIX)', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'IegRpVP5I05j1l2d3X8OQVLRaTiinI9qUE6DlV67.png', '50', '40', NULL, '2021-06-07 17:28:22', '2021-06-07 17:28:22', 0, '0', '0', '40'),
(98, '14', 'Donec Vrius Elit Felis', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', '1pGcwOUSoy6ZHXhabKAzsHWn34EYHogYpw6y5zhc.png', '50', '40', NULL, '2021-06-07 23:41:26', '2021-06-08 06:43:44', 0, '0', '0', '40');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_righttext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `header_logo`, `footer_logo`, `copy_righttext`, `created_at`, `updated_at`) VALUES
(1, 'wDxuOuF63qZ5k9u4TgxpjWa2Zi73DyKkB9lf0NYp.png', 'pbhHnrnTfFNO1meTAZvFJmQl3yrvXUSfaExkYG0F.png', 'Copyright © 2019 OATES SPECIALTIES LLC. All rights reserved.', NULL, '2021-06-08 06:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `id` int(11) NOT NULL,
  `slider_description` longtext DEFAULT NULL,
  `slider_image` varchar(300) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `slider_description`, `slider_image`, `updated_at`, `created_at`) VALUES
(8, '<p>Outstanding Stuff! I wanted to thank you for the outstanding customer service and products you have&nbsp;Outstanding Stuff! I wanted to thank you for the outstanding customer service and products you have provided the Fastball USA Baseball Academy.&nbsp;</p>', '0yu8YKxE6p0W3xeZWkf0Vu3ao1HsWiTcUyFLmFSB.png', '2021-06-08 04:14:30', '2021-06-07 21:14:30'),
(13, '<p>Outstanding Stuff! I wanted to thank you for the outstanding customer service and products you have provided the Fastball USA Baseball Academy. Your company is hands down the best place to get equipment for training high level athletes.</p>', 'wcqBGSvDANOmEmfo44k5jM807oR55BDuCBfjGb8X.png', '2021-06-08 04:14:40', '2021-06-07 21:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedialink`
--

CREATE TABLE `socialmedialink` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `socialmedia_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialmedia_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedialink`
--

INSERT INTO `socialmedialink` (`id`, `socialmedia_name`, `socialmedia_image`, `created_at`, `updated_at`) VALUES
(4, 'www.facebook.com', 'S17KPWDV17Qj6YKV820Q9KF3ECpsweyled8X5TSs.png', NULL, NULL),
(5, 'www.twitter.com', 'HoSjYq5xM6G3I6X7UCMN6NPefPKxkkNoQhRzX32j.png', NULL, NULL),
(10, 'www.youtube.com', 'j91iPPNOjGG8Hyjsyc9RoY6IW650lS8QEuQ9RQdG.png', NULL, '2021-06-08 07:10:19'),
(11, 'www.Instragram.com', 'JfCpm3olwSqqcIWZuFgQlciPybbzyIU0XZ1s78Su.png', NULL, NULL);

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
  `Isadmin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `Isadmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'James Bond', 'james@gmail.com', NULL, '$2y$10$88bZMye4rrn96fXe8OJlC.gK.BSCA.T0OJXd4QfLQjkBG9fQKvW9G', 1, NULL, '2021-05-26 05:26:16', '2021-05-26 05:26:16'),
(2, 'Alex123', 'Alex123@gmail.com', NULL, '$2y$10$E/kIa6GC0N3zdpzD27Fom.jjO6CKWEeeR.eiJ9PQYG2fHpKDsfDa2', 0, NULL, '2021-06-05 01:57:04', '2021-06-05 01:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(20) UNSIGNED NOT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_title`, `video_icon`, `video_link`, `created_at`, `updated_at`) VALUES
(9, 'video', 'GjOfE2gGlc1vUPb35u8vjgCja9QdrpsuobSxB5cA.png', 'https://www.w3schools.com/tags/mov_bbb.mp4', '2021-06-07 20:28:36', '2021-06-08 06:10:38'),
(14, 'video', 'Bm96CKW6dkb9u1qGojcMEaeqYAJZMJBaRuXzCveE.png', 'https://www.w3schools.com/tags/mov_bbb.mp4', '2021-06-07 23:18:28', '2021-06-08 06:53:15'),
(15, 'video', 'eBYa56CutZFP6Z4mQDFW6qZLSABn1I6pcgVqXgYV.png', 'https://www.w3schools.com/tags/mov_bbb.mp4', '2021-06-07 23:38:10', '2021-06-08 06:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerslider`
--
ALTER TABLE `bannerslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedialink`
--
ALTER TABLE `socialmedialink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bannerslider`
--
ALTER TABLE `bannerslider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brandlogo`
--
ALTER TABLE `brandlogo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `socialmedialink`
--
ALTER TABLE `socialmedialink`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
