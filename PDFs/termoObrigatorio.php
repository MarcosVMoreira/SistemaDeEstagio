<?php

include_once("../conexao.php");

$query = "SELECT * FROM alunos";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeAluno = $resultado["nome"];
        $bairroAluno = $resultado["bairro"];
        $telefoneAluno = $resultado["telefoneCelular"];
        $estadoAluno = $resultado["uf"];
        $enderecoAluno = $resultado["endereco"];
        $cepAluno = $resultado["cep"];
        $cidadeAluno = $resultado["cidade"];
        $cpfAluno = $resultado["cpf"];
        $rgAluno = $resultado["rg"];
        $nascimentoAluno = $resultado["dataNascimento"];
        $emailAluno = $resultado["email"];
        $cursoAluno = $resultado["curso"];
    }
}

$query = "SELECT * FROM orientador";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeOrientador = $resultado["nome"];
    }
}

$query = "SELECT * FROM concedentes";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeEmpresa = $resultado["nome"];
        $estadoEmpresa = $resultado["uf"];
        $cpfCnpjEmpresa = $resultado["cnpjCpf"];
        $enderecoEmpresa = $resultado["endereco"];
        $bairroEmpresa = $resultado["bairro"];
        $cidadeEmpresa = $resultado["cidade"];
        $cepEmpresa = $resultado["cep"];
        $telefoneEmpresa = $resultado["telefone"];
        $representanteEmpresa = $resultado["representanteEmpresaNome"];
        $representanteEmpresaCargo = $resultado["representanteEmpresaCargo"];
        $nomeTCE = $resultado["responsavelTceNome"];
        $cargoTCE = $resultado["responsavelTceCargo"];
    }
}

$query = "SELECT * FROM supervisor";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeSupervisor = $resultado["nome"];
        $cargoSupervisor = $resultado["cargo"];
    }
}

$query = "SELECT * FROM estagio";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $cargaHorariaDiaria = $resultado["cargaHorariaDiaria"];
        $cargaHorariaSemanal = $resultado["cargaHorariaSemanal"];
        $cargaHorariaTotal = $resultado["cargaHorariaTotal"];
        $dataInicio = $resultado["dataInicial"];
        $dataFim = $resultado["dataFinal"];
        $diasSemana = $resultado["diasSemana"];
        $horarioEstagio = $resultado["horarioEstagio"];
    }
}
// reference the Dompdf namespace
use Dompdf\Dompdf;

// include autoloader
require_once 'HTML/dompdf/autoload.inc.php';

/* Cria a instância */
$dompdf = new DOMPDF();

