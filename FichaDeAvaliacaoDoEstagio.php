<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;

// include autoloader
require_once 'dompdf/autoload.inc.php';


/* Cria a instância */
$dompdf = new DOMPDF();


/* Carrega seu HTML */
$dompdf->load_html('<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_011{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_012{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_012{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_005{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_008{font-family:Times,serif;font-size:9.2px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_008{font-family:Times,serif;font-size:9.2px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_009{font-family:Times,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:Times,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_010{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="b46014d0-467f-11e9-9d71-0cc47a792c0a_id_b46014d0-467f-11e9-9d71-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="b46014d0-467f-11e9-9d71-0cc47a792c0a_id_b46014d0-467f-11e9-9d71-0cc47a792c0a_files/background1.jpg" width=595 height=842></div>
<div style="position:absolute;left:244.90px;top:91.30px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:182.30px;top:100.50px" class="cls_002"><span class="cls_002">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:71.80px;top:109.70px" class="cls_002"><span class="cls_002">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS -  CAMPUS POÇOS DE CALDAS</span></div>
<div style="position:absolute;left:124.60px;top:118.80px" class="cls_003"><span class="cls_003">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div style="position:absolute;left:168.80px;top:129.20px" class="cls_011"><span class="cls_011">Fone: (35) 3713-5120 / (35) 3722-0598 / </span><A HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:137.40px;top:166.90px" class="cls_005"><span class="cls_005">FICHA DE AVALIAÇÃO DO ESTÁGIO SUPERVISIONADO</span></div>
<div style="position:absolute;left:45.40px;top:211.30px" class="cls_006"><span class="cls_006">Nome do(a) Aluno(a)</span></div>
<div style="position:absolute;left:45.40px;top:239.60px" class="cls_006"><span class="cls_006">Curso</span></div>
<div style="position:absolute;left:249.40px;top:239.60px" class="cls_006"><span class="cls_006">Módulo/Ano</span></div>
<div style="position:absolute;left:322.90px;top:239.60px" class="cls_006"><span class="cls_006">Modalidade (Subsequente, Integrado ou Superior)</span></div>
<div style="position:absolute;left:45.40px;top:268.00px" class="cls_006"><span class="cls_006">Período do Estágio</span></div>
<div style="position:absolute;left:135.40px;top:279.50px" class="cls_006"><span class="cls_006">______/______/_________ a _______/_______/__________</span></div>
<div style="position:absolute;left:45.40px;top:296.30px" class="cls_006"><span class="cls_006">Empresa</span></div>
<div style="position:absolute;left:45.40px;top:324.70px" class="cls_006"><span class="cls_006">Endereço</span></div>
<div style="position:absolute;left:322.90px;top:324.70px" class="cls_006"><span class="cls_006">Nº</span></div>
<div style="position:absolute;left:45.40px;top:353.00px" class="cls_006"><span class="cls_006">Bairro</span></div>
<div style="position:absolute;left:322.90px;top:353.00px" class="cls_006"><span class="cls_006">Cidade/UF</span></div>
<div style="position:absolute;left:45.40px;top:381.40px" class="cls_006"><span class="cls_006">CEP</span></div>
<div style="position:absolute;left:224.60px;top:381.40px" class="cls_006"><span class="cls_006">Telefone</span></div>
<div style="position:absolute;left:322.90px;top:381.40px" class="cls_006"><span class="cls_006">E-mail</span></div>
<div style="position:absolute;left:45.40px;top:409.70px" class="cls_006"><span class="cls_006">Área em foi desenvolvido o estágio</span></div>
<div style="position:absolute;left:45.40px;top:438.10px" class="cls_006"><span class="cls_006">Nome do(a) Supervisor(a)</span></div>
<div style="position:absolute;left:42.70px;top:488.90px" class="cls_007"><span class="cls_007">Ao(À) Supervisor(a) de Estágio</span></div>
<div style="position:absolute;left:362.50px;top:508.92px" class="cls_008"><span class="cls_008">Ótimo</span></div>
<div style="position:absolute;left:415.40px;top:508.92px" class="cls_008"><span class="cls_008">Bom</span></div>
<div style="position:absolute;left:461.20px;top:508.92px" class="cls_008"><span class="cls_008">Regular</span></div>
<div style="position:absolute;left:516.60px;top:508.92px" class="cls_008"><span class="cls_008">Fraco</span></div>
<div style="position:absolute;left:60.40px;top:522.70px" class="cls_007"><span class="cls_007">Escolha a alternativa que melhor identifique sua opinião e</span></div>
<div style="position:absolute;left:53.30px;top:535.40px" class="cls_007"><span class="cls_007">assinale no espaço correspondente, considerando os aspectos:</span></div>
<div style="position:absolute;left:126.80px;top:565.70px" class="cls_009"><span class="cls_009">1- Apresentação pessoal</span></div>
<div style="position:absolute;left:126.80px;top:580.00px" class="cls_009"><span class="cls_009">2- Sociabilidade e desempenho</span></div>
<div style="position:absolute;left:126.80px;top:594.30px" class="cls_009"><span class="cls_009">3- Organização e método de trabalho</span></div>
<div style="position:absolute;left:126.80px;top:608.60px" class="cls_009"><span class="cls_009">4- Assiduidade</span></div>
<div style="position:absolute;left:126.80px;top:622.90px" class="cls_009"><span class="cls_009">5- Iniciativa</span></div>
<div style="position:absolute;left:126.80px;top:637.20px" class="cls_009"><span class="cls_009">6- Criatividade</span></div>
<div style="position:absolute;left:51.80px;top:641.60px" class="cls_007"><span class="cls_007">Avaliação do</span></div>
<div style="position:absolute;left:126.80px;top:651.50px" class="cls_009"><span class="cls_009">7- Capacidade de gerenciamento</span></div>
<div style="position:absolute;left:64.30px;top:654.20px" class="cls_007"><span class="cls_007">Estágio</span></div>
<div style="position:absolute;left:126.80px;top:665.80px" class="cls_009"><span class="cls_009">8- Cooperação</span></div>
<div style="position:absolute;left:126.80px;top:680.10px" class="cls_009"><span class="cls_009">9- Responsabilidade</span></div>
<div style="position:absolute;left:126.80px;top:694.40px" class="cls_009"><span class="cls_009">10- Liderança</span></div>
<div style="position:absolute;left:126.80px;top:708.70px" class="cls_009"><span class="cls_009">11- Nível de conhecimento</span></div>
<div style="position:absolute;left:126.80px;top:723.00px" class="cls_009"><span class="cls_009">12- Comprometimento nas tarefas</span></div>
<div style="position:absolute;left:126.80px;top:737.30px" class="cls_009"><span class="cls_009">13- Relacionamento na empresa</span></div>
<div style="position:absolute;left:126.80px;top:751.60px" class="cls_009"><span class="cls_009">14- Aproveitamento no estágio</span></div>
</div>
<h1 style = "page-break-before: always;">
</h1>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="b46014d0-467f-11e9-9d71-0cc47a792c0a_id_b46014d0-467f-11e9-9d71-0cc47a792c0a_files/background2.jpg" width=595 height=842></div>
<div style="position:absolute;left:244.90px;top:91.30px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:182.30px;top:100.50px" class="cls_002"><span class="cls_002">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:71.80px;top:109.70px" class="cls_002"><span class="cls_002">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS -  CAMPUS POÇOS DE CALDAS</span></div>
<div style="position:absolute;left:124.60px;top:118.80px" class="cls_003"><span class="cls_003">Avenida Dirce Pereira Rosa, 300 - Jardim Esperança - CEP 37703-100 - Poços de Caldas (MG)</span></div>
<div style="position:absolute;left:168.80px;top:129.20px" class="cls_011"><span class="cls_011">Fone: (35) 3713-5120 / (35) 3722-0598 / </span><A HREF="http://www.pcs.ifsuldeminas.edu.br/">www.pcs.ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:42.70px;top:167.00px" class="cls_007"><span class="cls_007">Comentário do(a) Supervisor de Estágio</span></div>
<div style="position:absolute;left:106.10px;top:512.60px" class="cls_010"><span class="cls_010">Poços de Caldas, _________ de _____________________ de _____________ .</span></div>
<div style="position:absolute;left:45.20px;top:581.80px" class="cls_006"><span class="cls_006">______________________________________</span></div>
<div style="position:absolute;left:355.20px;top:581.80px" class="cls_006"><span class="cls_006">_____________________________________</span></div>
<div style="position:absolute;left:57.20px;top:593.30px" class="cls_006"><span class="cls_006">Assinatura do(a) Supervisor(a) de Estágio</span></div>
<div style="position:absolute;left:361.76px;top:593.30px" class="cls_006"><span class="cls_006">Assinatura do(a) Professor(a) Orientador(a)</span></div>
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