<?php
    session_start();
    require_once('conexao.php');

    if (!((isset($_SESSION['idEstagio']) && $_SESSION['idEstagio'] != "") && (isset($_SESSION['cpnjCpf']) && $_SESSION['cnpjCpf'] != ""))) {


        //dados concedente
        $descricaoConcedente = $_POST['inputDescricaoEmpresa']; 

        //dados estagio
        $objetivos = $_POST['inputObjetivosAlcancados'];
        $atividadesQueSeraoDesenvolvidas = $_POST['inputDescricaoAtividades'];
        $atividadesQueMelhorEmpenhou = $_POST['inputAtividadesDesenvolvidas'];
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
            'objetivos="'. $objetivos . '", '.
            'atividadesQueSeraoDesenvolvidas="'. $atividadesQueSeraoDesenvolvidas . '", '.
            'atividadesQueMelhorEmpenhou="'. $atividadesQueMelhorEmpenhou . '", '.
            'dificuldadesAluno="'. $dificuldadesAluno . '", '.
            'paraleloInstitutoEstagio="'. $paraleloInstitutoEstagio . '", '.
            'consideracoesFinais="'. $consideracoesFinais . '", '.
            'bibliografia="'. $bibliografia . '"';

        if (!$conexao->query($query2) === TRUE) {
            echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
            echo "Error updating record: " . $conexao->error;
            exit;
        }


        $conexao->close();


    }
?>