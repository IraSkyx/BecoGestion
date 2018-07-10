-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-becogestion.alwaysdata.net
-- Generation Time: Jul 09, 2018 at 05:39 PM
-- Server version: 10.2.13-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `becogestion_becogestion`
--

-- --------------------------------------------------------

--
-- Table structure for table `archived_bill`
--

CREATE TABLE `archived_bill` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `payement_date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `quote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archived_bill_service`
--

CREATE TABLE `archived_bill_service` (
  `archived_bill_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `base_service`
--

CREATE TABLE `base_service` (
  `id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `base_service`
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

-- --------------------------------------------------------

--
-- Table structure for table `bg_user`
--

CREATE TABLE `bg_user` (
  `id` int(11) NOT NULL,
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
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bg_user`
--

INSERT INTO `bg_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'adrien', 'adrien', 'adrien@adrien.fr', 'adrien@adrien.fr', 1, 'AinrTwErLmthYggoJeqaZQEJ.tvEyEpR7NBTmf.lS1U', 'MRVE26D66/Uex94gt6yV9LLIxeAHFa6hbu/qP874dsU+qCrDXvt4Hu6/D1wnStY+hGChcWqBtdkOzpnhfuMx+A==', '2018-07-09 17:33:59', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `payement_date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_service`
--

CREATE TABLE `bill_service` (
  `bill_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `floors` int(11) NOT NULL,
  `basements` int(11) NOT NULL,
  `garden_level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `building_service`
--

CREATE TABLE `building_service` (
  `building_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `building_special_services`
--

CREATE TABLE `building_special_services` (
  `building_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siren` int(11) NOT NULL,
  `intra` int(11) NOT NULL,
  `is_cloned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_representative`
--

CREATE TABLE `customer_representative` (
  `customer_id` int(11) NOT NULL,
  `representative_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `id` int(11) NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `vat` double NOT NULL,
  `members` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:simple_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `eng_rate`, `draw_rate`, `vat`, `members`) VALUES
(1, 12, 12, 0.21, 'Nicolas Lenoir,Yves Kremer,Claude Roméro,Adrien Lenoir');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `eng_rate` double NOT NULL,
  `draw_rate` double NOT NULL,
  `delay` int(11) NOT NULL,
  `vat` double NOT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote_building`
--

CREATE TABLE `quote_building` (
  `quote_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `representative`
--

CREATE TABLE `representative` (
  `id` int(11) NOT NULL,
  `is_base` tinyint(1) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `function` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `representative`
--

INSERT INTO `representative` (`id`, `is_base`, `first_name`, `last_name`, `function`, `phone`, `mail`) VALUES
(1, 1, NULL, NULL, 'ÉTANCHÉITÉ', NULL, NULL),
(2, 1, NULL, NULL, 'PLOMBERIE', NULL, NULL),
(3, 1, NULL, NULL, 'ÉLECTRICIEN', NULL, NULL),
(4, 1, NULL, NULL, 'MENUISERIE EXT', NULL, NULL),
(5, 1, NULL, NULL, 'MENUISERIE INT', NULL, NULL),
(6, 1, NULL, NULL, 'TERRASSIER', NULL, NULL),
(7, 1, NULL, NULL, 'ARMATURIER', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `is_used` tinyint(1) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drawing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billed` int(11) NOT NULL,
  `eng_time` double NOT NULL,
  `draw_time` double NOT NULL,
  `grade` int(11) NOT NULL,
  `advancement` double NOT NULL,
  `labels` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '(DC2Type:simple_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slip`
--

CREATE TABLE `slip` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `followed_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `representatives` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '(DC2Type:simple_array)',
  `quote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slip_building`
--

CREATE TABLE `slip_building` (
  `slip_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slip_representative`
--

CREATE TABLE `slip_representative` (
  `slip_id` int(11) NOT NULL,
  `representative_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archived_bill`
--
ALTER TABLE `archived_bill`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2E54F18C7B00651C` (`status`),
  ADD KEY `IDX_2E54F18C9395C3F3` (`customer_id`);

--
-- Indexes for table `archived_bill_service`
--
ALTER TABLE `archived_bill_service`
  ADD PRIMARY KEY (`archived_bill_id`,`service_id`),
  ADD KEY `IDX_BAA601D3EFCF62EB` (`archived_bill_id`),
  ADD KEY `IDX_BAA601D3ED5CA9E6` (`service_id`);

--
-- Indexes for table `base_service`
--
ALTER TABLE `base_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_user`
--
ALTER TABLE `bg_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8220EC1F92FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8220EC1FA0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8220EC1FC05FB297` (`confirmation_token`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7A2119E37B00651C` (`status`);

--
-- Indexes for table `bill_service`
--
ALTER TABLE `bill_service`
  ADD PRIMARY KEY (`bill_id`,`service_id`),
  ADD KEY `IDX_155EAECD1A8C12F5` (`bill_id`),
  ADD KEY `IDX_155EAECDED5CA9E6` (`service_id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_service`
--
ALTER TABLE `building_service`
  ADD PRIMARY KEY (`building_id`,`service_id`),
  ADD KEY `IDX_D65517F84D2A7E12` (`building_id`),
  ADD KEY `IDX_D65517F8ED5CA9E6` (`service_id`);

--
-- Indexes for table `building_special_services`
--
ALTER TABLE `building_special_services`
  ADD PRIMARY KEY (`building_id`,`service_id`),
  ADD KEY `IDX_CAE3F4314D2A7E12` (`building_id`),
  ADD KEY `IDX_CAE3F431ED5CA9E6` (`service_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_representative`
--
ALTER TABLE `customer_representative`
  ADD PRIMARY KEY (`customer_id`,`representative_id`),
  ADD KEY `IDX_BC6A0DC49395C3F3` (`customer_id`),
  ADD KEY `IDX_BC6A0DC4FC3FF006` (`representative_id`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6B71CBF46BF700BD` (`status_id`),
  ADD KEY `IDX_6B71CBF49395C3F3` (`customer_id`);

--
-- Indexes for table `quote_building`
--
ALTER TABLE `quote_building`
  ADD PRIMARY KEY (`quote_id`,`building_id`),
  ADD KEY `IDX_B55C945DB805178` (`quote_id`),
  ADD KEY `IDX_B55C9454D2A7E12` (`building_id`);

--
-- Indexes for table `representative`
--
ALTER TABLE `representative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slip`
--
ALTER TABLE `slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slip_building`
--
ALTER TABLE `slip_building`
  ADD PRIMARY KEY (`slip_id`,`building_id`),
  ADD KEY `IDX_D1646A7E59C7736B` (`slip_id`),
  ADD KEY `IDX_D1646A7E4D2A7E12` (`building_id`);

--
-- Indexes for table `slip_representative`
--
ALTER TABLE `slip_representative`
  ADD PRIMARY KEY (`slip_id`,`representative_id`),
  ADD KEY `IDX_193A580659C7736B` (`slip_id`),
  ADD KEY `IDX_193A5806FC3FF006` (`representative_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archived_bill`
--
ALTER TABLE `archived_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `base_service`
--
ALTER TABLE `base_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `bg_user`
--
ALTER TABLE `bg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `representative`
--
ALTER TABLE `representative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slip`
--
ALTER TABLE `slip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archived_bill`
--
ALTER TABLE `archived_bill`
  ADD CONSTRAINT `FK_2E54F18C7B00651C` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2E54F18C9395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `archived_bill_service`
--
ALTER TABLE `archived_bill_service`
  ADD CONSTRAINT `FK_BAA601D3ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BAA601D3EFCF62EB` FOREIGN KEY (`archived_bill_id`) REFERENCES `archived_bill` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_7A2119E37B00651C` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill_service`
--
ALTER TABLE `bill_service`
  ADD CONSTRAINT `FK_155EAECD1A8C12F5` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_155EAECDED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `building_service`
--
ALTER TABLE `building_service`
  ADD CONSTRAINT `FK_D65517F84D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D65517F8ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `building_special_services`
--
ALTER TABLE `building_special_services`
  ADD CONSTRAINT `FK_CAE3F4314D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CAE3F431ED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_representative`
--
ALTER TABLE `customer_representative`
  ADD CONSTRAINT `FK_BC6A0DC49395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC6A0DC4FC3FF006` FOREIGN KEY (`representative_id`) REFERENCES `representative` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `FK_6B71CBF46BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `FK_6B71CBF49395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `quote_building`
--
ALTER TABLE `quote_building`
  ADD CONSTRAINT `FK_B55C9454D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B55C945DB805178` FOREIGN KEY (`quote_id`) REFERENCES `quote` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slip_building`
--
ALTER TABLE `slip_building`
  ADD CONSTRAINT `FK_D1646A7E4D2A7E12` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D1646A7E59C7736B` FOREIGN KEY (`slip_id`) REFERENCES `slip` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slip_representative`
--
ALTER TABLE `slip_representative`
  ADD CONSTRAINT `FK_193A580659C7736B` FOREIGN KEY (`slip_id`) REFERENCES `slip` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_193A5806FC3FF006` FOREIGN KEY (`representative_id`) REFERENCES `representative` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
