<?php
    session_start();

    require_once('conexao.php');


    // Dados do aluno
    $raAluno = $_SESSION['ra'];
    echo "valor do qtd linhas: ".$_SESSION['qtdLinhas'];
    $qtdLinhas = $_SESSION['qtdLinhas'];
    echo $qtdLinhas;

    for($i = 0; $i < $qtdLinhas; $i++){
        $data = $_POST['inputData'+ i];
        $cargaHoraria = $_POST['inputCargaHoraria' +i];
        $setor = $_POST['inputSetor' +i];
        $atividade = $_POST['inputAtividade' +i];
    }
    
    $queryPt1 = 'UPDATE frequenciaestagio SET ' .
        'data="' . $nomeAluno . '", ' .
        'cargaHoraria="' . $cargaHoraria . '", ' .
        'setor="' . $setor . '", ' .
        'atividade="' . $atividade . '"';

    if($setor != '') {
        $queryPt1 = $queryPt1 . ', setor="' . $setor . '"';
    }

    $queryPt2 = ' WHERE ra="' . $raAluno . '"';

    $query = $queryPt1 . $queryPt2;

    if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    $conexao->close();
?>
