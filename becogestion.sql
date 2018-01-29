-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 jan. 2018 à 23:48
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

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
-- Structure de la table `advancement`
--

DROP TABLE IF EXISTS `advancement`;
CREATE TABLE IF NOT EXISTS `advancement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `advancement`
--

INSERT INTO `advancement` (`id`, `value`, `date`) VALUES
(9, 0, '2018-01-25 23:21:41'),
(10, 0, '2018-01-25 23:21:41'),
(11, 0, '2018-01-25 23:21:41'),
(12, 0, '2018-01-25 23:21:41');

-- --------------------------------------------------------

--
-- Structure de la table `bg_user`
--

DROP TABLE IF EXISTS `bg_user`;
CREATE TABLE IF NOT EXISTS `bg_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8220EC1F92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8220EC1FA0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8220EC1FC05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bg_user`
--

INSERT INTO `bg_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(5, 'adrien', 'adrien', 'adrien@adrien.com', 'adrien@adrien.com', 1, 'R7gRsPeMdNV8yjNqIn96fhQHcvSnOCQJwVMG4rQq714', 'rKmMPnVv9iZE90a2or47EjcCv/eGrWrPf8iR2F84YjT8b9nXLVISK44Q9s0ZE9Vob7sMzR9J0f3grxyXOxw/Zg==', '2018-01-25 23:22:44', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `company_name`, `address`, `postcode`, `city`) VALUES
(3, 'Billy', 'Bob', 'BillyBobCompany', '16, rue billy', 63000, 'BillyCity');

-- --------------------------------------------------------

--
-- Structure de la table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
CREATE TABLE IF NOT EXISTS `parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `parameters`
--

INSERT INTO `parameters` (`id`, `eng_rate`, `draw_rate`, `vat`) VALUES
(1, 9.8, 7.2, 19.6);

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plan`
--

INSERT INTO `plan` (`id`, `level`, `drawing`) VALUES
(3, 'DDC', 'Descente de charges'),
(4, 'Voile par passes', 'Coffrage');

-- --------------------------------------------------------

--
-- Structure de la table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE IF NOT EXISTS `quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6B71CBF46BF700BD` (`status_id`),
  UNIQUE KEY `UNIQ_6B71CBF49395C3F3` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `quote`
--

INSERT INTO `quote` (`id`, `status_id`, `customer_id`, `date`, `eng_rate`, `draw_rate`, `vat`) VALUES
(1, 2, 3, '2018-01-25 23:21:41', 8.8, 9.9, 19.6);

-- --------------------------------------------------------

--
-- Structure de la table `quote_service`
--

DROP TABLE IF EXISTS `quote_service`;
CREATE TABLE IF NOT EXISTS `quote_service` (
  `quote_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`quote_id`,`service_id`),
  KEY `IDX_E723256DB805178` (`quote_id`),
  KEY `IDX_E723256ED5CA9E6` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `quote_service`
--

INSERT INTO `quote_service` (`quote_id`, `service_id`) VALUES
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `building` int(11) NOT NULL,
  `billed` int(11) NOT NULL,
  `eng_time` double NOT NULL,
  `draw_time` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E19D9AD2E899029B` (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `plan_id`, `building`, `billed`, `eng_time`, `draw_time`) VALUES
(3, 3, 1, 0, 10, 5),
(4, 4, 2, 0, 15, 7);

-- --------------------------------------------------------

--
-- Structure de la table `service_advancement`
--

DROP TABLE IF EXISTS `service_advancement`;
CREATE TABLE IF NOT EXISTS `service_advancement` (
  `service_id` int(11) NOT NULL,
  `advancement_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`,`advancement_id`),
  KEY `IDX_5ECE07A0ED5CA9E6` (`service_id`),
  KEY `IDX_5ECE07A08FC2BCC8` (`advancement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `service_advancement`
--

INSERT INTO `service_advancement` (`service_id`, `advancement_id`) VALUES
(3, 9),
(3, 10),
(4, 11),
(4, 12);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `type`, `message`) VALUES
(2, 'warning', 'En attente');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `FK_6B71CBF46BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `FK_6B71CBF49395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `quote_service`
--
ALTER TABLE `quote_service`
  ADD CONSTRAINT `FK_E723256DB805178` FOREIGN KEY (`quote_id`) REFERENCES `quote` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E723256ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_E19D9AD2E899029B` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`);

--
-- Contraintes pour la table `service_advancement`
--
ALTER TABLE `service_advancement`
  ADD CONSTRAINT `FK_5ECE07A08FC2BCC8` FOREIGN KEY (`advancement_id`) REFERENCES `advancement` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5ECE07A0ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
