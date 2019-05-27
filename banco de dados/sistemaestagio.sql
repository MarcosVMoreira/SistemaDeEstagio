-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 27/05/2019 às 19:59
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
  `telefoneCelular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dataNascimento` varchar(45) NOT NULL,
  `periodoAno` varchar(45) NOT NULL,
  `modalidade` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `senha` varchar(45) NOT NULL,
  `idSupervisor` int(11) DEFAULT NULL,
  `idOrientador` int(11) DEFAULT NULL,
  `idEstagio` int(11) DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`rg`, `cpf`, `nome`, `cidade`, `uf`, `cep`, `endereco`, `bairro`, `numero`, `curso`, `campus`, `ra`, `telefoneCelular`, `email`, `dataNascimento`, `periodoAno`, `modalidade`, `complemento`, `senha`, `idSupervisor`, `idOrientador`, `idEstagio`, `idEmpresa`) VALUES
('', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL),
('', '', '', '', '', '', '', '', 0, '', 'Poços de Caldas', '14161000000', '', '', '', '', '', '500', 'aa1bf4646de67fd9086cf6c79007026c', 2, 138, 2, 2),
('13978884', '402.380.460-60', 'Felipe Borges da Silva', 'Poços de Caldas', 'MG', '37713-338', 'Rua Coronel Osmar Bento Gonçalves', 'São Bento', 10, 'Engenharia de Computação', 'Poços de Caldas', '14161000001', '(35) 98888-8888', 'felipebsilva5@gmail.com', '2000-02-02', '2015', 'Superiores', '500', 'aa1bf4646de67fd9086cf6c79007026c', 3, 139, 3, 3),
('35.510.115-0', '286.181.020-32', 'Fabricio Rodriguez', 'Poços de Caldas', 'MG', '37704-300', 'Rua Antônio João Dare', 'Jardim Country Club', 10, 'Técnico em Eletrotécnica', 'Poços de Caldas', '14161000999', '(35) 98183-8383', 'fabrirodri@gmail.com', '1999-02-02', '2', 'Técnicos Integrados', 'Jardim Country Club', 'aa1bf4646de67fd9086cf6c79007026c', 4, 140, 4, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `concedentes`
--

CREATE TABLE IF NOT EXISTS `concedentes` (
  `nome` varchar(45) DEFAULT NULL,
  `cnpjCpf` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `responsavelTceNome` varchar(45) DEFAULT NULL,
  `responsavelTceCargo` varchar(45) DEFAULT NULL,
  `representanteEmpresaNome` varchar(45) DEFAULT NULL,
  `representanteEmpresaCargo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `descricao` varchar(3000) DEFAULT NULL,
`idEmpresa` int(11) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `concedentes`
--

INSERT INTO `concedentes` (`nome`, `cnpjCpf`, `endereco`, `cep`, `responsavelTceNome`, `responsavelTceCargo`, `representanteEmpresaNome`, `representanteEmpresaCargo`, `email`, `telefone`, `uf`, `cidade`, `bairro`, `numero`, `descricao`, `idEmpresa`, `complemento`) VALUES
('PALMA & PALMA', '00000000', 'Rua Cissa', '17750789', 'Roberto Carlos', 'Professor', 'Ronaldo Felicio', 'Diretor', 'ronaldofelicio@gmail.com', '193536363636', 'Minas Gerais', 'Poços de Caldas', 'Azaleias', 15, 'empresa da familia Palma', 1, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'doceria', 2, NULL),
('Silva', '53.402.153/0001-21', 'Coronel Osmar Bento Gonçalves', '37713-338', 'Resp da assinatura', 'diretor de ti', 'Representante', 'diretor de ti', 'silva@gmail.com', '(35) 97777-7777', 'MG', 'Poços de Caldas', 'São Bento', 11, 'Descrição da Empresa', 3, NULL),
('ALCOA ALUMINIO LTDA', '53.402.153/0001-21', 'Rua Rio de Janeiro', '37701-011', 'Fernando M. Rodriguez', 'Estagiario', 'Fernando Rodriguez', 'Estagiario', 'alcoa@alcoa.com.br', '(35) 37377-7777', 'MG', 'Poços de Caldas', 'Centro', 110, 'Empresa de produção de alumínio', 4, '110');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estagio`
--

CREATE TABLE IF NOT EXISTS `estagio` (
  `tipoEstagio` varchar(45) DEFAULT NULL,
  `valorBolsa` varchar(45) DEFAULT NULL,
  `beneficios` varchar(255) DEFAULT NULL,
  `cargaHorariaTotal` varchar(45) DEFAULT NULL,
  `tipoCargaHoraria` varchar(45) DEFAULT NULL,
  `dataInicial` varchar(45) DEFAULT NULL,
  `dataFinal` varchar(45) DEFAULT NULL,
  `segunda` varchar(45) DEFAULT NULL,
  `terca` varchar(45) DEFAULT NULL,
  `quarta` varchar(45) DEFAULT NULL,
  `quinta` varchar(45) DEFAULT NULL,
  `sexta` varchar(45) DEFAULT NULL,
  `sabado` varchar(45) DEFAULT NULL,
  `nomeSeguradora` varchar(45) DEFAULT NULL,
  `numeroApolice` varchar(45) DEFAULT NULL,
  `atividadesQueSeraoDesenvolvidas` varchar(500) DEFAULT NULL,
  `areasConhecimento` varchar(500) DEFAULT NULL,
  `objetivos` varchar(500) DEFAULT NULL,
  `objetivosAlcancados` varchar(3000) DEFAULT NULL,
  `descricaoAtividade` varchar(3000) DEFAULT NULL,
  `atividadesQueMelhorEmpenhou` varchar(3000) DEFAULT NULL,
  `dificuldadesAluno` varchar(3000) DEFAULT NULL,
  `paraleloInstitutoEstagio` varchar(3000) DEFAULT NULL,
  `consideracoesFinais` varchar(3000) DEFAULT NULL,
  `bibliografia` varchar(1000) DEFAULT NULL,
`idEstagio` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `estagio`
--

INSERT INTO `estagio` (`tipoEstagio`, `valorBolsa`, `beneficios`, `cargaHorariaTotal`, `tipoCargaHoraria`, `dataInicial`, `dataFinal`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `nomeSeguradora`, `numeroApolice`, `atividadesQueSeraoDesenvolvidas`, `areasConhecimento`, `objetivos`, `objetivosAlcancados`, `descricaoAtividade`, `atividadesQueMelhorEmpenhou`, `dificuldadesAluno`, `paraleloInstitutoEstagio`, `consideracoesFinais`, `bibliografia`, `idEstagio`) VALUES
('', '', NULL, '200', '', '18/03/2019', '24/05/2019', '00:00:01', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 'Batata Pao Queijo', 'Engenharia', 'Estagiar', 'comeu arroz', 'ferver agua', 'panela velha', 'abrir torneira', 'sal', 'alho', 'arroz com feijao', 1),
('', '', 'Plano de Saúde', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', 'comer chocolate', 'chocolate quente', 'jogar chocolate fora', 'chocolate branco', 'temperar chocolate', 'choquito', 'nestle', 2),
('Estágio Obrigatório', '4,00', 'Vale Transporte', '200', 'Carga Horária Fixa', '2019-05-15', '2019-11-04', '08:00', '', '', '', '', '', NULL, NULL, 'Atividades que serao desenvolvidas', 'Area de conhecimento ', 'Objetivos a serem alcançados', 'Objetivos alcançados', 'Descrição detalhada', 'Atividades que melhor desempenhou', 'Dificuldades encontradas', 'Paralelo', 'Considerações finais', 'Bibliografia', 3),
('Estágio Obrigatório', '1.000,00', 'Vale Transporte, Plano de Saúde, Vale Alimentação', '100', 'Carga Horária Fixa', '2019-05-27', '2019-09-16', '06:00', '', '', '', '', '', NULL, NULL, 'Produção de alumínio', 'Mineração', 'Mineração de alumínio', 'Aprendizado na mineração de alumínio', 'Mineração detalhada de alumínio', 'Minerou alumínio com proficiência', 'Mineração de outros minérios', 'Minerar é difícil', 'Mineração vale a pena', 'Livro Como Minerar', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `frequenciaestagio`
--

CREATE TABLE IF NOT EXISTS `frequenciaestagio` (
`id` int(11) NOT NULL,
  `raAluno` varchar(45) DEFAULT NULL,
  `data` varchar(10) DEFAULT NULL,
  `cargaHoraria` varchar(6) DEFAULT NULL,
  `setor` varchar(240) DEFAULT NULL,
  `atividade` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `orientador`
--

CREATE TABLE IF NOT EXISTS `orientador` (
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
`idOrientador` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=142 ;

--
-- Fazendo dump de dados para tabela `orientador`
--

INSERT INTO `orientador` (`nome`, `email`, `telefone`, `idOrientador`) VALUES
('Marcos Vinicius Moreira', 'marcos@vinicius.moreira', '35123456789', 1),
('', '', '', 138),
('Ronaldo Rodriguez', 'ronarodri@gmail.com', '(35) 98979-8787', 140),
('', '', '', 141);

-- --------------------------------------------------------

--
-- Estrutura para tabela `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `possuiExperiencia` varchar(45) DEFAULT NULL,
  `cursoFormacao` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `conselhoClasseProfissional` varchar(45) DEFAULT NULL,
`idSupervisor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `supervisor`
--

INSERT INTO `supervisor` (`nome`, `cpf`, `email`, `telefone`, `possuiExperiencia`, `cursoFormacao`, `cargo`, `conselhoClasseProfissional`, `idSupervisor`) VALUES
('Jean Albino de Melo', '12345676812', 'jean@albino.demelo', '35123456789', 'Sim', 'Engenharia de Computação', 'Professor', 'qwerty', 1),
('Mariana Rodriguez', '442.368.600-74', 'marirodri@gmail.com', '(35) 96666-6666', 'Não', 'Advocacia', 'Supervisor', NULL, 4);

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
 ADD PRIMARY KEY (`idEmpresa`);

--
-- Índices de tabela `estagio`
--
ALTER TABLE `estagio`
 ADD PRIMARY KEY (`idEstagio`);

--
-- Índices de tabela `frequenciaestagio`
--
ALTER TABLE `frequenciaestagio`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orientador`
--
ALTER TABLE `orientador`
 ADD PRIMARY KEY (`idOrientador`);

--
-- Índices de tabela `supervisor`
--
ALTER TABLE `supervisor`
 ADD PRIMARY KEY (`idSupervisor`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `concedentes`
--
ALTER TABLE `concedentes`
MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `estagio`
--
ALTER TABLE `estagio`
MODIFY `idEstagio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `frequenciaestagio`
--
ALTER TABLE `frequenciaestagio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `orientador`
--
ALTER TABLE `orientador`
MODIFY `idOrientador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT de tabela `supervisor`
--
ALTER TABLE `supervisor`
MODIFY `idSupervisor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
