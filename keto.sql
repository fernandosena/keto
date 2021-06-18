-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2021 às 23:47
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `calorias` float(10,2) NOT NULL,
  `tempo_preparo` int(11) DEFAULT NULL,
  `serve` int(11) NOT NULL,
  `proteinas` float(10,2) NOT NULL,
  `gorduras` float(10,2) NOT NULL,
  `carboidratos` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`id`, `titulo`, `imagem`, `calorias`, `tempo_preparo`, `serve`, `proteinas`, `gorduras`, `carboidratos`) VALUES
(1, 'Matcha Breakfast Bowl', 'https://www.customketodiet.com/frontend/recipes/800/n43AWZqyk_FY.png', 302.00, 10, 1, 10.00, 20.00, 3.00),
(2, 'Salada de Chucrute', 'https://www.customketodiet.com/frontend/recipes/300/45g4GeXqz9IF.jpg', 153.00, 10, 1, 9.60, 10.30, 5.40),
(3, 'Bifes de Tofu Teriyaki', 'https://www.customketodiet.com/frontend/recipes/300/eBBLm1sUBefY.jpg', 732.00, 20, 1, 50.00, 56.00, 16.00),
(4, 'Mousse De Chocolate Keto', 'https://www.customketodiet.com/frontend/recipes/300/U4YMwowe_l15.jpg', 526.00, 15, 1, 6.00, 50.00, 10.00),
(5, 'Minuto Tofu Scramble', 'https://www.customketodiet.com/frontend/recipes/300/R7SNNL5V_oxz.jpg', 153.00, 3, 1, 13.00, 11.00, 5.00),
(6, 'Pudim Berry Keto Chia', 'https://www.customketodiet.com/frontend/recipes/300/lbZjTDN0kuUD.jpg', 393.00, 25, 1, 7.80, 36.60, 8.00),
(7, 'Manteiga de Limão Salmão com Espargos', 'https://www.customketodiet.com/frontend/recipes/300/FC9g6MbzZkYv.jpg', 421.00, 30, 1, 23.80, 33.00, 7.00),
(8, 'Salada de Frango com Mel e Mostarda', 'https://www.customketodiet.com/frontend/recipes/300/InYsmM_a92fR.jpg', 324.00, 5, 1, 20.00, 23.00, 7.00),
(9, 'Frango com Prato de Couve Fresca', 'https://www.customketodiet.com/frontend/recipes/300/KZdBPqyAy4oH.png', 1041.00, 5, 1, 48.00, 91.00, 7.00),
(10, 'Roll-ups de frutas', 'https://www.customketodiet.com/frontend/recipes/800/5FoFFBr5mfet.png', 20.00, NULL, 8, 0.25, 0.13, 2.99),
(11, 'Repolho refogado', 'https://www.customketodiet.com/frontend/recipes/300/Q-ampheFPxql.jpg', 547.00, 130, 1, 37.10, 41.00, 7.80),
(12, 'Keto Bacon Sushi', 'https://www.customketodiet.com/frontend/recipes/300/J906RMHHOhXr.jpg', 504.00, 10, 1, 14.70, 46.90, 5.90);

-- --------------------------------------------------------

--
-- Estrutura da tabela `preparacao`
--

