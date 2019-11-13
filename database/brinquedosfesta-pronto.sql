-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2019 às 06:50
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
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CodCliente` smallint(6) NOT NULL,
  `CPF` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Celular` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CEP` char(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Numero` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bairro` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Complemento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `Nome` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Descricao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Peso` decimal(7,2) DEFAULT NULL,
  `Altura` decimal(7,2) DEFAULT NULL,
  `Comprimento` decimal(7,2) DEFAULT NULL,
  `Largura` decimal(7,2) DEFAULT NULL,
  `Preco` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `CodCliente` smallint(6) NOT NULL,
  `CodUsuario` smallint(6) NOT NULL,
  `EnderecoMontagem` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DataPedido` datetime DEFAULT NULL,
  `Data_de_uso` date DEFAULT NULL,
  `HorasAlugado` double DEFAULT NULL,
  `Data_Hora_Montagem` datetime DEFAULT NULL,
  `PrecoFinal` decimal(8,2) DEFAULT NULL,
  `FormaPagamento` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CodSupervisor` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

CREATE TABLE `supervisor` (
  `CodSupervisor` smallint(6) NOT NULL,
  `Nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RG` char(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPF` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
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
  `Tipo` enum('super','administrador','supervisor') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodCliente`);

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
  ADD PRIMARY KEY (`CodPedido`),
  ADD KEY `FK_Supervisor_Pedido` (`CodSupervisor`),
  ADD KEY `FK_Cliente_Pedido` (`CodCliente`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`CodSupervisor`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CodUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCliente` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `CodEquipamento` smallint(6) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `CodSupervisor` smallint(6) NOT NULL AUTO_INCREMENT;

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

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_Cliente_Pedido` FOREIGN KEY (`CodCliente`) REFERENCES `cliente` (`CodCliente`),
  ADD CONSTRAINT `FK_Supervisor_Pedido` FOREIGN KEY (`CodSupervisor`) REFERENCES `supervisor` (`CodSupervisor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
