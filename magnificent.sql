-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 mai 2022 à 16:18
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `magnificent`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `prix` float NOT NULL,
  `couleur` text NOT NULL,
  `tailles` text NOT NULL,
  `ancien_prix` float DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `categorie`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `prix`, `couleur`, `tailles`, `ancien_prix`, `reduction`, `titre`, `description`) VALUES
(1, 'robe', 'robe/p1.jpg', 'robe/p11.jpg', 'robe/p12.jpg', 'robe/p13.jpg', 'robe/p14.jpg', 'robe/p15.jpg', 39.99, 'Noir', 'XS | S | M | L', NULL, NULL, 'Robe longue imprimée à pois', '<p>Robe longue imprimé à pois.</p>\r\n<p>Détails : imprimé pois, manches courtes formes ballons et élastiquées, dispose de boutons dans la matière principale sur le devant , encolure V, taille smockée, fente en bas de jambe</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li> Contient 45% de viscose ECOVERO™ pour une mode plus responsable.</li>\r\n</ul>\r\n\r\n<p>La viscose LENZING™ ECOVERO™ est issue du bois de forêts certifiées et gérées de façon plus durable. La viscose LENZING™ ECOVERO™ est certifiée par l\'EU Ecolabel, ce qui assure, de la matière première à sa fabrication, le respect des standards environnementaux les plus rigoureux de l\'Union Européenne.</p>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Coupe droite</li>\r\n<li>Taille marquée</li>\r\n</ul>\r\n<p>La mannequin porte une taille 36 et mesure 1m65.</p>'),
(2, 'robe', 'robe/p2.jpg', 'robe/p21.jpg', 'robe/p22.jpg', 'robe/p23.jpg', 'robe/p24.jpg', 'robe/p25.jpg', 14.99, 'Vert D\'Eau', 'XS | S | M | L', 22.99, 35, 'Robe T-shirt longue', '<p>On adore les robes T-shirt pour cet été !</p>\r\n<p>Détails : unie, col rond, manches courtes , fentes bas de jambes</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Matière toute douce effet « peau de pêche »</li>\r\n</ul>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Coupe droite</li>\r\n<li>Robe longue</li>\r\n</ul>\r\n<p>La mannequin porte une taille S et mesure 1m72.</p>'),
(3, 'robe', 'robe/p3.jpg', 'robe/p31.jpg', 'robe/p32.jpg', 'robe/p33.jpg', 'robe/p34.jpg', 'robe/p35.jpg', 39.9, 'Noir', 'XS | S | M | L', NULL, NULL, 'Robe longue cache cœur ', '<p>Optez pour cette jolie robe longue à la forme cache cœur et portefeuille</p>\r\n<p>Détails : micro imprimé fleuri, forme cache cœur et portefeuille, manches courtes légèrement ballons et resserrées dans le bas, se noue sur le côté, dispose d\'une petite pression au niveau du décolleté, ouverture sur la jambe</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Contient 45% de viscose ECOVERO™ pour une mode plus responsable.</li>\r\n</ul>\r\n\r\n<p>La viscose LENZING™ ECOVERO™ est issue du bois de forêts certifiées et gérées de façon plus durable. La viscose LENZING™ ECOVERO™ est certifiée par l\'EU Ecolabel, ce qui assure, de la matière première à sa fabrication, le respect des standards environnementaux les plus rigoureux de l\'Union Européenne</p>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Taille marquée et coupe évasée dans le bas</li>\r\n<p>La mannequin porte une taille S.</p>'),
(4, 'robe', 'robe/p311.jpg', 'robe/p322.jpg', 'robe/p333.jpg', 'robe/p344.jpg', 'robe/p355.jpg', NULL, 39.9, 'Rouge', 'XS | S | M | L', NULL, NULL, 'Robe longue cache cœur', '<p>Optez pour cette jolie robe longue à la forme cache cœur et portefeuille</p>\r\n<p>Détails : micro imprimé fleuri, forme cache cœur et portefeuille, manches courtes légèrement ballons et resserrées dans le bas, se noue sur le côté, dispose d\'une petite pression au niveau du décolleté, ouverture sur la jambe</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Contient 45% de viscose ECOVERO™ pour une mode plus responsable.</li>\r\n</ul>\r\n\r\n<p>La viscose LENZING™ ECOVERO™ est issue du bois de forêts certifiées et gérées de façon plus durable. La viscose LENZING™ ECOVERO™ est certifiée par l\'EU Ecolabel, ce qui assure, de la matière première à sa fabrication, le respect des standards environnementaux les plus rigoureux de l\'Union Européenne</p>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Taille marquée et coupe évasée dans le bas</li>\r\n<p>La mannequin porte une taille S.</p>'),
(5, 'robe', 'robe/p4.jpg', 'robe/p41.jpg', 'robe/p42.jpg', 'robe/p43.jpg', 'robe/p44.jpg', NULL, 14.99, 'Noir', 'XS | S | M | L', 35.99, 58, 'Robe Longue Dos Profond', '<p>Ne loupez pas l\'une des tendances du moment avec cette jolie robe longue au dos profond : la gaze de coton, un tissus confortable grâce à sa douceur et sa légèreté ! Cette robe est idéale pour l\'été</p>\r\n<p>Détails : matière gaze de coton, col rond, dos profond, fines bretelles, fente bas de jambe</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Tissus gaze de coton</li>\r\n</ul>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Coupe longue droite<li>\r\n</ul>\r\n<p>La mannequin porte une taille S.</p>'),
(6, 'robe', 'robe/p5.jpg', 'robe/p51.jpg', 'robe/p52.jpg', 'robe/p53.jpg', 'robe/p54.jpg', 'robe/p55.jpg', 45.99, 'Noir/Vert Emeraude', 'XS | S | M | L', NULL, NULL, 'Robe Longue Dos Profond', '<p>Ne loupez pas l\'une des tendances du moment avec cette jolie robe longue au dos profond : la gaze de coton, un tissus confortable grâce à sa douceur et sa légèreté ! Cette robe est idéale pour l\'été</p>\r\n<p>Détails : matière gaze de coton, col rond, dos profond, fines bretelles, fente bas de jambe</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Tissus gaze de coton</li>\r\n</ul>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Coupe longue droite<li>\r\n</ul>\r\n<p>La mannequin porte une taille S.</p>'),
(8, 'blouse', 'blouse/p1.jpg', 'blouse/p11.jpg', 'blouse/p12.jpg', 'blouse/p13.jpg', NULL, NULL, 29.99, 'Multicolore', 'XS | S | M | L', NULL, NULL, 'Blouse cache coeur', ''),
(9, 'blouse', 'blouse/p2.jpg', 'blouse/p21.jpg', 'blouse/p22.jpg', 'blouse/p23.jpg', 'blouse/p24.jpg', NULL, 29.99, 'Rouge', 'XS | S | M | L', NULL, NULL, 'Chemise popeline unie', '<p>Chemise en popeline unie</p>\r\n<ul>\r\n<li>Boutonnée devant</li>\r\n<li>Manches longues</li>\r\n<li>Col à revers</li>\r\n<li>1 poche plaquée poitrine</li>\r\n\r\n<ul>TAILLE ET COUPE\r\n<li>Coupe classique</li>\r\n</ul>\r\n\r\n<p>ECO-RESPONSABLE</p>\r\n<p>Cette chemise a été conçue de manière responsable, elle est composée à 100% de coton issue de l¿agriculture biologique pour une mode plus responsable.</p>\r\n<p>Le coton de cette chemise est récolté, filé et est certifié Coton Issu de l\'Agriculture Biologique. Il a été pensé pour préserver l\'environnement dès sa conception, notamment sur sa durée de vie, mais aussi sur la manière dont il a été produit. Il consomme moins d\'eau comparé à l\'agriculture traditionnelle. Et enfin, il n\'utilise aucun produit chimique nocif.</p>'),
(10, 'blouse', 'blouse/p3.jpg', 'blouse/p31.jpg', 'blouse/p32.jpg', 'blouse/p33.jpg', 'blouse/p34.jpg', NULL, 40, 'Bleu clair', 'XS | S | M | L', NULL, NULL, 'Chemise à rayures', '<p>Chemise en popeline unie</p>\r\n<ul>\r\n<li>Boutonnée devant</li>\r\n<li>Manches longues</li>\r\n<li>Col à revers</li>\r\n<li>1 poche plaquée poitrine</li>\r\n\r\n<ul>TAILLE ET COUPE:\r\n<li>Coupe classique</li>\r\n</ul>\r\n\r\n<p>ECO-RESPONSABLE</p>\r\n<p>Cette chemise a été conçue de manière responsable, elle est composée à 100% de coton issue de l¿agriculture biologique pour une mode plus responsable.</p>\r\n<p>Le coton de cette chemise est récolté, filé et est certifié Coton Issu de l\'Agriculture Biologique. Il a été pensé pour préserver l\'environnement dès sa conception, notamment sur sa durée de vie, mais aussi sur la manière dont il a été produit. Il consomme moins d\'eau comparé à l\'agriculture traditionnelle. Et enfin, il n\'utilise aucun produit chimique nocif.</p>'),
(11, 'blouse', 'blouse/p4.jpg', 'blouse/p41.jpg', 'blouse/p42.jpg', 'blouse/p43.jpg', 'blouse/p44.jpg', NULL, 35.99, 'Blanc', 'XS | S | M | L', NULL, NULL, 'Chemise broderie anglaise', '<p>Blouse broderie anglaise</p>\r\n<ul>\r\n<li>Col rond</li>\r\n<li>Détails volants</li>\r\n<li>Manches longues</li>\r\n</ul>\r\n\r\n<ul>TAILLE ET COUPE:\r\n<li>Coupe droite</li>\r\n<ul>'),
(12, 'blouse', 'blouse/p5.jpg', 'blouse/p51.jpg', 'blouse/p52.jpg', 'blouse/p53.jpg', 'blouse/p54.jpg', NULL, 14.99, 'Vert Olive', 'XS | S | M | L', 29.99, 50, 'Blouse Cropped Polyester Recyclé', '<p>Optez pour cette jolie blouse cropped à smocks.</p>\r\n<p>Détails : jolie encolure cœur, smocks dos, manches longues resserrées aux poignets.</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Existe en 2 combos : 1 uni vert et 1 imprimé fleuri</li>\r\n<li>Contient des fibres de polyester recyclé pour une mode plus responsable</li>\r\n</ul>\r\n\r\n<p>Le polyester recyclé est conçu à partir de produits textiles déjà mis sur le marché ou de déchets industriels qui, revalorisés, permettent de créer une nouvelle fibre. Ainsi, les déchets ont une seconde vie et participent à la réduction de notre impact environnemental.</p>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Coupe Cropped</li>\r\n</ul>\r\n<p>La mannequin porte une taille S.</p>'),
(13, 'top_trending', 'robe/p3.jpg', 'robe/p31.jpg', 'robe/p32.jpg', 'robe/p33.jpg', 'robe/p34.jpg', 'robe/p35.jpg', 39.99, 'Noir', 'XS | S | M | L', NULL, NULL, 'Robe longue cache cœur imprimée', '<p>Optez pour cette jolie robe longue à la forme cache cœur et portefeuille</p>\r\n<p>Détails : micro imprimé fleuri, forme cache cœur et portefeuille, manches courtes légèrement ballons et resserrées dans le bas, se noue sur le côté, dispose d\'une petite pression au niveau du décolleté, ouverture sur la jambe</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Contient 45% de viscose ECOVERO™ pour une mode plus responsable.</li>\r\n</ul>\r\n\r\n<p>La viscose LENZING™ ECOVERO™ est issue du bois de forêts certifiées et gérées de façon plus durable. La viscose LENZING™ ECOVERO™ est certifiée par l\'EU Ecolabel, ce qui assure, de la matière première à sa fabrication, le respect des standards environnementaux les plus rigoureux de l\'Union Européenne</p>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Taille marquée et coupe évasée dans le bas</li>\r\n<p>La mannequin porte une taille S.</p>'),
(14, 'top_trending', 'blouse/p2.jpg', 'blouse/p21.jpg', 'blouse/p22.jpg', 'blouse/p23.jpg', 'blouse/p24.jpg', 'blouse/p25.jpg', 29.99, 'Rouge', 'XS | S | M | L', NULL, NULL, 'Chemise popeline unie', '<p>Chemise en popeline unie</p>\r\n<ul>\r\n<li>Boutonnée devant</li>\r\n<li>Manches longues</li>\r\n<li>Col à revers</li>\r\n<li>1 poche plaquée poitrine</li>\r\n\r\n<ul>TAILLE ET COUPE\r\n<li>Coupe classique</li>\r\n</ul>\r\n\r\n<p>ECO-RESPONSABLE</p>\r\n<p>Cette chemise a été conçue de manière responsable, elle est composée à 100% de coton issue de l¿agriculture biologique pour une mode plus responsable.</p>\r\n<p>Le coton de cette chemise est récolté, filé et est certifié Coton Issu de l\'Agriculture Biologique. Il a été pensé pour préserver l\'environnement dès sa conception, notamment sur sa durée de vie, mais aussi sur la manière dont il a été produit. Il consomme moins d\'eau comparé à l\'agriculture traditionnelle. Et enfin, il n\'utilise aucun produit chimique nocif.</p>'),
(15, 'top_trending', 'pantalon/p2.jpg', 'pantalon/p21.jpg', 'pantalon/p22.jpg', 'pantalon/p23.jpg', NULL, NULL, 39.99, 'Bleu foncé', 'XS | S | M | L | XL', NULL, NULL, 'Pantalon fluide imprimée à fentes', '<p>Pantalon fluide imprimée en viscose.</p>\r\n<ul>\r\n<li>Imprimé fleuri bicolore</li>\r\n<li>2 poches côtés</li>\r\n<li>Taille élastiquée</li>\r\n<li>Fentes en bas de jambes</li>\r\n</ul>\r\n\r\n<p>TAILLE ET COUPE</p>\r\n<ul>\r\n<li>Taille haute, coupe large</li>\r\n<li>La mannequin porte une taille S et mesure 1m73.</li>\r\n</ul>\r\n<p>Composition majoritaire : 100% Viscose</p>'),
(16, 'top_trending', 'sweater/p1.jpg', 'sweater/p11.jpg', 'sweater/p12.jpg', 'sweater/p13.jpg', 'sweater/p14.jpg', NULL, 35.99, 'Gris clair', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Hoodie licence YALE', '<p>Composition majoritaire : 60% Coton, 40% Polyester</p>'),
(17, 'foulard', 'foulard/p1.jpg', 'foulard/p11.jpg', 'foulard/p12.jpg', 'foulard/p13.jpg', NULL, NULL, 12.52, 'Multicolore /Bleu clair/ Noir', 'T.U.', 17.88, 30, 'Foulard imprimé', '<p>Foulard imprimé, 70*70cm. Existe en 4 imprimés différents.</p>'),
(18, 'foulard', 'foulard/p2.jpg', 'foulard/p21.jpg', 'foulard/p22.jpg', 'foulard/p211.jpg', NULL, NULL, 17.99, 'Bleu Moyen/                 Noir', 'T.U.', NULL, NULL, 'Echarpe basique doudou', '<p>Grand écharpe. Matière ultra doudou. Existe en plusieurs coloris.<p>'),
(19, 'pantalon', 'pantalon/p1.jpg', 'pantalon/p11.jpg', 'pantalon/p12.jpg', 'pantalon/p13.jpg', 'pantalon/p14.jpg', NULL, 39.99, 'Marron', 'T32 / T34 / T36 / T38 / T40 / T42', NULL, NULL, 'Pantalon à pinces', '<p>Pantalon à pinces à la coupe dad.</p>\r\n<ul>\r\n<li>Coloris marron</li>\r\n<li>2 poches italiennes cotés intérieur fantaisie</li>\r\n<li>2 fausses poches passepoilées dos</li>\r\n<li>Fermeture par zip et bouton</li>\r\n</ul>\r\n\r\n<p>TAILLE ET COUPE</p>\r\n<ul>\r\n<li>Taille haute</li>\r\n<li>Coupe dad : taille haute, jambe droite, ajusté au bassin</li>\r\n<li>La mannequin porte une taille 36 et mesure 1m73.</li>\r\n<p>Composition majoritaire : 87% Viscose, 13% Polyester</p>'),
(20, 'pantalon', 'pantalon/p2.jpg', 'pantalon/p21.jpg', 'pantalon/p22.jpg', 'pantalon/p23.jpg', NULL, NULL, 39.99, 'Bleu foncé', 'XS | S | M | L | XL', NULL, NULL, 'Pantalon fluide imprimée à fentes', '<p>Pantalon fluide imprimée en viscose.</p>\r\n<ul>\r\n<li>Imprimé fleuri bicolore</li>\r\n<li>2 poches côtés</li>\r\n<li>Taille élastiquée</li>\r\n<li>Fentes en bas de jambes</li>\r\n</ul>\r\n\r\n<p>TAILLE ET COUPE</p>\r\n<ul>\r\n<li>Taille haute, coupe large</li>\r\n<li>La mannequin porte une taille S et mesure 1m73.</li>\r\n</ul>\r\n<p>Composition majoritaire : 100% Viscose</p>'),
(21, 'pantalon', 'pantalon/p3.jpg', 'pantalon/p31.jpg', 'pantalon/p32.jpg', 'pantalon/p33.jpg', 'pantalon/p34.jpg', NULL, 45.56, 'Rose pâle', 'T32 | T34 | T36 | T38 | T40 | T42', 63.28, 28, 'Jean wide leg cropped', '<p>Jean wide leg cropped</p>\r\n<ul>\r\n<li>Découpe V devant et dos</li>\r\n<li>4 poches</li>\r\n<li>Passants pour ceinture</li>\r\n<li>Fermeture par zip et bouton</li>\r\n<li>Coordonné à la chemise 2000649</li>\r\n<ul>\r\n\r\n<p>TAILLE ET COUPE</p>\r\n<ul>\r\n<li>Taille haute</li>\r\n<li>Coupe wide leg cropped : jambes larges et évasées, bas raccourcis</li>\r\n<li>La mannequin porte une taille 36 et mesure 1m73.</li>\r\n</ul>\r\n\r\n<p>PETIT TIPS ECOLOGIQUE</p>\r\n<p>Dans une démarche écologique, il est conseillé de laver tes vêtements en denim à basse température et à l\'envers dans le but de préserver les couleurs, le tissu et d\'utiliser moins d\'énergie.</p>\r\n\r\n<p>Composition majoritaire : 100% Coton</p>'),
(22, 'pantalon', 'pantalon/p4.jpg', 'pantalon/p41.jpg', 'pantalon/p42.jpg', 'pantalon/p43.jpg', NULL, NULL, 29.99, 'Noir', 'XS | S | M | L | XL', NULL, NULL, 'Yoga pant', '<p>Yoga pant en maille</p>\r\n<ul>\r\n<li>Coloris noir</li>\r\n<li>2 poches cotés</li>\r\n<li>Taille élastiquée</li>\r\n<li>Cordon de serrage</li>\r\n<li>Fentes cotés en bas de jambes</li>\r\n\r\n<p>TAILLE ET COUPE</p>\r\n<ul>\r\n<li>Coupe droite</li>\r\n<li>La mannequin porte une taille S et mesure 1m74.</li>\r\n<ul>\r\n\r\n<p>Composition majoritaire : 67% Polyester, 29% Viscose, 4% Elasthanne</p>'),
(23, 'pantalon', 'pantalon/p5.jpg', 'pantalon/p51.jpg', 'pantalon/p52.jpg', 'pantalon/p53.jpg', NULL, NULL, 52.34, 'Marron', 'XS | S | M | L | XL', NULL, NULL, 'Pantalon large plissé', '<p>Composition majoritaire : 67% Lyocell, 32% Polyester, 1% Elasthanne</p>'),
(24, 'pull', 'pull/p1.jpg', 'pull/p11.jpg', 'pull/p12.jpg', 'pull/p13.jpg', NULL, NULL, 25.15, 'Blanc', 'XS | S | M | L ', NULL, NULL, 'Pull sans manche', '<p>Composition majoritaire : 100% Coton</p>'),
(25, 'pull', 'pull/p2.jpg', 'pull/p21.jpg', 'pull/p22.jpg', 'pull/p23.jpg', 'pull/p24.jpg', NULL, 45.99, 'Bleu clair', 'XS | S | M | L ', NULL, NULL, 'Gilet long boutonné', '<p>Craque pour notre gilet long boutonné de cet hiver, tout doux et ultra confortable pour affrontrer les longues et froides journées d\'hiver.</p>\r\n<p>Détails : Matière côtelée, col V, manches ballons, boutonné devant.</p>\r\n\r\n<p>Les plus :</p>\r\n<ul>\r\n<li>Composé à 25% de laine, il ne gratte pas !</li>\r\n</ul>\r\n\r\n<p>Taille et Coupe :<p>\r\n<ul>\r\n<li>Coupe classique, prendre sa taille habituelle.</p>\r\n</ul>\r\n\r\n<p>Conseils d¿entretien :</p>\r\n<ul>\r\n<li>Veillez à bien respecter les conseils d¿entretien sur l¿étiquette intérieur pour garder votre pull aussi beau longtemps</li>\r\n</ul>\r\n\r\n<p>Composition majoritaire : 49% Acrylique, 25% Laine, 24% Polyester, 2% Elasthanne</p>'),
(26, 'pull', 'pull/p3.jpg', 'pull/p31.jpg', 'pull/p32.jpg', 'pull/p33.jpg', 'pull/p34.jpg', 'pull/p35.jpg', 55.75, 'Rose pâle / Ecru', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Gilet long boutonné', '<p>Craque pour notre pull à col V pour te tenir bien chaud cet hiver.</p>\r\n<p>Détails : Col V, manches longues.</p>\r\n<p>Il existe en deux coloris</p>\r\n\r\n<p>Taille et Coupe :</p>\r\n<ul>\r\n<li>Coupe classique, prendre sa taille habituelle</li>\r\n</ul>\r\n\r\n<p>Conseils d¿entretien :</p>\r\n<ul>\r\n<li>Veillez à bien respecter les conseils d¿entretien sur l¿étiquette intérieur pour garder votre sweat aussi beau longtemps.</li>\r\n</ul>\r\n\r\n<p>Composition majoritaire : 54% Acrylique, 41% Polyamide, 5% Alpaga</p>'),
(27, 'pull', 'pull/p4.jpg', 'pull/p41.jpg', 'pull/p42.jpg', 'pull/p43.jpg', NULL, NULL, 29, 'Beige', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Pull maille chenille', '<p>Composition majoritaire : 90% Polyester, 10% Polyamide</p>'),
(29, 'pull', 'pull/p5.jpg', 'pull/p51.jpg', 'pull/p52.jpg', 'pull/p53.jpg', NULL, NULL, 18.49, 'Ecru / Jaune', 'XXS | XS | S | M | L | XL', 61.64, 70, 'Gilet torsadé boutonné', '<p>Composition majoritaire : 49% Acrylique, 25% Laine, 24% Polyester, 2% Elasthanne</p>'),
(30, 'pyjama', 'pyjama/p1.jpg', 'pyjama/p11.jpg', 'pyjama/p12.jpg', 'pyjama/p13.jpg', 'pyjama/p14.jpg', 'pyjama/p15.jpg', 22.53, 'Bleu Doux / Gris Moyen', 'XXS | XS | S | M | L | XL | XXL | XXXL', 26.5, 15, 'Pantalon de pyjama uni', '<p>Pantalon pyjama gratté</p>\r\n<p>Composition majoritaire : 74% Polyester, 19% Viscose, 7% Elasthanne</p>'),
(31, 'pyjama', 'pyjama/p2.jpg', 'pyjama/p21.jpg', 'pyjama/p22.jpg', 'pyjama/p23.jpg', 'pyjama/p24.jpg', 'pyjama/p25.jpg', 19.95, 'Rouge', 'XXS | XS | S | M | L | XL | XXL | XXXL', NULL, NULL, 'Pantalon de pyjama vichy', '<p>Pantalon de pyjama vichy</p>\r\n<p>Composition majoritaire : 100% Coton</p>'),
(32, 'pyjama', 'pyjama/p3.jpg', 'pyjama/p31.jpg', 'pyjama/p32.jpg', 'pyjama/p33.jpg', 'pyjama/p34.jpg', 'pyjama/p35.jpg', 17.99, 'Vert Vif', 'XXS | XS | S | M | L | XL | XXL | XXXL | 4XL | 5XL', NULL, NULL, 'Short de pyjama Serpentard', '<p>Bizzbee te fais basculer le temps d\'une collab dans le monde d\'Harry Potter et t\'emmène dans l\'une des maisons les plus rusées.</p>\r\n<p>Soutiens ta maison favorite et découvre notre collection aux couleurs de Serpentard.</p>\r\n\r\n<p>Adopte ton look homewear avec ce short pyjama.</p>\r\n\r\n</p>Composition majoritaire : 100% Coton</p>'),
(33, 'pyjama', 'pyjama/p4.jpg', 'pyjama/p41.jpg', 'pyjama/p42.jpg', 'pyjama/p43.jpg', 'pyjama/p44.jpg', 'pyjama/p45.jpg', 25.75, 'Rose pâle', 'XXS | XS | S | M | L', NULL, NULL, 'Haut de pyjama à rayures', '<p>Composition majoritaire : 100% Coton</p>'),
(34, 'pyjama', 'pyjama/p5.jpg', 'pyjama/p51.jpg', 'pyjama/p52.jpg', 'pyjama/p53.jpg', 'pyjama/p54.jpg', 'pyjama/p55.jpg', 9.99, 'Rose pâle / Gris moyen', 'XS | S | M | L', NULL, NULL, 'Haut de pyjama uni en maille', '<p>Composition majoritaire : 80% Coton, 20% Polyester</p>'),
(35, 'sweater', 'sweater/p1.jpg', 'sweater/p11.jpg', 'sweater/p12.jpg', 'sweater/p13.jpg', 'sweater/p14.jpg', NULL, 35.99, 'Gris clair', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Hoodie licence YALE', '<p>Composition majoritaire : 60% Coton, 40% Polyester</p>'),
(36, 'sweater', 'sweater/p2.jpg', 'sweater/p21.jpg', 'sweater/p22.jpg', 'sweater/p23.jpg', 'sweater/p24.jpg', NULL, 29.99, 'Jaune / Ecru / Rose pâle / Marron', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Hoodie à pressions', '<p>Composition majoritaire : 68% Coton, 32% Polyester</p>'),
(37, 'sweater', 'sweater/p3.jpg', 'sweater/p31.jpg', 'sweater/p32.jpg', 'sweater/p33.jpg', 'sweater/p34.jpg', NULL, 35.99, 'Blanc', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Sweat marinière boutonné épaule', '<p>Sweat col rond marinière, la marinière est une pièce intemporelle, ici retravailler sur une base sweat permet d\'avoir un style chic/décontracté.</p>\r\n\r\n<p>Les plus :</p>\r\n<ul>\r\n<li>Boutonné épaule</li>\r\n<li>Manches longues</li>\r\n<li>Étiquette tissée avec logo</li>\r\n</ul>\r\n\r\n<p>Taille et coupe :</p>\r\n<ul>\r\n<li>Coupe classique</li>\r\n</ul>\r\n\r\n<p>Composition majoritaire : 68% Coton, 32% Polyester</p>'),
(38, 'sweater', 'sweater/p4.jpg', 'sweater/p41.jpg', 'sweater/p42.jpg', 'sweater/p43.jpg', 'sweater/p44.jpg', 'sweater/p45.jpg', 29.99, 'Vert / Pêche', 'XXS | XS | S | M | L | XL', 54, 45, 'Hoodie zippé', '<p>Composition majoritaire : 68% Coton, 32% Polyester</p>'),
(39, 'sweater', 'sweater/p5.jpg', 'sweater/p51.jpg', 'sweater/p52.jpg', 'sweater/p53.jpg', NULL, NULL, 35.99, 'Rouge', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Sweat col rond licence HARVARD', '<p>Composition majoritaire : 60% Coton, 40% Polyester</p>'),
(40, 'T-Shirt', 'T-Shirt/p5.jpg', 'T-Shirt/p51.jpg', 'T-Shirt/p52.jpg', 'T-Shirt/p53.jpg', 'T-Shirt/p54.jpg', 'T-Shirt/p55.jpg', 9.99, 'Noir', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Débardeur assymétrique', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(41, 'T-Shirt', 'T-Shirt/p4.jpg', 'T-Shirt/p41.jpg', 'T-Shirt/p42.jpg', 'T-Shirt/p43.jpg', 'T-Shirt/p44.jpg', 'T-Shirt/p45.jpg', 12.99, 'Blanc / Vert / Marron', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Débardeur côtes plates à bretelles', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(42, 'T-Shirt', 'T-Shirt/p411.jpg', 'T-Shirt/p422.jpg', 'T-Shirt/p433.jpg', 'T-Shirt/p444.jpg', 'T-Shirt/p455.jpg', 'T-Shirt/p466.jpg', 12.99, 'Blanc / Vert / Marron', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Débardeur côtes plates à bretelles', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(43, 'T-Shirt', 'T-Shirt/p3.jpg', 'T-Shirt/p31.jpg', 'T-Shirt/p32.jpg', 'T-Shirt/p33.jpg', 'T-Shirt/p34.jpg', 'T-Shirt/p35.jpg', 19.99, 'Ecru', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Débardeur tricot', '<p>Composition majoritaire : 100% Coton</p>'),
(44, 'T-Shirt', 'T-Shirt/p2.jpg', 'T-Shirt/p21.jpg', 'T-Shirt/p22.jpg', 'T-Shirt/p23.jpg', 'T-Shirt/p24.jpg', 'T-Shirt/p25.jpg', 15.99, 'Violet / Vert clair', 'XXS | XS | S | M | L | XL', 39, 60, 'T-shirt cache coeur', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(45, 'T-Shirt', 'T-Shirt/p1.jpg', 'T-Shirt/p11.jpg', 'T-Shirt/p22.jpg', 'T-Shirt/p13.jpg', 'T-Shirt/p14.jpg', 'T-Shirt/p15.jpg', 15.99, 'Noir', 'XS | S | M | L | XL', NULL, NULL, 'Débardeur assymétrique', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(49, 'nouveautes', 'foulard/p2.jpg', 'foulard/p21.jpg', 'foulard/p22.jpg', 'foulard/p211.jpg', NULL, NULL, 17.99, 'Bleu Moyen/                 Noir', 'T.U.', NULL, NULL, 'Echarpe basique doudou', '<p>Grand écharpe. Matière ultra doudou. Existe en plusieurs coloris.<p>'),
(50, 'nouveautes', 'pull/p4.jpg', 'pull/p41.jpg', 'pull/p42.jpg', 'pull/p43.jpg', NULL, NULL, 29, 'Beige', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Pull maille chenille', '<p>Composition majoritaire : 90% Polyester, 10% Polyamide</p>'),
(51, 'nouveautes', 'T-Shirt/p5.jpg', 'T-Shirt/p51.jpg', 'T-Shirt/p52.jpg', 'T-Shirt/p53.jpg', 'T-Shirt/p54.jpg', 'T-Shirt/p55.jpg', 9.99, 'Noir', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Débardeur assymétrique', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(52, 'nouveautes', 'pull/p1.jpg', 'pull/p11.jpg', 'pull/p12.jpg', 'pull/p13.jpg', NULL, NULL, 25.15, 'Blanc', 'XS | S | M | L ', NULL, NULL, 'Pull sans manche', '<p>Composition majoritaire : 100% Coton</p>'),
(53, 'nouveautes', 'robe/p2.jpg', 'robe/p21.jpg', 'robe/p22.jpg', 'robe/p23.jpg', 'robe/p24.jpg', 'robe/p25.jpg', 14.99, 'Vert D\'Eau', 'XS | S | M | L', 22.99, 35, 'Robe T-shirt longue', '<p>On adore les robes T-shirt pour cet été !</p>\r\n<p>Détails : unie, col rond, manches courtes , fentes bas de jambes</p>\r\n\r\n<ul>Les plus :\r\n\r\n<li>Matière toute douce effet « peau de pêche »</li>\r\n</ul>\r\n\r\n<ul>Taille et Coupe :\r\n\r\n<li>Coupe droite</li>\r\n<li>Robe longue</li>\r\n</ul>\r\n<p>La mannequin porte une taille S et mesure 1m72.</p>'),
(54, 'nouveautes', 'pyjama/p2.jpg', 'pyjama/p21.jpg', 'pyjama/p22.jpg', 'pyjama/p23.jpg', 'pyjama/p24.jpg', 'pyjama/p25.jpg', 19.95, 'Rouge', 'XXS | XS | S | M | L | XL | XXL | XXXL', NULL, NULL, 'Pantalon de pyjama vichy', '<p>Pantalon de pyjama vichy</p>\r\n<p>Composition majoritaire : 100% Coton</p>'),
(55, 'top_trending', 'blouse/p4.jpg', 'blouse/p41.jpg', 'blouse/p42.jpg', 'blouse/p43.jpg', 'blouse/p44.jpg', NULL, 35.99, 'Blanc', 'XS | S | M | L', NULL, NULL, 'Chemise broderie anglaise', '<p>Blouse broderie anglaise</p>\r\n<ul>\r\n<li>Col rond</li>\r\n<li>Détails volants</li>\r\n<li>Manches longues</li>\r\n</ul>\r\n\r\n<ul>TAILLE ET COUPE:\r\n<li>Coupe droite</li>\r\n<ul>'),
(56, 'top_trending', 'pull/p3.jpg', 'pull/p31.jpg', 'pull/p32.jpg', 'pull/p33.jpg', 'pull/p34.jpg', 'pull/p35.jpg', 55.75, 'Rose pâle / Ecru', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Gilet long boutonné', '<p>Craque pour notre pull à col V pour te tenir bien chaud cet hiver.</p>\r\n<p>Détails : Col V, manches longues.</p>\r\n<p>Il existe en deux coloris</p>\r\n\r\n<p>Taille et Coupe :</p>\r\n<ul>\r\n<li>Coupe classique, prendre sa taille habituelle</li>\r\n</ul>\r\n\r\n<p>Conseils d¿entretien :</p>\r\n<ul>\r\n<li>Veillez à bien respecter les conseils d¿entretien sur l¿étiquette intérieur pour garder votre sweat aussi beau longtemps.</li>\r\n</ul>\r\n\r\n<p>Composition majoritaire : 54% Acrylique, 41% Polyamide, 5% Alpaga</p>'),
(57, 'top_trending', 'T-Shirt/p411.jpg', 'T-Shirt/p422.jpg', 'T-Shirt/p433.jpg', 'T-Shirt/p444.jpg', 'T-Shirt/p455.jpg', 'T-Shirt/p466.jpg', 12.99, 'Blanc / Vert / Marron', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Débardeur côtes plates à bretelles', '<p>Composition majoritaire : 95% Coton, 5% Elasthanne</p>'),
(58, 'home', 'blouse/p4.jpg', 'blouse/p41.jpg', 'blouse/p42.jpg', 'blouse/p43.jpg', 'blouse/p44.jpg', NULL, 35.99, 'Blanc', 'XS | S | M | L', NULL, NULL, 'Chemise broderie anglaise', '<p>Blouse broderie anglaise</p>\r\n<ul>\r\n<li>Col rond</li>\r\n<li>Détails volants</li>\r\n<li>Manches longues</li>\r\n</ul>\r\n\r\n<ul>TAILLE ET COUPE:\r\n<li>Coupe droite</li>\r\n<ul>'),
(59, 'home', 'pantalon/p3.jpg', 'pantalon/p31.jpg', 'pantalon/p32.jpg', 'pantalon/p33.jpg', 'pantalon/p34.jpg', NULL, 45.56, 'Rose pâle', 'T32 | T34 | T36 | T38 | T40 | T42', 63.28, 28, 'Jean wide leg cropped', '<p>Jean wide leg cropped</p>\r\n<ul>\r\n<li>Découpe V devant et dos</li>\r\n<li>4 poches</li>\r\n<li>Passants pour ceinture</li>\r\n<li>Fermeture par zip et bouton</li>\r\n<li>Coordonné à la chemise 2000649</li>\r\n<ul>\r\n\r\n<p>TAILLE ET COUPE</p>\r\n<ul>\r\n<li>Taille haute</li>\r\n<li>Coupe wide leg cropped : jambes larges et évasées, bas raccourcis</li>\r\n<li>La mannequin porte une taille 36 et mesure 1m73.</li>\r\n</ul>\r\n\r\n<p>PETIT TIPS ECOLOGIQUE</p>\r\n<p>Dans une démarche écologique, il est conseillé de laver tes vêtements en denim à basse température et à l\'envers dans le but de préserver les couleurs, le tissu et d\'utiliser moins d\'énergie.</p>\r\n\r\n<p>Composition majoritaire : 100% Coton</p>'),
(60, 'home', 'pull/p5.jpg', 'pull/p51.jpg', 'pull/p52.jpg', 'pull/p53.jpg', NULL, NULL, 18.49, 'Ecru / Jaune', 'XXS | XS | S | M | L | XL', 61.64, 70, 'Gilet torsadé boutonné', '<p>Composition majoritaire : 49% Acrylique, 25% Laine, 24% Polyester, 2% Elasthanne</p>'),
(61, 'home', 'sweater/p2.jpg', 'sweater/p21.jpg', 'sweater/p22.jpg', 'sweater/p23.jpg', 'sweater/p24.jpg', NULL, 29.99, 'Jaune / Ecru / Rose pâle / Marron', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Hoodie à pressions', '<p>Composition majoritaire : 68% Coton, 32% Polyester</p>'),
(62, 'home', 'sweater/p5.jpg', 'sweater/p51.jpg', 'sweater/p52.jpg', 'sweater/p53.jpg', NULL, NULL, 35.99, 'Rouge', 'XXS | XS | S | M | L | XL', NULL, NULL, 'Sweat col rond licence', '<p>Composition majoritaire : 60% Coton, 40% Polyester</p>');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(2, 'ss', 'ss', 'sssoukaina40@gmail.com', 'Ppppppp11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
