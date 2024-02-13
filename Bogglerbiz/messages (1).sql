-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table bogglerbiz.chat_gpts
DROP TABLE IF EXISTS `chat_gpts`;
CREATE TABLE IF NOT EXISTS `chat_gpts` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `session_id` int DEFAULT NULL,
  `account_id` int NOT NULL,
  `query` text  NOT NULL,
  `finish_reason` varchar(254)  DEFAULT NULL,
  `prompt_tokens` varchar(254)  DEFAULT NULL,
  `completion_tokens` varchar(255)  DEFAULT NULL,
  `response` text  NOT NULL,
  `status` int NOT NULL DEFAULT '200',
  `model` varchar(100)  NOT NULL DEFAULT 'text',
  `consumed_tokens` int NOT NULL DEFAULT '0',
  `is_widget` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.chat_gpts: ~8,584 rows (approximately)
REPLACE INTO `chat_gpts` (`id`, `user_id`, `session_id`, `account_id`, `query`, `finish_reason`, `prompt_tokens`, `completion_tokens`, `response`, `status`, `model`, `consumed_tokens`, `is_widget`, `created_at`, `updated_at`) VALUES
	(1, 24, 1, 7, 'who are you', NULL, '21', '28', 'I\'m a language model AI created by OpenAI, designed to assist with answering questions and performing tasks. How can I assist you today?', 200, 'text', 0, 0, '2023-04-02 09:44:58', '2023-04-02 09:44:58');
REPLACE INTO `chat_gpts` (`id`, `user_id`, `session_id`, `account_id`, `query`, `finish_reason`, `prompt_tokens`, `completion_tokens`, `response`, `status`, `model`, `consumed_tokens`, `is_widget`, `created_at`, `updated_at`) VALUES
	(2, 24, 1, 7, 'what\'s average length of a query response', NULL, '57', '67', 'The average length of a query response can vary greatly depending on the type of query and the complexity of the answer. Simple questions may have short responses, while more complex questions may require longer and more detailed answers. As an AI language model, I can produce responses of varying lengths depending on the complexity of the question and the available information.', 200, 'text', 0, 0, '2023-04-02 09:45:22', '2023-04-02 09:45:22');
REPLACE INTO `chat_gpts` (`id`, `user_id`, `session_id`, `account_id`, `query`, `finish_reason`, `prompt_tokens`, `completion_tokens`, `response`, `status`, `model`, `consumed_tokens`, `is_widget`, `created_at`, `updated_at`) VALUES
	(3, 24, 2, 7, 'pitching strategy for a little league baseball game', NULL, '27', '314', 'As an AI language model, I do not have personal experience in playing or coaching little league baseball, but here is a general pitching strategy that could be applied:<br />\n<br />\n1. Warm-up: Before entering the game, warm-up properly to reduce the risk of injury and increase performance. Do some light jogging, stretch, and throw a few pitches to warm up the arm.<br />\n<br />\n2. Study the hitters: Observe the opponents’ strengths and weaknesses. Look at their batting stance, previous at-bats, and how they handle different types of pitches. This will help determine which types of pitches to throw.<br />\n<br />\n3. Keep it simple: Little league baseball players are still developing their skills, so it\'s important to keep the pitches simple. Focus on accuracy and speed control rather than complicated breaking balls or off-speed pitches. Opt for fastballs, changeups, or two-seam pitches.<br />\n<br />\n4. Keep the pitch count low: In little league baseball, there\'s a pitch count limit to prevent injury and encourage player development. Keep the pitch count low by throwing strikes early in the count, aiming to get three strikes to complete each at-bat.<br />\n<br />\n5. Work the corners: Aim to throw pitches to the corners of the plate, where hitters are less likely to make contact. This increases the likelihood of striking out batters or forcing them to hit a weak grounder or pop-fly.<br />\n<br />\n6. Stay composed: Regardless of the game situation, it’s important to stay calm and focused on executing. Avoid getting too emotional or frustrated and try to maintain a positive attitude throughout the game.', 200, 'text', 0, 0, '2023-04-02 10:13:31', '2023-04-02 10:13:31');
REPLACE INTO `chat_gpts` (`id`, `user_id`, `session_id`, `account_id`, `query`, `finish_reason`, `prompt_tokens`, `completion_tokens`, `response`, `status`, `model`, `consumed_tokens`, `is_widget`, `created_at`, `updated_at`) VALUES
	(11431, 1, 3120, 9, 'when i run my updated code on local it run perfectly but when i update my code on server it does not change it shows old code output what\'s issue', NULL, '49', '239', 'There could be several reasons for this issue. Here are some possible causes:<br />\n<br />\n1. Cached data: Your browser might be displaying the cached version of your website, which means that it is not displaying the updated code. You can try clearing the cache to see if it solves the problem.<br />\n<br />\n2. Incorrect upload: You may have uploaded the updated code to the wrong directory or folder. Make sure that you are uploading the code to the correct location on the server.<br />\n<br />\n3. Permissions issue: Sometimes, the server might not have the necessary permissions to access the updated code. Check the permissions on the files and folders to ensure that the server can access and read them.<br />\n<br />\n4. Server-side caching: The server may also be caching data, which means that it is not displaying the updated code. Check if your server has any caching system and try to clear it.<br />\n<br />\n5. DNS propagation: If you have recently updated your DNS settings, it may take some time for the changes to propagate across all DNS servers. Wait for a few hours, or even up to 24 hours, and try it again.<br />\n<br />\nIf none of these solutions work, you may need to contact your web hosting provider for further assistance.', 200, 'text', 0, 0, '2023-11-13 15:28:28', '2023-11-13 15:28:28');

-- Dumping structure for table bogglerbiz.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255)  NOT NULL,
  `connection` text  NOT NULL,
  `queue` text  NOT NULL,
  `payload` longtext  NOT NULL,
  `exception` longtext  NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.feedback
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `chat_id` int NOT NULL,
  `feedback` varchar(255)  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.feedback: ~1,778 rows (approximately)
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1, 24, 1, 'positive', '2023-04-02 09:45:02', '2023-04-02 09:45:02');

REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1665, 463, 10404, 'positive', '2023-10-09 00:10:32', '2023-10-09 00:10:32');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1735, 124, 10953, 'negative', '2023-10-17 11:20:56', '2023-10-17 11:20:56');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1736, 124, 10955, 'positive', '2023-10-17 11:24:18', '2023-10-17 11:24:18');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1737, 161, 10979, 'positive', '2023-10-17 23:43:13', '2023-10-17 23:43:13');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1738, 161, 10980, 'positive', '2023-10-17 23:43:35', '2023-10-17 23:43:35');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1739, 377, 10983, 'negative', '2023-10-18 00:17:30', '2023-10-18 00:17:30');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1740, 197, 10985, 'positive', '2023-10-18 00:55:08', '2023-10-18 00:55:08');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1741, 197, 10986, 'positive', '2023-10-18 01:15:23', '2023-10-18 01:15:23');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1742, 124, 10993, 'positive', '2023-10-18 03:04:02', '2023-10-18 03:04:02');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1743, 124, 10994, 'positive', '2023-10-18 03:06:27', '2023-10-18 03:06:27');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1744, 124, 10995, 'positive', '2023-10-18 03:07:29', '2023-10-18 03:07:29');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1745, 124, 11008, 'positive', '2023-10-18 07:11:54', '2023-10-18 07:11:54');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1746, 124, 11010, 'negative', '2023-10-18 09:48:58', '2023-10-18 09:48:58');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1747, 232, 11016, 'negative', '2023-10-18 16:45:48', '2023-10-18 16:45:48');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1748, 232, 11015, 'positive', '2023-10-18 16:45:58', '2023-10-18 16:45:58');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1749, 197, 11022, 'positive', '2023-10-18 22:01:41', '2023-10-18 22:01:41');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1750, 372, 11034, 'positive', '2023-10-19 03:50:57', '2023-10-19 03:50:57');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1751, 422, 11092, 'positive', '2023-10-20 02:42:12', '2023-10-20 02:42:12');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1752, 180, 11101, 'positive', '2023-10-20 04:23:08', '2023-10-20 04:23:08');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1753, 419, 11155, 'positive', '2023-10-20 11:31:58', '2023-10-20 11:31:58');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1754, 419, 11156, 'positive', '2023-10-20 11:32:59', '2023-10-20 11:32:59');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1755, 419, 11160, 'negative', '2023-10-20 11:35:36', '2023-10-20 11:35:36');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1756, 419, 11161, 'positive', '2023-10-20 11:36:12', '2023-10-20 11:36:12');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1757, 419, 11162, 'positive', '2023-10-20 11:36:53', '2023-10-20 11:36:53');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1758, 419, 11163, 'negative', '2023-10-20 11:37:18', '2023-10-20 11:37:18');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1759, 449, 11186, 'positive', '2023-10-20 22:15:00', '2023-10-20 22:15:00');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1760, 150, 11193, 'positive', '2023-10-20 23:20:25', '2023-10-20 23:20:25');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1761, 350, 11204, 'positive', '2023-10-21 00:17:17', '2023-10-21 00:17:17');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1762, 180, 11210, 'positive', '2023-10-21 01:52:24', '2023-10-21 01:52:24');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1763, 180, 11211, 'positive', '2023-10-21 01:54:51', '2023-10-21 01:54:51');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1764, 180, 11212, 'positive', '2023-10-21 01:56:19', '2023-10-21 01:56:19');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1765, 180, 11214, 'positive', '2023-10-21 01:58:11', '2023-10-21 01:58:11');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1766, 406, 11231, 'positive', '2023-10-22 06:15:17', '2023-10-22 06:15:17');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1767, 72, 11271, 'positive', '2023-10-22 23:44:36', '2023-10-22 23:44:36');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1768, 476, 11275, 'negative', '2023-10-23 01:06:54', '2023-10-23 01:06:54');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1769, 124, 11283, 'positive', '2023-10-23 03:45:29', '2023-10-23 03:45:29');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1770, 247, 11293, 'positive', '2023-10-23 22:10:11', '2023-10-23 22:10:11');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1771, 494, 11330, 'positive', '2023-10-24 04:11:21', '2023-10-24 04:11:21');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1772, 124, 11339, 'positive', '2023-10-24 06:03:43', '2023-10-24 06:03:43');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1773, 39, 11352, 'positive', '2023-10-24 12:24:58', '2023-10-24 12:24:58');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1774, 501, 11391, 'negative', '2023-10-25 11:12:38', '2023-10-25 11:12:38');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1775, 501, 11392, 'positive', '2023-10-25 11:17:36', '2023-10-25 11:17:36');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1776, 501, 11399, 'negative', '2023-10-25 11:22:20', '2023-10-25 11:22:20');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1777, 501, 11400, 'positive', '2023-10-25 11:22:50', '2023-10-25 11:22:50');
REPLACE INTO `feedback` (`id`, `user_id`, `chat_id`, `feedback`, `created_at`, `updated_at`) VALUES
	(1778, 501, 11407, 'positive', '2023-11-12 15:45:53', '2023-11-12 15:45:53');

