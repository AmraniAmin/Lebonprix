-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 mars 2024 à 15:29
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `basedonneessite`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Pseudo` varchar(20) NOT NULL,
  `motDepasse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Pseudo`, `motDepasse`) VALUES
('lounes', 'lounes2020');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `Nom`, `Parent_id`) VALUES
(1, 'Epicerie fine', NULL),
(2, 'Cave', NULL),
(3, 'Bio', NULL),
(4, 'Coffret', NULL),
(5, 'Merveille du Monde', NULL),
(6, 'Viande', NULL),
(9, 'Epicerie salée', 1),
(10, 'Epicerie sucrée', 1),
(11, 'Champagnes', 2),
(12, 'Vins', 2),
(13, 'Bières', 2),
(14, 'Cidres et Poirés', 2),
(15, 'Eaux et Limonades', 2),
(16, 'Sans alcool', 2),
(17, 'Jus et Sirops', 2),
(18, 'Autres', 2),
(19, 'Bio1', 3),
(20, 'Bio2', 3),
(21, 'Bio3', 3),
(22, 'Les gourmandises', 4),
(23, 'Boite carton', 4),
(24, 'Editions limitées de Noel', 4),
(25, 'Merveille 1', 5),
(26, 'Merveille 2', 5),
(27, 'Merveille 3', 5),
(28, 'Merveille 4', 5),
(29, 'Merveille 5', 5),
(30, 'Merveille 6', 5),
(31, 'Merveille 7', 5),
(32, 'Merveille 8', 5),
(33, 'Merveille 9', 5),
(34, 'Viandes Terre', 6),
(35, 'Box Agneau Touraine', 6),
(36, 'Mer', 6),
(37, 'Poulet et Dinde', 6),
(38, 'Pates à tartiner, confitures et miels', 10),
(39, 'Biscuits et gateaux', 10),
(40, 'Desserts', 10),
(41, 'Sucres et farines', 10),
(42, 'Chocolats et confiserie', 10),
(43, 'Fruits secs et fruits séchés', 10),
(44, 'Café, thé et boissons chaudes', 10),
(45, 'Céréales petit-déjeuner', 10),
(46, 'Fruits secs et Apéritifs', 9),
(47, 'Pates, riz, graines et céréales', 9),
(48, 'Conserves et bocaux', 9),
(49, 'Plats cuisinés et soupes', 9),
(50, 'Huiles et vinaigres', 9),
(51, 'Sauce set Condiments', 9),
(52, 'Bruts', 11),
(53, 'Rosés', 11),
(54, 'Blanc de Blancs', 11),
(55, 'Millésimés', 11),
(56, 'Grandes cuvées de Vignerons', 11),
(57, 'Nos coups de coeur 1er grand cru', 12),
(58, 'Touraine', 12),
(59, 'Bordeaux', 12),
(60, 'Bourgogne', 12),
(61, 'Vallée du Rhone', 12),
(62, 'Vallée de la Loire', 12),
(63, 'Provence', 12),
(64, 'Bières IPA', 13),
(65, 'Blondes', 13),
(66, 'Blanches', 13),
(67, 'Brunes', 13),
(68, 'Ambrées Rousses', 13),
(69, 'Ambrées', 13),
(70, 'Cidre rosé', 14),
(71, 'Bio', 14),
(72, 'Brut', 14),
(73, 'Artisanal', 14),
(74, 'Artisanale', 15),
(75, 'French Tonic Boisson au CBD', 15),
(76, 'Boisson au CBD', 15),
(77, 'Autres', 15),
(78, 'Vin Blanc', 16),
(79, 'Rosé', 16),
(80, 'Bulles de Luxe', 16),
(81, 'Spiritueux', 16),
(82, 'Autres', 16),
(83, 'Artisanal Jus d\'abricot', 17),
(84, 'Raisin', 17),
(85, 'Bettrave', 17),
(86, 'Yuzu', 17),
(87, 'Mandarine', 17),
(88, 'Nectars de Poire', 17),
(89, 'Banane', 17),
(90, 'Autres', 17),
(91, 'Découvrir ici', 18),
(92, 'Boeuf', 34),
(93, 'Agneau', 34),
(94, 'Autres', 34),
(95, 'Agneau', 35),
(96, 'Traçabilité de la ferme à l\'assiette', 35),
(97, 'Fruits de Mer, Huitres et Crustacés', 36),
(98, 'Saumon fumé', 36),
(99, 'Truites fumée', 36),
(100, 'Box Poulet du Sud-Ouest', 37),
(101, 'Cuisses de poulet 5kg', 37),
(102, 'Filet de poulet 5kg', 37),
(103, 'Pinot de poulet 5kg', 37),
(104, 'Cuisses de dinde', 37),
(105, 'Autres', 37);

-- --------------------------------------------------------

--
-- Structure de la table `nouveaute`
--

CREATE TABLE `nouveaute` (
  `id_nouveaute` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nouveaute`
