-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 juin 2023 à 14:15
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `id_marques`, `id_pointures`, `id_genres`, `titre`, `image`, `description`, `prix`, `prix_barre`, `vedette`, `new`, `promo`, `created_at`) VALUES
(15, 6, 2, 3, 'AIR JORDAN 1 MID AQUATONE', '../img/produits/AIR_JORDAN_AQUATONE.jpg', 'Chaussure Montante BLANC/BLEU', 150, 0, 1, 1, 0, '2023-06-14 11:32:18'),
(17, 9, 2, 3, 'PUMA RS-X EFEKT', '../img/produits/PUMA_Rsx.jpg', 'Baskets Basses  ', 84, 120, 0, 1, 1, '2023-06-14 11:37:44'),
(18, 1, 2, 3, 'STAN SMITH UNISEX', '../img/produits/stansmithfemme.jpeg', 'Baskets basses', 56, 80, 0, 0, 1, '2023-06-14 11:47:05'),
(19, 11, 2, 3, 'VANS / SK-HI', '../img/produits/vans.jpeg', '  Baskets montantes Noir / Blanc', 63, 90, 0, 1, 1, '2023-06-14 11:50:01'),
(20, 4, 2, 3, 'CONVERSE CHUCK TAYLOR', '../img/produits/converse-vert.jpg', ' ALL STAR HI VERT', 80, 0, 1, 1, 0, '2023-06-14 11:56:10'),
(21, 7, 2, 3, 'NEW BALANCE 550', '../img/produits/001509223_101.jpg', ' BLANC/BLEU', 150, 0, 0, 1, 0, '2023-06-14 12:06:57'),
(22, 8, 2, 3, 'NIKE AIR MAX 90 ', '../img/produits/nike-5041718_1280.jpg', 'Baskets basses', 160, 0, 0, 1, 0, '2023-06-14 13:22:34'),
(23, 8, 2, 3, 'NIKE FREE RUN 2 ', '../img/produits/shoes-346986_1280.jpg', 'Baskets basses', 90, 120, 0, 1, 1, '2023-06-14 13:42:01'),
(24, 2, 2, 2, 'Brooks Transcend 5 ', '../img/produits/running-shoe-371624_1280.jpg', 'Chaussures de Running', 180, 0, 0, 1, 0, '2023-06-14 13:44:26'),
(25, 8, 2, 1, 'Nike Air Max 200 20', '../img/produits/nike-air-max-200-20-263364-ct5062-001.jpeg', ' Running Trainers Ct5062', 130, 0, 0, 1, 0, '2023-06-14 13:45:44'),
(26, 8, 2, 3, 'Nike AIR FORCE 1 UNISEX -', '../img/produits/nike-air-force-1.jpeg', ' Baskets basses', 70, 0, 0, 0, 0, '2023-06-14 13:49:05'),
(27, 8, 2, 3, 'Nike Dunk Low ', '../img/produits/Nike Dunk Low.jpg', 'Chaussure Basses', 110, 0, 0, 1, 0, '2023-06-14 13:54:16'),
(28, 1, 2, 3, 'ADIDAS ORIGINALS SAMBA BLANC/NOIR', '../img/produits/ADIDAS_ORIGINALS_SAMBA.jpg', 'Chaussures Basses', 120, 0, 0, 1, 0, '2023-06-14 13:57:17'),
(29, 10, 2, 3, 'Reebok Baskets Club C 85 Vintage', '../img/produits/Reebok_Vintage.jpg', 'Chaussures Life style ', 110, 0, 0, 0, 0, '2023-06-14 14:00:31'),
(30, 7, 2, 2, 'New Balance S327', '../img/produits/New Balance S327.jpg', 'Chaussures Basses', 84, 120, 0, 0, 1, '2023-06-14 14:02:59'),
(31, 9, 2, 3, 'Puma RS-X CANDY', '../img/produits/Puma RS-X CANDY.jpg', 'Chaussures Basses', 70, 100, 0, 1, 1, '2023-06-14 14:05:17'),
(32, 6, 2, 3, 'Jordan Air 1 Mid Rose', '../img/produits/Jordan Air 1 Mid Rose.jpg', 'Chaussures Montante  ', 135, 0, 0, 1, 0, '2023-06-14 14:08:48'),
(33, 3, 2, 1, 'Champion LOW CUT SHOE REBOUND 2.0', '../img/produits/Champion.jpg', 'Chaussures Basses', 65, 0, 0, 1, 0, '2023-06-14 14:11:50'),
(34, 7, 2, 3, 'NewBalance 550', '../img/produits/New Balance550.jpg', 'Chaussures Basses', 99, 0, 1, 1, 0, '2023-06-14 14:13:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
