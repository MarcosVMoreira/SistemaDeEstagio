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
                

        $query = "SELECT * FROM concedentes WHERE cnpjCpf=".$_SESSION['cnpjCpfConcedente']."";
        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();
            
            if (empty($resultado)) {
            } else {
                $concedentes = "Por favor preencher dados do Concedente:";
                if ($resultado["nome"]!= ""){
                }else{
                    $concedentes = $concedentes . " nome";
                    $flag=1;
                }
                if ($resultado["telefone"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "telefone";
                    $flag=1;
                }
                if ($resultado["email"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "email";
                    $flag=1;
                }
                if ($resultado["cnpjCpf"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "CNPJ / CPF";
                    $flag=1;
                }
                if ($resultado["endereco"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "endereço";
                    $flag=1;
                }
                if ($resultado["cep"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "CEP";
                    $flag=1;
                }
                if ($resultado["representanteEmpresaNome"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "Nome do representante";
                    $flag=1;
                }
                if ($resultado["responsavelTceNome"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "Nome do responsável do termo de compromisso";
                    $flag=1;
                }
                if ($resultado["representanteEmpresaCargo"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "Cargo do representante da empresa";
                    $flag=1;
                }
                if ($resultado["responsavelTceCargo"]!= ""){
                }else{
                    if($flag==1)$concedentes = $concedentes . ", ";
                    $concedentes = $concedentes . "Cargo do responsável do termo de compromisso";
                    $flag=1;
                }
                if($flag==1){
                    $concedentes = $concedentes . ". <br />\n";
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
                $supervisor = "Por favor preencher dados do Supervisor:";
                if ($resultado["nome"]!= ""){
                }else{
                    $supervisor = $supervisor . " nome";
                    $flag=1;
                }
                if ($resultado["cargo"]!= ""){
                }else{
                    if($flag==1) $supervisor = $supervisor . ", ";
                    $supervisor = $supervisor . "cargo";
                    $flag=1;
                }
                if($flag==1){
                    $supervisor = $supervisor . ".<br />\n";
                    $flagGlobal = 1;
                }
                else{
                    $supervisor = "";
                }
                $flag = 0;
               
            }
        }
        
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mt-3">
        <h5 id="nome">
                    Ops, encontramos um problema!<br />
                </h5>
                Alguns dados estão faltando para que seja possível gerar o PDF do plano de estágio. Preencha os dados listados abaixo: <br />
            <?php
            if($flagGlobal == 1){
                echo $orientador;
                echo $supervisor;
                echo $concedentes;
                ?>
                <a href="formulario.php"><button type="button" class="btn btn-primary mt-5">Ir para o formulário</button></a>
                <?php
            }else{
                ?>  <script>
                        window.open('PDFs/termoNaoObrigatorio.php', '_blank');
                    </script>
                    <script>
                        window.open('home.php', '_self');
                    </script>
                <?php
            }?>
        </div>
    </div>
</div>

<?php
    }
    include("footer.html");
?>
