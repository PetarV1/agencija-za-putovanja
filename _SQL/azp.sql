-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 04:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azp`
--

-- --------------------------------------------------------

--
-- Table structure for table `drzava`
--

CREATE TABLE `drzava` (
  `ID` int(20) UNSIGNED NOT NULL,
  `Drzava` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drzava`
--

INSERT INTO `drzava` (`ID`, `Drzava`) VALUES
(1, 'Španjolska'),
(2, 'Maldivi'),
(3, 'Crna Gora'),
(4, 'Francuska'),
(5, 'Turska'),
(6, 'Dominikanska Republika'),
(12, 'Srbija');

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE `grad` (
  `ID` int(20) UNSIGNED NOT NULL,
  `Grad` varchar(30) NOT NULL,
  `DrzavaID` int(20) UNSIGNED NOT NULL,
  `Cijena` varchar(50) NOT NULL,
  `Polazak` date NOT NULL,
  `Dolazak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`ID`, `Grad`, `DrzavaID`, `Cijena`, `Polazak`, `Dolazak`) VALUES
(1, 'Barcelona', 1, '45€', '2021-10-14', '2021-10-20'),
(2, 'Maldivi', 2, '50€', '2021-10-16', '2021-10-22'),
(3, 'Budva', 3, '20€', '2021-10-27', '2021-10-31'),
(4, 'Bora Bora', 4, '60€', '2021-11-09', '2021-11-22'),
(5, 'Instabul', 5, '25€', '2021-11-10', '2021-11-17'),
(6, 'Punta Cana', 6, '55€', '2021-10-24', '2021-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID` int(20) UNSIGNED NOT NULL,
  `ImeHotela` varchar(30) NOT NULL,
  `GradID` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(20) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vrstakorisnika` enum('Admin','Korisnik') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Korisnik',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `password`, `vrstakorisnika`, `created_at`, `updated_at`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `profile_photo_path`) VALUES
(21, 'Petar', 'Vasilj', 'petar.vasilj99@gmail.com', '$2y$10$ZgAtUr.9aNQ/ZO6PwxOkXuFR/vNpJtqiJ9yGmZyTXsaEKc/N8pbza', 'Admin', '2021-08-07 19:54:45', '2021-08-07 19:54:45', NULL, NULL, NULL, NULL),
(22, 'Korisnik', 'K', 'korisnik@mail.com', '$2y$10$uW/t12nQY9rFcQlaQDRciugDl4vtJziIuuDg57tcm.FubsMRHvPqy', 'Korisnik', '2021-08-12 15:52:31', '2021-08-12 15:52:31', NULL, NULL, NULL, NULL),
(23, 'Admin', 'A', 'admin@mail.com', '$2y$10$0kUvzvA9e3oz3vr5B5.UZ.gwrlFd2GqP1Q4soKZGiMz/2DD3LiHRy', 'Admin', '2021-08-12 15:52:40', '2021-08-12 15:52:40', NULL, NULL, NULL, NULL),
(24, 'Pero', 'Peric', 'peroperic@mail.com', '$2y$10$stGMlQ5jZ1kQnSiRoYPfrOt5V0WkY3OgsX5cFm0keNW1HHRd/axq6', 'Korisnik', '2021-08-12 15:53:32', '2021-08-12 15:53:32', NULL, NULL, NULL, NULL),
(25, 'Marko', 'M', 'markom@gmail.com', '$2y$10$MEpkUDlSNL49wSi3sB4oX.DFmGbDLGxHU/H.QSgm4D2EIsbS8mUeu', 'Korisnik', '2021-10-11 23:49:39', '2021-10-11 23:49:39', NULL, NULL, NULL, NULL);

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
-- Table structure for table `putovanje`
--

CREATE TABLE `putovanje` (
  `ID` int(20) UNSIGNED NOT NULL,
  `Polazak` date NOT NULL,
  `Dolazak` date NOT NULL,
  `Cijena` varchar(50) NOT NULL,
  `BrojOsoba` varchar(50) NOT NULL,
  `BrojNoci` varchar(50) NOT NULL,
  `KorisnikID` int(20) UNSIGNED DEFAULT NULL,
  `GradID` int(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putovanje`
--

INSERT INTO `putovanje` (`ID`, `Polazak`, `Dolazak`, `Cijena`, `BrojOsoba`, `BrojNoci`, `KorisnikID`, `GradID`) VALUES
(20, '2021-10-14', '2021-10-20', '135€', '3', '6', 25, 1),
(22, '2021-10-27', '2021-10-31', '240€', '3', '4', 24, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drzava`
--
ALTER TABLE `drzava`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GradDrzavaFK` (`DrzavaID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `HotelGradFK` (`GradID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- Indexes for table `putovanje`
--
ALTER TABLE `putovanje`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PutovanjeKorisnikFK` (`KorisnikID`),
  ADD KEY `PutovanjeGradFK` (`GradID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drzava`
--
ALTER TABLE `drzava`
  MODIFY `ID` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `putovanje`
--
ALTER TABLE `putovanje`
  MODIFY `ID` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grad`
--
ALTER TABLE `grad`
  ADD CONSTRAINT `GradDrzavaFK` FOREIGN KEY (`DrzavaID`) REFERENCES `drzava` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `HotelGradFK` FOREIGN KEY (`GradID`) REFERENCES `grad` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `putovanje`
--
ALTER TABLE `putovanje`
  ADD CONSTRAINT `PutovanjeGradFK` FOREIGN KEY (`GradID`) REFERENCES `grad` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PutovanjeKorisnikFK` FOREIGN KEY (`KorisnikID`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
