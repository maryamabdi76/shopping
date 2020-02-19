-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 02:16 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `userid` bigint(20) UNSIGNED NOT NULL,
  `kalaid` int(11) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`) VALUES
(1, 'مانتو'),
(4, 'شال'),
(5, 'پیراهن'),
(6, 'شلوار'),
(7, 'کیف'),
(8, 'کفش');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `code` varchar(50) COLLATE utf8_bin NOT NULL,
  `value` varchar(7) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `factor`
--

CREATE TABLE `factor` (
  `id` int(11) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `sum` varchar(10) COLLATE utf8_bin NOT NULL,
  `fdate` varchar(13) COLLATE utf8_bin NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` varchar(10) COLLATE utf8_bin NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `factorkala`
--

CREATE TABLE `factorkala` (
  `kalaid` int(11) NOT NULL,
  `factorid` int(11) NOT NULL,
  `num` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'خانم'),
(2, 'آقا');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imagename` varchar(100) COLLATE utf8_bin NOT NULL,
  `kalaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imagename`, `kalaid`) VALUES
(1, 'jolo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kala`
--

CREATE TABLE `kala` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `price` varchar(10) COLLATE utf8_bin NOT NULL,
  `num` int(11) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kala`
--

INSERT INTO `kala` (`id`, `name`, `description`, `categoryid`, `price`, `num`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'شکوفه', 'نخی \r\nتابستانه\r\nآبی\r\nدکمه دار', 1, '200000', 5, '2020-01-22', '2020-01-22', NULL),
(3, 'پرلون', 'چرم\r\nاناری روشن', 7, '600000', 10, '2020-01-15', '2020-01-15', NULL),
(4, 'مرجان', 'مرجان', 4, '11000', 10, '2020-02-18', '2020-02-18', NULL),
(5, 'نرگس', 'جنس چرم', 8, '250000', 10, '2020-02-18', '2020-02-18', NULL);

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
(4, '2016_01_04_173148_create_admin_tables', 2);

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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `kalaid` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(4000) COLLATE utf8_bin DEFAULT NULL,
  `liked` int(11) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `userid`, `kalaid`, `rating`, `comment`, `liked`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 4, 3, 'محصول خوبی بود', 0, '2020-02-17', '2020-02-18', NULL),
(2, 7, 3, 4, 'راضی بودم', 1, '2020-02-18', '2020-02-18', NULL),
(3, 1, 1, 5, 'بسیار عالی', 0, '2020-02-18', '2020-02-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `sail`
--

CREATE TABLE `sail` (
  `kalaid` int(11) NOT NULL,
  `newprice` varchar(10) COLLATE utf8_bin NOT NULL,
  `exdate` varchar(13) COLLATE utf8_bin NOT NULL COMMENT 'expire date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `useridq` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_bin NOT NULL,
  `answer` text COLLATE utf8_bin DEFAULT NULL,
  `userida` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `factorid` int(11) NOT NULL,
  `pcode` varchar(25) COLLATE utf8_bin NOT NULL COMMENT 'شناسه پرداخت',
  `tdate` varchar(13) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `trantype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `transtatus`
--

