-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 01:08
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brinquedosfesta`
--
CREATE DATABASE IF NOT EXISTS `brinquedosfesta` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `brinquedosfesta`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `datasdisponivel`
--

CREATE TABLE `datasdisponivel` (
  `DataInicial` datetime NOT NULL,
  `DataFinal` datetime NOT NULL,
  `CodEquipamento` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `CodEquipamento` smallint(6) NOT NULL,
  `Nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Descricao` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Peso` decimal(7,2) DEFAULT NULL,
  `Altura` decimal(7,2) DEFAULT NULL,
  `Comprimento` decimal(7,2) DEFAULT NULL,
  `Largura` decimal(7,2) DEFAULT NULL,
  `Preco` decimal(8,2) DEFAULT NULL,
  `Status` enum('Alugado','Disponivel') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Imagem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`CodEquipamento`, `Nome`, `Descricao`, `Peso`, `Altura`, `Comprimento`, `Largura`, `Preco`, `Status`, `Imagem`) VALUES
(1, 'Castelo Infável', 'Brinquedos infláveis fazem a alegria da criançada em qualquer festa infantil, são brinquedos que chamam muito a atenção e proporcionam horas de muita diversão.', '0.00', '0.00', '0.00', '0.00', '544.00', 'Disponivel', '5ddb04bcaaa78.jpg'),
(2, 'Cama elástica', 'A cama elástica é sempre o brinquedo mais querido e procurado nas festas e não há criança que não goste de passar horas pulando e brincando sem parar, por isso, é um brinquedo ideal para buffets, condomínios, clubes, casas e hotéis.', '0.00', '0.00', '0.00', '0.00', '200.50', 'Disponivel', '5ddb04ea23e38.jpg'),
(3, 'Piscina de bolinhas', 'Uma festa infantil não é uma festa sem uma piscina de bolinhas, ela é um item indispensável que vai encantar as crianças e deixar a festa muito mais divertida!', '0.00', '0.00', '0.00', '0.00', '120.99', 'Disponivel', '5ddb04af0d2f0.jpg'),
(4, 'Máquina de Algodão Doce', 'Uma Máquina de Algodão Doce é um acessório indispensável para deixar uma festinha infantil ainda mais divertida para as crianças, até mesmo para os adultos. Aqui na Magia Brinquedos nós temos modelos de alta qualidade, fácil manejo e transporte e com preços incríveis. Confira os nosso produtos!', '0.00', '0.00', '0.00', '0.00', '232.65', 'Disponivel', '5ddb04f7109a0.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `CodItem` smallint(6) NOT NULL,
  `CodPedido` int(11) NOT NULL,
  `CodEquipamento` smallint(6) NOT NULL,
  `Preco` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `CodPedido` int(11) NOT NULL,
  `CPF` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefone` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Celular` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CEP` char(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Numero` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bairro` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Complemento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DataPedido` datetime DEFAULT NULL,
  `Data_de_uso` date DEFAULT NULL,
  `HorasAlugado` double DEFAULT NULL,
  `Hora_Montagem` time DEFAULT NULL,
  `PrecoFinal` decimal(8,2) DEFAULT NULL,
  `FormaPagamento` enum('Dinheiro','Cartão','Mercado Pago') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` enum('Pendente','Realizado') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Supervisao` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CodUsuario` smallint(6) NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Login` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Senha` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tipo` enum('super','Administrador','Moderador') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasdisponivel`
--
ALTER TABLE `datasdisponivel`
  ADD KEY `FK_Equipamento_Datas` (`CodEquipamento`);

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`CodEquipamento`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`CodItem`),
  ADD KEY `FK_Pedido_Itens` (`CodPedido`),
  ADD KEY `FK_Equipamento_Itens` (`CodEquipamento`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`CodPedido`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CodUsuario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `CodEquipamento` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `CodItem` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `CodPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CodUsuario` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `datasdisponivel`
--
ALTER TABLE `datasdisponivel`
  ADD CONSTRAINT `FK_Equipamento_Datas` FOREIGN KEY (`CodEquipamento`) REFERENCES `equipamento` (`CodEquipamento`);

--
-- Limitadores para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `FK_Equipamento_Itens` FOREIGN KEY (`CodEquipamento`) REFERENCES `equipamento` (`CodEquipamento`),
  ADD CONSTRAINT `FK_Pedido_Itens` FOREIGN KEY (`CodPedido`) REFERENCES `pedido` (`CodPedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