-- Dumping structure for table bogglerbiz.filters
DROP TABLE IF EXISTS `filters`;
CREATE TABLE IF NOT EXISTS `filters` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `is_admin` int NOT NULL DEFAULT '1',
  `words` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  CONSTRAINT `filters_chk_1` CHECK (json_valid(`words`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.filters: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.gpt_sessions
DROP TABLE IF EXISTS `gpt_sessions`;
CREATE TABLE IF NOT EXISTS `gpt_sessions` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `session_name` text  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-
-- Dumping structure for table bogglerbiz.g_p_t_accounts
DROP TABLE IF EXISTS `g_p_t_accounts`;
CREATE TABLE IF NOT EXISTS `g_p_t_accounts` (
  `id` bigint unsigned NOT NULL,
  `account_email` varchar(255)  NOT NULL,
  `api_key` varchar(255)  NOT NULL,
  `requests` int NOT NULL DEFAULT '0',
  `success_requests` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.g_p_t_accounts: ~0 rows (approximately)
REPLACE INTO `g_p_t_accounts` (`id`, `account_email`, `api_key`, `requests`, `success_requests`, `status`, `created_at`, `updated_at`) VALUES
	(9, 'sam@redbutton.tv', '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', 10463, 9985, 1, '2023-05-01 21:57:15', '2023-11-13 15:28:28');

-- Dumping structure for table bogglerbiz.messages
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `type` enum('admin','gpt','user') CHARACTER SET utf8mb4  DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 ,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.messages: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255)  NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.migrations: ~8 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2023_11_29_091033_create_permission_tables', 1);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2019_05_03_000001_create_customer_columns', 2);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2023_12_04_054251_create_visitors_table', 3);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(8, '2023_12_04_070934_create_trainmodels_table', 4);
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(9, '2023_12_02_080104_create_payments_table', 5);

-- Dumping structure for table bogglerbiz.model_has_permissions
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255)  NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.model_has_roles
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255)  NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.model_has_roles: ~5 rows (approximately)
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\Models\\User', 1);
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\Models\\User', 6);
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\Models\\User', 7);
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\Models\\User', 8);
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\Models\\User', 10);

-- Dumping structure for table bogglerbiz.my_plans
DROP TABLE IF EXISTS `my_plans`;
CREATE TABLE IF NOT EXISTS `my_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `subscription_plans_id` bigint unsigned NOT NULL,
  `status` int NOT NULL,
  `end_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.my_plans: ~5 rows (approximately)
REPLACE INTO `my_plans` (`id`, `user_id`, `subscription_plans_id`, `status`, `end_at`, `created_at`, `updated_at`) VALUES
	(2, 3, 2, 0, '2023-12-29', '2023-11-13 06:45:38', '2023-11-29 06:33:19');
REPLACE INTO `my_plans` (`id`, `user_id`, `subscription_plans_id`, `status`, `end_at`, `created_at`, `updated_at`) VALUES
	(3, 2, 2, 0, '2023-12-13', '2023-11-13 06:45:38', '2023-11-13 08:04:39');
REPLACE INTO `my_plans` (`id`, `user_id`, `subscription_plans_id`, `status`, `end_at`, `created_at`, `updated_at`) VALUES
	(5, 11, 2, 0, '2023-12-22', '2023-11-22 15:12:26', '2023-11-22 15:12:26');
REPLACE INTO `my_plans` (`id`, `user_id`, `subscription_plans_id`, `status`, `end_at`, `created_at`, `updated_at`) VALUES
	(6, 7, 2, 0, '2023-12-22', '2023-11-22 15:33:58', '2023-11-22 15:33:58');
REPLACE INTO `my_plans` (`id`, `user_id`, `subscription_plans_id`, `status`, `end_at`, `created_at`, `updated_at`) VALUES
	(7, 1, 2, 0, '2024-01-04', '2023-12-04 23:16:13', '2023-12-05 02:43:15');

-- Dumping structure for table bogglerbiz.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.password_resets: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.payments
DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `amount` bigint NOT NULL,
  `subscription_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.payments: ~0 rows (approximately)
REPLACE INTO `payments` (`id`, `amount`, `subscription_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 30, 1, 1, '2023-12-04 10:00:25', '2023-12-04 10:00:27');
REPLACE INTO `payments` (`id`, `amount`, `subscription_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(2, 0, 5, 1, '2023-12-04 23:19:49', '2023-12-04 23:19:49');
REPLACE INTO `payments` (`id`, `amount`, `subscription_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(3, 30, 6, 1, '2023-12-05 02:42:10', '2023-12-05 02:42:10');
REPLACE INTO `payments` (`id`, `amount`, `subscription_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(4, 30, 7, 1, '2023-12-05 02:43:15', '2023-12-05 02:43:15');

-- Dumping structure for table bogglerbiz.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255)  NOT NULL,
  `guard_name` varchar(255)  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.permissions: ~4 rows (approximately)
REPLACE INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'edit articles', 'web', '2023-11-29 04:34:02', '2023-11-29 04:34:02');
REPLACE INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(2, 'delete articles', 'web', '2023-11-29 04:34:02', '2023-11-29 04:34:02');
REPLACE INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(3, 'publish articles', 'web', '2023-11-29 04:34:02', '2023-11-29 04:34:02');
REPLACE INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(4, 'unpublish articles', 'web', '2023-11-29 04:34:02', '2023-11-29 04:34:02');

-- Dumping structure for table bogglerbiz.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255)  NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255)  NOT NULL,
  `token` varchar(64)  NOT NULL,
  `abilities` text ,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.personal_access_tokens: ~0 rows (approximately)
REPLACE INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
	(3, 'App\\Models\\User', 9, 'auth_token', '05cd71187a38b807c1b0c49ebf66174656b5e455b708eb27355fe688b736536f', '["*"]', NULL, NULL, '2023-12-01 04:20:34', '2023-12-01 04:20:34');

-- Dumping structure for table bogglerbiz.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255)  NOT NULL,
  `guard_name` varchar(255)  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.roles: ~2 rows (approximately)
REPLACE INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2023-11-29 04:34:02', '2023-11-29 04:34:02');
REPLACE INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(2, 'user', 'web', '2023-11-29 04:34:02', '2023-11-29 04:34:02');

-- Dumping structure for table bogglerbiz.role_has_permissions
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.role_has_permissions: ~8 rows (approximately)
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(2, 1);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(3, 1);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(4, 1);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 2);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(2, 2);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(3, 2);
REPLACE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(4, 2);

-- Dumping structure for table bogglerbiz.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `key_name` varchar(255)  NOT NULL,
  `key_value` varchar(255)  NOT NULL,
  `is_admin` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.settings: ~5 rows (approximately)
REPLACE INTO `settings` (`id`, `user_id`, `key_name`, `key_value`, `is_admin`, `created_at`, `updated_at`) VALUES
	(1, 1, 'app_name', 'boggler.ai', 1, NULL, '2023-04-27 17:10:39');
REPLACE INTO `settings` (`id`, `user_id`, `key_name`, `key_value`, `is_admin`, `created_at`, `updated_at`) VALUES
	(2, 1, 'app_logo', 'logo.gif\r\n', 1, NULL, '2023-03-22 19:28:46');
REPLACE INTO `settings` (`id`, `user_id`, `key_name`, `key_value`, `is_admin`, `created_at`, `updated_at`) VALUES
	(3, 1, 'bg_color', '#ffffff', 1, NULL, '2023-03-11 17:05:38');
REPLACE INTO `settings` (`id`, `user_id`, `key_name`, `key_value`, `is_admin`, `created_at`, `updated_at`) VALUES
	(4, 1, 'text_color', '#013e8e', 1, NULL, '2023-04-05 23:40:34');
REPLACE INTO `settings` (`id`, `user_id`, `key_name`, `key_value`, `is_admin`, `created_at`, `updated_at`) VALUES
	(5, 0, 'voice_gender', 'male', 1, NULL, '2023-03-19 20:04:58');

-- Dumping structure for table bogglerbiz.subscriptions
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255)  NOT NULL,
  `stripe_id` varchar(255)  NOT NULL,
  `stripe_status` varchar(255)  NOT NULL,
  `stripe_price` varchar(255)  DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subscriptionPlan_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.subscriptions: ~4 rows (approximately)
REPLACE INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`, `subscriptionPlan_id`) VALUES
	(1, 1, 'HI', '111', 'active', '3000', 1, '2023-12-02 12:44:01', '2023-12-02 12:44:04', '2023-12-02 12:44:07', '2023-12-02 12:44:11', 1);
REPLACE INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`, `subscriptionPlan_id`) VALUES
	(2, 1, 'Innovator', '123', 'active', NULL, 1, '2023-12-11 23:18:26', '2024-01-03 23:18:26', '2023-12-04 23:18:26', '2023-12-04 23:18:26', 1);
REPLACE INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`, `subscriptionPlan_id`) VALUES
	(4, 1, 'Innovator', 'qI5troo', 'active', NULL, 1, '2023-12-11 23:19:24', '2024-01-03 23:19:24', '2023-12-04 23:19:24', '2023-12-04 23:19:24', 1);
