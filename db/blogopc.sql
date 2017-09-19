-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Août 2017 à 09:11
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogopc`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(2, 'Article 2', '<p>Haec et huius modi quaedam innumerabilia ultrix facinorum impiorum bonorumque praemiatrix aliquotiens operatur Adrastia atque utinam semper quam vocabulo duplici etiam Nemesim appellamus: ius quoddam sublime numinis efficacis, humanarum mentium opinione lunari circulo superpositum, vel ut definiunt alii, substantialis tutela generali potentia partilibus praesidens fatis, quam theologi veteres fingentes Iustitiae filiam ex abdita quadam aeternitate tradunt omnia despectare terrena.gerg</p>', '2017-07-06 09:51:50'),
(3, 'Article 3', '<p>Haec et huius modi quaedam innumerabilia ultrix facinorum impiorum bonorumque praemiatrix aliquotiens operatur Adrastia atque utinam semper quam vocabulo duplici etiam Nemesim appellamus: ius quoddam sublime numinis efficacis, humanarum mentium opinione lunari circulo superpositum, vel ut definiunt alii, substantialis tutela generali potentia partilibus praesidens fatis, quam theologi veteres fingentes Iustitiae filiam ex abdita quadam aeternitate tradunt omnia despectare terrena.grgrgrgr</p>', '2017-07-06 09:51:51'),
(22, 'Holy grial', '<p>Burn her! What a strange person. Knights of Ni, we are but simple travelers who seek the enchanter who lives beyond these woods. But you are dressed as one&hellip; The Knights Who Say Ni demand a sacrifice!</p>\r\n<p>I don\'t want to talk to you no more, you empty-headed animal food trough water! I fart in your general direction! Your mother was a hamster and your father smelt of elderberries! Now leave before I am forced to taunt you a second time! The nose?</p>', '2017-08-18 16:29:05'),
(23, 'Test lenght', '<p>Burn her! What a strange person. Knights of Ni, we are but simple travelers who seek the enchanter who lives beyond these woods. But you are dressed as one&hellip; The Knights Who Say Ni demand a sacrifice!</p>\r\n<p>I don\'t want to talk to you no more, you empty-headed animal food trough water! I fart in your general direction! Your mother was a hamster and your father smelt of elderberries! Now leave before I am forced to taunt you a second time! The nose?</p>\r\n<p>But you are dressed as one&hellip; Burn her! I am your king. A newt?</p>\r\n<p>How do you know she is a witch? Burn her anyway! Be quiet! We want a shrubbery!! Did you dress her up like this?</p>\r\n<p>I have to push the pram a lot. Did you dress her up like this? Bring her forward! Bring her forward! Burn her anyway!</p>\r\n<p>Did you dress her up like this? I have to push the pram a lot. Be quiet! It\'s only a model. You can\'t expect to wield supreme power just \'cause some watery tart threw a sword at you! It\'s only a model.</p>\r\n<p>I have to push the pram a lot. Burn her anyway! Well, she turned me into a newt. Knights of Ni, we are but simple travelers who seek the enchanter who lives beyond these woods. Why do you think that she is a witch?</p>\r\n<p>Be quiet! She looks like one. Well, Mercia\'s a temperate zone! The swallow may fly south with the sun, and the house martin or the plover may seek warmer climes in winter, yet these are not strangers to our land.</p>', '2017-08-21 16:25:26'),
(34, 'Test1', 'Hey, Luke! May the Force be with you. Don\'t act so surprised, Your Highness. You weren\'t on any mercy mission this time. Several transmissions were beamed to this ship by Rebel spies. I want to know what happened to the plans they sent you.\r\n\r\nLeave that to me. Send a distress signal, and inform the Senate that all on board were killed. Don\'t underestimate the Force. Dantooine. They\'re on Dantooine. The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.\r\nI don\'t know what you\'re talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan--', '2017-08-22 16:33:36'),
(35, 'Test3', 'Hey, Luke! May the Force be with you. Don\'t act so surprised, Your Highness. You weren\'t on any mercy mission this time. Several transmissions were beamed to this ship by Rebel spies. I want to know what happened to the plans they sent you.\r\n\r\nLeave that to me. Send a distress signal, and inform the Senate that all on board were killed. Don\'t underestimate the Force. Dantooine. They\'re on Dantooine. The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.\r\nI don\'t know what you\'re talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan--', '2017-08-22 16:33:36'),
(36, 'test 7', 'Hey, Luke! May the Force be with you. Don\'t act so surprised, Your Highness. You weren\'t on any mercy mission this time. Several transmissions were beamed to this ship by Rebel spies. I want to know what happened to the plans they sent you.\r\n\r\nLeave that to me. Send a distress signal, and inform the Senate that all on board were killed. Don\'t underestimate the Force. Dantooine. They\'re on Dantooine. The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.\r\nI don\'t know what you\'re talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan--', '2017-08-22 16:33:36'),
(37, 'test6', 'Hey, Luke! May the Force be with you. Don\'t act so surprised, Your Highness. You weren\'t on any mercy mission this time. Several transmissions were beamed to this ship by Rebel spies. I want to know what happened to the plans they sent you.\r\n\r\nLeave that to me. Send a distress signal, and inform the Senate that all on board were killed. Don\'t underestimate the Force. Dantooine. They\'re on Dantooine. The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.\r\nI don\'t know what you\'re talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan--', '2017-08-22 16:33:36'),
(38, 'test5', 'Hey, Luke! May the Force be with you. Don\'t act so surprised, Your Highness. You weren\'t on any mercy mission this time. Several transmissions were beamed to this ship by Rebel spies. I want to know what happened to the plans they sent you.\r\n\r\nLeave that to me. Send a distress signal, and inform the Senate that all on board were killed. Don\'t underestimate the Force. Dantooine. They\'re on Dantooine. The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.\r\nI don\'t know what you\'re talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan--', '2017-08-22 16:33:36');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `articles_id` int(11) DEFAULT NULL,
  `report` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `content`, `date`, `articles_id`, `report`) VALUES
(7, 'Lilian', 'Moi j\'ai vraiment pas saisi le fetchAll()', '2017-07-13 10:54:28', 3, 0),
(8, 'Marc', 'Yoyhoy', '2017-07-21 15:22:46', NULL, 0),
(9, 'Edouard', 'Bwah', '2017-07-21 15:22:46', NULL, 0),
(10, 'Yaris', 'Bijour', '2017-07-21 15:22:46', 2, 1),
(11, 'Moi', 'Je sais pas', '2017-07-21 15:22:46', NULL, 0),
(13, 'Tintin', 'Et voilà', '2017-07-21 15:23:39', 2, 1),
(280, '7', '7', '2017-08-21 15:09:00', 2, 0),
(281, '12', '12', '2017-08-21 15:09:05', 2, 0),
(285, '122', '233', '2017-08-22 12:36:55', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_id` (`articles_id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment_delete` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