CREATE TABLE `transtatus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `trantype`
--

CREATE TABLE `trantype` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `id` int(11) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `cellphone` varchar(11) COLLATE utf8_bin NOT NULL,
  `post` varchar(10) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `userid` bigint(20) UNSIGNED NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`userid`, `roleid`) VALUES
(1, 1),
(7, 2),
(118, 2);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` int(11) DEFAULT 1,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '09912013220'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gender`, `username`, `mobile`) VALUES
(1, 'مریم عبدی', 'maryamabdi9776@gmail.com', NULL, '$2y$10$nf/K9s/uOyWBkhArSTQCpOlumq92OaHXKF06Px5./p.Vkpy1ZjmhK', NULL, '2020-01-05 08:05:07', '2020-01-06 03:25:17', 1, 'Mari137667', '09912013220'),
(7, 'سارا کریمی', 'sara.karimi.j@gmail.com', NULL, '$2y$10$kCvexK4hNUrjq7z/DlAl0ugCgaeqy8h23r2KQ0sY0hFnQ.QYBFNU.', NULL, '2020-01-08 01:35:00', '2020-01-08 07:05:13', 1, 'Sara.k.j', '09912013222'),
(8, 'Leonie Bechtelar', 'tabitha.spinka@example.com', '2020-01-09 02:36:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0ZnZQm1FOr', '2020-01-09 02:36:22', '2020-01-09 03:01:13', 2, 'Leonie8', '09912013220'),
(9, 'Lee Littel DVM', 'precious02@example.com', '2020-01-09 02:36:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IuymWllmuf', '2020-01-09 02:36:22', '2020-01-09 03:01:36', 1, 'Lee9', '09912013220'),
(10, 'Sharon Von', 'xbecker@example.org', '2020-01-09 02:36:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'j6taGGXTR3', '2020-01-09 02:36:22', '2020-01-09 03:02:05', 2, 'Sharon10', '09912013220'),
(11, 'Elmer McGlynn I', 'jake.greenfelder@example.org', '2020-01-09 02:36:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2zJBXMdKto', '2020-01-09 02:36:22', '2020-01-09 02:36:22', 1, 'default', '09912013220'),
(12, 'Vivianne Kuhn I', 'lkoelpin@example.net', '2020-01-09 02:36:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'llJRpCjlHB', '2020-01-09 02:36:22', '2020-01-09 02:36:22', 1, 'default', '09912013220'),
(13, 'Albert Beier DVM', 'oconnell.mitchell@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TS8u0TAjYp', '2020-01-09 02:39:17', '2020-01-09 03:00:53', 2, 'default', '09912013220'),
(14, 'Jordon Willms', 'lswaniawski@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WI4MZnlo7y', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(15, 'Dr. Georgette Ziemann', 'jackeline.heidenreich@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LzxSifHZev', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(16, 'Miss Loma Lang I', 'gcormier@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9JzwPlOlzi', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(17, 'Kiley Nader I', 'rozella12@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GioIr1pgvH', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(18, 'Davonte Leuschke DVM', 'yost.sadie@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VNrTBZ0qqe', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(19, 'May Quigley', 'jailyn.tillman@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HqrRmBEdVr', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(20, 'Prof. Kristopher Daniel DVM', 'mills.elenora@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YknVWPXtyq', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(21, 'Myriam Gorczany', 'ferry.kayla@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7Ggwzmta6l', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(22, 'Guadalupe Kutch', 'glebsack@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ftlv3lwX3D', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(23, 'Pearline Hintz III', 'adalberto40@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5r92yOi0RF', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(24, 'Alexzander Runte', 'bartoletti.tessie@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zDlFYC8ZCE', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(25, 'Josefina Schmidt', 'kovacek.eugene@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E7dtQeNuhf', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(26, 'Jennie Cruickshank', 'wdurgan@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uTrqZsT5Dm', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(27, 'Sheldon Nicolas', 'laisha44@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4HYyDYbyyx', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(28, 'Abigail McLaughlin DVM', 'nprice@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NhcszrkKxO', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(29, 'Miss Felicity Gibson', 'wunsch.bonnie@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EaZh4dwOhs', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(30, 'Toney Luettgen', 'magnus02@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KtI3wVQO31', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(31, 'Kristina Torphy', 'esther96@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BqKqgW3lAJ', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(32, 'Dr. Dennis Koepp', 'melba.kub@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fp5N77aY6M', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(33, 'Reginald Huel', 'kendrick72@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'csRMG7KpHW', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(34, 'America Kautzer', 'heller.cassidy@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XOI643zglS', '2020-01-09 02:39:18', '2020-01-09 02:39:18', 1, 'default', '9912013220'),
(35, 'Serenity Powlowski', 'emmett.beer@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2qu4qxfK1d', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(36, 'Art Lebsack', 'benjamin.hauck@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A1wHbnuLWz', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(37, 'Dr. Anya Beatty Jr.', 'amely66@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cxswGl0UTm', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(38, 'Hollis Hessel', 'von.juvenal@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LGH0d1OJm8', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(39, 'Dorothea Jacobson', 'djerde@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1SXbMM7MHD', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(40, 'Davion Erdman PhD', 'quinn.strosin@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yDK36BMMBw', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(41, 'Ignacio Mayert', 'christiana.mante@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ca2G3A9CYe', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(42, 'Estella Parisian', 'linnie.reynolds@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4tURztMfjN', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(43, 'Enola Kreiger', 'oreilly.loyce@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BB0QP5W406', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(44, 'Tanner Abernathy', 'zulauf.boris@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Y7PAhf3dx1', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(45, 'Dr. Sage Wuckert MD', 'herman.holly@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qKytwYlrBN', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(46, 'Sincere Pagac', 'wiegand.kathlyn@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2l6iiVXFIS', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(47, 'Dr. Madyson Kilback V', 'szulauf@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2dEbuWvhvO', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(48, 'Meta Braun', 'kessler.russ@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VTJFe4NHCS', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(49, 'Eva Bode', 'maida01@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vGffFyt3rY', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(50, 'Hailee Ward IV', 'mia.bahringer@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Kg2b3fSd1N', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(51, 'Marlene Turcotte', 'reichel.foster@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JZsIIemq3d', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(52, 'Lyda Bradtke', 'godfrey71@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rdBBxy1nHY', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(53, 'Angelita Gibson', 'rolfson.dimitri@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b0bq5VJfCW', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(54, 'Prof. Sylvester Jenkins Sr.', 'bednar.hope@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tK488lbs0Z', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(55, 'Billy Mitchell DDS', 'flatley.orion@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'R11imKQj0T', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(56, 'Micah Jaskolski', 'javier15@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nM5HAAR5YH', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(57, 'Nash Ryan', 'collier.nickolas@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HVHRnhlysS', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(58, 'Alphonso Smith', 'loy.sanford@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AEYNJhj0Tc', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(59, 'Troy Gulgowski', 'gherman@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OHLXO8bB7U', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(60, 'Jaida Brekke', 'bartoletti.mona@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dc7B2d0eSx', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(61, 'Jovany Rohan', 'loyce.heller@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'r6OdX0pRof', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(62, 'Mr. Damon West IV', 'nelson98@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hXqtyczZwx', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(63, 'Clementina Wiegand', 'ykeebler@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bd8OqpYD60', '2020-01-09 02:39:19', '2020-01-09 02:39:19', 1, 'default', '9912013220'),
(64, 'Anabelle Marvin', 'vterry@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lfBF2XAMHS', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(65, 'Prof. Johnnie Reichert III', 'franecki.lenore@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Wono9DcvPs', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(66, 'Bryce Rath', 'noble.prohaska@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dG0oU1f9C7', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(67, 'Lavina Dicki', 'roel.thompson@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uykDbUysAa', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(68, 'Felipa Bartell', 'otis58@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1r1AXIgF8s', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(69, 'Laverne Beier', 'vsawayn@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'h74ogpmpAS', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(70, 'Maxwell Murray', 'labadie.maye@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YybEDz2CiB', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(71, 'Abigail Yundt DDS', 'dschoen@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YOnQPnYS2w', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(72, 'Ottis Larson', 'kkohler@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RYHDpewcfw', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(73, 'Donnie Weber', 'bayer.malinda@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QSgjX4pq2A', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(74, 'Wilber Botsford', 'maiya.graham@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u7KyefphTj', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(75, 'Mr. Lane Stroman DDS', 'xprosacco@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fqHKn6ycLX', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(76, 'Prof. Destany Kris II', 'sheidenreich@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2Vfi1kNNvE', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(77, 'Erica Barrows', 'meredith25@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TV2h1IGKpg', '2020-01-09 02:39:20', '2020-01-09 02:39:20', 1, 'default', '9912013220'),
(78, 'Jennings Stracke', 'xnitzsche@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kYv8JKkibi', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(79, 'Lia Bergnaum DVM', 'karelle51@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vLx2ydCGdi', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(80, 'Stephan Auer', 'lacey64@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8TLjuKbHOy', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(81, 'Bernice Leffler DVM', 'roma53@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Q8IfpR1oVe', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(82, 'Miss Hailie Ziemann', 'ledner.barry@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lp1q9w5fAF', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(83, 'Kareem Paucek', 'oschmitt@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3RBebaQfyH', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(84, 'Ethelyn Prohaska', 'marietta65@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2jaus9MRID', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(85, 'Pearlie D\'Amore', 'dominic27@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cyG4fY7IQS', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(86, 'Ethan Rutherford', 'jrussel@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NlzMpmCtBJ', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(87, 'Mrs. Viva Maggio IV', 'kerluke.gloria@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gTB0MuyoHY', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(88, 'Prof. Nannie McGlynn Jr.', 'traynor@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zGxgNxYssb', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(89, 'Felix Dibbert', 'uemmerich@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6UnmA8HfTZ', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(90, 'Callie Conn', 'telly.kessler@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dy0yGbfi1o', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(91, 'Cheyenne Hodkiewicz', 'jcollins@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UAXFebXWWd', '2020-01-09 02:39:21', '2020-01-09 02:39:21', 1, 'default', '9912013220'),
(92, 'Natalie Nolan', 'jonas.watsica@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VB6OQIWjeC', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(93, 'Pedro Herzog', 'leila.stark@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IYdgNC3kdB', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(94, 'Daren Zemlak', 'christa97@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QiONLrFEiA', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(95, 'Leora Goyette', 'vconroy@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VOZuCfagCa', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(96, 'Marcos Stark', 'keara.koch@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7IPPbFY68I', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(97, 'Lorenz Rohan I', 'leannon.arno@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nJa937A9ky', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(98, 'Tyrell Franecki', 'fahey.vernie@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J40oKkgfIn', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(99, 'Dr. Cristobal Schumm', 'leonie.jacobs@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fURRrYxGoN', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(100, 'Jon Watsica', 'gerlach.helmer@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gX9b63100o', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(101, 'Maia Roob', 'pzieme@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uRfWToLb9e', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(102, 'Jaylen Kuphal', 'drew33@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gUE2DB9WLw', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(103, 'Winona Doyle', 'oren.oreilly@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DYI8OLdpUG', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(104, 'Muriel Champlin', 'jessie37@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RLzQ50P9BQ', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(105, 'Mr. Grady Schulist Jr.', 'zlind@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Qaetrx1x8y', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(106, 'Leora O\'Conner', 'heaney.katelin@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'US3aVsfq9F', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(107, 'Sophia Shields', 'haven.stiedemann@example.net', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Sn8dij5x1o', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(108, 'Jaylan Shields', 'agerhold@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LbgEBNNhbJ', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(109, 'Mrs. Assunta Dare', 'austen.lakin@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'z6IDt8oCgV', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(110, 'Paige O\'Connell', 'rlangworth@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7KH7k8zUSo', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(111, 'Dr. Serena Bernier', 'keshaun.pfeffer@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jdijywaeHs', '2020-01-09 02:39:22', '2020-01-09 02:39:22', 1, 'default', '9912013220'),
(112, 'Prof. Petra Jones', 'leonel.haag@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '18My4vO34m', '2020-01-09 02:39:23', '2020-01-09 02:39:23', 1, 'default', '9912013220'),
(113, 'Russ Cronin', 'mafalda82@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gPW092O4SD', '2020-01-09 02:39:23', '2020-01-09 02:39:23', 1, 'default', '9912013220'),
(114, 'Prof. Lily Murray III', 'qmohr@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EaVAA0iu06', '2020-01-09 02:39:23', '2020-01-09 02:39:23', 1, 'default', '9912013220'),
(115, 'Dr. Payton Veum', 'anabel73@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Sg8eLYfFYv', '2020-01-09 02:39:23', '2020-01-09 02:39:23', 1, 'default', '9912013220'),
(116, 'Rebecca Larkin', 'wolff.ethelyn@example.org', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uLuziYXZKH', '2020-01-09 02:39:23', '2020-01-09 02:39:23', 1, 'default', '9912013220'),
(117, 'Justen VonRueden', 'taryn.nikolaus@example.com', '2020-01-09 02:39:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IWHzTMiL6y', '2020-01-09 02:39:23', '2020-01-09 02:39:23', 1, 'default', '9912013220'),
(118, 'Maryam Abdi Vazvani', 'maryamvazvani@yahoo.com', NULL, '$2y$10$wV1A1N418hRgU51yLyBko.kZaaTuVyxgZVZcf4XARoxlb/6AtE5fC', NULL, '2020-02-19 03:49:50', '2020-02-19 09:39:40', 1, 'Mari', '09912013220');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `money` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`userid`,`kalaid`),
  ADD KEY `fk_basket_kala` (`kalaid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factor`
--
ALTER TABLE `factor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_factor_discount` (`discount`),
  ADD KEY `fk_factor_useraddress` (`address`),
  ADD KEY `fk_factor_users` (`userid`);

--
-- Indexes for table `factorkala`
--
ALTER TABLE `factorkala`
  ADD PRIMARY KEY (`kalaid`,`factorid`),
  ADD KEY `fk_factorkala_factor` (`factorid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_images` (`imagename`),
  ADD KEY `fk_images_kala` (`kalaid`);

--
-- Indexes for table `kala`
--
ALTER TABLE `kala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kala_category` (`categoryid`);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_review_users` (`userid`),
  ADD KEY `fk_review_kala` (`kalaid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sail`
--
ALTER TABLE `sail`
  ADD KEY `fk_sail_kala` (`kalaid`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_support_users` (`useridq`),
  ADD KEY `fk_support_users_0` (`userida`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaction_factor` (`factorid`),
  ADD KEY `fk_transaction_trantype` (`trantype`),
  ADD KEY `fk_transaction_transtatus` (`status`);

--
-- Indexes for table `transtatus`
--
ALTER TABLE `transtatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trantype`
--
ALTER TABLE `trantype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_useraddress_users` (`userid`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD KEY `fk_userrole_users` (`userid`),
  ADD KEY `fk_userrole_role` (`roleid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_users_gender_0` (`gender`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wallet_users` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factor`
--
ALTER TABLE `factor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kala`
--
ALTER TABLE `kala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transtatus`
--
ALTER TABLE `transtatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trantype`
--
ALTER TABLE `trantype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `fk_basket_kala_0` FOREIGN KEY (`kalaid`) REFERENCES `kala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_basket_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factor`
--
ALTER TABLE `factor`
  ADD CONSTRAINT `fk_factor_discount` FOREIGN KEY (`discount`) REFERENCES `discount` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factor_useraddress` FOREIGN KEY (`address`) REFERENCES `useraddress` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factor_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factorkala`
--
ALTER TABLE `factorkala`
  ADD CONSTRAINT `fk_factorkala_factor` FOREIGN KEY (`factorid`) REFERENCES `factor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factorkala_kala` FOREIGN KEY (`kalaid`) REFERENCES `kala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_kala` FOREIGN KEY (`kalaid`) REFERENCES `kala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kala`
--
ALTER TABLE `kala`
  ADD CONSTRAINT `fk_kala_category` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_kala` FOREIGN KEY (`kalaid`) REFERENCES `kala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_review_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sail`
--
ALTER TABLE `sail`
  ADD CONSTRAINT `fk_sail_kala` FOREIGN KEY (`kalaid`) REFERENCES `kala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `fk_support_users` FOREIGN KEY (`useridq`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_support_users_0` FOREIGN KEY (`userida`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_factor` FOREIGN KEY (`factorid`) REFERENCES `factor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaction_transtatus` FOREIGN KEY (`status`) REFERENCES `transtatus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaction_trantype` FOREIGN KEY (`trantype`) REFERENCES `trantype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `fk_useraddress_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userrole`
--
ALTER TABLE `userrole`
  ADD CONSTRAINT `fk_userrole_role` FOREIGN KEY (`roleid`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userrole_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_gender_0` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `fk_wallet_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
