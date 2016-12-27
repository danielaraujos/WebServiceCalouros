-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2016 at 02:18 AM
-- Server version: 5.7.16
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_guia_calouro`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `version` varchar(5) NOT NULL,
  `body` text NOT NULL,
  `email` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `version`, `body`, `email`) VALUES
(1, 'Guia do Calouro', '2.0', '<p>TEste</p>\r\n', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE `apis` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apis`
--

INSERT INTO `apis` (`id`, `name`, `description`, `link`) VALUES
(1, 'Api Buildings', 'Listagem de Edificios', 'buildings.json'),
(2, 'Api Benefits', 'Listagem de Benficios', 'benefits.json'),
(3, 'Api Abouts', 'Listagem de informações sobre o app', 'abouts.json'),
(4, 'Api Calendars', 'Listagem dos dias do calendário acadêmico', 'calendars.json'),
(5, 'Api MonthCalendars', 'Listagem dos meses do ano', 'month-calendars.json'),
(6, 'Api Typs', 'Listagem de dicas', 'typs.json'),
(7, 'Api CategoryTyps', 'Listagem de categoria das dicas', 'category-typs.json'),
(8, 'Api Telephones', 'Listagem de telefones úteis ', 'telephones.json'),
(9, 'Api Emails', 'Listagem de Emails ', 'emails.json'),
(10, 'Api Managements', 'Listagem de Gestão', 'managements.json'),
(11, 'Api CategoryManagements', 'Listagem de Categoria de Gestão', 'category-managements.json'),
(12, 'Api Feedings', 'Listagem de alimentação', 'feedings.json'),
(13, 'Api Transports', 'Listagem de Transporte', 'transports.json'),
(14, 'Api Shifts', 'Listagem de turno', 'shifts.json'),
(15, 'Api Schedules', 'Listagem de Horário', 'schedules.json'),
(16, 'Api Places', 'Listagem de locais', 'places.json');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(130) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `body`, `link`, `image`, `dir`) VALUES
(1, 'Auxílio Moradia', 'O Programa Auxílio Moradia tem por objetivo viabilizar a permanência de estudantes matriculados nos Cursos de Graduação da Universidade Federal de Viçosa - (UFV-CRP) em Rio Paranaíba, em comprovada situação de vulnerabilidade econômica, assegurando-lhes auxílio institucional para complementação de despesas com moradia e alimentação durante todo o período do curso ou enquanto persistir a mesma situação.\r\nImportante!\r\nA vinculação dos estudantes ao Programa Auxílio Moradia não os impede de receber, por mérito, qualquer uma das bolsas dos diversos programas da UFV, de agências de fomento ou de empresas.\r\n', '#', '', ''),
(2, 'Auxílio Transporte', 'O auxílio financeiro para ajudar nas despesas com transporte de estudantes que moram na região onde se situa o campus universitário. -> <b>NÃO DISPONÍVEL</b>', '#', '', ''),
(3, 'Auxílio Creche', '<p>O Auxílio Creche é um benefício concedido aos estudantes com vulnerabilidade econômica, com intuito de estimular sua permanência na Universidade. Para solicitá-lo, o estudante precisa:</p>\r\n<p>1-Ser aluno(a) de graduação da UFV-CRP, regularmente matriculado(a) e frequentando curso;</p>\r\n<p>2-Possuir guarda e responsabilidade legal de crianças com idade de  0 e 5 anos, 11 meses e 29 dias;</p>\r\n<p>3-Ter situação de vulnerabilidade socioeconômica devidamente aprovada pela Coordenadoria de Serviço Social;</p>\r\n<p>4-Não receber outro tipo de auxílio creche;</p>', '#', '', ''),
(4, 'Serviço de Alimentação', 'Consiste na concessão de gratuidade na alimentação oferecida nos Restaurantes Universitários, aos estudantes em vulnerabilidade socioeconômica comprovada ', '#', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sub_name` varchar(400) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `dir` varchar(200) NOT NULL,
  `credits` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `sub_name`, `body`, `image`, `dir`, `credits`) VALUES
(1, 'PVA', 'Pavilhão de aula', ' O Pavilhão de aula é o local onde é ministrada grande parte das aulas teóricas. O PVA  possui também auditórios para palestras e outros eventos.', '', '', '-'),
(2, 'BBT', 'Biblioteca Central', 'O Campus II, conta com moderno  projeto urbanístico, no qual estão o prédio da biblioteca central, com 3.790 m2, que desde o inicio do primeiro semestre de 2011 abriga, além da biblioteca e uma área  de estudos,o setor de registro escolar,  gabinetes para professores e coordenações de cursos, e as salas dos setores administrativo/financeiro, gestão de pessoas, secretaria executiva, assessoria de comunicação, além das  diretorias geral, administrativo-financeira e de ensino.', '', '', 'Cristiano Soares de Oliveira'),
(3, 'RU', 'Refeitório Universitário', '', '', '', ''),
(4, 'CRP', 'Pesquisas', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `month_calendar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category_managements`
--

CREATE TABLE `category_managements` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_managements`
--

INSERT INTO `category_managements` (`id`, `name`) VALUES
(1, 'Órgãos Técnicos-Administrativo'),
(2, 'Institutos de Ciências');

-- --------------------------------------------------------

--
-- Table structure for table `category_typs`
--

CREATE TABLE `category_typs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_typs`
--

INSERT INTO `category_typs` (`id`, `name`) VALUES
(1, 'Graduação');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedings`
--

CREATE TABLE `feedings` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedings`
--

INSERT INTO `feedings` (`id`, `link`) VALUES
(1, '#');

-- --------------------------------------------------------

--
-- Table structure for table `managements`
--

CREATE TABLE `managements` (
  `id` int(11) NOT NULL,
  `function` varchar(120) NOT NULL,
  `name` varchar(170) NOT NULL,
  `room` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `category_management_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managements`
--

INSERT INTO `managements` (`id`, `function`, `name`, `room`, `email`, `phone`, `category_management_id`) VALUES
(1, 'Diretor', 'Frederico Garcia Pinto', '-', 'frederico.pinto@ufv.br', '38551647', 1);

-- --------------------------------------------------------

--
-- Table structure for table `month_calendars`
--

CREATE TABLE `month_calendars` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_calendars`
--

INSERT INTO `month_calendars` (`id`, `name`) VALUES
(1, 'Janeiro'),
(2, 'Fevereiro'),
(3, 'Março'),
(4, 'Abril'),
(5, 'Maio'),
(6, 'Junho'),
(7, 'Julho'),
(8, 'Agosto'),
(9, 'Setembro'),
(10, 'Outubro'),
(11, 'Novembro'),
(12, 'Dezembro');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `title`, `body`) VALUES
(1, 'Ponto 1', '<p>Rua Teste</p>\r\n'),
(2, 'Ponto 2', '<p>Teste2</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `ida` varchar(200) NOT NULL,
  `intervalo` varchar(200) NOT NULL,
  `volta` varchar(200) NOT NULL,
  `shifts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `ida`, `intervalo`, `volta`, `shifts_id`) VALUES
(1, '7:30 - 07:50', '09:30 - 10-00', '11:30', 1),
(2, '13:30 - 13:50', '15:30 - 16:00', '17:30', 2),
(3, '18:30 - 18:50', '20:30 - 21:00', '22:30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `name`) VALUES
(1, 'Horário da Manhã'),
(2, 'Horário da Tarde'),
(3, 'Horário da Noite');

-- --------------------------------------------------------

--
-- Table structure for table `telephones`
--

CREATE TABLE `telephones` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `sector` varchar(120) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` int(11) NOT NULL,
  `image` varchar(120) NOT NULL,
  `dir` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `image`, `dir`) VALUES
(1, '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `typs`
--

CREATE TABLE `typs` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `name_link` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `category_typ_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typs`
--

INSERT INTO `typs` (`id`, `name`, `body`, `name_link`, `link`, `category_typ_id`) VALUES
(1, 'Teste', '<p>teste</p>\r\n', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(120) NOT NULL,
  `dir` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `dir`, `created`, `modified`) VALUES
(1, 'Administrador', 'admin@admin.com', '$2y$10$BUQPO7PVDn9gDXdOhuT2VOsyKYWVueR1fS.hnmAfmNtkSZ6nMEQNK', '1482371792.jpg', 'uploads/users/', '2016-12-22 00:00:00', '2016-12-22 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apis`
--
ALTER TABLE `apis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_managements`
--
ALTER TABLE `category_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_typs`
--
ALTER TABLE `category_typs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedings`
--
ALTER TABLE `feedings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managements`
--
ALTER TABLE `managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month_calendars`
--
ALTER TABLE `month_calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telephones`
--
ALTER TABLE `telephones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typs`
--
ALTER TABLE `typs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apis`
--
ALTER TABLE `apis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category_managements`
--
ALTER TABLE `category_managements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_typs`
--
ALTER TABLE `category_typs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedings`
--
ALTER TABLE `feedings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `managements`
--
ALTER TABLE `managements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `month_calendars`
--
ALTER TABLE `month_calendars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `telephones`
--
ALTER TABLE `telephones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `typs`
--
ALTER TABLE `typs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
