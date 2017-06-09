-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2017 às 14:59
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
(1, 'Amanda', 'amanda@gmail.com', 'Comentario amanda', 33),
(4, 'Raul', 'raul@gmail.com', 'ComentÃ¡rio Raul', 34),
(11, 'Teste', 'teste@teste.com', 'teste', 36),
(10, 'Teste', 'teste@teste.com', 'Teste', 36),
(12, 'Teste', 'teste@teste.com', 'teste', 25),
(15, 'Carlos', 'teste@teste.com', 'Teste', 36),
(16, 'Fefe', 'teste@teste.com', 'Calors', 25),
(18, 'Pedro', 'teste@teste.com', 'Teste', 14),
(20, 'Teste', 'teste@teste.com', 'Teste', 25),
(21, 'Teste', 'teste@teste.com', 'Teste', 25),
(22, 'Teste', 'teste@teste.com', 'Teste', 25),
(23, 'Teste', 'teste@teste.com', 'Teste', 25),
(24, 'Teste', 'teste@teste.com', 'Teste', 25),
(27, 'Teste', 'teste@teste.com', 'Teste', 38),
(28, 'Teste', 'teste@teste.com', 'tdgf', 12),
(29, 'Teste', 'teste@teste.com', 'trtr', 12),
(30, 'Teste', 'teste@teste.com', 'Hola Hola', 36);

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
(55, 'teste', 'fg', '00e2725684366f16c2654d3e3d42e907.jpg', 1, 39),
(56, 'teste', 'teste', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 2, 39),
(57, 'teste', 'teste', '2cc50bbc03dd28c93659e1aee42efc54.jpg', 3, 39),
(58, 'teste', 'E fd gfkgjfkgjkjk gfm,gnfmnhmnhm sllskfldkl k gnhngmnhmgnmnj gmhlghmg,mhg,mm hgnmhngmnhgmnhmgngfmlgmflglÃ§dfgmdmkdghkdgnhmd.\r\nA fkngmfngfgfgnfmngmfngfmnkfmgklfmgkfmglÃ§fmlÃ§gmflgfkgkfgfm,fgm,.\r\nO gfkgnfkng,fng,fgmn,mfngfgfmg,ng,mfngm,fngmfngmfngm,fngm,nfmgnfgkfjgnfm,ngfm,nm,nm,ngfgjkfngfmf,gfkg,fmg.dfndlkmfdmfdm,fd,;mfÃ§dlmd,.gmfngfmngm.fngskfsm.dngmfnsgdfskgdn.mhn,dgnhldgkn.dmnmhdgnfklg.dfmnhgm.,nhlkgd.', '00e2725684366f16c2654d3e3d42e907.jpg', 1, 40),
(54, 'Teste', 'A gnsjgnsjgnsmgnsgnsgnsfjngsfm,ngsfmgm,b m,bgm,am nkangkankgn mnkagnadjkngm nmanjanm nag ajnm an ajgnmagn ajn alknm. ank akn\r\nA gnsjgnsjgnsmgnsgnsgnsfjngsfm,ngsfmgm,b m,bgm,am nkangkankgn mnkagnadjkngm nmanjanm nag ajnm an ajgnmagn ajn alknm. ank akn\r\nA gnsjgnsjgnsmgnsgnsgnsfjngsfm,ngsfmgm,b m,bgm,am nkangkankgn mnkagnadjkngm nmanjanm nag ajnm an ajgnmagn ajn alknm. ank akn', '5a7730b73241032c40b958d836f4ebd4.jpg', 3, 38),
(48, 'FIlme x', 'ConteÃºdo', '00e2725684366f16c2654d3e3d42e907.jpg', 3, 36),
(53, 'Teste', 'TEste', '5a7730b73241032c40b958d836f4ebd4.jpg', 2, 38),
(52, 'teste', 'Teste', '7f2fbf989e851738fb62832b5c26f575.jpg', 1, 38),
(34, 'fgf', 'gffg', '2c995da864d734d03139eb6df6658680.jpg', 0, 32),
(35, 'fgf', 'gfgf', '2c995da864d734d03139eb6df6658680.jpg', 1, 32),
(36, 'gfgf', 'fgf', '2c995da864d734d03139eb6df6658680.jpg', 2, 32),
(37, 'Novo teste', 'gfgf', 'Nature__039571_.jpg', 0, 33),
(38, 'Novo teste 2', 'gfgfg', 'Paisagem_imagem_linda_-52.jpg', 1, 33),
(39, 'Novo teste 3', 'gfgdf', 'the-great-outdoors_1281_1600x1200.jpg', 2, 33),
(47, 'Crush', 'ContedÃºdo', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 2, 36),
(46, 'OdissÃ©ia', 'ContedÃºdo', '2cc50bbc03dd28c93659e1aee42efc54.jpg', 1, 36),
(59, 'teste', 'E fd gfkgjfkgjkjk gfm,gnfmnhmnhm sllskfldkl k gnhngmnhmgnmnj gmhlghmg,mhg,mm hgnmhngmnhgmnhmgngfmlgmflglÃ§dfgmdmkdghkdgnhmd.\r\nA fkngmfngfgfgnfmngmfngfmnkfmgklfmgkfmglÃ§fmlÃ§gmflgfkgkfgfm,fgm,.\r\nO gfkgnfkng,fng,fgmn,mfngfgfmg,ng,mfngm,fngmfngmfngm,fngm,nfmgnfgkfjgnfm,ngfm,nm,nm,ngfgjkfngfmf,gfkg,fmg.dfndlkmfdmfdm,fd,;mfÃ§dlmd,.gmfngfmngm.fngskfsm.dngmfnsgdfskgdn.mhn,dgnhldgkn.dmnmhdgnfklg.dfmnhgm.,nhlkgd.', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 2, 40),
(60, 'teste', 'E fd gfkgjfkgjkjk gfm,gnfmnhmnhm sllskfldkl k gnhngmnhmgnmnj gmhlghmg,mhg,mm hgnmhngmnhgmnhmgngfmlgmflglÃ§dfgmdmkdghkdgnhmd.\r\nA fkngmfngfgfgnfmngmfngfmnkfmgklfmgkfmglÃ§fmlÃ§gmflgfkgkfgfm,fgm,.\r\nO gfkgnfkng,fng,fgmn,mfngfgfmg,ng,mfngm,fngmfngmfngm,fngm,nfmgnfgkfjgnfm,ngfm,nm,nm,ngfgjkfngfmf,gfkg,fmg.dfndlkmfdmfdm,fd,;mfÃ§dlmd,.gmfngfmngm.fngskfsm.dngmfnsgdfskgdn.mhn,dgnhldgkn.dmnmhdgnfklg.dfmnhgm.,nhlkgd.', '2c995da864d734d03139eb6df6658680.jpg', 3, 40),
(61, 'hg', 'E fd gfkgjfkgjkjk gfm,gnfmnhmnhm sllskfldkl k gnhngmnhmgnmnj gmhlghmg,mhg,mm hgnmhngmnhgmnhmgngfmlgmflg.\r\nFkkokokokokogdfogkdflgkdflkgdflkgdflkgfldgkdflkgldfkgldfkgldfkgldfkgldkgldkgldkglg.', '00e2725684366f16c2654d3e3d42e907.jpg', 1, 41),
(62, 'hg', 'E fd gfkgjfkgjkjk gfm,gnfmnhmnhm sllskfldkl k gnhngmnhmgnmnj gmhlghmg,mhg,mm hgnmhngmnhgmnhmgngfmlgmflg.\r\nFkkokokokokogdfogkdflgkdflkgdflkgdflkgfldgkdflkgldfkgldfkgldfkgldfkgldkgldkgldkglg.', '2cc50bbc03dd28c93659e1aee42efc54.jpg', 2, 41),
(63, 'hg', 'E fd gfkgjfkgjkjk gfm,gnfmnhmnhm sllskfldkl k gnhngmnhmgnmnj gmhlghmg,mhg,mm hgnmhngmnhgmnhmgngfmlgmflg.\r\nFkkokokokokogdfogkdflgkdflkgdflkgdflkgfldgkdflkgldfkgldfkgldfkgldfkgldkgldkgldkglg.', '5a7730b73241032c40b958d836f4ebd4.jpg', 3, 41),
(64, 'Teste', 'A gfkdgjfklgjfdklgjdfkgnmdn gdfngklndfjnjnjm gfklgndfkn ngdfngjdfgm. nmdfngn nmhdnfgjd. nhdgkdjnm ndfgkjdfngjkdl\r\ngfgkdfmgkdfngmdjkgnfdjgndfgdfjkgnkdfjgngkdfj.\r\nO dfkgmndfkgnjkndfgjdfnmgdf,gndf,mnhgjhkdg,gndfnmgfnd,gnfdgdfkgjdf,jngmsngkjfsngmsgnsd.,fndflkgnfgnfmngfmh\r\n ghgkjkfjgkdflgdfkgmdfkl.', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 1, 42),
(65, 'Teste', 'A gfkdgjfklgjfdklgjdfkgnmdn gdfngklndfjnjnjm gfklgndfkn ngdfngjdfgm. nmdfngn nmhdnfgjd. nhdgkdjnm ndfgkjdfngjkdlgm \r\ngfgkdfmgkdfngmdjkgnfdjgndfgdfjkgnkdfjgngkdfj.\r\nO gdfkgmndfkgnjkndfgjdfnmgdf,gndf,mnhgjhkdg,gndfnmgfnd,gnfdgdfkgjdf,jngmsngkjfsngmsgnsd.,fndflkgnfgnfmngfmhg\r\n ghgkjkfjgkdflgdfkgmdfkl.', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 2, 42),
(66, 'Teste', 'A gdfjlkgjdfkgjdfklgjdfklgjdfklgjdfklgjdfklgjdfkljgkldfjgkdfjgkldfjgkldfjgkljdfklgjdfklgjkgnhmfgnhfghjfghfgnhmgnhmgnhmgnm.\r\n\r\nO gdfkgndfkngmnhgm,nhghkgjhfgnhgm,fnhfgm,hnmgndfmg dfmgkdfgdfmgdf gm dfgdfkgdfmg dfmg dfmg fm, m km m p', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 3, 42),
(67, 'teste', 'O fgskgjsfklgsdkfjsdkjfklsdjfsfngjbfmgbssdk,fsdbngbfsnbgsfnbgsfn,bgsdm,fmsdfnmsdnf,mdlfmsd,gmfmgnflhjfhnfmnmsgn\r\n gfskgsjkgjsdfkjsdkfjskdjfkskÃ§.\r\nA gfkdgmfngmfdngmdfng.dfmng,.fdngÃ§sg,s.ngfmngfhmgnhgmnhm.dn.fgnf,dgmdf,mgdfmg;dfmg,fm,gm,f.dmh,.gm,gjkfhjg', '00e2725684366f16c2654d3e3d42e907.jpg', 1, 43),
(68, 'teste', 'O fgskgjsfklgsdkfjsdkjfklsdjfsfngjbfmgbssdk,fsdbngbfsnbgsfnbgsfn,bgsdm,fmsdfnmsdnf,mdlfmsd,gmfmgnflhjfhnfmnmsgn\r\n gfskgsjkgjsdfkjsdkfjskdjfkskÃ§.\r\nA gfkdgmfngmfdngmdfng.dfmng,.fdngÃ§sg,s.ngfmngfhmgnhgmnhm.dn.fgnf,dgmdf,mgdfmg;dfmg,fm,gm,f.dmh,.gm,gjkfhjg', '00e2725684366f16c2654d3e3d42e907.jpg', 2, 43),
(69, 'teste', 'O fgskgjsfklgsdkfjsdkjfklsdjfsfngjbfmgbssdk,fsdbngbfsnbgsfnbgsfn,bgsdm,fmsdfnmsdnf,mdlfmsd,gmfmgnflhjfhnfmnmsgn\r\n gfskgsjkgjsdfkjsdkfjskdjfkskÃ§.\r\nA gfkdgmfngmfdngmdfng.dfmng,.fdngÃ§sg,s.ngfmngfhmgnhgmnhm.dn.fgnf,dgmdf,mgdfmg;dfmg,fm,gm,f.dmh,.gm,gjkfhjg', '00e2725684366f16c2654d3e3d42e907.jpg', 3, 43),
(70, 'A gfngkndfgndfm,gndfm,gndfmn gsfsdfkjsdfklsjkjkl gdfgndfklgnmndm gsklmdflkdmsfklmk gfdjgnslkgnsklnkgfls gmskmksdmfklskfmsklkl', 'Teste', '0f93d3426cd5b2b4c66b2b4ec9053c4c.jpg', 1, 45),
(71, 'Teste', 'Teste', '7f2fbf989e851738fb62832b5c26f575.jpg', 2, 45),
(72, 'Teste', 'teste', 'novonovo.png', 3, 45),
(82, 'Scar (O Rei LeÃ£o)', 'Sim, o maior vilÃ£o da nossa infÃ¢ncia e o maior vilÃ£o da histÃ³ria do cinema. Scar merecidamente entra para a primeira \r\ncolocaÃ§Ã£o dessa lista.\r\n\r\nNa animaÃ§Ã£o da Disney "O Rei LeÃ£o", Scar Ã© o irmÃ£o do rei da selva Mufasa e tio de Simba, o protagonista da histÃ³ria.\r\n PorÃ©m Scar Ã© ambicioso pelo trono, planejando assim a morte de seu prÃ³prio irmÃ£o e de seu sobrinho, para que seja\r\n o Ãºnico com direito de ser Rei.\r\n\r\nScar mata seu irmÃ£o na lendÃ¡ria cena da "debandada de gnus", o jogando de cima do desfiladeiro. A frase "Vida longa\r\n ao Rei" ficarÃ¡ sempre na memÃ³ria dos telespectadores que assistiram a animaÃ§Ã£o, formando um Ã³dio ao personagem.\r\n\r\nFelizmente Simba sobrevive e consegue ocupar seu lugar de direito vingando a morte do pai.', 'n1-top1.jpg', 1, 57),
(81, 'teste', 'teste', 'capa1.PNG', 3, 55),
(80, 'teste', 'teste', 'capa1.PNG', 2, 55),
(79, 'teste', 'teste', '442c1f1f920657142c8698210d4b69cf.png', 1, 55),
(83, 'Coringa (Batman - O Cavaleiro das Trevas)', 'JÃ¡ houve diversas adaptaÃ§Ãµes do Coringa nos cinemas e TV, porÃ©m nenhuma delas ultrapassa a adaptaÃ§Ã£o de Heath \r\nLedger na interpretaÃ§Ã£o desse papel em Batman - O Cavaleiro das Trevas.\r\n\r\nNessa versÃ£o do antagonista, ele se apresenta como um verdadeiro psicopata, efetuando planos de maneira mais \r\ninteligente que o Batman, o deixando como um coadjuvante na histÃ³ria.\r\n\r\nO Coringa de Ledger, juntamente com Darth Vader, serÃ£o sempre uma reverencia no que diz respeito a antagonismo,\r\n fazendo parte assim da cultura pop.', 'n1-top2.jpg', 2, 57),
(84, 'Darth Vader (Trilogia Star Wars)', 'Finalmente o lado negro da forÃ§a. Darth Vader Ã© visto como um dos maiores vilÃµes da histÃ³ria da cinema, deixando sua\r\nmarca nos filmes da trilogia Star Wars.\r\n\r\nDarth Vader treina para ser Jedi, porÃ©m permite que o lado negro da forÃ§a o corrompe, e se tornar uma das maiores \r\nameaÃ§as das galÃ¡xias, sob a ordem de Darth Sidious.', 'n1-top3.jpg', 3, 57),
(85, 'Commodus (Gladiador)', 'Commodus Ã© o filho do imperador Marcus Aurelius, que deseja colocar o general Maximus como seu sucessor ao trono, \r\npois nÃ£o confia em seu filho essa responsabilidade. Sabendo disso, Commodus mata seu pai e ordena matar Maximus,\r\n para assim ocupar lugar a posiÃ§Ã£o de imperador.\r\n\r\nCommodus descobre que o ex-general ainda estÃ¡ vivo e lutando nas arenas como gladiador, mesmo assim ainda \r\nquer terminar o serviÃ§o e o fere covardemente antes de uma luta entre os dois.\r\n\r\nEle Ã© apresentado como uma pessoas ambiciosa, sem escrÃºpulos e ainda por cima tem um desejo doentio pela sua \r\nprÃ³pria irmÃ£.', 'n1-top4.jpg', 4, 57),
(86, 'John Doe ( Se7en)', 'Em Se7ven dois detetives (David Mills e William Somerset) tentam solucionar um caso em que envolve assassinatos \r\nem sÃ©rie baseados nos sete pecados capitais. Ao final, o serial killer "John Doe" Ã© preso (se entrega a polÃ­cia), e entra\r\n em acordo com os detetives para mostrar o Ãºltimo corpo. PorÃ©m o corpo (ou parte dele) Ã© da prÃ³pria mulher de um \r\ndos detetives (David Mills), trazendo assim uma reviravolta na histÃ³ria.', 'n1-top5.jpg', 5, 57),
(87, 'Amon Goeth (A Lista de Schindler)', 'Cruel, frio e calculista, Amon Goeth sem sombra de dÃºvidas deixou marcado para sempre com um dos maiores vilÃµes \r\nda histÃ³ria do cinema; apesar de ter existido na vida real.\r\n\r\nAmon Goeth Ã© um oficial nazista que comanda um campo de concentraÃ§Ã£o na PolÃ´nia com mÃ£os de ferro. NÃ£o tem\r\npiedade dos judeus  e os trata de forma desumana.\r\n', 'n1-top6.jpg', 6, 57),
(88, 'Anton Chigurh (Onde os Fracos NÃ£o Tem Vez)', 'Em "Onde os Fracos NÃ£o Tem Vez" Javier Bardem tem uma excelente atuaÃ§Ã£o ao interpretar o vilÃ£o Anton Chigurh, \r\nao qual lhe rendeu o oscar de ator coadjuvante.\r\n\r\nAnton Chigurh Ã© um assassino frio e que nÃ£o demonstra nenhuma emoÃ§Ã£o, cometendo certos assassinatos sem \r\nnenhum motivo aparente.\r\n\r\nNa trama, Anton Chigurh Ã© contratado para recuperar o dinheiro de uma negociaÃ§Ã£o entre traficantes que acaba com\r\n todos os envolvidos mortos. Dinheiro ao qual foi roubado por Llewelyn Moss, um veterano da guerra do VietnÃ£. Tal \r\nsituaÃ§Ã£o se desenrola em uma perseguiÃ§Ã£o, fazendo com que Chigurh cometa diversos assassinatos, atÃ© concluir \r\nseu objetivo.', 'n1-top7.jpg', 7, 57),
(89, 'Hans Landa (Bastardos InglÃ³rios)', 'Provavelmente a melhor representaÃ§Ã£o de um vilÃ£o nos filmes de Quentin Tarantino, Hans Landa rouba a cena no\r\n filme Bastardos InglÃ³rios, sendo um antagonista carismÃ¡tico, sociÃ¡vel e bastante intelectual.\r\n\r\nHans Landa Ã© um oficial nazista que utiliza de sua inteligÃªncia e estratÃ©gias para cumprir suas obrigaÃ§Ãµes como \r\nmilitar e objetivos pessoais.', 'n1-top8.jpg', 8, 57),
(90, 'Norman Bates (Psicose)', 'Em Psicose uma secretÃ¡ria se apropria do dinheiro de seu patrÃ£o apÃ³s a realizaÃ§Ã£o de uma venda. Assim, ela decide \r\nfugir com o dinheiro, e durante o percurso se hospeda em um motel.\r\n\r\nO dono do motel (Norman Bates) aparenta ser um rapaz normal, cumprindo seu dever como proprietÃ¡rio do local. \r\nApesar de seu comportamento estranho em relaÃ§Ã£o a sua mÃ£e. PorÃ©m apÃ³s o assassinato da prÃ³pria secretÃ¡ria, \r\nvemos que existe uma mente perturbada por trÃ¡s de Bates.', 'n1-top9.jpg', 9, 57),
(91, 'HAL 9000 (2001 - Uma OdissÃ©ia no EspaÃ§o)', 'Hal 9000 Ã© uma inteligÃªncia artificial que controla todo o funcionamento da nave Discovery, onde se encontra dois \r\ntripulantes David Bowman e Frank Poole. HAL foi construÃ­do para ser o cÃ©rebro da espaÃ§onave, tendo como \r\nresponsabilidade o bom desempenho da mesma, e para obedecer os comandos dos humanos ali presentes. PorÃ©m, \r\ncomo HAL sendo um supercomputador, passa a ter consciÃªncia prÃ³pria e comeÃ§a a considerar os tripulantes como \r\ncriaturas descartÃ¡veis, tendo em vista que ele coloca a culpa das falhas no prÃ³prio ser humano.\r\n\r\nDavid e Frank percebem que estÃ¡ ocorrendo algum problema com o HAL e, cogitam sua desativaÃ§Ã£o, porÃ©m ele \r\ndescobre seus planos, e isso acaba se tornando uma ameaÃ§a para suas vidas.', 'n1-top10.jpg', 10, 57),
(92, 'John Doe (Se7en)', 'Esse Ã© o John, sndmfndmnmn gfgnfmngmfn sdfmsdkfmdls gfnmgnfmngf sd,mfsdmmf, gfmgnfmnm gfs,gms, gfm \r\ngfkgfkgmfgnfmngfmgnmfngfmnsmnsm gnfmmgs,mf,sdmf,m,m ,m,gmdnm.nm.m.\r\nO gfnmg nfm,ngmsf ngmsnmns mnmn gf,msg,smg,sdmf,dmsf,msd,mf,sdm, gfmgdnm gfkjkfk lklkl gfkl hfskgjsfkl fgkj kjkk\r\n gflkgflkglfglfkgfklgkflgfl.', 'n1-top6.png', 1, 58),
(93, 'Anton Chigurh (Onde os Fracos NÃ£o Tem Vez)', 'Esse Ã© o cara, sndmfndmnmn gfgnfmngmfn sdfmsdkfmdls gfnmgnfmngf sd,mfsdmmf, gfmgnfmnm gfs,gms, gfm \r\ngfkgfkgmfgnfmngfmgnmfngfmnsmnsm gnfmmgs,mf,sdmf,m,m ,m,gmdnm.nm.m.\r\nO gfnmg nfm,ngmsf ngmsnmns mnmn gf,msg,smg,sdmf,dmsf,msd,mf,sdm, gfmgdnm gfkjkfk lklkl gfkl hfskgjsfkl fgkj kjkk\r\n gflkgflkglfglfkgfklgkflgfl.', 'n1-top7.jpg', 2, 58),
(94, 'Hans Landa (Bastardos inglÃ³rios)', 'Esse Ã© o Hans, sndmfndmnmn gfgnfmngmfn sdfmsdkfmdls gfnmgnfmngf sd,mfsdmmf, gfmgnfmnm gfs,gms, gfm \r\ngfkgfkgmfgnfmngfmgnmfngfmnsmnsm gnfmmgs,mf,sdmf,m,m ,m,gmdnm.nm.m.\r\nO gfnmg nfm,ngmsf ngmsnmns mnmn gf,msg,smg,sdmf,dmsf,msd,mf,sdm, gfmgdnm gfkjkfk lklkl gfkl hfskgjsfkl fgkj kjkk\r\n gflkgflkglfglfkgfklgkflgfl.', 'n1-top8.jpg', 3, 58);

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
(20, 'teste', 'teste', '04785ad727d836e91e5054c4b214cf6e.jpg', '2017-02-15', 'Lucas', 'cinema'),
(38, 'Titulo', 'gdfjhnjnhmdgnfkjngmdfgnfmdgnfgfgkfjngfmg.f\ngdfkgfmgfmgfmgf,mgf,.mgf,.mgf.gmdf.,gmf,..\ndgkfiokikÃ§Ã§lklÃ§.', 'da3569bd8a42f94e062603c77566b87f.jpg', '2017-03-23', 'Pedro', 'animes'),
(36, 'Melhores filmes de 2012', 'jkdfljgkfjgfjgklfjgklfdngmdfngmdfngdfgjfkngfngmufdngmufngmpdfngmudfngmufdng\r\ngksfpgksfÃ§gsfgjfk.gjsfkgnm.sfngmsngm.\r\ngfmgmknmfgfgnfm,gnfmgnfmg,.\r\nhgfmhklgmhgklmhhkl.\r\nfskmsm.snsmfsdm.sdnfmsd.fm..\r\nfsdmkfdmfsdkmfkdmfsldkfmsdkfmkd\r\nfksdlÃ§fksdÃ§lfksdÃ§lfsdÃ§fÃ§sdl.\r\ngdmfkgmfklgmfklgmdfklmlk.', '532ecb873237243a5ccec2003ba20ae5.jpg', '2017-03-13', 'Lucas', 'cinema'),
(25, 'Hey', 'hjgfdhdndmnddjknhdgm,hngdmhnjh,dgnmh,dgnhjhkgnhdm,nhdgm,nhdgmnhdg\r\nnhjkdnhdhnmdg,nhdgjhdgknhm,dgnhmd,nhmdnhjndg\r\nm,hndgm,nhdjn\r\nbmnbmnbnbnmbmnbmnbnmbmnbn\r\ngfjghdjfghdfjghdfjghdfjghfjkghfjkghfjkghfjghfjkhgfjkhgfjkghfjkghfjkghfj\r\njhjgjhghghjghghghgjjhgjhgjhgjhgjhgjhghj\r\ngjdfklgjfkgjfkljgklfjgkfjgfkgk\r\ngfjkgljdfklgjfklgjfklgjfklgjfkljgfkljgfkljgfklgjfkljgfkljgklfjgklfjgkfjkl\r\njkhjkhjhjhjkjkhjk', '74c79b46ee7a92cfb7abbe1dea272095.jpg', '2017-02-16', 'Pedro', 'cinema'),
(39, 'TesteNovo', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA.\r\nAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA\r\nAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '687fd7e2d28ab43042c29231d6500312.jpg', '2017-04-11', 'Pedro', 'animes'),
(33, 'Noticia do momento', 'O Homem InvisÃ­vel Ã© um filme baseado num obra criada em 1930, e conta a \r\nhistÃ³ria de um homem invisÃ­vel.', '89abdb35433a23c7734a625927576ac9.jpg', '2017-02-16', 'Lucas', 'cinema'),
(40, 'Hola', 'A fdkjkfdjk fdjkjk gfjkjk dkfjdkjk dakfjdkj akjkf fdjkjk fdkjk fkd jkfkojfd.\r\nF klfkjfskjskfjgsfkj jkgjskgjlsfjkglsklfdsflsdÃ§flÃ§sdlfÃ§sdkfljsdkfjsdlfjk \r\nfdjkjdfkjfkdjfkdjfkdjfijdkdfd,kfdlfdfpdlÃ§fdlfÃ§dlfÃ§dlfÃ§dpfdÃ§fldÃ§flÃ§dlfÃ§dlÃ§\r\n fdkjfdkjfdljfdlkfdkfldkfl', '70c9e005c6990bcbaebb7355dc9cbc00.jpg', '2017-05-22', 'Pedro', 'animes'),
(41, 'Outro hola', 'A fdkjkfdjk fdjkjk gfjkjk dkfjdkjk dakfjdkj akjkf fdjkjk fdkjk fkd jkfkojfd.gjkjfkjgkfjkgjfkjgk.\r\nOgfjkjfkjgfkgjfkjgfkgjfkjgfkgjfkgjfkjgkfm,ms,fnjngfmgmfnm.\r\nO fgkfmgkfgkfmgkfmgfkgfkgmfkgmfkgmfkgmfkmgfkmgkfmgkfmgkfmgkfmgkfmgkfmm\r\n gfkgflgfklf.', '14426ff9cf30c0355472cff6ad6addc1.jpg', '2017-05-22', 'Pedro', 'games'),
(42, 'Teste', 'A gfjkgjdfklj gdfkjhdgkljhdkl gdfkjgkldfjkljk fkgjdfklgjkjk gdfkjklgjfkl gfkgjdlkjk gdfk.\r\nO gdfkgjdfkgjfkdjgdfkngmdfnjdgkngkdjndfgnfdm,gndfmgndfm,gndfmnmnmnjnjk \r\ngfgfkjgfkgjfkjfjgf,gf, gkflgkflgkflkgflgkfl.\r\nA kgflgkdflgkdflgkdflgkldfkgdfmgdfgndf.gndfgkjdf,gnmdfngmdf.\r\nO gndfngdfmngfmd,gndfm,gndfmgndfmgnmdfgnfmdgndfm,gndfmgnfdmgndfm\r\n gfkgjfkgnfdmgnfdgndfmgnfdmgndfmgnmdfngfmngfmngmfngmfngmfngmnmnm \r\ngfkgfmgndfm.', 'd48bac0f65a5203eed9d09050cf088a2.jpg', '2017-05-22', 'Pedro', 'games'),
(43, 'Ã‰ o texto', 'A ofdgkofkgofkgodfkgdfmngndfgkf,gbs,b gbdfn,b ngbfdnbmnhd mhndg,mhdbngl\r\n gfdjgdfnjgndfgndfmgndf,gndfmgndfmngdfmngdfmgndfm,fdgmdf,.\r\n\r\nO gdfkgjdfklgdfkgndfmgndf,gndfgnfgksjngmsfgm,hgh.', '49d627579f253d6436d74d4f3dc679fa.jpg', '2017-05-22', 'Lucas', 'animes'),
(45, 'Editado de Novo', 'Editado de novo 123', 'novo123.jpg', '2017-05-22', 'Lucas', 'games'),
(57, 'Os Maiores VilÃµes do Cinema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5335ad6083b628b0ca0526b22c16388f.jpg', '2017-05-25', 'Lucas', 'cinema'),
(55, 'teste', 'tr', '01136b16f3847fb993ad679666b0a2a5.png', '2017-05-25', 'Lucas', 'cinema'),
(58, 'teste editado', 'Editado ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'b1ae5df762e4077bf5fd4268bb6b501a.png', '2017-05-25', 'Lucas', 'cinema'),
(67, 'teste', 'Editado ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '360a955ae2a5a7b336147fef8b2448f2.png', '2017-05-30', 'Fernando', 'cinema');

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `item_noticia`
--
ALTER TABLE `item_noticia`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
