-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table omdb.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table omdb.favorites: ~25 rows (approximately)
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
INSERT INTO `favorites` (`id`, `title`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Naruto: Shippûden', 1, '2022-05-30 15:32:37', '2022-05-30 15:32:37'),
	(2, 'Naruto Shippuden the Movie: Blood Prison', 1, '2022-05-30 15:33:32', '2022-05-30 15:33:32'),
	(3, 'Lucy', 1, '2022-05-30 15:34:59', '2022-05-30 15:34:59'),
	(4, 'A Kitten Named Woof', 1, '2022-05-30 15:36:32', '2022-05-30 15:36:32'),
	(5, 'Naruto: Shippûden', 1, '2022-05-30 15:40:16', '2022-05-30 15:40:16'),
	(6, 'Naruto: Shippûden', 1, '2022-05-30 15:41:02', '2022-05-30 15:41:02'),
	(7, 'Naruto: Shippûden', 1, '2022-05-30 15:42:45', '2022-05-30 15:42:45'),
	(8, 'Naruto: Shippûden', 1, '2022-05-30 15:45:45', '2022-05-30 15:45:45'),
	(9, 'Naruto: Shippûden', 1, '2022-05-30 15:46:33', '2022-05-30 15:46:33'),
	(10, 'Boruto: Naruto The Movie', 1, '2022-05-30 15:49:50', '2022-05-30 15:49:50'),
	(11, 'Boruto: Naruto The Movie', 1, '2022-05-30 15:49:53', '2022-05-30 15:49:53'),
	(12, 'A Kitten Named Woof', 1, '2022-05-30 15:50:09', '2022-05-30 15:50:09'),
	(13, 'A Kitten Named Woof', 1, '2022-05-30 15:50:40', '2022-05-30 15:50:40'),
	(14, 'A Kitten Named Woof', 1, '2022-05-30 15:51:14', '2022-05-30 15:51:14'),
	(15, 'Woof!', 1, '2022-05-30 15:52:11', '2022-05-30 15:52:11'),
	(16, 'Shrek', 1, '2022-05-30 15:53:49', '2022-05-30 15:53:49'),
	(17, 'Shrek', 1, '2022-05-30 15:54:01', '2022-05-30 15:54:01'),
	(18, 'A Kitten Named Woof', 1, '2022-05-30 15:54:27', '2022-05-30 15:54:27'),
	(19, 'Shrek 2', 1, '2022-05-30 16:18:32', '2022-05-30 16:18:32'),
	(20, 'Naruto', 1, '2022-05-30 16:52:32', '2022-05-30 16:52:32'),
	(21, 'Naruto: Shippûden', 1, '2022-05-30 16:57:00', '2022-05-30 16:57:00'),
	(22, 'A Kitten Named Woof', 1, '2022-05-30 17:58:09', '2022-05-30 17:58:09'),
	(23, 'Naruto: Shippûden', 1, '2022-05-30 17:59:00', '2022-05-30 17:59:00'),
	(24, 'Boruto: Naruto Next Generations', 1, '2022-05-30 17:59:26', '2022-05-30 17:59:26'),
	(25, 'Naruto the Movie: Ninja Clash in the Land of Snow', 1, '2022-05-30 18:02:09', '2022-05-30 18:02:09'),
	(26, 'Italian Spiderman', 1, '2022-05-31 07:11:16', '2022-05-31 07:11:16'),
	(27, 'Naruto: Shippûden', 1, '2022-05-31 07:21:55', '2022-05-31 07:21:55');
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;

-- Dumping data for table omdb.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_05_30_113500_create_favorites_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table omdb.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table omdb.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table omdb.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'test', 'test@test.com', NULL, '$2y$10$J4IlyYi0v7GPLpELaiyESOBn2a60jIYv4Mh/HV7EqGUSops8aRClu', NULL, '2022-05-30 12:00:56', '2022-05-30 12:00:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
