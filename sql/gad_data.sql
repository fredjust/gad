-- phpMyAdmin SQL Dump
-- version 3.3.7deb8
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 04 Novembre 2015 à 10:05
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
-- Structure de la table `gad_data`
--

CREATE TABLE IF NOT EXISTS `gad_data` (
  `ID_L` int(11) NOT NULL AUTO_INCREMENT,
  `ID_T` int(11) NOT NULL,
  `Pl` int(11) DEFAULT NULL,
  `t` varchar(10) DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `CHAMPS` varchar(255) DEFAULT NULL,
  `Club` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_L`),
  KEY `ID_T` (`ID_T`),
  KEY `Pl` (`Pl`),
  KEY `Nom` (`Nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1667 ;
