<?php
    session_start();

    $test = false; // Definir como true para rodar os testes

    if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") &&  
	(isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
        header("Location: login.php");
	} else {
        include("header.php");
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
                                    <textarea class="form-control" name="inputDescricaoEmpresa" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputObjetivosAlcancados">Objetivos alcançados no estágio</label>
                                    <textarea class="form-control" name="inputObjetivosAlcancados" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputDescricaoAtividades">Descrição detalhada das atividades</label>
                                    <textarea class="form-control" name="inputDescricaoAtividades" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputAtividadesDesenvolvidas">Atividades desenvolvidas que melhor desempenhou</label>
                                    <textarea class="form-control" name="inputAtividadesDesenvolvidas" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputDificuldadesEncontradas">Dificuldades encontradas no estágio</label>
                                    <textarea class="form-control" name="inputDificuldadesEncontradas" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputParalelo">Faça um paralelo em relação ao conhecimento que você recebeu no instituto e a realidade vivenciada no local de estágio</label>
                                    <textarea class="form-control" name="inputParalelo" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputConsideracoesFinais">Considerações finais sobre o estágio</label>
                                    <textarea class="form-control" name="inputConsideracoesFinais" rows="4" maxlength="300" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 300 caracteres.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputBibliografia">Bibliografia utilizada no estágio</label>
                                    <textarea class="form-control" name="inputBibliografia" rows="4" maxlength="1024" required></textarea>
                                    <small id="maxcaracter" class="form-text text-muted">
                                        Máximo 1024 caracteres.
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
