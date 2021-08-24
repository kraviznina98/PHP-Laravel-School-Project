-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 02:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knjige`
--
CREATE DATABASE IF NOT EXISTS `knjige` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `knjige`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naslov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pisac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zanr_id` bigint(20) UNSIGNED NOT NULL,
  `brStrana` int(255) NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rejting` double(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `naslov`, `opis`, `pisac`, `zanr_id`, `brStrana`, `poster`, `rejting`) VALUES
(1, 'Jedan Hitac', '„Sjajno, neukrotivo… nestvarno, čisto zlato. Ova knjiga vas prosto naelektriše… A čitav serijal od vas napravi zavisnika.“ New York Times', 'Chad Stahelski', 11, 473, 'https://www.laguna.rs/_img/korice/2071/jedan_hitac-li_cajld_v.jpg', 8),
(2, 'Potraga za lasicom\r\n', 'Majstor trilera vam predstavlja novu adrenalinsku priču o Aleksu Krosu.', 'Džejms Paterson', 11, 405, 'https://www.laguna.rs/_img/korice/1362/potraga_za_lasicom-dzejms_paterson_v.jpg', 8),
(3, 'Čovek po imenu Uve', 'Bestseler New York Timesa koji je naprečac osvojio svet!', 'Fredrik Bakman', 4, 360, 'https://www.laguna.rs/_img/korice/3366/covek_po_imenu_uve_v.jpg', 9),
(4, 'Pantaleon i posetiteljke', '„Služi Armiji, služi\r\nTo ti je većma čast\r\nSluži Armiji, služi\r\nVojnicima u slast“', 'Mario Vargas Ljosa', 4, 286, 'https://www.laguna.rs/_img/korice/1608/pantaleon_i_posetiteljke-mario_vargas_ljosa_v.jpg', 7),
(5, 'Alijenista', '„Užasavajući i očaravajući roman... Obožavaće ga ljubitelji filmova Sedam i Kad jaganjci utihnu.“ Flint Journal', 'Kejleb Kar', 2, 2, 'https://www.laguna.rs/_img/korice/69/alijenista-kejleb_kar_v.jpg', 9),
(10, 'Deca noći', '„Njegov najbolji roman do sada... Priča koja ugrize i ne pušta.“ Kirkus Reviews', 'Den Simons', 2, 498, 'https://www.laguna.rs/_img/korice/3002/deca_noci-den_simons_v.jpg', 10),
(11, 'Kraljevstvo', '\"Nesbe je epskim zamasima razorio iluziju o jednoj porodici i srećnoj maloj planinskoj zajednici.“ Kirkus Reviews', 'Ju Nesbe', 1, 520, 'https://www.laguna.rs/_img/korice/4858/kraljevstvo-ju_nesbe_v.jpg', 10),
(12, 'Drugi San', '„Jednom rečju: sjajno. U dve reči: neodoljivo štivo. U tri reči: kupite je sutra. U četiri: a još bolje danas.“ Stiven King', 'Robert Heris', 1, 304, 'https://www.laguna.rs/_img/korice/4944/drugi_san-robert_heris_v.jpg', 10),
(13, 'Majka Ubice', 'Sin me je pitao: Da li bi me volela da nekog ubijem? I to je bilo pre nego što smo znali. Jer moj sin je bio samo dečak kad je pitao: Da li bi me volela da nekog ubijem? A ja sam odgovorila: Da.', 'Ida Linde', 3, 168, 'https://www.laguna.rs/_img/korice/4866/majka_ubice-ida_linde_v.jpg', 7);

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
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_zanr_id_foreign` (`zanr_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `book_zanr_id_foreign` FOREIGN KEY (`zanr_id`) REFERENCES `zanrs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
