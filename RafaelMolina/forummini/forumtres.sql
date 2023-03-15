-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2023 às 09:57
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forumtres`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(1, 'Action', 'category-action', 'Jogos do gênero Ação', 'Categoria Action', 'Jogos do gênero Ação', 'category, categoria, action, açao, category action, categoria açao'),
(2, 'Competitive', 'category-competitive', 'Jogos do gênero Competitivo', 'Category Competitive', 'Jogos do gênero Competitivo', 'category, categoria, competitive, competitivo, category competitive, categoria competitivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `IdEmpresa` int(4) NOT NULL,
  `nomeEmpresa` varchar(191) NOT NULL,
  `idUsuario` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`IdEmpresa`, `nomeEmpresa`, `idUsuario`) VALUES
(1, 'Bethesda', 6),
(2, 'Ubisoft', 7),
(3, 'Finji', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `game`
--

CREATE TABLE `game` (
  `idgame` int(11) NOT NULL,
  `idEmpresa` int(4) NOT NULL,
  `category_id` tinyint(2) NOT NULL,
  `gameName` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imageback` varchar(191) NOT NULL,
  `imagebanner1` varchar(191) NOT NULL,
  `imagebanner2` varchar(191) NOT NULL,
  `imagebanner3` varchar(191) NOT NULL,
  `imageIcon` varchar(191) NOT NULL,
  `keyword` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `game`
--

