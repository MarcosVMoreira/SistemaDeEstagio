<?php

session_start();

$dia = $_POST['dia'];

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    echo "Erro. Faça login.";
} else {

    require_once "../conexao.php";

    $query = "SELECT segunda, terca, quarta, quinta, sexta, sabado FROM estagio WHERE idEstagio='" . $_SESSION['idEstagio'] . "'";

    if($result = $conexao->query($query)) {
        $linha = mysqli_fetch_assoc($result);
        echo $linha[$dia];
    }
}
?>