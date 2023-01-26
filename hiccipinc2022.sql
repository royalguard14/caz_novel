-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 11:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiccipinc2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_contact`
--

CREATE TABLE `aboutus_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus_contact`
--

INSERT INTO `aboutus_contact` (`id`, `image`, `type`, `details`, `created_at`, `updated_at`) VALUES
(1, '', 'map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.765334325845!2d121.05110241483904!3d14.49815638986774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf3e4d6af7a7%3A0x3a705687d943d33f!2sCondominium%20Maharlika%20Village%20Taguig%20City!5e0!3m2!1sen!2sph!4v1673862661982!5m2!1sen!2sph', NULL, NULL),
(2, '', 'location', 'BUTUAANNNNNNNN\nxxxxxxxxxxxxxx\naa', NULL, NULL),
(3, '', 'email', 'admin@com.com\r\nzear@com.com', NULL, NULL),
(4, '', 'phone', '+123\r\n+456', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_developer`
--

CREATE TABLE `aboutus_developer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `socmed` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Literary Fiction.', 'Literary fiction novels are considered works with artistic value and literary merit. They often include political criticism, social commentary, and reflections on humanity. Literary fiction novels are typically character-driven, as opposed to being plot-driven, and follow a character?s inner story.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Mystery', 'Mystery novels, also called detective fiction, follow a detective solving a case from start to finish. They drop clues and slowly reveal information, turning the reader into a detective trying to solve the case, too. Mystery novels start with an exciting hook, keep readers interested with?suspenseful pacing, and end with a satisfying conclusion that answers all of the reader?s outstanding questions.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Thriller', 'Thriller novels are dark, mysterious, and suspenseful plot-driven stories. They very seldom include comedic elements, but what they lack in humor, they make up for in suspense. Thrillers keep readers on their toes and use?plot twists,?red herrings, and?cliffhangers?to keep them guessing until the end.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Horror', 'Horror novels are meant to scare, startle, shock, and even repulse readers. Generally focusing on themes of death, demons, evil spirits, and the afterlife, they prey on fears with scary beings like ghosts, vampires, werewolves, witches, and monsters. In?horror fiction, plot and characters are tools used to elicit a terrifying sense of dread.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Historical', 'Historical fiction novels take place in the past. Written with a careful balance of research and creativity, they transport readers to another time and place?which can be real, imagined, or a combination of both. Many historical novels tell stories that involve actual historical figures or historical events within historical settings.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Romance', 'Romantic fiction centers around love stories between two people. They?re lighthearted, optimistic, and have an emotionally satisfying ending. Romance novels do contain conflict, but it doesn?t overshadow the romantic relationship, which always prevails in the end.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `book_lists`
--

CREATE TABLE `book_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` int(11) NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashtag` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `function` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `function`, `name`, `class`, `created_at`, `updated_at`) VALUES
(1, 'maintenance', 'maintenance', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `general_setup`
--

CREATE TABLE `general_setup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maintenance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primarycolor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondarycolor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extracolor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_access_data`
--

CREATE TABLE `ip_access_data` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `status` text NOT NULL,
  `logs` text DEFAULT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_access_data`
--

INSERT INTO `ip_access_data` (`id`, `ip_address`, `status`, `logs`, `remarks`) VALUES
(1, '::1', '1', NULL, 'localhost'),
(2, '180.190.30.150', '1', NULL, 'Ghaizer HOME - IP'),
(3, '180.190.215.219', '1', NULL, 'Developer'),
(4, '180.190.33.179', '1', NULL, 'Dann'),
(5, '49.146.39.252', '1', NULL, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `datetime` text NOT NULL,
  `userId` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(17, '2022_06_05_094925_create_designs_table', 10),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(30, '2022_06_23_151014_create_client_details_table', 12),
(31, '2023_01_15_194753_create_book_genre_table', 13),
(33, '2023_01_15_212538_create_book_lists_table', 14),
(35, '2023_01_16_082313_create_aboutus_developer_table', 15),
(36, '2023_01_16_181110_create_postcomment_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `routeUri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryptname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module`, `description`, `routeUri`, `icon`, `default_url`, `encryptname`, `created_at`, `updated_at`) VALUES
(1, 'modules', 'MAINTENANCE OF SYSTEM MODULE', 'modules', 'fa-window-restore', 'modules.index', '', NULL, NULL),
(2, 'Access Control', 'Module for Group page Access', 'access_control', 'fa fa-sitemap', 'access_control.index', '$2y$10$xACXa.CQ2nGqiyc91n9fAuf82Nhtzg86zg5qeDEPwO3QwAyw4w9Em', '2022-06-17 10:06:50', '2022-06-17 10:06:50'),
(3, 'Users', 'Users Data', 'users', 'fa fa-users', 'users.index', '$2y$10$HCk7fsnC7VkGjCsKolURGOpCrhkcJCidWkyMAohPKBctlgV3SXwtO', '2022-06-19 16:22:49', '2022-06-19 16:22:49'),
(4, 'Dashboard', 'Dashboard Stat', 'dashboard', 'fa-tachometer-alt', 'dashboard.index', '$2y$10$Jfr6Cj7bWweWDLqfXvDMUePuuXrgQiNc.iLOhfDSXJ49rs5Xk3vie', '2022-06-19 17:00:22', '2022-06-19 17:00:22'),
(5, 'Configuration', 'Website configuration', 'admin-maintenance', 'fa-gamepad', 'maintenance.index', '$2y$10$EkHbgE2dN5djQQJhC855keGDeu5ZEp4NxBCJhTviULzeAjcvcVAO', '2022-06-22 14:53:58', '2022-06-22 14:53:58'),
(6, 'Genre', 'Easy Filter for books', 'genre', 'fa fa-clone', 'genre.index', '$2y$10$TCJbhQfNWBjGTGJQLDwJaeTx4.NBAvdQ3M2rFQ4hTrMY9NbimuxIq', '2023-01-15 19:46:17', '2023-01-15 19:46:17'),
(7, 'Books', 'BOOK details', 'book', 'fa fa-book', 'book.index', '$2y$10$bJYAf6aaokNSYuBmlxYOte7vmRM5bZ7XApnDvib8UTBUfrQ1wS7za', '2023-01-15 21:19:35', '2023-01-15 21:19:35'),
(8, 'Developer', 'about us Dev', 'developers', 'fa fa-plane', 'developers.index', '$2y$10$OQC783YMiAundjjcps8h0eCyG8rFS3AUSZlW5j3vReonsaDYRBGO', '2023-01-16 08:21:19', '2023-01-16 08:21:19');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postcomment`
--

CREATE TABLE `postcomment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_reply` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modules` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `group`, `modules`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', NULL, NULL),
(2, 'semi admin', '3,4,5,7,9,10,12,14,16', NULL, NULL),
(3, 'client', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uniq_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutme` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `uniq_code`, `username`, `name`, `address`, `phone`, `aboutme`, `email`, `email_verified_at`, `password`, `online`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/zer.png', 's4CzNd0rcVaEAPiy', 'admin', 'admin', 'Bldg. 5-308 Maharlika Village Taguig City', '+63 936 808 6909', 'Website Developer / IT-Staff', 'admin@zear.com', NULL, '$2y$10$8We876KVPWJsVM3cWmCNGuyuVMVRiP3ifd3BiKDBVyTSpKhOA229S', '1', '1', '1', NULL, NULL, '2023-01-15 19:23:43'),
(2, NULL, 'DadySzc6ZHCgWVK3', 'dann', 'Dann Sultan', NULL, NULL, NULL, 'hdmacabago@halalchamber.com.ph', NULL, '$2y$10$FxU5EqygnVpoGAs2MW1axOW9ITvY3B4kqiklyNsY/erqbUFHIye2q', '1', '1', '2', NULL, NULL, '2022-07-03 02:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `website_layouts`
--

CREATE TABLE `website_layouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_layouts`
--

INSERT INTO `website_layouts` (`id`, `page`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 'introduction', '....', NULL, NULL),
(2, 'aboutus', 'history', '<hr />\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><strong>Halal International Chamber of Commerce and Industries of the Philippines, Inc</strong>. is one of the leading chamber of commerce in the halal industry that was founded on March 16, 2013. HICCIP, Inc. is a non-stock, non-profitable organization, that is composed of Islamic Scholars, Professionals and Muslim Businessmen coming from different parts of the country.&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><strong>HICCIP, Inc.</strong> is a multi-purpose company, formally registered in Securities and Exchange Commission, that lodges on the promotion of halal entrepreneurship, businesses, industries, and network. As one of the leading chamber of commerce in the Halal industry, our organization has expanded its network outside the Philippines by establishing different partnership with local and foreign Muslim organizations all over the world.&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">By virtue of its accreditation from National Commission on Muslim Filipinos (NCMF), HICCIP, Inc. has become one of the preferred government-recognized halal certification body in the Philippines gaining recognition locally and abroad by Malaysia, Singapore, and Thailand to this date.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">As a full-Muslim organization, HICCIP, Inc. is drived by the purpose of serving the Ummah for the sake of ALLAH SWT. But, our program and services abide to non-discrimantory principles and maintains an open policy to individuals and companies, Muslim and non-Muslim consumers alike, to be able to fulfill its avowed goals for the halal industry.</span></span></p>', NULL, NULL),
(3, 'aboutus', 'commitment', '<p style=\"text-align:center\"><span style=\"font-family:Comic Sans MS,cursive\"><strong><span style=\"font-size:48px\">MISSION</span></strong></span></p>\r\n\r\n<hr />\r\n<p><span style=\"font-size:22px\"><span style=\"font-family:Courier New,Courier,monospace\">The <strong>HICCIP</strong> seeks to promote the development, proliferation and enhancement of halal entrepreneurship, businesses and industries. This entails the best energy of promotional and support services through halal certification, idea generation, business model innovation, appropriate information and communications technology, networking, strategic alliances, as well as educational and information campaign on local, national, regional and global fronts.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:22px\"><span style=\"font-family:Courier New,Courier,monospace\"><strong>HICCIP</strong> shall build upon its reputation for high quality programs, events and services which lead to members&rsquo; enhanced competitiveness, entrepreneurial competence and greater networking capabilities.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:22px\"><span style=\"font-family:Courier New,Courier,monospace\">All these are geared towards serving the mutual interests of producers, traders, distributors and consumers of halal products and services in the Philippines, Asia and elsewhere, which will bring about economic prosperity and halal quality of life.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:48px\"><strong>VISION</strong></span></span></p>\r\n\r\n<hr />\r\n<p><br />\r\n<span style=\"font-size:22px\"><span style=\"font-family:Courier New,Courier,monospace\">The <strong>HICCIP </strong>is envisioned to be the preferred and leading chamber of commerce for promoting and enhancing halal businesses and industries in the Philippines.</span></span></p>', NULL, NULL),
(4, 'aboutus', 'president Message', '<div class=\"containter\">\n<div class=\"row\">\n<div class=\"col-lg-6\"><img alt=\"\" src=\"assets\\img\\photos\\1.jpg\" style=\"height:100%; width:100%\" /></div>\n\n<div class=\"col-lg-6\" style=\"text-align:center\"><strong><span style=\"font-size:36px\"><span style=\"font-family:Comic Sans MS,cursive\">Message</span></span></strong>\n\n<p><em><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">Assalamu Alaykum Warahmatullahi Wabarakatoho</span></span></em></p>\n\n<p style=\"text-align:left\">&nbsp; &nbsp; &nbsp;The Halal International Chamber of Commerce and Industries of the Philippines, Inc. (HICCIP) was established last March 213. A nationwide operation, composed of Muslim Scholars, professionals, and businessmen. Our Organization was accredited by National Commission on Muslim Filipinos (NCMF) last December 2013 as certifying body on Halal.</p>\n\n<p style=\"text-align:left\">&nbsp; &nbsp; &nbsp;Thus, the HICCIP seeks to help strengthen the local halal certification system thereby ensuring that halal-certified products that either go out or come into the country are authentically halal. It offers itself as an alternative certification body that shall ensure the so-called &quot;farm-to-fork&quot; halal patronage for both local and imported halal products so that Muslim consumers would have a wider range of choices of such products for their use or consumption.</p>\n\n<p style=\"text-align:left\">&nbsp; &nbsp; &nbsp;Nevertheless, the HICCIP recognizes the significance of partnering with different organizations, especially the government agencies, both locally and abroad, as well as Muslim and Non-Muslim consumers alike to be able to fulfill its avowed goals for the halal industry.</p>\n\n<p style=\"text-align:left\">&nbsp; &nbsp; &nbsp;Lastly, we would like to inform the public that Halal is a word of our creator the Lord of Aalamien, and it&#39;s not only for Muslims but for everyone (Muslim and non-Muslim).</p>\n\n<p style=\"text-align:left\">&nbsp; &nbsp; &nbsp;Thank you and we pray that Allah (SWT) would grant us success in our future endeavors.</p>\n\n<p style=\"margin-left:80px; text-align:right\"><u><strong>ALEX M. Sultan</strong></u></p>\n\n<p style=\"margin-left:80px; text-align:right\"><span style=\"font-size:10px\"><strong>President/CEO</strong></span></p>\n</div>\n</div>\n</div>', NULL, NULL),
(5, 'aboutus', 'officers', '....', NULL, NULL),
(6, 'aboutus', 'partners', '<div class=\"row\">\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><span style=\"font-size:26px\"><strong><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><span style=\"background-color:#1abc9c\">&nbsp;NCMF ACCREDITED CERTIFYING BODY&nbsp;</span></span></strong></span></div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/ncmf.png\" style=\"height:150px; width:150px\" /></div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><span style=\"background-color:#1abc9c; font-size:26px\"><strong>&nbsp;RECOGNIZED BY&nbsp;</strong></span></span></div>\r\n\r\n<div class=\"col-lg-4\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/majlis.jpg\" style=\"height:140px; width:250px\" /></div>\r\n\r\n<div class=\"col-lg-4\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/jakim.png\" style=\"height:130px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-4\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/cicot.png\" style=\"height:140px; width:200px\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><span style=\"font-size:26px\"><strong><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><span style=\"background-color:#1abc9c\">&nbsp;MEMBER&nbsp;</span></span></strong></span></div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/pcci.jpg\" style=\"height:100px; width:250px\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><span style=\"font-size:26px\"><strong><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><span style=\"background-color:#1abc9c\">&nbsp;PARTNERS&nbsp;</span></span></strong></span></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/dti.png\" style=\"height:100px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/ncmf.png\" style=\"height:100px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/da.png\" style=\"height:100px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/dost.jpg\" style=\"height:100px; width:80px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/dot.png\" style=\"height:100px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/dfa.png\" style=\"height:100px; width:100px\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/sbp.png\" style=\"height:100px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/dohdfa.png\" style=\"height:100px; width:150px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/minda.jpg\" style=\"height:100px; width:100px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/kha.jpg\" style=\"height:120px; width:150px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/ddpm.png\" style=\"height:115px; width:115px\" /></div>\r\n\r\n<div class=\"col-lg-2\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/uniti.png\" style=\"height:110px; width:115px\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\" style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div class=\"col-lg-12\" style=\"text-align:center\"><span style=\"font-size:22px\"><strong><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">&nbsp;</span></strong></span></div>\r\n\r\n<div class=\"col-lg-6\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/mubin.jpg\" style=\"height:110px; width:200px\" /></div>\r\n\r\n<div class=\"col-lg-6\" style=\"text-align:center\"><img alt=\"\" src=\"assets/img/photos/logo/amanah.png\" style=\"height:110px; width:200px\" /></div>\r\n</div>', NULL, NULL),
(7, 'process', 'process', '<p>a. Letter of Intent</p>\r\n\r\n<p>b. Application Form (<a href=\"http://halalchamber.com.ph/download\">Download Here!</a>)</p>\r\n\r\n<p>c. Company Profile</p>\r\n\r\n<p>d. SEC or DTI Registration</p>\r\n\r\n<p>e. Environmental compliance Certificate (ECC)</p>\r\n\r\n<p>f. Mayors Permit</p>\r\n\r\n<p>g. BIR Permit</p>\r\n\r\n<p>h. Building Permit</p>\r\n\r\n<p>i. NMIS accreditation</p>\r\n\r\n<p>j. Flow Chart of Operation of the Abattoir</p>\r\n\r\n<p>k. Application fee (1,000.00)</p>\r\n\r\n<p>l. Other requirements may be requested by the Halal Committee if necessary</p>', NULL, NULL),
(8, 'services', 'services', '<div class=\"section-title\">\n<p>Halal International Chamber of Commerce and Industries of the Philippines, Inc. also offer different services such as:</p>\n</div>\n\n<div class=\"row\">\n<div class=\"align-items-stretch col-lg-4 col-md-6 d-flex\">\n<div class=\"icon-box iconbox-blue\">\n<div class=\"icon\">&nbsp;</div>\n\n<h4><a href=\"\">Halal Certification</a></h4>\n\n<p>We certifying &quot;PRODUCTION/PRODUCT,ESTABLISHMENT, and&nbsp;ABBATTOIR</p>\n</div>\n</div>\n\n<div class=\"align-items-stretch col-lg-4 col-md-6 d-flex mt-4 mt-md-0\">\n<div class=\"icon-box iconbox-orange\">\n<div class=\"icon\">&nbsp;</div>\n\n<h4><a href=\"\">Halal Business Promotion</a></h4>\n\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>\n</div>\n</div>\n\n<div class=\"align-items-stretch col-lg-4 col-md-6 d-flex mt-4 mt-lg-0\">\n<div class=\"icon-box iconbox-red\">\n<div class=\"icon\">&nbsp;</div>\n\n<h4><a href=\"\">Social Services</a></h4>\n\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>\n</div>\n</div>\n\n<div class=\"align-items-stretch col-lg-4 col-md-6 d-flex mt-4\">\n<div class=\"icon-box iconbox-teal\">\n<div class=\"icon\">&nbsp;</div>\n\n<h4><a href=\"\">Da&rsquo;wah Program</a></h4>\n\n<p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>\n</div>\n</div>\n\n<div class=\"align-items-stretch col-lg-4 col-md-6 d-flex mt-4\">\n<div class=\"icon-box iconbox-yellow\">\n<div class=\"icon\">&nbsp;</div>\n\n<h4><a href=\"\">Memberships and Partnerships</a></h4>\n\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>\n</div>\n</div>\n\n<div class=\"align-items-stretch col-lg-4 col-md-6 d-flex mt-4\">\n<div class=\"icon-box iconbox-pink\">\n<div class=\"icon\">&nbsp;</div>\n\n<h4><a href=\"\">Education and Scholarship Programs</a></h4>\n\n<p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>\n</div>\n</div>\n</div>', NULL, NULL),
(9, 'contactus', 'contact', ' <div class=\"address\">\n                <i class=\"bi bi-geo-alt\"></i>\n                <h4>Location:</h4>\n                <p>701 Jafer Place Bldg. 19 Eisenhower Street, Greenhills San Juan City 1504 Metro Manila, Philippines</p>\n              </div>\n\n              <div class=\"email\">\n                <i class=\"bi bi-envelope\"></i>\n                <h4>Email:</h4>\n                <p><b>For inquiries:</b>\n                  <br>info@halalchamber.com.ph\n              <br><br><b>For halal certification concerns:</b>\n              <br>certification@halalchamber.com.ph\n\n              <br><br>alex.hiccip2013@gmail.com</p>\n              </div>\n            <div class=\"phone\">\n                <i class=\"bi bi-phone\"></i>\n                <h4>Call:</h4>\n                <p><b>Telephone:</b>\n                <br>+63.2.7751.8533\n                <br><br>\n                <b>Smart:</b>\n                <br>(+63)970-247-1714\n                <br><br>\n                <b>Globe:</b>\n                <br>(+63)927-584-6963\n               ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_contact`
--
ALTER TABLE `aboutus_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_developer`
--
ALTER TABLE `aboutus_developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_lists`
--
ALTER TABLE `book_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_lists_code_unique` (`code`) USING HASH;

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setup`
--
ALTER TABLE `general_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_access_data`
--
ALTER TABLE `ip_access_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postcomment`
--
ALTER TABLE `postcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uniq_code_unique` (`uniq_code`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_layouts`
--
ALTER TABLE `website_layouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_contact`
--
ALTER TABLE `aboutus_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutus_developer`
--
ALTER TABLE `aboutus_developer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_genre`
--
ALTER TABLE `book_genre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book_lists`
--
ALTER TABLE `book_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_setup`
--
ALTER TABLE `general_setup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_access_data`
--
ALTER TABLE `ip_access_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcomment`
--
ALTER TABLE `postcomment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_layouts`
--
ALTER TABLE `website_layouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
