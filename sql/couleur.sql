-- phpMyAdmin SQL Dump
-- version 3.3.7deb8
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 04 Novembre 2015 à 10:06
-- Version du serveur: 5.1.73
-- Version de PHP: 5.3.3-7+squeeze27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `echecs95`
--

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE IF NOT EXISTS `couleur` (
  `ID_C` int(11) NOT NULL AUTO_INCREMENT,
  `RVB` varchar(6) DEFAULT NULL,
  `NOM` varchar(50) NOT NULL,
  `ORD` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_C`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `couleur`
--

INSERT INTO `couleur` (`ID_C`, `RVB`, `NOM`, `ORD`) VALUES
(3, '0000AA', 'Bleu (Min)', 50),
(5, '1E7FCB', 'Bleu Azur', 0),
(6, '39548D', 'Bleu FFE', 120),
(7, '00CCCB', 'Bleu des mers du sud', 0),
(9, '00AA00', 'Vert', 0),
(10, '095228', 'Vert sapin (Cad)', 60),
(11, '01D758', 'Vert emeraude', 0),
(13, '370028', 'Aubergine (Jun)', 70),
(14, 'DE3163', 'Cerise', 0),
(15, '660099', 'Violet', 0),
(16, '9E0E40', 'Pourpre (Pup)', 30),
(17, 'F9429E', 'Rose bonbon', 0),
(18, 'ED7F10', 'Orange', 0),
(19, 'F3D617', 'Safran (Pou)', 20),
(20, 'F88E55', 'Saumon (Ppo)', 10),
(21, 'AD4F09', 'Roux (Ben)', 40),
(22, 'AA0000', 'Rouge CVOE', 130),
(24, '000000', 'Noir PAPI', 100),
(25, '484848', 'Gris Corse', 110);
