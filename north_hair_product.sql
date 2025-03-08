-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2025 at 05:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `north_hair_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'rafu@rafusoft.com', 'rafu', NULL, '677b8a707376a1736149616.png', '$2y$12$sQuCI8mbkOyiIuLNBW18quaW5e7YiwGHRgfawVx7iIJXKOX5m3Kqy', '', NULL, '2025-01-06 18:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `click_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `user_id`, `title`, `is_read`, `click_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'New member registered', 1, '/admin/users/detail/1', '2025-01-05 00:00:34', '2025-01-05 01:14:19'),
(2, 2, 'New member registered', 1, '/admin/users/detail/2', '2025-01-05 00:27:45', '2025-01-05 01:14:14'),
(3, 0, 'SMTP Error: The following recipients failed: shamimislam@rafusoft.com: No Such User Here\r\n', 1, '#', '2025-01-05 00:29:42', '2025-01-05 01:14:08'),
(4, 0, 'SMTP Error: The following recipients failed: rafu@rafusoft.com: No Such User Here\r\n', 0, '#', '2025-01-05 01:15:12', '2025-01-05 01:15:12'),
(5, 3, 'New member registered', 0, '/admin/users/detail/3', '2025-01-05 01:15:43', '2025-01-05 01:15:43'),
(6, 0, 'SMTP Error: The following recipients failed: shamimislam@rafusoft.com: No Such User Here\r\n', 0, '#', '2025-01-05 01:16:08', '2025-01-05 01:16:08'),
(7, 0, 'SMTP Error: The following recipients failed: rafu@rafusoft.com: No Such User Here\r\n', 0, '#', '2025-01-05 01:17:25', '2025-01-05 01:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applied_coupons`
--

CREATE TABLE `applied_coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `coupon_id` int UNSIGNED NOT NULL DEFAULT '0',
  `order_id` int UNSIGNED NOT NULL DEFAULT '0',
  `amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = text, 2 = color, 3= image',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, '5345', 3, 1, '2025-01-06 17:45:14', '2025-01-06 17:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE `attribute_product` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `attribute_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint UNSIGNED NOT NULL,
  `attribute_id` int UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, '456645', '677b7c41e0e8d1736145985.webp', '2025-01-06 17:46:25', '2025-01-06 17:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value_product`
--

