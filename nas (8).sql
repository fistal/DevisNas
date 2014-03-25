-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 28 Février 2014 à 15:39
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `nas`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE IF NOT EXISTS `devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chambre` tinyint(1) NOT NULL,
  `nbrJours` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `patient_id` int(11) NOT NULL,
  `specialite_id` int(11) NOT NULL,
  `intervention_id` int(11) NOT NULL,
  `mntPartClinique` int(11) NOT NULL,
  `mntChambre` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4AE6EA2F6B899279` (`patient_id`),
  KEY `IDX_4AE6EA2F2195E0F0` (`specialite_id`),
  KEY `IDX_4AE6EA2F8EAE3863` (`intervention_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Contenu de la table `devis`
--

INSERT INTO `devis` (`id`, `chambre`, `nbrJours`, `date`, `patient_id`, `specialite_id`, `intervention_id`, `mntPartClinique`, `mntChambre`, `user_id`) VALUES
(1, 1, 1, '2014-02-13 11:11:05', 4, 14, 5, 0, 0, 0),
(2, 1, 2, '2014-02-16 14:53:16', 5, 14, 6, 0, 0, 0),
(3, 1, 1, '2014-02-16 18:58:24', 6, 14, 5, 0, 0, 0),
(4, 1, 1, '2014-02-16 18:58:45', 7, 14, 5, 0, 0, 0),
(5, 1, 1, '2014-02-16 18:59:10', 8, 14, 5, 0, 0, 0),
(6, 1, 1, '2014-02-16 19:29:30', 9, 14, 5, 0, 0, 0),
(7, 1, 1, '2014-02-16 19:30:09', 10, 14, 5, 0, 0, 0),
(8, 1, 1, '2014-02-16 19:30:41', 11, 14, 5, 0, 0, 0),
(9, 1, 2, '2014-02-17 12:48:12', 17, 14, 5, 18000, 400, 0),
(10, 1, 1, '2014-02-17 14:49:14', 18, 14, 5, 18000, 200, 0),
(11, 1, 1, '2014-02-17 14:50:58', 19, 14, 5, 18000, 200, 0),
(12, 1, 1, '2014-02-17 14:51:38', 20, 14, 5, 18000, 200, 0),
(13, 1, 2, '2014-02-17 17:06:24', 21, 14, 17, 29000, 400, 0),
(14, 1, 2, '2014-02-17 17:09:20', 22, 14, 17, 29000, 400, 0),
(15, 1, 2, '2014-02-18 08:48:59', 23, 14, 18, 32000, 400, 35),
(16, 1, 1, '2014-02-20 10:01:27', 24, 14, 14, 27000, 200, 35),
(17, 1, 4, '2014-02-20 10:01:57', 25, 14, 5, 18000, 800, 35),
(18, 1, 2, '2014-02-21 15:16:49', 26, 14, 5, 18000, 400, 35),
(19, 1, 2, '2014-02-27 16:43:15', 27, 38, 25, 21, 400, 36),
(20, 1, 1, '2014-02-28 09:56:29', 28, 38, 25, 21, 200, 36);

-- --------------------------------------------------------

--
-- Structure de la table `devishonoraire`
--

