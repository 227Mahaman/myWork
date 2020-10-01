-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 21 fév. 2020 à 13:54
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `islamNiger`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `description`, `auteur`, `date`, `lieu`, `category_id`) VALUES
(1, 'Majliss Musunad Bilal', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(Ã¨)s musulman(e)s, par cet annonce nous vous invitons Ã  assister voir mÃªme participer au Majliss de Sheikh Ismael Akibou....', 'Sheikh Ismael Akibou', '2019-12-12', 'Bassora', 1),
(2, 'Tsangayar Tafsirai', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(Ã¨)s musulman(e)s, par cet annonce nous vous informons de la contunitÃ© du Tafsir de la sourate Ar-Rom au Masjid Amir Sultan par Imam Mouhamadou AbdourRahmane.... ', 'Sheikh Mouhamadou AbdourRahmane.', '2019-12-12', 'Amir Sultan', 2),
(3, 'Tarihin Manzon Allah', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(è)s musulman(e)s, par cet annonce nous vous informons de la contunité de la Bibliographie du Messager d\'Allah Mouhamadou (Paix et Salut sur lui) au Masjid Tawfiq par l\'Imam Abdallah Sossi', 'Imam Abdallah Sossi', '2019-12-13', 'Niamey 2000', 4),
(4, 'Tarihin Sahaban Manzon Allah', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(è)s musulman(e)s, par cet annonce nous vous informons de la contunité de la Bibliographie du Messager d\'Allah Mouhamadou (Paix et Salut sur lui) au Masjid Tawfiq par HafizouLLAH Abdoul Majid Ahmad.', 'Abdoul Majid Ahmad', '2019-12-14', '50 mètre', 4);

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `description`, `auteur`, `date`, `lieu`, `category_id`, `photo`) VALUES
(1, 'Majliss Musunad Bilal', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(Ã¨)s musulman(e)s, par cet annonce nous vous invitons Ã  assister voir mÃªme participer au Majliss de Sheikh Ismael Akibou....', 'Sheikh Ismael Akibou', '2019-12-12', 'Bassora', 1, 'images/AEMN.png'),
(2, 'Tsangayar Tafsirai', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(Ã¨)s musulman(e)s, par cet annonce nous vous informons de la contunitÃ© du Tafsir de la sourate Ar-Rom au Masjid Amir Sultan par Imam Mouhamadou AbdourRahmane.... ', 'Sheikh Mouhamadou AbdourRahmane.', '2019-12-12', 'Amir Sultan', 2, 'images/Zone 3.png'),
(3, 'Tarihin Manzon Allah', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(ï¿½)s musulman(e)s, par cet annonce nous vous informons de la contunitï¿½ de la Bibliographie du Messager d\'Allah Mouhamadou (Paix et Salut sur lui) au Masjid Tawfiq par l\'Imam Abdallah Sossi', 'Imam Abdallah Sossi', '2019-12-13', 'Niamey 2000', 4, 'images/Soeurs.png'),
(4, 'Tarihin Sahaban Manzon Allah', 'Assalamou Aleykoum Wa Rahmatoullah Wa Barkatouh!Cher(ï¿½)s musulman(e)s, par cet annonce nous vous informons de la contunitï¿½ de la Bibliographie du Messager d\'Allah Mouhamadou (Paix et Salut sur lui) au Masjid Tawfiq par HafizouLLAH Abdoul Majid Ahmad.', 'Abdoul Majid Ahmad', '2019-12-14', '50 mï¿½tre', 4, 'images/Sagesse1.png'),
(5, 'Waazin Kassa', 'A Niamey DÃ©cembre 2019', 'Association', '2019-12-28', 'CCOG', 3, 'images/logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `nom`, `prenom`, `statut`, `region`, `description`, `photo`) VALUES
(1, 'Abdoul Majid', 'Ahmad', 1, 7, 'azazzazaz', 'images/images.png'),
(2, 'Ismael', 'Akibou', 4, 8, 'Imam Masjid Tawfiq', 'images/Capture dâ€™Ã©cran de 2019-12-15 16-08-14.png'),
(3, 'Mouhamadou', 'AbdourRahmane', 4, 8, 'Imam Masjid Amir SUltan', 'images/Capture dâ€™Ã©cran de 2020-01-02 22-27-09.png'),
(4, 'Abass', 'Yacouba', 1, 7, 'Malam', 'images/Capture dâ€™Ã©cran de 2019-12-11 18-01-54.png'),
(5, 'Abdallah', 'Sossi', 1, 8, 'Imam Masjid Ny 2000\r\nSheikh Maderssa Ny 2000\r\nLicence Hadith', 'images/Capture dâ€™Ã©cran de 2019-12-10 00-36-43.png'),
(7, 'Housseini', 'Hassan', 1, 8, 'Imam', 'images/est_logo.png'),
(8, 'Imam Abdallah', 'Abdallah', 1, 3, 'Imam', 'images/Capture dâ€™Ã©cran de 2019-05-21 13-25-44.png');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'Majliss'),
(2, 'Tafsir'),
(3, 'Nassiha'),
(4, 'Sira'),
(5, 'Conference'),
(6, 'Waazin Kassa');

-- --------------------------------------------------------

--
-- Structure de la table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `fikr` int(11) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `datas`
--

INSERT INTO `datas` (`id`, `titre`, `date`, `fikr`, `chemin`) VALUES
(1, 'Sahih Al-Bukhari 1', '2019-12-29', 7, 'dossiers/000.mp3'),
(2, 'Sahih Al-Bukhari 2', '2019-12-30', 2, 'dossiers/000.mp3'),
(3, 'Majliss Musunad Bilal 10', '2019-12-16', 1, ''),
(4, 'Majliss Musunad Bilal 11', '2019-12-31', 1, ''),
(5, 'Dama no1', '2019-12-31', 4, 'dossiers/dama no 1.mp3'),
(7, 'Dama no 2', '2019-12-31', 4, 'dossiers/dama no 2.mp3'),
(8, 'Tsangayar Tafsirai 27', '2019-12-30', 3, 'dossiers/TSANGAYAR TAFSIRAI  DR  MUHAMMAD SANI UMAR RLEMO  27-mc.mp3'),
(9, 'Lokaci no 1', '2020-01-01', 6, 'dossiers/Sarim 1.mp3'),
(10, 'La mort no 1', '2020-01-05', 7, 'dossiers/01 FATIHA .mp3'),
(11, 'Dama no 3', '2020-01-14', 4, 'dossiers/dama no 2.mp3');

-- --------------------------------------------------------

--
-- Structure de la table `fikrs`
--

CREATE TABLE `fikrs` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `livre` varchar(255) NOT NULL,
  `auteur` int(11) NOT NULL,
  `date` date NOT NULL,
  `langue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fikrs`
--

INSERT INTO `fikrs` (`id`, `titre`, `livre`, `auteur`, `date`, `langue_id`) VALUES
(1, 'Majliss Musunad Bilal', 'Musunad Bilal', 1, '2019-12-30', 2),
(2, 'Sahih Al-Bukhari', 'Sahih Al-Bukhari', 2, '2019-12-17', 2),
(3, 'Tsangayar Tafsirai', 'Coran', 3, '2019-12-30', 1),
(4, 'Dama', 'Lokaci Dama', 1, '2019-12-31', 1),
(6, 'Lokaci', 'Temps', 2, '2020-01-01', 1),
(7, 'La mort', 'Mort', 1, '2020-01-05', 3);

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `code`, `titre`) VALUES
(1, 'HS', 'Hausa'),
(2, 'ZR', 'Zarma'),
(3, 'FR', 'Francais'),
(4, 'FL', 'FulfudÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `titre`) VALUES
(1, 'Agadez'),
(2, 'Diffa'),
(3, 'Dosso'),
(4, 'Maradi'),
(5, 'Tahaou'),
(6, 'Tillabéri'),
(7, 'Zinder'),
(8, 'Niamey');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statuts`
--

INSERT INTO `statuts` (`id`, `grade`) VALUES
(1, 'Hafizoullah'),
(2, 'Oustaz'),
(3, 'Malam'),
(4, 'Sheikh');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'abdallah', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statut` (`statut`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fikr` (`fikr`);

--
-- Index pour la table `fikrs`
--
ALTER TABLE `fikrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur` (`auteur`),
  ADD KEY `langue_id` (`langue_id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
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
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `fikrs`
--
ALTER TABLE `fikrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
