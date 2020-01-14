-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 14 jan. 2020 à 22:08
-- Version du serveur :  10.2.30-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frennrzt_frent`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups_information`
--

CREATE TABLE `groups_information` (
  `id` int(11) NOT NULL,
  `identification_key` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `group_description` varchar(255) NOT NULL,
  `adminId` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groups_information`
--

INSERT INTO `groups_information` (`id`, `identification_key`, `name`, `group_description`, `adminId`, `date_created`) VALUES
(14, 'grp_sercel_company', 'Sercel Corporate', 'Bienvenue sur le groupe privée de location entre collègues de Sercel. Vous pouvez déposer vos annonces et louer entre vous.', 38, '2020-01-12 19:31:12');

-- --------------------------------------------------------

--
-- Structure de la table `objects`
--

CREATE TABLE `objects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `obj_condition` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `objects`
--

INSERT INTO `objects` (`id`, `name`, `picture`, `obj_condition`, `description`, `status`, `user_id`, `date_created`) VALUES
(60, 'Tondeuse pelouse', '../img/products/garden-grass-meadow-green.jpg', 'Correct', 'Je loue ma superbe tondeuse, elle a du vécu mais est très bien fonctionnelle !', 'Disponible', 38, '2020-01-12 19:45:16'),
(61, 'VTT', '../img/products/pexels-photo-100582.jpeg', 'Très bon état', 'Bonjour à tous, je loue mon vélo tout terrain. Il est solide et sûrement très utile pour le cross de vélo du 14 Juin.', 'Disponible', 38, '2020-01-12 19:47:14'),
(62, 'Sèche cheveux', '../img/products/pexels-photo-973406.jpeg', 'Neuf', 'Je prête mon sèche cheveux pour ceux et celles qui aurait besoin d\'un dépannage.', 'Disponible', 38, '2020-01-12 19:48:08'),
(63, 'Perceuse', '../img/products/pexels-photo-1249610.jpeg', 'Très bon état', 'Bonjour, je loue ma perceuse. Veuillez me contacter de préférence l\'après-midi.', 'Réservé', 39, '2020-01-12 19:54:44'),
(64, 'Echelle', '../img/products/pexels-photo-2116491.jpeg', 'Correct', 'Avis aux bricoleurs : je loue mon escabeau très solide.', 'Réservé', 40, '2020-01-12 20:04:32');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `obj_id` int(11) NOT NULL,
  `user_renter` int(11) NOT NULL,
  `user_booker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `obj_id`, `user_renter`, `user_booker`) VALUES
(27, 63, 39, 38),
(28, 64, 40, 39);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `picture`, `user_group`, `date_created`) VALUES
(38, 'Cynthia', 'Rajaonarison', 'cynthia@gmail.com', 603010101, '$2y$15$NNwCXQcSfiyvWmI1qcxUM.7Qw33EoOVpc6dv76PpJrPAODZ5GOzCi', '../img/profils/cynthia.jpg', 'grp_sercel_company', '2020-01-12 19:31:12'),
(39, 'Sophie', 'Delahaye', 'sophie@gmail.com', 632010606, '$2y$15$DLq0jwCYstO5IkD6U6HJ8On/L8HTbYWmGQ46s6Qwv2JavsR4FcFsK', '../img/profils/woman-wearing-pink-collared-half-sleeved-top-1036623.jpg', 'grp_sercel_company', '2020-01-12 19:52:00'),
(40, 'Pierre', 'Dubon', 'pierre@gmail.com', 706060606, '$2y$15$xYLMJCAukIxesoGLzBePn.vPZ.XrshtK24Knnfyh/qHHEvlDiCYq.', '../img/profils/pexels-photo-91227.jpeg', 'grp_sercel_company', '2020-01-12 19:57:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groups_information`
--
ALTER TABLE `groups_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_user_id` (`adminId`);

--
-- Index pour la table `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `object_user_id` (`user_id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_booker_id` (`user_booker`),
  ADD KEY `reservation_renter_id` (`user_renter`),
  ADD KEY `obj_id` (`obj_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groups_information`
--
ALTER TABLE `groups_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `objects`
--
ALTER TABLE `objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groups_information`
--
ALTER TABLE `groups_information`
  ADD CONSTRAINT `admin_user_id` FOREIGN KEY (`adminId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `objects`
--
ALTER TABLE `objects`
  ADD CONSTRAINT `object_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservation_booker_id` FOREIGN KEY (`user_booker`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_renter_id` FOREIGN KEY (`user_renter`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
