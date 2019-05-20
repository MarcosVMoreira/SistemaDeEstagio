-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Maio-2019 às 18:44
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
  `beneficios` varchar(100) DEFAULT NULL,
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
('13978884', '402.380.460-60', 'Felipe Borges da Silva', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Engenharia de Computação', 'Poços de Caldas', '14161000000', NULL, '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', NULL, NULL, NULL, NULL, NULL, '2015', NULL, '500', 'aa1bf4646de67fd9086cf6c79007026c', 2, 138, 2, 2),
('13978884', '402.380.460-60', 'Felipe Borges da Silva', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Engenharia de Computação', 'Poços de Caldas', '14161000001', NULL, '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', NULL, NULL, NULL, NULL, NULL, '2015', 'Superiores', '500', 'aa1bf4646de67fd9086cf6c79007026c', 3, 139, 3, 3),
('35.510.115-0', '286.181.020-32', 'Fabricio Rodriguez', 'Poços de Caldas', 'MG', '37704-300', 'Rua Antônio João Dare', 'Jardim Country Club', 234, 'Técnico em Eletrotécnica', 'Poços de Caldas', '14161000999', NULL, '(35) 98183-8383', 'fabrirodri@gmail.com', '1999-02-09', NULL, NULL, NULL, NULL, NULL, '2', 'Técnico em Eletrotécnica', '', 'aa1bf4646de67fd9086cf6c79007026c', 4, 140, NULL, 4);

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
  `descricao` varchar(3000) DEFAULT NULL,
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`, `descricao`, `idEmpresa`, `complemento`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15, 'empresa da familia Palma', 1, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'doceria', 2, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'Descrição da Empresa', 3, NULL),
('ALCOA ALUMINIO LTDA', '53.402.153/0001-21', 'Rua Rio de Janeiro', '37701-011', 'Rodrigo Ortolan', 'Coordenador', 'Jonas Rodriguez', 'Coordenador', 'alcoa@alcoa.com.br', '(35) 37377-7777', 'MG', 'Poços de Caldas', 'Centro', 110, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio`
--

DROP TABLE IF EXISTS `estagio`;
CREATE TABLE IF NOT EXISTS `estagio` (
  `tipoEstagio` varchar(45) NOT NULL,
  `valorBolsa` varchar(45) NOT NULL,
  `beneficios` varchar(45) DEFAULT NULL,
  `cargaHorariaTotal` varchar(45) DEFAULT NULL,
  `tipoCargaHoraria` varchar(45) NOT NULL,
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
  `atividadesQueMelhorEmpenhou` varchar(3000) DEFAULT NULL,
  `dificuldadesAluno` varchar(3000) DEFAULT NULL,
  `paraleloInstitutoEstagio` varchar(3000) DEFAULT NULL,
  `consideracoesFinais` varchar(3000) DEFAULT NULL,
  `bibliografia` varchar(1000) DEFAULT NULL,
  `idEstagio` int(11) NOT NULL AUTO_INCREMENT,
  `objetivosAlcancados` varchar(3000) DEFAULT NULL,
  `descricaoAtividade` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`idEstagio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estagio`
--

INSERT INTO `estagio` (`tipoEstagio`, `valorBolsa`, `beneficios`, `cargaHorariaTotal`, `tipoCargaHoraria`, `dataInicial`, `dataFinal`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `nomeSeguradora`, `numeroApolice`, `atividadesQueSeraoDesenvolvidas`, `areasConhecimento`, `objetivos`, `atividadesQueMelhorEmpenhou`, `dificuldadesAluno`, `paraleloInstitutoEstagio`, `consideracoesFinais`, `bibliografia`, `idEstagio`, `objetivosAlcancados`, `descricaoAtividade`) VALUES
('', '', NULL, '200', '', '18/03/2019', '24/05/2019', '00:00:01', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 'Batata Pao Queijo', 'Engenharia', 'Estagiar', 'panela velha', 'abrir torneira', 'sal', 'alho', 'arroz com feijao', 1, 'comeu arroz', 'ferver agua'),
('Estágio Obrigatório', '2.000,00', 'Plano de Saúde', '200', 'Carga Horária Fixa', '2019-05-21', '2019-08-06', '04:00', '06:00', '', '', '08:00', '', NULL, NULL, 'comer sorvete', 'formiga', 'chapéu', 'jogar chocolate fora', 'chocolate branco', 'temperar chocolate', 'choquito', 'nestle', 2, 'comer chocolate', 'chocolate quente'),
('Estágio Obrigatório', '4,00', 'Vale Transporte', '200', 'Carga Horária Fixa', '2019-05-15', '2019-11-04', '08:00', '', '', '', '', '', NULL, NULL, 'Atividades que serao desenvolvidas', 'Area de conhecimento ', 'Objetivos a serem alcançados', 'Atividades que melhor desempenhou', 'Dificuldades encontradas', 'Paralelo', 'Considerações finais', 'Bibliografia', 3, 'Objetivos alcançados', 'Descrição detalhada');

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
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1),
('1', '11111111@111111111.com', '(11) 11111-1111', 136),
('1', '11111111@111111111.com', '(11) 11111-1111', 137),
('Borges da Silva', 'felipe.silva@alunos.ifsuldeminas.edu.br', '(35) 99999-9999', 138),
('Borges da Silva', 'felipe.silva@alunos.ifsuldeminas.edu.br', '(35) 99999-9999', 139),
('Marcelo Henrique Pereira', 'marcelo.henri@gmail.com', '(35) 97676-7676', 140);

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
  `cargo` varchar(45) NOT NULL,
  `conselhoClasseProfissional` varchar(45) DEFAULT NULL,
  `idSupervisor` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idSupervisor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `cargo`, `conselhoClasseProfissional`, `idSupervisor`) VALUES
('Jean Albino de Melo', '12345676812', 'jean@albino.demelo', '35123456789', 'Sim', 'Engenharia de Computação', 'Professor', 'qwerty', 1),
('aaaa aaaa cccc', '442.368.600-74', 'email@gmail.com', '(35) 96666-6666', 'Sim', 'Eng de Computação', 'Supervisor', 'Conselho classe', 2),
('aaaa aaaa cccc', '442.368.600-74', 'email@gmail.com', '(35) 96666-6666', 'Sim', 'Eng de Computação', 'Supervisor', 'Conselho classe', 3),
('Mariana Rodriguez', '442.368.600-74', 'marirodri@gmail.com', '(35) 97977-5655', 'Não', 'Advogada', 'Gerente', NULL, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
