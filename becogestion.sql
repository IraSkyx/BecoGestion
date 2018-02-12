-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 12 fév. 2018 à 19:01
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `advancement`
--

INSERT INTO `advancement` (`id`, `value`, `date`) VALUES
(13, 10, '2018-02-10 23:27:55'),
(14, 20, '2018-02-10 23:27:55'),
(15, 0, '2018-02-10 23:27:55'),
(16, 0, '2018-02-10 23:27:55'),
(17, 0, '2018-02-10 23:27:55'),
(18, 0, '2018-02-10 23:27:55'),
(19, 100, '2018-02-10 23:43:47'),
(20, 100, '2018-02-10 23:55:58'),
(21, 10, '2018-02-11 00:02:25'),
(22, 0, '2018-02-11 00:04:49'),
(23, 20, '2018-02-11 00:24:35'),
(24, 50, '2018-02-11 00:24:55'),
(25, 0, '2018-02-11 00:36:11'),
(26, 0, '2018-02-11 00:36:15'),
(27, 20, '2018-02-11 00:36:18'),
(28, 0, '2018-02-11 00:36:30'),
(29, 30, '2018-02-11 15:33:09'),
(30, 40, '2018-02-11 15:35:39'),
(31, 20, '2018-02-11 15:36:20');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bg_user`
--

INSERT INTO `bg_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'adrien', 'adrien', 'adrien@adrien.com', 'adrien@adrien.com', 1, 'O.cCI.Ae9MFXamnxQ2FCwiTUuGlBpg8CVYOMwv/oc/Q', 'x7YWR2cimok9iiY1GaGOTsoQAjxuIxAlZYvuGaYSHCKkpEvC+oLEZgKgtEPkpIUEz6fXZYpPzZVoAbGk2/5ceg==', '2018-02-12 16:05:18', NULL, NULL, 'a:0:{}');

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
  `is_cloned` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `company_name`, `address`, `postcode`, `city`, `is_cloned`) VALUES
(5, 'Billy', 'Bob', 'BillyBobCompany', '16, rue billy', 63000, 'BillyCity', 0),
(13, 'Billy', 'Bob', 'BillyBobCompany', '16, rue billy', 63000, 'BillyCity', 1),
(14, 'Billy', 'Bob', 'BillyBobCompany', '16, rue billy', 63000, 'BillyCity', 1);

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_906517446BF700BD` (`status_id`),
  KEY `IDX_906517449395C3F3` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`id`, `status_id`, `customer_id`, `date`, `eng_rate`, `draw_rate`, `vat`, `ref`) VALUES
(2, 14, 13, '2018-02-10 23:27:55', 8, 12, 0.21, 3),
(3, 15, 14, '2018-02-10 23:27:55', 8, 12, 0.21, 3);

-- --------------------------------------------------------

--
-- Structure de la table `invoice_service`
--

DROP TABLE IF EXISTS `invoice_service`;
CREATE TABLE IF NOT EXISTS `invoice_service` (
  `invoice_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`invoice_id`,`service_id`),
  KEY `IDX_1344AC012989F1FD` (`invoice_id`),
  KEY `IDX_1344AC01ED5CA9E6` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `invoice_service`
--

INSERT INTO `invoice_service` (`invoice_id`, `service_id`) VALUES
(2, 12),
(2, 13),
(3, 14),
(3, 15);

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
(1, 8, 12, 0.21);

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plan`
--

INSERT INTO `plan` (`id`, `code`, `drawing`, `level`) VALUES
(1, 1, 'Voile par passe', 'Sous-sol'),
(2, 2, 'DDC', 'Descente de charges');

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
  KEY `IDX_6B71CBF49395C3F3` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `quote`
--

INSERT INTO `quote` (`id`, `status_id`, `customer_id`, `date`, `eng_rate`, `draw_rate`, `vat`) VALUES
(3, 6, 5, '2018-02-10 23:27:55', 8, 12, 0.21),
(4, 4, 5, '2018-02-11 00:04:49', 8, 12, 0.21),
(5, 17, 5, '2018-02-11 15:33:09', 8, 12, 0.21);

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
(3, 1),
(3, 3),
(4, 4),
(5, 16);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `building` int(11) NOT NULL,
  `billed` int(11) NOT NULL,
  `eng_time` double NOT NULL,
  `draw_time` double NOT NULL,
  `grade` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `building`, `billed`, `eng_time`, `draw_time`, `grade`, `level`, `drawing`, `code`) VALUES
(1, 1, 0, 10, 5, 0, 'DDC', 'Descente de charges', 0),
(2, 2, 0, 15, 7, 0, 'Voile par passes', 'Coffrage', 0),
(3, 4, 0, 2, 2, 0, 'bla', 'bla', 0),
(4, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(6, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(7, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(8, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(9, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(10, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(11, 5, 0, 5, 5, 0, 'ezvzv', 'vezvz', 0),
(12, 1, 0, 10, 5, 0, 'DDC', 'Descente de charges', 0),
(13, 4, 0, 2, 2, 0, 'bla', 'bla', 0),
(14, 1, 0, 10, 5, 0, 'DDC', 'Descente de charges', 0),
(15, 4, 0, 2, 2, 0, 'bla', 'bla', 0),
(16, 2, 0, 2, 2, 0, 'voile par passe', 'sous sol', 2);

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
(1, 28),
(4, 22),
(16, 31);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `type`, `message`) VALUES
(3, 'warning', 'En attente'),
(4, 'warning', 'En attente'),
(5, 'primary', 'En cours'),
(6, 'warning', 'En attente'),
(8, 'warning', 'En attente'),
(9, 'warning', 'En attente'),
(10, 'warning', 'En attente'),
(11, 'warning', 'En attente'),
(12, 'warning', 'En attente'),
(13, 'warning', 'En attente'),
(14, 'warning', 'En attente'),
(15, 'warning', 'En attente'),
(16, 'warning', 'En attente'),
(17, 'primary', 'En cours');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `FK_906517446BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `FK_906517449395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `invoice_service`
--
ALTER TABLE `invoice_service`
  ADD CONSTRAINT `FK_1344AC012989F1FD` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1344AC01ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `service_advancement`
--
ALTER TABLE `service_advancement`
  ADD CONSTRAINT `FK_5ECE07A08FC2BCC8` FOREIGN KEY (`advancement_id`) REFERENCES `advancement` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5ECE07A0ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
