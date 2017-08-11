-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Juillet 2017 à 13:54
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE 'comments';

--
-- Base de données :  `blogopc`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `articles_id` int(11) NOT NULL,
  `report` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `content`, `date`, `articles_id`, `report`) VALUES
(1, 'Robert', 'Super !', '2017-07-12 16:10:28', 1, 0),
(2, 'Jessica', 'Je ne comprends pas la ligne 8', '2017-07-12 16:10:28', 1, 0),
(3, 'Kévin', 'Bonjour à tous !', '2017-07-13 10:54:28', 2, 0),
(4, 'Nathalie', 'Je cherche des coworkers', '2017-07-13 10:54:28', 3, 0),
(5, 'Lionel', 'Je viens de commencer', '2017-07-13 10:54:28', 3, 0),
(6, 'Gabriel', 'Vraiment excellent ce site', '2017-07-13 10:54:28', 2, 0),
(7, 'Lilian', 'Moi j\'ai vraiment pas saisi le fetchAll()', '2017-07-13 10:54:28', 3, 0),
(8, 'Marc', 'Yoyhoy', '2017-07-21 15:22:46', 1, 0),
(9, 'Edouard', 'Bwah', '2017-07-21 15:22:46', 1, 0),
(10, 'Yaris', 'Bijour', '2017-07-21 15:22:46', 2, 0),
(11, 'Moi', 'Je sais pas', '2017-07-21 15:22:46', 1, 0),
(12, 'Yann', 'Une lan ?', '2017-07-21 15:22:46', 1, 0),
(13, 'Tintin', 'Et voilà', '2017-07-21 15:23:39', 2, 0),
(14, 'Milou', 'Waf', '2017-07-21 15:23:39', 2, 0),
(15, 'Capitaine', 'Mousaillon', '2017-07-21 15:23:56', 3, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_id` (`articles_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
