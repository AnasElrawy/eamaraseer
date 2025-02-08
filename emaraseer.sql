-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 05:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emaraseer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@email.com|127.0.0.1', 'i:1;', 1737580521),
('admin@email.com|127.0.0.1:timer', 'i:1737580521;', 1737580521);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'حسن حسين', '01023587739', 'مرحبا', '2025-01-21 23:48:52', '2025-01-21 23:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'محمد حسين', '01148951078', 'اااا', '2025-01-21 23:44:19', '2025-01-21 23:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'هل تقدمون خدمات استثمارية؟', '<p>نعم، نقدم خدمات استثمارية متخصصة للأفراد والشركات تشمل التخطيط وتحليل السوق.</p>', '2025-01-21 22:25:09', '2025-01-21 22:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(2, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(3, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(4, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(5, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(6, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(7, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41'),
(8, 'gallery/tqYAo8vrEstwV4NP9MAFIIjgPBczmNImuaTegNho.png', '2025-01-21 22:56:41', '2025-01-21 22:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_20_210737_create_sliders_table', 2),
(5, '2025_01_20_210739_create_contacts_table', 2),
(6, '2025_01_20_210739_create_services_table', 2),
(7, '2025_01_20_210739_create_statistics_table', 2),
(8, '2025_01_20_210740_create_partners_table', 2),
(9, '2025_01_20_210740_create_projects_table', 2),
(10, '2025_01_20_210740_create_reviews_table', 2),
(11, '2025_01_20_210741_create_faqs_table', 2),
(12, '2025_01_20_210741_create_gallery_table', 2),
(13, '2025_01_20_210741_create_settings_table', 2),
(14, '2025_01_20_210742_create_consultations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(2, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(3, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(4, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(5, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(6, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(7, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17'),
(8, 'Valco Web', 'partners/1737508697.svg', '2025-01-21 23:18:17', '2025-01-21 23:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `description`, `content`, `images`, `created_at`, `updated_at`) VALUES
(1, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(2, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(3, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(4, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(5, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(6, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(7, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51'),
(8, 'شقة فاخرة', 'projects/DYXw4ammcaf9FqcuECnzqQK5aj0oYhCk4IdyADfK.png', 'القطط التلسكوبية مراجعة المكنسة الخاصة بك تنظيف نصف الدم\r\n                                        تزدهر روح شريرة. كادوجان يجد العصير معًا في كوخ تجلي الحمام الدراويش.', '<h1 class=\"\">حول هذا العقار:</h1><p>Voluptatem Accusantium Doloremque Laudantium، Totam Rem Aperiam، eaque ipsa quae ab illo invente veritatis وشبه المعماري Beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia Non numquam eius modi tempora incidunt ut Labore et dolore magnam aliquam quaerat voluptatem. هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p><p><br></p><p>هل لدينا الحد الأدنى من النشاط الذي نمارسه في الجسم ونرغب في العمل، ولا نملك أي سائل من أي سلعة مكتسبة؟ هذا أيضًا ما يجب أن أكرهه والذي يجب أن أكرهه في EA لأنه لا يوجد أي ضرر يترتب على ذلك، أو يضيء على الألم الذي أعانيه من الهرب من voluptas nulla pariatur</p>', '\"[\\\"projects\\\\\\/images\\\\\\/ClVo4Sn7mtWAiP0WwjXg7ppAxxCKfaAslYq3OnsA.png\\\",\\\"projects\\\\\\/images\\\\\\/c702w5tOefCVEXAbruwl64f85kkcOPqFVjUwezXl.png\\\",\\\"projects\\\\\\/images\\\\\\/G1ipcF3UWnR6BuPEWTsYGqODpzW6sr0gJQgw0xzZ.png\\\"]\"', '2025-01-21 22:11:51', '2025-01-21 22:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `rating`, `image`, `created_at`, `updated_at`) VALUES
(1, 'محمد حسين', '<p>\"منزل يمزج بشكل مثالي بين الاستدامة والرفاهية حتى اكتشفت ذلك. منذ اللحظة التي دخلت فيها هذا المجتمع، عرفت أنه المكان الذي أريد أن أعيش فيه. إن الالتزام بالمعيشة الصديقة للبيئة، إلى جانب وسائل الراحة الحديثة، أمر يستحق الثناء حقًا.</p>', 'reviews/4SyGNIvPXRsuIVnFQ7ktsladkTwewYNxipKCtifH.png', '2025-01-21 22:45:14', '2025-01-21 22:45:14'),
(2, 'محمد حسين', '<p>\"منزل يمزج بشكل مثالي بين الاستدامة والرفاهية حتى اكتشفت ذلك. منذ اللحظة التي دخلت فيها هذا المجتمع، عرفت أنه المكان الذي أريد أن أعيش فيه. إن الالتزام بالمعيشة الصديقة للبيئة، إلى جانب وسائل الراحة الحديثة، أمر يستحق الثناء حقًا.</p>', 'reviews/4SyGNIvPXRsuIVnFQ7ktsladkTwewYNxipKCtifH.png', '2025-01-21 22:45:14', '2025-01-21 22:45:14'),
(3, 'محمد حسين', '<p>\"منزل يمزج بشكل مثالي بين الاستدامة والرفاهية حتى اكتشفت ذلك. منذ اللحظة التي دخلت فيها هذا المجتمع، عرفت أنه المكان الذي أريد أن أعيش فيه. إن الالتزام بالمعيشة الصديقة للبيئة، إلى جانب وسائل الراحة الحديثة، أمر يستحق الثناء حقًا.</p>', 'reviews/4SyGNIvPXRsuIVnFQ7ktsladkTwewYNxipKCtifH.png', '2025-01-21 22:45:14', '2025-01-21 22:45:14'),
(4, 'محمد حسين', '<p>\"منزل يمزج بشكل مثالي بين الاستدامة والرفاهية حتى اكتشفت ذلك. منذ اللحظة التي دخلت فيها هذا المجتمع، عرفت أنه المكان الذي أريد أن أعيش فيه. إن الالتزام بالمعيشة الصديقة للبيئة، إلى جانب وسائل الراحة الحديثة، أمر يستحق الثناء حقًا.</p>', 'reviews/4SyGNIvPXRsuIVnFQ7ktsladkTwewYNxipKCtifH.png', '2025-01-21 22:45:14', '2025-01-21 22:45:14'),
(5, 'محمد حسين', '<p>\"منزل يمزج بشكل مثالي بين الاستدامة والرفاهية حتى اكتشفت ذلك. منذ اللحظة التي دخلت فيها هذا المجتمع، عرفت أنه المكان الذي أريد أن أعيش فيه. إن الالتزام بالمعيشة الصديقة للبيئة، إلى جانب وسائل الراحة الحديثة، أمر يستحق الثناء حقًا.</p>', 'reviews/4SyGNIvPXRsuIVnFQ7ktsladkTwewYNxipKCtifH.png', '2025-01-21 22:45:14', '2025-01-21 22:45:14'),
(6, 'محمد حسين', '<p>\"منزل يمزج بشكل مثالي بين الاستدامة والرفاهية حتى اكتشفت ذلك. منذ اللحظة التي دخلت فيها هذا المجتمع، عرفت أنه المكان الذي أريد أن أعيش فيه. إن الالتزام بالمعيشة الصديقة للبيئة، إلى جانب وسائل الراحة الحديثة، أمر يستحق الثناء حقًا.</p>', 'reviews/4SyGNIvPXRsuIVnFQ7ktsladkTwewYNxipKCtifH.png', '2025-01-21 22:45:14', '2025-01-21 22:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'تأجير العقارات', 'تأجير العقارات السكنية والتجارية مع خيارات تناسب جميع الاحتياجات.', 'services/RY5MhRGDOTiCKkWs1tHzssJMAFgDy0IcpiGWxdLU.png', 'icons/ZqYNOhrg2m7crhalWRXwXRjVXMNdEOTpkcROx5UQ.svg', '2025-01-21 22:33:21', '2025-01-22 19:56:11'),
(2, 'استقطاب البراندات', 'استقطاب البراندات العالمية والمحلية لأهم المواقع التجارية.', 'services/m0rpSrC3nDtRR29aUuexiVWEuIqsvqSLlwgpqo96.png', 'icons/sfaA0HWmKKBbA2VAjCdhxUeeeMwVQj6F5izN5fnE.svg', '2025-01-22 19:52:25', '2025-01-22 19:56:38'),
(3, 'إدارة الأملاك', 'إدارة الأملاك باحترافية، مما يضمن استدامة الأصول وتعظيم العوائد. .', 'services/LbpfYrm1QcOYKJbSndgnKFoMAoaPBj35lEvDIFNx.png', 'icons/5CiqZEJooFbzEV8lXdb7wjhvjpbnaXx7wA26P3Pp.svg', '2025-01-22 19:53:36', '2025-01-22 19:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('00sFFK2T1IhdiEBboBUkyvlC5TtepJxekhABumCX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmVLemJXMG9ieVB2S05qVDFKUVF4eVRqMnVjMlF0ZWdUcklYa0VuTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737647032),
('1cm5eJgrzXLTOKR6tMrNxe2EnbZYDCUqIUGR1WIQ', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnlDcWJLOXVnYmJKVno4WVRhbnFZUW8yMnoyTUlNZ3BscTNXWTBCbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvZW1hcmFzZWVyL3B1YmxpYy9mYXFzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737648902),
('1DJ77FkbTABahrNvl7gx0IvPrh5Mr3LHg9gYIF1p', 1, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWUU3Z2RUeEkzNk5DY3FxUmUySlBmaWRqS0hBMVkzRWVnc3haUHpQaiI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3NjQ3MDQ1O31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NvbnN1bHRpbmciO319', 1737648250),
('bZJUxM3dJW3Xnb0Tgaf8dARu8Edf7gYGPQvlEBbS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibGdSbFMxVmpnTkg0ZGJWb2NVN1RnZU1ITFpmSUdzMVBManltdXNHWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTczNzU4MDQ3NTt9fQ==', 1737592000);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer_logo` varchar(255) NOT NULL,
  `site_description` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `map_address` varchar(255) NOT NULL,
  `physical_address` varchar(255) NOT NULL,
  `copyright` text NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `footer_logo`, `site_description`, `phone`, `email`, `map_address`, `physical_address`, `copyright`, `favicon`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'uploads/settings/4sbMlCmbZonSmgoPiaUY3llVuaVH1qolQEuE5alK.png', 'uploads/settings/LeRxPZh63mXRPH9IJzS6Wax3iyv0y62glf8NecCs.png', '', '+966 55 887 8088', 'eamaraseer@gmail.com', 'https://maps.app.goo.gl/fDx1ogh3KL84KWiK6?g_st=iwb', 'المحلة، طريق المحلة الرئيسي، أبها 62432، المملكة العربية السعودية,', 'حقوق الطبع والنشر  2025 اعمار عسير, جميع الحقوق محفوظة.', 'uploads/settings/ojSdXjUWZA7Iz7ojL7WLWPduoLpmMWUBMiVFYsjA.png', 'Eamar Aseer - إعمار عسير', 'نحن شركة متخصصة في تقديم حلول عقارية مبتكرة ومتكاملة، تجمع بين الخبرة المحلية والدراية العميقة باحتياجات العملاء. هدفنا هو مساعدتكم على تحقيق أحلامكم العقارية سواء كنتم تبحثون عن منزل يلبي تطلعات أسرتكم، أو مساحة عمل تعكس هوية أعمالكم، أو استثمار يحقق عوائد مضمونة.', 'عقارات', NULL, '2025-01-21 23:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ارتقِ بأسلوب حياتك حيث', 'sliders/xzoGiRrqEsMKuy7npdEGxFV7f2l12Z1yl7psU6LA.webp', '2025-01-21 19:46:35', '2025-01-21 19:47:17'),
(4, 'اكتشف راحتك', 'sliders/hrlhWj3MScWU1hQ1RNrLGsnKGAq53EgsPmQqKlRu.webp', '2025-01-22 19:43:26', '2025-01-22 19:43:26'),
(5, 'مزيج من الفخامة', 'sliders/ZDvARYcqqxU1hcjc4AbWU5pTeyyM1gobwm86Y25n.webp', '2025-01-22 19:43:55', '2025-01-22 19:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `name`, `count`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'شقق أنيقة', 850, 'icons/e24BMEZ90a1Y6DKBA5dghxWi4kn2RkWOzrjn4W0I.svg', '2025-01-21 22:50:44', '2025-01-21 22:50:44'),
(2, 'منازل فاخرة', 950, 'icons/wXwuPl607TPQUoADQX1w8fQ7GUKotZzV56Q6r9hH.svg', '2025-01-22 19:45:35', '2025-01-22 19:45:35'),
(3, 'ضيوف راضون', 1800, 'icons/8SDYUbs9ghruTVZyCuSiEmqWgzKnqxRcjqSl2ThD.svg', '2025-01-22 19:46:19', '2025-01-22 19:49:22'),
(4, 'أصحاب سعيدة', 2000, 'icons/4f9idLxf9Z0ByP9m19Iz9wwpIH6Mg6KYIn4u1Vla.svg', '2025-01-22 19:46:31', '2025-01-22 19:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$9qHjXpnajWxbdR.MXML/jeRUwm1yiYF2fWqW/eVPGNdElkg0Iyn3O', NULL, '2025-01-22 00:19:00', '2025-01-22 00:19:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
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
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
