<?php

include_once("../conexao.php");

$year = date('Y');

$query = "SELECT * FROM alunos";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeAluno = $resultado["nome"];
        $cidadeAluno = $resultado["cidade"];
        $enderecoAluno = $resultado["endereco"];
        $ufAluno = $resultado["uf"];
        $cursoAluno = $resultado["curso"];
        $campusAluno = $resultado["campus"];
        $raAluno = $resultado["ra"];
        $moduloAno = $resultado["periodoAno"];
        $modalidade = $resultado["modalidade"];
        $bairroAluno = $resultado["bairro"];
        $cepAluno = $resultado["cep"];
        $telefoneFixoAluno = $resultado["telefoneFixo"];
        $celularAluno = $resultado["telefoneCelular"];
        $emailAluno = $resultado["email"];
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
        $telefoneOrientador = $resultado["telefone"];
        $emailOrientador = $resultado["email"];
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
        $cnpjEmpresa = $resultado["cnpjCpf"];
        $enderecoEmpresa = $resultado["endereco"];
        $bairroEmpresa = $resultado["bairro"];
        $cidadeEmpresa = $resultado["cidade"];
        $estadoEmpresa = $resultado["uf"];
        $cepEmpresa = $resultado["cep"];   
        $telefoneEmpresa = $resultado["telefone"];
        $emailEmpresa = $resultado["email"];
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
        $cpfSupervisor = $resultado["cpf"];
        $cursoSupervisor = $resultado["cursoFormacao"];
        $conselhoDeClasse = $resultado["conselhoClasseProfissional"];
        $possuiExperiencia = $resultado["possuiExperiencia"];
        $telefoneSupervisor = $resultado["telefone"];
        $emailSupervisor = $resultado["email"];
    }
}

