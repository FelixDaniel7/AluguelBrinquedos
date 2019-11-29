-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Ago-2019 às 23:41
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `login`, `senha`, `nivel`) VALUES
(1, 'Daniel', 'daniel@gmail.com', 'Daniel', 'caf1a3dfb505ffed0d024130f58c5cfa', 1);

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
  `Hora_Desmontagem` time DEFAULT NULL,
  `EnderecoMontagem` varchar(200) DEFAULT NULL,
  `PrecoFinal` decimal(8,2) DEFAULT NULL,
  `FormaPagamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CodCliente` int(11) NOT NULL,
  `CPF` char(14) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Telefone` varchar(11) DEFAULT NULL,
  `Email` varchar(70) DEFAULT NULL,
  `Senha` varchar(40) DEFAULT NULL,
  `Endereco` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CodCliente`, `CPF`, `Nome`, `Telefone`, `Email`, `Senha`, `Endereco`) VALUES
(1, '12345678912', 'Rodolfo da Silva Santos', '11976753358', 'rodolfo.santos@gmail.com', 'abc1234567', 'Rua das rosas, 485-Jardim çççãaaáááá´´aããã  ??Nemus'),
(2, '98745621365', 'Robersval Silveira Pinheiro', '11963236521', 'robersval1985_silveira@hotmail', 'jhf1234567', 'Rua 10, 265-Jd.Represa'),
(3, '111.111.111-11', 'login', '12333333333', 'login@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 'login'),
(4, '777.777.777-77', 'testetcc', '11111111111', 'testetcc@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 'testetcc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas`
--

CREATE TABLE `datas` (
  `DataDisponivel` date NOT NULL,
  `CodEquipamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Nome` varchar(20) DEFAULT NULL,
  `Descricao` varchar(100) DEFAULT NULL,
  `DataDisponivel` date DEFAULT NULL,
  `Preco` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `CodSupervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

CREATE TABLE `supervisor` (
  `CodSupervisor` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `RG` char(9) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Endereco` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`CodCliente`),
  ADD UNIQUE KEY `IDX_Email` (`Email`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD UNIQUE KEY `IDX_DataDisponivel` (`DataDisponivel`),
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
  ADD KEY `FK_Supervisor_Supervisao` (`CodSupervisor`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`CodSupervisor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `CodAluguel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  ADD CONSTRAINT `FK_Supervisor_Supervisao` FOREIGN KEY (`CodSupervisor`) REFERENCES `supervisor` (`CodSupervisor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