CREATE TABLE `preparacao` (
  `id` int(11) NOT NULL,
  `prato_id` int(11) NOT NULL,
  `etapa` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `preparacao`
--

INSERT INTO `preparacao` (`id`, `prato_id`, `etapa`, `descricao`, `imagem`) VALUES
(1, 6, 1, 'Em uma tigela pequena, adicione o leite de coco.', 'https://www.customketodiet.com/frontend/recipes/300/8UCspNZCRg5z.jpg'),
(2, 6, 2, 'Em seguida, adicione sementes de chia, nibs de cacau cru e canela em pó.', 'https://www.customketodiet.com/frontend/recipes/300/e7EAfDqSU1D4.jpg'),
(3, 6, 3, 'Usando uma espátula, misture os ingredientes até incorporar bem.', 'https://www.customketodiet.com/frontend/recipes/300/tsNSku54Ok1J.jpg'),
(4, 6, 4, 'Leve à geladeira por 15 minutos e sirva com mirtilos frescos e nibs de cacau crus.', 'https://www.customketodiet.com/frontend/recipes/300/CegPlxKU120-.jpg'),
(5, 1, 1, 'Misture as sementes de chia com o leite, matcha, adoçante e sal de sua escolha. Cubra e leve à geladeira durante a noite.', ''),
(6, 1, 2, 'Adicione mais líquido conforme necessário para atingir a consistência desejada (opcional). Adoçar a gosto e servir com coberturas de sua escolha (coco ralado, amêndoas ou morangos frescos.', ''),
(7, 8, 1, 'Misture todos os ingredientes do molho (mostarda, mel, vinagre de cidra, azeite, pimenta e sal) em uma tigela.', 'https://www.customketodiet.com/frontend/recipes/300/FxU3E5Xcb1qc.jpg'),
(8, 8, 2, 'Misture todos os ingredientes restantes.', 'https://www.customketodiet.com/frontend/recipes/300/jv8OkJaGtIap.jpg'),
(10, 9, 1, 'Desfie o repolho com uma faca afiada ou bandolim e coloque em um prato.', ''),
(11, 9, 2, 'Corte a cebola em fatias finas e coloque no prato, junto com o frango no espeto e uma boa quantidade de maionese.', ''),
(12, 9, 3, 'Regue o repolho com azeite e acrescente um pouco de sal e pimenta a gosto.', ''),
(13, 10, 1, 'Bata as frutas vermelhas e o eritritol até ficar homogêneo. Retire as sementes do purê usando uma peneira.', ''),
(14, 10, 2, 'Adicione papel manteiga ou tapete de cozimento em uma assadeira. Alise o purê na bandeja da maneira mais uniforme possível.', ''),
(15, 10, 3, 'Pré-aqueça o forno a 140 graus ou a temperatura mais baixa possível. Asse a fruta por 2 a 4 horas ou até que o centro da bandeja não esteja mais pegajoso ao toque. Se possível, deixe a porta do forno ligeiramente aberta. Verifique a fruta a cada 30 minutos enquanto assa.', ''),
(16, 10, 4, 'Retire os couros das frutas com cuidado da assadeira e corte no formato desejado. Não se preocupe se estiver seco, ficará pegajoso durante a noite. Enrole usando pedaços de pergaminho ou papel manteiga para evitar que os couros das frutas grudem. Se você usou papel manteiga para assar, você pode simplesmente cortar o papel.', ''),
(17, 11, 1, 'Em uma panela, adicione água e adicione os pedaços de bunda de porco. Deixe ferver por 1 hora e 30 minutos.', 'https://www.customketodiet.com/frontend/recipes/300/Bf7I_ZeNMj2q.jpg'),
(18, 11, 2, 'Depois que a carne estiver bem cozida em uma panela, adicione óleo de cozinha.', 'https://www.customketodiet.com/frontend/recipes/300/oVa9y64teyng.jpg'),
(19, 11, 3, 'Adicione a carne e cozinhe até dourar, 5 minutos.', 'https://www.customketodiet.com/frontend/recipes/300/KVCkVZlg4Koc.jpg'),
(20, 11, 4, 'Adicione as cenouras e cozinhe por 5 minutos.', 'https://www.customketodiet.com/frontend/recipes/300/XBHhMV-QrdQO.jpg'),
(21, 11, 5, 'Agora adicione as fatias de pimentão verde e vermelho.\r\n', 'https://www.customketodiet.com/frontend/recipes/300/qrlotXrP2RPJ.jpg'),
(22, 11, 6, 'Adicione as sementes de gergelim e cozinhe por 10 minutos.', 'https://www.customketodiet.com/frontend/recipes/300/C5qDK6z4qPAI.jpg'),
(23, 11, 7, 'Por fim, acrescente o repolho picado.', 'https://www.customketodiet.com/frontend/recipes/300/i3D3c-b4dFlV.jpg'),
(24, 11, 8, 'Tempere com o gengibre e cozinhe até ficar macio, cerca de 10 minutos. Sirva e divirta-se!', 'https://www.customketodiet.com/frontend/recipes/300/Oh6RX5ZMN4EM.jpg'),
(25, 12, 1, 'Prepare todos os ingredientes necessários.', 'https://www.customketodiet.com/frontend/recipes/300/kSpD05CDYMv3.jpg'),
(26, 12, 2, 'Espalhe o cream cheese sobre as fatias de bacon.', 'https://www.customketodiet.com/frontend/recipes/300/NGgsMmND2bH2.jpg'),
(27, 12, 3, 'Adicione palitos de pepino no lado direito do bacon.', 'https://www.customketodiet.com/frontend/recipes/300/q_Tl3ESf86kk.jpg'),
(28, 12, 4, 'Em seguida, adicione as cenouras.', 'https://www.customketodiet.com/frontend/recipes/300/VLCgcIPJMh6R.jpg'),
(29, 12, 5, 'Lentamente, enrole o bacon e prenda com um palito.', 'https://www.customketodiet.com/frontend/recipes/300/_yzA4Zx0Dnez.jpg'),
(30, 12, 6, 'Repita o mesmo procedimento com o resto das fatias de bacon. Cubra com sementes de gergelim e sirva.', 'https://www.customketodiet.com/frontend/recipes/300/UoeinGOgxse4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `prato_id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `prato_id`, `descricao`) VALUES
(1, 6, '1 colher de sopa de Nibs de cacau cru'),
(2, 6, '2 colheres de sopa de sementes de chia'),
(3, 6, '0,5 xícara de leite de coco'),
(4, 6, '0,25 colher de chá de canela em pó'),
(5, 6, '0,25 xícara de mirtilos'),
(6, 1, '2 xícaras de leite de coco (ou leite de amêndoa)'),
(7, 1, '4 colheres de sopa de sementes de chia'),
(8, 1, '1-2 colheres de chá de pó de matcha'),
(9, 1, 'gotas de estévia (baunilha)'),
(10, 1, 'sal (rosa himalaia, pitada)'),
(11, 8, '1 xícara de alface romana (ralada)'),
(12, 8, '2 colheres de chá de mostarda'),
(13, 8, '1 colher de chá de mel sem açúcar'),
(14, 8, '1 colher de chá de vinagre de maçã'),
(15, 8, '1 colher de sopa de azeite'),
(16, 8, 'pitada de sal e pimenta'),
(17, 8, '0,5 xícara de frango assado (em cubos)'),
(18, 8, '0,25 tomate cereja (dividido pela metade)'),
(19, 9, '98 g de repolho (fresco)'),
(20, 9, 'sal e pimenta preta a gosto'),
(21, 9, '225 g de frango assado'),
(22, 9, '0,25 cebola roxa'),
(23, 9, '0,5 colher de sopa de azeite'),
(24, 9, '0,25 xícara de maionese'),
(25, 10, '2 xícaras de frutas vermelhas'),
(26, 10, '3 colheres de sopa de eritritol'),
(27, 11, '140 g de bumbum de porco (cortado em pedaços)'),
(28, 11, '2 colheres de sopa de óleo de cozinha'),
(29, 11, '1 xícara de repolho'),
(30, 11, '1 colher de chá de sementes de gergelim'),
(31, 11, '0,25 Cenouras (cortadas em tiras)'),
(32, 11, '0,25 pimentão verde (cortado em tiras)'),
(33, 11, '0,25 pimentão vermelho (cortado em tiras)'),
(34, 11, '0,5 colher de chá de gengibre'),
(35, 11, 'sal e pimenta preta a gosto'),
(36, 12, '4 fatias de bacon (frito)'),
(37, 12, '15 g de queijo cremoso'),
(38, 12, '15 g de queijo cremoso'),
(39, 12, '25 g de cenouras (em palitos)'),
(40, 12, '1 colher de chá de sementes de gergelim');

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
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD UNIQUE KEY `imagem` (`imagem`);

--
-- Índices para tabela `preparacao`
--
ALTER TABLE `preparacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `obter_dieta`
--
ALTER TABLE `obter_dieta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `preparacao`
--
ALTER TABLE `preparacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
