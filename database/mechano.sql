-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 juil. 2020 à 17:07
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mechano`
--

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_LN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_FN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`license`),
  UNIQUE KEY `UNIQ_773DE69DABE530DA` (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`model`, `license`, `year`, `owner_LN`, `owner_FN`, `cin`) VALUES
('2019', 'ABABAB', '2019', 'EL', 'Ab', 'BK665234'),
('2019', 'MYZ123', '2025', 'EL', 'Abir', 'BK999999'),
('2018', 'qsqdkqd', '2019', 'El', 'Ab', 'dkqskzq'),
('2019', 'XYZ111', '2009', 'El', 'Mo', 'LOLIPOP');

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

DROP TABLE IF EXISTS `reparation`;
CREATE TABLE IF NOT EXISTS `reparation` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `IDX_8FDF219D5768F419` (`license`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reparation`
--

INSERT INTO `reparation` (`id_rep`, `state`, `description`, `license`) VALUES
(1, 0, 'Reparation test', 'MYZ123'),
(4, 0, 'Tires changed', 'MYZ123'),
(5, 0, 'fqeeqdfdsq', 'MYZ123');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reparation`
--
ALTER TABLE `reparation`
  ADD CONSTRAINT `reparation_ibfk_1` FOREIGN KEY (`license`) REFERENCES `car` (`license`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
