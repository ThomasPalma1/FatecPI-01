-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Nov-2020 às 21:01
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
-- Banco de dados: `bd_pi01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `titulo_produto` varchar(250) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `metodopag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id`, `titulo_produto`, `preco`, `parcelas`, `metodopag`) VALUES
(46, 0, '', '', 0, ''),
(47, 0, '', '', 0, ''),
(48, 0, '', '', 0, ''),
(49, 0, '', '', 0, ''),
(50, 0, '', '', 0, ''),
(51, 0, '', '', 0, ''),
(52, 0, '', '', 0, ''),
(53, 0, '', '', 0, ''),
(54, 1, 'Estrutura do balanço blabalalal', 'R$50,00', 1, 'cartao'),
(55, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(56, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(57, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(58, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(59, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(60, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(61, 0, 'Estrutura do balanço blabalalal', 'R$50,00', 0, 'boleto'),
(62, 1, 'Estrutura do balanço blabalalal', 'R$50,00', 1, 'cartao'),
(63, 1, 'Estrutura do balanço blabalalal', 'R$50,00', 1, 'cartao'),
(64, 1, 'Estrutura do balanço blabalalal', 'R$50,00', 1, 'cartao'),
(65, 1, 'Estrutura do balanço blabalalal', 'R$50,00', 1, 'cartao'),
(66, 1, 'teste', '40', 1, 'cartao'),
(67, 1, 'teste', '40', 1, 'cartao'),
(68, 1, 'teste', '40', 1, 'cartao'),
(69, 1, 'teste', '40', 1, 'cartao'),
(70, 1, 'teste', '40', 1, 'cartao'),
(71, 0, 'teste', '40', 0, 'boleto'),
(72, 0, 'teste', '40', 0, 'boleto'),
(73, 0, 'teste', '40', 0, 'boleto'),
(74, 31, 'teste', '40', 0, 'boleto'),
(75, 31, 'teste', '40', 0, 'boleto'),
(76, 31, 'teste', '40', 0, 'boleto'),
(77, 31, 'teste', '40', 0, 'boleto'),
(78, 31, 'teste', '40', 1, 'cartao'),
(79, 31, 'teste', '40', 1, 'cartao'),
(80, 31, 'teste', '40', 1, 'cartao'),
(81, 31, 'teste', '40', 1, 'cartao'),
(82, 31, 'teste', '40', 1, 'cartao'),
(83, 31, 'teste', '40', 1, 'cartao'),
(84, 31, 'teste', '40', 0, 'boleto'),
(85, 31, 'teste', '40', 0, 'boleto'),
(86, 31, 'teste', '40', 1, 'cartao'),
(87, 31, 'teste', '40', 0, 'boleto'),
(88, 31, 'teste', '40', 1, 'cartao'),
(89, 31, 'teste', '40', 0, 'boleto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
