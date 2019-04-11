<?php
    include("header.php");

    $test = false; // Definir como true para rodar os testes
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
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <button type="button" class="btn btn-success" id="botaoAdicionar">Adicionar</button>
                                <button type="button" class="btn btn-danger" id="botaoRemover">Remover</button>
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
    include("footer.html");
?>
