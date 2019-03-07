-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 01:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_savealife`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_02_23_054716_create_posts_table', 1),
(23, '2019_02_24_110637_create_post_donors_table', 1),
(25, '2019_03_04_174105_create_contacts_table', 2),
(27, '2019_03_06_095342_create_news_table', 3),
(29, '2019_03_07_063150_create_organizations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_article` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_imageUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_article`, `news_created_by`, `news_created_at`, `news_imageUrl`, `created_at`, `updated_at`) VALUES
(1, 'Importance of Blood Donation', 'Blood donation is a major concern to the society as donated blood is lifesaving for individuals who need it. Blood is scarce. There is a shortage to active blood donors to meet the need of increased blood demand. Blood donation as a therapeutic exercise. Globally, approximately 80 million units of blood are donated each year. One of the biggest challenges to blood safety particularly is accessing safe and adequate quantities of blood and blood products. Safe supply of blood and blood components is essential, to enable a wide range of critical care procedures to be carried out in hospitals. Good knowledge about blood donation practices is not transforming in donating blood. Interactive awareness on blood donation should be organized to create awareness and opportunities for blood donation. Blood donation could be therefore recommended that voluntary blood donations as often as possible may be therapeutically beneficial to the donors in terms of thrombotic complications and efficient blood flow mechanisms. This is also a plus for blood donation campaigns.', 'Omor Faruk', '2019-03-06 10:16:52', 'assets/newsimage/importance_of_blood_donation.jpg', NULL, NULL),
(2, 'Article of Blood Donation', 'A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole-blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it. During Blood Donation the assistance of a nanurse is reqired to take caer of the person who has donated blood.', 'Ashraful Rasel', '2019-03-06 10:25:07', 'assets/newsImage/news_blood2.jpg', NULL, NULL),
(3, 'Knowledge, Attitudes, and Motivations towards Blood Donation', 'Blood donation is remarkably safe medical procedure. However, attitudes, beliefs, and level of knowledge may affect it. Objectives. To measure the level of knowledge regarding blood donation, find out positive and negative attitudes, identify the obstacles, and suggest some motivational factors. Methodology. A cross-sectional study was conducted at King Abdulaziz Medical City (KAMC). Participants were selected by convenient nonrandom sampling technique. A self-created questionnaire was used for data collection. Results. The study included 349 individuals. About 45.8% of the participants claimed that they have a history of blood donation. Reported causes for not donating blood were blood donation not crossing their mind (52.4%), no time for donation (45%), and difficulty in accessing blood donation center (41.3%). Reported motivating factors for donating blood were one day off (81.4%), mobile blood donation caravans in public areas (79.1%), token gifts (31.5%), and finally paying money (18.9%). Conclusion. People in the age group 31–50 years, males, higher education and military were more likely to donate blood as well as People who showed higher knowledge level and positive attitude towards blood donation. More educational programs to increase the awareness in specific targeted populations and also to focus on some motivational factors are recommended.', 'Omor Faruk', '2019-03-06 10:25:07', 'assets/newsImage/news_blood3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_imageUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_followLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_etc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `organization_name`, `organization_location`, `organization_address`, `organization_contact`, `organization_imageUrl`, `organization_followLink`, `organization_etc`, `created_at`, `updated_at`) VALUES
(1, 'Amazing Activities Association', 'Dhaka', 'South Dania, Dania, Dhaka-1236', '01677134949', 'assets/organizationImage/organization_image1.jpg', 'https://www.facebook.com/Amazing-Activities-Association-1000909079939130/', '', NULL, NULL),
(2, 'Daffodil international university blood donors club', 'Dhaka', 'Daffodil International University', 'www.daffodilvarsity.edu.bd', 'assets/organizationImage/organization_image2.jpg', 'https://www.facebook.com/groups/767716420031318/', '', NULL, NULL);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `blood_group`, `city`, `hospital`, `time`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(59, 1, 'B+', 'Dhaka', '', '', '', 1, '2019-03-05 22:54:39', '2019-03-05 22:54:39'),
(60, 1, 'A+', 'Dhaka', '', '', '', 2, NULL, NULL),
(61, 3, 'A-', 'Dhaka', '', '', '', 1, NULL, NULL),
(62, 4, 'AB+', 'Dhaka', '', '', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_donors`
--

