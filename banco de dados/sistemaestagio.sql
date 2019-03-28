-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 28/03/2019 às 19:19
-- Versão do servidor: 5.5.39
-- Versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `sistemaestagio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

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
  `tipoEstagio` varchar(45) NOT NULL,
  `nomeSeguradora` varchar(45) DEFAULT NULL,
  `valorBolsa` varchar(45) DEFAULT NULL,
  `beneficios` varchar(45) DEFAULT NULL,
  `numeroApolicesSeguros` varchar(45) DEFAULT NULL,
  `periodoAno` varchar(45) NOT NULL,
  `modalidade` varchar(45) NOT NULL,
  `matriculado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `campus`, `ra`, `telefoneFixo`, `telefoneCelular`, `email`, `dataNascimento`, `tipoEstagio`, `nomeSeguradora`, `valorBolsa`, `beneficios`, `numeroApolicesSeguros`, `periodoAno`, `modalidade`, `matriculado`) VALUES
('53150511X', '48231388800', 'Otavio Messias Palma', 'Sao Joao da Boa Vista', 'SP', '13870579', 'Rua Carlos', 'Parque das Nações', 267, 'Engenharia de Computação', 'Poços de Caldas', '14161000236', '1936232323', '19981303030', 'otaviopalma@gmail.com', '06/04/1998', '1', 'Palma', '1000', 'Vale-Transporte, Vale-Alimentação', '154646464613', '7/2016', 'Superior', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura para tabela `concedentes`
--

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
  `telefone` varchar(45) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estagio`
--

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
`idEstagio` int(11) NOT NULL,
  `cargaHorariaSemanal` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `estagio`
--

INSERT INTO `estagio` (`cargaHorariaDiaria`, `horarioEstagio`, `dataInicial`, `dataFinal`, `diasSemana`, `cargaHorariaTotal`, `atividadesQueSeraoDesenvolvidas`, `areasConhecimento`, `objetivos`, `idEstagio`, `cargaHorariaSemanal`) VALUES
('6', '08:00-14:00', '18/03/2019', '24/05/2019', 'Segunda-Feira, Terça-Feira, Quarta-Feira, Quinta-Feira, Sexta-Feira', '200', 'Batata Pao Queijo', 'Engenharia', 'Estagiar', 1, '30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `orientador`
--

CREATE TABLE IF NOT EXISTS `orientador` (
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
`idOrientador` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `possuiExperiencia` varchar(45) NOT NULL,
  `cursoFormacao` varchar(45) NOT NULL,
  `conselhoClasseProfissional` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `conselhoClasseProfissional`, `cargo`) VALUES
('Jean Albino de Melo', '12345676812', 'jean@albino.demelo', '35123456789', 'Sim', 'Engenharia de Computação', 'qwerty', 'Professor');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
 ADD PRIMARY KEY (`ra`);

--
-- Índices de tabela `concedentes`
--
ALTER TABLE `concedentes`
 ADD PRIMARY KEY (`cnpjCpf`);

--
-- Índices de tabela `estagio`
--
ALTER TABLE `estagio`
 ADD PRIMARY KEY (`idEstagio`);

--
-- Índices de tabela `orientador`
--
ALTER TABLE `orientador`
 ADD PRIMARY KEY (`idOrientador`);

--
-- Índices de tabela `supervisor`
--
ALTER TABLE `supervisor`
 ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `estagio`
--
ALTER TABLE `estagio`
MODIFY `idEstagio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `orientador`
--
ALTER TABLE `orientador`
MODIFY `idOrientador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
