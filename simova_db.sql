-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2023 às 06:03
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
-- Banco de dados: `simova.db`
--
CREATE DATABASE IF NOT EXISTS `simova.db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simova.db`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `total_time` datetime DEFAULT NULL,
  `id_employe` bigint(20) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `description_work` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `appointment`
--

INSERT INTO `appointment` (`id`, `create_date`, `update_date`, `start_date`, `end_date`, `total_time`, `id_employe`, `enabled`, `description_work`) VALUES
(1, '2023-10-27 01:51:33', '0000-00-00 00:00:00', '2023-10-27 01:51:33', '0000-00-00 00:00:00', '2023-10-27 01:51:32', 1, 0, 'ajustando o primeiro comentari'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 1, 0, 'Testando dois campos'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 4, 0, 'Juliana'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 0, 'Ajustando Sistema com Infra _v'),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, 'descrição nova');

-- --------------------------------------------------------

--
-- Estrutura para tabela `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `employee`
--

INSERT INTO `employee` (`id`, `name`, `code`) VALUES
(1, 'Luiz ', '1'),
(2, 'Felipe', '2'),
(3, 'Almeida', '3'),
(4, 'Elenice', '4'),
(5, 'Matheus', '5');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
