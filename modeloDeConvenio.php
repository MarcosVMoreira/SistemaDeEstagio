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
span.cls_002{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_007{font-family:Times,serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Arial,serif;font-size:11.6px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:11.6px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_005{font-family:Arial,serif;font-size:11.6px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_005{font-family:Arial,serif;font-size:11.6px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/background1.jpg" width=595 height=842></div>
<div style="position:absolute;left:216.00px;top:82.10px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:184.80px;top:92.40px" class="cls_002"><span class="cls_002">Secretaria de Educação Profissional e Tecnológica</span></div>
<div style="position:absolute;left:90.97px;top:102.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:139.85px;top:113.10px" class="cls_002"><span class="cls_002">Avenida Vicente Simões, 1111- Nova Pouso Alegre- Pouso Alegre-MG- 37550-000</span></div>
<div style="position:absolute;left:186.38px;top:123.50px" class="cls_002"><span class="cls_002">Fone: (0XX35) 3449-6259/E-mail: </span><A HREF="mailto:estagios@ifsuldeminas.edu.br">estagios@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:193.50px;top:173.00px" class="cls_004"><span class="cls_004">CONVÊNIO DE ESTÁGIO Nº ____/2016</span></div>
<div style="position:absolute;left:54.10px;top:213.60px" class="cls_004"><span class="cls_004">O INSTITUTO FEDERAL DE EDUCACAO, CIENCIA E TECNOLOGIA DO SUL DE MINAS</span></div>
<div style="position:absolute;left:54.10px;top:233.40px" class="cls_004"><span class="cls_004">GERAIS, nos termos do artigo 5º, Inciso XVI da Lei nº 11.892, de 29 de dezembro de 2008</span><span class="cls_005">,</span></div>
<div style="position:absolute;left:54.10px;top:253.30px" class="cls_005"><span class="cls_005">com sede em Pouso Alegre MG, a Avenida Vicente Simões, 1111, Centro, inscrita no CNPJ.</span></div>
<div style="position:absolute;left:54.10px;top:273.10px" class="cls_005"><span class="cls_005">sob. o nº 10.648.539/0001-05, neste ato representada pelo seu Coordenador do Departamento</span></div>
<div style="position:absolute;left:54.10px;top:293.00px" class="cls_005"><span class="cls_005">de Apoio aos Discentes e Egressos.  Sr. xxxxxxxxxxxxxxx, nacionalidade xxxxxxxxxxxx, estado</span></div>
<div style="position:absolute;left:54.10px;top:312.80px" class="cls_005"><span class="cls_005">civil</span></div>
<div style="position:absolute;left:89.86px;top:312.80px" class="cls_005"><span class="cls_005">xxxxxxxxxxxxxxxxxx,     profissão     xxxxxxxxxxxxxxxxxx,     residente     no     endereço</span></div>
<div style="position:absolute;left:54.10px;top:332.70px" class="cls_005"><span class="cls_005">xxxxxxxxxxxxxxx,  na  cidade  de  xxxxxxxxxxxxxx,  portador  do  CPF  xxxxxxxxxxxx,  RG</span></div>
<div style="position:absolute;left:54.10px;top:352.50px" class="cls_005"><span class="cls_005">xxxxxxxxxxxxxxx,  doravante  denominada  </span><span class="cls_004">INSTITUIÇÃO  DE  ENSINO</span><span class="cls_005">,  e  de  outro  lado,  a</span></div>
<div style="position:absolute;left:54.10px;top:372.40px" class="cls_005"><span class="cls_005">xxxxxxxxxxxx</span><span class="cls_004"> S/A</span><span class="cls_005"> , Pessoa Jurídica de Direito Privado, com sede xxxxxxxxxxxxxxxx,  nº xxxx,</span></div>
<div style="position:absolute;left:54.10px;top:392.20px" class="cls_005"><span class="cls_005">Bairro: xxxxxxxxx ,  na cidade de xxxxxxxxxxx -  MG,  CEP xxxxxxxxxx, inscrita no CNPJ/MF</span></div>
<div style="position:absolute;left:54.10px;top:412.10px" class="cls_005"><span class="cls_005">sob  o  nº  xxxxxxxxx,  doravante  denominada     </span><span class="cls_004">CONCEDENTE</span><span class="cls_005">,  neste  ato  legalmente</span></div>
<div style="position:absolute;left:54.10px;top:431.90px" class="cls_005"><span class="cls_005">representada pelo xxxxxxxxxx  Sr(a). xxxxxxxxxx,  portador do CPF/MF xxxxxxxxxx, Telefone</span></div>
<div style="position:absolute;left:54.10px;top:451.80px" class="cls_005"><span class="cls_005">(xx)  xxxxxxxxxxxx,  celebram  o  presente  Convênio,  de  acordo  com  os  ditames  da  Lei  Nº</span></div>
<div style="position:absolute;left:54.10px;top:471.60px" class="cls_005"><span class="cls_005">11.788/08, Lei nº 8.666/93 e com as cláusulas e condições a seguir descritas:</span></div>
<div style="position:absolute;left:54.10px;top:512.20px" class="cls_004"><span class="cls_004">CLÁUSULA 1ª - DO OBJETO</span></div>
<div style="position:absolute;left:54.10px;top:532.00px" class="cls_005"><span class="cls_005">Este Convênio tem por objetivo formalizar as condições básicas para a realização de estágios</span></div>
<div style="position:absolute;left:54.10px;top:551.90px" class="cls_005"><span class="cls_005">curriculares  obrigatórios  ou  não  obrigatórios,  aos  estudantes  do  INSTITUTO  FEDERAL DE</span></div>
<div style="position:absolute;left:54.10px;top:571.70px" class="cls_005"><span class="cls_005">EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS, entendido o estágio como um</span></div>
<div style="position:absolute;left:54.10px;top:591.60px" class="cls_005"><span class="cls_005">aprendizado  de  competências  próprias  da  atividade  profissional  e  à    contextualização</span></div>
<div style="position:absolute;left:54.10px;top:611.40px" class="cls_005"><span class="cls_005">curricular, objetivando o desenvolvimento do educando para a vida cidadã  e para o trabalho.</span></div>
<div style="position:absolute;left:54.10px;top:651.10px" class="cls_004"><span class="cls_004">CLÁUSULA 2ª - DO TERMO DE COMPROMISSO</span></div>
<div style="position:absolute;left:54.10px;top:671.00px" class="cls_005"><span class="cls_005">Para  a  realização  de  cada  Estágio,  em  decorrência  do  presente  Convênio,  será  celebrado</span></div>
<div style="position:absolute;left:54.10px;top:690.80px" class="cls_005"><span class="cls_005">TERMO  DE  COMPROMISSO  DE  ESTÁGIO  entre  o/a  Estudante  e  a  Concedente,  com  a</span></div>
<div style="position:absolute;left:54.10px;top:710.70px" class="cls_005"><span class="cls_005">interveniência do Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas, nos</span></div>
<div style="position:absolute;left:54.10px;top:730.50px" class="cls_005"><span class="cls_005">termos do inciso I do art. 7º, da Lei nº 11.788/08.</span></div>
</div>

<h1 style = "page-break-before: always;">
</h1>

<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/background2.jpg" width=595 height=842></div>
<div style="position:absolute;left:216.00px;top:82.10px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:184.80px;top:92.40px" class="cls_002"><span class="cls_002">Secretaria de Educação Profissional e Tecnológica</span></div>
<div style="position:absolute;left:90.97px;top:102.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:139.85px;top:113.10px" class="cls_002"><span class="cls_002">Avenida Vicente Simões, 1111- Nova Pouso Alegre- Pouso Alegre-MG- 37550-000</span></div>
<div style="position:absolute;left:186.38px;top:123.50px" class="cls_002"><span class="cls_002">Fone: (0XX35) 3449-6259/E-mail: </span><A HREF="mailto:estagios@ifsuldeminas.edu.br">estagios@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:89.50px;top:147.20px" class="cls_005"><span class="cls_005">I</span></div>
<div style="position:absolute;left:99.57px;top:147.20px" class="cls_005"><span class="cls_005">- O TERMO DE COMPROMISSO DE ESTÁGIO, fundamentado e vinculado ao</span></div>
<div style="position:absolute;left:54.10px;top:167.00px" class="cls_005"><span class="cls_005">presente Convênio, terá por função básica, em relação a cada estágio, particularizar a relação</span></div>
<div style="position:absolute;left:54.10px;top:186.90px" class="cls_005"><span class="cls_005">jurídica especial existente entre o(a) Estudante Estagiário(a) e o Concedente.</span></div>
<div style="position:absolute;left:89.50px;top:206.70px" class="cls_005"><span class="cls_005">II</span></div>
<div style="position:absolute;left:102.46px;top:206.70px" class="cls_005"><span class="cls_005">- O estágio realizado em decorrência deste CONVÊNIO não acarretará vínculo</span></div>
<div style="position:absolute;left:54.10px;top:226.60px" class="cls_005"><span class="cls_005">empregatício  de  qualquer  natureza  entre  o(a)  ESTAGIÁRIO(A)  e  a  Concedente,  se</span></div>
<div style="position:absolute;left:54.10px;top:246.40px" class="cls_005"><span class="cls_005">caracterizado nos termos do artigo 3º da Lei nº 11.788/08.</span></div>
<div style="position:absolute;left:54.10px;top:287.00px" class="cls_004"><span class="cls_004">CLÁUSULA 3ª - DAS RESPONSABILIDADES COMUNS</span></div>
<div style="position:absolute;left:54.10px;top:306.80px" class="cls_005"><span class="cls_005">As Convenentes se obrigam, durante a vigência deste Convênio, a respeitar e fazer respeitar</span></div>
<div style="position:absolute;left:54.10px;top:326.70px" class="cls_005"><span class="cls_005">as  condições  constantes  nas  cláusulas  e  legislações  aplicáveis,  ainda  que  neste  prazo</span></div>
<div style="position:absolute;left:54.10px;top:346.50px" class="cls_005"><span class="cls_005">ocorram alterações nos seus quadros de dirigentes.</span></div>
<div style="position:absolute;left:54.10px;top:387.10px" class="cls_004"><span class="cls_004">CLÁUSULA 4ª - DA VIGÊNCIA</span></div>
<div style="position:absolute;left:54.10px;top:406.90px" class="cls_005"><span class="cls_005">Este Convênio terá a duração de xxxxxxxxx até xxxxxxxx, podendo ser prorrogado, de acordo</span></div>
<div style="position:absolute;left:54.10px;top:426.80px" class="cls_005"><span class="cls_005">com o inciso II, do art. 57, da Lei nº 8.666/93. Poderá ser denunciado, a qualquer tempo, desde</span></div>
<div style="position:absolute;left:54.10px;top:446.60px" class="cls_005"><span class="cls_005">que uma das partes convenentes notifique à outra com antecedência mínima de (trinta) dias.</span></div>
<div style="position:absolute;left:54.10px;top:487.20px" class="cls_004"><span class="cls_004">CLÁUSULA 5ª - DO PLANO DE ATIVIDADE DO ESTÁGIO</span></div>
<div style="position:absolute;left:54.10px;top:507.00px" class="cls_005"><span class="cls_005">A CONCEDENTE, para bem atender à finalidade do presente convênio, obriga-se a conceder e</span></div>
<div style="position:absolute;left:54.10px;top:526.90px" class="cls_005"><span class="cls_005">propiciar aos estagiários todas as condições e facilidades para um adequado aproveitamento</span></div>
<div style="position:absolute;left:54.10px;top:546.70px" class="cls_005"><span class="cls_005">do estágio, cumprindo e fazendo cumprir o PLANO DE ESTÁGIO, previamente elaborado entre</span></div>
<div style="position:absolute;left:54.10px;top:566.60px" class="cls_005"><span class="cls_005">as partes.</span></div>
<div style="position:absolute;left:54.10px;top:607.10px" class="cls_004"><span class="cls_004">CLÁUSULA 6ª - OBRIGAÇÕES DA INSTITUIÇÃO DE ENSINO:</span></div>
<div style="position:absolute;left:54.10px;top:647.70px" class="cls_005"><span class="cls_005">Compete a INSTITUIÇÃO DE ENSINO:</span></div>
<div style="position:absolute;left:72.10px;top:688.20px" class="cls_005"><span class="cls_005">1.</span></div>
<div style="position:absolute;left:107.40px;top:688.20px" class="cls_005"><span class="cls_005">fornecer a documentação que viabilize a contratação do estágio;</span></div>
<div style="position:absolute;left:72.10px;top:718.10px" class="cls_005"><span class="cls_005">2.</span></div>
<div style="position:absolute;left:107.40px;top:718.10px" class="cls_005"><span class="cls_005">avaliar  as  instalações  da  parte  concedente  mediante  prévio  agendamento  e  a</span></div>
<div style="position:absolute;left:107.40px;top:737.90px" class="cls_005"><span class="cls_005">adequação das atividades à formação cultural e profissional do educando;</span></div>
</div>

<h1 style = "page-break-before: always;">
</h1>

<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/background3.jpg" width=595 height=842></div>
<div style="position:absolute;left:216.00px;top:82.10px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:184.80px;top:92.40px" class="cls_002"><span class="cls_002">Secretaria de Educação Profissional e Tecnológica</span></div>
<div style="position:absolute;left:90.97px;top:102.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:139.85px;top:113.10px" class="cls_002"><span class="cls_002">Avenida Vicente Simões, 1111- Nova Pouso Alegre- Pouso Alegre-MG- 37550-000</span></div>
<div style="position:absolute;left:186.38px;top:123.50px" class="cls_002"><span class="cls_002">Fone: (0XX35) 3449-6259/E-mail: </span><A HREF="mailto:estagios@ifsuldeminas.edu.br">estagios@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:72.10px;top:147.20px" class="cls_005"><span class="cls_005">3.</span></div>
<div style="position:absolute;left:107.40px;top:147.20px" class="cls_005"><span class="cls_005">indicar  professor  orientador,  da  área  desenvolvida  no  estágio,  como  responsável</span></div>
<div style="position:absolute;left:107.40px;top:167.00px" class="cls_005"><span class="cls_005">pelo acompanhamento e avaliação das atividades do estagiário;</span></div>
<div style="position:absolute;left:72.10px;top:196.90px" class="cls_005"><span class="cls_005">4.</span></div>
<div style="position:absolute;left:107.40px;top:196.90px" class="cls_005"><span class="cls_005">exigir do aluno a apresentação dos relatórios e/ou fichas de avaliação;</span></div>
<div style="position:absolute;left:72.10px;top:227.20px" class="cls_006"><span class="cls_006">5.</span></div>
<div style="position:absolute;left:107.40px;top:226.70px" class="cls_005"><span class="cls_005">em caso de descumprimento das condições acordadas no termo de compromisso,</span></div>
<div style="position:absolute;left:107.40px;top:247.10px" class="cls_005"><span class="cls_005">orientar o aluno e a </span><span class="cls_004">UNIDADE CONCEDENTE</span><span class="cls_005"> visando à adequação do estágio, ou,</span></div>
<div style="position:absolute;left:107.40px;top:266.90px" class="cls_005"><span class="cls_005">quando necessário, recomendar ao aluno o encerramento do estágio;</span></div>
<div style="position:absolute;left:72.10px;top:296.80px" class="cls_005"><span class="cls_005">6.</span></div>
<div style="position:absolute;left:107.40px;top:296.80px" class="cls_005"><span class="cls_005">elaborar as normas complementares e instrumentos de avaliação dos estágios;</span></div>
<div style="position:absolute;left:72.10px;top:326.60px" class="cls_005"><span class="cls_005">7.</span></div>
<div style="position:absolute;left:107.40px;top:326.60px" class="cls_005"><span class="cls_005">receber, avaliar e arquivar os relatórios ou fichas de avaliação;</span></div>
<div style="position:absolute;left:72.10px;top:356.50px" class="cls_005"><span class="cls_005">8.</span></div>
<div style="position:absolute;left:107.40px;top:356.50px" class="cls_005"><span class="cls_005">informar por escrito as condições e requisitos mínimos para a realização do estágio,</span></div>
<div style="position:absolute;left:107.40px;top:376.30px" class="cls_005"><span class="cls_005">observando a carga horária, duração e jornada;</span></div>
<div style="position:absolute;left:72.10px;top:406.20px" class="cls_005"><span class="cls_005">9.</span></div>
<div style="position:absolute;left:107.40px;top:406.20px" class="cls_005"><span class="cls_005">encaminhar ficha de avaliação de estágio para preenchimento e devolução no prazo</span></div>
<div style="position:absolute;left:107.40px;top:426.00px" class="cls_005"><span class="cls_005">assinado;</span></div>
<div style="position:absolute;left:72.10px;top:455.90px" class="cls_005"><span class="cls_005">10.</span></div>
<div style="position:absolute;left:107.40px;top:455.90px" class="cls_005"><span class="cls_005">comunicar à Unidade Concedente em caso de alteração da situação acadêmica do</span></div>
<div style="position:absolute;left:107.40px;top:475.70px" class="cls_005"><span class="cls_005">estagiário;</span></div>
<div style="position:absolute;left:72.10px;top:505.60px" class="cls_005"><span class="cls_005">11.</span></div>
<div style="position:absolute;left:107.40px;top:505.60px" class="cls_005"><span class="cls_005">efetuar a contratação de seguro conta acidentes pessoais em favor do estagiário,</span></div>
<div style="position:absolute;left:107.40px;top:525.40px" class="cls_005"><span class="cls_005">cuja apólice seja compatível com valores de mercado.</span></div>
<div style="position:absolute;left:54.10px;top:576.00px" class="cls_004"><span class="cls_004">CLÁUSULA 7ª - COMPETE À CONCEDENTE</span></div>
<div style="position:absolute;left:54.10px;top:616.50px" class="cls_005"><span class="cls_005">Compete à UNIDADE CONCEDENTE:</span></div>
<div style="position:absolute;left:72.10px;top:636.90px" class="cls_006"><span class="cls_006">1.</span></div>
<div style="position:absolute;left:107.40px;top:636.40px" class="cls_005"><span class="cls_005">conceder estágio curricular, ao corpo discente da  </span><span class="cls_004">INSTITUIÇÃO DE ENSINO</span><span class="cls_005">, nos</span></div>
<div style="position:absolute;left:107.40px;top:656.70px" class="cls_005"><span class="cls_005">termos da legislação vigente e das disposições deste Convênio, definido em parceria</span></div>
<div style="position:absolute;left:107.40px;top:676.60px" class="cls_005"><span class="cls_005">com os departamentos interessados em abrir campo de estágio e a  </span><span class="cls_004">INSTITUIÇÃO</span></div>
<div style="position:absolute;left:107.40px;top:696.40px" class="cls_004"><span class="cls_004">DE ENSINO</span><span class="cls_005">, as atividades dos estagiários;</span></div>
</div>

<h1 style = "page-break-before: always;">
</h1>

<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/background4.jpg" width=595 height=842></div>
<div style="position:absolute;left:216.00px;top:82.10px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:184.80px;top:92.40px" class="cls_002"><span class="cls_002">Secretaria de Educação Profissional e Tecnológica</span></div>
<div style="position:absolute;left:90.97px;top:102.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:139.85px;top:113.10px" class="cls_002"><span class="cls_002">Avenida Vicente Simões, 1111- Nova Pouso Alegre- Pouso Alegre-MG- 37550-000</span></div>
<div style="position:absolute;left:186.38px;top:123.50px" class="cls_002"><span class="cls_002">Fone: (0XX35) 3449-6259/E-mail: </span><A HREF="mailto:estagios@ifsuldeminas.edu.br">estagios@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:72.10px;top:147.20px" class="cls_005"><span class="cls_005">2.</span></div>
<div style="position:absolute;left:107.40px;top:147.20px" class="cls_005"><span class="cls_005">oferecer  instalações  que  tenham  condições  de  proporcionar  ao  aluno  a  boa</span></div>
<div style="position:absolute;left:107.40px;top:167.00px" class="cls_005"><span class="cls_005">execução  das  atividades  previstas  no  estágio,  disponibilizando  local,  materiais  e</span></div>
<div style="position:absolute;left:107.40px;top:186.90px" class="cls_005"><span class="cls_005">equipamentos adequados;</span></div>
<div style="position:absolute;left:72.10px;top:216.70px" class="cls_005"><span class="cls_005">3.</span></div>
<div style="position:absolute;left:107.40px;top:216.70px" class="cls_005"><span class="cls_005">apresentar  ao  aluno  o  local  de  trabalho,  equipe,  normas  de  funcionamento,</span></div>
<div style="position:absolute;left:107.40px;top:236.60px" class="cls_005"><span class="cls_005">objetivos, políticas e filosofia  internas, visando a integração do estagiário;</span></div>
<div style="position:absolute;left:72.10px;top:266.40px" class="cls_005"><span class="cls_005">4.</span></div>
<div style="position:absolute;left:107.40px;top:266.40px" class="cls_005"><span class="cls_005">controlar a freqüência do estagiário dentro dos parâmetros Lei n.º 11.788/08;</span></div>
<div style="position:absolute;left:72.10px;top:296.80px" class="cls_006"><span class="cls_006">5.</span></div>
<div style="position:absolute;left:107.40px;top:296.30px" class="cls_005"><span class="cls_005">informar a </span><span class="cls_004">INSTITUIÇÃO DE ENSINO</span><span class="cls_005"> em caso de interrupção ou de problemas na</span></div>
<div style="position:absolute;left:107.40px;top:316.60px" class="cls_005"><span class="cls_005">realização do estágio, bem como nos casos em que o aluno por motivos de natureza</span></div>
<div style="position:absolute;left:107.40px;top:336.50px" class="cls_005"><span class="cls_005">técnica,  administrativa  ou  disciplinar,  não  for  considerado  apto  a  continuar  as</span></div>
<div style="position:absolute;left:107.40px;top:356.30px" class="cls_005"><span class="cls_005">atividades de estágio;</span></div>
<div style="position:absolute;left:72.10px;top:386.70px" class="cls_006"><span class="cls_006">6.</span></div>
<div style="position:absolute;left:107.40px;top:386.20px" class="cls_005"><span class="cls_005">avaliar o desempenho do estagiário e preencher a ficha de avaliação solicitada  pela</span></div>
<div style="position:absolute;left:107.40px;top:406.50px" class="cls_004"><span class="cls_004">INSTITUIÇÃO DE ENSINO</span><span class="cls_005">;</span></div>
<div style="position:absolute;left:72.10px;top:436.40px" class="cls_005"><span class="cls_005">7.</span></div>
<div style="position:absolute;left:107.40px;top:436.40px" class="cls_005"><span class="cls_005">indicar um supervisor responsável, que deverá acompanhar as atividades do aluno;</span></div>
<div style="position:absolute;left:72.10px;top:466.20px" class="cls_005"><span class="cls_005">8.</span></div>
<div style="position:absolute;left:107.40px;top:466.20px" class="cls_005"><span class="cls_005">manter à disposição da fiscalização os documentos que comprovam a realização do</span></div>
<div style="position:absolute;left:107.40px;top:486.10px" class="cls_005"><span class="cls_005">estágio;</span></div>
<div style="position:absolute;left:72.10px;top:516.40px" class="cls_006"><span class="cls_006">9.</span></div>
<div style="position:absolute;left:107.40px;top:515.90px" class="cls_005"><span class="cls_005">permitir  à  </span><span class="cls_004">INSTITUIÇÃO  DE  ENSINO</span><span class="cls_005"> acesso  as  instalações  onde  o  estágio  é</span></div>
<div style="position:absolute;left:107.40px;top:536.30px" class="cls_005"><span class="cls_005">realizado,  se  solicitado  e,  por  questões  de  segurança  do  trabalho,  previamente</span></div>
<div style="position:absolute;left:107.40px;top:556.10px" class="cls_005"><span class="cls_005">agendado e autorizado pela </span><span class="cls_004">UNIDADE CONCEDENTE;</span></div>
<div style="position:absolute;left:72.10px;top:586.50px" class="cls_006"><span class="cls_006">10.</span></div>
<div style="position:absolute;left:107.40px;top:586.00px" class="cls_005"><span class="cls_005">formalizar  o  estágio  curricular  através  de  Termo  de  Compromisso  firmado  com  o</span></div>
<div style="position:absolute;left:107.40px;top:606.30px" class="cls_005"><span class="cls_005">estagiário, tendo a obrigatória interveniência da </span><span class="cls_004">INSTITUIÇÃO DE ENSINO;</span></div>
<div style="position:absolute;left:72.10px;top:636.70px" class="cls_006"><span class="cls_006">11.</span></div>
<div style="position:absolute;left:107.40px;top:636.20px" class="cls_005"><span class="cls_005">não alterar as atividades do aluno estagiário sem prévia comunicação e anuência da</span></div>
<div style="position:absolute;left:107.40px;top:656.50px" class="cls_004"><span class="cls_004">INSTITUIÇÃO DE ENSINO</span><span class="cls_005"> ;</span></div>
<div style="position:absolute;left:72.10px;top:686.90px" class="cls_006"><span class="cls_006">12.</span></div>
<div style="position:absolute;left:107.40px;top:686.40px" class="cls_005"><span class="cls_005">prestar todo tipo de informações sobre o desenvolvimento do estágio e da atividade</span></div>
<div style="position:absolute;left:107.40px;top:706.70px" class="cls_005"><span class="cls_005">do acadêmico estagiário, que venha a ser solicitada pela </span><span class="cls_004">INSTITUIÇÃO DE ENSINO</span></div>
<div style="position:absolute;left:107.40px;top:726.60px" class="cls_005"><span class="cls_005">e que esta entenda necessária;</span></div>
</div>

<h1 style = "page-break-before: always;">
</h1>

<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/background5.jpg" width=595 height=842></div>
<div style="position:absolute;left:216.00px;top:82.10px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:184.80px;top:92.40px" class="cls_002"><span class="cls_002">Secretaria de Educação Profissional e Tecnológica</span></div>
<div style="position:absolute;left:90.97px;top:102.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:139.85px;top:113.10px" class="cls_002"><span class="cls_002">Avenida Vicente Simões, 1111- Nova Pouso Alegre- Pouso Alegre-MG- 37550-000</span></div>
<div style="position:absolute;left:186.38px;top:123.50px" class="cls_002"><span class="cls_002">Fone: (0XX35) 3449-6259/E-mail: </span><A HREF="mailto:estagios@ifsuldeminas.edu.br">estagios@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:72.10px;top:147.20px" class="cls_005"><span class="cls_005">13.</span></div>
<div style="position:absolute;left:107.40px;top:147.20px" class="cls_005"><span class="cls_005">ao final do estágio, emitir declaração de sua realização.</span></div>
<div style="position:absolute;left:54.10px;top:197.70px" class="cls_005"><span class="cls_005">Parágrafo Primeiro: O supervisor indicado deverá pertencer ao quadro de pessoal da Unidade</span></div>
<div style="position:absolute;left:54.10px;top:217.60px" class="cls_005"><span class="cls_005">Concedente e ter formação ou experiência profissional na área de conhecimento desenvolvida</span></div>
<div style="position:absolute;left:54.10px;top:237.40px" class="cls_005"><span class="cls_005">no curso frequentado pelo estagiário.</span></div>
<div style="position:absolute;left:54.10px;top:278.00px" class="cls_004"><span class="cls_004">CLÁUSULA 8ª - COMPETE AO ESTAGIÁRIO</span></div>
<div style="position:absolute;left:72.10px;top:297.80px" class="cls_005"><span class="cls_005">1.</span></div>
<div style="position:absolute;left:107.40px;top:297.80px" class="cls_005"><span class="cls_005">cumprir carga horária de estágio, prevista na grade curricular do curso;</span></div>
<div style="position:absolute;left:72.10px;top:327.70px" class="cls_005"><span class="cls_005">2.</span></div>
<div style="position:absolute;left:107.40px;top:327.70px" class="cls_005"><span class="cls_005">apresentar relatórios das atividades realizadas de acordo com as normas de estágio;</span></div>
<div style="position:absolute;left:72.10px;top:357.50px" class="cls_005"><span class="cls_005">3.</span></div>
<div style="position:absolute;left:107.40px;top:357.50px" class="cls_005"><span class="cls_005">acatar  as  normas  existentes  na  instituição  em  que  realiza  o  estágio,  procurando</span></div>
<div style="position:absolute;left:107.40px;top:377.40px" class="cls_005"><span class="cls_005">manter a rotina de trabalho e qualidade dos serviços prestados.</span></div>
<div style="position:absolute;left:72.10px;top:407.20px" class="cls_005"><span class="cls_005">4.</span></div>
<div style="position:absolute;left:107.40px;top:407.20px" class="cls_005"><span class="cls_005">cumprir as demais determinações constantes do Termo de Compromisso.</span></div>
<div style="position:absolute;left:54.10px;top:457.80px" class="cls_004"><span class="cls_004">CLÁUSULA 9ª - DOS BENEFÍCIOS</span></div>
<div style="position:absolute;left:54.10px;top:477.60px" class="cls_005"><span class="cls_005">Os benefícios concedidos aos estagiários serão especificados no termo de Compromisso.</span></div>
<div style="position:absolute;left:54.10px;top:518.20px" class="cls_004"><span class="cls_004">CLÁUSULA 10 - DO SEGURO</span></div>
<div style="position:absolute;left:54.10px;top:538.00px" class="cls_005"><span class="cls_005">O aluno deverá estar segurado contra acidentes pessoais, durante a vigência do estágio,</span></div>
<div style="position:absolute;left:54.10px;top:557.90px" class="cls_005"><span class="cls_005">através de apólice de seguro, emitida por companhia de seguros devidamente regulamentada</span></div>
<div style="position:absolute;left:54.10px;top:577.70px" class="cls_005"><span class="cls_005">pela  SUSEP,  a  ser  providenciada  pela  </span><span class="cls_004">CONCEDENTE</span><span class="cls_005"> caso  o  estágio  seja  de  caráter  não</span></div>
<div style="position:absolute;left:54.10px;top:597.60px" class="cls_005"><span class="cls_005">obrigatório,  conforme  determina  o  inciso  IV,  Art.</span></div>
<div style="position:absolute;left:332.56px;top:597.60px" class="cls_005"><span class="cls_005">9°  da  Lei</span></div>
<div style="position:absolute;left:395.67px;top:597.60px" class="cls_005"><span class="cls_005">11.788  de</span></div>
<div style="position:absolute;left:458.80px;top:597.60px" class="cls_005"><span class="cls_005">25/09/2008  ou,</span></div>
<div style="position:absolute;left:54.10px;top:617.40px" class="cls_005"><span class="cls_005">alternativamente, ser assumida pela  </span><span class="cls_004">INSTITUIÇÃO DE ENSINO</span><span class="cls_005">, se o caráter do estágio for</span></div>
<div style="position:absolute;left:54.10px;top:637.30px" class="cls_005"><span class="cls_005">obrigatório, conforme o parágrafo único do art. 9º da mesma lei.</span></div>
<div style="position:absolute;left:54.10px;top:677.80px" class="cls_004"><span class="cls_004">CLÁUSULA 11 - DO FORO</span></div>
<div style="position:absolute;left:54.10px;top:697.70px" class="cls_005"><span class="cls_005">Por  força  do  artigo  109,  inciso  I,  da  Constituição  Federal,  o  Foro  competente  para  dirimir</span></div>
<div style="position:absolute;left:54.10px;top:717.50px" class="cls_005"><span class="cls_005">eventuais controvérsias resultantes do presente Convênio é o da Justiça Federal, Seção de</span></div>
<div style="position:absolute;left:54.10px;top:737.40px" class="cls_005"><span class="cls_005">Minas Gerais, Subseção de  Pouso Alegre, Estado de Minas Gerais.</span></div>
</div>

<h1 style = "page-break-before: always;">
</h1>

<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="PDFs/4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_id_4cb0fb76-49ac-11e9-9d71-0cc47a792c0a_files/background6.jpg" width=595 height=842></div>
<div style="position:absolute;left:216.00px;top:82.10px" class="cls_002"><span class="cls_002">MINISTÉRIO DA EDUCAÇÃO</span></div>
<div style="position:absolute;left:184.80px;top:92.40px" class="cls_002"><span class="cls_002">Secretaria de Educação Profissional e Tecnológica</span></div>
<div style="position:absolute;left:90.97px;top:102.80px" class="cls_003"><span class="cls_003">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SUL DE MINAS GERAIS</span></div>
<div style="position:absolute;left:139.85px;top:113.10px" class="cls_002"><span class="cls_002">Avenida Vicente Simões, 1111- Nova Pouso Alegre- Pouso Alegre-MG- 37550-000</span></div>
<div style="position:absolute;left:186.38px;top:123.50px" class="cls_002"><span class="cls_002">Fone: (0XX35) 3449-6259/E-mail: </span><A HREF="mailto:estagios@ifsuldeminas.edu.br">estagios@ifsuldeminas.edu.br</A> </span></div>
<div style="position:absolute;left:54.10px;top:167.90px" class="cls_005"><span class="cls_005">E,  assim,  por  estarem  de  acordo  com  os  princípios,  finalidades  e  com  seus  termos,  os</span></div>
<div style="position:absolute;left:54.10px;top:187.70px" class="cls_005"><span class="cls_005">participes assinam este Convênio, em duas vias, juntamente com duas testemunhas.</span></div>
<div style="position:absolute;left:54.10px;top:248.10px" class="cls_005"><span class="cls_005">Pouso Alegre-MG, xxxx de xxxxxxxxxx de xxxxxxxx</span></div>
<div style="position:absolute;left:128.40px;top:330.10px" class="cls_005"><span class="cls_005">_____________________________________________________</span></div>
<div style="position:absolute;left:239.00px;top:349.90px" class="cls_004"><span class="cls_004">Empresa Concedente</span></div>
<div style="position:absolute;left:109.20px;top:431.00px" class="cls_005"><span class="cls_005">___________________________________________________________</span></div>
<div style="position:absolute;left:202.10px;top:450.90px" class="cls_004"><span class="cls_004">ALEXANDRO HENRIQUE DA SILVA</span></div>
<div style="position:absolute;left:99.80px;top:470.70px" class="cls_005"><span class="cls_005">COORD. DO DEPARTAMENTO DE APOIO AOS DISCENTES E EGRESSOS</span></div>
<div style="position:absolute;left:54.10px;top:552.70px" class="cls_005"><span class="cls_005">Testemunhas:</span></div>
<div style="position:absolute;left:54.10px;top:593.20px" class="cls_005"><span class="cls_005">1______________________________________</span></div>
<div style="position:absolute;left:54.10px;top:613.10px" class="cls_005"><span class="cls_005">Nome/CPF</span></div>
<div style="position:absolute;left:54.10px;top:674.30px" class="cls_005"><span class="cls_005">2______________________________________</span></div>
<div style="position:absolute;left:54.10px;top:694.20px" class="cls_005"><span class="cls_005">Nome/CPF</span></div>
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