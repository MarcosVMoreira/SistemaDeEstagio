<?php

include_once("conexao.php");

// reference the Dompdf namespace
use Dompdf\Dompdf;

// include autoloader
require_once 'PDFs/dompdf/autoload.inc.php';


/* Cria a instância */
$dompdf = new DOMPDF();


/* Carrega seu HTML */
$dompdf->load_html('<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<div class="cls_003" style="position:absolute;left:44.70px;top:432.00px"><span class="cls_003">Nome da empresa/escola em que pretende estagiar:</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:460.40px"><span class="cls_003">CNPJ/CPF:</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:488.70px"><span class="cls_003">Endereço:</span></div>
<div class="cls_003" style="position:absolute;left:338.70px;top:488.70px"><span class="cls_003">Bairro</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:517.10px"><span class="cls_003">CEP:</span></div>
<div class="cls_003" style="position:absolute;left:338.70px;top:517.10px"><span class="cls_003">Cidade</span></div>
<div class="cls_003" style="position:absolute;left:502.90px;top:517.10px"><span class="cls_003">UF:</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:545.40px"><span class="cls_003">Telefone:</span></div>
<div class="cls_003" style="position:absolute;left:338.70px;top:545.40px"><span class="cls_003">E-mail:</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:573.80px"><span class="cls_003">Representante legal da empresa:</span></div>
<div class="cls_003" style="position:absolute;left:338.70px;top:573.80px"><span class="cls_003">Cargo:</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:602.10px"><span class="cls_003">Responsável pela assinatura do Termo de Compromisso de Estágio (TCE)</span></div>
<div class="cls_003" style="position:absolute;left:338.70px;top:602.10px"><span class="cls_003">Cargo:</span></div>
<div class="cls_003" style="position:absolute;left:44.70px;top:630.50px"><span class="cls_003">Supervisor do estágio:</span></div>
<div class="cls_003" style="position:absolute;left:338.70px;top:630.50px"><span class="cls_003">Cargo:</span></div>
<div class="cls_005" style="position:absolute;left:213.30px;top:665.30px"><span class="cls_005">DADOS DO ESTAGIÁRIO</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:698.60px"><span class="cls_003">Nome do aluno(a):</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:726.90px"><span class="cls_003">Curso:</span></div>
<div class="cls_003" style="position:absolute;left:337.10px;top:726.90px"><span class="cls_003">Matrícula (R.A):</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:755.30px"><span class="cls_003">Endereço:</span></div>
<div class="cls_007" style="position:absolute;left:337.10px;top:755.20px"><span class="cls_007">N</span><span class="cls_009"><sup>o</sup></span><span class="cls_007">:</span></div>
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
<div class="cls_003" style="position:absolute;left:45.40px;top:141.60px"><span class="cls_003">Bairro:</span></div>
<div class="cls_003" style="position:absolute;left:337.10px;top:141.60px"><span class="cls_003">CEP:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:170.00px"><span class="cls_003">Cidade:</span></div>
<div class="cls_003" style="position:absolute;left:337.10px;top:170.00px"><span class="cls_003">UF:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:198.30px"><span class="cls_003">Telefone fixo:</span></div>
<div class="cls_003" style="position:absolute;left:337.10px;top:198.30px"><span class="cls_003">Celular:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:226.70px"><span class="cls_003">E-mail:</span></div>
<div class="cls_003" style="position:absolute;left:337.10px;top:226.70px"><span class="cls_003">Data de Nascimento:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:255.00px"><span class="cls_003">CPF:</span></div>
<div class="cls_003" style="position:absolute;left:337.10px;top:255.00px"><span class="cls_003">RG:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:283.40px"><span class="cls_003">Assinale o tipo de estágio que fará:</span></div>
<div class="cls_003" style="position:absolute;left:198.09px;top:299.70px"><span class="cls_003">(</span></div>
<div class="cls_003" style="position:absolute;left:216.86px;top:299.70px"><span class="cls_003">) Estágio obrigatório</span></div>
<div class="cls_003" style="position:absolute;left:378.80px;top:299.70px"><span class="cls_003">(</span></div>
<div class="cls_003" style="position:absolute;left:399.76px;top:299.70px"><span class="cls_003">) Estágio não-obrigatório</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:326.10px"><span class="cls_003">Caso tenha assinalado a opção “estágio não-obrigatório”, informe os dados a seguir:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:358.80px"><span class="cls_003">Valor da bolsa de estágio: R$</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:375.20px"><span class="cls_003">Benefícios:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:391.50px"><span class="cls_003">(*O auxílio-transporte é obrigatório. Especificar se o estagiário terá outros benefícios como vale-alimentação, plano de saúde, etc).</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:407.90px"><span class="cls_003">Nome da seguradora:</span></div>
<div class="cls_003" style="position:absolute;left:45.40px;top:424.20px"><span class="cls_003">Número da apólice de seguros:</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:475.80px"><span class="cls_007">Período do estágio:  ____/____/___  a ___/____/____. Dias da semana em que será feito o estágio: ____________________ .</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:499.10px"><span class="cls_007">Horário do estágio: ___________________________________________ (especificar caso haja horário de almoço/intervalo).</span></div>
<div class="cls_007" style="position:absolute;left:42.60px;top:522.40px"><span class="cls_007">Carga horária diária:  ________ (no máximo 6 horas por dia e 30 horas por semana). Carga horária total: _______________ .</span></div>
</div>



</body></html>');

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