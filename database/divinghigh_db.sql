-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2024 at 09:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divinghigh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(72) NOT NULL,
  `acesso` datetime DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nome`, `username`, `password`, `acesso`, `ativo`) VALUES
(1, 'João Afonso Silva Alferes Vermelho', 'admin', '$2y$10$JHQPtr5Ci21hcay0CCM8l./FVPSSd4vr4Z.uAxMo4fNtSQhweWnTq', '2022-02-28 15:09:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `atleta`
--

CREATE TABLE `atleta` (
  `id` int(11) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `nacionalidade` varchar(30) NOT NULL,
  `idade` tinyint(2) NOT NULL,
  `altura` int(3) NOT NULL,
  `fotografia` varchar(50) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `atleta`
--

INSERT INTO `atleta` (`id`, `sexo`, `nome`, `sobrenome`, `nacionalidade`, `idade`, `altura`, `fotografia`, `ativo`) VALUES
(7, 1, 'João', 'Vermelho', 'Portugal', 17, 186, 'atletas_62c4d8c0b7a8f.png', 1),
(8, 1, 'Orlando ', 'Duque', 'Colombia', 47, 175, 'atletas_6240c5fd7913c.png', 1),
(9, 1, 'Gary ', 'Hunt', 'Francês', 37, 173, 'atletas_6240c5f5d6e76.png', 1),
(10, 2, 'Rhiannan ', 'Iffland', 'Australia', 30, 167, 'atletas_6240d6f1a3618.png', 1),
(17, 2, 'Adriana ', 'Jiménez', 'México', 37, 158, 'atletas_6297f829871a3.png', 1),
(12, 2, 'Iris ', 'Schmidbauer', 'Alemanha', 26, 172, 'atletas_6240d92724530.png', 1),
(13, 2, 'Lysanne ', 'Richard', 'Canada', 40, 159, 'atletas_6240dd55a001f.png', 1),
(14, 1, 'Alessandro ', 'De Rose', 'Itália', 29, 173, 'atletas_6240de519f550.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `duvidas`
--

CREATE TABLE `duvidas` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `duvidas`
--

INSERT INTO `duvidas` (`id`, `email`, `titulo`, `texto`) VALUES
(6, 'joaoferreira24@gmail.com', 'O meu browser não corre o vosso sistema', 'Boa tarde, estou a usar o Bilingus Browser, e o vosso sistema não corre bem, não consigo ver os mapas nem os meetings, obrigado.');

-- --------------------------------------------------------

--
-- Table structure for table `equipa`
--

CREATE TABLE `equipa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `fotografia` varchar(50) NOT NULL,
  `ordem` int(1) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipa`
--

INSERT INTO `equipa` (`id`, `nome`, `cargo`, `fotografia`, `ordem`, `ativo`) VALUES
(1, 'João Vermelho', 'Owner', 'utilizadores_628f5d06930c7.png', 2, 1),
(2, 'Simão Cunha', 'Co-owner', 'equipa_62c468ec8fe54.png', 1, 1),
(3, 'João Faria', 'Co-owner', 'equipa_62c468f68a1fd.png', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` text NOT NULL,
  `localidade` varchar(40) NOT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `ordem` int(1) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `subtitulo`, `localidade`, `imagem`, `data`, `ordem`, `ativo`) VALUES
