-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 mai 2024 à 15:53
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iai-project`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(19, 'Admin', 'admin', 'rean@gmail.com', 'admin', 'male', '30', '675489345', 'Damas 2');

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chef`
--

INSERT INTO `chef` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(1, 'Chef Entreprise', 'chef', 'sonia@gmail.com', 'chef', 'male', '34', '675489349', 'Nkwen ');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `unique_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`, `unique_id`) VALUES
(10, 'rean', 'client@gmail.com', 'rean', 'male', '25', '675489345', 'Damas ', NULL),
(11, 'Sonia Mama', 'admin@admin.com', '123456', 'Homme', '45', '675489345', 'Damas 4', NULL),
(21, 'LOLO', 'lolo@gmail.com', '237lolo', 'Femme', '2001-06-25', '657435221', 'Awae', '1472085131'),
(22, 'Latifa', 'latifa@gmail.com', 'lala2', 'Femme', '2000-04-23', '364378294', 'Awae', '1364493573');

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `assure` varchar(50) NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  `taille` varchar(50) NOT NULL,
  `poid` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `banque` varchar(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `prime` varchar(50) NOT NULL,
  `beneficaire` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL,
  `duree` varchar(50) NOT NULL,
  `valid` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contract`
--

INSERT INTO `contract` (`id`, `assure`, `montant`, `taille`, `poid`, `product_name`, `banque`, `etat`, `prime`, `beneficaire`, `age`, `date`, `duree`, `valid`, `unique_id`) VALUES
(2, 'Somo', 500, '6', '55', 'Mixte anticipe', 'momo', 'yes', 'hebdomadaire', 'school', 2024, '2024-05-07', '2 years', NULL, ''),
(3, 'girl', 500, '45', '23', 'Mixte anticipe', 'momo', 'yes', 'hebdomadaire', 'student', 2024, '2024-05-25', '5', NULL, '1364493573');

-- --------------------------------------------------------

--
-- Structure de la table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `director`
--

INSERT INTO `director` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(8, 'director', 'good', 'director@gmail.com', 'good', 'male', '25', '675849374', 'Afirca');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Status` varchar(22) DEFAULT NULL,
  `message` varchar(100) NOT NULL DEFAULT 'Was Rejected',
  `unique_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titleEnglish` varchar(50) NOT NULL,
  `titleFrench` varchar(50) NOT NULL,
  `descEnglish` varchar(255) NOT NULL,
  `descFrench` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `image`, `titleEnglish`, `titleFrench`, `descEnglish`, `descFrench`) VALUES
(1, '660b0ad8316cc_IAI.jpg', 'The Good Man', 'Le Bonne Mec', 'the good man is a nice book to read', 'le bonne mec se un bonne book de lier'),
(2, '5bg.jpg', 'The Good Man', 'Le Bonne Mec', 'Goood jhsdsd', 'Bonne finien'),
(3, '2damso.png', 'The Good Man', 'Le Bonne Mec', 'Good gooooood', 'Bonne Bonne'),
(4, '1715232299pngwing.com (10).png', 'Test English', 'Test French', 'English testing', 'French testing'),
(5, '1715232528IMG-20240423-WA0006.jpg', 'Test English', 'Test French', 'English Guest', 'French time friends'),
(6, '1715232567IMG-20240423-WA0011.jpg', 'Test English', 'Test French', 'testing', 'testing'),
(7, '1715233351IMG-20240423-WA0002.jpg', 'Test English', 'Test French', 'test', 'teste'),
(8, '1715235823IMG-20240423-WA0009.jpg', 'Test English', 'Test French', 'english', 'french'),
(9, '1715235866IMG-20240423-WA0016.jpg', 'Test English', 'Test French', 'test e', 'test f'),
(10, '1715235886IMG-20240423-WA0003.jpg', 'Test English', 'Test French', 'e', 'f'),
(11, '1715241528IMG-20240423-WA0018.jpg', 'Test English', 'Test French', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sunt dicta possimus eveniet, doloribus delectus nihil ab ratione earum non adipisci, ad aut beatae quis minima deleniti! Soluta, perferendis! Voluptatibus perferendis veritatis cum inventore t', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sunt dicta possimus eveniet, doloribus delectus nihil ab ratione earum non adipisci, ad aut beatae quis minima deleniti! Soluta, perferendis! Voluptatibus perferendis veritatis cum inventore t'),
(12, '1715323116IMG-20240423-WA0017.jpg', 'Test English', 'Test French', 'English Tekeng', 'Frecnh girl');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(1, 'Service Client', 'Sandra Naomi', 'sandra@gmail.com', 'sandra237', 'female', '35', '6767564790', 'Ngomgham'),
(6, 'Service Client', 'service', 'sonia@gmail.com', 'service', 'female', '30', '698756443', 'Damas ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Index pour la table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
