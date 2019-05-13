-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 23 Janvier 2016 à 14:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pendu`
--

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `login`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.fr'),
(2, 'flo', 'flo', 'flo@flo.fr');

-- --------------------------------------------------------

--
-- Structure de la table `mot`
--

CREATE TABLE IF NOT EXISTS `mot` (
  `motcle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `definition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indice1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `indice2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `indice3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`motcle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `mot`
--

INSERT INTO `mot` (`motcle`, `definition`, `indice1`, `indice2`, `indice3`, `theme`) VALUES
('akwakwak', '<img src="http://www.pokepedia.fr/images/thumb/6/6e/Akwakwak-RFVF.png/915px-Akwakwak-RFVF.png"/>', 'bleu', 'eau', 'canard', 'Forme finale'),
('arcko', '<img src="http://www.pokepedia.fr/images/thumb/9/93/Arcko-ROSA.png/375px-Arcko-ROSA.png"/>', 'vert', 'plante', 'draconique', 'Starters'),
('bulbizarre', '<img src="http://www.pokepedia.fr/images/e/ef/Bulbizarre-RFVF.png"/>', 'vert', 'feuille', 'liannes', 'Starters'),
('carapuce', '<img src="http://www.pokepedia.fr/images/thumb/c/cc/Carapuce-RFVF.png/375px-Carapuce-RFVF.png"/>', 'bleu', 'eau', 'carapace', 'Starters'),
('empiflor', '<img src="http://www.pokepedia.fr/images/thumb/4/41/Empiflor-RFVF.png/375px-Empiflor-RFVF.png"/>', 'plante', 'poison', 'carnivore', 'Forme finale'),
('giratina', '<img src="http://www.pokepedia.fr/images/thumb/a/af/Giratina-DP.png/375px-Giratina-DP.png"/>', 'spectre', 'dragon', 'palkia/dialga', 'Legendaires'),
('grolem', '<img src="http://www.pokepedia.fr/images/thumb/a/a3/Grolem-RFVF.png/375px-Grolem-RFVF.png"/>', 'roche', 'sol', 'rond', 'Forme finale'),
('groudon', '<img src="http://www.pokepedia.fr/images/thumb/5/5f/Groudon-RS.png/375px-Groudon-RS.png"/>', 'rouge', 'sol', 'lave', 'Legendaires'),
('kaiminus', '<img src="http://www.pokepedia.fr/images/thumb/b/b9/Kaiminus-HGSS.png/564px-Kaiminus-HGSS.png"/>', 'bleu', 'eau', 'reptile', 'Starters'),
('lugia', '<img src="http://www.pokepedia.fr/images/thumb/c/c0/Lugia-HGSS.png/375px-Lugia-HGSS.png"/>', 'blanc', 'vol', 'oiseau', 'Legendaires'),
('mackogneur', '<img src="http://www.pokepedia.fr/images/e/ee/Mackogneur-RFVF.png"/>', 'gris', 'combat', 'bras multiples', 'Forme finale'),
('rayquaza', '<img src="http://www.pokepedia.fr/images/thumb/3/36/Rayquaza-ROSA.png/935px-Rayquaza-ROSA.png"/>', 'vert', 'siffle', 'serpent', 'Legendaires'),
('salameche', '<img src="http://www.pokepedia.fr/images/thumb/8/89/Salam%C3%A8che-RFVF.png/375px-Salam%C3%A8che-RFVF.png"/>', 'orange', 'feu', 'reptile', 'Starters'),
('sulfura', '<img src="http://www.pokepedia.fr/images/6/67/Sulfura-RFVF.png"/>', 'rouge', 'oiseau', 'feu', 'Legendaires'),
('tartard', '<img src="http://www.pokepedia.fr/images/thumb/3/38/Tartard-RFVF.png/375px-Tartard-RFVF.png"/>', 'bleu', 'eau', 'combat', 'Forme finale');

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dates` datetime NOT NULL,
  `score` int(11) NOT NULL,
  `theme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nbmot` int(11) NOT NULL,
  PRIMARY KEY (`dates`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `score`
--

INSERT INTO `score` (`login`, `dates`, `score`, `theme`, `nbmot`) VALUES
('admin', '2016-01-22 17:06:48', 2, 'Lgendaires', 5),
('admin', '2016-01-22 17:13:13', 0, 'Forme finale', 5),
('admin', '2016-01-23 13:32:32', 1, 'Legendaires', 5),
('admin', '2016-01-23 13:40:44', 1, 'Forme finale', 5),
('flo', '2016-01-23 13:52:16', 3, 'Starters', 5),
('flo', '2016-01-23 13:53:05', 3, 'Starters', 5),
('flo', '2016-01-23 13:55:12', 5, 'Starters', 5),
('flo', '2016-01-23 14:14:16', 5, 'Legendaires', 5),
('flo', '2016-01-23 14:16:10', 5, 'Starters', 5),
('admin', '2016-01-23 14:18:59', 5, 'Forme finale', 5);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `motcle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`motcle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`motcle`, `definition`) VALUES
('Forme finale', 'Forme finale des pokémons'),
('Legendaires', 'Pokémons légéndaires'),
('Starters', 'Starters au début du jeu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
