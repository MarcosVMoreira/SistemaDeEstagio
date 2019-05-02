<?php
    session_start();
    include_once("conexao.php");
    $test = true; // Definir como true para rodar os testes do main.js


    if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") &&  
	(isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
        header("Location: login.php");
	} else {
        include("header.php");
        $flag = 0;   
        $orientador = "";
        $supervisor = "";
        $concedentes = "";
        $flagGlobal = 0;
        if ((isset($_SESSION['idOrientador']) && $_SESSION['idOrientador'] != "") ) {
            $query = "SELECT * FROM orientador WHERE idOrientador=".$_SESSION['idOrientador']."";

            if ($result = $conexao->query($query)) {
                $resultado = $result->fetch_assoc();
                
                if (empty($resultado)) {
                } else {
                    if ($resultado["nome"]!= ""){
                    }else{
                        $flag=1;
                    }
                    if ($resultado["telefone"]!= ""){
                    }else{
                        $flag=1;
                    }
                    if ($resultado["email"]!= ""){
                    }else{
                        $flag=1;
                    }
                    if($flag==1){
                        $orientador = "Por favor preencher dados do Orientador <br />\n";
                        $flagGlobal = 1;
                    }else{
                        $orientador = "";
                    }
                    $flag=0;
                }
            }
        }
        

        $query = "SELECT * FROM concedentes WHERE cnpjCpf=".$_SESSION['cnpjCpfConcedente']."";
        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();
            
            if (empty($resultado)) {
            } else {
                if ($resultado["nome"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["telefone"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["email"]!= ""){
                }else{
                    $flag=1;
                }
                if($flag==1){
                    $concedentes = "Por favor preencher dados do Concedente <br />\n";
                    $flagGlobal = 1;
                }
                else{
                    $concedentes = "";
                }
                $flag = 0;
            }
        }

        $query = "SELECT * FROM supervisor WHERE cpf=".$_SESSION['cpfSupervisor']."";
        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();
            
            if (empty($resultado)) {
            } else {
                if ($resultado["nome"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["telefone"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["email"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["cpf"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["cursoFormacao"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["possuiExperiencia"]!= ""){
                }else{
                    $flag=1;
                }
                if($flag==1){
                    $supervisor = "Por favor preencher dados do Supervisor <br />\n";
                    $flagGlobal = 1;
                }
                else{
                    $supervisor = "";
                }
                $flag = 0;
               
            }
        }


        $query = "SELECT * FROM estagio WHERE idEstagio=".$_SESSION['idEstagio']."";
        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();
            
            if (empty($resultado)) {
            } else {
                if ($resultado["atividadesQueSeraoDesenvolvidas"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["areasConhecimento"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["objetivos"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["dataInicial"]!= ""){
                }else{
                    $flag=1;
                }
                if ($resultado["dataFinal"]!= ""){
                }else{
                    $flag=1;
                }
                if($flag==1){
                    $estagio = "Por favor preencher dados do Estagio <br />\n";
                    $flagGlobal = 1;
                }
                else{
                    $estagio = "";
                }
                $flag = 0;
               
            }
        }
        
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mt-3">
            <h5 id="nome">
            <?php
            if($flagGlobal == 1){
                echo $orientador;
                echo $supervisor;
                echo $concedentes;
                echo $estagio;
                ?>
                <a href="formulario.php">Formulario</a>
                <?php
            }else{
                ?><a href="PDFs/planoEstagio.php">Plano de Estágio</a>
                <?php
            }?>
            </h5>
        </div>
    </div>
</div>

<?php
    }
    include("footer.html");
?>
