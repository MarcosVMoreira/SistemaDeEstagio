<?php

session_start();
include_once("conexao.php");

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    header("Location: login.php");
} else {

    include("header.php");

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mt-3">
            <h5 id="nome">
                Colete os dados do plano de estágio!<br />
            </h5>
            Faça o download do arquivo abaixo, imprima e utilize-o como rascunho para coletar os dados pedidos
            no sistema de estágio.
            Após o preenchimento, utilize os dados desse documento para preencher o sistema.<br />
            <button type="button" class="btn btn-primary mt-5" onClick="imprimir();">Imprimir documento</button>

            <script>
                function imprimir() {
                    window.open('PDFS/Documentos/planoEstagio.pdf', '_blank');
                }
            </script>

        </div>
    </div>
</div>

<?php
}
include("footer.html");
?>
