-- Adminer 4.8.3 MySQL 8.0.35 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` int NOT NULL,
  `img` varbinary(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `telefono`, `img`) VALUES
(1,	'Romario',	'vazquez tomas',	555545232,	UNHEX('')),
(2,	'muller',	'fredo solis',	765432145,	UNHEX('')),
(3,	'lirbaski',	'suarez enrik',	543231879,	UNHEX('')),
(4,	'yolanda',	'matias peña',	657908543,	UNHEX(''));

-- 2025-03-24 11:09:43
