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
        $bairroAluno = $resultado["bairro"];
        $telefoneAluno = $resultado["telefoneCelular"];
        $estadoAluno = $resultado["uf"];
        $enderecoAluno = $resultado["endereco"];
        $cepAluno = $resultado["cep"];
        $cidadeAluno = $resultado["cidade"];
        $cpfAluno = $resultado["cpf"];
        $rgAluno = $resultado["rg"];
        $nascimentoAlunoAno = $resultado["dataNascimento"];
        $nascimentoAluno = date("d/m/Y", strtotime($nascimentoAlunoAno));
        $emailAluno = $resultado["email"];
        $cursoAluno = $resultado["curso"];
        $idOrientador = $resultado["idOrientador"];
        $idEmpresa = $resultado["idEmpresa"];
        $idEstagio = $resultado["idEstagio"];
        $idSupervisor = $resultado["idSupervisor"];
    }
}

$query = "SELECT * FROM orientador WHERE idOrientador = $idOrientador";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $nomeOrientador = $resultado["nome"];
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

$query = "SELECT * FROM supervisor WHERE idSupervisor = $idSupervisor";
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

$query = "SELECT * FROM estagio WHERE idEstagio = $idEstagio";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();

    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: ../login.php");
    } else {
        $dataInicioAno = $resultado["dataInicial"];
        $dataInicio = date("d/m/Y", strtotime($dataInicioAno));
        $dataFimAno = $resultado["dataFinal"];
        $dataFim = date("d/m/Y", strtotime($dataFimAno));
        $numeroApolice = $resultado["numeroApolice"];
        $nomeSeguradora = $resultado["nomeSeguradora"];
        $valorBolsa = $resultado["valorBolsa"];
        $beneficios = $resultado["beneficios"];
        $horasSegunda = $resultado["segunda"];
        $horasTerca = $resultado["terca"];
        $horasQuarta = $resultado["quarta"];
        $horasQuinta = $resultado["quinta"];
        $horasSexta = $resultado["sexta"];
        $horasSabado = $resultado["sabado"];

        if($horasSegunda != "")
            $diasTrabalhados = "Segunda (" . $horasSegunda . "h)";
        if($horasTerca != "") {
            if(empty($diasTrabalhados))
                $diasTrabalhados = "Terça (" . $horasTerca . "h)";
            else
                $diasTrabalhados = $diasTrabalhados . ", Terça (" . $horasTerca . "h)";
        }
        if($horasQuarta != "") {
            if(empty($diasTrabalhados))
                $diasTrabalhados = "Quarta (" . $horasQuarta . "h)";
            else
                $diasTrabalhados = $diasTrabalhados . ", Quarta (" . $horasQuarta . "h)";
        }
        if($horasQuinta != "") {
            if(empty($diasTrabalhados))
                $diasTrabalhados = "Quinta (" . $horasQuinta . "h)";
            else
                $diasTrabalhados = $diasTrabalhados . ", Quinta (" . $horasQuinta . "h)";
        }
        if($horasSexta != "") {
            if(empty($diasTrabalhados))
                $diasTrabalhados = "Sexta (" . $horasSexta . "h)";
            else
                $diasTrabalhados = $diasTrabalhados . ", Sexta (" . $horasSexta . "h)";
        }
        if($horasSabado != "") {
            if(empty($diasTrabalhados))
                $diasTrabalhados = "Sábado (" . $horasSabado . "h)";
            else
                $diasTrabalhados = $diasTrabalhados . ", Sábado (" . $horasSabado . "h)";
        }
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

        span.cls_004 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_004 {
            font-family: Times, serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_006 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }

        div.cls_006 {
            font-family: Times, serif;
            font-size: 9.1px;
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

        span.cls_005 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(128, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_005 {
            font-family: Times, serif;
            font-size: 9.1px;
            color: rgb(128, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        -->

    </style>
    <script type="text/javascript" src="HTML/termoNaoObrigatorio/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/termoNaoObrigatorio/background1.jpg" width=595 height=841></div>
        <div style="position:absolute;left:237.12px;top:107.68px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
        <div style="position:absolute;left:161.88px;top:118.00px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
        <div style="position:absolute;left:63.00px;top:128.32px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS- CAMPUS POÇOS</span></div>
        <div style="position:absolute;left:99.72px;top:138.76px" class="cls_003"><span class="cls_003">Avenida Dirce Pereira Rosa, n° 300 - Jardim Esperança - CEP: 37713-100 - Poços de Caldas(MG)</span></div>
        <div style="position:absolute;left:182.28px;top:149.08px" class="cls_003"><span class="cls_003">Tel: (35)3697-4950 /</span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </div>
        <div style="position:absolute;left:119.52px;top:180.04px" class="cls_004"><span class="cls_004">TERMO DE COMPROMISSO DE ESTÁGIO NÃO OBRIGATÓRIO</span></div>
        <div style="position:absolute;left:115.54px;top:193.96px" class="cls_003"><span class="cls_003">(Instrumento jurídico de acordo com a Lei Federal nº 11.788 de 25 de setembro de 2008)</span></div>
        <div style="position:absolute;left:261.60px;top:224.92px" class="cls_003"><span class="cls_003">INTERVENIENTE</span></div>
        <div style="position:absolute;left:42.48px;top:245.68px" class="cls_003"><span class="cls_003">Interveniente: Instituto Federal do Sul de Minas Gerais</span></div>
        <div style="position:absolute;left:42.48px;top:261.16px" class="cls_003"><span class="cls_003">CNPJ: 10.648.539/0001-05</span></div>
        <div style="position:absolute;left:42.48px;top:276.76px" class="cls_003"><span class="cls_003">Endereço: Rua Ciomara Amaral de Paula, 167</span></div>
        <div style="position:absolute;left:329.64px;top:276.76px" class="cls_003"><span class="cls_003">Bairro: Medicina</span></div>
        <div style="position:absolute;left:42.48px;top:292.24px" class="cls_003"><span class="cls_003">CEP: 37550-000</span></div>
        <div style="position:absolute;left:329.63px;top:292.24px" class="cls_003"><span class="cls_003">Cidade: Pouso Alegre</span></div>
        <div style="position:absolute;left:463.55px;top:292.24px" class="cls_003"><span class="cls_003">Fone: (35) 3449-6150</span></div>
        <div style="position:absolute;left:42.48px;top:307.72px" class="cls_003"><span class="cls_003">Campus Poços de Caldas</span></div>
        <div style="position:absolute;left:329.17px;top:306.76px" class="cls_003"><span class="cls_003">CNPJ 10.648.539/0009-62</span></div>
        <div style="position:absolute;left:42.48px;top:323.32px" class="cls_003"><span class="cls_003">Endereço: Avenida Dirce Pereira Rosa, 300</span></div>
        <div style="position:absolute;left:330.51px;top:323.32px" class="cls_003"><span class="cls_003">Bairro: Jardim Esperança</span></div>
        <div style="position:absolute;left:42.48px;top:338.80px" class="cls_003"><span class="cls_003">CEP: 37713-100</span></div>
        <div style="position:absolute;left:330.47px;top:338.80px" class="cls_003"><span class="cls_003">Cidade: Poços de Caldas</span></div>
        <div style="position:absolute;left:463.52px;top:338.80px" class="cls_003"><span class="cls_003">Fone: (35) 3713-5120</span></div>
        <div style="position:absolute;left:42.48px;top:354.28px" class="cls_003"><span class="cls_003">Representada por: Thiago Caproni Tavares</span></div>
        <div style="position:absolute;left:330.50px;top:354.28px" class="cls_003"><span class="cls_003">Cargo: Diretor Geral</span></div>
        <div style="position:absolute;left:266.16px;top:380.20px" class="cls_003"><span class="cls_003">CONCEDENTE</span></div>
        <div style="position:absolute;left:42.48px;top:400.96px" class="cls_003"><span class="cls_003">Nome da Empresa: </span><b>'.$nomeEmpresa.'</b></div>
        <div style="position:absolute;left:42.48px;top:416.44px" class="cls_003"><span class="cls_003">CNPJ: </span><b>'.$cpfCnpjEmpresa.'</b></div>
        <div style="position:absolute;left:42.48px;top:431.92px" class="cls_003"><span class="cls_003">Endereço: </span><b>'.$enderecoEmpresa.'</b></div>
        <div style="position:absolute;left:261.19px;top:431.92px" class="cls_003"><span class="cls_003">Bairro: </span><b>'.$bairroEmpresa.'</b></div>
        <div style="position:absolute;left:366.44px;top:430.96px" class="cls_003"><span class="cls_003">Cidade: </span><b>'.$cidadeEmpresa.' - '.$estadoEmpresa.'</b></div>
        <div style="position:absolute;left:42.48px;top:447.52px" class="cls_003"><span class="cls_003">CEP: </span><b>'.$cepEmpresa.'</b></div>
        <div style="position:absolute;left:366.46px;top:447.52px" class="cls_003"><span class="cls_003">Fone: </span><b>'.$telefoneEmpresa.'</b></div>
        <div style="position:absolute;left:42.48px;top:463.00px" class="cls_003"><span class="cls_003">Representada por: </span><b>'.$representanteEmpresa.'</b></div>
        <div style="position:absolute;left:366.52px;top:463.00px" class="cls_003"><span class="cls_003">Cargo: </span><b>'.$representanteEmpresaCargo.'</b></div>
        <div style="position:absolute;left:42.48px;top:478.48px" class="cls_003"><span class="cls_003">Responsável pela assinatura do TCE: </span><b>'.$nomeTCE.'</b></div>
        <div style="position:absolute;left:366.53px;top:478.48px" class="cls_003"><span class="cls_003">Cargo: </span><b>'.$cargoTCE.'</b></div>
        <div style="position:absolute;left:42.48px;top:494.08px" class="cls_003"><span class="cls_003">Supervisor de Estágio: </span><b>'.$nomeSupervisor.'</b></div>
        <div style="position:absolute;left:366.52px;top:494.08px" class="cls_003"><span class="cls_003">Cargo: </span><b>'.$cargoSupervisor.'</b></div>
        <div style="position:absolute;left:269.64px;top:530.32px" class="cls_003"><span class="cls_003">ESTAGIÁRIO</span></div>
        <div style="position:absolute;left:42.48px;top:540.64px" class="cls_003"><span class="cls_003">Nome: </span><b>'.$nomeAluno.'</b></div>
        <div style="position:absolute;left:42.48px;top:556.12px" class="cls_003"><span class="cls_003">Endereço: </span><b>'.$enderecoAluno.'</b></div>
        <div style="position:absolute;left:350px;top:555.16px" class="cls_003"><span class="cls_003">Bairro: </span><b>'.$bairroAluno.'</b></div>
        <div style="position:absolute;left:42.48px;top:571.72px" class="cls_003"><span class="cls_003">CEP: </span><b>'.$cepAluno.'</b></div>
        <div style="position:absolute;left:350px;top:571.72px" class="cls_003"><span class="cls_003">Cidade: <b>'.$cidadeAluno.' - '.$estadoAluno.'</b></span></div>
        <div style="position:absolute;left:42.48px;top:587.20px" class="cls_003"><span class="cls_003">Regularmente Matriculado no Curso: </span><b>'.$cursoAluno.'</b></div>
        <div style="position:absolute;left:350px;top:587.20px" class="cls_003"><span class="cls_003">Fone: </span><b>'.$telefoneAluno.'</b></div>
        <div style="position:absolute;left:42.48px;top:602.68px" class="cls_003"><span class="cls_003">CPF: </span><b>'.$cpfAluno.'</b></div>
        <div style="position:absolute;left:350px;top:602.68px" class="cls_003"><span class="cls_003">RG: </span><b>'.$rgAluno.'</b></div>
        <div style="position:absolute;left:42.48px;top:618.28px" class="cls_003"><span class="cls_003">Data de Nascimento: </span><b>'.$nascimentoAluno.'</b></div>
        <div style="position:absolute;left:350px;top:618.28px" class="cls_003"><span class="cls_003">E-mail: </span><b>'.$emailAluno.'</b></div>
        <div style="position:absolute;left:77.88px;top:654.28px" class="cls_003"><span class="cls_003">Celebram entre si este TERMO DE COMPROMISO DE ESTÁGIO, ajustando as seguintes cláusulas:</span></div>
        <div style="position:absolute;left:42.48px;top:675.04px" class="cls_006"><span class="cls_006">CLÁUSULA 1ª</span><span class="cls_003"> - Este Termo de Compromisso reger-se-á em pela Lei 11.788/2008, pelas normas de estágio do Instituto</span></div>
        <div style="position:absolute;left:42.48px;top:685.36px" class="cls_003"><span class="cls_003">Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais e pelo Convênio celebrado entre a CONCEDENTE e a</span></div>
        <div style="position:absolute;left:42.48px;top:694.72px" class="cls_003"><span class="cls_003">INTERVENIENTE.</span></div>
        <div style="position:absolute;left:42.48px;top:716.32px" class="cls_006"><span class="cls_006">CLÁUSULA 2ª</span><span class="cls_003"> - O Estágio Não Obrigatório é aquele desenvolvido como atividade opcional, acrescida à carga horária regular,</span></div>
        <div style="position:absolute;left:42.48px;top:726.76px" class="cls_003"><span class="cls_003">nos termos da Lei n° 11.788/08 e da Lei n° 9.394/96, visa ao aprendizado de competências próprias da atividade profissional e</span></div>
        <div style="position:absolute;left:42.48px;top:736.12px" class="cls_003"><span class="cls_003">a contextualização curricular, objetivando o desenvolvimento do educando para a vida cidadã e para o trabalho.</span></div>
        <div style="position:absolute;left:42.48px;right:80px;top:756.76px" class="cls_006">
            <span class="cls_006">CLÁUSULA 3ª</span>
            <span class="cls_003"> - - O estágio terá início em <b>'.$dataInicio.'</b></span>
            <span class="cls_003">e terá seu término em <b>'.$dataFim.'</b></span>
            <span class="cls_003">com atividade(s) no(s) dia(s): <b>'.$diasTrabalhados.'</b> sendo compatível com as atividades escolares e de acordo com o art. 10° da Lei n°11.788/08. </span>
        </div></div>
    <h1 style="page-break-before: always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/termoNaoObrigatorio/background2.jpg" width=595 height=841></div>
        <div style="position:absolute;left:42.48px;top:51.28px" class="cls_003"><span class="cls_003">§ 1º - A jornada de atividade em estágio não poderá ultrapassar os limites fixados pelos incisos I e II, § 1º e 2º § do art. 10 da</span></div>
        <div style="position:absolute;left:42.48px;top:61.72px" class="cls_003"><span class="cls_003">Lei nº 11.788/2008. Podendo ser prorrogado por igual período mediante termo aditivo e entendimento entre as partes, não</span></div>
        <div style="position:absolute;left:42.48px;top:71.08px" class="cls_003"><span class="cls_003">podendo ultrapassar os limites fixados conforme consta no art. 11 da Lei nº 11.788/2008.</span></div>
        <div style="position:absolute;left:42.48px;top:92.68px" class="cls_003"><span class="cls_003">§ 2º - Tendo o estágio a duração igual ou superior a um ano, é assegurado ao ESTAGIÁRIO, período de recesso de 30</span></div>
        <div style="position:absolute;left:42.48px;top:103.12px" class="cls_003"><span class="cls_003">(trinta)dias, a ser gozado preferencialmente durante suas férias escolares, ou se inferior a um ano, o recesso será proporcional.</span></div>
        <div style="position:absolute;left:42.48px;top:120.80px;right:80px;" class="cls_006"><span class="cls_006">CLÁUSULA 4ª</span><span class="cls_003"> - O estagiário será acompanhado pelo(a) professor(a) orientador(a) <b>'.$nomeOrientador.',</b> do IFSULDEMINAS, campus Poços de Caldas e pelo(a) supervisor(a) <b>'.$nomeSupervisor.'</b>, <b>'.$cargoSupervisor.'</b> na empresa <b>'.$nomeEmpresa.'</b> que deverão apor seus vistos nos relatórios de atividades e no relatório de aprovação do ESTAGIÁRIO.</span></div>
        <div style="position:absolute;left:42.48px;top:176.80px" class="cls_006"><span class="cls_006">CLÁUSULA 5ª</span><span class="cls_003">- O ESTAGIÁRIO desenvolverá suas atividades obrigando-se a:</span></div>
        <div style="position:absolute;left:60.48px;top:188.20px" class="cls_003"><span class="cls_003">a)</span></div>
        <div style="position:absolute;left:83.04px;top:188.20px" class="cls_003"><span class="cls_003">Cumprir com empenho e interesse a programação estabelecida no Plano de Atividades;</span></div>
        <div style="position:absolute;left:60.48px;top:198.52px" class="cls_002"><span class="cls_002">b)</span></div>
        <div style="position:absolute;left:83.04px;top:199.48px" class="cls_003"><span class="cls_003">Cumprir as condições fixadas para o Estágio observando as normas de trabalho vigentes na CONCEDENTE,</span></div>
        <div style="position:absolute;left:83.04px;top:208.84px" class="cls_003"><span class="cls_003">preservando o sigilo e a confidencialidade sobre as informações que tenha acesso;</span></div>
        <div style="position:absolute;left:60.48px;top:220.12px" class="cls_003"><span class="cls_003">c)</span></div>
        <div style="position:absolute;left:83.07px;top:220.12px" class="cls_003"><span class="cls_003">Observar a jornada e o horário ajustados para o Estágio;</span></div>
        <div style="position:absolute;left:60.48px;top:230.56px" class="cls_002"><span class="cls_002">d)</span></div>
        <div style="position:absolute;left:83.04px;top:231.52px" class="cls_003"><span class="cls_003">Apresentar documentos comprobatórios da regularidade da sua situação escolar, sempre que solicitado pela</span></div>
        <div style="position:absolute;left:83.04px;top:240.88px" class="cls_003"><span class="cls_003">CONCEDENTE;</span></div>
        <div style="position:absolute;left:60.48px;top:252.16px" class="cls_002"><span class="cls_002">e) </span><span class="cls_003"> Manter rigorosamente atualizados seus dados cadastrais e escolares, junto à CONCEDENTE;</span></div>
        <div style="position:absolute;left:60.48px;top:263.44px" class="cls_003"><span class="cls_003">f)</span></div>
        <div style="position:absolute;left:83.05px;top:263.44px" class="cls_003"><span class="cls_003">Informar de imediato, qualquer alteração na sua situação escolar, tais como: trancamento de matrícula, abandono,</span></div>
        <div style="position:absolute;left:83.04px;top:273.76px" class="cls_003"><span class="cls_003">conclusão de curso ou transferência de Instituição de Ensino;</span></div>
        <div style="position:absolute;left:60.48px;top:284.08px" class="cls_002"><span class="cls_002">g) </span><span class="cls_003"> Vistar os Relatórios de Atividades elaborados pela CONCEDENTE com periodicidade mínima de 06 (seis) meses e,</span></div>
        <div style="position:absolute;left:83.04px;top:294.40px" class="cls_003"><span class="cls_003">inclusive, sempre que solicitado;</span></div>
        <div style="position:absolute;left:60.48px;top:305.80px" class="cls_002"><span class="cls_002">h) </span><span class="cls_003"> Responder pelas perdas e danos eventualmente causados por inobservância das normas internas da</span></div>
        <div style="position:absolute;left:83.04px;top:316.12px" class="cls_003"><span class="cls_003">CONCEDENTE, ou provocados por negligência ou imprudência.</span></div>
        <div style="position:absolute;left:60.48px;top:327.40px" class="cls_002"><span class="cls_002">i)</span></div>
        <div style="position:absolute;left:83.04px;top:327.40px" class="cls_003"><span class="cls_003">Observar o regulamento disciplinar da CONCEDENTE e a atender as orientações recebidas na mesma.</span></div>
        <div style="position:absolute;left:60.48px;top:338.68px" class="cls_003"><span class="cls_003">j)</span></div>
        <div style="position:absolute;left:83.01px;top:338.68px" class="cls_003"><span class="cls_003">É assegurada ao estagiário nos períodos de avaliação da aprendizagem pelas instituições de ensino, carga horária</span></div>
        <div style="position:absolute;left:83.04px;top:349.00px" class="cls_003"><span class="cls_003">reduzida pelo menos à metade mediante comprovação emitida pela Coordenação do Curso</span></div>
        <div style="position:absolute;left:42.48px;top:368.80px" class="cls_006"><span class="cls_006">CLÁUSULA 6ª </span><span class="cls_003">- Cabe à CONCEDENTE:</span></div>
        <div style="position:absolute;left:60.48px;top:380.08px" class="cls_002"><span class="cls_002">a) </span><span class="cls_003"> Conceder o Estágio e proporcionar ao ESTAGIÁRIO condições propícias para o exercício das atividades práticas</span></div>
        <div style="position:absolute;left:82.20px;top:390.40px" class="cls_003"><span class="cls_003">compatíveis com o seu Plano de Atividades;</span></div>
        <div style="position:absolute;left:60.48px;top:401.68px" class="cls_002"><span class="cls_002">b) </span><span class="cls_003"> Solicitar ao ESTAGIÁRIO, a qualquer tempo, documentos comprobatórios da regularidade da situação escolar, uma</span></div>
        <div style="position:absolute;left:82.20px;top:412.96px" class="cls_003"><span class="cls_003">vez que trancamento de matrícula, abandono, conclusão de curso ou transferência de Instituição de Ensino</span></div>
        <div style="position:absolute;left:82.20px;top:422.44px" class="cls_003"><span class="cls_003">constituem motivos de imediata rescisão;</span></div>
        <div style="position:absolute;left:60.48px;top:433.72px" class="cls_002"><span class="cls_002">c) </span><span class="cls_003"> Elaborar e encaminhar para ao IFSULDEMINAS CAMPUS POÇOS DE CALDAS o Relatório de Atividades, assinado</span></div>
        <div style="position:absolute;left:82.20px;top:444.04px" class="cls_003"><span class="cls_003">pelo seu Supervisor, com periodicidade mínima de 06 (seis) meses com vista obrigatória do ESTAGIÁRIO;</span></div>
        <div style="position:absolute;left:60.48px;top:455.32px" class="cls_003"><span class="cls_003">d) Entregar, por ocasião do desligamento, Termo de Realização do Estágio com indicação resumida das atividades</span></div>
        <div style="position:absolute;left:82.20px;top:465.64px" class="cls_003"><span class="cls_003">desenvolvidas, dos períodos e da avaliação de desempenho;</span></div>
        <div style="position:absolute;left:60.48px;top:476.08px" class="cls_003"><span class="cls_003">e) Manter em arquivo e à disposição da fiscalização os documentos que comprovem a relação de Estágio;</span></div>
        <div style="position:absolute;left:60.48px;top:486.40px" class="cls_003"><span class="cls_003">f)</span></div>
        <div style="position:absolute;left:82.24px;top:486.40px" class="cls_003"><span class="cls_003">Permitir o início das atividades de Estágio somente após o recebimento deste instrumento assinado pelos partícipes.</span></div>
        <div style="position:absolute;left:60.48px;top:496.72px" class="cls_003"><span class="cls_003">g)</span></div>
        <div style="position:absolute;left:81.16px;top:496.72px" class="cls_003"><span class="cls_003">Implementar e observar a legislação relacionada à saúde e à segurança no trabalho.</span></div>
        <div style="position:absolute;left:42.48px;top:517.48px" class="cls_006"><span class="cls_006">CLÁUSULA 7ª </span><span class="cls_003">- Cabe ao IFSULDEMINAS campus Poços de Caldas indicar, no Plano de Atividades, as condições de</span></div>
        <div style="position:absolute;left:42.48px;top:527.80px" class="cls_003"><span class="cls_003">adequação do estágio à proposta pedagógica do curso, à etapa e modalidade da formação escolar, ao horário e calendário</span></div>
        <div style="position:absolute;left:42.48px;top:537.16px" class="cls_003"><span class="cls_003">escolar;</span></div>
        <div style="position:absolute;left:96.45px;top:548.44px" class="cls_003"><span class="cls_003">Avaliar as instalações da parte concedente do Estágio e sua adequação à formação cultural e profissional do</span></div>
        <div style="position:absolute;left:96.48px;top:558.88px" class="cls_003"><span class="cls_003">aluno;</span></div>
        <div style="position:absolute;left:96.48px;top:568.24px" class="cls_003"><span class="cls_003">Comunicar à CONCEDENTE, no início do período letivo, as datas de realização das avaliações escolares;</span></div>
        <div style="position:absolute;left:96.45px;top:579.52px" class="cls_003"><span class="cls_003">Exigir do aluno a apresentação periódica, em prazo não superior a 06 (seis) meses, de Relatório de Atividades;</span></div>
        <div style="position:absolute;left:96.48px;top:589.84px" class="cls_003"><span class="cls_003">Zelar pelo cumprimento do Termo de Compromisso de Estágio, reorientando o ESTAGIÁRIO para outro local em</span></div>
        <div style="position:absolute;left:96.48px;top:599.32px" class="cls_003"><span class="cls_003">caso de descumprimento de suas normas;</span></div>
        <div style="position:absolute;left:96.45px;top:610.60px" class="cls_003"><span class="cls_003">Avaliar a realização do Estágio do aluno por meio de Instrumentos de Avaliação.</span></div>
        <div style="position:absolute;left:42.48px;top:631.24px" class="cls_006"><span class="cls_006">CLÁUSULA 8ª</span><span class="cls_003">- O estagiário está assegurado contra Acidentes Pessoais, Apólice de Seguros número <b>'.$numeroApolice.'</b></span> da</div>
        <div style="position:absolute;left:42.48px;top:641.68px" class="cls_003"><span class="cls_003">Companhia de Seguros <b>'.$nomeSeguradora.'</b></span> cujo prêmio será de responsabilidade da mesma, em obediência ao disposto no</div>
        <div style="position:absolute;left:42.48px;top:651.04px" class="cls_003"><span class="cls_003">inciso IV do art. 9º da Lei nº. 11.788, de 25 de setembro de 2008.</span></div>
        <div style="position:absolute;left:42.48px;top:682.00px" class="cls_006"><span class="cls_006">CLÁUSULA 9ª </span><span class="cls_003">- O término do Estágio ocorrerá nos seguintes casos:</span></div>
        <div style="position:absolute;left:60.48px;top:693.40px" class="cls_003"><span class="cls_003">a)</span></div>
        <div style="position:absolute;left:83.04px;top:693.40px" class="cls_003"><span class="cls_003">Automaticamente, ao término do período previsto para sua realização;</span></div>
        <div style="position:absolute;left:60.48px;top:703.72px" class="cls_003"><span class="cls_003">b)</span></div>
        <div style="position:absolute;left:83.04px;top:703.72px" class="cls_003"><span class="cls_003">Desistência do Estágio ou rescisão do Termo de Compromisso de Estágio, por decisão voluntária de qualquer dos</span></div>
        <div style="position:absolute;left:83.04px;top:714.04px" class="cls_003"><span class="cls_003">partícipes, mediante comunicação por escrito com antecedência de 05 (cinco) dias;</span></div>
        <div style="position:absolute;left:60.48px;top:724.36px" class="cls_003"><span class="cls_003">c)</span></div>
        <div style="position:absolute;left:83.07px;top:724.36px" class="cls_003"><span class="cls_003">Pelo trancamento da matrícula, abandono, desligamento ou conclusão do curso no IFSULDEMINAS Campus Poços.</span></div>
        <div style="position:absolute;left:60.48px;top:734.80px" class="cls_003"><span class="cls_003">d)</span></div>
        <div style="position:absolute;left:83.04px;top:734.80px" class="cls_003"><span class="cls_003">Pelo descumprimento das condições do presente Termo de Compromisso de Estágio;</span></div>
        <div style="position:absolute;left:42.48px;right:80px;top:755.44px" class="cls_006"><span class="cls_006">CLÁUSULA 10ª</span><span class="cls_003">- O ESTAGIÁRIO receberá uma bolsa no valor de <b>R$'.$valorBolsa.'</b></span> e os seguintes benefícios: <b>'.$beneficios.'</b>. </div>
    </div>
    <h1 style="page-break-before:always;"></h1>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="HTML/termoNaoObrigatorio/background3.jpg" width=595 height=841></div>
        <div style="position:absolute;left:42.48px;top:51.28px" class="cls_006"><span class="cls_006">CLÁUSULA 11ª </span><span class="cls_003">- É assegurado ao estagiário, sempre que o estágio não-obrigatório tenha duração igual ou superior a dois</span></div>
        <div style="position:absolute;left:42.48px;top:61.72px" class="cls_003"><span class="cls_003">semestres, período de recesso de 30(trinta) dias a ser gozado preferencialmente durante as suas férias escolares, sendo</span></div>
        <div style="position:absolute;left:42.48px;top:72.04px" class="cls_003"><span class="cls_003">permitido seu parcelamento em até 3 (três) etapas, portanto os dias de recesso previsto neste artigo serão concedidos de</span></div>
        <div style="position:absolute;left:42.48px;top:81.40px" class="cls_003"><span class="cls_003">maneira proporcional, na hipótese de estágio inferior a dois semestres;</span></div>
        <div style="position:absolute;left:42.48px;top:103.12px" class="cls_006"><span class="cls_006">CLÁUSULA 12ª</span><span class="cls_003"> - É assegurada ao estagiário nos períodos de avaliação da aprendizagem pelas instituições de ensino, carga</span></div>
        <div style="position:absolute;left:42.48px;top:113.44px" class="cls_003"><span class="cls_003">horária reduzida pelo menos à metade, segundo estipulado no termo de compromisso e mediante comprovação, conforme Art.</span></div>
        <div style="position:absolute;left:42.48px;top:122.80px" class="cls_003"><span class="cls_003">10 § 2º da Lei 11.788 de 25/09/08 e Art. 13 § 3º da ON nº 07 de 30/10/08.</span></div>
        <div style="position:absolute;left:42.48px;top:134.08px" class="cls_003"><span class="cls_003">PARÁGRAFO ÚNICO- A comprovação de que se trata este artigo deve ser entregue no prazo de até 5 dias anterior à</span></div>
        <div style="position:absolute;left:42.48px;top:143.56px" class="cls_003"><span class="cls_003">realização do período de avaliação e deverá ser por escrito e assinada pelo professor responsável/e ou Coordenador de Curso</span></div>
        <div style="position:absolute;left:42.48px;top:165.16px" class="cls_006"><span class="cls_006">CLÁUSULA 13ª </span><span class="cls_003">- O Estágio não cria vínculo empregatício de qualquer natureza, desde que observadas as disposições da Lei</span></div>
        <div style="position:absolute;left:42.48px;top:174.52px" class="cls_003"><span class="cls_003">n° 11.788/08 e do presente Termo de Compromisso de Estágio.</span></div>
        <div style="position:absolute;left:42.48px;top:196.24px" class="cls_006"><span class="cls_006">CLÁUSULA 14ª</span><span class="cls_003"> - A rescisão do presente Termo de Compromisso de Estágio poderá ser feita a qualquer tempo,</span></div>
        <div style="position:absolute;left:42.48px;top:205.60px" class="cls_003"><span class="cls_003">unilateralmente, mediante comunicação por escrito, feita com cinco dias de antecedência.</span></div>
        <div style="position:absolute;left:42.48px;top:227.32px" class="cls_006"><span class="cls_006">CLÁUSULA 15ª</span><span class="cls_003"> - Do Foro - Por força do artigo 109, inciso I, da Constituição Federal, o Foro competente para dirimir eventuais</span></div>
        <div style="position:absolute;left:42.48px;top:237.64px" class="cls_003"><span class="cls_003">controvérsias resultantes do presente Convênio é o da Justiça Federal, Seção de Minas Gerais, Subseção de Pouso Alegre,</span></div>
        <div style="position:absolute;left:42.48px;top:247.00px" class="cls_003"><span class="cls_003">Estado de Minas Gerais.</span></div>
        <div style="position:absolute;left:60.48px;top:279.04px" class="cls_003"><span class="cls_003">E por estarem de inteiro e comum acordo com as condições e com o texto deste Termo de Compromisso, as partes o</span></div>
        <div style="position:absolute;left:42.48px;top:289.36px" class="cls_003"><span class="cls_003">assinam em 3 (três) vias de igual teor, cabendo a primeira via a Unidade Concedente, a segunda via ao estagiário e a terceira</span></div>
        <div style="position:absolute;left:42.48px;top:299.68px" class="cls_003"><span class="cls_003">via a Instituição de Ensino.</span></div>
        <div style="position:absolute;left:42.48px;top:361.84px" class="cls_003"><span class="cls_003">_______________________________________</span></div>
        <div style="position:absolute;left:327.82px;top:361.84px" class="cls_003"><span class="cls_003">________________________________________</span></div>
        <div style="position:absolute;left:370.22px;top:372.16px" class="cls_003"><span class="cls_003">Responsável pela assinatura do TCE</span></div>
        <div style="position:absolute;left:100.02px;top:382.48px" class="cls_003"><span class="cls_003">Estagiário</span></div>
        <div style="position:absolute;left:411.11px;top:382.48px" class="cls_003"><span class="cls_003">Cargo</span></div>
        <div style="position:absolute;left:405.06px;top:392.80px" class="cls_003"><span class="cls_003">Empresa</span></div>
        <div style="position:absolute;left:215.04px;top:434.20px" class="cls_003"><span class="cls_003">_________________________________</span></div>
        <div style="position:absolute;left:252.36px;top:454.96px" class="cls_003"><span class="cls_003">Professor Orientador</span></div>
        <div style="position:absolute;left:57.36px;top:506.68px" class="cls_003"><span class="cls_003">____________________________________</span></div>
        <div style="position:absolute;left:352.66px;top:506.68px" class="cls_003"><span class="cls_003">_____________________________________</span></div>
        <div style="position:absolute;left:105.13px;top:527.44px" class="cls_003"><span class="cls_003">Coordenadora de Extensão</span></div>
        <div style="position:absolute;left:417.26px;top:527.44px" class="cls_003"><span class="cls_003">Diretor IFSULDEMINAS</span></div>
        <div style="position:absolute;left:415.08px;top:537.76px" class="cls_003"><span class="cls_003">Campus Poços de Caldas</span></div>
        <div style="position:absolute;left:155.88px;top:599.80px" class="cls_003"><span class="cls_003">Poços de Caldas, .............. de ......................................... de ..........................</span></div>
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