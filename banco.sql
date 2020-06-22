-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.6-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para cervejaria
CREATE DATABASE IF NOT EXISTS `cervejaria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cervejaria`;

-- Copiando estrutura para tabela cervejaria.cerveja
CREATE TABLE IF NOT EXISTS `cerveja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `medida` varchar(50) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(5,2) NOT NULL DEFAULT 0.00,
  `ativo` tinyint(1) DEFAULT 1,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cervejaria.cerveja: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cerveja` DISABLE KEYS */;
INSERT INTO `cerveja` (`id`, `marca`, `tipo`, `medida`, `quantidade`, `preco`, `ativo`, `data`) VALUES
	(7, 'Brahma', 'latÃ£o', '475ml', -43, 6.00, 1, '2020-06-02'),
	(8, 'Skol', 'LitrÃ£o', '1 litro', 1, 8.99, 1, '2020-06-02');
/*!40000 ALTER TABLE `cerveja` ENABLE KEYS */;

-- Copiando estrutura para tabela cervejaria.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `dataNasc` date NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `ativo` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cervejaria.cliente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nome`, `cpf`, `dataNasc`, `logradouro`, `bairro`, `cep`, `numero`, `cidade`, `ativo`) VALUES
	(2, 'Dyenny', '3620421013', '2020-06-18', 'Gustavo Peixoto', 'Centro', 965053680, 1597, 'Pantado', 1),
	(4, 'Pedro', '3620421013', '1994-03-14', 'Gustavo', 'TibiriÃ§a', 96503680, 1587, 'Cachoeira do sul', 1);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela cervejaria.itens_pedido
CREATE TABLE IF NOT EXISTS `itens_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cerveja_id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT 1,
  `valor_unitario` float DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cerveja_id` (`cerveja_id`),
  KEY `pedido_id` (`pedido_id`),
  CONSTRAINT `itens_pedido_ibfk_1` FOREIGN KEY (`cerveja_id`) REFERENCES `cerveja` (`id`),
  CONSTRAINT `itens_pedido_ibfk_2` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cervejaria.itens_pedido: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `itens_pedido` DISABLE KEYS */;
INSERT INTO `itens_pedido` (`id`, `cerveja_id`, `pedido_id`, `quantidade`, `valor_unitario`, `valor_total`) VALUES
	(67, 8, 28, 10, 8.99, 89.9),
	(68, 7, 28, 4, 6, 24),
	(69, 8, 29, 1, 8.99, 8.99),
	(70, 8, 29, 1, 8.99, 8.99),
	(71, 7, 28, 3, 6, 18),
	(72, 7, 29, 4, 6, 24),
	(73, 8, 30, 3, 8.99, 26.97),
	(74, 7, 31, 1, 6, 6),
	(75, 7, 32, 1, 6, 6);
/*!40000 ALTER TABLE `itens_pedido` ENABLE KEYS */;

-- Copiando estrutura para tabela cervejaria.mesa
CREATE TABLE IF NOT EXISTS `mesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ocupado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cervejaria.mesa: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `mesa` DISABLE KEYS */;
INSERT INTO `mesa` (`id`, `ocupado`) VALUES
	(36, 0),
	(37, 0),
	(38, 0),
	(39, 0),
	(40, 0),
	(41, 0);
/*!40000 ALTER TABLE `mesa` ENABLE KEYS */;

-- Copiando estrutura para tabela cervejaria.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `valor_total` float(5,2) DEFAULT 0.00,
  `finalizado` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `mesa_id` (`mesa_id`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`mesa_id`) REFERENCES `mesa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cervejaria.pedido: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` (`id`, `cliente_id`, `mesa_id`, `valor_total`, `finalizado`) VALUES
	(28, 2, 41, 131.90, 1),
	(29, 4, 38, 32.99, 1),
	(30, 2, 36, 26.97, 1),
	(31, 4, 40, 6.00, 1),
	(32, 2, 36, 6.00, 1);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando estrutura para tabela cervejaria.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `ativo` tinyint(1) DEFAULT 1,
  `dataNasc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cervejaria.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
