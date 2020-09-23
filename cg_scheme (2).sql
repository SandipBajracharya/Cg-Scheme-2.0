-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 09:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cg_scheme`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `city`, `street_name`, `category`, `created_at`, `updated_at`) VALUES
(1, 'sandeep', 9808259950, 'sndp106.sb@gmail.com', 'ktm', NULL, 'Air Conditioner', '2020-09-15 18:50:16', '2020-09-15 18:50:16'),
(2, 'sandeep', 4255203, 'subarna108@gmail.com', 'ktm', 'abcd', 'Air Conditioner', '2020-09-15 19:25:54', '2020-09-15 19:25:54'),
(3, 'Ram Shakya', 9802000000, 'ram@gmail.com', 'bhaktapur', NULL, 'Air Conditioner', '2020-09-16 02:55:05', '2020-09-16 02:55:05'),
(4, 'Rabindra', 9803859872, 'rabi@gmail.com', 'ktm', NULL, 'Television', '2020-09-16 02:56:55', '2020-09-16 02:56:55'),
(5, 'Sandeep', 9843742950, 'sndp07.sb@gmail.com', 'Thimi', NULL, 'Television', '2020-09-16 03:05:32', '2020-09-16 03:05:32'),
(6, 'Sirisa Bajracharya', 9803859872, 'sirisa.bajracharya@gmail.com', 'USA', NULL, 'Television', '2020-09-16 03:06:56', '2020-09-16 03:06:56'),
(7, 'Syam', 5536214, 'sandeep@gmail.com', 'bhaktapur', NULL, 'Washing Machine', '2020-09-16 03:08:44', '2020-09-16 03:08:44'),
(8, 'Sita', 1234567, 'sitaram@gmail.com', 'Dharan', NULL, 'Washing Machine', '2020-09-16 03:23:55', '2020-09-16 03:23:55'),
(9, 'Ramesh', 6523214, 'Rama@gmail.com', 'Illam', 'bkma', 'Washing Machine', '2020-09-16 03:25:33', '2020-09-16 03:25:33'),
(10, 'Test', 9802000000, 'Test@gmail.com', 'ktm', NULL, 'Washing Machine', '2020-09-16 03:45:48', '2020-09-16 03:45:48'),
(11, 'Test', 9800000000, 'admin123@gmail.com', 'bhaktapur', NULL, 'Television', '2020-09-16 03:56:43', '2020-09-16 03:56:43'),
(12, 'Ram Shakya', 9802000000, 'rammm@gmail.com', 'bhaktapur', NULL, 'Washing Machine', '2020-09-21 21:34:53', '2020-09-21 21:34:53');

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
(4, '2020_09_15_235705_create_contacts_table', 1),
(10, '2020_09_20_010523_create_products_table', 2);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MRP` double(8,2) DEFAULT NULL,
  `offer_price` double(8,2) DEFAULT NULL,
  `saved_customer` double(8,2) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `model_no`, `size`, `MRP`, `offer_price`, `saved_customer`, `category`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Smart ANDROID TV', '40S6500', '40\"', 57190.00, 47390.00, 9800.00, 'television', 'S6500_1600594937.JPG', '2020-09-20 03:57:17', '2020-09-20 03:57:17'),
(4, 'Smart TV', '43S62', '43\"', 54690.00, 45390.00, 9300.00, 'television', 'S62_1600595046.JPG', '2020-09-20 03:59:06', '2020-09-20 03:59:06'),
(5, 'Smart ANDROID TV', '43S6500', '43\"', 60890.00, 52990.00, 7900.00, 'television', 'S6500_1600595100.JPG', '2020-09-20 04:00:00', '2020-09-20 04:00:00'),
(6, 'Fully Automatic Front Loading', 'TWF90M14303BA03', '9.0 Kg.', 65590.00, 53490.00, 12100.00, 'washing machine', 'BA03_1600595233.jpg', '2020-09-20 04:02:13', '2020-09-20 04:02:13'),
(7, 'Fully Automatic Front Loading', 'TWF80-G12306A04', '8.0 kg', 60890.00, 49690.00, 11200.00, 'washing machine', '6A04_1600595291.jpg', '2020-09-20 04:03:11', '2020-09-20 04:03:11'),
(8, 'Fully Automatic Front Loading', 'TWF100M14303DA05', '10 K.g', 78290.00, 63790.00, 14500.00, 'washing machine', 'DA05_1600595335.jpg', '2020-09-20 04:03:55', '2020-09-20 04:03:55'),
(9, 'Fully Automatic Top Loading', 'TWA70-B302GM', '7.0 kg', 34690.00, 28290.00, 6400.00, 'washing machine', '70-02GM_1600595385.jpg', '2020-09-20 04:04:45', '2020-09-20 04:04:45'),
(10, 'Table Top Normal', 'TY-LWR3W', 'N/A', 7490.00, 5990.00, 1500.00, 'others', 'TY-LWR3W (1)_1600683392.png', '2020-09-20 04:11:17', '2020-09-22 01:11:32'),
(14, 'Standing', 'TCJ-SC -170', '170 L', 58290.00, 47990.00, 10300.00, 'others', 'TCJ-SC-170_1600757900.png', '2020-09-22 01:13:21', '2020-09-22 01:13:21'),
(15, 'Curved Glass', 'TCJ-SD (W)-456', '456 L', 72690.00, 59990.00, 12700.00, 'others', 'TCJ-SD(W)-456_1600757988.png', '2020-09-22 01:14:48', '2020-09-22 01:14:48'),
(16, 'Curved Glass', 'TCJ-SD (W)-516', '516 L', 82190.00, 67690.00, 14500.00, 'others', 'TCJ-SD(W)-516_1600758081.png', '2020-09-22 01:16:21', '2020-09-22 01:16:21'),
(17, 'INVERTER WALL MOUNT SPLIT AC', 'TAC-12CHSA/XA61', '1 TON', NULL, NULL, NULL, 'air conditioner', 'INVERTER-WALL_1600759273.JPG', '2020-09-22 01:36:13', '2020-09-22 01:36:13'),
(18, 'NON-INVERTER WALL MOUNT SPLIT AC', 'TAC-09CHSA/XA41', '0.75 TON', NULL, NULL, NULL, 'air conditioner', 'NON-INVERTER-WALL_1600759315.JPG', '2020-09-22 01:36:55', '2020-09-22 01:36:55'),
(19, 'CEILING CASSETTE AC', 'TCC-12CHRA/U', '1 Ton', NULL, NULL, NULL, 'air conditioner', 'Ceiling_ac_1600759381.JPG', '2020-09-22 01:38:01', '2020-09-22 01:38:01'),
(20, 'FLOOR STANDING AC', 'TAC-24FHRA', '2 Ton', NULL, NULL, NULL, 'air conditioner', 'standing_ac2_1600759552.JPG', '2020-09-22 01:38:35', '2020-09-22 01:41:20'),
(21, 'Normal TV', '40D2900', '40\"', 51790.00, 42990.00, 8800.00, 'television', 'D2900_1600759921.JPG', '2020-09-22 01:47:01', '2020-09-22 01:47:01');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CG_admin', 'CG@gmail.com', NULL, '$2y$10$Dd.OQBjymH//mkNpLHym5OZr9fAQ7B2T.zhD/708zfqmMS6zIN4tC', NULL, '2020-09-19 19:00:07', '2020-09-19 19:00:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
