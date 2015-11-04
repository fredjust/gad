-- phpMyAdmin SQL Dump
-- version 3.3.7deb8
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 04 Novembre 2015 à 10:04
-- Version du serveur: 5.1.73
-- Version de PHP: 5.3.3-7+squeeze27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `echecs95`
--

-- --------------------------------------------------------

--
-- Structure de la table `gad_files`
--

CREATE TABLE IF NOT EXISTS `gad_files` (
  `ID_T` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_T` varchar(255) DEFAULT NULL,
  `DESC_T` varchar(255) DEFAULT NULL,
  `COL_T` varchar(255) DEFAULT NULL,
  `NBJ_T` int(11) DEFAULT NULL,
  `MAJ` date DEFAULT NULL,
  `RVB` varchar(50) DEFAULT NULL,
  `JAS` varchar(50) DEFAULT NULL,
  `VER` varchar(5) DEFAULT NULL,
  `EFF` int(1) NOT NULL DEFAULT '0',
  `Grille` varchar(255) DEFAULT NULL,
  `Classement` varchar(255) DEFAULT NULL,
  `CAS` varchar(255) DEFAULT NULL,
  `IP` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID_T`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=216 ;
