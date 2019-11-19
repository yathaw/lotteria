-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2019 at 08:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotteria_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Set', NULL, NULL),
(2, 'Hamburger', NULL, NULL),
(3, 'Chicken', NULL, NULL),
(4, 'Rice', NULL, NULL),
(5, 'Appetizer', NULL, NULL),
(6, 'Dessert', NULL, NULL),
(7, 'Drinks', NULL, NULL),
(8, 'Coffee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `photo`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Hot Crispy Chicken (Set)', '5300', '/storage/item/1549876841.png', 'Hot Crispy Chicken, Potato, Pepsi', 1, NULL, NULL),
(2, 'Bulgogi (Set)', '4800', '/storage/item/1549876970.png', 'Bulgogi Burger, Potato, Pepsi', 1, NULL, NULL),
(3, 'Wild Shrimp (Set)', '5700', '/storage/item/1549877032.png', 'Wild Shrimp Burger, Potato, Pepsi', 1, NULL, NULL),
(4, 'Rib Sand (Set)', '4800', '/storage/item/1549877177.png', 'Rib Sand Burger, Potato, Pepsi', 1, NULL, NULL),
(5, 'Giant Double (Set)', '4500', '/storage/item/1549877238.png', 'Giant Double Burger, Potato, Pepsi', 1, NULL, NULL),
(6, 'Crazy Hot Single (Set)', '4800', '/storage/item/1549877239.jpg', 'Crazy Hot Single Burger, Potato, Pepsi', 1, NULL, NULL),
(7, 'Crazy Hot Double (Set)', '6100', '/storage/item/1549877240.jpg', 'Crazy Hot Double Burger, Potato, Pepsi', 1, NULL, NULL),
(8, 'Chicken Burger (Set)', '4600', '/storage/item/1549877241.png', 'Chicken Burger, Potato, Pepsi', 1, NULL, NULL),
(9, 'Cheese (Set)', '4900', '/storage/item/1549877242.png', 'Cheese Burger, Potato, Pepsi', 1, NULL, NULL),
(10, 'Teri (Set)', '4600', '/storage/item/1549877243.png', 'Teri Burger, Potato, Pepsi', 1, NULL, NULL),
(11, 'Hamburger (Set)', '4000', '/storage/item/1549877244.jpg', 'Burger, Potato, Pepsi', 1, NULL, NULL),
(12, 'Hot Crispy Chicken', '3800', '/storage/item/1549877245.png', '', 2, NULL, NULL),
(13, 'Bulgogi', '3900', '/storage/item/1549877246.png', '', 2, NULL, NULL),
(14, 'Wild Shrimp', '4300', '/storage/item/1549877247.jpg', '', 2, NULL, NULL),
(15, 'Rib Sand', '3300', '/storage/item/1549877248.png', '', 2, NULL, NULL),
(16, 'Crazy Hot Single', '3300', '/storage/item/1549877249.jpg', '', 2, NULL, NULL),
(17, 'Crazy Hot Double', '4700', '/storage/item/1549877250.jpg', '', 2, NULL, NULL),
(18, 'Giant Double', '4400', '/storage/item/1549877251.png', '', 2, NULL, NULL),
(19, 'Chicken Burger', '4700', '/storage/item/1549877252.png', '', 2, NULL, NULL),
(20, 'Cheese', '3400', '/storage/item/1549877253.png', '', 2, NULL, NULL),
(21, 'Teri', '3100', '/storage/item/1549877254.png', '', 2, NULL, NULL),
(22, 'Hamburger', '2600', '/storage/item/1549877255.png', '', 2, NULL, NULL),
(23, 'Chicken (original)', '1600', '/storage/item/1549877256.png', '', 3, NULL, NULL),
(24, 'Chicken (spicy)', '1600', '/storage/item/1549877257.png', '', 3, NULL, NULL),
(25, 'Chicken Half Pack (Original)', '6400', '/storage/item/1549877258.jpg', '', 3, NULL, NULL),
(26, 'Chicken Half Pack (Spicy)', '6400', '/storage/item/1549877259.jpg', '', 3, NULL, NULL),
(27, 'Chicken Full Pack (Original)', '14000', '/storage/item/1549877260.png', '', 3, NULL, NULL),
(28, 'Chicken Full Pack (Spicy)', '14000', '/storage/item/1549877261.png', '', 3, NULL, NULL),
(29, 'Korea Chicken(Half)', '2900', '/storage/item/1549877262.jpg', '', 3, NULL, NULL),
(30, 'Korea Chicken(Full)', '5100', '/storage/item/1549877263.jpg', '', 3, NULL, NULL),
(31, 'Cheesy Chicken(Half)', '2400', '/storage/item/1549877264.jpeg', '', 3, NULL, NULL),
(32, 'Cheesy Chicken(Full)', '4700', '/storage/item/1549877265.jpeg', '', 3, NULL, NULL),
(33, 'Korea Chicken Rice', '3100', '/storage/item/1549877266.jpg', '', 4, NULL, NULL),
(34, 'Chicken Rice (Original)', '2900', '/storage/item/1549877267.jpg', '', 4, NULL, NULL),
(35, 'Chicken Rice (Spicy)', '2900', '/storage/item/1549877268.jpg', '', 4, NULL, NULL),
(36, 'Sambal Chicken Rice (Original)', '3400', '/storage/item/1549877269.jpg', '', 4, NULL, NULL),
(37, 'Sambal Chicken Rice (Spicy)', '3400', '/storage/item/1549877270.jpg', '', 4, NULL, NULL),
(38, 'Potato', '1100', '/storage/item/1549877271.png', '', 5, NULL, NULL),
(39, 'Seasoning Potato (Chilli) ', '1500', '/storage/item/1549877272.png', '', 5, NULL, NULL),
(40, 'Seasoning Potato (Onion) ', '1500', '/storage/item/1549877272.png', '', 5, NULL, NULL),
(41, 'Seasoning Potato (Onion) ', '1500', '/storage/item/1549877272.png', '', 5, NULL, NULL),
(42, 'Shake Shake (Chilli) ', '2600', '/storage/item/1549877273.png', '', 5, NULL, NULL),
(43, 'Shake Shake (Onion) ', '2600', '/storage/item/1549877273.png', '', 5, NULL, NULL),
(44, 'Cheese Stick', '1500', '/storage/item/1549877274.png', '', 5, NULL, NULL),
(45, 'Crunch Shrimp', '1600', '/storage/item/1549877275.jpg', '', 5, NULL, NULL),
(46, 'Squid Ring', '1600', '/storage/item/1549877276.png', '', 5, NULL, NULL),
(47, 'Hash Brown', '1500', '/storage/item/1549877277.png', '', 5, NULL, NULL),
(48, 'Chicken Nugget( 5 pcs )', '1800', '/storage/item/1549877278.jpg', '', 5, NULL, NULL),
(49, 'Chicken Nugget( 9 pcs )', '3300', '/storage/item/1549877278.jpg', '', 5, NULL, NULL),
(50, 'Fish Finger', '1300', '/storage/item/1549877279.jpg', '', 5, NULL, NULL),
(51, 'Cheesy Potato', '1300', '/storage/item/1549877280.jpeg', '', 5, NULL, NULL),
(52, 'Soft Cone', '800', '/storage/item/1549877281.png', '', 6, NULL, NULL),
(53, 'Marble Soft Cone', '1200', '/storage/item/1549877282.png', '', 6, NULL, NULL),
(54, 'Tornado Choco Cookie', '1800', '/storage/item/1549877283.jpg', '', 6, NULL, NULL),
(55, 'Magicpop', '1800', '/storage/item/1549877284.jpg', '', 6, NULL, NULL),
(56, 'Green Tea', '1800', '/storage/item/1549877285.jpeg', '', 6, NULL, NULL),
(57, 'Red Bean Ice Flake', '3500', '/storage/item/1549877286.jpeg', '', 6, NULL, NULL),
(58, 'Fruits Ice Flake', '3500', '/storage/item/1549877287.jpg', '', 6, NULL, NULL),
(59, 'Pepsi', '900', '/storage/item/1549877288.jpg', '', 7, NULL, NULL),
(60, '7 Up', '900', '/storage/item/1549877289.jpg', '', 7, NULL, NULL),
(61, 'Orange Juice', '1000', '/storage/item/1549877290.png', '', 7, NULL, NULL),
(62, 'Milo', '1300', '/storage/item/1549877291.png', '', 7, NULL, NULL),
(63, 'Ice Lemon Tea', '1300', '/storage/item/1549877292.jpg', '', 7, NULL, NULL),
(64, 'Fresh Lime Juice', '1300', '/storage/item/1549877293.jpg', '', 7, NULL, NULL),
(65, 'Thai Milk Tea', '1300', '/storage/item/1549877294.jpg', '', 7, NULL, NULL),
(66, 'Ice Americano', '1300', '/storage/item/1549877295.jpg', '', 8, NULL, NULL),
(67, 'Americano', '1300', '/storage/item/1549877297.jpg', '', 8, NULL, NULL),
(68, 'Caffe Latte', '1700', '/storage/item/1549877296.jpg', '', 8, NULL, NULL),
(69, 'Cappunccino', '1700', '/storage/item/1549877298.jpg', '', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(63, '2014_10_12_000000_create_users_table', 1),
(64, '2014_10_12_100000_create_password_resets_table', 1),
(65, '2019_08_19_000000_create_failed_jobs_table', 1),
(66, '2019_11_14_134803_create_categories_table', 1),
(67, '2019_11_14_134920_create_items_table', 1),
(68, '2019_11_14_134956_create_orders_table', 1),
(69, '2019_11_14_135017_create_orderdetails_table', 1),
(70, '2019_11_18_135514_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vocherno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `vocherno`, `qty`, `item_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, '1574184289957', '1', 33, 1, '2019-11-19 10:54:52', '2019-11-19 10:54:52'),
(2, '1574184321616', '2', 38, 2, '2019-11-19 10:55:23', '2019-11-19 10:55:23'),
(3, '1574184321616', '1', 36, 2, '2019-11-19 10:55:23', '2019-11-19 10:55:23'),
(4, '1574184321616', '1', 12, 2, '2019-11-19 10:55:23', '2019-11-19 10:55:23'),
(5, '1574184376926', '1', 1, 3, '2019-11-19 10:56:18', '2019-11-19 10:56:18'),
(6, '1574184376926', '1', 59, 3, '2019-11-19 10:56:18', '2019-11-19 10:56:18'),
(7, '1574184376926', '1', 67, 3, '2019-11-19 10:56:18', '2019-11-19 10:56:18'),
(8, '1574184393798', '3', 52, 4, '2019-11-19 10:56:35', '2019-11-19 10:56:35'),
(9, '1574184393798', '1', 55, 4, '2019-11-19 10:56:35', '2019-11-19 10:56:35'),
(10, '1574184393798', '1', 33, 4, '2019-11-19 10:56:35', '2019-11-19 10:56:35'),
(11, '1574184411365', '1', 30, 5, '2019-11-19 10:56:53', '2019-11-19 10:56:53'),
(12, '1574184411365', '1', 32, 5, '2019-11-19 10:56:53', '2019-11-19 10:56:53'),
(13, '1574184430105', '1', 58, 6, '2019-11-19 10:57:11', '2019-11-19 10:57:11'),
(14, '1574184430105', '1', 26, 6, '2019-11-19 10:57:11', '2019-11-19 10:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderdate` date NOT NULL,
  `vocherno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `vocherno`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-19', '1574184289957', '3100', 2, '2019-11-19 10:54:52', '2019-11-19 10:54:52'),
(2, '2019-11-19', '1574184321616', '9400', 2, '2019-11-19 10:55:23', '2019-11-19 10:55:23'),
(3, '2019-11-19', '1574184376926', '7500', 3, '2019-11-19 10:56:18', '2019-11-19 10:56:18'),
(4, '2019-11-19', '1574184393798', '7300', 3, '2019-11-19 10:56:35', '2019-11-19 10:56:35'),
(5, '2019-11-19', '1574184411365', '9800', 3, '2019-11-19 10:56:53', '2019-11-19 10:56:53'),
(6, '2019-11-19', '1574184430105', '9900', 3, '2019-11-19 10:57:11', '2019-11-19 10:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-11-19 10:08:44', '2019-11-19 10:08:44'),
(2, 'staff', 'web', '2019-11-19 10:08:44', '2019-11-19 10:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Boss', '/storage/user/boss.png', 'boss@gmail.com', NULL, '$2y$10$q3PBeEoYd8zf5rDakR740eEXzwEwYLlWCwUN5WF7/mDUmgcZYj6/i', NULL, '2019-11-19 10:09:04', '2019-11-19 10:09:04'),
(2, 'Staff One', '/storage/user/57302.png', 'staffone@gmail.com', NULL, '$2y$10$omoWE639n1/VEZ9P8n3J/ev1RO5QVZkfviFnhzdPVH8bUnKeHOaCq', NULL, '2019-11-19 10:54:14', '2019-11-19 10:54:14'),
(3, 'Staff Two', '/storage/user/74329.png', 'stafftwo@gmail.com', NULL, '$2y$10$vehDVvqWcU52Cl4COoCyN.Zw4gFa1s0WQ1TLsi4g0GovnzkOd22H6', NULL, '2019-11-19 10:54:32', '2019-11-19 10:54:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails_item_id_foreign` (`item_id`),
  ADD KEY `orderdetails_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