CREATE TABLE IF NOT EXISTS `devishonoraire` (
  `devis_id` int(11) NOT NULL,
  `honoraire_id` int(11) NOT NULL,
  `mnt` decimal(10,2) NOT NULL,
  PRIMARY KEY (`devis_id`,`honoraire_id`),
  KEY `IDX_4E171EA841DEFADA` (`devis_id`),
  KEY `IDX_4E171EA820F6E343` (`honoraire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `devishonoraire`
--

INSERT INTO `devishonoraire` (`devis_id`, `honoraire_id`, `mnt`) VALUES
(12, 1, '123.00'),
(12, 2, '123.00'),
(13, 1, '4765.00'),
(13, 2, '719.00'),
(14, 1, '4764.70'),
(14, 2, '719.20'),
(15, 1, '5257.60'),
(15, 2, '793.60'),
(16, 1, '4436.10'),
(16, 2, '669.60'),
(16, 4, '270.00'),
(17, 1, '2957.40'),
(17, 2, '446.40'),
(17, 4, '180.00'),
(18, 1, '2957.40'),
(18, 2, '446.40'),
(18, 4, '180.00'),
(19, 87, '1.94'),
(19, 88, '5.82'),
(19, 89, '5.82'),
(19, 91, '2.33'),
(19, 92, '2.33'),
(19, 93, '2.33'),
(19, 94, '0.43'),
(20, 87, '1.94'),
(20, 88, '5.82'),
(20, 89, '5.82'),
(20, 91, '2.33'),
(20, 92, '2.33'),
(20, 93, '2.33'),
(20, 94, '0.43');

-- --------------------------------------------------------

--
-- Structure de la table `honoraire`
--

CREATE TABLE IF NOT EXISTS `honoraire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pourcentageFacture` decimal(10,2) NOT NULL,
  `pourcentageDevis` decimal(10,2) DEFAULT NULL,
  `specialite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CFFCD0542195E0F0` (`specialite_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=95 ;

--
-- Contenu de la table `honoraire`
--

INSERT INTO `honoraire` (`id`, `type`, `pourcentageFacture`, `pourcentageDevis`, `specialite_id`) VALUES
(1, 'Chirurgien cardiaque', '7.55', '16.43', 14),
(2, '2ème Chirurgien cardiaque', '1.14', '2.48', 14),
(4, 'Angiologue', '0.00', '1.00', 14),
(60, 'Chirurgien cardiaque', '7.55', '16.42', 17),
(61, '2ème Chirurgien cardiaque', '1.14', '2.48', 17),
(62, 'Angiologue', '0.48', '1.04', 17),
(63, 'ARE', '4.46', '9.70', 17),
(64, 'Echo Cœur', '0.75', '1.63', 17),
(65, 'Kinésithérapeute', '1.74', '3.79', 17),
(66, 'Laboratoire', '10.79', '23.47', 17),
(67, 'Laboratoire anatomo-pathologiques', '0.03', '0.07', 17),
(68, 'Pneumologue', '0.38', '0.83', 17),
(69, 'Pompiste CEC', '1.51', '3.28', 17),
(70, 'Réanimateur', '11.28', '24.54', 17),
(71, 'Radio', '2.58', '5.61', 17),
(72, 'Radiovasculaire', '2.09', '4.55', 17),
(73, 'Rythmologue', '1.19', '2.59', 17),
(74, 'tyty', '0.00', NULL, 30),
(75, 'chiru1 cancero', '30.00', NULL, 31),
(76, 'tutu', '50.00', '100.00', 32),
(77, 'toto', '50.00', '50.00', 33),
(78, 'titi', '50.00', '50.00', 33),
(79, 'zeze', '50.00', '50.00', 34),
(80, 'zrzr', '50.00', '50.00', 34),
(81, 'lolo', '50.00', '50.00', 35),
(82, 'tyty', '50.00', '50.00', 35),
(83, 'nhnh', '50.00', '50.00', 36),
(84, 'jkjk', '50.00', '50.00', 36),
(85, 'dgh', '50.00', '50.00', 37),
(86, 'hghg', '50.00', '50.00', 37),
(87, 'hono1', '10.00', '9.24', 38),
(88, 'hono2', '30.00', '27.73', 38),
(89, 'hono5', '30.00', '27.73', 38),
(90, 'toto', '50.00', '100.00', 39),
(91, 'hono6', '12.00', '11.09', 38),
(92, 'hono6', '12.00', '11.09', 38),
(93, 'hono6', '12.00', '11.09', 38),
(94, 'hono7', '2.20', '2.03', 38);

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intervention` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ghs` decimal(10,2) NOT NULL,
  `dmi` decimal(10,2) NOT NULL,
  `honoraires` decimal(10,2) NOT NULL,
  `dontSpecialiste` decimal(10,2) NOT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `specialite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C929CF532195E0F0` (`specialite_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`id`, `intervention`, `ghs`, `dmi`, `honoraires`, `dontSpecialiste`, `total`, `specialite_id`) VALUES
(5, 'Pontage', '18000.00', '0.00', '9000.00', '1000.00', '27000.00', 14),
(6, 'Valve aortique', '20000.00', '1000.00', '10000.00', '2500.00', '31000.00', 14),
(14, 'Valve mitrale', '25000.00', '2000.00', '13000.00', '1500.00', '40000.00', 14),
(15, 'Valve aortique et mitrale', '27000.00', '3000.00', '13000.00', '1500.00', '43000.00', 14),
(16, 'Valve aortique et pontage', '22000.00', '1000.00', '10000.00', '2000.00', '33000.00', 14),
(17, 'Valve mitrale et pontage', '27000.00', '2000.00', '1300.00', '2000.00', '42000.00', 14),
(18, 'Valve aortique et mitrale et pontage', '29000.00', '3000.00', '13000.00', '3000.00', '45000.00', 14),
(19, 'tutu', '456.00', '4.00', '4.00', '6.00', NULL, 32),
(20, 'rere', '1.00', '1.00', '1.00', '1.00', NULL, 33),
(21, 'ty', '1.00', '1.00', '1.00', '1.00', NULL, 34),
(22, 'de', '1.00', '1.00', '1.00', '1.00', NULL, 35),
(23, 'ju', '2.00', '2.00', '2.00', '2.00', NULL, 36),
(24, 'hghg', '4.00', '4.00', '4.00', '4.00', NULL, 37),
(25, 'pompageeeeee', '10.00', '11.00', '12.00', '13.00', NULL, 38),
(26, 'test', '20.00', '20.00', '20.00', '20.00', NULL, 38);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `telephone`, `email`) VALUES
(4, 'rere', 'fifi', '33688823257', 'julienrochart@hotmail.fr'),
(5, 'rochart', 'julien', '0688823257', 'julienrochart@hotmail.fr'),
(6, 'rs', 'rs', '06060606', 'julienrochart@hotmail.fr'),
(7, 'rs', 'rs', '06060606', 'julienrochart@hotmail.fr'),
(8, 'rs', 'rs', '06060606', 'julienrochart@hotmail.fr'),
(9, 'rs', 'rs', '06060606', 'julienrochart@hotmail.fr'),
(10, 'rs', 'rs', '06060606', 'julienrochart@hotmail.fr'),
(11, 'rs', 'rs', '06060606', 'julienrochart@hotmail.fr'),
(17, 'titi', 'titi', '33688823257', 'julienrochart@hotmail.fr'),
(18, 'tuche', 'jean', '020202', 'tuche@jean.fr'),
(19, 'tuche', 'jean', '020202', 'tuche@jean.fr'),
(20, 'tuche', 'jean', '020202', 'tuche@jean.fr'),
(21, 'toto', 'toto', '0688823257', 'julienrochart@hotmail.fr'),
(22, 'rochart', 'julien', '0688823257', 'julienrochart@hotmail.fr'),
(23, 'lomann', 'arnaud', '0698542165', 'nono@nono.fr'),
(24, 'julien', 'rochart', '33688823257', 'julienrochart@hotmail.fr'),
(25, 'tutu', 'toto', '45', 'ju@ju.fr'),
(26, 'dupont', 'greg', '0102020202', 'greg@greg.com'),
(27, 'potoNom', 'prenomToto', '0606060606', 'poto@poto.com'),
(28, 'julien', 'rochart', '33688823257', 'julienrochart@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specialite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`id`, `specialite`) VALUES
(14, 'Cardiaque'),
(17, 'Urologie'),
(30, 'test'),
(31, 'Cancerologie'),
(32, 'tutu'),
(33, 'toto'),
(34, 'zeze'),
(35, 'lolo'),
(36, 'nh'),
(37, 'dgh'),
(38, 'maSpe'),
(39, 'titreSpe'),
(40, 'prout');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `specialite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `roles`, `username_canonical`, `email`, `email_canonical`, `enabled`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `credentials_expired`, `credentials_expire_at`, `specialite_id`) VALUES
(30, 'julien', 'V7xF57DEMRqJIvCaobvWm+/wiLSBQW9ThxtqThc7dCqM+EMfWOGp7lquLzlrfr2k7nKbaGivs5uorkgXrkzoRA==', '3rozx764d6wwwg8gg848kcsk0884g8c', 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'julien', 'julienrochart@hotmail.fr', 'julienrochart@hotmail.fr', 1, '2014-02-28 09:55:35', 0, 0, NULL, 'BByTgRaOK4ymtGmHvJIhv2WTtumzimTfRrYWDzvFk2g', '2014-02-27 15:12:38', 0, NULL, 0),
(32, 'emma', 'I+hcn9vMIMLesTUoyCMxpBxI3RA1vTjSGQ7JdcXOrrx+XettUrwpClTPhz7hXsAaibLQEGiHpE4So2hLRBP/dQ==', '2lr702c7yrggso0kgsow4kk4kww84kc', 'a:0:{}', 'emma', 'emma@emma.fr', 'emma@emma.fr', 1, '2014-02-12 10:30:28', 0, 0, NULL, NULL, NULL, 0, NULL, 0),
(33, 'vivian', 'vZYBZ0KDxlK/4M62DplJyB6GC5p8RH3lWyEqiXucdDT2/hj3M0GeiC5pfN2gJWvXxnETOXGFXBPhhxkWuvQj/w==', '36p7frddz82ss8sc8osgg4oc8880soo', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'vivian', 'vivian@vivian.com', 'vivian@vivian.com', 1, '2014-02-28 15:33:25', 0, 0, NULL, NULL, NULL, 0, NULL, 0),
(34, 'rere', 'RWW0U2DgSlpFmTr0zuFHLh/WjNAYawSgdEcjU2glXb5TGW+ED16KdhkFPSUG8hZGaQw6yEompTG4+yd1DyTV/Q==', 'mquni5kty34c4ocwckgsggw0kw88404', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'rere', 'rere@rere.fr', 'rere@rere.fr', 1, '2014-02-16 16:42:39', 0, 0, NULL, NULL, NULL, 0, NULL, 17),
(35, 'test', 'fFibigtt/KFuqS8l93Igdi2gDBca0z8bVUQqKFCv4BsiHVH9++QnlN/tg0TVSqtbtisdgdfk7WHV4a+fuMZmtA==', 'fkhcz9g6t3ww4cws4w4gwwk0gcwsksc', 'a:0:{}', 'test', 'test@tret.com', 'test@tret.com', 1, '2014-02-21 15:16:17', 0, 0, NULL, NULL, NULL, 0, NULL, 14),
(36, 'dupont', '5iXIUeZ9ARkxcr96RmdNxCeJGs3c8alnXQnSMAgQBNWkxm14UHdCkyVWVITGAsF2fQ9oetNTbInh2VDfKuKx5A==', 'hy88wu4bcmgogksgo8cc4o04o80k0ow', 'a:0:{}', 'dupont', 'dupont@dp.com', 'dupont@dp.com', 1, '2014-02-28 09:56:14', 0, 0, NULL, NULL, NULL, 0, NULL, 38);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `devis`
--
ALTER TABLE `devis`
  ADD CONSTRAINT `FK_4AE6EA2F2195E0F0` FOREIGN KEY (`specialite_id`) REFERENCES `specialite` (`id`),
  ADD CONSTRAINT `FK_4AE6EA2F6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_4AE6EA2F8EAE3863` FOREIGN KEY (`intervention_id`) REFERENCES `intervention` (`id`);

--
-- Contraintes pour la table `devishonoraire`
--
ALTER TABLE `devishonoraire`
  ADD CONSTRAINT `FK_4E171EA820F6E343` FOREIGN KEY (`honoraire_id`) REFERENCES `honoraire` (`id`),
  ADD CONSTRAINT `FK_4E171EA841DEFADA` FOREIGN KEY (`devis_id`) REFERENCES `devis` (`id`);

--
-- Contraintes pour la table `honoraire`
--
ALTER TABLE `honoraire`
  ADD CONSTRAINT `FK_CFFCD0542195E0F0` FOREIGN KEY (`specialite_id`) REFERENCES `specialite` (`id`);

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `FK_C929CF532195E0F0` FOREIGN KEY (`specialite_id`) REFERENCES `specialite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
