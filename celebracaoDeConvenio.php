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
span.cls_002{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_011{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,127);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_005{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_012{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_012{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:Arial,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:Arial,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_008{font-family:Times,serif;font-size:13.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_008{font-family:Times,serif;font-size:13.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_009{font-family:Times,serif;font-size:13.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:Times,serif;font-size:13.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_010{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="65024b46-49af-11e9-9d71-0cc47a792c0a_id_65024b46-49af-11e9-9d71-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs\65024b46-49af-11e9-9d71-0cc47a792c0a_id_65024b46-49af-11e9-9d71-0cc47a792c0a_files/background1.jpg" width=595 height=842></div>
<div style="position:absolute;left:242.20px;top:97.60px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:175.60px;top:106.80px" class="cls_002"><span class="cls_002">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</span></div>
<div style="position:absolute;left:203.00px;top:116.00px" class="cls_002"><span class="cls_002">INSTITUTO FEDERAL DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:166.80px;top:125.20px" class="cls_003"><span class="cls_003">Rua Ciomara Amaral de Paula, 167, Medicina - Pouso Alegre - MG - 37550-000</span></div>
<div style="position:absolute;left:200.90px;top:134.40px" class="cls_003"><span class="cls_003">Fone: (35) 3449-6155 E-mail: </span><A HREF="mailto:reitoria@ifsuldeminas.edu.br">reitoria@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:109.70px;top:150.20px" class="cls_005"><span class="cls_005">FORMULÁRIO PARA CELEBRAÇÃO DE CONVÊNIO DE ESTÁGIO</span></div>
<div style="position:absolute;left:56.80px;top:173.20px" class="cls_006"><span class="cls_006">* </span><span class="cls_012">TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO</span></div>
<div style="position:absolute;left:234.40px;top:201.00px" class="cls_007"><span class="cls_007">DADOS DA EMPRESA</span></div>
<div style="position:absolute;left:56.40px;top:214.80px" class="cls_006"><span class="cls_006">Razão Social:</span></div>
<div style="position:absolute;left:56.40px;top:228.60px" class="cls_006"><span class="cls_006">________________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:242.40px" class="cls_006"><span class="cls_006">______________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:256.30px" class="cls_006"><span class="cls_006">Nome Fantasia:</span></div>
<div style="position:absolute;left:56.40px;top:270.10px" class="cls_006"><span class="cls_006">_______________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:284.00px" class="cls_006"><span class="cls_006">Área de Atuação da empresa:___________</span><span class="cls_005">_____________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:297.90px" class="cls_006"><span class="cls_006">CNPJ/MF:</span></div>
<div style="position:absolute;left:264.40px;top:297.90px" class="cls_006"><span class="cls_006">Inscrição Estadual:</span></div>
<div style="position:absolute;left:56.40px;top:311.70px" class="cls_005"><span class="cls_005">____.____.____/_______-____</span></div>
<div style="position:absolute;left:264.40px;top:311.70px" class="cls_006"><span class="cls_006">________________________________</span></div>
<div style="position:absolute;left:56.40px;top:325.60px" class="cls_006"><span class="cls_006">Pessoa Jurídica de Direito:  (  ) Público    ou</span></div>
<div style="position:absolute;left:280.30px;top:325.60px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:290.29px;top:325.60px" class="cls_006"><span class="cls_006">) Privado</span></div>
<div style="position:absolute;left:196.30px;top:339.50px" class="cls_005"><span class="cls_005">DADOS PARA CORRESPONDÊNCIA</span></div>
<div style="position:absolute;left:56.40px;top:353.40px" class="cls_006"><span class="cls_006">Endereço:</span></div>
<div style="position:absolute;left:56.40px;top:367.20px" class="cls_006"><span class="cls_006">________________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:381.00px" class="cls_006"><span class="cls_006">______________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:394.90px" class="cls_006"><span class="cls_006">nº</span></div>
<div style="position:absolute;left:139.30px;top:394.90px" class="cls_006"><span class="cls_006">Bairro:</span></div>
<div style="position:absolute;left:359.50px;top:394.90px" class="cls_006"><span class="cls_006">Cidade:</span></div>
<div style="position:absolute;left:56.40px;top:408.70px" class="cls_006"><span class="cls_006">___________</span></div>
<div style="position:absolute;left:139.30px;top:408.70px" class="cls_006"><span class="cls_006">______________________________</span></div>
<div style="position:absolute;left:359.50px;top:408.70px" class="cls_006"><span class="cls_006">________________________</span></div>
<div style="position:absolute;left:56.40px;top:422.60px" class="cls_006"><span class="cls_006">UF:</span></div>
<div style="position:absolute;left:139.30px;top:422.60px" class="cls_006"><span class="cls_006">CEP:</span></div>
<div style="position:absolute;left:272.40px;top:422.60px" class="cls_006"><span class="cls_006">Fone:</span></div>
<div style="position:absolute;left:405.50px;top:422.60px" class="cls_006"><span class="cls_006">Fax (OPCIONAL):</span></div>
<div style="position:absolute;left:56.40px;top:436.50px" class="cls_007"><span class="cls_007">_________</span></div>
<div style="position:absolute;left:139.30px;top:436.40px" class="cls_005"><span class="cls_005">____.________-_____</span></div>
<div style="position:absolute;left:272.40px;top:436.40px" class="cls_006"><span class="cls_006">(___)______-_______</span></div>
<div style="position:absolute;left:56.40px;top:450.30px" class="cls_006"><span class="cls_006">E-mail:</span></div>
<div style="position:absolute;left:56.40px;top:464.10px" class="cls_006"><span class="cls_006">_______________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:478.00px" class="cls_006"><span class="cls_006">Endereço  para correspondência (CASO SEJA DIFERENTE DO ANTERIOR):</span></div>
<div style="position:absolute;left:56.40px;top:491.80px" class="cls_006"><span class="cls_006">_______________________________________________________________________________</span></div>
<div style="position:absolute;left:56.40px;top:505.70px" class="cls_006"><span class="cls_006">nº</span></div>
<div style="position:absolute;left:143.20px;top:505.70px" class="cls_006"><span class="cls_006">Bairro:</span></div>
<div style="position:absolute;left:359.50px;top:505.70px" class="cls_006"><span class="cls_006">Cidade:</span></div>
<div style="position:absolute;left:56.00px;top:519.50px" class="cls_006"><span class="cls_006">___________</span></div>
<div style="position:absolute;left:143.20px;top:519.50px" class="cls_006"><span class="cls_006">__________________________________</span></div>
<div style="position:absolute;left:359.50px;top:519.50px" class="cls_006"><span class="cls_006">____________________________</span></div>
<div style="position:absolute;left:56.40px;top:533.40px" class="cls_006"><span class="cls_006">UF:</span></div>
<div style="position:absolute;left:140.10px;top:533.40px" class="cls_006"><span class="cls_006">CEP:</span></div>
<div style="position:absolute;left:273.50px;top:533.40px" class="cls_006"><span class="cls_006">Fone:</span></div>
<div style="position:absolute;left:406.10px;top:533.40px" class="cls_006"><span class="cls_006">Fax (OPCIONAL):</span></div>
<div style="position:absolute;left:56.40px;top:547.30px" class="cls_007"><span class="cls_007">_________</span></div>
<div style="position:absolute;left:140.10px;top:547.20px" class="cls_005"><span class="cls_005">____.________-_____</span></div>
<div style="position:absolute;left:273.50px;top:547.20px" class="cls_006"><span class="cls_006">(___)______-_______</span></div>
<div style="position:absolute;left:194.30px;top:561.10px" class="cls_005"><span class="cls_005">DADOS DO REPRESENTATE LEGAL</span></div>
<div style="position:absolute;left:55.70px;top:576.90px" class="cls_006"><span class="cls_006">Representante Legal:</span></div>
<div style="position:absolute;left:55.70px;top:590.70px" class="cls_005"><span class="cls_005">____________________________________________________________________</span></div>
<div style="position:absolute;left:55.70px;top:604.60px" class="cls_006"><span class="cls_006">Cargo ou Função:</span></div>
<div style="position:absolute;left:385.70px;top:604.60px" class="cls_006"><span class="cls_006">CPF:</span></div>
<div style="position:absolute;left:55.70px;top:618.40px" class="cls_005"><span class="cls_005">______________________________________________________</span></div>
<div style="position:absolute;left:385.70px;top:618.40px" class="cls_005"><span class="cls_005">_____._____._____-____</span></div>
<div style="position:absolute;left:55.70px;top:632.30px" class="cls_006"><span class="cls_006">Carteira de Identidade:</span></div>
<div style="position:absolute;left:385.70px;top:632.30px" class="cls_006"><span class="cls_006">Órgão Expedidor:</span></div>
<div style="position:absolute;left:55.70px;top:646.10px" class="cls_006"><span class="cls_006">______________________________________________________</span></div>
<div style="position:absolute;left:385.70px;top:646.10px" class="cls_005"><span class="cls_005">________________________</span></div>
<div style="position:absolute;left:55.70px;top:660.00px" class="cls_006"><span class="cls_006">Endereço do Representante Legal (para constar no convênio):</span></div>
<div style="position:absolute;left:385.70px;top:660.00px" class="cls_006"><span class="cls_006">Bairro:</span></div>
<div style="position:absolute;left:55.70px;top:673.80px" class="cls_006"><span class="cls_006">______________________________________________________</span></div>
<div style="position:absolute;left:385.70px;top:673.80px" class="cls_006"><span class="cls_006">________________________</span></div>
<div style="position:absolute;left:55.70px;top:687.70px" class="cls_006"><span class="cls_006">Cidade:</span></div>
<div style="position:absolute;left:385.70px;top:687.70px" class="cls_006"><span class="cls_006">UF:</span></div>
<div style="position:absolute;left:55.70px;top:701.50px" class="cls_006"><span class="cls_006">______________________________________________________</span></div>
<div style="position:absolute;left:385.70px;top:701.50px" class="cls_006"><span class="cls_006">________________________</span></div>
<div style="position:absolute;left:55.70px;top:715.40px" class="cls_006"><span class="cls_006">Formação:</span></div>
<div style="position:absolute;left:385.70px;top:715.40px" class="cls_006"><span class="cls_006">Estado Civil:</span></div>
<div style="position:absolute;left:55.70px;top:729.20px" class="cls_006"><span class="cls_006">______________________________________________</span></div>
<div style="position:absolute;left:385.70px;top:729.20px" class="cls_006"><span class="cls_006">_____________________</span></div>
<div style="position:absolute;left:54.40px;top:743.10px" class="cls_006"><span class="cls_006">E-mail alternativo: _______________________________________________________________</span></div>
<div style="position:absolute;left:54.40px;top:756.90px" class="cls_006"><span class="cls_006">Telefone alternativo:</span><span class="cls_005">______________________________________________________________</span></div>
</div>

<h1 style = "page-break-before: always;">
</h1>

<div style="position:absolute;left:50%;margin-left:-297px;top:852px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/65024b46-49af-11e9-9d71-0cc47a792c0a_id_65024b46-49af-11e9-9d71-0cc47a792c0a_files/background2.jpg" width=595 height=842></div>
<div style="position:absolute;left:54.40px;top:56.00px" class="cls_005"><span class="cls_005">Oferece estágio para alunos do(s) curso(s) de:</span></div>
<div style="position:absolute;left:54.40px;top:69.90px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:64.40px;top:69.90px" class="cls_006"><span class="cls_006">) Engenharia de Computação</span></div>
<div style="position:absolute;left:264.40px;top:69.90px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:274.40px;top:69.90px" class="cls_006"><span class="cls_006">) Técnico em Administração</span></div>
<div style="position:absolute;left:54.40px;top:104.50px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:64.40px;top:104.50px" class="cls_006"><span class="cls_006">) Licenciatura em Ciências Biológicas</span></div>
<div style="position:absolute;left:264.40px;top:104.50px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:274.40px;top:104.50px" class="cls_006"><span class="cls_006">) Técnico em Edificações</span></div>
<div style="position:absolute;left:54.40px;top:139.10px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:64.40px;top:139.10px" class="cls_006"><span class="cls_006">) Licenciatura em Geografia</span></div>
<div style="position:absolute;left:264.40px;top:139.10px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:274.40px;top:139.10px" class="cls_006"><span class="cls_006">) Técnico em Eletrotécnica</span></div>
<div style="position:absolute;left:54.40px;top:173.70px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:64.40px;top:173.70px" class="cls_006"><span class="cls_006">) Tecnologia em Gestão Ambiental</span></div>
<div style="position:absolute;left:264.40px;top:173.70px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:274.40px;top:173.70px" class="cls_006"><span class="cls_006">) Técnico em Informática Integrado ao Ensino Médio</span></div>
<div style="position:absolute;left:54.40px;top:208.30px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:64.40px;top:208.30px" class="cls_006"><span class="cls_006">) Tecnologia em Gestão Comercial</span></div>
<div style="position:absolute;left:264.40px;top:208.30px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:274.40px;top:208.30px" class="cls_006"><span class="cls_006">) Técnico em Eletrotécnica Integrado ao Ensino Médio</span></div>
<div style="position:absolute;left:54.40px;top:242.90px" class="cls_005"><span class="cls_005">Área de atividade principal da empresa:</span></div>
<div style="position:absolute;left:57.20px;top:259.60px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:259.60px" class="cls_006"><span class="cls_006">) Ambiente e  Saúde</span></div>
<div style="position:absolute;left:267.20px;top:259.60px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:259.60px" class="cls_006"><span class="cls_006">)Ciências Exatas</span></div>
<div style="position:absolute;left:57.20px;top:292.80px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:292.80px" class="cls_006"><span class="cls_006">)Ciências da Natureza</span></div>
<div style="position:absolute;left:267.20px;top:292.80px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:292.80px" class="cls_006"><span class="cls_006">)Produção Alimentícia</span></div>
<div style="position:absolute;left:57.20px;top:326.00px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:326.00px" class="cls_006"><span class="cls_006">)Controle e Processos Industriais</span></div>
<div style="position:absolute;left:267.20px;top:326.00px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:326.00px" class="cls_006"><span class="cls_006">)Produção Cultural e Design</span></div>
<div style="position:absolute;left:57.20px;top:359.20px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:359.20px" class="cls_006"><span class="cls_006">)Desenvolvimento Educacional e Social</span></div>
<div style="position:absolute;left:267.20px;top:359.20px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:359.20px" class="cls_006"><span class="cls_006">)Produção Industrial</span></div>
<div style="position:absolute;left:57.20px;top:392.40px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:392.40px" class="cls_006"><span class="cls_006">)Formação de Professores</span></div>
<div style="position:absolute;left:267.20px;top:392.40px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:392.40px" class="cls_006"><span class="cls_006">)Recursos Naturais</span></div>
<div style="position:absolute;left:57.20px;top:425.60px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:425.60px" class="cls_006"><span class="cls_006">)Gestão e Negócio</span></div>
<div style="position:absolute;left:267.20px;top:425.60px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:425.60px" class="cls_006"><span class="cls_006">)Segurança</span></div>
<div style="position:absolute;left:57.20px;top:458.80px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:458.80px" class="cls_006"><span class="cls_006">)Informação e Comunicação</span></div>
<div style="position:absolute;left:267.20px;top:458.80px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:277.20px;top:458.80px" class="cls_006"><span class="cls_006">)Turismo, Hospitalidade e Lazer</span></div>
<div style="position:absolute;left:57.20px;top:492.00px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:67.20px;top:492.00px" class="cls_006"><span class="cls_006">)Infraestrutura</span></div>
<div style="position:absolute;left:267.20px;top:492.00px" class="cls_006"><span class="cls_006">(</span></div>
<div style="position:absolute;left:280.20px;top:492.00px" class="cls_006"><span class="cls_006">) Outra:</span></div>
<div style="position:absolute;left:56.40px;top:522.40px" class="cls_008"><span class="cls_008">Em que época do ano a empresa</span></div>
<div style="position:absolute;left:264.40px;top:522.40px" class="cls_008"><span class="cls_008">Quantos estagiários a empresa pode receber:</span></div>
<div style="position:absolute;left:56.40px;top:537.30px" class="cls_008"><span class="cls_008">oferece estágio:</span></div>
<div style="position:absolute;left:56.40px;top:566.00px" class="cls_009"><span class="cls_009">O estágio é remunerado:</span></div>
<div style="position:absolute;left:222.90px;top:566.00px" class="cls_009"><span class="cls_009">Oferece alojamento:</span></div>
<div style="position:absolute;left:377.60px;top:566.00px" class="cls_009"><span class="cls_009">Oferece alimentação:</span></div>
<div style="position:absolute;left:56.40px;top:580.90px" class="cls_009"><span class="cls_009">(</span></div>
<div style="position:absolute;left:67.27px;top:580.90px" class="cls_009"><span class="cls_009">) SIM</span></div>
<div style="position:absolute;left:110.83px;top:580.90px" class="cls_009"><span class="cls_009">(</span></div>
<div style="position:absolute;left:121.70px;top:580.90px" class="cls_009"><span class="cls_009">)NÃO</span></div>
<div style="position:absolute;left:222.90px;top:580.90px" class="cls_009"><span class="cls_009">(</span></div>
<div style="position:absolute;left:233.77px;top:580.90px" class="cls_009"><span class="cls_009">) SIM</span></div>
<div style="position:absolute;left:277.33px;top:580.90px" class="cls_009"><span class="cls_009">(</span></div>
<div style="position:absolute;left:288.20px;top:580.90px" class="cls_009"><span class="cls_009">)NÃO</span></div>
<div style="position:absolute;left:377.60px;top:580.90px" class="cls_009"><span class="cls_009">(</span></div>
<div style="position:absolute;left:388.47px;top:580.90px" class="cls_009"><span class="cls_009">) SIM</span></div>
<div style="position:absolute;left:432.03px;top:580.90px" class="cls_009"><span class="cls_009">(</span></div>
<div style="position:absolute;left:442.90px;top:580.90px" class="cls_009"><span class="cls_009">)NÃO</span></div>
<div style="position:absolute;left:66.50px;top:618.80px" class="cls_010"><span class="cls_010">(Declaro serem verdadeiras as afirmações acima, podendo o Instituto Federal de Educação, Ciência e Tecnologia do</span></div>
<div style="position:absolute;left:83.20px;top:630.40px" class="cls_010"><span class="cls_010">Sul de Minas utilizá-las para elaboração do Convênio de Estágio que será analisado por nossa empresa e/ou</span></div>
<div style="position:absolute;left:274.40px;top:641.90px" class="cls_010"><span class="cls_010">Instituição.)</span></div>
<div style="position:absolute;left:81.40px;top:665.00px" class="cls_010"><span class="cls_010">_________________________________, _________ de ________________________ de _____________ .</span></div>
<div style="position:absolute;left:130.90px;top:730.60px" class="cls_010"><span class="cls_010">___________________________________________________________________</span></div>
<div style="position:absolute;left:137.90px;top:742.20px" class="cls_010"><span class="cls_010">Assinatura do responsável pelo preenchimento e carimbo da empresa/instituição</span></div>
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