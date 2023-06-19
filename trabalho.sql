-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/06/2023 às 03:11
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rua` varchar(55) DEFAULT '',
  `bairro` varchar(55) DEFAULT '',
  `cidade` varchar(55) DEFAULT '',
  `estado` varchar(55) DEFAULT '',
  `pais` varchar(55) DEFAULT '',
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `address`
--

INSERT INTO `address` (`id`, `id_user`, `rua`, `bairro`, `cidade`, `estado`, `pais`, `last_modified`) VALUES
(4, 0, 'teste3', 'teste3', 'teste3', 'teste3', 'teste3', '2023-06-19 00:58:45'),
(5, 0, 'teste', 'teste', 'teste', 'teste', '2', '2023-06-19 01:04:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `last_modified`) VALUES
(3, 'teste', 'teste@teste.com', '2023-06-17 22:00:53'),
(4, 'nvoip', 'vinicius.vilella@nvoip2.com.br', '2023-06-17 22:00:53'),
(5, 'mamede viado 2 ', 'mamede.viado@gmail.com', '2023-06-17 22:00:53'),
(6, 'mamede viado', 'mamede.viado@gmail.com', '2023-06-17 22:00:53'),
(7, 'teste 5 ', 'teste5@gmail.com', '2023-06-17 22:00:53'),
(8, 'teste 10 ', 'teste10@gmail.com', '2023-06-17 22:00:53'),
(9, 'teste11', 'teste111@gmail.com', '2023-06-17 22:00:53'),
(10, 'teste', 'viniciusvilellaaaaaaaa_fla@hotmail.com', '2023-06-17 22:00:53');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
