-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2020 at 01:43 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `additioncontent`
--

DROP TABLE IF EXISTS `additioncontent`;
CREATE TABLE IF NOT EXISTS `additioncontent` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectureid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `uid`, `cname`, `title`, `assignment`, `created_at`, `updated_at`) VALUES
(2, '1', 'mth 1102', 'lllll', 'Triston.Carter.pr2.pdf', '2020-04-02 22:07:11', '2020-04-02 22:07:11'),
(3, '1', 'mth 1102', 'first project(updated 2.0)', '10 essential ICT considerations for a sucessful PSBP project.pdf', '2020-04-03 08:17:45', '2020-04-03 08:17:45'),
(4, '1', 'mth 1102', 'aaaaaaa', '12.3.1 Progress Report Guide.pdf', '2020-04-03 08:54:01', '2020-04-03 08:54:01'),
(5, '1', 'mth 1102', 'as2', '1024892_ISY4201 _TEST1.pdf', '2020-04-03 09:03:31', '2020-04-03 09:03:31'),
(6, '1', 'calling', '1111', 'ICT4D_and_Sustainability.pdf', '2020-04-03 09:05:01', '2020-04-03 09:05:01'),
(7, '1', 'mth 1102', '111111', 'Why_Affordable_Clean_Energy_Is_Not_Enough_A_Capabi.pdf', '2020-04-03 09:07:32', '2020-04-03 09:07:32'),
(8, '1', 'mth 1102', '111112', 'Why_Affordable_Clean_Energy_Is_Not_Enough_A_Capabi.pdf', '2020-04-03 09:07:43', '2020-04-03 09:07:43'),
(9, '1', 'mth 1101', 'qqqqqq', 'ICT Policy.pdf', '2020-04-03 09:09:45', '2020-04-03 09:09:45'),
(10, '1', 'mth 1101', '111114', '10 essential ICT considerations for a sucessful PSBP project.pdf', '2020-04-03 09:12:37', '2020-04-03 09:12:37'),
(11, '1', 'calling', 'qqqq11111', '697_Fossil_Fuels_and_Job_creation_in_Africa.pdf', '2020-04-03 09:15:37', '2020-04-03 09:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_file`
--

DROP TABLE IF EXISTS `assignment_file`;
CREATE TABLE IF NOT EXISTS `assignment_file` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignment_file`
--

INSERT INTO `assignment_file` (`id`, `uid`, `cname`, `title`, `assignment`, `created_at`, `updated_at`) VALUES
(14, '1', 'mth 1102', 'hyyy', 'ddddddddd', '2020-04-03 09:27:05', '2020-04-03 09:27:05'),
(15, '1', 'mth 1102', 'project 6(within the domain of what can be achieved)', 'ddddddddddddddddddddddddd', '2020-04-03 09:31:38', '2020-04-03 09:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `coursecontent`
--

DROP TABLE IF EXISTS `coursecontent`;
CREATE TABLE IF NOT EXISTS `coursecontent` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_fil` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Appr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecontent`
--

INSERT INTO `coursecontent` (`id`, `userid`, `cname`, `content`, `Cdesc`, `cont_fil`, `Appr`, `date`, `created_at`, `updated_at`) VALUES
(9, 1, 'calling', 'lecture 9', 'asdfds', '75ddffbe7896c9b0fc5044a30eaa3055.jpg', 'Approved', '2020-12-31', '2020-03-26 12:24:55', '2020-03-26 12:24:55'),
(10, 1, 'calling', 'lecture 10', 'qqqqq', '20200127_094723.jpg', 'Approved', '2020-03-25', '2020-03-26 12:26:56', '2020-03-26 12:26:56'),
(7, 1, 'calling', 'lecture 7', 'dfdf', '50 Cent - I\'m The Man ft. Chris Brown.mp3', 'Approved', '2020-03-04', '2020-03-26 12:00:05', '2020-03-26 12:00:05'),
(8, 1, 'calling', 'lecture 8', 'ssddd', '71Ply2YWi+L._SL1100_.jpg', 'Disapproved', '2020-03-09', '2020-03-26 12:21:48', '2020-03-26 12:21:48'),
(4, 1, 'calling', 'lecture 4', 'tttttttttttttt', '50 Cent-I\'m Supposed To Die Tonight (Explicit).mp3', 'Approved', '2020-03-16', '2020-03-26 11:29:54', '2020-03-26 11:29:54'),
(2, 1, 'calling', 'lecture 2', '1111111', 'attachments.zip', 'Approved', '2020-03-03', '2020-03-26 09:18:11', '2020-03-26 09:18:11'),
(3, 1, 'calling', 'lecture 3', 'votttttttteeeee', '8e72623a00b29382d1e8037ec5be78c4.jpg', 'Disapproved', '2020-03-17', '2020-03-26 09:53:16', '2020-03-26 09:53:16'),
(1, 1, 'calling', 'lecture 1', 'hello clas i wonNope. We have full server side authentication. This is about them using their back button to see cached content. I can\'t turn caching off server side because we have legacy multi-screen forms, each screen having data, which should not be seen after logging out. Setting no cache on those screens results in the user back buttoning to a blank screen and having no screen to go forward to.....sitting dead', 'Triston.Carter.pr2.pdf', 'Approved', '2020-03-31', '2020-03-26 09:03:17', '2020-03-30 12:21:48'),
(5, 1, 'calling', 'lecture 5', 'ssssssssssssssssssddddddddddddddddd', '4._Dr_Ng_SDGs_71213.pdf', 'Approved', '2020-03-19', '2020-03-26 09:56:08', '2020-03-26 09:56:08'),
(11, 1, 'calling', 'lecture 11', 'Zxcvbvcxz', '20200127_094723.jpg', 'Disapproved', '2020-03-10', '2020-03-26 12:29:04', '2020-03-26 12:29:04'),
(6, 1, 'calling', 'lecture 6', 'dfghgfdfhj', '21 Savage - Out For The Night Pt 2 (Official Audio).mp3', 'Approved', '2020-03-17', '2020-03-26 11:58:45', '2020-03-26 11:58:45'),
(12, 1, 'calling', 'lecture 12', 'cvbnbvbn', '20200127_094927.jpg', 'Approved', '2020-03-10', '2020-03-26 12:32:24', '2020-03-26 12:32:24'),
(13, 1, 'calling', 'lecture 13', 'htfxtvnf xngng', '1024892.Assignment2.ISY.4101.pdf', 'Approved', '2020-03-03', '2020-03-26 12:33:51', '2020-03-26 12:33:51'),
(14, 1, 'calling', 'lecture 1c', 'cvbvcvbvc', '20191127_044826.jpg', 'Approved', '2020-03-10', '2020-03-26 12:36:55', '2020-03-26 12:36:55'),
(15, 1, 'calling', 'lecture 1d', 'ddddddddddddd111111111 wwwwwwwwwww2222222222', 'Academic-Deadlines-2019-2020.pdf', 'Disapproved', '2020-03-03', '2020-03-26 12:40:42', '2020-03-26 12:40:42'),
(36, 1, 'ftg', 'lecture 1e', 'sssssssssss', '50 Cent - I\'m The Man ft. Chris Brown.mp3', 'Disapproved', '2020-03-03', '2020-03-26 12:52:49', '2020-03-26 12:52:49'),
(37, 1, 'mth 1102', 'lecture 13', 'ddddddddd', 'CSE.docx', 'Approved', '2020-03-24', '2020-03-30 04:47:44', '2020-03-30 04:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cowner` int(11) NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clogo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cowner`, `cname`, `lecturer`, `code`, `clogo`, `date`, `created_at`, `updated_at`) VALUES
(86, 1, 'ftg', 'calling', 'x', 'ftg.jpg', '2020-03-31', '2020-03-25 08:15:14', '2020-03-25 08:15:14'),
(88, 1, 'mth 11', 'lecny', 'x', 'mth 11.jpg', '2020-03-23', '2020-03-30 04:46:39', '2020-03-30 04:46:39'),
(85, 1, 'mth 1102', 'calling', '1qaw2w', 'mth 1102.jpg', '2020-03-24', '2020-03-25 08:13:42', '2020-03-25 08:13:42'),
(82, 1, 'calling', 'lecny', 'dc3344', 'calling.jpg', '2020-03-31', '2020-03-25 07:38:47', '2020-03-25 07:38:47'),
(83, 1, 'mth 1101', 'subrina mathews', '1qq1w1', 'mth 1101.jpg', '2020-03-23', '2020-03-25 08:11:02', '2020-03-25 08:11:02'),
(87, 1, 'pdth 1102', 'calling', 'cvbvcrtt', 'pdth 1102.jpg', '2020-03-23', '2020-03-25 09:42:18', '2020-03-25 09:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 3),
(34, '2014_10_12_100000_create_password_resets_table', 3),
(35, '2019_08_19_000000_create_failed_jobs_table', 3),
(15, '2020_02_03_212944_insert_into_database', 2),
(36, '2020_03_07_040240_tasks', 4),
(37, '2020_03_18_185523_course', 4),
(38, '2020_03_25_023724_content', 5),
(39, '2020_03_28_224620_additional', 6),
(40, '2020_04_02_054900_create_submissions_table', 7),
(41, '2020_04_02_063612_testcont', 8),
(42, '2020_04_02_164849_create_testfiles_table', 9),
(43, '2020_04_02_180158_create_assignments_table', 10),
(44, '2020_04_02_181611_assign', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

DROP TABLE IF EXISTS `table_users`;
CREATE TABLE IF NOT EXISTS `table_users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Task` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `Title`, `Task`, `date`, `userid`, `created_at`, `updated_at`) VALUES
(48, 'first project(updated 2.0)', 'get it done', '2020-03-30', '1', '2020-03-31 06:37:09', '2020-03-31 06:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Testname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `uid`, `qn`, `cname`, `ctt`, `Testname`, `time`, `date`, `created_at`, `updated_at`) VALUES
(72, '1', '1', 'mth 1101', 'mth 1101sss', 'sss', '11:11', '2020-04-08', '2020-04-03 09:39:23', '2020-04-03 09:39:23'),
(70, '1', '1', 'mth 1102', 'mth 1102test1', 'test1', '11:11', '2020-04-30', '2020-04-03 08:15:16', '2020-04-03 08:15:16'),
(71, '1', '1', 'mth 1102', 'mth 1102sss', 'sss', '11:11', '2020-04-08', '2020-04-03 09:39:16', '2020-04-03 09:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `testfiles`
--

DROP TABLE IF EXISTS `testfiles`;
CREATE TABLE IF NOT EXISTS `testfiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Testname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testfiles`
--

INSERT INTO `testfiles` (`id`, `uid`, `cname`, `Testname`, `question`, `created_at`, `updated_at`) VALUES
(19, '1', 'mth 1102', 'test1', '10 essential ICT considerations for a sucessful PSBP project.pdf', '2020-04-03 08:14:52', '2020-04-03 08:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `testt`
--

DROP TABLE IF EXISTS `testt`;
CREATE TABLE IF NOT EXISTS `testt` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctt` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Testname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `QN` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testt`
--

INSERT INTO `testt` (`id`, `uid`, `tid`, `cname`, `ctt`, `Testname`, `QN`, `time`, `date`, `question`, `created_at`, `updated_at`) VALUES
(96, '1', '71', 'mth 1102', 'mth 11021sss', 'sss', '1', '11:11', '2020-04-08', '11111111', '2020-04-03 09:39:16', '2020-04-03 09:39:16'),
(95, '1', '70', 'mth 1102', 'mth 11021test1', 'test1', '1', '11:11', '2020-04-30', '1111111111111111111111111', '2020-04-03 08:15:16', '2020-04-03 08:15:16'),
(97, '1', '72', 'mth 1101', 'mth 11011sss', 'sss', '1', '11:11', '2020-04-08', '11111111', '2020-04-03 09:39:23', '2020-04-03 09:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Triston Simeon marlon Carter', 'taekonda18@gmail.com', NULL, '$2y$10$To8swAReOpd5nJeV.qwxF.qHfrQxIiyGv5pJhl5O6bJOgWaeAbWI2', 'BwTRxRhCu1fwhkBEOrQvpWkqaqHOG03yWdP8mAU1Qd1UNmVlbp1MN4kurqUF', '2020-03-24 05:22:57', '2020-03-24 05:22:57');
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 2),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_01_31_192850_project', 1),
(13, '2020_01_31_194207_project-table', 2),
(12, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `variable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `timetable`
--
CREATE DATABASE IF NOT EXISTS `timetable` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `timetable`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
