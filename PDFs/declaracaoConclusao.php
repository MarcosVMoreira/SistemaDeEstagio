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
        $cidadeEmpresa = $resultado["cidade"];
        $estadoEmpresa = $resultado["uf"];
    }
}

$query = "SELECT * FROM estagio WHERE idEstagio = $idEstagio";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $area = $resultado["areasConhecimento"];
        $cargaHoraria = $resultado["cargaHorariaTotal"];
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

        span.cls_011 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 128);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }

        div.cls_011 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 128);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_012 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }

        div.cls_012 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 10);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_007 {
            font-family: Times, serif;
            font-size: 16.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_007 {
            font-family: Times, serif;
            font-size: 16.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_006 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_006 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_010 {
            font-family: Times, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_010 {
            font-family: Times, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        -->

    </style>
    
    <script type="text/javascript" src="HTML/declaracaoConclusao/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/declaracaoConclusao/background1.jpg" width=595 height=841></div>
        <div style="position:absolute;left:244.44px;top:142.84px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:181.20px;top:151.96px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:70.68px;top:161.20px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:123.84px;top:170.32px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:178.44px;top:180.64px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 / </span><span class="cls_011">https://portal.pcs.ifsuldeminas.edu.br</span><span class="cls_012">/</span></div>
        <div style="position:absolute;left:122.40px;top:264.52px;" class="cls_007"><span class="cls_007">DECLARAÇÃO DE CONCLUSÃO DE ESTÁGIO</span></div>
        <div align="justify" style="position:absolute;left:56.64px;top:341.80px;right:56.64px;" class="cls_006"><span class="cls_006">Declaramos que o(a) aluno(a) <b>'.$nomeAluno.'</b> de matrícula número <b>'.$raAluno.',</b> cursando <b>'.$cursoAluno.'</b> no Instituto Federal do Sul de Minas Gerais Campus Poços de Caldas, realizou estágio obrigatório na empresa <b>'.$nomeEmpresa.',</b> na cidade de <b>'.$cidadeEmpresa.',</b> estado de <b>'.$estadoEmpresa.',</b> na área de <b>'.$area.',</b> com a carga horária de <b>'.$cargaHoraria.'</b> horas.</span></div>
        <div style="position:absolute;left:189.00px;top:521.20px" class="cls_006"><span class="cls_006">_________________________, _______de _____________ de_______.</span></div>
        <div style="position:absolute;left:154.56px;top:600.52px" class="cls_010"><span class="cls_010">____________________________________________________</span></div>
        <div style="position:absolute;left:217.20px;top:625.84px" class="cls_010"><span class="cls_010">Assinatura do Supervisor do Estágio</span></div>
        <div style="position:absolute;left:251.16px;top:651.16px" class="cls_010"><span class="cls_010">Carimbo da Empresa</span></div>
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