$query = "SELECT * FROM estagio";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $area = $resultado["areasConhecimento"];
        $atividades = $resultado["atividadesQueSeraoDesenvolvidas"];
        $cargaHoraria = $resultado["cargaHorariaTotal"];
        $objetivos = $resultado["objetivos"];
        $dataInicio = $resultado["dataInicial"];
        $dataFim = $resultado["dataFinal"];
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
            font-size: 8.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_003 {
            font-family: Times, serif;
            font-size: 8.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_004 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_004 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_026 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }

        div.cls_026 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_008 {
            font-family: Arial, serif;
            font-size: 16.0px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_008 {
            font-family: Arial, serif;
            font-size: 16.0px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_009 {
            font-family: Times, serif;
            font-size: 8.1px;
            color: rgb(255, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_009 {
            font-family: Times, serif;
            font-size: 8.1px;
            color: rgb(255, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_014 {
            font-family: Arial, serif;
            font-size: 18.1px;
            color: rgb(0, 128, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_014 {
            font-family: Times, serif;
            font-size: 18.1px;
            color: rgb(0, 128, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_017 {
            font-family: Times, serif;
            font-size: 14.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }Palma(as iniciais em letras maiúsculas, ne

        div.cls_017 {
            font-family: Times, serif;
            font-size: 14.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_002 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_002 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_005 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_005 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_019 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(255, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_019 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(255, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_021 {
            font-family: Times, serif;
            font-size: 7.0px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_021 {
            font-family: Times, serif;
            font-size: 7.0px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_006 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_006 {
            font-family: Times, serif;
            font-size: 10.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_015 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_015 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_023 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_023 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        -->

    </style>
    <script type="text/javascript" src="HTML/relatorioEstagio/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background1.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:400.92px;top:273.28px" class="cls_008"><span class="cls_008"><b>'.$nomeAluno.'</b></span></div>
        <div style="position:absolute;left:211.68px;top:394.96px" class="cls_014"><span class="cls_014"><b>RELATÓRIO DE ESTÁGIO</b></span></div>
        <div style="position:absolute;left:236.40px;top:599.80px" class="cls_017"><span class="cls_017">'.$cidadeAluno.'/'.$ufAluno.'</span></div>
        <div style="position:absolute;left:288.48px;top:615.88px" class="cls_017"><span class="cls_017">'.$year.'</span></div>
        <div style="position:absolute;left:400.92px;top:719.44px" class="cls_008"><span class="cls_008"><b>'.$nomeAluno.'</b></span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background2.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:211.68px;top:215.56px" class="cls_014"><span class="cls_014"><b>RELATÓRIO DE ESTÁGIO</b></span></div>
        <div style="position:absolute;left:340.20px;top:324.16px" class="cls_002"><span class="cls_002">Relatório de Estágio apresentado</span></div>
        <div style="position:absolute;left:340.20px;top:335.68px" class="cls_002"><span class="cls_002">como pré-requisito de conclusão</span></div>
        <div style="position:absolute;left:340.20px;top:347.20px" class="cls_002"><span class="cls_002">do Curso '.$cursoAluno.',</span></div>
        <div style="position:absolute;left:340.20px;top:358.72px" class="cls_002"><span class="cls_002">do Instituto Federal de Educação,</span></div>
        <div style="position:absolute;left:340.20px;top:370.24px" class="cls_002"><span class="cls_002">Ciência e Tecnologia do Sul de</span></div>
        <div style="position:absolute;left:340.20px;top:381.64px" class="cls_002"><span class="cls_002">Minas Gerais, Campus Poços de</span></div>
        <div style="position:absolute;left:340.20px;top:393.16px" class="cls_002"><span class="cls_002">Caldas.</span></div>
        <div style="position:absolute;left:157.56px;top:445.96px" class="cls_005"><span class="cls_005">Professor Orientador do Estágio: '.$nomeOrientador.'</span></div>
        <div style="position:absolute;left:240.24px;top:563.08px" class="cls_017"><span class="cls_017">'.$cidadeAluno.'/'.$ufAluno.'</span></div>
        <div style="position:absolute;left:288.48px;top:579.16px" class="cls_017"><span class="cls_017">'.$year.'</span></div>
        <div style="position:absolute;left:260.16px;top:669.16px" class="cls_005"><span class="cls_005"><b>'.$nomeAluno.'</b></span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background3.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:157.08px;top:202.24px" class="cls_005"><span class="cls_005">Relatório de Estágio apresentado como requisito para a conclusão do</span></div>
        <div style="position:absolute;left:85.08px;top:216.04px" class="cls_005"><span class="cls_005">Curso '.$modalidade.' de '.$cursoAluno.', do IFSULDEMINAS -</span></div>
        <div style="position:absolute;left:85.08px;top:229.84px" class="cls_005"><span class="cls_005">Campus '.$campusAluno.'.</span></div>
        <div style="position:absolute;left:85.08px;top:301.48px" class="cls_002"><span class="cls_002">Aprovado por: '.$nomeOrientador.'</span></div>
        <div style="position:absolute;left:157.45px;top:378.52px" class="cls_002"><span class="cls_002">________________________________________________________</span></div>
        <div style="position:absolute;left:208.56px;top:390.04px" class="cls_002"><span class="cls_002">Assinatura do Professor Orientador do Estágio</span></div>
        <div style="position:absolute;left:164.76px;top:495.76px" class="cls_006"><span class="cls_006">_________________, ____ de ____________________ de _______.</span></div>
        <div style="position:absolute;left:85.08px;top:635.80px" class="cls_006"><span class="cls_006">1. DADOS PESSOAIS</span></div>
        <div style="position:absolute;left:85.08px;top:658.84px" class="cls_006"><span class="cls_006">NOME DO ESTAGIÁRIO: '.$nomeAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:670.36px" class="cls_006"><span class="cls_006">TURMA: '.$moduloAno.'</span></div>
        <div style="position:absolute;left:85.08px;top:681.76px" class="cls_006"><span class="cls_006">ENDEREÇO: '.$enderecoAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:693.28px" class="cls_006"><span class="cls_006">BAIRRO: '.$bairroAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:704.80px" class="cls_006"><span class="cls_006">CIDADE: '.$cidadeAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:716.32px" class="cls_006"><span class="cls_006">UF(ESTADO): '.$ufAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:727.84px" class="cls_006"><span class="cls_006">CEP: '.$cepAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:739.36px" class="cls_006"><span class="cls_006">TELEFONE FIXO: '.$telefoneFixoAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:750.76px" class="cls_006"><span class="cls_006">CELULAR: '.$celularAluno.'</span></div>
        <div style="position:absolute;left:85.08px;top:762.28px" class="cls_006"><span class="cls_006">E-MAIL: '.$emailAluno.'</span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background4.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:85.08px;top:236.80px" class="cls_006"><span class="cls_006">2. DADOS DA INSTITUIÇÃO</span></div>
        <div style="position:absolute;left:85.08px;top:259.84px" class="cls_006"><span class="cls_006">NOME DA INSTITUIÇÃO DE ENSINO:</span></div>
        <div style="position:absolute;left:85.08px;top:271.36px" class="cls_006"><span class="cls_006">ENDEREÇO:</span></div>
        <div style="position:absolute;left:85.08px;top:282.76px" class="cls_006"><span class="cls_006">BAIRRO:</span></div>
        <div style="position:absolute;left:85.08px;top:294.28px" class="cls_006"><span class="cls_006">CEP:</span></div>
        <div style="position:absolute;left:85.08px;top:305.80px" class="cls_006"><span class="cls_006">TELEFNE:</span></div>
        <div style="position:absolute;left:85.08px;top:317.32px" class="cls_006"><span class="cls_006">E-MAIL:</span></div>
        <div style="position:absolute;left:85.08px;top:363.28px" class="cls_006"><span class="cls_006">3. DADOS DO ESTÁGIO</span></div>
        <div style="position:absolute;left:85.08px;top:386.32px" class="cls_006"><span class="cls_006">RAZÃO SOCIAL DA EMPRESA CONCEDENTE DO ESTÁGIO:</span></div>
        <div style="position:absolute;left:85.08px;top:397.84px" class="cls_006"><span class="cls_006">CNPJ/CPF: '.$cnpjEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:409.24px" class="cls_006"><span class="cls_006">ENDEREÇO: '.$enderecoEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:420.76px" class="cls_006"><span class="cls_006">BAIRRO: '.$bairroEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:432.28px" class="cls_006"><span class="cls_006">CIDADE: '.$cidadeEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:443.80px" class="cls_006"><span class="cls_006">UF(ESTADO): '.$estadoEmpresa.' </span></div>
        <div style="position:absolute;left:85.08px;top:455.32px" class="cls_006"><span class="cls_006">CEP: '.$cepEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:466.84px" class="cls_006"><span class="cls_006">TELEFONE: '.$telefoneEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:478.24px" class="cls_006"><span class="cls_006">E-MAIL: '.$emailEmpresa.'</span></div>
        <div style="position:absolute;left:85.08px;top:489.76px" class="cls_006"><span class="cls_006">ÁREA DE ESTAGIO:</span></div>
        <div style="position:absolute;left:85.08px;top:501.28px" class="cls_006"><span class="cls_006">PERÍODO DO ESTÁGIO: '.$dataInicio.' a '.$dataFim.'</span></div>
        <div style="position:absolute;left:85.08px;top:535.84px" class="cls_006"><span class="cls_006">CARGA TOTAL DE HORAS REALIZADAS: '.$cargaHoraria.' horas.</span></div>
        <div style="position:absolute;left:85.08px;top:558.76px" class="cls_006"><span class="cls_006">NOME E FORMAÇÃO DO SUPERVISOR RESPONSÁVEL PELO ACOMPANHAMENTO DO</span></div>
        <div style="position:absolute;left:85.08px;top:568.24px" class="cls_006"><span class="cls_006">ESTÁGIO NA EMPRESA: '.$nomeSupervisor.', '.$cursoSupervisor.' </span></div>
        <div style="position:absolute;left:85.08px;top:591.28px" class="cls_006"><span class="cls_006">NOME DO PROFESSOR ORIENTADOR DO ESTÁGIO: '.$nomeOrientador.'</span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background5.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:85.08px;top:211.36px" class="cls_015"><span class="cls_015">3.1 DESCRIÇÃO DA EMPRESA </span><span class="cls_009">(fonte Arial, texto tamanho 12)</span></div>
        <div style="position:absolute;left:85.08px;top:225.40px" class="cls_009"><span class="cls_009">Informações sobre a empresa, ramo de atividades, número de funcionários, nome fantasia, ano de funcionamento da empresa,</span></div>
        <div style="position:absolute;left:85.08px;top:230.68px" class="cls_009"><span class="cls_009">site, e e-mail (se houver).</span></div>
        <div style="position:absolute;left:85.08px;top:252.76px" class="cls_015"><span class="cls_015">3.2 OBJETIVOS ALCANÇADOS NO ESTÁGIO </span><span class="cls_009">(fonte Arial, texto tamanho 12)</span></div>
        <div style="position:absolute;left:85.08px;top:262.84px" class="cls_009"><span class="cls_009">Qual sua expectativa em relação ao Estágio .</span></div>
        <div style="position:absolute;left:85.08px;top:287.32px" class="cls_015"><span class="cls_015">3.3 DESCRIÇÃO DETALHADA DAS ATIVIDADES </span><span class="cls_009">(fonte Arial, texto tamanho 12)</span></div>
        <div style="position:absolute;left:85.08px;top:299.20px" class="cls_019"><span class="cls_019">D</span><span class="cls_009">escrever detalhadamente cada item citado no Plano de Estágio.</span></div>
        <div style="position:absolute;left:85.08px;top:326.44px" class="cls_015"><span class="cls_015">3.4 ATIVIDADES DESENVOLVIDAS QUE MELHOR DESEMPENHOU</span><span class="cls_006"> </span><span class="cls_009">(fonte Arial, texto</span></div>
        <div style="position:absolute;left:85.08px;top:336.40px" class="cls_009"><span class="cls_009">tamanho 12)</span></div>
        <div style="position:absolute;left:85.08px;top:370.12px" class="cls_015"><span class="cls_015">3.5 DIFICULDADES ENCONTRADAS NO ESTÁGIO</span></div>
        <div style="position:absolute;left:85.08px;top:380.08px" class="cls_009"><span class="cls_009">(fonte Arial, texto tamanho 12) Se não encontrou dificuldades, justificar por quê.</span></div>
        <div style="position:absolute;left:85.08px;top:416.08px" class="cls_015"><span class="cls_015">3.6 FAÇA UM PARALELO EM RELAÇÃO AO CONHECIMENTO QUE VOCÊ</span></div>
        <div style="position:absolute;left:85.08px;top:429.88px" class="cls_015"><span class="cls_015">RECEBEU NO INSTITUTO E A REALIDADE VIVENCIADA NO LOCAL DE</span></div>
        <div style="position:absolute;left:85.08px;top:443.68px" class="cls_015"><span class="cls_015">ESTÁGIO</span><span class="cls_006"> </span><span class="cls_009">(fonte Arial, texto tamanho 12)</span></div>
        <div style="position:absolute;left:85.08px;top:479.32px" class="cls_015"><span class="cls_015">3.7 CONSIDERAÇÕES FINAIS SOBRE O ESTÁGIO</span><span class="cls_023"> </span><span class="cls_009">(fonte Arial, texto tamanho 12)</span></div>
        <div style="position:absolute;left:85.08px;top:492.40px" class="cls_009"><span class="cls_009">Explique se conseguiu atingir seus objetivos de aprendizagem, aponte recomendações, pontos positivos e/ou negativos.</span></div>
        <div style="position:absolute;left:85.08px;top:513.88px" class="cls_015"><span class="cls_015">3.8 AUTOAVALIAÇÃO EM RELAÇÃO AO NÍVEL DE DESEMPENHO</span><span class="cls_006"> </span><span class="cls_009">(Assinale um X):</span></div>
        <div style="position:absolute;left:103.80px;top:540.60px" class="cls_023"><span class="cls_023">FATORES</span></div>
        <div style="position:absolute;left:283.32px;top:540.60px" class="cls_023"><span class="cls_023">Ótimo</span></div>
        <div style="position:absolute;left:343.32px;top:540.60px" class="cls_023"><span class="cls_023">Bom</span></div>
        <div style="position:absolute;left:394.56px;top:540.60px" class="cls_023"><span class="cls_023">Regular</span></div>
        <div style="position:absolute;left:452.76px;top:540.60px" class="cls_023"><span class="cls_023">Insuficiente</span></div>
        <div style="position:absolute;left:103.80px;top:555.12px" class="cls_023"><span class="cls_023">a) Conhecimentos Gerais e Técnicos</span></div>
        <div style="position:absolute;left:103.80px;top:569.40px" class="cls_023"><span class="cls_023">b) Iniciativa</span></div>
        <div style="position:absolute;left:103.80px;top:583.68px" class="cls_023"><span class="cls_023">c) Criatividade</span></div>
        <div style="position:absolute;left:103.80px;top:597.96px" class="cls_023"><span class="cls_023">d) Discrição (ética)</span></div>
        <div style="position:absolute;left:103.80px;top:612.24px" class="cls_023"><span class="cls_023">e) Organização e método de trabalho</span></div>
        <div style="position:absolute;left:103.80px;top:626.64px" class="cls_023"><span class="cls_023">f) Sociabilidade e Desempenho</span></div>
        <div style="position:absolute;left:103.80px;top:640.92px" class="cls_023"><span class="cls_023">g) Cooperação</span></div>
        <div style="position:absolute;left:103.80px;top:655.20px" class="cls_023"><span class="cls_023">h) Liderança</span></div>
        <div style="position:absolute;left:103.80px;top:669.48px" class="cls_023"><span class="cls_023">i) Assiduidade/Pontualidade</span></div>
        <div style="position:absolute;left:103.80px;top:683.76px" class="cls_023"><span class="cls_023">j) Responsabilidade</span></div>
        <div style="position:absolute;left:103.80px;top:698.04px" class="cls_023"><span class="cls_023">k) Integração</span></div>
        <div style="position:absolute;left:103.80px;top:712.44px" class="cls_023"><span class="cls_023">l) Comprometimento nas Tarefas</span></div>
        <div style="position:absolute;left:103.80px;top:726.72px" class="cls_023"><span class="cls_023">m) Capacidade de Gerenciamento</span></div>
        <div style="position:absolute;left:85.08px;top:766.48px" class="cls_015"><span class="cls_015">3.9 BIBLIOGRAFIA UTILIZADA NO ESTÁGIO </span><span class="cls_009">(fonte Arial, texto tamanho 12)</span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background6.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE</span></div>
        <div style="position:absolute;left:295.80px;top:167.56px" class="cls_003"><span class="cls_003">CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:85.08px;top:198.40px" class="cls_009"><span class="cls_009">Caso não tenha utilizado obras literárias e não tenha consultado a internet, descartar este item.</span></div>
        <div style="position:absolute;left:85.08px;top:247.00px" class="cls_015"><span class="cls_015">4.0 ANEXAR FOTOS DAS ATIVIDADES DESENVOLVIDAS NO ESTÁGIO</span></div>
        <div style="position:absolute;left:85.08px;top:260.80px" class="cls_015"><span class="cls_015">(OPCIONAL).</span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background7.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE</span></div>
        <div style="position:absolute;left:295.80px;top:167.56px" class="cls_003"><span class="cls_003">CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:181.80px;top:212.56px" class="cls_015"><span class="cls_015">FICHA DE ACOMPANHAMENTO DE ESTÁGIO</span></div>
        <div style="position:absolute;left:85.08px;top:240.28px" class="cls_006"><span class="cls_006">Prezado Professor Orientador, este formulário tem por finalidade o acompanhamento e a validação</span></div>
        <div style="position:absolute;left:85.08px;top:251.80px" class="cls_006"><span class="cls_006">do Estágio Obrigatório realizado pelo seu orientando. Por favor, preencha e assine os questionários</span></div>
        <div style="position:absolute;left:85.08px;top:261.16px" class="cls_006"><span class="cls_006">abaixo:</span></div>
        <div style="position:absolute;left:106.44px;top:292.96px" class="cls_006"><span class="cls_006">Questionário Quantitativo</span></div>
        <div style="position:absolute;left:449.40px;top:292.00px" class="cls_015"><span class="cls_015">Sim</span></div>
        <div style="position:absolute;left:489.00px;top:292.00px" class="cls_015"><span class="cls_015">Não</span></div>
        <div style="position:absolute;left:106.44px;top:312.44px" class="cls_015"><span class="cls_015">As observações citadas pelo supervisor de estágios estão de</span></div>
        <div style="position:absolute;left:106.44px;top:326.24px" class="cls_015"><span class="cls_015">acordo com a dúvidas apresentadas pelo aluno?</span></div>
        <div style="position:absolute;left:106.44px;top:347.00px" class="cls_015"><span class="cls_015">O aluno preencheu satisfatoriamente no relatório as</span></div>
        <div style="position:absolute;left:106.44px;top:360.80px" class="cls_015"><span class="cls_015">atividades realizadas durante o estágio, as experiências</span></div>
        <div style="position:absolute;left:106.44px;top:374.60px" class="cls_015"><span class="cls_015">adquiridas e as dificuldades encontradas?</span></div>
        <div style="position:absolute;left:98.28px;top:418.76px" class="cls_006"><span class="cls_006">Questionário Qualitativo</span></div>
        <div style="position:absolute;left:296.53px;top:418.76px" class="cls_006"><span class="cls_006">(Obs: 1- Péssimo, 2- Ruim, 3- Regular, 4- Bom, 5 - Ótimo)</span></div>
        <div style="position:absolute;left:98.28px;top:438.60px" class="cls_023"><span class="cls_023">Item</span></div>
        <div style="position:absolute;left:130.17px;top:438.48px" class="cls_015"><span class="cls_015">Descrição</span></div>
        <div style="position:absolute;left:447.36px;top:438.48px" class="cls_015"><span class="cls_015">1</span></div>
        <div style="position:absolute;left:472.56px;top:438.48px" class="cls_015"><span class="cls_015">2</span></div>
        <div style="position:absolute;left:498.48px;top:438.48px" class="cls_015"><span class="cls_015">3</span></div>
        <div style="position:absolute;left:520.92px;top:438.48px" class="cls_015"><span class="cls_015">4</span></div>
        <div style="position:absolute;left:546.84px;top:438.48px" class="cls_015"><span class="cls_015">5</span></div>
        <div style="position:absolute;left:98.28px;top:457.92px" class="cls_015"><span class="cls_015">1</span></div>
        <div style="position:absolute;left:130.17px;top:457.92px" class="cls_015"><span class="cls_015">O aluno utilizou adequadamente a Língua Portuguesa na</span></div>
        <div style="position:absolute;left:126.84px;top:471.72px" class="cls_015"><span class="cls_015">descrição das atividades realizadas?</span></div>
        <div style="position:absolute;left:98.28px;top:495.48px" class="cls_015"><span class="cls_015">2</span></div>
        <div style="position:absolute;left:130.17px;top:495.48px" class="cls_015"><span class="cls_015">Existe clareza nos textos, boa pontuação e uso correto</span></div>
        <div style="position:absolute;left:126.84px;top:509.28px" class="cls_015"><span class="cls_015">dos termos técnicos?</span></div>
        <div style="position:absolute;left:98.28px;top:535.92px" class="cls_015"><span class="cls_015">3</span></div>
        <div style="position:absolute;left:126.84px;top:535.92px" class="cls_015"><span class="cls_015">No relatório de estágio, o aluno foi claro quanto às</span></div>
        <div style="position:absolute;left:126.84px;top:549.72px" class="cls_015"><span class="cls_015">atividades desenvolvidas?</span></div>
        <div style="position:absolute;left:98.28px;top:570.48px" class="cls_015"><span class="cls_015">4</span></div>
        <div style="position:absolute;left:126.84px;top:570.48px" class="cls_015"><span class="cls_015">O aluno conseguiu relacionar as atividades teóricas à</span></div>
        <div style="position:absolute;left:126.84px;top:584.28px" class="cls_015"><span class="cls_015">prática desenvolvida?</span></div>
        <div style="position:absolute;left:98.28px;top:606.96px" class="cls_015"><span class="cls_015">5</span></div>
        <div style="position:absolute;left:126.84px;top:606.96px" class="cls_015"><span class="cls_015">As atividades previstas no plano de estágio foram</span></div>
        <div style="position:absolute;left:126.84px;top:620.76px" class="cls_015"><span class="cls_015">integralmente cumpridas?</span></div>
        <div style="position:absolute;left:98.28px;top:648.48px" class="cls_015"><span class="cls_015">6</span></div>
        <div style="position:absolute;left:126.84px;top:648.48px" class="cls_015"><span class="cls_015">O aluno evoluiu tecnicamente com os conhecimentos</span></div>
        <div style="position:absolute;left:126.84px;top:662.28px" class="cls_015"><span class="cls_015">adquiridos em estágio?</span></div>
        <div style="position:absolute;left:98.28px;top:681.96px" class="cls_015"><span class="cls_015">7</span></div>
        <div style="position:absolute;left:126.84px;top:681.96px" class="cls_015"><span class="cls_015">O aluno demonstrou interesse na realização do estágio?</span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/relatorioEstagio/background8.jpg" width=595 height=841></div>
        <div style="position:absolute;left:242.72px;top:139.96px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:186.48px;top:149.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:82.88px;top:158.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE</span></div>
        <div style="position:absolute;left:295.80px;top:167.56px" class="cls_003"><span class="cls_003">CALDAS</span></div>
        <div style="position:absolute;left:138.12px;top:176.68px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:192.72px;top:184.00px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
        <div style="position:absolute;left:98.28px;top:202.72px" class="cls_015"><span class="cls_015">8</span></div>
        <div style="position:absolute;left:126.84px;top:202.72px" class="cls_015"><span class="cls_015">Descreva quais a principais dificuldades encontradas pelo aluno no decorrer do</span></div>
        <div style="position:absolute;left:126.84px;top:216.52px" class="cls_015"><span class="cls_015">estágio:</span></div>
        <div style="position:absolute;left:98.28px;top:341.20px" class="cls_015"><span class="cls_015">9</span></div>
        <div style="position:absolute;left:126.84px;top:341.20px" class="cls_015"><span class="cls_015">Em sua opinião, qual a principal contribuição do estágio na formação do aluno?</span></div>
        <div style="position:absolute;left:85.08px;top:512.20px" class="cls_006"><span class="cls_006">Declaro estar ciente quanto às informações prestadas neste formulário.</span></div>
        <div style="position:absolute;left:168.36px;top:580.84px" class="cls_015"><span class="cls_015">___________________________________________</span></div>
        <div style="position:absolute;left:197.88px;top:594.64px" class="cls_015"><span class="cls_015">Assinatura do(a) professor(a) orientador(a)</span></div>
        <div style="position:absolute;left:175.08px;top:677.44px" class="cls_005"><span class="cls_005">_________________________________________</span></div>
        <div style="position:absolute;left:209.16px;top:691.24px" class="cls_015"><span class="cls_015">Assinatura do(a) aluno(a) estagiário(a)</span></div>
    </div>

</body>

</html>
';


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
