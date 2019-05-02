<?php
    session_start();
    require_once('conexao.php');

    if (!((isset($_SESSION['idEstagio']) && $_SESSION['idEstagio'] != "") && (isset($_SESSION['cpnjCpf']) && $_SESSION['cnpjCpf'] != ""))) {

    // Dados do orientador
    $atividadesQueMelhorEmpenhou = $_POST['inputAtividadesDesenvolvidas'];
    $dificuldadesAluno = $_POST['inputDificuldadesEncontradas'];
    $paraleloInstitutoEstagio = $_POST['inputParalelo'];
    $consideracoesFinais = $_POST['inputConsideracoesFinais'];
    $objetivos = $_POST['inputObjetivosAlcancados'];
    $bibliografia = $_POST['inputBibliografia'];
    $atividadesQueSeraoDesenvolvidas = $_POST['inputDescricaoAtividades'];

    // Attempt insert query execution
    $sql = "INSERT INTO estagio (atividadesQueSeraoDesenvolvidas, atividadesQueMelhorEmpenhou, dificuldadesAluno, paraleloInstitutoEstagio, consideracoesFinais, objetivos, bibliografia) VALUES ('$atividadesQueSeraoDesenvolvidas', '$atividadesQueMelhorEmpenhou', '$dificuldadesAluno', '$paraleloInstitutoEstagio', '$consideracoesFinais', '$objetivos', '$bibliografia')";
    if(mysqli_query($conexao, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexao);
    }

    // Dados do concedente
    $descricaoConcedente = $_POST['inputDescricaoEmpresa'];

    // Attempt insert query execution
    $sql = "INSERT INTO concedentes (descricao) VALUES ('$descricaoConcedente')";
    if(mysqli_query($conexao, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexao);
    }
            
    }else{
         
    // Dados do Estagio
    $idEstagio = $_SESSION['idEstagio'];
    $atividadesQueMelhorEmpenhou = $_POST['inputAtividadesDesenvolvidas'];
    $dificuldadesAluno = $_POST['inputDificuldadesEncontradas'];
    $paraleloInstitutoEstagio = $_POST['inputParalelo'];
    $consideracoesFinais = $_POST['inputConsideracoesFinais'];
    $objetivos = $_POST['inputObjetivosAlcancados'];
    $bibliografia = $_POST['inputBibliografia'];
    $atividadesQueSeraoDesenvolvidas = $_POST['inputDescricaoAtividades'];

    $queryPt1 = 'UPDATE estagio SET ' .
        'atividadesQueMelhorEmpenhou="' . $atividadesQueMelhorEmpenhou . '", ' .
        'dificuldadesAluno="' . $dificuldadesAluno . '", ' .
        'paraleloInstitutoEstagio="' . $paraleloInstitutoEstagio . '", ' .
        'consideracoesFinais="' . $consideracoesFinais . '", ' .
        'objetivos="' . $objetivos . '", ' .
        'bibliografia="' . $bibliografia . '", ' .
        'atividadesQueSeraoDesenvolvidas="' . $atividadesQueSeraoDesenvolvidas . '"';

    $queryPt2 = ' WHERE idEstagio="' . $idEstagio . '"';

    $query = $queryPt1 . $queryPt2;

    if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    // Dados do Concedente
    $cnpjCpfConcedente = $_SESSION['cnpjCpf'];
    $descricaoConcedente = $_POST['inputDescricaoEmpresa'];

    $query = 'UPDATE concedentes SET descricao= "'.$descricaoConcedente.'" WHERE cnpjCpf= "'.$cnpjCpfConcedente.'"';
    
    if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    $conexao->close();
}
?>