REPLACE INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`, `subscriptionPlan_id`) VALUES
	(5, 1, 'Innovator', 'LvWWr3Z', 'active', NULL, 1, '2023-12-11 23:19:49', '2024-01-03 23:19:49', '2023-12-04 23:19:49', '2023-12-04 23:19:49', 1);
REPLACE INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`, `subscriptionPlan_id`) VALUES
	(6, 1, 'Pro', 'NYj58JD', 'active', NULL, 1, '2023-12-12 02:42:10', '2024-01-04 02:42:10', '2023-12-05 02:42:10', '2023-12-05 02:42:10', 2);
REPLACE INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`, `subscriptionPlan_id`) VALUES
	(7, 1, 'Pro', 'nPahz0i', 'active', NULL, 1, '2023-12-12 02:43:15', '2024-01-04 02:43:15', '2023-12-05 02:43:15', '2023-12-05 02:43:15', 2);

-- Dumping structure for table bogglerbiz.subscription_items
DROP TABLE IF EXISTS `subscription_items`;
CREATE TABLE IF NOT EXISTS `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255)  NOT NULL,
  `stripe_product` varchar(255)  NOT NULL,
  `stripe_price` varchar(255)  NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`),
  KEY `subscription_items_subscription_id_stripe_price_index` (`subscription_id`,`stripe_price`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.subscription_items: ~0 rows (approximately)

-- Dumping structure for table bogglerbiz.subscription_plans
DROP TABLE IF EXISTS `subscription_plans`;
CREATE TABLE IF NOT EXISTS `subscription_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `type` int NOT NULL DEFAULT '0',
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_plan` varchar(50) DEFAULT NULL,
  `sub_description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.subscription_plans: ~6 rows (approximately)
REPLACE INTO `subscription_plans` (`id`, `name`, `description`, `price`, `type`, `features`, `active`, `created_at`, `updated_at`, `stripe_plan`, `sub_description`) VALUES
	(1, 'Innovator', 'Instantly explore the power of AI to enrich and elevate your interactions, unlocking new dimensions of digital engagement and insight.', 0.00, 0, '[["iOS/Android/Mac", false], ["AI enhanced recording", false], ["Record interactions or phone calls", false], ["Background recording in iOS", false], ["Real-time AI transcription", false], ["Instant professional summaries", false], ["Instant action items", false], ["Instant follow up email", false], ["Custom summaries & actions", true], ["Professional boggler GPT account", true], ["All in your voice/tone/style", true], ["Train your own knowledge base", true]]', 1, '2023-11-13 07:02:25', '2023-11-13 07:02:25', 'price_1OJrEfFWLM2dH4jVk3kIjNpI', NULL);
REPLACE INTO `subscription_plans` (`id`, `name`, `description`, `price`, `type`, `features`, `active`, `created_at`, `updated_at`, `stripe_plan`, `sub_description`) VALUES
	(2, 'Pro', 'Discover the full potential of AI with our Pro version, offering advanced features and capabilities for unparalleled interaction and innovation.', 30.00, 0, '[["iOS/Android/Mac", false], ["AI enhanced recording", false], ["Record interactions or phone calls", false], ["Background recording in iOS", false], ["Real-time AI transcription", false], ["Instant professional summaries", false], ["Instant action items", false], ["Instant follow up email", false], ["Custom summaries & actions", true], ["Professional boggler GPT account", true], ["All in your voice/tone/style", true], ["Train your own knowledge base", true]]', 1, '2023-11-13 07:02:25', '2023-11-13 07:02:25', 'price_1OJrEfFWLM2dH4jVk3kIjNpI', NULL);
REPLACE INTO `subscription_plans` (`id`, `name`, `description`, `price`, `type`, `features`, `active`, `created_at`, `updated_at`, `stripe_plan`, `sub_description`) VALUES
	(3, 'Pro +', 'Discover the full potential of AI with our Pro version, offering advanced features and capabilities for unparalleled interaction and innovation.', 100.00, 0, '[["iOS/Android/Mac", false], ["AI enhanced recording", false], ["Record interactions or phone calls", false], ["Background recording in iOS", false], ["Real-time AI transcription", false], ["Instant professional summaries", false], ["Instant action items", false], ["Instant follow up email", false], ["Custom summaries & actions", true], ["Professional boggler GPT account", true], ["All in your voice/tone/style", true], ["Train your own knowledge base", true]]', 0, '2023-11-13 07:02:25', '2023-11-13 07:02:25', 'price_1OJrEfFWLM2dH4jVk3kIjNpI', NULL);
REPLACE INTO `subscription_plans` (`id`, `name`, `description`, `price`, `type`, `features`, `active`, `created_at`, `updated_at`, `stripe_plan`, `sub_description`) VALUES
	(4, 'Innovator', 'Instantly explore the power of AI to enrich and elevate your interactions, unlocking new dimensions of digital engagement and insight.', 0.00, 1, '[["iOS/Android/Mac", false], ["AI enhanced recording", false], ["Record interactions or phone calls", false], ["Background recording in iOS", false], ["Real-time AI transcription", false], ["Instant professional summaries", false], ["Instant action items", false], ["Instant follow up email", false], ["Custom summaries & actions", true], ["Professional boggler GPT account", true], ["All in your voice/tone/style", true], ["Train your own knowledge base", true]]', 1, '2023-11-13 07:02:25', '2023-11-13 07:02:25', 'price_1OJrEfFWLM2dH4jVk3kIjNpI', NULL);
REPLACE INTO `subscription_plans` (`id`, `name`, `description`, `price`, `type`, `features`, `active`, `created_at`, `updated_at`, `stripe_plan`, `sub_description`) VALUES
	(5, 'Pro', 'Discover the full potential of AI with our Pro version, offering advanced features and capabilities for unparalleled interaction and innovation.', 25.00, 1, '[["iOS/Android/Mac", false], ["AI enhanced recording", false], ["Record interactions or phone calls", false], ["Background recording in iOS", false], ["Real-time AI transcription", false], ["Instant professional summaries", false], ["Instant action items", false], ["Instant follow up email", false], ["Custom summaries & actions", true], ["Professional boggler GPT account", true], ["All in your voice/tone/style", true], ["Train your own knowledge base", true]]', 1, '2023-11-13 07:02:25', '2023-11-13 07:02:25', 'price_1OJrEfFWLM2dH4jVk3kIjNpI', NULL);
REPLACE INTO `subscription_plans` (`id`, `name`, `description`, `price`, `type`, `features`, `active`, `created_at`, `updated_at`, `stripe_plan`, `sub_description`) VALUES
	(6, 'Pro +', 'Discover the full potential of AI with our Pro version, offering advanced features and capabilities for unparalleled interaction and innovation.', 100.00, 1, '[["iOS/Android/Mac", false], ["AI enhanced recording", false], ["Record interactions or phone calls", false], ["Background recording in iOS", false], ["Real-time AI transcription", false], ["Instant professional summaries", false], ["Instant action items", false], ["Instant follow up email", false], ["Custom summaries & actions", true], ["Professional boggler GPT account", true], ["All in your voice/tone/style", true], ["Train your own knowledge base", true]]', 0, '2023-11-13 07:02:25', '2023-11-13 07:02:25', 'price_1OJrEfFWLM2dH4jVk3kIjNpI', NULL);

