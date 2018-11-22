-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 nov. 2018 à 15:22
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
-- Base de données :  `sap2lux`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(25) NOT NULL,
  `mdp` char(32) NOT NULL,
  `mail` varchar(32) DEFAULT NULL,
  `nom` varchar(32) DEFAULT NULL,
  `prenom` varchar(32) DEFAULT NULL,
  `date` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `identifiant`, `mdp`, `mail`, `nom`, `prenom`, `date`) VALUES
(2, 'zekriledozo', 'a6b6476abe1065b49f96927ad2c36fb5', 'hedilezekri@mail.com', 'Zekri', 'Hedi', '23/04/1995'),
(3, 'b2oba', '236e92bcf7c04d8d7ff3f798b537823f', 'clementvillalba@mail.com', 'villalba', 'clement', '28/02/1995'),
(4, 'docgyneco', '9a09b4dfda82e3e665e31092d1c3ec8d', 'ledoc@mail.com', 'Gyneco', 'Doc', '25/05/1980'),
(5, 'djmarky', 'c70ab1cfea1534c3f27d7ea9eb0c9b9e', 'djmarky@mail.com', 'marky', 'dj', '27/10/1980'),
(6, 'hubert', 'c79c6f489015e0bc97f892e357db7156', 'hubzi@mail.com', 'M', 'hubert', '26/05/2018'),
(7, 'kilian', 'dd1c7d693c6654ee8d38b65dd5467408', 'kikilefellet@mail.com', 'Fellet', 'Kilian', '23/04/1995');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double DEFAULT NULL,
  `billing_adress_id` int(10) UNSIGNED DEFAULT NULL,
  `delivery_adress_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`),
  KEY `IDX_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'CART', 'CART', 149.52, 1, 2, '2018-11-09 13:58:49', '2018-11-09 13:58:49'),
(3, 1, 'ORDER', 'BILLED', 100, 3, 4, '2018-11-09 13:58:49', '2018-11-09 13:58:49');

-- --------------------------------------------------------

--
-- Structure de la table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(3) UNSIGNED NOT NULL,
  `unit_price` double DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_order_product` (`order_id`),
  KEY `IDX_product_order` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 57.08, '2018-11-09 13:58:49', '2018-11-09 13:58:49'),
(3, 1, 2, 3, 46.22, '2018-11-09 13:58:49', '2018-11-09 13:58:49'),
(4, 2, 1, 2, 50, '2018-11-09 13:58:49', '2018-11-09 13:58:49');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `unit_price` double DEFAULT NULL,
  `range_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sexe` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_product_range` (`range_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `unit_price`, `range_id`, `created_at`, `updated_at`, `sexe`, `type`, `image`) VALUES
(2, 'Veste Zara - Dynamique Style', 'ptite veste pour rendre les collègues jalouuuuuses elles vont te cracher a la gueule mais c toi kaura la promotion tqt c kdo', 400, 2, '2018-10-11 16:45:14', '2018-10-11 16:45:14', 'F', 'costume', '../images/images produit/2.png'),
(3, 'Louboutin Ratowzki', 'Bonne grosse paire de shoes pour michtonner chez Gio en face de la concrète y a des gars qu\'ont d\'l\'oseille là bas ;)', 999, 3, '2018-10-11 16:45:14', '2018-10-11 16:45:14', 'F', 'chaussure', '../images/images produit/3.png'),
(4, 'Gucci Air Max', 'Belles Gucco à ne pas salir pour ne pas ressembler à un CLOCHARD (kit nettoyage offert :p )', 450, 4, '2018-10-12 14:59:32', '2018-10-12 14:59:32', 'H', 'chaussure', '../images/images produit/4.png'),
(5, 'Gucci Reebok Classic', 'ça fait vibrer les gadjis de 14-17 ans tqt c nous qui payons', 390, 5, '2018-10-12 14:59:32', '2018-10-12 14:59:32', 'H', 'chaussure', '../images/images produit/5.png'),
(6, 'Balenciaga X_PLR Deluxe', 'pour les soirées chicos à la chicha rue st georges c mehdi qu\'est a l\'entrée tu dis tu viens dnotre part il fra pas chier !!c nous qu\'on offre', 599, 6, '2018-10-12 14:59:32', '2018-10-12 14:59:32', 'F', 'chaussure', '../images/images produit/6.png'),
(7, 'Thunder Boots Limited', 'pour sfaire bien voir par les gadjis ki kiffent les gars sombres ca fait mi-gothique mi-rentier jte jure', 1299, 7, '2018-10-12 14:59:32', '2018-10-12 14:59:32', 'H', 'chaussure', '../images/images produit/7.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
