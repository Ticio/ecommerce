-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 03:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivers`
--

CREATE TABLE `delivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_at` datetime NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(56, '2014_10_11_000000_create_states_table', 1),
(57, '2014_10_12_100001__create_users_table', 1),
(58, '2014_10_12_100002_create_password_resets_table', 1),
(59, '2014_10_12_110000_create_product_types_table', 1),
(60, '2014_10_12_120000_create_shop_types_table', 1),
(61, '2014_10_12_130000_create_product_categories_table', 1),
(62, '2014_10_12_140000_create_shops_table', 1),
(63, '2017_09_05_114313_create_products_table', 1),
(64, '2017_09_05_114350_create_sales_table', 1),
(65, '2017_09_05_114611_create_roles_table', 1),
(66, '2017_09_05_123846_create_delivers_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `product_type_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED DEFAULT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `image_path`, `description`, `state_id`, `product_type_id`, `product_category_id`, `shop_id`, `user_id`, `price`, `quantity`, `color`, `product_condition`, `size`, `location`) VALUES
(14, '2017-12-04 13:22:58', '2017-12-04 13:22:58', 'Troussers', 'public/images/products/cm.ftbn1.jpg', 'I have never worn before.', 1, 1, NULL, 1, 1, 350.00, 1, '#00002f', 'Brand New', NULL, 'page'),
(15, '2018-12-04 13:24:37', '2017-12-04 13:24:37', 'Troussers', 'public/images/products/cm.ftb2.jpg', 'It was never worn before.', 1, 1, NULL, 1, 1, 350.00, 1, '#000000', 'Brand New', NULL, 'page'),
(16, '2016-12-04 13:26:39', '2017-12-04 13:26:39', 'Shortsleeve', 'public/images/products/cmfD1.1.jpg', 'It\'s in a good condition.', 1, 1, NULL, 1, 1, 100.00, 1, '#258ce0', 'Fairly Used', NULL, 'page'),
(18, '2017-12-15 20:00:00', '2017-12-15 20:00:00', 'Shoes test', 'public/images/slide/banner.jpg', 'It is in a good condition', 1, 1, 2, 1, 1, 100.00, 1, '#101010', 'Fairly used', '40', 'slide'),
(19, '2017-12-15 20:00:00', '2017-12-15 20:00:00', 'Shoes test', 'public/images/slide/banner1.jpg', 'It is in a good condition', 1, 1, 2, 1, 1, 100.00, 1, '#101010', 'Fairly used', '40', 'slide'),
(20, '2017-12-15 20:00:00', '2017-12-15 20:00:00', 'Shoes test', 'public/images/slide/banner2.jpg', 'It is in a good condition', 1, 1, 2, 1, 1, 100.00, 1, '#101010', 'Fairly used', '40', 'slide');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2017-09-23 05:51:45', '2017-09-23 05:51:45', 'Brand New'),
(2, '2017-09-23 05:51:45', '2017-09-23 05:51:45', 'Second Hand - Good condition'),
(3, '2017-09-23 05:51:45', '2017-09-23 05:51:45', 'Second Hand - Minor repairs');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2017-09-23 05:44:37', '2017-09-23 05:44:37', 'Electronics'),
(2, '2017-09-23 05:45:19', '2017-09-23 05:45:19', 'Clothes'),
(3, '2017-09-23 05:45:41', '2017-09-23 05:45:41', 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sale_time` datetime NOT NULL,
  `buyer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `shop_type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `created_at`, `updated_at`, `name`, `state_id`, `shop_type_id`, `user_id`, `logo`) VALUES
(1, '2017-09-23 05:32:55', '2017-09-23 05:32:55', 'Local', 1, 1, 1, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `shop_types`
--

CREATE TABLE `shop_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_types`
--

INSERT INTO `shop_types` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2017-09-23 05:32:55', '2017-09-23 05:32:55', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2017-09-23 05:27:51', '2017-09-23 05:27:51', 'Active'),
(2, '2017-09-23 05:27:51', '2017-09-23 05:27:51', 'Suspended'),
(3, '2017-09-23 05:27:51', '2017-09-23 05:27:51', 'Desactive'),
(4, '2017-09-23 05:27:51', '2017-09-23 05:27:51', 'Waiting'),
(5, '2017-09-23 05:27:51', '2017-09-23 05:27:51', 'Removed'),
(6, '2017-09-23 05:27:51', '2017-09-23 05:27:51', 'Sold');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `state_id`, `remember_token`, `created_at`, `updated_at`, `location`, `phone_number`) VALUES
(1, 'c_market', 'ticioguitar@gmail.com', '$2y$10$w2j.j3VCk1sAV9E4/IHOHeCH/wnY1vZEUGp4M1n4XfYfgj3DT1xDW', 1, 'zZcorBmAWCP3Fu1MJbn1GPjLMZxE2ScVqvQ96mQZxPMeIGEfvR99rfh7KLzL', '2017-09-23 05:31:29', '2017-09-23 05:31:29', '', ''),
(2, 'Ticio Victoriano', 'fortuna@gmail.com', '$2y$10$b5odFrve/K2UND.0kjjlj.WACk6ukLD3NJQcNYzF4ffcA.XUO4EGW', NULL, 'm6GV3xptsji3qet64d7TGFCD0yn5vpfJLr7dOqhDiH3iDBX2aRbe1ylIp7IE', '2017-11-20 06:53:53', '2017-11-20 06:53:53', NULL, NULL),
(7, 'Ghislain', 'gndjapa@alustudent.com', '$2y$10$hUbGe/Jj3DCpP8U0tjvKHuDg9XKdSBCO/Ujrfyj.Z8StXzlgW0Ao2', NULL, '3SXAKFSxuWxNGDtggy6x78JqSHtnUVJnFAXiau8mB9H1lyNyABTUbWStcQ0E', '2017-12-04 13:17:25', '2017-12-04 13:17:25', NULL, '59292878'),
(8, 'Abel', 'abel@gmail.com', '$2y$10$0xWzRnfgmQk8F0mbDepxQOWoElVtEhYkYzJ0l1P1cQ822r/jB61..', NULL, 'QLNIRvmsMWN8KnQS6M2HrTZMNlbwAI2nspGg49fzzoFu8AVkMmN4uOx6kFFr', '2017-12-09 14:48:13', '2017-12-09 14:48:13', NULL, '123456'),
(9, 'simon', 'simon@gmail.com', '$2y$10$rXjJHKJLOf17RTSlYaT12Oqw5xUPnGXWVFq/DQL1HLWvLoFQc7Drm', NULL, NULL, '2017-12-10 13:06:09', '2017-12-10 13:06:09', NULL, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivers`
--
ALTER TABLE `delivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivers_user_id_foreign` (`user_id`),
  ADD KEY `delivers_product_id_foreign` (`product_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_state_id_foreign` (`state_id`),
  ADD KEY `products_product_type_id_foreign` (`product_type_id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`),
  ADD KEY `products_shop_id_foreign` (`shop_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_product_id_foreign` (`product_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_state_id_foreign` (`state_id`),
  ADD KEY `shops_shop_type_id_foreign` (`shop_type_id`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop_types`
--
ALTER TABLE `shop_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_state_id_foreign` (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivers`
--
ALTER TABLE `delivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop_types`
--
ALTER TABLE `shop_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivers`
--
ALTER TABLE `delivers`
  ADD CONSTRAINT `delivers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `delivers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`),
  ADD CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`),
  ADD CONSTRAINT `products_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_shop_type_id_foreign` FOREIGN KEY (`shop_type_id`) REFERENCES `shop_types` (`id`),
  ADD CONSTRAINT `shops_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
