-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2020 at 10:29 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anounce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorID` bigint(20) UNSIGNED NOT NULL,
  `rubricID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleID`, `title`, `anounce`, `text`, `authorID`, `rubricID`, `created_at`, `updated_at`) VALUES
(1, 'Jazz', 'Музыка моей молодости', 'Что-то очень интересное', 1, 1, '2020-07-18 06:38:42', '2020-07-18 06:38:42'),
(2, 'Марафон Алматы', 'Бежим, но непонятно куда', 'Lorem ipsum dolor  papapapam', 2, 4, '2020-07-18 07:28:35', '2020-07-18 07:28:35'),
(3, 'Кризис 2020', 'Маски дорожают, а мы не богатеем', 'Что-то очень интересное', 3, 3, '2020-07-18 07:30:28', '2020-07-18 07:30:28'),
(5, 'Какой-то заголовок', 'Анонс', 'Что-то интересное', 2, 2, '2020-07-18 07:47:26', '2020-07-18 07:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorID` bigint(20) UNSIGNED NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dadName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorID`, `lastName`, `firstName`, `dadName`, `email`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Маратов', 'Кайрат', 'Аскарович', 'ghgjh@my.com', 0x433a5c55736572735c41646d696e5c417070446174615c4c6f63616c5c54656d705c706870443845312e746d70, '2020-07-18 06:12:22', '2020-07-18 06:12:22'),
(2, 'Келиспаев', 'Арыстан', 'Болатович', 'chtoto@yahoo.com', 0x433a5c55736572735c41646d696e5c417070446174615c4c6f63616c5c54656d705c706870323938392e746d70, '2020-07-18 07:25:54', '2020-07-18 07:25:54'),
(3, 'Мырзатай', 'Аружан', 'Бекболатовна', 'aru2020@yandex.ru', 0x433a5c55736572735c41646d696e5c417070446174615c4c6f63616c5c54656d705c706870313432392e746d70, '2020-07-18 07:26:54', '2020-07-18 07:26:54'),
(4, 'Асанов', 'Асан', 'Асанович', 'kairolla.t@gmail.com', 0x433a5c55736572735c41646d696e5c417070446174615c4c6f63616c5c54656d705c706870373841342e746d70, '2020-07-18 07:48:05', '2020-07-18 07:48:05');

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
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_07_16_140117_create_articles_table', 1),
(13, '2020_07_16_140224_create_authors_table', 1),
(14, '2020_07_16_143830_create_rubrics_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rubrics`
--

CREATE TABLE `rubrics` (
  `rubricID` bigint(20) UNSIGNED NOT NULL,
  `rubric` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rubrics`
--

INSERT INTO `rubrics` (`rubricID`, `rubric`, `created_at`, `updated_at`) VALUES
(1, 'Музыка', '2020-07-18 06:13:01', '2020-07-18 06:13:01'),
(2, 'Путешествия', '2020-07-18 07:24:44', '2020-07-18 07:24:44'),
(3, 'Политика', '2020-07-18 07:25:01', '2020-07-18 07:25:01'),
(4, 'Спорт', '2020-07-18 07:25:07', '2020-07-18 07:25:07'),
(5, 'Культура', '2020-07-18 07:48:28', '2020-07-18 07:48:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rubrics`
--
ALTER TABLE `rubrics`
  ADD PRIMARY KEY (`rubricID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rubrics`
--
ALTER TABLE `rubrics`
  MODIFY `rubricID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
