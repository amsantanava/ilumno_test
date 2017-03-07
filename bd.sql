-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.6.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para ilumno_test
CREATE DATABASE IF NOT EXISTS `ilumno_test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ilumno_test`;


-- Volcando estructura para tabla ilumno_test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ilumno_test.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `_name`, `lastname`, `email`, `phone`, `mobile`, `password`, `created`, `modified`) VALUES
	(1, 'Administrador', 'Sistemas', 'admin@admin.com', '1234567', '3155422003', '123456', '2017-03-07 02:28:00', '2017-03-07 02:41:13'),
	(2, 'Juan', 'Medrano', 'arley_santana@hotmaile.com', '99393', '939393', '1q2w3e4r', '2017-03-07 03:35:38', '2017-03-07 03:36:08'),
	(3, 'Arley', 'Santana', 'arley_santana@hotmail.com', '393938394', '3155422003', '123456', '2017-03-07 02:28:00', '2017-03-07 02:41:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
