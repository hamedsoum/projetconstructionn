-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 avr. 2019 à 19:35
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nanbul`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscripadmin`
--

CREATE TABLE `inscripadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `inscripadmin`
--

INSERT INTO `inscripadmin` (`id`, `username`, `email`, `password`) VALUES
(1, 'soumahoro', 'ibrahim@gmail.com', 'soum'),
(2, 'nan', 'nan@gmail.com', 'nan'),
(3, 'papa', 'papa@gmailcom', 'papa'),
(4, 'dosso', 'mamadou.soumahoro@uvci.edu.ci', 'dosso'),
(5, 'titi', 'titi@gmail.com', 'titi');

-- --------------------------------------------------------

--
-- Structure de la table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `commune` varchar(100) COLLATE utf8_bin NOT NULL,
  `domaine` varchar(100) COLLATE utf8_bin NOT NULL,
  `quartier` varchar(111) COLLATE utf8_bin NOT NULL,
  `tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `joinus`
--

INSERT INTO `joinus` (`id`, `nom`, `prenom`, `commune`, `domaine`, `quartier`, `tel`) VALUES
(1, 'soumahoro', 'abou', 'adjame', 'menuiserie', 'avocatier', 45257845),
(2, 'soumahoro', 'hamed', 'abobo', 'menuiserie', 'avocatier', 45257845),
(3, 'dosso', 'hamed', 'abobo', 'menuiserie', 'abobo', 44444444),
(4, 'kakshi', 'atake', 'plateau', 'plomberie', 'abobo', 45257845),
(5, 'soro', 'naruto', 'abobo', 'plomberie', 'abobo', 44444444),
(6, 'plombier', 'yves', 'marcory', 'plomberie', 'plateau', 8080808);

-- --------------------------------------------------------

--
-- Structure de la table `serv`
--

CREATE TABLE `serv` (
  `id` int(11) NOT NULL,
  `service` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `tel` int(10) NOT NULL,
  `commune` varchar(100) COLLATE utf8_bin NOT NULL,
  `quartier` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `serv`
--

INSERT INTO `serv` (`id`, `service`, `nom`, `prenom`, `tel`, `commune`, `quartier`, `email`) VALUES
(20, 'carrelage', 'koffi', 'adamo', 2141514, 'bingerville', 'binger', 'koffi@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscripadmin`
--
ALTER TABLE `inscripadmin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `serv`
--
ALTER TABLE `serv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscripadmin`
--
ALTER TABLE `inscripadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `serv`
--
ALTER TABLE `serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
