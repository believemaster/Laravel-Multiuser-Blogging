-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 08:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business', 1, '2020-03-24 00:07:38', '2020-03-28 04:40:12'),
(3, 'Magic', 1, '2020-03-24 03:29:58', '2020-03-24 03:29:58'),
(4, 'Sports', 1, '2020-03-24 03:30:15', '2020-03-24 03:30:15'),
(6, 'Technology', 1, '2020-03-25 03:22:57', '2020-03-25 03:22:57'),
(7, 'Medical', 1, '2020-03-25 03:32:58', '2020-03-25 03:32:58'),
(8, 'Music', 1, '2020-03-25 03:33:36', '2020-03-25 03:33:36'),
(9, 'Travel', 1, '2020-03-25 09:45:21', '2020-03-25 09:45:21'),
(10, 'Mobile', 1, '2020-03-25 10:11:12', '2020-03-25 10:11:12'),
(11, 'Programming', 1, '2020-03-25 10:11:34', '2020-03-26 03:43:30'),
(12, 'Politics', 1, '2020-03-25 10:12:31', '2020-03-25 10:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_id`, `status`, `email`, `created_at`, `updated_at`) VALUES
(2, 'nonuEdit', 'this is so cool', 3, 1, '', '2020-03-17 18:30:00', '2020-03-24 07:50:51'),
(5, 'admin', 'here is the reply of the comments', 14, 1, '', '2020-03-26 02:28:15', '2020-03-26 02:28:20'),
(6, 'test', 'test', 14, 1, 'test@gmail.com', '2020-03-26 03:19:45', '2020-03-26 03:20:00'),
(7, 'test22', 'test2', 14, 1, 'test@yahoo.com', '2020-03-26 03:20:19', '2020-03-27 02:13:25'),
(8, 'test', 'test sfadf', 14, 1, 'test@gmail.com', '2020-03-26 03:23:04', '2020-03-28 09:26:57'),
(9, 'test', 'tsaet', 14, 1, 'test@gmail.com', '2020-03-26 03:23:30', '2020-03-28 09:27:07'),
(10, 'fadsfa', 'fadsf', 14, 1, 'eveetech@gmail.com', '2020-03-26 03:24:35', '2020-03-28 09:27:03'),
(11, 'admin', 'admin comments here', 3, 1, 'admin@admin.com', '2020-03-26 09:29:51', '2020-03-26 09:59:41'),
(12, 'newuser', 'new user comments', 10, 1, 'new@mail.com', '2020-03-26 09:34:26', '2020-03-26 09:34:56'),
(13, 'newuser', 'newuser Comments', 3, 1, 'new@mail.com', '2020-03-26 09:35:42', '2020-03-26 09:36:36'),
(14, 'another Person', 'another person comments', 3, 1, 'anotheremial@gmail.com', '2020-03-28 09:28:29', '2020-03-28 09:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleTitle` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleCategory` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Complaint_Correction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_22_113028_entrust_setup_tables', 1),
(4, '2020_03_24_050042_create_categories_table', 2),
(5, '2020_03_24_073147_create_posts_table', 3),
(6, '2020_03_24_113717_create_comments_table', 4),
(7, '2020_03_24_181134_create_settings_table', 5),
(8, '2020_03_26_122506_create_subscribes_table', 6),
(9, '2020_04_06_075343_contact', 7),
(10, '2020_04_06_075830_create_contacts_table', 8),
(11, '2020_04_06_081456_create_issues_table', 9),
(12, '2020_04_06_084826_create_complaints_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('believemasters@gmail.com', '$2y$10$.Blfw9L.DYN.Z5tJLfIrve9PI/mYiIQVtJyRQFHBxo19pVauBVcC2', '2020-04-05 02:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Permission Add', 'Permission Add', 'Permission Add', '2020-03-23 07:55:12', '2020-03-23 07:55:12'),
(2, 'Permission List', 'Permission List', 'Permission List', '2020-03-23 07:55:24', '2020-03-23 07:55:24'),
(3, 'Permission Update', 'Permission Update', 'Permission Update', '2020-03-23 07:55:35', '2020-03-23 07:55:35'),
(4, 'Permission Delete', 'Permission Delete', 'Permission Delete', '2020-03-23 07:55:44', '2020-03-23 07:55:44'),
(5, 'Role Add', 'Role Add', 'Role Add', '2020-03-23 07:57:14', '2020-03-23 07:57:14'),
(6, 'Role List', 'Role List', 'Role List', '2020-03-23 07:57:25', '2020-03-23 07:57:25'),
(7, 'Role Update', 'Role Update', 'Role Update', '2020-03-23 07:57:35', '2020-03-23 07:57:35'),
(8, 'Role Delete', 'Role Delete', 'Role Delete', '2020-03-23 07:57:48', '2020-03-23 07:57:48'),
(9, 'Category Add', 'Category Add', 'Category Add', '2020-03-23 07:57:57', '2020-03-23 07:57:57'),
(10, 'Category List', 'Category List', 'Category List', '2020-03-23 07:58:09', '2020-03-23 07:58:09'),
(11, 'Category Update', 'Category Update', 'Category Update', '2020-03-23 07:58:17', '2020-03-23 07:58:17'),
(12, 'Category Delete', 'Category Delete', 'Category Delete', '2020-03-23 07:58:27', '2020-03-23 07:58:27'),
(13, 'Post Add', 'Post Add', 'Post Add', '2020-03-23 07:58:39', '2020-03-23 07:58:39'),
(14, 'Post List', 'Post List', 'Post List', '2020-03-23 07:58:48', '2020-03-23 07:58:48'),
(15, 'Post Update', 'Post Update', 'Post Update', '2020-03-23 07:58:58', '2020-03-23 07:58:58'),
(16, 'Post Delete', 'Post Delete', 'Post Delete', '2020-03-23 07:59:07', '2020-03-23 07:59:07'),
(17, 'Comment View', 'Comment View', 'Comment View', '2020-03-23 07:59:17', '2020-03-23 07:59:17'),
(18, 'Comment Reply', 'Comment Reply', 'Comment Reply', '2020-03-23 07:59:28', '2020-03-23 07:59:28'),
(19, 'Comment Approval', 'Comment Approval', 'Comment Approval', '2020-03-23 07:59:38', '2020-03-23 07:59:38'),
(20, 'System Settings', 'System Settings', 'System Settings', '2020-03-23 07:59:49', '2020-03-23 07:59:49'),
(21, 'All', 'All', 'All', '2020-03-23 08:00:00', '2020-03-23 08:00:00'),
(22, 'Author List', 'Author List', 'Author List', '2020-03-23 08:00:08', '2020-03-23 08:00:08'),
(23, 'Author Add', 'Author Add', 'Author Add', '2020-03-23 08:00:18', '2020-03-23 08:00:18'),
(24, 'Author Update', 'Author Update', 'Author Update', '2020-03-23 08:00:29', '2020-03-23 08:00:29'),
(25, 'Author Delete', 'Author Delete', 'Author Delete', '2020-03-23 08:00:37', '2020-03-23 08:00:37'),
(26, 'Permission', 'Permission', 'Permission', '2020-03-23 08:51:09', '2020-03-23 08:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(9, 3),
(10, 3),
(11, 3),
(13, 2),
(13, 3),
(14, 2),
(14, 3),
(15, 2),
(15, 3),
(17, 2),
(17, 3),
(18, 2),
(18, 3),
(19, 3),
(21, 1),
(22, 4),
(24, 17),
(25, 17);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `hot_news` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_description`, `description`, `slug`, `category_id`, `created_by`, `main_image`, `thumb_image`, `list_image`, `view_count`, `hot_news`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'why-do-we-use-it', 8, 2, 'post_main2.jpg', 'post_thumb2.jpg', 'post_list2.jpg', 132, 0, 1, '2020-03-24 04:38:54', '2020-03-26 02:25:08'),
(3, 'Lorem Ipsum is simply dummy text of the printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'lorem-ipsum-is-simply-dummy-text-of-the-printing', 6, 2, 'post_main3.jpg', 'post_thumb3.jpg', 'post_list3.jpg', 357, 0, 1, '2020-03-24 04:46:15', '2020-03-28 10:44:17'),
(4, 'Chevrolet car-saving technology delivers', 'In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.', '\"\"\"<p>In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.</p>', 'chevrolet-car-saving-technology-delivers', 6, 2, 'post_main4.jpg', 'post_thumb4.jpg', 'post_list4.jpg', 12315, 0, 1, '2020-03-25 04:59:26', '2020-03-27 02:11:09'),
(5, 'Airbnb launches photo-centric app for iPads and Android tablets.', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', '\"\"\"<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>', 'airbnb-launches-photo-centric-app-for-ipads-and-android-tablets', 6, 2, 'post_main5.jpg', 'post_thumb5.jpg', 'post_list5.jpg', 453, 0, 1, '2020-03-25 05:05:48', '2020-03-25 05:29:11'),
(6, 'Gadget user good news', 'In a move to address mounting concerns about security on Android...', '\"\"\"\"\"<p>In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...</p>', 'gadget-user-good-news', 6, 3, 'post_main6.jpg', 'post_thumb6.jpg', 'post_list6.jpg', 325, 0, 1, '2020-03-25 05:37:26', '2020-03-26 03:36:33'),
(7, 'Sony launce a new Android tablets for new generation', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.', '<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.</p>', 'sony-launce-a-new-android-tablets-for-new-generation', 7, 3, 'post_main7.jpg', 'post_thumb7.jpg', 'post_list7.jpg', 346, 0, 1, '2020-03-25 05:44:50', '2020-03-26 03:50:34'),
(8, 'A good news for gadget users Ds tech comming soon', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.', '<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.</p>', 'a-good-news-for-gadget-users-ds-tech-comming-soon', 4, 3, 'post_main8.jpg', 'post_thumb8.jpg', 'post_list8.jpg', 235, 0, 1, '2020-03-25 05:46:47', '2020-03-28 12:36:33'),
(9, 'Yasaki camera launches new generic hi-speed shutter camera.', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.', '\"<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.&nbsp;Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.&nbsp;Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.&nbsp;Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.&nbsp;Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.&nbsp;Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.&nbsp;</p>', 'yasaki-camera-launches-new-generic-hi-speed-shutter-camera', 11, 3, 'post_main9.jpg', 'post_thumb9.jpg', 'post_list9.jpg', 398, 0, 1, '2020-03-25 05:47:24', '2020-03-25 12:13:15'),
(10, 'Canon launches photo centric 00214 Model supper shutter camera', 'In a move to address mounting concerns about security on Android...', '\"<p>In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...In a move to address mounting concerns about security on Android...</p>', 'canon-launches-photo-centric-00214-model-supper-shutter-camera', 11, 1, 'post_main10.jpg', 'post_thumb10.jpg', 'post_list10.jpg', 919, 1, 1, '2020-03-25 05:57:42', '2020-04-05 02:59:11'),
(11, 'Learn to build', 'In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.', '\"\"<p>In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.In a move to address mounting concerns about security on Android, Google and Samsung are now issuing.</p>', 'learn-to-build', 10, 1, 'post_main11.jpg', 'post_thumb11.jpg', 'post_list11.jpg', 770, 0, 1, '2020-03-25 05:58:13', '2020-04-05 09:33:39'),
(12, '1914 translation by H. Rackham', '1914 translation by H. Rackham1914 translation by H. Rackham', '\"<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '1914-translation-by-h-rackham', 9, 1, 'post_main12.jpg', 'post_thumb12.jpg', 'post_list12.jpg', 786, 0, 1, '2020-03-25 05:58:55', '2020-03-25 12:11:44'),
(13, 'Best Anti Rape Device - Evee', '1914 translation by H. Rackham1914 translation by H. Rackham', '\"<p>1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham1914 translation by H. Rackham</p>', 'best-anti-rape-device-evee', 4, 1, 'post_main13.png', 'post_thumb13.png', 'post_list13.png', 903, 0, 1, '2020-03-25 05:59:24', '2020-03-27 01:42:14'),
(14, 'Evee - Best Anti Rape Device', 'New desc New desc New desc New desc New desc New desc', '\"<p>New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;New desc&nbsp;</p>', 'evee-best-anti-rape-device', 12, 1, 'post_main14.jpg', 'post_thumb14.jpg', 'post_list14.jpg', 41, 0, 1, '2020-03-25 12:09:07', '2020-03-26 03:41:52'),
(15, 'Business News', 'Business Business Business Business Business', '<p>Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;Business&nbsp;</p>', 'business-news', 3, 1, 'post_main15.jpg', 'post_thumb15.jpg', 'post_list15.jpg', 3, 0, 1, '2020-03-26 03:48:45', '2020-04-05 12:10:39'),
(16, 'Business News ANother', 'Business News ANotherBusiness News ANotherBusiness News ANother', '<p>Business News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANotherBusiness News ANother</p>', 'business-news-another', 1, 1, 'post_main16.jpg', 'post_thumb16.jpg', 'post_list16.jpg', 3, 0, 1, '2020-03-26 03:49:23', '2020-04-06 01:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Master Admin', 'Master Admin', 'Master Admin', '2020-03-23 11:51:35', '2020-03-23 11:51:35'),
(2, 'Blogger', 'Blogger', 'Blogger', '2020-03-23 11:53:19', '2020-03-23 11:53:19'),
(3, 'Editor', 'Editor', 'Editor', '2020-03-23 11:54:19', '2020-03-23 11:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'system_name', 'BM NEWS', NULL, '2020-04-05 05:03:55'),
(2, 'favicon', 'favicon.png', NULL, NULL),
(3, 'front_logo', 'front_logo.png', NULL, NULL),
(4, 'admin_logo', 'admin_logo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'yanik.kumar@gmail.com', '2020-03-26 07:17:43', '2020-03-26 07:17:43'),
(2, 'yanik.kumar@gmail.com', '2020-03-26 07:18:22', '2020-03-26 07:18:22'),
(3, 'yanik.kumar@gmail.com', '2020-03-26 07:18:48', '2020-03-26 07:18:48'),
(4, 'yanik.kumar@gmail.com', '2020-03-26 07:19:23', '2020-03-26 07:19:23'),
(5, 'yanik.kumar@gmail.com', '2020-03-26 07:20:05', '2020-03-26 07:20:05'),
(6, 'believemasters@gmail.com', '2020-03-26 07:20:24', '2020-03-26 07:20:24'),
(7, 'admin@admin.com', '2020-04-06 02:33:50', '2020-04-06 02:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_google`, `email_verified_facebook`, `password`, `type`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '', '', '$2y$10$fPZ431HK0xzfxqjAFRWYwu4PegtNU3lCJqZnQyTSBBAYCVcJFUqOe', 1, NULL, 'Fxf1dsSPpxeLuVeO8UCpmCYVoqvfCkxR8quKbj0mXQm39Gf40AcWIqyFHtV7', '2020-03-23 08:19:48', '2020-03-23 08:19:48'),
(2, 'Yanik Kumar', 'yanik.kumar@gmail.com', '', '', '$2y$10$vZRLEVF2BOQAoZhf5XQwMutsWObA02OGghpyzCex6OsuPP/F7yW2m', 2, NULL, 'dWqu6IyGYC6KCj0HmNQ91E80fEOSnCd2N40Xo59oq59WyuSalD0BhkBIv1lm', '2020-03-23 08:20:50', '2020-03-23 08:20:50'),
(3, 'Nonu', 'nonu@gmail.com', '', '', '$2y$10$xVRlRb9jbVsj2WnFPF3H8uFFdPoHdBz548PIivS4.2gccxkop0Hau', 2, NULL, '64BeSUhD7MG7ZHL8Ed5Pa6YvlSgjUWgEw5143vipJ62RyamV2nccVIBdNdO3', '2020-03-23 08:21:18', '2020-03-23 08:21:18'),
(4, 'nonuEdit', 'nonuEdit@gmail.com', '', '', '$2y$10$C4rs.iU1WUwE1qk4JgzbAOeV0CUQeNhPYjJGpxGWFkIvMtGqWBqAm', 3, NULL, NULL, '2020-03-23 08:22:08', '2020-03-23 08:22:08'),
(5, 'New', 'new@mail.com', '', '', '$2y$10$ytKPXOTxkGAoNfnsR/mA1Onan2R8RH3Mb9eWP7bH2.aHvYQyCL7E6', 3, NULL, NULL, '2020-03-26 09:33:06', '2020-03-26 09:33:06'),
(6, 'admin', 'admin21@admin.com', '', '', '$2y$10$Q14N/UfCQ6tkFDvN5P2FMOYsPM8UqK8v3jgxHlLiMfSO3h57RAkam', 2, NULL, NULL, '2020-03-27 03:39:05', '2020-03-27 03:39:05'),
(7, 'new member', 'member@gmail.com', '', '', '$2y$10$aGX51Z8ffXSGGJJRDpEd6eC9h8IvN6P0dgmUi2KTqw4Ja5pFqwflS', 2, NULL, NULL, '2020-03-28 05:37:30', '2020-03-28 05:37:30'),
(8, 'Believe Master', 'believemasters@gmail.com', '110059763796911980363', '', '51311013e51adebc3c34d2cc591fefee', 2, 'Believe Master.jpg', NULL, '2020-04-05 01:24:17', '2020-04-05 06:34:44'),
(9, 'xyz', 'xyz@gmail.com', NULL, NULL, '$2y$10$4UyIrHMM5HMEt67LnO/U6Or9/YiOZYrkIbBDzlAkkpJjYeWsxt4Ey', 2, NULL, NULL, '2020-04-05 01:49:15', '2020-04-05 01:49:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
