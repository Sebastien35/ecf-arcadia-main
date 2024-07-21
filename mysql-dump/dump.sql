-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 juil. 2024 à 15:28
-- Version du serveur : 8.2.0
-- Version de PHP : 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arcadia_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `habitat_id` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `race` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` json NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6AAB231FAFFE2D26` (`habitat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `habitat_id`, `name`, `race`, `image`) VALUES
(8, 2, 'Wivine', 'Vélociraptor', '[\"velociraptor-66911c2e52919.jpg\"]'),
(11, 12, 'Seb', 'Diplodocus', '[\"diplodocus-6693e96007d6d.jpg\"]'),
(12, 2, 'Capt\'', 'Spinosaure', '[\"spinosaurus-6693f36737411.jpg\"]'),
(13, 2, 'Exploris', 'T-Rex', '[\"1526479615762038050-669413357050c.jpg\"]');

-- --------------------------------------------------------

--
-- Structure de la table `animal_feeding`
--

DROP TABLE IF EXISTS `animal_feeding`;
CREATE TABLE IF NOT EXISTS `animal_feeding` (
  `id` int NOT NULL AUTO_INCREMENT,
  `animal_id` int NOT NULL,
  `user_id` int NOT NULL,
  `feeding_date` datetime NOT NULL,
  `food` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_28D48D668E962C16` (`animal_id`),
  KEY `IDX_28D48D66A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `animal_feeding`
--

INSERT INTO `animal_feeding` (`id`, `animal_id`, `user_id`, `feeding_date`, `food`, `quantity`) VALUES
(12, 8, 1, '2024-07-12 13:00:00', 'Chevre', 2.00),
(14, 11, 1, '2024-07-14 12:00:00', 'Herbes', 10.00),
(15, 8, 1, '2024-07-14 18:00:00', 'Mouton', 3.00),
(16, 12, 3, '2024-07-14 18:00:00', 'Vache', 10.00),
(17, 8, 12, '2024-07-14 20:00:00', 'Christian', 1.00),
(18, 13, 1, '2024-07-15 12:00:00', 'Enfant', 20.00),
(19, 13, 1, '2024-07-18 18:00:00', 'Enfant', 1.00);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240704144220', '2024-07-04 14:42:58', 1218),
('DoctrineMigrations\\Version20240705082442', '2024-07-05 08:25:05', 1305),
('DoctrineMigrations\\Version20240705101132', '2024-07-05 10:11:49', 44),
('DoctrineMigrations\\Version20240706132521', '2024-07-06 13:26:01', 153),
('DoctrineMigrations\\Version20240706133217', '2024-07-06 13:32:20', 235),
('DoctrineMigrations\\Version20240708074617', '2024-07-08 07:46:39', 169),
('DoctrineMigrations\\Version20240708081853', '2024-07-08 08:18:58', 106),
('DoctrineMigrations\\Version20240708111847', '2024-07-08 11:18:51', 352),
('DoctrineMigrations\\Version20240708145705', '2024-07-08 14:57:12', 310),
('DoctrineMigrations\\Version20240709113639', '2024-07-09 11:37:01', 90),
('DoctrineMigrations\\Version20240709115519', '2024-07-09 11:55:27', 90),
('DoctrineMigrations\\Version20240709135950', '2024-07-09 14:01:01', 34),
('DoctrineMigrations\\Version20240712083034', '2024-07-12 08:31:11', 129),
('DoctrineMigrations\\Version20240712103225', '2024-07-12 10:34:35', 136),
('DoctrineMigrations\\Version20240713122033', '2024-07-13 12:21:44', 60),
('DoctrineMigrations\\Version20240713125252', '2024-07-13 12:52:56', 43),
('DoctrineMigrations\\Version20240713152116', '2024-07-13 15:21:21', 55),
('DoctrineMigrations\\Version20240715141404', '2024-07-15 14:14:10', 46),
('DoctrineMigrations\\Version20240715143914', '2024-07-15 14:39:19', 119),
('DoctrineMigrations\\Version20240716120225', '2024-07-16 12:02:32', 31);

-- --------------------------------------------------------

--
-- Structure de la table `habitat`
--

DROP TABLE IF EXISTS `habitat`;
CREATE TABLE IF NOT EXISTS `habitat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` json NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `habitat`
--

INSERT INTO `habitat` (`id`, `name`, `description`, `image`, `comment`) VALUES
(2, 'Savane', 'La savane, ça vient de l\'espagnol et ça veut dire « plaine sans arbres ». En fait c\'est une grande prairie où il y a beaucoup d\'herbe et très peu d\'arbres à cause de la sécheresse. Dans la savane en Afrique tu peux voir beaucoup d\'animaux comme par exemple des girafes, des éléphants, et aussi des lions', '[\"savane-66911c0c8a357.jpg\"]', ''),
(11, 'Marais', 'La tourbière est un écosystème\r\nconstamment saturé d’eau au sein duquel\r\ns’accumulent les matières organiques non\r\ndécomposées, formant la tourbe.\r\nLes tourbières véritables se distinguent des\r\nbas-marais par l’épaisseur de la tourbe,\r\nsupérieure à 50 centimètres.', '[\"marais-6690fb4663cd3.jpg\"]', ''),
(12, 'Jungle', 'La jungle est une immense forêt où poussent de façon très serrée, arbres, broussailles et plantes hautes. Pour vivre, cette végétation très dense a besoin de beaucoup d\'eau. C\'est pourquoi elle se situe dans les régions proches de l\'équateur où le climat est pluvieux.', '[\"jungle-6690fc14da62d.jpg\"]', '');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `submitted_at` datetime NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id`, `pseudo`, `comment`, `valid`, `submitted_at`, `rating`) VALUES
(8, 'Thomas', 'Tu sais pas jouer Jack. C\'est la piquette Jack.T\'es mauvais Jack.', 1, '2024-07-09 15:59:51', 0),
(9, 'Wivine', 'C\'est pas oufff', 1, '2024-07-09 17:20:33', 0),
(10, 'Sourour', 'C\'est null', 1, '2024-07-10 13:27:30', 0),
(12, 'Nathan', 'Que c\'est moche.', 1, '2024-07-10 16:26:59', 0),
(13, 'Sourour', 'N\'importe quoi', 1, '2024-07-13 13:06:43', 0),
(14, 'stella', 'Super site, bien conçu. Merci', 1, '2024-07-13 19:41:36', 0),
(16, 'MrLeoufff', 'Cool', 1, '2024-07-16 12:46:35', 5),
(17, 'Ala', 'Bof', 1, '2024-07-16 12:48:05', 1),
(18, 'Truc', 'Ouais', 1, '2024-07-16 12:52:49', 4),
(21, 'Coco', 'Truc', 1, '2024-07-16 14:53:30', 4),
(23, 'Coco', 'Super', 1, '2024-07-17 09:07:41', 5),
(24, 'MrLeoufff', 'Super', 1, '2024-07-17 09:49:45', 4),
(26, 'Rico', 'C\'est de la merde', 1, '2024-07-18 12:39:05', 2);

