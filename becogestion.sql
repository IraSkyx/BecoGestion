-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 30 juin 2018 à 03:08
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
-- Structure de la table `archived_bill`
--

DROP TABLE IF EXISTS `archived_bill`;
CREATE TABLE IF NOT EXISTS `archived_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ref` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `payement_date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2E54F18C7B00651C` (`status`),
  KEY `IDX_2E54F18C9395C3F3` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `archived_bill_service`
--

DROP TABLE IF EXISTS `archived_bill_service`;
CREATE TABLE IF NOT EXISTS `archived_bill_service` (
  `archived_bill_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`archived_bill_id`,`service_id`),
  KEY `IDX_BAA601D3EFCF62EB` (`archived_bill_id`),
  KEY `IDX_BAA601D3ED5CA9E6` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'adrien', 'adrien', 'adrien@adrien.fr', 'adrien@adrien.fr', 1, 'AinrTwErLmthYggoJeqaZQEJ.tvEyEpR7NBTmf.lS1U', 'MRVE26D66/Uex94gt6yV9LLIxeAHFa6hbu/qP874dsU+qCrDXvt4Hu6/D1wnStY+hGChcWqBtdkOzpnhfuMx+A==', '2018-06-30 03:02:12', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Structure de la table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ref` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `payement_date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7A2119E37B00651C` (`status`),
  KEY `IDX_7A2119E39395C3F3` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bill_service`
--

DROP TABLE IF EXISTS `bill_service`;
CREATE TABLE IF NOT EXISTS `bill_service` (
  `bill_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`,`service_id`),
  KEY `IDX_155EAECD1A8C12F5` (`bill_id`),
  KEY `IDX_155EAECDED5CA9E6` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `building`
--

DROP TABLE IF EXISTS `building`;
CREATE TABLE IF NOT EXISTS `building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `floors` int(11) NOT NULL,
  `basements` int(11) NOT NULL,
  `garden_level` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `building_service`
--

DROP TABLE IF EXISTS `building_service`;
CREATE TABLE IF NOT EXISTS `building_service` (
  `building_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`building_id`,`service_id`),
  KEY `IDX_D65517F84D2A7E12` (`building_id`),
  KEY `IDX_D65517F8ED5CA9E6` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `building_special_services`
--

DROP TABLE IF EXISTS `building_special_services`;
CREATE TABLE IF NOT EXISTS `building_special_services` (
  `building_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`building_id`,`service_id`),
  KEY `IDX_CAE3F4314D2A7E12` (`building_id`),
  KEY `IDX_CAE3F431ED5CA9E6` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siren` int(11) NOT NULL,
  `intra` int(11) NOT NULL,
  `is_cloned` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `address`, `postcode`, `city`, `phone`, `mail`, `siren`, `intra`, `is_cloned`) VALUES
(1, 'BillyBobCompany1', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(2, 'BillyBobCompany2', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(3, 'BillyBobCompany3', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(4, 'BillyBobCompany4', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(5, 'BillyBobCompany5', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(6, 'BillyBobCompany6', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(7, 'BillyBobCompany7', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(8, 'BillyBobCompany8', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(9, 'BillyBobCompany8', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(10, 'BillyBobCompany9', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(11, 'BillyBobCompany10', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(12, 'BillyBobCompany11', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(13, 'BillyBobCompany12', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(14, 'BillyBobCompany13', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(15, 'BillyBobCompany14', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(16, 'BillyBobCompany8', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(17, 'BillyBobCompany9', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(18, 'BillyBobCompany10', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(19, 'BillyBobCompany11', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(20, 'BillyBobCompany12', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(21, 'BillyBobCompany13', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(22, 'BillyBobCompany14', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(23, 'BillyBobCompany8', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(24, 'BillyBobCompany9', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(25, 'BillyBobCompany10', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(26, 'BillyBobCompany11', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(27, 'BillyBobCompany12', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(28, 'BillyBobCompany13', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(29, 'BillyBobCompany14', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(30, 'BillyBobCompany8', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(31, 'BillyBobCompany9', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(32, 'BillyBobCompany10', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(33, 'BillyBobCompany11', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(34, 'BillyBobCompany12', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(35, 'BillyBobCompany13', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(36, 'BillyBobCompany14', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(37, 'BillyBobCompany8', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(38, 'BillyBobCompany9', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(39, 'BillyBobCompany10', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(40, 'BillyBobCompany11', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(41, 'BillyBobCompany12', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(42, 'BillyBobCompany13', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0),
(43, 'BillyBobCompany14', '16 rue BillyBobCompany', 63000, 'BillyBobCity', 606725082, 'BillyBobCompany1@gmail.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `customer_representative`
--

DROP TABLE IF EXISTS `customer_representative`;
CREATE TABLE IF NOT EXISTS `customer_representative` (
  `customer_id` int(11) NOT NULL,
  `representative_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`,`representative_id`),
  KEY `IDX_BC6A0DC49395C3F3` (`customer_id`),
  KEY `IDX_BC6A0DC4FC3FF006` (`representative_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 12, 12, 0.21);

