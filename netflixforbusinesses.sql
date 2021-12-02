-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2021 às 05:41
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `netflixforbusinesses`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `codAdmin` int(4) NOT NULL,
  `nomeAdmin` varchar(50) NOT NULL,
  `emailAdmin` varchar(60) NOT NULL,
  `senhaAdmin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilmes`
--

CREATE TABLE `tbfilmes` (
  `codFil` int(4) NOT NULL,
  `nomeFil` varchar(100) NOT NULL,
  `generoFil` varchar(500) NOT NULL,
  `duracaoFil` varchar(10) NOT NULL,
  `diretorFil` varchar(500) NOT NULL,
  `roteiristaFil` varchar(500) NOT NULL,
  `sinopseFil` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfilmes`
--

INSERT INTO `tbfilmes` (`codFil`, `nomeFil`, `generoFil`, `duracaoFil`, `diretorFil`, `roteiristaFil`, `sinopseFil`) VALUES
(12, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbseries`
--

CREATE TABLE `tbseries` (
  `codSer` int(4) NOT NULL,
  `nomeSer` varchar(100) NOT NULL,
  `generoSer` varchar(500) NOT NULL,
  `episodiosSer` int(3) NOT NULL,
  `temporadasSer` int(2) NOT NULL,
  `sinopseSer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbseries`
--

INSERT INTO `tbseries` (`codSer`, `nomeSer`, `generoSer`, `episodiosSer`, `temporadasSer`, `sinopseSer`) VALUES
(12, '', '', 0, 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`codAdmin`);

--
-- Índices para tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  ADD PRIMARY KEY (`codFil`);

--
-- Índices para tabela `tbseries`
--
ALTER TABLE `tbseries`
  ADD PRIMARY KEY (`codSer`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `codAdmin` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  MODIFY `codFil` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbseries`
--
ALTER TABLE `tbseries`
  MODIFY `codSer` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
