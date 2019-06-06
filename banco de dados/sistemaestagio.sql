-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2019 at 09:25 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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
  `telefoneCelular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dataNascimento` varchar(45) NOT NULL,
  `periodoAno` varchar(45) DEFAULT NULL,
  `modalidade` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `senha` varchar(45) NOT NULL,
  `idSupervisor` int(11) DEFAULT NULL,
  `idOrientador` int(11) DEFAULT NULL,
  `idEstagio` int(11) DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `campus`, `ra`, `telefoneCelular`, `email`, `dataNascimento`, `periodoAno`, `modalidade`, `complemento`, `senha`, `idSupervisor`, `idOrientador`, `idEstagio`, `idEmpresa`) VALUES
('13978884', '402.380.460-60', 'Felipe', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Técnico em Informática', 'Poços de Caldas', '14161000000', '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', '2015', 'Técnicos Integrados', '500', 'aa1bf4646de67fd9086cf6c79007026c', 2, 138, 2, 2),
('13978884', '402.380.460-60', 'Felipe Borges da Silva', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Engenharia de Computação', 'Poços de Caldas', '14161000001', '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', '2015', 'Superiores', '500', 'aa1bf4646de67fd9086cf6c79007026c', 3, 139, 3, 3),
('35.510.115-0', '286.181.020-32', 'Fabricio Rodriguez', 'Poços de Caldas', 'MG', '37704-300', 'Rua Antônio João Dare', 'Jardim Country Club', 10, 'Técnico em Eletrotécnica', 'Poços de Caldas', '14161000999', '(35) 98183-8383', 'fabrirodri@gmail.com', '1999-02-02', '2', 'Técnicos Integrados', 'Jardim Country Club', 'aa1bf4646de67fd9086cf6c79007026c', 4, 140, 4, 4);

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
  `descricao` varchar(3000) DEFAULT NULL,
  `idEmpresa` int(11) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`, `descricao`, `idEmpresa`, `complemento`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15, 'empresa da familia Palma', 1, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'Descricao um', 2, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'Descrição da Empresa', 3, NULL),
('ALCOA ALUMINIO LTDA', '53.402.153/0001-21', 'Rua Rio de Janeiro', '37701-011', 'Fernando M. Rodriguez', 'Estagiario', 'Fernando Rodriguez', 'Estagiario', 'alcoa@alcoa.com.br', '(35) 37377-7777', 'MG', 'Poços de Caldas', 'Centro', 110, 'Empresa de produção de alumínio', 4, '110');

-- --------------------------------------------------------

--
-- Table structure for table `estagio`
--

CREATE TABLE `estagio` (
  `tipoEstagio` varchar(45) NOT NULL,
  `valorBolsa` varchar(45) NOT NULL,
  `beneficios` varchar(255) DEFAULT NULL,
  `cargaHorariaTotal` varchar(45) DEFAULT NULL,
  `tipoCargaHoraria` varchar(45) NOT NULL,
  `tipoCargaDiaria` varchar(45) DEFAULT NULL,
  `dataInicial` varchar(45) NOT NULL,
  `dataFinal` varchar(45) NOT NULL,
  `segunda` varchar(45) DEFAULT NULL,
  `terca` varchar(45) DEFAULT NULL,
  `quarta` varchar(45) DEFAULT NULL,
  `quinta` varchar(45) DEFAULT NULL,
  `sexta` varchar(45) DEFAULT NULL,
  `sabado` varchar(45) DEFAULT NULL,
  `nomeSeguradora` varchar(45) DEFAULT NULL,
  `numeroApolice` varchar(45) DEFAULT NULL,
  `atividadesQueSeraoDesenvolvidas` varchar(500) NOT NULL,
  `areasConhecimento` varchar(500) NOT NULL,
  `objetivos` varchar(500) NOT NULL,
  `objetivosAlcancados` varchar(3000) DEFAULT NULL,
  `descricaoAtividade` varchar(3000) DEFAULT NULL,
  `atividadesQueMelhorEmpenhou` varchar(3000) DEFAULT NULL,
  `dificuldadesAluno` varchar(3000) DEFAULT NULL,
  `paraleloInstitutoEstagio` varchar(3000) DEFAULT NULL,
  `consideracoesFinais` varchar(3000) DEFAULT NULL,
  `bibliografia` varchar(1000) DEFAULT NULL,
  `idEstagio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estagio`
--

INSERT INTO `estagio` (`tipoEstagio`, `valorBolsa`, `beneficios`, `cargaHorariaTotal`, `tipoCargaHoraria`, `tipoCargaDiaria`, `dataInicial`, `dataFinal`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `nomeSeguradora`, `numeroApolice`, `atividadesQueSeraoDesenvolvidas`, `areasConhecimento`, `objetivos`, `objetivosAlcancados`, `descricaoAtividade`, `atividadesQueMelhorEmpenhou`, `dificuldadesAluno`, `paraleloInstitutoEstagio`, `consideracoesFinais`, `bibliografia`, `idEstagio`) VALUES
('', '', NULL, '200', '', NULL, '18/03/2019', '24/05/2019', '00:00:01', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 'Batata Pao Queijo', 'Engenharia', 'Estagiar', 'comeu arroz', 'ferver agua', 'panela velha', 'abrir torneira', 'sal', 'alho', 'arroz com feijao', 1),
('Estágio não Obrigatório', '2.000,00', 'Plano de Saúde', NULL, 'Carga Horária Fixa', '6h', '2019-05-21', '2019-08-16', '', '04:00', '05:00', '', '06:00', '06:00', 'Cia', 'Numero', 'Atividades', 'Areas', 'Objetivos', 'Objetivo alcançado', 'Descricao da atividade um', 'Atividade que melhor desempenhou um', 'Dificuldade do aluno um', 'Paralelo um', 'Consideracao um', 'Bibliografia um', 2),
('Estágio Obrigatório', '4,00', 'Vale Transporte', '200', 'Carga Horária Fixa', '8h', '2019-05-15', '2019-11-04', '08:00', '', '', '', '', '', NULL, NULL, 'Atividades que serao desenvolvidas', 'Area de conhecimento ', 'Objetivos a serem alcançados', 'Objetivos alcançados', 'Descrição detalhada', 'Atividades que melhor desempenhou', 'Dificuldades encontradas', 'Paralelo', 'Considerações finais', 'Bibliografia', 3),
('Estágio Obrigatório', '1.000,00', 'Vale Transporte, Plano de Saúde, Vale Alimentação', '100', 'Carga Horária Fixa', '6h', '2019-05-27', '2019-09-16', '06:00', '', '', '', '', '', NULL, NULL, 'Produção de alumínio', 'Mineração', 'Mineração de alumínio', 'Aprendizado na mineração de alumínio', 'Mineração detalhada de alumínio', 'Minerou alumínio com proficiência', 'Mineração de outros minérios', 'Minerar é difícil', 'Mineração vale a pena', 'Livro Como Minerar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `frequenciaestagio`
--

CREATE TABLE `frequenciaestagio` (
  `id` int(11) NOT NULL,
  `raAluno` varchar(45) NOT NULL,
  `data` varchar(10) NOT NULL,
  `cargaHoraria` varchar(6) NOT NULL,
  `setor` varchar(240) DEFAULT NULL,
  `atividade` varchar(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frequenciaestagio`
--

INSERT INTO `frequenciaestagio` (`id`, `raAluno`, `data`, `cargaHoraria`, `setor`, `atividade`) VALUES
(4, '14161000000', '2019-06-05', '05:00', 'Setor um', 'Atividade um'),
(5, '14161000000', '2019-06-12', '06:00', 'Setor dois', 'Atividade dois'),
(6, '14161000000', '2019-06-19', '04:00', 'Setor tres', 'Atividade tres');

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
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1),
('Borges da Silva', 'felipe.silva@alunos.ifsuldeminas.edu.br', '(35) 99999-9999', 138),
('Ronaldo Rodriguez', 'ronarodri@gmail.com', '(35) 98979-8787', 140);

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
  `cargo` varchar(45) NOT NULL,
  `conselhoClasseProfissional` varchar(45) DEFAULT NULL,
  `idSupervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `cargo`, `conselhoClasseProfissional`, `idSupervisor`) VALUES
('Jean Albino de Melo', '123.456.768-12', 'jean@albino.demelo', '(35) 12345-6789', 'Sim', 'Engenharia de Computação', 'Professor', NULL, 2),
('Mariana Rodriguez', '442.368.600-74', 'marirodri@gmail.com', '(35) 96666-6666', 'Não', 'Advocacia', 'Supervisor', NULL, 4);

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
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indexes for table `estagio`
--
ALTER TABLE `estagio`
  ADD PRIMARY KEY (`idEstagio`);

--
-- Indexes for table `frequenciaestagio`
--
ALTER TABLE `frequenciaestagio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orientador`
--
ALTER TABLE `orientador`
  ADD PRIMARY KEY (`idOrientador`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`idSupervisor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concedentes`
--
ALTER TABLE `concedentes`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `estagio`
--
ALTER TABLE `estagio`
  MODIFY `idEstagio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `frequenciaestagio`
--
ALTER TABLE `frequenciaestagio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orientador`
--
ALTER TABLE `orientador`
  MODIFY `idOrientador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `idSupervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
