-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2020 às 22:21
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hotel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` int(50) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sexo`, `telefone`) VALUES
(1, 'joao eduardo', 'm', '18998051646'),
(2, 'vinicius perera', 'm', '18997960034'),
(3, 'joao eduardo', 'm', '18998051646'),
(4, 'vinicius perera', 'm', '18997960034'),
(5, 'joao', 'm', '18998051646'),
(7, 'joao', 'm', '18998051646'),
(9, 'vini', 'm', '18996554871');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estadia`
--

CREATE TABLE `estadia` (
  `idEstadia` int(11) NOT NULL,
  `cpfCliente` int(11) NOT NULL,
  `nQuarto` int(11) NOT NULL,
  `valor` double NOT NULL,
  `dia` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estadia`
--

INSERT INTO `estadia` (`idEstadia`, `cpfCliente`, `nQuarto`, `valor`, `dia`, `data`) VALUES
(1, 1, 1, 50, 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `numero` int(5) NOT NULL,
  `andar` int(2) NOT NULL,
  `descquarto` varchar(50) NOT NULL,
  `valor` tinyint(1) NOT NULL,
  `ocupmax` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`numero`, `andar`, `descquarto`, `valor`, `ocupmax`) VALUES
(1, 1, 'suite master blaster premium diamond presidencial', 0, 10),
(2, 5, 'suite master blaster premium diamond presidencial', 1, 2),
(3, 10, 'suite de pobre de marré marré marré', 0, 2),
(4, 10, 'suite de pobre de marré marré marré', 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `funcao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nome`, `funcao`) VALUES
(1, 'vinicius@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'vinicius', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `estadia`
--
ALTER TABLE `estadia`
  ADD PRIMARY KEY (`idEstadia`);

--
-- Índices para tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`numero`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cpf` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `estadia`
--
ALTER TABLE `estadia`
  MODIFY `idEstadia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `numero` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
