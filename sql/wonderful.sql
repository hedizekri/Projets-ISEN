-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 26 sep. 2018 à 21:07
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wonderful`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `ingredient_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  PRIMARY KEY (`ingredient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`ingredient_id`, `code`, `label`) VALUES
(1, 'chicken', 'chicken'),
(2, 'oil', 'oil'),
(3, 'steak', 'steak'),
(4, 'oil', 'oil'),
(5, 'salt', 'salt');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_recipe`
--

DROP TABLE IF EXISTS `ingredient_recipe`;
CREATE TABLE IF NOT EXISTS `ingredient_recipe` (
  `ingredient_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  PRIMARY KEY (`ingredient_id`,`recipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredient_recipe`
--

INSERT INTO `ingredient_recipe` (`ingredient_id`, `recipe_id`, `quantity`) VALUES
(1, 1, '1kg'),
(2, 1, '1cl'),
(2, 2, '1cl'),
(3, 2, '200gr'),
(5, 2, '1cl');

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `preparationTime` varchar(100) NOT NULL,
  `bakingTime` varchar(100) NOT NULL,
  PRIMARY KEY (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `code`, `label`, `preparationTime`, `bakingTime`) VALUES
(1, 'Chicken', 'Chicken', '10 minutes', '80 minutes'),
(2, 'beef', 'beef', '5 minutes', '5 minutes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
