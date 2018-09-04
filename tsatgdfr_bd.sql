-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2018 at 10:26 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsatgdfr_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `tournoi_id` int(11) DEFAULT NULL,
  `rencontre_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `titre`, `description`, `tournoi_id`, `rencontre_id`, `created_at`, `updated_at`, `actif`, `slug`) VALUES
(1, 'TOURNOI JEUNES 2018', 'description', NULL, NULL, '2018-06-12 08:54:46', '2018-06-12 08:54:46', 1, 'tournoi-jeunes-2018'),
(2, 'TOURNOI ADULTES 2018', 'description', NULL, NULL, '2018-06-12 08:58:58', '2018-06-12 08:59:54', 1, 'tournoi-adultes-2018');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ANONYME',
  `news_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traite` tinyint(1) NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lien_utiles`
--

CREATE TABLE `lien_utiles` (
  `id` int(11) NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `titre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Le club', 'club', NULL, NULL),
(2, 'Compétition', 'competition', NULL, NULL),
(3, 'Infos Pratiques', 'info-pratique', NULL, NULL),
(4, 'L\'enseignement', 'l-enseignement', NULL, NULL),
(5, 'La galerie', 'galerie', NULL, NULL),
(6, 'Les liens utiles', 'lien-utiles', NULL, NULL),
(7, 'Contact', 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_16_160204_create_albums_table', 1),
(2, '2018_03_16_160204_create_contacts_table', 1),
(3, '2018_03_16_160204_create_documents_table', 1),
(4, '2018_03_16_160204_create_equipes_table', 1),
(5, '2018_03_16_160204_create_lien_utiles_table', 1),
(6, '2018_03_16_160204_create_menus_table', 1),
(7, '2018_03_16_160204_create_news_table', 1),
(8, '2018_03_16_160204_create_partenaires_table', 1),
(9, '2018_03_16_160204_create_photos_table', 1),
(10, '2018_03_16_160204_create_rencontre_users_table', 1),
(11, '2018_03_16_160204_create_rencontres_table', 1),
(12, '2018_03_16_160204_create_sous_menus_table', 1),
(13, '2018_03_16_160204_create_statuts_table', 1),
(14, '2018_03_16_160204_create_tournois_table', 1),
(15, '2018_03_16_160204_create_users_table', 1),
(16, '2018_03_16_160207_add_foreign_keys_to_albums_table', 1),
(17, '2018_03_16_160207_add_foreign_keys_to_documents_table', 1),
(18, '2018_03_16_160207_add_foreign_keys_to_photos_table', 1),
(19, '2018_03_16_160207_add_foreign_keys_to_rencontre_user_table', 1),
(20, '2018_03_16_160207_add_foreign_keys_to_rencontres_table', 1),
(21, '2018_03_16_160207_add_foreign_keys_to_sous_menus_table', 1),
(22, '2018_03_16_160207_add_foreign_keys_to_tournois_table', 1),
(23, '2018_03_16_160207_add_foreign_keys_to_users_table', 1),
(24, '2018_03_28_062713_add_remember_token', 1),
(25, '2018_03_28_132907_addOrderSousMenu', 1),
(26, '2018_03_29_135558_addActifAlbum', 1),
(27, '2018_03_29_150711_addAdversaireRencontre', 1),
(28, '2018_03_29_151006_addNullableAlbumIdToRencontre', 1),
(29, '2018_05_03_121204_addNullable_to_tournois', 1),
(30, '2018_05_03_134741_addSlugToAlbum', 1),
(31, '2018_05_03_134750_addSlugToPhoto', 1),
(32, '2018_05_03_142006_addDescriptionToPartenaires', 1),
(33, '2018_06_08_123920_creat_commentaires_table', 2),
(34, '2018_06_08_124334_add_nb_commentaire_to_news', 2),
(35, '2018_06_08_125622_add_ofreign_keys_to_commentaire', 2),
(36, '2018_06_11_201353_add_url_to_news', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nb_commentaire` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'images/tennisjoueur3.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `contenu`, `titre`, `created_at`, `updated_at`, `nb_commentaire`, `url`) VALUES
(1, '<p><img alt=\"\" src=\"http://tsatgd.test/files/1489417405.jpg\" style=\"height:66px; width:100px\" />ghghgfh</p>\r\n\r\n<h1>hgjhj</h1>', 'test', '2018-06-07 18:15:42', '2018-06-07 18:15:42', NULL, 'images/tennisjoueur3.jpg'),
(2, '<p>sdgf<input alt=\"\" src=\"http://www.tsatgd.fr/files/album/finale.jpg\" style=\"height: 56px; width: 100px;\" type=\"image\" /></p>', 'dsf', '2018-06-12 11:56:10', '2018-06-12 11:56:45', NULL, NULL),
(4, '<p><span style=\"color:#e67e22\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><input alt=\"\" src=\"http://tsatgd.fr/files/titou3.jpg\" style=\"width: 381px; height: 268px;\" type=\"image\" /></span></span></p>', 'Test', '2018-06-14 04:36:54', '2018-06-14 04:36:54', NULL, 'sqdfg');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `nom`, `site`, `logo`, `tel`, `mail`, `adresse`, `cp`, `ville`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Test Seb', 'www.lequipe.fr', '/files/1489417405.jpg', '0600010203', 'www.lequipe.fr', 'rue d\'ici', '39500', 'Damparis', '2018-05-08 19:06:43', '2018-05-08 19:06:43', 'un beau test');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `album_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `titre`, `description`, `album_id`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'CATEGORIE 12 ANS FEMININES', NULL, 1, '2018-06-12 08:56:44', '2018-06-12 08:56:44', 'categorie-12-ans-feminines');

-- --------------------------------------------------------

--
-- Table structure for table `rencontres`
--

CREATE TABLE `rencontres` (
  `id` int(11) NOT NULL,
  `dte` date NOT NULL,
  `heure` datetime DEFAULT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `victoire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adversaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rencontre_users`
--

CREATE TABLE `rencontre_users` (
  `valide` tinyint(1) NOT NULL,
  `resultat` tinyint(1) DEFAULT NULL,
  `score` text COLLATE utf8mb4_unicode_ci,
  `id` int(11) NOT NULL,
  `rencontre_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sous_menus`
--

CREATE TABLE `sous_menus` (
  `id` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sous_menus`
