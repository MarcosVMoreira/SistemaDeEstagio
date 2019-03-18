<?php

include_once("conexao.php");

$query = "SELECT * FROM alunos";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: login.php");
    } else {
        $rgAluno = $resultado["rg"];
        $cpfAluno = $resultado["cpf"];
        $nomeAluno = $resultado["nome"];
        $cidadeAluno = $resultado["cidade"];
        $ufAluno = $resultado["uf"];
        $cepAluno = $resultado["cep"];
        $enderecoAluno = $resultado["endereco"];
        $bairroAluno = $resultado["bairro"];
        $numeroAluno = $resultado["numero"];
        $cursoAluno = $resultado["curso"];
        $raAluno = $resultado["ra"];
        $telefoneFixoAluno = $resultado["telefoneFixo"];
        $telefoneCelularAluno = $resultado["telefoneCelular"];
        $emailAluno = $resultado["email"];
        $dataNascimentoAluno = $resultado["dataNascimento"];
        $tipoEstagio = $resultado["tipoEstagio"];
        $nomeSeguradora = $resultado["nomeSeguradora"];
        $valorBolsa = $resultado["valorBolsa"];
        $beneficios = $resultado["beneficios"];
        $numeroApoliceSeguros = $resultado["numeroApolicesSeguros"];
        $periodoAno = $resultado["periodoAno"];
    }
}

$query = "SELECT * FROM concedentes";
if ($result = $conexao->query($query)) {
    $resultado = $result->fetch_assoc();
    
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
        header("Location: login.php");
    } else {
        $cnpjCpfConcedente = $resultado["cnpjCpf"];
        $nomeConcedente = $resultado["nome"];
        $cidadeConcedente = $resultado["cidade"];
        $ufConcedente = $resultado["uf"];
        $cepConcedente = $resultado["cep"];
        $enderecoConcedente = $resultado["endereco"];
        $bairroConcedente = $resultado["bairro"];
        $supervisorNome = $resultado["supervisorNome"];
        $supervisorCargo = $resultado["supervisorCargo"];
        $responsavelTceNome = $resultado["responsavelTceNome"];
        $responsavelTceCargo = $resultado["responsavelTceCargo"];
        $representanteEmpresaNome = $resultado["representanteEmpresaNome"];
        $representanteEmpresaCargo = $resultado["representanteEmpresaCargo"];
        $emailConcedente = $resultado["email"];
        $telefoneConcedente = $resultado["telefone"];
    }
}

$query = "SELECT * FROM estagio";
if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: login.php");
        } else {
            $cargaHorariaDiaria = $resultado["cargaHorariaDiaria"];
            $horarioEstagio = $resultado["horarioEstagio"];
            $dataInicial = $resultado["dataInicial"];
            $dataFinal = $resultado["dataFinal"];
            $diasSemana = $resultado["diasSemana"];
            $cargaHorariaTotal = $resultado["cargaHorariaTotal"];
    }
}   

// reference the Dompdf namespace
use Dompdf\Dompdf;

// include autoloader
require_once 'PDFs/dompdf/autoload.inc.php';


/* Cria a instância */
$dompdf = new DOMPDF();

