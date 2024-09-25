-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 sep. 2024 à 17:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_depenses`
--

-- --------------------------------------------------------

--
-- Structure de la table `budgets`
--

CREATE TABLE `budgets` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `montant_total` decimal(10,2) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `date_creation`) VALUES
(1, 'Habillement', 'Ceci concerne les habillement', '2024-09-25 16:58:36');

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

CREATE TABLE `depenses` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `methode_paiement_id` int(11) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `date_depense` date NOT NULL,
  `description` text DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `methodes_paiement`
--

CREATE TABLE `methodes_paiement` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `methodes_paiement`
--

INSERT INTO `methodes_paiement` (`id`, `nom`, `description`, `date_creation`) VALUES
(1, 'Mobile money', 'Compte mobile', '2024-09-25 16:48:31'),
(2, 'Cash', 'L\'argent Cash', '2024-09-25 17:10:42');

-- --------------------------------------------------------

--
-- Structure de la table `revenus`
--

CREATE TABLE `revenus` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `methode_paiement_id` int(11) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `date_revenu` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `revenus`
--

INSERT INTO `revenus` (`id`, `utilisateur_id`, `source`, `methode_paiement_id`, `montant`, `date_revenu`, `description`, `date_creation`) VALUES
(1, 1, 'Salaire ', 1, 80.00, '2024-09-25', 'Description de mon salaire', '2024-09-25 17:42:00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `mot_de_passe`, `date_creation`) VALUES
(1, 'Espoir', 'mambueneespoir@gmail.com', '$2y$10$mdnVemRL4hJwsHCUcTQtaOwHKtazrbXu1gGsbNYTodWsEamDuLZUe', '2024-09-25 14:58:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `methode_paiement_id` (`methode_paiement_id`);

--
-- Index pour la table `methodes_paiement`
--
ALTER TABLE `methodes_paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `revenus`
--
ALTER TABLE `revenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `methode_paiement_id` (`methode_paiement_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `methodes_paiement`
--
ALTER TABLE `methodes_paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `revenus`
--
ALTER TABLE `revenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `budgets_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD CONSTRAINT `depenses_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `depenses_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `depenses_ibfk_3` FOREIGN KEY (`methode_paiement_id`) REFERENCES `methodes_paiement` (`id`);

--
-- Contraintes pour la table `revenus`
--
ALTER TABLE `revenus`
  ADD CONSTRAINT `revenus_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `revenus_ibfk_2` FOREIGN KEY (`methode_paiement_id`) REFERENCES `methodes_paiement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
