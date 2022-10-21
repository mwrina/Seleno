-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 20-Out-2022 às 12:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `seleno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `preco_copiado` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `dia_pedido` date NOT NULL DEFAULT current_timestamp(),
  `hora_pedido` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(150) NOT NULL,
  `estoque_produto` int(3) NOT NULL,
  `valor_produto` float NOT NULL,
  `tamanho_produto` varchar(3) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `desconto_produto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `estoque_produto`, `valor_produto`, `tamanho_produto`, `genero`, `desconto_produto`) VALUES
(1, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '33', 'u', 1),
(2, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '34', 'u', 1),
(3, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '35', 'u', 1),
(4, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '36', 'u', 1),
(5, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '37', 'u', 1),
(6, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '38', 'u', 1),
(7, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '39', 'u', 1),
(8, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '40', 'u', 1),
(9, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '41', 'u', 1),
(10, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '42', 'u', 1),
(11, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '43', 'u', 1),
(12, 'TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO', 999, 346, '44', 'u', 1),
(13, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '33', 'u', 1),
(14, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '34', 'u', 1),
(15, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '35', 'u', 1),
(16, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '36', 'u', 1),
(17, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '37', 'u', 1),
(18, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '38', 'u', 1),
(19, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '39', 'u', 1),
(20, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '40', 'u', 1),
(21, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '41', 'u', 1),
(22, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '42', 'u', 1),
(23, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '43', 'u', 1),
(24, 'NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO', 999, 1050, '44', 'u', 1),
(25, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '33', 'u', 1),
(26, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '34', 'u', 1),
(27, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '35', 'u', 1),
(28, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '36', 'u', 1),
(29, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '37', 'u', 1),
(30, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '38', 'u', 1),
(31, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '39', 'u', 1),
(32, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '40', 'u', 1),
(33, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '41', 'u', 1),
(34, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '42', 'u', 1),
(35, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '43', 'u', 1),
(36, 'NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL', 999, 375, '44', 'u', 1),
(37, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '33', 'u', 1),
(38, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '34', 'u', 1),
(39, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '35', 'u', 1),
(40, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '36', 'u', 1),
(41, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '37', 'u', 1),
(42, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '38', 'u', 1),
(43, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '39', 'u', 1),
(44, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '40', 'u', 1),
(45, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '41', 'u', 1),
(46, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '42', 'u', 1),
(47, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '43', 'u', 1),
(48, 'NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO', 999, 1155, '44', 'u', 1),
(49, 'NIKE BRANCO COM VERMELHO', 999, 960, '33', 'u', 1),
(50, 'NIKE BRANCO COM VERMELHO', 999, 960, '34', 'u', 1),
(51, 'NIKE BRANCO COM VERMELHO', 999, 960, '35', 'u', 1),
(52, 'NIKE BRANCO COM VERMELHO', 999, 960, '36', 'u', 1),
(53, 'NIKE BRANCO COM VERMELHO', 999, 960, '37', 'u', 1),
(54, 'NIKE BRANCO COM VERMELHO', 999, 960, '38', 'u', 1),
(55, 'NIKE BRANCO COM VERMELHO', 999, 960, '39', 'u', 1),
(56, 'NIKE BRANCO COM VERMELHO', 999, 960, '40', 'u', 1),
(57, 'NIKE BRANCO COM VERMELHO', 999, 960, '41', 'u', 1),
(58, 'NIKE BRANCO COM VERMELHO', 999, 960, '42', 'u', 1),
(59, 'NIKE BRANCO COM VERMELHO', 999, 960, '43', 'u', 1),
(60, 'NIKE BRANCO COM VERMELHO', 999, 960, '44', 'u', 1),
(61, 'NIKE SB FORCE 58 PRETO', 999, 279, '33', 'u', 1),
(62, 'NIKE SB FORCE 58 PRETO', 999, 279, '34', 'u', 1),
(63, 'NIKE SB FORCE 58 PRETO', 999, 279, '35', 'u', 1),
(64, 'NIKE SB FORCE 58 PRETO', 999, 279, '36', 'u', 1),
(65, 'NIKE SB FORCE 58 PRETO', 999, 279, '37', 'u', 1),
(66, 'NIKE SB FORCE 58 PRETO', 999, 279, '38', 'u', 1),
(67, 'NIKE SB FORCE 58 PRETO', 999, 279, '39', 'u', 1),
(68, 'NIKE SB FORCE 58 PRETO', 999, 279, '40', 'u', 1),
(69, 'NIKE SB FORCE 58 PRETO', 999, 279, '41', 'u', 1),
(70, 'NIKE SB FORCE 58 PRETO', 999, 279, '42', 'u', 1),
(71, 'NIKE SB FORCE 58 PRETO', 999, 279, '43', 'u', 1),
(72, 'NIKE SB FORCE 58 PRETO', 999, 279, '44', 'u', 1),
(73, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '33', 'u', 1),
(74, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '34', 'u', 1),
(75, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '35', 'u', 1),
(76, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '36', 'u', 1),
(77, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '37', 'u', 1),
(78, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '38', 'u', 1),
(79, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '39', 'u', 1),
(80, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '40', 'u', 1),
(81, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '41', 'u', 1),
(82, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '42', 'u', 1),
(83, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '43', 'u', 1),
(84, 'ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1', 999, 319.99, '44', 'u', 1),
(85, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '33', 'u', 1),
(86, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '34', 'u', 1),
(87, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '35', 'u', 1),
(88, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '36', 'u', 1),
(89, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '37', 'u', 1),
(90, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '38', 'u', 1),
(91, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '39', 'u', 1),
(92, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '40', 'u', 1),
(93, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '41', 'u', 1),
(94, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '42', 'u', 1),
(95, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '43', 'u', 1),
(96, 'ADIDAS X_PLR CINZA 1', 999, 269.72, '44', 'u', 1),
(97, 'CAMISETA VANS EASY DECO', 999, 165.5, 'pp', 'f', 1),
(98, 'CAMISETA VANS EASY DECO', 999, 165.5, 'p', 'f', 1),
(99, 'CAMISETA VANS EASY DECO', 999, 165.5, 'm', 'f', 1),
(100, 'CAMISETA VANS EASY DECO', 999, 165.5, 'g', 'f', 1),
(101, 'CAMISETA VANS EASY DECO', 999, 165.5, 'gg', 'f', 1),
(102, 'CAMISETA VANS EASY DECO', 999, 165.5, 'xgg', 'f', 1),
(103, 'CAMISETA PUMA HC POCKET MASCULINA', 999, 80, 'pp', 'm', 1),
(104, 'CAMISETA PUMA HC POCKET MASCULINA', 999, 80, 'p', 'm', 1),
(105, 'CAMISETA PUMA HC POCKET MASCULINA', 999, 80, 'm', 'm', 1),
(106, 'CAMISETA PUMA HC POCKET MASCULINA', 999, 80, 'g', 'm', 1),
(107, 'CAMISETA PUMA HC POCKET MASCULINA', 999, 80, 'gg', 'm', 1),
(108, 'CAMISETA PUMA HC POCKET MASCULINA', 999, 80, 'xgg', 'm', 1),
(109, 'CAMISETA PUMA RARE BASKETBALL MASCULINA', 999, 127.5, 'pp', 'm', 1),
(110, 'CAMISETA PUMA RARE BASKETBALL MASCULINA', 999, 127.5, 'p', 'm', 1),
(111, 'CAMISETA PUMA RARE BASKETBALL MASCULINA', 999, 127.5, 'm', 'm', 1),
(112, 'CAMISETA PUMA RARE BASKETBALL MASCULINA', 999, 127.5, 'g', 'm', 1),
(113, 'CAMISETA PUMA RARE BASKETBALL MASCULINA', 999, 127.5, 'gg', 'm', 1),
(114, 'CAMISETA PUMA RARE BASKETBALL MASCULINA', 999, 127.5, 'xgg', 'm', 1),
(115, 'CAMISETA VANS FLOWER POWER - OFF THE WALL', 999, 170, 'pp', 'f', 1),
(116, 'CAMISETA VANS FLOWER POWER - OFF THE WALL', 999, 170, 'p', 'f', 1),
(117, 'CAMISETA VANS FLOWER POWER - OFF THE WALL', 999, 170, 'm', 'f', 1),
(118, 'CAMISETA VANS FLOWER POWER - OFF THE WALL', 999, 170, 'g', 'f', 1),
(119, 'CAMISETA VANS FLOWER POWER - OFF THE WALL', 999, 170, 'gg', 'f', 1),
(120, 'CAMISETA VANS FLOWER POWER - OFF THE WALL', 999, 170, 'xgg', 'f', 1),
(121, 'CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW', 999, 200, 'pp', 'm', 0),
(122, 'CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW', 999, 200, 'p', 'm', 0),
(123, 'CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW', 999, 200, 'm', 'm', 0),
(124, 'CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW', 999, 200, 'g', 'm', 0),
(125, 'CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW', 999, 200, 'gg', 'm', 0),
(126, 'CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW', 999, 200, 'xgg', 'm', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nome_usu` varchar(50) NOT NULL,
  `sobrenome_usu` varchar(100) NOT NULL,
  `nasc_usu` varchar(10) NOT NULL,
  `cpf_usu` int(11) NOT NULL,
  `tel_usu` int(11) NOT NULL,
  `cep_usu` int(9) NOT NULL,
  `end_usu` varchar(150) NOT NULL,
  `complemento_usu` varchar(100) NOT NULL,
  `estado_usu` varchar(2) NOT NULL,
  `cidade_usu` varchar(70) NOT NULL,
  `email_usu` varchar(150) NOT NULL,
  `senha_usu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nome_usu`, `sobrenome_usu`, `nasc_usu`, `cpf_usu`, `tel_usu`, `cep_usu`, `end_usu`, `complemento_usu`, `estado_usu`, `cidade_usu`, `email_usu`, `senha_usu`) VALUES
(3, 'marina', 'rosa oliveira', '2005-12-27', 123, 456, 789, 'abc', 'def', 'sc', 'joinville', '1@a', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `item_pedido` (`id_pedido`),
  ADD KEY `item_produto` (`id_produto`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pedido_usu` (`id_usu`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `item_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_usu` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
