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
    $query = "SELECT * FROM concedentes WHERE cnpjCpf=" . $_SESSION['cnpjCpfConcedente'] . "";
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
            if ($resultado["endereco"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "endereço";
                $flag = 1;
            }
            if ($resultado["cep"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "cep";
                $flag = 1;
            }
            if ($resultado["bairro"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "bairro";
                $flag = 1;
            }
            if ($resultado["cidade"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "cidade";
                $flag = 1;
            }
            if ($resultado["telefone"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "telefone";
                $flag = 1;
            }
            if ($resultado["representanteEmpresaNome"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "nome do representante";
                $flag = 1;
            }
            if ($resultado["representanteEmpresaCargo"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "cargo do representante da empresa";
                $flag = 1;
            }
            if ($resultado["responsavelTceNome"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "responsável pela assinatura do termo de compromisso";
                $flag = 1;
            }
            if ($resultado["responsavelTceCargo"] == "") {
                if ($flag == 1) $concedentes = $concedentes . ", ";
                $concedentes = $concedentes . "cargo do responsável pela assinatura do termo de compromisso";
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

    // Supervisor
    $query = "SELECT * FROM supervisor WHERE cpf=" . $_SESSION['cpfSupervisor'] . "";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();

        if (empty($resultado)) {
            $concedentes = "Por favor preencher os dados do supervisor de estágio. <br />\n";
            $flagGlobal = 1;
        } else {
            $supervisor = "Por favor preencher os seguintes dados do supervisor: ";
            if ($resultado["nome"] == "") {
                $supervisor = $supervisor . "nome";
                $flag = 1;
            }
            if ($resultado["cargo"] == "") {
                if ($flag == 1) $supervisor = $supervisor . ", ";
                $supervisor = $supervisor . "cargo";
                $flag = 1;
            }
            if ($flag == 1) {
                $supervisor = $supervisor . ". <br />\n";
                $flagGlobal = 1;
            } else {
                $supervisor = "";
            }
            $flag = 0;
        }
    }

    // Orientador
    if ((isset($_SESSION['idOrientador']) && $_SESSION['idOrientador'] != "")) {
        $query = "SELECT * FROM orientador WHERE idOrientador=" . $_SESSION['idOrientador'] . "";

        if ($result = $conexao->query($query)) {
            $resultado = $result->fetch_assoc();

            if (empty($resultado)) { } else {
                $orientador = "Por favor preencher os seguintes dados do Orientador: ";

                if ($resultado["nome"] == "") {
                    $flag = 1;
                    $orientador = $orientador . "nome";
                }
                if ($flag == 1) {
                    $orientador = $orientador . ".<br />\n";
                    $flagGlobal = 1;
                } else {
                    $orientador = "";
                }
                $flag = 0;
            }
        }
    } else {
        $concedentes = "Por favor preencher os dados do orientador de estágio. <br />\n";
        $flagGlobal = 1;
    }

    // Estágio
    $query = "SELECT * FROM estagio WHERE idEstagio=" . $_SESSION['idEstagio'] . "";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();

        if (empty($resultado)) { } else {
            $estagio = "Por favor preencher os seguintes dados do Estagio: ";
            if ($resultado["atividadesQueSeraoDesenvolvidas"] != "") { } else {
                $estagio = $estagio . "atividades a serem desenvolvidas";
                $flag = 1;
            }
            if ($resultado["areasConhecimento"] != "") { } else {
                if ($flag == 1) $estagio = $estagio . ", áreas de conhecimento envolvidas no estágio";
                else $estagio = $estagio . "áreas de conhecimento envolvidas no estágio";
                $flag = 1;
            }
            if ($resultado["objetivos"] != "") { } else {
                if ($flag == 1) $estagio = $estagio . ", objetivos a serem alcançados no estágio";
                else $estagio = $estagio . "objetivos a serem alcançados no estágio";
                $flag = 1;
            }
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
                Alguns dados estão faltando para que seja possível gerar o PDF do plano de estágio. Preencha os dados listados abaixo: <br />
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
                        window.open('PDFs/planoEstagio.php', '_blank');
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