<?php

session_start();
include_once("conexao.php");

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    header("Location: login.php");
} else {

    if (!((isset($_SESSION['idEstagio']) && $_SESSION['idEstagio'] != "") && (isset($_SESSION['cpnjCpf']) && $_SESSION['cnpjCpf'] != ""))) {


        //dados concedente
        $descricaoConcedente = $_POST['inputDescricaoEmpresa']; 

        //dados estagio
        $objetivosAlcancados = $_POST['inputObjetivosAlcancados'];
        $descricaoAtividade = $_POST['inputDescricaoAtividades'];
        $atividadesQueMelhorEmpenhou = $_POST['inputAtividadesMelhorDesenpenhou'];
        $dificuldadesAluno = $_POST['inputDificuldadesEncontradas'];
        $paraleloInstitutoEstagio = $_POST['inputParalelo'];
        $consideracoesFinais = $_POST['inputConsideracoesFinais'];
        $bibliografia = $_POST['inputBibliografia'];

        
        $query = 'UPDATE concedentes SET ' .
            'descricao="'. $descricaoConcedente .'" WHERE idEmpresa="' . $_SESSION['idEmpresa'] . '"';


        if (!$conexao->query($query) === TRUE) {
            echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
            echo "Error updating record: " . $conexao->error;
            exit;
        }


        $query2 = 'UPDATE estagio SET ' .
            'objetivosAlcancados="'. $objetivosAlcancados . '", '.
            'descricaoAtividade="'. $descricaoAtividade . '", '.
            'atividadesQueMelhorEmpenhou="'. $atividadesQueMelhorEmpenhou . '", '.
            'dificuldadesAluno="'. $dificuldadesAluno . '", '.
            'paraleloInstitutoEstagio="'. $paraleloInstitutoEstagio . '", '.
            'consideracoesFinais="'. $consideracoesFinais . '", '.
            'bibliografia="'. $bibliografia . '"
            WHERE idEstagio="' . $_SESSION['idEstagio'] . '"';

        if (!$conexao->query($query2) === TRUE) {
            echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
            echo "Error updating record: " . $conexao->error;
            exit;
        }


        $conexao->close();
        header("Location: home.php");

    }
}
?>