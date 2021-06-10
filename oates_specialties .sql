-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 02:51 AM
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
(8, 'Matt', '3JT1zppLQlSnl2FXXH58WlFnsP1JakMhWun3d01f.png', NULL, NULL);

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
(9, 'Velit officia dolore', 'YOU Can Do It', 'YOU Can Do It', '8HHyhzZoJ0mUSJo4FSMLkX06Qickg1yCSWNovVD4.png', NULL, '2021-06-09 03:15:51');

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
(9, 'IT’S TIME FOR A REVOLUTION IN THROWING REHAB: BY RANDY SULLIVAN', '<p>One night last winter my friend, Alan Jaeger called me with a major concern about the current state of UCL reconstruction post-operative rehabilitation and throwing protocols.</p>', 'ZtuT1PoIvEj7YjBRKzp6SIYfC3KzB4xmVbsaQidP.png', NULL, '2021-06-10 00:09:53'),
(11, 'IT’S TIME FOR A REVOLUTION IN THROWING REHAB: BY RANDY SULLIVAN', '<p>One night last winter my friend, Alan Jaeger called me with a major concern about the current state of UCL reconstruction post-operative rehabilitation and throwing protocols.</p>', 'ExOKo9Ua2SlVSmONxjoKlv2PsBKsqQAELheo3nBq.jpg', NULL, '2021-06-10 00:42:10');

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
(5, 'logo', '0jOED5SZtXubmECFm5j1ve3rVwJO3sq05CywpwsO.png', NULL, '2021-06-09 03:18:21'),
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
(14, 'Velocity Enhancement', '2021-05-28 01:00:24', '2021-05-28 01:00:24'),
(16, 'Fashion', '2021-06-08 20:31:17', '2021-06-08 20:31:17'),
(17, 'vigetables', '2021-06-09 17:50:55', '2021-06-09 17:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_brief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders_exp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders_card_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(17, 'fa fa-truck', 'SHIPPING:', '151 FM 1696 East Huntsville, TX 77320');

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
(17, '2021_06_07_174816_create_videos_table', 11),
(18, '2021_06_08_165632_create_checkouts_table', 11),
(20, '2021_06_09_213103_create_productdetails_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `select_state` varchar(300) DEFAULT NULL,
  `select_country` varchar(300) DEFAULT NULL,
  `additional_brief` varchar(300) DEFAULT NULL,
  `shipping_address` varchar(300) DEFAULT NULL,
  `billing_address` varchar(300) DEFAULT NULL,
  `number` varchar(500) DEFAULT NULL,
  `exp_month` varchar(255) DEFAULT NULL,
  `exp_year` varchar(255) DEFAULT NULL,
  `cvc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `last_name`, `email`, `phone`, `address`, `city`, `zipcode`, `select_state`, `select_country`, `additional_brief`, `shipping_address`, `billing_address`, `number`, `exp_month`, `exp_year`, `cvc`, `created_at`, `updated_at`, `total_price`) VALUES
(1, 'Magee Harding', 'Bauer', 'xurim@mailinator.com', '9', 'Eiusmod unde sed inc', 'Provident velit et', 55083, 'PW', 'USA', 'Impedit non quibusd', 'In excepteur est do', 'In et magnam nostrum', NULL, NULL, NULL, NULL, '2021-06-09 01:29:38', '2021-06-09 01:29:38', NULL),
(2, 'Kylie Hoffman', 'Puckett', 'ryxikite@mailinator.com', '7', 'Autem itaque volupta', 'Incidunt ut volupta', 10321, 'MT', 'USA', 'In magni tempore ne', 'Distinctio Aperiam', 'Sit est irure accu', NULL, NULL, NULL, NULL, '2021-06-09 01:33:53', '2021-06-09 01:33:53', NULL),
(3, 'Geoffrey Snow', 'Shaffer', 'cuquz@mailinator.com', '66', 'Iusto esse omnis sin', 'Ex fuga Consequatur', 60533, 'OR', 'USA', 'Architecto beatae ex', 'Nemo eveniet pariat', 'Fuga Maxime incidun', NULL, NULL, NULL, NULL, '2021-06-09 01:53:43', '2021-06-09 01:53:43', NULL),
(4, 'Lara Herman', 'Webster', 'gyvohyc@mailinator.com', '72', 'Quibusdam et non qui', 'Excepturi deserunt e', 87115, 'TX', 'USA', 'Aut ipsum distinctio', 'Perferendis quia par', 'Sed voluptate fugit', NULL, NULL, NULL, NULL, '2021-06-09 02:03:34', '2021-06-09 02:03:34', NULL),
(5, 'Moses Petersen', 'Bolton', 'zelotula@mailinator.com', '24', 'Molestiae sit excep', 'Sapiente perspiciati', 92596, 'HI', 'USA', 'Mollitia repudiandae', 'Ut minus eveniet ut', 'Id recusandae Accu', NULL, NULL, NULL, NULL, '2021-06-09 02:11:56', '2021-06-09 02:11:56', NULL),
(6, 'Danielle Ferrell', 'Gould', 'rodumuq@mailinator.com', '94', 'At maxime voluptate', 'Ut rerum sed pariatu', 12976, 'MN', 'USA', 'Optio sit laborum', 'Nemo minus fugiat a', 'Reiciendis consequat', NULL, NULL, NULL, NULL, '2021-06-09 02:25:16', '2021-06-09 02:25:16', NULL),
(7, 'Darius Silva', 'Jimenez', 'dypewe@mailinator.com', '56', 'Dolore quo aliquam d', 'Est totam ipsa aspe', 39217, 'AL', 'USA', 'Aut vero possimus q', 'Qui aut expedita ius', 'Sit aliquid exercit', NULL, NULL, NULL, NULL, '2021-06-09 02:26:57', '2021-06-09 02:26:57', NULL),
(8, 'Yoko Rodriquez', 'Cain', 'quciqajaj@mailinator.com', '47', 'Ipsa ipsum volupta', 'Vel assumenda molest', 64964, 'RI', 'USA', 'Excepteur dolorum ut', 'Consectetur voluptas', 'Officia amet quod v', '4242424242424242', '11', '2021', '123', '2021-06-09 02:28:52', '2021-06-09 02:28:52', NULL),
(9, 'Hyacinth Mccarthy', 'Orr', 'zanilony@mailinator.com', '59', 'Consequatur ducimus', 'Sint culpa non verit', 13439, 'LA', 'USA', 'Rerum assumenda ut d', 'Amet illum esse s', 'Quidem eaque quis do', '4242424242424242', '11', '2021', '123', '2021-06-09 02:30:44', '2021-06-09 02:30:44', NULL),
(10, 'Kermit Bernard', 'Preston', 'penapyd@mailinator.com', '4', 'Error ut maxime cons', 'Optio ab sapiente e', 13389, 'NV', 'USA', 'Est ipsum ut sed ut', 'Placeat ea illum s', 'Est nulla qui repre', '4242424242424242', '11', '2021', '1234', '2021-06-09 18:44:17', '2021-06-09 18:44:17', NULL),
(11, 'Tatyana Johnson', 'Hawkins', 'zifujujoze@mailinator.com', '64', 'Excepturi voluptatem', 'Sed facere vel fuga', 36586, 'KY', 'USA', 'Labore porro odit of', 'Dolorem in architect', 'Omnis error vitae se', '4242424242424242', '11', '2021', '123', '2021-06-09 20:04:22', '2021-06-09 20:04:22', NULL),
(12, 'Tanya Ford', 'Watts', 'cekijexote@mailinator.com', '18', 'Deserunt sequi molli', 'Labore sit aliqua', 64724, 'WY', 'USA', 'Enim voluptatem irur', 'Voluptatum ea labore', 'Non incidunt ut in', '4242424242424242', '11', '2021', '123', '2021-06-09 20:08:07', '2021-06-09 20:08:07', NULL),
(13, 'Wilma Bender', 'Burch', 'zekexuqub@mailinator.com', '16', 'Consequatur eaque c', 'Unde consectetur ame', 91162, 'MS', 'USA', 'Porro voluptas labor', 'Aut quidem magnam et', 'Ut voluptas occaecat', '4242424242424242', '11', '2021', '123', '2021-06-09 20:10:53', '2021-06-09 20:10:53', NULL),
(14, 'Wanda Black', 'Hardin', 'xume@mailinator.com', '98', 'Pariatur Cum vel re', 'Ut voluptas architec', 12194, 'AL', 'USA', 'Rerum voluptas molli', 'Ut deserunt qui ut e', 'Autem sed voluptatum', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:13:01', '2021-06-09 20:13:01', NULL),
(15, 'Simone Reynolds', 'Malone', 'xyvy@mailinator.com', '40', 'Quo sint officiis es', 'Nihil consequatur u', 86723, 'ID', 'USA', 'Irure esse quae ut e', 'Qui ex eos similique', 'Accusamus ipsam id', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:23:28', '2021-06-09 20:23:28', NULL),
(16, 'Winter Patton', 'Anthony', 'gyvymigoc@mailinator.com', '75', 'Sit ex sed corporis', 'Impedit officiis te', 36610, 'AK', 'USA', 'Non labore elit est', 'Minus dicta fugiat u', 'Amet possimus labo', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:27:34', '2021-06-09 20:27:34', NULL),
(17, 'Lillian Odom', 'Hopper', 'dunazyk@mailinator.com', '96', 'Dicta exercitationem', 'Molestiae quos aliqu', 62770, 'IN', 'USA', 'Enim voluptas dolore', 'Nisi et perspiciatis', 'Est neque reprehend', '4242424242424242', '11', '2021', '123', '2021-06-09 20:32:28', '2021-06-09 20:32:28', NULL),
(18, 'Echo Brooks', 'Cotton', 'zakuzedyv@mailinator.com', '93', 'Velit cillum dolore', 'Ratione fuga Harum', 56293, 'VA', 'USA', 'Et esse laborum omni', 'Qui consequat Sit', 'Ipsum alias porro et', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:33:59', '2021-06-09 20:33:59', NULL),
(19, 'Anne Juarez', 'Bush', 'linif@mailinator.com', '53', 'Et cupidatat dolorem', 'Fugit odio nulla qu', 22533, 'GA', 'USA', 'Quia voluptas ad eve', 'Ad iusto enim ad ex', 'Cupidatat laboriosam', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:42:04', '2021-06-09 20:42:04', NULL),
(20, 'Tyler Sloan', 'Weber', 'lisety@mailinator.com', '99', 'Delectus qui labore', 'Ut nostrum vero dolo', 14265, 'NY', 'USA', 'Rerum dolore possimu', 'Consequatur dolore p', 'Sit vel sit volupta', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:44:03', '2021-06-09 20:44:03', NULL),
(21, 'Rudyard Yates', 'Chase', 'sipataky@mailinator.com', '89', 'A veniam ea nemo ex', 'Voluptatem sit ut re', 28511, 'MT', 'USA', 'Iste molestiae fuga', 'Et quaerat ut id est', 'Id voluptate tempori', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:47:01', '2021-06-09 20:47:01', NULL),
(22, 'Quail Sears', 'Butler', 'kugyh@mailinator.com', '5', 'Sint nostrud mollit', 'Exercitation lorem v', 48118, 'VA', 'USA', 'Qui voluptatem et d', 'Culpa dolor dolor a', 'Temporibus fugit do', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:49:43', '2021-06-09 20:49:43', NULL),
(23, 'Quail Sears', 'Butler', 'kugyh@mailinator.com', '5', 'Sint nostrud mollit', 'Exercitation lorem v', 48118, 'VA', 'USA', 'Qui voluptatem et d', 'Culpa dolor dolor a', 'Temporibus fugit do', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:50:57', '2021-06-09 20:50:57', NULL),
(24, 'Steel Chase', 'Benjamin', 'xexuma@mailinator.com', '64', 'Qui ullamco commodo', 'Harum omnis amet in', 63217, 'MT', 'USA', 'Consequatur est quos', 'Unde beatae fugiat', 'Placeat voluptas ni', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:51:44', '2021-06-09 20:51:44', NULL),
(25, 'Mia Cochran', 'Stephenson', 'wequjody@mailinator.com', '87', 'Omnis sed similique', 'Sed elit et ut aute', 32546, 'NY', 'USA', 'Aut nulla quos neque', 'Praesentium ipsam pe', 'Quo voluptatem Mole', '4242424242424242', '11', '2021', '1234', '2021-06-09 20:52:52', '2021-06-09 20:52:52', NULL),
(26, 'Dominic Wheeler', 'Puckett', 'gykavuka@mailinator.com', '6', 'Est aut ex ipsa vol', 'Eos ipsum dolor nis', 21881, 'WI', 'USA', 'Commodo provident q', 'Accusantium atque du', 'Commodo facere labor', '4242424242424242', '11', '2021', '123', '2021-06-10 00:21:10', '2021-06-10 00:21:10', NULL),
(27, 'Roth Washington', 'Glenn', 'xenifilyh@mailinator.com', '9', 'Quam quae rerum aut', 'Placeat qui qui vel', 72008, 'UT', 'USA', 'Deserunt nulla et ma', 'Dolor quasi consecte', 'Enim libero a irure', '4242424242424242', '10', '2021', '123', '2021-06-10 00:33:49', '2021-06-10 00:33:49', NULL),
(28, 'Marsden Alford', 'Ray', 'kowy@mailinator.com', '21', 'Tenetur laboris quo', 'Ullamco voluptatem', 24115, 'SC', 'USA', 'Ut nisi accusantium', 'Rerum veniam unde d', 'Aliquid odio lorem i', '4242424242424242', '11', '2021', '123', '2021-06-10 00:38:50', '2021-06-10 00:38:50', NULL),
(29, 'Hilel Cameron', 'Barrera', 'tidemep@mailinator.com', '19', 'Corrupti proident', 'Qui laborum voluptas', 32471, 'NV', 'USA', 'Vel ut aut in explic', 'Officia nesciunt mi', 'Animi maiores eos e', '4242424242424242', '11', '2021', '123', '2021-06-10 00:42:48', '2021-06-10 00:42:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

INSERT INTO `products` (`id`, `category_id`, `name`, `product_description`, `image`, `discounted_price`, `slug`, `created_at`, `updated_at`, `new_store_product`, `best_seller`, `featured_product`, `price`) VALUES
(67, '9', 'Donec Vrius Elit Felis', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'Ipgxap9VGeheY03cw1nvET48foMy3CQPBm7qrRK9.png', '15.00', NULL, '2021-06-02 21:08:47', '2021-06-10 01:25:38', 1, '1', '1', '25'),
(74, '9', 'Para shoot bag', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'wdoTYJ8t3fdpwXg9QSD39YS9XXA4KIgnaG3mDwAu.png', '40', NULL, '2021-06-03 17:25:33', '2021-06-10 01:09:52', 1, '0', '0', '30'),
(75, '9', 'Dora Ingram', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'yvjmZbO3Sbid06WpiHLow0TeykpCo1BkSGUgVI1t.png', '40', NULL, '2021-06-03 17:26:29', '2021-06-08 00:15:08', 1, '0', '1', '30'),
(81, '9', 'Desiree Duncan', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'cDsQpi1w5nOAsMNVq2G3hUxGjW0surTtvKeEikIi.png', '766', NULL, '2021-06-03 17:33:58', '2021-06-08 00:15:38', 0, '1', '1', '164'),
(85, '9', 'Donec Vrius Elit Felis', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', '7lKIqEJWgBfPgl1faIvb2W1xJuRbPfoX1KGS9lJf.png', '40', NULL, '2021-06-04 18:17:11', '2021-06-08 00:16:25', 1, '1', '1', '30'),
(89, '9', 'product2', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', '0OdHhuBNg7DLTtwxczR0OLW2VjsaLdfSmGV6PKdp.png', '40', NULL, '2021-06-04 19:03:19', '2021-06-08 00:14:33', 0, '1', '0', '30'),
(90, '10', 'TAP™ EXTREME DUTY WEIGHTED BALL (SET OF SIX)', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'YDUnOHZVZ6hQg3rWAmSjUgiBLR4qlNYUI7IQL8Fn.png', '40', NULL, '2021-06-07 17:17:54', '2021-06-07 17:17:54', 0, '0', '0', '30'),
(97, '13', 'TAP™ EXTREME DUTY WEIGHTED BALL (SET OF SIX)', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'IegRpVP5I05j1l2d3X8OQVLRaTiinI9qUE6DlV67.png', '40', NULL, '2021-06-07 17:28:22', '2021-06-07 17:28:22', 0, '0', '0', '40'),
(99, '14', 'TAP™ EXTREME DUTY WEIGHTED BALL (SET OF SIX)', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', '81ivn32jnCpyoG13cW95tqqVWU3Ybm3zp0WfBtZ2.png', '40', NULL, '2021-06-08 17:32:55', '2021-06-08 17:32:55', 1, '1', '1', '30'),
(102, '16', 'Tshirt', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'qGd3FTPevbNeOUvAHRiaGOSk6Q1DuMk53o2ycZoz.jpg', '70', NULL, '2021-06-09 17:50:14', '2021-06-09 17:50:14', 0, '0', '0', '80'),
(104, '17', 'vegitable', 'Maecenas quis imperdiet neque. Sed maximus varius mi nec ornare', 'Z6kz50jt7iMg0PaoWCUMVyKRxC9IpppGsPyaSIhy.jpg', '50', NULL, '2021-06-09 23:26:45', '2021-06-09 23:26:45', 1, '1', '1', '100');

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
(4, 'http://www.favebook.com', 'S17KPWDV17Qj6YKV820Q9KF3ECpsweyled8X5TSs.png', NULL, '2021-06-10 00:26:13'),
(5, 'http://www.twitter.com', 'HoSjYq5xM6G3I6X7UCMN6NPefPKxkkNoQhRzX32j.png', NULL, '2021-06-10 00:26:49'),
(10, 'http://www.youtube.com', 'j91iPPNOjGG8Hyjsyc9RoY6IW650lS8QEuQ9RQdG.png', NULL, '2021-06-10 00:27:09'),
(11, 'http://www.Instragram.com', 'JfCpm3olwSqqcIWZuFgQlciPybbzyIU0XZ1s78Su.png', NULL, '2021-06-10 00:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Isadmin` int(11) DEFAULT NULL,
  `shipping_address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `Isadmin`, `shipping_address`, `billing_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'James ', 'Bonds', 'james@gmail.com', NULL, '$2y$10$88bZMye4rrn96fXe8OJlC.gK.BSCA.T0OJXd4QfLQjkBG9fQKvW9G', 1, 'Rakesh Vaidya\r\n\r\n54 W 47th ST\r\n\r\nSTE 5FW\r\n\r\nNEW YORK NY 10036-8714\r\n\r\nUSA', NULL, NULL, '2021-05-26 05:26:16', '2021-05-26 05:26:16'),
(2, 'Alex123', 'John', 'Alex123@gmail.com', NULL, '$2y$10$E/kIa6GC0N3zdpzD27Fom.jjO6CKWEeeR.eiJ9PQYG2fHpKDsfDa2', 0, 'Rakesh Vaidya\r\n\r\n54 W 47th ST\r\n\r\nSTE 5FW\r\n\r\nNEW YORK NY 10036-8714\r\n\r\nUSA', NULL, NULL, '2021-06-05 01:57:04', '2021-06-05 01:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_title`, `video_icon`, `video_link`, `created_at`, `updated_at`) VALUES
(2, 'video1', 'GjXuo0feqXXtH4cFJstEHshphXwXZVfnVKyk4gmn.png', 'https://www.w3schools.com/tags/mov_bbb.mp4', NULL, NULL),
(3, 'video2', 'qJI2PRXF4EJyCGFOfCbby1GgI5IaPJMwjgsGgpvV.png', 'https://www.w3schools.com/tags/mov_bbb.mp4', NULL, NULL);

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
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bannerslider`
--
ALTER TABLE `bannerslider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brandlogo`
--
ALTER TABLE `brandlogo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
