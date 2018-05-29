-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Mai 2018 à 13:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pachirart`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_nais` date NOT NULL,
  `nationalite` varchar(30) NOT NULL,
  `pres` varchar(50) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `meth_vnt`
--

CREATE TABLE IF NOT EXISTS `meth_vnt` (
  `prix_init` float NOT NULL DEFAULT '0',
  `pas` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `meth_vnt`
--

INSERT INTO `meth_vnt` (`prix_init`, `pas`) VALUES
(100, 1);

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

CREATE TABLE IF NOT EXISTS `oeuvre` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nomO` varchar(30) NOT NULL,
  `pres` varchar(50) NOT NULL,
  `presentation` varchar(255) NOT NULL,
  `reference` varchar(10) NOT NULL,
  `nbrex` int(11) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(30) NOT NULL,
  `id_ar` int(11) NOT NULL,
  `type_o` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='tables des oeuvres' AUTO_INCREMENT=5 ;

--
-- Contenu de la table `oeuvre`
--

INSERT INTO `oeuvre` (`id`, `nomO`, `pres`, `presentation`, `reference`, `nbrex`, `prix`, `image`, `id_ar`, `type_o`) VALUES
(1, 'FireBike', 'arzttztre eddttd dgdgd dggdg', '', '1851203656', 4, 2500, 'img/fiebike.jpg', 1, 'PE'),
(2, 'Shetland', 'gsdhvs xvs gsgss qgcqg', 'svsfsgfssbsfs\r\nshsvsgs\r\nsvgs', '1851235469', 3, 1500, 'img/shetland.jpg', 1, 'PE'),
(3, 'Danceur marquizien', 'vg dshdghd sd', 'hjdhdsdhd\r\ndcbhdd\r\ndcbhb', '1851235687', 2, 2000, 'img/danceur.jpg', 1, 'PE'),
(4, 'Mercedes', 'Mercedes', 'Mercedes', '1851236485', 5, 1000, 'img/mercedes.jpg', 1, 'PE');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE IF NOT EXISTS `ventes` (
  `id_o` int(11) NOT NULL,
  `num_vnt` int(11) NOT NULL,
  PRIMARY KEY (`id_o`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ventes`
--

INSERT INTO `ventes` (`id_o`, `num_vnt`) VALUES
(1, 0),
(2, 0),
(3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
