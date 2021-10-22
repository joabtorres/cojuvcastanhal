-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2021 às 03:56
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codjuven`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `status`) VALUES
(22, 'Esporte', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_categoria` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `data` date NOT NULL DEFAULT curdate(),
  `genero` varchar(30) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `previo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `id_categoria`, `id_usuario`, `data`, `genero`, `titulo`, `previo`, `texto`, `imagem`, `status`) VALUES
(1, 22, 1, '2021-06-15', 'feed', 'Esporte nas escolas publicas de castanhal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '<p><strong>What is Lorem Ipsum?</strong></p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Why do we use it?</strong></p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'uploads/posts/post_1/520661fd357f6325e0068a1ad4ce08c6.jpg', 1),
(2, 22, 1, '2021-07-06', 'feed', 'tesasdsa', 'asdasdasd sadsa dsa da', '<p>asdas das das dsa</p>', 'uploads/posts/post_2/86a054e1efafb8f5c505a97eb6d170b8.jpeg', 1),
(3, 22, 1, '2021-07-05', 'foto', 'Esporte nas escolas publicas de castanhal', 'What is Lorem Ipsum?\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty', '<p><strong>What is Lorem Ipsum?</strong></p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Why do we use it?</strong></p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'uploads/posts/post_3/548acf48a0ee8390ead538c2885e82e9.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_img`
--

CREATE TABLE `post_img` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_post` int(11) UNSIGNED NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `post_img`
--

INSERT INTO `post_img` (`id`, `id_post`, `imagem`) VALUES
(104, 1, 'uploads/posts/post_1/normal_44934c7179b61ece3c15824b6d81d4b1.jpg'),
(105, 1, 'uploads/posts/post_1/normal_8c16ee1bf4fd4eb3245efb35b0cb1ced.jpg'),
(106, 2, 'uploads/posts/post_2/normal_ec2cbebf61a34e39ce161d9adc74e68e.jpg'),
(107, 3, 'uploads/posts/post_3/normal_b96da69477ecd96f8be0b1008e71c044.jpg'),
(108, 3, 'uploads/posts/post_3/normal_dd777560b2479e68d76299dcfda7bc0b.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_img_min`
--

CREATE TABLE `post_img_min` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_post` int(11) UNSIGNED NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `post_img_min`
--

INSERT INTO `post_img_min` (`id`, `id_post`, `imagem`) VALUES
(86, 1, 'uploads/posts/post_1/miniatura_7515b1d3b5a5943faf873fe27786e2b3.jpg'),
(87, 1, 'uploads/posts/post_1/miniatura_327c10d1e32c81dd7971ba530d6a90b5.jpg'),
(88, 2, 'uploads/posts/post_2/miniatura_7851dd707d4225c1ee0d86deb5f459f1.jpg'),
(89, 3, 'uploads/posts/post_3/miniatura_ab6e5f681f9a68b9e0b6b1f6ab5a4ea0.jpg'),
(90, 3, 'uploads/posts/post_3/miniatura_ce659019bfe88ccd2e8383172bc1f76f.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slide`
--

INSERT INTO `slide` (`id`, `imagem`, `link`, `status`) VALUES
(12, 'uploads/slides/a87bee32351b1f169f35ec7f50c5695c.jpg', 'https://www.cavanis.edu.br/noticias/inscricao_pos_graduacao2020', 1),
(13, 'uploads/slides/082bce64e3bcb7fa5f3eff9a4d863ac0.jpg', '', 1),
(14, 'uploads/slides/a7858b04e2ed766569b4491168a5ed51.jpg', '', 1),
(15, 'uploads/slides/c23bcce72367f779fe860d6ad5fc89a2.jpg', 'http://localhost/virtualhost/cavanis/contato/ouvidoria', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '0',
  `senha` varchar(32) NOT NULL DEFAULT '',
  `imagem` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `imagem`, `status`) VALUES
(1, 'Joab T. Alencar', 'joabtorres1508@gmail.com', '47cafbff7d1c4463bbe7ba972a2b56e3', 'uploads/usuarios/b9c5caf150a1e466e06bdde6f62e81c8.jpg', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `post_img`
--
ALTER TABLE `post_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Índices para tabela `post_img_min`
--
ALTER TABLE `post_img_min`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Índices para tabela `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `post_img`
--
ALTER TABLE `post_img`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de tabela `post_img_min`
--
ALTER TABLE `post_img_min`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de tabela `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK__categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_post_usuario2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `post_img`
--
ALTER TABLE `post_img`
  ADD CONSTRAINT `FK__post2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`);

--
-- Limitadores para a tabela `post_img_min`
--
ALTER TABLE `post_img_min`
  ADD CONSTRAINT `FK__post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
