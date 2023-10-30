-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 09:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bozz_innovations`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_wood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neck_wood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `title`, `img`, `brand`, `body_wood`, `neck_wood`, `description`, `tags`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nobis est non id omnis et at.', NULL, 'Crist, Morar and Abshire', 'Voluptas et voluptates quia ipsum voluptas quas facilis neque.', 'Et sit atque voluptates voluptates.', 'Et non nostrum dolor omnis. Tenetur qui perspiciatis et neque esse eius. Voluptatum cumque deserunt exercitationem placeat repellat consectetur soluta. Incidunt mollitia sunt et. Est voluptates est nostrum aut dolorem est aut. Ut voluptatum quos rem eum excepturi quidem.', 'laravel, api, backend', '2023-10-25 21:15:44', '2023-10-25 21:15:44'),
(2, 2, 'asef', 'images/0zvYtl7BxvEwUQ4f8mwnBw6z2q0Oouqmh5NOxEOq.jpg', 'asdf', 'asd', 'asdf', 'asdf', 'asdf, asdfk, asdfs', '2023-10-25 21:16:17', '2023-10-25 21:16:17'),
(3, 2, 'asdfsadf', 'images/XzL6295eaTaIVlw7SWR1vohIijJa9dZHNGceb9wV.jpg', 'asdf', 'asdf', 'asdf', 'asdfasdf', 'asdf', '2023-10-25 21:20:30', '2023-10-25 21:20:30'),
(4, 2, 'asdfsdfsadf', 'images/tjFArODGfqjejgKVU0JiGgSsUzSnMFka07xEM3HC.jpg', 'asdf', 'asdf', 'asdf', 'asdfsadf', 'asdf', '2023-10-25 21:21:26', '2023-10-25 21:21:26'),
(5, 2, 'kjhgf', 'images/OJbpd6kn5COKgw5OtFFZZXJu3q6vi18mhbx8JhrR.jpg', 'hgfd', 'fgdfs', 'dfsa', 'fgdsa', 'fgds', '2023-10-25 21:25:47', '2023-10-25 21:25:47'),
(6, 2, 'Idk', 'images/62nox27Y80yhSai8i1itspKmEzXXq6T6e8aMqQXP.jpg', 'asdf', 'kj', 'kl', 'sadf', 'kl', '2023-10-26 10:54:09', '2023-10-26 10:54:09'),
(7, 2, 'help', 'images/AGSugMQXKRG5vM0Jsz0Q7QZ4tb3RQsIWuGEaVELZ.png', 'asdf', 'sdf', 'df', 'cvb', 'asdf', '2023-10-26 11:07:13', '2023-10-26 11:07:13'),
(9, 2, 'gh', 'logos/gqPbjHpJa5D5nEA4PkoMrHTfm7f70wqAom8XqwKh.jpg', 'dfgh', 'sfgh', 'sgfh', 'sfgh', 'sg', '2023-10-26 11:35:05', '2023-10-26 11:35:05'),
(10, 2, 'dfg', 'logos/mAqJ022eFaykVo6fKFx9zlRFVvAP3GcK2XIpSZKx.jpg', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2023-10-26 11:45:58', '2023-10-26 11:45:58'),
(11, 2, 'This works?', 'logos/cvGkjPuqcXrBS2GoMVXBtUfOC0klzLac6KQVRyMV.jpg', 'Ibanez', 'Maple', 'Mahogany', 'does this really work now????', 'ibanez, electric', '2023-10-26 12:30:49', '2023-10-26 12:30:49');

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
(5, '2023_07_22_002505_create_listings_table', 1),
(32, '2014_10_12_000000_create_users_table', 2),
(33, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(34, '2019_08_19_000000_create_failed_jobs_table', 2),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(36, '2023_10_25_124422_create_listings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@mail.com', '2023-10-25 21:15:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SbHFnWQreJ', '2023-10-25 21:15:44', '2023-10-25 21:15:44'),
(2, 'Jay', 'jay@gmail.com', NULL, '$2y$10$apDR4VmAy2dm2hoxE3LVtO9m47c4IxtHzZ2pwaCl.eR7IzUyruBv2', NULL, '2023-10-25 21:15:58', '2023-10-25 21:15:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
