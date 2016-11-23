-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 23-Nov-2016 às 16:02
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listasupero`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `LISTA`
--

CREATE TABLE `LISTA` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `LISTA`
--

INSERT INTO `LISTA` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'Intoducao', 'teste', '2016-11-23 14:00:51'),
(3, 'TESTE PHP', 'Teste Supero', '2016-11-23 14:29:18'),
(4, 'Realizando novas tarefas', 'introducao de novas tarefas pela supero', '2016-11-23 15:02:00'),
(5, 'Novo teste supero', 'Novo teste supero com PHP', '2016-11-23 14:44:45'),
(6, 'Novo teste ', 'Novo teste supero com MYSQL', '2016-11-23 14:44:45'),
(7, 'supero', 'supero com PHP', '2016-11-23 14:44:45'),
(8, 'Tarefas a realizar', 'Descrever novas tarefas', '2016-11-23 14:53:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefasSupero`
--

CREATE TABLE `tarefasSupero` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Not completed',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefasSupero`
--

INSERT INTO `tarefasSupero` (`id`, `name`, `description`, `status`, `created_at`) VALUES
(1, ' testando tarefa afaf', 'nova tarefa inserida teste', 'Completo', '2016-11-23 18:00:26'),
(22, 'novo testa supero', ' ofhauehauifh atualizando', 'Not completed', '2016-11-23 17:32:03'),
(27, 'Teste 15h', 'faheuiaheif', 'Not completed', '2016-11-23 17:03:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LISTA`
--
ALTER TABLE `LISTA`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tarefasSupero`
--
ALTER TABLE `tarefasSupero`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LISTA`
--
ALTER TABLE `LISTA`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tarefasSupero`
--
ALTER TABLE `tarefasSupero`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
