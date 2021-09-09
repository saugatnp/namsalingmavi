-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2021 at 09:32 AM
-- Server version: 10.2.34-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namsalin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Learning center 2077', '2021-07-06 12:59:03', '2021-07-13 03:01:07'),
(2, 'Scholarship Distribution Program', '2021-07-06 12:59:44', '2021-07-13 03:01:31'),
(4, 'Opening Ceremony of New Buildings', '2021-07-06 13:00:47', '2021-07-13 03:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagees`
--

CREATE TABLE `imagees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imagees`
--

INSERT INTO `imagees` (`id`, `album_id`, `photo`, `created_at`, `updated_at`) VALUES
(17, 7, 'sortbwlogo_1625769471.jpg', '2021-07-08 12:52:51', '2021-07-08 12:52:51'),
(19, 9, 'sortbwlogo_1625771293.jpg', '2021-07-08 13:23:13', '2021-07-08 13:23:13'),
(20, 9, 'sortbwlogo.jpg_1625771303.jpg', '2021-07-08 13:23:23', '2021-07-08 13:23:23'),
(52, 1, 'FILE_1626259615.jpg', '2021-07-14 10:46:56', '2021-07-14 10:46:56'),
(53, 1, 'FILE_1626259646.jpg', '2021-07-14 10:47:26', '2021-07-14 10:47:26'),
(54, 1, 'FILE_1626259684.jpg', '2021-07-14 10:48:04', '2021-07-14 10:48:04'),
(55, 1, 'FILE_1626259722.jpg', '2021-07-14 10:48:43', '2021-07-14 10:48:43'),
(56, 1, 'FILE_1626259755.jpg', '2021-07-14 10:49:16', '2021-07-14 10:49:16'),
(57, 1, 'FILE_1626259786.jpg', '2021-07-14 10:49:47', '2021-07-14 10:49:47'),
(58, 1, 'FILE_1626259820.jpg', '2021-07-14 10:50:20', '2021-07-14 10:50:20'),
(59, 4, 'FILE_1626259884.jpg', '2021-07-14 10:51:24', '2021-07-14 10:51:24'),
(60, 4, 'FILE_1626259961.jpg', '2021-07-14 10:52:42', '2021-07-14 10:52:42'),
(61, 2, 'FILE_1626260112.jpg', '2021-07-14 10:55:13', '2021-07-14 10:55:13');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_06_29_154950_create_posts_table', 1),
(13, '2021_07_06_175906_create_albums_table', 1),
(14, '2021_07_06_180823_create_images_table', 1),
(15, '2021_07_09_113606_create_notices_table', 2),
(16, '2021_07_09_114312_create_notices_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(13, 'Class - Ten (Online Class Schedule', 'Class 10 routine NaMaVi.pdf', '2021-08-17 07:40:41', '2021-08-17 07:40:41'),
(15, 'Class-Eight (Online Class Schedule )', 'FILE_1629468084.jpg', '2021-08-20 14:01:24', '2021-08-20 14:01:24'),
(17, 'notice', 'FILE_1630220420.jpg', '2021-08-29 07:00:20', '2021-08-29 07:00:20'),
(18, 'Class 12 Exam Routine', 'FILE_1630571280.jpg', '2021-09-02 08:28:00', '2021-09-02 08:28:00');

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
('saugat@gmail.com', '$2y$10$7hn41oQHlvplDiidrT1rS.cGrcadZK2wJ9SDvS6hm/odYG5i3jZQK', '2021-08-24 04:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `key`, `title`, `value`, `image`, `created_at`, `updated_at`) VALUES
(2, 'secone', 'Admission', '<p>Admission for previously passed students from different classes and new students for new academic year has already been started from Ashar 1 of 2078. Students are requested to come to the school in school uniform with their guardian for the admission process.</p>', 'FILE_1626065656.jpeg', '2021-06-29 05:22:24', '2021-07-14 02:30:32'),
(3, 'sectwo', 'Exam policy', '<p>Exams here are conducted as instructed by the government of nepal. The traditional method of taking exam has been in long practice with slightly modified method of publishing result on basis of grades has been introduced as the new method set up by the government.&nbsp;</p>', 'FILE_1626065453.jpg', '2021-06-29 05:31:54', '2021-07-14 02:38:27'),
(4, 'secthree', 'Learning center', '<p>Namsaling Mavi under the program Namuna School has been providinf education to the student present at various places around the ward by conducting special classes once a week even in the time of pandemic.</p>', 'FILE_1626238422.jpeg', '2021-06-29 06:24:57', '2021-07-14 04:53:42'),
(6, 'crouselone', 'Namsaling High School', '<p>crousel one asdasd abdasbdbasd</p>', 'FILE_1626352811.jpg', '2021-06-29 15:38:44', '2021-07-15 12:40:11'),
(7, 'crouseltwo', 'Namasling High School', '<p>Crousel two</p>', 'FILE_1626352837.jpg', '2021-06-29 15:48:33', '2021-07-15 12:40:37'),
(8, 'new key', 'new title', 'new value', 'image new', '2021-06-29 18:05:32', '2021-06-29 18:05:32'),
(9, 'key 2', 'title 2', 'value 2', 'image new 2', '2021-06-29 18:07:08', '2021-06-29 18:07:08'),
(12, 'crouselthree', 'Namsaling High School', '<p>namsaling high school</p>', 'FILE_1626352767.jpg', '2021-06-30 22:22:00', '2021-07-15 12:39:27'),
(13, 'recentevt', 'Underconstruction projects  in school', '<p>The school is going under huge transformation with the addition of &nbsp;three new building and renovation of previously available building in the school premise. New playground for children and laboratory with advanced equipment are also being set up in the mean time.</p>', 'FILE_1626063714.jpg', '2021-06-30 22:50:29', '2021-07-14 02:33:12'),
(14, 'book', 'Book list class 1', '<p>class 1 book</p>', 'FILE_1627918459.png', '2021-07-01 21:20:23', '2021-08-02 15:34:19'),
(15, 'book', 'Book list class 2', '<p>calss 2 book</p>', 'FILE_1627918474.png', '2021-07-01 21:22:28', '2021-08-02 15:34:35'),
(16, 'book', 'Book list class 3', '<p>book three</p>', 'FILE_1627918489.png', '2021-07-01 21:27:12', '2021-08-02 15:34:49'),
(17, 'book', 'Book list class 4', '<p>book four</p>', 'FILE_1627918510.png', '2021-07-01 21:30:42', '2021-08-02 15:35:10'),
(19, 'book', 'Book list class 5', '<p>class 7 book list</p>', 'FILE_1627918527.png', '2021-07-01 21:36:20', '2021-08-02 15:35:27'),
(20, 'book', 'Book list class 6', '<p>Class 7 book list</p>', 'FILE_1627918548.png', '2021-07-01 21:37:43', '2021-08-02 15:35:49'),
(21, 'book', 'Book list class 7', '<p>Class 9 book list</p>', 'FILE_1627918566.png', '2021-07-01 21:39:19', '2021-08-02 15:36:06'),
(22, 'book', 'Book list class 8', '<p>Class 10 book list</p>', 'FILE_1627918583.png', '2021-07-01 21:40:51', '2021-08-02 15:36:23'),
(23, 'book', 'Book list class 9', '<p>class 5 book list</p>', 'FILE_1627918599.png', '2021-07-01 22:15:38', '2021-08-02 15:36:39'),
(24, 'routine', 'Routine of class 8', '<p>online routine of class 8</p><p>Classes start from 10:00 to 1:40</p>', 'FILE_1629184948.jpg', '2021-07-04 01:22:21', '2021-08-17 07:26:18'),
(25, 'book', 'book list class 10', '<p>asdad</p>', 'FILE_1627918620.png', NULL, '2021-08-02 15:37:00'),
(29, 'schoolprofile', 'School Profile and History', '<p><strong>We integrate both the traditional formal exam system with modern thematic evaluation procedure through assessing individual performances. A series of class evaluations, observation of behavioral changes, performances in thematic assignments will be recorded and made available in the individual roster both manual and electronic forms. Namsaling school also teaches student culture, and tradition. This enables students to understand and respect other culture, develop tolerance towards the differences and help them cross the cultural dogmatic boundaries</strong></p><p><br>&nbsp;</p>', 'FILE_1626162103.jpg', '2021-07-09 02:52:54', '2021-08-16 09:09:46'),
(30, 'principal', 'प्रदिप कुमार देव', '<p>प्रधानाध्यापक&nbsp;</p><p>विज्ञान शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>द्वितीय श्रेणी</p><p>M.Sc, M.Ed.</p><p>फाेन‌ः ९८४२६४६५१७</p>', 'FILE_1627984864.jpg', '2021-07-09 03:01:28', '2021-08-18 07:31:06'),
(31, 'viceprincipal', 'ओमनाथ अधिकारी', '<p>&nbsp; सहायक प्रधानाध्यापक &nbsp; &nbsp; &nbsp; &nbsp;</p><p>नेपाली शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>द्वितीय श्रेणी</p><p>M.A,M.Ed.</p>', 'FILE_1626100681.JPG', '2021-07-09 03:03:23', '2021-08-03 09:59:19'),
(32, 'teacher', 'पुरुषाेतम नेपाल', '<p>&nbsp;</p><p>&nbsp;गणित शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>M.A.</p>', 'FILE_1626100600.jpg', '2021-07-09 03:42:12', '2021-08-03 09:41:17'),
(33, 'teacher', 'तीर्थमान राई', '<p>&nbsp;</p><p>अंग्रेजी शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>M.Ed.</p>', 'FILE_1626100794.jpg', '2021-07-09 03:43:12', '2021-08-03 09:41:25'),
(34, 'teacher', 'राजेन श्रेष्ठ', '<p>&nbsp;</p><p>अंग्रेजी शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>M.A,M.Ed.</p>', 'FILE_1626100835.jpg', '2021-07-09 03:45:18', '2021-08-03 09:41:33'),
(35, 'teacher', 'दिपक अधिकारी', '<p>&nbsp;</p><p>सामाजिक शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.A.</p>', 'FILE_1626100928.JPG', '2021-07-09 05:05:36', '2021-08-03 09:41:42'),
(36, 'teacher', 'गाेपाल प्रसाद तिम्सिना', '<p>&nbsp;</p><p>सामाजिक शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>द्वितीय श्रेणी&nbsp;</p><p>M.A.</p>', 'FILE_1626100973.JPG', '2021-07-09 05:11:06', '2021-08-03 09:41:51'),
(37, 'teacher', 'दिपा देवी राई', '<p>&nbsp;</p><p>नेपाली शिक्षक&nbsp;</p><p>माध्यमिक तह&nbsp;</p><p>द्वितीय श्रेणी&nbsp;</p><p>M.A.</p>', 'FILE_1626101019.JPG', '2021-07-09 05:16:41', '2021-08-03 09:41:59'),
(41, 'smc', 'Yageswhor Dhungana', '<p>Adhakshya</p>', 'http://www.webcoderskull.com/img/team4.png', '2021-07-09 05:39:45', '2021-07-23 06:24:11'),
(43, 'smc', 'Bir Bahadur Dewan', '<p>Sadasya</p>', 'http://www.webcoderskull.com/img/team4.png', '2021-07-09 05:40:42', '2021-07-23 06:24:52'),
(45, 'smc', 'Yam Bahadur Lama', '<p>Sadasya</p>', 'http://www.webcoderskull.com/img/team4.png', '2021-07-09 05:41:33', '2021-07-23 06:25:17'),
(46, 'smc', 'Durga Prasad Bhattarai', '<p>Sadasya</p>', 'http://www.webcoderskull.com/img/team4.png', '2021-07-09 05:41:50', '2021-07-23 06:25:46'),
(47, 'smc', 'Bhimkumari Ghimire kafle', '<p>Sadasya</p>', 'http://www.webcoderskull.com/img/team4.png', '2021-07-09 05:42:04', '2021-07-23 06:26:19'),
(48, 'pmsg', 'Mr Pradip Kumar Dev (Principal)', '<p>We at Namsaling High School integrate both the traditional formal exam system with modern thematic evaluation procedure through assessing individual performances. A series of class evaluations, observation of behavioral changes, performances in thematic assignments will be recorded and made available in the individual roster both manual and electronic forms. Namsaling school also teaches student culture, and tradition. This enables students to understand and respect other culture, develop tolerance towards the differences and help them cross the cultural dogmatic boundaries.</p>', 'FILE_1627563428.jpg', NULL, '2021-08-17 17:49:47'),
(53, 'teacher', 'तारानाथ अधिकारी', '<p>&nbsp;</p><p>नेपाली शिक्षक&nbsp;</p><p>निम्न माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>I.A.</p>', 'FILE_1626161514.jpg', '2021-07-12 14:43:56', '2021-08-03 09:59:38'),
(54, 'teacher', 'उतम लाल यादब', '<p>&nbsp;</p><p>विज्ञान शिक्षक&nbsp;</p><p>निम्न माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.Sc.</p>', 'FILE_1626101274.JPG', '2021-07-12 14:44:13', '2021-08-03 10:00:01'),
(55, 'teacher', 'आशिष घिमिरे', '<p>&nbsp;</p><p>अंग्रेजी शिक्षक&nbsp;</p><p>निम्न माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.A.</p>', 'FILE_1626101292.JPG', '2021-07-12 14:44:25', '2021-08-03 09:44:02'),
(56, 'teacher', 'सीमा कटुवाल', '<p>&nbsp;</p><p>सामाजिक शिक्षक&nbsp;</p><p>निम्न माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.Ed.</p>', 'FILE_1626102626.jpg', '2021-07-12 14:44:36', '2021-08-03 09:44:30'),
(57, 'teacher', 'हाेम बहादुर विश्वकर्मा', '<p>&nbsp;</p><p>&nbsp;गणित शिक्षक&nbsp;</p><p>निम्न माध्यमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>I.Ed.</p>', 'FILE_1626101363.JPG', '2021-07-12 14:44:47', '2021-08-03 09:45:19'),
(58, 'teacher', 'मनिता भट्टराई', '<p>&nbsp;</p><p>शिक्षक&nbsp;</p><p>प्राथमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.A,B.Ed.</p>', 'FILE_1626101533.JPG', '2021-07-12 14:50:09', '2021-08-03 09:45:56'),
(60, 'teacher', 'सागरमणि निराैला', '<p>&nbsp;</p><p>शिक्षक&nbsp;</p><p>प्राथमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.Ed.</p>', 'FILE_1626101567.jpg', '2021-07-12 14:50:35', '2021-08-03 09:46:35'),
(61, 'teacher', 'हिमा देवी तिम्सिना', '<p>&nbsp;</p><p>शिक्षक&nbsp;</p><p>प्राथमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.Ed.</p>', 'FILE_1626161423.jpg', '2021-07-12 14:50:44', '2021-08-03 09:46:50'),
(62, 'teacher', 'संगिता देवान', '<p>&nbsp;</p><p>शिक्षक&nbsp;</p><p>प्राथमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>I.A.</p>', 'FILE_1626101839.JPG', '2021-07-12 14:50:53', '2021-08-03 09:47:07'),
(63, 'teacher', 'कमल खत्री', '<p>&nbsp;</p><p>शिक्षक&nbsp;</p><p>प्राथमिक तह&nbsp;</p><p>तृतीय श्रेणी</p><p>B.Ed.</p>', 'FILE_1626101633.JPG', '2021-07-12 14:51:07', '2021-08-03 09:47:17'),
(66, 'recentevttwo', 'Underconstruction project  in school', '<p>The school is going under huge transformation with the addition of &nbsp;three new building and renovation of previously available building in the school premise. New playground for children and laboratory with advanced equipment are also being set up in the mean time.</p>', 'FILE_1626063714.jpg', NULL, '2021-07-19 09:42:04'),
(67, 'smc', 'Devimaya Ghimire Rimal', '<p>Sadasya</p>', 'noimage.jpg', '2021-07-23 06:26:37', '2021-07-23 06:27:29'),
(68, 'smc', 'Radhika Baraili', '<p>Sadasya</p>', 'noimage.jpg', '2021-07-23 06:26:59', '2021-07-23 06:27:14'),
(69, 'smc', 'Khageswori Dulal', 'Khageswori Dulal', 'noimage.jpg', '2021-07-23 06:27:46', '2021-07-23 06:27:46'),
(70, 'smc', 'Duran dewan', '<p>Sadasya</p>', 'noimage.jpg', '2021-07-23 06:27:57', '2021-07-23 06:29:12'),
(71, 'smc', 'Surya Bahadur Thapa', '<p>Sadasya</p>', 'noimage.jpg', '2021-07-23 06:28:16', '2021-07-23 06:29:44'),
(72, 'smc', 'Posta Bajgain', '<p>Sadasya</p>', 'noimage.jpg', '2021-07-23 06:28:35', '2021-07-23 06:30:07'),
(73, 'smc', 'Purushottam Nepal', '<p>Sadasya</p>', 'FILE_1627984925.jpg', '2021-07-23 06:28:46', '2021-08-03 10:02:05'),
(74, 'smc', 'Pradeep Kumar Dev', '<p>Sadasya Sachib</p>', 'FILE_1627984616.jpg', '2021-07-23 06:28:58', '2021-08-03 09:56:56'),
(78, 'pcom', 'Devi Bhakta Dhakal ( Late )', '<p>Devi Bhakta Dhakal ( Late )</p>', 'noimage.jpg', '2021-08-03 08:36:44', '2021-08-06 08:48:39'),
(79, 'pcom', 'Hari Prasad Dhakal ( Late )', 'Hari Prasad Dhakal ( Late )', 'noimage.jpg', '2021-08-03 08:37:33', '2021-08-03 08:37:33'),
(80, 'pcom', 'Gauri prasad nepal ( Late )', 'Gauri prasad nepal ( Late )', 'noimage.jpg', '2021-08-03 08:38:02', '2021-08-03 08:38:02'),
(81, 'pcom', 'Chandra Mani Dhakal ( Late )', 'Chandra Mani Dhakal ( Late )', 'noimage.jpg', '2021-08-03 08:38:16', '2021-08-03 08:38:16'),
(82, 'pcom', 'Sharmananda Niraula ( Late )', 'Sharmananda Niraula ( Late )', 'noimage.jpg', '2021-08-03 08:38:37', '2021-08-03 08:38:37'),
(83, 'pcom', 'Tirtharaj Nepal', 'Tirtharaj Nepal', 'noimage.jpg', '2021-08-03 08:38:54', '2021-08-03 08:38:54'),
(84, 'pcom', 'Kul Bahadur Pradhan', 'Kul Bahadur Pradhan', 'noimage.jpg', '2021-08-03 08:39:13', '2021-08-03 08:39:13'),
(85, 'pcom', 'Mohan Krishan Dhakal', 'Mohan Krishan Dhakal', 'noimage.jpg', '2021-08-03 08:39:29', '2021-08-03 08:39:29'),
(86, 'pcom', 'Naranath Sharma Niraula ( Late )', 'Naranath Sharma Niraula ( Late )', 'noimage.jpg', '2021-08-03 08:39:46', '2021-08-03 08:39:46'),
(87, 'pcom', 'Chabilal Chapagai', 'Chabilal Chapagai', 'noimage.jpg', '2021-08-03 08:40:08', '2021-08-03 08:40:08'),
(88, 'pcom', 'Ramesh Chandra Subedi', 'Ramesh Chandra Subedi', 'noimage.jpg', '2021-08-03 08:40:31', '2021-08-03 08:40:31'),
(89, 'pcom', 'Bed Kumar Dhakal', 'Bed Kumar Dhakal', 'noimage.jpg', '2021-08-03 08:40:43', '2021-08-03 08:40:43'),
(90, 'pcom', 'Yogendra Poudel', 'Yogendra Poudel', 'noimage.jpg', '2021-08-03 08:40:57', '2021-08-03 08:40:57'),
(91, 'pcom', 'Yagyeshwar Dhungana', 'Yagyeshwar Dhungana', 'noimage.jpg', '2021-08-03 08:41:16', '2021-08-03 08:41:16'),
(92, 'teacher', 'बेद प्रसाद सुवेदी', '<p>&nbsp;</p><p>मुखिया</p><p>&nbsp;</p><p>विद्यालय सहायक कर्मचारी</p><p>S.L.C.</p>', 'FILE_1627984320.jpg', '2021-08-03 09:48:11', '2021-08-03 09:55:29'),
(93, 'teacher', 'हेमराज अधिकारी', '<p>&nbsp;</p><p>विद्यालय सहयोगी कर्मचारी</p><p>&nbsp;</p><p>&nbsp;</p><p>+2 Level</p>', 'FILE_1627984362.JPG', '2021-08-03 09:52:16', '2021-08-03 09:56:06'),
(94, 'teacher', 'राेजिना ढकाल', '<p>कम्प्युटर शिक्षक</p><p>B.Sc. CSIT</p>', 'FILE_1627986324.JPG', '2021-08-03 10:20:53', '2021-08-03 10:26:18'),
(95, 'teacher', 'दिपेश तामाङ', '<p>विज्ञान प्रयोगशाला शिक्षक</p><p>+2 Level</p>', 'FILE_1627986772.jpg', '2021-08-03 10:21:06', '2021-08-06 10:00:04'),
(96, 'teacher', 'विशाल वजगाई', '<p>सहायक लेखापाल</p><p>BBS</p>', 'FILE_1627986646.jpg', '2021-08-03 10:21:16', '2021-08-03 10:30:46'),
(97, 'teacher', 'सन्ताेष राई', '<p>खेल पुस्तकालय शिक्षक</p><p>+2 level</p>', 'FILE_1628242731.jpg', '2021-08-03 10:21:28', '2021-08-06 09:38:52'),
(98, 'teacher', 'सर्मिला लिम्बू', '<p>बाल विकास शिक्षक</p><p>&nbsp;+2 Level</p><p>&nbsp;</p>', 'FILE_1628410324.jpg', '2021-08-03 10:21:47', '2021-08-08 08:12:04'),
(99, 'routine', 'Routine of class 9', '<p>Online routine of class 9</p><p>Class start from 1:00 to 3:55</p>', 'FILE_1629184969.jpg', '2021-08-17 07:21:59', '2021-08-17 07:25:42'),
(100, 'routine', 'Routine of class 10', '<p>Routine of class 10</p><p>Classes start from 10:00 to 12:55</p>', 'FILE_1629184988.jpg', '2021-08-17 07:22:08', '2021-08-17 07:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saugat', 'saugat@gmail.com', NULL, '$2y$10$ss.ADQsgjFF4pJUZSNpG2uokPKbqnGuQH6iJRdRxK2rpC6YqRQVDK', NULL, NULL, 'kegrFY3RWDI2VuuGotD5k8uDj48Zkx1sM0TlpvbZXExVhC3mJG4wsh3mxFjb', '2021-07-06 12:57:10', '2021-07-06 12:57:10'),
(2, 'namsaling mavi', 'namsalingmavi@gmail.com', NULL, '$2y$10$z7GuH5.221vyhH1FOC.LVOYw55/8BpYw.dH8ElobyWq5k1y2fnd3u', NULL, NULL, '0gyB2Os25anN81q4n6AYLvo0iIXXR1RzSHF7fHIz1ZLlwmmcBrnVVOFEBIHV', '2021-07-23 08:44:46', '2021-07-23 08:44:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `imagees`
--
ALTER TABLE `imagees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagees`
--
ALTER TABLE `imagees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
