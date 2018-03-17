# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.2.13-MariaDB)
# Database: ktc
# Generation Time: 2018-03-17 19:10:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `desc` mediumtext DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `nombre`, `desc`, `foto`)
VALUES
	(00001,'Pedales','copy bonito aqui ','pedales-top.jpg'),
	(00002,'Rines','copy bonito aqui ','rines.png'),
	(00003,'Cambios','copy bonito aqui ','cambiosTop.jpg'),
	(00004,'Asientos','copy bonito aqui ','asient.png'),
	(00005,'Desviadores','copy bonito aqui ','desv.jpg'),
	(00006,'Frenos','copy bonito aqui ','frenocat.jpg'),
	(00007,'Llantas','copy bonito aqui ','llantasTop.png'),
	(00008,'Manubrios','copy bonito aqui ','manu.png'),
	(00009,'Camaras','copy bonito aqui ','camars.jpg'),
	(00010,'Cadenas','copy bonito aqui ','cadenasTop.jpg'),
	(00011,'Lubricantes','copy bonito aqui ','aceites.jpg'),
	(00012,'Mazas','copy bonito aqui ','mazas.png'),
	(00013,'Cassettes','copy bonito aqui ','casssette.jpg'),
	(00014,'Cascos','un copy chido ','cascosTop.jpg');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table manufacturer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `manufacturer`;

CREATE TABLE `manufacturer` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `origen` varchar(45) DEFAULT NULL,
  `registro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

LOCK TABLES `manufacturer` WRITE;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;

INSERT INTO `manufacturer` (`id`, `nombre`, `origen`, `registro`)
VALUES
	(00001,'Shimano','Japón','2018-03-17 17:44:22'),
	(00002,'Continental','Alemania','2018-03-17 17:45:16'),
	(00003,'FSA','EU','2018-03-17 17:45:46'),
	(00004,'Cycleops','Canada','2018-03-17 17:46:02'),
	(00005,'Bimex','México','2018-03-17 17:47:16'),
	(00006,'Benotto','Italia','2018-03-17 17:48:15');

/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `sku` varchar(45) DEFAULT NULL COMMENT '	',
  `desc` mediumtext DEFAULT NULL,
  `fabricante` int(5) DEFAULT NULL,
  `categoria` int(5) DEFAULT NULL,
  `fichaTecnica` varchar(30) DEFAULT NULL,
  `fotos` mediumtext DEFAULT NULL,
  `registro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `registro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
