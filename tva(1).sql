-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 14 juil. 2023 à 10:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tva`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `numAct` int(11) NOT NULL,
  `act` varchar(70) NOT NULL,
  `pact` varchar(100) NOT NULL,
  `commune` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `imp` varchar(3) NOT NULL,
  `exp` varchar(3) NOT NULL,
  `nif` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`numAct`, `act`, `pact`, `commune`, `adresse`, `imp`, `exp`, `nif`) VALUES
(80, '1111', 'zsgdtdzfg', 'ad', 'qsd', 'oui', 'non', '30000000'),
(83, 'Vente de pièce moto', 'Pièces importées', 'Fianrantsoa', 'Antarandolo', 'oui', 'non', '20000001'),
(93, 'QDSQ', 'QSFD', 'ad', 'qs', 'oui', 'oui', '10000019'),
(98, 'azrazr', 'azrz', 'azr', 'zerz', 'non', 'oui', '10000021'),
(105, 'QDSQ', 'aaa', '1111', 'azd', 'oui', 'oui', '10000029'),
(110, 'aze', 'ss', '1111', 'azd', 'oui', 'oui', '10000032'),
(111, 'Vente de marchandise', 'Importation', 'Fianarantsoa', 'Talatamaty', 'oui', 'non', '10000016'),
(113, 'QDSQ', 'aa', '1111', 'azd', 'oui', 'oui', '10000042'),
(116, 'aze', 'ZEZE', '1111', 'qsd', 'non', 'oui', '10000043'),
(118, 'azd', '112ZAZ', 'ad', 'qs', 'oui', 'oui', '10000044'),
(120, 'azd', 'bvjhvb', 'qsd', 'qsd', 'non', 'oui', '10000021'),
(121, 'Vendeur', 'Vendeur de viande, et de fournitures scolaires', 'Fianarantsoa', 'Anjoma', 'oui', 'oui', '20000003'),
(122, 'Grossiste', 'Vente de produits cosmétiques', 'Fianrantsoa', 'Ampasambazaha', 'oui', 'non', '20000002'),
(126, '1111', 'SAD', 'qsd', 'qsd', 'oui', 'oui', '10000052'),
(129, 'Grossiste', 'Vente frippe', 'Fianarantsoa', 'Mokana', 'oui', 'non', '10000055'),
(130, 'Vendeur', 'Grossiste', 'ANTANANARIVO', 'Talatamaty', 'oui', 'non', '10000056'),
(131, 'aaa', 'aaa', 'aa', 'aa', 'oui', 'oui', '10000015');

-- --------------------------------------------------------

--
-- Structure de la table `centrefiscal`
--

CREATE TABLE `centrefiscal` (
  `idCentre` int(11) NOT NULL,
  `nomCentre` varchar(50) NOT NULL,
  `communeCentre` varchar(20) NOT NULL,
  `adresseCentre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `centrefiscal`
--

INSERT INTO `centrefiscal` (`idCentre`, `nomCentre`, `communeCentre`, `adresseCentre`) VALUES
(1, 'CENTRE FISCAL ANTANANARIVO', 'ANTANANARIVO', 'Immeuble MFB Antaninarenina'),
(2, 'CENTRE FISCAL A(FIANARANTSOA)', 'FIANARANTSOA', 'Tsianolondroa Fianarantsoa'),
(3, 'CENTRE FISCAL B(FIANARANTSOA)', 'FIANARANTSOA', 'Isaha Fianarantsoa'),
(4, 'CENTRE FISCAL AMBOSITRA', 'AMBOSITRA', 'Tampon\'ny vonany Ambositra'),
(5, 'CENTRE FISCAL ANTSIRANANA', 'ANTSIRANANA', 'Madiorano Antsiranana'),
(6, 'CENTRE FISCAL MAHAJANGA', 'MAHAJANGA', 'Antaniketsa MAHAJANGA'),
(7, 'CENTRE FISCAL TOLIARA', 'TOLIARA', 'Idonto Toliara'),
(8, 'CENTRE FISCAL ANDROY', 'FORT DAUPHIN', 'Libanona Fort Dauphin');

-- --------------------------------------------------------

--
-- Structure de la table `comptec`
--

