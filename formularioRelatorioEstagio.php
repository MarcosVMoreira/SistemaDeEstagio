<?php
    session_start();

    $test = false; // Definir como true para rodar os testes

    if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") &&  
	(isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
        header("Location: login.php");
	} else {
        include("header.php");
        include_once("conexao.php");


        $query = "SELECT * FROM concedentes WHERE idEmpresa='".$_SESSION['idEmpresa']."'";
        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: login.php");
        } else {
                $descricao = $resultado["descricao"];
                if($descricao==NULL){
                    $descricao = "";
                }
            }
        }







        $query = "SELECT * FROM estagio WHERE idEstagio='".$_SESSION['idEstagio']."'";
        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: login.php");
        } else {
                $objetivosAlcansados = $resultado["objetivosAlcancados"];
                if($objetivosAlcansados==NULL){
                    $objetivosAlcansados = "";
                }
                $descricaoAtividade = $resultado["descricaoAtividade"];
                if($descricaoAtividade==NULL){
                    $descricaoAtividade = "";
                }
                $atividadesQueMelhorEmpenhou = $resultado["atividadesQueMelhorEmpenhou"];
                if($atividadesQueMelhorEmpenhou==NULL){
                    $atividadesQueMelhorEmpenhou = "";
                }
                $dificuldadesAluno = $resultado["dificuldadesAluno"];
                if($dificuldadesAluno==NULL){
                    $dificuldadesAluno = "";
                }
                $paraleloInstitutoEstagio = $resultado["paraleloInstitutoEstagio"];
                if($paraleloInstitutoEstagio==NULL){
                    $paraleloInstitutoEstagio = "";
                }
                $consideracoesFinais = $resultado["consideracoesFinais"];
                if($consideracoesFinais==NULL){
                    $consideracoesFinais = "";
                }
                $bibliografia = $resultado["bibliografia"];
                if($bibliografia==NULL){
                    $bibliografia = "";
                }
            }
        }
    
    /* close connection */
    $conexao->close();
?>
     
<!-- CSS do Formulário -->
<link rel="stylesheet" href="css/formulario.css">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <form id="formCadastro" method="post" action="formularioRelatorioEstagioValidar.php">
                <div class="card">
                    <div class="card-header">
                        Relatório de Estágio
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputDescricaoEmpresa">Descrição da empresa</label>
                                    <textarea class="form-control" name="inputDescricaoEmpresa" rows="4" maxlength="3000" required><?php echo $descricao; ?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputObjetivosAlcancados">Objetivos alcançados no estágio</label>
                                    <textarea class="form-control" name="inputObjetivosAlcancados" rows="4" maxlength="3000" required><?php echo $objetivosAlcansados;?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputDescricaoAtividades">Descrição detalhada das atividades</label>
                                    <textarea  class="form-control" name="inputDescricaoAtividades" rows="4" maxlength="3000" required><?php echo $descricaoAtividade ?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputAtividadesMelhorDesenpenhou">Atividades desenvolvidas que melhor desempenhou</label>
                                    <textarea class="form-control" name="inputAtividadesMelhorDesenpenhou" rows="4" maxlength="3000" required><?php echo $atividadesQueMelhorEmpenhou;
                                    ?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputDificuldadesEncontradas">Dificuldades encontradas no estágio</label>
                                    <textarea class="form-control" name="inputDificuldadesEncontradas" rows="4" maxlength="3000" required><?php echo $dificuldadesAluno;?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputParalelo">Faça um paralelo em relação ao conhecimento que você recebeu no instituto e a realidade vivenciada no local de estágio</label>
                                    <textarea class="form-control" name="inputParalelo" rows="4" maxlength="3000" required><?php echo $paraleloInstitutoEstagio;?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputConsideracoesFinais">Considerações finais sobre o estágio</label>
                                    <textarea class="form-control" name="inputConsideracoesFinais" rows="4" maxlength="3000" required><?php echo $consideracoesFinais;?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 3000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputBibliografia">Bibliografia utilizada no estágio</label>
                                    <textarea class="form-control" name="inputBibliografia" rows="4" maxlength="1000" required><?php echo $bibliografia;?></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 1000 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 offset-md-4">
                        <button class="btn btn-success" type="submit" id="botaoConfirmar">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JS das máscaras -->
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/formularioRelatorioEstagio.js"></script>


<?php
    }
    include("footer.html");
?>
