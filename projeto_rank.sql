-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_rank
DROP DATABASE IF EXISTS `projeto_rank`;
CREATE DATABASE IF NOT EXISTS `projeto_rank` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_rank`;

-- Copiando estrutura para tabela projeto_rank.techs
CREATE TABLE IF NOT EXISTS `techs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tech` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_rank.techs: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `techs` DISABLE KEYS */;
INSERT INTO `techs` (`id`, `tech`) VALUES
	(1, 'php, javascript, python, c++, nodejs, django, bootstrap, materialize, mysql, mongodb, html5, css3'),
	(2, 'php, bootstrap, materialize, mysql, html5, css3'),
	(3, 'php, javascript, laravel, bootstrap, materialize, vue, mysql, html5, css3');
/*!40000 ALTER TABLE `techs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
