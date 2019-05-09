<?php

session_start();
include_once("conexao.php");

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    header("Location: login.php");
} else {

    include("header.php");

    $flag = 0;
    $orientador = "";
    $supervisor = "";
    $concedentes = "";
    $flagGlobal = 0;

    // Concedente
    $query = "SELECT * FROM concedentes WHERE idEmpresa='" . $_SESSION['idEmpresa'] . "'";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();

        if (empty($resultado)) {
            $concedentes = "Por favor preencher os dados do Concedente. <br />\n";
            $flagGlobal = 1;
        } else {
            $concedentes = "Por favor preencher os seguintes dados do Concedente: ";
            if ($resultado["nome"] != "") { } else {
                $concedentes = $concedentes . "nome";
                $flag = 1;
            }
            if ($flag == 1) {
                $concedentes = $concedentes . ". <br />\n";
                $flagGlobal = 1;
            } else {
                $concedentes = "";
            }
            $flag = 0;
        }
    }

    // Estágio
    $query = "SELECT * FROM estagio WHERE idEstagio='" . $_SESSION['idEstagio'] . "'";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();

        if (empty($resultado)) {
            $estagio = "Por favor preencher os dados do estágio. <br />\n";
            $flagGlobal = 1;
        } else {
            $estagio = "Por favor preencher os seguintes dados do Estagio: ";
            if ($resultado["dataInicial"] != "") { } else {
                if ($flag == 1) $estagio = $estagio . ", data de início";
                else $estagio = $estagio . "data de início";
                $flag = 1;
            }
            if ($resultado["dataFinal"] != "") { } else {
                if ($flag == 1) $estagio = $estagio . ", data de término";
                else $estagio = $estagio . "data de término";
                $flag = 1;
            }
            if ($flag == 1) {
                $estagio = $estagio . ". <br />\n";
                $flagGlobal = 1;
            } else {
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
                Ops, encontramos um problema!<br />
            </h5>
            Alguns dados estão faltando para que seja possível gerar o PDF da frequência de estágio. Preencha os dados listados abaixo: <br />
            <?php
                if ($flagGlobal == 1) {
                    echo $orientador;
                    echo $supervisor;
                    echo $concedentes;
                    echo $estagio;
                    ?>
            <a href="formulario.php"><button type="button" class="btn btn-primary mt-5">Ir para o formulário</button></a>
            <?php
            } else {
                ?>
            <script>
                window.open('PDFs/frequenciaEstagio.php', '_blank');

            </script>
            <script>
                window.open('home.php', '_self');

            </script>
            <?php
            } ?>
        </div>
    </div>
</div>

<?php
}
include("footer.html");
?>
