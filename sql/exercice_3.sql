-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 09 fév. 2018 à 16:25
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exercice_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `ID_MOVIE` int(11) NOT NULL,
  `TITRE` varchar(45) DEFAULT NULL,
  `ACTEURS` varchar(45) DEFAULT NULL,
  `REALISATEUR` varchar(45) DEFAULT NULL,
  `PRODUCTEUR` varchar(45) DEFAULT NULL,
  `ANNEEPROD` year(4) DEFAULT NULL,
  `LANGUE` varchar(45) DEFAULT NULL,
  `CATEGORIE` enum('ACTION','ANIMATION','AVENTURE','COMEDIE','DRAMATIQUE','HORREUR','FANTASTIQUE','GUERRE','HISTORIQUE','POLICIER','THRILLER','SCIENCE-FICTION') DEFAULT NULL,
  `SYNOPSIS` text,
  `VIDEO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`ID_MOVIE`, `TITRE`, `ACTEURS`, `REALISATEUR`, `PRODUCTEUR`, `ANNEEPROD`, `LANGUE`, `CATEGORIE`, `SYNOPSIS`, `VIDEO`) VALUES
(1, 'Le Cinquième Élément', 'Bruce Willis , Milla Jovovich , Gary Oldman', 'Luc Besson', 'Patrice Ledoux', 1997, 'Anglais', 'SCIENCE-FICTION', 'Deux savants découvrent l\'existence, outre l\'eau, l\'air, la terre et le feu, d\'un cinquième élément, le seul à pouvoir sauver le monde. Ce secret est protégé par les Mondoshawan, êtres venus d\'une autre galaxie, qui repartent avec la promesse d\'être à nouveau présents trois cents ans plus tard lorsque le Mal reviendra.', 'https://www.youtube.com/watch?v=5_FGaEq-aCY'),
(3, 'Salut', 'Superacteur', 'dededede', 'dedededed', 2015, 'Francais', 'AVENTURE', 'Il etait une fois dans l\'ouest', 'https://www.youtube.com/watch?v=dYZq_DlRBHQ&i'),
(4, 'Salut', 'Sylvester Stallon', 'dededede', 'Superproducteur', 2018, 'Francais', 'ACTION', 'Film de box plutot sympa ', 'https://www.youtube.com/watch?v=5_FGaEq-aCY'),
(9, 'Rocky', 'Sylvester Stallone', 'Luc Besson', 'Robert Chartoff', 1977, 'Francais', 'ACTION', 'Un petit boxeur de philadeplhie s\'entraine pour devenir le meilleur boxeur et pouvoir battre un ennemi de taille : Apollo Creed', 'https://www.youtube.com/watch?v=7RYpJAUMo2M');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID_MOVIE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID_MOVIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
