-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2021 às 01:17
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_extintores`
--

-- --------------------------------------------controle_extintores------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `ext_ID` int(11) NOT NULL,
  `local` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `capacidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`ext_ID`, `local`, `tipo`, `capacidade`) VALUES
(430, '1 andar', 'Agua', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inspecoes`
--

CREATE TABLE `inspecoes` (
  `ext_ID` int(11) DEFAULT NULL,
  `data_inp` date DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`ext_ID`);

--
-- Índices para tabela `inspecoes`
--
ALTER TABLE `inspecoes`
  ADD KEY `ext_ID` (`ext_ID`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `inspecoes`
--
ALTER TABLE `inspecoes`
  ADD CONSTRAINT `inspecoes_ibfk_1` FOREIGN KEY (`ext_ID`) REFERENCES `equipamentos` (`ext_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
