-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 10:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmovi`
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
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naslov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rejting` decimal(8,2) NOT NULL,
  `reziser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zanr_id` bigint(20) UNSIGNED NOT NULL,
  `trajanje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `naslov`, `opis`, `rejting`, `reziser`, `zanr_id`, `trajanje`, `poster`) VALUES
(1, 'John Wick', 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...', '8.50', 'Chad Stahelski', 1, '2h', 'https://static1.squarespace.com/static/5ee5ea55da5ceb45cfb7be09/t/5f8d9b7df2518c4f33c62cf0/1603115904218/JOHN+WICK+2.jpg?format=1500w'),
(2, 'Amazing Spiderman', 'Prica filma prati srednjoskolca Pitera Parkera (Andrew Garfield). U jednoj poseti naucno istrazivackom centru Oscorp, ujeda ga pauk razvijan u laboratorijskim uslovima...', '8.20', 'Marc Weeb', 11, '2h20min', 'https://miro.medium.com/max/4050/1*gjIsgVxqtJgTrvpHvUMp_w.jpeg'),
(3, 'Why Him', 'U filmu se radi o ljubavnom paru. Medjutim devojcini roditelji su izricito protiv njenog izlazenja sa tom konkretnomn osobom.', '8.00', 'John Hamburg', 4, '1:45', 'https://1.bp.blogspot.com/-2XFyZAR-XZs/WHQjSGvzGSI/AAAAAAAAM9k/zN4RterKHyAkv2d-vbdWAEA2AoYZ4GcJwCLcB/s1600/Why%2BHim%2Bmovie%2Bposter.jpg'),
(4, 'Catch Me If you Can', 'Glavnog lika igra Leonardo Di Caprio. U filmu se bavi prevarama i falsifikovanjem diploma i dokumenata, sve dok ga jednom ne uhvate...', '8.30', 'Steven Spilberg', 3, '3:30', 'https://images-na.ssl-images-amazon.com/images/I/81V%2Bb69u3xL._SL1500_.jpg'),
(5, 'Parasite', 'Prica filma prati jednu korejsku porodicu, koja se postepeno useljava u kucu bogatasa. To im prolazi, sve dok jednog dana...', '8.00', 'Bong Joon-ho', 4, '2h', 'https://images-na.ssl-images-amazon.com/images/I/81iQLZujrlL._SL1500_.jpg');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_18_195628_kreiranje_zanra', 1),
(5, '2021_01_18_200023_kreiranje_filma', 2),
(6, '2021_01_18_200133_kreiranje_veze', 3),
(7, '2021_01_18_200322_izmena_filma', 4),
(8, '2021_01_18_203808_izmena_zanr', 5),
(9, '2021_01_18_203848_izmena_naziva_tabele_film', 6),
(10, '2021_01_18_211846_dodavanje_postera', 7);

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

-- --------------------------------------------------------

--
-- Table structure for table `zanrs`
--

CREATE TABLE `zanrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zanrs`
--

INSERT INTO `zanrs` (`id`, `naziv`) VALUES
(1, 'triler'),
(2, 'horor'),
(3, 'drama'),
(4, 'komedija'),
(11, 'akcija');

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
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_zanr_id_foreign` (`zanr_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zanrs`
--
ALTER TABLE `zanrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zanrs`
--
ALTER TABLE `zanrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `film_zanr_id_foreign` FOREIGN KEY (`zanr_id`) REFERENCES `zanrs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
