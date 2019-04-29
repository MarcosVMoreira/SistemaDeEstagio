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
            <form id="formCadastro" method="post" action="formularioValidar.php">
                <div class="card">
                    <div class="card-header">
                        Frequência do Estágio
                    </div>
                    <div class="card-body">
                        <div id="linhaEstagio">
                            <div class="form-row" id="linhaDiaria0"> 
                                <div class="col-sm-12 col-md-3"> 
                                    <div class="form-group">
                                        <label for="inputData">Data</label> 
                                        <input type="date" class="form-control" name="inputData" id="inputData0" required>
                                    </div> 
                                </div>
                                <div class="col-sm-12 col-md-2"> 
                                    <div class="form-group">
                                        <label for="inputCargaHoraria">Carga Horária</label>
                                        <input type="time" class="form-control" name="inputCargaHoraria" id="inputCargaHoraria0" required>
                                    </div> 
                                </div>
                                <div class="col-sm-12 col-md-3"> 
                                    <div class="form-group">
                                        <label for="inputSetor">Setor</label>
                                        <input type="text" class="form-control" name="inputSetor"  id="inputSetor0" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputAtividade">Atividade Desenvolvida</label>
                                        <input type="text" class="form-control" name="inputAtividade"  id="inputAtividade0" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4" id="linhaBotoes">
                                <button type="button" class="btn btn-success" id="botaoAdicionar">Adicionar</button>
                                <button type="button" class="btn btn-danger" id="botaoRemover">Remover</button>
                            </div>
                            <div class="col-sm-12 col-md-4 offset-md-8" id="divCargaHorariaTotal">
                                <label for="CargaHorariaTotal">Carga Horária Total</label>
                                <input type="text" class="form-control" name="CargaHorariaTotal" id="CargaHorariaTotal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 offset-md-4">
                        <button type="button" class="btn btn-success" id="botaoConfirmar">Salvar</button>
                    </div>
                </div>      
            </form>
        </div>
    </div>
</div>

<!-- JS das máscaras -->
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/formularioFrequenciaEstagio.js"></script>

<?php
    }
    include("footer.html");
?>