INSERT INTO `game` (`idgame`, `idEmpresa`, `category_id`, `gameName`, `slug`, `descricao`, `imageback`, `imagebanner1`, `imagebanner2`, `imagebanner3`, `imageIcon`, `keyword`) VALUES
(6, 1, 1, 'Fallout-3', 'fallout-3', 'asgawgwgahhraehah', '', '1677619595.jpg', '', '', '1677619595.jpg', 'fallout, action, bethesda'),
(7, 1, 1, 'um', 'um', 'gagegraggwagae', '', '1677702920.jpg', '', '', '1677702920.jpg', 'um'),
(8, 1, 1, 'um', 'um', 'gagegraggwagae', '', 'header.jpg', '', '', 'fallout-3-fallout-3-30071200-200-200.jpg', 'um'),
(9, 1, 1, 'um', 'um', 'gagegraggwagae', '', 'header.jpg', '', '', 'fallout-3-fallout-3-30071200-200-200.jpg', 'um'),
(10, 1, 1, 'teste 2', 'teste-2', 'favhafbabbdfb vbasb asvsvdsavaarv', '', 'maxresdefault.jpg', '', '', 'theo-martin-agares.jpg', 'teste-2'),
(11, 3, 1, 'Tunic', 'tunic', 'Explore um reino repleto de lendas perdidas, antigos poderes e monstros ferozes em TUNIC, um jogo de ação isométrico com uma pequena raposa em uma grande aventura.', '', 'tunic_banner.webp', '', '', 'tunic_icon.jpg', 'tunic, action, finji'),
(12, 3, 1, 'Dead Cells', 'dead-cells', 'Dead Cells is a rogue-lite, metroidvania inspired, action-platformer. You will explore a sprawling, ever-changing castle... assuming you are able to fight your way past its keepers in 2D souls-lite combat. No checkpoints. Kill, die, learn, repeat. Regular free content updates!', 'deadcells_background.jpg', 'deadcells_banner1.jpg', 'deadcells_banner2.jpg', 'deadcells_banner3.jpg', 'deadcells_icon.jpg', 'deadcells, dead cells');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newposts`
--

CREATE TABLE `newposts` (
  `idnewpost` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `spoiler` varchar(10) NOT NULL,
  `mature` varchar(10) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `newposts`
--

INSERT INTO `newposts` (`idnewpost`, `tag_id`, `name`, `slug`, `description`, `spoiler`, `mature`, `image`, `meta_keyword`, `created_at`) VALUES
(1, 3, 'Como passar de tal level?', 'Como_passar_de_tal_level?', 'Duis enim orci, sagittis sit amet odio non, suscipit semper quam. Morbi metus sapien, viverra vitae quam at, euismod mattis erat. Duis fermentum leo mi, et lacinia nibh euismod eu. Nunc cursus odio ut ipsum rutrum venenatis. Suspendisse at vulputate mi. Suspendisse at tellus id enim ultrices fringilla. Quisque quis felis sagittis, molestie nisi vel, blandit justo. Sed dictum sapien ut ligula feugiat, non bibendum tortor fermentum. Donec erat quam, efficitur a molestie non, venenatis in dui. Etiam iaculis luctus nisi, ut vestibulum elit fringilla sit amet. Pellentesque rhoncus orci at congue rhoncus. Sed auctor tincidunt ante, eget accumsan enim aliquam a.', 'yes', 'no', 'OIP (2).jpg', 'help', '2023-03-12 06:55:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `idpost` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `spoiler` varchar(10) NOT NULL DEFAULT 'no',
  `mature` varchar(10) NOT NULL DEFAULT 'no',
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`idpost`, `tag_id`, `spoiler`, `mature`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`) VALUES
(1, 1, 'no', 'no', 'Exemplo de post 1', 'exemplo-de-post-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo vel ligula et iaculis. Ut eleifend tellus sed velit interdum, eu auctor ante interdum. Sed eget dui dictum, porttitor justo sit amet, pulvinar ex. Mauris ipsum est, porttitor vitae felis in, tempor venenatis mi. Sed tristique ex dui, vel ullamcorper dolor rhoncus sit amet. Aenean ac ultrices magna. Fusce fermentum eget dolor non facilisis. Phasellus porta feugiat nunc, at pulvinar nisl. Curabitur malesuada luctus vehicula.\r\n\r\nVestibulum posuere sagittis eros et venenatis. Aliquam porta turpis nec posuere faucibus. Duis mattis vel dolor cursus posuere. In ullamcorper diam magna, eu pulvinar justo varius vitae. Nullam posuere nunc id justo ultrices consequat. Mauris placerat pretium lectus. Ut faucibus suscipit purus vitae cursus. Praesent vel tellus accumsan, mattis ex ut, rhoncus justo. Ut lacinia ligula eros, a pretium odio placerat ut. Nam ornare libero id vehicula tempor. Proin id mattis elit, nec congue ante. Vestibulum dapibus a ligula dignissim vestibulum.\r\n\r\nFusce ac elit vel odio eleifend commodo at eget lorem. Duis imperdiet nisi diam, nec aliquam erat commodo eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum condimentum enim sed venenatis consequat. In dictum efficitur fermentum. Nulla tristique, augue non venenatis aliquam, velit odio tristique nisl, in condimentum leo neque sed tortor. Donec condimentum risus ipsum, eu congue est congue eget. Nam hendrerit purus augue. Mauris vitae rutrum odio. Nullam tincidunt faucibus nulla, sit amet imperdiet ex condimentum ac. Suspendisse varius congue lacus, ut commodo dolor maximus in. Donec vestibulum, ipsum eu consequat dapibus, velit elit tempor metus, eget feugiat sapien lectus quis leo. Cras accumsan id enim nec aliquam. Nam malesuada hendrerit aliquam. Quisque ligula metus, suscipit non placerat vel, efficitur iaculis nulla.', '1676568643.png', 'Exemplo de post 1', 'Lorem ipsum dolor sit amet, consectetur ', 'action, game', '2023-02-16 17:30:43'),
(2, 2, 'no', 'no', 'Exemplo de post 2', 'exemplo-de-post-2', 'Mauris ultrices feugiat eros, sit amet interdum velit posuere quis. Suspendisse enim nulla, aliquam a ante nec, varius rutrum sem. Sed eu urna viverra, hendrerit elit id, gravida diam. Sed malesuada nunc leo, nec maximus leo porttitor ut. Curabitur bibendum, odio id venenatis efficitur, mi tellus suscipit eros, quis maximus augue eros ut turpis. Duis eu turpis in leo egestas tincidunt. Proin viverra lorem elit, vitae viverra ante rhoncus vel. Morbi ultrices est ut leo scelerisque, eget tincidunt leo ultrices. Nam imperdiet, lectus sed varius tincidunt, dui magna iaculis leo, eu lacinia arcu turpis et diam.\r\n\r\nProin vitae lacus libero. Nulla finibus rutrum ornare. Aenean non sem ac eros euismod pharetra. Nunc vehicula varius dui. Duis porttitor orci tellus, et convallis est tempus quis. Sed libero augue, vehicula id sapien vitae, vestibulum pulvinar metus. Sed convallis faucibus mauris, quis volutpat ligula viverra sollicitudin.', '1676569104.jpg', 'Exemplo de post 2', 'Curabitur bibendum, odio id venenatis efficitur, mi tellus suscipit eros, quis maximus augue eros ut turpis. Duis eu turpis in leo egestas tincidunt. Proin viverra lorem elit, vitae viverra ante rhoncus vel. Morbi ultrices est ut leo scelerisque, eget tincidunt leo ultrices. Nam imperdiet, lectus sed varius tincidunt, dui magna iaculis leo, eu lacinia arcu turpis et diam.  Proin vitae lacus libero. Nulla finibus rutrum ornare. Aenean non sem ac eros euismod pharetra. Nunc vehicula varius dui. Duis porttitor orci tellus, et convallis est tempus quis. Sed libero augue, vehicula id sapien vitae, vestibulum pulvinar metus. Sed convallis faucibus mauris, quis volutpat ligula viverra sollicitudin.', 'competitive, game', '2023-02-16 17:38:24'),
(3, 0, 'no', 'no', 'Novo sistema de tags', 'Novo-sistema-de-tags', 'orttitor vitae felis in, tempor venenatis mi. Sed tristique ex dui, vel ullamcorper dolor rhoncus sit amet. Aenean ac ultrices magna. Fusce fermentum eget dolor non facilisis. Phasellus porta feugiat nunc, at pulvinar nisl. Curabitur malesuada luctus vehicula. Vestibulum posuere sagittis eros et venenatis. Aliquam porta turpis nec posuere faucibus. Duis mattis vel dolor cursus posuere. In ullamcorper diam magna, eu pulvinar justo varius vitae. Nullam posuere nunc id justo ultrices consequat. Mauris placerat pretium lectus. Ut faucibus suscipit purus vitae cursus. Praesent vel tellus accumsan, mattis ex ut, rhoncus justo. Ut lacinia ligula eros, a pretium odio placerat ut. Nam ornare libero id vehicula tempor. Proin id mattis elit, nec congue ante. Vestibulum dapibus a ligula dignissim vestibulum. Fusce ac elit vel odio eleifend commodo at eget lorem. Duis imperdiet nisi diam, nec aliquam erat commodo eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum condimentum enim sed venenatis consequat. In dictum efficitur fermentum. Nulla tristique, augue non venenatis aliquam, velit odio tristique nisl, in condimentum leo neque sed tortor. Donec condimentum risus ipsum, eu congue est congue eget. Nam hendrerit purus augue. Mauris vitae rutrum odio. Nullam tincidunt faucibus nulla, sit amet imperdiet ex condimentum ac. Suspendisse varius congue lacus, ut commodo dolor maximus in. Donec vestibulum, i', '1677479579.', 'Novo sistema de tags', 'orttitor vitae felis in, tempor venenatis mi. Sed tristique ex dui, vel ullamcorper dolor rhoncus sit amet. Aenean ac ultrices magna. Fusce fermentum eget dolor non facilisis. Phasellus porta feugiat nunc, at pulvinar nisl. Curabitur malesuada luctus vehicula. Vestibulum posuere sagittis eros et venenatis. Aliquam porta turpis nec posuere faucibus. Duis mattis vel dolor cursus posuere. In ullamcorper diam magna, eu pulvinar justo varius vitae. Nullam posuere nunc id justo ultrices consequat. Mauris placerat pretium lectus. Ut faucibus suscipit purus vitae cursus. Praesent vel tellus accumsan, mattis ex ut, rhoncus justo. Ut lacinia ligula eros, a pretium odio placerat ut. Nam ornare libero id vehicula tempor. Proin id mattis elit, nec congue ante. Vestibulum dapibus a ligula dignissim vestibulum. Fusce ac elit vel odio eleifend commodo at eget lorem. Duis imperdiet nisi diam, nec aliquam erat commodo eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum condimentum enim sed venenatis consequat. In dictum efficitur fermentum. Nulla tristique, augue non venenatis aliquam, velit odio tristique nisl, in condimentum leo neque sed tortor. Donec condimentum risus ipsum, eu congue est congue eget. Nam hendrerit purus augue. Mauris vitae rutrum odio. Nullam tincidunt faucibus nulla, sit amet imperdiet ex condimentum ac. Suspendisse varius congue lacus, ut commodo dolor maximus in. Donec vestibulum, i', 'help', '2023-02-27 06:32:59'),
(4, 3, 'no', 'no', 'Novo sistema de tags', 'Novo-sistema-de-tags', 'orttitor vitae felis in, tempor venenatis mi. Sed tristique ex dui, vel ullamcorper dolor rhoncus sit amet. Aenean ac ultrices magna. Fusce fermentum eget dolor non facilisis. Phasellus porta feugiat nunc, at pulvinar nisl. Curabitur malesuada luctus vehicula. Vestibulum posuere sagittis eros et venenatis. Aliquam porta turpis nec posuere faucibus. Duis mattis vel dolor cursus posuere. In ullamcorper diam magna, eu pulvinar justo varius vitae. Nullam posuere nunc id justo ultrices consequat. Mauris placerat pretium lectus. Ut faucibus suscipit purus vitae cursus. Praesent vel tellus accumsan, mattis ex ut, rhoncus justo. Ut lacinia ligula eros, a pretium odio placerat ut. Nam ornare libero id vehicula tempor. Proin id mattis elit, nec congue ante. Vestibulum dapibus a ligula dignissim vestibulum. Fusce ac elit vel odio eleifend commodo at eget lorem. Duis imperdiet nisi diam, nec aliquam erat commodo eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum condimentum enim sed venenatis consequat. In dictum efficitur fermentum. Nulla tristique, augue non venenatis aliquam, velit odio tristique nisl, in condimentum leo neque sed tortor. Donec condimentum risus ipsum, eu congue est congue eget. Nam hendrerit purus augue. Mauris vitae rutrum odio. Nullam tincidunt faucibus nulla, sit amet imperdiet ex condimentum ac. Suspendisse varius congue lacus, ut commodo dolor maximus in. Donec vestibulum, i', '1677479596.', 'Novo sistema de tags', 'orttitor vitae felis in, tempor venenatis mi. Sed tristique ex dui, vel ullamcorper dolor rhoncus sit amet. Aenean ac ultrices magna. Fusce fermentum eget dolor non facilisis. Phasellus porta feugiat nunc, at pulvinar nisl. Curabitur malesuada luctus vehicula. Vestibulum posuere sagittis eros et venenatis. Aliquam porta turpis nec posuere faucibus. Duis mattis vel dolor cursus posuere. In ullamcorper diam magna, eu pulvinar justo varius vitae. Nullam posuere nunc id justo ultrices consequat. Mauris placerat pretium lectus. Ut faucibus suscipit purus vitae cursus. Praesent vel tellus accumsan, mattis ex ut, rhoncus justo. Ut lacinia ligula eros, a pretium odio placerat ut. Nam ornare libero id vehicula tempor. Proin id mattis elit, nec congue ante. Vestibulum dapibus a ligula dignissim vestibulum. Fusce ac elit vel odio eleifend commodo at eget lorem. Duis imperdiet nisi diam, nec aliquam erat commodo eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum condimentum enim sed venenatis consequat. In dictum efficitur fermentum. Nulla tristique, augue non venenatis aliquam, velit odio tristique nisl, in condimentum leo neque sed tortor. Donec condimentum risus ipsum, eu congue est congue eget. Nam hendrerit purus augue. Mauris vitae rutrum odio. Nullam tincidunt faucibus nulla, sit amet imperdiet ex condimentum ac. Suspendisse varius congue lacus, ut commodo dolor maximus in. Donec vestibulum, i', 'help', '2023-02-27 06:33:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reply`
--

CREATE TABLE `reply` (
  `idreply` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reply`
--

INSERT INTO `reply` (`idreply`, `idpost`, `name`, `description`, `image`, `created_at`) VALUES
(1, 1, 'Exemplo de Reply 1', 'Teste de reply 1', '1676583061.jpg', '2023-02-16 21:31:01'),
(2, 1, 'Exemplo de Reply 2', 'Fusce ac elit vel odio eleifend commodo at eget lorem. Duis imperdiet nisi diam, nec aliquam erat commodo eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum condimentum enim sed venenatis consequat. In dictum efficitur fermentum. Nulla tristique, augue non venenatis aliquam, velit odio tristique nisl, in condimentum leo neque sed tortor. Donec condimentum risus ipsum, eu congue est congue eget. Nam hendrerit purus augue. Mauris vitae rutrum odio. Nullam tincidunt faucibus nulla, sit amet imperdiet ex condimentum ac. Suspendisse varius congue lacus, ut commodo dolor maximus in. Donec vestibulum, ipsum eu consequat dapibus, velit elit tempor metus, eget feugiat sapien lectus quis leo. Cras accumsan id enim nec aliquam. Nam malesuada hendrerit aliquam. Quisque ligula metus, suscipit non placerat vel, efficitur iaculis nulla.', '1676583133.gif', '2023-02-16 21:32:13'),
(3, 11, 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla nulla ac nisl finibus, vitae ultricies quam posuere. Aliquam erat volutpat. Suspendisse velit diam, lobortis nec metus id, venenatis pharetra tortor. Vestibulum gravida libero eget tincidunt rhoncus. Morbi nisl nisi, aliquet quis felis id, lacinia convallis sem. Etiam bibendum metus congue metus ornare, in egestas nibh mollis. Morbi eu sem porttitor, fringilla erat vel, egestas lacus', '1678605587.jpg', '2023-03-12 07:19:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE `tag` (
  `idTag` tinyint(2) NOT NULL,
  `nometag` varchar(191) NOT NULL,
  `descricao` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`idTag`, `nometag`, `descricao`) VALUES
(1, 'Bug', 'Discussao ou perguntas referentes a bugs nos jogos'),
(2, 'Discussao', 'Discussao aberta sobre algo relativo ao jogo'),
(3, 'Help', 'Ajuda e dicas com alguma parte do jogo'),
(4, 'Review', 'Review sobre o jogo por inteiro ou partes dele');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IdEmpresa`);

--
-- Índices para tabela `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`idgame`);

--
-- Índices para tabela `newposts`
--
ALTER TABLE `newposts`
  ADD PRIMARY KEY (`idnewpost`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idpost`);

--
-- Índices para tabela `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`idreply`);

--
-- Índices para tabela `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idTag`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IdEmpresa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `game`
--
ALTER TABLE `game`
  MODIFY `idgame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `newposts`
--
ALTER TABLE `newposts`
  MODIFY `idnewpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `reply`
--
ALTER TABLE `reply`
  MODIFY `idreply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
