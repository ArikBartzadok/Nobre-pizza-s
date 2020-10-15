-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/10/2020 às 18:26
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_pizzaria_nobre`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `nota` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_cliente`, `nome_cliente`, `nota`, `texto`) VALUES
(3, 1, 'admin', 5, 'aaa'),
(4, 1, 'admin', 4, 'eeee'),
(5, 1, 'admin', 1, '1111'),
(6, 1, 'admin', 3, '33333'),
(7, 1, 'admin', 2, '22222'),
(8, 1, 'admin', 5, '55555'),
(9, 1, 'admin', 5, 'vvvvv');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(3, 'aaaa', '12.00', 'aaaaa', 'pizza1.png'),
(4, 'qqqq', '11.11', 'qqqq', 'pizza5.png'),
(5, 'Teste teste', '11.11', 'teste', 'pizza3.png'),
(8, 'ultima', '11.11', 'pizza 2', 'pizza2.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ranking` int(11) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`, `ranking`, `imagem`, `telefone`, `cidade`, `cep`, `rua`) VALUES
(1, 'Diogo Ferreira', 'adm@adm.com', '202cb962ac59075b964b07152d234b70', 1, 'diogo.png', '19 99999-0000', 'Campinas', '13848-072', 'Rua zzz'),
(4, 'diogo', 'diogo.santos134@etec.sp.gov.br', '202cb962ac59075b964b07152d234b70', 1, 'diogo.png', '19 00000-0000', 'Estiva Gerbi - SP', '19 000-000', 'Rua dos Cavalos'),
(22, 'Pedro Alves', 'pedro.ferreira@etec.sp.gov.br', '202cb962ac59075b964b07152d234b70', 0, 'pedro.png', '19 99999-0000', 'Mogi Guaçu', '13848-072', 'Rua xxx');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