--

INSERT INTO `nouveaute` (`id_nouveaute`, `date_debut`, `date_fin`, `id_produit`) VALUES
(6, '2004-02-25', '2004-02-28', 46),
(7, '2024-02-25', '2025-02-28', 60),
(8, '2024-02-25', '2026-02-28', 54),
(9, '2024-02-25', '2026-02-28', 58),
(10, '2024-02-25', '2025-02-28', 65),
(11, '2024-02-25', '2026-02-15', 52),
(12, '2024-02-25', '2024-05-15', 55);

-- --------------------------------------------------------

--
-- Structure de la table `password_recover`
--

CREATE TABLE `password_recover` (
  `id` int(25) NOT NULL,
  `token_user` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_recover` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `ingredients` varchar(300) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `prix` float NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `prix_sans_tva` float NOT NULL,
  `taux_tva` float NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom_produit`, `description`, `ingredients`, `image`, `prix`, `categorie_id`, `prix_sans_tva`, `taux_tva`, `quantite`) VALUES
(46, 'Café grains BIO Honduras-Tanzanie paquet 500g ', 'Un café au goût intense et onctueux. ', '50% Arabica* / 50% Robusta*. *Ingrédients issus de l\'agriculture biologique. Les ingrédients renseignés en majuscule attestent des allergènes présents dans le ou les produits. ', 'files/3.jpg', 5.225, 44, 5, 4.5, 10),
(47, '.Café expresso intense paquet 36 dosettes ', 'À conserver dans un endroit frais et sec, à l’abri de la chaleur et de la lumière.    Dosettes compatibles avec les machines SENSEO. Intensité : 9/10. ', '80% café Arabica, 20% café Robusta. Les ingrédients renseignés en majuscule attestent des allergènes présents dans le ou les produits.', 'files/2.jpg', 7.018, 44, 6.38, 10, 10),
(48, 'Quarts d\'orange confits enrobés chocolat 200g', 'Energie 1673 kJ / 398 kcal,  Matières grasses 14g dont acides gras saturés 8,4g,  Glucides 63g dont sucres 55g, Fibres alimentaires 5.5g, Protéines 2.6g,  Sel <0.01g. INFORMATIONS PRODUITS A conserver à l\'abri de la chaleur, de la lumière et de l\'humidité.  Traces éventuelles de : lait, fruits à coq', 'Quarts de tranches d\'oranges confits 70% (quarts de tranches d\'oranges, sucre, sirop de glucose-fructose), chocolat noir 30% (pâte de cacao, sucre, beurre de cacao, émulsifiant : lécithines (SOJA), arôme naturel de vanille). Chocolat noir : cacao 70% minimum. Les ingrédients renseignés en majuscule ', 'files/18.jpg', 8.05, 42, 7, 15, 10),
(49, 'Café grains BIO Honduras-Tanzanie paquet 200g ', 'Un café au goût intense et onctueux. ', '50% Arabica* / 50% Robusta*. *Ingrédients issus de l\'agriculture biologique. Les ingrédients renseignés en majuscule attestent des allergènes présents dans le ou les produits. ', 'files/3.jpg', 2.3, 44, 2, 15, 10),
(50, 'the vert', 'excellent thé vert provenance de Vietnam ', 'thé vert ', 'files/the.jpg', 5.25, 44, 5, 5, 5),
(51, 'Café grains BIO Honduras-Tanzanie paquet 800g ', 'Un café au goût intense et onctueux. ', '80% café Arabica, 20% café Robusta. Les ingrédients renseignés en majuscule attestent des allergènes présents dans le ou les produits.', 'files/3.jpg', 15.75, 44, 15, 5, 5),
(52, 'cafe chaut ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'files/bchaud.jpg', 3.15, 44, 3, 5, 5),
(53, 'Ice the à la pèche', 'Boisson rafraîchissante aux extraits de thé et jus de pêche', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'files/ice-tea-p-che.png', 1.65, 44, 1.5, 10, 5),
(54, 'Thé Vert De Chine Verre d\'Or 500g', ' Une véritable expérience de voyage. Notre gamme de thé Verre d\'Or est soigneusement sélectionnée parmi les meilleures récoltes, garantissant une qualité exceptionnelle à chaque feuille. Notre produit phare, le Thé vert de Chine Verre d’Or, vous invite à plonger dans un voyage sensoriel unique à tra', 'Notre thé vert de Chine est récolté avec le plus grand soin, sélectionnant uniquement les feuilles les plus délicates et les bourgeons les plus tendres. Le thé vert est reconnu pour ses bienfaits se transmettant de génération en génération. Riche en antioxydants, il aide à renforcer votre système im', 'files/theVertdOr.jpg', 10.5, 44, 10, 5, 5),
(55, 'Thé Vert Bio', 'Sencha Nature Chine ★ Thé Vert Nature Léger ★ Thé Vert en Vrac ★ Sachet 1 Kg ★ 400 Tasses ★ 100 % Agriculture Biologique ★ Thé Vert de Qualité ★ Satisfait ou Remboursé ★', '...', 'files/the_bio.jpg', 5.25, 44, 5, 5, 5),
(56, 'NATURELA - Café Grains Bio', 'Café Arabica Bio - Torréfaction Lente - Fabriqué en France', '...', 'files/cafe.jpg', 7.7, 44, 7, 10, 5),
(57, 'chocolat 1', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/chocolate.jpg', 1.65, 42, 1.5, 10, 5),
(58, 'chocolat 2', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/mouchi.jpg', 5.5, 42, 5, 10, 5),
(59, 'chocolat 3', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/tartinate.jpg', 7.35, 42, 7, 5, 5),
(60, 'confiserie 1', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/fraise.jpg', 7.84, 42, 7, 12, 5),
(61, 'confiserie 2', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/tartinate.jpg', 2.2, 42, 2, 10, 5),
(62, 'confiserie 3', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/cake-biscuit.jpg', 8.05, 42, 7, 15, 1),
(63, 'Buiscuit chocolat', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/buiscuit.jpg', 5.25, 42, 5, 5, 5),
(64, 'pate à tartiner', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/creme-caramel.jpg', 8.4, 42, 7, 20, 5),
(65, 'pate à tartiner 2', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/berre_cac.jpg', 4.4, 42, 4, 10, 5),
(66, 'Biscuit', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux', 'files/BiscuitMantecados.jpg', 3.6, 39, 3, 20, 5),
(67, 'Pates', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux\'', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux\'', 'files/pate.jpeg', 8.5, 38, 5, 15, 35),
(68, 'Gougères faciles', 'hjjjjjjjjjjjjjjjjjjjjjjjdbc', 'l<jvnjvxcx', 'files/apero.jpeg', 4.5, 46, 3.5, 5, 1),
(69, 'Ambrée Étoilée', 'Description de la bière Ambrée Étoilée', 'Houblon, malt, levure', 'files/image_ipa_1.jpg', 5.99, 64, 4.99, 0.2, 100),
(70, 'Cascade Dorée', 'Description de la bière Cascade Dorée', 'Houblon, malt, levure', 'files/image_ipa_2.jpg', 6.49, 64, 5.4, 0.09, 120),
(71, 'Houblon Ensoleillé', 'Description de la bière Houblon Ensoleillé', 'Houblon, malt, levure', 'files/image_ipa_3.jpg', 5.79, 65, 4.82, 0.15, 80),
(72, 'Mousse Aromatique', 'Description de la bière Mousse Aromatique', 'Houblon, malt, levure', 'files/image_ipa_4.jpg', 6.99, 65, 5.82, 0.17, 90),
(73, 'Brise Printanière', 'Description de la bière Brise Printanière', 'Houblon, malt, levure', 'files/image_ipa_5.jpg', 7.29, 66, 6.07, 0.22, 110),
(74, 'Orge Brillante', 'Description de la bière Orge Brillante', 'Houblon, malt, levure', 'files/image_ipa_6.jpg', 6.79, 64, 5.66, 0.13, 95),
(75, 'Hiver Épicé', 'Description de la bière Hiver Épicé', 'Houblon, malt, levure', 'files/image_ipa_7.jpg', 7.49, 67, 6.24, 0.25, 105),
(76, 'Écume Légère', 'Description de la bière Écume Légère', 'Houblon, malt, levure', 'files/image_ipa_8.jpg', 6.89, 68, 5.74, 0.15, 85),
(77, 'Lune Rousse', 'Description de la bière Lune Rousse', 'Houblon, malt, levure', 'files/image_ipa_9.jpg', 7.19, 68, 5.99, 0.2, 115),
(78, 'Saison Sauvage', 'Description de la bière Saison Sauvage', 'Houblon, malt, levure', 'files/image_ipa_10.jpg', 6.59, 69, 5.49, 0.1, 100),
(79, 'Cuvée Prestige', 'Description de la Cuvée Prestige', 'Raisin, levure', 'files/image_champagne_1.jpg', 39.99, 52, 33.32, 0.2, 100),
(80, 'Brut Rosé', 'Description du Brut Rosé', 'Raisin, levure', 'files/image_champagne_2.jpg', 49.99, 52, 41.66, 0.2, 120),
(81, 'Millésime Élégant', 'Description du Millésime Élégant', 'Raisin, levure', 'files/image_champagne_3.jpg', 59.99, 52, 49.99, 0.2, 80),
(82, 'Blanc de Blancs', 'Description du Blanc de Blancs', 'Raisin, levure', 'files/image_champagne_4.jpg', 69.99, 53, 58.32, 0.2, 90),
(83, 'Cuvée Spéciale', 'Description de la Cuvée Spéciale', 'Raisin, levure', 'files/image_champagne_5.jpg', 79.99, 57, 66.66, 0.2, 110),
(84, 'Brut Nature', 'Description du Brut Nature', 'Raisin, levure', 'files/image_champagne_6.jpg', 89.99, 54, 74.99, 0.2, 95),
(85, 'Rosé Prestige', 'Description du Rosé Prestige', 'Raisin, levure', 'files/image_champagne_7.jpg', 99.99, 55, 83.32, 0.2, 105),
(86, 'Vintage Rare', 'Description du Vintage Rare', 'Raisin, levure', 'files/image_champagne_8.jpg', 109.99, 56, 91.66, 0.2, 85),
(87, 'Château Margaux', 'Description de Château Margaux', 'Raisin, levure', 'files/image_vin_1.jpg', 39.99, 58, 33.32, 0.2, 100),
(88, 'Merlot Élégant', 'Description de Merlot Élégant', 'Raisin, levure', 'files/image_vin_2.jpg', 49.99, 57, 41.66, 0.2, 120),
(89, 'Pinot Noir', 'Description de Pinot Noir', 'Raisin, levure', 'files/image_vin_3.jpg', 59.99, 57, 49.99, 0.2, 80),
(90, 'Cabernet Sauvignon', 'Description de Cabernet Sauvignon', 'Raisin, levure', 'files/image_vin_4.jpg', 69.99, 57, 58.32, 0.2, 90),
(91, 'Chardonnay Classique', 'Description de Chardonnay Classique', 'Raisin, levure', 'files/image_vin_5.jpg', 79.99, 59, 66.66, 0.2, 110),
(92, 'Syrah Puissant', 'Description de Syrah Puissant', 'Raisin, levure', 'files/image_vin_6.jpg', 89.99, 60, 74.99, 0.2, 95),
(93, 'Sauvignon Blanc', 'Description de Sauvignon Blanc', 'Raisin, levure', 'files/image_vin_7.jpg', 99.99, 61, 83.32, 0.2, 105),
(94, 'Grenache Délicat', 'Description de Grenache Délicat', 'Raisin, levure', 'files/image_vin_8.jpg', 109.99, 63, 91.66, 0.2, 85),
(95, 'Cidre Poiré Brut', 'Description du Cidre Poiré Brut', 'Pomme, levure', 'files/image_cidre_1.jpg', 9.99, 70, 8.32, 0.2, 100),
(96, 'Cidre Poiré Doux', 'Description du Cidre Poiré Doux', 'Pomme, levure', 'files/image_cidre_2.jpg', 11.99, 70, 9.99, 0.2, 120),
(97, 'Cidre Poiré Extra Brut', 'Description du Cidre Poiré Extra Brut', 'Pomme, levure', 'files/image_cidre_3.jpg', 13.99, 71, 11.66, 0.2, 80),
(98, 'Cidre Poiré Traditionnel', 'Description du Cidre Poiré Traditionnel', 'Pomme, levure', 'files/image_cidre_4.jpg', 15.99, 72, 13.32, 0.2, 90),
(99, 'Cidre Poiré Biologique', 'Description du Cidre Poiré Biologique', 'Pomme, levure', 'files/image_cidre_5.jpg', 17.99, 73, 14.99, 0.2, 110),
(101, 'Cidre Poiré Rosé', 'Description du Cidre Poiré Rosé', 'Pomme, levure', 'files/image_cidre_7.jpg', 21.99, 72, 18.32, 0.2, 105),
(102, 'Cidre Poiré Extra Doux', 'Description du Cidre Poiré Extra Doux', 'Pomme, levure', 'files/image_cidre_8.jpg', 23.99, 71, 19.99, 0.2, 85),
(103, 'Jus de Pomme Bio', 'Description du Jus de Pomme Bio', 'Pomme', 'files/image_jus_1.jpg', 4.99, 83, 4.16, 0.2, 100),
(104, 'Sirop de Fraise', 'Description du Sirop de Fraise', 'Fraise, sucre', 'files/image_sirop_1.jpg', 6.99, 83, 5.82, 0.2, 80),
(105, 'Sirop de Menthe Fraîche', 'Description du Sirop de Menthe Fraîche', 'Menthe, sucre', 'files/image_sirop_2.jpg', 7.99, 83, 6.66, 0.2, 90),
(106, 'Jus de Poire Pressé', 'Description du Jus de Poire Pressé', 'Poire', 'files/image_jus_3.jpg', 8.99, 83, 7.49, 0.2, 110),
(107, 'Sirop de Grenadine', 'Description du Sirop de Grenadine', 'Grenadine, sucre', 'files/image_sirop_3.jpg', 9.99, 83, 8.32, 0.2, 95),
(108, 'Jus de Mangue Exotique', 'Description du Jus de Mangue Exotique', 'Mangue', 'files/image_jus_4.jpg', 10.99, 83, 9.16, 0.2, 105),
(109, 'Sirop de Citron Vert', 'Description du Sirop de Citron Vert', 'Citron vert, sucre', 'files/image_sirop_4.jpg', 11.99, 83, 9.99, 0.2, 85),
(110, 'Eau de Source Naturelle', 'Description de l\'Eau de Source Naturelle', 'Eau', 'files/image_eau_1.jpg', 1.99, 74, 1.66, 0.2, 100),
(111, 'Eau Pétillante', 'Description de l\'Eau Pétillante', 'Eau, gaz carbonique', 'files/image_eau_2.jpg', 2.49, 74, 2.07, 0.2, 120),
(112, 'Limonade Traditionnelle', 'Description de la Limonade Traditionnelle', 'Eau, citron, sucre', 'files/image_limonade_1.jpg', 2.99, 74, 2.49, 0.2, 80),
(113, 'Eau de Coco Rafraîchissante', 'Description de l\'Eau de Coco Rafraîchissante', 'Eau de coco', 'files/image_eau_3.jpg', 3.49, 74, 2.91, 0.2, 90),
(114, 'Limonade au Citron Vert', 'Description de la Limonade au Citron Vert', 'Eau, citron vert, sucre', 'files/image_limonade_2.jpg', 3.99, 75, 3.32, 0.2, 110),
(115, 'Eau Minérale Gazeuse', 'Description de l\'Eau Minérale Gazeuse', 'Eau, minéraux, gaz carbonique', 'files/image_eau_4.jpg', 4.49, 76, 3.74, 0.2, 95),
(116, 'Limonade à la Fraise', 'Description de la Limonade à la Fraise', 'Eau, fraise, sucre', 'files/image_limonade_3.jpg', 4.99, 74, 4.16, 0.2, 105),
(117, 'Eau Infusée aux Fruits Rouges', 'Description de l\'Eau Infusée aux Fruits Rouges', 'Eau, fruits rouges', 'files/image_eau_5.jpg', 5.49, 77, 4.57, 0.2, 85),
(118, 'Coffret Gourmandise Classique', 'Description du Coffret Gourmandise Classique', 'Assortiment de délices gourmands', 'files/image_coffret_1.jpg', 29.99, 22, 24.99, 0.2, 100),
(119, 'Coffret Gourmandise Luxe', 'Description du Coffret Gourmandise Luxe', 'Sélection raffinée de mets délicieux', 'files/image_coffret_2.jpg', 39.99, 22, 33.32, 0.2, 120),
(120, 'Coffret Gourmandise Prestige', 'Description du Coffret Gourmandise Prestige', 'Collection exquise de friandises haut de gamme', 'files/image_coffret_3.jpg', 49.99, 22, 41.66, 0.2, 80),
(121, 'Coffret Gourmandise Surprise', 'Description du Coffret Gourmandise Surprise', 'Découvrez une variété de plaisirs culinaires', 'files/image_coffret_4.jpg', 59.99, 23, 49.99, 0.2, 90),
(122, 'Coffret Gourmandise Douceur', 'Description du Coffret Gourmandise Douceur', 'Délices sucrés pour les amateurs de desserts', 'files/image_coffret_5.jpg', 69.99, 23, 58.32, 0.2, 110),
(123, 'Coffret Gourmandise Découverte', 'Description du Coffret Gourmandise Découverte', 'Voyage gustatif à travers une sélection variée', 'files/image_coffret_6.jpg', 79.99, 23, 66.66, 0.2, 95),
(124, 'Produit Merveille du Monde Classique', 'Description du Produit Merveille du Monde Classique', 'Assortiment de délices gourmands', 'files/image_coffret_1.jpg', 29.99, 25, 24.99, 0.2, 100),
(125, 'Produit Merveille du Monde Luxe', 'Description du Produit Merveille du Monde Luxe', 'Sélection raffinée de mets délicieux', 'files/image_coffret_2.jpg', 39.99, 26, 33.32, 0.2, 120),
(126, 'Produit Merveille du Monde Prestige', 'Description du Produit Merveille du Monde Prestige', 'Collection exquise de friandises haut de gamme', 'files/image_coffret_3.jpg', 49.99, 27, 41.66, 0.2, 80),
(127, 'Produit Merveille du Monde Surprise', 'Description du Produit Merveille du Monde Surprise', 'Découvrez une variété de plaisirs culinaires', 'files/image_coffret_4.jpg', 59.99, 28, 49.99, 0.2, 90),
(128, 'Produit Merveille du Monde Douceur', 'Description du Produit Merveille du Monde Douceur', 'Délices sucrés pour les amateurs de desserts', 'files/image_coffret_5.jpg', 69.99, 29, 58.32, 0.2, 110),
(129, 'Produit Merveille du Monde Découverte', 'Description du Produit Merveille du Monde Découverte', 'Voyage gustatif à travers une sélection variée', 'files/image_coffret_6.jpg', 79.99, 30, 66.66, 0.2, 95),
(130, 'poulet', 'Description du poulet', 'Poulet, assaisonnements', 'files/image_poulet.jpg', 8.99, 100, 7.49, 0.2, 100),
(131, 'cuisse de poulet', 'Description de la cuisse de poulet', 'Cuisse de poulet, assaisonnements', 'files/image_cuisse.jpg', 6.99, 101, 5.82, 0.2, 120),
(132, 'filet de poulet 5kg', 'Description du filet de poulet', 'Filet de poulet, assaisonnements', 'files/image_filet.jpg', 9.99, 101, 8.32, 0.2, 80),
(133, 'filet de poulet 15kg', 'Description du filet de poulet', 'Filet de poulet, assaisonnements', 'files/image_filet.jpg', 9.99, 101, 8.32, 0.2, 80),
(134, 'pinot de poulet 15kg', 'Description du filet de poulet', 'Filet de poulet, assaisonnements', 'files/image_filet.jpg', 9.99, 103, 8.32, 0.2, 80),
(135, 'pinot', 'Description du poulet pinot', 'Poulet pinot, assaisonnements', 'files/image_pinot.jpg', 11.99, 101, 9.99, 0.2, 90),
(136, 'dinde', 'Description de la dinde', 'Dinde, assaisonnements', 'files/image_dinde.jpg', 12.99, 104, 10.82, 0.2, 110),
(137, 'viande de boeuf', 'Description de la viande de boeuf', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf.jpg', 14.99, 92, 12.49, 0.2, 100),
(138, 'agneau', 'Description de l\'agneau', 'Viande d\'agneau, assaisonnements', 'files/image_agneau.jpg', 16.99, 92, 14.16, 0.2, 120),
(139, 'viande de boeuf', 'Description de la viande de boeuf', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf.jpg', 14.99, 93, 12.49, 0.2, 100),
(140, 'agneau', 'Description de l\'agneau', 'Viande d\'agneau, assaisonnements', 'files/image_agneau.jpg', 16.99, 92, 14.16, 0.2, 120),
(141, 'viande de boeuf', 'Description de la viande de boeuf', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf.jpg', 14.99, 93, 12.49, 0.2, 100),
(142, 'agneau', 'Description de l\'agneau', 'Viande d\'agneau, assaisonnements', 'files/image_agneau.jpg', 16.99, 93, 14.16, 0.2, 120),
(143, 'produit bio frais Premium', 'Description du produit bio frais Premium', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf_premium.jpg', 14.99, 19, 12.49, 0.2, 100),
(144, 'produit bio frais Grillé', 'Description du produit bio frais Grillé', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf_grillee.jpg', 16.99, 21, 14.16, 0.2, 120),
(145, 'produit bio frais Grillé', 'Description du produit bio frais Grillé', 'Viande d\'agneau, assaisonnements', 'files/image_agneau_grille.jpg', 18.99, 21, 15.82, 0.2, 80),
(146, 'produit bio frais Saumurée', 'Description du produit bio frais Saumurée', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf_saumuree.jpg', 19.99, 19, 16.66, 0.2, 90),
(147, 'produit bio frais Marinée', 'Description du produit bio frais Marinée', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf_marinee.jpg', 21.99, 20, 18.32, 0.2, 110),
(148, 'produit bio frais Épicé', 'Description du produit bio frais Épicé', 'Viande d\'agneau, assaisonnements', 'files/image_agneau_epice.jpg', 22.99, 19, 19.16, 0.2, 95),
(149, 'produit bio frais Maturée', 'Description du produit bio frais Maturée', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf_maturee.jpg', 24.99, 19, 20.82, 0.2, 105),
(150, 'produit bio frais Cuit au Four', 'Description du produit bio frais Cuit au Four', 'Viande d\'agneau, assaisonnements', 'files/image_agneau_cuit_four.jpg', 26.99, 21, 22.49, 0.2, 85),
(151, 'produit bio frais Fumée', 'Description du produit bio frais Fumée', 'Viande de boeuf, assaisonnements', 'files/image_viande_boeuf_fumee.jpg', 28.99, 19, 24.16, 0.2, 115),
(152, 'produit bio frais Braisé', 'Description du produit bio frais Braisé', 'Viande d\'agneau, assaisonnements', 'files/image_agneau_braise.jpg', 29.99, 20, 24.99, 0.2, 125);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_promotion` int(11) NOT NULL,
  `pourcentage_reduction` float NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `pourcentage_reduction`, `date_debut`, `date_fin`, `id_produit`) VALUES
(8, -30, '2024-04-01', '2024-04-15', 46),
(9, -20, '2024-02-25', '2024-04-15', 50),
(10, -30, '2024-02-25', '2024-04-15', 60),
(11, -15, '2024-02-25', '2024-05-28', 65),
(12, -10, '2024-02-25', '2024-04-28', 57),
(14, -20, '2024-02-25', '2025-02-28', 53);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` varchar(64) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `telephone`, `adresse`, `password`, `ip`, `token`, `date_inscription`) VALUES
(12, 'lebonprix37', 'info@test.fr', '0764346759', '1 Rue du 11 Novembre, 37360 Sonzay, France', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '::1', '3aa08a7b7afd1d89109694a72ce1b7ff815feb8cdd0617838b3a051449fe147d', '2024-03-22 14:17:51'),
(13, 'MOUSSA HAROUNE', 'haroune.hmah@gmail.com', '0764346759', '45 Avenue du Général De Gaulle, APT 36', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '::1', '680770e0b57a4c98cf4bf406185dec078fad3123588fd1501d519fd14897bec3', '2024-03-22 15:25:04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Parent_ID` (`Parent_id`);

--
-- Index pour la table `nouveaute`
--
ALTER TABLE `nouveaute`
  ADD PRIMARY KEY (`id_nouveaute`),
  ADD KEY `fk_news_produit` (`id_produit`);

--
-- Index pour la table `password_recover`
--
ALTER TABLE `password_recover`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promotion`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT pour la table `nouveaute`
--
ALTER TABLE `nouveaute`
  MODIFY `id_nouveaute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `password_recover`
--
ALTER TABLE `password_recover`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`Parent_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `nouveaute`
--
ALTER TABLE `nouveaute`
  ADD CONSTRAINT `fk_news_produit` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