$string = '<html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
        <!-- span.cls_003 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_003 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_005 {
            font-family: Times, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_005 {
            font-family: Times, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_006 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 128);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_006 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 128);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_007 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(51, 51, 153);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_007 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(51, 51, 153);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_008 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 255);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_008 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 255);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_002 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_002 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_009 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 128);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_009 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 128);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_011 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(33, 33, 33);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_011 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(33, 33, 33);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_004 {
            font-family: Times, serif;
            font-size: 8.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_004 {
            font-family: Times, serif;
            font-size: 8.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        -->

    </style>
    <script type="text/javascript" src="HTML/termoObrigatorio/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/termoObrigatorio/background1.jpg" width=595 height=841></div>
        <div style="position:absolute;left:237.12px;top:87.64px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:161.88px;top:98.08px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:63.00px;top:108.40px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS- CAMPUS POÇOS</span></div>
        <div style="position:absolute;left:99.72px;top:118.72px" class="cls_003"><span class="cls_003">Avenida Dirce Pereira Rosa, n° 300 - Jardim Esperança - CEP: 37713-100 - Poços de Caldas(MG)</span></div>
        <div style="position:absolute;left:182.28px;top:129.04px" class="cls_003"><span class="cls_003">Tel: (35)3697-4950 /</span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </div>
        <div style="position:absolute;left:175.32px;top:149.80px" class="cls_003"><span class="cls_003">TERMO DE COMPROMISSO DE ESTÁGIO OBRIGATÓRIO</span></div>
        <div style="position:absolute;left:115.54px;top:160.12px" class="cls_003"><span class="cls_003">(Instrumento jurídico de acordo com a Lei Federal nº 11.788 de 25 de setembro de 2008)</span></div>
        <div style="position:absolute;left:261.60px;top:180.88px" class="cls_003"><span class="cls_003">INTERVENIENTE</span></div>
        <div style="position:absolute;left:42.48px;top:200.32px" class="cls_003"><span class="cls_003">Interveniente: Instituto Federal do Sul de Minas Gerais</span></div>
        <div style="position:absolute;left:42.48px;top:215.92px" class="cls_003"><span class="cls_003">CNPJ: 10.648.539/0001-05</span></div>
        <div style="position:absolute;left:42.48px;top:231.40px" class="cls_003"><span class="cls_003">Endereço: Av. Vicente Simões, 1111, 2º andar</span></div>
        <div style="position:absolute;left:330.50px;top:231.40px" class="cls_003"><span class="cls_003">Bairro: Nova Pouso Alegre</span></div>
        <div style="position:absolute;left:42.48px;top:247.00px" class="cls_003"><span class="cls_003">CEP: 37550-000</span></div>
        <div style="position:absolute;left:330.48px;top:247.00px" class="cls_003"><span class="cls_003">Cidade: Pouso Alegre</span></div>
        <div style="position:absolute;left:463.53px;top:247.00px" class="cls_003"><span class="cls_003">Fone: (35) 3449-6150</span></div>
        <div style="position:absolute;left:42.48px;top:262.48px" class="cls_003"><span class="cls_003">Campus Poços de Caldas</span></div>
        <div style="position:absolute;left:330.47px;top:262.48px" class="cls_003"><span class="cls_003">CNPJ: 10.648.539/0009-62</span></div>
        <div style="position:absolute;left:42.48px;top:277.96px" class="cls_003"><span class="cls_003">Endereço: Av. Dirce Pereira Rosa, 300</span></div>
        <div style="position:absolute;left:330.51px;top:277.00px" class="cls_003"><span class="cls_003">Bairro: Jardim Esperança</span></div>
        <div style="position:absolute;left:42.48px;top:293.56px" class="cls_003"><span class="cls_003">CEP: 37713-100</span></div>
        <div style="position:absolute;left:330.47px;top:293.56px" class="cls_003"><span class="cls_003">Cidade: Poços de Caldas</span></div>
        <div style="position:absolute;left:463.52px;top:293.56px" class="cls_003"><span class="cls_003">Fone: (35) 3697-4950</span></div>
        <div style="position:absolute;left:42.48px;top:309.04px" class="cls_003"><span class="cls_003">Representada por: Thiago Caproni Tavares</span></div>
        <div style="position:absolute;left:330.50px;top:309.04px" class="cls_003"><span class="cls_003">Cargo: Diretor geral</span></div>
        <div style="position:absolute;left:266.16px;top:340.12px" class="cls_003"><span class="cls_003">CONCEDENTE</span></div>
        <div style="position:absolute;left:42.48px;top:359.68px" class="cls_003"><span class="cls_003">Nome da Empresa: </span><b>'.$nomeEmpresa.'<b/></div>
        <div style="position:absolute;left:42.48px;top:375.16px" class="cls_003"><span class="cls_003">CNPJ: </span><b>'.$cpfCnpjEmpresa.'<b/></div>
        <div style="position:absolute;left:42.48px;top:390.64px" class="cls_003"><span class="cls_003">Endereço: </span><b>'.$enderecoEmpresa.'<b/></div>
        <div style="position:absolute;left:258.47px;top:389.68px" class="cls_003"><span class="cls_003">Bairro: </span><b>'.$bairroEmpresa.'<b/></div>
        <div style="position:absolute;left:42.48px;top:406.24px" class="cls_003"><span class="cls_003">CEP: </span><b>'.$cepEmpresa.'<b/></div>
        <div style="position:absolute;left:258.52px;top:406.24px" class="cls_003"><span class="cls_003">Cidade: </span><b>'.$cidadeEmpresa.' - '.$estadoEmpresa.'<b/></div>
        <div style="position:absolute;left:450.00px;top:406.24px" class="cls_003"><span class="cls_003">Fone: </span><b>'.$telefoneEmpresa.'<b/></div>
        <div style="position:absolute;left:42.48px;top:421.72px" class="cls_003"><span class="cls_003">Representada por: </span><b>'.$representanteEmpresa.'<b/></div>
        <div style="position:absolute;left:258.44px;top:421.72px" class="cls_003"><span class="cls_003">Cargo: </span><b>'.$representanteEmpresaCargo.'<b/></div>
        <div style="position:absolute;left:42.48px;top:437.20px" class="cls_003"><span class="cls_003">Responsável pela assinatura do TCE: </span><b>'.$nomeTCE.'<b/></div>
        <div style="position:absolute;left:258.50px;top:437.20px" class="cls_003"><span class="cls_003">Cargo: </span><b>'.$cargoTCE.'<b/></div>
        <div style="position:absolute;left:42.48px;top:452.80px" class="cls_003"><span class="cls_003">Supervisor de Estágio: </span><b>'.$nomeSupervisor.'<b/></div>
        <div style="position:absolute;left:258.53px;top:451.84px" class="cls_003"><span class="cls_003">Cargo: </span><b>'.$cargoSupervisor.'<b/></div>
        <div style="position:absolute;left:255.72px;top:483.76px" class="cls_005"><span class="cls_005">ESTAGIÁRIO(A)</span></div>
        <div style="position:absolute;left:42.48px;top:502.84px" class="cls_003"><span class="cls_003">Nome: </span><b>'.$nomeAluno.'<b/></div>
        <div style="position:absolute;left:42.48px;top:518.32px" class="cls_003"><span class="cls_003">Endereço: </span><b>'.$enderecoAluno.'<b/></div>
        <div style="position:absolute;left:241.15px;top:518.32px" class="cls_003"><span class="cls_003">Bairro: </span><b>'.$bairroAluno.'<b/></div>
        <div style="position:absolute;left:42.48px;top:533.80px" class="cls_003"><span class="cls_003">CEP: </span><b>'.$cepAluno.'<b/></div>
        <div style="position:absolute;left:241.08px;top:533.80px" class="cls_003"><span class="cls_003">Cidade: </span><b>'.$cidadeAluno.' - '.$estadoAluno.'<b/></div>
        <div style="position:absolute;left:450.00px;top:533.80px" class="cls_003"><span class="cls_003">Fone: </span><b>'.$telefoneAluno.'<b/></div>
        <div style="position:absolute;left:42.48px;top:549.40px" class="cls_003"><span class="cls_003">Regularmente Matriculado no Curso: </span><b>'.$cursoAluno.'<b/></div>
        <div style="position:absolute;left:42.48px;top:564.88px" class="cls_003"><span class="cls_003">CPF: </span><b>'.$cpfAluno.'<b/></div>
        <div style="position:absolute;left:355.55px;top:564.88px" class="cls_003"><span class="cls_003">RG: </span><b>'.$rgAluno.'<b/></div>
        <div style="position:absolute;left:42.48px;top:580.36px" class="cls_003"><span class="cls_003">Data de Nascimento: </span><b>'.$nascimentoAluno.'<b/></div>
        <div style="position:absolute;left:356.65px;top:580.36px" class="cls_003"><span class="cls_003">E-mail: </span><b>'.$emailAluno.'<b/></div>
        <div style="position:absolute;left:78.48px;top:601.00px" class="cls_003"><span class="cls_003">Celebram entre si este TERMO DE COMPROMISSO DE ESTÁGIO, ajustando as seguintes cláusulas:</span></div>
        <div style="position:absolute;left:42.48px;top:611.32px" class="cls_006"><span class="cls_006">CLÁUSULA PRIMEIRA: DO OBJETO: </span><span class="cls_003">Este instrumento tem por objetivo estabelecer as condições para a realização de</span></div>
        <div style="position:absolute;left:42.48px;top:621.64px" class="cls_003"><span class="cls_003">Estágio e particularizar a relação jurídica especial existente entre o ESTAGIÁRIO, a CONCEDENTE e a INSTITUIÇÃO DE</span></div>
        <div style="position:absolute;left:42.48px;top:631.96px" class="cls_003"><span class="cls_003">ENSINO.</span></div>
        <div style="position:absolute;left:42.48px;top:647.32px" class="cls_006"><span class="cls_006">CLÁUSULA SEGUNDA</span><span class="cls_003">: </span><span class="cls_007">DA FINALIDADE:</span><span class="cls_008"> </span><span class="cls_003">O Estágio Obrigatório, definido no Projeto Pedagógico do Curso, nos termos da Lei</span></div>
        <div style="position:absolute;left:42.48px;top:657.64px" class="cls_003"><span class="cls_003">n° 11.788/08 e da Lei n° 9.394/96 (Diretrizes e Bases da Educação Nacional), entendido como ato educativo supervisionado,</span></div>
        <div style="position:absolute;left:42.48px;top:668.08px" class="cls_003"><span class="cls_003">visa a complementação do ensino e da aprendizagem proporcionando preparação para o trabalho profissional do</span></div>
        <div style="position:absolute;left:42.48px;top:678.40px" class="cls_003"><span class="cls_003">ESTAGIÁRIO, possibilitando-lhe aperfeiçoamento técnico cultural, científico e de relacionamento humano, bem como</span></div>
        <div style="position:absolute;left:42.48px;top:688.72px" class="cls_003"><span class="cls_003">condições de vivenciar e adquirir experiência prática em situações reais de trabalho em sua área de atuação.</span></div>
        <div style="position:absolute;left:42.48px;top:699.04px" class="cls_003"><span class="cls_003">CLÁUSULA TERCEIRA: DO HORÁRIO E DA VIGÊNCIA - Fica compromissado entre as partes que:</span></div>
        <div style="position:absolute;left:60.48px;top:709.48px" class="cls_003"><span class="cls_003">a) Este Termo de Compromisso de Estágio terá vigência de ______________ a __________________ podendo ser</span></div>
        <div style="position:absolute;left:78.48px;top:719.80px" class="cls_003"><span class="cls_003">interrompido a qualquer tempo, desde que comunicado com 07 dias de antecedência à Secretaria de Pesquisa e</span></div>
        <div style="position:absolute;left:78.48px;top:730.12px" class="cls_003"><span class="cls_003">Extensão que preencherá Termo de Rescisão em modelo próprio da Secretaria. O mesmo prazo e condição se</span></div>
        <div style="position:absolute;left:78.48px;top:740.44px" class="cls_003"><span class="cls_003">aplicam no caso de aditamento do contrato.</span></div>
        <div style="position:absolute;left:60.48px;top:750.76px" class="cls_002"><span class="cls_002">b) </span><span class="cls_003"> As atividades de estágio a serem cumpridas pelo estagiário serão desenvolvidas nos seguintes dias e horários: às</span></div>
        <div style="position:absolute;left:78.48px;top:762.04px" class="cls_003"><span class="cls_003"><b>'.$diasSemana.'<b/></span>, das <span><b>'.$horarioEstagio.'<b/></span>, totalizando <span><b>'.$cargaHorariaDiaria.'<b/></span></div>
        <div style="position:absolute;left:78.48px;top:771.40px" class="cls_003"><span class="cls_003">horas por dia, </span><span><b>'.$cargaHorariaSemanal.'<b/></span> horas por semana e <span><b>'.$cargaHorariaTotal.'<b/></span> horas de estágio obrigatório.</div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/termoObrigatorio/background2.jpg" width=595 height=841></div>
        <div style="position:absolute;left:42.48px;top:31.36px" class="cls_006"><span class="cls_006">CLÁUSULA QUARTA: DA RESCISÃO -</span><span class="cls_003"> O presente Termo de Compromisso ficará rescindido nos seguintes casos:</span></div>
        <div style="position:absolute;left:60.48px;top:41.68px" class="cls_003"><span class="cls_003">a) Ao término do estágio.</span></div>
        <div style="position:absolute;left:60.48px;top:52.00px" class="cls_003"><span class="cls_003">b) Ao trancamento da matrícula pelo estagiário.</span></div>
        <div style="position:absolute;left:60.48px;top:62.32px" class="cls_003"><span class="cls_003">c) Na desistência do curso pelo estagiário.</span></div>
        <div style="position:absolute;left:60.48px;top:72.76px" class="cls_003"><span class="cls_003">d) Pelo não comparecimento do aluno ao estágio por um período superior a 05 dias, sem justa causa.</span></div>
        <div style="position:absolute;left:60.48px;top:83.08px" class="cls_003"><span class="cls_003">e) Ambas as partes se sentirem prejudicados no andamento da área pedagógica.</span></div>
        <div style="position:absolute;left:60.48px;top:93.40px" class="cls_003"><span class="cls_003">f)</span></div>
        <div style="position:absolute;left:70.48px;top:93.40px" class="cls_003"><span class="cls_003"> Pelo trancamento da matrícula, abandono, desligamento ou conclusão do curso na INSTITUIÇÃO DE ENSINO;</span></div>
        <div style="position:absolute;left:60.48px;top:103.72px" class="cls_003"><span class="cls_003">g)</span></div>
        <div style="position:absolute;left:70.48px;top:103.72px" class="cls_003"><span class="cls_003"> Pelo descumprimento das condições do presente Termo de Compromisso de Estágio;</span></div>
        <div style="position:absolute;left:42.48px;top:124.48px" class="cls_006"><span class="cls_006">CLÁUSULA QUINTA: DOS ENCARGOS SOCIAIS -</span><span class="cls_003"> O presente estágio, não acarretará vínculo empregatício de qualquer</span></div>
        <div style="position:absolute;left:42.48px;top:134.80px" class="cls_003"><span class="cls_003">natureza, desde que observadas as disposições da Lei n° 11.788/08 e do presente Termo de Compromisso.</span></div>
        <div style="position:absolute;left:42.48px;top:154.60px" class="cls_006"><span class="cls_006">CLÁUSULA SEXTA: DO SEGURO - </span><span class="cls_009"> </span><span class="cls_003">A interveniente manterá em favor do(a) estagiário(a) Seguro de Acidentes Pessoais, cuja</span></div>
        <div style="position:absolute;left:42.48px;top:165.88px" class="cls_003"><span class="cls_003">apólice em vigência poderá ser consultada a qualquer tempo junto ao IFSULDEMINAS - Campus Poços de Caldas, em</span></div>
        <div style="position:absolute;left:42.48px;top:175.24px" class="cls_003"><span class="cls_003">obediência ao disposto no art. 4º da Lei nº. 11.788, de 25 de setembro de 2008.</span></div>
        <div style="position:absolute;left:42.48px;top:196.96px" class="cls_006"><span class="cls_006">CLÁUSULA SÉTIMA: DOS BENEFÍCIOS -</span><span class="cls_003"> De acordo com a normativa Nº 7, de 30 de outubro de 2008 o estágio obrigatório</span></div>
        <div style="position:absolute;left:42.48px;top:207.28px" class="cls_003"><span class="cls_003">será realizado sem ônus para os órgãos e entidades.</span></div>
        <div style="position:absolute;left:42.48px;top:227.92px" class="cls_003"><span class="cls_003">Parágrafo único: A eventual concessão de benefícios relacionados a transporte, alimentação e saúde, entre outros, não</span></div>
        <div style="position:absolute;left:42.48px;top:238.36px" class="cls_003"><span class="cls_003">caracteriza vínculo empregatício. (Parágrafo 1º, Artigo 12 da Lei nº. 11.788, de 25 de setembro de 2008.)</span></div>
        <div style="position:absolute;left:42.48px;top:259.00px" class="cls_006"><span class="cls_006">CLÁUSULA OITAVA: DAS OBRIGAÇÕES DA UNIDADE CONCEDENTE</span></div>
        <div style="position:absolute;left:335.15px;top:259.00px" class="cls_006"><span class="cls_006">-</span><span class="cls_003"> No desenvolvimento do estágio ora</span></div>
        <div style="position:absolute;left:42.48px;top:269.32px" class="cls_003"><span class="cls_003">compromissado, caberá à Unidade Concedente:</span></div>
        <div style="position:absolute;left:60.48px;top:279.76px" class="cls_003"><span class="cls_003">a) Proporcionar ao ESTAGIÁRIO, condições propícias para o exercício das atividades práticas compatíveis com o seu</span></div>
        <div style="position:absolute;left:78.48px;top:290.08px" class="cls_003"><span class="cls_003">Plano de Atividades;</span></div>
        <div style="position:absolute;left:60.48px;top:300.40px" class="cls_003"><span class="cls_003">b) Facilitar as atividades do Professor Orientador para que o mesmo, em parceria com o Supervisor, possa auxiliar o</span></div>
        <div style="position:absolute;left:78.48px;top:310.72px" class="cls_003"><span class="cls_003">estagiário em eventuais problemas durante o seu estágio.</span></div>
        <div style="position:absolute;left:60.48px;top:321.04px" class="cls_002"><span class="cls_002">c) </span><span class="cls_003"> Designar o (a) Sr. (a)</span><span class="cls_011">,</span></div>
        <div style="position:absolute;left:156.20px;top:322.00px" class="cls_011"><span class="cls_011"><b>'.$nomeSupervisor.', '.$cargoSupervisor.'<b/></span><span class="cls_003">, para ser o supervisor de</span></div>
        <div style="position:absolute;left:78.48px;top:331.36px" class="cls_003"><span class="cls_003">Estágio enquanto vigorar o presente Termo de Compromisso.</span></div>
        <div style="position:absolute;left:60.48px;top:342.64px" class="cls_003"><span class="cls_003">d) Avaliar através do Supervisor, o desempenho do Estagiário e atestar a Frequência de Estágio, de acordo com as</span></div>
        <div style="position:absolute;left:78.48px;top:353.08px" class="cls_003"><span class="cls_003">diretrizes fornecidas pela Instituição de Ensino.</span></div>
        <div style="position:absolute;left:60.48px;top:363.40px" class="cls_003"><span class="cls_003">e) Comunicar a Instituição de Ensino, a interrupção e as eventuais alterações que ocorrerem neste Termo de</span></div>
        <div style="position:absolute;left:78.48px;top:373.72px" class="cls_003"><span class="cls_003">Compromisso.</span></div>
        <div style="position:absolute;left:42.48px;top:394.48px" class="cls_006"><span class="cls_006">CLÁUSULA NONA: DAS OBRIGAÇÕES DO ESTAGIÁRIO -</span><span class="cls_003"> No desenvolvimento do estágio ora compromissado, caberá ao</span></div>
        <div style="position:absolute;left:42.48px;top:404.80px" class="cls_003"><span class="cls_003">estagiário:</span></div>
        <div style="position:absolute;left:60.48px;top:415.12px" class="cls_003"><span class="cls_003">a) Cumprir com todo empenho e interesse a programação estabelecida para o seu estágio.</span></div>
        <div style="position:absolute;left:60.48px;top:425.44px" class="cls_003"><span class="cls_003">b) Observar e obedecer às normas internas da Unidade Concedente.</span></div>
        <div style="position:absolute;left:60.48px;top:435.88px" class="cls_003"><span class="cls_003">c) Comunicar a Instituição de Ensino, qualquer fato relevante sobre seu estágio.</span></div>
        <div style="position:absolute;left:60.48px;top:446.20px" class="cls_003"><span class="cls_003">d) Responder por perdas e danos consequentes da inobservância das normas internas da Unidade Concedente ou das</span></div>
        <div style="position:absolute;left:78.48px;top:456.52px" class="cls_003"><span class="cls_003">constantes do presente Termo de Compromisso.</span></div>
        <div style="position:absolute;left:60.48px;top:466.84px" class="cls_003"><span class="cls_003">e) Respeitar, acatar ordens, bem como não divulgar quaisquer informações, dados, trabalhos reservados ou confidenciais</span></div>
        <div style="position:absolute;left:42.48px;top:477.28px" class="cls_003"><span class="cls_003">de que tiver conhecimento em decorrência do estágio.</span></div>
        <div style="position:absolute;left:42.48px;top:497.92px" class="cls_006"><span class="cls_006">CLÁUSULA DÉCIMA: DAS OBRIGAÇÕES DA INSTITUIÇÃO DE ENSINO -</span><span class="cls_003"> No desenvolvimento do estágio curricular</span></div>
        <div style="position:absolute;left:42.48px;top:508.24px" class="cls_003"><span class="cls_003">obrigatório caberá à Instituição de Ensino:</span></div>
        <div style="position:absolute;left:60.48px;top:518.56px" class="cls_002"><span class="cls_002">a) </span><span class="cls_003"> Designar o (a) Sr. (a) <b>'.$nomeOrientador.'<b/></span> para ser o(a) Professor(a) Orientador(a) responsável</div>
        <div style="position:absolute;left:78.48px;top:528.88px" class="cls_003"><span class="cls_003">pelo acompanhamento e avaliação das atividades do estágio.</span></div>
        <div style="position:absolute;left:60.48px;top:540.28px" class="cls_003"><span class="cls_003">b) Avaliar, através do(a) Professor(a) Orientador(a), após análise do Supervisor da Unidade Concedente, o relatório Final</span></div>
        <div style="position:absolute;left:78.48px;top:550.60px" class="cls_003"><span class="cls_003">elaborado pelo aluno, bem como a Frequência no Estágio atestada pela Concedente com base nas atividades</span></div>
        <div style="position:absolute;left:78.48px;top:560.92px" class="cls_003"><span class="cls_003">executadas durante o período de estágio.</span></div>
        <div style="position:absolute;left:60.48px;top:571.24px" class="cls_003"><span class="cls_003">c) Fornecer, quando solicitado pela Unidade Concedente, informações acerca da vida escolar do estagiário.</span></div>
        <div style="position:absolute;left:60.48px;top:592.00px" class="cls_003"><span class="cls_003">E por estarem de inteiro e comum acordo com as condições e com o texto deste Termo de Compromisso, as partes o</span></div>
        <div style="position:absolute;left:42.48px;top:602.32px" class="cls_003"><span class="cls_003">assinam em 3 (três) vias de igual teor, cabendo a primeira via a Unidade Concedente, a segunda via ao estagiário e a terceira</span></div>
        <div style="position:absolute;left:42.48px;top:612.64px" class="cls_003"><span class="cls_003">via a Instituição de Ensino.</span></div>
        <div style="position:absolute;left:62.40px;top:633.40px" class="cls_003"><span class="cls_003">__________________________________________</span></div>
        <div style="position:absolute;left:337.75px;top:633.40px" class="cls_003"><span class="cls_003">_______________________________________</span></div>
        <div style="position:absolute;left:111.52px;top:654.16px" class="cls_004"><span class="cls_004">Estagiário(a)</span></div>
        <div style="position:absolute;left:395.67px;top:653.20px" class="cls_004"><span class="cls_004">Representante da empresa</span></div>
        <div style="position:absolute;left:225.08px;top:672.52px" class="cls_003"><span class="cls_003">______________________________</span></div>
        <div style="position:absolute;left:257.40px;top:693.28px" class="cls_004"><span class="cls_004">Professor Orientador</span></div>
        <div style="position:absolute;left:70.03px;top:712.72px" class="cls_003"><span class="cls_003">____________________________________</span></div>
        <div style="position:absolute;left:362.89px;top:712.72px" class="cls_003"><span class="cls_003">______________________________</span></div>
        <div style="position:absolute;left:97.50px;top:723.04px" class="cls_003"><span class="cls_003">Cissa Gabriela da Cissa</span></div>
        <div style="position:absolute;left:387.09px;top:722.08px" class="cls_003"><span class="cls_003">Thiago Caproni Tavares</span></div>
        <div style="position:absolute;left:98.14px;top:733.48px" class="cls_004"><span class="cls_004">Coordenadora de Extensão</span></div>
        <div style="position:absolute;left:406.60px;top:731.56px" class="cls_004"><span class="cls_004">Diretor- Geral</span></div>
        <div style="position:absolute;left:64.78px;top:742.72px" class="cls_004"><span class="cls_004">IFSULDEMINAS-Campus Poços de Caldas</span></div>
        <div style="position:absolute;left:360.88px;top:740.80px" class="cls_004"><span class="cls_004">IFSULDEMINAS - Campus Poços de Caldas</span></div>
        <div style="position:absolute;left:144.24px;top:773.68px" class="cls_002"><span class="cls_002">Poços de Caldas, …</span></div>
        <div style="position:absolute;left:257.52px;top:773.68px" class="cls_002"><span class="cls_002">de …</span></div>
        <div style="position:absolute;left:378.75px;top:773.68px" class="cls_002"><span class="cls_002">de ……………...</span></div>
    </div>

</body>

</html>';

/* Carrega seu HTML */
$dompdf->load_html($string);

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);

?>