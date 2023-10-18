-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 juin 2023 à 07:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sneakershouse`
--

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genres` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_genres`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genres`, `libelle`, `created_at`) VALUES
(1, 'Homme', '2023-06-13 16:21:12'),
(2, 'Femme', '2023-06-13 16:21:12'),
(3, 'Unisexe', '2023-06-13 16:21:12');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE IF NOT EXISTS `marques` (
  `id_marques` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_marques`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id_marques`, `marque`, `logo`, `created_at`) VALUES
(1, 'Adidas', '../img/brand/adidas.png', '2023-06-13 16:37:11'),
(2, 'Brooks', '../img/brand/brooks.png', '2023-06-13 16:37:22'),
(3, 'Champion', '../img/brand/champion.png', '2023-06-13 16:37:31'),
(4, 'Converse', '../img/brand/converse.png', '2023-06-13 16:37:38'),
(5, 'Fila', '../img/brand/fila.png', '2023-06-13 16:37:45'),
(6, 'Jordan', '../img/brand/jordan-logo.png', '2023-06-13 16:37:54'),
(7, 'New Balance', '../img/brand/newBalance.png', '2023-06-13 16:38:09'),
(8, 'Nike', '../img/brand/nike.png', '2023-06-13 16:38:18'),
(9, 'puma', '../img/brand/puma.png', '2023-06-13 16:38:27'),
(10, 'Reebok', '../img/brand/reebok.png', '2023-06-13 16:38:35'),
(11, 'Vans', '../img/brand/vans.png', '2023-06-13 16:38:44');

-- --------------------------------------------------------

--
-- Structure de la table `pointures`
--

DROP TABLE IF EXISTS `pointures`;
CREATE TABLE IF NOT EXISTS `pointures` (
  `id_pointures` int NOT NULL AUTO_INCREMENT,
  `pointure` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pointures`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pointures`
--

INSERT INTO `pointures` (`id_pointures`, `pointure`, `created_at`) VALUES
(1, 36, '2023-06-13 16:18:16'),
(2, 37, '2023-06-13 16:18:16'),
(3, 38, '2023-06-13 16:18:16'),
(4, 39, '2023-06-13 16:18:16'),
(5, 40, '2023-06-13 16:18:16'),
(6, 41, '2023-06-13 16:18:16'),
(7, 42, '2023-06-13 16:18:16'),
(8, 43, '2023-06-13 16:18:16'),
(9, 44, '2023-06-13 16:18:16'),
(10, 45, '2023-06-13 16:18:16'),
(11, 46, '2023-06-13 16:18:16');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_marques` int DEFAULT NULL,
  `id_pointures` int DEFAULT NULL,
  `id_genres` int DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `prix_barre` float NOT NULL,
  `vedette` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_marques` (`id_marques`),
  KEY `id_pointures` (`id_pointures`),
  KEY `id_genres` (`id_genres`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `id_marques`, `id_pointures`, `id_genres`, `titre`, `image`, `description`, `prix`, `prix_barre`, `vedette`, `new`, `promo`, `created_at`) VALUES
(1, 2, NULL, NULL, 'CONVERSE CHUCK TAYLOR ALL STAR HI VERT', '../img/produits/001509223_101.jpg', 'nike', 123, 0, 1, 0, 0, '2023-06-13 18:17:14'),
(6, 3, 10, NULL, 'CONVERSE CHUCK TAYLOR ALL STAR HI VERT', '../img/produits/001509223_101.jpg', 'azertyu', 79, 0, 0, 0, 0, '2023-06-13 19:37:43'),
(7, 3, 10, NULL, 'CONVERSE CHUCK TAYLOR ALL STAR HI VERT', '../img/produits/001509223_101.jpg', 'azertyu', 79, 0, 0, 0, 0, '2023-06-13 19:42:41'),
(8, 3, 10, NULL, 'CONVERSE CHUCK TAYLOR ALL STAR HI VERT', '../img/produits/001509223_101.jpg', 'azertyu', 79, 0, 0, 0, 0, '2023-06-13 19:45:21'),
(9, 3, 10, NULL, 'CONVERSE CHUCK TAYLOR ALL STAR HI VERT', '../img/produits/001509223_101.jpg', 'azertyu', 79, 0, 0, 0, 0, '2023-06-13 19:49:22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `avatar`, `hashed_password`, `token`, `created_at`, `admin`) VALUES
(1, 'azerty', 'azerty', 'azerty@azerty.com', 'img/utilisateur', '$2y$10$8CwubBkRtkVEGqmm4nrSIOZeUfeHT5oODmeVju8Bf.UQ0fVjAaoyC', '54f76f01abb387cf25f9c0f38366aaf0', '0000-00-00 00:00:00', 1),


--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`id_marques`) REFERENCES `marques` (`id_marques`),
  ADD CONSTRAINT `produits_ibfk_2` FOREIGN KEY (`id_pointures`) REFERENCES `pointures` (`id_pointures`),
  ADD CONSTRAINT `produits_ibfk_3` FOREIGN KEY (`id_genres`) REFERENCES `genres` (`id_genres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
