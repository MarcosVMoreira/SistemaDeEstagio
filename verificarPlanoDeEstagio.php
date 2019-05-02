<?php
    session_start();

    $test = true; // Definir como true para rodar os testes do main.js

    if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") &&  
	(isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
        header("Location: login.php");
	} else {
        include("header.php");
        $flag = 0;   
        if ((isset($_SESSION['nomeOrientador']) && $_SESSION['nomeOrientador'] != "")){
        }else{
            $nomeOrientador =  "Nome do orientador não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['emailOrientador']) && $_SESSION['emailOrientador'] != "")){
        }else{
            $emailOrientador = "E-mail do orientador não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['telefoneOrientador']) && $_SESSION['telefoneOrientador'] != "")){
        }else{
            $telefoneOrientador = "Telefone do orientador não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['nomeEmpresa']) && $_SESSION['nomeEmpresa'] != "")){
        }else{
            $nomeEmpresa = "Nome da empresa não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['emailEmpresa']) && $_SESSION['emailEmpresa'] != "")){
        }else{
            $emailEmpresa = "E-mail da empresa não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['telefoneEmpresa']) && $_SESSION['telefoneEmpresa'] != "")){
        }else{
            $telefoneEmpresa = "Telefone da empresa não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['nomeSupervisor']) && $_SESSION['nomeSupervisor'] != "")){
        }else{
            $nomeSupervisor = "Nome do supervisor não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['cpfSupervisor']) && $_SESSION['cpfSupervisor'] != "")){
        }else{
            $cpfSupervisor = "CPF do supervisor não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['cursoFormacao']) && $_SESSION['cursoFormacao'] != "")){
        }else{
            $cursoFormacao = "Curso de formação do supervisor não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['possuiExpreiencia']) && $_SESSION['possuiExperiencia'] != "")){
        }else{
            $possuiExperiencia = "Experiência do supervisor não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['telefoneSupervisor']) && $_SESSION['telefoneSupervisor'] != "")){
        }else{
            $telefoneSupervisor = "Telefone do supervisor não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['emailSupervisor']) && $_SESSION['emailSupervisor'] != "")){
        }else{
            $emailSupervisor = "E-mail do supervisor não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['atividadesQueSeraoDesenvolvidas']) && $_SESSION['atividadesQueSeraoDesenvolvidas'] != "")){
        }else{
            $atividadesQueSeraoDesenvolvidas = "Atividades que serão desenvolvidas não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['areaConhecimento']) && $_SESSION['areasConhecimento'] != "")){
        }else{
            $areasConhecimento = "Área de conhecimento não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['objetivos']) && $_SESSION['objetivos'] != "")){
        }else{
            $objetivos = "Objetivos com o estágio não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['dataInicial']) && $_SESSION['dataInicial'] != "")){
        }else{
            $dataInicial = "Data inicial do estágio não preenchido.<br />\n";
            $flag = 1;
        }
        if ((isset($_SESSION['datafinal']) && $_SESSION['datafinal'] != "")){
        }else{
            $datafinal = "Data final do estágio não preenchido.<br />\n";
            $flag = 1;
        }

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mt-3">
            <h5 id="nome"><?php 
            echo($nomeOrientador);
            echo($emailOrientador);
            echo($telefoneOrientador);
            echo($nomeEmpresa);
            echo($emailEmpresa);
            echo($telefoneEmpresa);
            echo($nomeSupervisor);
            echo($cpfSupervisor);
            echo($cursoFormacao);
            echo($possuiExperiencia);
            echo($telefoneSupervisor);
            echo($emailSupervisor);
            echo($atividadesQueSeraoDesenvolvidas);
            echo($areasConhecimento);
            echo($objetivos);
            echo($dataInicial);
            echo($datafinal);
            if($flag==0){
                ?>
                <a href="PDFs/planoEstagio.php">Clique aqui para imprimir</a>
                <?php
            }else{
                ?>
                <a href="formulario.php">Clique aqui para Preencher</a>
                <?php
            }
            ?></h5>
        </div>
    </div>
</div>

<?php
    }
    include("footer.html");
?>
