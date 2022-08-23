-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de la table certificat. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(50) DEFAULT 'admin',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table certificat.admin : ~0 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `user_id`, `password`, `role`) VALUES
	(1, 'user@admin.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table certificat. certificats
CREATE TABLE IF NOT EXISTS `certificats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_cert` varchar(250) DEFAULT NULL,
  `name_men` varchar(250) DEFAULT NULL,
  `name_wom` varchar(250) DEFAULT NULL,
  `date_men` date DEFAULT NULL,
  `date_wom` date DEFAULT NULL,
  `lieu_men` varchar(250) DEFAULT NULL,
  `lieu_wom` varchar(250) DEFAULT NULL,
  `witnesses_1` varchar(250) DEFAULT NULL,
  `witnesses_2` varchar(250) DEFAULT NULL,
  `bourgmestre` varchar(250) DEFAULT NULL,
  `weddingdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Listage des données de la table certificat.certificats : ~0 rows (environ)
/*!40000 ALTER TABLE `certificats` DISABLE KEYS */;
INSERT INTO `certificats` (`id`, `num_cert`, `name_men`, `name_wom`, `date_men`, `date_wom`, `lieu_men`, `lieu_wom`, `witnesses_1`, `witnesses_2`, `bourgmestre`, `weddingdate`) VALUES
	(1, 'DRC_EECM_62FCC878E28B4', 'Ngalamulume kanu chadrack', 'Noelle noella noelly', '2022-08-06', '2022-08-05', 'Kinshasa', 'Kinshasa', 'Ngoy ngoy prince', 'Mbu bukolo borice', 'Rodrigo frabrigas', '2022-08-17 11:52:40'),
	(2, 'DRC_EECM_62FCC8BFAE900', 'Ricardo blanco', 'Engelina  Makise', '2022-08-19', '2022-09-01', 'Kinshasa', 'Kinshasa', 'Ngoy ngoy prince', 'Mbu bukolo borice', 'Rodrigo frabrigas', '2022-08-17 11:53:51');
/*!40000 ALTER TABLE `certificats` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
