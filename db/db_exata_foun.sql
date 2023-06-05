-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 02:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exata`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_ano`
--

CREATE TABLE `t_ano` (
  `id_ano` int(2) NOT NULL,
  `ano` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_ano`
--

INSERT INTO `t_ano` (`id_ano`, `ano`) VALUES
(1, 2015),
(2, 2016),
(3, 2017),
(4, 2018),
(5, 2019),
(6, 2020),
(7, 2021),
(8, 2022),
(9, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `t_atual`
--

CREATE TABLE `t_atual` (
  `nre` char(11) NOT NULL,
  `id_status` int(1) NOT NULL,
  `id_ano` int(2) NOT NULL,
  `id_semestre` int(1) NOT NULL,
  `de` char(50) DEFAULT NULL,
  `para` char(50) DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_atual`
--

INSERT INTO `t_atual` (`nre`, `id_status`, `id_ano`, `id_semestre`, `de`, `para`, `obs`) VALUES
('19.i.01.001', 1, 1, 1, NULL, NULL, NULL),
('19.i.01.001', 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_aula`
--

CREATE TABLE `t_aula` (
  `id_aula` int(10) NOT NULL,
  `id_ano` int(2) NOT NULL,
  `id_semestre` int(1) NOT NULL,
  `id_sala` int(2) NOT NULL,
  `id_materia` char(6) NOT NULL,
  `id_funs` char(6) NOT NULL,
  `loron` enum('segunda','terca','quarta','quinta','sexta') NOT NULL,
  `oras_hahu` char(5) NOT NULL,
  `oras_remata` char(5) NOT NULL,
  `turma` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_aula`
--

INSERT INTO `t_aula` (`id_aula`, `id_ano`, `id_semestre`, `id_sala`, `id_materia`, `id_funs`, `loron`, `oras_hahu`, `oras_remata`, `turma`) VALUES
(3, 4, 1, 2, '111125', '23', 'segunda', '2', '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `t_estudante`
--

CREATE TABLE `t_estudante` (
  `nre` char(11) NOT NULL,
  `estudante` char(50) NOT NULL,
  `sexo` char(9) NOT NULL,
  `munisipio` char(12) NOT NULL,
  `contacto` char(12) DEFAULT NULL,
  `id_ano` int(2) NOT NULL,
  `inan` char(50) DEFAULT NULL,
  `aman` char(50) DEFAULT NULL,
  `fatin_moris` char(20) NOT NULL,
  `data_moris` char(30) NOT NULL,
  `regime` char(12) DEFAULT NULL,
  `status` enum('Ativo','Não','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_estudante`
--

INSERT INTO `t_estudante` (`nre`, `estudante`, `sexo`, `munisipio`, `contacto`, `id_ano`, `inan`, `aman`, `fatin_moris`, `data_moris`, `regime`, `status`) VALUES
('19.i.01.001', 'Abilio Exposto', 'M', 'Ermera', '', 5, '', '', 'fatu-Bessi', '16 de junho de 1996', '', 'Ativo'),
('19.i.01.002', 'Acasio Cafim', 'M', 'Ermera', '', 5, '', '', 'leefoho', '28 de novembro de 1998', '', 'Ativo'),
('19.i.01.003', 'Adelita Remigia Almor da Costa', 'F', 'Baucau', '', 5, '', '', 'vemasse', '03 de agosto de 1997', '', 'Ativo'),
('19.i.01.004', 'Aflonia da Silva do Rosario', 'F', 'Manufahi', '', 5, '', '', 'dasua', '07 de maio de 2001', '', 'Ativo'),
('19.i.01.005', 'Agostinha Rodrigues Nogueira', 'F', 'Dili', '', 5, '', '', 'dii', '28 de agosto de 1995', '', 'Ativo'),
('19.i.01.006', 'Aida Borges de Jesus Carvalho', 'F', 'Dili', '', 5, '', '', 'dii', '30 de abril de 2000', '', 'Ativo'),
('19.i.01.007', 'Alberto de Jesus Alves Soares', 'M', 'Manatuto', '', 5, '', '', 'maehat', '22 de dezembro de 1997', '', 'Ativo'),
('19.i.01.008', 'Alferina Maria Lurdes', 'F', 'Lautem', '', 5, '', '', 'laara', '30 de setembro de 1996', '', 'Ativo'),
('19.i.01.009', 'Alfredo Ferreira Pinto', 'M', 'Dili', '', 5, '', '', 'caoro', '17 de fevereiro de 1999', '', 'Ativo'),
('19.i.01.010', 'Alianca da Conceicao Pires', 'F', 'Lautem', '', 5, '', '', 'latem', '17 de novembro de 1999', '', 'Ativo'),
('19.i.01.011', 'Alisha de Seixas Martins', 'F', 'Ermera', '', 5, '', '', 'glno', '27 de junho de 2001', '', 'Ativo'),
('19.i.01.012', 'Ana da Silva Moniz', 'F', 'Dili', '', 5, '', '', 'moa - Ulun Dili', '28 de abril de 2000', '', 'Ativo'),
('19.i.01.014', 'Ana Zenetia Paulo Soares de Rosa', 'F', 'Baucau', '', 5, '', '', '22de Agosto de', '22 de agosto de 2001', '', 'Ativo'),
('19.i.01.015', 'Angelia Anastacia Mendon?a', 'F', 'Aileu', '', 5, '', '', 'aioc', '15 de fevereiro de 1999', '', 'Ativo'),
('19.i.01.016', 'Anibal Madeira', 'M', 'Lautem', '', 5, '', '', 'loe', '07 de dezembro de 1998', '', 'Ativo'),
('19.i.01.017', 'Antonino de Deus', 'M', 'Baucau', '', 5, '', '', '11de Agosto de', '11 de agosto de 1999', '', 'Ativo'),
('19.i.01.018', 'Arcanjo de Jesus Victor', 'M', 'Laut?m', '', 5, '', '', '23de Dezembro de', '23 de dezembro de 1999', '', 'Ativo'),
('19.i.01.019', 'Arnaldo Manuel Cabecas', 'M', 'Dili', '', 5, '', '', 'aturo', '26 de abril de 1991', '', 'Ativo'),
('19.i.01.020', 'Ars?nia F?tima Guterres', 'F', 'Dili', '', 5, '', '', 'dii', '05 de junho de 1995', '', 'Ativo'),
('19.i.01.021', 'Atalia Matilde da Conceicao Costa', 'F', 'Ainaro', '', 5, '', '', 'malo', '30 de abril de 2000', '', 'Ativo'),
('19.i.01.022', 'Aurelia de Jesus Fatima', 'F', 'Bobonaro', '', 5, '', '', 'tamea-Groto', '25 de agosto de 1998', '', 'Ativo'),
('19.i.01.023', 'Baltazar Mendes Caetano Pires', 'M', 'Aileu', '', 5, '', '', '17de Junho de', '17 de junho de 1996', '', 'Ativo'),
('19.i.01.024', 'Baquita Fernandes', 'F', 'Viqueque', '', 5, '', '', 'uau Carbau', '24 de agosto de 1999', '', 'Ativo'),
('19.i.01.025', 'Belina Cipriano Filipe', 'F', 'Baucau', '', 5, '', '', 'auaba', '04 de julho de 2000', '', 'Ativo'),
('19.i.01.026', 'Brigida Garcia F?tima da Costa', 'F', 'Aileu', '', 5, '', '', 'aieu', '06 de maio de 2000', '', 'Ativo'),
('19.i.01.027', 'Brigida Maria de Fatima Nunes', 'F', 'Oe-Cusse', '', 5, '', '', 'paiae', '01 de outubro de 2001', '', 'Ativo'),
('19.i.01.028', 'Canisio Oki da Silva', 'M', 'Baucau', '', 5, '', '', 'cabada/Baucau', '21 de agosto de 2000', '', 'Ativo'),
('19.i.01.030', 'Catarina de Jesus Maria das Dores', 'F', 'Ermera', '', 5, '', '', 'leefoho', '15 de setembro de 1998', '', 'Ativo'),
('19.i.01.031', 'Cerilo de Jesus', 'M', 'Liquica', '', 5, '', '', 'mabaara', '24 de julho de 1999', '', 'Ativo'),
('19.i.01.032', 'Claudia Araujo da Cruz', 'F', 'Dili', '', 5, '', '', 'dii', '', '', 'Ativo'),
('19.i.01.033', 'Constantinho F?tima Ferreira Soares', 'M', 'Kupang/Dili', '', 5, '', '', '12de Favereiro de', '12 de favereiro de 2000', '', 'Ativo'),
('19.i.01.034', 'Cornelio Freitas Lopes', 'M', 'DIli', '', 5, '', '', 'dii', '01 de novembro de 1999', '', 'Ativo'),
('19.i.01.035', 'Cristina Funan Amaral', 'F', 'Dili', '', 5, '', '', 'dii', '11 de marco de 2000', '', 'Ativo'),
('19.i.01.036', 'Dana Efita Sarmento Pinto', 'F', 'DIli', '', 5, '', '', 'dii', '10 de dezembro de 2000', '', 'Ativo'),
('19.i.01.037', 'David Quei-Mau Orlaeans Barros', 'M', 'Manufahi', '', 5, '', '', 'daina/Holarua', '03 de maio de 1996', '', 'Ativo'),
('19.i.01.038', 'Dedi Pereira', 'M', 'Ainaro', '', 5, '', '', 'aiaro', '14 de dezembro de 1999', '', 'Ativo'),
('19.i.01.039', 'Deonizio Gouveia Leite', 'M', 'Bobonaro', '', 5, '', '', 'lual', '01 de dezembro de 1998', '', 'Ativo'),
('19.i.01.040', 'Desantrino de Jesus', 'M', 'Manufahi', '', 5, '', '', 'lirai/Turiscai', '30 de dezembro de 1998', '', 'Ativo'),
('19.i.01.041', 'Diana Soares Cabral', 'F', 'Dili', '', 5, '', '', 'dii', '31 de dezembro de 1998', '', 'Ativo'),
('19.i.01.042', 'Dirce Freitas Mendes', 'F', 'Baucau', '', 5, '', '', 'bacau', '01 de janeiro de 2001', '', 'Ativo'),
('19.i.01.043', 'Dircio Manuel Antonio Pereira', 'M', 'Ermera', '', 5, '', '', 'potete', '09 de fevereiro de 1999', '', 'Ativo'),
('19.i.01.044', 'Edu Mau Tilman de Andrade', 'M', 'Soe', '', 5, '', '', 'so', '13 de outubro de 1999', '', 'Ativo'),
('19.i.01.045', 'Eduarda Fatima Pereira', 'M', 'Dili', '', 5, '', '', 'aiaro', '13 de outubro de 1996', '', 'Ativo'),
('19.i.01.046', 'Efemia Raquel da Silva', 'M', 'Liqui?a', '', 5, '', '', 'baartete', '26 de outubro de 1997', '', 'Ativo'),
('19.i.01.047', 'Efig?nia Maria Aparicio', 'F', 'Baucau', '', 5, '', '', 'bacau', '01 de fevereiro de 2001', '', 'Ativo'),
('19.i.01.048', 'Eldito Vasconcelho Guterres', 'M', 'Viquque', '', 5, '', '', 'osu', '04 de marco de 1997', '', 'Ativo'),
('19.i.01.049', 'Elisa Abelita Anunu Soares', 'F', 'Dili', '', 5, '', '', '12de Dezembro de', '12 de dezembro de 1999', '', 'Ativo'),
('19.i.01.050', 'Enarzia Maria Angelia Nunes', 'F', 'Ainaro', '', 5, '', '', 'go-Lau', '04 de novembro de 2000', '', 'Ativo'),
('19.i.01.051', 'Esm?nia da Silva Pereira', 'F', 'Baucau', '', 5, '', '', 'ca-Hula', '11 de outubro de 1998', '', 'Ativo'),
('19.i.01.052', 'Eunique da Graca de Vasconselos', 'F', 'Dili', '', 5, '', '', 'dii', '25 de novembro de 2001', '', 'Ativo'),
('19.i.01.053', 'Evangelina Baquita Francisco Madeira', 'F', 'Ermera', '', 5, '', '', 'erera 30 de Agosto d', '30 de agosto de 1997', '', 'Ativo'),
('19.i.01.054', 'Evangelina Soares de Castro', 'F', 'Viqueque', '', 5, '', '', 'afloicai', '07 de fevereiro de 1998', '', 'Ativo'),
('19.i.01.055', 'Evangelino de Carvalho', 'M', 'Baucau', '', 5, '', '', 'saafano', '12 de junho de 1997', '', 'Ativo'),
('19.i.01.056', 'Ezequiel Brites', 'M', 'Ermera', '', 5, '', '', 'maosae', '07 de novembro de 1996', '', 'Ativo'),
('19.i.01.057', 'Febriana Vico dos Santos Silva', 'F', 'Dili', '', 5, '', '', 'dii', '22 de fevereiro de 2002', '', 'Ativo'),
('19.i.01.058', 'Febrianto Neno', 'M', 'Oe-Cusse', '', 5, '', '', 'laufoan', '16 de setembro de 1997', '', 'Ativo'),
('19.i.01.059', 'Felisberta Cardoso', 'F', 'Dili', '', 5, '', '', 'duurai', '31 de agosto de 1999', '', 'Ativo'),
('19.i.01.060', 'Ferdinaldo da Cruz', 'M', 'Laut?m', '', 5, '', '', '3 e Outubro de', '3 de outubro de 1995', '', 'Ativo'),
('19.i.01.061', 'Feviana Guterres Muda da Cruz', 'F', 'Viqueque', '', 5, '', '', '05de Fevereiro de', '05 de fevereiro de 2000', '', 'Ativo'),
('19.i.01.062', 'Fidel da Silva', 'M', 'Viqueque', '', 5, '', '', '15de Junho de', '15 de junho de 1997', '', 'Ativo'),
('19.i.01.063', 'Fildison Antonio Nunes', 'M', 'Lautem', '', 5, '', '', 'latem', '27 de julho de 2000', '', 'Ativo'),
('19.i.01.064', 'Francelina Gaio', 'F', 'Baucau', '', 5, '', '', 'laulela', '12 de fevereiro de 1998', '', 'Ativo'),
('19.i.01.065', 'Francisca Olivia dos Reis', 'F', 'Ainaro', '', 5, '', '', 'aiaro', '20 de novembro de 1998', '', 'Ativo'),
('19.i.01.066', 'Frederico Paulino Inacio', 'M', 'Viqueque', '', 5, '', '', 'uao Carbau', '17 de novembro de 1998', '', 'Ativo'),
('19.i.01.067', 'Gabriela de Castro Mendonca e Sousa', 'F', 'Dili', '', 5, '', '', 'dii', '01 de agosto de 1995', '', 'Ativo'),
('19.i.01.068', 'Gasparina da Costa', 'F', 'Bobonaro', '', 5, '', '', 'calaco', '01 de agosto de 1997', '', 'Ativo'),
('19.i.01.069', 'Genesia da Silva Mota', 'F', 'Bobonaro', '', 5, '', '', 'faululi-Balibo', '27 de janeiro de 1998', '', 'Ativo'),
('19.i.01.070', 'Gil Albino Belo', 'M', 'Baucau', '', 5, '', '', 'atlari', '15 de setembro de 2000', '', 'Ativo'),
('19.i.01.071', 'Gilson Andr? Sim?o Barreto Almeida', 'M', 'Ainaro', '', 5, '', '', 'aiaro 18 de Janeiro', '18 de janeiro de 1999', '', 'Ativo'),
('19.i.01.072', 'Goncalo Goncalves Ferreira', 'M', 'Ermera', '', 5, '', '', 'atabe', '27 de outubro de 1997', '', 'Ativo'),
('19.i.01.073', 'Grazildo da Silva Soares', 'M', 'Manatuto', '', 5, '', '', '11de Janeiro de', '11 de janeiro de 1996', '', 'Ativo'),
('19.i.01.074', 'Heldemer Lopes', 'M', 'Baucau', '', 5, '', '', 'veilale', '08 de outubro de 1999', '', 'Ativo'),
('19.i.01.075', 'Helio Castro de Jesus Pereira', 'M', 'Baucau', '', 5, '', '', '14de Setembro de', '14 de setembro de 1998', '', 'Ativo'),
('19.i.01.076', 'Higina da Silva', 'F', 'Baucau', '', 5, '', '', 'osogori', '23 de agosto de 1999', '', 'Ativo'),
('19.i.01.077', 'Igitro dos Santos de Jesus', 'M', 'Ermera', '', 5, '', '', '20de Maio de', '20 de maio de 1999', '', 'Ativo'),
('19.i.01.078', 'Inoc?ncia Filipa Ximenes Gusm?o', 'F', 'Aileu', '', 5, '', '', '28de Dezembro de', '28 de dezembro de 2001', '', 'Ativo'),
('19.i.01.079', 'Jacinta Morreira Mar?al', 'F', 'Viqueque', '', 5, '', '', 'uaolari', '11 de agosto de 1997', '', 'Ativo'),
('19.i.01.080', 'Jaimito Ximenes Tarra', 'M', 'Ermera', '', 5, '', '', 'glno', '25 de junho de 1998', '', 'Ativo'),
('19.i.01.081', 'Jefania da Costa Borges Almeida', 'F', 'Dili', '', 5, '', '', 'beora/Dili', '13 de dezembro de 2001', '', 'Ativo'),
('19.i.01.082', 'Jennifer Lopes Basmery Barros', 'M', 'Dili', '', 5, '', '', 'dii', '19 de junho de 2000', '', 'Ativo'),
('19.i.01.083', 'Jo?o Afonso Filipe', 'M', 'Baucau', '', 5, '', '', 'beulale', '21 de janeiro de 2001', '', 'Ativo'),
('19.i.01.084', 'Jo?o Anacleto Filipe', 'M', 'Baucau', '', 5, '', '', 'qulicai', '05 de setembro de 1998', '', 'Ativo'),
('19.i.01.085', 'Jo?o Baptista Alves', 'M', 'Baucau', '', 5, '', '', 'bauia', '17 de novembro de 1996', '', 'Ativo'),
('19.i.01.086', 'Jose Alexandre Gama', 'M', 'Dili', '', 5, '', '', 'dii', '02 de ooutubro de 1998', '', 'Ativo'),
('19.i.01.087', 'Jose da Silva', 'M', 'Viqueque', '', 5, '', '', 'osogori-Ossu', '19 de marco de 1999', '', 'Ativo'),
('19.i.01.088', 'Jos? Hil?rio Dias de Vasconselos', 'M', 'Dili', '', 5, '', '', 'dii/Bairo-Pite', '15 de mar?o de 2000', '', 'Ativo'),
('19.i.01.089', 'Jos? Quintas Noronha', 'M', 'Dili', '', 5, '', '', '20de Maio de', '20 de maio de 1998', '', 'Ativo'),
('19.i.01.090', 'Josefina Rodrigues Ukat', 'F', 'Lautem', '', 5, '', '', 'lopalos', '23 de junho de 2000', '', 'Ativo'),
('19.i.01.091', 'Jovi Carlos Ximenes', 'M', 'Baucau', '', 5, '', '', 'veilale', '19 de agosto de 2000', '', 'Ativo'),
('19.i.01.092', 'Judianto de Jesus', 'M', 'Dili', '', 5, '', '', 'at?ro 07 de Marco de', '07 de marco de 1999', '', 'Ativo'),
('19.i.01.093', 'Julia Sequeira Mendes', 'F', 'Viqueque', '', 5, '', '', 'osu', '15 de julho de 1998', '', 'Ativo'),
('19.i.01.094', 'Juliana Soares de Rosario', 'F', 'Dili', '', 5, '', '', 'dii', '14 de julho de 1999', '', 'Ativo'),
('19.i.01.095', 'Julio Eco', 'M', 'Oe-Cusse', '', 5, '', '', 'bauia', '14 de julho de 1997', '', 'Ativo'),
('19.i.01.096', 'Jupra Ximenes Mendonca de Andrade', 'M', 'Aileu', '', 5, '', '', 'reixio', '22 de mar?o de 2001', '', 'Ativo'),
('19.i.01.097', 'Juvito Hermenegildo da Costa', 'M', 'Manatuto', '', 5, '', '', 'saau', '14 de maio de 2000', '', 'Ativo'),
('19.i.01.098', 'Leonora de Andrade', 'F', 'Aileu', '', 5, '', '', 'reixio', '08 de julho de 1998', '', 'Ativo'),
('19.i.01.099', 'Letigia da Costa Mendonca Soares', 'F', 'Dili', '', 5, '', '', 'dii', '07 de novembro de 1999', '', 'Ativo'),
('19.i.01.100', 'Libia Edit Lima Amaral', 'F', 'Dili', '', 5, '', '', 'dii', '23 de abriil de 2001', '', 'Ativo'),
('19.i.01.101', 'Lindalva de Ara?jo Mendon?a', 'F', 'Dili', '', 5, '', '', 'dii', '12 de dezembro de 2000', '', 'Ativo'),
('19.i.01.102', 'Livania Helena Freitas', 'F', 'Dilli', '', 5, '', '', 'dii', '01 de setembro de 1999', '', 'Ativo'),
('19.i.01.103', 'Lourdes Sarmento de Oliveira', 'F', 'Baucau', '', 5, '', '', 'qulicai', '09 de agosto de 1996', '', 'Ativo'),
('19.i.01.104', 'Lourenco dos Santos da Costa Oliveira', 'M', 'Manatuto', '', 5, '', '', 'lalo', '15 de maio de 1998', '', 'Ativo'),
('19.i.01.105', 'Loyola Jorinho Patricio F?tima Pires', 'M', 'Covalima', '', 5, '', '', 'faumea', '04 de janeiro de 2002', '', 'Ativo'),
('19.i.01.106', 'Lucia Fatima da Costa e Silva', 'F', 'Baucau', '', 5, '', '', 'bacau', '25 de julho de 1999', '', 'Ativo'),
('19.i.01.107', 'Lucilia Menezes de Jesus Maia', 'F', 'Ermera', '', 5, '', '', 'potete', '04 de abril de 2000', '', 'Ativo'),
('19.i.01.108', 'Luis Antonio Correia', 'M', 'Baucau', '', 5, '', '', 'baau', '27 de junho de 2000', '', 'Ativo'),
('19.i.01.109', 'Madalena Destri da Silva', 'F', 'Liquica', '', 5, '', '', '31de Dezembro de', '31 de dezembro de 1999', '', 'Ativo'),
('19.i.01.110', 'Madalena Olivia Gabriela dos Santos Moniz', 'F', 'Covalima', '', 5, '', '', '15de Mar?o de', '15 de mar?o de 1999', '', 'Ativo'),
('19.i.01.111', 'Mafalda Nunes de Araujo', 'F', 'Ainaro', '', 5, '', '', 'ma-Nuno 30 de Outubr', '30 de outubro de 2000', '', 'Ativo'),
('19.i.01.112', 'Manecas Ramos da Gama', 'M', 'Laut?m', '', 5, '', '', '16de Mar?o de', '16 de mar?o de 1998', '', 'Ativo'),
('19.i.01.113', 'Manuel Pereira', 'M', 'Dili', '', 5, '', '', 'cuu-Hun Dili', '08 de julho de 1998', '', 'Ativo'),
('19.i.01.114', 'Marcelina Neno', 'F', 'Oe-Cusse', '', 5, '', '', 'baui', '05 de julho de 1998', '', 'Ativo'),
('19.i.01.115', 'Mardino Alves Cabral', 'M', 'Lautem', '', 5, '', '', 'coo', '02 de dezembro de 2000', '', 'Ativo'),
('19.i.01.116', 'Maria da Costa Reis', 'F', 'Dili', '', 5, '', '', '4 e Mar?o de', '4 de mar?o de 2000', '', 'Ativo'),
('19.i.01.117', 'Maria Madalena Freitas Fernandes Flor', 'F', 'Dili', '', 5, '', '', '8 e Maio de', '8 de maio de 2000', '', 'Ativo'),
('19.i.01.118', 'Martinho da Costa Amaral', 'M', 'Covalima', '', 5, '', '', 'faumea', '22 de fevereiro de 1993', '', 'Ativo'),
('19.i.01.119', 'Martinho Moco Oel', 'M', 'Oe-Cusse', '', 5, '', '', '12de Dezembro de', '12 de dezembro de 1999', '', 'Ativo'),
('19.i.01.120', 'Mateus Pereira de Ara?jo', 'M', 'Bobonaro', '', 5, '', '', 'maob', '03 de maio de 1996', '', 'Ativo'),
('19.i.01.121', 'Mauricio dos Reis Sila', 'M', 'Oe-Cusse', '', 5, '', '', 'maelat', '02 de marco de 1997', '', 'Ativo'),
('19.i.01.122', 'Merlinda da Gama Xaxier Lopes', 'F', 'Lautem', '', 5, '', '', 'daluturu', '05 de maio de 1998', '', 'Ativo'),
('19.i.01.123', 'Mile?nio Jer?nimo Pereira dos Santos', 'M', 'Dili', '', 5, '', '', 'dii', '15 de setembro de 2000', '', 'Ativo'),
('19.i.01.124', 'Moises dos Reis Pinto', 'M', 'Dili', '', 5, '', '', '24de Dezembro de', '24 de dezembro de 1998', '', 'Ativo'),
('19.i.01.125', 'Natalia Eva Ximenes Da Cruz', 'F', 'Dili', '', 5, '', '', 'dii', '24 de dezembro de 1998', '', 'Ativo'),
('19.i.01.126', 'Natalina Ximenes da Silva', 'F', 'Baucau', '', 5, '', '', 'liagua/Laga', '30 de stembro de 1994', '', 'Ativo'),
('19.i.01.127', 'Natercia Pinheiro', 'F', 'Manufahi', '', 5, '', '', 'faucahi', '19 de dezembro de 2000', '', 'Ativo'),
('19.i.01.128', 'Natercio Barros Florindo', 'M', 'Ermera', '', 5, '', '', 'erera', '11 de marco de 1998', '', 'Ativo'),
('19.i.01.129', 'Nerio de Jesus Nunes', 'M', 'Manufahi', '', 5, '', '', '28de Fevereiro de', '28 de fevereiro de 1998', '', 'Ativo'),
('19.i.01.130', 'Nilton Bosco da Silva', 'M', 'Dili', '', 5, '', '', '6 e Fevereiro de', '6 de fevereiro de 2000', '', 'Ativo'),
('19.i.01.131', 'Novelia Jaime Casimiro Soares', 'F', 'Ermera', '', 5, '', '', 'lee-Foho', '25 de novembro de 1997', '', 'Ativo'),
('19.i.01.132', 'Obadias do Carmo', 'M', 'Dili', '', 5, '', '', '7 e Abril de', '7 de abril de 1999', '', 'Ativo'),
('19.i.01.133', 'Octaviano Fernandito Bere Cardoso', 'M', 'Ainaro', '', 5, '', '', 'mautaci Ainaro 06 de', '06 de outubro de 2001', '', 'Ativo'),
('19.i.01.134', 'Olandina Soares', 'M', 'Manatuto', '', 5, '', '', 'teas', '09 de agosto de 1999', '', 'Ativo'),
('19.i.01.135', 'Oscar da Costa Amaral', 'M', 'Covalima', '', 5, '', '', 'taoman', '22 de fevereiro de 1999', '', 'Ativo'),
('19.i.01.136', 'Pascoal Gabriel Pereira', 'M', 'Covalima', '', 5, '', '', 'deos', '11 de maio de 1998', '', 'Ativo'),
('19.i.01.137', 'Paulo Assun??o de Deus Soares', 'M', 'Ermera', '', 5, '', '', 'duurai', '20 de abril de 1996', '', 'Ativo'),
('19.i.01.138', 'Pedro Manuel Reci-Cai Viegas', 'M', 'Dili', '', 5, '', '', 'beora-Dili', '14 de janeiro de 2000', '', 'Ativo'),
('19.i.01.139', 'Petrus Almeida', 'M', 'Viqueque', '', 5, '', '', '15de Dezembro de', '15 de dezembro de 1997', '', 'Ativo'),
('19.i.01.140', 'Pio Barbarico Mendon?a', 'M', 'Dili', '', 5, '', '', 'dii', '03 de marco de 1998', '', 'Ativo'),
('19.i.01.141', 'Raquela Cecilia de Deus', 'F', 'Ermera', '', 5, '', '', 'duurai', '03 de janeiro de 2000', '', 'Ativo'),
('19.i.01.142', 'Renato da Costa', 'M', 'Aileu', '', 5, '', '', '26de Mar?o de', '26 de mar?o de 1999', '', 'Ativo'),
('19.i.01.143', 'Rogerio da Cruz Viana', 'M', 'Viqueque', '', 5, '', '', '1 E Janeiro de', '1 de janeiro de 2000', '', 'Ativo'),
('19.i.01.144', 'Romana Maria Pereira Mendes', 'F', 'Liquica', '', 5, '', '', 'liuica 30 de Maio de', '30 de maio de 2000', '', 'Ativo'),
('19.i.01.145', 'Romito Ant?nio Domingos F?tima', 'M', 'Baucau', '', 5, '', '', 'veilale', '13 de julho de 2000', '', 'Ativo'),
('19.i.01.147', 'Rosalia Carceres dos Santos', 'F', 'Dili', '', 5, '', '', 'beori-Dili', '02 de outubro de 2000', '', 'Ativo'),
('19.i.01.148', 'Salustiano da Costa In?cio', 'M', 'Baucau', '', 5, '', '', '29de Setembro de', '29 de setembro de 1999', '', 'Ativo'),
('19.i.01.149', 'Salvador Gusm?o Correia', 'M', 'Baucau', '', 5, '', '', 'guuca', '15 de outubro de 1995', '', 'Ativo'),
('19.i.01.150', 'Sandra Gomes da Costa', 'F', 'Dili', '', 5, '', '', 'dii', '16 de marco de 2000', '', 'Ativo'),
('19.i.01.151', 'Sandro Guterres', 'M', 'Manatuto', '', 5, '', '', '10de Novembro de', '10 de novembro de 1999', '', 'Ativo'),
('19.i.01.152', 'Sandro Rivaldo Casmiro Lima Quint?o', 'M', 'DIli', '', 5, '', '', 'dii', '01 de janeiro de 2001', '', 'Ativo'),
('19.i.01.153', 'Satorlino Gusm?o', 'M', 'Viqueque', '', 5, '', '', 'uaolari', '28 de setembro de 1998', '', 'Ativo'),
('19.i.01.154', 'Sebastiao Aparicio Ximenes', 'M', 'Viqueque', '', 5, '', '', 'osocaiua', '22 de setembro de 1999', '', 'Ativo'),
('19.i.01.155', 'Sebasti?o Romualdo Moreira Sequeira', 'M', 'Aileu', '', 5, '', '', 'lalara', '28 de julho de 1998', '', 'Ativo'),
('19.i.01.156', 'Silvina de Jesus Ribeiro', 'F', 'Manufahi', '', 5, '', '', 'sae 03 de Novembro d', '03 de novembro de 1999', '', 'Ativo'),
('19.i.01.157', 'Suzana Francisca Pereira', 'F', 'Baucau', '', 5, '', '', '3 e Setembro de', '3 de setembro de 1998', '', 'Ativo'),
('19.i.01.158', 'Suzana Maria da Cruz', 'F', 'Bobonaro', '', 5, '', '', '24de Mar?o de', '24 de mar?o de 2001', '', 'Ativo'),
('19.i.01.159', 'Tarsicio Freitas Mar?al', 'M', 'Baucau', '', 5, '', '', 'saalari/Baucau', '12 de agosto de 1998', '', 'Ativo'),
('19.i.01.160', 'Tasya da Costa Li Pereira', 'F', 'Lautem', '', 5, '', '', 'lopalos', '25 de junho de 2001', '', 'Ativo'),
('19.i.01.161', 'Teofilo Filipe de Jesus', 'M', 'Baucau', '', 5, '', '', 'alsafa', '09 de dezembro de 1999', '', 'Ativo'),
('19.i.01.162', 'Teofilo Tilman Espirito Santo', 'M', 'Manufahi', '', 5, '', '', 'tuiscai', '21 de outubrio de 1996', '', 'Ativo'),
('19.i.01.164', 'Tomas Jorge Soares', 'M', 'Viqueque', '', 5, '', '', 'viueque 15 de Maio d', '15 de maio de 1999', '', 'Ativo'),
('19.i.01.165', 'Tomas Soares', 'M', 'Oe-cusse', '', 5, '', '', 'oeCusse', '11 de maio de 1996', '', 'Ativo'),
('19.i.01.166', 'Tomasia de Jesus Mendes', 'F', 'Dili', '', 5, '', '', 'dii', '23 de junho de 2000', '', 'Ativo'),
('19.i.01.167', 'Vens?ncio Manuel Jos? Guterres', 'M', 'Baucau', '', 5, '', '', '20de Junho de', '20 de junho de 1999', '', 'Ativo'),
('19.i.01.168', 'Vidigal Dinis Madeira', 'M', 'Baucau', '', 5, '', '', 'ilmoar Vila', '24 de maio de 2000', '', 'Ativo'),
('19.i.01.169', 'Virgilia de Jesus', 'F', 'Liquica', '', 5, '', '', 'baartete', '15 de setembro de 1999', '', 'Ativo'),
('19.i.01.170', 'Zaquelina Francisca Vital', 'F', 'Baucau', '', 5, '', '', 'li-Lura', '14 de abril de 1998', '', 'Ativo'),
('19.i.01.171', 'Z?lia Boavida da Gama Pires', 'F', 'Baucau', '', 5, '', '', 'soa/Laga', '22 de julho de 2000', '', 'Ativo'),
('19.i.01.172', 'Zemarcia Alleluia da Costa Pinto', 'F', 'Viqueque', '', 5, '', '', 'viueque', '07 de dezembro de 2000', '', 'Ativo'),
('2,01509E+11', 'Casimiro Noronha', 'M', 'Bobonaro', '', 1, '', '', 'boonaro', '17/,06/1991', '', 'Ativo'),
('20150901001', 'Abelita da Silva Amaral Pinto', 'F', 'Viqueque', '', 1, '', '', 'viueque', '10/05/996', '', 'Ativo'),
('20150901002', 'Afonso Soares Belo', 'M', 'Baucau', '', 1, '', '', 'qulicai', '24/05/995', '', 'Ativo'),
('20150901003', 'Agata Geobania Prima Marques', 'F', 'Lautem', '', 1, '', '', 'lopalos', '12/001/1996', '', 'Ativo'),
('20150901004', 'Aida Denny Freitas Sim?es', 'F', 'Baucau', '', 1, '', '', 'bauia', '16/06/06', '', 'Ativo'),
('20150901005', 'Ambr?sio Dur?o Borromeu', 'M', 'Ermera', '', 1, '', '', 'erera', '08/001/5', '', 'Ativo'),
('20150901006', 'Anastacia M. de F?tima Pinto', 'F', 'Dili', '', 1, '', '', 'suabaya', '23/05/97', '', 'Ativo'),
('20150901007', 'Angelita Gracia D. S. Costa', 'F', 'Dili', '', 1, '', '', 'dii', '21/04/97', '', 'Ativo'),
('20150901008', 'Antonio Freitas', 'M', 'Baucau', '', 1, '', '', 'qulicai', '11/07/994', '', 'Ativo'),
('20150901009', 'Aquiles Gusm?o', 'M', 'Baucau', '', 1, '', '', 'bacau', '10/009/93', '', 'Ativo'),
('20150901010', 'Andrea Lenci da Costa', 'F', 'Baucau', '', 1, '', '', 'bacau', '30/01/06', '', 'Ativo'),
('20150901011', 'Avenancia T. Belo de Carvalho', 'F', 'Baucau', '', 1, '', '', 'atbae', '28/02/07', '', 'Ativo'),
('20150901012', 'Claudina Angela Pereira', 'F', 'Baucau', '', 1, '', '', 'laa', '22/010/', '', 'Ativo'),
('20150901014', 'Cesaltino de Deus', 'M', 'Ermera', '', 1, '', '', 'laala', '5/02/', '', 'Ativo'),
('20150901015', 'Elisio Gabriel Ribeiro', 'M', 'Lautem', '', 1, '', '', 'lopalos', '23/06/995', '', 'Ativo'),
('20150901016', 'Esterlita Jesuina Boa Vida', 'F', 'Dili', '', 1, '', '', 'dii', '05/04/97', '', 'Ativo'),
('20150901017', 'Evangelica M. S. Tolentino', 'F', 'Aileu', '', 1, '', '', 'aieu', '05/06/96', '', 'Ativo'),
('20150901018', 'Fernando A. Boa Vida', 'M', 'Baucau', '', 1, '', '', 'atlari', '9/019/94', '', 'Ativo'),
('20150901019', 'Filomeno Agos da Cruz', 'M', 'Ermera', '', 1, '', '', 'haolia', '29/05/91', '', 'Ativo'),
('20150901020', 'Francisca da Silva', 'F', 'Baucau', '', 1, '', '', 'veilale', '10/09/995', '', 'Ativo'),
('20150901021', 'Helio dos Santos da Costa Oliveira', 'M', 'Liqui?a', '', 1, '', '', 'baartete', '24/010//1995', '', 'Ativo'),
('20150901022', 'Hermino A. Xavier Sozinho', 'M', 'Lautem', '', 1, '', '', 'lopalos', '31/07/996', '', 'Ativo'),
('20150901023', 'Isabel Ximenes Belo/ Isabel F?tima Xavier', 'F', 'Bobonaro', '', 1, '', '', 'atbae', '6/04/', '', 'Ativo'),
('20150901024', 'Izequiel Valente Lopes', 'M', 'Viqueque', '', 1, '', '', 'viueque', '24/009/1996', '', 'Ativo'),
('20150901025', 'Joana Batista da Silva', 'F', 'Baucau', '', 1, '', '', 'bacau', '24/006/96', '', 'Ativo'),
('20150901026', 'Joana Ximenes Belo', 'F', 'Baucau', '', 1, '', '', 'bacau', '6/06/', '', 'Ativo'),
('20150901027', 'Jo?o Bosco D.S.G. Ximenes', 'M', 'Viqueque', '', 1, '', '', 'viueque', '18/004/1994', '', 'Ativo'),
('20150901028', 'Junior dos Santos Dias Silva', 'M', 'Lautem', '', 1, '', '', 'lopalos', '06/03/93', '', 'Ativo'),
('20150901029', 'Laura Francisca Sim?es', 'F', 'Baucau', '', 1, '', '', 'bauia', '9/03/', '', 'Ativo'),
('20150901030', 'Leocadia Leong Sarmento', 'F', 'Baucau', '', 1, '', '', 'bacau', '18/010/96', '', 'Ativo'),
('20150901031', 'Liziana Maria  da Costa Belo', 'F', 'Baucau', '', 1, '', '', 'veilale', '23/012/1996', '', 'Ativo'),
('20150901032', 'Luis Garcia Dos Santos', 'M', 'Lautem', '', 1, '', '', 'latem', '09/006/96', '', 'Ativo'),
('20150901033', 'Marcelino Gusm?o', 'M', 'Baucau', '', 1, '', '', 'bacau', '13/005/94', '', 'Ativo'),
('20150901034', 'Maria do Rosario Oviyanti Pinto', 'F', 'Baucau', '', 1, '', '', 'bauia', '10/024/96', '', 'Ativo'),
('20150901035', 'Occia Joana dos Santos', 'F', 'Ermera', '', 1, '', '', 'haolia', '10/04/96', '', 'Ativo'),
('20150901036', 'Octaviano Pedro Monteiro Doni', 'M', 'Baucau', '', 1, '', '', 'bacau', '22/010/94', '', 'Ativo'),
('20150901037', 'Patricio D. da Silva', 'M', 'Lautem', '', 1, '', '', 'lopalos', '2343/0996', '', 'Ativo'),
('20150901038', 'Ramos Filipe Gusm?o Pinto', 'M', 'Baucau', '', 1, '', '', 'bubau', '30/03/06', '', 'Ativo'),
('20150901039', 'Vanessa A. B. Dos Santos', 'F', 'Dili', '', 1, '', '', 'dii', '06/02/96', '', 'Ativo'),
('20150901040', 'Wili Brodus Usfinit', 'M', 'Dili', '', 1, '', '', 'dii', '09/01/93', '', 'Ativo'),
('20150901041', 'Zelia Ximenes da Costa', 'F', 'Lautem', '', 1, '', '', 'lopalos', '01/04/96', '', 'Ativo'),
('20150901042', 'Zeri Andrade Lopes', 'M', 'Lautem', '', 1, '', '', 'lopalos', '01/04/96', '', 'Ativo'),
('20170901001', 'Adelio Florival de Araujo', 'M', 'Bobonaro', '', 3, '', '', 'boonaro', '26/009/997', '', 'Ativo'),
('20170901002', 'Adriano Venura Elo', 'M', 'Oe-Cusse', '', 3, '', '', 'niin', '30/008/7', '', 'Ativo'),
('20170901003', 'Agosta Amaral', 'F', 'Viqueque', '', 3, '', '', 'uai-Uma', '06/008/1997', '', 'Ativo'),
('20170901004', 'Agostinho Apar?cio', 'M', 'Viqueque', '', 3, '', '', 'lea', '28/005/', '', 'Ativo'),
('20170901005', 'Aguido Apar?cio', 'M', 'Viqueque', '', 3, '', '', 'viueque', '18/007/1996', '', 'Ativo'),
('20170901006', 'Augusto Soares Gomes Pinto', 'M', 'Viqueque', '', 3, '', '', 'viueque', '16/008/1994', '', 'Ativo'),
('20170901007', 'Alfionita da R. Sousa dos Santos', 'F', 'Lautem', '', 3, '', '', 'lopalos', '04/004/1999', '', 'Ativo'),
('20170901008', 'Almerinda Caldeira', 'F', 'Lautem', '', 3, '', '', 'lopalos', '29/007/1997', '', 'Ativo'),
('20170901009', 'Amancio da Silva Guterres', 'M', 'Viqueque', '', 3, '', '', 'os?', '16/005/', '', 'Ativo'),
('20170901010', 'Ambrocio Purwanto Colo', 'M', 'Oe-Cusse', '', 3, '', '', 'pealongan', '24/001/1/1999', '', 'Ativo'),
('20170901011', 'Ananias C. Da C. Soares', 'M', 'Lautem', '', 3, '', '', 'canlio', '16/012/998', '', 'Ativo'),
('20170901012', 'Ananias Lopes', 'M', 'Lautem', '', 3, '', '', 'parara', '24/003/997', '', 'Ativo'),
('20170901013', 'Ang?lica do Santos Ara?jo', 'F', 'Aileu', '', 3, '', '', 'aieu', '09/003/8', '', 'Ativo'),
('20170901014', 'Arcangela Vila Nova Andrade', 'F', 'Viqueque', '', 3, '', '', 'os?', '07/004/', '', 'Ativo'),
('20170901015', 'Balbina Pereira Gusm?o', 'F', 'Dili', '', 3, '', '', 'keiri Indonesia', '07/012/, 07/12/1997', '', 'Ativo'),
('20170901016', 'Basilio Trinito Ribeiro  da Cruz', 'M', 'Lautem', '', 3, '', '', 'lopalos', '10/009/1997', '', 'Ativo'),
('20170901017', 'Betelia Le?o-Loco', 'F', 'Dili', '', 3, '', '', 'dii', '18/011/', '', 'Ativo'),
('20170901018', 'Bonifacio Alves Coreira', 'M', 'Viqueque', '', 3, '', '', 'os?', '05/008/', '', 'Ativo'),
('20170901019', 'Carlota F. Dos Reis Correia', 'F', 'Baucau', '', 3, '', '', 'baartete', '02/006//1998', '', 'Ativo'),
('20170901020', 'Carol Nixon X. Caldeira', 'M', 'Dili', '', 3, '', '', 'dii', '03/002/99', '', 'Ativo'),
('20170901021', 'Carsilio Peregrino Soares Ximenes', 'M', 'Baucau', '', 3, '', '', 'dii', '20/009/', '', 'Ativo'),
('20170901022', 'Catarina Guterres Bere', 'F', 'Aileu', '', 3, '', '', 'aioc-Laran', '29/004/04/1999', '', 'Ativo'),
('20170901023', 'C?sar Caldas Francisco Belo', 'M', 'Baucau', '', 3, '', '', 'bacau', '10/008/94', '', 'Ativo'),
('20170901024', 'Cipriano da Costa Pereira', 'M', 'Manufahi', '', 3, '', '', 'dae-Mulo', '03/011//1997', '', 'Ativo'),
('20170901025', 'Cristiana de Jesus Miranda', 'F', 'Lautem', '', 3, '', '', 'nauloi', '26/005/997', '', 'Ativo'),
('20170901026', 'David Alex Mendon?a', 'M', 'Aileu', '', 3, '', '', 'aieu', '22/008/6', '', 'Ativo'),
('20170901027', 'Deolinda Matos Guterres', 'F', 'Baucau', '', 3, '', '', 'veilale', '22/012/1997', '', 'Ativo'),
('20170901028', 'Deonicio Jo?o dos Reis Pereira', 'M', 'Bobonaro', '', 3, '', '', 'boonaro', '28/006/1996', '', 'Ativo'),
('20170901029', 'Devia Catarina Soares do Rego', 'F', 'Dili', '', 3, '', '', 'dii', '012/98', '', 'Ativo'),
('20170901030', 'Deon?sio Pascoal Ximenes', 'M', 'Baucau', '', 3, '', '', 'qulicai', '24/002/1996', '', 'Ativo'),
('20170901031', 'Efa Recarda do Santos', 'F', 'Ermera', '', 3, '', '', 'ralaco', '11/011/998', '', 'Ativo'),
('20170901032', 'Elizabet de F?tima Cardoso', 'F', 'Manufahi', '', 3, '', '', 'cldick', '16/010/996', '', 'Ativo'),
('20170901033', 'Emerenciana Sousa Amaral', 'F', 'Covalima', '', 3, '', '', 'faumea', '02/003/995', '', 'Ativo'),
('20170901034', 'Esmeralda Moreira', 'F', 'Baucau', '', 3, '', '', 'qulicai', '09/004/1998', '', 'Ativo'),
('20170901035', 'Estelita dos Santos', 'F', 'Baucau', '', 3, '', '', 'bacau', '02/010/97', '', 'Ativo'),
('20170901036', 'Eulalia do Carmo Tilman', 'F', 'Ainaro', '', 3, '', '', 'aiaro', '27/010/96', '', 'Ativo'),
('20170901037', 'Fabiola Aprilianti dos Santos', 'F', 'Dili', '', 3, '', '', 'atmbua', '01/004/998', '', 'Ativo'),
('20170901038', 'Felicidade da Silva Ara?jo', 'F', 'Aileu', '', 3, '', '', 'aieu', '13/003/5', '', 'Ativo'),
('20170901039', 'Fidelis Walter da Silva', 'M', 'Aileu', '', 3, '', '', 'aieu', '24/004/', '', 'Ativo'),
('20170901040', 'Florinda Xavier Pereira', 'F', 'Aileu', '', 3, '', '', 'aieu', '13/009/4', '', 'Ativo'),
('20170901041', 'Francisco Piedade', 'M', 'Bobonaro', '', 3, '', '', 'atbae', '24/007/96', '', 'Ativo'),
('20170901042', 'Francisco Xavier Madeira', 'M', 'Ermera', '', 3, '', '', 'mituto', '08/007/995', '', 'Ativo'),
('20170901043', 'Frutuoso Rodriques', 'M', 'Manufahi', '', 3, '', '', 'maufahi', '22/011/1992', '', 'Ativo'),
('20170901044', 'Greg?rio Quefi', 'M', 'Oe-Cusse', '', 3, '', '', 'hamnanu', '31/005/1997', '', 'Ativo'),
('20170901045', 'Hermenegildo  Pinto', 'M', 'Viqueque', '', 3, '', '', 'uao-Carbau', '23/002/02/1996', '', 'Ativo'),
('20170901046', 'Incencia dos Santos Pires', 'F', 'Bobonaro', '', 3, '', '', 'calaco', '22/003/998', '', 'Ativo'),
('20170901047', 'Inoc?ncia Doutel Gon?alves', 'F', 'Liqui?a', '', 3, '', '', 'baartete', '07/012//1995', '', 'Ativo'),
('20170901048', 'Irlentina dos Santos Cruz', 'F', 'Lautem', '', 3, '', '', 'latem', '11/001/98', '', 'Ativo'),
('20170901049', 'Jer?imo Barros Soares', 'M', 'Dili', '', 3, '', '', 'at?ro', '25/010/96', '', 'Ativo'),
('20170901050', 'Jonacia Jelita da Costa Fernandes', 'F', 'Dili', '', 3, '', '', 'quntal Ki\'ik', '17/001/7/01/1998', '', 'Ativo'),
('20170901051', 'Julia Gabriela Soares Borges', 'F', 'Bobonaro', '', 3, '', '', 'raheu', '07/007/98', '', 'Ativo'),
('20170901052', 'J?lio de Ara?jo Vicente', 'M', 'Covalima', '', 3, '', '', 'faumea', '06/007/997', '', 'Ativo'),
('20170901053', 'Junita dos Santos', 'F', 'Lautem', '', 3, '', '', 'polamano', '22/006//1996', '', 'Ativo'),
('20170901054', 'Juonito da Costa Pinheiro', 'M', 'Manufahi', '', 3, '', '', 'weerek', '07/002/997', '', 'Ativo'),
('20170901055', 'Ligia Martinha das Neves', 'F', 'Manatuto', '', 3, '', '', 'dii', '04/009/', '', 'Ativo'),
('20170901056', 'Luis G. B. Monteirjo', 'M', 'Manufahi', '', 3, '', '', 'faucuak', '20/012/11997', '', 'Ativo'),
('20170901057', 'Luisa Mazarela', 'F', 'Covalima', '', 3, '', '', 'zualai', '22/009/997', '', 'Ativo'),
('20170901058', 'Marcelita Juventinha', 'F', 'Lautem', '', 3, '', '', 'daabere', '30/003/1997', '', 'Ativo'),
('20170901059', 'Marcos Tilma Carvalho', 'M', 'Ermera', '', 3, '', '', 'erera', '11/005/95', '', 'Ativo'),
('20170901060', 'M?rio de Ara?jo Amaral', 'M', 'Ainaro', '', 3, '', '', 'haubuilico', '15/004/04/1995', '', 'Ativo'),
('20170901061', 'M?rio magalh?es', 'M', 'Viqueque', '', 3, '', '', 'uaolari', '17/003/1997', '', 'Ativo'),
('20170901062', 'Miguel Rua Fernandes', 'M', 'Lautem', '', 3, '', '', 'lopalos', '28/010/997', '', 'Ativo'),
('20170901063', 'Nelio de F?tima Silva da Cunha', 'M', 'Dili', '', 3, '', '', 'dii', '08/011/', '', 'Ativo'),
('20170901064', 'Nicolau Alves Moreira', 'M', 'Baucau', '', 3, '', '', 'qulicai', '20/009/1996', '', 'Ativo'),
('20170901065', 'Niviana Babo de Jesus', 'F', 'Ermera', '', 3, '', '', 'poilala', '06/010/1998', '', 'Ativo'),
('20170901066', 'Norberto da Silva', 'M', 'Lautem', '', 3, '', '', 'fut', '20/011/', '', 'Ativo'),
('20170901067', 'Octalia Manuela das Neves Fotura', 'F', 'Viqueque', '', 3, '', '', 'os?', '25/010/', '', 'Ativo'),
('20170901068', 'Of?lia de Jesus Sampaio', 'F', 'Liqui?a', '', 3, '', '', 'liui?a', '11/002/997', '', 'Ativo'),
('20170901069', 'Ofriana Esteves da Costa', 'F', 'Lautem', '', 3, '', '', 'ilomar', '22/010/997', '', 'Ativo'),
('20170901070', ' Paulo Cardoso Soares Amaral', 'M', 'Viqueque', '', 3, '', '', 'uaulari', '16/0998', '', 'Ativo'),
('20170901071', 'Pedro F?tima L? de Jesus', 'M', 'Baucau', '', 3, '', '', 'veilale', '19/009/1998', '', 'Ativo'),
('20170901072', 'Pedro gil da Costa F?tima', 'M', 'Liqui?a', '', 3, '', '', 'liui?a', '18/007/995', '', 'Ativo'),
('20170901073', 'Ramiro Valdenino X. Da Cruz', 'M', 'Dili', '', 3, '', '', 'dii', '11/003/', '', 'Ativo'),
('20170901074', 'Remisio Nunes Pereira Hor?sio', 'M', 'Manatuto', '', 3, '', '', 'daduc', '10/004/97', '', 'Ativo'),
('20170901075', 'Samuel Pereira', 'M', 'Viqueque', '', 3, '', '', 'aie', '14/003/', '', 'Ativo'),
('20170901076', 'Sandra da Costa Neto', 'F', 'Dili', '', 3, '', '', 'dii', '02/012/', '', 'Ativo'),
('20170901077', 'Sebasti?o Varudo', 'M', 'Dili', '', 3, '', '', 'at?ro', '11/007/98', '', 'Ativo'),
('20170901078', 'Senito F?tima Delpiero Oliveira', 'M', 'Dili', '', 3, '', '', 'dii', '20/008/', '', 'Ativo'),
('20170901079', 'Silveiro da Costa Belo', 'M', 'Baucau', '', 3, '', '', 'gai-Wai', '31/003/1995', '', 'Ativo'),
('20170901080', 'S?nia Soares Fernandes', 'F', 'Baucau', '', 3, '', '', 'qulicai', '14/006/1999', '', 'Ativo'),
('20170901081', 'Veronica Imaculada da Concei??o', 'F', 'Bobonaro', '', 3, '', '', 'maiana', '04/011/998', '', 'Ativo'),
('20170901082', 'Walter Isodoro S.S. Amaral', 'M', 'Dili', '', 3, '', '', 'dii', '026/04/98', '', 'Ativo'),
('20170901083', 'Xisiadora Auxiliadora', 'F', 'Dili', '', 3, '', '', 'dii', '17/002/99', '', 'Ativo'),
('20170901084', 'Zelia da Silva', 'F', 'Ainaro', '', 3, '', '', 'aiaro', '17/011/7', '', 'Ativo'),
('20170901085', 'Pedro Ricardo Soares Moreira', 'M', 'Baucau', '', 3, '', '', 'bacau', '03/003/96', '', 'Ativo'),
('20180901001', 'Aderito A M de Oliveira', 'M', 'Baucau', '', 4, '', '', 'bacau', '22/03/09', '', 'Ativo'),
('20180901002', 'Afonso da Silva Barreto', 'M', 'Viqueque', '', 4, '', '', 'viueque', '15/04/996', '', 'Ativo'),
('20180901003', 'Agostinha da Silva de Carvalho Kehi', 'F', 'Baucau', '', 4, '', '', 'ualili', '10/08/93', '', 'Ativo'),
('20180901004', 'Agostinho da Costa Carvalho', 'M', 'Dili', '', 4, '', '', 'dii', '21/07/98', '', 'Ativo'),
('20180901005', 'Ana Paula de Deus Andrade', 'F', 'Ainaro', '', 4, '', '', 'aiaro', '4/012/7', '', 'Ativo'),
('20180901006', 'Ana Rosalia de Oliveira', 'F', 'Baucau', '', 4, '', '', 'veilale', '14/08/997', '', 'Ativo'),
('20180901007', 'Ant?nio Bianco', 'M', 'Ainaro', '', 4, '', '', 'ma-nuno', '03/05/99', '', 'Ativo'),
('20180901008', 'Arjun Elias da Costa', 'M', 'Baucau', '', 4, '', '', 'veilale', '07/04/99', '', 'Ativo'),
('20180901009', 'Arlindo da Costa e Silva', 'M', 'Viqueque', '', 4, '', '', 'osu', '30/04/97', '', 'Ativo'),
('20180901010', 'Arsenio Wilton Rodrigues Dias Ximenes', 'M', 'Ainaro', '', 4, '', '', 'aiaro', '22/08/08', '', 'Ativo'),
('20180901011', 'Asension Relistencia Rebollos', 'M', 'Lautem', '', 4, '', '', 'lopalos', '05/09/98', '', 'Ativo'),
('20180901012', 'Assun??o Arcanjo Achan Mausiry', 'M', 'Dili', '', 4, '', '', 'dii', '09/08/99', '', 'Ativo'),
('20180901013', 'Augusta Lopes', 'F', 'Lautem', '', 4, '', '', 'lopalos', '29/08/000', '', 'Ativo'),
('20180901014', 'Auxiliadora Maria Jose de Jesus Quintao', 'F', 'Viqueque', '', 4, '', '', 'viueque', '02/04/99', '', 'Ativo'),
('20180901015', 'Camilo Marques', 'M', 'Manufahi', '', 4, '', '', 'tuiscai', '05/07/99', '', 'Ativo'),
('20180901016', 'Casimiro do Carmo Viera Soares', 'M', 'Lautem', '', 4, '', '', 'moo', '26/07/96', '', 'Ativo'),
('20180901017', 'Celestinho Soraes', 'M', 'Viqueque', '', 4, '', '', 'viueque', '28/08/996', '', 'Ativo'),
('20180901018', 'Constantinho Lourenco Col?', 'M', 'Baucau', '', 4, '', '', 'ualili', '13/08/97', '', 'Ativo'),
('20180901019', 'Cristina Keti Nunes', 'F', 'Dili', '', 4, '', '', 'dii', '21/012/', '', 'Ativo'),
('20180901020', 'Cristiano Jaques Fernandes', 'M', 'Ainaro', '', 4, '', '', 'aiaro', '19/08/08', '', 'Ativo'),
('20180901021', 'D?nio Ucazem de Jesus Ximenes', 'M', 'Baucau', '', 4, '', '', 'dii', '21/011/', '', 'Ativo'),
('20180901022', 'Denilson Armando de Cristo Branco', 'M', 'Lautem', '', 4, '', '', 'laava', '29/011/98', '', 'Ativo'),
('20180901023', 'Diana da Costa Soares', 'F', 'Dili', '', 4, '', '', 'dii', '29/012/', '', 'Ativo'),
('20180901024', 'Diogo Carvalho da Costa Soares', 'M', 'Lautem', '', 4, '', '', 'lopalos', '07/07/99', '', 'Ativo'),
('20180901025', 'Dircia Monica Lethulur', 'F', 'Baucau', '', 4, '', '', 'veilale', '29/012/1997', '', 'Ativo'),
('20180901026', 'Domingos Lopes', 'M', 'Lautem', '', 4, '', '', 'latem', '9/05/', '', 'Ativo'),
('20180901027', 'Domingos Martins Dias', 'M', 'Aileu', '', 4, '', '', 'falaran', '14/07/998', '', 'Ativo'),
('20180901028', 'Eldinha Sequeira', 'F', 'Dili', '', 4, '', '', 'dii', '09/09/99', '', 'Ativo'),
('20180901029', 'Elvino Fraga', 'M', 'Baucau', '', 4, '', '', 'qulicai', '12/06/999', '', 'Ativo'),
('20180901030', 'Emilio da Crus Lopes', 'M', 'Lautem', '', 4, '', '', 'seelau', '10/04/93', '', 'Ativo'),
('20180901031', 'Encya Josefina Lobo', 'F', 'Dili', '', 4, '', '', 'dii', '07/02/00', '', 'Ativo'),
('20180901032', 'Engracia Freitas dos Santos', 'F', 'Baucau', '', 4, '', '', 'bacau', '28/06/07', '', 'Ativo'),
('20180901033', 'Epifanio Montela Pereira', 'M', 'Lautem', '', 4, '', '', 'lopalos', '14/03/997', '', 'Ativo'),
('20180901034', 'Ermelinda Ximenes Freitas Gaio Filipe', 'F', 'Baucau', '', 4, '', '', 'bacau', '8/04/', '', 'Ativo'),
('20180901035', 'Ernestina Gusm?o', 'F', 'Bobonaro', '', 4, '', '', 'atbae', '28/011/97', '', 'Ativo'),
('20180901036', 'Eug?nio Reinato Soares', 'M', 'Aileu', '', 4, '', '', 'aieu', '31/05/', '', 'Ativo'),
('20180901037', 'Evaliza Ramos da Costa Ara?jo', 'F', 'Ainaro', '', 4, '', '', 'aiaro', '2/011/7', '', 'Ativo'),
('20180901038', 'Fabiola Jeoveva Auxiliadora', 'F', 'Lautem', '', 4, '', '', 'tcaulufuro', '1/06//1998', '', 'Ativo'),
('20180901039', 'Favio Esp?nola Corte-real Turquel', 'M', 'Dili', '', 4, '', '', 'aiaro', '27/04/09', '', 'Ativo'),
('20180901041', 'Febriana da Silva', 'F', 'Lautem', '', 4, '', '', 'lopalos', '18/05/999', '', 'Ativo'),
('20180901042', 'Feliciana Aplonia soares', 'F', 'Lautem', '', 4, '', '', 'ilomar', '06/02/08', '', 'Ativo'),
('20180901043', 'Felicidade Araujo de Jesus Guterres', 'F', 'Manatuto', '', 4, '', '', 'lalubar', '08/01/94', '', 'Ativo'),
('20180901044', 'Ferdelito de Jesus Pinto', 'M', 'Lautem', '', 4, '', '', 'ilomar', '06/04/09', '', 'Ativo'),
('20180901045', 'Francisco Xavier Tavares Exposto', 'M', 'Ermera', '', 4, '', '', 'erera', '19/07/07', '', 'Ativo'),
('20180901046', 'Guilermino Joaquim da Costa Pinto', 'M', 'Lautem', '', 4, '', '', 'ilomar', '31/05/00', '', 'Ativo'),
('20180901047', 'Guedinho Manuel Espirito Santos Nunes', 'M', 'Dili', '', 4, '', '', 'dii', '23/08/95', '', 'Ativo'),
('20180901048', 'Ivonio Sequeira', 'M', 'Lautem', '', 4, '', '', 'dadere', '18/05/99', '', 'Ativo'),
('20180901049', 'Jaime Saores Martins', 'M', 'Ermera', '', 4, '', '', 'erera', '31/08/08', '', 'Ativo'),
('20180901050', 'Jaimito Ati de Ara?jo', 'M', 'Ainaro', '', 4, '', '', 'aiaro', '7/05/', '', 'Ativo'),
('20180901051', 'Janu?rio Xavier', 'M', 'Viqueque', '', 4, '', '', 'viueque', '24/07/995', '', 'Ativo'),
('20180901052', 'Jesminina Marilia de Ara?jo', 'F', 'Dili', '', 4, '', '', 'dii', '1/010/99', '', 'Ativo'),
('20180901053', 'Joana da Silva Almeida', 'F', 'Dili', '', 4, '', '', 'dii', '20/012/', '', 'Ativo'),
('20180901054', 'Joaninha da F?tima da Concei??o', 'F', 'Ainaro', '', 4, '', '', 'aiuto', '24/07/00', '', 'Ativo'),
('20180901055', 'Jo?o Baptista Gusm?o', 'M', 'Covalima', '', 4, '', '', 'sui', '20/03/98', '', 'Ativo'),
('20180901056', 'Jo?o Brito', 'M', 'Viqueque', '', 4, '', '', 'afloicai', '10/05/98', '', 'Ativo'),
('20180901057', 'Jo?ozinho da Costa Lemos', 'M', 'Lautem', '', 4, '', '', 'natetu', '08/06/08', '', 'Ativo'),
('20180901058', 'Jopra Fernandes Amaral', 'M', 'Viqueque', '', 4, '', '', 'bagia', '26/05/07', '', 'Ativo'),
('20180901059', 'Jos? Agostinho Fraga Barros', 'M', 'Baucau', '', 4, '', '', 'bauia', '16/06/09', '', 'Ativo'),
('20180901060', 'Julio Lucas Soares', 'M', 'Viqueque', '', 4, '', '', 'viueque', '04/07/96', '', 'Ativo'),
('20180901061', 'Leliana Alves da Silva', 'F', 'Dili', '', 4, '', '', 'dii', '19/07/95', '', 'Ativo'),
('20180901062', 'Leti?ia I. C. Amaral Gosalves', 'F', 'Dili', '', 4, '', '', 'dii', '08/05/01', '', 'Ativo'),
('20180901063', 'L?dia Neves da Costa Baptista', 'F', 'Dili', '', 4, '', '', 'dii', '15/011/', '', 'Ativo'),
('20180901064', 'Liliana Maria da Concei??o Lopes', 'F', 'Dili', '', 4, '', '', 'dii', '7/010/98', '', 'Ativo'),
('20180901065', 'Liviana F?tima Ch?o da Silva Martins', 'F', 'Ainaro', '', 4, '', '', 'aiaro', '29/07/09', '', 'Ativo'),
('20180901066', 'Louren?o Doutel Mendes', 'M', 'Manufahi', '', 4, '', '', 'als', '15/02/95', '', 'Ativo'),
('20180901067', 'L?cio de Jesus', 'M', 'Bobonaro', '', 4, '', '', 'boonaro', '10/012/1996', '', 'Ativo'),
('20180901068', 'Manuela Mendon?a', 'F', 'Baucau', '', 4, '', '', 'qulicai', '02/02/94', '', 'Ativo'),
('20180901069', 'Marcos do Santos Ximenes', 'M', 'Dili', '', 4, '', '', 'dii', '02/03/00', '', 'Ativo'),
('20180901070', 'Margareta, Rodrigues Araujo', 'F', 'Bobonaro', '', 4, '', '', 'maiana', '16/04/98', '', 'Ativo'),
('20180901071', 'Margarida de Canossa Amaral Viegas', 'F', 'Dili', '', 4, '', '', 'dii', '10/012/', '', 'Ativo'),
('20180901072', 'Maria Aderina Lopes Pires', 'F', 'Lautem', '', 4, '', '', 'la-ara', '11/02/98', '', 'Ativo'),
('20180901073', 'Maria Brizita de Jesus', 'F', 'Covalima', '', 4, '', '', 'weaba', '4/08/', '', 'Ativo'),
('20180901074', 'Mariano Pinto', 'M', 'Viqueque', '', 4, '', '', 'uao-carbau', '15/05//1994', '', 'Ativo'),
('20180901075', 'Marlina Messoal', 'F', 'Manufahi', '', 4, '', '', 'sae', '26/03/01', '', 'Ativo'),
('20180901076', 'Martinho Barreto', 'M', 'Dili', '', 4, '', '', 'rii-Luli', '18/08/98', '', 'Ativo'),
('20180901077', 'Martinho Vasco Ximenes', 'M', 'Baucau', '', 4, '', '', 'veilale', '15/03/999', '', 'Ativo'),
('20180901078', 'Moises Soares', 'M', 'Dili', '', 4, '', '', 'bacau', '24/08/08', '', 'Ativo'),
('20180901079', 'Mononcia Maria do Ceu de Jesus', 'F', 'Bobonaro', '', 4, '', '', 'atbae', '26/04/09', '', 'Ativo'),
('20180901080', 'Nat?lia Rihan Sarmento', 'F', 'Dili', '', 4, '', '', 'dii', '23/012/', '', 'Ativo'),
('20180901081', 'Nelcio Jo?o Martins', 'M', 'Ermera', '', 4, '', '', 'haolia', '2/010/99', '', 'Ativo'),
('20180901082', 'Nelina dos Santos', 'F', 'Liqui?a', '', 4, '', '', 'liui?a', '13/06/97', '', 'Ativo'),
('20180901083', 'Nelinha Parada', 'F', 'Baucau', '', 4, '', '', 'bacau', '23/01/09', '', 'Ativo'),
('20180901084', 'Nicolau Ant?nio Pereira', 'M', 'Baucau', '', 4, '', '', 'laateri', '10/011/1996', '', 'Ativo'),
('20180901085', 'Osvaldo Soares Gomes', 'M', 'Dili', '', 4, '', '', 'dii', '02/07/99', '', 'Ativo'),
('20180901086', 'Pedro Paulo dos Reis', 'M', 'Ermera', '', 4, '', '', 'saara', '7/05/', '', 'Ativo'),
('20180901087', 'Regina dessiana dos Santos', 'F', 'Lautem', '', 4, '', '', 'latem', '19/04/07', '', 'Ativo'),
('20180901088', 'Rita Hornai', 'F', 'Lautem', '', 4, '', '', 'lopalos', '10/03/991', '', 'Ativo'),
('20180901089', 'Roumaldo de Ara?jo', 'M', 'Ainaro', '', 4, '', '', 'aiaro', '22/010/98', '', 'Ativo'),
('20180901090', 'Samuel de Deus', 'M', 'Ermera', '', 4, '', '', 'erera', '29/06/05', '', 'Ativo'),
('20180901091', 'Santiago Humberto Soares', 'M', 'Manatuto', '', 4, '', '', 'bacau', '5/08/', '', 'Ativo'),
('20180901092', 'Serafina Madeira Tilman', 'F', 'Ermera', '', 4, '', '', 'lemea-craik', '20/04/4/1996', '', 'Ativo'),
('20180901093', 'Sergio Soares da Fonseca', 'M', 'Lautem', '', 4, '', '', 'latem', '28/011/97', '', 'Ativo'),
('20180901094', 'Shelsea Amaral Borges', 'F', 'Dili', '', 4, '', '', 'dii', '13/012/', '', 'Ativo'),
('20180901095', 'Sofia Bete Gon?alves de Araujo', 'F', 'Dili', '', 4, '', '', 'dii', '20/06/00', '', 'Ativo'),
('20180901096', 'Timoteo Paulo da Costa Seixas', 'M', 'Lautem', '', 4, '', '', 'ilomar', '19/02/99', '', 'Ativo'),
('20180901097', 'Vanessa Lolita da Costa Nunes', 'F', 'Dili', '', 4, '', '', 'dii', '02/08/99', '', 'Ativo'),
('20180901098', 'Venancio Poto', 'M', 'Oe-Cusse', '', 4, '', '', 'pue', '02/011/95', '', 'Ativo'),
('20180901099', 'Vitorino de Paulo', 'M', 'Aileu', '', 4, '', '', 'aieu', '25/01/', '', 'Ativo');

-- --------------------------------------------------------

--
-- Table structure for table `t_funs`
--

CREATE TABLE `t_funs` (
  `id_funs` char(6) NOT NULL,
  `naran_funs` char(50) NOT NULL,
  `nivel_estudo` char(12) NOT NULL,
  `cargo` char(20) NOT NULL,
  `status` enum('Ativo','Não','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_funs`
--

INSERT INTO `t_funs` (`id_funs`, `naran_funs`, `nivel_estudo`, `cargo`, `status`) VALUES
('213', 'Antonio', 'S3', 'Mestre', 'Ativo'),
('23', 'Jose', 'S3', 'Professor', 'Ativo'),
('8', 'lucio de f afonso', 's1', 'docente', 'Ativo'),
('ahaha', 'dsa', 'd', '', 'Ativo'),
('sdsa', 'sss', 'aaa', 'ss', 'Ativo');

-- --------------------------------------------------------

--
-- Table structure for table `t_materia`
--

CREATE TABLE `t_materia` (
  `id_materia` char(6) NOT NULL,
  `materia` char(50) NOT NULL,
  `sks` int(2) NOT NULL,
  `id_plano` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_materia`
--

INSERT INTO `t_materia` (`id_materia`, `materia`, `sks`, `id_plano`) VALUES
('111111', 'L?ngua Portuguesa I', 4, 2),
('111112', 'L?ngua Portuguesa II', 4, 2),
('111113', 'L?ngua Inglesa I', 4, 2),
('111114', 'L?ngua Inglesa II', 4, 2),
('111115', 'L?ngua T?tum', 4, 2),
('111116', 'Introdu??o aos Conceitos de Matem?tica I', 6, 2),
('111117', 'Introdu??o aos Conceitos de Matem?tica II', 6, 2),
('111118', 'Introdu??o aos Conceitos de F?sica', 6, 2),
('111119', 'Introdu??o aos Conceitos de Qu?mica', 6, 2),
('111120', 'Laborat?rios de F?sica', 6, 2),
('111121', 'Laborat?rios de Qu?mica', 6, 2),
('111122', 'Educa??o C?vica e ?tica Profissional', 4, 2),
('111123', 'L?ngua Portuguesa III', 4, 2),
('111124', 'Qu?mica B?sica', 8, 2),
('111125', 'C?lculo I', 6, 2),
('111126', 'Elementos de F?sica', 6, 2),
('111127', '?lgebra', 6, 2),
('111128', 'C?lculo II', 6, 2),
('111129', 'Estrutura At?mica e Molecular', 6, 2),
('111130', 'Mec?nica Cl?ssica', 8, 2),
('111131', 'L?ngua Portuguesa IV', 4, 2),
('111132', 'Matem?tica Discreta', 6, 2),
('111133', 'Eletromagnetismo I', 10, 2),
('111134', 'C?lculo III', 9, 2),
('111135', 'L?ngua Inglesa III', 4, 2),
('111136', 'Aplicacionais para Ci?ncias', 9, 2),
('111137', 'T?cnicas Laboratoriais de Qu?mica', 8, 2),
('111138', 'L?ngua Inglesa IV', 4, 2),
('111139', 'Probabilidades e Estatistica', 8, 2),
('111140', 'Algoritmos e Programa??o', 8, 2),
('111141', 'Estrutura alg?bricas', 8, 2),
('111142', 'Ondas', 8, 2),
('111143', 'Qu?mica Org?nica', 8, 2),
('111144', 'Instrumenta??o para a f?sica', 6, 2),
('111145', 'An?lise N?merica', 6, 2),
('111146', 'Termodin?mica e F?sica Estat?stica', 8, 2),
('111147', 'Qu?mica-F?sica', 8, 2),
('111148', 'M?todo de An?lise Qu?mica', 8, 2),
('111149', 'F?sica Qu?ntica', 6, 2),
('111150', 'Qu?mica Inorg?nica', 8, 2),
('111151', 'Qu?mica do Processo Industriais', 8, 2),
('111152', 'Analisa das ?guas Naturais e Residuais', 8, 2),
('111153', 'Projeto', 14, 2),
('111154', 'Gest?o Integrada de Projetos', 8, 2),
('111155', 'Menor II', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_plano`
--

CREATE TABLE `t_plano` (
  `id_plano` int(2) NOT NULL,
  `plano` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_plano`
--

INSERT INTO `t_plano` (`id_plano`, `plano`) VALUES
(1, 'Antigo'),
(2, 'Novo');

-- --------------------------------------------------------

--
-- Table structure for table `t_sala`
--

CREATE TABLE `t_sala` (
  `id_sala` int(2) NOT NULL,
  `numeru_sala` char(4) NOT NULL,
  `nome_sala` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_sala`
--

INSERT INTO `t_sala` (`id_sala`, `numeru_sala`, `nome_sala`) VALUES
(1, 'A001', 'Laboratorium'),
(2, 'A002', 'Biblioteca');

-- --------------------------------------------------------

--
-- Table structure for table `t_semestre`
--

CREATE TABLE `t_semestre` (
  `id_semestre` int(1) NOT NULL,
  `semestre` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_semestre`
--

INSERT INTO `t_semestre` (`id_semestre`, `semestre`) VALUES
(1, 'Impar'),
(2, 'Par');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `id_status` int(1) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`id_status`, `status`) VALUES
(1, 'Ativo'),
(2, 'gradua'),
(3, 'Desistiu'),
(4, 'Tranferensia sai'),
(5, 'Transferensia Tama');

-- --------------------------------------------------------

--
-- Table structure for table `t_valor`
--

CREATE TABLE `t_valor` (
  `id_valor` int(10) NOT NULL,
  `id_aula` int(10) NOT NULL,
  `nre` char(11) NOT NULL,
  `valor_numeru` int(3) NOT NULL,
  `valor_alfa` char(1) NOT NULL,
  `obs` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_valor`
--

INSERT INTO `t_valor` (`id_valor`, `id_aula`, `nre`, `valor_numeru`, `valor_alfa`, `obs`) VALUES
(3, 3, '19.i.01.002', 98, '', ''),
(4, 3, '19.i.01.007', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_ano`
--
ALTER TABLE `t_ano`
  ADD PRIMARY KEY (`id_ano`);

--
-- Indexes for table `t_atual`
--
ALTER TABLE `t_atual`
  ADD KEY `nre` (`nre`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_ano` (`id_ano`),
  ADD KEY `id_semestre` (`id_semestre`);

--
-- Indexes for table `t_aula`
--
ALTER TABLE `t_aula`
  ADD PRIMARY KEY (`id_aula`),
  ADD KEY `id_semestre` (`id_semestre`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_funs` (`id_funs`),
  ADD KEY `id_ano` (`id_ano`);

--
-- Indexes for table `t_estudante`
--
ALTER TABLE `t_estudante`
  ADD PRIMARY KEY (`nre`),
  ADD KEY `id_ano` (`id_ano`);

--
-- Indexes for table `t_funs`
--
ALTER TABLE `t_funs`
  ADD PRIMARY KEY (`id_funs`);

--
-- Indexes for table `t_materia`
--
ALTER TABLE `t_materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `id_plano` (`id_plano`);

--
-- Indexes for table `t_plano`
--
ALTER TABLE `t_plano`
  ADD PRIMARY KEY (`id_plano`);

--
-- Indexes for table `t_sala`
--
ALTER TABLE `t_sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indexes for table `t_semestre`
--
ALTER TABLE `t_semestre`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `t_valor`
--
ALTER TABLE `t_valor`
  ADD PRIMARY KEY (`id_valor`),
  ADD KEY `id_aula` (`id_aula`),
  ADD KEY `nre` (`nre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_ano`
--
ALTER TABLE `t_ano`
  MODIFY `id_ano` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_aula`
--
ALTER TABLE `t_aula`
  MODIFY `id_aula` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_plano`
--
ALTER TABLE `t_plano`
  MODIFY `id_plano` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_sala`
--
ALTER TABLE `t_sala`
  MODIFY `id_sala` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_semestre`
--
ALTER TABLE `t_semestre`
  MODIFY `id_semestre` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_status`
--
ALTER TABLE `t_status`
  MODIFY `id_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_valor`
--
ALTER TABLE `t_valor`
  MODIFY `id_valor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_atual`
--
ALTER TABLE `t_atual`
  ADD CONSTRAINT `t_atual_ibfk_1` FOREIGN KEY (`nre`) REFERENCES `t_estudante` (`nre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_atual_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `t_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_atual_ibfk_3` FOREIGN KEY (`id_ano`) REFERENCES `t_ano` (`id_ano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_atual_ibfk_4` FOREIGN KEY (`id_semestre`) REFERENCES `t_semestre` (`id_semestre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_aula`
--
ALTER TABLE `t_aula`
  ADD CONSTRAINT `t_aula_ibfk_1` FOREIGN KEY (`id_funs`) REFERENCES `t_funs` (`id_funs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_aula_ibfk_2` FOREIGN KEY (`id_ano`) REFERENCES `t_ano` (`id_ano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_aula_ibfk_3` FOREIGN KEY (`id_sala`) REFERENCES `t_sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_aula_ibfk_4` FOREIGN KEY (`id_semestre`) REFERENCES `t_semestre` (`id_semestre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_aula_ibfk_5` FOREIGN KEY (`id_materia`) REFERENCES `t_materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_estudante`
--
ALTER TABLE `t_estudante`
  ADD CONSTRAINT `t_estudante_ibfk_2` FOREIGN KEY (`id_ano`) REFERENCES `t_ano` (`id_ano`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_materia`
--
ALTER TABLE `t_materia`
  ADD CONSTRAINT `t_materia_ibfk_1` FOREIGN KEY (`id_plano`) REFERENCES `t_plano` (`id_plano`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_valor`
--
ALTER TABLE `t_valor`
  ADD CONSTRAINT `t_valor_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `t_aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_valor_ibfk_2` FOREIGN KEY (`nre`) REFERENCES `t_estudante` (`nre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
