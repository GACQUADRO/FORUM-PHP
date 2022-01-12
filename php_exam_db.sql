-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 16:20
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_exam_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `id_auteur`, `pseudo_auteur`, `id_question`, `contenu`) VALUES
(1, 7, 'a', 18, 'hello'),
(2, 7, 'a', 12, 'lourd'),
(5, 7, 'a', 12, 'en plus t trop bo'),
(6, 1, 'Doof3', 12, 'de fou'),
(7, 1, 'Doof3', 15, 'bbbbbbbbbbb'),
(8, 1, 'Doof3', 15, 'trop drole ce mec');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `description`, `contenu`, `id_auteur`, `pseudo_auteur`, `date_publication`) VALUES
(12, 'a', 'aa', 'aaa', 7, 'a', '12/01/2022'),
(15, 'test', 'test test ', 'test 1234<br />\r\naaaaaaa', 7, 'a', '12/01/2022'),
(18, 'test', 'test', 'test', 1, 'Doof3', '12/01/2022');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `passwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `lastname`, `firstname`, `passwd`) VALUES
(1, 'Doof3', 'ACQUADRO', 'Grégoire', '$2y$10$aR15dUvl6XgwJf/2fqb5cOe1eIgf.PxOpBNve8BgnZdYirIVinbn.'),
(7, 'a', 'a', 'a', '$2y$10$BeLPIusUD.W1InSQCnwPIeTNoo13.gHflTvCX4RhEikEF6Osjk0tq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
