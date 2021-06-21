-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2021 às 03:16
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
(12, 'Keto Bacon Sushi', 'https://www.customketodiet.com/frontend/recipes/300/J906RMHHOhXr.jpg', 504.00, 10, 1, 14.70, 46.90, 5.90),
(13, 'Brócolis e Cheddar Frittata', 'https://www.customketodiet.com/frontend/recipes/300/eAptkDVwFIFQ.jpg', 377.00, 5, 0, 24.00, 30.00, 2.00),
(15, 'Salmão com Pesto de Manjericão Espesso', 'https://www.customketodiet.com/frontend/recipes/300/HurveSB9uT0j.jpg', 607.00, 30, 0, 38.40, 46.90, 3.90),
(16, 'Cookies com gotas de chocolate não assados', 'https://www.customketodiet.com/frontend/recipes/300/f92ZWYCAqI4m.jpg', 272.00, NULL, 6, 5.40, 2.00, 3.60),
(18, 'Costela Grelhada', 'https://www.customketodiet.com/frontend/recipes/300/prDD0OTqk76Y.jpg', 808.00, 25, 0, 38.10, 71.10, 3.80),
(19, 'Mousse De Morango De Café Da Manhã', 'https://www.customketodiet.com/frontend/recipes/300/BrwwvhThOO57.jpg', 222.00, 5, 0, 18.00, 12.00, 8.00),
(20, 'Salada de bacon e camarão rápido', 'https://www.customketodiet.com/frontend/recipes/300/B6n8jJ5ylOZL.png', 355.00, 5, 0, 32.50, 23.50, 3.30),
(21, 'Bagas com baixo teor de carboidratos e chantilly', 'https://www.customketodiet.com/frontend/recipes/300/eE9a4sNAHvH-.png', 307.00, 15, 2, 3.00, 29.00, 6.00),
(22, 'Tofu Scramble com curry', 'https://www.customketodiet.com/frontend/recipes/300/HhayiMttmAia.jpg', 234.00, 10, 0, 10.00, 19.00, 9.00);

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
(30, 12, 6, 'Repita o mesmo procedimento com o resto das fatias de bacon. Cubra com sementes de gergelim e sirva.', 'https://www.customketodiet.com/frontend/recipes/300/UoeinGOgxse4.jpg'),
(31, 13, 1, 'Pincele um prato resistente ao calor com manteiga.', 'https://www.customketodiet.com/frontend/recipes/300/YN8E9kbhOJ-B.jpg'),
(32, 13, 2, 'Junte os ovos, o sal e a páprica.', 'https://www.customketodiet.com/frontend/recipes/300/eoBvkGFjgJHe.jpg'),
(33, 13, 3, 'Misture o queijo cheddar e cubra com florzinhas de brócolis.', 'https://www.customketodiet.com/frontend/recipes/300/zHQwH4QUbBMT.jpg'),
(34, 13, 4, 'Leve ao microondas por cerca de 3 minutos ou até que um palito inserido no meio saia limpo.', ''),
(41, 15, 1, 'Tempere o filé de salmão com todas as especiarias e ervas.', 'https://www.customketodiet.com/frontend/recipes/300/XVbzfSy284YR.jpg'),
(42, 15, 2, 'Aqueça uma frigideira antiaderente e adicione azeite.', 'https://www.customketodiet.com/frontend/recipes/300/4jlUR56tXSI9.jpg'),
(43, 15, 3, 'Adicione o salmão à frigideira, com a pele primeiro. Cozinhe por alguns minutos.', 'https://www.customketodiet.com/frontend/recipes/300/uvy4HT7Sq-vl.jpg'),
(44, 15, 4, 'Vire o salmão com cuidado e continue cozinhando até que esteja bem cozido. Deixou de lado.', 'https://www.customketodiet.com/frontend/recipes/300/K9xDnVRm9P5D.jpg'),
(45, 15, 5, 'Para o molho: Usando um processador de alimentos, prepare todos os ingredientes.', 'https://www.customketodiet.com/frontend/recipes/300/IIq45L8F2212.jpg'),
(46, 15, 6, 'Adicione todos os ingredientes no processador de alimentos.', 'https://www.customketodiet.com/frontend/recipes/300/WnVDNZ-TLA9u.jpg'),
(47, 15, 7, 'Pulsar em alta até que tudo esteja picado grosseiramente, cerca de 1 minuto.', 'https://www.customketodiet.com/frontend/recipes/300/G8qpTKl3oiJy.jpg'),
(48, 15, 8, 'Sirva o salmão com pesto e uma rodela de limão.', ''),
(49, 16, 1, 'Combine cream cheese, manteiga, eritritol e extrato de baunilha em um processador de alimentos. Pulsar até ficar homogêneo.', 'https://www.customketodiet.com/frontend/recipes/300/vgPOi0lfUAzn.jpg'),
(50, 16, 2, 'Adicione a farinha de amêndoa e misture até obter uma massa lisa.', 'https://www.customketodiet.com/frontend/recipes/300/ovOMlm4odT7e.png'),
(51, 16, 3, 'Dobre as gotas de chocolate na mistura.', 'https://www.customketodiet.com/frontend/recipes/300/BsmzNJ2PFwkp.jpg'),
(52, 16, 4, 'Divida a massa em bolas e alise suavemente até form', 'https://www.customketodiet.com/frontend/recipes/300/DSy8ig2FGwsc.jpg'),
(53, 16, 5, 'Esfrie até estar pronto para servir.', ''),
(54, 18, 1, 'Tempere a costela com pimenta-do-reino e sal. Esfregue toda a carne.', 'https://www.customketodiet.com/frontend/recipes/300/z_lAYcZN6hiX.jpg'),
(55, 18, 2, 'Pré-aqueça uma assadeira em fogo médio e adicione óleo. Depois de aquecido, coloque a costela. Cozinhe por 5 minutos e vire. Cozinhe por mais 5 minutos.', 'https://www.customketodiet.com/frontend/recipes/300/BvAUa1Ml18jg.jpg'),
(56, 18, 3, 'Aumente o fogo e cozinhe por mais 5 minutos de cada lado.', 'https://www.customketodiet.com/frontend/recipes/300/S20jDhZVQEMg.jpg'),
(57, 18, 4, 'Nesse ínterim, combine o repolho, a cenoura e a maionese. Tempere com sal e pimenta-do-reino. Mexa para combinar.\r\n', 'https://www.customketodiet.com/frontend/recipes/300/P9Z6Zz3iLb7l.jpg'),
(58, 18, 5, 'Sirva a carne com salada de repolho e divirta-se!', 'https://www.customketodiet.com/frontend/recipes/300/837VLQN6m8xr.jpg'),
(59, 19, 1, 'Combine todos os ingredientes em um processador de alimentos. Misture até ficar homogêneo.', 'https://www.customketodiet.com/frontend/recipes/300/xm6UVujYX5Vs.jpg'),
(60, 19, 2, 'Servir.', 'https://www.customketodiet.com/frontend/recipes/300/xzgeeDHDjFO3.jpg'),
(61, 20, 1, 'Prepare todos os ingredientes.', 'https://www.customketodiet.com/frontend/recipes/300/DHiGQWL2AHIL.jpg'),
(62, 20, 2, 'Arrume a salada, tendo como base a alface.', 'https://www.customketodiet.com/frontend/recipes/300/CPO7NsS3o5De.jpg'),
(63, 20, 3, 'Em seguida, adicione os tomates.', 'https://www.customketodiet.com/frontend/recipes/300/PlTG8YyhaB_8.jpg'),
(64, 20, 4, 'Adicione os camarões fritos.\r\n', 'https://www.customketodiet.com/frontend/recipes/300/q8yV6XjnNri4.jpg'),
(65, 20, 5, 'Por último, adicione o bacon frito.', 'https://www.customketodiet.com/frontend/recipes/300/elowQZnThvyg.jpg'),
(66, 20, 6, 'Sirva com suco de limão e azeite.', 'https://www.customketodiet.com/frontend/recipes/300/j8_cEEhT-WgL.jpg'),
(67, 21, 1, 'Se você estiver usando frutas congeladas, deixe descongelar em temperatura ambiente. Bagas frescas também são melhores se estiverem em temperatura ambiente.', ''),
(68, 21, 2, 'Bata o creme de leite bem macio, até formar picos macios. Não deve ficar granulado ou muito firme. Adicione a baunilha no final.', ''),
(69, 21, 3, 'Sirva imediatamente com as frutas vermelhas.', ''),
(70, 22, 1, 'Aqueça o azeite em uma panela.', 'https://www.customketodiet.com/frontend/recipes/300/dvWS_QsfinkS.jpg'),
(71, 22, 2, 'Adicione o alho, pimentão e cebolinha. Refogue até ficar aromático.', 'https://www.customketodiet.com/frontend/recipes/300/qjcS-AFryZJV.jpg'),
(72, 22, 3, 'Adicione o tofu esfarelado e mexa por 2-3 minutos.', 'https://www.customketodiet.com/frontend/recipes/300/rOnJPILDCrF9.jpg'),
(73, 22, 4, 'Misture em pó de curry e fermento nutricional.', 'https://www.customketodiet.com/frontend/recipes/300/KIuaBX1PDpgK.jpg'),
(74, 22, 5, 'Tempere conforme necessário com sal e pimenta.', ''),
(75, 22, 6, 'Cubra com cebolinhas e sirva.', 'https://www.customketodiet.com/frontend/recipes/300/wxxZhvOD4DLT.jpg');

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
(40, 12, '1 colher de chá de sementes de gergelim'),
(41, 13, '3 ovos'),
(42, 13, '1 colher de sopa de manteiga'),
(43, 13, '0,25 xícara de queijo cheddar (ralado)'),
(44, 13, '0,25 xícara de brócolis'),
(45, 13, '0,36 g de páprica (beliscão)'),
(46, 13, '0,36 g pitada de sal e pimenta'),
(47, 15, '170 g de filé de salmão'),
(48, 15, '1 colher de sopa de amêndoas ((para o molho))'),
(49, 15, '1 colher de sopa de queijo parmesão ((para o molho))'),
(50, 15, '2 colheres de sopa de azeite ((para o molho))'),
(51, 15, '0,125 colher de chá de tomilho seco'),
(52, 15, '0,125 colher de chá de alecrim seco'),
(53, 15, '0,25 xícara de manjericão fresco (para o molho)'),
(54, 15, '0,36 g pitada de sal e pimenta'),
(55, 15, '0,36 g pitada de sal e pimenta (para o molho)'),
(56, 15, '2 alho (para o molho)'),
(57, 16, '224 g de queijo cremoso (amolecido)'),
(58, 16, '112 g de manteiga (amolecida)'),
(59, 16, '2 colheres de sopa de eritritol'),
(60, 16, '2 colheres de chá de extrato de baunilha'),
(61, 16, '0,6 xícara de farinha de amêndoa'),
(62, 16, '0,5 xícara de gotas de chocolate sem açúcar'),
(63, 18, '1 costela de porco (cortada (aberta) ao longo do osso)'),
(64, 18, '2 colheres de sopa de cenouras (picadas)'),
(65, 18, '0,5 colher de sopa de óleo de cozinha'),
(66, 18, '0,5 xícara de repolho roxo (picado)'),
(67, 18, '1,5 colher de sopa de maionese'),
(68, 18, '0,36 g pitada de sal e pimenta'),
(69, 19, '2 colheres de sopa de sementes de chia'),
(70, 19, '2 colheres de chá de estévia em pó'),
(71, 19, '1 xícara de tofu (sedoso)'),
(72, 19, '0,5 xícara de morangos frescos (fatiados)'),
(73, 20, '25 g de alface americana (fresca)'),
(74, 20, '100 g de camarão (frito, sem casca)'),
(75, 20, '2 fatias de bacon (frito, picado)'),
(76, 20, '1 colher de chá de suco de limão (para servir)'),
(77, 20, '1 colher de sopa de azeite (para servir)'),
(78, 20, '0,25 xícara de tomate cereja (dividido pela metade)'),
(79, 21, '140 g de framboesas frescas (ou mirtilos ou morangos frescos)'),
(80, 21, '0,6 xícara de creme de leite fresco'),
(81, 21, '0,25 colher de chá de extrato de baunilha'),
(82, 22, '100 g de tofu (esfarelado)'),
(83, 22, '1 alho (picado)'),
(84, 22, '30 g de pimentão (picado)'),
(85, 22, '15 g de chalota (em fatias finas)'),
(86, 22, '1 colher de sopa de cebolinhas (picadas)'),
(87, 22, '1 colher de sopa de azeite'),
(88, 22, '1 colher de sopa de fermento nutricional'),
(89, 22, '2 colheres de chá de curry em pó');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `preparacao`
--
ALTER TABLE `preparacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