(2, 'Red Bull Cliff Diving World Series', 'Pela primeira vez, o Instituto Contemporâneo da Arte irá abrir portas para a aberta da temporada este ano, o que vai facilitar a acessibilidade dos fãs mais do que nunca.', 'Boston, Estados Unidos', 'eventos_62446ca0e11fd.png', '2022-06-04', 3, 1),
(4, 'Exibição de Cliff Diving da Red Bull ', 'Alguns dos melhores atletas irão realizar uma exibição do desporto na Oslo Opera House, no coração da cidade de Oslo.\r\n', 'Oslo, Noruega', 'eventos_62446df0b1b83.png', '2022-08-09', 1, 1),
(5, 'Red Bull Cliff Diving World Series', 'A temporada retorna na capital dinamarquesa pela primeira vez desde 2013, este ano será a primeira vez que uma atleta feminina irá mostrar as suas habilidades numa prancha com o dobro da altura da prancha olímpica.', 'Copenhaga, Dinamarca', 'eventos_62c4e24d334e1.png', '2022-07-16', NULL, 1),
(6, 'Red Bull Cliff Diving World Series', 'A localização original da inauguração da World Series de 2009, Sisikon já fui escolhida na inaugração da World Series em 2009, em 2010 e 2018. Volta agora no Lake Uri, rio que tem a sua marca para o temporada de 2022.', 'Sisikon, Suiça', 'eventos_62c4e30a67394.png', '2022-09-11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `data` date DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`id`, `titulo`, `descricao`, `thumbnail`, `url`, `data`, `ativo`) VALUES
(9, 'Momentos de Cliff Diving que tu não podes perder', 'Eis os melhores momentos do último evento de Cliff Diving em Paris, acompanha mais na nossa página!', 'highlights_62c4de0380d6c.png', 'https://www.redbull.com/embed/rrn:content:videos:0e923f21-120d-4f9d-aade-8dd52b77b2ad:en-INT', '2021-08-14', 1),
(15, 'Melhores momentos de Boston 2022', 'Vê agora os melhores momentos dos atletas femininos e masculinos nas competições de Boston no decorrer do Campeonato Mundial', 'highlights_62c4db5530cec.png', 'https://www.redbull.com/embed/rrn:content:videos:840c5819-8f5d-42cc-a4a2-1075c9b07041:en-INT', '2022-07-06', 1),
(16, 'Vê como Garry Hunt venceu em Stari Most', 'Revê o mergulho vencedor da competição em que Garry Hunt leva a sua medalha de ouro.', 'highlights_62c4dd0345cc4.png', 'https://www.redbull.com/embed/rrn:content:videos:4a0ebdd8-2cf6-4406-87a1-d1216511ae38:en-INT', '2022-07-06', 1),
(17, 'É assim que os atletas conquistam o público', 'Revê os melhores momentos da paragem do Red Bull Cliff Diving World Series 2021', 'highlights_62c4dd903464d.png', 'https://www.redbull.com/embed/rrn:content:videos:285a84c0-ae05-44db-8654-5a3d1bef765b:en-INT', '2022-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `imagensindex`
--

CREATE TABLE `imagensindex` (
  `id` int(11) NOT NULL,
  `alt` varchar(100) DEFAULT NULL,
  `descricao` varchar(100) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `imagensindex`
--

INSERT INTO `imagensindex` (`id`, `alt`, `descricao`, `imagem`, `ativo`) VALUES
(1, '1', '', 'imagensIndex_624b5aa3d1448.png', 1),
(2, '2', '', 'imagensIndex_624b5ab12f3db.png', 1),
(3, '3', '', 'imagensIndex_624b5ab81b4ee.png', 1),
(4, '4', '', 'imagensIndex_624b5abe95419.png', 1),
(5, '5', '', 'imagensIndex_624b5ac4ecb62.png', 1),
(6, '6', '', 'imagensIndex_624b5acbd48e2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `session` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `session`, `ip`, `url`, `data`, `ativo`) VALUES
(1, 'lm1hs7olpsm2a7f7ev29v17a4q', '::1', 'index.php', '2024-11-30 21:04:59', 1),
(2, 'lm1hs7olpsm2a7f7ev29v17a4q', '::1', '404error.php', '2024-11-30 21:05:09', 1),
(3, 'lm1hs7olpsm2a7f7ev29v17a4q', '::1', '404error.php', '2024-11-30 21:05:09', 1),
(4, 'lm1hs7olpsm2a7f7ev29v17a4q', '::1', '404error.php', '2024-11-30 21:05:09', 1),
(5, '057u0oeq4rcvs0679d6ip8jh6i', '::1', '404error.php', '2024-11-30 21:05:09', 1),
(6, 'lm1hs7olpsm2a7f7ev29v17a4q', '::1', 'index.php', '2024-11-30 21:05:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mapa_interativo`
--

CREATE TABLE `mapa_interativo` (
  `id` int(11) NOT NULL,
  `localidade` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `dificuldade` tinyint(1) NOT NULL,
  `condicoes` tinyint(1) NOT NULL,
  `assistencia_medica` tinyint(1) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mapa_interativo`
--

INSERT INTO `mapa_interativo` (`id`, `localidade`, `imagem`, `descricao`, `dificuldade`, `condicoes`, `assistencia_medica`, `rating`, `ativo`) VALUES
(1, 'Praia da Aurora', 'mapa_62c462eac3aab.png', '', 3, 4, 3, 4, 1),
(2, 'Praia Fluvial de Ribamondego', 'mapa_62c462f833322.png', '', 2, 3, 5, 4, 1),
(3, 'Praia de Benagil', 'mapa_62c46303ae1ff.png', '', 3, 4, 5, 5, 1),
(4, 'Arco da Albandeira', 'mapa_62c4630b5e129.png', '', 4, 4, 3, 4, 1),
(5, 'Praia do Carvalho', 'mapa_62c4631249771.png', '', 3, 4, 5, 5, 1),
(6, 'Ilheu da Vila Franca do Campo', 'mapa_62c46318aa881.png', '', 5, 5, 3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `local` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  `num_participantes` int(3) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `user`, `imagem`, `titulo`, `descricao`, `local`, `data`, `num_participantes`, `ativo`) VALUES
(45, 'kaydow_diver', 'mapa_62c462eac3aab.png', 'Vem saltar connosco!', 'Com a companhia de Gary Hunt, aprende os básicos do Cliff Diving', 'Praia da Aurora', '2022-07-26 16:00:00', 2, 1),
(47, 'kaydow_diver', 'mapa_62c4631249771.png', 'Quero conhecer gente nova!', 'Estou pronto para entrar em desafios com vocês, bons mergulhos!', 'Praia do Carvalho', '2022-07-22 09:00:00', 1, 1),
(48, 'simaocunha', 'mapa_62c46303ae1ff.png', 'Amei esta ideia e decidi experimentar!', 'Sou iniciante mas gostava de saber mais sobre o Cliff Diving.', 'Praia de Benagil', '2022-07-28 14:00:00', 2, 1),
(49, 'joaofaria', 'mapa_62c46318aa881.png', 'Bora lá nos aventurar!', 'Adoro saltar dos penhascos mais altos, embarcas comigo nesta aventura?', 'Ilheu da Vila Franca do Campo', '2022-07-13 10:00:00', 3, 1),
(52, 'aa', 'mapa_62c5736e9e1d7.png', 'teste', 'teste', 'Praia Fluvial de Ribamondego', '2022-07-04 12:34:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(1) NOT NULL,
  `pai` int(3) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `urlfriendly` varchar(50) DEFAULT NULL,
  `ordem` int(4) NOT NULL,
  `filter` int(11) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `pai`, `nome`, `url`, `urlfriendly`, `ordem`, `filter`, `ativo`) VALUES
(1, 0, 'Home', 'index.php', 'homepage', 1, 0, 1),
(3, 0, 'Notícias', 'noticias.php?p=1', 'noticias', 4, 1, 1),
(2, 0, 'Atletas', 'atletas.php', 'atletas', 2, 1, 1),
(4, 0, 'Contacte-nos', 'contact.php', 'contactos', 6, 0, 1),
(155, 0, 'Eventos', 'eventos.php', 'eventos', 4, 1, 1),
(156, 0, 'Loja', 'shop.php', 'loja', 5, 0, 0),
(157, 0, 'Highlights', 'highlights.php?p=1', 'highlights', 3, 1, 1),
(159, 0, 'Sobre Nós', 'sobrenos.php', 'sobrenos', 5, 1, 1),
(160, 0, 'Meetings', 'meetings.php', 'meetings', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `ativo`) VALUES
(1, 'teste@gmail.com', 1),
(2, 'silva@gmail.com', 1),
(3, 'joaovermelho3@gmail.com', 1),
(4, 'ruipedrovermelho@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` mediumtext NOT NULL,
  `subtitulo` mediumtext NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `imagem` varchar(500) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `ordem` int(1) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `subtitulo`, `conteudo`, `imagem`, `data`, `ordem`, `ativo`) VALUES
(7, 'Sydney Harbor vai apresentar o evento 2022 Red Bull Cliff Diving', 'Um dos eventos mais esperados do ano', 'Após o anúncio de uma temporada de oito eventos no início deste mês, agora pode ser revelado que o evento final da Red Bull Cliff Diving World Series deste ano acontecerá em Sydney Harbour, Austrália. ', 'noticias_624470abee0e8.png', '2022-03-24', 3, 1),
(8, 'Mergulhar na agua a 85 quilómetro por hora : bem vindo ao Cliff Diving', 'O mergulhador Orlando Duque e o diretor de competição Hassan Mouti compartilham como preparar o corpo, a mente e as emoções para um desporto que leva os atletas ao limite. ', 'Graças a Duque, bem como aos muitos bravos homens e mulheres que competiram no Red Bull Cliff Diving World Series desde 2009, pudemos testemunhar mergulhos sensacionais, emocionantes lutas pelo título e recordes em alguns dos mais deslumbrantes lugares do planeta. ', 'noticias_62447168e810e.png', '2022-01-03', 1, 1),
(6, 'Rhiannan Iffland salta de um balão de ar quente em movimento', '', 'Rhiannan Iffland, tetracampeã do Red Bull Cliff Diving World Series, é a primeira a saltar de um balão de ar quente em movimento. O feito foi alcançado no Lago Lostock, em New South Wales.', 'noticias_62446fada611d.png', '2022-02-15', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parcerias`
--

CREATE TABLE `parcerias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `parcerias`
--

INSERT INTO `parcerias` (`id`, `nome`, `imagem`, `link`, `ativo`) VALUES
(1, 'Redbull', 'parcerias_629473ee4dc6d.png', 'redbull.com', 1),
(2, 'Nike', 'parcerias_629474012dc94.png', 'nike.com', 1),
(3, 'Quiksilver', 'parcerias_629478bf518ac.png', 'quiksilver.com', 1),
(4, 'Aquasphere', 'parcerias_629478c75c5fb.png', 'aquasphereswim.com', 1),
(5, 'NordicTrack', 'parcerias_62947902e7d52.png', 'nordictrack.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `urlfriendly` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `modulo` varchar(50) NOT NULL,
  `modulo_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `urlfriendly`, `url`, `modulo`, `modulo_id`) VALUES
(1, 'homepage', '/index.php', '', 0),
(3, 'atletas', '/atletas.php', '', 0),
(4, 'noticias', '/noticias.php', '', 0),
(5, 'loja', '/shop.php', 'produtos', 0),
(6, 'highlights', '/highlights.php?p=1', '', 0),
(7, 'noticias', '/noticias.php?p=1', '', 0),
(8, 'contactos', '/contact.php', '', 0),
(9, 'produto_AirForce1', 'single.php?id=8', 'produtos', 8),
(10, 'produto_WovenAirMaxJacket', 'single.php?id=11', 'produtos', 11),
(11, 'registo', '/register.php', 'registo', 0),
(12, 'login', '/login.php', 'login', 0),
(13, 'minhaconta', '/account.php', 'minhaconta', 0),
(14, 'logout', '/logout.php', 'logout', 0),
(15, 'sobrenos', '/aboutus.php', 'sobrenos', 0),
(16, 'meetings', '/mapaint.php', 'meetings', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersmeetings`
--

CREATE TABLE `usersmeetings` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMeeting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telemovel` bigint(20) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `apelido`, `email`, `fotografia`, `username`, `password`, `telemovel`, `estado`) VALUES
(1, 'Joao', 'Vermelho', 'joaovermelho3@gmail.com', 'avatar_default.png', 'joaovermelho', '$2y$10$UQQdZaa0I8Qg2GaMNa52x.marCiAmVKgafB8NDw7YO6/dhYiiatu6', 916769740, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atleta`
--
ALTER TABLE `atleta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duvidas`
--
ALTER TABLE `duvidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipa`
--
ALTER TABLE `equipa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagensindex`
--
ALTER TABLE `imagensindex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapa_interativo`
--
ALTER TABLE `mapa_interativo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcerias`
--
ALTER TABLE `parcerias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersmeetings`
--
ALTER TABLE `usersmeetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `atleta`
--
ALTER TABLE `atleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `duvidas`
--
ALTER TABLE `duvidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipa`
--
ALTER TABLE `equipa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `imagensindex`
--
ALTER TABLE `imagensindex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapa_interativo`
--
ALTER TABLE `mapa_interativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parcerias`
--
ALTER TABLE `parcerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usersmeetings`
--
ALTER TABLE `usersmeetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
