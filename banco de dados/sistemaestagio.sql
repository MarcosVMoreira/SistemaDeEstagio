-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Jun-2019 às 18:19
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

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
  `idEmpresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `campus`, `ra`, `telefoneCelular`, `email`, `dataNascimento`, `periodoAno`, `modalidade`, `complemento`, `senha`, `idSupervisor`, `idOrientador`, `idEstagio`, `idEmpresa`) VALUES
('13988888', '404.007.760-14', 'abc def', 'Poços de Caldas', 'MG', '37701-494', 'Travessa Roma', 'Jardim Santa Augusta', 200, 'Engenharia de Computação', 'Poços de Caldas', '14151000100', '(35) 99999-9999', 'abcdef@abc.com', '2000-11-11', '2015', 'Superiores', '', 'aa1bf4646de67fd9086cf6c79007026c', NULL, NULL, NULL, NULL),
('MG-12344566', '123.456.789-09', 'William Manoel Martins', 'Poços de Caldas', 'MG', '37701-039', 'Rua Barão do Campo Místico', 'Centro', 120, 'Engenharia de Computação', 'Poços de Caldas', '14151000123', '(35) 99878-6545', 'williamanoel@outlook.com', '1997-07-12', '2015', 'Superiores', '', '8097131057df05c4215db3e7e16c24de', NULL, 141, NULL, NULL),
('13978666', '866.866.930-30', 'abs def', 'Poços de Caldas', 'MG', '37701-494', 'Travessa Roma', 'Jardim Santa Augusta', 200, 'Engenharia de Computação', 'Poços de Caldas', '14151000200', '(35) 98886-2121', 'abs@gmail.com', '2000-01-11', '2015', 'Superiores', '', 'aa1bf4646de67fd9086cf6c79007026c', 5, 142, 5, 5),
('13978884', '402.380.460-60', 'Felipe', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Técnico em Informática', 'Poços de Caldas', '14161000000', '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', '2015', 'Técnicos Integrados', '500', 'aa1bf4646de67fd9086cf6c79007026c', 2, 138, 2, 2),
('13978884', '402.380.460-60', 'Felipe Borges da Silva', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Engenharia de Computação', 'Poços de Caldas', '14161000001', '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', '2015', 'Superiores', '500', 'aa1bf4646de67fd9086cf6c79007026c', 3, 139, 3, 3),
('11111111111111111', '154.864.330-00', 'Mariana Rodriguez', 'Poços de Caldas', '', '37701-011', 'Rua Rio de Janeiro', 'Centro', 11111, 'Técnico em Informática', 'Poços de Caldas', '14161000230', '(35) 37377-7777', 'alcoa@alcoa.com.br', '2019-06-28', '7', 'Técnicos Integrados', '', 'f6fd1939bdf31481d27ac4344a2aab58', NULL, NULL, NULL, NULL),
('11111111111111111', '154.864.330-00', 'Mariana Rodriguez', 'Poços de Caldas', 'MG', '37701-011', 'Rua Rio de Janeiro', 'Centro', 11111, 'Técnico em Informática', 'Poços de Caldas', '14161000231', '(35) 37377-7777', 'alcoa@alcoa.com.br', '2019-06-20', '7', 'Técnicos Integrados', '', '7adfca2f2aba4cd301a02b9f33ca9037', NULL, NULL, NULL, NULL),
('11111111111111111', '154.864.330-00', 'Mariana Rodriguez', 'Poços de Caldas', '', '37701-011', 'Rua Rio de Janeiro', 'Centro', 11111, 'Técnico em Informática', 'Poços de Caldas', '14161000235', '(35) 37377-7777', 'alcoa@alcoa.com.br', '2019-06-14', '7', 'Técnicos Integrados', '', 'aa1bf4646de67fd9086cf6c79007026c', NULL, NULL, NULL, NULL),
('53150511X', '482.313.888-00', 'Otávio Messias Palma', 'São João da Boa Vista', 'SP', '13870-579', 'Avenida Presidente João Belchior Marques Goulart', 'Parque das Nações', 267, 'Engenharia de Computação', 'Poços de Caldas', '14161000236', '(19) 98130-1389', 'otaviopalma@gmail.com', '1998-04-06', '7', 'Superiores', '', '06afa6c8b54d3cc80d269379d8b6a078', 6, 143, 6, 6),
('35.510.115-0', '286.181.020-32', 'Fabricio Rodriguez', 'Poços de Caldas', 'MG', '37704-300', 'Rua Antônio João Dare', 'Jardim Country Club', 10, 'Técnico em Eletrotécnica', 'Poços de Caldas', '14161000999', '(35) 98183-8383', 'fabrirodri@gmail.com', '1999-02-02', '2', 'Técnicos Integrados', 'Jardim Country Club', 'aa1bf4646de67fd9086cf6c79007026c', 4, 140, 4, 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`, `descricao`, `idEmpresa`, `complemento`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15, 'empresa da familia Palma', 1, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'Descricao um', 2, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'Descrição da Empresa', 3, NULL),
('ALCOA ALUMINIO LTDA', '53.402.153/0001-21', 'Rua Rio de Janeiro', '37701-011', 'Fernando M. Rodriguez', 'Estagiario', 'Fernando Rodriguez', 'Estagiario', 'alcoa@alcoa.com.br', '(35) 37377-7777', 'MG', 'Poços de Caldas', 'Centro', 110, 'Empresa de produção de alumínio', 4, '110'),
('ccc', '00.373.723/0001-36', 'Travessa Roma', '37701-494', 'lllll', 'auxiliar', 'kkkkkk', 'gerente', 'ccc@gmail.com', '(35) 99999-9999', 'MG', 'Poços de Caldas', 'Jardim Santa Augusta', 300, NULL, 5, NULL),
('PALMA & PALMA Corretora de Seguros', '53.402.153/0001-21', 'Rua Floriano Peixoto', '13870-060', 'Marcio', 'Gerente', 'Marcelo', 'Dono', 'palma@gmail.com', '(19) 98745-6123', 'SP', 'São João da Boa Vista', 'Centro', 10, NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio`
--

DROP TABLE IF EXISTS `estagio`;
CREATE TABLE IF NOT EXISTS `estagio` (
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
  `idEstagio` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idEstagio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estagio`
--

INSERT INTO `estagio` (`tipoEstagio`, `valorBolsa`, `beneficios`, `cargaHorariaTotal`, `tipoCargaHoraria`, `tipoCargaDiaria`, `dataInicial`, `dataFinal`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `nomeSeguradora`, `numeroApolice`, `atividadesQueSeraoDesenvolvidas`, `areasConhecimento`, `objetivos`, `objetivosAlcancados`, `descricaoAtividade`, `atividadesQueMelhorEmpenhou`, `dificuldadesAluno`, `paraleloInstitutoEstagio`, `consideracoesFinais`, `bibliografia`, `idEstagio`) VALUES
('', '', NULL, '200', '', NULL, '18/03/2019', '24/05/2019', '00:00:01', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 'Batata Pao Queijo', 'Engenharia', 'Estagiar', 'comeu arroz', 'ferver agua', 'panela velha', 'abrir torneira', 'sal', 'alho', 'arroz com feijao', 1),
('Estágio Obrigatório', '2.000,00', 'Plano de Saúde', '200', 'Carga Horária Fixa', '6h', '2019-05-21', '2019-08-16', '', '04:00', '05:00', '', '06:00', '06:00', NULL, NULL, 'asd', 'asd', 'asd', 'Objetivo alcançado', 'Descricao da atividade um', 'Atividade que melhor desempenhou um', 'Dificuldade do aluno um', 'Paralelo um', 'Consideracao um', 'Bibliografia um', 2),
('Estágio Obrigatório', '4,00', 'Vale Transporte', '200', 'Carga Horária Fixa', '8h', '2019-05-15', '2019-11-04', '08:00', '', '', '', '', '', NULL, NULL, 'Atividades que serao desenvolvidas', 'Area de conhecimento ', 'Objetivos a serem alcançados', 'Objetivos alcançados', 'Descrição detalhada', 'Atividades que melhor desempenhou', 'Dificuldades encontradas', 'Paralelo', 'Considerações finais', 'Bibliografia', 3),
('Estágio Obrigatório', '1.000,00', 'Vale Transporte, Plano de Saúde, Vale Alimentação', '100', 'Carga Horária Fixa', '6h', '2019-05-27', '2019-09-16', '06:00', '', '', '', '', '', NULL, NULL, 'Produção de alumínio', 'Mineração', 'Mineração de alumínio', 'Aprendizado na mineração de alumínio', 'Mineração detalhada de alumínio', 'Minerou alumínio com proficiência', 'Mineração de outros minérios', 'Minerar é difícil', 'Mineração vale a pena', 'Livro Como Minerar', 4),
('Estágio não Obrigatório', '200,00', '', '', 'Carga Horária Variável', NULL, '2016-02-02', '2016-07-07', '05:00', '', '', '05:00', '', '04:00', NULL, NULL, 'dsdfsdf', 'sdfsdfsdf', 'sdfsdfs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
('Estágio Obrigatório', '0,00', 'Vale Transporte, Plano de Saúde, Vale Alimentação', '200:00', 'Carga Horária Fixa', '6h', '2019-06-14', '2019-07-31', '06:00', '06:00', '06:00', '06:00', '06:00', '', NULL, NULL, 'Atividades de estágio', 'Áreas de conhecimento', 'Objetivos a serem alcançados', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `frequenciaestagio`
--

INSERT INTO `frequenciaestagio` (`id`, `raAluno`, `data`, `cargaHoraria`, `setor`, `atividade`) VALUES
(12, '14161000236', '2019-06-12', '06:00', 'Setor 1', 'Atividade 1'),
(13, '14161000236', '2019-06-13', '06:00', 'Setor 2', 'Atividade 2');

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
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1),
('Borges da Silva', 'felipe.silva@alunos.ifsuldeminas.edu.br', '(35) 99999-9999', 138),
('Ronaldo Rodriguez', 'ronarodri@gmail.com', '(35) 98979-8787', 140),
('Lucas Lima de Souza', 'lucaslima123@outlook.com', '(35) 99978-6534', 141),
('aaa bbbb', 'aaa@gmail.com', '(35) 98888-0000', 142),
('Rodrigo Ortolan', 'rodrigo@gmail.com', '(19) 98745-6123', 143);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `cargo`, `conselhoClasseProfissional`, `idSupervisor`) VALUES
('Jean Albino de Melo', '123.456.768-12', 'jean@albino.demelo', '(35) 12345-6789', 'Sim', 'Engenharia de Computação', 'Professor', NULL, 2),
('Mariana Rodriguez', '442.368.600-74', 'marirodri@gmail.com', '(35) 96666-6666', 'Não', 'Advocacia', 'Supervisor', NULL, 4),
('ggggg hhhh', '187.943.850-09', 'gggg@gmail.com', '(21) 90000-0000', 'Sim', 'eng de computação', 'diretor', NULL, 5),
('Paulo', '461.310.668-09', 'paulo@gmail.com', '(19) 78945-6123', 'Não', 'Eng de Computação', 'Professor', NULL, 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
