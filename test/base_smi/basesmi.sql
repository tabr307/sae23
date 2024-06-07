-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 02 Mai 2020 à 12:23
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `smi`
--
CREATE DATABASE IF NOT EXISTS `smi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smi`;

-- --------------------------------------------------------

--
-- Structure de la table `Connexion`
--

DROP TABLE IF EXISTS `Connexion`;
CREATE TABLE IF NOT EXISTS `Connexion` (
  `password` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Connexion`
--

INSERT INTO `Connexion` (`password`) VALUES
('coco');

-- --------------------------------------------------------

--
-- Structure de la table `Piece`
--

DROP TABLE IF EXISTS `Piece`;
CREATE TABLE IF NOT EXISTS `Piece` (
`NumPiece` int(11) NOT NULL,
  `LibellePiece` char(35) DEFAULT NULL,
  `TarifPiece` decimal(9,2) DEFAULT NULL,
  `CodeType` char(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `Piece`
--

INSERT INTO `Piece` (`NumPiece`, `LibellePiece`, `TarifPiece`, `CodeType`) VALUES
(1, 'MSI MPG X570', '240.99', 'CaMe'),
(2, 'MSI Carte mère B360', '131.99', 'CaMe'),
(3, 'ASUS TUF B450', '132.99', 'CaMe'),
(4, 'GIGABYTE B365 HD3', '114.42', 'CaMe'),
(5, 'AMD Ryzen 9 3900X', '504.99', 'Proc'),
(6, 'AMD Ryzen 5 2600', '150.99', 'Proc'),
(7, 'AMD Ryzen 5 1600 AF', '118.99', 'Proc'),
(8, 'Intel Core i7 9700K', '493.99', 'Proc'),
(9, 'Intel Core i5 9600K', '293.50', 'Proc'),
(10, 'Intel Core i3 9100F', '107.99', 'Proc'),
(11, '8Go DDR3-SDRAM', '64.79', 'MeVi'),
(12, '8Go DDR4 2666', '92.39', 'MeVi'),
(13, '16GB DDR4 2400MHz', '254.10', 'MeVi'),
(14, '4To WD Blue', '114.99', 'DiDu'),
(15, '4To WD Red', '124.99', 'DiDu'),
(16, '1To TOSHIBA P300', '48.99', 'DiDu'),
(17, '2To SEAGATE BarraCuda', '86.99', 'DiDu'),
(18, '8To SEAGATE BarraCuda', '215.99', 'DiDu'),
(19, 'GTX960 4Go GDDR5', '21.45', 'CaGr'),
(20, 'GIGABYTE GT 710', '41.69', 'CaGr'),
(21, 'MSI Radeon RX 570', '183.99', 'CaGr'),
(22, 'PNY GeForce RTX 2060', '471.99', 'CaGr');

-- --------------------------------------------------------

--
-- Structure de la table `Type`
--

DROP TABLE IF EXISTS `Type`;
CREATE TABLE IF NOT EXISTS `Type` (
  `CodeType` varchar(10) NOT NULL DEFAULT '',
  `LibelleType` varchar(25) NOT NULL DEFAULT '',
  `ImageType` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Type`
--

INSERT INTO `Type` (`CodeType`, `LibelleType`, `ImageType`) VALUES
('CaGr', 'Carte graphique', 'cartegraphique.png'),
('CaMe', 'Carte mère', 'cartemere.png'),
('DiDu', 'Disque dur', 'disquedur.png'),
('MeVi', 'Mémoire vive', 'memoire.png'),
('Proc', 'Processeur', 'processeur.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Piece`
--
ALTER TABLE `Piece`
 ADD PRIMARY KEY (`NumPiece`), ADD KEY `FK_Piece` (`CodeType`);

--
-- Index pour la table `Type`
--
ALTER TABLE `Type`
 ADD PRIMARY KEY (`CodeType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Piece`
--
ALTER TABLE `Piece`
MODIFY `NumPiece` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Piece`
--
ALTER TABLE `Piece`
ADD CONSTRAINT `FK_Piece` FOREIGN KEY (`CodeType`) REFERENCES `Type` (`CodeType`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
