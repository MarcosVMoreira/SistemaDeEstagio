<?php

include_once("../conexao.php");

session_start();

$raAluno = $_SESSION['ra'];

$query = "SELECT * FROM alunos WHERE ra = $raAluno";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeAluno = $resultado["nome"];
        $cursoAluno = $resultado["curso"];
        $periodoAnoAluno = $resultado["periodoAno"];
        $modalidadeAluno = $resultado["modalidade"];
        $idEmpresa = $resultado["idEmpresa"];
        $idEstagio = $resultado["idEstagio"];
    }
}

$query = "SELECT * FROM concedentes WHERE idEmpresa = $idEmpresa";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeEmpresa = $resultado["nome"];
    }
}

$query = "SELECT * FROM estagio WHERE idEstagio = $idEstagio";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $dataInicioAno = $resultado["dataInicial"];
        $dataInicialEstagio = date("d/m/Y", strtotime($dataInicioAno));
        $dataFimAno = $resultado["dataFinal"];
        $dataFinalEstagio = date("d/m/Y", strtotime($dataFimAno));
    }
}

$query = "SELECT * FROM frequenciaestagio WHERE raAluno = $raAluno";
if ($result = $conexao->query($query)) {
    $dataEstagio = array();
    $setor = array();
    $atividade = array();
    $cargaHoraria = array();
    $totalHoras = array();
    $qtdLinhas = 0;

    while($resultado = $result->fetch_assoc()){
        if(empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: ../login.php");
        } else {
            $data = $resultado["data"];
            $dataEstagio[] = date("d/m/Y", strtotime($data));
            $setor[] = $resultado["setor"];
            $atividade[] = $resultado["atividade"];
            $cargaHoraria[] = $resultado["cargaHoraria"];
            $qtdLinhas++;
        }
    }

    $qtdPaginas = $qtdLinhas / 20;
    $qtdPaginas = (int)$qtdPaginas;

    for($i = $qtdLinhas; $i < (($qtdPaginas +1) *20); $i++) {
        $dataEstagio[] = "";
        $setor[] = "";
        $atividade[] = "";
        $cargaHoraria[] = "";
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
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_003 {
            font-family: Times, serif;
            font-size: 8.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_004 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_004 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_009 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 127);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }

        div.cls_009 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 127);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_006 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }

        div.cls_006 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }

        span.cls_007 {
            font-family: Times, serif;
            font-size: 10.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_007 {
            font-family: Times, serif;
            font-size: 10.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_008 {
            font-family: Times, serif;
            font-size: 10.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }

        div.cls_008 {
            font-family: Times, serif;
            font-size: 10.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }

        -->
    </style>
    <script type="text/javascript"
        src="HTML/frequenciaEstagio/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/frequenciaEstagio/background1.jpg"
                width=595 height=842></div>
        <div style="position:absolute;left:244.90px;top:93.90px" class="cls_003"><span class="cls_003">MINISTÉRIO DA
                EDUCAÇÃO</span></div>
        <div style="position:absolute;left:182.30px;top:103.10px" class="cls_003"><span class="cls_003">SECRETARIA DE
                EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:71.80px;top:112.30px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL
                DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:124.60px;top:121.40px" class="cls_004"><span class="cls_004">Avenida Dirce
                Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:168.80px;top:131.70px" class="cls_004"><span class="cls_004">Fone: (35)
                3713-5120 / (35) 3722-0598 / </span><A
                HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </span></div>
        <div style="position:absolute;left:206.40px;top:148.80px" class="cls_006"><span class="cls_006">FREQUÊNCIA DE
                ESTÁGIO</span></div>
        <div style="position:absolute;left:470.50px;top:162.60px" class="cls_006"><span class="cls_006">FOLHA Nº </span></span><b>1</b></div>
        <div style="position:absolute;left:25.40px;top:186.20px" class="cls_007"><span class="cls_007">Nome do(a)
                Estagiário(a): </span><b>'.$nomeAluno.'</b></div>
        <div style="position:absolute;left:25.40px;top:210.20px" class="cls_007"><span class="cls_007">Curso:</span><br/><b>'.$cursoAluno.'</b></div>
        <div style="position:absolute;left:288.80px;top:210.20px" class="cls_007"><span class="cls_007">Módulo/Ano:</span><br/><b>'.$periodoAnoAluno.'</b></div>
        <div style="position:absolute;left:362.90px;top:210.20px" class="cls_007"><span class="cls_007">Modalidade:</span><br/><b>'.$modalidadeAluno.'</b></div>
        <div style="position:absolute;left:25.40px;top:239.90px" class="cls_007"><span class="cls_007">Empresa: </span><b>'.$nomeEmpresa.'</b></div>
        <div style="position:absolute;left:288.80px;top:239.90px" class="cls_007"><span class="cls_007">Período do estágio: </span><b>'.$dataInicialEstagio.'</b> a <b>'.$dataFinalEstagio.'</b></div>
        <div style="position:absolute;left:77.90px;top:281.60px" class="cls_008"><span class="cls_008">Presença</span></div>
        <div style="position:absolute;left:237.00px;top:291.40px" class="cls_008"><span class="cls_008">Setor</span></div>
        <div style="position:absolute;left:393.90px;top:291.40px" class="cls_008"><span class="cls_008">Atividade desenvolvida</span></div>
        <div style="position:absolute;left:56.00px;top:301.50px" class="cls_008"><span class="cls_008">Data</span></div>
        <div style="position:absolute;left:119.50px;top:301.50px" class="cls_008"><span class="cls_008">Carga horária</span></div>

        <div style="position:absolute;left:43.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[0].'</span></div>
        <div style="position:absolute;left:43.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[1].'</span></div>
        <div style="position:absolute;left:43.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[2].'</span></div>
        <div style="position:absolute;left:43.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[3].'</span></div>
        <div style="position:absolute;left:43.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[4].'</span></div>
        <div style="position:absolute;left:43.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[5].'</span></div>
        <div style="position:absolute;left:43.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[6].'</span></div>
        <div style="position:absolute;left:43.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[7].'</span></div>
        <div style="position:absolute;left:43.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[8].'</span></div>
        <div style="position:absolute;left:43.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[9].'</span></div>
        <div style="position:absolute;left:43.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[10].'</span></div>
        <div style="position:absolute;left:43.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[11].'</span></div>
        <div style="position:absolute;left:43.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[12].'</span></div>
        <div style="position:absolute;left:43.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[13].'</span></div>
        <div style="position:absolute;left:43.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[14].'</span></div>
        <div style="position:absolute;left:43.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[15].'</span></div>
        <div style="position:absolute;left:43.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[16].'</span></div>
        <div style="position:absolute;left:43.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[17].'</span></div>
        <div style="position:absolute;left:43.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[18].'</span></div>
        <div style="position:absolute;left:43.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[19].'</span></div>

        <div style="position:absolute;left:138.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[0].'</span></div>
        <div style="position:absolute;left:138.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[1].'</span></div>
        <div style="position:absolute;left:138.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[2].'</span></div>
        <div style="position:absolute;left:138.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[3].'</span></div>
        <div style="position:absolute;left:138.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[4].'</span></div>
        <div style="position:absolute;left:138.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[5].'</span></div>
        <div style="position:absolute;left:138.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[6].'</span></div>
        <div style="position:absolute;left:138.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[7].'</span></div>
        <div style="position:absolute;left:138.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[8].'</span></div>
        <div style="position:absolute;left:138.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[9].'</span></div>
        <div style="position:absolute;left:138.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[10].'</span></div>
        <div style="position:absolute;left:138.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[11].'</span></div>
        <div style="position:absolute;left:138.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[12].'</span></div>
        <div style="position:absolute;left:138.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[13].'</span></div>
        <div style="position:absolute;left:138.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[14].'</span></div>
        <div style="position:absolute;left:138.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[15].'</span></div>
        <div style="position:absolute;left:138.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[16].'</span></div>
        <div style="position:absolute;left:138.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[17].'</span></div>
        <div style="position:absolute;left:138.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[18].'</span></div>
        <div style="position:absolute;left:138.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[19].'</span></div>

        <div style="position:absolute;left:188.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$setor[0].'</span></div>
        <div style="position:absolute;left:188.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$setor[1].'</span></div>
        <div style="position:absolute;left:188.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$setor[2].'</span></div>
        <div style="position:absolute;left:188.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$setor[3].'</span></div>
        <div style="position:absolute;left:188.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$setor[4].'</span></div>
        <div style="position:absolute;left:188.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$setor[5].'</span></div>
        <div style="position:absolute;left:188.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$setor[6].'</span></div>
        <div style="position:absolute;left:188.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$setor[7].'</span></div>
        <div style="position:absolute;left:188.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$setor[8].'</span></div>
        <div style="position:absolute;left:188.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$setor[9].'</span></div>
        <div style="position:absolute;left:188.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$setor[10].'</span></div>
        <div style="position:absolute;left:188.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$setor[11].'</span></div>
        <div style="position:absolute;left:188.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$setor[12].'</span></div>
        <div style="position:absolute;left:188.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$setor[13].'</span></div>
        <div style="position:absolute;left:188.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$setor[14].'</span></div>
        <div style="position:absolute;left:188.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$setor[15].'</span></div>
        <div style="position:absolute;left:188.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$setor[16].'</span></div>
        <div style="position:absolute;left:188.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$setor[17].'</span></div>
        <div style="position:absolute;left:188.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$setor[18].'</span></div>
        <div style="position:absolute;left:188.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$setor[19].'</span></div>

        <div style="position:absolute;left:322.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$atividade[0].'</span></div>
        <div style="position:absolute;left:322.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$atividade[1].'</span></div>
        <div style="position:absolute;left:322.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$atividade[2].'</span></div>
        <div style="position:absolute;left:322.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$atividade[3].'</span></div>
        <div style="position:absolute;left:322.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$atividade[4].'</span></div>
        <div style="position:absolute;left:322.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$atividade[5].'</span></div>
        <div style="position:absolute;left:322.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$atividade[6].'</span></div>
        <div style="position:absolute;left:322.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$atividade[7].'</span></div>
        <div style="position:absolute;left:322.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$atividade[8].'</span></div>
        <div style="position:absolute;left:322.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$atividade[9].'</span></div>
        <div style="position:absolute;left:322.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$atividade[10].'</span></div>
        <div style="position:absolute;left:322.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$atividade[11].'</span></div>
        <div style="position:absolute;left:322.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$atividade[12].'</span></div>
        <div style="position:absolute;left:322.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$atividade[13].'</span></div>
        <div style="position:absolute;left:322.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$atividade[14].'</span></div>
        <div style="position:absolute;left:322.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$atividade[15].'</span></div>
        <div style="position:absolute;left:322.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$atividade[16].'</span></div>
        <div style="position:absolute;left:322.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$atividade[17].'</span></div>
        <div style="position:absolute;left:322.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$atividade[18].'</span></div>
        <div style="position:absolute;left:322.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$atividade[19].'</span></div>

        <div style="position:absolute;left:43.50px;top:715.80px" class="cls_008"><span class="cls_008">TOTAL DE</span></div>
        <div style="position:absolute;left:50.70px;top:726.00px" class="cls_008"><span class="cls_008">HORAS</span></div>
        <div style="position:absolute;left:226.80px;top:753.40px" class="cls_008"><span class="cls_008">Data:</span><span class="cls_007"> ______/______/__________</span></div>
        <div style="position:absolute;left:150.30px;top:784.80px" class="cls_007"><span class="cls_007">___________________________________________________________</span></div>
        <div style="position:absolute;left:204.00px;top:796.30px" class="cls_008"><span class="cls_008">Assinatura do(a) Supervisor(a) Responsável</span></div>
    </div>';

for($i = 1; $i <= $qtdPaginas; $i++) {
    $string = $string . 
    '<h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
    <div style="position:absolute;left:0px;top:0px">
        <img src="HTML/frequenciaEstagio/background1.jpg"
            width=595 height=842></div>
    <div style="position:absolute;left:244.90px;top:93.90px" class="cls_003"><span class="cls_003">MINISTÉRIO DA
            EDUCAÇÃO</span></div>
    <div style="position:absolute;left:182.30px;top:103.10px" class="cls_003"><span class="cls_003">SECRETARIA DE
            EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
    <div style="position:absolute;left:71.80px;top:112.30px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL
            DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
    <div style="position:absolute;left:124.60px;top:121.40px" class="cls_004"><span class="cls_004">Avenida Dirce
            Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
    <div style="position:absolute;left:168.80px;top:131.70px" class="cls_004"><span class="cls_004">Fone: (35)
            3713-5120 / (35) 3722-0598 / </span><A
            HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </span></div>
    <div style="position:absolute;left:206.40px;top:148.80px" class="cls_006"><span class="cls_006">FREQUÊNCIA DE
            ESTÁGIO</span></div>
    <div style="position:absolute;left:470.50px;top:162.60px" class="cls_006"><span class="cls_006">FOLHA Nº </span><b>'.($i+1).'</b></div>
    <div style="position:absolute;left:25.40px;top:186.20px" class="cls_007"><span class="cls_007">Nome do(a)
            Estagiário(a): </span><b>'.$nomeAluno.'</b></div>
    <div style="position:absolute;left:25.40px;top:210.20px" class="cls_007"><span class="cls_007">Curso:</span><br/><b>'.$cursoAluno.'</b></div>
    <div style="position:absolute;left:288.80px;top:210.20px" class="cls_007"><span class="cls_007">Módulo/Ano:</span><br/><b>'.$periodoAnoAluno.'</b></div>
    <div style="position:absolute;left:362.90px;top:210.20px" class="cls_007"><span class="cls_007">Modalidade:</span><br/><b>'.$modalidadeAluno.'</b></div>
    <div style="position:absolute;left:25.40px;top:239.90px" class="cls_007"><span class="cls_007">Empresa: </span><b>'.$nomeEmpresa.'</b></div>
    <div style="position:absolute;left:288.80px;top:239.90px" class="cls_007"><span class="cls_007">Período do estágio: </span><b>'.$dataInicialEstagio.'</b> a <b>'.$dataFinalEstagio.'</b></div>
    <div style="position:absolute;left:77.90px;top:281.60px" class="cls_008"><span class="cls_008">Presença</span></div>
    <div style="position:absolute;left:237.00px;top:291.40px" class="cls_008"><span class="cls_008">Setor</span></div>
    <div style="position:absolute;left:393.90px;top:291.40px" class="cls_008"><span class="cls_008">Atividade desenvolvida</span></div>
    <div style="position:absolute;left:56.00px;top:301.50px" class="cls_008"><span class="cls_008">Data</span></div>

    <div style="position:absolute;left:43.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[0+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[1+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[2+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[3+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[4+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[5+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[6+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[7+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[8+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[9+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[10+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[11+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[12+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[13+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[14+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[15+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[16+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[17+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[18+(20*($i))].'</span></div>
    <div style="position:absolute;left:43.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$dataEstagio[19+(20*($i))].'</span></div>

    <div style="position:absolute;left:138.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[0+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[1+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[2+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[3+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[4+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[5+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[6+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[7+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[8+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[9+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[10+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[11+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[12+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[13+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[14+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[15+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[16+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[17+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[18+(20*($i))].'</span></div>
    <div style="position:absolute;left:138.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$cargaHoraria[19+(20*($i))].'</span></div>

    <div style="position:absolute;left:188.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$setor[0+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$setor[1+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$setor[2+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$setor[3+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$setor[4+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$setor[5+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$setor[6+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$setor[7+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$setor[8+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$setor[9+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$setor[10+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$setor[11+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$setor[12+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$setor[13+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$setor[14+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$setor[15+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$setor[16+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$setor[17+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$setor[18+(20*($i))].'</span></div>
    <div style="position:absolute;left:188.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$setor[19+(20*($i))].'</span></div>

    <div style="position:absolute;left:322.00px;top:322.00px" class="cls_008"><span class="cls_008">'.$atividade[0+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:342.00px" class="cls_008"><span class="cls_008">'.$atividade[1+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:361.00px" class="cls_008"><span class="cls_008">'.$atividade[2+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:381.00px" class="cls_008"><span class="cls_008">'.$atividade[3+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:400.00px" class="cls_008"><span class="cls_008">'.$atividade[4+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:420.00px" class="cls_008"><span class="cls_008">'.$atividade[5+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:440.00px" class="cls_008"><span class="cls_008">'.$atividade[6+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:460.00px" class="cls_008"><span class="cls_008">'.$atividade[7+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:480.00px" class="cls_008"><span class="cls_008">'.$atividade[8+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:500.00px" class="cls_008"><span class="cls_008">'.$atividade[9+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:519.00px" class="cls_008"><span class="cls_008">'.$atividade[10+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:539.00px" class="cls_008"><span class="cls_008">'.$atividade[11+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:559.00px" class="cls_008"><span class="cls_008">'.$atividade[12+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:579.00px" class="cls_008"><span class="cls_008">'.$atividade[13+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:599.00px" class="cls_008"><span class="cls_008">'.$atividade[14+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:618.00px" class="cls_008"><span class="cls_008">'.$atividade[15+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:638.00px" class="cls_008"><span class="cls_008">'.$atividade[16+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:658.00px" class="cls_008"><span class="cls_008">'.$atividade[17+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:678.00px" class="cls_008"><span class="cls_008">'.$atividade[18+(20*($i))].'</span></div>
    <div style="position:absolute;left:322.00px;top:698.00px" class="cls_008"><span class="cls_008">'.$atividade[19+(20*($i))].'</span></div>


    <div style="position:absolute;left:119.50px;top:301.50px" class="cls_008"><span class="cls_008">Carga horária</span></div>
    <div style="position:absolute;left:43.50px;top:715.80px" class="cls_008"><span class="cls_008">TOTAL DE</span></div>
    <div style="position:absolute;left:50.70px;top:726.00px" class="cls_008"><span class="cls_008">HORAS</span></div>
    <div style="position:absolute;left:226.80px;top:753.40px" class="cls_008"><span class="cls_008">Data:</span><span class="cls_007"> ______/______/__________</span></div>
    <div style="position:absolute;left:150.30px;top:784.80px" class="cls_007"><span class="cls_007">___________________________________________________________</span></div>
    <div style="position:absolute;left:204.00px;top:796.30px" class="cls_008"><span class="cls_008">Assinatura do(a) Supervisor(a) Responsável</span></div>
</div>';
}

$string = $string . '</body></html>';

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

<script type="text/javascript" src="js/gerarFrequenciaEstagio.js"></script>
