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
                Colete os dados da concedente!<br />
            </h5>
            Faça o download do arquivo abaixo, imprima e leve-o até a concendete para coletar os dados da mesma.
            Após o preenchimento, utilize esse documento para preencher os dados no sistema de estágio.<br />
            <button type="button" class="btn btn-primary mt-5" onClick="imprimir();">Imprimir documento</button>

            <script>
                function imprimir() {
                    window.open('reqEstagio.pdf', '_blank');
                }
            </script>

        </div>
    </div>
</div>

<?php
}
include("footer.html");
?>
