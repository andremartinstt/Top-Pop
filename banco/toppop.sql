-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2017 às 13:22
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
  `senha` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `usuario`, `senha`, `nome`) VALUES
(21, 'fernando', '827ccb0eea8a706c4c34a16891f84e7b', 'Fernando'),
(2, 'lucas', '123', 'Lucas'),
(20, 'carlos', '202cb962ac59075b964b07152d234b70', 'Carlos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `nome_usuario` varchar(250) NOT NULL,
  `email_usuario` varchar(250) NOT NULL,
  `conteudo_comentario` text NOT NULL,
  `id_noticia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nome_usuario`, `email_usuario`, `conteudo_comentario`, `id_noticia`) VALUES
(4, 'Raul', 'raul@gmail.com', 'ComentÃ¡rio Raul', 34);

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
(34, 'fgf', 'gffg', '2c995da864d734d03139eb6df6658680.jpg', 0, 32),
(35, 'fgf', 'gfgf', '2c995da864d734d03139eb6df6658680.jpg', 1, 32),
(36, 'gfgf', 'fgf', '2c995da864d734d03139eb6df6658680.jpg', 2, 32),
(82, 'Scar (O Rei LeÃ£o)', 'Sim, o maior vilÃ£o da nossa infÃ¢ncia e o maior vilÃ£o da histÃ³ria do cinema. Scar merecidamente entra para a primeira \r\ncolocaÃ§Ã£o dessa lista.\r\n\r\nNa animaÃ§Ã£o da Disney "O Rei LeÃ£o", Scar Ã© o irmÃ£o do rei da selva Mufasa e tio de Simba, o protagonista da histÃ³ria.\r\n PorÃ©m Scar Ã© ambicioso pelo trono, planejando assim a morte de seu prÃ³prio irmÃ£o e de seu sobrinho, para que seja\r\n o Ãºnico com direito de ser Rei.\r\n\r\nScar mata seu irmÃ£o na lendÃ¡ria cena da "debandada de gnus", o jogando de cima do desfiladeiro. A frase "Vida longa\r\n ao Rei" ficarÃ¡ sempre na memÃ³ria dos telespectadores que assistiram a animaÃ§Ã£o, formando um Ã³dio ao personagem.\r\n\r\nFelizmente Simba sobrevive e consegue ocupar seu lugar de direito vingando a morte do pai.', 'n1-top1.jpg', 1, 57),
(83, 'Coringa (Batman - O Cavaleiro das Trevas)', 'JÃ¡ houve diversas adaptaÃ§Ãµes do Coringa nos cinemas e TV, porÃ©m nenhuma delas ultrapassa a adaptaÃ§Ã£o de Heath \r\nLedger na interpretaÃ§Ã£o desse papel em Batman - O Cavaleiro das Trevas.\r\n\r\nNessa versÃ£o do antagonista, ele se apresenta como um verdadeiro psicopata, efetuando planos de maneira mais \r\ninteligente que o Batman, o deixando como um coadjuvante na histÃ³ria.\r\n\r\nO Coringa de Ledger, juntamente com Darth Vader, serÃ£o sempre uma reverencia no que diz respeito a antagonismo,\r\n fazendo parte assim da cultura pop.', 'n1-top2.jpg', 2, 57),
(84, 'Darth Vader (Trilogia Star Wars)', 'Finalmente o lado negro da forÃ§a. Darth Vader Ã© visto como um dos maiores vilÃµes da histÃ³ria da cinema, deixando sua\r\nmarca nos filmes da trilogia Star Wars.\r\n\r\nDarth Vader treina para ser Jedi, porÃ©m permite que o lado negro da forÃ§a o corrompe, e se tornar uma das maiores \r\nameaÃ§as das galÃ¡xias, sob a ordem de Darth Sidious.', 'n1-top3.jpg', 3, 57),
(85, 'Commodus (Gladiador)', 'Commodus Ã© o filho do imperador Marcus Aurelius, que deseja colocar o general Maximus como seu sucessor ao trono, \r\npois nÃ£o confia em seu filho essa responsabilidade. Sabendo disso, Commodus mata seu pai e ordena matar Maximus,\r\n para assim ocupar lugar a posiÃ§Ã£o de imperador.\r\n\r\nCommodus descobre que o ex-general ainda estÃ¡ vivo e lutando nas arenas como gladiador, mesmo assim ainda \r\nquer terminar o serviÃ§o e o fere covardemente antes de uma luta entre os dois.\r\n\r\nEle Ã© apresentado como uma pessoas ambiciosa, sem escrÃºpulos e ainda por cima tem um desejo doentio pela sua \r\nprÃ³pria irmÃ£.', 'n1-top4.jpg', 4, 57),
(86, 'John Doe ( Se7en)', 'Em Se7ven dois detetives (David Mills e William Somerset) tentam solucionar um caso em que envolve assassinatos \r\nem sÃ©rie baseados nos sete pecados capitais. Ao final, o serial killer "John Doe" Ã© preso (se entrega a polÃ­cia), e entra\r\n em acordo com os detetives para mostrar o Ãºltimo corpo. PorÃ©m o corpo (ou parte dele) Ã© da prÃ³pria mulher de um \r\ndos detetives (David Mills), trazendo assim uma reviravolta na histÃ³ria.', 'n1-top5.jpg', 5, 57),
(87, 'Amon Goeth (A Lista de Schindler)', 'Cruel, frio e calculista, Amon Goeth sem sombra de dÃºvidas deixou marcado para sempre com um dos maiores vilÃµes \r\nda histÃ³ria do cinema; apesar de ter existido na vida real.\r\n\r\nAmon Goeth Ã© um oficial nazista que comanda um campo de concentraÃ§Ã£o na PolÃ´nia com mÃ£os de ferro. NÃ£o tem\r\npiedade dos judeus  e os trata de forma desumana.\r\n', 'n1-top6.jpg', 6, 57),
(88, 'Anton Chigurh (Onde os Fracos NÃ£o Tem Vez)', 'Em "Onde os Fracos NÃ£o Tem Vez" Javier Bardem tem uma excelente atuaÃ§Ã£o ao interpretar o vilÃ£o Anton Chigurh, \r\nao qual lhe rendeu o oscar de ator coadjuvante.\r\n\r\nAnton Chigurh Ã© um assassino frio e que nÃ£o demonstra nenhuma emoÃ§Ã£o, cometendo certos assassinatos sem \r\nnenhum motivo aparente.\r\n\r\nNa trama, Anton Chigurh Ã© contratado para recuperar o dinheiro de uma negociaÃ§Ã£o entre traficantes que acaba com\r\n todos os envolvidos mortos. Dinheiro ao qual foi roubado por Llewelyn Moss, um veterano da guerra do VietnÃ£. Tal \r\nsituaÃ§Ã£o se desenrola em uma perseguiÃ§Ã£o, fazendo com que Chigurh cometa diversos assassinatos, atÃ© concluir \r\nseu objetivo.', 'n1-top7.jpg', 7, 57),
(89, 'Hans Landa (Bastardos InglÃ³rios)', 'Provavelmente a melhor representaÃ§Ã£o de um vilÃ£o nos filmes de Quentin Tarantino, Hans Landa rouba a cena no\r\n filme Bastardos InglÃ³rios, sendo um antagonista carismÃ¡tico, sociÃ¡vel e bastante intelectual.\r\n\r\nHans Landa Ã© um oficial nazista que utiliza de sua inteligÃªncia e estratÃ©gias para cumprir suas obrigaÃ§Ãµes como \r\nmilitar e objetivos pessoais.', 'n1-top8.jpg', 8, 57),
(90, 'Norman Bates (Psicose)', 'Em Psicose uma secretÃ¡ria se apropria do dinheiro de seu patrÃ£o apÃ³s a realizaÃ§Ã£o de uma venda. Assim, ela decide \r\nfugir com o dinheiro, e durante o percurso se hospeda em um motel.\r\n\r\nO dono do motel (Norman Bates) aparenta ser um rapaz normal, cumprindo seu dever como proprietÃ¡rio do local. \r\nApesar de seu comportamento estranho em relaÃ§Ã£o a sua mÃ£e. PorÃ©m apÃ³s o assassinato da prÃ³pria secretÃ¡ria, \r\nvemos que existe uma mente perturbada por trÃ¡s de Bates.', 'n1-top9.jpg', 9, 57),
(91, 'HAL 9000 (2001 - Uma OdissÃ©ia no EspaÃ§o)', 'Hal 9000 Ã© uma inteligÃªncia artificial que controla todo o funcionamento da nave Discovery, onde se encontra dois \r\ntripulantes David Bowman e Frank Poole. HAL foi construÃ­do para ser o cÃ©rebro da espaÃ§onave, tendo como \r\nresponsabilidade o bom desempenho da mesma, e para obedecer os comandos dos humanos ali presentes. PorÃ©m, \r\ncomo HAL sendo um supercomputador, passa a ter consciÃªncia prÃ³pria e comeÃ§a a considerar os tripulantes como \r\ncriaturas descartÃ¡veis, tendo em vista que ele coloca a culpa das falhas no prÃ³prio ser humano.\r\n\r\nDavid e Frank percebem que estÃ¡ ocorrendo algum problema com o HAL e, cogitam sua desativaÃ§Ã£o, porÃ©m ele \r\ndescobre seus planos, e isso acaba se tornando uma ameaÃ§a para suas vidas.', 'n1-top10.jpg', 10, 57),
(95, 'Nascido Para Matar', 'Nesse excelente filme de Stanley Kubrick, diversos recrutas sÃ£o treinados na base de treinamento do exÃ©rcito, para \r\ncombaterem na Guerra do VietnÃ£. ApÃ³s o treinamento, eles sÃ£o levados para a guerra, e lÃ¡ setem na pele como Ã© \r\nestar presente em um combate.\r\n\r\nO filme estÃ¡ pontuado com 8.3 no IMDb.', 'n2-top1.jpg', 1, 72),
(96, 'Apocalypse Now (1979)', 'Durante a Guerra do VietnÃ£, o comandante Willard (interpretado por Martin Sheen) recebe ordens para encontrar e \r\nmatar o coronel Kurtz (interpretado por Marlon Brando), que ficou louco e se refugiou junto a selvagens em uma tribo. \r\nO percurso de Willard atÃ© chegar ao ex-coronel Ã© repleto de loucuras e de experiÃªncias absurdas em uma guerra.\r\n\r\nO filme tem uma excelente direÃ§Ã£o de Francis Ford Coppola, recebendo 8 indicaÃ§Ãµes ao Oscar.', 'n2-top2.jpg', 2, 72),
(97, 'O Resgate do Soldado Ryan (1998)', 'O Resgate do Soldado Ryan talvez seja o filme de guerra mais conhecido, e nÃ£o Ã© atoa; Steven Spielberg fez um \r\nexcelente trabalho ao retratar de maneira bastante real a Segunda Guerra Mundial.\r\n\r\nNa trama, um grupo de soldados recebe a ordem de resgatar o soldado James Ryan, irmÃ£o de outros trÃªs soldados \r\nque morreram em combate. PorÃ©m eles enfrentam diversos obstÃ¡culos e baixas durante atÃ© salvar a vida do jovem \r\nsoldado.\r\n\r\nA nota do filme Ã© de 8.6 no IMDb.', 'n2-top3.jpg', 3, 72),
(98, 'Platoon (1986)', 'Platoon Ã© um dos filmes mais importantes de guerra, retratado nos cinemas. Conta a histÃ³ria de Chris Taylor, que larga \r\na universidade para se juntar ao exÃ©rcito norte-americano durante a Guerra no VietnÃ£. PorÃ©m, ao vivenciar todo terror \r\nque estar numa guerra, Taylor comeÃ§a a mudar sua mentalidade e passa a ver as coisas de forma diferente.\r\n\r\nO filme tem uma nota de 8.1 no IMDb.', 'n2-top4.jpg', 4, 72),
(99, 'Sniper Americano', 'Sniper Americano Ã© um filme dirigido por Clint Eastwood, que conta a histÃ³ria real de Chris Kyle, um soldado que lutou \r\ndurante a Guerra do Iraque.\r\n\r\nChris Kyle foi um atirador de elite que matou mais de 100 pessoas durante o tempo em que esteve na guerra.\r\n\r\nO filme nÃ£o foca apenas na aÃ§Ã£o, mas tambÃ©m aborda o drama pessoal de Kyle.', 'n2-top5.jpg', 5, 72),
(100, 'GlÃ³ria Feita de Sangue', 'Durante a Primeira Guerra Mundial, o Coronel Dax recebe a missÃ£o de atacar as trincheiras adversÃ¡rias, apesar de ser \r\numa tarefa quase impossÃ­vel. Muitos soldados nÃ£o avanÃ§am ao campo de batalha, trazendo assim a ira do General \r\nMireau, que ordenou a missÃ£o.\r\n\r\nMireau leva o caso aos superiores, e solicita a execuÃ§Ã£o dos soldados que desobedeceram a ordem. O Coronel Dax\r\nusa de todas maneiras possÃ­veis para livras seus homens da morte diante o julgamento. ', 'n2-top6.jpg', 6, 72),
(101, 'Guerra ao Terror', 'Em Guerra ao Terror, trÃªs soldados () integram o esquadrÃ£o anti-bombas dos EUA durante uma aÃ§Ã£o no Iraque. Um \r\ndeles acaba morrendo, fazendo com que William James (Jeremy Renner) o substitua; porÃ©m seus mÃ©todos de trabalho\r\nnÃ£o agrada a todos do grupo.\r\n\r\nO filme tambÃ©m marca na histÃ³ria do cinema, como o primeiro Oscar dado a uma mulher na categoria de melhor \r\ndireÃ§Ã£o.', 'n2-top7.jpg', 7, 72),
(102, 'Fomos HerÃ³is', 'Durante a Guerra do VietnÃ£, o tenente Hal Moore (Mel Gibson) recebe a missÃ£o de lutar no Vale Drang. PorÃ©m durante \r\na batalha, se batalhÃ£o Ã© cercado por mais de 2 mil soldados do exÃ©rcito rival, colocando-os em uma situaÃ§Ã£o pior do \r\nque imaginavam.', 'n2-top8.jpg', 8, 72),
(103, 'CoraÃ§Ãµes de Ferro', 'Durante a Segunda Guerra Mundial, um grupo de soldados liderado por Wardaddy, lutam na Alemanda na nazista com \r\npoucos armamentos, mas mesmo assim vÃ£o atÃ© o final em busca de cumprir sua missÃ£o.\r\n\r\nO filme Ã© estrelado por Brad Pitt, Shia LaBeouf e Logan Lerman.', 'n2-top9.jpg', 9, 72),
(104, 'AtÃ© o Ãšltimo Homem', 'No filme dirigido por Mel Gibson, Desmond Doss Ã© um jovem que resolve se alistar no exÃ©rcito durante a Segunda \r\nGuerra Mundial. PorÃ©m, em funÃ§Ã£o de suas crenÃ§as religiosas, decide nÃ£o pegar em nenhuma arma. Com isso, Doss \r\nsofre pressÃ£o dos comandantes do exÃ©rcito e o forÃ§am a desistir.\r\n\r\nDoss nÃ£o desiste e vai para a guerra com a funÃ§Ã£o de ajudar os feridos. Durante seus dias em combate, ele salvou \r\ndiversos soldados da morte, inclusive do exÃ©rcito rival.', 'n2-top10.jpg', 10, 72);

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
(72, 'Melhores Filmes de Guerra', 'Editado ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '8af3370aaf58ca628d62f6ea00218783.jpg', '2017-06-02', 'Fernando', 'cinema'),
(57, 'Os Maiores VilÃµes do Cinema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5335ad6083b628b0ca0526b22c16388f.jpg', '2017-05-25', 'Lucas', 'cinema');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `item_noticia`
--
ALTER TABLE `item_noticia`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
