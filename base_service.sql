-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 juil. 2018 à 22:18
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `becogestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `base_service`
--

DROP TABLE IF EXISTS `base_service`;
CREATE TABLE IF NOT EXISTS `base_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `base_service`
--

INSERT INTO `base_service` (`id`, `level`, `drawing`) VALUES
(1, 'DDC', 'Descente de charges'),
(2, 'Voiles par passes', 'Coffrage'),
(3, 'Voiles par passes', 'Coupes'),
(4, 'Voiles par passes', 'Ferraillage'),
(5, 'Fondation', 'Coffrage'),
(6, 'Fondation', 'Coupes'),
(7, 'Fondation', 'Ferraillage'),
(8, 'Soubassement', 'Coffrage'),
(9, 'Soubassement', 'Coupes'),
(10, 'Soubassement', 'Ferraillage longrine'),
(11, 'Soubassement', 'Ferraillage dalle'),
(12, 'Soubassement', 'Réseau'),
(13, 'Escaliers infra', 'Coffrage'),
(14, 'Escaliers infra', 'Ferraillage'),
(15, 'PH -3', 'Coffrage'),
(16, 'PH -3', 'Coupes'),
(17, 'PH -3', 'Ferraillage élévation\r\n'),
(18, 'PH -3', 'Ferraillage poutres'),
(19, 'PH -3', 'Ferraillage dalle'),
(20, 'PH -2', 'Coffrage'),
(21, 'PH -2', 'Coupes'),
(22, 'PH -2', 'Ferraillage élévation'),
(23, 'PH -2', 'Ferraillage poutres'),
(24, 'PH -2', 'Ferraillage dalle'),
(25, 'PH -1', 'Coffrage'),
(26, 'PH -1', 'Coupes'),
(27, 'PH -1', 'Ferraillage élévation'),
(28, 'PH -1', 'Ferraillage poutres'),
(29, 'PH -1', 'Ferraillage dalle'),
(30, 'Escaliers super', 'Coffrage '),
(31, 'Escaliers super', 'Ferraillage'),
(32, 'PH RDJ', 'Coffrage'),
(33, 'PH RDJ', 'Coupes'),
(34, 'PH RDJ', 'Ferraillage élévation'),
(35, 'PH RDJ', 'Ferraillage poutres'),
(36, 'PH RDJ', 'Ferraillage dalle'),
(37, 'PH RDC', 'Coffrage'),
(38, 'PH RDC', 'Coupes'),
(39, 'PH RDC', 'Ferraillage élévation'),
(40, 'PH RDC', 'Ferraillage poutres'),
(41, 'PH RDC', 'Ferraillage dalle'),
(42, 'PH 1', 'Coffrage'),
(43, 'PH 1', 'Coupes'),
(44, 'PH 1', 'Ferraillage élévation'),
(45, 'PH 1', 'Ferraillage poutres'),
(46, 'PH 1', 'Ferraillage dalle'),
(47, 'PH 2', 'Coffrage'),
(48, 'PH 2', 'Coupes'),
(49, 'PH 2', 'Ferraillage élévation'),
(50, 'PH 2', 'Ferraillage poutres'),
(51, 'PH 2', 'Ferraillage dalle'),
(52, 'PH 3', 'Coffrage'),
(53, 'PH 3', 'Coupes'),
(54, 'PH 3', 'Ferraillage élévation'),
(55, 'PH 3', 'Ferraillage poutres'),
(56, 'PH 3', 'Ferraillage dalle'),
(57, 'PH 4', 'Coffrage'),
(58, 'PH 4', 'Coupes'),
(59, 'PH 4', 'Ferraillage élévation'),
(60, 'PH 4', 'Ferraillage poutres'),
(61, 'PH 4', 'Ferraillage dalle'),
(62, 'PH 5', 'Coffrage'),
(63, 'PH 5', 'Coupes'),
(64, 'PH 5', 'Ferraillage élévation'),
(65, 'PH 5', 'Ferraillage poutres'),
(66, 'PH 5', 'Ferraillage dalle'),
(67, 'PH 6', 'Coffrage'),
(68, 'PH 6', 'Coupes'),
(69, 'PH 6', 'Ferraillage élévation'),
(70, 'PH 6', 'Ferraillage poutres'),
(71, 'PH 6', 'Ferraillage dalle'),
(72, 'PH 7', 'Coffrage'),
(73, 'PH 7', 'Coupes'),
(74, 'PH 7', 'Ferraillage élévation'),
(75, 'PH 7', 'Ferraillage poutres'),
(76, 'PH 7', 'Ferraillage dalle'),
(77, 'PH 8', 'Coffrage'),
(78, 'PH 8', 'Coupes'),
(79, 'PH 8', 'Ferraillage élévation'),
(80, 'PH 8', 'Ferraillage poutres'),
(81, 'PH 8', 'Ferraillage dalle'),
(82, 'PH 9', 'Coffrage'),
(83, 'PH 9', 'Coupes'),
(84, 'PH 9', 'Ferraillage élévation'),
(85, 'PH 9', 'Ferraillage poutres'),
(86, 'PH 9', 'Ferraillage dalle'),
(87, 'N/A', 'Grue'),
(88, 'N/A', 'Recolement');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