$string = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_010{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Times,serif;font-size:14.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_005{font-family:Times,serif;font-size:14.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_006{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_011{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_009{font-family:Times,serif;font-size:5.9px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:Times,serif;font-size:5.9px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script src="5639080e-4421-11e9-9d71-0cc47a792c0a_id_5639080e-4421-11e9-9d71-0cc47a792c0a_files/wz_jsgraphics.js" type="text/javascript"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img width="595" height="842" src="PDFs/5639080e-4421-11e9-9d71-0cc47a792c0a_id_5639080e-4421-11e9-9d71-0cc47a792c0a_files/background1.jpg"></div>
<div class="cls_002" style="position:absolute;left:244.90px;top:81.40px"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div class="cls_002" style="position:absolute;left:182.30px;top:90.60px"><span class="cls_002">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div class="cls_002" style="position:absolute;left:71.80px;top:99.80px"><span class="cls_002">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS -  CAMPUS POÇOS DE CALDAS</span></div>
<div class="cls_003" style="position:absolute;left:124.60px;top:108.90px"><span class="cls_003">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div class="cls_003" style="position:absolute;left:177.90px;top:119.20px"><span class="cls_003">Telefone: (35) 3697-4950 /  </span><a href="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</a> </div>
<div class="cls_005" style="position:absolute;left:211.40px;top:145.40px"><span class="cls_005">REQUERIMENTO DE ESTÁGIO</span></div>
<div class="cls_006" style="position:absolute;left:42.60px;top:173.30px"><span class="cls_006">OBSERVAÇÃO</span><span class="cls_007">:  Esse  papel  é  apenas  um  requerimento,  que  após  o  seu  correto  preenchimento,  deverá  ser  entregue  na</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:186.50px"><span class="cls_007">Coordenadoria de Extensão, acompanhada do Plano de Estágio e do Termo de Aceite de Professor Orientador, devidamente</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:199.80px"><span class="cls_007">assinado, para a  elaboração  do Termo  de Compromisso de  Estágio.  O início do estágio  só poderá  ocorrer  após a devida</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:213.00px"><span class="cls_007">assinatura do Termo de Compromisso por todas as partes (empresa concedente, instituição de ensino e estudante).</span></div>
<div class="cls_006" style="position:absolute;left:42.60px;top:239.50px"><span class="cls_006">Estágio obrigatório</span><span class="cls_007">: é aquele realizado dentro da carga horária exigida pelo Projeto Pedagógico do Curso, que não precisa ser</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:252.80px"><span class="cls_007">remunerado. Para esse tipo de estágio, o IFSULDEMINAS cobre o seguro.</span></div>
<div class="cls_006" style="position:absolute;left:42.60px;top:272.00px"><span class="cls_006">Estágio não-obrigatório</span><span class="cls_007">: é aquele realizado por um período maior (normalmente são seis meses, podendo ser prorrogados por</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:285.30px"><span class="cls_007">mais seis, até o limite de dois anos). Para esse tipo de estágio, o seguro deve ser contratado pela empresa. É necessário o</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:298.50px"><span class="cls_007">pagamento de uma bolsa + vale-transporte. A lei de estágio não define o valor da bolsa, podendo essa definição ficar a cargo da</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:311.80px"><span class="cls_007">empresa. Há cursos que permitem aproveitamento de estágio não-obrigatório como estágio obrigatório. Em caso de dúvidas,</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:325.00px"><span class="cls_007">consultar  a  tabela  disponível  no  link:  </span><a href="https://portal.pcs.ifsuldeminas.edu.br/extensao-menu-campus/estagio-e-emprego/tudo-sobre-estagio">https://portal.pcs.ifsuldeminas.edu.br/extensao-menu-campus/estagio-e-emprego/tudo-</a> </div>
<div class="cls_011" style="position:absolute;left:42.60px;top:338.30px"><span class="cls_011"> </span><a href="https://portal.pcs.ifsuldeminas.edu.br/extensao-menu-campus/estagio-e-emprego/tudo-sobre-estagio">sobre-estagio</a> <span class="cls_007">.</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:357.50px"><span class="cls_007">Em ambos os estágios, a carga horária diária não pode exceder </span><span class="cls_006">06 (seis) horas </span><span class="cls_007">e a carga horária semanal não pode exceder </span><span class="cls_006">30</span></div>
<div class="cls_006" style="position:absolute;left:42.60px;top:370.80px"><span class="cls_006">(trinta) horas</span><span class="cls_007">.</span></div>
<div class="cls_005" style="position:absolute;left:210.70px;top:389.80px"><span class="cls_005">DADOS DA CONCEDENTE</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:432.00px"><span class="cls_003"><b>Nome da empresa/escola em que pretende estagiar:</b></span><br/>'.$nomeConcedente.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:460.40px"><span class="cls_003"><b>CNPJ/CPF:</b></span><br/>'.$cnpjCpfConcedente.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:488.70px"><span class="cls_003"><b>Endereço:</b></span><br/>'.$enderecoConcedente.'</div>
<div class="cls_003" style="position:absolute;left:338.70px;top:488.70px"><span class="cls_003"><b>Bairro:</b></span><br/>'.$bairroConcedente.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:517.10px"><span class="cls_003"><b>CEP:</b></span><br/>'.$cepConcedente.'</div>
<div class="cls_003" style="position:absolute;left:338.70px;top:517.10px"><span class="cls_003"><b>Cidade:</b></span><br/>'.$cidadeConcedente.'</div>
<div class="cls_003" style="position:absolute;left:502.90px;top:517.10px"><span class="cls_003"><b>UF:</b></span><br/>'.$ufConcedente.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:545.40px"><span class="cls_003"><b>Telefone:</b></span><br/>'.$telefoneConcedente.'</div>
<div class="cls_003" style="position:absolute;left:338.70px;top:545.40px"><span class="cls_003"><b>E-mail:</b></span><br/>'.$emailConcedente.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:573.80px"><span class="cls_003"><b>Representante legal da empresa:</b></span><br/>'.$representanteEmpresaNome.'</div>
<div class="cls_003" style="position:absolute;left:338.70px;top:573.80px"><span class="cls_003"><b>Cargo:</b></span><br/>'.$representanteEmpresaCargo.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:602.10px"><span class="cls_003"><b>Responsável pela assinatura do Termo de Compromisso de Estágio (TCE):</b></span><br/>'.$responsavelTceNome.'</div>
<div class="cls_003" style="position:absolute;left:338.70px;top:602.10px"><span class="cls_003"><b>Cargo:</b></span><br/>'.$responsavelTceCargo.'</div>
<div class="cls_003" style="position:absolute;left:44.70px;top:630.50px"><span class="cls_003"><b>Supervisor do estágio:</b></span><br/>'.$supervisorNome.'</div>
<div class="cls_003" style="position:absolute;left:338.70px;top:630.50px"><span class="cls_003"><b>Cargo:</b></span><br/>'.$supervisorCargo.'</div>
<div class="cls_005" style="position:absolute;left:213.30px;top:665.30px"><span class="cls_005">DADOS DO ESTAGIÁRIO</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:698.60px"><span class="cls_003"><b>Nome do aluno(a):</b></span><br/>'.$nomeAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:726.90px"><span class="cls_003"><b>Curso:</b></span><br/>'.$cursoAluno.'</div>
<div class="cls_003" style="position:absolute;left:337.10px;top:726.90px"><span class="cls_003"><b>Matrícula (R.A):</b></span><br/>'.$raAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:755.30px"><span class="cls_003"><b>Endereço:</b></span><br/>'.$enderecoAluno.'</div>
<div class="cls_007" style="position:absolute;left:337.10px;top:755.20px"><span class="cls_007"><b>N</span><span class="cls_009"><sup>o</sup></span><span class="cls_007">:</b></span><br/>'.$numeroAluno.'</div>
</div>
<h1 style = "page-break-before: always;">
</h1>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img width="595" height="842" src="PDFs/5639080e-4421-11e9-9d71-0cc47a792c0a_id_5639080e-4421-11e9-9d71-0cc47a792c0a_files/background2.jpg"></div>
<div class="cls_002" style="position:absolute;left:244.90px;top:81.40px"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div class="cls_002" style="position:absolute;left:182.30px;top:90.60px"><span class="cls_002">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div class="cls_002" style="position:absolute;left:71.80px;top:99.80px"><span class="cls_002">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS -  CAMPUS POÇOS DE CALDAS</span></div>
<div class="cls_003" style="position:absolute;left:124.60px;top:108.90px"><span class="cls_003">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div class="cls_003" style="position:absolute;left:177.90px;top:119.20px"><span class="cls_003">Telefone: (35) 3697-4950 /  </span><a href="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</a> </div>
<div class="cls_003" style="position:absolute;left:45.40px;top:141.60px"><span class="cls_003"><b>Bairro:</b></span><br/>'.$bairroAluno.'</div>
<div class="cls_003" style="position:absolute;left:337.10px;top:141.60px"><span class="cls_003"><b>CEP:</b></span><br/>'.$cepAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:170.00px"><span class="cls_003"><b>Cidade:</b></span><br/>'.$cidadeAluno.'</div>
<div class="cls_003" style="position:absolute;left:337.10px;top:170.00px"><span class="cls_003"><b>UF:</b></span><br/>'.$ufAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:198.30px"><span class="cls_003"><b>Telefone fixo:</b></span><br/>'.$telefoneFixoAluno.'</div>
<div class="cls_003" style="position:absolute;left:337.10px;top:198.30px"><span class="cls_003"><b>Celular:</b></span><br/>'.$telefoneCelularAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:226.70px"><span class="cls_003"><b>E-mail:</b></span><br/>'.$emailAluno.'</div>
<div class="cls_003" style="position:absolute;left:337.10px;top:226.70px"><span class="cls_003"><b>Data de Nascimento:</b></span><br/>'.$dataNascimentoAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:255.00px"><span class="cls_003"><b>CPF:</b></span><br/>'.$cpfAluno.'</div>
<div class="cls_003" style="position:absolute;left:337.10px;top:255.00px"><span class="cls_003"><b>RG:</b></span><br/>'.$rgAluno.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:283.40px"><span class="cls_003"><b>Tipo de estágio:</b></span> '.$tipoEstagio.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:330.00px"><span class="cls_003"><b>Valor da bolsa de estágio:</b> R$</span>'.$valorBolsa.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:375.20px"><span class="cls_003"><b>Benefícios:</b></span> '.$beneficios.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:391.50px"><span class="cls_003">(*O auxílio-transporte é obrigatório. Especificar se o estagiário terá outros benefícios como vale-alimentação, plano de saúde, etc).</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:407.90px"><span class="cls_003"><b>Nome da seguradora:</b></span> '.$nomeSeguradora.'</div>
<div class="cls_003" style="position:absolute;left:45.40px;top:424.20px"><span class="cls_003"><b>Número da apólice de seguros:</b></span>  '.$numeroApoliceSeguros.'</div>
<div class="cls_007" style="position:absolute;left:42.60px;top:475.80px"><span class="cls_007"><b>Período do estágio:</b>  '.$dataInicial.'  a '.$dataFinal.'.<br/><b>Dias da semana em que será feito o estágio:</b> '.$diasSemana.'.</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:499.10px"><span class="cls_007"><b>Horário do estágio:</b> '.$horarioEstagio.' (especificar caso haja horário de almoço/intervalo).</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:522.40px"><span class="cls_007"><b>Carga horária diária:</b>  '.$cargaHorariaDiaria.' horas (No máximo 6 horas por dia e 30 horas por semana). <b>Carga horária total:</b> '.$cargaHorariaTotal.' horas.</span></div>
</div>

</body></html>';

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