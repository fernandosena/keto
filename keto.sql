-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2021 às 03:16
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `keto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `obter_dieta`
--

CREATE TABLE `obter_dieta` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `current_i_weight` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `height_i_ft` int(11) NOT NULL,
  `height_i_inh` int(11) NOT NULL,
  `imperial_metric` int(11) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `meal_tag_meat` varchar(255) NOT NULL,
  `meal_tag_other` varchar(25) NOT NULL,
  `meal_tag_veg` varchar(255) NOT NULL,
  `metric` varchar(255) NOT NULL,
  `target_i_weight` int(11) NOT NULL,
  `target_weight` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `obter_dieta`
--

INSERT INTO `obter_dieta` (`id`, `link`, `age`, `current_i_weight`, `gender`, `height`, `height_i_ft`, `height_i_inh`, `imperial_metric`, `meal`, `meal_tag_meat`, `meal_tag_other`, `meal_tag_veg`, `metric`, `target_i_weight`, `target_weight`, `weight`) VALUES
(1, 'N_S4Kxr_fbXbo8c32wnkPlMwH8C7K1', 22, 89, 'Male', 180, 5, 0, 0, 'bacon,pork,zucchini,avocado,cheese,coconut', 'bacon,pork', 'cheese,coconut', 'zucchini,avocado', 'false', 89, 40, 40),
(2, 'uPtncf2sN9ImR8ry1o8HoV3JQxo@Y_', 22, 245, 'Male', 180, 5, 0, 0, 'no-meat,avocado,coconut', 'no-meat', 'coconut', 'avocado', 'false', 178, 80, 110);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `obter_dieta`
--
ALTER TABLE `obter_dieta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `obter_dieta`
--
ALTER TABLE `obter_dieta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
