-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Mar-2019 às 20:22
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
  `ra` varchar(45) NOT NULL,
  `telefoneFixo` varchar(45) DEFAULT NULL,
  `telefoneCelular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dataNascimento` varchar(45) NOT NULL,
  `tipoEstagio` tinyint(1) NOT NULL,
  `nomeSeguradora` varchar(45) DEFAULT NULL,
  `valorBolsa` varchar(45) DEFAULT NULL,
  `beneficios` varchar(45) DEFAULT NULL,
  `numeroApolicesSeguros` varchar(45) DEFAULT NULL,
  `periodoAno` varchar(45) NOT NULL,
  `modalidade` varchar(45) NOT NULL,
  `matriculado` varchar(45) NOT NULL,
  PRIMARY KEY (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `ra`, `telefoneFixo`, `telefoneCelular`, `email`, `dataNascimento`, `tipoEstagio`, `nomeSeguradora`, `valorBolsa`, `beneficios`, `numeroApolicesSeguros`, `periodoAno`, `modalidade`, `matriculado`) VALUES
('53150511X', '48231388800', 'Otavio Messias Palma', 'Sao Joao da Boa Vista', 'São Paulo', '13870579', 'Rua Carlos', 'Parque das Nações', 267, 'Engenharia de Computação', '14161000236', '1936232323', '19981303030', 'otaviopalma@gmail.com', '06/04/1998', 1, 'Palma', '1000', 'Vale-Transporte, Vale-Alimentação', '154646464613', '7/2016', 'Superior', 'Sim');

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
  PRIMARY KEY (`cnpjCpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15);

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
  `diasSemana` varchar(255) NOT NULL,
  `cargaHorariaTotal` varchar(45) NOT NULL,
  `atividadesQueSeraoDesenvolvidas` varchar(45) NOT NULL,
  `areasConhecimento` varchar(45) NOT NULL,
  `objetivos` varchar(45) NOT NULL,
  `idEstagio` int(11) NOT NULL AUTO_INCREMENT,
  `cargaHorariaSemanal` varchar(45) NOT NULL,
  PRIMARY KEY (`idEstagio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estagio`
--

INSERT INTO `estagio` (`cargaHorariaDiaria`, `horarioEstagio`, `dataInicial`, `dataFinal`, `diasSemana`, `cargaHorariaTotal`, `atividadesQueSeraoDesenvolvidas`, `areasConhecimento`, `objetivos`, `idEstagio`, `cargaHorariaSemanal`) VALUES
('6', '08:00-14:00', '18/03/2019', '24/05/2019', 'Segunda-Feira, Terça-Feira, Quarta-Feira, Quinta-Feira, Sexta-Feira', '200', 'Batata Pao Queijo', 'Engenharia', 'Estagiar', 1, '30');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1);

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
