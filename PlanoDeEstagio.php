<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;

// include autoloader
require_once 'PDFs/dompdf/autoload.inc.php';


/* Cria a instância */
$dompdf = new DOMPDF();


/* Carrega seu HTML */
$dompdf->load_html('<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_003{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_004{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_008{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_008{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:Times,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_006{font-family:Times,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="3d217650-467c-11e9-9d71-0cc47a792c0a_id_3d217650-467c-11e9-9d71-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/3d217650-467c-11e9-9d71-0cc47a792c0a_id_3d217650-467c-11e9-9d71-0cc47a792c0a_files/background1.jpg" width=595 height=842></div>
<div style="position:absolute;left:244.90px;top:92.00px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:182.30px;top:101.20px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:71.80px;top:110.40px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS -  CAMPUS POÇOS DE CALDAS</span></div>
<div style="position:absolute;left:124.60px;top:119.50px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div style="position:absolute;left:177.90px;top:129.80px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 /  </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br/</A> </span></div>
<div style="position:absolute;left:232.30px;top:146.90px" class="cls_006"><span class="cls_006">PLANO DE ESTÁGIO</span></div>
<div style="position:absolute;left:42.60px;top:170.10px" class="cls_007"><span class="cls_007">1. IDENTIFICAÇÃO DO(A) ESTAGIÁRIO(A) E DO PROFESSOR ORIENTADOR</span></div>
<div style="position:absolute;left:48.60px;top:190.10px" class="cls_004"><span class="cls_004">Aluno(a):</span></div>
<div style="position:absolute;left:48.60px;top:215.60px" class="cls_004"><span class="cls_004">Matrícula (R.A):</span></div>
<div style="position:absolute;left:48.60px;top:241.10px" class="cls_004"><span class="cls_004">Curso:</span></div>
<div style="position:absolute;left:275.10px;top:241.10px" class="cls_004"><span class="cls_004">Módulo/Ano:</span></div>
<div style="position:absolute;left:332.10px;top:241.10px" class="cls_004"><span class="cls_004">Modalidade (Subsequente, Integrado ou Superior):</span></div>
<div style="position:absolute;left:48.60px;top:266.60px" class="cls_004"><span class="cls_004">Nome completo do(a) professor(a) Orientador(a):</span></div>
<div style="position:absolute;left:48.60px;top:292.30px" class="cls_004"><span class="cls_004">Telefone do orientador:</span></div>
<div style="position:absolute;left:300.60px;top:292.30px" class="cls_004"><span class="cls_004">E-mail do orientador:</span></div>
<div style="position:absolute;left:38.45px;top:327.20px" class="cls_007"><span class="cls_007">2. IDENTIFICAÇÃO DA EMPRESA E DO SUPERVISOR DE ESTÁGIO</span></div>
<div style="position:absolute;left:45.40px;top:353.20px" class="cls_004"><span class="cls_004">Nome da empresa:</span></div>
<div style="position:absolute;left:45.40px;top:378.70px" class="cls_004"><span class="cls_004">E-mail da empresa:</span></div>
<div style="position:absolute;left:362.60px;top:378.70px" class="cls_004"><span class="cls_004">Telefone de contato da empresa:</span></div>
<div style="position:absolute;left:45.40px;top:407.20px" class="cls_004"><span class="cls_004">Supervisor(a) de Estágio:</span></div>
<div style="position:absolute;left:364.89px;top:407.20px" class="cls_004"><span class="cls_004">CPF do(a) supervisor(a):</span></div>
<div style="position:absolute;left:45.40px;top:435.60px" class="cls_004"><span class="cls_004">Curso de formação do(a) supervisor(a) de estágio:</span></div>
<div style="position:absolute;left:362.60px;top:435.60px" class="cls_004"><span class="cls_004">Conselho de Classe Profissional (se houver):</span></div>
<div style="position:absolute;left:45.40px;top:466.50px" class="cls_004"><span class="cls_004">O(A) supervisor(a) de estágio possui experiência profissional na área do estágio:</span></div>
<div style="position:absolute;left:359.77px;top:476.80px" class="cls_004"><span class="cls_004">(</span></div>
<div style="position:absolute;left:380.73px;top:476.80px" class="cls_004"><span class="cls_004">) SIM</span></div>
<div style="position:absolute;left:455.90px;top:476.80px" class="cls_004"><span class="cls_004">(</span></div>
<div style="position:absolute;left:474.57px;top:476.80px" class="cls_004"><span class="cls_004">)  NÃO</span></div>
<div style="position:absolute;left:45.40px;top:494.80px" class="cls_004"><span class="cls_004">Telefone do supervisor de estágio:</span></div>
<div style="position:absolute;left:300.50px;top:494.80px" class="cls_004"><span class="cls_004">E-mail do supervisor:</span></div>
<div style="position:absolute;left:42.60px;top:530.80px" class="cls_007"><span class="cls_007">3. IDENTIFICAÇÃO DAS ATIVIDADES DE ESTÁGIO</span></div>
<div style="position:absolute;left:42.60px;top:551.50px" class="cls_004"><span class="cls_004">3.1 Atividades a serem desenvolvidas no estágio:</span></div>
<div style="position:absolute;left:42.60px;top:592.90px" class="cls_004"><span class="cls_004">3.2 Áreas de conhecimento envolvidas no estágio:</span></div>
<div style="position:absolute;left:42.60px;top:634.30px" class="cls_004"><span class="cls_004">3.3 Objetivos a serem alcançados no estágio:</span></div>
<div style="position:absolute;left:42.60px;top:686.00px" class="cls_007"><span class="cls_007">Período do estágio:</span><span class="cls_004"> _____/_____/_________  a _____/_____/_________ . (Máximo 6 meses, podendo ser prorrogado por mais 6 meses, até</span></div>
<div style="position:absolute;left:42.60px;top:696.40px" class="cls_004"><span class="cls_004">o limite de dois anos).</span></div>
<div style="position:absolute;left:42.60px;top:734.30px" class="cls_007"><span class="cls_007">_________________________________________________</span></div>
<div style="position:absolute;left:341.64px;top:734.30px" class="cls_007"><span class="cls_007">______________________________________________</span></div>
<div style="position:absolute;left:66.76px;top:744.70px" class="cls_007"><span class="cls_007">Assinatura do(a) Professor(a) Orientador(a)</span></div>
<div style="position:absolute;left:368.16px;top:744.70px" class="cls_007"><span class="cls_007">Assinatura do(a) Supervisor de Estágio</span></div>
<div style="position:absolute;left:187.50px;top:775.70px" class="cls_007"><span class="cls_007">_________________________________________________</span></div>
<div style="position:absolute;left:240.50px;top:786.10px" class="cls_007"><span class="cls_007">Assinatura do(a) estagiário(a)</span></div>
</div>

</body>
</html>');

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