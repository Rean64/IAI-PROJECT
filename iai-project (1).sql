-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 10:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iai-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(19, 'Admin', 'admin', 'rean@gmail.com', 'admin', 'male', '30', '675489345', 'Damas 2');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
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
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(1, 'Chef Entreprise', 'chef', 'sonia@gmail.com', 'chef', 'male', '34', '675489349', 'Nkwen ');

-- --------------------------------------------------------

--
-- Table structure for table `client`
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
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`, `unique_id`) VALUES
(3, 'SOMO', 'rean@gmail.com', 'rean237', 'Homme', '2024-07-11', '65676564', 'Nkwen ', '246586');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `assure` varchar(50) NOT NULL,
  `valid` varchar(25) NOT NULL,
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
  `unique_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `assure`, `valid`, `montant`, `taille`, `poid`, `product_name`, `banque`, `etat`, `prime`, `beneficaire`, `age`, `date`, `duree`, `unique_id`) VALUES
(5, 'Somo', 'accepted', 500, '5', '56', 'Mixte retraite individuelle', 'momo', 'yes', 'mensuelle', 'school', 2024, '2024-07-30', '2 years', '246586'),
(6, 'Somo Rean', 'accepted', 500, '78', '7', 'Mixte anticipe', 'om', 'no', 'mensuelle', 'school', 2024, '2024-07-31', '3 years', '246586');

-- --------------------------------------------------------

--
-- Table structure for table `director`
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
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(8, 'director', 'good', 'director@gmail.com', 'good', 'male', '25', '675849374', 'Afirca');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `valid` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL DEFAULT 'Was Rejected',
  `unique_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `valid`, `message`, `unique_id`) VALUES
(34, 'Somo', 'accepted', 'Somo Souscription reussi.', '246586');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `titleEnglish`, `titleFrench`, `descEnglish`, `descFrench`) VALUES
(1, '660b0ad8316cc_IAI.jpg', 'The Good Man', 'Le Bonne Mec', 'the good man is a nice book to read', 'le bonne mec se un bonne book de lier'),
(2, '5bg.jpg', 'The Good Man', 'Le Bonne Mec', 'Goood jhsdsd', 'Bonne finien'),
(5, '1715232528IMG-20240423-WA0006.jpg', 'Test English', 'Test French', 'English Guest', 'French time friends'),
(6, '1715232567IMG-20240423-WA0011.jpg', 'Test English', 'Test French', 'testing', 'testing'),
(11, '1715241528IMG-20240423-WA0018.jpg', 'Test English', 'Test French', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sunt dicta possimus eveniet, doloribus delectus nihil ab ratione earum non adipisci, ad aut beatae quis minima deleniti! Soluta, perferendis! Voluptatibus perferendis veritatis cum inventore t', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sunt dicta possimus eveniet, doloribus delectus nihil ab ratione earum non adipisci, ad aut beatae quis minima deleniti! Soluta, perferendis! Voluptatibus perferendis veritatis cum inventore t'),
(13, '1719142506baked.jpg', 'Nice Mate', 'Bon Fish', 'nice mate chef', 'bon fish chef'),
(14, '1719214079685698.jpg', 'Fight race', 'Race louit', 'good racing man', 'bon racing mec'),
(17, '1720873522fresh-fruits2.jpg', 'Test English', 'Test French', 'english language testing', 'french language testing');

-- --------------------------------------------------------

--
-- Table structure for table `services`
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
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `position`, `name`, `email`, `password`, `gender`, `age`, `phone`, `location`) VALUES
(1, 'Service Client', 'Sandra Naomi', 'sandra@gmail.com', 'sandra237', 'female', '35', '6767564790', 'Ngomgham'),
(6, 'Service Client', 'service', 'sonia@gmail.com', 'service', 'female', '30', '698756443', 'Damas ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valid` (`valid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