-- Dumping structure for table bogglerbiz.trainmodels
DROP TABLE IF EXISTS `trainmodels`;
CREATE TABLE IF NOT EXISTS `trainmodels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255)  NOT NULL,
  `file_size` varchar(255)  NOT NULL,
  `user_id` bigint NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4  NOT NULL DEFAULT 'Training',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.trainmodels: ~0 rows (approximately)
REPLACE INTO `trainmodels` (`id`, `file_name`, `file_size`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'AlrightTech Updated Discipline Policies .pdf', '38307', 1, 'Training', '2023-12-04 02:41:52', '2023-12-04 02:41:52');
REPLACE INTO `trainmodels` (`id`, `file_name`, `file_size`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'AlrightTech Updated Discipline Policies .pdf', '38307', 1, 'Training', '2023-12-04 02:54:11', '2023-12-04 02:54:11');

-- Dumping structure for table bogglerbiz.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255)  NOT NULL,
  `email` varchar(255)  NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255)  NOT NULL,
  `role` int NOT NULL DEFAULT '3',
  `ref` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100)  DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `consumed_tokens` int NOT NULL DEFAULT '0',
  `available_tokens` int NOT NULL DEFAULT '0',
  `google_id` varchar(200)  DEFAULT NULL,
  `session_id` varchar(254)  DEFAULT NULL,
  `assistant_name` varchar(255)  NOT NULL DEFAULT 'boggler.ai',
  `assistant_avatar` varchar(255)  NOT NULL DEFAULT 'default.gif',
  `my_avatar` varchar(255)  NOT NULL DEFAULT 'avatar04.png',
  `first_visit` int NOT NULL DEFAULT '1',
  `stripe_id` varchar(255)  DEFAULT NULL,
  `pm_type` varchar(255)  DEFAULT NULL,
  `pm_last_four` varchar(4)  DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.users: ~486 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(1, 'Muhammad Hasnain', 'user@gmail.com', NULL, '$2y$12$mq6E1w04/1VJyp/t3NlomefecXWPbzmLQlc.gmJ0qCH9/ENWlqe2O', 3, 1, NULL, '2023-12-01 23:51:01', '2023-12-05 01:54:38', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 0, 'cus_P88oz2yzAq6HMV', NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(2, 'test', 'user@ca.com', '2023-02-24 08:44:29', '$2y$10$eT6kMJ4T32Qm44tYDUuCieWmN9Mk/YF4ibWQNL9zil.uTjUFCoRCC', 3, 1, 'ednX5WKZtQ6L81VkGALq7IatZMnGkHdeLUfobllASysCMHm0AAzJ9A30OQh5', '2023-02-24 08:44:08', '2023-04-01 19:30:22', NULL, '2023-04-01 19:30:22', 114, 0, NULL, 'RxLa6XKZ9BRgMvdxwQKHuUWfMDtKF08qZlOX3O0K', 'HelloAI', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(22, 'Asim', 'asim@ca.com', '2023-03-27 18:47:28', '$2y$10$2JiH1DjK4OZt7ANAF44/qu3tCF.woUd/z9.IH43DAqOapbpQo84je', 3, 1, 'YNEyKfX6cy77iLQ254e5jjhjv1s7RQ2OvALfMZOfxkj23ylsLc0WjyFH3bs0', '2023-03-27 18:47:28', '2023-03-27 18:50:47', NULL, '2023-03-27 18:50:47', 0, 0, NULL, 'iLokGxrMEeVYyQI75RF8f0SjwE31MHjPMro0zC4G', 'AskNano.AI', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(24, 'Sam', 'sam@redbutton.tv', '2023-04-02 09:33:52', '$2y$10$ZsWcDQDvFoW90SmqzgelEO4FpTTF86FDPNScv6Rypxz08g45P4ySu', 1, 1, 'mUS2fhiYbt1Jkx6dI0SnnhGNFlkQx2pT4sjSA3aPSDjJhdxxZmOP6NHYXLan', '2023-04-02 09:33:52', '2023-11-29 12:33:47', NULL, '2023-11-29 12:33:47', 0, 0, NULL, 'cLbC4G62RS76r9LwoCtrm3t0aEKtR63KjZYybiwj', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(25, 'Robbie Sawyer', 'robbie@redbutton.tv', '2023-04-02 09:35:16', '$2y$10$vIIm0LSONGtIdNwcPwv/OOGJgejdn8bpgOR6XtifXjyZU8FOOWPKC', 1, 24, 'OptmDtuAnGlLCZ3D4sRW1JRUOZILMC1nPKgXyGcpVPugutYXqSsXcDIBRTXO', '2023-04-02 09:35:16', '2023-11-14 01:22:02', NULL, '2023-11-14 01:22:02', 0, 0, NULL, 'Zqh40roDPSc9s7vd1InqFLe7U6uCakIcdMjAZt6s', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(27, 'Freddy', 'fmuller@rccl.com', '2023-04-02 09:58:41', '$2y$10$XAgJF01ZlpdJOogDoT6B7O3run4hWm5om2HR87uP0ip4jxfhWFe3y', 3, 24, 'ZESdSdXUHsuX2QFd2uruSpvCK4qeWARna4Ulo6K77KpDKunyARVSbP7Dga9N', '2023-04-02 09:58:41', '2023-10-23 21:54:20', NULL, '2023-10-23 21:54:20', 0, 0, NULL, 'Kkj1ezascl3paeqU0hgM963Wy1UTbko3WtGYaU8I', 'ROY.AI', 'boggler-squarepng.png', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(28, 'Seth Sampson', 'seth@sampson-design.com', '2023-04-02 10:07:15', '$2y$10$fy.7rBdsekt3QeuOAAwPvuslF7zWKipsN/HyA6.g2UXkiSjqknisO', 3, 24, 'PLkb2YV2w2xpADVWuk8C6DrOfD0dKuR8f41ChLUV2tkfggZ7ERcukzS88uEH', '2023-04-02 10:07:15', '2023-04-10 05:45:06', NULL, '2023-04-04 04:04:09', 0, 0, NULL, 'LVQqGu4z7JxMwmj33Ys1BsWPtIWmbkOVRAEGuXU3', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(29, 'John Gorman', 'john@bluenanosolutions.com', '2023-04-02 10:08:44', '$2y$10$pNwraYBQn3Zil4Y54C/oLOLF3y9yz5eZP6V4OX8Skz5bGTH/Kif8K', 1, 24, 'OGAwNkLN0qdtJNV4FWyYrGT5ZYLexU6wRMzx5yWHLb3h2IQp3LqHTK78LMpW', '2023-04-02 10:08:44', '2023-09-17 08:11:02', NULL, '2023-09-17 08:11:02', 0, 0, NULL, 'Qvxeoqx66NZhu0nLj1hSuai7U2K1SBmpgjKPsIVt', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(30, 'stephen', 'stephen@redbutton.tv', '2023-04-02 10:20:11', '$2y$10$UCb/ZLokkonQN8xjbymsy.0Jc18dj5yr0tV8u1zakf.D3gJh7EEdy', 3, 24, 'Ta3yFcD84jw461lrsRBniUqNWebQX4Y4gv2LhKcRJxGkMti0y5QNl9sFqbIQ', '2023-04-02 10:20:11', '2023-05-05 00:37:50', NULL, '2023-05-05 00:37:22', 0, 0, NULL, 'VXgL1mAhVD2t13MQgg8c4FeLe2V6iPD56rfmOmCo', 'Automotive.AI', 'yrwpqfy14qjtgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(31, 'DC', 'dc@bluenanosolutions.com', '2023-04-02 10:21:55', '$2y$10$3cOrTI4QGYZekXvAwpvt0.Ohy.Jh.GXkeaZ2Nsl/6am8hfpCA6wtC', 3, 24, 'V8dWHdDmKNqk09EvMs5HhgSOyhODaFfaT6XhVFym0qPFMw8PMbCbSWT2SSEC', '2023-04-02 10:21:55', '2023-07-08 00:45:51', NULL, '2023-07-08 00:45:51', 0, 0, NULL, 'xPnvcALkFAL4r16t8esagnlJYucFgkQ6yIZVuRpG', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(33, 'test', 'test@redbutton.tv', '2023-04-02 10:28:07', '$2y$10$yVmXyc3rdStrPG45bz87COQKwTabh67KJlzAHprMAZm01FMscILAi', 3, 24, 'U8OSxFeoh8KTXuPnB9HqBTWGOrZLSXShUJNTrg2Vz6OXoBcS57BOFzV5nFWw', '2023-04-02 10:28:07', '2023-04-02 10:31:27', NULL, '2023-04-02 10:31:27', 0, 0, NULL, 'WgN0PjoOuZE8f9FiqMszauva7XwqDGJFehyT9gvj', 'AskNano.AI', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(34, 'Basic User', 'basically@redbutton.tv', '2023-04-03 01:23:32', '$2y$10$OMFaqGieTLFXd8jRJxT4aeZvdvTFSypB0cKxt7K.bOvXN/9N2CzTC', 3, 24, 'CWWv6PlAY2O3lSJcCUS2YfemF6ZcenHSSYUnKpPMrgJiTIg4QuPL8Zh7Sjnz', '2023-04-03 01:23:32', '2023-04-04 00:14:18', NULL, '2023-04-04 00:14:18', 0, 0, NULL, 'xQfPWaNMQufgoV6zGCG4rAPj65vOS9ciLyUbTiTp', 'basically.AI', 'ask-nano-avatar-04gif.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(35, 'Guest', 'Guest@redbutton.tv', '2023-04-04 00:15:16', '$2y$10$bP/lKRRQkFyDRmiW4xx32uQ6YjZAqFQVr5nFoKiOL2BuCF97fgaxG', 3, 24, 'wLJB69goCzgsmZYAmpJ2PPpznvu3C9Vs9DPrdJSSMCaNouXVydgS8eILtpMa', '2023-04-04 00:15:16', '2023-04-04 00:52:34', NULL, '2023-04-04 00:52:34', 0, 0, NULL, 'xVAS4QZ881hT9bIokP7wrjATaZrDRElE6ebQu3X6', 'Roy.AI', 'downloadjpg.jpg', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(36, 'Dan', 'dan@nationaltab.com', '2023-04-04 04:07:05', '$2y$10$XlJl5uI07OqcYez/iorW2.zpc3ZkiqHWiGvBtQtQLnahoFKdJYqdq', 3, 24, 'AZC1Znv7QSXlx5wxxRei0ufCVdkO0AaYwmTTS7Rf2HH4ue6NospZUEoxH2V3', '2023-04-04 04:07:05', '2023-04-13 21:32:34', NULL, '2023-04-04 05:04:26', 0, 0, NULL, 'bEkhMdyhtbj0KJFR88eASJFptJ3D929urwvdE2CC', 'NT.ai', 'ask-nano-avatar-04gifgif.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(37, 'Pablo Burrito', 'Paul@redbutton.tv', '2023-04-04 21:32:10', '$2y$10$v9o6.zuhCttDdhPqgDG9nOUeg/aOtAJo/b0JwujgdVpQJKIU6n3Hu', 3, 24, 'EieuhV25i5s9Qj5p0bZWi2sb6PQM6aTYo3Tehx0QsHxKVANbbnz4Zsnbl2xg', '2023-04-04 21:32:10', '2023-10-14 18:52:52', NULL, '2023-10-14 18:52:52', 0, 0, NULL, 'B5M8PBPhajsEroeS0mhISRMLUcHXfr0b955bgt3p', 'Burrito.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(38, 'Logan', 'logansawyer2001@gmail.com', '2023-04-04 22:43:24', '$2y$10$xo/FQLu.KjFdFtmpXZGJaunWkxciqkE.wVuxQCDODDHLP2hsHI7yG', 3, 24, 'wzC213Yx2XrVrwBLyJJ9CMVtpthxsLOut3TLQKY2cf9dN0jYsiExmPbDpSrD', '2023-04-04 22:43:24', '2023-04-10 06:28:24', NULL, '2023-04-10 06:28:24', 0, 0, NULL, 'ftx1teoka2CThpooskVJimHId8vxKJrIvPwsIoFm', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(39, 'Adrienne', 'theuklady@yahoo.com', '2023-04-05 23:37:53', '$2y$10$/wtQNXT4CC5bNe.CQ6iDoeLxhE4qJI8Ls385BIs.vB4uNfcRUJ1RS', 3, 24, 'wafVK2TQRg67YbjP7FC5ncug67I8alYFqhBtbyv0YMLb6TZ12WHZ3j0zMUkf', '2023-04-05 23:37:53', '2023-10-24 12:26:14', NULL, '2023-10-24 12:26:14', 0, 0, NULL, 'trkaaX3mkOZPFPyR06SJu1WHJS4wqRvTKCBj7CQD', 'boggler.AI', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(40, 'Gracie', 'gracie@redbutton.tv', '2023-04-06 10:32:27', '$2y$10$gxcGL4Y6rP0o7NkWq1/pbO9Ggc/A5P7LowFGXQco8UrdP56m2CJw6', 3, 24, '3sUh33UTNAhEue27tMqfax4wsAHgZ0xR2LgKQStQy60wU2qlxk4isqHNW3GZ', '2023-04-06 10:32:27', '2023-09-20 09:13:25', NULL, '2023-09-20 09:13:25', 0, 0, NULL, 'mLU9oUE0WeC6x3h4q2NWi26tcE0cMuKQuWyaxmuf', 'Gracie.AI', '45a0b240-8b4b-4c01-a46b-8b4698f9be83png.png', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(41, 'Test', 'vasco.r3@gmail.com', '2023-04-07 16:38:03', '$2y$10$4XdQkcizbGY29l/vS7WKJ.dZGidaGoIpdEM1MAPPLywLwJKa7bGgq', 3, 1, 'ypH9NzwkqjZevryaMDvCjS0S7wYZ8JQM0usfoZw0ku9k6kk1lga8gZPC1LXG', '2023-04-07 16:29:10', '2023-04-07 16:39:32', NULL, '2023-04-07 16:39:32', 0, 0, NULL, 'oNqs06mliT6DcMj1PcYomSmubXMGlQmaqsH1TNJU', 'AskNano.AI', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(42, 'Mike', 'mikesalee@hotmail.com', '2023-04-08 01:07:01', '$2y$10$wbhw85GuaBmguQo8E0UMPepI89L2jNpbxXj2Rct1xyqnv9Ro69Gpm', 3, 1, 'b8guOie5Cnj27BuYfIJowlN75jVgMe7k2WZG1JeDoCIwSrn96FMCSza5GXgs', '2023-04-08 01:05:00', '2023-04-08 01:12:50', NULL, '2023-04-08 01:12:50', 0, 0, NULL, '6ccvDLhZlFXB0WQeDYS5rwxuvDMYFpgVzLN4AJyh', 'AskNano.AI', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(43, 'Aaron', 'araines@flash.net', '2023-04-09 07:47:59', '$2y$10$LgQ2ERMo/M8YzgCu7AnmuOwUau84BaO5fflryQmgOTPZ7tQdvAy.m', 3, 24, 'TSAEolAO83ZYLXxyg3gG4ACFCeuda0bJwREKSEXkaYRFi9aIfi700xHhcIxF', '2023-04-09 07:47:59', '2023-04-11 10:05:45', NULL, '2023-04-11 10:05:45', 0, 0, NULL, 'mglqeCZoJ09PInNyev8VIzRQK1pvex6CMaT1uj9K', 'boggler.AI', 'ask-nano-avatar-04gif.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(44, 'Jessica Teller', 'azhar3bc@gmail.com', '2023-04-10 22:15:42', '$2y$10$17LRqt3BtEZ4dphEBzwhSeId8hMFDfMClKA6/HhWAHVRdSFhdIb8u', 3, 1, NULL, '2023-04-10 22:15:10', '2023-04-10 22:15:49', NULL, '2023-04-10 22:15:49', 0, 0, NULL, NULL, 'AskNano.AI', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(45, 'Andy', 'andy.schwarz@wearemci.com', '2023-04-10 23:00:46', '$2y$10$jIEj7z8BxOaOfu3C7eTGouCONHb3msefwrdr3m5xB5.DieJ8uzVLe', 3, 24, '83VGZ8qDl2McjrDXuF98dFphvGOk6RRTfTKZlJQ4XoMAzQotXstskMf7QKuF', '2023-04-10 23:00:46', '2023-04-10 23:34:47', NULL, '2023-04-10 23:34:47', 0, 0, NULL, 'vaq0DXS34GbpfdZv8mwIAvrqXINqG8vuYg9tSkPp', 'IRF.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(46, 'Ellie', 'ehurley@ficpnet.com', '2023-04-11 03:19:33', '$2y$10$hqfQfcEMm5v/4eMP4FUFe.JcDIhwbQz8N0bZtU9yF4qE3RnugB4WC', 3, 24, 'uUpudclBaa25YOCMSAEgLgUebwpt4wB7SLNM0L8EWPUIIsU7itIh6z7BXSni', '2023-04-11 03:19:33', '2023-04-12 00:10:55', NULL, '2023-04-12 00:10:55', 0, 0, NULL, 'OVapz1zVBhaorVJccKBTTiAIudQED5Sit7YkmATn', 'FICP.ai', 'ask-nano-avatar-04gifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(47, 'Kaitlin', 'kheininger@ficpnet.com', '2023-04-11 03:25:47', '$2y$10$RcrAsGNBkdqTKqQrqv./Du1A0N1LDAzbs4L6PDa8Y2G0U05QCcR.S', 3, 24, 'qaAQKN3Be9OeoxRWNv6xodqF5FA45u5m0rFY0MWXwwexgEULUFaw6QXfWOWf', '2023-04-11 03:25:47', '2023-04-12 00:10:41', NULL, '2023-04-12 00:10:41', 0, 0, NULL, 'rIv9emtAFCS9ORXwRRBe3v73ZqI7ZrkqDabe7HAH', 'FICP.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(48, 'Kat', 'kseiffert@ficpnet.com', '2023-04-11 03:26:48', '$2y$10$WXB5APHLeFXAlPSSmnbdzen845.KmTlMRLkioznB6TcVVD8rFRsDG', 3, 24, 'COpXC0300tX2NK0qcL5OcUEOzVJ1foyIuHtpKI8WF7W3eWGdpWdsT2ovq8tb', '2023-04-11 03:26:48', '2023-04-12 00:09:43', NULL, '2023-04-12 00:09:43', 0, 0, NULL, 'xhhI3LTs5F9PEPYJa5QAcqYEgKyTRQczfjc0iwkc', 'FICP.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(49, 'Riley', 'rnail@makereadyexperience.com', '2023-04-12 00:26:57', '$2y$10$ICerrTlpyHi9OXBP51T7r.dGdEuDHZiTMuPC/WLxuas228JbuoPBu', 3, 24, 'TI2HbKQqOPcKqIaUurJWlNt7KJv7tax7SwNOhOJiptRFn3SE1lw25Wirrreo', '2023-04-12 00:26:57', '2023-10-24 01:36:40', NULL, '2023-10-24 01:36:40', 0, 0, NULL, 'sBAxwCxX8ZjNRfUPpI2D5rpQNEwXbZL4vTHCHZg9', 'Makeready.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(50, 'Tahira', 'tahira.endean@imexexhibitions.com', '2023-04-12 22:59:09', '$2y$10$quE5QI3UzFZWQUczsUHwZOYXueHMdk8qxNo50SUnPm73is8TrUFiu', 3, 24, 'oHwUL42K3kEqckRFCZXqYS0xKMdy3HTdp2Xemu7GCFs12wrMVri2tCvqLZQ1', '2023-04-12 22:59:09', '2023-04-13 04:21:12', NULL, '2023-04-12 23:07:22', 0, 0, NULL, 'wGcWdFSH5IrY0DOiK4moKsQso0WDo3rg1jGclpP1', 'boggler.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(51, 'Melinda', 'mburdette@mpiweb.org', '2023-04-13 04:12:30', '$2y$10$2AQPXFF/6zMvMC6oTvH5KutBcTBe.8MGJEMIPDm2nQfuvXoCLzIGy', 3, 24, 'Zts2X8P6zOGiUGOmA9txJN8YBCQb8pxMAgXAZzczPd0xzgtuYbuO52TObjVi', '2023-04-13 04:12:30', '2023-04-13 23:02:34', NULL, '2023-04-13 23:02:34', 0, 0, NULL, 'BJ8rzLXk0y3SWAgOklMFxFImriaho9MXphz5UU2R', 'MPI.ai', 'ask-nano-avatar-04gif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(52, 'Megan', 'megan@nationaltab.com', '2023-04-13 21:27:22', '$2y$10$IrWcGHNGwKygLjSay9KLPenl7EvPdzETsn7fu7dL54nBsg6fJqtU6', 3, 24, 'evSb8xeS8tRfomA1lHrU976XsRa4XAdlwgo8dImZ6SC2dxD0ACfY306mB5hK', '2023-04-13 21:27:22', '2023-09-01 03:25:29', NULL, '2023-09-01 03:25:29', 0, 0, NULL, 'b7IXs4k4NltMY9OfiynZSnT0kpLDsXEvzSPNVbn8', 'NT.ai', 'ask-nano-avatar-04gifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(53, 'Joe', 'joe@nationaltab.com', '2023-04-13 21:29:14', '$2y$10$MVTYqwm5H8XzEeA9lK8AoOgNvmL/FSC74Fr4RlQl509F9Y9.jsDU6', 3, 24, 'HbHyFXVhyOMiHw5awnoUvjW4sBxhHZfOvB6jiGVM8gqX7SEujHSyhAas1vDo', '2023-04-13 21:29:14', '2023-04-27 11:30:49', NULL, '2023-04-27 11:30:49', 0, 0, NULL, 'XoVpUblfg34EgYguCXFtSlXvoziOmnZhBXe1y9aA', 'NT.ai', 'ask-nano-avatar-04gifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(54, 'Will', 'will@nationaltab.com', '2023-04-14 04:50:22', '$2y$10$tCv8SP4p/y82QXE1z8UTmuxl9H5GuRM2p7nwdSLD3dj/dcGcVE966', 3, 24, 'gXi8lq8O0urerf0AYGD8gt3kRldy10WVhRMJ8srG4rXD7opoUBol0t9gkJ06', '2023-04-14 04:50:22', '2023-05-06 04:24:42', NULL, '2023-05-06 04:24:42', 0, 0, NULL, 'wY4fM2lXBYldyE88xUKtoUwu6wnWZFRjU5hIcZOE', 'NT.ai', 'ask-nano-avatar-04gifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(55, 'Ashley', 'amartell@rccl.com', '2023-04-14 11:17:07', '$2y$10$mwA4P0jnpm136e8l8RU/7udoy78Xut9VEhCnJQLfWBstQMD2kYvrm', 3, 24, 'CDLNPRaTSqfqjC5ESY8q4qmHLJ6a3zA8DTajeSWq51MCPvcgQIKft96mcB0n', '2023-04-14 11:17:07', '2023-10-24 03:12:40', NULL, '2023-10-24 03:12:40', 0, 0, NULL, '2ZCkMW0G5ZX6WgB83yXKuyiGvwVJ8aJfjXKA8Gre', 'Roy.ai', 'downloadjpgjpg.jpg', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(56, 'Craig', 'cjarrett@rccl.com', '2023-04-14 11:17:39', '$2y$10$NVqYUXlHggjgP3bWUIDWJu5msVT6dxY7sn0WcpXasZwFvCU8Xxca.', 3, 24, 'PFJZcGABOKLVukNbOWz7cVuG2IfSQDOw58I0w5ShwkXPDGhE2hJedSHy3V0L', '2023-04-14 11:17:39', '2023-06-28 07:27:35', NULL, '2023-06-28 07:27:35', 0, 0, NULL, 'xrApgQQcYov4r0jYaBfC4QNE75Qntb2A9XaE4jGe', 'Roy.ai', 'downloadjpgjpg.jpg', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(57, 'Rossio', 'Rossiorivero@rccl.com', '2023-04-14 11:18:06', '$2y$10$uIPIPtn7vWObnJbPTOSxtOsc4k5pVaBgJgSRv1GlMKRt3PGZbZtKi', 3, 24, NULL, '2023-04-14 11:18:06', '2023-04-15 00:54:48', NULL, NULL, 0, 0, NULL, NULL, 'Roy.ai', 'downloadjpgjpg.jpg', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(58, 'Leanne', 'lromanchuk@rccl.com', '2023-04-14 11:18:34', '$2y$10$Hr9aOvR/2bbUT/ISsvtEY.XTTcNpfe0Q/xIlcSMwSQ1N.NGHflWVm', 3, 24, NULL, '2023-04-14 11:18:34', '2023-04-14 11:19:56', NULL, NULL, 0, 0, NULL, NULL, 'Roy.ai', 'downloadjpgjpg.jpg', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(59, 'Matt Helferich', 'matt@nationaltab.com', '2023-04-16 02:49:57', '$2y$10$WI428vssQrFpxL5ViOw3f.3Z8yuLEsiVjNGZ5ykFk9oFb188vbfB.', 3, 24, 'hO6R1al2LBHO5k3BGMsZIQXgfZpQBMQcVGbJuWfNFbMu4tOEZVEhuo2TFzxz', '2023-04-16 02:49:57', '2023-04-18 03:55:21', NULL, '2023-04-18 03:55:21', 0, 0, NULL, 'YerTTHLAMWUoWGEAtUVmM26VDFdXyhAztU0zaj4V', 'NT.ai', 'ask-nano-avatar-04gifgifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(60, 'Umberto', 'ufadani@haamerica.com', '2023-04-16 04:44:00', '$2y$10$teaHRbxIvcEvTU2okMNR8ex2.eWhj9LBIp1yNrr0l/5dJyoLxCKu2', 3, 24, 'OZIqtjchKDviZMYpZ226x2ofZKl45pCysOnGs15buJh0H61e3W5EqaWlEBu0', '2023-04-16 04:44:00', '2023-04-17 04:59:05', NULL, '2023-04-17 04:59:05', 0, 0, NULL, 'OMgkOaktFgzEtHiMv1k5WIifDpJvR9ON3iRsG6yc', 'Umberto.ai', 'ask-nano-avatar-04gifgifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(61, 'Meagan', 'mmullens@haamerica.com', '2023-04-16 04:46:32', '$2y$10$Zgy.htw/gFpUiH0EXoa7Y.dtd/MRGChxBLZSELo.cOuvb1Xf5ad.e', 3, 24, 'en973VXmDF6J02rdnFm1jb9oHt7guMXIbk8sMRx8GUKZeIy2X9y3rIDXDuH8', '2023-04-16 04:46:32', '2023-04-17 04:48:54', NULL, '2023-04-17 04:48:54', 0, 0, NULL, 'HbzCt0AVbmphdxsfAGtamyB8w0GwbYltekuOSPEb', 'AskMeagan.ai', 'ask-nano-avatar-04gifgifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(62, 'John Gorman', 'gorman.john@gmail.com', '2023-04-20 02:52:44', '$2y$10$D65zJCmcsa.xO4UiqSjtoeyibW0EpRNV0HDh6k8b4f6ieJtt.uC9u', 3, 29, '2nOh3c5Oe5jYCpfc2rNttDvo57GsGhgzDmflilcU2d7cnSsEMtnvyb7WQ6ho', '2023-04-20 02:52:44', '2023-04-20 03:00:44', NULL, '2023-04-20 03:00:44', 0, 0, NULL, 'NfyXCaZlemS7DSskgKCQiLeLNWYyJHs7tOeHJIdx', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(63, 'Katie Kelly', 'katie.kellysmith@maritz.com', '2023-04-20 02:57:34', '$2y$10$A9vuuQJzc2wJVM9Wav/YWevVr2.k3dVPLrqoZ/B/mCehxPzJClL6W', 3, 24, 'q6Bui66Ahg5FoPmTdy9aVGg4xjFopvThIo5x8fXgdKteFSWf0mqdVMZdr6sj', '2023-04-20 02:57:34', '2023-04-20 02:59:09', NULL, '2023-04-20 02:58:15', 0, 0, NULL, '2WJDDBeHgtl8YbTMtHvghQRFYkogVSuWEcI0BSvo', 'boggler.ai', 'ask-nano-avatar-04gifgifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(64, 'Greg', 'greg.bogue@maritz.com', '2023-04-21 13:12:49', '$2y$10$u1HG/yg./KTewQR3OaQnOuE.gN6QmRsXu0LPDHLq0H14qcl6Hhro2', 3, 24, 'DyP6CxgqZ7N1NioulpMJY3bcBlDITAzpPhxMxnzp0PmNfV8ESaRudJ9vG5yV', '2023-04-21 13:12:49', '2023-10-13 02:51:28', NULL, '2023-10-13 02:51:28', 0, 0, NULL, '7vqmmeogz7WIOSxxngrhDnGm83FFAORfO2IjY0XM', 'boggler.ai', 'ask-nano-avatar-04gifgifgifgif.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(65, 'Scott', 'mscreel@yahoo.com', '2023-04-24 09:13:37', '$2y$10$eELZ4ACoLY9jZkRKRK2R8etORZk/hdOSyxSOFykyELzgtUiHT98Tu', 3, 24, '5ofn46vDFzuGxpLkDIGIYpX2rnFKWZ20vxf9Lsjrx8yaeJaNFmxPfpvX7N9f', '2023-04-24 09:13:37', '2023-08-11 16:09:12', NULL, '2023-08-11 16:09:12', 0, 0, NULL, 'jo6NtcXhRoP5xovGfC7SN4UnaMymdDnOPO6DttY8', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(66, 'Paki', 'pakieli@hawaii.edu', '2023-04-25 12:06:47', '$2y$10$DSbqGLnV48/bXGDJmKI7BeQTQjQ.hTDO/izf65HpeahY/7sgfEh22', 3, 24, '70RSe476TqyQkojFIGRcrMBjR8knqi4Mkd69lWLV7NFNMu7CU8nXhCuPeFhT', '2023-04-25 12:06:47', '2023-10-24 19:02:50', NULL, '2023-10-24 19:02:50', 0, 0, NULL, 'uNhs97x76VC1Z5L1g30sjs5U5FiRQ3OMSdrFTv1J', 'Paki.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(67, 'Fred', 'ftaylor@taylortaxsolution.com', '2023-04-26 04:59:15', '$2y$10$Pn6yIxL0vY1CBV8tJrUAweING7l84e1O1bE6.Ki6Zt7NCXtHEUSum', 3, 24, NULL, '2023-04-26 04:59:15', '2023-04-26 04:59:15', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(68, 'Gilles', 'tahitiexpress@mac.com', '2023-04-26 13:33:07', '$2y$10$X3QhEt0QUT6BGatKhchkGOVC11HOWACc1EqSkzHAWzQftXkbFMkS.', 3, 24, 'DasQ3EuFfMwyrloGvdzYnGHmkSALmpRy6hkfIg27vo0710YKix77LxyeTo3U', '2023-04-26 13:33:07', '2023-04-27 23:18:30', NULL, '2023-04-27 23:18:30', 0, 0, NULL, 'IcufnPC9YezJKHHYGNWfiBmSLWiUUF62NnYvErwr', 'Gilles.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(69, 'James Epperson', 'james@streamlinelc.com', '2023-04-27 01:27:06', '$2y$10$aFscs2t73qcFm3Xowm6PA.XxmeifUCVVflBn81uX7RF.Y.npJj9mC', 3, 25, 'QvPqsPv41wDYenYYh6lW1ysbphtQTHMhZu6VhAP2RxR0Jkwv7waNbTdM53m8', '2023-04-27 01:27:06', '2023-05-04 01:48:26', NULL, '2023-05-04 01:48:26', 0, 0, NULL, '2S5oi2h3gRxj8ToizjXdM6Knos2ygRULSybKRtzp', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(70, 'Kelly', 'KRovin@rccl.com', '2023-04-27 17:24:07', '$2y$10$e14QuRABQ/WAlHB5e.ZJ4u7gmc.6Pp8yaG2Bjhp33Nc2N1bQfr.Q2', 3, 24, NULL, '2023-04-27 17:24:07', '2023-04-27 17:26:55', NULL, NULL, 0, 0, NULL, NULL, 'Roy.ai', 'downloadjpgjpgjpg.jpg', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(71, 'Odie', 'ORosa@rccl.com', '2023-04-27 17:24:41', '$2y$10$nDFVfO/b4pqMcodFHjxVq.uGZs1w.phVHP3jJbyWHX8VFo4snoPPi', 3, 24, NULL, '2023-04-27 17:24:41', '2023-04-27 17:26:39', NULL, NULL, 0, 0, NULL, NULL, 'Roy.ai', 'downloadjpgjpgjpg.jpg', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(72, 'Bill Gamble', 'bill.gamble@carefreemarketing.com', '2023-04-27 22:31:24', '$2y$10$jC8AncFIZu0aqdPab.Qufe7Q2hDpb/mIMzHSYf6swV7YEnRKA9gta', 3, 25, 'avj5FYouTOtFMkzZjQW6PxKsfbV7P4qqjTCO4tM9BXkpEU0qhH0LUqDRDJQU', '2023-04-27 22:31:24', '2023-10-22 23:47:09', NULL, '2023-10-22 23:47:09', 0, 0, NULL, '1mJ6KPHXYprXuki11opxyF4OSOX6xeX1g7cjNKGQ', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(73, 'Debbie Thole', 'debbie.thole@maritz.com', '2023-04-29 01:29:58', '$2y$10$tlAqQgo7uhR5JC.8boqq6OBLElV6ZGj5bV8iVaA1znEzp61KJisaC', 3, 25, NULL, '2023-04-29 01:29:58', '2023-04-29 01:29:58', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(74, 'Dan Sundt', 'dan@cxomarketing.com', '2023-04-29 01:30:49', '$2y$10$T5a55uAm0FLIu7XhqldXwecJjfTx1UrSvIQOCBDVS7QfM1IR4oWS.', 3, 25, 'lURnTcMQH2ILPjsLybiYeVAnlNiE5hDdrRp4Yh8sE3cOmjAUQ8aBs4xPtNOZ', '2023-04-29 01:30:49', '2023-09-26 22:43:30', NULL, '2023-09-26 22:43:30', 0, 0, NULL, 'ewrTIToXSLAPLdJubR6LEGWQzvuyX9CJYfj0sKBQ', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(75, 'billy', 'bill@bill.com', NULL, '$2y$10$pvY0.jSUF2W2HPK8XMY1bOR7pxHeGANSFIQEiNSHvNkoAvTgQfFde', 3, 1, NULL, '2023-05-02 05:46:51', '2023-05-02 05:46:51', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(76, 'Doug', 'dougpodd@gmail.com', '2023-05-04 01:24:07', '$2y$10$Ay9XOdohgX1tuotYonVK0uEQKXKuf7OiIYHTqHChDFkUR//Xjz6Ly', 3, 24, 'wivAZPoz8G3WdDFRx1zgA6x8IC2VNID5PqkTaTg8q20EyCl8oKv2iKo5kpNM', '2023-05-04 01:24:07', '2023-06-24 01:37:21', NULL, '2023-06-24 01:37:21', 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(77, 'Mary Van Ek', 'mary.vanEk@adp.com', '2023-05-04 02:41:35', '$2y$10$0BpUC0/TENK2MBPetA0n9eDDNVIhZpMNVQhS2zNTWRu2yOGY5vhEW', 3, 25, NULL, '2023-05-04 02:41:35', '2023-05-04 02:41:35', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(78, 'Christine Capurso', 'Christine.capurso@ADP.com', '2023-05-04 02:42:27', '$2y$10$4Pv/VbHWup4iaY78IFuATempo42Xph59/YSQmnJfRZcrOK2wC6Cv6', 3, 25, 'WLQPmz5g0NZYAMf5MXcvEnq6i6FUKg9piLXXcpbwpPCEu68vgQKZpoLMQ16T', '2023-05-04 02:42:27', '2023-05-29 21:47:10', NULL, '2023-05-29 21:47:10', 0, 0, NULL, 'mDmHfWdwfMcXqnjXoAtZJ7OyqZKYMG9xbXHqutEQ', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(79, 'Darrell Drason', 'darrell.drason@adp.com', '2023-05-04 02:43:09', '$2y$10$mDr1ctWXzS3/yu.6JYeRIOGy/TASTvO2nI9MPZJw2.d7RCfLSoJh.', 3, 25, NULL, '2023-05-04 02:43:09', '2023-05-04 02:43:09', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(80, 'Ashley Gottlieb', 'ashley.gottlieb@adp.com', '2023-05-04 02:43:58', '$2y$10$DJGsn4OjP0NteoIKM/XcguC26IrpohstAEdB1jrqGg59wKBbAGLWm', 3, 25, NULL, '2023-05-04 02:43:58', '2023-05-04 02:43:58', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(500, 'Matt Shaw', 'matt.shaw@maritz.com', '2023-10-11 23:29:59', '$2y$10$y5Y0D40mym.ZMJ.7OxoXp.Ky0b0Gj6Edvv4aE7zGU6WMZWHfMWL7W', 3, 25, 'JVhJoftvxsdVaS6KbX3fICbQh6VsdIegEm6JImT4oXBymUpnUk2bnsSq1hVm', '2023-10-11 23:29:59', '2023-10-12 22:00:29', NULL, '2023-10-12 22:00:29', 0, 0, NULL, '8Br08QsC5So0esJo6YdxJCWB8umw4HQXbTBigetA', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(501, 'Haseeb', 'Haseebzemail@gmail.com', '2023-10-16 00:50:05', '$2y$10$OAuNZ8QfCCM7cJ1qPFYidupxpl6jJEAS3CNQXxkS7qBPmJqc9kBDq', 3, 24, 'v3vpCsqove3u793cFxvePn56UFh9feMWlYcxzC0GFe8YRN1eGJEzqF1qDPvh', '2023-10-16 00:50:05', '2023-11-29 12:33:25', NULL, '2023-11-29 12:33:25', 0, 0, NULL, 'B0f6SSpwV8HaHmvNDsifEBzzgvXEr2hREVP8VI66', 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(502, 'Andros Papadopolo', 'apapadopolo@fogo.com', '2023-10-18 05:54:20', '$2y$10$uu3dBiPUgdCC.k8jhZ2P4eCpsUjgHCkJkQPOgpk6QSRVW0HVr9reW', 3, 25, NULL, '2023-10-18 05:54:20', '2023-10-18 05:54:20', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(503, 'Hilma Hernandez', 'hhernandez@fogo.com', '2023-10-18 05:58:34', '$2y$10$SMtth.fc9P/eDjfzbfVD4OrxkIDIajBcLoVSgVEsHKxO4bqkis3fW', 3, 25, NULL, '2023-10-18 05:58:34', '2023-10-18 05:58:34', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(504, 'Kenny Dokuyucu', 'kdokuyucu@fogo.com', '2023-10-18 05:59:30', '$2y$10$1WWeCvHbqqChYc6euHMLgeSLxRBnZmb2PxnjZoXun3nmLHK6Cd9xi', 3, 25, NULL, '2023-10-18 05:59:30', '2023-10-18 05:59:30', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(505, 'Josh Spychalski', 'jspychalski@fogo.com', '2023-10-18 06:00:55', '$2y$10$dlfqyeVoDyBnFrWgzSr9t.E9dVt2v.QQRWvr1QX/jIhqEv0mVlY/O', 3, 25, NULL, '2023-10-18 06:00:55', '2023-10-18 06:00:55', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(506, 'Maite Maxwell', 'cyforytyci@mailinator.com', NULL, '$2y$10$mp68OQmQW4Qur3XKW06xz.F3.iHzebQ1J9kfhSG9S84nu7FbTvL/W', 3, 1, NULL, '2023-10-25 10:43:39', '2023-10-25 10:44:47', NULL, '2023-10-25 10:44:47', 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(507, 'Najaf Zawar', 'zawarnajaf5@gmail.com', NULL, '$2y$10$DXpuXEE.iK63kcPvmVHDuuErOV5NMm6W3WgZhO6I3RqrHpZ3466RO', 3, 1, NULL, '2023-10-25 10:50:44', '2023-10-25 10:50:52', NULL, '2023-10-25 10:50:52', 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(508, 'Muhammad Anas', 'anas170645@gmail.com', '2023-10-02 12:47:38', '$2y$10$pBfE3HZ.aL9jvc8z1wTTs.0il6bE9KIWYf6d.3qD/rUZQ3LrguBVC', 3, 1, NULL, '2023-10-26 12:45:37', '2023-10-26 12:49:30', NULL, '2023-10-26 12:49:30', 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 0, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(509, 'haseeb', 'haseeb@alrighttech.com', NULL, '$2y$10$651X385imgXZf0E0iju7zuV/2Ykl/KqkbqUkFIyYKDY0HTQ3nB5uG', 3, 1, NULL, '2023-11-13 11:54:49', '2023-11-13 12:57:59', NULL, '2023-11-13 12:57:59', 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(510, 'nyqyhuxuci@mailinator.com', 'dyrus@mailinator.com', NULL, '$2y$10$/PnJBv7qCgYL5qB3sfSctOjcIfJqidA1Y02Y4uclIFHG2nrB47A2y', 3, 1, NULL, '2023-11-13 17:17:41', '2023-11-13 17:18:23', NULL, '2023-11-13 17:18:23', 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ref`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `last_seen`, `consumed_tokens`, `available_tokens`, `google_id`, `session_id`, `assistant_name`, `assistant_avatar`, `my_avatar`, `first_visit`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
	(511, 'Susan Ramsay', 'sramsay@cantrav.com', '2023-11-14 01:22:00', '$2y$10$ySbhYatdGSUSFpu8bhsHp.fL3VGjpU.dgW0XJoMUoujVCwQEkU/Bq', 3, 25, NULL, '2023-11-14 01:22:00', '2023-11-14 01:22:00', NULL, NULL, 0, 0, NULL, NULL, 'boggler.ai', 'default.gif', 'default.gif', 1, NULL, NULL, NULL, NULL);