CREATE TABLE `attribute_value_product` (
  `product_id` int UNSIGNED NOT NULL,
  `attribute_value_id` int UNSIGNED NOT NULL DEFAULT '0',
  `media_id` int UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `is_featured`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '6546', '6546', '677b7beb60f151736145899.webp', 1, '54645654', '546546', NULL, '2025-01-06 17:44:59', '2025-01-06 17:44:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT '0',
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int UNSIGNED NOT NULL DEFAULT '0',
  `product_variant_id` int UNSIGNED DEFAULT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `session_id`, `product_id`, `product_variant_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, '677f668ea9182', 1, NULL, 2, '2025-01-09 06:12:27', '2025-01-09 06:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `position` int UNSIGNED DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `feature_in_banner` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `position`, `name`, `slug`, `icon`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `is_featured`, `feature_in_banner`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, 'Stationery & Office', 'stationery-office', '67794ceaae6121736002794.png', 'Stationery & Office', 'Stationery & Office', '[\"Stationery & Office\"]', '67794bea72d831736002538.jpg', 0, 0, '2025-01-05 01:55:38', '2025-01-05 01:59:54', NULL),
(2, NULL, 1, '654645', '6456546', '677b7c99cb8f71736146073.webp', '546', '456546456', '[\"3465436\",\"65464\"]', '677b7c99cb5c21736146073.webp', 1, 1, '2025-01-06 17:47:53', '2025-01-06 17:47:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_coupon`
--

CREATE TABLE `category_coupon` (
  `id` bigint UNSIGNED NOT NULL,
  `coupon_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `coupon_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=fixed, 2=percent',
  `coupon_amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `minimum_spend` decimal(28,8) DEFAULT NULL,
  `maximum_spend` decimal(28,8) DEFAULT NULL,
  `usage_limit_per_coupon` int DEFAULT NULL,
  `usage_limit_per_user` int DEFAULT NULL,
  `exclude_sale_items` tinyint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_product`
--

CREATE TABLE `coupon_product` (
  `id` bigint UNSIGNED NOT NULL,
  `coupon_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `order_id` int UNSIGNED NOT NULL DEFAULT '0',
  `method_code` int UNSIGNED NOT NULL DEFAULT '0',
  `amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `method_currency` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `rate` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `final_amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `btc_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_try` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=>success, 2=>pending, 3=>cancel',
  `from_api` tinyint(1) NOT NULL DEFAULT '0',
  `admin_feedback` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `success_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `failed_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_cron` int DEFAULT '0',
  `success_route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `success_route_params` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `failed_route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `failed_route_params` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `device_tokens`
--

CREATE TABLE `device_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `is_app` tinyint(1) NOT NULL DEFAULT '0',
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `digital_files`
--

CREATE TABLE `digital_files` (
  `id` bigint UNSIGNED NOT NULL,
  `fileable_id` int UNSIGNED NOT NULL,
  `fileable_type` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE `extensions` (
  `id` bigint UNSIGNED NOT NULL,
  `act` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `script` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shortcode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'object',
  `support` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'help section',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>enable, 2=>disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `act`, `name`, `description`, `image`, `script`, `shortcode`, `support`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tawk-chat', 'Tawk.to', 'Key location is shown bellow', 'tawky_big.png', '<script>\r\n                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n                        (function(){\r\n                        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n                        s1.async=true;\r\n                        s1.src=\"https://embed.tawk.to/{{app_key}}\";\r\n                        s1.charset=\"UTF-8\";\r\n                        s1.setAttribute(\"crossorigin\",\"*\");\r\n                        s0.parentNode.insertBefore(s1,s0);\r\n                        })();\r\n                    </script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"57c57119e56cab650c797a59\\/default\"}}', 'twak.png', 1, '2019-10-18 23:16:05', '2025-01-04 23:57:32'),
(2, 'google-recaptcha2', 'Google Recaptcha 2', 'Key location is shown bellow', 'recaptcha3.png', '\n<script src=\"https://www.google.com/recaptcha/api.js\"></script>\n<div class=\"g-recaptcha\" data-sitekey=\"{{site_key}}\" data-callback=\"verifyCaptcha\"></div>\n<div id=\"g-recaptcha-error\"></div>', '{\"site_key\":{\"title\":\"Site Key\",\"value\":\"6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV\"},\"secret_key\":{\"title\":\"Secret Key\",\"value\":\"6LdPC88fAAAAAG5SVaRYDnV2NpCrptLg2XLYKRKB\"}}', 'recaptcha.png', 0, '2019-10-18 23:16:05', '2024-11-12 08:08:07'),
(3, 'custom-captcha', 'Custom Captcha', 'Just put any random string', 'customcaptcha.png', NULL, '{\"random_key\":{\"title\":\"Random String\",\"value\":\"SecureString\"}}', 'na', 0, '2019-10-18 23:16:05', '2024-11-12 08:08:04'),
(4, 'google-analytics', 'Google Analytics', 'Key location is shown bellow', 'google_analytics.png', '<script async src=\"https://www.googletagmanager.com/gtag/js?id={{measurement_id}}\"></script>\n                <script>\n                  window.dataLayer = window.dataLayer || [];\n                  function gtag(){dataLayer.push(arguments);}\n                  gtag(\"js\", new Date());\n                \n                  gtag(\"config\", \"{{measurement_id}}\");\n                </script>', '{\"measurement_id\":{\"title\":\"Measurement ID\",\"value\":\"------\"}}', 'ganalytics.png', 0, NULL, '2023-05-17 03:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint UNSIGNED NOT NULL,
  `act` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint UNSIGNED NOT NULL,
  `tempname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_keys` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `tempname`, `slug`, `data_keys`, `data_values`, `seo_content`, `created_at`, `updated_at`) VALUES
(1, NULL, '', 'seo.data', '{\"seo_image\":\"1\",\"keywords\":[\"secure payment gateway\",\"Chinigura Rice\",\"\\u099a\\u09bf\\u09a8\\u09bf\\u0997\\u09c1\\u0981\\u09a1\\u09bc\\u09be \\u099a\\u09be\\u09b2\"],\"description\":\"Rafusoft Shop is a top e-commerce site in Bangladesh, offering a fast and safe online shopping experience with a wide range of quality products\",\"social_title\":\"Rafusoft Shop \\u2013 Your Trusted Online Store in Bangladesh\",\"social_description\":\"Explore Rafusoft Shop for a fast, safe, and seamless online shopping experience. From digital products like software licenses to fashion, electronics, and home essentials \\u2013 we\\u2019ve got everything you need!\",\"image\":\"677b8a1082aa51736149520.png\"}', NULL, '2020-07-04 23:42:52', '2025-01-06 18:45:20'),
(2, NULL, 'basic', 'header_three.content', '{\"status\":\"on\",\"background_color\":null,\"group\":{\"category_widget\":{\"name\":\"Categories\",\"status\":\"on\",\"background_color\":null},\"links\":{\"1\":{\"name\":\"Home\",\"url\":\"\\/\"},\"5\":{\"name\":\"Products\",\"url\":\"products\"},\"2\":{\"name\":\"About Us\",\"url\":\"about-us\"},\"7\":{\"name\":\"All Categories\",\"url\":\"categories\"},\"8\":{\"name\":\"Contact\",\"url\":\"contact\"},\"9\":{\"name\":\"Rafusoft Web\",\"url\":\"https:\\/\\/rafusoft.com\"}},\"widgets\":[{\"name\":\"Compare Widget\",\"key\":\"compare\",\"background_color\":null},{\"name\":\"Wishlist Widget\",\"key\":\"wishlist\",\"background_color\":null},{\"name\":\"Notifications Widget\",\"key\":\"notifications\",\"background_color\":null},{\"name\":\"User Auth Widget\",\"key\":\"user_auth\",\"background_color\":null},{\"name\":\"Language Widget\",\"key\":\"language\",\"background_color\":null},{\"name\":\"Cart Widget\",\"key\":\"cart\",\"status\":\"on\",\"background_color\":null}]}}', NULL, '2020-07-04 23:42:52', '2025-01-05 00:10:02'),
(3, 'basic', 'basic', 'header_two.content', '{\"status\":\"on\",\"background_color\":\"000000\",\"group\":{\"logo_widget\":{\"name\":\"logo\",\"status\":\"on\"},\"search_widget\":{\"name\":\"logo\",\"status\":\"on\"},\"widgets\":[{\"name\":\"Language Widget\",\"key\":\"language\"},{\"name\":\"User Auth Widget\",\"key\":\"user_auth\"},{\"name\":\"Compare Widget\",\"key\":\"compare\",\"status\":\"on\"},{\"name\":\"Wishlist Widget\",\"key\":\"wishlist\",\"status\":\"on\"},{\"name\":\"Cart Widget\",\"key\":\"cart\"},{\"name\":\"Notifications Widget\",\"key\":\"notifications\",\"status\":\"on\"}]}}', NULL, '2020-11-12 04:07:30', '2024-12-19 06:07:26'),
(4, NULL, NULL, 'cookie.data', '{\"short_desc\":\"We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.\",\"description\":\"<div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">All provided delicate\\/credit data is sent through Stripe.<br>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\",\"status\":1}', NULL, '2020-07-04 23:42:52', '2023-01-24 11:11:28'),
(5, 'basic', 'privacy-policy', 'policy_pages.element', '{\"title\":\"Privacy Policy\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\"}', NULL, '2021-06-09 08:50:42', '2021-06-09 08:50:42'),
(6, 'basic', 'terms-of-service', 'policy_pages.element', '{\"title\":\"Terms of Service\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We claim all authority to dismiss, end, or handicap any help with or without cause per administrator discretion. This is a Complete independent facilitating, on the off chance that you misuse our ticket or Livechat or emotionally supportive network by submitting solicitations or protests we will impair your record. The solitary time you should reach us about the seaward facilitating is if there is an issue with the worker. We have not many substance limitations and everything is as per laws and guidelines. Try not to join on the off chance that you intend to do anything contrary to the guidelines, we do check these things and we will know, don\'t burn through our own and your time by joining on the off chance that you figure you will have the option to sneak by us and break the terms.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><ul class=\\\"font-18\\\" style=\\\"padding-left:15px;list-style-type:disc;font-size:18px;\\\"><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Configuration requests - If you have a fully managed dedicated server with us then we offer custom PHP\\/MySQL configurations, firewalls for dedicated IPs, DNS, and httpd configurations.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Software requests - Cpanel Extension Installation will be granted as long as it does not interfere with the security, stability, and performance of other users on the server.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Emergency Support - We do not provide emergency support \\/ Phone Support \\/ LiveChat Support. Support may take some hours sometimes.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Webmaster help - We do not offer any support for webmaster related issues and difficulty including coding, &amp; installs, Error solving. if there is an issue where a library or configuration of the server then we can help you if it\'s possible from our end.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Backups - We keep backups but we are not responsible for data loss, you are fully responsible for all backups.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">We Don\'t support any child porn or such material.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">No spam-related sites or material, such as email lists, mass mail programs, and scripts, etc.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">No harassing material that may cause people to retaliate against you.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">No phishing pages.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">You may not run any exploitation script from the server. reason can be terminated immediately.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">If Anyone attempting to hack or exploit the server by using your script or hosting, we will terminate your account to keep safe other users.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Malicious Botnets are strictly forbidden.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Spam, mass mailing, or email marketing in any way are strictly forbidden here.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Malicious hacking materials, trojans, viruses, &amp; malicious bots running or for download are forbidden.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Resource and cronjob abuse is forbidden and will result in suspension or termination.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Php\\/CGI proxies are strictly forbidden.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">CGI-IRC is strictly forbidden.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">No fake or disposal mailers, mass mailing, mail bombers, SMS bombers, etc.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">NO CREDIT OR REFUND will be granted for interruptions of service, due to User Agreement violations.<\\/li><\\/ul><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Terms &amp; Conditions for Users<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">Before getting to this site, you are consenting to be limited by these site Terms and Conditions of Use, every single appropriate law, and guidelines, and concur that you are answerable for consistency with any material neighborhood laws. If you disagree with any of these terms, you are restricted from utilizing or getting to this site.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Support<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">Whenever you have downloaded our item, you may get in touch with us for help through email and we will give a valiant effort to determine your issue. We will attempt to answer using the Email for more modest bug fixes, after which we will refresh the center bundle. Content help is offered to confirmed clients by Tickets as it were. Backing demands made by email and Livechat.<\\/p><p class=\\\"my-3 font-18 font-weight-bold\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">On the off chance that your help requires extra adjustment of the System, at that point, you have two alternatives:<\\/p><ul class=\\\"font-18\\\" style=\\\"padding-left:15px;list-style-type:disc;font-size:18px;\\\"><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Hang tight for additional update discharge.<\\/li><li style=\\\"margin-top:0px;margin-right:0px;margin-left:0px;\\\">Or on the other hand, enlist a specialist (We offer customization for extra charges).<\\/li><\\/ul><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Ownership<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">You may not guarantee scholarly or selective possession of any of our items, altered or unmodified. All items are property, we created them. Our items are given \\\"with no guarantees\\\" without guarantee of any sort, either communicated or suggested. On no occasion will our juridical individual be subject to any harms including, however not restricted to, immediate, roundabout, extraordinary, accidental, or significant harms or different misfortunes emerging out of the utilization of or powerlessness to utilize our items.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Warranty<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t offer any guarantee or assurance of these Services in any way. When our Services have been modified we can\'t ensure they will work with all outsider plugins, modules, or internet browsers. Program similarity ought to be tried against the show formats on the demo worker. If you don\'t mind guarantee that the programs you use will work with the component, as we can not ensure that our systems will work with all program mixes.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Unauthorized\\/Illegal Usage<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">You may not utilize our things for any illicit or unapproved reason or may you, in the utilization of the stage, disregard any laws in your locale (counting yet not restricted to copyright laws) just as the laws of your nation and International law. Specifically, it is disallowed to utilize the things on our foundation for pages that advance: brutality, illegal intimidation, hard sexual entertainment, bigotry, obscenity content or warez programming joins.<br \\/><br \\/>You can\'t imitate, copy, duplicate, sell, exchange or adventure any of our segment, utilization of the offered on our things, or admittance to the administration without the express composed consent by us or item proprietor.<br \\/><br \\/>Our Members are liable for all substance posted on the discussion and demo and movement that happens under your record.<br \\/><br \\/>We hold the chance of hindering your participation account quickly if we will think about a particularly not allowed conduct.<br \\/><br \\/>If you make a record on our site, you are liable for keeping up the security of your record, and you are completely answerable for all exercises that happen under the record and some other activities taken regarding the record. You should quickly inform us, of any unapproved employments of your record or some other penetrates of security.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Fiverr, Seoclerks Sellers Or Affiliates<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We do NOT ensure full SEO campaign conveyance within 24 hours. We make no assurance for conveyance time by any means. We give our best assessment to orders during the putting in of requests, anyway, these are gauges. We won\'t be considered liable for loss of assets, negative surveys or you being prohibited for late conveyance. If you are selling on a site that requires time touchy outcomes, utilize Our SEO Services at your own risk.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Payment\\/Refund Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">No refund or cash back will be made. After a deposit has been finished, it is extremely unlikely to invert it. You should utilize your equilibrium on requests our administrations, Hosting, SEO campaign. You concur that once you complete a deposit, you won\'t document a debate or a chargeback against us in any way, shape, or form.<br \\/><br \\/>If you document a debate or chargeback against us after a deposit, we claim all authority to end every single future request, prohibit you from our site. False action, for example, utilizing unapproved or taken charge cards will prompt the end of your record. There are no special cases.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Free Balance \\/ Coupon Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We offer numerous approaches to get FREE Balance, Coupons and Deposit offers yet we generally reserve the privilege to audit it and deduct it from your record offset with any explanation we may it is a sort of misuse. If we choose to deduct a few or all of free Balance from your record balance, and your record balance becomes negative, at that point the record will naturally be suspended. If your record is suspended because of a negative Balance you can request to make a custom payment to settle your equilibrium to actuate your record.<\\/p><\\/div>\"}', NULL, '2021-06-09 08:51:18', '2021-06-09 08:51:18'),
(7, NULL, NULL, 'maintenance.data', '{\"description\":\"<h2 class=\\\"text-center mb-3\\\">THE SITE IS UNDER MAINTENANCE<\\/h2>\\r\\n<h5 class=\\\"text-center\\\">We\'re just tuning up a few things.<\\/h5>\\r\\n<p class=\\\"text-center\\\">We apologize for the inconvenience but Front is currently undergoing planned maintenance. Thanks for your patience.<\\/p>\",\"image\":\"66f7cd8e217fb1727516046.png\"}', NULL, '2020-07-04 23:42:52', '2024-11-17 00:46:51'),
(8, 'basic', NULL, 'contact_page.content', '{\"address_heading\":\"We\'d Love to Hear From You\",\"form_heading\":\"Leave Us a Message\",\"description\":\"We appreciate feedback and interaction of any sort so please feel free to get in touch.\"}', NULL, '2022-11-22 10:40:36', '2024-03-21 11:28:01'),
(9, 'basic', '', 'faq_page.content', '{\"page_title\":\"Frequently Asked Questions\",\"description\":\"<b>1. How can I place an order?\\u00a0<\\/b><div>Browse our products, select the item you want, choose the quantity, and click \\\"Add to Cart.\\\" Once you\\u2019re ready to purchase, proceed to checkout, enter your shipping and payment information, and confirm your order.\\u00a0<\\/div><div><br \\/><\\/div><div><b>\\u00a02. What payment methods do you accept?\\u00a0<\\/b><\\/div><div>We accept all major credit and debit cards, PayPal, Stripe, 2checkout, and more.\\u00a0<\\/div><div><br \\/><\\/div><div><b>\\u00a03. How can I track my order?\\u00a0<\\/b><\\/div><div>You can track your order from our track you order page by order number.\\u00a0<\\/div><div><br \\/><\\/div><div><b>\\u00a04. What is your return policy?\\u00a0<\\/b><\\/div><div>We offer a 30-day return policy for most items. If you\'re not satisfied with your purchase, you can return it for a full refund or exchange, as long as the item is in its original condition. Certain items, such as perishable goods or custom products, may not be eligible for return.\\u00a0<\\/div><div><br \\/><\\/div><div><b>5. How long will it take to receive my order?\\u00a0<\\/b><\\/div><div>Standard shipping usually takes 5-7 business days, but we offer expedited shipping options at checkout if you need your order sooner. Delivery times may vary depending on your location and the selected shipping method.\\u00a0<\\/div><div><br \\/><\\/div><div><b>6. Can I change or cancel my order after placing it?\\u00a0<\\/b><\\/div><div>You can cancel or make changes to your order within a limited time frame after it\\u2019s placed. Please contact our customer service team as soon as possible if you need to make changes.\\u00a0<\\/div><div><br \\/><\\/div><div><b>7. Do you ship internationally?<\\/b><\\/div><div>Yes, we offer international shipping to select countries. Shipping fees and delivery times vary based on the destination. Please check our Shipping Policy page for more details.\\u00a0<\\/div><div><br \\/><\\/div><div><b>8. How do I apply a discount code to my order?\\u00a0<\\/b><\\/div><div>You can enter your discount code at checkout in the \\\"Promo Code\\\" field. Once applied, the discount will be reflected in your order total.\\u00a0<\\/div><div><br \\/><\\/div><div><b>9. Is my payment information secure?<\\/b><\\/div><div>Yes, we use secure encryption technology to protect your payment information and ensure a safe shopping experience. We do not store credit card details on our servers.\\u00a0<\\/div><div><br \\/><\\/div><div><b>10. What should I do if I receive a damaged or incorrect item?<\\/b><\\/div><div>If you receive a damaged or incorrect item, please get in touch with our customer service within 48 hours of receiving the order. We\\u2019ll arrange for a replacement or a refund as soon as possible.\\u00a0<\\/div><div><br \\/><\\/div><div><b>11. Can I create a wishlist?<\\/b><\\/div><div>Click the product page\'s heart icon to add items to your wishlist.\\u00a0<\\/div><div><br \\/><\\/div><div><b>12. What should I do if I forget my password?<\\/b><\\/div><div>If you forget your password, click \\\"Forgot Password\\\" on the login page. You\\u2019ll receive an email with instructions on how to reset it.\\u00a0<\\/div><div><br \\/><\\/div><div><b>13. How can I contact customer support?\\u00a0<\\/b><\\/div><div>You can reach our customer support team via the contact form on our website or from the support menu for registered users. Our support team is available from.<br \\/><br \\/><b><i>Please note that these are dummy content for Visermart Script and should be customized according to your specific policies and offerings.<\\/i><\\/b><\\/div>\"}', NULL, '2022-11-22 11:22:50', '2024-11-10 06:44:16'),
(10, 'basic', '', 'footer.content', '{\"has_image\":\"1\",\"contact_heading\":\"Contact Us\",\"cell_number\":\"+ (880) 1750014052\",\"email\":\"info@rafusoft.com\",\"contact_address\":\"Pallabi Metro Station at 11.5, House #146, Rd No. 2, Dhaka 1216, our co-working space on the 5th floor\",\"footer_note\":\"Committed to delivering quality, reliability, and trust in every purchase. Thank you for choosing Rafusoft Shop \\u2013 your forever trusted partner.\",\"copyright_text\":\"\\u00a9 {year} {site_name} All Rights Reserved.\",\"logo\":\"67792ab0a554b1735994032.png\",\"payment_methods\":\"637cd4514c0c21669125201.png\"}', NULL, '2022-11-22 11:23:21', '2025-01-04 23:33:52'),
(11, 'basic', '', 'forgot_password_page.content', '{\"has_image\":\"1\",\"title\":\"Forgot your password?\",\"description\":\"No worries! Just enter the email address or username associated with your account, and we\'ll send you a code to reset your password.\",\"image\":\"66f7ccef688611727515887.png\"}', NULL, '2022-11-22 11:23:38', '2024-11-10 07:10:05'),
(12, 'basic', NULL, 'login_page.content', '{\"has_image\":\"1\",\"title\":\"Welcome Back\",\"description\":\"Hello! Welcome back\",\"image\":\"66f7cd2b8c4621727515947.png\"}', NULL, '2022-11-22 11:23:58', '2024-09-28 03:32:27'),
(13, 'basic', '', 'register_page.content', '{\"has_image\":\"1\",\"title\":\"Join us and unlock exclusive deals and seamless shopping!\",\"description\":\"Welcome to Visermart\",\"image\":\"660256dc91c6c1711429340.png\"}', NULL, '2022-11-22 11:26:15', '2024-10-21 06:54:30'),
(14, 'basic', '', 'reset_password_page.content', '{\"has_image\":\"1\",\"title\":\"Reset Password\",\"description\":\"Your account is verified successfully. Now you can change your password. Please enter a strong password and don\'t share it with anyone.\",\"image\":\"66f7ce1109b5f1727516177.png\"}', NULL, '2022-11-22 11:26:43', '2024-11-10 23:58:53'),
(15, 'basic', NULL, 'subscribe.content', '{\"text\":\"Subscribe to our newsletter to get the latest news, updates, and special offers\"}', NULL, '2022-12-08 04:05:30', '2022-12-08 04:05:30'),
(16, 'basic', '', 'social_icon.element', '{\"title\":\"Twitter\",\"social_icon\":\"<i class=\\\"fa-brands fa-x-twitter\\\"><\\/i>\",\"url\":\"https:\\/\\/twitter.com\\/rafusoft\"}', NULL, '2022-12-08 07:26:02', '2025-01-05 00:29:49'),
(17, 'basic', '', 'social_icon.element', '{\"title\":\"Instagram\",\"social_icon\":\"<i class=\\\"fab fa-instagram\\\"><\\/i>\",\"url\":\"https:\\/\\/www.instagram.com\\/rafusoft\"}', NULL, '2022-12-08 07:26:19', '2025-01-05 00:29:35'),
(18, 'basic', '', 'social_icon.element', '{\"title\":\"Linked In\",\"social_icon\":\"<i class=\\\"fab fa-linkedin-in\\\"><\\/i>\",\"url\":\"https:\\/\\/www.linkedin.com\\/in\\/rafusoft\"}', NULL, '2022-12-08 07:26:43', '2025-01-05 00:29:18'),
(19, 'basic', '', 'about_us.content', '{\"has_image\":\"1\",\"banner_heading\":\"We believe we can all make a stylish.\",\"heading\":\"WHO WE ARE\",\"subheading\":\"Happy Shopping With Rafusoft Shop\",\"button_text\":\"\",\"button_link\":\"\",\"description\":\"<p class=\\\"sm-text\\\"><span style=\\\"font-size:0.875rem;\\\">Various Kinds Of Product<\\/span><\\/p><ul class=\\\"list--check align-items-start\\\">\\n    <li class=\\\"sm-text\\\">Large customer reach.<\\/li>\\n    <li class=\\\"sm-text\\\">Universal standard.<\\/li>\\n    <li class=\\\"sm-text\\\">Easy to use the checkout<\\/li>\\n<\\/ul>\",\"banner_image\":\"6723853527b291730381109.png\",\"image\":\"672607bcbd2991730545596.png\"}', NULL, '2023-05-21 08:00:35', '2025-01-05 00:31:35'),
(20, 'basic', NULL, 'contact_page.element', '{\"title\":\"Office Address\",\"value\":\"4517 Washington Ave. Manchester, Kentucky 39495 Main town USA.\",\"icon\":\"<i class=\\\"las la-map-marker\\\"><\\/i>\"}', NULL, '2024-02-14 09:00:02', '2024-02-14 09:00:02'),
(21, 'basic', '', 'contact_page.element', '{\"title\":\"Mobile\",\"value\":\"0182646854 +9574651651\",\"icon\":\"<i class=\\\"las la-mobile-alt\\\"><\\/i>\"}', NULL, '2024-02-14 09:06:29', '2024-11-13 06:05:27'),
(22, 'basic', NULL, 'contact_page.element', '{\"title\":\"Email\",\"value\":\"support@visermart.com\",\"icon\":\"<i class=\\\"las la-envelope\\\"><\\/i>\"}', NULL, '2024-02-14 09:07:31', '2024-02-14 09:07:32'),
(23, 'basic', '', 'newsletter.content', '{\"heading\":\"SIGN UP FOR OUR NEWSLETTER\",\"description\":\"Receive our latest updates about our products and promotions.\"}', NULL, '2024-02-14 13:31:18', '2024-11-13 06:04:41'),
(24, 'basic', '', 'counter.element', '{\"has_image\":\"1\",\"title\":\"AWARD WINS\",\"counter_value\":\"10\",\"image\":\"6723b5ce44f031730393550.png\"}', NULL, '2024-03-25 08:44:38', '2024-10-31 23:52:30'),
(25, 'basic', '', 'counter.element', '{\"has_image\":\"1\",\"title\":\"YEARS OF EXPERIENCES\",\"counter_value\":\"15\",\"image\":\"6723b5c7866d01730393543.png\"}', NULL, '2024-03-25 08:44:26', '2024-10-31 23:52:23'),
(26, 'basic', '', 'counter.element', '{\"has_image\":\"1\",\"title\":\"TOTAL PRODUCTS\",\"counter_value\":\"450\",\"image\":\"6723b5c0e27e71730393536.png\"}', NULL, '2024-03-25 08:44:10', '2024-10-31 23:52:16'),
(27, 'basic', '', 'counter.element', '{\"has_image\":\"1\",\"title\":\"TOTAL VISITORS\",\"counter_value\":\"8000\",\"image\":\"6723b5b59e7641730393525.png\"}', NULL, '2024-03-25 08:43:54', '2024-10-31 23:52:05'),
(28, 'basic', '', 'quote.content', '{\"has_image\":\"1\",\"quote\":\"Rafusoft Shop Is popular shopping platform for you dolor sit asectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreolore magna aliquaenenatis tellus in. metus vulputate eu scelerisque felis. Vel pretium lectus qua . Arpis massa. jnghd sping world class provicer and finicing world\",\"name\":\"S M Rafaet Hossain\",\"designation\":\"CEO, Rafusoft\",\"image\":\"6723b205530861730392581.png\"}', NULL, '2024-03-25 09:02:50', '2025-01-05 00:33:47'),
(29, 'basic', '', 'feature.content', '{\"has_image\":\"1\",\"heading\":\"FEATURES\",\"subheading\":\"Your Easy Shopping\",\"description\":\"Make your life easy buy getting our exclusive products\",\"image\":\"6723b902c14761730394370.png\"}', NULL, '2024-03-25 09:16:15', '2024-11-01 00:06:10'),
(30, 'basic', NULL, 'feature.element', '{\"title\":\"Fast Delivery\",\"description\":\"Fast Deliver is a fast and promising courier and parcel forservice in USA.\",\"icon\":\"<i class=\\\"fas fa-truck\\\"><\\/i>\"}', NULL, '2024-03-25 09:17:37', '2024-03-25 09:17:48'),
(31, 'basic', NULL, 'feature.element', '{\"title\":\"Return Products\",\"description\":\"Increase conversions, and returns, and save time with a self-service sizing\",\"icon\":\"<i class=\\\"fab fa-product-hunt\\\"><\\/i>\"}', NULL, '2024-03-25 09:18:19', '2024-03-25 09:18:19'),
(32, 'basic', NULL, 'feature.element', '{\"title\":\"Help Center\",\"description\":\"Fast Deliver is a fast and promising courier and parcel for service in USA.\",\"icon\":\"<i class=\\\"fas fa-hands-helping\\\"><\\/i>\"}', NULL, '2024-03-25 09:18:46', '2024-03-25 09:18:46'),
(33, 'basic', NULL, 'feature.element', '{\"title\":\"Safe Payment\",\"description\":\"Increase conversions, returns, save time with a self-service sizing\",\"icon\":\"<i class=\\\"fas fa-shopping-cart\\\"><\\/i>\"}', NULL, '2024-03-25 09:19:18', '2024-03-25 09:19:18'),
(34, 'basic', NULL, 'top_selling_products.content', '{\"title\":\"Top Selling Products\"}', NULL, '2024-09-19 02:31:23', '2024-09-19 02:31:23'),
(35, 'basic', '', 'services.element', '{\"has_image\":\"1\",\"title\":\"Secure Payment\",\"subtitle\":\"All Cards Accepted\",\"image\":\"6739fca46ea611731853476.png\"}', NULL, '2024-09-19 02:45:17', '2024-11-17 08:24:36'),
(36, 'basic', '', 'services.element', '{\"has_image\":\"1\",\"title\":\"Free Shipping\",\"subtitle\":\"On All Order\",\"image\":\"6739fcbe2422c1731853502.png\"}', NULL, '2024-09-19 02:45:36', '2024-11-17 08:25:02'),
(37, 'basic', '', 'services.element', '{\"has_image\":\"1\",\"title\":\"Online Support\",\"subtitle\":\"Technical 24\\/7\",\"image\":\"6739f654a40241731851860.png\"}', NULL, '2024-09-19 02:45:52', '2024-11-17 07:57:40'),
(38, 'basic', '', 'services.element', '{\"has_image\":\"1\",\"title\":\"Big Savings\",\"subtitle\":\"Weekend Sales\",\"image\":\"6739f65c524471731851868.png\"}', NULL, '2024-09-19 02:46:28', '2024-11-17 07:57:48'),
(39, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67178e93dc25b1729597075.png\"}', NULL, '2024-10-22 02:42:56', '2024-10-22 05:37:56'),
(40, 'basic', '', 'featured_brands.content', '{\"title\":\"Top Brands\"}', NULL, '2024-10-22 03:28:20', '2024-11-10 01:02:55'),
(41, 'basic', '', 'banner.content', '{\"has_image\":\"1\",\"fixed_banner_link\":\"#\",\"fixed_banner\":\"677b802e27a7a1736146990.png\"}', NULL, '2024-10-22 03:40:13', '2025-01-06 18:03:10'),
(42, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67178fb2b43d91729597362.png\"}', NULL, '2024-10-22 04:10:18', '2024-10-22 05:42:42'),
(43, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67179c9cb10841729600668.png\"}', NULL, '2024-10-22 04:10:32', '2024-10-22 06:37:48'),
(44, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67179af0746a01729600240.png\"}', NULL, '2024-10-22 04:10:42', '2024-10-22 06:30:40'),
(45, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67189f3d37d841729666877.png\"}', NULL, '2024-10-23 01:01:17', '2024-10-23 01:01:18'),
(46, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67189f48992c11729666888.png\"}', NULL, '2024-10-23 01:01:28', '2024-10-23 01:01:28'),
(47, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"67189fe766ad21729667047.png\"}', NULL, '2024-10-23 01:04:07', '2024-10-23 01:04:07'),
(48, 'basic', '', 'banner.element', '{\"has_image\":\"1\",\"link\":\"#\",\"slider\":\"677b8165eb9851736147301.png\"}', NULL, '2024-10-23 02:48:18', '2025-01-06 18:08:22'),
(49, NULL, NULL, 'footer_menu.content', '[{\"title\":\"Terms & Policies\",\"links\":[{\"name\":\"Cookie Policy\",\"url\":\"cookie-policy\"},{\"name\":\"Return Policy\",\"url\":\"policy\\/return-policy\"},{\"name\":\"Privacy Policy\",\"url\":\"policy\\/privacy-policy\"},{\"name\":\"Terms of Service\",\"url\":\"policy\\/terms-of-service\"}]},{\"title\":\"Site Links\",\"links\":[{\"name\":\"Home\",\"url\":\"\\/\"},{\"name\":\"Contact\",\"url\":\"contact\"},{\"name\":\"Offers\",\"url\":\"Offers\"},{\"name\":\"About Us\",\"url\":\"About Us\"}]},{\"title\":\"Useful Links\",\"links\":[{\"name\":\"Sign Up\",\"url\":\"user\\/register\"},{\"name\":\"Login\",\"url\":\"user\\/login\"},{\"name\":\"Track Order\",\"url\":\"track-order\"},{\"name\":\"FAQ\",\"url\":\"faq\"}]},{\"title\":\"Other Links\",\"links\":[{\"name\":\"Products\",\"url\":\"products\"},{\"name\":\"All Categories\",\"url\":\"categories\"},{\"name\":\"All Brands\",\"url\":\"brands\"},{\"name\":\"Wishlist\",\"url\":\"wishlist\"}]}]', NULL, '2020-07-04 23:42:52', '2024-12-28 11:25:21'),
(50, 'basic', '', 'profile_complete_page.content', '{\"title\":\"Complete Your Profile\",\"description\":\"Welcome! You\'re almost ready to enjoy a fully personalized shopping experience. Completing your profile helps us serve you better by tailoring recommendations, streamlining checkout, and ensuring faster support.\"}', NULL, '2024-11-10 07:29:28', '2024-11-10 07:31:33'),
(51, 'basic', '', 'auth_pages_bg.content', '{\"has_image\":\"1\",\"image\":\"6730beca123071731247818.png\"}', NULL, '2024-11-10 08:10:18', '2024-11-10 08:10:18'),
(52, 'basic', '', 'order_confirmation.content', '{\"title\":\"CONGRATULATIONS!\",\"description\":\"Your order has been placed successfully\"}', NULL, '2024-11-11 07:19:00', '2024-11-11 07:20:33'),
(53, NULL, 'basic', 'header_one.content', '{\"status\":\"on\",\"language_option\":\"on\",\"user_option\":\"on\",\"links_position\":\"left\",\"links\":{\"2\":{\"name\":\"Cookie Policy\",\"url\":\"cookie-policy\"},\"1\":{\"name\":\"Track Order\",\"url\":\"track-order\"}}}', NULL, '2024-11-11 07:48:44', '2024-12-04 00:19:43'),
(54, 'basic', '', 'featured_categories.content', '{\"title\":\"Categories\"}', NULL, '2024-11-18 05:13:32', '2024-11-18 05:13:32');
INSERT INTO `frontends` (`id`, `tempname`, `slug`, `data_keys`, `data_values`, `seo_content`, `created_at`, `updated_at`) VALUES
(55, 'basic', 'return-policy', 'policy_pages.element', '{\"title\":\"Return Policy\",\"details\":\"<p><span class=\\\"citation-0 recitation citation-end-0\\\">An e-commerce return policy is a set of guidelines that outlines the terms and conditions under which customers can return or exchange products purchased online.<sup class=\\\"superscript\\\"><\\/sup><\\/span> <span class=\\\"citation-1 recitation citation-end-1\\\">It\'s a crucial aspect of any online business, as it directly impacts customer satisfaction and loyalty.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><\\/p><div class=\\\"container ng-tns-c1256350767-48 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-48\\\"><div class=\\\"carousel-content ng-tns-c1256350767-48\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-48 hide ng-star-inserted\\\"><\\/div><div class=\\\"sources-carousel-source ng-tns-c1256350767-48 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><p><\\/p><p><strong>Key Components of a Strong Return Policy:<\\/strong><\\/p><ol>\\n<li>\\n<p><strong>Return Window:<\\/strong><\\/p>\\n<ul>\\n<li><span class=\\\"citation-2 recitation citation-end-2\\\">Clearly specify the timeframe within which customers can initiate a return.<sup class=\\\"superscript\\\"><\\/sup><\\/span> <span class=\\\"citation-3 recitation citation-end-3\\\">Common periods include 30, 60, or 90 days from the date of purchase or delivery.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-49 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-49\\\"><div class=\\\"carousel-content ng-tns-c1256350767-49\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-49 hide ng-star-inserted\\\"><\\/div><div class=\\\"sources-carousel-source ng-tns-c1256350767-49 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li><span class=\\\"citation-4 recitation citation-end-4\\\">Consider offering extended return windows for specific holidays or promotional periods.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-50 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-50\\\"><div class=\\\"carousel-content ng-tns-c1256350767-50\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-50 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li><li><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"><br \\/><\\/span><\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>\\n<p><strong>Eligibility Criteria:<\\/strong><\\/p>\\n<ul>\\n<li><span class=\\\"citation-5 recitation citation-end-5\\\">Define the conditions under which items are eligible for return.<sup class=\\\"superscript\\\"><\\/sup><\\/span> These may include:\\n<ul>\\n<li><span class=\\\"citation-6 recitation citation-end-6\\\">Unopened, unused, and undamaged products<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-52 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-52\\\"><div class=\\\"carousel-content ng-tns-c1256350767-52\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-52 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li><span class=\\\"citation-7 recitation citation-end-7\\\">Items with original packaging and tags<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-53 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-53\\\"><div class=\\\"carousel-content ng-tns-c1256350767-53\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-53 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li>Products purchased directly from your online store (not third-party sellers)<\\/li>\\n<\\/ul>\\n<span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-51 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-51\\\"><div class=\\\"carousel-content ng-tns-c1256350767-51\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-51 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li><span class=\\\"citation-8 recitation citation-end-8\\\">Exclusions for certain product categories like personalized items, perishable goods, or intimate apparel.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-54 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-54\\\"><div class=\\\"carousel-content ng-tns-c1256350767-54\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-54 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li><li><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"><br \\/><\\/span><\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>\\n<p><strong>Return Process:<\\/strong><\\/p>\\n<ul>\\n<li>Provide clear instructions on how to initiate a return, such as:\\n<ul>\\n<li>Contacting customer support<\\/li>\\n<li><span class=\\\"citation-9 recitation citation-end-9\\\">Printing a prepaid shipping label<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-55 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-55\\\"><div class=\\\"carousel-content ng-tns-c1256350767-55\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-55 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li>Packing the item securely<\\/li>\\n<li><span class=\\\"citation-10 recitation citation-end-10\\\">Including a return form or order number<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-56 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-56\\\"><div class=\\\"carousel-content ng-tns-c1256350767-56\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-56 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<\\/ul>\\n<\\/li>\\n<li><span class=\\\"citation-11 recitation citation-end-11\\\">Specify the return address and any required documentation.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-57 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-57\\\"><div class=\\\"carousel-content ng-tns-c1256350767-57\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-57 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li><li><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"><br \\/><\\/span><\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>\\n<p><strong>Refund or Exchange Options:<\\/strong><\\/p>\\n<ul>\\n<li>Clearly outline the available options:\\n<ul>\\n<li><strong>Full refund:<\\/strong> <span class=\\\"citation-12 recitation citation-end-12\\\">A complete refund to the original payment method.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-58 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-58\\\"><div class=\\\"carousel-content ng-tns-c1256350767-58\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-58 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li><strong>Store credit:<\\/strong><span class=\\\"citation-13 recitation citation-end-13\\\"> A credit to be used for future purchases.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-59 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-59\\\"><div class=\\\"carousel-content ng-tns-c1256350767-59\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-59 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li><strong>Exchange:<\\/strong> Replacing the returned item with a new one.<\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>Specify any processing time for refunds or exchanges.<\\/li><li><br \\/><\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>\\n<p><strong>Shipping Costs:<\\/strong><\\/p>\\n<ul>\\n<li>Determine who is responsible for return shipping costs:\\n<ul>\\n<li><strong>Customer-paid:<\\/strong> The customer covers the cost of shipping the item back to the retailer.<\\/li>\\n<li><strong>Seller-paid:<\\/strong> The retailer provides a prepaid shipping label or reimburses the customer for shipping costs.<\\/li>\\n<li><strong>Shared costs:<\\/strong> A combination of both, where the customer pays a portion of the shipping cost.<\\/li><li><br \\/><\\/li>\\n<\\/ul>\\n<\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>\\n<p><strong>Damaged or Defective Items:<\\/strong><\\/p>\\n<ul>\\n<li><span class=\\\"citation-14 recitation citation-end-14\\\">Explain the process for returning damaged or defective items.<sup class=\\\"superscript\\\"><\\/sup><\\/span><span class=\\\"button-container hide-from-message-actions ng-star-inserted\\\"> \\u00a0 <\\/span><div class=\\\"container ng-tns-c1256350767-60 hide\\\"><div class=\\\"carousel-container ng-tns-c1256350767-60\\\"><div class=\\\"carousel-content ng-tns-c1256350767-60\\\"><div class=\\\"sources-carousel-source ng-tns-c1256350767-60 hide ng-star-inserted\\\"><\\/div><\\/div><\\/div><\\/div><\\/li>\\n<li>Provide a clear return address and any necessary documentation.<\\/li>\\n<li>Offer a hassle-free return and replacement or refund.<\\/li><li><br \\/><\\/li>\\n<\\/ul>\\n<\\/li>\\n<li>\\n<p><strong>Contact Information:<\\/strong><\\/p>\\n<ul>\\n<li><span class=\\\"citation-15 recitation citation-end-15\\\">Provide easy-to-find contact information for customer support, such as email address, phone number, or live chat.<\\/span><div class=\\\"container\\\"><span class=\\\"mat-mdc-button-persistent-ripple mdc-fab__ripple\\\"><\\/span><span class=\\\"mdc-button__label\\\"><\\/span><span class=\\\"mat-focus-indicator\\\"><\\/span><span class=\\\"mat-mdc-button-touch-target\\\"><\\/span><\\/div><sup class=\\\"superscript\\\"><\\/sup><\\/li><\\/ul><\\/li><\\/ol>\"}', NULL, '2024-11-25 02:31:40', '2024-11-25 02:33:03'),
(56, 'basic', 'basic', 'headers.order.content', '[\"header_one\",\"header_two\",\"header_three\"]', NULL, NULL, '2024-12-04 00:19:05'),
(57, NULL, NULL, 'home_banner.content', NULL, NULL, '2025-01-19 12:50:32', '2025-01-19 12:50:32'),
(58, NULL, NULL, 'home_banner.content', NULL, NULL, '2025-01-19 12:51:26', '2025-01-19 12:51:26'),
(59, 'north_hair', '', 'home_banner.content', '{\"has_image\":\"1\",\"title\":\"Miami\",\"subtitle\":\"Come to connect, inspire, and lead new trends together\",\"link\":\"#\",\"date\":\"Jan 21-23, 2025\",\"booth\":\"BOOTH 2357\",\"location\":\"Miami Beach Convention Center, US\",\"banner_desktop\":\"678d00ef5f8281737294063.webp\",\"banner_mobile\":\"678d0184ef15d1737294212.webp\"}', NULL, '2025-01-19 12:58:04', '2025-01-19 13:49:05'),
(60, 'north_hair', '', 'discover_more.content', '{\"videos\":\"\",\"title\":\"Make Every Piece Worth It\",\"subtitle1\":\"Hair professionals\' one-stop destination for premium hair systems, wigs, and extensions.\",\"subtitle2\":\"Together, we\'ll make every piece worth it.\",\"link\":\"#\"}', NULL, '2025-01-19 13:59:27', '2025-01-19 13:59:27'),
(61, 'north_hair', '', 'mens_hair_system_banner.content', '{\"has_image\":\"1\",\"banner_text\":\"Hello Banner Text Mens Hair\",\"fixed_banner\":\"678dfccc8ee141737358540.webp\"}', NULL, '2025-01-20 07:35:40', '2025-01-20 07:40:46'),
(62, 'north_hair', '', 'mens_hair_system_product_caption.content', '{\"title\":\"Custom Mens Hair Title\",\"details\":\"Custom Details To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-20 08:11:49', '2025-01-20 08:11:49'),
(63, 'north_hair', '', 'mens_hair_system_product.content', '{\"title\":\"Custom Title\",\"details\":\"Custom Ttitle simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-20 09:14:01', '2025-01-20 09:14:01'),
(64, 'north_hair', '', 'mens_hair_system_comparison.content', '{\"title\":\"This is Main Title\",\"sub_title\":\"This is main Sub Title\"}', NULL, '2025-01-20 09:36:14', '2025-01-20 09:36:14'),
(65, NULL, NULL, 'mens_hair_system_comparison.element', NULL, NULL, '2025-01-20 09:38:06', '2025-01-20 09:38:06'),
(66, 'north_hair', '', 'mens_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Sort Title 1\",\"sub_title\":\"Sort sub title 1\",\"link\":\"https:\\/\\/www.google.com\",\"comparison\":\"678e19d3b4f1a1737365971.webp\"}', NULL, '2025-01-20 09:39:31', '2025-01-20 09:39:31'),
(67, 'north_hair', '', 'mens_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Sort title 2\",\"sub_title\":\"Sort sub title 2\",\"link\":\"https:\\/\\/www.google.com\",\"comparison\":\"678e1a21ce8761737366049.webp\"}', NULL, '2025-01-20 09:40:49', '2025-01-20 09:40:49'),
(68, 'north_hair', '', 'mens_hair_system_faq.element', '{\"title\":\"This is title 1\",\"details\":\"This is Description 1\"}', NULL, '2025-01-20 10:06:52', '2025-01-20 10:06:52'),
(69, 'north_hair', '', 'mens_hair_system_faq.element', '{\"title\":\"Title 2\",\"details\":\"This is Title 2\"}', NULL, '2025-01-20 10:07:20', '2025-01-20 10:07:20'),
(70, 'north_hair', '', 'mens_stock_hair_system_banner.content', '{\"has_image\":\"1\",\"title\":\"Trusted globally for excellence\",\"list_1\":\"List one\",\"list_2\":\"list two\",\"list_3\":\"list three\",\"fixed_banner\":\"678e2c05ca3b51737370629.webp\"}', NULL, '2025-01-20 10:57:09', '2025-01-20 10:57:09'),
(71, 'north_hair', '', 'mens_stock_hair_system_product.content', '{\"title\":\"This is Custom Title\",\"details\":\"Custom Custom Custom Custom To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-20 11:56:19', '2025-01-20 11:56:19'),
(72, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"This is Stock Title\",\"sub_title\":\"This is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock Title\"}', NULL, '2025-01-20 12:01:06', '2025-01-20 12:01:06'),
(73, 'north_hair', '', 'mens_stock_hair_system_comparison.elemen', '{\"has_image\":\"1\",\"title\":\"Stock title 1\",\"sub_title\":\"stock sub title 1\",\"link\":\"https:\\/\\/www.google.com\",\"comparison\":\"678e3b1818cf21737374488.webp\"}', NULL, '2025-01-20 12:01:28', '2025-01-20 12:01:28'),
(74, 'north_hair', '', 'mens_stock_hair_system_comparison.elemen', '{\"has_image\":\"1\",\"title\":\"sfgsdg\",\"sub_title\":\"sdfgdfg\",\"link\":\"sfgsdfg\",\"comparison\":\"678e3b34e1d551737374516.webp\"}', NULL, '2025-01-20 12:01:56', '2025-01-20 12:01:56'),
(75, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"This is Stock Title\",\"sub_title\":\"This is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock Title\"}', NULL, '2025-01-20 12:03:31', '2025-01-20 12:03:31'),
(76, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"This is Stock Title\",\"sub_title\":\"This is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock Title\"}', NULL, '2025-01-20 12:03:44', '2025-01-20 12:03:45'),
(77, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"This is a Stock title\",\"sub_title\":\"This is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock TitleThis is Stock Title\"}', NULL, '2025-01-20 12:08:15', '2025-01-20 12:08:15'),
(78, 'north_hair', '', 'mens_stock_hair_system_faq.element', '{\"title\":\"This is a Stock 1 faq\",\"details\":\"Yes, we offer delivery to most areas across the city. During checkout, you can enter your delivery address to check if your location is eligible for delivery. If you\\u2019re in an area we currently don\\u2019t deliver to, we\\u2019ll let you know before you finalize your order.\"}', NULL, '2025-01-20 12:11:34', '2025-01-20 12:11:34'),
(79, 'north_hair', '', 'mens_stock_hair_system_faq.element', '{\"title\":\"This is a title 2\",\"details\":\"To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-20 12:11:51', '2025-01-20 12:11:51'),
(80, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"fsghd\",\"sub_title\":\"sdfghdfgh\"}', NULL, '2025-01-20 12:12:53', '2025-01-20 12:12:53'),
(81, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"sdfghdfgh\",\"sub_title\":\"fghdfgh\"}', NULL, '2025-01-20 12:15:20', '2025-01-20 12:15:20'),
(82, 'north_hair', '', 'mens_stock_hair_system_comparison.elemen', '{\"has_image\":\"1\",\"title\":\"cfgsxdfg\",\"sub_title\":\"sfgysfgh\",\"link\":\"www.google.com\",\"stock comparison\":\"678e3ea8e82ae1737375400.webp\"}', NULL, '2025-01-20 12:16:40', '2025-01-20 12:16:40'),
(83, 'north_hair', '', 'mens_stock_hair_system_comparison.conten', '{\"title\":\"guikgytuiyt\",\"sub_title\":\"uityui\"}', NULL, '2025-01-20 12:19:22', '2025-01-20 12:19:22'),
(84, 'north_hair', '', 'mens_custom_hair_system_product.content', '{\"title\":\"This is Customize Mens\",\"details\":\"This is Customize MensThis is Customize MensThis is Customize MensThis is Customize MensThis is Customize MensThis is Customize MensThis is Customize Mens\",\"customize_link\":\"#\",\"order_link\":\"#\"}', NULL, '2025-01-20 12:42:45', '2025-01-20 12:42:45'),
(85, 'north_hair', '', 'mens_custom_hair_system_helpme.content', '{\"title\":\"Do you need help?\",\"link\":\"https:\\/\\/www.google.com\"}', NULL, '2025-01-20 12:56:59', '2025-01-20 12:56:59'),
(86, 'north_hair', '', 'mens_custom_hair_system_faq.element', '{\"title\":\"Hello Custom 1\",\"details\":\"To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-20 12:59:29', '2025-01-20 12:59:29'),
(87, 'north_hair', '', 'mens_custom_hair_system_faq.element', '{\"title\":\"Hello Custom 2\",\"details\":\"To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-20 12:59:38', '2025-01-20 12:59:38'),
(88, 'north_hair', '', 'mens_custom_hair_system_banner1.content', '{\"has_image\":\"1\",\"title\":\"This is a title\",\"list_1\":\"List one\",\"list_2\":\"list two\",\"list_3\":\"list three\",\"list_4\":\"list four\",\"details\":\"sdgsrgsdfgsdfgsdfgsdfg\",\"link\":\"#\",\"custom_banner1\":\"678f3167e08821737437543.webp\"}', NULL, '2025-01-21 05:32:23', '2025-01-21 05:32:23'),
(89, 'north_hair', '', 'mens_custom_hair_system_banner2.content', '{\"has_image\":\"1\",\"title\":\"This is a title\",\"sub_title\":\"This is Sub Title\",\"list_1\":\"List one\",\"list_2\":\"list two\",\"list_3\":\"list three\",\"link\":\"#\",\"custom_banner2\":\"678f3183f08411737437571.webp\"}', NULL, '2025-01-21 05:32:51', '2025-01-21 05:32:51'),
(90, 'north_hair', '', 'mens_repear_hair_system_banner.content', '{\"has_image\":\"1\",\"banner_image\":\"678f42538745b1737441875.webp\"}', NULL, '2025-01-21 06:44:35', '2025-01-21 06:44:35'),
(91, 'north_hair', '', 'mens_afro_hair_system_banner.content', '{\"has_image\":\"1\",\"banner_image\":\"678f4a74c8eb41737443956.webp\"}', NULL, '2025-01-21 07:19:16', '2025-01-21 07:19:16'),
(92, 'north_hair', '', 'mens_afro_hair_system_faq.element', '{\"title\":\"Hello Afro faq 1\",\"details\":\"Hello Afro faq 1 Hello Afro faq 1 Hello Afro faq 1 Hello Afro faq 1 Hello Afro faq 1 Hello Afro faq 1\"}', NULL, '2025-01-21 07:26:42', '2025-01-21 07:26:42'),
(93, 'north_hair', '', 'mens_afro_hair_system_faq.element', '{\"title\":\"Hello Afro faq 2\",\"details\":\"Hello Afro faq 2 Hello Afro faq 2 Hello Afro faq 2 Hello Afro faq 2 Hello Afro faq 2\"}', NULL, '2025-01-21 07:26:56', '2025-01-21 07:26:56'),
(94, 'north_hair', '', 'mens_afro_hair_system_product.content', '{\"title\":\"Hello Afro Product\",\"details\":\"Afro Product  website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-21 07:27:27', '2025-01-21 07:27:27'),
(95, 'north_hair', '', 'mens_lace_hair_system_banner.content', '{\"has_image\":\"1\",\"title_1\":\"Title Lace 1\",\"title_2\":\"Title Lace 2\",\"banner_image\":\"678f562c004aa1737446956.webp\"}', NULL, '2025-01-21 08:09:15', '2025-01-21 08:09:51'),
(96, 'north_hair', '', 'mens_lace_hair_system_comparison.content', '{\"title\":\"This is my Lace System title\",\"sub_title\":\"This is my Lace System sub title This is my Lace System sub title This is my Lace System sub title This is my Lace System sub title This is my Lace System sub title This is my Lace System sub title This is my Lace System sub title\"}', NULL, '2025-01-21 08:17:59', '2025-01-21 08:17:59'),
(97, 'north_hair', '', 'mens_lace_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Lace Comparison title\",\"sub_title\":\"Lace Comparison sub title\",\"link\":\"#\",\"comparison\":\"678f5856da2131737447510.webp\"}', NULL, '2025-01-21 08:18:30', '2025-01-21 08:18:30'),
(98, 'north_hair', '', 'mens_lace_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Lace Comparison title 2\",\"sub_title\":\"Lace Comparison sub title 2\",\"link\":\"#\",\"comparison\":\"678f5874a663c1737447540.webp\"}', NULL, '2025-01-21 08:19:00', '2025-01-21 08:19:00'),
(99, 'north_hair', '', 'mens_lace_hair_system_faq.element', '{\"title\":\"Lace faq 1\",\"details\":\"Lace faq 1 Lace faq 1 Lace faq 1 Lace faq 1\"}', NULL, '2025-01-21 08:19:45', '2025-01-21 08:19:45'),
(100, 'north_hair', '', 'mens_lace_hair_system_faq.element', '{\"title\":\"Lace faq 2\",\"details\":\"Lace faq 2 Lace faq 2 Lace faq 2 Lace faq 2 Lace faq 2 Lace faq 2 Lace faq 2\"}', NULL, '2025-01-21 08:19:59', '2025-01-21 08:19:59'),
(101, 'north_hair', '', 'mens_lace_hair_system_product.content', '{\"title\":\"This is Lace Product caption\",\"details\":\"This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption This is Lace Product caption\"}', NULL, '2025-01-21 08:20:21', '2025-01-21 08:20:21'),
(102, 'north_hair', '', 'mens_skin_hair_system_banner.content', '{\"has_image\":\"1\",\"title_1\":\"Mens Skin Hair System 1\",\"title_2\":\"Mens Skin Hair System 1\",\"banner_image\":\"678f6b336c79e1737452339.webp\"}', NULL, '2025-01-21 09:38:59', '2025-01-21 09:38:59'),
(103, 'north_hair', '', 'mens_skin_hair_system_comparison.content', '{\"title\":\"Mens Comparison\",\"sub_title\":\"This is Sub Title\"}', NULL, '2025-01-21 09:41:47', '2025-01-21 09:41:47'),
(104, 'north_hair', '', 'mens_skin_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Skin Comparison 1\",\"sub_title\":\"Skin Comparison 1 sub\",\"link\":\"#\",\"comparison\":\"678f6bf6083ce1737452534.webp\"}', NULL, '2025-01-21 09:42:14', '2025-01-21 09:42:14'),
(105, 'north_hair', '', 'mens_skin_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Skin Comparison 2\",\"sub_title\":\"Skin Comparison 2 sub\",\"link\":\"#\",\"comparison\":\"678f6c08e02471737452552.webp\"}', NULL, '2025-01-21 09:42:32', '2025-01-21 09:42:32'),
(106, 'north_hair', '', 'mens_skin_hair_system_faq.element', '{\"title\":\"skin faq 1\",\"details\":\"skin faq 1 skin faq 1 skin faq 1 skin faq 1\"}', NULL, '2025-01-21 09:42:51', '2025-01-21 09:42:51'),
(107, 'north_hair', '', 'mens_skin_hair_system_faq.element', '{\"title\":\"skin faq 2\",\"details\":\"skin faq 2 skin faq 2 skin faq 2 skin faq 2\"}', NULL, '2025-01-21 09:43:01', '2025-01-21 09:43:01'),
(108, 'north_hair', '', 'mens_skin_hair_system_product.content', '{\"title\":\"Skin Product Caption\",\"details\":\"Skin Skin  simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-21 09:43:44', '2025-01-21 09:43:44'),
(109, 'north_hair', '', 'mens_mono_hair_system_banner.content', '{\"has_image\":\"1\",\"title_1\":\"Title mono 1\",\"title_2\":\"Title mono 2\",\"sub_title\":\"This is Sub Title\",\"banner_image\":\"678f7011dcfae1737453585.webp\"}', NULL, '2025-01-21 09:59:45', '2025-01-21 09:59:55'),
(110, 'north_hair', '', 'mens_mono_hair_system_product.content', '{\"title\":\"Mens Mono Product Caption\",\"details\":\"Mens Mono Product Caption  To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-21 10:00:55', '2025-01-21 10:00:55'),
(111, 'north_hair', '', 'mens_mono_hair_system_comparison.content', '{\"title\":\"Mens Mono Comparison\",\"sub_title\":\"This is Sub Title\"}', NULL, '2025-01-21 10:01:21', '2025-01-21 10:01:21'),
(112, 'north_hair', '', 'mens_mono_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Mens Mono Title\",\"sub_title\":\"Sort sub title\",\"link\":\"#\",\"comparison\":\"678f7088a3ad11737453704.webp\"}', NULL, '2025-01-21 10:01:44', '2025-01-21 10:01:44'),
(113, 'north_hair', '', 'mens_mono_hair_system_comparison.element', '{\"has_image\":\"1\",\"title\":\"Mens Mono Title 2\",\"sub_title\":\"This is main Sub Title\",\"link\":\"#\",\"comparison\":\"678f70a2196e61737453730.webp\"}', NULL, '2025-01-21 10:02:10', '2025-01-21 10:02:10'),
(114, 'north_hair', '', 'mens_mono_hair_system_faq.element', '{\"title\":\"mono faq 1\",\"details\":\"To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-21 10:02:59', '2025-01-21 10:02:59'),
(115, 'north_hair', '', 'mens_mono_hair_system_faq.element', '{\"title\":\"mono faq 2\",\"details\":\"To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-21 10:03:07', '2025-01-21 10:03:07'),
(116, 'north_hair', '', 'mens_frontal_hair_system_product.content', '{\"title\":\"Frontal Product Caption\",\"details\":\"To place an order on our website, simply browse through our categories or search for the products you need. Once you\'ve found the items you want, add them to your cart. Afterward, proceed to checkout, provide your delivery details, and complete your payment. Your groceries will be delivered to your doorstep as per the selected delivery time slot.\"}', NULL, '2025-01-21 10:48:39', '2025-01-21 10:48:39'),
(117, 'north_hair', '', 'mens_frontal_hair_system_faq.element', '{\"title\":\"frontal faq 1\",\"details\":\"frontal faq 1frontal faq 1frontal faq 1frontal faq 1frontal faq 1frontal faq 1frontal faq 1frontal faq 1\"}', NULL, '2025-01-21 10:49:01', '2025-01-21 10:49:01'),
(118, 'north_hair', '', 'mens_frontal_hair_system_faq.element', '{\"title\":\"frontal faq 2\",\"details\":\"frontal faq 2 frontal faq 2 frontal faq 2 frontal faq 2 frontal faq 2 frontal faq 2 frontal faq 2 frontal faq 2 frontal faq 2\"}', NULL, '2025-01-21 10:49:10', '2025-01-21 10:49:10'),
(119, 'north_hair', '', 'mens_frontal_hair_system_banner.content', '{\"has_image\":\"1\",\"title_1\":\"Frontal title 1\",\"title_2\":\"Frontal title 2\",\"banner_image\":\"678f7bcbef4471737456587.webp\"}', NULL, '2025-01-21 10:49:47', '2025-01-21 10:49:47'),
(120, 'north_hair', '', 'mens_crown_hair_system_banner.content', '{\"has_image\":\"1\",\"banner_image\":\"678f7f4a965501737457482.webp\"}', NULL, '2025-01-21 11:04:42', '2025-01-21 11:04:42'),
(121, 'north_hair', '', 'mens_crown_hair_system_comparison.conten', '{\"title\":\"Crown Comparison title\",\"sub_title\":\"Crown Comparison title Crown Comparison title Crown Comparison title Crown Comparison title Crown Comparison title\"}', NULL, '2025-01-21 11:05:09', '2025-01-21 11:05:09'),
(122, 'north_hair', '', 'mens_crown_hair_system_comparison.conten', '{\"title\":\"xfdghfdgh\",\"sub_title\":\"dfghd\"}', NULL, '2025-01-21 11:06:21', '2025-01-21 11:06:21'),
(123, 'north_hair', '', 'mens_crown_hair_system_comparison.elemen', '{\"has_image\":\"1\",\"title\":\"Crown Comparison\",\"sub_title\":\"This is Sub Title\",\"link\":\"#\",\"comparison\":\"678f7fc8d24ae1737457608.webp\"}', NULL, '2025-01-21 11:06:48', '2025-01-21 11:06:48'),
(124, 'north_hair', '', 'mens_crown_hair_system_comparison.conten', '{\"title\":\"dfg\",\"sub_title\":\"sdfg\"}', NULL, '2025-01-21 11:08:44', '2025-01-21 11:08:44'),
(125, 'north_hair', '', 'mens_crown_hair_system_faq.element', '{\"title\":\"Crown Faq 1\",\"details\":\"Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1 Crown Faq 1\"}', NULL, '2025-01-21 11:09:11', '2025-01-21 11:09:11'),
(126, 'north_hair', '', 'mens_crown_hair_system_faq.element', '{\"title\":\"Crown Faq 2\",\"details\":\"Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2 Crown Faq 2\"}', NULL, '2025-01-21 11:09:21', '2025-01-21 11:09:21'),
(127, 'north_hair', '', 'mens_crown_hair_system_product.content', '{\"title\":\"Mens Crown System Product Caption\",\"details\":\"Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption Mens Crown System Product Caption\"}', NULL, '2025-01-21 11:11:48', '2025-01-21 11:11:48'),
(128, 'north_hair', '', 'mens_cap_hair_system_banner.content', '{\"has_image\":\"1\",\"title_1\":\"This is Mens Cap title 1\",\"title_2\":\"This is Mens Cap title 2\",\"banner_image\":\"678f835494dcf1737458516.webp\"}', NULL, '2025-01-21 11:21:56', '2025-01-21 11:21:56'),
(129, 'north_hair', '', 'mens_cap_hair_system_faq.element', '{\"title\":\"This is Mens Cap faq 1\",\"details\":\"This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1 This is Mens Cap faq 1\"}', NULL, '2025-01-21 11:22:31', '2025-01-21 11:22:31'),
(130, 'north_hair', '', 'mens_cap_hair_system_faq.element', '{\"title\":\"This is Mens Cap faq 2\",\"details\":\"This is Mens Cap faq 2 This is Mens Cap faq 2 This is Mens Cap faq 2 This is Mens Cap faq 2 This is Mens Cap faq 2 This is Mens Cap faq 2 This is Mens Cap faq 2 This is Mens Cap faq 2\"}', NULL, '2025-01-21 11:22:39', '2025-01-21 11:22:39'),
(131, 'north_hair', '', 'mens_cap_hair_system_product.content', '{\"title\":\"This is Mens Cap product Title\",\"details\":\"This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title This is Mens Cap product Title\"}', NULL, '2025-01-21 11:23:18', '2025-01-21 11:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` bigint UNSIGNED NOT NULL,
  `form_id` int UNSIGNED NOT NULL DEFAULT '0',
  `code` int DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>enable, 2=>disable',
  `gateway_parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `supported_currencies` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `crypto` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: fiat currency, 1: crypto currency',
  `extra` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `form_id`, `code`, `name`, `alias`, `image`, `status`, `gateway_parameters`, `supported_currencies`, `crypto`, `extra`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 101, 'Paypal', 'Paypal', '663a38d7b455d1715091671.png', 1, '{\"paypal_email\":{\"title\":\"PayPal Email\",\"global\":true,\"value\":\"sb-owud61543012@business.example.com\"}}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"$\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:21:11'),
(2, 0, 102, 'Perfect Money', 'PerfectMoney', '663a3920e30a31715091744.png', 1, '{\"passphrase\":{\"title\":\"ALTERNATE PASSPHRASE\",\"global\":true,\"value\":\"hR26aw02Q1eEeUPSIfuwNypXX\"},\"wallet_id\":{\"title\":\"PM Wallet\",\"global\":false,\"value\":\"\"}}', '{\"USD\":\"$\",\"EUR\":\"\\u20ac\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:22:24'),
(3, 0, 103, 'Stripe Hosted', 'Stripe', '663a39861cb9d1715091846.png', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:24:06'),
(4, 0, 104, 'Skrill', 'Skrill', '663a39494c4a91715091785.png', 1, '{\"pay_to_email\":{\"title\":\"Skrill Email\",\"global\":true,\"value\":\"merchant@skrill.com\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"---\"}}', '{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"MAD\":\"MAD\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"SAR\":\"SAR\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TND\":\"TND\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\",\"COP\":\"COP\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:23:05'),
(5, 0, 105, 'PayTM', 'Paytm', '663a390f601191715091727.png', 1, '{\"MID\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"DIY12386817555501617\"},\"merchant_key\":{\"title\":\"Merchant Key\",\"global\":true,\"value\":\"bKMfNxPPf_QdZppa\"},\"WEBSITE\":{\"title\":\"Paytm Website\",\"global\":true,\"value\":\"DIYtestingweb\"},\"INDUSTRY_TYPE_ID\":{\"title\":\"Industry Type\",\"global\":true,\"value\":\"Retail\"},\"CHANNEL_ID\":{\"title\":\"CHANNEL ID\",\"global\":true,\"value\":\"WEB\"},\"transaction_url\":{\"title\":\"Transaction URL\",\"global\":true,\"value\":\"https:\\/\\/pguat.paytm.com\\/oltp-web\\/processTransaction\"},\"transaction_status_url\":{\"title\":\"Transaction STATUS URL\",\"global\":true,\"value\":\"https:\\/\\/pguat.paytm.com\\/paytmchecksum\\/paytmCallback.jsp\"}}', '{\"AUD\":\"AUD\",\"ARS\":\"ARS\",\"BDT\":\"BDT\",\"BRL\":\"BRL\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"GEL\":\"GEL\",\"GHS\":\"GHS\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"NGN\":\"NGN\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"UGX\":\"UGX\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"GBP\":\"GBP\",\"USD\":\"USD\",\"VND\":\"VND\",\"XOF\":\"XOF\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:22:07'),
(6, 0, 106, 'Payeer', 'Payeer', '663a38c9e2e931715091657.png', 1, '{\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"866989763\"},\"secret_key\":{\"title\":\"Secret key\",\"global\":true,\"value\":\"7575\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"RUB\":\"RUB\"}', 0, '{\"status\":{\"title\": \"Status URL\",\"value\":\"ipn.Payeer\"}}', NULL, '2019-09-14 07:14:22', '2024-05-07 02:20:57'),
(7, 0, 107, 'PayStack', 'Paystack', '663a38fc814e91715091708.png', 1, '{\"public_key\":{\"title\":\"Public key\",\"global\":true,\"value\":\"pk_test_cd330608eb47970889bca397ced55c1dd5ad3783\"},\"secret_key\":{\"title\":\"Secret key\",\"global\":true,\"value\":\"sk_test_8a0b1f199362d7acc9c390bff72c4e81f74e2ac3\"}}', '{\"USD\":\"USD\",\"NGN\":\"NGN\"}', 0, '{\"callback\":{\"title\": \"Callback URL\",\"value\":\"ipn.Paystack\"},\"webhook\":{\"title\": \"Webhook URL\",\"value\":\"ipn.Paystack\"}}\r\n', NULL, '2019-09-14 07:14:22', '2024-05-07 02:21:48'),
(9, 0, 109, 'Flutterwave', 'Flutterwave', '663a36c2c34d61715091138.png', 1, '{\"public_key\":{\"title\":\"Public Key\",\"global\":true,\"value\":\"----------------\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"-----------------------\"},\"encryption_key\":{\"title\":\"Encryption Key\",\"global\":true,\"value\":\"------------------\"}}', '{\"BIF\":\"BIF\",\"CAD\":\"CAD\",\"CDF\":\"CDF\",\"CVE\":\"CVE\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"GHS\":\"GHS\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"KES\":\"KES\",\"LRD\":\"LRD\",\"MWK\":\"MWK\",\"MZN\":\"MZN\",\"NGN\":\"NGN\",\"RWF\":\"RWF\",\"SLL\":\"SLL\",\"STD\":\"STD\",\"TZS\":\"TZS\",\"UGX\":\"UGX\",\"USD\":\"USD\",\"XAF\":\"XAF\",\"XOF\":\"XOF\",\"ZMK\":\"ZMK\",\"ZMW\":\"ZMW\",\"ZWD\":\"ZWD\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:12:18'),
(10, 0, 110, 'RazorPay', 'Razorpay', '663a393a527831715091770.png', 1, '{\"key_id\":{\"title\":\"Key Id\",\"global\":true,\"value\":\"rzp_test_kiOtejPbRZU90E\"},\"key_secret\":{\"title\":\"Key Secret \",\"global\":true,\"value\":\"osRDebzEqbsE1kbyQJ4y0re7\"}}', '{\"INR\":\"INR\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:22:50'),
(11, 0, 111, 'Stripe Storefront', 'StripeJs', '663a3995417171715091861.png', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:24:21'),
(12, 0, 112, 'Instamojo', 'Instamojo', '663a384d54a111715091533.png', 1, '{\"api_key\":{\"title\":\"API KEY\",\"global\":true,\"value\":\"test_2241633c3bc44a3de84a3b33969\"},\"auth_token\":{\"title\":\"Auth Token\",\"global\":true,\"value\":\"test_279f083f7bebefd35217feef22d\"},\"salt\":{\"title\":\"Salt\",\"global\":true,\"value\":\"19d38908eeff4f58b2ddda2c6d86ca25\"}}', '{\"INR\":\"INR\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:18:53'),
(13, 0, 501, 'Blockchain', 'Blockchain', '663a35efd0c311715090927.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"55529946-05ca-48ff-8710-f279d86b1cc5\"},\"xpub_code\":{\"title\":\"XPUB CODE\",\"global\":true,\"value\":\"xpub6CKQ3xxWyBoFAF83izZCSFUorptEU9AF8TezhtWeMU5oefjX3sFSBw62Lr9iHXPkXmDQJJiHZeTRtD9Vzt8grAYRhvbz4nEvBu3QKELVzFK\"}}', '{\"BTC\":\"BTC\"}', 1, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:08:47'),
(15, 0, 503, 'CoinPayments', 'Coinpayments', '663a36a8d8e1d1715091112.png', 1, '{\"public_key\":{\"title\":\"Public Key\",\"global\":true,\"value\":\"---------------------\"},\"private_key\":{\"title\":\"Private Key\",\"global\":true,\"value\":\"---------------------\"},\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"---------------------\"}}', '{\"BTC\":\"Bitcoin\",\"BTC.LN\":\"Bitcoin (Lightning Network)\",\"LTC\":\"Litecoin\",\"CPS\":\"CPS Coin\",\"VLX\":\"Velas\",\"APL\":\"Apollo\",\"AYA\":\"Aryacoin\",\"BAD\":\"Badcoin\",\"BCD\":\"Bitcoin Diamond\",\"BCH\":\"Bitcoin Cash\",\"BCN\":\"Bytecoin\",\"BEAM\":\"BEAM\",\"BITB\":\"Bean Cash\",\"BLK\":\"BlackCoin\",\"BSV\":\"Bitcoin SV\",\"BTAD\":\"Bitcoin Adult\",\"BTG\":\"Bitcoin Gold\",\"BTT\":\"BitTorrent\",\"CLOAK\":\"CloakCoin\",\"CLUB\":\"ClubCoin\",\"CRW\":\"Crown\",\"CRYP\":\"CrypticCoin\",\"CRYT\":\"CryTrExCoin\",\"CURE\":\"CureCoin\",\"DASH\":\"DASH\",\"DCR\":\"Decred\",\"DEV\":\"DeviantCoin\",\"DGB\":\"DigiByte\",\"DOGE\":\"Dogecoin\",\"EBST\":\"eBoost\",\"EOS\":\"EOS\",\"ETC\":\"Ether Classic\",\"ETH\":\"Ethereum\",\"ETN\":\"Electroneum\",\"EUNO\":\"EUNO\",\"EXP\":\"EXP\",\"Expanse\":\"Expanse\",\"FLASH\":\"FLASH\",\"GAME\":\"GameCredits\",\"GLC\":\"Goldcoin\",\"GRS\":\"Groestlcoin\",\"KMD\":\"Komodo\",\"LOKI\":\"LOKI\",\"LSK\":\"LSK\",\"MAID\":\"MaidSafeCoin\",\"MUE\":\"MonetaryUnit\",\"NAV\":\"NAV Coin\",\"NEO\":\"NEO\",\"NMC\":\"Namecoin\",\"NVST\":\"NVO Token\",\"NXT\":\"NXT\",\"OMNI\":\"OMNI\",\"PINK\":\"PinkCoin\",\"PIVX\":\"PIVX\",\"POT\":\"PotCoin\",\"PPC\":\"Peercoin\",\"PROC\":\"ProCurrency\",\"PURA\":\"PURA\",\"QTUM\":\"QTUM\",\"RES\":\"Resistance\",\"RVN\":\"Ravencoin\",\"RVR\":\"RevolutionVR\",\"SBD\":\"Steem Dollars\",\"SMART\":\"SmartCash\",\"SOXAX\":\"SOXAX\",\"STEEM\":\"STEEM\",\"STRAT\":\"STRAT\",\"SYS\":\"Syscoin\",\"TPAY\":\"TokenPay\",\"TRIGGERS\":\"Triggers\",\"TRX\":\" TRON\",\"UBQ\":\"Ubiq\",\"UNIT\":\"UniversalCurrency\",\"USDT\":\"Tether USD (Omni Layer)\",\"USDT.BEP20\":\"Tether USD (BSC Chain)\",\"USDT.ERC20\":\"Tether USD (ERC20)\",\"USDT.TRC20\":\"Tether USD (Tron/TRC20)\",\"VTC\":\"Vertcoin\",\"WAVES\":\"Waves\",\"XCP\":\"Counterparty\",\"XEM\":\"NEM\",\"XMR\":\"Monero\",\"XSN\":\"Stakenet\",\"XSR\":\"SucreCoin\",\"XVG\":\"VERGE\",\"XZC\":\"ZCoin\",\"ZEC\":\"ZCash\",\"ZEN\":\"Horizen\"}', 1, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:11:52'),
(16, 0, 504, 'CoinPayments Fiat', 'CoinpaymentsFiat', '663a36b7b841a1715091127.png', 1, '{\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"6515561\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:12:07'),
(17, 0, 505, 'Coingate', 'Coingate', '663a368e753381715091086.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"6354mwVCEw5kHzRJ6thbGo-N\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:11:26'),
(18, 0, 506, 'Coinbase Commerce', 'CoinbaseCommerce', '663a367e46ae51715091070.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"c47cd7df-d8e8-424b-a20a\"},\"secret\":{\"title\":\"Webhook Shared Secret\",\"global\":true,\"value\":\"55871878-2c32-4f64-ab66\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"JPY\":\"JPY\",\"GBP\":\"GBP\",\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CNY\":\"CNY\",\"SEK\":\"SEK\",\"NZD\":\"NZD\",\"MXN\":\"MXN\",\"SGD\":\"SGD\",\"HKD\":\"HKD\",\"NOK\":\"NOK\",\"KRW\":\"KRW\",\"TRY\":\"TRY\",\"RUB\":\"RUB\",\"INR\":\"INR\",\"BRL\":\"BRL\",\"ZAR\":\"ZAR\",\"AED\":\"AED\",\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"AMD\":\"AMD\",\"ANG\":\"ANG\",\"AOA\":\"AOA\",\"ARS\":\"ARS\",\"AWG\":\"AWG\",\"AZN\":\"AZN\",\"BAM\":\"BAM\",\"BBD\":\"BBD\",\"BDT\":\"BDT\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"BIF\":\"BIF\",\"BMD\":\"BMD\",\"BND\":\"BND\",\"BOB\":\"BOB\",\"BSD\":\"BSD\",\"BTN\":\"BTN\",\"BWP\":\"BWP\",\"BYN\":\"BYN\",\"BZD\":\"BZD\",\"CDF\":\"CDF\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"CVE\":\"CVE\",\"CZK\":\"CZK\",\"DJF\":\"DJF\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"DZD\":\"DZD\",\"EGP\":\"EGP\",\"ERN\":\"ERN\",\"ETB\":\"ETB\",\"FJD\":\"FJD\",\"FKP\":\"FKP\",\"GEL\":\"GEL\",\"GGP\":\"GGP\",\"GHS\":\"GHS\",\"GIP\":\"GIP\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"GTQ\":\"GTQ\",\"GYD\":\"GYD\",\"HNL\":\"HNL\",\"HRK\":\"HRK\",\"HTG\":\"HTG\",\"HUF\":\"HUF\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"IMP\":\"IMP\",\"IQD\":\"IQD\",\"IRR\":\"IRR\",\"ISK\":\"ISK\",\"JEP\":\"JEP\",\"JMD\":\"JMD\",\"JOD\":\"JOD\",\"KES\":\"KES\",\"KGS\":\"KGS\",\"KHR\":\"KHR\",\"KMF\":\"KMF\",\"KPW\":\"KPW\",\"KWD\":\"KWD\",\"KYD\":\"KYD\",\"KZT\":\"KZT\",\"LAK\":\"LAK\",\"LBP\":\"LBP\",\"LKR\":\"LKR\",\"LRD\":\"LRD\",\"LSL\":\"LSL\",\"LYD\":\"LYD\",\"MAD\":\"MAD\",\"MDL\":\"MDL\",\"MGA\":\"MGA\",\"MKD\":\"MKD\",\"MMK\":\"MMK\",\"MNT\":\"MNT\",\"MOP\":\"MOP\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MVR\":\"MVR\",\"MWK\":\"MWK\",\"MYR\":\"MYR\",\"MZN\":\"MZN\",\"NAD\":\"NAD\",\"NGN\":\"NGN\",\"NIO\":\"NIO\",\"NPR\":\"NPR\",\"OMR\":\"OMR\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PGK\":\"PGK\",\"PHP\":\"PHP\",\"PKR\":\"PKR\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"RWF\":\"RWF\",\"SAR\":\"SAR\",\"SBD\":\"SBD\",\"SCR\":\"SCR\",\"SDG\":\"SDG\",\"SHP\":\"SHP\",\"SLL\":\"SLL\",\"SOS\":\"SOS\",\"SRD\":\"SRD\",\"SSP\":\"SSP\",\"STD\":\"STD\",\"SVC\":\"SVC\",\"SYP\":\"SYP\",\"SZL\":\"SZL\",\"THB\":\"THB\",\"TJS\":\"TJS\",\"TMT\":\"TMT\",\"TND\":\"TND\",\"TOP\":\"TOP\",\"TTD\":\"TTD\",\"TWD\":\"TWD\",\"TZS\":\"TZS\",\"UAH\":\"UAH\",\"UGX\":\"UGX\",\"UYU\":\"UYU\",\"UZS\":\"UZS\",\"VEF\":\"VEF\",\"VND\":\"VND\",\"VUV\":\"VUV\",\"WST\":\"WST\",\"XAF\":\"XAF\",\"XAG\":\"XAG\",\"XAU\":\"XAU\",\"XCD\":\"XCD\",\"XDR\":\"XDR\",\"XOF\":\"XOF\",\"XPD\":\"XPD\",\"XPF\":\"XPF\",\"XPT\":\"XPT\",\"YER\":\"YER\",\"ZMW\":\"ZMW\",\"ZWL\":\"ZWL\"}\r\n\r\n', 0, '{\"endpoint\":{\"title\": \"Webhook Endpoint\",\"value\":\"ipn.CoinbaseCommerce\"}}', NULL, '2019-09-14 07:14:22', '2024-05-07 02:11:10'),
(24, 0, 113, 'Paypal Express', 'PaypalSdk', '663a38ed101a61715091693.png', 1, '{\"clientId\":{\"title\":\"Paypal Client ID\",\"global\":true,\"value\":\"Ae0-tixtSV7DvLwIh3Bmu7JvHrjh5EfGdXr_cEklKAVjjezRZ747BxKILiBdzlKKyp-W8W_T7CKH1Ken\"},\"clientSecret\":{\"title\":\"Client Secret\",\"global\":true,\"value\":\"EOhbvHZgFNO21soQJT1L9Q00M3rK6PIEsdiTgXRBt2gtGtxwRer5JvKnVUGNU5oE63fFnjnYY7hq3HBA\"}}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"$\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:21:33'),
(25, 0, 114, 'Stripe Checkout', 'StripeV3', '663a39afb519f1715091887.png', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM\"},\"end_point\":{\"title\":\"End Point Secret\",\"global\":true,\"value\":\"whsec_lUmit1gtxwKTveLnSe88xCSDdnPOt8g5\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, '{\"webhook\":{\"title\": \"Webhook Endpoint\",\"value\":\"ipn.StripeV3\"}}', NULL, '2019-09-14 07:14:22', '2024-05-07 02:24:47'),
(27, 0, 115, 'Mollie', 'Mollie', '663a387ec69371715091582.png', 1, '{\"mollie_email\":{\"title\":\"Mollie Email \",\"global\":true,\"value\":\"vi@gmail.com\"},\"api_key\":{\"title\":\"API KEY\",\"global\":true,\"value\":\"test_cucfwKTWfft9s337qsVfn5CC4vNkrn\"}}', '{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\"}', 0, NULL, NULL, '2019-09-14 07:14:22', '2024-05-07 02:19:42'),
(30, 0, 116, 'Cashmaal', 'Cashmaal', '663a361b16bd11715090971.png', 1, '{\"web_id\":{\"title\":\"Web Id\",\"global\":true,\"value\":\"3748\"},\"ipn_key\":{\"title\":\"IPN Key\",\"global\":true,\"value\":\"546254628759524554647987\"}}', '{\"PKR\":\"PKR\",\"USD\":\"USD\"}', 0, '{\"webhook\":{\"title\": \"IPN URL\",\"value\":\"ipn.Cashmaal\"}}', NULL, NULL, '2024-05-07 02:09:31'),
(36, 0, 119, 'Mercado Pago', 'MercadoPago', '663a386c714a91715091564.png', 1, '{\"access_token\":{\"title\":\"Access Token\",\"global\":true,\"value\":\"APP_USR-7924565816849832-082312-21941521997fab717db925cf1ea2c190-1071840315\"}}', '{\"USD\":\"USD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"NOK\":\"NOK\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"AUD\":\"AUD\",\"NZD\":\"NZD\"}', 0, NULL, NULL, NULL, '2024-05-07 02:19:24'),
(37, 0, 120, 'Authorize.net', 'Authorize', '663a35b9ca5991715090873.png', 1, '{\"login_id\":{\"title\":\"Login ID\",\"global\":true,\"value\":\"59e4P9DBcZv\"},\"transaction_key\":{\"title\":\"Transaction Key\",\"global\":true,\"value\":\"47x47TJyLw2E7DbR\"}}', '{\"USD\":\"USD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"NOK\":\"NOK\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"AUD\":\"AUD\",\"NZD\":\"NZD\"}', 0, NULL, NULL, NULL, '2024-05-07 02:07:53'),
(46, 0, 121, 'NMI', 'NMI', '663a3897754cf1715091607.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"2F822Rw39fx762MaV7Yy86jXGTC7sCDy\"}}', '{\"AED\":\"AED\",\"ARS\":\"ARS\",\"AUD\":\"AUD\",\"BOB\":\"BOB\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"RUB\":\"RUB\",\"SEC\":\"SEC\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\"}', 0, NULL, NULL, NULL, '2024-05-07 02:20:07'),
(50, 0, 507, 'BTCPay', 'BTCPay', '663a35cd25a8d1715090893.png', 1, '{\"store_id\":{\"title\":\"Store Id\",\"global\":true,\"value\":\"HsqFVTXSeUFJu7caoYZc3CTnP8g5LErVdHhEXPVTheHf\"},\"api_key\":{\"title\":\"Api Key\",\"global\":true,\"value\":\"4436bd706f99efae69305e7c4eff4780de1335ce\"},\"server_name\":{\"title\":\"Server Name\",\"global\":true,\"value\":\"https:\\/\\/testnet.demo.btcpayserver.org\"},\"secret_code\":{\"title\":\"Secret Code\",\"global\":true,\"value\":\"SUCdqPn9CDkY7RmJHfpQVHP2Lf2\"}}', '{\"BTC\":\"Bitcoin\",\"LTC\":\"Litecoin\"}', 1, '{\"webhook\":{\"title\": \"IPN URL\",\"value\":\"ipn.BTCPay\"}}', NULL, NULL, '2024-05-07 02:08:13'),
(51, 0, 508, 'Now payments hosted', 'NowPaymentsHosted', '663a38b8d57a81715091640.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"--------\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"------------\"}}', '{\"BTG\":\"BTG\",\"ETH\":\"ETH\",\"XMR\":\"XMR\",\"ZEC\":\"ZEC\",\"XVG\":\"XVG\",\"ADA\":\"ADA\",\"LTC\":\"LTC\",\"BCH\":\"BCH\",\"QTUM\":\"QTUM\",\"DASH\":\"DASH\",\"XLM\":\"XLM\",\"XRP\":\"XRP\",\"XEM\":\"XEM\",\"DGB\":\"DGB\",\"LSK\":\"LSK\",\"DOGE\":\"DOGE\",\"TRX\":\"TRX\",\"KMD\":\"KMD\",\"REP\":\"REP\",\"BAT\":\"BAT\",\"ARK\":\"ARK\",\"WAVES\":\"WAVES\",\"BNB\":\"BNB\",\"XZC\":\"XZC\",\"NANO\":\"NANO\",\"TUSD\":\"TUSD\",\"VET\":\"VET\",\"ZEN\":\"ZEN\",\"GRS\":\"GRS\",\"FUN\":\"FUN\",\"NEO\":\"NEO\",\"GAS\":\"GAS\",\"PAX\":\"PAX\",\"USDC\":\"USDC\",\"ONT\":\"ONT\",\"XTZ\":\"XTZ\",\"LINK\":\"LINK\",\"RVN\":\"RVN\",\"BNBMAINNET\":\"BNBMAINNET\",\"ZIL\":\"ZIL\",\"BCD\":\"BCD\",\"USDT\":\"USDT\",\"USDTERC20\":\"USDTERC20\",\"CRO\":\"CRO\",\"DAI\":\"DAI\",\"HT\":\"HT\",\"WABI\":\"WABI\",\"BUSD\":\"BUSD\",\"ALGO\":\"ALGO\",\"USDTTRC20\":\"USDTTRC20\",\"GT\":\"GT\",\"STPT\":\"STPT\",\"AVA\":\"AVA\",\"SXP\":\"SXP\",\"UNI\":\"UNI\",\"OKB\":\"OKB\",\"BTC\":\"BTC\"}', 1, '', NULL, NULL, '2024-05-07 02:20:40'),
(52, 0, 509, 'Now payments checkout', 'NowPaymentsCheckout', '663a38a59d2541715091621.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"---------------\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"-----------\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\"}', 1, '', NULL, NULL, '2024-05-07 02:20:21'),
(53, 0, 122, '2Checkout', 'TwoCheckout', '663a39b8e64b91715091896.png', 1, '{\"merchant_code\":{\"title\":\"Merchant Code\",\"global\":true,\"value\":\"253248016872\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"eQM)ID@&vG84u!O*g[p+\"}}', '{\"AFN\": \"AFN\",\"ALL\": \"ALL\",\"DZD\": \"DZD\",\"ARS\": \"ARS\",\"AUD\": \"AUD\",\"AZN\": \"AZN\",\"BSD\": \"BSD\",\"BDT\": \"BDT\",\"BBD\": \"BBD\",\"BZD\": \"BZD\",\"BMD\": \"BMD\",\"BOB\": \"BOB\",\"BWP\": \"BWP\",\"BRL\": \"BRL\",\"GBP\": \"GBP\",\"BND\": \"BND\",\"BGN\": \"BGN\",\"CAD\": \"CAD\",\"CLP\": \"CLP\",\"CNY\": \"CNY\",\"COP\": \"COP\",\"CRC\": \"CRC\",\"HRK\": \"HRK\",\"CZK\": \"CZK\",\"DKK\": \"DKK\",\"DOP\": \"DOP\",\"XCD\": \"XCD\",\"EGP\": \"EGP\",\"EUR\": \"EUR\",\"FJD\": \"FJD\",\"GTQ\": \"GTQ\",\"HKD\": \"HKD\",\"HNL\": \"HNL\",\"HUF\": \"HUF\",\"INR\": \"INR\",\"IDR\": \"IDR\",\"ILS\": \"ILS\",\"JMD\": \"JMD\",\"JPY\": \"JPY\",\"KZT\": \"KZT\",\"KES\": \"KES\",\"LAK\": \"LAK\",\"MMK\": \"MMK\",\"LBP\": \"LBP\",\"LRD\": \"LRD\",\"MOP\": \"MOP\",\"MYR\": \"MYR\",\"MVR\": \"MVR\",\"MRO\": \"MRO\",\"MUR\": \"MUR\",\"MXN\": \"MXN\",\"MAD\": \"MAD\",\"NPR\": \"NPR\",\"TWD\": \"TWD\",\"NZD\": \"NZD\",\"NIO\": \"NIO\",\"NOK\": \"NOK\",\"PKR\": \"PKR\",\"PGK\": \"PGK\",\"PEN\": \"PEN\",\"PHP\": \"PHP\",\"PLN\": \"PLN\",\"QAR\": \"QAR\",\"RON\": \"RON\",\"RUB\": \"RUB\",\"WST\": \"WST\",\"SAR\": \"SAR\",\"SCR\": \"SCR\",\"SGD\": \"SGD\",\"SBD\": \"SBD\",\"ZAR\": \"ZAR\",\"KRW\": \"KRW\",\"LKR\": \"LKR\",\"SEK\": \"SEK\",\"CHF\": \"CHF\",\"SYP\": \"SYP\",\"THB\": \"THB\",\"TOP\": \"TOP\",\"TTD\": \"TTD\",\"TRY\": \"TRY\",\"UAH\": \"UAH\",\"AED\": \"AED\",\"USD\": \"USD\",\"VUV\": \"VUV\",\"VND\": \"VND\",\"XOF\": \"XOF\",\"YER\": \"YER\"}', 0, '{\"approved_url\":{\"title\": \"Approved URL\",\"value\":\"ipn.TwoCheckout\"}}', NULL, NULL, '2024-05-07 02:24:56'),
(54, 0, 123, 'Checkout', 'Checkout', '663a3628733351715090984.png', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"------\"},\"public_key\":{\"title\":\"PUBLIC KEY\",\"global\":true,\"value\":\"------\"},\"processing_channel_id\":{\"title\":\"PROCESSING CHANNEL\",\"global\":true,\"value\":\"------\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"AUD\":\"AUD\",\"CAN\":\"CAN\",\"CHF\":\"CHF\",\"SGD\":\"SGD\",\"JPY\":\"JPY\",\"NZD\":\"NZD\"}', 0, NULL, NULL, NULL, '2024-05-07 02:09:44'),
(56, 0, 510, 'Binance', 'Binance', '663a35db4fd621715090907.png', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"tsu3tjiq0oqfbtmlbevoeraxhfbp3brejnm9txhjxcp4to29ujvakvfl1ibsn3ja\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"jzngq4t04ltw8d4iqpi7admfl8tvnpehxnmi34id1zvfaenbwwvsvw7llw3zdko8\"},\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"231129033\"}}', '{\"BTC\":\"Bitcoin\",\"USD\":\"USD\",\"BNB\":\"BNB\"}', 1, '{\"cron\":{\"title\": \"Cron Job URL\",\"value\":\"ipn.Binance\"}}', NULL, NULL, '2024-05-07 02:08:27'),
(57, 0, 124, 'SslCommerz', 'SslCommerz', '663a397a70c571715091834.png', 1, '{\"store_id\":{\"title\":\"Store ID\",\"global\":true,\"value\":\"---------\"},\"store_password\":{\"title\":\"Store Password\",\"global\":true,\"value\":\"----------\"}}', '{\"BDT\":\"BDT\",\"USD\":\"USD\",\"EUR\":\"EUR\",\"SGD\":\"SGD\",\"INR\":\"INR\",\"MYR\":\"MYR\"}', 0, NULL, NULL, NULL, '2024-05-07 02:23:54'),
(58, 0, 125, 'Aamarpay', 'Aamarpay', '663a34d5d1dfc1715090645.png', 1, '{\"store_id\":{\"title\":\"Store ID\",\"global\":true,\"value\":\"---------\"},\"signature_key\":{\"title\":\"Signature Key\",\"global\":true,\"value\":\"----------\"}}', '{\"BDT\":\"BDT\"}', 0, NULL, NULL, NULL, '2024-05-07 02:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `gateway_currencies`
--

CREATE TABLE `gateway_currencies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_code` int DEFAULT NULL,
  `gateway_alias` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `max_amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `percent_charge` decimal(5,2) NOT NULL DEFAULT '0.00',
  `fixed_charge` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `rate` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `gateway_parameter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_wishlist` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `product_compare` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `product_review` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `cur_text` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency text',
  `cur_sym` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency symbol',
  `email_from` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_template` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sms_template` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_template` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preloader_title` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_color` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_color` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_config` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'email configuration',
  `sms_config` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `firebase_config` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `global_shortcodes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ev` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'email verification, 0 - dont check, 1 - check',
  `en` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'email notification, 0 - dont send, 1 - send',
  `sv` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'mobile verication, 0 - dont check, 1 - check',
  `sn` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'sms notification, 0 - dont send, 1 - send',
  `pn` tinyint(1) NOT NULL DEFAULT '1',
  `force_ssl` tinyint(1) NOT NULL DEFAULT '0',
  `maintenance_mode` tinyint(1) NOT NULL DEFAULT '0',
  `secure_password` tinyint(1) NOT NULL DEFAULT '0',
  `agree` tinyint(1) NOT NULL DEFAULT '0',
  `multi_language` tinyint(1) NOT NULL DEFAULT '1',
  `registration` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Off	, 1: On',
  `cod` tinyint(1) NOT NULL DEFAULT '0',
  `active_template` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_credentials` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `system_customized` tinyint(1) NOT NULL DEFAULT '0',
  `available_version` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paginate_number` int NOT NULL DEFAULT '0',
  `currency_format` tinyint UNSIGNED NOT NULL DEFAULT '1' COMMENT '1=>Both\\r\\n2=>Text Only\\r\\n3=>Symbol Only''',
  `homepage_layout` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscriber_module` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `product_wishlist`, `product_compare`, `product_review`, `cur_text`, `cur_sym`, `email_from`, `email_from_name`, `email_template`, `sms_template`, `sms_from`, `push_title`, `push_template`, `preloader_title`, `base_color`, `secondary_color`, `mail_config`, `sms_config`, `firebase_config`, `global_shortcodes`, `ev`, `en`, `sv`, `sn`, `pn`, `force_ssl`, `maintenance_mode`, `secure_password`, `agree`, `multi_language`, `registration`, `cod`, `active_template`, `socialite_credentials`, `system_customized`, `available_version`, `paginate_number`, `currency_format`, `homepage_layout`, `subscriber_module`, `created_at`, `updated_at`) VALUES
(1, 'Rafusoft Shop | Online Store BD', 1, 1, 0, 'TK', '৳', 'info@rafusoft.com', 'Rafusoft Shop', '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n  <!--[if !mso]><!-->\r\n  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n  <!--<![endif]-->\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n  <title></title>\r\n  <style type=\"text/css\">\r\n.ReadMsgBody { width: 100%; background-color: #ffffff; }\r\n.ExternalClass { width: 100%; background-color: #ffffff; }\r\n.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }\r\nhtml { width: 100%; }\r\nbody { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }\r\ntable { border-spacing: 0; table-layout: fixed; margin: 0 auto;border-collapse: collapse; }\r\ntable table table { table-layout: auto; }\r\n.yshortcuts a { border-bottom: none !important; }\r\nimg:hover { opacity: 0.9 !important; }\r\na { color: #0087ff; text-decoration: none; }\r\n.textbutton a { font-family: \'open sans\', arial, sans-serif !important;}\r\n.btn-link a { color:#FFFFFF !important;}\r\n\r\n@media only screen and (max-width: 480px) {\r\nbody { width: auto !important; }\r\n*[class=\"table-inner\"] { width: 90% !important; text-align: center !important; }\r\n*[class=\"table-full\"] { width: 100% !important; text-align: center !important; }\r\n/* image */\r\nimg[class=\"img1\"] { width: 100% !important; height: auto !important; }\r\n}\r\n</style>\r\n\r\n\r\n\r\n  <table bgcolor=\"#414a51\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n    <tbody><tr>\r\n      <td height=\"50\"></td>\r\n    </tr>\r\n    <tr>\r\n      <td align=\"center\" style=\"text-align:center;vertical-align:top;font-size:0;\">\r\n        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n          <tbody><tr>\r\n            <td align=\"center\" width=\"600\">\r\n              <!--header-->\r\n              <table class=\"table-inner\" width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                <tbody><tr>\r\n                  <td bgcolor=\"#0087ff\" style=\"border-top-left-radius:6px; border-top-right-radius:6px;text-align:center;vertical-align:top;font-size:0;\" align=\"center\">\r\n                    <table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                      <tbody><tr>\r\n                        <td height=\"20\"></td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td align=\"center\" style=\"font-family: \'Open sans\', Arial, sans-serif; color:#FFFFFF; font-size:16px; font-weight: bold;\">This is a System Generated Email</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td height=\"20\"></td>\r\n                      </tr>\r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n              </tbody></table>\r\n              <!--end header-->\r\n              <table class=\"table-inner\" width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                <tbody><tr>\r\n                  <td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align:center;vertical-align:top;font-size:0;\">\r\n                    <table align=\"center\" width=\"90%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                      <tbody><tr>\r\n                        <td height=\"35\"></td>\r\n                      </tr>\r\n                      <!--logo-->\r\n                      <tr>\r\n                        <td align=\"center\" style=\"vertical-align:top;font-size:0;\">\r\n                          <a href=\"#\">\r\n                            <img style=\"display:block; line-height:0px; font-size:0px; border:0px;\" src=\"https://i.imgur.com/Z1qtvtV.png\" alt=\"img\">\r\n                          </a>\r\n                        </td>\r\n                      </tr>\r\n                      <!--end logo-->\r\n                      <tr>\r\n                        <td height=\"40\"></td>\r\n                      </tr>\r\n                      <!--headline-->\r\n                      <tr>\r\n                        <td align=\"center\" style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;\">Hello {{fullname}} ({{username}})</td>\r\n                      </tr>\r\n                      <!--end headline-->\r\n                      <tr>\r\n                        <td align=\"center\" style=\"text-align:center;vertical-align:top;font-size:0;\">\r\n                          <table width=\"40\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                            <tbody><tr>\r\n                              <td height=\"20\" style=\" border-bottom:3px solid #0087ff;\"></td>\r\n                            </tr>\r\n                          </tbody></table>\r\n                        </td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td height=\"20\"></td>\r\n                      </tr>\r\n                      <!--content-->\r\n                      <tr>\r\n                        <td align=\"left\" style=\"font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;\">{{message}}</td>\r\n                      </tr>\r\n                      <!--end content-->\r\n                      <tr>\r\n                        <td height=\"40\"></td>\r\n                      </tr>\r\n              \r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n                <tr>\r\n                  <td height=\"45\" align=\"center\" bgcolor=\"#f4f4f4\" style=\"border-bottom-left-radius:6px;border-bottom-right-radius:6px;\">\r\n                    <table align=\"center\" width=\"90%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                      <tbody><tr>\r\n                        <td height=\"10\"></td>\r\n                      </tr>\r\n                      <!--preference-->\r\n                      <tr>\r\n                        <td class=\"preference-link\" align=\"center\" style=\"font-family: \'Open sans\', Arial, sans-serif; color:#95a5a6; font-size:14px;\">\r\n                          © 2021 <a href=\"#\">{{site_name}}</a>&nbsp;. All Rights Reserved. \r\n                        </td>\r\n                      </tr>\r\n                      <!--end preference-->\r\n                      <tr>\r\n                        <td height=\"10\"></td>\r\n                      </tr>\r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n              </tbody></table>\r\n            </td>\r\n          </tr>\r\n        </tbody></table>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td height=\"60\"></td>\r\n    </tr>\r\n  </tbody></table>', 'hi {{fullname}} ({{username}}), {{message}}', 'Rafusoft Shop', NULL, NULL, 'Rafusoft Shop', 'f3532b', 'ebebeb', '{\"name\":\"smtp\",\"host\":\"server87.web-hosting.com\",\"port\":\"465\",\"enc\":\"ssl\",\"username\":\"shop@emailgun.rafusoft.com\",\"password\":\"V6YQ%vn][$ER\"}', '{\"name\":\"custom\",\"clickatell\":{\"api_key\":\"----------------\"},\"infobip\":{\"username\":\"------------8888888\",\"password\":\"-----------------\"},\"message_bird\":{\"api_key\":\"-------------------\"},\"nexmo\":{\"api_key\":\"----------------------\",\"api_secret\":\"----------------------\"},\"sms_broadcast\":{\"username\":\"----------------------\",\"password\":\"-----------------------------\"},\"twilio\":{\"account_sid\":\"-----------------------\",\"auth_token\":\"---------------------------\",\"from\":\"----------------------\"},\"text_magic\":{\"username\":\"-----------------------\",\"apiv2_key\":\"-------------------------------\"},\"custom\":{\"method\":\"get\",\"url\":\"https:\\/\\/api.sms.net.bd\\/sendsms?api_key=BH60yg3uPUAuvm5if3f5xlu3161b0VGkMfolN19D&msg={{message}}&to={{number}}\",\"headers\":{\"name\":[\"Welcome to\"],\"value\":[\"Rafusoftt\"]},\"body\":{\"name\":[\"Company Name\",\"Address:\"],\"value\":[\"Rafusoft\",\"Bangladesh\"]}}}', NULL, '{\n    \"site_name\":\"Name of your site\",\n    \"site_currency\":\"Currency of your site\",\n    \"currency_symbol\":\"Symbol of currency\"\n}', 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 1, 1, 'north_hair', '{\"google\":{\"client_id\":\"723574673893-eijoc1jig0o8826nfddik3uplkvogq00.apps.googleusercontent.com\",\"client_secret\":\"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\",\"status\":1},\"facebook\":{\"client_id\":\"8941354654163\",\"client_secret\":\"SDFASDF8413512\",\"status\":0},\"linkedin\":{\"client_id\":\"657846531351\",\"client_secret\":\"5746152\",\"status\":0}}', 0, '2.0', 20, 1, 'sidebar_menu', 1, NULL, '2025-01-05 16:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not default language, 1: default language',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `image`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '67076f5911ee81728540505.png', 1, '2023-06-15 06:02:55', '2024-10-10 00:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `path`, `file_name`, `created_at`, `updated_at`) VALUES
(2, 'assets/images/product', '677b7d1edf10c1736146206.webp', '2025-01-06 17:50:06', '2025-01-06 17:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `media_product`
--

CREATE TABLE `media_product` (
  `product_id` bigint UNSIGNED NOT NULL,
  `media_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_product_variant`
--

CREATE TABLE `media_product_variant` (
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `media_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_logs`
--

CREATE TABLE `notification_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `sender` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_from` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_to` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `notification_type` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_read` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_templates`
--

CREATE TABLE `notification_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `act` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sms_body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `push_body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shortcodes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email_status` tinyint(1) NOT NULL DEFAULT '1',
  `email_sent_from_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_sent_from_address` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_status` tinyint(1) NOT NULL DEFAULT '1',
  `sms_sent_from` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_templates`
--

INSERT INTO `notification_templates` (`id`, `act`, `name`, `subject`, `push_title`, `email_body`, `sms_body`, `push_body`, `shortcodes`, `email_status`, `email_sent_from_name`, `email_sent_from_address`, `sms_status`, `sms_sent_from`, `push_status`, `created_at`, `updated_at`) VALUES
(3, 'PAYMENT_COMPLETE', 'Payment - Automated - Successful', 'Payment Completed Successfully', NULL, '<div>Your payment of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>has been completed Successfully.<span style=\"font-weight: bolder;\"><br></span></div><div><span style=\"font-weight: bolder;\"><br></span></div><div><span style=\"font-weight: bolder;\">Details of your Payment:<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color=\"#000000\">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Received : {{method_amount}} {{method_currency}}<br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br style=\"font-family: Montserrat, sans-serif;\"></div>', '{{amount}} {{site_currency}} Payment successfully by {{method_name}}', '{{amount}} {{site_currency}} Payment successfully by {{method_name}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"post_balance\":\"Balance of the user after this transaction\"}', 1, NULL, NULL, 1, NULL, 0, '2021-11-03 12:00:00', '2024-09-15 01:33:11'),
(4, 'PAYMENT_APPROVE', 'Payment - Manual - Approved', 'Your Payment is Approved', NULL, '<div style=\"font-family: Montserrat, sans-serif;\">Your payment request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}</span>&nbsp;has been approved.</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">Details of your Payment:</span></div><div style=\"font-family: Montserrat, sans-serif;\">Amount : {{amount}} {{site_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Received : {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Paid via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div>', 'Admin approve Your {{amount}} {{site_currency}} payment request by {{method_name}} transaction : {{trx}}', 'Admin approve Your {{amount}} {{site_currency}} payment request by {{method_name}} transaction : {{trx}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:40:36'),
(5, 'PAYMENT_REJECT', 'Payment - Manual - Rejected', 'Your Payment Request is Rejected', NULL, '<div style=\"font-family: Montserrat, sans-serif;\">Your payment request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span><span style=\"color: rgb(33, 37, 41); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\">has been rejected.</span></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Received : {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Paid via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge: {{charge}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number was : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">if you have any queries, feel free to contact us.</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><span style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\">{{rejection_message}}</span><br>', 'Admin Rejected Your {{amount}} {{site_currency}} payment request by {{method_name}}\r\n\r\n{{rejection_message}}', NULL, '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"rejection_message\":\"Rejection message by the admin\"}', 1, NULL, NULL, 1, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:41:13'),
(6, 'PAYMENT_REQUEST', 'Payment - Manual - Requested', 'Payment Request Submitted Successfully', NULL, '<div>Your payment request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>submitted successfully<span style=\"font-weight: bolder;\">&nbsp;.<br></span></div><div><span style=\"font-weight: bolder;\"><br></span></div><div><span style=\"font-weight: bolder;\">Details of your Payment:</span></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}}<br></div><div>Pay via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br style=\"font-family: Montserrat, sans-serif;\"></div>', '{{amount}} {{site_currency}} payment request via {{method_name}} has been submitted. Charge: {{charge}} . Trx: {{trx}}', '{{amount}} {{site_currency}} payment request via {{method_name}} has been submitted. Charge: {{charge}} . Trx: {{trx}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:42:53'),
(7, 'PASS_RESET_CODE', 'Password - Reset - Code', 'Password Reset', NULL, '<div style=\"font-family: Montserrat, sans-serif;\">We have received a request to reset the password for your account on&nbsp;<span style=\"font-weight: bolder;\">{{time}} .<br></span></div><div style=\"font-family: Montserrat, sans-serif;\">Requested From IP:&nbsp;<span style=\"font-weight: bolder;\">{{ip}}</span>&nbsp;using&nbsp;<span style=\"font-weight: bolder;\">{{browser}}</span>&nbsp;on&nbsp;<span style=\"font-weight: bolder;\">{{operating_system}}&nbsp;</span>.</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><br style=\"font-family: Montserrat, sans-serif;\"><div style=\"font-family: Montserrat, sans-serif;\"><div>Your account recovery code is:&nbsp;&nbsp;&nbsp;<font size=\"6\"><span style=\"font-weight: bolder;\">{{code}}</span></font></div><div><br></div></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><div><font size=\"4\" color=\"#CC0000\"><br></font></div>', 'Your account recovery code is: {{code}}', 'Your account recovery code is: {{code}}', '{\"code\":\"Verification code for password reset\",\"ip\":\"IP address of the user\",\"browser\":\"Browser of the user\",\"operating_system\":\"Operating system of the user\",\"time\":\"Time of the request\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-11-14 06:48:38'),
(8, 'PASS_RESET_DONE', 'Password - Reset - Confirmation', 'You have reset your password', NULL, '<p style=\"font-family: Montserrat, sans-serif;\">You have successfully reset your password.</p><p style=\"font-family: Montserrat, sans-serif;\">You changed from&nbsp; IP:&nbsp;<span style=\"font-weight: bolder;\">{{ip}}</span>&nbsp;using&nbsp;<span style=\"font-weight: bolder;\">{{browser}}</span>&nbsp;on&nbsp;<span style=\"font-weight: bolder;\">{{operating_system}}&nbsp;</span>&nbsp;on&nbsp;<span style=\"font-weight: bolder;\">{{time}}</span></p><p style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></p><p style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><font color=\"#ff0000\">If you did not change that, please contact us as soon as possible.</font></span></p>', 'Your password has been changed successfully', NULL, '{\"ip\":\"IP address of the user\",\"browser\":\"Browser of the user\",\"operating_system\":\"Operating system of the user\",\"time\":\"Time of the request\"}', 1, NULL, NULL, 1, NULL, 0, '2021-11-03 12:00:00', '2022-04-05 03:46:35'),
(9, 'ADMIN_SUPPORT_REPLY', 'Support - Reply', 'Reply Support Ticket', NULL, '<div><p><span data-mce-style=\"font-size: 11pt;\" style=\"font-size: 11pt;\"><span style=\"font-weight: bolder;\">A member from our support team has replied to the following ticket:</span></span></p><p><span style=\"font-weight: bolder;\"><span data-mce-style=\"font-size: 11pt;\" style=\"font-size: 11pt;\"><span style=\"font-weight: bolder;\"><br></span></span></span></p><p><span style=\"font-weight: bolder;\">[Ticket#{{ticket_id}}] {{ticket_subject}}<br><br>Click here to reply:&nbsp; {{link}}</span></p><p>----------------------------------------------</p><p>Here is the reply :<br></p><p>{{reply}}<br></p></div><div><br style=\"font-family: Montserrat, sans-serif;\"></div>', 'Your Ticket#{{ticket_id}} :  {{ticket_subject}} has been replied.', NULL, '{\"ticket_id\":\"ID of the support ticket\",\"ticket_subject\":\"Subject  of the support ticket\",\"reply\":\"Reply made by the admin\",\"link\":\"URL to view the support ticket\"}', 1, NULL, NULL, 1, NULL, 0, '2021-11-03 12:00:00', '2022-03-20 20:47:51'),
(10, 'EVER_CODE', 'Verification - Email', 'Please verify your email address', NULL, '<br><div><div style=\"font-family: Montserrat, sans-serif;\">Thanks For joining us.<br></div><div style=\"font-family: Montserrat, sans-serif;\">Please use the below code to verify your email address.<br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Your email verification code is:<font size=\"6\"><span style=\"font-weight: bolder;\">&nbsp;{{code}}</span></font></div></div>', '---', NULL, '{\"code\":\"Email verification code\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2022-04-03 02:32:07'),
(11, 'SVER_CODE', 'Verification - SMS', 'Verify Your Mobile Number', NULL, '---', 'Your phone verification code is: {{code}}', NULL, '{\"code\":\"SMS Verification Code\"}', 0, NULL, NULL, 1, NULL, 0, '2021-11-03 12:00:00', '2022-03-20 19:24:37'),
(15, 'DEFAULT', 'Default Template', '{{subject}}', NULL, '{{message}}', '{{message}}', '{{message}}', '{\"subject\":\"Subject\",\"message\":\"Message\"}', 1, NULL, NULL, 1, NULL, 0, '2019-09-14 13:14:22', '2024-10-03 04:38:20'),
(18, 'ORDER_ON_PROCESSING_CONFIRMATION', 'Send Order On Processing Alert', 'Order On Processing Alert', NULL, 'Greetings from {{site_name}} Your Order is on processed now get ready to receive your products.\r\n\r\nYour Order ID: {{order_id}}', 'Greetings from {{site_name}}\r\nYour Order is on processed now get ready to receive your products.\r\n\r\nYour Order ID: {{order_id}}', 'Greetings from {{site_name}}\r\n{{order_id}} order is on processed now get ready to receive your products.', '{\"order_id\":\"Order ID\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:46:40'),
(19, 'ORDER_DISPATCHED_CONFIRMATION', 'Send Order Dispatched Alert', 'Order Dispatched Alert', NULL, 'Greetings from {{site_name}}\r\nYour Order has been dispatched please receive your products.\r\n\r\nYour Order ID: {{order_id}}', 'Greetings from {{site_name}}\r\nYour Order has been dispatched please receive your products.\r\n\r\nYour Order ID: {{order_id}}', 'Greetings from {{site_name}}\r\n{{order_id}} order has been dispatched please receive your products.', '{\"order_id\":\"Order ID\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:46:09'),
(20, 'ORDER_CANCELLATION_CONFIRMATION', 'Send Cancellation Alert', 'Cancellation Alert', NULL, 'Greetings from {{site_name}}. We are sorry to say that we couldn\'<span style=\"color: rgb(33, 37, 41); font-size: 1rem;\">t accept your order now.&nbsp; <br>Your order has been canceled.<br><br>Your Order ID: {{order_id}}</span>', 'Greetings from {{site_name}}. \r\n\r\nYour order will be canceled.....\r\n\r\nYour Order ID: {{order_id}}', '{{order_id}} order has been canceled by {{site_name}}', '{\"order_id\":\"Order ID\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:44:13'),
(22, 'ORDER_DELIVERY_CONFIRMATION', 'Send Order Delivery Confirmation', 'Order Delivery Confirmation', NULL, 'Greetings from {{site_name}}\r\nYour order has been delivered. Thanks for your purchase from us.\r\nOrder Id :{{order_id}}', 'Greetings from {{site_name}}\r\nYour order has been delivered. Thanks for your purchase from us.\r\nOrder Id :{{order_id}}', '{{order_id}} order has been delivered from {{site_name}}.', '{\"trx\":\"Transaction Number\", \"order_id\":\"Order Track Number\",\"charge\":\"Charge Amount\"}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-03 04:45:30'),
(23, 'WELCOME_MESSAGE', 'Welcome Message To A Customer', 'Welcome Message', NULL, 'Hello {{fullname}}, Welcome to {{site_name}}!', 'Hello {{user_name}} Welcome to {{site_name}}!', NULL, '{\"fullname\":\"fullname\"}', 1, NULL, NULL, 1, NULL, 0, '2021-11-03 12:00:00', '2024-10-10 03:12:23'),
(24, 'DOWNLOAD_DIGITAL_PRODUCT', 'Digital Product is Ready for Download', 'Your digital product is now available for download', NULL, 'Thank you for your purchase!&nbsp;<span style=\"color: var(--bs-card-color); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\">We are excited to inform you that your digital product is now available for download.&nbsp;</span><div><span style=\"color: var(--bs-card-color); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\">Please log in to your account on our website to access and download your product at your convenience.&nbsp;</span></div><div><span style=\"color: var(--bs-card-color); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\"><br></span></div><div><span style=\"color: var(--bs-card-color); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\">If you need any assistance, feel free to contact us.&nbsp;</span></div><div><span style=\"color: var(--bs-card-color); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\"><br></span></div><div><span style=\"color: var(--bs-card-color); background-color: var(--bs-card-bg); font-size: 1rem; text-align: var(--bs-body-text-align);\">&nbsp;Thank you for choosing us, and we hope you enjoy your new digital product!</span></div>', 'Thank you for your purchase! We are excited to inform you that your digital product is now available for download. \r\nPlease log in to your account on our website to access and download your product at your convenience. \r\n\r\nIf you need any assistance, feel free to contact us. \r\n\r\n Thank you for choosing us, and we hope you enjoy your new digital product!', 'Thank you for your purchase! We are excited to inform you that your digital product is now available for download. \r\nPlease log in to your account on our website to access and download your product at your convenience. \r\n\r\nIf you need any assistance, feel free to contact us. \r\n\r\n Thank you for choosing us, and we hope you enjoy your new digital product!', '{}', 1, NULL, NULL, 0, NULL, 0, '2021-11-03 12:00:00', '2024-10-01 04:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `unique_key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=fixed, 2=percent',
  `amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `starts_from` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `show_banner` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `show_countdown` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=disabled, 1=enabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `unique_key`, `name`, `banner`, `discount_type`, `amount`, `starts_from`, `ends_at`, `show_banner`, `show_countdown`, `status`, `created_at`, `updated_at`) VALUES
(1, 'offer_1', '7567', '677b7f33e94081736146739.webp', 2, 10.00000000, '2025-01-06 05:00:00', '2025-01-29 05:00:00', 0, 0, 1, '2025-01-06 17:58:59', '2025-01-06 17:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `shipping_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shipping_method_id` int UNSIGNED NOT NULL DEFAULT '0',
  `shipping_charge` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `subtotal` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `total_amount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `is_cod` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `payment_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=Not Paid ,1 = Paid',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = processing, 2=dispatched, 3=delivered, 4= canceled_by_admin, 9 = returned',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL DEFAULT '0',
  `product_id` int UNSIGNED NOT NULL DEFAULT '0',
  `product_variant_id` int UNSIGNED NOT NULL DEFAULT '0',
  `quantity` int UNSIGNED NOT NULL DEFAULT '0',
  `price` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `discount` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'template name',
  `secs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `page_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `tempname`, `secs`, `seo_content`, `page_name`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'Home', '/', 'templates.north_hair.', '[\"home_banner\",\"discover_more\"]', NULL, 'home', 1, '2023-12-02 00:31:53', '2025-01-20 07:54:40'),
(2, 'Mens Stock', 'mens_stock_hair_system', 'templates.north_hair.', '[\"mens_stock_hair_system_banner\",\"mens_stock_hair_system_product\",\"mens_stock_hair_system_faq\"]', NULL, NULL, 1, '2023-12-02 00:31:53', '2025-01-20 12:12:23'),
(6, 'Mens', 'mens_hair_system', 'templates.north_hair.', '[\"mens_hair_system_banner\",\"mens_hair_system_product\",\"mens_hair_system_comparison\",\"mens_hair_system_faq\"]', NULL, NULL, 1, '2023-12-02 00:31:53', '2025-01-20 10:10:01'),
(7, 'Mens Custom', 'mens_custom_hair_system', 'templates.north_hair.', '[\"mens_custom_hair_system_product\",\"mens_custom_hair_system_helpme\",\"mens_custom_hair_system_faq\",\"mens_custom_hair_system_banner\"]', NULL, NULL, 1, '2023-12-02 00:31:53', '2025-01-21 05:31:11'),
(8, 'Mens Repear', 'mens_repear_hair_system', 'templates.north_hair.', '[\"mens_repear_hair_system_banner\"]', NULL, NULL, 1, '2023-12-02 00:31:53', '2025-01-21 07:06:00'),
(10, 'Mens Afro', 'mens_afro_hair_system', 'templates.north_hair.', '[\"mens_afro_hair_system_banner\",\"mens_afro_hair_system_product\",\"mens_afro_hair_system_faq\"]', NULL, NULL, 1, '2023-12-02 00:31:53', '2025-01-21 07:27:47'),
(11, 'Mens Lace', 'mens_lace_hair_system', 'templates.north_hair.', '[\"mens_lace_hair_system_banner\",\"mens_lace_hair_system_product\",\"mens_lace_hair_system_comparison\",\"mens_lace_hair_system_faq\"]', NULL, NULL, 1, '2023-12-02 00:31:53', '2025-01-21 08:20:52'),
(12, 'Mens Skin', 'mens_skin_hair_system', 'templates.north_hair.', '[\"mens_skin_hair_system_banner\",\"mens_skin_hair_system_product\",\"mens_skin_hair_system_comparison\",\"mens_skin_hair_system_faq\"]', NULL, NULL, 1, NULL, '2025-01-21 09:44:26'),
(13, 'Mens Mono', 'mens_mono_hair_system', 'templates.north_hair.', '[\"mens_mono_hair_system_banner\",\"mens_mono_hair_system_product\",\"mens_mono_hair_system_comparison\",\"mens_mono_hair_system_faq\"]', NULL, NULL, 1, NULL, '2025-01-21 10:05:47'),
(14, 'Mens Frontal', 'mens_frontal_hair_system', 'templates.north_hair.', '[\"mens_frontal_hair_system_banner\",\"mens_frontal_hair_system_product\",\"mens_frontal_hair_system_faq\"]', NULL, NULL, 0, NULL, '2025-01-21 10:51:14'),
(15, 'Mens Crown', 'mens_crown_hair_system', 'templates.north_hair.', '[\"mens_crown_hair_system_banner\",\"mens_crown_hair_system_product\",\"mens_crown_hair_system_faq\"]', NULL, NULL, 0, NULL, '2025-01-21 11:13:12'),
(16, 'Mens Cap', 'mens_cap_hair_system', 'templates.north_hair.', '[\"mens_cap_hair_system_banner\",\"mens_cap_hair_system_product\",\"mens_cap_hair_system_faq\"]', NULL, NULL, 0, NULL, '2025-01-21 11:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_id` int UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` decimal(28,8) DEFAULT NULL,
  `sale_price` decimal(28,8) DEFAULT NULL,
  `offer_id` int UNSIGNED NOT NULL DEFAULT '0',
  `sale_starts_from` timestamp NULL DEFAULT NULL,
  `sale_ends_at` timestamp NULL DEFAULT NULL,
  `main_image_id` int UNSIGNED DEFAULT '0',
  `video_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `product_type_id` int UNSIGNED NOT NULL DEFAULT '0',
  `specification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `extra_descriptions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `track_inventory` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `show_stock` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `in_stock` int UNSIGNED DEFAULT '0',
  `alert_quantity` int UNSIGNED NOT NULL DEFAULT '0',
  `product_type` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_downloadable` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `delivery_type` tinyint(1) DEFAULT NULL COMMENT '1 = Instant Download, 2 = Download After Sale',
  `total_rating` int UNSIGNED NOT NULL DEFAULT '0',
  `total_review` int UNSIGNED NOT NULL DEFAULT '0',
  `avg_rating` decimal(5,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `is_showable` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT '1 = Showable in product menu, 0 = not showable in product menu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `name`, `slug`, `sku`, `regular_price`, `sale_price`, `offer_id`, `sale_starts_from`, `sale_ends_at`, `main_image_id`, `video_link`, `description`, `summary`, `product_type_id`, `specification`, `extra_descriptions`, `track_inventory`, `show_stock`, `in_stock`, `alert_quantity`, `product_type`, `is_published`, `is_downloadable`, `delivery_type`, `total_rating`, `total_review`, `avg_rating`, `meta_title`, `meta_description`, `meta_keywords`, `is_showable`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Iphone', 'iphone', '789', 600.00000000, 599.00000000, 0, NULL, NULL, 0, NULL, '<br>', NULL, 0, NULL, NULL, 1, 1, 60, 10, 1, 1, 0, NULL, 0, 0, 0.00, NULL, NULL, NULL, 1, '2025-01-09 06:10:24', '2025-01-09 06:12:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_collections`
--

CREATE TABLE `product_collections` (
  `id` bigint NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_position` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_ids` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `product_id` int UNSIGNED NOT NULL DEFAULT '0',
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rating` int NOT NULL DEFAULT '0',
  `is_viewed` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specifications` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manage_stock` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `track_inventory` tinyint UNSIGNED DEFAULT '0',
  `show_stock` tinyint UNSIGNED DEFAULT '0',
  `in_stock` int UNSIGNED DEFAULT '0',
  `alert_quantity` int UNSIGNED NOT NULL DEFAULT '0',
  `attribute_values` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'An array of attribute value',
  `regular_price` decimal(28,8) DEFAULT NULL,
  `sale_price` decimal(28,8) DEFAULT NULL,
  `sale_starts_from` timestamp NULL DEFAULT NULL,
  `sale_ends_at` timestamp NULL DEFAULT NULL,
  `main_image_id` int UNSIGNED NOT NULL DEFAULT '0',
  `is_published` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotional_banners`
--

CREATE TABLE `promotional_banners` (
  `id` bigint NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0' COMMENT '1 => single image banner,\r\n2 => double iamge banner\r\n3 => triple mage banner',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotional_banner_images`
--

CREATE TABLE `promotional_banner_images` (
  `id` bigint NOT NULL,
  `promotional_banner_id` int UNSIGNED NOT NULL DEFAULT '0',
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `label` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `charge` decimal(28,8) NOT NULL DEFAULT '0.00000000',
  `shipping_time` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'in days',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_logs`
--

CREATE TABLE `stock_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL DEFAULT '0',
  `product_variant_id` int UNSIGNED NOT NULL DEFAULT '0',
  `order_id` int UNSIGNED DEFAULT NULL,
  `change_quantity` int NOT NULL DEFAULT '0',
  `post_quantity` int NOT NULL DEFAULT '0',
  `remark` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_logs`
--

INSERT INTO `stock_logs` (`id`, `product_id`, `product_variant_id`, `order_id`, `change_quantity`, `post_quantity`, `remark`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, 60, 60, '+', '60 products added', '2025-01-09 06:12:00', '2025-01-09 06:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_attachments`
--

CREATE TABLE `support_attachments` (
  `id` bigint UNSIGNED NOT NULL,
  `support_message_id` int UNSIGNED NOT NULL DEFAULT '0',
  `attachment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `support_ticket_id` int UNSIGNED NOT NULL DEFAULT '0',
  `admin_id` int UNSIGNED NOT NULL DEFAULT '0',
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed',
  `priority` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = Low, 2 = medium, 3 = heigh',
  `last_reply` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `update_logs`
--

CREATE TABLE `update_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_log` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_logs`
--

INSERT INTO `update_logs` (`id`, `version`, `update_log`, `created_at`, `updated_at`) VALUES
(1, '2.0', '[\n    \"[ADD] Login with Social Accounts (Google, Facebook, LinkedIn)\",\n    \"[ADD] Configure XML sitemap\",\n    \"[ADD] Configure robots.txt\",\n    \"[ADD] Binance Payment Gateway\",\n    \"[ADD] Aamarpay Payment Gateway\",\n    \"[ADD] SslCommerz Payment Gateway\",\n    \"[ADD] Authorize.net Payment Gateway\",\n    \"[ADD] Mercado Pago Payment Gateway\",\n    \"[ADD] Now Payments Payment Gateway\",\n    \"[ADD] NMI Payment Gateway\",\n    \"[ADD] Slug management for Policy Pages\",\n    \"[ADD] SEO Content Management for Policy Pages\",\n    \"[ADD] Form Generator\",\n    \"[ADD] Automatic System Update\",\n    \"[ADD] Product Type to Specify the Product and to Manage the Specification\",\n    \"[ADD] Is Featured and Feature in Banner Configuration in Categories\",\n    \"[ADD] Unique Slug Management for Categories\",\n    \"[ADD] Attribute Values\",\n    \"[ADD] Media Uploader for Product Images\",\n    \"[ADD] Assign Gallery Images to Attributes\",\n    \"[ADD] Variant-Wise Gallery Images\",\n    \"[ADD] Downloadable Product Feature\",\n    \"[ADD] New Template for Storefront/Website\",\n    \"[ADD] Low Stock Product List\",\n    \"[ADD] Out of Stock Product List\",\n    \"[ADD] Top Selling Product List\",\n    \"[ADD] Review View Flag from Admin Panel\",\n    \"[ADD] Generate Coupon Code Button in Admin Panel\",\n    \"[ADD] Excluding On-Sale Items from Coupon\",\n    \"[ADD] Upload Banner for Offers\",\n    \"[ADD] Banner Showing Configuration\",\n    \"[ADD] Showing Countdown Configuration\",\n    \"[ADD] Managing Page Sections\",\n    \"[ADD] Page-Wise SEO Content\",\n    \"[ADD] Maintenance Mode\",\n    \"[ADD] Custom CSS Management from Admin Panel to Customize the Website\",\n    \"[ADD] Google Analytics\",\n    \"[ADD] Google Recaptcha\",\n    \"[ADD] Tawk.to for Live Chat\",\n    \"[ADD] Promo Banners Management\",\n    \"[ADD] Product Collection Management to Show Products Section-Wise on the Website\",\n    \"[ADD] Menu Builder to Customize the Existing Menus on Header and Footer\",\n    \"[ADD] Dynamic Preloader\",\n    \"[ADD] Push Notification\",\n    \"[ADD] Global SMS Template\",\n    \"[ADD] Global Push Notification Template\",\n    \"[ADD] Copy Shortcodes for Notification Templates\",\n    \"[ADD] Clickatell SMS Gateway\",\n    \"[ADD] Infobip SMS Gateway\",\n    \"[ADD] MessageBird SMS Gateway\",\n    \"[ADD] Nexmo Configuration\",\n    \"[ADD] SMS Broadcast\",\n    \"[ADD] Twilio SMS Gateway\",\n    \"[ADD] TextMagic SMS Gateway\",\n    \"[ADD] Custom API Configuration for SMS Gateway\",\n    \"[ADD] Force SSL Configuration for Website\",\n    \"[ADD] Agree Policy Configuration\",\n    \"[ADD] Force Secure Password\",\n    \"[ADD] Multilingual Support Configuration\",\n    \"[ADD] Product Wishlist Configuration to Control if the Site Supports the Wishlist Feature\",\n    \"[ADD] Product Compare Configuration to Control if the Site Supports the Compare Feature\",\n    \"[ADD] Subscribe Newsletter Configuration to Control if the Site Supports the Newsletter Feature\",\n    \"[ADD] Product Rating & Review Configuration to Control if the Site Supports the Review Feature\",\n    \"[ADD] Notification History in Report Menu\",\n    \"[ADD] User Notifications\",\n    \"[ADD] Show Selected Products on the Products Page\",\n    \"[ADD] Sort Products by Price, Latest, Oldest\",\n    \"[ADD] Filter Products by Attributes like Color, Size, Rating, etc.\",\n    \"[ADD] About Us Page\",\n    \"[ADD] Save Shipping Address from User Panel\",\n    \"[UPDATE] Frontend Contents Management\",\n    \"[UPDATE] Admin Panel UI/UX\",\n    \"[UPDATE] Admin Dashboard\",\n    \"[UPDATE] \\\"Order Count\\\" & \\\"Total Shopping\\\" in Customers Table\",\n    \"[UPDATE] Insights in Customer Details Pages\",\n    \"[UPDATE] Attributes, Categories, and Brands Moved from Product Menu to Product Config Menu\",\n    \"[UPDATE] Top Brand Configuration Changed to Featured Brand\",\n    \"[UPDATE] Attribute Management\",\n    \"[UPDATE] Product Add Form\",\n    \"[UPDATE] Product Variant Generation\",\n    \"[UPDATE] Product Variant-Wise Price, Stock & Image Management\",\n    \"[UPDATE] Product Specification Management\",\n    \"[UPDATE] More Shortcodes for Global Notification Templates\",\n    \"[UPDATE] Separate System Configuration Menu\",\n    \"[UPDATE] Checkout Process\",\n    \"[UPDATE] All Categories Page in the Frontend\",\n    \"[REMOVED] Top Category, Special Category, Filter Menu Configuration in Categories\",\n    \"[REMOVED] Featured & Special Product Configuration (Replaced by Product Collection Feature)\",\n    \"[REMOVED] Old Frontend Template\",\n    \"[PATCH] Laravel 11\",\n    \"[PATCH] PHP 8.3\",\n    \"[PATCH] Latest System Patch\"\n]', '2025-01-02 15:03:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dial_code` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'contains full address',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: banned, 1: active',
  `ev` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: email unverified, 1: email verified',
  `sv` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: mobile unverified, 1: mobile verified',
  `profile_complete` tinyint(1) NOT NULL DEFAULT '0',
  `ver_code` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'stores verification code',
  `ver_code_send_at` datetime DEFAULT NULL COMMENT 'verification send time',
  `ban_reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `dial_code`, `country_code`, `mobile`, `password`, `country_name`, `city`, `state`, `zip`, `image`, `address`, `status`, `ev`, `sv`, `profile_complete`, `ver_code`, `ver_code_send_at`, `ban_reason`, `remember_token`, `provider`, `provider_id`, `created_at`, `updated_at`) VALUES
(1, 'MD', 'shamim', NULL, 'dev.shamim0@gmail.com', NULL, NULL, NULL, '$2y$12$5r7J7KDLiRrx14e.8KRQR.iPLnIxuck7v/PJHkiAqpoVs3gv/ASwO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0, NULL, NULL, NULL, NULL, 'google', '101624181050230430394', '2025-01-05 00:00:34', '2025-01-05 00:00:34'),
(2, 'Rafaet Hossain )', '(Rafu)', 'rafusoft', 'rafu@rafusoft.com', '93', 'AF', '01867090247', '$2y$12$sQuCI8mbkOyiIuLNBW18quaW5e7YiwGHRgfawVx7iIJXKOX5m3Kqy', 'Afghanistan', 'Chittagong', 'Raozan', '4346', NULL, 'Chittagong,Raozan,dewanpur', 1, 1, 1, 1, NULL, NULL, NULL, 'vOP5Ra8aRJqvpG4urbfrp0spQ3FufPmqRUcm89vJi2UGmokPo2ZHl0pIWrWg', 'google', '112533986109847157805', '2025-01-05 00:27:45', '2025-01-09 06:14:09'),
(3, 'MD Shamim', 'Islam', NULL, 'shamimislam@rafusoft.com', NULL, NULL, NULL, '$2y$12$C1Mz1fQYSneGas4A3e3adOI8/yhuiwinfIlRgwQauzs2xYyLCqgDW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0, NULL, NULL, NULL, NULL, 'google', '102904451142107518413', '2025-01-05 01:15:43', '2025-01-05 01:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_ip` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `user_id`, `user_ip`, `city`, `country`, `country_code`, `longitude`, `latitude`, `browser`, `os`, `created_at`, `updated_at`) VALUES
(1, 1, '27.147.197.208', 'Dhaka', 'Bangladesh', 'BD', '90.3657', '23.7731', 'Chrome', 'Windows 10', '2025-01-05 00:00:35', '2025-01-05 00:00:35'),
(2, 2, '103.197.153.61', '', 'Bangladesh', 'BD', '90.3742', '23.7018', 'Chrome', 'Windows 10', '2025-01-05 00:27:46', '2025-01-05 00:27:46'),
(3, 3, '27.147.197.208', 'Dhaka', 'Bangladesh', 'BD', '90.3657', '23.7731', 'Firefox', 'Windows 10', '2025-01-05 01:15:43', '2025-01-05 01:15:43'),
(4, 2, '127.0.0.1', '', '', '', '', '', 'Chrome', 'Windows 10', '2025-01-09 06:13:18', '2025-01-09 06:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` bigint NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `click_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `variant_media`
--

CREATE TABLE `variant_media` (
  `variant_id` bigint UNSIGNED NOT NULL,
  `media_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT '0',
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`username`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_coupons`
--
ALTER TABLE `applied_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_value_product`
--
ALTER TABLE `attribute_value_product`
  ADD KEY `attribute_value_id` (`attribute_value_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `category_coupon`
--
ALTER TABLE `category_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_categories_coupon_id_foreign` (`coupon_id`),
  ADD KEY `coupons_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupon_code` (`coupon_code`);

--
-- Indexes for table `coupon_product`
--
ALTER TABLE `coupon_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_products_coupon_id_foreign` (`coupon_id`),
  ADD KEY `coupons_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_tokens`
--
ALTER TABLE `device_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_files`
--
ALTER TABLE `digital_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extensions`
--
ALTER TABLE `extensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `gateway_currencies`
--
ALTER TABLE `gateway_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_product`
--
ALTER TABLE `media_product`
  ADD PRIMARY KEY (`product_id`,`media_id`),
  ADD KEY `product_media_media_id_foreign` (`media_id`);

--
-- Indexes for table `media_product_variant`
--
ALTER TABLE `media_product_variant`
  ADD KEY `media_product_variant_media_id_foreign` (`media_id`),
  ADD KEY `media_product_variant_product_variant_id_foreign` (`product_variant_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_logs`
--
ALTER TABLE `notification_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_templates`
--
ALTER TABLE `notification_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `products_brand_id_index` (`brand_id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_product_id_foreign` (`product_id`),
  ADD KEY `products_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_collections`
--
ALTER TABLE `product_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_image_id` (`main_image_id`);

--
-- Indexes for table `promotional_banners`
--
ALTER TABLE `promotional_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_banner_images`
--
ALTER TABLE `promotional_banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_logs`
--
ALTER TABLE `stock_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_variant_id` (`product_variant_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_attachments`
--
ALTER TABLE `support_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_logs`
--
ALTER TABLE `update_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variant_media`
--
ALTER TABLE `variant_media`
  ADD PRIMARY KEY (`variant_id`,`media_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_coupons`
--
ALTER TABLE `applied_coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attribute_product`
--
ALTER TABLE `attribute_product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_coupon`
--
ALTER TABLE `category_coupon`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_product`
--
ALTER TABLE `coupon_product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `device_tokens`
--
ALTER TABLE `device_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `digital_files`
--
ALTER TABLE `digital_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `gateway_currencies`
--
ALTER TABLE `gateway_currencies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_logs`
--
ALTER TABLE `notification_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_templates`
--
ALTER TABLE `notification_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_collections`
--
ALTER TABLE `product_collections`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotional_banners`
--
ALTER TABLE `promotional_banners`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotional_banner_images`
--
ALTER TABLE `promotional_banner_images`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_logs`
--
ALTER TABLE `stock_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_attachments`
--
ALTER TABLE `support_attachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_logs`
--
ALTER TABLE `update_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_coupon`
--
ALTER TABLE `category_coupon`
  ADD CONSTRAINT `coupons_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupons_categories_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_product`
--
ALTER TABLE `coupon_product`
  ADD CONSTRAINT `coupons_products_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupons_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media_product`
--
ALTER TABLE `media_product`
  ADD CONSTRAINT `product_media_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_media_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `products_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