CREATE TABLE `post_donors` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `request_by` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_donors`
--

INSERT INTO `post_donors` (`id`, `post_id`, `donor_id`, `status`, `request_by`, `created_at`, `updated_at`) VALUES
(23, 8, 2, 2, NULL, '2019-03-04 05:49:21', '2019-03-04 05:49:21'),
(24, 8, 4, 1, NULL, NULL, NULL),
(25, 8, 1, 0, NULL, NULL, NULL),
(26, 8, 3, 3, NULL, NULL, NULL),
(27, 33, 1, 0, NULL, '2019-03-05 01:20:42', '2019-03-05 01:51:16'),
(28, 35, 1, 2, NULL, '2019-03-05 01:20:47', '2019-03-05 01:20:47'),
(29, 7, 1, 2, NULL, '2019-03-05 01:20:49', '2019-03-05 01:20:49'),
(30, 58, 2, 1, 1, '2019-03-05 22:31:29', '2019-03-05 22:31:29'),
(32, 58, 5, 2, 5, '2019-03-05 22:35:57', '2019-03-05 22:35:57'),
(33, 59, 2, 1, 1, '2019-03-05 22:54:45', '2019-03-05 22:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `blood_group`, `mobile`, `city`, `imageUrl`, `otp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Omor Faruk', 'test@test.com', 'B+', '01677134949', 'Dhaka', 'assets/userImage/1_Omor Faruk.jpg', NULL, '$2y$10$Knkt5Q6VXTxOTjKGBYqzDexmLQIQ8ToUQIdtyqhyUYmu1G/k8xCfq', 'q9afLCzJcDpe2TBnIsKozuHVeUTqZ33CPi6oBB7oaNvdYCcP7PGRtAb3P2Zr', '2019-03-01 23:01:21', '2019-03-06 23:50:18'),
(2, 'Aninda', 'test1@test.com', 'B+', '01677134948', 'Dhaka', NULL, NULL, '$2y$10$6kPp4LHinMYrDmt6JaYR1O3HJ7a82z6jb1LZ8q4VujrRK8F5sZ2ba', 'JtTVmWYPycyIoz3IhCL78zdRle2hdHNjhbT3eFM18XyqSliRT9ElG7dUqFMJ', '2019-03-01 23:02:04', '2019-03-01 23:02:17'),
(3, 'Ashraful Rasel', 'test2@test.com', 'B+', '01677134947', 'Dhaka', NULL, NULL, '$2y$10$r9uMp5.RYtrtNrBSrsxGxe8VkhWFMU6sULj4Sv8hWuBBIs7h.3Kge', 'g9l0WJz7IsQMagQw8ifcAfCCVL8xG6mcVNfXDUeqwjtOnHZGC8ZcLMIrOX3b', '2019-03-02 22:27:50', '2019-03-02 22:28:18'),
(4, 'Shaown', 'test3@test.com', 'B+', '01677134946', 'Dhaka', NULL, NULL, '$2y$10$rYTTsaArTFlYdBs9ovN5n.a8lhXWkYHlRUgmrZM21SxnlBt3Gay3K', 'zAof6yhW6AwGbtrhsoC1Dw1GB170LSWNB3n5VlZfAQx7LhMxs7nBrsBuUZTg', '2019-03-03 23:45:35', '2019-03-03 23:46:04'),
(5, 'Mithu', 'test4@test.com', 'B+', '01677134943', 'Dhaka', NULL, NULL, '$2y$10$1aEynlyyzBmsQ03d48KFyufmiMfzM.jwCA7HbCUdO6XqwwbVnbg5K', 'zyF2Hz5qbIEn8ZqZ1WpNxavKIUosgymxViOXjmEuK1rhQIfsOHFcCBAw5JyD', '2019-03-03 23:47:08', '2019-03-03 23:47:17'),
(21, 'Zackary Borer', 'lina54@example.net', 'A+', '1677134910', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'kz15z9pvc5', '2019-03-04 04:10:38', '2019-03-04 04:10:38'),
(22, 'Darion Lubowitz', 'luis69@example.com', 'A+', '1677134912', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'DZgtCgPWUy', '2019-03-04 04:10:38', '2019-03-04 04:10:38'),
(23, 'Dr. Fausto Cremin', 'frami.justen@example.com', 'A+', '1677134913', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'uug9PKFuKh', '2019-03-04 04:10:38', '2019-03-04 04:10:38'),
(24, 'Otho Huel III', 'alexis.crist@example.org', 'A+', '1677134915', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'UlIwFJ8pcW', '2019-03-04 04:10:38', '2019-03-04 04:10:38'),
(25, 'Prof. Harrison Kihn', 'bgoyette@example.com', 'A+', '1677134914', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '8TchcHlLyB', '2019-03-04 04:10:38', '2019-03-04 04:10:38'),
(26, 'Lionel Hand', 'mparisian@example.org', 'A-', '1677134917', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '8l8ADu3uYI', '2019-03-04 04:11:24', '2019-03-04 04:11:24'),
(27, 'Dr. Amari Stanton DDS', 'xschuppe@example.org', 'A-', '1677134916', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'PK8KFLsZOM', '2019-03-04 04:11:24', '2019-03-04 04:11:24'),
(28, 'Colt Mertz DDS', 'ylindgren@example.com', 'A-', '1677134919', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'PTkAoM9Ret', '2019-03-04 04:11:24', '2019-03-04 04:11:24'),
(29, 'Golden Stiedemann I', 'pheller@example.org', 'A-', '1677134920', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'CdviLX0a1B', '2019-03-04 04:11:24', '2019-03-04 04:11:24'),
(30, 'Berenice Miller', 'cornelius48@example.org', 'A-', '1677134918', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qXqodXfDA1', '2019-03-04 04:11:24', '2019-03-04 04:11:24'),
(31, 'Heloise Muller', 'schowalter.kiana@example.com', 'B-', '1677134925', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ArKpXKrMg7', '2019-03-04 04:11:51', '2019-03-04 04:11:51'),
(32, 'Miss Gregoria Hand PhD', 'dayton42@example.com', 'B-', '1677134924', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 's7tFqSQY36', '2019-03-04 04:11:52', '2019-03-04 04:11:52'),
(33, 'Aiden Cronin', 'hoeger.susan@example.net', 'B-', '1677134922', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'cAB4xBy0PB', '2019-03-04 04:11:52', '2019-03-04 04:11:52'),
(34, 'Anahi Quitzon', 'connelly.ulises@example.com', 'B-', '1677134923', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'hOnDZdeDBy', '2019-03-04 04:11:52', '2019-03-04 04:11:52'),
(35, 'Frankie Hagenes', 'cindy90@example.org', 'B-', '1677134921', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'YwI84JQ18Z', '2019-03-04 04:11:52', '2019-03-04 04:11:52'),
(36, 'Orlando Schamberger', 'marley60@example.net', 'O+', '1677134929', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'cRSpfzp2E1', '2019-03-04 04:12:13', '2019-03-04 04:12:13'),
(37, 'Ryan Schoen', 'denesik.rebeca@example.com', 'O+', '1677134927', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'S1R1wwITNJ', '2019-03-04 04:12:13', '2019-03-04 04:12:13'),
(38, 'Dr. Davion Schaefer V', 'jbartoletti@example.net', 'O+', '1677134926', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '2Uw1Qmg9MJ', '2019-03-04 04:12:13', '2019-03-04 04:12:13'),
(39, 'Dr. Florencio Padberg Jr.', 'chauncey.hilpert@example.com', 'O+', '1677134928', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ckAHXyIteO', '2019-03-04 04:12:13', '2019-03-04 04:12:13'),
(40, 'Tillman Schumm', 'mae06@example.net', 'O+', '1677134930', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'tsNKOT4dEV', '2019-03-04 04:12:13', '2019-03-04 04:12:13'),
(41, 'Taylor Mertz', 'scotty65@example.org', 'O-', '1677134934', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'vVJqWHm12N', '2019-03-04 04:12:28', '2019-03-04 04:12:28'),
(42, 'Devyn Hill', 'torp.virginie@example.org', 'O-', '1677134933', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'FsW9VMEyST', '2019-03-04 04:12:28', '2019-03-04 04:12:28'),
(43, 'Mrs. Minnie Koss I', 'cswaniawski@example.com', 'O-', '1677134935', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '2J6LDqoBiD', '2019-03-04 04:12:28', '2019-03-04 04:12:28'),
(44, 'Dr. Camryn Terry DDS', 'margarette94@example.org', 'O-', '1677134931', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'dplIFhj0m7', '2019-03-04 04:12:28', '2019-03-04 04:12:28'),
(45, 'Vern Jacobs', 'chaz99@example.com', 'O-', '1677134932', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'LJCcvK0jfv', '2019-03-04 04:12:28', '2019-03-04 04:12:28'),
(46, 'Deontae Goodwin', 'lina.anderson@example.org', 'AB+', '1677134937', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qRp4ygwh8L', '2019-03-04 04:12:50', '2019-03-04 04:12:50'),
(47, 'Mr. Christop Tremblay II', 'floy.fisher@example.net', 'AB+', '1677134936', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'aGjqggpD60', '2019-03-04 04:12:50', '2019-03-04 04:12:50'),
(48, 'Lauryn Lynch', 'ortiz.desmond@example.com', 'AB+', '1677134940', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'xYGipB8PsM', '2019-03-04 04:12:50', '2019-03-04 04:12:50'),
(49, 'Miss Arlene Tillman PhD', 'skiles.clyde@example.com', 'AB+', '1677134938', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '4AU0JIIFAz', '2019-03-04 04:12:50', '2019-03-04 04:12:50'),
(50, 'Humberto Ziemann II', 'rharris@example.net', 'AB+', '1677134939', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '5PWWqFT3R7', '2019-03-04 04:12:50', '2019-03-04 04:12:50'),
(51, 'Ms. Liliana Sporer', 'padberg.dolly@example.net', 'AB-', '1677134954', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'dujDW225Ok', '2019-03-04 04:13:12', '2019-03-04 04:13:12'),
(52, 'Dr. Asa Beier', 'andre.lubowitz@example.com', 'AB-', '1677134951', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'NXNPUx61Om', '2019-03-04 04:13:12', '2019-03-04 04:13:12'),
(53, 'Chasity Hammes', 'gerlach.elena@example.com', 'AB-', '1677134952', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '158Jgn4clY', '2019-03-04 04:13:12', '2019-03-04 04:13:12'),
(54, 'Mrs. Bonnie Wunsch PhD', 'gabriella25@example.net', 'AB-', '1677134955', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'GTQmhOMPjR', '2019-03-04 04:13:12', '2019-03-04 04:13:12'),
(55, 'Burdette Johnson', 'chase.lakin@example.net', 'AB-', '1677134953', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '36ybnrBxkU', '2019-03-04 04:13:12', '2019-03-04 04:13:12'),
(56, 'Frida Cassin', 'wilson.rice@example.com', 'AB-', '1677134953', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'uCCPpnxkg8', '2019-03-04 04:14:17', '2019-03-04 04:14:17'),
(57, 'Delilah McGlynn', 'danika33@example.net', 'AB-', '1677134954', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'EZMsHIed67', '2019-03-04 04:14:17', '2019-03-04 04:14:17'),
(58, 'Mario Bailey II', 'bridie01@example.org', 'AB-', '1677134955', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'gfoJD4PJk9', '2019-03-04 04:14:17', '2019-03-04 04:14:17'),
(59, 'Jamison Brown', 'mann.enola@example.com', 'AB-', '1677134951', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'M4rjCpmdlu', '2019-03-04 04:14:17', '2019-03-04 04:14:17'),
(60, 'Isidro Maggio', 'fmonahan@example.net', 'AB-', '1677134952', 'Dhaka', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'VokLF0H3Rp', '2019-03-04 04:14:17', '2019-03-04 04:14:17'),
(61, 'Millie Upton', 'guy83@example.com', 'A+', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'TqEdwMpvkM', '2019-03-04 04:15:22', '2019-03-04 04:15:22'),
(62, 'Keon Willms', 'hodkiewicz.carolyn@example.net', 'A+', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qYTnF3bKiJ', '2019-03-04 04:15:22', '2019-03-04 04:15:22'),
(63, 'Izaiah Prohaska', 'hattie.bosco@example.net', 'A+', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'rwN7mR6y9J', '2019-03-04 04:15:22', '2019-03-04 04:15:22'),
(64, 'Laila Kulas', 'angie.jakubowski@example.org', 'A+', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'NZXG8EnR4D', '2019-03-04 04:15:22', '2019-03-04 04:15:22'),
(65, 'Prof. Samson Kshlerin', 'jeramie.pfannerstill@example.org', 'A+', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'pNXil48znp', '2019-03-04 04:15:22', '2019-03-04 04:15:22'),
(66, 'Michale Stiedemann', 'lbosco@example.org', 'A-', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'EhmPP0Q3AG', '2019-03-04 04:22:28', '2019-03-04 04:22:28'),
(67, 'Alexandrine McKenzie V', 'demetris17@example.org', 'A-', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'BEaYIXwBhk', '2019-03-04 04:22:28', '2019-03-04 04:22:28'),
(68, 'Elmo Hyatt', 'bradley.wunsch@example.com', 'A-', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'bwwxnAH7so', '2019-03-04 04:22:28', '2019-03-04 04:22:28'),
(69, 'Prof. Reid Walsh Sr.', 'marquise.frami@example.net', 'A-', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'jPpKerSvx7', '2019-03-04 04:22:28', '2019-03-04 04:22:28'),
(70, 'Amari Bechtelar', 'cblock@example.com', 'A-', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '0OaFHOQtzw', '2019-03-04 04:22:28', '2019-03-04 04:22:28'),
(71, 'Isadore Pagac MD', 'mschmidt@example.com', 'B+', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'C0rfNRlnRE', '2019-03-04 04:22:41', '2019-03-04 04:22:41'),
(72, 'Felipe Schuppe MD', 'sincere37@example.org', 'B+', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'imHyX7dyr9', '2019-03-04 04:22:41', '2019-03-04 04:22:41'),
(73, 'Myron Becker', 'sporer.cara@example.org', 'B+', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'mOLi0s3h0P', '2019-03-04 04:22:42', '2019-03-04 04:22:42'),
(74, 'Monserrat Fahey', 'franz.donnelly@example.net', 'B+', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'kWMyzO6zpK', '2019-03-04 04:22:42', '2019-03-04 04:22:42'),
(75, 'Jermain Rath', 'alize53@example.org', 'B+', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'aHTorppOdl', '2019-03-04 04:22:42', '2019-03-04 04:22:42'),
(76, 'Colleen Hills', 'domenick16@example.com', 'B-', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'FNiC43S7K2', '2019-03-04 04:22:49', '2019-03-04 04:22:49'),
(77, 'Mr. Keegan Adams', 'treutel.melody@example.com', 'B-', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ZKxbHdMenp', '2019-03-04 04:22:49', '2019-03-04 04:22:49'),
(78, 'Westley Bogan', 'fiona25@example.com', 'B-', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'F971OBBLgN', '2019-03-04 04:22:49', '2019-03-04 04:22:49'),
(79, 'Khalid Klein', 'ophelia.boyle@example.net', 'B-', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'k89cEfCM0t', '2019-03-04 04:22:49', '2019-03-04 04:22:49'),
(80, 'Rigoberto Altenwerth', 'mariane61@example.com', 'B-', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'gxJolGuEb9', '2019-03-04 04:22:49', '2019-03-04 04:22:49'),
(81, 'Marlee Franecki', 'era.spinka@example.com', 'AB+', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qGHFP1k9Va', '2019-03-04 04:22:57', '2019-03-04 04:22:57'),
(82, 'Jules Lakin DDS', 'damien.walter@example.com', 'AB+', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '1E0UCx8I8d', '2019-03-04 04:22:58', '2019-03-04 04:22:58'),
(83, 'Christian Stracke', 'wbogisich@example.com', 'AB+', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'IwBxrnFvDb', '2019-03-04 04:22:58', '2019-03-04 04:22:58'),
(84, 'Lane Heidenreich', 'zreinger@example.net', 'AB+', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'rLqZGPM5JM', '2019-03-04 04:22:58', '2019-03-04 04:22:58'),
(85, 'Lance Bednar Sr.', 'lavada.friesen@example.org', 'AB+', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'DbMpcq2QP4', '2019-03-04 04:22:58', '2019-03-04 04:22:58'),
(86, 'Miss Janis Bauch I', 'ritchie.colby@example.net', 'AB-', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'RgHwMhKDdv', '2019-03-04 04:23:06', '2019-03-04 04:23:06'),
(87, 'Dr. Gideon Beatty Sr.', 'adams.gail@example.net', 'AB-', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'u1JEiuT2us', '2019-03-04 04:23:06', '2019-03-04 04:23:06'),
(88, 'Laurel Bradtke', 'kayli.lowe@example.net', 'AB-', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'LAhQ7nR4P6', '2019-03-04 04:23:06', '2019-03-04 04:23:06'),
(89, 'Donato Wiegand', 'feest.brenda@example.net', 'AB-', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'wGeeJxiqi0', '2019-03-04 04:23:06', '2019-03-04 04:23:06'),
(90, 'Amos Leffler', 'maya68@example.org', 'AB-', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'YCNsfvpEJ7', '2019-03-04 04:23:06', '2019-03-04 04:23:06'),
(91, 'Mr. Savion Bergstrom MD', 'klein.magdalena@example.com', 'O+', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '16vwIPnfIT', '2019-03-04 04:23:16', '2019-03-04 04:23:16'),
(92, 'Herbert Gorczany', 'muhammad.renner@example.net', 'O+', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'gUObiXfJil', '2019-03-04 04:23:17', '2019-03-04 04:23:17'),
(93, 'Jacynthe Batz', 'johathan.abshire@example.org', 'O+', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'REQI9pKNHk', '2019-03-04 04:23:17', '2019-03-04 04:23:17'),
(94, 'Hershel Boyer', 'yokeefe@example.org', 'O+', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'jL4xdN4RB2', '2019-03-04 04:23:17', '2019-03-04 04:23:17'),
(95, 'Julie Schamberger', 'aisha.stiedemann@example.org', 'O+', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'W7olx43r7a', '2019-03-04 04:23:17', '2019-03-04 04:23:17'),
(96, 'Mara Kub', 'evans58@example.net', 'O-', '1677134954', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'D25Wb8syUw', '2019-03-04 04:23:27', '2019-03-04 04:23:27'),
(97, 'Jackeline Howell DDS', 'myah92@example.org', 'O-', '1677134952', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ozRynBcbsl', '2019-03-04 04:23:27', '2019-03-04 04:23:27'),
(98, 'Prof. Elta Waelchi', 'lledner@example.net', 'O-', '1677134953', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'KqEhAAr5cN', '2019-03-04 04:23:27', '2019-03-04 04:23:27'),
(99, 'Dr. Agnes Bergnaum', 'lydia42@example.net', 'O-', '1677134951', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'fheNbj1Sjd', '2019-03-04 04:23:27', '2019-03-04 04:23:27'),
(100, 'Bonnie Metz', 'moore.francesco@example.org', 'O-', '1677134955', 'Gazipur', NULL, NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Wvjby9LqBV', '2019-03-04 04:23:27', '2019-03-04 04:23:27'),
(102, 'Abdul Owadud', 'test8@test.com', 'B+', '01677134909', 'Comilla', 'assets/userImage/demo_image.jpg', NULL, '$2y$10$3ScNfa.ZpJu8Wf4PF5j2zOtv9ql0t3vvm7bOL3WBsoW8XV7bnNTBC', 'B3bQnqRrVNid2aY9Y6KbwpG3287F24wQjbV0zrzAQvxOo1Co8Q02CMz9Hgde', '2019-03-07 03:56:00', '2019-03-07 03:56:11'),
(103, 'Ashraf Zahid', 'dosbd10@gmail.com', 'B+', '01930170861', 'Dhaka', 'assets/userImage/demo_image.jpg', NULL, '$2y$10$y2hLdkhJlrlYSLn.sQ2KoupWBXKYN1StEgOLT3aRLHa0h1bEKgy5S', 'nUCz7e6lyVAnZnUTjurkxOrBa4atQ8sYsvujbXYIKYi5YSInPjsnTMMj9Lae', '2019-03-07 04:43:57', '2019-03-07 04:46:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
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
-- Indexes for table `post_donors`
--
ALTER TABLE `post_donors`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `post_donors`
--
ALTER TABLE `post_donors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
