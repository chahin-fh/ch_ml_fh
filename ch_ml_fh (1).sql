-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 08:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifbreak`
--

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `Id` int(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `passe` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `monnaire` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`Id`, `nom`, `passe`, `mail`, `monnaire`) VALUES
(7, 'mohamed chahin fhima', 'azerty01', 'chahinfhima@gmail.com', 'Dollar Américain (USD)'),
(15, 'malek fhima', 'wowlol58', 'malekfhima@gmail.com', 'Euro (EUR)'),
(16, 'malekfhima', 'malekfhima123', 'malekfhima1@gmail.com', 'Dinar tunisien (TND)');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `qua` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `Id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`qua`, `code`, `nom`, `prix`, `Id`) VALUES
(100, '126384azeaz', 'bachkoutou', 1500, 7),
(1, '897aze9r89az7er879aze9r87', 'cpu', 5000000000, 7),
(15, 'azeraz252azer1aze', 'cash', 20000, 7),
(50, 'azeraz78989azer', 'djaja', 9, 7),
(5000, 'eazrazer123azer', 'chingom', 50, 7),
(20, 'eazrazer123azeraerazeaze', 'souris', 15000, 7),
(700, 'eazrazer123azerazerazer', 'ma9arouna', 450, 7),
(50, 'eazrazer123azerzearazerazeraze', 'fa9ouss', 1500, 7),
(4, 'malekfhima10', 'malekfhima', 45, 16);

-- --------------------------------------------------------

--
-- Table structure for table `vent`
--

CREATE TABLE `vent` (
  `DV` varchar(11) NOT NULL,
  `QV` varchar(30) NOT NULL,
  `DP` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vent`
--

INSERT INTO `vent` (`DV`, `QV`, `DP`, `id`) VALUES
('2024-12-23', '5', 'djaja', 1),
('2024-12-23', '5', 'bachkoutou', 2),
('2024-12-23', '7', 'djaja', 3),
('2024-12-23', '9', 'fa9ouss', 4),
('2024-12-23', '5', 'malekfhima', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `vent`
--
ALTER TABLE `vent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vent`
--
ALTER TABLE `vent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
