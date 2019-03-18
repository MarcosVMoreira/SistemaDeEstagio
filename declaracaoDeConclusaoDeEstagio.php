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
span.cls_003{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,9);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,9);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,9);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_004{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,9);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_009{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_009{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,9);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_010{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,9);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:"Liberation Sans Narrow Bold",serif;font-size:16.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_006{font-family:"Liberation Sans Narrow Bold",serif;font-size:16.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_007{font-family:"Liberation Sans Narrow",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:"Liberation Sans Narrow",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_008{font-family:"Liberation Sans Narrow",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_008{font-family:"Liberation Sans Narrow",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="0e26106e-49aa-11e9-9d71-0cc47a792c0a_id_0e26106e-49aa-11e9-9d71-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/0e26106e-49aa-11e9-9d71-0cc47a792c0a_id_0e26106e-49aa-11e9-9d71-0cc47a792c0a_files/background1.jpg" width=595 height=842></div>
<div style="position:absolute;left:244.90px;top:148.40px" class="cls_003"><span class="cls_003">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:182.30px;top:157.60px" class="cls_003"><span class="cls_003">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:71.80px;top:166.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS -  CAMPUS POÇOS DE CALDAS</span></div>
<div style="position:absolute;left:124.60px;top:175.90px" class="cls_004"><span class="cls_004">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div style="position:absolute;left:177.90px;top:186.20px" class="cls_004"><span class="cls_004">Telefone: (35) 3697-4950 /  </span><A HREF="https://portal.pcs.ifsuldeminas.edu.br/">https://portal.pcs.ifsuldeminas.edu.br</A> </span><span class="cls_010">/</span></div>
<div style="position:absolute;left:122.60px;top:270.10px" class="cls_006"><span class="cls_006">DECLARAÇÃO DE CONCLUSÃO DE ESTÁGIO</span></div>
<div style="position:absolute;left:56.80px;top:347.40px" class="cls_007"><span class="cls_007">Declaramos que o(a) aluno(a) _____________________________________________________ de</span></div>
<div style="position:absolute;left:56.80px;top:368.10px" class="cls_007"><span class="cls_007">matrícula  número____________________,  cursando____________________________________</span></div>
<div style="position:absolute;left:56.80px;top:388.80px" class="cls_007"><span class="cls_007">no Instituto Federal do Sul de Minas Gerais Campus Poços de Caldas, realizou estágio obrigatório</span></div>
<div style="position:absolute;left:56.80px;top:409.50px" class="cls_007"><span class="cls_007">na empresa ______________________________________________________________________,</span></div>
<div style="position:absolute;left:56.80px;top:430.20px" class="cls_007"><span class="cls_007">na  cidade  de</span></div>
<div style="position:absolute;left:141.14px;top:430.20px" class="cls_007"><span class="cls_007">_____________________________,  estado  de</span></div>
<div style="position:absolute;left:390.57px;top:430.20px" class="cls_007"><span class="cls_007">____________,  na  área  de</span></div>
<div style="position:absolute;left:56.80px;top:450.90px" class="cls_007"><span class="cls_007">_______________________, com a carga horária de ______ horas.</span></div>
<div style="position:absolute;left:189.10px;top:540.60px" class="cls_007"><span class="cls_007">_________________________, _______de _____________ de_______.</span></div>
<div style="position:absolute;left:154.80px;top:633.80px" class="cls_008"><span class="cls_008">____________________________________________________</span></div>
<div style="position:absolute;left:217.40px;top:659.10px" class="cls_008"><span class="cls_008">Assinatura do Supervisor do Estágio</span></div>
<div style="position:absolute;left:251.30px;top:709.70px" class="cls_008"><span class="cls_008">Carimbo da Empresa</span></div>
</div>

</body>
</html>
');

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