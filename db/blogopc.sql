-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Septembre 2017 à 14:33
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
(3, 'Chapitre 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper quam non lacus pellentesque posuere. Nam nec auctor tellus. Nunc eget ornare nulla. Nam sodales elementum mauris, in hendrerit ipsum fringilla eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Sed eget lorem efficitur, dictum ipsum ac, ullamcorper odio. Aliquam posuere elementum quam vel iaculis. Quisque a magna lacinia, ultricies felis et, ornare quam. Proin aliquam, enim id mattis aliquet, mauris ligula interdum velit, sed malesuada tortor nisi eget magna. Quisque urna lorem, aliquam quis consequat eu, efficitur ac quam. Aliquam gravida est in turpis laoreet posuere.</p>', '2017-07-06 09:51:51'),
(22, 'Chapitre 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper quam non lacus pellentesque posuere. Nam nec auctor tellus. Nunc eget ornare nulla. Nam sodales elementum mauris, in hendrerit ipsum fringilla eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Sed eget lorem efficitur, dictum ipsum ac, ullamcorper odio. Aliquam posuere elementum quam vel iaculis. Quisque a magna lacinia, ultricies felis et, ornare quam. Proin aliquam, enim id mattis aliquet, mauris ligula interdum velit, sed malesuada tortor nisi eget magna. Quisque urna lorem, aliquam quis consequat eu, efficitur ac quam. Aliquam gravida est in turpis laoreet posuere.</p>', '2017-08-18 16:29:05'),
(23, 'Chapitre 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper quam non lacus pellentesque posuere. Nam nec auctor tellus. Nunc eget ornare nulla. Nam sodales elementum mauris, in hendrerit ipsum fringilla eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Sed eget lorem efficitur, dictum ipsum ac, ullamcorper odio. Aliquam posuere elementum quam vel iaculis. Quisque a magna lacinia, ultricies felis et, ornare quam. Proin aliquam, enim id mattis aliquet, mauris ligula interdum velit, sed malesuada tortor nisi eget magna. Quisque urna lorem, aliquam quis consequat eu, efficitur ac quam. Aliquam gravida est in turpis laoreet posuere.</p>', '2017-08-21 16:25:26'),
(37, 'Chapitre 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper quam non lacus pellentesque posuere. Nam nec auctor tellus. Nunc eget ornare nulla. Nam sodales elementum mauris, in hendrerit ipsum fringilla eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Sed eget lorem efficitur, dictum ipsum ac, ullamcorper odio. Aliquam posuere elementum quam vel iaculis. Quisque a magna lacinia, ultricies felis et, ornare quam. Proin aliquam, enim id mattis aliquet, mauris ligula interdum velit, sed malesuada tortor nisi eget magna. Quisque urna lorem, aliquam quis consequat eu, efficitur ac quam. Aliquam gravida est in turpis laoreet posuere.</p>', '2017-08-22 16:33:36'),
(38, 'Article 5', 'I\'m not a witch. Well, what do you want? Ah, now we see the violence inherent in the system! You don\'t vote for kings. Ni! Ni! Ni! Ni! Well, I got better.\r\n\r\nOh! Come and see the violence inherent in the system! Help, help, I\'m being repressed! What do you mean? Bloody Peasant! Look, my liege! You don\'t vote for kings.\r\n\r\nWe found them. We want a shrubbery!! We shall say \'Ni\' again to you, if you do not appease us. Bloody Peasant!\r\n\r\nShut up! Will you shut up?! I\'m not a witch. What a strange person. What do you mean?', '2017-09-06 10:16:40'),
(39, 'Article 6', 'I\'m not a witch. Well, what do you want? Ah, now we see the violence inherent in the system! You don\'t vote for kings. Ni! Ni! Ni! Ni! Well, I got better.\r\n\r\nOh! Come and see the violence inherent in the system! Help, help, I\'m being repressed! What do you mean? Bloody Peasant! Look, my liege! You don\'t vote for kings.\r\n\r\nWe found them. We want a shrubbery!! We shall say \'Ni\' again to you, if you do not appease us. Bloody Peasant!\r\n\r\nShut up! Will you shut up?! I\'m not a witch. What a strange person. What do you mean?', '2017-09-06 10:16:40'),
(41, 'Article 8', 'I\'m not a witch. Well, what do you want? Ah, now we see the violence inherent in the system! You don\'t vote for kings. Ni! Ni! Ni! Ni! Well, I got better.\r\n\r\nOh! Come and see the violence inherent in the system! Help, help, I\'m being repressed! What do you mean? Bloody Peasant! Look, my liege! You don\'t vote for kings.\r\n\r\nWe found them. We want a shrubbery!! We shall say \'Ni\' again to you, if you do not appease us. Bloody Peasant!\r\n\r\nShut up! Will you shut up?! I\'m not a witch. What a strange person. What do you mean?', '2017-09-06 10:16:40');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `date_comment` datetime DEFAULT CURRENT_TIMESTAMP,
  `articles_id` int(11) DEFAULT NULL,
  `report` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `content`, `date_comment`, `articles_id`, `report`) VALUES
(7, 'Lilian', 'Moi j\'ai vraiment pas saisi le fetchAll()', '2017-07-13 10:54:28', 3, 0),
(8, 'Marc', 'Yoyhoy', '2017-07-21 15:22:46', NULL, 0),
(11, 'Moi', 'Je sais pas', '2017-07-21 15:22:46', NULL, 0),
(281, '12', '12', '2017-08-21 15:09:05', NULL, 0),
(285, '122', '233', '2017-08-22 12:36:55', NULL, 0),
(287, 'Lilly', 'Bonjour', '2017-08-24 17:54:34', NULL, 0),
(288, 'eho', 'ijh', '2017-08-24 17:54:42', NULL, 0),
(289, '111', '111', '2017-08-24 17:54:50', NULL, 0),
(290, 'ereée', 'ZZZ', '2017-08-24 17:55:03', 3, 1),
(291, 'eéeé', 'eée', '2017-08-24 17:55:06', 3, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;
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