-- --------------------------------------------------------

--
-- Structure de la table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE IF NOT EXISTS `quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `delay` int(11) NOT NULL,
  `vat` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6B71CBF46BF700BD` (`status_id`),
  KEY `IDX_6B71CBF49395C3F3` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `quote_building`
--

DROP TABLE IF EXISTS `quote_building`;
CREATE TABLE IF NOT EXISTS `quote_building` (
  `quote_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  PRIMARY KEY (`quote_id`,`building_id`),
  KEY `IDX_B55C945DB805178` (`quote_id`),
  KEY `IDX_B55C9454D2A7E12` (`building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `representative`
--

DROP TABLE IF EXISTS `representative`;
CREATE TABLE IF NOT EXISTS `representative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_base` tinyint(1) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `function` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_used` tinyint(1) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billed` int(11) NOT NULL,
  `eng_time` double NOT NULL,
  `draw_time` double NOT NULL,
  `grade` int(11) NOT NULL,
  `advancement` double NOT NULL,
  `labels` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:simple_array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slip`
--

DROP TABLE IF EXISTS `slip`;
CREATE TABLE IF NOT EXISTS `slip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `ref` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `followed_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD3943F89395C3F3` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slip_building`
--

DROP TABLE IF EXISTS `slip_building`;
CREATE TABLE IF NOT EXISTS `slip_building` (
  `slip_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  PRIMARY KEY (`slip_id`,`building_id`),
  KEY `IDX_D1646A7E59C7736B` (`slip_id`),
  KEY `IDX_D1646A7E4D2A7E12` (`building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slip_representative`
--

DROP TABLE IF EXISTS `slip_representative`;
CREATE TABLE IF NOT EXISTS `slip_representative` (
  `slip_id` int(11) NOT NULL,
  `representative_id` int(11) NOT NULL,
  PRIMARY KEY (`slip_id`,`representative_id`),
  KEY `IDX_193A580659C7736B` (`slip_id`),
  KEY `IDX_193A5806FC3FF006` (`representative_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `archived_bill`
--
ALTER TABLE `archived_bill`
  ADD CONSTRAINT `FK_2E54F18C7B00651C` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2E54F18C9395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `archived_bill_service`
--
ALTER TABLE `archived_bill_service`
  ADD CONSTRAINT `FK_BAA601D3ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BAA601D3EFCF62EB` FOREIGN KEY (`archived_bill_id`) REFERENCES `archived_bill` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_7A2119E37B00651C` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7A2119E39395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `bill_service`
--
ALTER TABLE `bill_service`
  ADD CONSTRAINT `FK_155EAECD1A8C12F5` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_155EAECDED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `building_service`
--
ALTER TABLE `building_service`
  ADD CONSTRAINT `FK_D65517F84D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D65517F8ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `building_special_services`
--
ALTER TABLE `building_special_services`
  ADD CONSTRAINT `FK_CAE3F4314D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CAE3F431ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `customer_representative`
--
ALTER TABLE `customer_representative`
  ADD CONSTRAINT `FK_BC6A0DC49395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC6A0DC4FC3FF006` FOREIGN KEY (`representative_id`) REFERENCES `representative` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `FK_6B71CBF46BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `FK_6B71CBF49395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `quote_building`
--
ALTER TABLE `quote_building`
  ADD CONSTRAINT `FK_B55C9454D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B55C945DB805178` FOREIGN KEY (`quote_id`) REFERENCES `quote` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `slip`
--
ALTER TABLE `slip`
  ADD CONSTRAINT `FK_FD3943F89395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `slip_building`
--
ALTER TABLE `slip_building`
  ADD CONSTRAINT `FK_D1646A7E4D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D1646A7E59C7736B` FOREIGN KEY (`slip_id`) REFERENCES `slip` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `slip_representative`
--
ALTER TABLE `slip_representative`
  ADD CONSTRAINT `FK_193A580659C7736B` FOREIGN KEY (`slip_id`) REFERENCES `slip` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_193A5806FC3FF006` FOREIGN KEY (`representative_id`) REFERENCES `representative` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