CREATE TABLE `comptec` (
  `numCC` int(11) NOT NULL,
  `mdpC` varchar(12) NOT NULL,
  `nif` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptec`
--

INSERT INTO `comptec` (`numCC`, `mdpC`, `nif`) VALUES
(11, 'hasina', '20000003'),
(12, 'hasina', '10000021'),
(13, 'hasina', '20000001'),
(14, 'hasina', '10000015');

-- --------------------------------------------------------

--
-- Structure de la table `comptep`
--

CREATE TABLE `comptep` (
  `numCP` int(11) NOT NULL,
  `mdpP` varchar(12) NOT NULL,
  `im` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptep`
--

INSERT INTO `comptep` (`numCP`, `mdpP`, `im`) VALUES
(21, 'admin', '123456'),
(22, 'hasina', '222222'),
(27, 'haaasina', '132132'),
(29, 'admin2', '200000');

-- --------------------------------------------------------

--
-- Structure de la table `contribuable`
--

CREATE TABLE `contribuable` (
  `nif` varchar(8) NOT NULL,
  `typeC` varchar(17) NOT NULL,
  `cinC` varchar(12) NOT NULL,
  `nomC` varchar(50) NOT NULL,
  `prenomsC` varchar(50) NOT NULL,
  `dateNaissC` date NOT NULL,
  `sexeC` varchar(5) NOT NULL,
  `sm` varchar(11) NOT NULL,
  `communeC` varchar(20) NOT NULL,
  `adresseC` varchar(50) NOT NULL,
  `telC` varchar(10) NOT NULL,
  `dateE` date NOT NULL,
  `idCentre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contribuable`
--

INSERT INTO `contribuable` (`nif`, `typeC`, `cinC`, `nomC`, `prenomsC`, `dateNaissC`, `sexeC`, `sm`, `communeC`, `adresseC`, `telC`, `dateE`, `idCentre`) VALUES
('10000015', 'personne physique', '123456789123', 'qsd', 'erg', '2022-08-02', 'Homme', 'Célibataire', 'zef', 'DFG', 'sd', '2022-11-15', 1),
('10000016', 'personne morale', '123456789123', 'qsd', 'ert', '2022-08-25', 'Homme', 'Célibataire', 'qsd', 'zef', 'zef', '2022-10-23', 1),
('10000019', 'personne morale', 'zer111', 'sdf', 'ert', '2022-08-19', 'Homme', 'Célibataire', 'zer', 'zef', 'zef', '2022-10-18', 1),
('10000021', 'personne physique', 'zerzeae', 'ZER', 'aze', '2022-08-23', 'Homme', 'Marié(e)', 'ert', 'zef', 'zef', '2022-10-22', 1),
('10000028', 'personne physique', 'qsd', 'qsd', 'ert', '2022-08-09', 'Homme', 'Célibataire', 'zef', 'qs', 'zer', '2022-08-25', 1),
('10000029', 'personne morale', 'qsdaaa', 'zer', 'aze', '2022-08-26', 'Homme', 'Célibataire', 'zef', 'DFG', 'sd', '2022-08-25', 1),
('10000030', 'personne morale', 'qsdaa', 'qsd', 'ert', '2022-08-04', 'Homme', 'Célibataire', 'qsd', 'zef', 'zef', '2022-08-25', 1),
('10000032', 'personne physique', '1234567891w', 'ww', 'ww', '2022-08-03', 'Homme', 'Célibataire', 'zef', 'DFG', 'sd', '2022-08-25', 1),
('10000033', 'personne physique', 'AZDa', 'qsd', 'zer', '2022-08-17', 'Homme', 'Célibataire', 'ert', 'DFG', 'zef', '2022-08-27', 1),
('10000034', 'personne physique', '1234567a', 'qsd', 'zer', '2022-08-31', 'Homme', 'Célibataire', 'AA', 'zer', 'sd', '2022-08-27', 1),
('10000035', 'personne physique', '1234567891a', 'az Qds', 'ert', '2022-08-30', 'Homme', 'Célibataire', 'qsd', 'zer', 'ert', '2022-08-27', 1),
('10000036', 'personne physique', '12345678A', 'aze', 'ert', '2022-08-24', 'Homme', 'Célibataire', 'qsd', 'zef', 'zef', '2022-08-27', 1),
('10000037', 'personne physique', '123456A', 'aze', 'ert', '2022-08-24', 'Homme', 'Célibataire', 'qsd', 'zef', 'zef', '2022-08-27', 1),
('10000038', 'personne physique', '1234567qa', 'ZER', 'qsd', '2022-08-23', 'Homme', 'Veuf(ve)', 'ert', 'DFG', 'sd', '2022-08-27', 1),
('10000039', 'personne physique', 'qsdq', 'zer', 'SDFDS', '2022-09-06', 'Homme', 'Célibataire', 'qsd', 'zer', 'zef', '2022-08-27', 1),
('10000040', 'personne morale', 'aqd', 'sdf', 'qsd', '2022-09-01', 'Homme', 'Célibataire', 'ert', 'zer', 'zef', '2022-08-27', 1),
('10000041', 'personne physique', '123s', 'qsd', 'ert', '2022-08-24', 'Homme', 'Célibataire', 'ert', 'zef', 'ert', '2022-08-27', 1),
('10000042', 'personne physique', '123a', 'zer', 'ert', '2022-08-30', 'Homme', 'Célibataire', 'ert', 'zer', 'sd', '2022-08-27', 1),
('10000043', 'personne physique', '123456789133', 'qsd', 'ert', '2022-09-27', 'Homme', 'Célibataire', 'qsd', 'zer', 'sd', '2022-09-27', 1),
('10000044', 'personne physique', '123456789121', 'sdf', 'aze', '2022-09-27', 'Homme', 'Célibataire', 'ert', 'qs', 'zer', '2022-09-27', 1),
('10000045', 'personne physique', '123456789144', 'zer', 'ert', '2022-09-15', 'Homme', 'Célibataire', 'zef', 'DFG', 'ert', '2022-09-28', 1),
('10000046', 'personne physique', '123456789142', 'ZER', 'erg', '2022-09-22', 'Homme', 'Célibataire', 'zer', 'DFG', 'qsd', '2022-09-28', 1),
('10000047', 'personne physique', '123456789126', 'zer', 'qsd', '2022-09-13', 'Homme', 'Célibataire', 'zef', 'qsd', '4444444444', '2022-09-28', 1),
('10000048', 'personne physique', '123456783534', 'zer', 'qsd', '2022-09-14', 'Homme', 'Célibataire', 'zef', 'zer', '2222222222', '2022-09-28', 1),
('10000049', 'personne morale', '123411789123', 'ZER', 'qsd', '2022-09-08', 'Homme', 'Célibataire', 'zef', 'qs', 'sd', '2022-09-28', 1),
('10000050', 'personne physique', '123111789123', 'ZER', 'ert', '2022-09-21', 'Homme', 'Célibataire', 'zef', 'zer', 'sd', '2022-09-29', 1),
('10000051', 'personne physique', '123231231231', 'ZER', 'qsd', '2022-10-04', 'Homme', 'Célibataire', 'ert', 'qs', 'zef', '2022-10-18', 1),
('10000052', 'personne physique', '123456233333', 'zer', 'ert', '2022-10-11', 'Homme', 'Célibataire', 'zer', 'sd', 'zef', '2022-10-18', 1),
('10000053', 'personne physique', '123121212121', 'zer', 'zer', '2022-10-03', 'Homme', 'Célibataire', 'zer', 'AA', '1111111111', '2022-10-18', 1),
('10000054', 'personne morale', '123416719133', 'ZER', 'aze', '2000-10-04', 'Femme', 'Célibataire', 'zef', 'zer', 'zef', '2022-10-20', 1),
('10000055', 'personne morale', '123456733333', 'Falimanana', 'Pascal', '1999-10-23', 'Femme', 'Célibataire', 'FIANARANTSOA', 'Sahalava', '0342163902', '2022-10-23', 1),
('10000056', 'personne physique', '132124235435', 'HASINA', 'HASINA', '1993-10-17', 'Homme', 'Célibataire', 'ANTANANARIVO', 'Talatamaty', '0345612344', '2022-10-24', 1),
('20000001', 'personne physique', '22222224', 'RANDRIA', 'Nantenaina', '1981-11-12', 'Homme', 'Marié(e)', 'FIANARANTSOA', 'Sahalava', '0342163902', '2022-10-23', 2),
('20000002', 'personne physique', '293981237126', 'RASOANANDRASANA', 'Soa', '1983-02-12', 'Femme', 'Marié(e)', 'FIANARANTSOA', 'Mokana', '0345612554', '2022-10-23', 2),
('20000003', 'personne physique', '123456789333', 'TINJANAHARY', 'Tina', '2000-08-31', 'Homme', 'Dicorcé(e)', 'FIANARANTSOA', 'Talatamaty', '0342340923', '2022-10-23', 2),
('30000000', 'personne physique', 'zer', 'qsd', 'zer', '2022-08-02', 'Homme', 'Célibataire', 'qsd', 'qs', 'ert', '2022-08-22', 3);

-- --------------------------------------------------------

--
-- Structure de la table `declarationtva`
--

CREATE TABLE `declarationtva` (
  `numDec` double NOT NULL,
  `annee` varchar(4) DEFAULT NULL,
  `mois` varchar(9) DEFAULT NULL,
  `dateDec` date NOT NULL,
  `totalTVAV` double DEFAULT NULL,
  `totalCTVA` double DEFAULT NULL,
  `rembTVA` double DEFAULT NULL,
  `creditTVAR` double DEFAULT NULL,
  `montantTVA` double DEFAULT NULL,
  `penalite` int(11) DEFAULT NULL,
  `totalVerse` double DEFAULT NULL,
  `numAct` int(11) NOT NULL,
  `rs` varchar(50) DEFAULT NULL,
  `nc` varchar(50) DEFAULT NULL,
  `ad` varchar(50) DEFAULT NULL,
  `validation` varchar(3) DEFAULT NULL,
  `envoyer` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `declarationtva`
--

INSERT INTO `declarationtva` (`numDec`, `annee`, `mois`, `dateDec`, `totalTVAV`, `totalCTVA`, `rembTVA`, `creditTVAR`, `montantTVA`, `penalite`, `totalVerse`, `numAct`, `rs`, `nc`, `ad`, `validation`, `envoyer`) VALUES
(14, '2020', 'Janvier', '2022-09-27', 0, 12.2, 0, 12.2, 7, 2, 2, 121, 'aaa', 'aaaaa', 'azd', 'oui', NULL),
(15, '2023', 'Janvier', '2022-09-29', 2114244.4000000004, 0, 0, 0, 0, 0, 0, 121, 'aaaaaaaaaaaa', 'aaa', 'azd', 'oui', 'oui'),
(25, '2021', 'Janvier', '2022-10-20', 798041000, 0, 0, 0, 798041000, 0, 0, 98, 'Vendeur', 'Vente de piéce manankasina', 'Anjoma', 'oui', 'oui'),
(26, '2020', 'Janvier', '2022-10-23', 116247060, 0, 0, 0, NULL, NULL, NULL, 83, 'Vendeur', 'Mora pièce', 'Anjoma', NULL, NULL),
(27, '2022', 'Janvier', '2022-10-23', 0, 225344603.17460316, 17333100, 208011503.17460316, 0, 0, 0, 120, 'Vendeur', 'Mora pièce', 'Anjoma', 'oui', 'oui'),
(28, '2022', 'Janvier', '2022-10-23', 0, 140000, 0, 140000, 0, 0, 0, 120, 'Hasina', 'Mora pièce', 'Anjoma', 'oui', 'oui'),
(29, '2023', 'Janvier', '2022-10-24', 0, 218000, 0, 218000, NULL, NULL, NULL, 98, 'Vendeur', 'Mora pièce', 'Anjoma', NULL, NULL),
(30, '2021', 'Janvier', '2022-11-15', 0, 11, 0, 11, NULL, NULL, NULL, 131, 'Vendeur', 'Mora pièce', 'Anjoma', NULL, 'oui'),
(31, '2020', 'Janvier', '2022-11-15', 0, 0, 0, 0, NULL, NULL, NULL, 131, 'aaaaaaaaaaaa', 'aaa', 'azd', NULL, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `deduction`
--

CREATE TABLE `deduction` (
  `numD` int(11) NOT NULL,
  `taxeBL` double DEFAULT NULL,
  `taxeBI` double DEFAULT NULL,
  `taxeAL` double DEFAULT NULL,
  `taxeAI` double DEFAULT NULL,
  `taxeSL` double DEFAULT NULL,
  `taxeSI` double DEFAULT NULL,
  `autresL` double DEFAULT NULL,
  `autresI` double DEFAULT NULL,
  `prorataD` double DEFAULT NULL,
  `rcp` double DEFAULT NULL,
  `totalD` double NOT NULL,
  `numDec` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `deduction`
--

INSERT INTO `deduction` (`numD`, `taxeBL`, `taxeBI`, `taxeAL`, `taxeAI`, `taxeSL`, `taxeSI`, `autresL`, `autresI`, `prorataD`, `rcp`, `totalD`, `numDec`) VALUES
(25, 7, 0, 0, 9, 0, 0, 0, 0, 100, 0, 16, 14),
(26, 2322, 2323, 2323232, 0, 0, 2323, 0, 0, 100, 0, 2330200, 15),
(36, 2000000, 0, 0, 0, 0, 0, 0, 0, 100, 0, 2000000, 25),
(37, 40000000, 30000, 4400000, 40003000, 0, 0, 0, 0, 100, 0, 84433000, 26),
(38, 200000000, 0, 30000000, 3040000, 0, 0, 0, 0, 99.27248677248677, 0, 231344603.17460316, 27),
(39, 0, 0, 200000, 0, 0, 0, 0, 0, 100, 0, 200000, 28),
(40, 200000, 0, 0, 0, 0, 0, 30000, 0, 100, 0, 230000, 29),
(41, 11, 0, 0, 0, 0, 0, 0, 0, 100, 0, 11, 30),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 31);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `numH` int(11) NOT NULL,
  `action` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(10) NOT NULL,
  `numActeur` varchar(8) NOT NULL,
  `lu` varchar(3) DEFAULT NULL,
  `declaration` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`numH`, `action`, `date`, `heure`, `numActeur`, `lu`, `declaration`) VALUES
(3, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 124534', '2022-09-27', '8:31:29pm', '123456', 'oui', NULL),
(5, 'Le personnel portant l\'im 123456 a supprimé le personnel portant l\'im 124534', '2022-09-27', '8:42:18pm', '123456', 'oui', NULL),
(6, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000043', '2022-09-27', '8:57:30pm', '123456', 'oui', NULL),
(7, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000043', '2022-09-27', '8:58:03pm', '123456', 'oui', NULL),
(8, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000022', '2022-09-27', '8:58:26pm', '123456', 'oui', NULL),
(9, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000019', '2022-09-27', '9:01:23pm', '123456', 'oui', NULL),
(10, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000018', '2022-09-27', '9:02:19pm', '123456', 'oui', NULL),
(11, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000018', '2022-09-27', '9:03:05pm', '123456', 'oui', NULL),
(12, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000044', '2022-09-27', '9:06:24pm', '123456', 'oui', NULL),
(13, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000016', '2022-09-27', '9:07:39pm', '123456', 'oui', NULL),
(14, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000015', '2022-09-27', '9:17:39pm', '123456', 'oui', NULL),
(15, 'Le personnel portant l\'im 123456 a supprimé un activité du contribuable portant le nif 10000015', '2022-09-27', '9:17:55pm', '123456', NULL, NULL),
(16, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000015', '2022-09-27', '9:18:11pm', '123456', 'oui', NULL),
(17, 'Le personnel portant l\'im 123456 a supprimé le contribuable portant le nif 10000027', '2022-09-27', '9:19:04pm', '123456', NULL, NULL),
(18, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000021', '2022-09-27', '9:25:13pm', '123456', NULL, NULL),
(19, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000021', '2022-09-27', '9:25:38pm', '123456', NULL, NULL),
(20, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000021', '2022-09-27', '9:26:01pm', '123456', NULL, NULL),
(21, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000021', '2022-09-27', '9:26:14pm', '123456', NULL, NULL),
(22, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000021', '2022-09-27', '9:26:17pm', '123456', NULL, NULL),
(23, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000016', '2022-09-27', '9:26:52pm', '123456', 'oui', NULL),
(24, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000016', '2022-09-27', '9:26:55pm', '123456', NULL, NULL),
(25, 'Le personnel portant l\'im 123456 a validé/modifié la déclaration numéro 2', '2022-09-27', '9:35:19pm', '123456', NULL, NULL),
(26, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 8', '2022-09-27', '9:40:53pm', '123456', NULL, NULL),
(27, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 6', '2022-09-27', '9:41:56pm', '123456', NULL, NULL),
(28, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 10', '2022-09-27', '9:42:26pm', '123456', NULL, NULL),
(29, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 10', '2022-09-27', '9:44:01pm', '123456', NULL, NULL),
(30, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 11', '2022-09-27', '9:44:17pm', '123456', NULL, NULL),
(31, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 2', '2022-09-27', '9:48:33pm', '123456', NULL, NULL),
(32, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 2', '2022-09-27', '9:48:37pm', '123456', NULL, NULL),
(33, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 12', '2022-09-27', '9:48:49pm', '123456', 'oui', NULL),
(34, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 13', '2022-09-27', '9:49:26pm', '123456', NULL, NULL),
(35, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 6', '2022-09-27', '9:52:16pm', '123456', NULL, NULL),
(36, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 6', '2022-09-27', '9:53:26pm', '123456', NULL, NULL),
(37, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 6', '2022-09-27', '9:59:04pm', '123456', NULL, NULL),
(38, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 126221', '2022-09-27', '10:35:19pm', '123456', NULL, NULL),
(40, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 234566', '2022-09-27', '11:12:30pm', '123456', NULL, NULL),
(46, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 7', '2022-09-28', '4:54:24pm', '123456', NULL, NULL),
(47, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 8', '2022-09-28', '4:54:46pm', '123456', NULL, NULL),
(50, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000046', '2022-09-28', '9:16:18pm', '123456', NULL, NULL),
(51, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000047', '2022-09-28', '9:18:21pm', '123456', NULL, NULL),
(52, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 2', '2022-09-28', '9:24:05pm', '123456', NULL, NULL),
(53, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 10', '2022-09-28', '9:24:42pm', '123456', NULL, NULL),
(54, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 10', '2022-09-28', '9:25:17pm', '123456', NULL, NULL),
(59, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 111121', '2022-10-07', '7:34:04am', '123456', NULL, NULL),
(60, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000009', '2022-10-07', '11:34:34am', '123456', NULL, NULL),
(61, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000009', '2022-10-07', '11:34:47am', '123456', NULL, NULL),
(62, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000009', '2022-10-07', '11:34:54am', '123456', NULL, NULL),
(63, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 132132', '2022-10-07', '10:44:30pm', '123456', NULL, NULL),
(64, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 123456', '2022-10-07', '10:47:09pm', '123456', NULL, NULL),
(65, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000014', '2022-10-07', '10:48:10pm', '123456', NULL, NULL),
(66, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000014', '2022-10-07', '10:48:14pm', '123456', 'oui', NULL),
(67, 'Le personnel portant l\'im 123456 a supprimé le personnel portant l\'im ', '2022-10-07', '10:53:31pm', '123456', NULL, NULL),
(68, 'Le personnel portant l\'im 123456 a supprimé le personnel portant l\'im ', '2022-10-07', '10:54:01pm', '123456', NULL, NULL),
(69, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 10', '2022-10-07', '10:54:49pm', '123456', NULL, NULL),
(70, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 111121', '2022-10-07', '10:55:44pm', '123456', NULL, NULL),
(71, 'Le personnel portant l\'im 123456 a supprimé le contribuable portant le nif 10000022', '2022-10-09', '11:33:01am', '123456', 'oui', NULL),
(72, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000009', '2022-10-09', '4:18:48pm', '123456', 'oui', NULL),
(73, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000009', '2022-10-09', '4:18:52pm', '123456', 'oui', NULL),
(74, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 2', '2022-10-18', '10:14:08pm', '123456', 'oui', NULL),
(75, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 2', '2022-10-18', '10:14:23pm', '123456', 'oui', NULL),
(76, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 132132', '2022-10-18', '10:41:02pm', '123456', NULL, NULL),
(77, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 8', '2022-10-18', '10:46:42pm', '123456', NULL, NULL),
(78, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 7', '2022-10-18', '10:53:31pm', '123456', NULL, NULL),
(79, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000019', '2022-10-18', '10:58:52pm', '123456', NULL, NULL),
(80, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000019', '2022-10-18', '11:02:23pm', '123456', 'oui', NULL),
(81, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000019', '2022-10-18', '11:03:28pm', '123456', 'oui', NULL),
(82, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000052', '2022-10-18', '11:06:35pm', '123456', 'oui', NULL),
(83, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000052', '2022-10-18', '11:06:41pm', '123456', 'oui', NULL),
(84, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 13', '2022-10-19', '12:29:12am', '10000009', 'oui', 'oui'),
(85, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 16', '2022-10-19', '12:29:26am', '10000009', 'oui', 'oui'),
(86, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 17', '2022-10-19', '12:45:58am', '10000009', 'oui', 'oui'),
(89, 'Le personnel portant l\'im 123456 a supprimé le personnel portant l\'im 111121', '2022-10-19', '12:49:24am', '123456', NULL, NULL),
(90, 'Le personnel portant l\'im 123456 a supprimé le contribuable portant le nif 10000014', '2022-10-19', '12:52:45am', '123456', NULL, NULL),
(91, 'Le personnel portant l\'im 123456 a supprimé le contribuable portant le nif 10000018', '2022-10-19', '12:53:08am', '123456', NULL, NULL),
(92, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 18', '2022-10-19', '13:22:19pm', '10000009', NULL, 'oui'),
(93, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 19', '2022-10-19', '13:23:16pm', '10000009', NULL, 'oui'),
(94, 'Le personnel portant l\'im 132132 a ajouté un activités au contribuable portant le nif 10000015', '2022-10-19', '6:09:52pm', '132132', NULL, NULL),
(95, 'Le personnel portant l\'im 132132 a supprimé un activité du contribuable portant le nif 10000015', '2022-10-19', '6:10:00pm', '132132', NULL, NULL),
(96, 'Le personnel portant l\'im 132132 a modifié le contribuable portant le nif 10000015', '2022-10-19', '6:10:07pm', '132132', NULL, NULL),
(97, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 20', '2022-10-19', '6:10:49pm', '10000009', NULL, 'oui'),
(98, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 21', '2022-10-19', '6:10:59pm', '10000009', NULL, 'oui'),
(99, 'Le personnel portant l\'im 132132 a validé la déclaration numéro 17', '2022-10-19', '6:15:23pm', '132132', NULL, NULL),
(100, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 132132', '2022-10-19', '6:28:32pm', '123456', 'oui', NULL),
(101, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 8', '2022-10-19', '8:55:34pm', '123456', NULL, NULL),
(102, 'Le contribuable portant le nif 20000003 a demandé la validation de la déclaration numéro 15', '2022-10-19', '8:57:43pm', '20000003', NULL, 'oui'),
(103, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 1', '2022-10-19', '9:31:59pm', '123456', NULL, NULL),
(104, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 5', '2022-10-19', '9:32:11pm', '123456', NULL, NULL),
(105, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 7', '2022-10-19', '9:32:17pm', '123456', NULL, NULL),
(106, 'Le personnel portant l\'im 123456 a supprimé la déclaration numéro 8', '2022-10-19', '9:32:22pm', '123456', NULL, NULL),
(107, 'Le personnel portant l\'im 132132 a modifié le contribuable portant le nif 10000015', '2022-10-19', '10:21:45pm', '132132', NULL, NULL),
(108, 'Le personnel portant l\'im 132132 a validé la déclaration numéro 18', '2022-10-19', '11:08:13pm', '132132', 'oui', NULL),
(109, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 22', '2022-10-20', '7:34:23pm', '10000009', 'oui', 'oui'),
(110, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 23', '2022-10-20', '7:35:33pm', '10000009', 'oui', 'oui'),
(111, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 19', '2022-10-20', '7:39:04pm', '10000009', NULL, 'oui'),
(112, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 20', '2022-10-20', '7:40:47pm', '10000009', NULL, 'oui'),
(113, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 20', '2022-10-20', '7:41:06pm', '10000009', NULL, 'oui'),
(114, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 21', '2022-10-20', '7:42:29pm', '10000009', NULL, 'oui'),
(115, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 22', '2022-10-20', '7:45:18pm', '10000009', NULL, 'oui'),
(116, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 19', '2022-10-20', '7:59:28pm', '10000009', NULL, 'oui'),
(117, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 20', '2022-10-20', '7:59:31pm', '10000009', NULL, 'oui'),
(118, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 21', '2022-10-20', '7:59:38pm', '10000009', NULL, 'oui'),
(119, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 19', '2022-10-20', '8:00:02pm', '10000009', NULL, 'oui'),
(120, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 20', '2022-10-20', '8:01:58pm', '10000009', NULL, 'oui'),
(121, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 21', '2022-10-20', '8:03:03pm', '10000009', NULL, 'oui'),
(122, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 22', '2022-10-20', '8:03:07pm', '10000009', NULL, 'oui'),
(123, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 19', '2022-10-20', '8:08:19pm', '10000009', NULL, 'oui'),
(124, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 20', '2022-10-20', '8:08:22pm', '10000009', NULL, 'oui'),
(125, 'Le contribuable portant le nif 10000009 a demandé la validation de la déclaration numéro 21', '2022-10-20', '8:08:25pm', '10000009', NULL, 'oui'),
(126, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 18', '2022-10-20', '8:22:06pm', '123456', NULL, NULL),
(127, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 123456', '2022-10-20', '8:22:29pm', '123456', NULL, NULL),
(128, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 123456', '2022-10-20', '8:22:43pm', '123456', NULL, NULL),
(129, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000009', '2022-10-20', '8:23:27pm', '123456', NULL, NULL),
(130, 'Le personnel portant l\'im 123456 a modifié l\'un des activités du contribuable portant le nif 10000009', '2022-10-20', '8:23:33pm', '123456', NULL, NULL),
(131, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000009', '2022-10-20', '8:23:38pm', '123456', NULL, NULL),
(132, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 122222', '2022-10-20', '8:25:38pm', '123456', NULL, NULL),
(133, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000054', '2022-10-20', '8:26:51pm', '123456', NULL, NULL),
(134, 'Le personnel portant l\'im 123456 a supprimé un activité du contribuable portant le nif 10000054', '2022-10-20', '8:26:59pm', '123456', NULL, NULL),
(135, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000054', '2022-10-20', '8:27:03pm', '123456', NULL, NULL),
(136, 'Le personnel portant l\'im 132132 a supprimé le contribuable portant le nif 10000009', '2022-10-20', '8:38:40pm', '132132', NULL, NULL),
(137, 'Le personnel portant l\'im 132132 a validé la déclaration numéro 24', '2022-10-20', '8:39:32pm', '132132', NULL, NULL),
(138, 'Le personnel portant l\'im 132132 a modifié la déclaration numéro 24', '2022-10-20', '8:39:45pm', '132132', NULL, NULL),
(140, 'Le personnel portant l\'im 234566 a supprimé le personnel portant l\'im 234566', '2022-10-20', '9:07:13pm', '234566', NULL, NULL),
(141, 'Le personnel portant l\'im 234566 a enregistré le personnel portant l\'im 200000', '2022-10-20', '9:08:30pm', '234566', NULL, NULL),
(142, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 200000', '2022-10-20', '9:16:37pm', '123456', NULL, NULL),
(143, 'Le personnel portant l\'im 200000 a validé la déclaration numéro 15', '2022-10-20', '9:17:59pm', '200000', NULL, NULL),
(144, 'Le personnel portant l\'im 200000 a modifié la déclaration numéro 15', '2022-10-20', '9:24:30pm', '200000', NULL, NULL),
(145, 'Le contribuable portant le nif 10000021 a demandé la validation de la déclaration numéro 25', '2022-10-20', '9:27:06pm', '10000021', 'oui', 'oui'),
(146, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000021', '2022-10-22', '7:36:24pm', '123456', 'oui', NULL),
(147, 'Le personnel portant l\'im 200000 a modifié l\'un des activités du contribuable portant le nif 20000001', '2022-10-23', '7:32:23pm', '200000', NULL, NULL),
(148, 'Le personnel portant l\'im 200000 a modifié le contribuable portant le nif 20000001', '2022-10-23', '7:32:27pm', '200000', NULL, NULL),
(149, 'Le personnel portant l\'im 200000 a modifié l\'un des activités du contribuable portant le nif 20000002', '2022-10-23', '7:35:06pm', '200000', NULL, NULL),
(150, 'Le personnel portant l\'im 200000 a modifié le contribuable portant le nif 20000002', '2022-10-23', '7:35:09pm', '200000', NULL, NULL),
(151, 'Le personnel portant l\'im 200000 a modifié l\'un des activités du contribuable portant le nif 20000003', '2022-10-23', '7:40:26pm', '200000', NULL, NULL),
(152, 'Le personnel portant l\'im 200000 a modifié le contribuable portant le nif 20000003', '2022-10-23', '7:40:30pm', '200000', NULL, NULL),
(153, 'Le personnel portant l\'im 123456 a supprimé le personnel portant l\'im 122222', '2022-10-23', '9:26:29pm', '123456', NULL, NULL),
(154, 'Le personnel portant l\'im 123456 a supprimé le contribuable portant le nif 10000031', '2022-10-23', '9:26:50pm', '123456', NULL, NULL),
(155, 'Le personnel portant l\'im 132132 a validé la déclaration numéro 25', '2022-10-23', '9:30:20pm', '132132', NULL, NULL),
(156, 'Le contribuable portant le nif 10000021 a demandé la validation de la déclaration numéro 27', '2022-10-23', '9:39:09pm', '10000021', NULL, 'oui'),
(157, 'Le personnel portant l\'im 132132 a supprimé le contribuable portant le nif 10000017', '2022-10-23', '9:40:09pm', '132132', NULL, NULL),
(158, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 123901', '2022-10-23', '9:50:09pm', '123456', NULL, NULL),
(159, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000055', '2022-10-23', '9:52:04pm', '123456', NULL, NULL),
(160, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000055', '2022-10-23', '9:52:07pm', '123456', NULL, NULL),
(161, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 24', '2022-10-23', '9:52:21pm', '123456', NULL, NULL),
(162, 'Le personnel portant l\'im 123456 a modifié le personnel portant l\'im 123901', '2022-10-23', '9:52:32pm', '123456', NULL, NULL),
(163, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000016', '2022-10-23', '9:52:43pm', '123456', NULL, NULL),
(164, 'Le personnel portant l\'im 132132 a modifié la déclaration numéro 24', '2022-10-23', '9:53:32pm', '132132', NULL, NULL),
(165, 'Le personnel portant l\'im 132132 a modifié l\'un des activités du contribuable portant le nif 10000016', '2022-10-23', '9:54:20pm', '132132', NULL, NULL),
(166, 'Le personnel portant l\'im 132132 a modifié le contribuable portant le nif 10000016', '2022-10-23', '9:54:23pm', '132132', NULL, NULL),
(167, 'Le personnel portant l\'im 123456 a enregistré le personnel portant l\'im 123234', '2022-10-24', '10:54:36am', '123456', NULL, NULL),
(168, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000056', '2022-10-24', '10:56:30am', '123456', NULL, NULL),
(169, 'Le personnel portant l\'im 123456 a enregistré le contribuable portant le nif 10000056', '2022-10-24', '10:56:38am', '123456', NULL, NULL),
(170, 'Le personnel portant l\'im 123456 a validé la déclaration numéro 27', '2022-10-24', '10:57:33am', '123456', NULL, NULL),
(171, 'Le contribuable portant le nif 10000021 a demandé la validation de la déclaration numéro 28', '2022-10-24', '11:03:33am', '10000021', NULL, 'oui'),
(172, 'Le personnel portant l\'im 132132 a validé la déclaration numéro 28', '2022-10-24', '11:04:58am', '132132', NULL, NULL),
(173, 'Le personnel portant l\'im 132132 a supprimé la déclaration numéro 24', '2022-10-24', '11:05:57am', '132132', NULL, NULL),
(174, 'Le personnel portant l\'im 123456 a modifié la déclaration numéro 25', '2022-11-12', '6:30:33am', '123456', NULL, NULL),
(175, 'Le personnel portant l\'im 123456 a ajouté un activités au contribuable portant le nif 10000015', '2022-11-15', '10:09:45pm', '123456', NULL, NULL),
(176, 'Le personnel portant l\'im 123456 a modifié le contribuable portant le nif 10000015', '2022-11-15', '10:09:49pm', '123456', NULL, NULL),
(177, 'Le contribuable portant le nif 10000015 a demandé la validation de la déclaration numéro 30', '2022-11-15', '10:10:36pm', '10000015', NULL, 'oui'),
(178, 'Le contribuable portant le nif 10000015 a demandé la validation de la déclaration numéro 31', '2022-11-15', '10:14:37pm', '10000015', NULL, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `im` varchar(6) NOT NULL,
  `cinP` varchar(12) NOT NULL,
  `nomP` varchar(50) NOT NULL,
  `prenomsP` varchar(50) NOT NULL,
  `dateNaissP` date NOT NULL,
  `sexeP` varchar(5) NOT NULL,
  `sm` varchar(11) NOT NULL,
  `communeP` varchar(50) NOT NULL,
  `adresseP` varchar(50) NOT NULL,
  `telP` varchar(10) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `idCentre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`im`, `cinP`, `nomP`, `prenomsP`, `dateNaissP`, `sexeP`, `sm`, `communeP`, `adresseP`, `telP`, `fonction`, `idCentre`) VALUES
('111aa', 'zera', 'qsd', 'zer', '2022-09-01', 'Homme', 'Célibataire', 'zer', 'zef', 'sd', 'zef', 8),
('123234', '121092372198', 'HASINA', 'HASINA', '1999-10-13', 'Homme', 'Célibataire', 'FIANARANTSOA', 'Sahalava', '0342163902', 'Comptable', 1),
('123456', '123456789124', 'RANDRIANANDRASANA', 'Clérmont', '2022-09-08', 'Homme', 'Marié(e)', 'FIANARANTSOA', 'Antarandolo', '0342310811', 'Chef de centre', 1),
('123901', '123456782324', 'Hasina', 'Hasina zeze', '1989-10-05', 'Homme', 'Célibataire', 'FIANARANTSOA', 'Sahalava', '0345612344', 'Comptable', 1),
('132132', '234234324423', 'Hasina', 'Hervé', '2022-09-20', 'Homme', 'Célibataire', 'FIANARANTSOA', 'sahalava', '0345612344', 'Agent', 1),
('200000', '121312432452', 'RAFETY', 'Hery', '2022-10-02', 'Homme', 'Célibataire', 'FIANARANTSOA', 'Sahalava', '0345623411', 'Chef de centre', 2),
('222222', '22', 'qsd', 'qsd', '2022-08-23', 'Homme', 'Célibataire', 'qsd', 'DFG', 'zef', 'FGH', 4);

-- --------------------------------------------------------

--
-- Structure de la table `tvac`
--

CREATE TABLE `tvac` (
  `numOP` int(11) NOT NULL,
  `opExpt` double DEFAULT NULL,
  `opExpNT` double DEFAULT NULL,
  `opLAT` double DEFAULT NULL,
  `opLANT` double DEFAULT NULL,
  `opLNT` double DEFAULT NULL,
  `opLNNT` double DEFAULT NULL,
  `autresT` double DEFAULT NULL,
  `autresNT` double DEFAULT NULL,
  `taux1` float DEFAULT NULL,
  `taux2` float DEFAULT NULL,
  `taux3` float NOT NULL,
  `totalC` double NOT NULL,
  `numDec` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tvac`
--

INSERT INTO `tvac` (`numOP`, `opExpt`, `opExpNT`, `opLAT`, `opLANT`, `opLNT`, `opLNNT`, `autresT`, `autresNT`, `taux1`, `taux2`, `taux3`, `totalC`, `numDec`) VALUES
(32, 9, 9, 13, 0, 8, 0, 6, 4, 0.2, 0, 0.2, 3.8000000000000003, 14),
(33, 123232, 123232, 22222222, 0, 0, 0, 0, 0, 0.2, 0, 0, 4444444.4, 15),
(43, 2000000, 2000000, 200000, 4000005000, 300000, 20000000, 0, 0, 0.2, 0.2, 0, 800041000, 25),
(44, 200000, 30000, 1000000300, 3400000, 1400000, 0, 0, 0, 0.2, 0.2, 0, 200680060, 26),
(45, 20000, 20000, 30000000, 0, 200000, 0, 0, 0, 0.2, 0, 0, 6000000, 27),
(46, 6000, 6000, 300000, 0, 0, 0, 0, 0, 0.2, 0, 0, 60000, 28),
(47, 200000, 0, 30000, 30000, 2000, 0, 0, 0, 0.2, 0.2, 0, 12000, 29),
(48, 7, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, 30),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`numAct`),
  ADD KEY `nif` (`nif`);

--
-- Index pour la table `centrefiscal`
--
ALTER TABLE `centrefiscal`
  ADD PRIMARY KEY (`idCentre`);

--
-- Index pour la table `comptec`
--
ALTER TABLE `comptec`
  ADD PRIMARY KEY (`numCC`),
  ADD KEY `nif` (`nif`);

--
-- Index pour la table `comptep`
--
ALTER TABLE `comptep`
  ADD PRIMARY KEY (`numCP`);

--
-- Index pour la table `contribuable`
--
ALTER TABLE `contribuable`
  ADD PRIMARY KEY (`nif`),
  ADD KEY `idCentre` (`idCentre`);

--
-- Index pour la table `declarationtva`
--
ALTER TABLE `declarationtva`
  ADD PRIMARY KEY (`numDec`),
  ADD KEY `numAct` (`numAct`);

--
-- Index pour la table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`numD`),
  ADD KEY `refDec` (`numDec`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`numH`),
  ADD KEY `imActeur` (`numActeur`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`im`),
  ADD KEY `idCentre` (`idCentre`);

--
-- Index pour la table `tvac`
--
ALTER TABLE `tvac`
  ADD PRIMARY KEY (`numOP`),
  ADD KEY `numDec` (`numDec`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `numAct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `comptec`
--
ALTER TABLE `comptec`
  MODIFY `numCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `comptep`
--
ALTER TABLE `comptep`
  MODIFY `numCP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `numD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `numH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT pour la table `tvac`
--
ALTER TABLE `tvac`
  MODIFY `numOP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`nif`) REFERENCES `contribuable` (`nif`);

--
-- Contraintes pour la table `comptec`
--
ALTER TABLE `comptec`
  ADD CONSTRAINT `comptec_ibfk_1` FOREIGN KEY (`nif`) REFERENCES `contribuable` (`nif`);

--
-- Contraintes pour la table `contribuable`
--
ALTER TABLE `contribuable`
  ADD CONSTRAINT `contribuable_ibfk_1` FOREIGN KEY (`idCentre`) REFERENCES `centrefiscal` (`idCentre`);

--
-- Contraintes pour la table `declarationtva`
--
ALTER TABLE `declarationtva`
  ADD CONSTRAINT `declarationtva_ibfk_1` FOREIGN KEY (`numAct`) REFERENCES `activite` (`numAct`);

--
-- Contraintes pour la table `deduction`
--
ALTER TABLE `deduction`
  ADD CONSTRAINT `deduction_ibfk_1` FOREIGN KEY (`numDec`) REFERENCES `declarationtva` (`numDec`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`idCentre`) REFERENCES `centrefiscal` (`idCentre`);

--
-- Contraintes pour la table `tvac`
--
ALTER TABLE `tvac`
  ADD CONSTRAINT `tvac_ibfk_1` FOREIGN KEY (`numDec`) REFERENCES `declarationtva` (`numDec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
