-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 21 nov. 2021 à 11:10
-- Version du serveur : 8.0.21
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autoverte`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`login`, `password`) VALUES
('arthur@gmail.com', '1234'),
('sawadogo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `auto`
--

CREATE TABLE `auto` (
  `noserie` int NOT NULL,
  `marque` varchar(25) NOT NULL,
  `modele` varchar(30) NOT NULL,
  `disponible` int NOT NULL,
  `photo` varchar(255) NOT NULL,
  `prix` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `auto`
--

INSERT INTO `auto` (`noserie`, `marque`, `modele`, `disponible`, `photo`, `prix`) VALUES
(0, 'audi', 'Caradisiac', 1, 'image/im1.jpg', '85000'),
(1, 'Mercedes', 'Citan', 3, 'image/im2.jpg', '65000'),
(2, 'Toyota', 'Yaris', 1, 'image/im8.jpg', '50000'),
(3, 'Toyota', 'RAV4', 1, 'image/im9.jpg', '60000'),
(4, 'BMW', 'x6', 1, 'image/im10.jpg', '150000'),
(5, 'BMW', 'SERIE 4', 1, 'image/im11.jpg', '95000'),
(9, 'Audi', 'A3', 4, 'image/im11.jpg', '40000'),
(10, 'Aston Martin', 'X61', 3, 'image/im2.jpg', '900000');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `code` int NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `login` varchar(240) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`code`, `prenom`, `nom`, `email`, `telephone`, `login`, `password`) VALUES
(1, 'ALEXIS GAEL', 'TCHANGUE', 'alextchangue@gmail.com', '4388550508', 'alextchangue@gmail.com', '12345'),
(2, 'ALEXIS GAEL', 'TCHANGUE', 'alextchangue@gmail.com', '4388550508', 'alextchangue@gmail.com', '12345'),
(3, 'Karamoko', 'Coulibaly', 'kara@gmail.com', '123 456 3333', 'kara', ''),
(4, 'Karamoko', 'Coulibaly', 'kara@gmail.com', '438 111 2222', 'kara', 'kara'),
(5, 'kara', 'fdfsfds', 'dfdsfdsfsd@dzfe.com', '45245', 'kara', 'kara'),
(6, 'rearea', 'rearer', 'kara@gmail.com', '42323', 'aaaa', ''),
(7, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `code` int NOT NULL,
  `noserie` int NOT NULL,
  `datelocation` date NOT NULL,
  `dateretour` date NOT NULL,
  `prixlocation` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`code`, `noserie`, `datelocation`, `dateretour`, `prixlocation`) VALUES
(1, 2, '0000-00-00', '0000-00-00', 2),
(2, 4, '0000-00-00', '0000-00-00', 4),
(3, 2, '0000-00-00', '0000-00-00', 2),
(4, 4, '0000-00-00', '0000-00-00', 4),
(5, 2, '0000-00-00', '0000-00-00', 2),
(6, 4, '0000-00-00', '0000-00-00', 4),
(7, 3, '0000-00-00', '0000-00-00', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`noserie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auto`
--
ALTER TABLE `auto`
  MODIFY `noserie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `code` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `code` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