--

INSERT INTO `sous_menus` (`id`, `titre`, `contenu`, `slug`, `menu_id`, `created_at`, `updated_at`, `ordre`) VALUES
(1, 'Historique', '<p>L&#39;historique du club sera ici<input alt=\"\" src=\"http://tsatgd.fr/files/1489417405.jpg\" style=\"width: 70px; height: 46px;\" type=\"image\" /></p>\r\n\r\n<p>kjkljkl</p>\r\n\r\n<p>kjlkjkkl</p>', 'historique', 1, NULL, NULL, 1),
(2, 'Le comité', NULL, 'comite', 1, NULL, NULL, 2),
(3, 'Les installations', '<p>Ici on verra les installations !</p>', 'installations', 1, NULL, NULL, 3),
(4, 'Les partenaires', NULL, 'partenaires', 1, NULL, NULL, 4),
(5, 'Tournoi', NULL, 'tournoi', 2, NULL, NULL, 1),
(6, 'Equipes', NULL, 'equipe', 2, NULL, NULL, 2),
(7, 'Arbitres', NULL, 'arbitres', 2, NULL, NULL, 3),
(8, 'Résultats', NULL, 'resultats', 2, NULL, NULL, 4),
(9, 'Les horaires', NULL, 'horaires', 3, NULL, NULL, 1),
(10, 'Devenir membre', NULL, 'devenir-membre', 3, NULL, NULL, 2),
(11, 'La réservation', NULL, 'reservations', 3, NULL, NULL, 3),
(12, 'Tarifs', NULL, 'tarifs', 3, NULL, NULL, 4),
(13, 'Equipe pédagogique', NULL, 'l-equipe-pedagogique', 4, NULL, NULL, 1),
(14, 'Ecole de tennis', NULL, 'l-ecole-de-tennis', 4, NULL, NULL, 2),
(15, 'Cours collectifs', NULL, 'cours-colectifs', 4, NULL, NULL, 3),
(16, 'Les stages', NULL, 'les-stages', 4, NULL, NULL, 4),
(17, 'Coordonnées', NULL, 'coordonnees', 7, NULL, NULL, 1),
(18, 'Nous contacter', NULL, 'contacter', 7, NULL, NULL, 2),
(19, 'Plan d\'accès', NULL, 'plan', 7, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `statuts`
--

CREATE TABLE `statuts` (
  `id` int(11) NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tournois`
--

CREATE TABLE `tournois` (
  `id` int(11) NOT NULL,
  `dte_debut` date NOT NULL,
  `dte_fin` date NOT NULL,
  `dte_fin_inscription` date NOT NULL,
  `lien_site` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  `resultat` text COLLATE utf8mb4_unicode_ci,
  `album_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_arbitre` tinyint(1) NOT NULL DEFAULT '0',
  `est_joueur` tinyint(1) NOT NULL DEFAULT '0',
  `est_admin` tinyint(1) NOT NULL DEFAULT '0',
  `valider` tinyint(1) NOT NULL DEFAULT '0',
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `telephone`, `password`, `commentaire`, `est_arbitre`, `est_joueur`, `est_admin`, `valider`, `photo`, `statut_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$d7I7.MfoDnGf6d1gctL0/eY1tUHSBx/cPRLEAzWn5TdOCcONbmlyq', NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, '2mVFgFn2oxEt9cgpWY5TlDPTyHpSKXj3Vj7lgtVOWp4aCYwIzZMBe22X4pGS'),
(2, 'joueur', 'joueur', 'joueur@gmail.com', NULL, '$2y$10$7DQymTN6xEjaEhHRO96lP.N7PICnZfLJzqW9rTHH8dUTgqVBYaJeS', NULL, 0, 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
(3, 'arbitre', 'arbitre', 'arbitre@gmail.com', NULL, '$2y$10$WUg8SRVPren5IG2n84kWsu6riIbZiqAqURkYhip5TSw5Jmn0oN116', NULL, 1, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
(4, 'invite', 'invite', 'invite@gmail.com', NULL, '$2y$10$JUPJy3zlspd.tZHVvAQcouP4e/ZazJSPz8nPpTZB4BJ.jyx.Whwmm', NULL, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_albums_id_tournois` (`tournoi_id`),
  ADD KEY `FK_albums_id_rencontres` (`rencontre_id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_commentaires_id_news` (`news_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_documents_id_users` (`user_id`);

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lien_utiles`
--
ALTER TABLE `lien_utiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_photos_id_albums` (`album_id`);

--
-- Indexes for table `rencontres`
--
ALTER TABLE `rencontres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rencontres_id_equipes` (`equipe_id`),
  ADD KEY `FK_rencontres_id_albums` (`album_id`);

--
-- Indexes for table `rencontre_users`
--
ALTER TABLE `rencontre_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rencontre_user_id_rencontre` (`rencontre_id`),
  ADD KEY `FK_user_rencontre_id_user` (`user_id`);

--
-- Indexes for table `sous_menus`
--
ALTER TABLE `sous_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sous_menus_id_menu` (`menu_id`);

--
-- Indexes for table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournois`
--
ALTER TABLE `tournois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tournois_id_albums` (`album_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_users_id_statuts` (`statut_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lien_utiles`
--
ALTER TABLE `lien_utiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rencontres`
--
ALTER TABLE `rencontres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sous_menus`
--
ALTER TABLE `sous_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournois`
--
ALTER TABLE `tournois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `FK_albums_id_rencontres` FOREIGN KEY (`rencontre_id`) REFERENCES `rencontres` (`id`),
  ADD CONSTRAINT `FK_albums_id_tournois` FOREIGN KEY (`tournoi_id`) REFERENCES `tournois` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `FK_documents_id_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `FK_photos_id_albums` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Constraints for table `rencontres`
--
ALTER TABLE `rencontres`
  ADD CONSTRAINT `FK_rencontres_id_albums` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `FK_rencontres_id_equipes` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`id`);

--
-- Constraints for table `rencontre_users`
--
ALTER TABLE `rencontre_users`
  ADD CONSTRAINT `FK_rencontre_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_rencontre_user_id_rencontres` FOREIGN KEY (`rencontre_id`) REFERENCES `rencontres` (`id`);

--
-- Constraints for table `sous_menus`
--
ALTER TABLE `sous_menus`
  ADD CONSTRAINT `FK_sous_menus_menu_id` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `tournois`
--
ALTER TABLE `tournois`
  ADD CONSTRAINT `FK_tournois_id_albums` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_id_statuts` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
