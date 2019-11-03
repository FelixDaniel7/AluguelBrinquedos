-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Out-2019 às 00:46
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `CodAdministrador` int(11) NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Login` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Senha` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NivelAcesso` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `CodAluguel` int(11) NOT NULL,
  `CodCliente` int(11) NOT NULL,
  `CodEquipamento` int(11) DEFAULT NULL,
  `CodSupervisao` int(11) DEFAULT NULL,
  `DataAluguel` datetime DEFAULT NULL,
  `Data_de_uso` date DEFAULT NULL,
  `HorasAlugado` time DEFAULT NULL,
  `Data_Hora_Montagem` datetime DEFAULT NULL,
  `Data_Hora_Desmontagem` time DEFAULT NULL,
  `EnderecoMontagem` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrecoFinal` decimal(8,2) DEFAULT NULL,
  `FormaPagamento` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CodCliente` int(11) NOT NULL,
  `CPF` char(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Login` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Senha` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NivelAcesso` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CodCliente`, `CPF`, `Nome`, `Telefone`, `Email`, `Login`, `Senha`, `Endereco`, `NivelAcesso`) VALUES
(1, '12345678912', 'Rodolfo da Silva Santos', '11976753358', 'rodolfo.santos@gmail.com', NULL, 'abc1234567', 'Rua das rosas, 485-Jardim çççãaaáááá´´aããã  ??Nemus', NULL),
(2, '98745621365', 'Robersval Silveira Pinheiro', '11963236521', 'robersval1985_silveira@hotmail', NULL, 'jhf1234567', 'Rua 10, 265-Jd.Represa', NULL),
(3, '12345678912', 'Rodolfo da Silva Santos', '11976753358', 'rodolfo.santos@gmail.com', NULL, 'abc1234567', 'Rua das rosas, 485-Jardim çççãaaáááá´´aããã  ??Nemus', NULL),
(4, '98745621365', 'Robersval Silveira Pinheiro', '11963236521', 'robersval1985_silveira@hotmail', NULL, 'jhf1234567', 'Rua 10, 265-Jd.Represa', NULL),
(5, '12345678912', 'Rodolfo da Silva Santos', '11976753358', 'rodolfo.santos@gmail.com', NULL, 'abc1234567', 'Rua das rosas, 485-Jardim çççãaaáááá´´aããã  ??Nemus', NULL),
(6, '98745621365', 'Robersval Silveira Pinheiro', '11963236521', 'robersval1985_silveira@hotmail', NULL, 'jhf1234567', 'Rua 10, 265-Jd.Represa', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas`
--

CREATE TABLE `datas` (
  `DataDisponivel` date NOT NULL,
  `CodEquipamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `datas`
--

INSERT INTO `datas` (`DataDisponivel`, `CodEquipamento`) VALUES
('2019-08-06', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `CodEquipamento` int(11) NOT NULL,
  `Nome` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Descricao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DataDisponivel` date DEFAULT NULL,
  `Preco` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`CodEquipamento`, `Nome`, `Descricao`, `DataDisponivel`, `Preco`) VALUES
(1, 'Piscina de Bolinhas', '100m X 200m', NULL, '80.00'),
(2, 'Cama elástica', '165m X 298m Material Super Elastico', NULL, '120.00'),
(3, 'Castelo inflável', '138m X 120m Anti-furo', NULL, '150.00'),
(4, 'Alogão Doce', '3 velocidades', NULL, '100.00'),
(5, 'blaaaaáaaãaaaa', '3 velocidades', NULL, '15500.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisao`
--

CREATE TABLE `supervisao` (
  `CodSupervisao` int(11) NOT NULL,
  `TipoSupervisao` bit(1) DEFAULT NULL,
  `ValorSupervisao` decimal(8,2) DEFAULT NULL,
  `CodSupervisor` int(11) NOT NULL,
  `CodEquipamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

CREATE TABLE `supervisor` (
  `CodSupervisor` int(11) NOT NULL,
  `Nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RG` char(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPF` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Login` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Senha` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`CodAdministrador`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`CodAluguel`),
  ADD KEY `FK_Cliente_Aluguel` (`CodCliente`),
  ADD KEY `FK_Equipamento_Aluguel` (`CodEquipamento`),
  ADD KEY `FK_Supervisao_Aluguel` (`CodSupervisao`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodCliente`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD KEY `IDX_DataDisponivel` (`DataDisponivel`),
  ADD KEY `FK_Equipamento_Datas` (`CodEquipamento`);

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`CodEquipamento`),
  ADD KEY `FK__Datas_Equipamento` (`DataDisponivel`);

--
-- Indexes for table `supervisao`
--
ALTER TABLE `supervisao`
  ADD PRIMARY KEY (`CodSupervisao`),
  ADD KEY `FK_Supervisor_Supervisao` (`CodSupervisor`),
  ADD KEY `FK_Equipamentos_Supervisao` (`CodEquipamento`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`CodSupervisor`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `CodAdministrador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `CodAluguel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `CodEquipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `supervisao`
--
ALTER TABLE `supervisao`
  MODIFY `CodSupervisao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `CodSupervisor` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `FK_Cliente_Aluguel` FOREIGN KEY (`CodCliente`) REFERENCES `cliente` (`CodCliente`),
  ADD CONSTRAINT `FK_Equipamento_Aluguel` FOREIGN KEY (`CodEquipamento`) REFERENCES `equipamento` (`CodEquipamento`),
  ADD CONSTRAINT `FK_Supervisao_Aluguel` FOREIGN KEY (`CodSupervisao`) REFERENCES `supervisao` (`CodSupervisao`);

--
-- Limitadores para a tabela `datas`
--
ALTER TABLE `datas`
  ADD CONSTRAINT `FK_Equipamento_Datas` FOREIGN KEY (`CodEquipamento`) REFERENCES `equipamento` (`CodEquipamento`);

--
-- Limitadores para a tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `FK__Datas_Equipamento` FOREIGN KEY (`DataDisponivel`) REFERENCES `datas` (`DataDisponivel`);

--
-- Limitadores para a tabela `supervisao`
--
ALTER TABLE `supervisao`
  ADD CONSTRAINT `FK_Equipamentos_Supervisao` FOREIGN KEY (`CodEquipamento`) REFERENCES `equipamento` (`CodEquipamento`),
  ADD CONSTRAINT `FK_Supervisor_Supervisao` FOREIGN KEY (`CodSupervisor`) REFERENCES `supervisor` (`CodSupervisor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