-- --------------------------------------------------------

--
-- Structure de la table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `day` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `is_closed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `schedule`
--

INSERT INTO `schedule` (`id`, `day`, `opening_time`, `closing_time`, `is_closed`) VALUES
(1, 'Lundi', '09:00:00', '19:00:00', 0),
(3, 'Mardi', '09:00:00', '19:00:00', 0),
(4, 'Mercredi', '09:00:00', '19:00:00', 0),
(5, 'Jeudi', '09:00:00', '19:00:00', 0),
(6, 'Vendredi', '09:00:00', '19:00:00', 0),
(7, 'Samedi', '09:00:00', '19:00:00', 0),
(22, 'Dimanche', '09:00:00', '19:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `image`) VALUES
(6, 'Petit train', 'Découvrez notre petit train touristique, une aventure de 60 minutes à travers les sites emblématiques de la ville. Confortablement installé, laissez-vous guider et émerveillez-vous devant les monuments historiques, les parcs verdoyants et les vues panoramiques. Une expérience idéale pour toute la famille.', '[\"train-6691038daacd4-jpg\"]'),
(7, 'Visite Guidée', 'Découvrez notre visite guidée au zoo, une immersion de 90 minutes avec un guide expert pour explorer de près des espèces fascinantes et en apprendre davantage sur leur habitat et la conservation. Une expérience éducative et divertissante pour tous les âges.', '[\"visite-668e93c1269dc-jpg\"]'),
(8, 'Restaurant', 'Savourez une expérience culinaire unique dans notre restaurant, où chaque plat est préparé avec des ingrédients frais et locaux. Profitez d\'une ambiance chaleureuse et d\'un service impeccable, parfaits pour vous reposer et vous rassasier en contemplant nos magnifiques T-rex', '[\"gigantes-668e93e3c9af5-jpg\"]');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `reset_password_token` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`, `reset_password_token`) VALUES
(1, 'jose.hammond.ecf@gmail.com', '$2y$13$HYQolVMTVNnxThfdeor23OK78sRJSuGmzUUEpg3mAfdQkxWVSc36G', '[\"ROLE_ADMIN\"]', NULL),
(3, 'employe.nedry.ecf@gmail.com', '$2y$13$cIEMBzVZVxl.bi6lpc45hOFVTOgQrvjAam.TjYRDwfh2fhKz1BrP2', '[\"ROLE_EMPLOYEE\"]', NULL),
(12, 'veterinaire.grant.ecf@gmail.com', '$2y$13$h2Uy7pKVPsHV2eHjdGHzYu0f4kLwToYnsYDYrTnn7bkDpXqhyfjFu', '[\"ROLE_VETERINARIAN\"]', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `veterinary_report`
--

DROP TABLE IF EXISTS `veterinary_report`;
CREATE TABLE IF NOT EXISTS `veterinary_report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `animal_id` int NOT NULL,
  `user_id` int NOT NULL,
  `health_status` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `food` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_weight` decimal(5,2) NOT NULL,
  `report_date` datetime NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_53C7E56B8E962C16` (`animal_id`),
  KEY `IDX_53C7E56BA76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `veterinary_report`
--

INSERT INTO `veterinary_report` (`id`, `animal_id`, `user_id`, `health_status`, `food`, `food_weight`, `report_date`, `detail`) VALUES
(11, 8, 12, 'Bonne santée', 'Christian', 85.00, '2024-07-14 20:00:00', 'Tres bonne santée'),
(12, 13, 1, 'Tres bonne santé', 'Nathan', 90.00, '2024-07-14 20:00:00', 'Il a de très belle couleur. Adore le coloriage.'),
(13, 12, 1, 'Mourant peuchère', 'Thomas', 70.00, '2024-07-14 20:00:00', 'Ho bichette il est mal en point nous pensons l\'achever'),
(14, 13, 1, 'Bonne santée', 'Enfant', 20.00, '2024-07-15 12:00:00', 'Manger doucement en plusieur partie car en une fois y\'a pas assez de plaisir et Explo risque de s\'étouffer'),
(15, 13, 1, 'Tres bonne santé', 'Rico', 1.00, '2024-07-18 14:00:00', 'Non commestible');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_6AAB231FAFFE2D26` FOREIGN KEY (`habitat_id`) REFERENCES `habitat` (`id`);

--
-- Contraintes pour la table `animal_feeding`
--
ALTER TABLE `animal_feeding`
  ADD CONSTRAINT `FK_28D48D665EB747A3` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `FK_28D48D669D86650F` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `veterinary_report`
--
ALTER TABLE `veterinary_report`
  ADD CONSTRAINT `FK_53C7E56B5EB747A3` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `FK_53C7E56B9D86650F` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
