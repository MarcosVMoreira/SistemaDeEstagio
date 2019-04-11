-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 08:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
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
  `tipoEstagio` tinyint(1) NOT NULL,
  `nomeSeguradora` varchar(45) DEFAULT NULL,
  `valorBolsa` varchar(45) DEFAULT NULL,
  `beneficios` varchar(45) DEFAULT NULL,
  `numeroApolicesSeguros` varchar(45) DEFAULT NULL,
  `periodoAno` varchar(45) NOT NULL,
  `modalidade` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `campus`, `ra`, `telefoneFixo`, `telefoneCelular`, `email`, `dataNascimento`, `tipoEstagio`, `nomeSeguradora`, `valorBolsa`, `beneficios`, `numeroApolicesSeguros`, `periodoAno`, `modalidade`, `complemento`, `senha`) VALUES
('53150511X', '48231388800', 'Otavio Messias Palma', 'Sao Joao da Boa Vista', 'São Paulo', '13870579', 'Rua Carlos', 'Parque das Nações', 267, 'Engenharia de Computação', 'Poços de Caldas', '14161000236', '1936232323', '19981303030', 'otaviopalma@gmail.com', '06/04/1998', 1, 'Palma', '1000', 'Vale-Transporte, Vale-Alimentação', '154646464613', '7/2016', 'Superior', NULL, '698dc19d489c4e4db73e28a713eab07b');

-- --------------------------------------------------------

--
-- Table structure for table `concedentes`
--

CREATE TABLE `concedentes` (
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
  `descricao` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`, `descricao`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15, 'empresa da familia Palma');

-- --------------------------------------------------------

--
-- Table structure for table `estagio`
--

CREATE TABLE `estagio` (
  `cargaHorariaDiaria` varchar(45) NOT NULL,
  `horarioEstagio` varchar(45) NOT NULL,
  `dataInicial` varchar(45) NOT NULL,
  `dataFinal` varchar(45) NOT NULL,
  `segunda` tinyint(1) DEFAULT NULL,
  `terca` tinyint(1) DEFAULT NULL,
  `quarta` tinyint(1) DEFAULT NULL,
  `quinta` tinyint(1) DEFAULT NULL,
  `sexta` tinyint(1) DEFAULT NULL,
  `sabado` tinyint(1) DEFAULT NULL,
  `cargaHorariaTotal` varchar(45) NOT NULL,
  `atividadesQueSeraoDesenvolvidas` varchar(45) NOT NULL,
  `atividadesQueMelhorEmpenhou` varchar(512) NOT NULL,
  `dificuldadesAluno` varchar(512) NOT NULL,
  `dificuldadesOrientador` varchar(512) NOT NULL,
  `contribuicaoEstagioOrientador` varchar(1024) NOT NULL,
  `paraleloInstitutoEstagio` varchar(1024) NOT NULL,
  `consideracoesFinais` varchar(512) NOT NULL,
  `areasConhecimento` varchar(45) NOT NULL,
  `objetivos` varchar(45) NOT NULL,
  `idEstagio` int(11) NOT NULL,
  `cargaHorariaSemanal` varchar(45) NOT NULL,
  `bibliografia` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estagio`
--

INSERT INTO `estagio` (`cargaHorariaDiaria`, `horarioEstagio`, `dataInicial`, `dataFinal`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `cargaHorariaTotal`, `atividadesQueSeraoDesenvolvidas`, `atividadesQueMelhorEmpenhou`, `dificuldadesAluno`, `dificuldadesOrientador`, `contribuicaoEstagioOrientador`, `paraleloInstitutoEstagio`, `consideracoesFinais`, `areasConhecimento`, `objetivos`, `idEstagio`, `cargaHorariaSemanal`, `bibliografia`) VALUES
('6', '08:00-14:00', '18/03/2019', '24/05/2019', NULL, NULL, NULL, NULL, NULL, NULL, '200', 'Batata Pao Queijo', 'desenvolvimento', 'frontend', 'distribuicao das tarefas', 'desenvolvimento profissional do aluno', 'atividades práticas com imersão no mercardo de trabalho', 'considero finalizado', 'Engenharia', 'Estagiar', 1, '30', 'livro dos Palmas');

-- --------------------------------------------------------

--
-- Table structure for table `orientador`
--

CREATE TABLE `orientador` (
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `idOrientador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
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
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `conselhoClasseProfissional`, `cargo`) VALUES
('Jean Albino de Melo', '12345676812', 'jean@albino.demelo', '35123456789', 'Sim', 'Engenharia de Computação', 'qwerty', 'Professor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`ra`);

--
-- Indexes for table `concedentes`
--
ALTER TABLE `concedentes`
  ADD PRIMARY KEY (`cnpjCpf`);

--
-- Indexes for table `estagio`
--
ALTER TABLE `estagio`
  ADD PRIMARY KEY (`idEstagio`);

--
-- Indexes for table `orientador`
--
ALTER TABLE `orientador`
  ADD PRIMARY KEY (`idOrientador`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estagio`
--
ALTER TABLE `estagio`
  MODIFY `idEstagio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orientador`
--
ALTER TABLE `orientador`
  MODIFY `idOrientador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