-- Dumping structure for table bogglerbiz.user_groups
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` bigint unsigned NOT NULL,
  `group_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.user_groups: ~5 rows (approximately)
REPLACE INTO `user_groups` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 2, 25, '2023-04-02 09:51:27', '2023-04-02 09:51:27');
REPLACE INTO `user_groups` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(2, 2, 26, '2023-04-02 09:53:11', '2023-04-02 09:53:11');
REPLACE INTO `user_groups` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(3, 2, 2, '2023-04-02 10:30:02', '2023-04-02 10:30:02');
REPLACE INTO `user_groups` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(4, 3, 35, '2023-04-04 00:17:13', '2023-04-04 00:17:13');
REPLACE INTO `user_groups` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(5, 4, 39, '2023-04-05 23:38:50', '2023-04-05 23:38:50');

-- Dumping structure for table bogglerbiz.user_group_names
DROP TABLE IF EXISTS `user_group_names`;
CREATE TABLE IF NOT EXISTS `user_group_names` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `group_name` varchar(255)  NOT NULL,
  `app_name` varchar(254)  DEFAULT 'BlueNanoSolutions ',
  `app_logo` varchar(254)  DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.user_group_names: ~4 rows (approximately)
REPLACE INTO `user_group_names` (`id`, `user_id`, `group_name`, `app_name`, `app_logo`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Testing', 'HelloAli', 'default.png', '2023-03-27 17:59:03', '2023-03-27 17:59:03');
REPLACE INTO `user_group_names` (`id`, `user_id`, `group_name`, `app_name`, `app_logo`, `created_at`, `updated_at`) VALUES
	(2, 24, 'AskNano 1.2', 'AskNano 1.2', 'default.png', '2023-04-02 09:48:59', '2023-04-02 09:56:50');
REPLACE INTO `user_group_names` (`id`, `user_id`, `group_name`, `app_name`, `app_logo`, `created_at`, `updated_at`) VALUES
	(3, 24, 'RCCL', 'Roy.AI', 'default.png', '2023-04-04 00:16:28', '2023-04-04 00:16:28');
REPLACE INTO `user_group_names` (`id`, `user_id`, `group_name`, `app_name`, `app_logo`, `created_at`, `updated_at`) VALUES
	(4, 24, 'THINKERS', 'THINKmachine', 'default.png', '2023-04-05 08:43:48', '2023-04-05 08:43:48');

-- Dumping structure for table bogglerbiz.visitors
DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255)  NOT NULL,
  `new_visits` int NOT NULL DEFAULT '0',
  `unique_visits` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `visitors_ip_address_unique` (`ip_address`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.visitors: ~2 rows (approximately)
REPLACE INTO `visitors` (`id`, `ip_address`, `new_visits`, `unique_visits`, `created_at`, `updated_at`) VALUES
	(1, '127.0.0.1', 13, 1, '2023-12-04 01:00:29', '2023-12-05 02:41:47');
REPLACE INTO `visitors` (`id`, `ip_address`, `new_visits`, `unique_visits`, `created_at`, `updated_at`) VALUES
	(2, '127.0.0.2', 0, 0, '2023-01-04 06:43:34', '2023-12-04 06:43:36');
REPLACE INTO `visitors` (`id`, `ip_address`, `new_visits`, `unique_visits`, `created_at`, `updated_at`) VALUES
	(3, '127.0.0.3', 0, 0, '2023-06-04 06:43:34', '2023-12-04 06:43:36');

-- Dumping structure for table bogglerbiz.widgets
DROP TABLE IF EXISTS `widgets`;
CREATE TABLE IF NOT EXISTS `widgets` (
  `id` bigint unsigned NOT NULL,
  `user_id` int NOT NULL,
  `key` varchar(255)  NOT NULL,
  `success` int NOT NULL DEFAULT '0',
  `failed` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table bogglerbiz.widgets: ~8 rows (approximately)
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(1, 1, 'azee-mosQHDAf', 0, 0, '2023-03-27 12:41:55', '2023-03-27 12:41:55');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(2, 2, 'azee-fktoJGGA', 0, 0, '2023-04-01 20:55:47', '2023-04-01 20:55:47');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(3, 22, 'azee-PKuzqbw2', 0, 0, '2023-04-01 20:59:40', '2023-04-01 20:59:40');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(4, 24, 'azee-K0oYFM3Z', 0, 0, '2023-04-02 11:23:01', '2023-04-02 11:23:01');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(5, 34, 'azee-kXvpqeyb', 0, 0, '2023-04-03 01:38:16', '2023-04-03 01:38:16');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(6, 35, 'azee-I1We2Qwq', 0, 0, '2023-04-05 23:40:58', '2023-04-05 23:40:58');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(7, 29, 'azee-UA4djmkD', 0, 0, '2023-04-20 03:00:26', '2023-04-20 03:00:26');
REPLACE INTO `widgets` (`id`, `user_id`, `key`, `success`, `failed`, `created_at`, `updated_at`) VALUES
	(8, 25, 'azee-uwX1e68O', 0, 0, '2023-06-13 21:45:24', '2023-06-13 21:45:24');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
