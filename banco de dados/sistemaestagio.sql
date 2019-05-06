-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06-Maio-2019 às 17:54
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaestagio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `rg` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `numero` int(6) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `campus` varchar(45) NOT NULL,
  `ra` varchar(45) NOT NULL,
  `telefoneFixo` varchar(45) DEFAULT NULL,
  `telefoneCelular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dataNascimento` varchar(45) NOT NULL,
  `tipoEstagio` tinyint(1) DEFAULT NULL,
  `nomeSeguradora` varchar(45) DEFAULT NULL,
  `valorBolsa` varchar(45) DEFAULT NULL,
  `beneficios` varchar(45) DEFAULT NULL,
  `numeroApolicesSeguros` varchar(45) DEFAULT NULL,
  `periodoAno` varchar(45) DEFAULT NULL,
  `modalidade` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `senha` varchar(45) NOT NULL,
  `idSupervisor` int(11) DEFAULT NULL,
  `idOrientador` int(11) DEFAULT NULL,
  `idEstagio` int(11) DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `campus`, `ra`, `telefoneFixo`, `telefoneCelular`, `email`, `dataNascimento`, `tipoEstagio`, `nomeSeguradora`, `valorBolsa`, `beneficios`, `numeroApolicesSeguros`, `periodoAno`, `modalidade`, `complemento`, `senha`, `idSupervisor`, `idOrientador`, `idEstagio`, `idEmpresa`) VALUES
('834354', '278.360.916-94', '1', 'Poços de Caldas', 'MG', '37701-000', 'Rua Assis Figueiredo', 'Centro', 1111, 'Técnico em Informática', 'Poços de Caldas', '14161000000', NULL, '(11) 11111-1111', '11111111@111111111.com', '2019-05-08', NULL, NULL, NULL, NULL, NULL, '3', NULL, '', 'aa1bf4646de67fd9086cf6c79007026c', NULL, 138, NULL, NULL),
('834354', '278.360.916-94', 'teste2', 'Poços de Caldas', 'MG', '37701-000', 'Rua Assis Figueiredo', 'Centro', 1, 'Técnico em Informática', 'Poços de Caldas', '14161000001', NULL, '(11) 11111-1111', '11111111@111111111.com', '2019-05-09', NULL, NULL, NULL, NULL, NULL, '1', NULL, '', 'aa1bf4646de67fd9086cf6c79007026c', NULL, 139, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `concedentes`
--

DROP TABLE IF EXISTS `concedentes`;
CREATE TABLE IF NOT EXISTS `concedentes` (
  `nome` varchar(45) NOT NULL,
  `cnpjCpf` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `responsavelTceNome` varchar(45) NOT NULL,
  `responsavelTceCargo` varchar(45) NOT NULL,
  `representanteEmpresaNome` varchar(45) NOT NULL,
  `representanteEmpresaCargo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `uf` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`, `descricao`, `idEmpresa`, `complemento`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15, 'empresa da familia Palma', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio`
--

DROP TABLE IF EXISTS `estagio`;
CREATE TABLE IF NOT EXISTS `estagio` (
  `cargaHorariaDiaria` varchar(45) NOT NULL,
  `horarioEstagio` varchar(45) NOT NULL,
  `dataInicial` varchar(45) NOT NULL,
  `dataFinal` varchar(45) NOT NULL,
  `segunda` tinyint(1) NOT NULL,
  `terca` tinyint(1) NOT NULL,
  `quarta` tinyint(1) NOT NULL,
  `quinta` tinyint(1) NOT NULL,
  `sexta` tinyint(1) NOT NULL,
  `sabado` tinyint(1) NOT NULL,
  `cargaHorariaTotal` varchar(45) NOT NULL,
  `atividadesQueSeraoDesenvolvidas` varchar(300) NOT NULL,
  `atividadesQueMelhorEmpenhou` varchar(300) NOT NULL,
  `dificuldadesAluno` varchar(300) NOT NULL,
  `paraleloInstitutoEstagio` varchar(300) NOT NULL,
  `consideracoesFinais` varchar(300) NOT NULL,
  `areasConhecimento` varchar(45) NOT NULL,
  `objetivos` varchar(300) NOT NULL,
  `idEstagio` int(11) NOT NULL AUTO_INCREMENT,
  `cargaHorariaSemanal` varchar(45) NOT NULL,
  `bibliografia` varchar(1024) NOT NULL,
  PRIMARY KEY (`idEstagio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estagio`
--

INSERT INTO `estagio` (`cargaHorariaDiaria`, `horarioEstagio`, `dataInicial`, `dataFinal`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `cargaHorariaTotal`, `atividadesQueSeraoDesenvolvidas`, `atividadesQueMelhorEmpenhou`, `dificuldadesAluno`, `paraleloInstitutoEstagio`, `consideracoesFinais`, `areasConhecimento`, `objetivos`, `idEstagio`, `cargaHorariaSemanal`, `bibliografia`) VALUES
('6', '08:00-14:00', '18/03/2019', '24/05/2019', 1, 0, 0, 0, 0, 0, '200', 'Batata Pao Queijo', 'desenvolvimento', 'frontend', 'atividades práticas com imersão no mercardo de trabalho', 'considero finalizado', 'Engenharia', 'Estagiar', 1, '30', 'livro dos Palmas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequenciaestagio`
--

DROP TABLE IF EXISTS `frequenciaestagio`;
CREATE TABLE IF NOT EXISTS `frequenciaestagio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raAluno` varchar(45) NOT NULL,
  `data` varchar(10) NOT NULL,
  `cargaHoraria` varchar(6) NOT NULL,
  `setor` varchar(240) DEFAULT NULL,
  `atividade` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientador`
--

DROP TABLE IF EXISTS `orientador`;
CREATE TABLE IF NOT EXISTS `orientador` (
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `idOrientador` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idOrientador`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1),
('1', '11111111@111111111.com', '(11) 11111-1111', 136),
('1', '11111111@111111111.com', '(11) 11111-1111', 137),
('1', '11111111@111111111.com', '(11) 11111-1111', 138),
('1', '11111111@111111111.com', '(11) 11111-1111', 139);

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE IF NOT EXISTS `supervisor` (
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `possuiExperiencia` varchar(45) NOT NULL,
  `cursoFormacao` varchar(45) NOT NULL,
  `conselhoClasseProfissional` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `conselhoClasseProfissional`, `cargo`) VALUES
('Jean Albino de Melo', '12345676812', 'jean@albino.demelo', '35123456789', 'Sim', 'Engenharia de Computação', 'qwerty', 'Professor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
