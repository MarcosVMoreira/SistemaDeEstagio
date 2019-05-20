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
        $moduloPeriodo = $resultado["periodoAno"];
        $modalide = $resultado["modalidade"];
        $idEmpresa = $resultado["idEmpresa"];
        $idEstagio = $resultado["idEstagio"];
        $idSupervisor = $resultado["idSupervisor"];
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
        $enderecoEmpresa = $resultado["endereco"];
        $numeroEmpresa = $resultado["numero"];
        $bairroEmpresa = $resultado["bairro"];
        $cepEmpresa = $resultado["cep"];
        $telefoneEmpresa = $resultado["telefone"];
        $emailEmpresa = $resultado["email"];
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
        $dataInicioAno = $resultado["dataInicial"];
        $dataInicio = date("d/m/Y", strtotime($dataInicioAno));
        $dataFimAno = $resultado["dataFinal"];
        $dataFim = date("d/m/Y", strtotime($dataFimAno));
    }
}

$query = "SELECT * FROM supervisor WHERE idSupervisor = $idSupervisor";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeSupervisor = $resultado["nome"];
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

        span.cls_010 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }

        div.cls_010 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
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

        span.cls_007 {
            font-family: Times, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_007 {
            font-family: Times, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_009 {
            font-family: Times, serif;
            font-size: 9.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_009 {
            font-family: Times, serif;
            font-size: 9.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        -->

    </style>
    <script type="text/javascript" src="HTML/fichaAvaliacao/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/fichaAvaliacao/background1.jpg" width=595 height=841></div>
        <div style="position:absolute;left:244.80px;top:91.00px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:182.16px;top:100.24px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:71.64px;top:109.36px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:124.44px;top:118.48px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:169.92px;top:128.92px" class="cls_010"><span class="cls_010">Fone: (35) 3713-5120 / (35) 3722-0598 / </span><A HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </span></div>
        <div style="position:absolute;left:137.28px;top:166.60px" class="cls_006"><span class="cls_006">FICHA DE AVALIAÇÃO DO ESTÁGIO SUPERVISIONADO</span></div>
        <div style="position:absolute;left:45.48px;top:211.24px" class="cls_002"><span class="cls_002">Nome do(a) Aluno(a):</span> <br/><b>'.$nomeAluno.'</b></div>
        <div style="position:absolute;left:45.48px;top:242.08px" class="cls_002"><span class="cls_002">Curso:</span><br/><b>'.$cursoAluno.'</b></div>
        <div style="position:absolute;left:249.49px;top:242.08px" class="cls_002"><span class="cls_002">Módulo/Ano:</span><br/><b>'.$moduloPeriodo.'</b></div>
        <div style="position:absolute;left:322.89px;top:242.08px" class="cls_002"><span class="cls_002">Modalidade:</span><br/><b>'.$modalide.'</b></div>
        <div style="position:absolute;left:45.48px;top:273.16px" class="cls_002"><span class="cls_002">Período do Estágio:</span></div>
        <div style="position:absolute;left:135.62px;top:284.68px" class="cls_002"><span class="cls_002"><b>'.$dataInicio.'</b> a <b>'.$dataFim.'</b></span></div>
        <div style="position:absolute;left:45.48px;top:304.24px" class="cls_002"><span class="cls_002">Empresa:</span><br/><b>'.$nomeEmpresa.'</b></div>
        <div style="position:absolute;left:45.48px;top:335.32px" class="cls_002"><span class="cls_002">Endereço:</span><br/><b>'.$enderecoEmpresa.'</b></div>
        <div style="position:absolute;left:322.96px;top:335.32px" class="cls_002"><span class="cls_002">Nº:</span><br/><b>'.$numeroEmpresa.'</b></div>
        <div style="position:absolute;left:45.48px;top:366.40px" class="cls_002"><span class="cls_002">Bairro:</span><br/><b>'.$bairroEmpresa.'</b></div>
        <div style="position:absolute;left:322.92px;top:366.40px" class="cls_002"><span class="cls_002">Cidade:/UF</span><br/><b>'.$cidadeEmpresa.'</b></div>
        <div style="position:absolute;left:45.48px;top:397.60px" class="cls_002"><span class="cls_002">CEP:</span><br/><b>'.$cepEmpresa.'</b></div>
        <div style="position:absolute;left:224.63px;top:397.60px" class="cls_002"><span class="cls_002">Telefone:</span><br/><b>'.$telefoneEmpresa.'</b></div>
        <div style="position:absolute;left:322.91px;top:397.60px" class="cls_002"><span class="cls_002">E-mail:</span><br/><b>'.$emailEmpresa.'</b></div>
        <div style="position:absolute;left:45.48px;top:428.68px" class="cls_002"><span class="cls_002">Área em foi desenvolvido o estágio:</span><br/><b>'.$area.'</b></div>
        <div style="position:absolute;left:45.48px;top:459.76px" class="cls_002"><span class="cls_002">Nome do(a) Supervisor(a):</span><br/><b>'.$nomeSupervisor.'</b></div>
        <div style="position:absolute;left:42.60px;top:513.40px" class="cls_007"><span class="cls_007">Ao(À) Supervisor(a) de Estágio</span></div>
        <div style="position:absolute;left:60.48px;top:556.24px" class="cls_007"><span class="cls_007">Escolha a alternativa que melhor identifique sua opinião e</span></div>
        <div style="position:absolute;left:362.64px;top:556.96px" class="cls_009"><span class="cls_009">Ótimo</span></div>
        <div style="position:absolute;left:413.65px;top:556.96px" class="cls_009"><span class="cls_009">Bom</span></div>
        <div style="position:absolute;left:459.36px;top:556.96px" class="cls_009"><span class="cls_009">Regular</span></div>
        <div style="position:absolute;left:516.59px;top:556.96px" class="cls_009"><span class="cls_009">Fraco</span></div>
        <div style="position:absolute;left:53.28px;top:568.84px" class="cls_007"><span class="cls_007">assinale no espaço correspondente, considerando os aspectos:</span></div>
        <div style="position:absolute;left:126.84px;top:590.68px" class="cls_007"><span class="cls_007">1- Apresentação pessoal</span></div>
        <div style="position:absolute;left:126.84px;top:605.08px" class="cls_007"><span class="cls_007">2- Sociabilidade e desempenho</span></div>
        <div style="position:absolute;left:126.84px;top:619.36px" class="cls_007"><span class="cls_007">3- Organização e método de trabalho</span></div>
        <div style="position:absolute;left:126.84px;top:633.64px" class="cls_007"><span class="cls_007">4- Assiduidade</span></div>
        <div style="position:absolute;left:126.84px;top:647.92px" class="cls_007"><span class="cls_007">5- Iniciativa</span></div>
        <div style="position:absolute;left:126.84px;top:662.20px" class="cls_007"><span class="cls_007">6- Criatividade</span></div>
        <div style="position:absolute;left:126.84px;top:676.48px" class="cls_007"><span class="cls_007">7- Capacidade de gerenciamento</span></div>
        <div style="position:absolute;left:126.84px;top:690.76px" class="cls_007"><span class="cls_007">8- Cooperação</span></div>
        <div style="position:absolute;left:126.84px;top:705.16px" class="cls_007"><span class="cls_007">9- Responsabilidade</span></div>
        <div style="position:absolute;left:51.84px;top:715.84px" class="cls_007"><span class="cls_007">Avaliação do</span></div>
        <div style="position:absolute;left:126.84px;top:719.44px" class="cls_007"><span class="cls_007">10- Liderança</span></div>
        <div style="position:absolute;left:64.44px;top:728.56px" class="cls_007"><span class="cls_007">Estágio</span></div>
        <div style="position:absolute;left:126.84px;top:733.72px" class="cls_007"><span class="cls_007">11- Nível de conhecimento</span></div>
        <div style="position:absolute;left:126.84px;top:748.00px" class="cls_007"><span class="cls_007">12- Comprometimento nas tarefas</span></div>
        <div style="position:absolute;left:126.84px;top:762.28px" class="cls_007"><span class="cls_007">13- Relacionamento na empresa</span></div>
        <div style="position:absolute;left:126.84px;top:776.56px" class="cls_007"><span class="cls_007">14- Aproveitamento no estágio</span></div>
    </div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/fichaAvaliacao/background2.jpg" width=595 height=841></div>
        <div style="position:absolute;left:244.80px;top:91.00px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:182.16px;top:100.24px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:71.64px;top:109.36px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
        <div style="position:absolute;left:124.44px;top:118.48px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
        <div style="position:absolute;left:169.92px;top:128.92px" class="cls_010"><span class="cls_010">Fone: (35) 3713-5120 / (35) 3722-0598 / </span><A HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </span></div>
        <div style="position:absolute;left:42.60px;top:194.20px" class="cls_007"><span class="cls_007">Comentário do(a) Supervisor de Estágio</span></div>
        <div style="position:absolute;left:106.08px;top:539.56px" class="cls_006"><span class="cls_006">Poços de Caldas, _________ de _____________________ de _____________ .</span></div>
        <div style="position:absolute;left:45.09px;top:608.80px" class="cls_002"><span class="cls_002">______________________________________</span></div>
        <div style="position:absolute;left:355.16px;top:608.80px" class="cls_002"><span class="cls_002">_____________________________________</span></div>
        <div style="position:absolute;left:57.14px;top:620.32px" class="cls_002"><span class="cls_002">Assinatura do(a) Supervisor(a) de Estágio</span></div>
        <div style="position:absolute;left:361.77px;top:620.32px" class="cls_002"><span class="cls_002">Assinatura do(a) Professor(a) Orientador(a)</span></div>
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