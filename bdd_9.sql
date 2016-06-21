-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2014 at 02:44 PM
-- Server version: 5.5.37
-- PHP Version: 5.4.4-14+deb7u9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `LOGIN_ENSEIGNANT` varchar(10) NOT NULL,
  `NOM_ENSEIGNANT` varchar(20) DEFAULT NULL,
  `PRENOM_ENSEIGNANT` varchar(20) DEFAULT NULL,
  `MAIL_ENSEIGNANT` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`LOGIN_ENSEIGNANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`LOGIN_ENSEIGNANT`, `NOM_ENSEIGNANT`, `PRENOM_ENSEIGNANT`, `MAIL_ENSEIGNANT`) VALUES
('jacqueschi', 'Chirac', 'Jacques', 'jacques.chirac@isen.'),
('georgebush', 'Bush', 'George', 'george.bush@isen.fr');

-- --------------------------------------------------------

--
-- Table structure for table `enseignant_projet`
--

CREATE TABLE IF NOT EXISTS `enseignant_projet` (
  `ID_PROJET` int(11) NOT NULL,
  `LOGIN_ENSEIGNANT` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_PROJET`,`LOGIN_ENSEIGNANT`),
  KEY `FK_ENSEIGNANT_PROJET2` (`LOGIN_ENSEIGNANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `LOGIN_ETUDIANT` varchar(10) NOT NULL,
  `NOM_ETUDIANT` varchar(20) DEFAULT NULL,
  `PRENOM_ETUDIANT` varchar(20) DEFAULT NULL,
  `MAIL_ETUDIANT` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`LOGIN_ETUDIANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`LOGIN_ETUDIANT`, `NOM_ETUDIANT`, `PRENOM_ETUDIANT`, `MAIL_ETUDIANT`) VALUES
('romainvaud', 'Vaudour', 'Romain', 'romain.vaudour@isen.fr'),
('etiennejez', 'Jezequel', 'Etienne', 'etienne.jezequel@isen.fr');

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `ID_PROJET` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PROJET` varchar(20) DEFAULT NULL,
  `ACTIF` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_PROJET`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`ID_PROJET`, `NOM_PROJET`, `ACTIF`) VALUES
(1, 'Projet ITII', 1),
(4, 'Projet Java : M1', 0),
(5, 'Projet C++ : M2', 1),
(3, 'Projet CIR : WEB', 1),
(6, 'Projet CSI : C', 0),
(7, 'Projet CIR : C++', 1),
(9, 'rezrez', NULL),
(10, 'azeeez', NULL),
(11, 'tretre', NULL),
(12, 'tretre', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soustest`
--

CREATE TABLE IF NOT EXISTS `soustest` (
  `ID_PROJET` int(11) NOT NULL,
  `ID_TEST` int(11) NOT NULL,
  `ID_SOUSTEST` int(11) NOT NULL,
  `VALEUR` varchar(50) DEFAULT NULL,
  `TYPE` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID_PROJET`,`ID_TEST`,`ID_SOUSTEST`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sous_test_etudiant`
--

CREATE TABLE IF NOT EXISTS `sous_test_etudiant` (
  `LOGIN_ETUDIANT` varchar(10) NOT NULL,
  `ID_PROJET` int(11) NOT NULL,
  `ID_TEST` int(11) NOT NULL,
  `ID_SOUSTEST` int(11) NOT NULL,
  PRIMARY KEY (`ID_PROJET`,`ID_TEST`,`LOGIN_ETUDIANT`,`ID_SOUSTEST`),
  KEY `FK_SOUS_TEST_ETUDIANT` (`LOGIN_ETUDIANT`),
  KEY `FK_SOUS_TEST_ETUDIANT2` (`ID_PROJET`,`ID_TEST`,`ID_SOUSTEST`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sous_test_etudiant`
--

INSERT INTO `sous_test_etudiant` (`LOGIN_ETUDIANT`, `ID_PROJET`, `ID_TEST`, `ID_SOUSTEST`) VALUES
('jacqueschi', 1, 81, 3),
('jacqueschi', 1, 82, 4),
('jacqueschi', 1, 83, 5),
('jacqueschi', 1, 84, 6),
('jacqueschi', 1, 85, 0),
('jacqueschi', 1, 86, 1),
('jacqueschi', 1, 87, 2),
('jacqueschi', 1, 88, 3),
('jacqueschi', 1, 89, 4),
('jacqueschi', 1, 90, 5),
('jacqueschi', 1, 91, 6);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `ID_PROJET` int(11) NOT NULL,
  `ID_TEST` int(11) NOT NULL AUTO_INCREMENT,
  `NOTE` float DEFAULT NULL,
  `NOM_TEST` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID_PROJET`,`ID_TEST`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
