<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;

// include autoloader
require_once 'HTML/dompdf/autoload.inc.php';


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
span.cls_002{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:Times,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:Times,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="HTML/frequenciaEstagio/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="HTML/frequenciaEstagio/background1.jpg" width=595 height=841></div>
<div style="position:absolute;left:244.68px;top:91.00px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:182.04px;top:100.24px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:72.60px;top:109.36px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
<div style="position:absolute;left:124.32px;top:118.48px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div style="position:absolute;left:169.80px;top:128.92px" class="cls_004"><span class="cls_004">Fone: (35) 3713-5120 / (35) 3722-0598 / </span><A HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </div>
<div style="position:absolute;left:218.28px;top:145.84px" class="cls_002"><span class="cls_002">FREQUÊNCIA DO ESTÁGIO</span></div>
<div style="position:absolute;left:470.28px;top:159.64px" class="cls_002"><span class="cls_002">FOLHA Nº ______</span></div>
<div style="position:absolute;left:25.44px;top:183.64px" class="cls_006"><span class="cls_006">Nome do(a) Estagiário(a)</span></div>
<div style="position:absolute;left:25.44px;top:207.52px" class="cls_006"><span class="cls_006">Curso</span></div>
<div style="position:absolute;left:288.84px;top:207.52px" class="cls_006"><span class="cls_006">Módulo/Ano</span></div>
<div style="position:absolute;left:362.89px;top:207.52px" class="cls_006"><span class="cls_006">Modalidade</span></div>
<div style="position:absolute;left:25.44px;top:242.68px" class="cls_006"><span class="cls_006">Empresa</span></div>
<div style="position:absolute;left:288.82px;top:242.68px" class="cls_006"><span class="cls_006">Período do estágio: ____/ ____/ ________ a ____/ ____/ ________</span></div>
<div style="position:absolute;left:77.99px;top:286.12px" class="cls_006"><span class="cls_006">Presença</span></div>
<div style="position:absolute;left:53.04px;top:306.52px" class="cls_006"><span class="cls_006">Data</span></div>
<div style="position:absolute;left:237.27px;top:359.56px" class="cls_006"><span class="cls_006">Setor</span></div>
<div style="position:absolute;left:393.98px;top:359.56px" class="cls_006"><span class="cls_006">Atividade desenvolvida</span></div>
</div>
<h1 style="page-break-before: always;"></h1>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="HTML/frequenciaEstagio/background2.jpg" width=595 height=841></div>
<div style="position:absolute;left:244.68px;top:91.00px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:182.04px;top:100.24px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:72.60px;top:109.36px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS - CAMPUS POÇOS DE CALDAS</span></div>
<div style="position:absolute;left:124.32px;top:118.48px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div style="position:absolute;left:169.80px;top:128.92px" class="cls_004"><span class="cls_004">Fone: (35) 3713-5120 / (35) 3722-0598 / </span><A HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </div>
<div style="position:absolute;left:43.56px;top:180.40px" class="cls_006"><span class="cls_006">TOTAL DE</span></div>
<div style="position:absolute;left:50.76px;top:191.92px" class="cls_006"><span class="cls_006">HORAS</span></div>
<div style="position:absolute;left:226.56px;top:229.24px" class="cls_006"><span class="cls_006">Data: ______/______/__________</span></div>
<div style="position:absolute;left:150.12px;top:260.44px" class="cls_006"><span class="cls_006">___________________________________________________________</span></div>
<div style="position:absolute;left:203.76px;top:271.96px" class="cls_006"><span class="cls_006">Assinatura do(a) Supervisor(a) Responsável</span></div>
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