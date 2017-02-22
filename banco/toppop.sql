-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Fev-2017 às 17:09
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toppop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `usuario`, `senha`, `nome`) VALUES
(1, 'pedro', '123', 'Pedro'),
(2, 'lucas', '123', 'Lucas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_noticia`
--

CREATE TABLE `item_noticia` (
  `id_item` int(11) NOT NULL,
  `titulo_item` varchar(250) NOT NULL,
  `conteudo_item` text NOT NULL,
  `img_item` varchar(150) NOT NULL,
  `posicao_item` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_noticia`
--

INSERT INTO `item_noticia` (`id_item`, `titulo_item`, `conteudo_item`, `img_item`, `posicao_item`, `id_noticia`) VALUES
(45, 'Hola3', 'gfgf', 'the-great-outdoors_1281_1600x1200.jpg', 3, 35),
(44, 'Hola2', 'gfg', 'Paisagem_imagem_linda_-52.jpg', 2, 35),
(43, 'Hola1', 'gfg', 'Nature__039571_.jpg', 1, 35),
(30, 'Hola3hghg', 'gfg', '46f7417567b3aa8d9560cd6df85d5b8e.jpg', 2, 30),
(31, 'Hey1', 'gfgf', 'c0d109b1281d2998ddb951e60e067890.jpg', 0, 31),
(32, 'Hey2', 'gfgf', 'c0d109b1281d2998ddb951e60e067890.jpg', 1, 31),
(33, 'Hey3g', 'gfgf', 'c0d109b1281d2998ddb951e60e067890.jpg', 2, 31),
(34, 'fgf', 'gffg', '2c995da864d734d03139eb6df6658680.jpg', 0, 32),
(35, 'fgf', 'gfgf', '2c995da864d734d03139eb6df6658680.jpg', 1, 32),
(36, 'gfgf', 'fgf', '2c995da864d734d03139eb6df6658680.jpg', 2, 32),
(37, 'Novo teste', 'gfgf', 'Nature__039571_.jpg', 0, 33),
(38, 'Novo teste 2', 'gfgfg', 'Paisagem_imagem_linda_-52.jpg', 1, 33),
(39, 'Novo teste 3', 'gfgdf', 'the-great-outdoors_1281_1600x1200.jpg', 2, 33),
(40, 'Posica', 'gfg', 'Nature__039571_.jpg', 0, 35),
(41, 'Posic3', 'gf', 'Paisagem_imagem_linda_-52.jpg', 1, 35),
(42, 'posica15gf', 'gf', 'the-great-outdoors_1281_1600x1200.jpg', 2, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo_noticia` varchar(250) NOT NULL,
  `conteudo_noticia` text NOT NULL,
  `img_noticia` varchar(150) NOT NULL,
  `data_noticia` date NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `categoria_noticia` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo_noticia`, `conteudo_noticia`, `img_noticia`, `data_noticia`, `usuario`, `categoria_noticia`) VALUES
(1, 'teste', 'teste', 'e46072428018fc1220ede54644f3f7a3.jpg', '2017-02-14', 'Pedro', 'cinema'),
(2, 'Teste2', 'teste', 'a848542769c2e86c0fa62ec9c5b018d5.jpg', '2017-02-14', 'Pedro', 'musica'),
(3, 'Teste3', 'Teste', 'bc1d8287b4fb58cb911fac18d7d40a74.jpg', '2017-02-14', 'Pedro', 'animes'),
(4, 'Teste4', 'teste', '65d383a945dbd7916f90274d9c1f0898.jpg', '2017-02-15', 'Lucas', 'cinema'),
(5, 'Top Games', 'Descricao', '0410df7a28c2753faae3e6e014d599e0.jpg', '2017-02-15', 'Lucas', 'games'),
(6, 'indice 6', 'Descricao', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', '2017-02-15', 'Lucas', 'cinema'),
(7, 'Indice', 'Descrica', '3b744bcec4eb4134a0c2b67c08f322ec.jpg', '2017-02-15', 'Lucas', 'games'),
(8, 'teste', 'teste', '52e6b9c3aad597dcabf48e54e6008737.jpg', '2017-02-15', 'Lucas', 'musica'),
(9, 'Teste', 'Teste', 'd5bc5e43ddae02ccb50b987597b43a34.jpg', '2017-02-15', 'Lucas', 'cinema'),
(10, 'teste', 'teste', '5a7730b73241032c40b958d836f4ebd4.jpg', '2017-02-15', 'Lucas', 'cinema'),
(11, 'teste', 'teste', '382732964a02fd4c61ea0ead885d9883.jpg', '2017-02-15', 'Lucas', 'games'),
(12, 'teste', 'teste', 'd7f4a61d00996336e1f4003f2ee13475.jpg', '2017-02-15', 'Lucas', 'animes'),
(13, 'teste', 'teste', '7561207a871c933b7d7a08b01b4f4123.jpg', '2017-02-15', 'Lucas', 'musica'),
(14, 'teste', 'teste', '7f2fbf989e851738fb62832b5c26f575.jpg', '2017-02-15', 'Lucas', 'cinema'),
(15, 'teste', 'teste', '5871cd26591fb18b032a5799d5d2d272.jpg', '2017-02-15', 'Lucas', 'cinema'),
(16, 'teste', 'teste', 'a026fe3672865145c46fb45d36d00604.jpg', '2017-02-15', 'Lucas', 'cinema'),
(17, 'teste', 'teste', '4dece48607278f74f3a2849870ea507b.jpg', '2017-02-15', 'Lucas', 'musica'),
(18, 'teste', 'tes', '79580a8df3dc6762e38214169a88fbd1.jpg', '2017-02-15', 'Lucas', 'games'),
(19, 'teste', 'teste', '55a865ef944983e1b50fcb470a2129a1.jpg', '2017-02-15', 'Lucas', 'cinema'),
(20, 'teste', 'teste', '04785ad727d836e91e5054c4b214cf6e.jpg', '2017-02-15', 'Lucas', 'cinema'),
(21, 'este', 'tes', 'fb9f030d4aa0a994d6d8a5d8848e634d.jpg', '2017-02-16', 'Lucas', 'cinema'),
(22, 'Teste', 'teste', '642336bc33cdadf98572df7e949b0460.jpg', '2017-02-16', 'Pedro', 'cinema'),
(23, 'teste', 'teste', '00e2725684366f16c2654d3e3d42e907.jpg', '2017-02-16', 'Pedro', 'games'),
(24, 'Hola', 'gfgf', 'f6fb3e1baf88daacab8fdac38c576e2f.jpg', '2017-02-16', 'Pedro', 'musica'),
(25, 'Hey', 'gff', '74c79b46ee7a92cfb7abbe1dea272095.jpg', '2017-02-16', 'Pedro', 'cinema'),
(26, 'Ggfg', 'gf', 'e883416ad780d847a433a11c592e46af.jpg', '2017-02-16', 'Pedro', 'cinema'),
(27, 'Gf', 'fg', 'b381a93f4e1ddd49412d0906fcfe4475.jpg', '2017-02-16', 'Pedro', 'games'),
(28, 'tr', 'gf', 'cd38508b4029d182897766d242653f53.jpg', '2017-02-16', 'Pedro', 'animes'),
(29, 'Novo', 'gfgfgf', 'ec367de928602e75bc41e962521fd40a.jpg', '2017-02-16', 'Pedro', 'musica'),
(30, 'teste', 'ted', '2cc50bbc03dd28c93659e1aee42efc54.jpg', '2017-02-16', 'Pedro', 'cinema'),
(31, 'trt', 'gfgf', 'd4528168631feb9322d1cd5452d34d1d.jpg', '2017-02-16', 'Pedro', 'cinema'),
(32, 'Novo', 'gfgf', '537db00554eb16b75192a6930adb91b3.jpg', '2017-02-16', 'Pedro', 'cinema'),
(33, 'Novo teste', 'hghgh', '89abdb35433a23c7734a625927576ac9.jpg', '2017-02-16', 'Lucas', 'cinema'),
(34, 'Outro teste', 'gfg', 'f7f9fdaedbe4c2f8373b6c08fe9d8cd2.jpg', '2017-02-16', 'Lucas', 'cinema'),
(35, 'Hola', 'gfgfd', 'e117d82e932a2b0ee32fcc2f249d364c.jpg', '2017-02-16', 'Lucas', 'musica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_noticia`
--
ALTER TABLE `item_noticia`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item_noticia`
--
ALTER TABLE `item_noticia`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
